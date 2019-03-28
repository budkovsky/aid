<?php
declare(strict_types=1);

namespace Budkovsky\Aid;

use Budkovsky\Aid\Enum\IbanEnum;

/**
 * IBAN helper
 */
class IbanHelper
{
    /**
     * @param string $iban IBAN number
     * @return string Returns country code or null if input is invalid
     */
    public static function getCountryCode(string $iban): ?string
    {
        $iban = strtoupper($iban);
        $countryCode = substr($iban, 0, 2);
        
        if (!self::isvalidCountryCode($countryCode)) {
            return null;
        }

        $result = preg_match(
            sprintf('/^%s$/', IbanEnum::LIST[$countryCode]['regex']),
            $iban
        );
        
        return is_int($result) && $result > 0 ? $countryCode : null;
    }
    
    /**
     * @param string $iban
     * @return bool
     */
    public static function isValid(string $iban): bool
    {
        return self::getCountryCode($iban) !== null;
    }
    
    /**
     * Validation of IBAN country code
     * @see IbanEnum class
     * @param string $code
     * @return bool
     */
    public static function isValidCountryCode(string $countryCode): bool
    {
        return in_array($countryCode, array_keys(IbanEnum::LIST));
    }
    
    /**
     * Extracts IBANs from a string
     * @param string $string
     * @param array $codes Filter for given IBAN codes
     * @return array
     */
    public static function getFromString(string $string, array $codes = []): array
    {
        if (empty($codes)) {
            $codes = array_keys(IbanEnum::LIST);
        }
        $result = [];
        foreach ($codes as $code) {
            $code = strtoupper($code);
            if (!isset(IbanEnum::LIST[$code])) {
                continue;
            }
            $matches = [];
            $matched = preg_match_all(
                sprintf('/%s/', IbanEnum::LIST[$code]['regex']),
                $string,
                $matches
            );
            if (is_int($matched) && $matched > 0) {
                foreach ($matches[0] as $match) {
                    if (in_array($match, $result)) {
                        continue;
                    }
                    $result[] = $match;
                }
            }
        }
        
        return $result;
    }

}
