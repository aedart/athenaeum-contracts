<?php

namespace Aedart\Contracts\Support\Properties\Strings;

/**
 * Ean13 Aware
 *
 * Component is aware of string "ean13"
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 * @package Aedart\Contracts\Support\Properties\Strings
 */
interface Ean13Aware
{
    /**
     * Set ean13
     *
     * @param string|null $ean13 International Article Number (EAN), 13-digit
     *
     * @return self
     */
    public function setEan13(?string $ean13);

    /**
     * Get ean13
     *
     * If no "ean13" value set, method
     * sets and returns a default "ean13".
     *
     * @see getDefaultEan13()
     *
     * @return string|null ean13 or null if no ean13 has been set
     */
    public function getEan13() : ?string;

    /**
     * Check if "ean13" has been set
     *
     * @return bool True if "ean13" has been set, false if not
     */
    public function hasEan13() : bool;

    /**
     * Get a default "ean13" value, if any is available
     *
     * @return string|null Default "ean13" value or null if no default value is available
     */
    public function getDefaultEan13() : ?string;
}
