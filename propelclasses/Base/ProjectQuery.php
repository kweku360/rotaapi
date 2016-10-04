<?php

namespace Base;

use \Project as ChildProject;
use \ProjectQuery as ChildProjectQuery;
use \Exception;
use \PDO;
use Map\ProjectTableMap;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\ModelCriteria;
use Propel\Runtime\Collection\ObjectCollection;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\Exception\PropelException;

/**
 * Base class that represents a query for the 'project' table.
 *
 *
 *
 * @method     ChildProjectQuery orderById($order = Criteria::ASC) Order by the id column
 * @method     ChildProjectQuery orderByUuid($order = Criteria::ASC) Order by the uuid column
 * @method     ChildProjectQuery orderByName($order = Criteria::ASC) Order by the name column
 * @method     ChildProjectQuery orderByurlcode($order = Criteria::ASC) Order by the urlcode column
 * @method     ChildProjectQuery orderBystatus($order = Criteria::ASC) Order by the status column
 * @method     ChildProjectQuery orderByCountry($order = Criteria::ASC) Order by the country column
 * @method     ChildProjectQuery orderByCountrycode($order = Criteria::ASC) Order by the countrycode column
 * @method     ChildProjectQuery orderByCity($order = Criteria::ASC) Order by the city column
 * @method     ChildProjectQuery orderByStartdate($order = Criteria::ASC) Order by the startdate column
 * @method     ChildProjectQuery orderByClubuuid($order = Criteria::ASC) Order by the clubuuid column
 * @method     ChildProjectQuery orderByenddate($order = Criteria::ASC) Order by the enddate column
 * @method     ChildProjectQuery orderByCreated($order = Criteria::ASC) Order by the created column
 * @method     ChildProjectQuery orderByModified($order = Criteria::ASC) Order by the modified column
 *
 * @method     ChildProjectQuery groupById() Group by the id column
 * @method     ChildProjectQuery groupByUuid() Group by the uuid column
 * @method     ChildProjectQuery groupByName() Group by the name column
 * @method     ChildProjectQuery groupByurlcode() Group by the urlcode column
 * @method     ChildProjectQuery groupBystatus() Group by the status column
 * @method     ChildProjectQuery groupByCountry() Group by the country column
 * @method     ChildProjectQuery groupByCountrycode() Group by the countrycode column
 * @method     ChildProjectQuery groupByCity() Group by the city column
 * @method     ChildProjectQuery groupByStartdate() Group by the startdate column
 * @method     ChildProjectQuery groupByClubuuid() Group by the clubuuid column
 * @method     ChildProjectQuery groupByenddate() Group by the enddate column
 * @method     ChildProjectQuery groupByCreated() Group by the created column
 * @method     ChildProjectQuery groupByModified() Group by the modified column
 *
 * @method     ChildProjectQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ChildProjectQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ChildProjectQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ChildProjectQuery leftJoinWith($relation) Adds a LEFT JOIN clause and with to the query
 * @method     ChildProjectQuery rightJoinWith($relation) Adds a RIGHT JOIN clause and with to the query
 * @method     ChildProjectQuery innerJoinWith($relation) Adds a INNER JOIN clause and with to the query
 *
 * @method     ChildProject findOne(ConnectionInterface $con = null) Return the first ChildProject matching the query
 * @method     ChildProject findOneOrCreate(ConnectionInterface $con = null) Return the first ChildProject matching the query, or a new ChildProject object populated from the query conditions when no match is found
 *
 * @method     ChildProject findOneById(int $id) Return the first ChildProject filtered by the id column
 * @method     ChildProject findOneByUuid(string $uuid) Return the first ChildProject filtered by the uuid column
 * @method     ChildProject findOneByName(string $name) Return the first ChildProject filtered by the name column
 * @method     ChildProject findOneByurlcode(string $urlcode) Return the first ChildProject filtered by the urlcode column
 * @method     ChildProject findOneBystatus(string $status) Return the first ChildProject filtered by the status column
 * @method     ChildProject findOneByCountry(string $country) Return the first ChildProject filtered by the country column
 * @method     ChildProject findOneByCountrycode(string $countrycode) Return the first ChildProject filtered by the countrycode column
 * @method     ChildProject findOneByCity(string $city) Return the first ChildProject filtered by the city column
 * @method     ChildProject findOneByStartdate(string $startdate) Return the first ChildProject filtered by the startdate column
 * @method     ChildProject findOneByClubuuid(string $clubuuid) Return the first ChildProject filtered by the clubuuid column
 * @method     ChildProject findOneByenddate(string $enddate) Return the first ChildProject filtered by the enddate column
 * @method     ChildProject findOneByCreated(int $created) Return the first ChildProject filtered by the created column
 * @method     ChildProject findOneByModified(int $modified) Return the first ChildProject filtered by the modified column *

 * @method     ChildProject requirePk($key, ConnectionInterface $con = null) Return the ChildProject by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildProject requireOne(ConnectionInterface $con = null) Return the first ChildProject matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildProject requireOneById(int $id) Return the first ChildProject filtered by the id column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildProject requireOneByUuid(string $uuid) Return the first ChildProject filtered by the uuid column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildProject requireOneByName(string $name) Return the first ChildProject filtered by the name column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildProject requireOneByurlcode(string $urlcode) Return the first ChildProject filtered by the urlcode column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildProject requireOneBystatus(string $status) Return the first ChildProject filtered by the status column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildProject requireOneByCountry(string $country) Return the first ChildProject filtered by the country column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildProject requireOneByCountrycode(string $countrycode) Return the first ChildProject filtered by the countrycode column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildProject requireOneByCity(string $city) Return the first ChildProject filtered by the city column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildProject requireOneByStartdate(string $startdate) Return the first ChildProject filtered by the startdate column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildProject requireOneByClubuuid(string $clubuuid) Return the first ChildProject filtered by the clubuuid column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildProject requireOneByenddate(string $enddate) Return the first ChildProject filtered by the enddate column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildProject requireOneByCreated(int $created) Return the first ChildProject filtered by the created column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildProject requireOneByModified(int $modified) Return the first ChildProject filtered by the modified column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildProject[]|ObjectCollection find(ConnectionInterface $con = null) Return ChildProject objects based on current ModelCriteria
 * @method     ChildProject[]|ObjectCollection findById(int $id) Return ChildProject objects filtered by the id column
 * @method     ChildProject[]|ObjectCollection findByUuid(string $uuid) Return ChildProject objects filtered by the uuid column
 * @method     ChildProject[]|ObjectCollection findByName(string $name) Return ChildProject objects filtered by the name column
 * @method     ChildProject[]|ObjectCollection findByurlcode(string $urlcode) Return ChildProject objects filtered by the urlcode column
 * @method     ChildProject[]|ObjectCollection findBystatus(string $status) Return ChildProject objects filtered by the status column
 * @method     ChildProject[]|ObjectCollection findByCountry(string $country) Return ChildProject objects filtered by the country column
 * @method     ChildProject[]|ObjectCollection findByCountrycode(string $countrycode) Return ChildProject objects filtered by the countrycode column
 * @method     ChildProject[]|ObjectCollection findByCity(string $city) Return ChildProject objects filtered by the city column
 * @method     ChildProject[]|ObjectCollection findByStartdate(string $startdate) Return ChildProject objects filtered by the startdate column
 * @method     ChildProject[]|ObjectCollection findByClubuuid(string $clubuuid) Return ChildProject objects filtered by the clubuuid column
 * @method     ChildProject[]|ObjectCollection findByenddate(string $enddate) Return ChildProject objects filtered by the enddate column
 * @method     ChildProject[]|ObjectCollection findByCreated(int $created) Return ChildProject objects filtered by the created column
 * @method     ChildProject[]|ObjectCollection findByModified(int $modified) Return ChildProject objects filtered by the modified column
 * @method     ChildProject[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 *
 */
abstract class ProjectQuery extends ModelCriteria
{
    protected $entityNotFoundExceptionClass = '\\Propel\\Runtime\\Exception\\EntityNotFoundException';

    /**
     * Initializes internal state of \Base\ProjectQuery object.
     *
     * @param     string $dbName The database name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'default', $modelName = '\\Project', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildProjectQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildProjectQuery
     */
    public static function create($modelAlias = null, Criteria $criteria = null)
    {
        if ($criteria instanceof ChildProjectQuery) {
            return $criteria;
        }
        $query = new ChildProjectQuery();
        if (null !== $modelAlias) {
            $query->setModelAlias($modelAlias);
        }
        if ($criteria instanceof Criteria) {
            $query->mergeWith($criteria);
        }

        return $query;
    }

    /**
     * Find object by primary key.
     * Propel uses the instance pool to skip the database if the object exists.
     * Go fast if the query is untouched.
     *
     * <code>
     * $obj  = $c->findPk(12, $con);
     * </code>
     *
     * @param mixed $key Primary key to use for the query
     * @param ConnectionInterface $con an optional connection object
     *
     * @return ChildProject|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, ConnectionInterface $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = ProjectTableMap::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getServiceContainer()->getReadConnection(ProjectTableMap::DATABASE_NAME);
        }
        $this->basePreSelect($con);
        if ($this->formatter || $this->modelAlias || $this->with || $this->select
         || $this->selectColumns || $this->asColumns || $this->selectModifiers
         || $this->map || $this->having || $this->joins) {
            return $this->findPkComplex($key, $con);
        } else {
            return $this->findPkSimple($key, $con);
        }
    }

    /**
     * Find object by primary key using raw SQL to go fast.
     * Bypass doSelect() and the object formatter by using generated code.
     *
     * @param     mixed $key Primary key to use for the query
     * @param     ConnectionInterface $con A connection object
     *
     * @throws \Propel\Runtime\Exception\PropelException
     *
     * @return ChildProject A model object, or null if the key is not found
     */
    protected function findPkSimple($key, ConnectionInterface $con)
    {
        $sql = 'SELECT id, uuid, name, urlcode, status, country, countrycode, city, startdate, clubuuid, enddate, created, modified FROM project WHERE id = :p0';
        try {
            $stmt = $con->prepare($sql);
            $stmt->bindValue(':p0', $key, PDO::PARAM_INT);
            $stmt->execute();
        } catch (Exception $e) {
            Propel::log($e->getMessage(), Propel::LOG_ERR);
            throw new PropelException(sprintf('Unable to execute SELECT statement [%s]', $sql), 0, $e);
        }
        $obj = null;
        if ($row = $stmt->fetch(\PDO::FETCH_NUM)) {
            /** @var ChildProject $obj */
            $obj = new ChildProject();
            $obj->hydrate($row);
            ProjectTableMap::addInstanceToPool($obj, (string) $key);
        }
        $stmt->closeCursor();

        return $obj;
    }

    /**
     * Find object by primary key.
     *
     * @param     mixed $key Primary key to use for the query
     * @param     ConnectionInterface $con A connection object
     *
     * @return ChildProject|array|mixed the result, formatted by the current formatter
     */
    protected function findPkComplex($key, ConnectionInterface $con)
    {
        // As the query uses a PK condition, no limit(1) is necessary.
        $criteria = $this->isKeepQuery() ? clone $this : $this;
        $dataFetcher = $criteria
            ->filterByPrimaryKey($key)
            ->doSelect($con);

        return $criteria->getFormatter()->init($criteria)->formatOne($dataFetcher);
    }

    /**
     * Find objects by primary key
     * <code>
     * $objs = $c->findPks(array(12, 56, 832), $con);
     * </code>
     * @param     array $keys Primary keys to use for the query
     * @param     ConnectionInterface $con an optional connection object
     *
     * @return ObjectCollection|array|mixed the list of results, formatted by the current formatter
     */
    public function findPks($keys, ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getReadConnection($this->getDbName());
        }
        $this->basePreSelect($con);
        $criteria = $this->isKeepQuery() ? clone $this : $this;
        $dataFetcher = $criteria
            ->filterByPrimaryKeys($keys)
            ->doSelect($con);

        return $criteria->getFormatter()->init($criteria)->format($dataFetcher);
    }

    /**
     * Filter the query by primary key
     *
     * @param     mixed $key Primary key to use for the query
     *
     * @return $this|ChildProjectQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(ProjectTableMap::COL_ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return $this|ChildProjectQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(ProjectTableMap::COL_ID, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the id column
     *
     * Example usage:
     * <code>
     * $query->filterById(1234); // WHERE id = 1234
     * $query->filterById(array(12, 34)); // WHERE id IN (12, 34)
     * $query->filterById(array('min' => 12)); // WHERE id > 12
     * </code>
     *
     * @param     mixed $id The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildProjectQuery The current query, for fluid interface
     */
    public function filterById($id = null, $comparison = null)
    {
        if (is_array($id)) {
            $useMinMax = false;
            if (isset($id['min'])) {
                $this->addUsingAlias(ProjectTableMap::COL_ID, $id['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($id['max'])) {
                $this->addUsingAlias(ProjectTableMap::COL_ID, $id['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ProjectTableMap::COL_ID, $id, $comparison);
    }

    /**
     * Filter the query on the uuid column
     *
     * Example usage:
     * <code>
     * $query->filterByUuid('fooValue');   // WHERE uuid = 'fooValue'
     * $query->filterByUuid('%fooValue%'); // WHERE uuid LIKE '%fooValue%'
     * </code>
     *
     * @param     string $uuid The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildProjectQuery The current query, for fluid interface
     */
    public function filterByUuid($uuid = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($uuid)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $uuid)) {
                $uuid = str_replace('*', '%', $uuid);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ProjectTableMap::COL_UUID, $uuid, $comparison);
    }

    /**
     * Filter the query on the name column
     *
     * Example usage:
     * <code>
     * $query->filterByName('fooValue');   // WHERE name = 'fooValue'
     * $query->filterByName('%fooValue%'); // WHERE name LIKE '%fooValue%'
     * </code>
     *
     * @param     string $name The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildProjectQuery The current query, for fluid interface
     */
    public function filterByName($name = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($name)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $name)) {
                $name = str_replace('*', '%', $name);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ProjectTableMap::COL_NAME, $name, $comparison);
    }

    /**
     * Filter the query on the urlcode column
     *
     * Example usage:
     * <code>
     * $query->filterByurlcode('fooValue');   // WHERE urlcode = 'fooValue'
     * $query->filterByurlcode('%fooValue%'); // WHERE urlcode LIKE '%fooValue%'
     * </code>
     *
     * @param     string $urlcode The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildProjectQuery The current query, for fluid interface
     */
    public function filterByurlcode($urlcode = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($urlcode)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $urlcode)) {
                $urlcode = str_replace('*', '%', $urlcode);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ProjectTableMap::COL_URLCODE, $urlcode, $comparison);
    }

    /**
     * Filter the query on the status column
     *
     * Example usage:
     * <code>
     * $query->filterBystatus('fooValue');   // WHERE status = 'fooValue'
     * $query->filterBystatus('%fooValue%'); // WHERE status LIKE '%fooValue%'
     * </code>
     *
     * @param     string $status The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildProjectQuery The current query, for fluid interface
     */
    public function filterBystatus($status = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($status)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $status)) {
                $status = str_replace('*', '%', $status);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ProjectTableMap::COL_STATUS, $status, $comparison);
    }

    /**
     * Filter the query on the country column
     *
     * Example usage:
     * <code>
     * $query->filterByCountry('fooValue');   // WHERE country = 'fooValue'
     * $query->filterByCountry('%fooValue%'); // WHERE country LIKE '%fooValue%'
     * </code>
     *
     * @param     string $country The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildProjectQuery The current query, for fluid interface
     */
    public function filterByCountry($country = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($country)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $country)) {
                $country = str_replace('*', '%', $country);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ProjectTableMap::COL_COUNTRY, $country, $comparison);
    }

    /**
     * Filter the query on the countrycode column
     *
     * Example usage:
     * <code>
     * $query->filterByCountrycode('fooValue');   // WHERE countrycode = 'fooValue'
     * $query->filterByCountrycode('%fooValue%'); // WHERE countrycode LIKE '%fooValue%'
     * </code>
     *
     * @param     string $countrycode The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildProjectQuery The current query, for fluid interface
     */
    public function filterByCountrycode($countrycode = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($countrycode)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $countrycode)) {
                $countrycode = str_replace('*', '%', $countrycode);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ProjectTableMap::COL_COUNTRYCODE, $countrycode, $comparison);
    }

    /**
     * Filter the query on the city column
     *
     * Example usage:
     * <code>
     * $query->filterByCity('fooValue');   // WHERE city = 'fooValue'
     * $query->filterByCity('%fooValue%'); // WHERE city LIKE '%fooValue%'
     * </code>
     *
     * @param     string $city The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildProjectQuery The current query, for fluid interface
     */
    public function filterByCity($city = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($city)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $city)) {
                $city = str_replace('*', '%', $city);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ProjectTableMap::COL_CITY, $city, $comparison);
    }

    /**
     * Filter the query on the startdate column
     *
     * Example usage:
     * <code>
     * $query->filterByStartdate('fooValue');   // WHERE startdate = 'fooValue'
     * $query->filterByStartdate('%fooValue%'); // WHERE startdate LIKE '%fooValue%'
     * </code>
     *
     * @param     string $startdate The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildProjectQuery The current query, for fluid interface
     */
    public function filterByStartdate($startdate = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($startdate)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $startdate)) {
                $startdate = str_replace('*', '%', $startdate);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ProjectTableMap::COL_STARTDATE, $startdate, $comparison);
    }

    /**
     * Filter the query on the clubuuid column
     *
     * Example usage:
     * <code>
     * $query->filterByClubuuid('fooValue');   // WHERE clubuuid = 'fooValue'
     * $query->filterByClubuuid('%fooValue%'); // WHERE clubuuid LIKE '%fooValue%'
     * </code>
     *
     * @param     string $clubuuid The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildProjectQuery The current query, for fluid interface
     */
    public function filterByClubuuid($clubuuid = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($clubuuid)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $clubuuid)) {
                $clubuuid = str_replace('*', '%', $clubuuid);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ProjectTableMap::COL_CLUBUUID, $clubuuid, $comparison);
    }

    /**
     * Filter the query on the enddate column
     *
     * Example usage:
     * <code>
     * $query->filterByenddate('fooValue');   // WHERE enddate = 'fooValue'
     * $query->filterByenddate('%fooValue%'); // WHERE enddate LIKE '%fooValue%'
     * </code>
     *
     * @param     string $enddate The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildProjectQuery The current query, for fluid interface
     */
    public function filterByenddate($enddate = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($enddate)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $enddate)) {
                $enddate = str_replace('*', '%', $enddate);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ProjectTableMap::COL_ENDDATE, $enddate, $comparison);
    }

    /**
     * Filter the query on the created column
     *
     * Example usage:
     * <code>
     * $query->filterByCreated(1234); // WHERE created = 1234
     * $query->filterByCreated(array(12, 34)); // WHERE created IN (12, 34)
     * $query->filterByCreated(array('min' => 12)); // WHERE created > 12
     * </code>
     *
     * @param     mixed $created The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildProjectQuery The current query, for fluid interface
     */
    public function filterByCreated($created = null, $comparison = null)
    {
        if (is_array($created)) {
            $useMinMax = false;
            if (isset($created['min'])) {
                $this->addUsingAlias(ProjectTableMap::COL_CREATED, $created['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($created['max'])) {
                $this->addUsingAlias(ProjectTableMap::COL_CREATED, $created['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ProjectTableMap::COL_CREATED, $created, $comparison);
    }

    /**
     * Filter the query on the modified column
     *
     * Example usage:
     * <code>
     * $query->filterByModified(1234); // WHERE modified = 1234
     * $query->filterByModified(array(12, 34)); // WHERE modified IN (12, 34)
     * $query->filterByModified(array('min' => 12)); // WHERE modified > 12
     * </code>
     *
     * @param     mixed $modified The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildProjectQuery The current query, for fluid interface
     */
    public function filterByModified($modified = null, $comparison = null)
    {
        if (is_array($modified)) {
            $useMinMax = false;
            if (isset($modified['min'])) {
                $this->addUsingAlias(ProjectTableMap::COL_MODIFIED, $modified['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($modified['max'])) {
                $this->addUsingAlias(ProjectTableMap::COL_MODIFIED, $modified['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ProjectTableMap::COL_MODIFIED, $modified, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   ChildProject $project Object to remove from the list of results
     *
     * @return $this|ChildProjectQuery The current query, for fluid interface
     */
    public function prune($project = null)
    {
        if ($project) {
            $this->addUsingAlias(ProjectTableMap::COL_ID, $project->getId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

    /**
     * Deletes all rows from the project table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public function doDeleteAll(ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(ProjectTableMap::DATABASE_NAME);
        }

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            $affectedRows += parent::doDeleteAll($con);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            ProjectTableMap::clearInstancePool();
            ProjectTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

    /**
     * Performs a DELETE on the database based on the current ModelCriteria
     *
     * @param ConnectionInterface $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).  This includes CASCADE-related rows
     *                         if supported by native driver or if emulated using Propel.
     * @throws PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public function delete(ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(ProjectTableMap::DATABASE_NAME);
        }

        $criteria = $this;

        // Set the correct dbName
        $criteria->setDbName(ProjectTableMap::DATABASE_NAME);

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con, $criteria) {
            $affectedRows = 0; // initialize var to track total num of affected rows

            ProjectTableMap::removeInstanceFromPool($criteria);

            $affectedRows += ModelCriteria::delete($con);
            ProjectTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

} // ProjectQuery
