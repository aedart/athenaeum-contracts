<?php

namespace Aedart\Contracts\Support\Properties\Strings;

/**
 * Purchase date Aware
 *
 * Component is aware of string "purchase date"
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 * @package Aedart\Contracts\Support\Properties\Strings
 */
interface PurchaseDateAware
{
    /**
     * Set purchase date
     *
     * @param string|null $date Date of planned purchase
     *
     * @return self
     */
    public function setPurchaseDate(?string $date);

    /**
     * Get purchase date
     *
     * If no "purchase date" value set, method
     * sets and returns a default "purchase date".
     *
     * @see getDefaultPurchaseDate()
     *
     * @return string|null purchase date or null if no purchase date has been set
     */
    public function getPurchaseDate() : ?string;

    /**
     * Check if "purchase date" has been set
     *
     * @return bool True if "purchase date" has been set, false if not
     */
    public function hasPurchaseDate() : bool;

    /**
     * Get a default "purchase date" value, if any is available
     *
     * @return string|null Default "purchase date" value or null if no default value is available
     */
    public function getDefaultPurchaseDate() : ?string;
}
