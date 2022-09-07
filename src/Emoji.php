<?php

namespace App;

use App\Exceptions\CouldNotDetermineFlag;

/**
 * Emoji class.
 *
 * @link https://unicode.org/Public/emoji/14.0/emoji-test.txt
 * @version v14.0
 * loaded at: 2021-09-27 16:43:12
 *
 * ##### Emoji subgroup: COUNTRY-FLAG #####
 * @method static string flagsForFlagAscensionIsland()
 * @method static string flagsForFlagAndorra()
 * @method static string flagsForFlagUnitedArabEmirates()
 * @method static string flagsForFlagAfghanistan()
 * @method static string flagsForFlagAntiguaAndBarbuda()
 * @method static string flagsForFlagAnguilla()
 * @method static string flagsForFlagAlbania()
 * @method static string flagsForFlagArmenia()
 * @method static string flagsForFlagAngola()
 * @method static string flagsForFlagAntarctica()
 * @method static string flagsForFlagArgentina()
 * @method static string flagsForFlagAmericanSamoa()
 * @method static string flagsForFlagAustria()
 * @method static string flagsForFlagAustralia()
 * @method static string flagsForFlagAruba()
 * @method static string flagsForFlagAlandIslands()
 * @method static string flagsForFlagAzerbaijan()
 * @method static string flagsForFlagBosniaAndHerzegovina()
 * @method static string flagsForFlagBarbados()
 * @method static string flagsForFlagBangladesh()
 * @method static string flagsForFlagBelgium()
 * @method static string flagsForFlagBurkinaFaso()
 * @method static string flagsForFlagBulgaria()
 * @method static string flagsForFlagBahrain()
 * @method static string flagsForFlagBurundi()
 * @method static string flagsForFlagBenin()
 * @method static string flagsForFlagStBarthelemy()
 * @method static string flagsForFlagBermuda()
 * @method static string flagsForFlagBrunei()
 * @method static string flagsForFlagBolivia()
 * @method static string flagsForFlagCaribbeanNetherlands()
 * @method static string flagsForFlagBrazil()
 * @method static string flagsForFlagBahamas()
 * @method static string flagsForFlagBhutan()
 * @method static string flagsForFlagBouvetIsland()
 * @method static string flagsForFlagBotswana()
 * @method static string flagsForFlagBelarus()
 * @method static string flagsForFlagBelize()
 * @method static string flagsForFlagCanada()
 * @method static string flagsForFlagCocosKeelingIslands()
 * @method static string flagsForFlagCongoKinshasa()
 * @method static string flagsForFlagCentralAfricanRepublic()
 * @method static string flagsForFlagCongoBrazzaville()
 * @method static string flagsForFlagSwitzerland()
 * @method static string flagsForFlagCoteDIvoire()
 * @method static string flagsForFlagCookIslands()
 * @method static string flagsForFlagChile()
 * @method static string flagsForFlagCameroon()
 * @method static string flagsForFlagChina()
 * @method static string flagsForFlagColombia()
 * @method static string flagsForFlagClippertonIsland()
 * @method static string flagsForFlagCostaRica()
 * @method static string flagsForFlagCuba()
 * @method static string flagsForFlagCapeVerde()
 * @method static string flagsForFlagCuracao()
 * @method static string flagsForFlagChristmasIsland()
 * @method static string flagsForFlagCyprus()
 * @method static string flagsForFlagCzechia()
 * @method static string flagsForFlagGermany()
 * @method static string flagsForFlagDiegoGarcia()
 * @method static string flagsForFlagDjibouti()
 * @method static string flagsForFlagDenmark()
 * @method static string flagsForFlagDominica()
 * @method static string flagsForFlagDominicanRepublic()
 * @method static string flagsForFlagAlgeria()
 * @method static string flagsForFlagCeutaAndMelilla()
 * @method static string flagsForFlagEcuador()
 * @method static string flagsForFlagEstonia()
 * @method static string flagsForFlagEgypt()
 * @method static string flagsForFlagWesternSahara()
 * @method static string flagsForFlagEritrea()
 * @method static string flagsForFlagSpain()
 * @method static string flagsForFlagEthiopia()
 * @method static string flagsForFlagEuropeanUnion()
 * @method static string flagsForFlagFinland()
 * @method static string flagsForFlagFiji()
 * @method static string flagsForFlagFalklandIslands()
 * @method static string flagsForFlagMicronesia()
 * @method static string flagsForFlagFaroeIslands()
 * @method static string flagsForFlagFrance()
 * @method static string flagsForFlagGabon()
 * @method static string flagsForFlagUnitedKingdom()
 * @method static string flagsForFlagGrenada()
 * @method static string flagsForFlagGeorgia()
 * @method static string flagsForFlagFrenchGuiana()
 * @method static string flagsForFlagGuernsey()
 * @method static string flagsForFlagGhana()
 * @method static string flagsForFlagGibraltar()
 * @method static string flagsForFlagGreenland()
 * @method static string flagsForFlagGambia()
 * @method static string flagsForFlagGuinea()
 * @method static string flagsForFlagGuadeloupe()
 * @method static string flagsForFlagEquatorialGuinea()
 * @method static string flagsForFlagGreece()
 * @method static string flagsForFlagSouthGeorgiaAndSouthSandwichIslands()
 * @method static string flagsForFlagGuatemala()
 * @method static string flagsForFlagGuam()
 * @method static string flagsForFlagGuineaBissau()
 * @method static string flagsForFlagGuyana()
 * @method static string flagsForFlagHongKongSarChina()
 * @method static string flagsForFlagHeardAndMcdonaldIslands()
 * @method static string flagsForFlagHonduras()
 * @method static string flagsForFlagCroatia()
 * @method static string flagsForFlagHaiti()
 * @method static string flagsForFlagHungary()
 * @method static string flagsForFlagCanaryIslands()
 * @method static string flagsForFlagIndonesia()
 * @method static string flagsForFlagIreland()
 * @method static string flagsForFlagIsrael()
 * @method static string flagsForFlagIsleOfMan()
 * @method static string flagsForFlagIndia()
 * @method static string flagsForFlagBritishIndianOceanTerritory()
 * @method static string flagsForFlagIraq()
 * @method static string flagsForFlagIran()
 * @method static string flagsForFlagIceland()
 * @method static string flagsForFlagItaly()
 * @method static string flagsForFlagJersey()
 * @method static string flagsForFlagJamaica()
 * @method static string flagsForFlagJordan()
 * @method static string flagsForFlagJapan()
 * @method static string flagsForFlagKenya()
 * @method static string flagsForFlagKyrgyzstan()
 * @method static string flagsForFlagCambodia()
 * @method static string flagsForFlagKiribati()
 * @method static string flagsForFlagComoros()
 * @method static string flagsForFlagStKittsAndNevis()
 * @method static string flagsForFlagNorthKorea()
 * @method static string flagsForFlagSouthKorea()
 * @method static string flagsForFlagKuwait()
 * @method static string flagsForFlagCaymanIslands()
 * @method static string flagsForFlagKazakhstan()
 * @method static string flagsForFlagLaos()
 * @method static string flagsForFlagLebanon()
 * @method static string flagsForFlagStLucia()
 * @method static string flagsForFlagLiechtenstein()
 * @method static string flagsForFlagSriLanka()
 * @method static string flagsForFlagLiberia()
 * @method static string flagsForFlagLesotho()
 * @method static string flagsForFlagLithuania()
 * @method static string flagsForFlagLuxembourg()
 * @method static string flagsForFlagLatvia()
 * @method static string flagsForFlagLibya()
 * @method static string flagsForFlagMorocco()
 * @method static string flagsForFlagMonaco()
 * @method static string flagsForFlagMoldova()
 * @method static string flagsForFlagMontenegro()
 * @method static string flagsForFlagStMartin()
 * @method static string flagsForFlagMadagascar()
 * @method static string flagsForFlagMarshallIslands()
 * @method static string flagsForFlagNorthMacedonia()
 * @method static string flagsForFlagMali()
 * @method static string flagsForFlagMyanmarBurma()
 * @method static string flagsForFlagMongolia()
 * @method static string flagsForFlagMacaoSarChina()
 * @method static string flagsForFlagNorthernMarianaIslands()
 * @method static string flagsForFlagMartinique()
 * @method static string flagsForFlagMauritania()
 * @method static string flagsForFlagMontserrat()
 * @method static string flagsForFlagMalta()
 * @method static string flagsForFlagMauritius()
 * @method static string flagsForFlagMaldives()
 * @method static string flagsForFlagMalawi()
 * @method static string flagsForFlagMexico()
 * @method static string flagsForFlagMalaysia()
 * @method static string flagsForFlagMozambique()
 * @method static string flagsForFlagNamibia()
 * @method static string flagsForFlagNewCaledonia()
 * @method static string flagsForFlagNiger()
 * @method static string flagsForFlagNorfolkIsland()
 * @method static string flagsForFlagNigeria()
 * @method static string flagsForFlagNicaragua()
 * @method static string flagsForFlagNetherlands()
 * @method static string flagsForFlagNorway()
 * @method static string flagsForFlagNepal()
 * @method static string flagsForFlagNauru()
 * @method static string flagsForFlagNiue()
 * @method static string flagsForFlagNewZealand()
 * @method static string flagsForFlagOman()
 * @method static string flagsForFlagPanama()
 * @method static string flagsForFlagPeru()
 * @method static string flagsForFlagFrenchPolynesia()
 * @method static string flagsForFlagPapuaNewGuinea()
 * @method static string flagsForFlagPhilippines()
 * @method static string flagsForFlagPakistan()
 * @method static string flagsForFlagPoland()
 * @method static string flagsForFlagStPierreAndMiquelon()
 * @method static string flagsForFlagPitcairnIslands()
 * @method static string flagsForFlagPuertoRico()
 * @method static string flagsForFlagPalestinianTerritories()
 * @method static string flagsForFlagPortugal()
 * @method static string flagsForFlagPalau()
 * @method static string flagsForFlagParaguay()
 * @method static string flagsForFlagQatar()
 * @method static string flagsForFlagReunion()
 * @method static string flagsForFlagRomania()
 * @method static string flagsForFlagSerbia()
 * @method static string flagsForFlagRussia()
 * @method static string flagsForFlagRwanda()
 * @method static string flagsForFlagSaudiArabia()
 * @method static string flagsForFlagSolomonIslands()
 * @method static string flagsForFlagSeychelles()
 * @method static string flagsForFlagSudan()
 * @method static string flagsForFlagSweden()
 * @method static string flagsForFlagSingapore()
 * @method static string flagsForFlagStHelena()
 * @method static string flagsForFlagSlovenia()
 * @method static string flagsForFlagSvalbardAndJanMayen()
 * @method static string flagsForFlagSlovakia()
 * @method static string flagsForFlagSierraLeone()
 * @method static string flagsForFlagSanMarino()
 * @method static string flagsForFlagSenegal()
 * @method static string flagsForFlagSomalia()
 * @method static string flagsForFlagSuriname()
 * @method static string flagsForFlagSouthSudan()
 * @method static string flagsForFlagSaoTomeAndPrincipe()
 * @method static string flagsForFlagElSalvador()
 * @method static string flagsForFlagSintMaarten()
 * @method static string flagsForFlagSyria()
 * @method static string flagsForFlagEswatini()
 * @method static string flagsForFlagTristanDaCunha()
 * @method static string flagsForFlagTurksAndCaicosIslands()
 * @method static string flagsForFlagChad()
 * @method static string flagsForFlagFrenchSouthernTerritories()
 * @method static string flagsForFlagTogo()
 * @method static string flagsForFlagThailand()
 * @method static string flagsForFlagTajikistan()
 * @method static string flagsForFlagTokelau()
 * @method static string flagsForFlagTimorLeste()
 * @method static string flagsForFlagTurkmenistan()
 * @method static string flagsForFlagTunisia()
 * @method static string flagsForFlagTonga()
 * @method static string flagsForFlagTurkey()
 * @method static string flagsForFlagTrinidadAndTobago()
 * @method static string flagsForFlagTuvalu()
 * @method static string flagsForFlagTaiwan()
 * @method static string flagsForFlagTanzania()
 * @method static string flagsForFlagUkraine()
 * @method static string flagsForFlagUganda()
 * @method static string flagsForFlagUsOutlyingIslands()
 * @method static string flagsForFlagUnitedNations()
 * @method static string flagsForFlagUnitedStates()
 * @method static string flagsForFlagUruguay()
 * @method static string flagsForFlagUzbekistan()
 * @method static string flagsForFlagVaticanCity()
 * @method static string flagsForFlagStVincentAndGrenadines()
 * @method static string flagsForFlagVenezuela()
 * @method static string flagsForFlagBritishVirginIslands()
 * @method static string flagsForFlagUsVirginIslands()
 * @method static string flagsForFlagVietnam()
 * @method static string flagsForFlagVanuatu()
 * @method static string flagsForFlagWallisAndFutuna()
 * @method static string flagsForFlagSamoa()
 * @method static string flagsForFlagKosovo()
 * @method static string flagsForFlagYemen()
 * @method static string flagsForFlagMayotte()
 * @method static string flagsForFlagSouthAfrica()
 * @method static string flagsForFlagZambia()
 * @method static string flagsForFlagZimbabwe()
 */
class Emoji
{
    // ##### Emoji subgroup: COUNTRY-FLAG #####
    public const CHARACTER_FLAGS_FOR_FLAG_ASCENSION_ISLAND = "\u{1F1E6}\u{1F1E8}";
    public const CHARACTER_FLAGS_FOR_FLAG_ANDORRA = "\u{1F1E6}\u{1F1E9}";
    public const CHARACTER_FLAGS_FOR_FLAG_UNITED_ARAB_EMIRATES = "\u{1F1E6}\u{1F1EA}";
    public const CHARACTER_FLAGS_FOR_FLAG_AFGHANISTAN = "\u{1F1E6}\u{1F1EB}";
    public const CHARACTER_FLAGS_FOR_FLAG_ANTIGUA_AND_BARBUDA = "\u{1F1E6}\u{1F1EC}";
    public const CHARACTER_FLAGS_FOR_FLAG_ANGUILLA = "\u{1F1E6}\u{1F1EE}";
    public const CHARACTER_FLAGS_FOR_FLAG_ALBANIA = "\u{1F1E6}\u{1F1F1}";
    public const CHARACTER_FLAGS_FOR_FLAG_ARMENIA = "\u{1F1E6}\u{1F1F2}";
    public const CHARACTER_FLAGS_FOR_FLAG_ANGOLA = "\u{1F1E6}\u{1F1F4}";
    public const CHARACTER_FLAGS_FOR_FLAG_ANTARCTICA = "\u{1F1E6}\u{1F1F6}";
    public const CHARACTER_FLAGS_FOR_FLAG_ARGENTINA = "\u{1F1E6}\u{1F1F7}";
    public const CHARACTER_FLAGS_FOR_FLAG_AMERICAN_SAMOA = "\u{1F1E6}\u{1F1F8}";
    public const CHARACTER_FLAGS_FOR_FLAG_AUSTRIA = "\u{1F1E6}\u{1F1F9}";
    public const CHARACTER_FLAGS_FOR_FLAG_AUSTRALIA = "\u{1F1E6}\u{1F1FA}";
    public const CHARACTER_FLAGS_FOR_FLAG_ARUBA = "\u{1F1E6}\u{1F1FC}";
    public const CHARACTER_FLAGS_FOR_FLAG_ALAND_ISLANDS = "\u{1F1E6}\u{1F1FD}";
    public const CHARACTER_FLAGS_FOR_FLAG_AZERBAIJAN = "\u{1F1E6}\u{1F1FF}";
    public const CHARACTER_FLAGS_FOR_FLAG_BOSNIA_AND_HERZEGOVINA = "\u{1F1E7}\u{1F1E6}";
    public const CHARACTER_FLAGS_FOR_FLAG_BARBADOS = "\u{1F1E7}\u{1F1E7}";
    public const CHARACTER_FLAGS_FOR_FLAG_BANGLADESH = "\u{1F1E7}\u{1F1E9}";
    public const CHARACTER_FLAGS_FOR_FLAG_BELGIUM = "\u{1F1E7}\u{1F1EA}";
    public const CHARACTER_FLAGS_FOR_FLAG_BURKINA_FASO = "\u{1F1E7}\u{1F1EB}";
    public const CHARACTER_FLAGS_FOR_FLAG_BULGARIA = "\u{1F1E7}\u{1F1EC}";
    public const CHARACTER_FLAGS_FOR_FLAG_BAHRAIN = "\u{1F1E7}\u{1F1ED}";
    public const CHARACTER_FLAGS_FOR_FLAG_BURUNDI = "\u{1F1E7}\u{1F1EE}";
    public const CHARACTER_FLAGS_FOR_FLAG_BENIN = "\u{1F1E7}\u{1F1EF}";
    public const CHARACTER_FLAGS_FOR_FLAG_ST_BARTHELEMY = "\u{1F1E7}\u{1F1F1}";
    public const CHARACTER_FLAGS_FOR_FLAG_BERMUDA = "\u{1F1E7}\u{1F1F2}";
    public const CHARACTER_FLAGS_FOR_FLAG_BRUNEI = "\u{1F1E7}\u{1F1F3}";
    public const CHARACTER_FLAGS_FOR_FLAG_BOLIVIA = "\u{1F1E7}\u{1F1F4}";
    public const CHARACTER_FLAGS_FOR_FLAG_CARIBBEAN_NETHERLANDS = "\u{1F1E7}\u{1F1F6}";
    public const CHARACTER_FLAGS_FOR_FLAG_BRAZIL = "\u{1F1E7}\u{1F1F7}";
    public const CHARACTER_FLAGS_FOR_FLAG_BAHAMAS = "\u{1F1E7}\u{1F1F8}";
    public const CHARACTER_FLAGS_FOR_FLAG_BHUTAN = "\u{1F1E7}\u{1F1F9}";
    public const CHARACTER_FLAGS_FOR_FLAG_BOUVET_ISLAND = "\u{1F1E7}\u{1F1FB}";
    public const CHARACTER_FLAGS_FOR_FLAG_BOTSWANA = "\u{1F1E7}\u{1F1FC}";
    public const CHARACTER_FLAGS_FOR_FLAG_BELARUS = "\u{1F1E7}\u{1F1FE}";
    public const CHARACTER_FLAGS_FOR_FLAG_BELIZE = "\u{1F1E7}\u{1F1FF}";
    public const CHARACTER_FLAGS_FOR_FLAG_CANADA = "\u{1F1E8}\u{1F1E6}";
    public const CHARACTER_FLAGS_FOR_FLAG_COCOS_KEELING_ISLANDS = "\u{1F1E8}\u{1F1E8}";
    public const CHARACTER_FLAGS_FOR_FLAG_CONGO_KINSHASA = "\u{1F1E8}\u{1F1E9}";
    public const CHARACTER_FLAGS_FOR_FLAG_CENTRAL_AFRICAN_REPUBLIC = "\u{1F1E8}\u{1F1EB}";
    public const CHARACTER_FLAGS_FOR_FLAG_CONGO_BRAZZAVILLE = "\u{1F1E8}\u{1F1EC}";
    public const CHARACTER_FLAGS_FOR_FLAG_SWITZERLAND = "\u{1F1E8}\u{1F1ED}";
    public const CHARACTER_FLAGS_FOR_FLAG_COTE_D_IVOIRE = "\u{1F1E8}\u{1F1EE}";
    public const CHARACTER_FLAGS_FOR_FLAG_COOK_ISLANDS = "\u{1F1E8}\u{1F1F0}";
    public const CHARACTER_FLAGS_FOR_FLAG_CHILE = "\u{1F1E8}\u{1F1F1}";
    public const CHARACTER_FLAGS_FOR_FLAG_CAMEROON = "\u{1F1E8}\u{1F1F2}";
    public const CHARACTER_FLAGS_FOR_FLAG_CHINA = "\u{1F1E8}\u{1F1F3}";
    public const CHARACTER_FLAGS_FOR_FLAG_COLOMBIA = "\u{1F1E8}\u{1F1F4}";
    public const CHARACTER_FLAGS_FOR_FLAG_CLIPPERTON_ISLAND = "\u{1F1E8}\u{1F1F5}";
    public const CHARACTER_FLAGS_FOR_FLAG_COSTA_RICA = "\u{1F1E8}\u{1F1F7}";
    public const CHARACTER_FLAGS_FOR_FLAG_CUBA = "\u{1F1E8}\u{1F1FA}";
    public const CHARACTER_FLAGS_FOR_FLAG_CAPE_VERDE = "\u{1F1E8}\u{1F1FB}";
    public const CHARACTER_FLAGS_FOR_FLAG_CURACAO = "\u{1F1E8}\u{1F1FC}";
    public const CHARACTER_FLAGS_FOR_FLAG_CHRISTMAS_ISLAND = "\u{1F1E8}\u{1F1FD}";
    public const CHARACTER_FLAGS_FOR_FLAG_CYPRUS = "\u{1F1E8}\u{1F1FE}";
    public const CHARACTER_FLAGS_FOR_FLAG_CZECHIA = "\u{1F1E8}\u{1F1FF}";
    public const CHARACTER_FLAGS_FOR_FLAG_GERMANY = "\u{1F1E9}\u{1F1EA}";
    public const CHARACTER_FLAGS_FOR_FLAG_DIEGO_GARCIA = "\u{1F1E9}\u{1F1EC}";
    public const CHARACTER_FLAGS_FOR_FLAG_DJIBOUTI = "\u{1F1E9}\u{1F1EF}";
    public const CHARACTER_FLAGS_FOR_FLAG_DENMARK = "\u{1F1E9}\u{1F1F0}";
    public const CHARACTER_FLAGS_FOR_FLAG_DOMINICA = "\u{1F1E9}\u{1F1F2}";
    public const CHARACTER_FLAGS_FOR_FLAG_DOMINICAN_REPUBLIC = "\u{1F1E9}\u{1F1F4}";
    public const CHARACTER_FLAGS_FOR_FLAG_ALGERIA = "\u{1F1E9}\u{1F1FF}";
    public const CHARACTER_FLAGS_FOR_FLAG_CEUTA_AND_MELILLA = "\u{1F1EA}\u{1F1E6}";
    public const CHARACTER_FLAGS_FOR_FLAG_ECUADOR = "\u{1F1EA}\u{1F1E8}";
    public const CHARACTER_FLAGS_FOR_FLAG_ESTONIA = "\u{1F1EA}\u{1F1EA}";
    public const CHARACTER_FLAGS_FOR_FLAG_EGYPT = "\u{1F1EA}\u{1F1EC}";
    public const CHARACTER_FLAGS_FOR_FLAG_WESTERN_SAHARA = "\u{1F1EA}\u{1F1ED}";
    public const CHARACTER_FLAGS_FOR_FLAG_ERITREA = "\u{1F1EA}\u{1F1F7}";
    public const CHARACTER_FLAGS_FOR_FLAG_SPAIN = "\u{1F1EA}\u{1F1F8}";
    public const CHARACTER_FLAGS_FOR_FLAG_ETHIOPIA = "\u{1F1EA}\u{1F1F9}";
    public const CHARACTER_FLAGS_FOR_FLAG_EUROPEAN_UNION = "\u{1F1EA}\u{1F1FA}";
    public const CHARACTER_FLAGS_FOR_FLAG_FINLAND = "\u{1F1EB}\u{1F1EE}";
    public const CHARACTER_FLAGS_FOR_FLAG_FIJI = "\u{1F1EB}\u{1F1EF}";
    public const CHARACTER_FLAGS_FOR_FLAG_FALKLAND_ISLANDS = "\u{1F1EB}\u{1F1F0}";
    public const CHARACTER_FLAGS_FOR_FLAG_MICRONESIA = "\u{1F1EB}\u{1F1F2}";
    public const CHARACTER_FLAGS_FOR_FLAG_FAROE_ISLANDS = "\u{1F1EB}\u{1F1F4}";
    public const CHARACTER_FLAGS_FOR_FLAG_FRANCE = "\u{1F1EB}\u{1F1F7}";
    public const CHARACTER_FLAGS_FOR_FLAG_GABON = "\u{1F1EC}\u{1F1E6}";
    public const CHARACTER_FLAGS_FOR_FLAG_UNITED_KINGDOM = "\u{1F1EC}\u{1F1E7}";
    public const CHARACTER_FLAGS_FOR_FLAG_GRENADA = "\u{1F1EC}\u{1F1E9}";
    public const CHARACTER_FLAGS_FOR_FLAG_GEORGIA = "\u{1F1EC}\u{1F1EA}";
    public const CHARACTER_FLAGS_FOR_FLAG_FRENCH_GUIANA = "\u{1F1EC}\u{1F1EB}";
    public const CHARACTER_FLAGS_FOR_FLAG_GUERNSEY = "\u{1F1EC}\u{1F1EC}";
    public const CHARACTER_FLAGS_FOR_FLAG_GHANA = "\u{1F1EC}\u{1F1ED}";
    public const CHARACTER_FLAGS_FOR_FLAG_GIBRALTAR = "\u{1F1EC}\u{1F1EE}";
    public const CHARACTER_FLAGS_FOR_FLAG_GREENLAND = "\u{1F1EC}\u{1F1F1}";
    public const CHARACTER_FLAGS_FOR_FLAG_GAMBIA = "\u{1F1EC}\u{1F1F2}";
    public const CHARACTER_FLAGS_FOR_FLAG_GUINEA = "\u{1F1EC}\u{1F1F3}";
    public const CHARACTER_FLAGS_FOR_FLAG_GUADELOUPE = "\u{1F1EC}\u{1F1F5}";
    public const CHARACTER_FLAGS_FOR_FLAG_EQUATORIAL_GUINEA = "\u{1F1EC}\u{1F1F6}";
    public const CHARACTER_FLAGS_FOR_FLAG_GREECE = "\u{1F1EC}\u{1F1F7}";
    public const CHARACTER_FLAGS_FOR_FLAG_SOUTH_GEORGIA_AND_SOUTH_SANDWICH_ISLANDS = "\u{1F1EC}\u{1F1F8}";
    public const CHARACTER_FLAGS_FOR_FLAG_GUATEMALA = "\u{1F1EC}\u{1F1F9}";
    public const CHARACTER_FLAGS_FOR_FLAG_GUAM = "\u{1F1EC}\u{1F1FA}";
    public const CHARACTER_FLAGS_FOR_FLAG_GUINEA_BISSAU = "\u{1F1EC}\u{1F1FC}";
    public const CHARACTER_FLAGS_FOR_FLAG_GUYANA = "\u{1F1EC}\u{1F1FE}";
    public const CHARACTER_FLAGS_FOR_FLAG_HONG_KONG_SAR_CHINA = "\u{1F1ED}\u{1F1F0}";
    public const CHARACTER_FLAGS_FOR_FLAG_HEARD_AND_MCDONALD_ISLANDS = "\u{1F1ED}\u{1F1F2}";
    public const CHARACTER_FLAGS_FOR_FLAG_HONDURAS = "\u{1F1ED}\u{1F1F3}";
    public const CHARACTER_FLAGS_FOR_FLAG_CROATIA = "\u{1F1ED}\u{1F1F7}";
    public const CHARACTER_FLAGS_FOR_FLAG_HAITI = "\u{1F1ED}\u{1F1F9}";
    public const CHARACTER_FLAGS_FOR_FLAG_HUNGARY = "\u{1F1ED}\u{1F1FA}";
    public const CHARACTER_FLAGS_FOR_FLAG_CANARY_ISLANDS = "\u{1F1EE}\u{1F1E8}";
    public const CHARACTER_FLAGS_FOR_FLAG_INDONESIA = "\u{1F1EE}\u{1F1E9}";
    public const CHARACTER_FLAGS_FOR_FLAG_IRELAND = "\u{1F1EE}\u{1F1EA}";
    public const CHARACTER_FLAGS_FOR_FLAG_ISRAEL = "\u{1F1EE}\u{1F1F1}";
    public const CHARACTER_FLAGS_FOR_FLAG_ISLE_OF_MAN = "\u{1F1EE}\u{1F1F2}";
    public const CHARACTER_FLAGS_FOR_FLAG_INDIA = "\u{1F1EE}\u{1F1F3}";
    public const CHARACTER_FLAGS_FOR_FLAG_BRITISH_INDIAN_OCEAN_TERRITORY = "\u{1F1EE}\u{1F1F4}";
    public const CHARACTER_FLAGS_FOR_FLAG_IRAQ = "\u{1F1EE}\u{1F1F6}";
    public const CHARACTER_FLAGS_FOR_FLAG_IRAN = "\u{1F1EE}\u{1F1F7}";
    public const CHARACTER_FLAGS_FOR_FLAG_ICELAND = "\u{1F1EE}\u{1F1F8}";
    public const CHARACTER_FLAGS_FOR_FLAG_ITALY = "\u{1F1EE}\u{1F1F9}";
    public const CHARACTER_FLAGS_FOR_FLAG_JERSEY = "\u{1F1EF}\u{1F1EA}";
    public const CHARACTER_FLAGS_FOR_FLAG_JAMAICA = "\u{1F1EF}\u{1F1F2}";
    public const CHARACTER_FLAGS_FOR_FLAG_JORDAN = "\u{1F1EF}\u{1F1F4}";
    public const CHARACTER_FLAGS_FOR_FLAG_JAPAN = "\u{1F1EF}\u{1F1F5}";
    public const CHARACTER_FLAGS_FOR_FLAG_KENYA = "\u{1F1F0}\u{1F1EA}";
    public const CHARACTER_FLAGS_FOR_FLAG_KYRGYZSTAN = "\u{1F1F0}\u{1F1EC}";
    public const CHARACTER_FLAGS_FOR_FLAG_CAMBODIA = "\u{1F1F0}\u{1F1ED}";
    public const CHARACTER_FLAGS_FOR_FLAG_KIRIBATI = "\u{1F1F0}\u{1F1EE}";
    public const CHARACTER_FLAGS_FOR_FLAG_COMOROS = "\u{1F1F0}\u{1F1F2}";
    public const CHARACTER_FLAGS_FOR_FLAG_ST_KITTS_AND_NEVIS = "\u{1F1F0}\u{1F1F3}";
    public const CHARACTER_FLAGS_FOR_FLAG_NORTH_KOREA = "\u{1F1F0}\u{1F1F5}";
    public const CHARACTER_FLAGS_FOR_FLAG_SOUTH_KOREA = "\u{1F1F0}\u{1F1F7}";
    public const CHARACTER_FLAGS_FOR_FLAG_KUWAIT = "\u{1F1F0}\u{1F1FC}";
    public const CHARACTER_FLAGS_FOR_FLAG_CAYMAN_ISLANDS = "\u{1F1F0}\u{1F1FE}";
    public const CHARACTER_FLAGS_FOR_FLAG_KAZAKHSTAN = "\u{1F1F0}\u{1F1FF}";
    public const CHARACTER_FLAGS_FOR_FLAG_LAOS = "\u{1F1F1}\u{1F1E6}";
    public const CHARACTER_FLAGS_FOR_FLAG_LEBANON = "\u{1F1F1}\u{1F1E7}";
    public const CHARACTER_FLAGS_FOR_FLAG_ST_LUCIA = "\u{1F1F1}\u{1F1E8}";
    public const CHARACTER_FLAGS_FOR_FLAG_LIECHTENSTEIN = "\u{1F1F1}\u{1F1EE}";
    public const CHARACTER_FLAGS_FOR_FLAG_SRI_LANKA = "\u{1F1F1}\u{1F1F0}";
    public const CHARACTER_FLAGS_FOR_FLAG_LIBERIA = "\u{1F1F1}\u{1F1F7}";
    public const CHARACTER_FLAGS_FOR_FLAG_LESOTHO = "\u{1F1F1}\u{1F1F8}";
    public const CHARACTER_FLAGS_FOR_FLAG_LITHUANIA = "\u{1F1F1}\u{1F1F9}";
    public const CHARACTER_FLAGS_FOR_FLAG_LUXEMBOURG = "\u{1F1F1}\u{1F1FA}";
    public const CHARACTER_FLAGS_FOR_FLAG_LATVIA = "\u{1F1F1}\u{1F1FB}";
    public const CHARACTER_FLAGS_FOR_FLAG_LIBYA = "\u{1F1F1}\u{1F1FE}";
    public const CHARACTER_FLAGS_FOR_FLAG_MOROCCO = "\u{1F1F2}\u{1F1E6}";
    public const CHARACTER_FLAGS_FOR_FLAG_MONACO = "\u{1F1F2}\u{1F1E8}";
    public const CHARACTER_FLAGS_FOR_FLAG_MOLDOVA = "\u{1F1F2}\u{1F1E9}";
    public const CHARACTER_FLAGS_FOR_FLAG_MONTENEGRO = "\u{1F1F2}\u{1F1EA}";
    public const CHARACTER_FLAGS_FOR_FLAG_ST_MARTIN = "\u{1F1F2}\u{1F1EB}";
    public const CHARACTER_FLAGS_FOR_FLAG_MADAGASCAR = "\u{1F1F2}\u{1F1EC}";
    public const CHARACTER_FLAGS_FOR_FLAG_MARSHALL_ISLANDS = "\u{1F1F2}\u{1F1ED}";
    public const CHARACTER_FLAGS_FOR_FLAG_NORTH_MACEDONIA = "\u{1F1F2}\u{1F1F0}";
    public const CHARACTER_FLAGS_FOR_FLAG_MALI = "\u{1F1F2}\u{1F1F1}";
    public const CHARACTER_FLAGS_FOR_FLAG_MYANMAR_BURMA = "\u{1F1F2}\u{1F1F2}";
    public const CHARACTER_FLAGS_FOR_FLAG_MONGOLIA = "\u{1F1F2}\u{1F1F3}";
    public const CHARACTER_FLAGS_FOR_FLAG_MACAO_SAR_CHINA = "\u{1F1F2}\u{1F1F4}";
    public const CHARACTER_FLAGS_FOR_FLAG_NORTHERN_MARIANA_ISLANDS = "\u{1F1F2}\u{1F1F5}";
    public const CHARACTER_FLAGS_FOR_FLAG_MARTINIQUE = "\u{1F1F2}\u{1F1F6}";
    public const CHARACTER_FLAGS_FOR_FLAG_MAURITANIA = "\u{1F1F2}\u{1F1F7}";
    public const CHARACTER_FLAGS_FOR_FLAG_MONTSERRAT = "\u{1F1F2}\u{1F1F8}";
    public const CHARACTER_FLAGS_FOR_FLAG_MALTA = "\u{1F1F2}\u{1F1F9}";
    public const CHARACTER_FLAGS_FOR_FLAG_MAURITIUS = "\u{1F1F2}\u{1F1FA}";
    public const CHARACTER_FLAGS_FOR_FLAG_MALDIVES = "\u{1F1F2}\u{1F1FB}";
    public const CHARACTER_FLAGS_FOR_FLAG_MALAWI = "\u{1F1F2}\u{1F1FC}";
    public const CHARACTER_FLAGS_FOR_FLAG_MEXICO = "\u{1F1F2}\u{1F1FD}";
    public const CHARACTER_FLAGS_FOR_FLAG_MALAYSIA = "\u{1F1F2}\u{1F1FE}";
    public const CHARACTER_FLAGS_FOR_FLAG_MOZAMBIQUE = "\u{1F1F2}\u{1F1FF}";
    public const CHARACTER_FLAGS_FOR_FLAG_NAMIBIA = "\u{1F1F3}\u{1F1E6}";
    public const CHARACTER_FLAGS_FOR_FLAG_NEW_CALEDONIA = "\u{1F1F3}\u{1F1E8}";
    public const CHARACTER_FLAGS_FOR_FLAG_NIGER = "\u{1F1F3}\u{1F1EA}";
    public const CHARACTER_FLAGS_FOR_FLAG_NORFOLK_ISLAND = "\u{1F1F3}\u{1F1EB}";
    public const CHARACTER_FLAGS_FOR_FLAG_NIGERIA = "\u{1F1F3}\u{1F1EC}";
    public const CHARACTER_FLAGS_FOR_FLAG_NICARAGUA = "\u{1F1F3}\u{1F1EE}";
    public const CHARACTER_FLAGS_FOR_FLAG_NETHERLANDS = "\u{1F1F3}\u{1F1F1}";
    public const CHARACTER_FLAGS_FOR_FLAG_NORWAY = "\u{1F1F3}\u{1F1F4}";
    public const CHARACTER_FLAGS_FOR_FLAG_NEPAL = "\u{1F1F3}\u{1F1F5}";
    public const CHARACTER_FLAGS_FOR_FLAG_NAURU = "\u{1F1F3}\u{1F1F7}";
    public const CHARACTER_FLAGS_FOR_FLAG_NIUE = "\u{1F1F3}\u{1F1FA}";
    public const CHARACTER_FLAGS_FOR_FLAG_NEW_ZEALAND = "\u{1F1F3}\u{1F1FF}";
    public const CHARACTER_FLAGS_FOR_FLAG_OMAN = "\u{1F1F4}\u{1F1F2}";
    public const CHARACTER_FLAGS_FOR_FLAG_PANAMA = "\u{1F1F5}\u{1F1E6}";
    public const CHARACTER_FLAGS_FOR_FLAG_PERU = "\u{1F1F5}\u{1F1EA}";
    public const CHARACTER_FLAGS_FOR_FLAG_FRENCH_POLYNESIA = "\u{1F1F5}\u{1F1EB}";
    public const CHARACTER_FLAGS_FOR_FLAG_PAPUA_NEW_GUINEA = "\u{1F1F5}\u{1F1EC}";
    public const CHARACTER_FLAGS_FOR_FLAG_PHILIPPINES = "\u{1F1F5}\u{1F1ED}";
    public const CHARACTER_FLAGS_FOR_FLAG_PAKISTAN = "\u{1F1F5}\u{1F1F0}";
    public const CHARACTER_FLAGS_FOR_FLAG_POLAND = "\u{1F1F5}\u{1F1F1}";
    public const CHARACTER_FLAGS_FOR_FLAG_ST_PIERRE_AND_MIQUELON = "\u{1F1F5}\u{1F1F2}";
    public const CHARACTER_FLAGS_FOR_FLAG_PITCAIRN_ISLANDS = "\u{1F1F5}\u{1F1F3}";
    public const CHARACTER_FLAGS_FOR_FLAG_PUERTO_RICO = "\u{1F1F5}\u{1F1F7}";
    public const CHARACTER_FLAGS_FOR_FLAG_PALESTINIAN_TERRITORIES = "\u{1F1F5}\u{1F1F8}";
    public const CHARACTER_FLAGS_FOR_FLAG_PORTUGAL = "\u{1F1F5}\u{1F1F9}";
    public const CHARACTER_FLAGS_FOR_FLAG_PALAU = "\u{1F1F5}\u{1F1FC}";
    public const CHARACTER_FLAGS_FOR_FLAG_PARAGUAY = "\u{1F1F5}\u{1F1FE}";
    public const CHARACTER_FLAGS_FOR_FLAG_QATAR = "\u{1F1F6}\u{1F1E6}";
    public const CHARACTER_FLAGS_FOR_FLAG_REUNION = "\u{1F1F7}\u{1F1EA}";
    public const CHARACTER_FLAGS_FOR_FLAG_ROMANIA = "\u{1F1F7}\u{1F1F4}";
    public const CHARACTER_FLAGS_FOR_FLAG_SERBIA = "\u{1F1F7}\u{1F1F8}";
    public const CHARACTER_FLAGS_FOR_FLAG_RUSSIA = "\u{1F1F7}\u{1F1FA}";
    public const CHARACTER_FLAGS_FOR_FLAG_RWANDA = "\u{1F1F7}\u{1F1FC}";
    public const CHARACTER_FLAGS_FOR_FLAG_SAUDI_ARABIA = "\u{1F1F8}\u{1F1E6}";
    public const CHARACTER_FLAGS_FOR_FLAG_SOLOMON_ISLANDS = "\u{1F1F8}\u{1F1E7}";
    public const CHARACTER_FLAGS_FOR_FLAG_SEYCHELLES = "\u{1F1F8}\u{1F1E8}";
    public const CHARACTER_FLAGS_FOR_FLAG_SUDAN = "\u{1F1F8}\u{1F1E9}";
    public const CHARACTER_FLAGS_FOR_FLAG_SWEDEN = "\u{1F1F8}\u{1F1EA}";
    public const CHARACTER_FLAGS_FOR_FLAG_SINGAPORE = "\u{1F1F8}\u{1F1EC}";
    public const CHARACTER_FLAGS_FOR_FLAG_ST_HELENA = "\u{1F1F8}\u{1F1ED}";
    public const CHARACTER_FLAGS_FOR_FLAG_SLOVENIA = "\u{1F1F8}\u{1F1EE}";
    public const CHARACTER_FLAGS_FOR_FLAG_SVALBARD_AND_JAN_MAYEN = "\u{1F1F8}\u{1F1EF}";
    public const CHARACTER_FLAGS_FOR_FLAG_SLOVAKIA = "\u{1F1F8}\u{1F1F0}";
    public const CHARACTER_FLAGS_FOR_FLAG_SIERRA_LEONE = "\u{1F1F8}\u{1F1F1}";
    public const CHARACTER_FLAGS_FOR_FLAG_SAN_MARINO = "\u{1F1F8}\u{1F1F2}";
    public const CHARACTER_FLAGS_FOR_FLAG_SENEGAL = "\u{1F1F8}\u{1F1F3}";
    public const CHARACTER_FLAGS_FOR_FLAG_SOMALIA = "\u{1F1F8}\u{1F1F4}";
    public const CHARACTER_FLAGS_FOR_FLAG_SURINAME = "\u{1F1F8}\u{1F1F7}";
    public const CHARACTER_FLAGS_FOR_FLAG_SOUTH_SUDAN = "\u{1F1F8}\u{1F1F8}";
    public const CHARACTER_FLAGS_FOR_FLAG_SAO_TOME_AND_PRINCIPE = "\u{1F1F8}\u{1F1F9}";
    public const CHARACTER_FLAGS_FOR_FLAG_EL_SALVADOR = "\u{1F1F8}\u{1F1FB}";
    public const CHARACTER_FLAGS_FOR_FLAG_SINT_MAARTEN = "\u{1F1F8}\u{1F1FD}";
    public const CHARACTER_FLAGS_FOR_FLAG_SYRIA = "\u{1F1F8}\u{1F1FE}";
    public const CHARACTER_FLAGS_FOR_FLAG_ESWATINI = "\u{1F1F8}\u{1F1FF}";
    public const CHARACTER_FLAGS_FOR_FLAG_TRISTAN_DA_CUNHA = "\u{1F1F9}\u{1F1E6}";
    public const CHARACTER_FLAGS_FOR_FLAG_TURKS_AND_CAICOS_ISLANDS = "\u{1F1F9}\u{1F1E8}";
    public const CHARACTER_FLAGS_FOR_FLAG_CHAD = "\u{1F1F9}\u{1F1E9}";
    public const CHARACTER_FLAGS_FOR_FLAG_FRENCH_SOUTHERN_TERRITORIES = "\u{1F1F9}\u{1F1EB}";
    public const CHARACTER_FLAGS_FOR_FLAG_TOGO = "\u{1F1F9}\u{1F1EC}";
    public const CHARACTER_FLAGS_FOR_FLAG_THAILAND = "\u{1F1F9}\u{1F1ED}";
    public const CHARACTER_FLAGS_FOR_FLAG_TAJIKISTAN = "\u{1F1F9}\u{1F1EF}";
    public const CHARACTER_FLAGS_FOR_FLAG_TOKELAU = "\u{1F1F9}\u{1F1F0}";
    public const CHARACTER_FLAGS_FOR_FLAG_TIMOR_LESTE = "\u{1F1F9}\u{1F1F1}";
    public const CHARACTER_FLAGS_FOR_FLAG_TURKMENISTAN = "\u{1F1F9}\u{1F1F2}";
    public const CHARACTER_FLAGS_FOR_FLAG_TUNISIA = "\u{1F1F9}\u{1F1F3}";
    public const CHARACTER_FLAGS_FOR_FLAG_TONGA = "\u{1F1F9}\u{1F1F4}";
    public const CHARACTER_FLAGS_FOR_FLAG_TURKEY = "\u{1F1F9}\u{1F1F7}";
    public const CHARACTER_FLAGS_FOR_FLAG_TRINIDAD_AND_TOBAGO = "\u{1F1F9}\u{1F1F9}";
    public const CHARACTER_FLAGS_FOR_FLAG_TUVALU = "\u{1F1F9}\u{1F1FB}";
    public const CHARACTER_FLAGS_FOR_FLAG_TAIWAN = "\u{1F1F9}\u{1F1FC}";
    public const CHARACTER_FLAGS_FOR_FLAG_TANZANIA = "\u{1F1F9}\u{1F1FF}";
    public const CHARACTER_FLAGS_FOR_FLAG_UKRAINE = "\u{1F1FA}\u{1F1E6}";
    public const CHARACTER_FLAGS_FOR_FLAG_UGANDA = "\u{1F1FA}\u{1F1EC}";
    public const CHARACTER_FLAGS_FOR_FLAG_US_OUTLYING_ISLANDS = "\u{1F1FA}\u{1F1F2}";
    public const CHARACTER_FLAGS_FOR_FLAG_UNITED_NATIONS = "\u{1F1FA}\u{1F1F3}";
    public const CHARACTER_FLAGS_FOR_FLAG_UNITED_STATES = "\u{1F1FA}\u{1F1F8}";
    public const CHARACTER_FLAGS_FOR_FLAG_URUGUAY = "\u{1F1FA}\u{1F1FE}";
    public const CHARACTER_FLAGS_FOR_FLAG_UZBEKISTAN = "\u{1F1FA}\u{1F1FF}";
    public const CHARACTER_FLAGS_FOR_FLAG_VATICAN_CITY = "\u{1F1FB}\u{1F1E6}";
    public const CHARACTER_FLAGS_FOR_FLAG_ST_VINCENT_AND_GRENADINES = "\u{1F1FB}\u{1F1E8}";
    public const CHARACTER_FLAGS_FOR_FLAG_VENEZUELA = "\u{1F1FB}\u{1F1EA}";
    public const CHARACTER_FLAGS_FOR_FLAG_BRITISH_VIRGIN_ISLANDS = "\u{1F1FB}\u{1F1EC}";
    public const CHARACTER_FLAGS_FOR_FLAG_US_VIRGIN_ISLANDS = "\u{1F1FB}\u{1F1EE}";
    public const CHARACTER_FLAGS_FOR_FLAG_VIETNAM = "\u{1F1FB}\u{1F1F3}";
    public const CHARACTER_FLAGS_FOR_FLAG_VANUATU = "\u{1F1FB}\u{1F1FA}";
    public const CHARACTER_FLAGS_FOR_FLAG_WALLIS_AND_FUTUNA = "\u{1F1FC}\u{1F1EB}";
    public const CHARACTER_FLAGS_FOR_FLAG_SAMOA = "\u{1F1FC}\u{1F1F8}";
    public const CHARACTER_FLAGS_FOR_FLAG_KOSOVO = "\u{1F1FD}\u{1F1F0}";
    public const CHARACTER_FLAGS_FOR_FLAG_YEMEN = "\u{1F1FE}\u{1F1EA}";
    public const CHARACTER_FLAGS_FOR_FLAG_MAYOTTE = "\u{1F1FE}\u{1F1F9}";
    public const CHARACTER_FLAGS_FOR_FLAG_SOUTH_AFRICA = "\u{1F1FF}\u{1F1E6}";
    public const CHARACTER_FLAGS_FOR_FLAG_ZAMBIA = "\u{1F1FF}\u{1F1F2}";
    public const CHARACTER_FLAGS_FOR_FLAG_ZIMBABWE = "\u{1F1FF}\u{1F1FC}";

    public static function countryFlag(string $countryCode): string
    {
        if (strlen($countryCode) !== 2) {
            throw CouldNotDetermineFlag::countryCodeLenghtIsWrong($countryCode);
        }

        $countryCode = mb_strtoupper($countryCode);

        return static::encodeCountryCodeLetter($countryCode[0]) . static::encodeCountryCodeLetter($countryCode[1]);
    }

    protected static function encodeCountryCodeLetter(string $letter): string
    {
        return mb_convert_encoding('&#' . (127397 + ord($letter)) . ';', 'UTF-8', 'HTML-ENTITIES');
    }
}
