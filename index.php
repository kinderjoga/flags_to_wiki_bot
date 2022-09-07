<?php

$autoloadPath1 = __DIR__ . '/../autoload.php';
$autoloadPath2 = __DIR__ . '/vendor/autoload.php';

if (file_exists($autoloadPath1)) {
    require_once $autoloadPath1;
} else {
    require_once $autoloadPath2;
}

use App\Emoji;
use App\Countries;

header('Content-Type: text/html; charset=utf-8');
$bot_state = '';
$site_dir = dirname(dirname(__FILE__)) . '/';
$bot_token = 'ТОКЕН'; // enter your bot token
$data = file_get_contents('php://input');
$data = json_decode($data, true);
file_put_contents(__DIR__ . '/message.txt', print_r($data, true));

if (!empty($data['message']['text'])) {
    $chat_id = $data['message']['from']['id'];
    $user_name = $data['message']['from']['username'];
    $first_name = $data['message']['from']['first_name'];
    $last_name = $data['message']['from']['last_name'];
    $text = trim($data['message']['text']);
    $text_array = explode(" ", $text);
    $bot_state = getBotState($chat_id);

    if (substr($bot_state, 0, 8) == '/country') {
        $text_return = getInfo($text);
        messageToTelegram($bot_token, $chat_id, $text_return);
        setBotState($chat_id, '');
    } else {
        if ($text == '/help' | !preg_match('(/help|/all|/about|/country)', $text)) {
            $text_return = <<<TEXT
            Привет, {$first_name} {$last_name}, вот команды, что я понимаю: 
            /help - список команд
            /about - о нас
            /country - информация о стране
            /all - перечень стран, которые я знаю
            TEXT;

            messageToTelegram($bot_token, $chat_id, $text_return);
            setBotState($chat_id, '/help');
        } elseif ($text == '/about') {
            $text_return = <<<TEXT
            country_name_to_wiki_bot:
            Я пример самого простого бота для телеграм, написанного на простом PHP.
            Мой код можно скачивать, дополнять, исправлять. Код доступен на git-hub по ссылке:
            https://github.com/kinderjoga/flags_to_wiki_bot.git
            TEXT;

            messageToTelegram($bot_token, $chat_id, $text_return);
            setBotState($chat_id, '/about');
        } elseif ($text == '/country') {
            $text_return = "$first_name $last_name, для для получения информации введите название страны и нажмите отправить.";
            messageToTelegram($bot_token, $chat_id, $text_return);
            setBotState($chat_id, '/country');
        } elseif ($text == '/all') {
            $all_countrys = getAllCountry();
            $text_return = "Вот страны, оторые я знаю: \n{$all_countrys}";
            messageToTelegram($bot_token, $chat_id, $text_return);
            setBotState($chat_id, '/all');
        }
    }
}

function messageToTelegram($bot_token, $chat_id, $text, $reply_markup = ''): void
{
    $ch = curl_init();
    $ch_post = [
        CURLOPT_URL => 'https://api.telegram.org/bot' . $bot_token . '/sendMessage',
        CURLOPT_POST => TRUE,
        CURLOPT_RETURNTRANSFER => TRUE,
        CURLOPT_TIMEOUT => 10,
        CURLOPT_POSTFIELDS => [
            'chat_id' => $chat_id,
            'parse_mode' => 'HTML',
            'text' => $text,
            'reply_markup' => $reply_markup,
        ]
    ];

    curl_setopt_array($ch, $ch_post);
    curl_exec($ch);
}

function setBotState($chat_id, $data): void
{
    file_put_contents(__DIR__ . '/users/' . $chat_id . '.txt', $data);
}

function getBotState($chat_id)
{
    if (file_exists(__DIR__ . '/users/' . $chat_id . '.txt')) {
        $data = file_get_contents(__DIR__ . '/users/' . $chat_id . '.txt');
        return $data;
    } else {
        return '';
    }
}

function getInfo(string $country): string
{
    try {
        $countryEnum = Countries::from($country);
        $countryCode = $countryEnum->name;
        $page = str_replace(' ', '_', $countryEnum->value);
        $url = "https://ru.wikipedia.org/wiki/" . $page;
        $emoji = new Emoji;
        $text = "Флаг страны {$emoji->countryFlag($countryCode)}\n$url";
    } catch (\Throwable) {
        $otherCountry = getOtherCountry($country);
        $text = <<<TEXT
        Страна с название \"{$country}\" не найдена в списке.
    Возможно вы имели ввиду одну из следующих стран:
    {$otherCountry}
    Попробуйте снова!";
    TEXT;
    }

    return $text;
}

function getAllCountry(): string
{
    $result = '';
    foreach (Countries::cases() as $value) {
        $result .= "{$value->value}\n";
    }
    return $result;
}

function getOtherCountry($wrongCountryName): string
{
    $result = '';
    foreach (Countries::cases() as $value) {
        similar_text($value->value, $wrongCountryName, $pers);
        if ((int)$pers > 60) {
            $result .= "{$value->value}\n";
        }
    }

    return $result;
}
