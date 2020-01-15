<?php

namespace Aedart\Contracts\Support\Properties\Strings;

/**
 * Released at Aware
 *
 * Component is aware of string "released at"
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 * @package Aedart\Contracts\Support\Properties\Strings
 */
interface ReleasedAtAware
{
    /**
     * Set released at
     *
     * @param string|null $date Date of when this component, entity or something was released
     *
     * @return self
     */
    public function setReleasedAt(?string $date);

    /**
     * Get released at
     *
     * If no "released at" value set, method
     * sets and returns a default "released at".
     *
     * @see getDefaultReleasedAt()
     *
     * @return string|null released at or null if no released at has been set
     */
    public function getReleasedAt() : ?string;

    /**
     * Check if "released at" has been set
     *
     * @return bool True if "released at" has been set, false if not
     */
    public function hasReleasedAt() : bool;

    /**
     * Get a default "released at" value, if any is available
     *
     * @return string|null Default "released at" value or null if no default value is available
     */
    public function getDefaultReleasedAt() : ?string;
}
