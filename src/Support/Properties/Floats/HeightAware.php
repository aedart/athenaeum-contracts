<?php

namespace Aedart\Contracts\Support\Properties\Floats;

/**
 * Height Aware
 *
 * Component is aware of float "height"
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 * @package Aedart\Contracts\Support\Properties\Floats
 */
interface HeightAware
{
    /**
     * Set height
     *
     * @param float|null $amount Height of something
     *
     * @return self
     */
    public function setHeight(?float $amount);

    /**
     * Get height
     *
     * If no "height" value set, method
     * sets and returns a default "height".
     *
     * @see getDefaultHeight()
     *
     * @return float|null height or null if no height has been set
     */
    public function getHeight(): ?float;

    /**
     * Check if "height" has been set
     *
     * @return bool True if "height" has been set, false if not
     */
    public function hasHeight(): bool;

    /**
     * Get a default "height" value, if any is available
     *
     * @return float|null Default "height" value or null if no default value is available
     */
    public function getDefaultHeight(): ?float;
}
