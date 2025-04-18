<?php

namespace Aedart\Contracts\Support\Properties\Integers;

/**
 * @deprecated Since version 9.x. Component will be removed in next major version.
 *
 * Age Aware
 *
 * Component is aware of int "age"
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 * @package Aedart\Contracts\Support\Properties\Integers
 */
interface AgeAware
{
    /**
     * Set age
     *
     * @param int|null $age Age of someone or something
     *
     * @return self
     */
    public function setAge(int|null $age): static;

    /**
     * Get age
     *
     * If no age value set, method
     * sets and returns a default age.
     *
     * @see getDefaultAge()
     *
     * @return int|null age or null if no age has been set
     */
    public function getAge(): int|null;

    /**
     * Check if age has been set
     *
     * @return bool True if age has been set, false if not
     */
    public function hasAge(): bool;

    /**
     * Get a default age value, if any is available
     *
     * @return int|null Default age value or null if no default value is available
     */
    public function getDefaultAge(): int|null;
}
