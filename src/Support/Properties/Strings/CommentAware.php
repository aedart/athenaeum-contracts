<?php

namespace Aedart\Contracts\Support\Properties\Strings;

/**
 * Comment Aware
 *
 * Component is aware of string "comment"
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 * @package Aedart\Contracts\Support\Properties\Strings
 */
interface CommentAware
{
    /**
     * Set comment
     *
     * @param string|null $content A comment
     *
     * @return self
     */
    public function setComment(?string $content);

    /**
     * Get comment
     *
     * If no "comment" value set, method
     * sets and returns a default "comment".
     *
     * @see getDefaultComment()
     *
     * @return string|null comment or null if no comment has been set
     */
    public function getComment(): ?string;

    /**
     * Check if "comment" has been set
     *
     * @return bool True if "comment" has been set, false if not
     */
    public function hasComment(): bool;

    /**
     * Get a default "comment" value, if any is available
     *
     * @return string|null Default "comment" value or null if no default value is available
     */
    public function getDefaultComment(): ?string;
}
