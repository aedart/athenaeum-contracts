<?php

namespace Aedart\Contracts\Support\Properties\Strings;

/**
 * Mac address Aware
 *
 * Component is aware of string "mac address"
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 * @package Aedart\Contracts\Support\Properties\Strings
 */
interface MacAddressAware
{
    /**
     * Set mac address
     *
     * @param string|null $address Media Access Control Address (MAC Address)
     *
     * @return self
     */
    public function setMacAddress(?string $address);

    /**
     * Get mac address
     *
     * If no "mac address" value set, method
     * sets and returns a default "mac address".
     *
     * @see getDefaultMacAddress()
     *
     * @return string|null mac address or null if no mac address has been set
     */
    public function getMacAddress(): ?string;

    /**
     * Check if "mac address" has been set
     *
     * @return bool True if "mac address" has been set, false if not
     */
    public function hasMacAddress(): bool;

    /**
     * Get a default "mac address" value, if any is available
     *
     * @return string|null Default "mac address" value or null if no default value is available
     */
    public function getDefaultMacAddress(): ?string;
}
