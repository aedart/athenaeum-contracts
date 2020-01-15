<?php

namespace Aedart\Contracts\Support\Properties\Strings;

/**
 * Produced at Aware
 *
 * Component is aware of string "produced at"
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 * @package Aedart\Contracts\Support\Properties\Strings
 */
interface ProducedAtAware
{
    /**
     * Set produced at
     *
     * @param string|null $date Date of when this component, entity or something was produced
     *
     * @return self
     */
    public function setProducedAt(?string $date);

    /**
     * Get produced at
     *
     * If no "produced at" value set, method
     * sets and returns a default "produced at".
     *
     * @see getDefaultProducedAt()
     *
     * @return string|null produced at or null if no produced at has been set
     */
    public function getProducedAt() : ?string;

    /**
     * Check if "produced at" has been set
     *
     * @return bool True if "produced at" has been set, false if not
     */
    public function hasProducedAt() : bool;

    /**
     * Get a default "produced at" value, if any is available
     *
     * @return string|null Default "produced at" value or null if no default value is available
     */
    public function getDefaultProducedAt() : ?string;
}
