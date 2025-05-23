<?php

namespace Aedart\Contracts\Support\Properties\Strings;

/**
 * @deprecated Since version 9.x. Component will be removed in next major version.
 *
 * Ip Aware
 *
 * Component is aware of string "ip"
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 * @package Aedart\Contracts\Support\Properties\Strings
 */
interface IpAware
{
    /**
     * Set ip
     *
     * @param string|null $address IP address
     *
     * @return self
     */
    public function setIp(string|null $address): static;

    /**
     * Get ip
     *
     * If no ip value set, method
     * sets and returns a default ip.
     *
     * @see getDefaultIp()
     *
     * @return string|null ip or null if no ip has been set
     */
    public function getIp(): string|null;

    /**
     * Check if ip has been set
     *
     * @return bool True if ip has been set, false if not
     */
    public function hasIp(): bool;

    /**
     * Get a default ip value, if any is available
     *
     * @return string|null Default ip value or null if no default value is available
     */
    public function getDefaultIp(): string|null;
}
