<?php

namespace Aedart\Contracts\Database\Models;

/**
 * Sluggable
 *
 * @author Alin Eugen Deac <ade@rspsystems.com>
 * @package Aedart\Contracts\Database\Models
 */
interface Sluggable
{
    /**
     * Default slug key name
     */
    public const DEFAULT_SLUG_KEY_NAME = 'slug';

    /**
     * Returns the name of the slug key
     *
     * @return string Name of slug key or a default slug key name,
     *                if model has none specified.
     */
    public function getSlugKeyName(): string;

    /**
     * Returns the slug key
     *
     * @return string|null
     */
    public function getSlugKey(): ?string;

    /**
     * Find model by given slug
     *
     * @param string $slug
     * @param string[] $columns [optional]
     *
     * @return \Illuminate\Database\Eloquent\Model|static|null
     */
    public static function findBySlug(string $slug, array $columns = ['*']);

    /**
     * Find model by given slug or fail
     *
     * @param string $slug
     * @param string[] $columns [optional]
     *
     * @return \Illuminate\Database\Eloquent\Model|static
     *
     * @throws \Illuminate\Database\Eloquent\ModelNotFoundException
     * @throws \Illuminate\Database\MultipleRecordsFoundException
     */
    public static function findBySlugOrFail(string $slug, array $columns = ['*']);

    /**
     * Find model by given slug or create new model
     *
     * @param string $slug
     * @param array $values [optional]
     *
     * @return \Illuminate\Database\Eloquent\Model|static
     */
    public static function findOrCreateBySlug(string $slug, array $values = []);

    /**
     * Find multiple models by given slugs
     *
     * @param mixed $slugs
     * @param string[] $columns [optional]
     *
     * @return static[]|\Illuminate\Database\Eloquent\Collection
     */
    public static function findManyBySlugs($slugs, array $columns = ['*']);

    /**
     * Query scope for finding model via given slug
     *
     * @param \Illuminate\Database\Eloquent\Builder $scope
     * @param string $slug
     *
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeWhereSlug($scope, string $slug);

    /**
     * Query scope for finding models that match given slugs
     *
     * @param \Illuminate\Database\Eloquent\Builder $scope
     * @param mixed $slugs
     *
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeWhereSlugIn($scope, $slugs);
}
