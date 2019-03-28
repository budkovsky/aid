<?php
declare(strict_types=1);

namespace Budkovsky\Aid\Enum;

/**
 * IBAN enumeration
 */
class IbanEnum
{

    /**
     * List by IBAN country code
     *
     * Index: country code
     * fields:
     * * code: country code, first two characters of IBAN
     * * country: country full name in polish language
     * * length: full length of IBAN string
     * * format: First two characters are coutry code, A - letter, N - number, X - letter or number
     * * regex: regular expression matches the proper IBAN format(without spaces)
     *
     * @var array
     */
    public const LIST = [
        'AD' => [
            'code' => 'AD',
            'country' => 'Andora',
            'length' => 24,
            'format' => 'ADNN NNNN NNNN XXXX XXXX XXXX',
            'regex' => 'AD[0-9]{10}[A-Z0-9]{12}'
        ],
        'AE' => [
            'code' => 'AE',
            'country' => 'Zjednoczone Emiraty Arabskie',
            'length' => 23,
            'format' => 'AENN NNNN NNNN NNNN NNNN NNN',
            'regex' => 'AE[0-9]{21}'
        ],
        'AL' => [
            'code' => 'AL',
            'country' => 'Albania',
            'length' => 28,
            'format' => 'ALNN NNNN NNNN XXXX XXXX XXXX XXXX',
            'regex' => 'AL[0-9]{10}[A-Z0-9]{16}'
        ],
        'AT' => [
            'code' => 'AT',
            'country' => 'Austria',
            'length' => 20,
            'format' => 'ATNN NNNN NNNN NNNN NNNN',
            'regex' => 'AT[0-9]{18}'
        ],
        'AZ' => [
            'code' => 'AZ',
            'country' => 'Azerbejdżan',
            'length' => 28,
            'format' => 'AZNN AAAA XXXX XXXX XXXX XXXX XXXX',
            'regex' => 'AZ[0-9]{2}[A-Z]{4}[A-Z0-9]{20}'
        ],
        'BA' => [
            'code' => 'BA',
            'country' => 'Bośnia i Hercegowina',
            'length' => 20,
            'format' => 'BANN NNNN NNNN NNNN NNNN',
            'regex' => 'BA[0-9]{18}'
        ],
        'BE' => [
            'code' => 'BE',
            'country' => 'Belgia',
            'length' => 16,
            'format' => 'BENN NNNN NNNN NNNN',
            'regex' => 'BE[0-9]{14}'
        ],
        'BG' => [
            'code' => 'BG',
            'country' => 'Bułgaria',
            'length' => 22,
            'format' => 'BGNN AAAA NNNN NNXX XXXX XX',
            'regex' => 'BG[0-9]{2}[A-Z]{4}[0-9]{6}[A-Z0-9]{8}'
        ],
        'BH' => [
            'code' => 'BH',
            'country' => 'Bahrajn',
            'length' => 22,
            'format' => 'BHNN AAAA XXXX XXXX XXXX XX',
            'regex' => 'BH[0-9]{2}[A-Z]{4}[A-Z0-9]{14}'
        ],
        'BR' => [
            'code' => 'BR',
            'country' => 'Brazylia',
            'length' => 29,
            'format' => 'BRNN NNNN NNNN NNNN NNNN NNNN NNNA X',
            'regex' => 'BR[0-9]{25}[A-Z][A-Z0-9]'
        ],
        'CH' => [
            'code' => 'CH',
            'country' => 'Szwajcaria',
            'length' => 21,
            'format' => 'CHNN NNNN NXXX XXXX XXXX X',
            'regex' => 'CH[0-9]{7}[A-Z0-9]{12}'
        ],
        'CR' => [
            'code' => 'CR',
            'country' => 'Kostaryka',
            'length' => 21,
            'format' => 'CRNN NNNN NNNN NNNN NNNN N',
            'regex' => 'CR[0-9]{19}'
        ],
        'CY' => [
            'code' => 'CY',
            'country' => 'Cypr',
            'length' => 28,
            'format' => 'CYNN NNNN NNNN XXXX XXXX XXXX XXXX',
            'regex' => 'CY[0-9]{10}[A-Z0-9]{16}'
        ],
        'CZ' => [
            'code' => 'CZ',
            'country' => 'Czechy',
            'length' => 24,
            'format' => 'CZNN NNNN NNNN NNNN NNNN NNNN',
            'regex' => 'CZ[0-9]{22}'
        ],
        'DE' => [
            'code' => 'DE',
            'country' => 'Niemcy',
            'length' => 22,
            'format' => 'DENN NNNN NNNN NNNN NNNN NN',
            'regex' => 'DE[0-9]{20}'
        ],
        'DK' => [
            'code' => 'DK',
            'country' => 'Dania',
            'length' => 18,
            'format' => 'DKNN NNNN NNNN NNNN NN',
            'regex' => 'DK[0-9]{16}'
        ],
        'DO' => [
            'code' => 'DO',
            'country' => 'Dominikana',
            'length' => 28,
            'format' => 'DONN XXXX NNNN NNNN NNNN NNNN NNNN',
            'regex' => 'DO[0-9]{2}[A-Z0-9]{4}[0-9]{20}'
        ],
        'EE' => [
            'code' => 'EE',
            'country' => 'Estonia',
            'length' => 20,
            'format' => 'EENN NNNN NNNN NNNN NNNN',
            'regex' => 'EE[0-9]{18}'
        ],
        'ES' => [
            'code' => 'ES',
            'country' => 'Hiszpania',
            'length' => 24,
            'format' => 'ESNN NNNN NNNN NNNN NNNN NNNN',
            'regex' => 'ES[0-9]{22}'
        ],
        'FI' => [
            'code' => 'FI',
            'country' => 'Finlandia, Wyspy Alandzkie',
            'length' => 18,
            'format' => 'FINN NNNN NNNN NNNN NN',
            'regex' => 'FI[0-9]{16}'
        ],
        'FR' => [
            'code' => 'FR',
            'country' => 'Francja, Francuskie Terytoria Południowe i Antarktyczne, Gujana Francuska, Gwadelupa, Majotta, Martynika, Nowa Kaledonia, Polinezja Francuska, Reunion, Saint-Barthélemy, Saint-Martin, Saint-Pierre i Miquelon, Wallis i Futuna',
            'length' => 27,
            'format' => 'FRNN NNNN NNNN NNXX XXXX XXXX XNN',
            'regex' => 'FR[0-9]{12}[0-9A-Z]{11}[0-9]{2}'
        ],
        'FO' => [
            'code' => 'FO',
            'country' => 'Wyspy Owcze',
            'length' => 18,
            'format' => 'FONN NNNN NNNN NNNN NN',
            'regex' => 'FO[0-9]{16}'
        ],
        'GB' => [
            'code' => 'GB',
            'country' => 'Wielka Brytania',
            'length' => 22,
            'format' => 'GBNN AAAA NNNN NNNN NNNN NN',
            'regex' => 'GB[0-9]{2}[A-Z]{4}[0-9]{14}'
        ],
        'GE' => [
            'code' => 'GE',
            'country' => 'Gruzja',
            'length' => 22,
            'format' => 'GENN AANN NNNN NNNN NNNN NN',
            'regex' => 'GE[0-9]{2}[A-Z]{2}[0-9]{16}'
        ],
        'GI' => [
            'code' => 'GI',
            'country' => 'Gibraltar',
            'length' => 23,
            'format' => 'GINN AAAA XXXX XXXX XXXX XXX',
            'regex' => 'GI[0-9]{2}[A-Z]{4}[A-Z0-9]{15}'
        ],
        'GL' => [
            'code' => 'GL',
            'country' => 'Grenlandia',
            'length' => 18,
            'format' => 'GLNN NNNN NNNN NNNN NN',
            'regex' => 'GL[0-9]{16}'
        ],
        'GR' => [
            'code' => 'GR',
            'country' => 'Grecja',
            'length' => 27,
            'format' => 'GRNN NNNN NNNX XXXX XXXX XXXX XXX',
            'regex' => 'GR[0-9]{9}[A-Z0-9]{16}'
        ],
        'GT' => [
            'code' => 'GT',
            'country' => 'Gwatemala',
            'length' => 28,
            'format' => 'GTNN XXXX XXXX XXXX XXXX XXXX XXXX',
            'regex' => 'GT[0-9]{2}[A-Z0-9]{24}'
        ],
        'HR' => [
            'code' => 'HR',
            'country' => 'Chorwacja',
            'length' => 21,
            'format' => 'HRNN NNNN NNNN NNNN NNNN N',
            'regex' => 'HR[0-9]{19}'
        ],
        'HU' => [
            'code' => 'HU',
            'country' => 'Węgry',
            'length' => 28,
            'format' => 'HUNN NNNN NNNN NNNN NNNN NNNN NNNN',
            'regex' => 'HU[0-9]{26}'
        ],
        'IE' => [
            'code' => 'IE',
            'country' => 'Irlandia',
            'length' => 22,
            'format' => 'IENN AAAA NNNN NNNN NNNN NN',
            'regex' => 'IE[0-9]{2}[A-Z]{4}[0-9]{14}'
        ],
        'IL' => [
            'code' => 'IL',
            'country' => 'Izrael',
            'length' => 23,
            'format' => 'ILNN NNNN NNNN NNNN NNNN NNN',
            'regex' => 'IL[0-9]{21}'
        ],
        'IS' => [
            'code' => 'IS',
            'country' => 'Islandia',
            'length' => 26,
            'format' => 'ISNN NNNN NNNN NNNN NNNN NNNN NN',
            'regex' => 'IS[0-9]{24}'
        ],
        'IT' => [
            'code' => 'IT',
            'country' => 'Włochy',
            'length' => 27,
            'format' => 'ITNN ANNN NNNN NNNX XXXX XXXX XXX',
            'regex' => 'IT[0-9]{2}[A-Z]{1}[0-9]{10}[A-Z0-9]{12}'
        ],
        'JO' => [
            'code' => 'JO',
            'country' => 'Jordania',
            'length' => 30,
            'format' => 'JONN AAAA NNNN XXXX XXXX XXXX XXXX XX',
            'regex' => 'JO[0-9]{2}[A-Z]{4}[0-9]{4}[A-Z0-9]{18}'
        ],
        'KW' => [
            'code' => 'KW',
            'country' => 'Kuwejt',
            'length' => 30,
            'format' => 'KWNN AAAA XXXX XXXX XXXX XXXX XXXX XX',
            'regex' => 'KW[0-9]{2}[A-Z]{4}[A-Z0-9]{22}'
        ],
        'KZ' => [
            'code' => 'KZ',
            'country' => 'Kazachstan',
            'length' => 20,
            'format' => 'KZNN NNNX XXXX XXXX XXXX',
            'regex' => 'KZ[0-9]{5}[A-Z0-9]{13}'
        ],
        'LB' => [
            'code' => 'LB',
            'country' => 'Liban',
            'length' => 28,
            'format' => 'LBNN NNNN XXXX XXXX XXXX XXXX XXXX',
            'regex' => 'LB[0-9]{6}[A-Z0-9]{20}'
        ],
        'LI' => [
            'code' => 'LI',
            'country' => 'Liechtenstein',
            'length' => 21,
            'format' => 'LINN NNNN NXXX XXXX XXXX X',
            'regex' => 'LI[0-9]{7}[A-Z0-9]{12}'
        ],
        'LT' => [
            'code' => 'LT',
            'country' => 'Litwa',
            'length' => 20,
            'format' => 'LTNN NNNN NNNN NNNN NNNN',
            'regex' => 'LT[0-9]{18}'
        ],
        'LU' => [
            'code' => 'LU',
            'country' => 'Luksemburg',
            'length' => 20,
            'format' => 'LUNN NNNX XXXX XXXX XXXX',
            'regex' => 'LU[0-9]{5}[A-Z0-9]{13}'
        ],
        'LV' => [
            'code' => 'LV',
            'country' => 'Łotwa',
            'length' => 21,
            'format' => 'LVNN AAAA XXXX XXXX XXXX X',
            'regex' => 'LV[0-9]{2}[A-Z]{4}[A-Z0-9]{13}'
        ],
        'MC' => [
            'code' => 'MC',
            'country' => 'Monako',
            'length' => 27,
            'format' => 'MCNN NNNN NNNN NNXX XXXX XXXX XNN',
            'regex' => 'MC[0-9]{12}[A-Z0-9]{11}[0-9]{2}'
        ],
        'MD' => [
            'code' => 'MD',
            'country' => 'Mołdawia',
            'length' => 24,
            'format' => 'MDNN XXXX XXXX XXXX XXXX XXXX',
            'regex' => 'MD[0-9]{2}[A-Z0-9]{20}'
        ],
        'ME' => [
            'code' => 'ME',
            'country' => 'Czarnogóra',
            'length' => 22,
            'format' => 'MENN NNNN NNNN NNNN NNNN NN',
            'regex' => 'ME[0-9]{20}'
        ],
        'MK' => [
            'code' => 'MK',
            'country' => 'Macedonia',
            'length' => 19,
            'format' => 'MKNN NNNX XXXX XXXX XNN',
            'regex' => 'MK[0-9]{5}[A-Z0-9]{10}[0-9]{2}'
        ],
        'MR' => [
            'code' => 'MR',
            'country' => 'Mauretania',
            'length' => 27,
            'format' => 'MR13 NNNN NNNN NNNN NNNN NNNN NNN',
            'regex' => 'MR[0-9]{23}'
        ],
        'MT' => [
            'code' => 'MT',
            'country' => 'Malta',
            'length' => 31,
            'format' => 'MTNN AAAA NNNN NXXX XXXX XXXX XXXX XXX',
            'regex' => 'MT[0-9]{2}[A-Z]{4}[0-9]{5}[A-Z0-9]{18}'
        ],
        'MU' => [
            'code' => 'MU',
            'country' => 'Mauritius',
            'length' => 30,
            'format' => 'MUNN AAAA NNNN NNNN NNNN NNNN NNNA AA',
            'regex' => 'MU[0-9]{2}[A-Z]{4}[0-9]{19}[A-Z]{3}'
        ],
        'NL' => [
            'code' => 'NL',
            'country' => 'Holandia',
            'length' => 18,
            'format' => 'NLNN AAAA NNNN NNNN NN',
            'regex' => 'NL[0-9]{2}[A-Z]{4}[0-9]{10}'
        ],
        'NO' => [
            'code' => 'NO',
            'country' => 'Norwegia',
            'length' => 15,
            'format' => 'NONN NNNN NNNN NNN',
            'regex' => 'NO[0-9]{13}'
        ],
        'PK' => [
            'code' => 'PK',
            'country' => 'Pakistan',
            'length' => 24,
            'format' => 'PKNN AAAA XXXX XXXX XXXX XXXX',
            'regex' => 'PK[0-9]{2}[A-Z]{4}[A-Z0-9]{16}'
        ],
        'PL' => [
            'code' => 'PL',
            'country' => 'Polska',
            'length' => 28,
            'format' => 'PLNN NNNN NNNN NNNN NNNN NNNN NNNN',
            'regex' => 'PL[0-9]{26}'
        ],
        'PS' => [
            'code' => 'PS',
            'country' => 'Palestyna',
            'length' => 29,
            'format' => 'PSNN AAAA XXXX XXXX XXXX XXXX XXXX X',
            'regex' => 'PS[0-9]{2}[A-Z]{4}[A-Z0-9]{21}'
        ],
        'PT' => [
            'code' => 'PT',
            'country' => 'Portugalia',
            'length' => 25,
            'format' => 'PT50 NNNN NNNN NNNN NNNN NNNN N',
            'regex' => 'PT[0-9]{21}'
        ],
        'QA' => [
            'code' => 'QA',
            'country' => 'Katar',
            'length' => 29,
            'format' => 'QANN AAAA XXXX XXXX XXXX XXXX XXXX X',
            'regex' => 'QA[0-9]{2}[A-Z]{4}[A-Z0-9]{21}'
        ],
        'RO' => [
            'code' => 'RO',
            'country' => 'Rumunia',
            'length' => 24,
            'format' => 'RONN AAAA XXXX XXXX XXXX XXXX',
            'regex' => 'RO[0-9]{2}[A-Z]{4}[A-Z0-9]{16}'
        ],
        'RS' => [
            'code' => 'RS',
            'country' => 'Serbia',
            'length' => 22,
            'format' => 'RSNN NNNN NNNN NNNN NNNN NN',
            'regex' => 'RS[0-9]{20}'
        ],
        'SA' => [
            'code' => 'SA',
            'country' => 'Arabia Saudyjska',
            'length' => 24,
            'format' => 'SANN NNXX XXXX XXXX XXXX XXXX',
            'regex' => 'SA[0-9]{4}[A-Z0-9]{18}'
        ],
        'SE' => [
            'code' => 'SE',
            'country' => 'Szwecja',
            'length' => 24,
            'format' => 'SENN NNNN NNNN NNNN NNNN NNNN',
            'regex' => 'SE[0-9]{22}'
        ],
        'SI' => [
            'code' => 'SI',
            'country' => 'Słowenia',
            'length' => 19,
            'format' => 'SINN NNNN NNNN NNNN NNN',
            'regex' => 'SI[0-9]{17}'
        ],
        'SK' => [
            'code' => 'SK',
            'country' => 'Słowacja',
            'length' => 24,
            'format' => 'SKNN NNNN NNNN NNNN NNNN NNNN',
            'regex' => 'SK[0-9]{22}'
        ],
        'SM' => [
            'code' => 'SM',
            'country' => 'San Marino',
            'length' => 27,
            'format' => 'SMNN ANNN NNNN NNNX XXXX XXXX XXX',
            'regex' => 'SM[0-9]{2}[A-Z]{1}[0-9]{10}[A-Z0-9]{12}'
        ],
        'TN' => [
            'code' => 'TN',
            'country' => 'Tunezja',
            'length' => 24,
            'format' => 'TN59 NNNN NNNN NNNN NNNN NNNN',
            'regex' => 'TN[0-9]{20}'
        ],
        'TR' => [
            'code' => 'TR',
            'country' => 'Turcja',
            'length' => 26,
            'format' => 'TRNN NNNN NXXX XXXX XXXX XXXX XX',
            'regex' => 'TR[0-9]{7}[A-Z0-9]{17}'
        ],
        'VG' => [
            'code' => 'VG',
            'country' => 'Brytyjskie Wyspy Dziewicze',
            'length' => 24,
            'format' => 'VGNN AAAA NNNN NNNN NNNN NNNN',
            'regex' => 'VG[0-9]{2}[A-Z]{4}[0-9]{16}'
        ]
    ];
}
