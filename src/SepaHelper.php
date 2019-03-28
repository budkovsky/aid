<?php
declare(strict_types=1);

namespace BudkovBudkovsky\Aid;

use Budkovsky\Aid\Enum\SepaEnum;

/**
 * SEPA helper
 */
class SepaHelper
{
    /**
     * Checks is BIC in SEPA
     *
     * @param string $bicCode full BIC code, or country code from BIC
     * @param bool $isCountryCodeOnly if true, first param should be 2-letters country code from BIC
     * @return bool
     */
    public static function isBicInSepa(string $bicCode, bool $isCountryCodeOnly = false): bool
    {
        $countryCode = $isCountryCodeOnly ? $bicCode : substr($bicCode, 4, 2);
        
        return in_array(strtoupper($countryCode), array_keys(SepaEnum::LIST));
    }
}
