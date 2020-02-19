<?php

namespace Aedart\Contracts\Support\Properties\Strings;

/**
 * Index Aware
 *
 * Component is aware of string "index"
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 * @package Aedart\Contracts\Support\Properties\Strings
 */
interface IndexAware
{
    /**
     * Set index
     *
     * @param string|null $index Index
     *
     * @return self
     */
    public function setIndex(?string $index);

    /**
     * Get index
     *
     * If no "index" value set, method
     * sets and returns a default "index".
     *
     * @see getDefaultIndex()
     *
     * @return string|null index or null if no index has been set
     */
    public function getIndex(): ?string;

    /**
     * Check if "index" has been set
     *
     * @return bool True if "index" has been set, false if not
     */
    public function hasIndex(): bool;

    /**
     * Get a default "index" value, if any is available
     *
     * @return string|null Default "index" value or null if no default value is available
     */
    public function getDefaultIndex(): ?string;
}
