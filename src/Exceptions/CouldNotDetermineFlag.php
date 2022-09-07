<?php

namespace App\Exceptions;

use Exception;

class CouldNotDetermineFlag extends Exception
{
    public static function countryCodeLenghtIsWrong(string $invalidCountryCode): self
    {
        return new static("`{$invalidCountryCode}` неправильный код страны. Правильный код страны должен содержать два символа.");
    }
}
