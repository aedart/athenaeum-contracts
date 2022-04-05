<?php

namespace Aedart\Contracts\Streams\Locks;

use Aedart\Contracts\Streams\Exceptions\LockException;
use Aedart\Contracts\Streams\Stream;

/**
 * Lock Factory
 *
 * Inspired by Symfony's Lock Factory
 * @see https://github.com/symfony/lock/blob/5.4/LockFactory.php
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 * @package Aedart\Contracts\Streams\Locks
 */
interface Factory
{
    /**
     * Creates a new lock instance for stream
     *
     * @param  Stream  $stream
     * @param  string|null  $profile  [optional] Name of profile driver to use. If none is given,
     *                               then a default driver will be used.
     * @param  array  $options  [optional] Driver specific options
     *
     * @return Lock
     *
     * @throws LockException
     */
    public function create(Stream $stream, string|null $profile = null, array $options = []): Lock;
}
