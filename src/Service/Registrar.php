<?php

namespace Aedart\Contracts\Service;

use Illuminate\Support\ServiceProvider;

/**
 * Service Provider Registrar
 *
 * Able to register and boot service providers.
 *
 * @see \Illuminate\Support\ServiceProvider
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 * @package Aedart\Contracts\Service
 */
interface Registrar
{
    /**
     * Register a service provider
     *
     * @param ServiceProvider|string $provider Service Provider instance or string namespace of provider
     * @param bool $boot [optional] Boot the given provider after registration, if not already booted
     *
     * @return bool False if provider already registered
     * @see boot()
     *
     */
    public function register($provider, bool $boot = true): bool;

    /**
     * Register multiple service providers
     *
     * @param ServiceProvider[]|string[] $providers Service Provider instances or list of string namespaces
     * @param bool $boot [optional] Boot providers after registration, if not already booted
     * @param bool $safeBoot [optional] If true, then providers are only booted after all
     *                       the given providers have been registered.
     * @see register()
     * @see boot()
     *
     */
    public function registerMultiple(array $providers, bool $boot = true, bool $safeBoot = true): void;

    /**
     * Boot service provider
     *
     * @param ServiceProvider $provider
     *
     * @return bool False if already booted or provider does not contain a boot method
     * @see booted()
     *
     */
    public function boot(ServiceProvider $provider): bool;

    /**
     * Boot the given list of service providers
     *
     * @param ServiceProvider[] $providers
     * @see boot()
     *
     */
    public function bootMultiple(array $providers): void;

    /**
     * Boot all service providers
     *
     * Method will not boot providers that have already
     * been booted
     *
     * @see boot()
     */
    public function bootAll(): void;

    /**
     * Determine if service provider has been registered
     *
     * @param ServiceProvider|string $provider
     *
     * @return bool
     */
    public function isRegistered($provider): bool;

    /**
     * Determine if given service provider has been booted
     *
     * @param ServiceProvider $provider
     *
     * @return bool
     */
    public function hasBooted(ServiceProvider $provider): bool;

    /**
     * Get the registered service providers
     *
     * @return ServiceProvider[]
     */
    public function providers(): array;

    /**
     * Get the registered service providers instances that match
     * given service provider
     *
     * @param ServiceProvider|string $provider Service provider instance or class path
     *
     * @return ServiceProvider[]
     */
    public function getProviders($provider) : array ;

    /**
     * Get the booted service providers
     *
     * @return ServiceProvider[]
     */
    public function booted(): array;

    /**
     * Create service provider instance, if required
     *
     * @param ServiceProvider|string $provider Service Provider or class path
     *
     * @return ServiceProvider
     */
    public function resolveProvider($provider) : ServiceProvider ;
}
