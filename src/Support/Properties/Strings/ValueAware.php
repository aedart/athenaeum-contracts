<?php

namespace Aedart\Contracts\Support\Properties\Strings;

/**
 * Value Aware
 *
 * Component is aware of string "value"
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 * @package Aedart\Contracts\Support\Properties\Strings
 */
interface ValueAware
{
    /**
     * Set value
     *
     * @param string|null $value Value
     *
     * @return self
     */
    public function setValue(?string $value);

    /**
     * Get value
     *
     * If no "value" value set, method
     * sets and returns a default "value".
     *
     * @see getDefaultValue()
     *
     * @return string|null value or null if no value has been set
     */
    public function getValue(): ?string;

    /**
     * Check if "value" has been set
     *
     * @return bool True if "value" has been set, false if not
     */
    public function hasValue(): bool;

    /**
     * Get a default "value" value, if any is available
     *
     * @return string|null Default "value" value or null if no default value is available
     */
    public function getDefaultValue(): ?string;
}
