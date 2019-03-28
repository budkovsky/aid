<?php
declare(strict_types=1);

namespace Budkovsky\Aid\Enum;

/**
 * SEPA enumeration
 */
class SepaEnum
{
    /**
     * Sepa list by BIC country code
     *
     * Index: BIC country code
     * Fields:
     * * territory - country or territory
     * * bic - BIC country code, 5th and 6th character from full BIC
     * * iban - IBAN code
     * * currency: currency symbol
     *
     * @var array
     */
    public const LIST = [
        'AT' => [
            'territory' => 'Austria',
            'bic' => 'AT',
            'iban' => 'AT',
            'currency' => 'EUR',
        ],
        'BE' => [
            'territory' => 'Belgium',
            'bic' => 'BE',
            'iban' => 'BE',
            'currency' => 'EUR',
        ],
        'BG' => [
            'territory' => 'Bulgaria',
            'bic' => 'BG',
            'iban' => 'BG',
            'currency' => 'BGN',
        ],
        'ES' => [
            'territory' => 'Canary Island',
            'bic' => 'ES',
            'iban' => 'ES',
            'currency' => 'EUR',
        ],
        'CY' => [
            'territory' => 'Cyprus',
            'bic' => 'CY',
            'iban' => 'CY',
            'currency' => 'EUR',
        ],
        'CZ' => [
            'territory' => 'Czech Republic',
            'bic' => 'CZ',
            'iban' => 'CZ',
            'currency' => 'CZK',
        ],
        'DK' => [
            'territory' => 'Denmark',
            'bic' => 'DK',
            'iban' => 'DK',
            'currency' => 'DKK',
        ],
        'EE' => [
            'territory' => 'Estonia',
            'bic' => 'EE',
            'iban' => 'EE',
            'currency' => 'EUR',
        ],
        'FI' => [
            'territory' => 'Finland',//including Åland Islands
            'bic' => 'FI',
            'iban' => 'FI',
            'currency' => 'EUR',
        ],
        'FR' => [
            'territory' => 'France',
            'bic' => 'FR',
            'iban' => 'FR',
            'currency' => 'EUR',
        ],
        'GF' => [
            'territory' => 'French Guiana',
            'bic' => 'GF',
            'iban' => 'FR',
            'currency' => 'FR',
        ],
        'DE' => [
            'territory' => 'Germany',
            'bic' => 'DE',
            'iban' => 'DE',
            'currency' => 'EUR',
        ],
        'GI' => [
            'territory' => 'Gibraltar',
            'bic' => 'GI',
            'iban' => 'GI',
            'currency' => 'GIP',
        ],
        'GR' => [
            'territory' => 'Greece',
            'bic' => 'GR',
            'iban' => 'GR',
            'currency' => 'EUR',
        ],
        'GP' => [
            'territory' => 'Guadeloupe',
            'bic' => 'GP',
            'iban' => 'FR',
            'currency' => 'FR',
        ],
        'HU' => [
            'territory' => 'Hungary',
            'bic' => 'HU',
            'iban' => 'HU',
            'currency' => 'HUF',
        ],
        'IS' => [
            'territory' => 'Iceland',
            'bic' => 'IS',
            'iban' => 'IS',
            'currency' => 'ISK',
        ],
        'IE' => [
            'territory' => 'Ireland',
            'bic' => 'IE',
            'iban' => 'IE',
            'currency' => 'EUR',
        ],
        'IT' => [
            'territory' => 'Italy',
            'bic' => 'IT',
            'iban' => 'IT',
            'currency' => 'EUR',
        ],
        'LV' => [
            'territory' => 'Latvia',
            'bic' => 'LV',
            'iban' => 'LV',
            'currency' => 'EUR',
        ],
        'LI' => [
            'territory' => 'Liechtenstein',
            'bic' => 'LI',
            'iban' => 'LI',
            'currency' => 'CHF',
        ],
        'LT' => [
            'territory' => 'Lithuania',
            'bic' => 'LT',
            'iban' => 'LT',
            'currency' => 'EUR',
        ],
        'LU' => [
            'territory' => 'Luxembourg',
            'bic' => 'LU',
            'iban' => 'LU',
            'currency' => 'EUR',
        ],
        'PT' => [
            'territory' => 'Madeira',
            'bic' => 'PT',
            'iban' => 'PT',
            'currency' => 'EUR',
        ],
        'MT' => [
            'territory' => 'Malta',
            'bic' => 'MT',
            'iban' => 'MT',
            'currency' => 'EUR',
        ],
        'MQ' => [
            'territory' => 'Martinique',
            'bic' => 'MQ',
            'iban' => 'FR',
            'currency' => 'FR',
        ],
        'YT' => [
            'territory' => 'Mayotte',
            'bic' => 'YT',
            'iban' => 'FR',
            'currency' => 'FR',
        ],
        'MC' => [
            'territory' => 'Monaco',
            'bic' => 'MC',
            'iban' => 'MC',
            'currency' => 'EUR',
        ],
        'NL' => [
            'territory' => 'Netherlands',
            'bic' => 'NL',
            'iban' => 'NL',
            'currency' => 'EUR',
        ],
        'NO' => [
            'territory' => 'Norway',
            'bic' => 'NO',
            'iban' => 'NO',
            'currency' => 'NOK',
        ],
        'PL' => [
            'territory' => 'Poland',
            'bic' => 'PL',
            'iban' => 'PL',
            'currency' => 'PLN',
        ],
        'PT' => [
            'territory' => 'Portugal',//including Azores
            'bic' => 'PT',
            'iban' => 'PT',
            'currency' => 'EUR',
        ],
        'RE' => [
            'territory' => 'Réunion',
            'bic' => 'RE',
            'iban' => 'FR',
            'currency' => 'FR',
        ],
        'RO' => [
            'territory' => 'Romania',
            'bic' => 'RO',
            'iban' => 'RO',
            'currency' => 'RON',
        ],
        'BL' => [
            'territory' => 'Saint Barthélemy',
            'bic' => 'BL',
            'iban' => 'FR',
            'currency' => 'FR',
        ],
        'MF' => [
            'territory' => 'Saint Martin (French part)',
            'bic' => 'MF',
            'iban' => 'FR',
            'currency' => 'FR',
        ],
        'PM' => [
            'territory' => 'Saint Pierre and Miquelon',
            'bic' => 'PM',
            'iban' => 'FR',
            'currency' => 'FR',
        ],
        'SM' => [
            'territory' => 'San Marino',
            'bic' => 'SM',
            'iban' => 'SM',
            'currency' => 'EUR',
        ],
        'SK' => [
            'territory' => 'Slovakia',
            'bic' => 'SK',
            'iban' => 'SK',
            'currency' => 'EUR',
        ],
        'SI' => [
            'territory' => 'Slovenia',
            'bic' => 'SI',
            'iban' => 'SI',
            'currency' => 'EUR',
        ],
        'ES' => [
            'territory' => 'Spain',
            'bic' => 'ES',
            'iban' => 'ES',
            'currency' => 'EUR',
        ],
        'SE' => [
            'territory' => 'Sweden',
            'bic' => 'SE',
            'iban' => 'SE',
            'currency' => 'SEK',
        ],
        'CH' => [
            'territory' => 'Switzerland',
            'bic' => 'CH',
            'iban' => 'CH',
            'currency' => 'CHF',
        ],
        'GB' => [
            'territory' => 'UK',
            'bic' => 'GB',
            'iban' => 'GB',
            'currency' => 'GBP',
        ],
    ];
}
