<?php

namespace Aedart\Contracts\Container;

use Illuminate\Contracts\Container\BindingResolutionException;

/**
 * List Resolver
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 * @package Aedart\Contracts\Container
 */
interface ListResolver
{
    /**
     * Resolves list of dependencies
     *
     * Method invokes callback with each resolved instance,
     * if provided.
     *
     * @see with
     *
     * @param  array  $dependencies  List of class paths, identifiers or key-value pairs, where
     *                              key = class path, value = instance arguments.
     *
     * @return mixed[]
     *
     * @throws BindingResolutionException
     */
    public function make(array $dependencies): array;

    /**
     * Add callback to be invoked for each resolved instance
     *
     * @param  callable  $callback  Resolved instance is given as callback argument.
     *                             Callback MUST return the resolved instance!
     *
     * @return self
     */
    public function with(callable $callback): self;
}
