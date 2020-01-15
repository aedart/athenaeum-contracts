<?php

namespace Aedart\Contracts\Support\Properties\Dates;

/**
 * Purchase date Aware
 *
 * Component is aware of \DateTime "purchase date"
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 * @package Aedart\Contracts\Support\Properties\Dates
 */
interface PurchaseDateAware
{
    /**
     * Set purchase date
     *
     * @param \DateTime|null $date Date of planned purchase
     *
     * @return self
     */
    public function setPurchaseDate(?\DateTime $date);

    /**
     * Get purchase date
     *
     * If no "purchase date" value set, method
     * sets and returns a default "purchase date".
     *
     * @see getDefaultPurchaseDate()
     *
     * @return \DateTime|null purchase date or null if no purchase date has been set
     */
    public function getPurchaseDate() : ?\DateTime;

    /**
     * Check if "purchase date" has been set
     *
     * @return bool True if "purchase date" has been set, false if not
     */
    public function hasPurchaseDate() : bool;

    /**
     * Get a default "purchase date" value, if any is available
     *
     * @return \DateTime|null Default "purchase date" value or null if no default value is available
     */
    public function getDefaultPurchaseDate() : ?\DateTime;
}
