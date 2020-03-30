<?php

namespace Aedart\Contracts\Http\Clients\Requests\Query;

use Aedart\Contracts\Http\Clients\Exceptions\HttpQueryBuilderException;
use Aedart\Contracts\Http\Clients\Requests\Query\Grammars\GrammarAware;
use Illuminate\Contracts\Support\Arrayable;

/**
 * Http Query Builder
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 * @package Aedart\Contracts\Http\Clients\Requests\Query
 */
interface Builder extends Identifiers,
    GrammarAware,
    Arrayable
{
    /**
     * Select the fields to be returned
     *
     * Examples:
     *
     * ```php
     * // Select single field
     * $query->select('name');
     *
     * // Select multiple fields
     * $query->select(['name', 'age']);
     *
     * // Select field from a resource
     * $query->select('name', 'person');
     *
     * // Select multiple fields from resources
     * $query->select([
     *      // field => from resource
     *      'name' => 'person',
     *      'income' => 'job'
     * ]);
     * ```
     *
     * @see https://jsonapi.org/format/1.1/#fetching-sparse-fieldsets
     * @see http://docs.oasis-open.org/odata/odata/v4.01/odata-v4.01-part2-url-conventions.html#sec_SystemQueryOptionselect
     *
     * @param string|string[] $field Field or list of fields to select
     * @param string|null $resource [optional] Name of resource from which the fields should be selected.
     *                              Note: this value might be ignored, depending on what {@see Grammar} is
     *                              used.
     *
     * @return self
     */
    public function select($field, ?string $resource = null): self;

    /**
     * Select a raw expression
     *
     * Examples:
     *
     * ```php
     * // Injects binding values into expression,
     * // e.g. ":number" becomes 42
     * $query->selectRaw('account(:number)', [ 'number' => 42]);
     * ```
     *
     * @param string $expression
     * @param array $bindings [optional] Evt. values to be injected into the raw query string
     *
     * @return self
     */
    public function selectRaw($expression, array $bindings = []): self;

    /**
     * Add a "where" condition or filter
     *
     * Examples:
     *
     * ```php
     * // field = value
     * $query->where('name', 'john');
     *
     * // Specific operator
     * $query->where('year', 'gt', 2020);
     *
     * // Multiple where conditions
     * $query->where([
     *      'name' => 'john'
     *      'year' => [ 'gt' => 2020 ]
     * ]);
     * ```
     *
     * @see https://jsonapi.org/format/1.1/#fetching-filtering
     * @see https://jsonapi.org/format/1.1/#query-parameters
     * @see http://docs.oasis-open.org/odata/odata/v4.01/odata-v4.01-part2-url-conventions.html#sec_CommonExpressionSyntax
     * @see http://docs.oasis-open.org/odata/odata/v4.01/odata-v4.01-part2-url-conventions.html#sec_SystemQueryOptionfilter
     *
     * @param string|array $field Name of field or filter. If an array is given, then every entry is treated as a where
     *                            condition.
     * @param mixed $operator [optional] Operator or value
     * @param mixed $value [optional] Value. If omitted, then second argument is considered
     *                      to act as the value.
     *
     * @return self
     */
    public function where($field, $operator = null, $value = null): self;

    /**
     * Add a raw "where" condition or filter
     *
     * @param string|array $query Raw query string, or array of query parameters
     * @param array $bindings [optional] Evt. values to be injected into the raw query string
     *
     * @return self
     */
    public function whereRaw($query, array $bindings = []): self;

    /**
     * Include one or more related resources in the response
     *
     * @see https://jsonapi.org/format/1.1/#fetching-includes
     * @see http://docs.oasis-open.org/odata/odata/v4.01/odata-v4.01-part2-url-conventions.html#sec_SystemQueryOptionexpand
     *
     * @param string|array $resource
     *
     * @return self
     */
    public function include($resource): self;

    /**
     * Limit the amount of results to be returned
     *
     * @see https://jsonapi.org/format/1.1/#fetching-pagination
     * @see http://docs.oasis-open.org/odata/odata/v4.01/odata-v4.01-part2-url-conventions.html#sec_SystemQueryOptionstopandskip
     *
     * @param int $amount
     *
     * @return self
     */
    public function limit(int $amount): self;

    /**
     * Skip over given amount of results
     *
     * @see https://jsonapi.org/format/1.1/#fetching-pagination
     * @see http://docs.oasis-open.org/odata/odata/v4.01/odata-v4.01-part2-url-conventions.html#sec_SystemQueryOptionstopandskip
     *
     * @param int $offset
     *
     * @return self
     */
    public function offset(int $offset): self;

    /**
     * Alias for {@see limit}
     *
     * @param int $amount
     *
     * @return self
     */
    public function take(int $amount): self;

    /**
     * Alias for {@see offset}
     *
     * @param int $offset
     *
     * @return self
     */
    public function skip(int $offset): self;

    /**
     * Return results on given page number
     *
     * @param int $number
     *
     * @return self
     */
    public function page(int $number): self;

    /**
     * Limit the amount of results per page
     *
     * @see page
     *
     * @param int $amount
     *
     * @return self
     */
    public function show(int $amount): self;

    /**
     * Order results by given field or fields
     *
     * @see https://jsonapi.org/format/1.1/#fetching-sorting
     * @see http://docs.oasis-open.org/odata/odata/v4.01/odata-v4.01-part2-url-conventions.html#sec_SystemQueryOptionorderby
     *
     * @param string|string[] $field Field to order results by
     * @param string $direction [optional] Ascending or descending order
     *
     * @return self
     */
    public function orderBy($field, string $direction = self::ASCENDING): self;

    /**
     * Build this http query
     *
     * Method MUST use {@see Grammar} provided by the {@see getGrammar}
     * to build a http query, which can be applied on a request
     *
     * @return string Http query string.
     *
     * @throws HttpQueryBuilderException If unable to build http query
     */
    public function build(): string;
}