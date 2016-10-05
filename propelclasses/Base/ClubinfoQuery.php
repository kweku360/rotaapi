<?php

namespace Base;

use \Clubinfo as ChildClubinfo;
use \ClubinfoQuery as ChildClubinfoQuery;
use \Exception;
use \PDO;
use Map\ClubinfoTableMap;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\ModelCriteria;
use Propel\Runtime\Collection\ObjectCollection;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\Exception\PropelException;

/**
 * Base class that represents a query for the 'clubinfo' table.
 *
 *
 *
 * @method     ChildClubinfoQuery orderById($order = Criteria::ASC) Order by the id column
 * @method     ChildClubinfoQuery orderByClubname($order = Criteria::ASC) Order by the clubname column
 * @method     ChildClubinfoQuery orderByPresident($order = Criteria::ASC) Order by the president column
 * @method     ChildClubinfoQuery orderByCountry($order = Criteria::ASC) Order by the country column
 * @method     ChildClubinfoQuery orderByCountrycode($order = Criteria::ASC) Order by the countrycode column
 * @method     ChildClubinfoQuery orderByLocation($order = Criteria::ASC) Order by the location column
 * @method     ChildClubinfoQuery orderByCity($order = Criteria::ASC) Order by the city column
 * @method     ChildClubinfoQuery orderByDistrict($order = Criteria::ASC) Order by the district column
 * @method     ChildClubinfoQuery orderByContact1($order = Criteria::ASC) Order by the contact1 column
 * @method     ChildClubinfoQuery orderByContact2($order = Criteria::ASC) Order by the contact2 column
 * @method     ChildClubinfoQuery orderBySponsor($order = Criteria::ASC) Order by the sponsor column
 * @method     ChildClubinfoQuery orderByUseruuid($order = Criteria::ASC) Order by the useruuid column
 * @method     ChildClubinfoQuery orderByIntro($order = Criteria::ASC) Order by the intro column
 * @method     ChildClubinfoQuery orderByCreated($order = Criteria::ASC) Order by the created column
 * @method     ChildClubinfoQuery orderByModified($order = Criteria::ASC) Order by the modified column
 *
 * @method     ChildClubinfoQuery groupById() Group by the id column
 * @method     ChildClubinfoQuery groupByClubname() Group by the clubname column
 * @method     ChildClubinfoQuery groupByPresident() Group by the president column
 * @method     ChildClubinfoQuery groupByCountry() Group by the country column
 * @method     ChildClubinfoQuery groupByCountrycode() Group by the countrycode column
 * @method     ChildClubinfoQuery groupByLocation() Group by the location column
 * @method     ChildClubinfoQuery groupByCity() Group by the city column
 * @method     ChildClubinfoQuery groupByDistrict() Group by the district column
 * @method     ChildClubinfoQuery groupByContact1() Group by the contact1 column
 * @method     ChildClubinfoQuery groupByContact2() Group by the contact2 column
 * @method     ChildClubinfoQuery groupBySponsor() Group by the sponsor column
 * @method     ChildClubinfoQuery groupByUseruuid() Group by the useruuid column
 * @method     ChildClubinfoQuery groupByIntro() Group by the intro column
 * @method     ChildClubinfoQuery groupByCreated() Group by the created column
 * @method     ChildClubinfoQuery groupByModified() Group by the modified column
 *
 * @method     ChildClubinfoQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ChildClubinfoQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ChildClubinfoQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ChildClubinfoQuery leftJoinWith($relation) Adds a LEFT JOIN clause and with to the query
 * @method     ChildClubinfoQuery rightJoinWith($relation) Adds a RIGHT JOIN clause and with to the query
 * @method     ChildClubinfoQuery innerJoinWith($relation) Adds a INNER JOIN clause and with to the query
 *
 * @method     ChildClubinfo findOne(ConnectionInterface $con = null) Return the first ChildClubinfo matching the query
 * @method     ChildClubinfo findOneOrCreate(ConnectionInterface $con = null) Return the first ChildClubinfo matching the query, or a new ChildClubinfo object populated from the query conditions when no match is found
 *
 * @method     ChildClubinfo findOneById(int $id) Return the first ChildClubinfo filtered by the id column
 * @method     ChildClubinfo findOneByClubname(string $clubname) Return the first ChildClubinfo filtered by the clubname column
 * @method     ChildClubinfo findOneByPresident(string $president) Return the first ChildClubinfo filtered by the president column
 * @method     ChildClubinfo findOneByCountry(string $country) Return the first ChildClubinfo filtered by the country column
 * @method     ChildClubinfo findOneByCountrycode(string $countrycode) Return the first ChildClubinfo filtered by the countrycode column
 * @method     ChildClubinfo findOneByLocation(string $location) Return the first ChildClubinfo filtered by the location column
 * @method     ChildClubinfo findOneByCity(string $city) Return the first ChildClubinfo filtered by the city column
 * @method     ChildClubinfo findOneByDistrict(string $district) Return the first ChildClubinfo filtered by the district column
 * @method     ChildClubinfo findOneByContact1(int $contact1) Return the first ChildClubinfo filtered by the contact1 column
 * @method     ChildClubinfo findOneByContact2(int $contact2) Return the first ChildClubinfo filtered by the contact2 column
 * @method     ChildClubinfo findOneBySponsor(string $sponsor) Return the first ChildClubinfo filtered by the sponsor column
 * @method     ChildClubinfo findOneByUseruuid(string $useruuid) Return the first ChildClubinfo filtered by the useruuid column
 * @method     ChildClubinfo findOneByIntro(string $intro) Return the first ChildClubinfo filtered by the intro column
 * @method     ChildClubinfo findOneByCreated(int $created) Return the first ChildClubinfo filtered by the created column
 * @method     ChildClubinfo findOneByModified(int $modified) Return the first ChildClubinfo filtered by the modified column *

 * @method     ChildClubinfo requirePk($key, ConnectionInterface $con = null) Return the ChildClubinfo by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildClubinfo requireOne(ConnectionInterface $con = null) Return the first ChildClubinfo matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildClubinfo requireOneById(int $id) Return the first ChildClubinfo filtered by the id column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildClubinfo requireOneByClubname(string $clubname) Return the first ChildClubinfo filtered by the clubname column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildClubinfo requireOneByPresident(string $president) Return the first ChildClubinfo filtered by the president column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildClubinfo requireOneByCountry(string $country) Return the first ChildClubinfo filtered by the country column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildClubinfo requireOneByCountrycode(string $countrycode) Return the first ChildClubinfo filtered by the countrycode column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildClubinfo requireOneByLocation(string $location) Return the first ChildClubinfo filtered by the location column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildClubinfo requireOneByCity(string $city) Return the first ChildClubinfo filtered by the city column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildClubinfo requireOneByDistrict(string $district) Return the first ChildClubinfo filtered by the district column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildClubinfo requireOneByContact1(int $contact1) Return the first ChildClubinfo filtered by the contact1 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildClubinfo requireOneByContact2(int $contact2) Return the first ChildClubinfo filtered by the contact2 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildClubinfo requireOneBySponsor(string $sponsor) Return the first ChildClubinfo filtered by the sponsor column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildClubinfo requireOneByUseruuid(string $useruuid) Return the first ChildClubinfo filtered by the useruuid column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildClubinfo requireOneByIntro(string $intro) Return the first ChildClubinfo filtered by the intro column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildClubinfo requireOneByCreated(int $created) Return the first ChildClubinfo filtered by the created column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildClubinfo requireOneByModified(int $modified) Return the first ChildClubinfo filtered by the modified column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildClubinfo[]|ObjectCollection find(ConnectionInterface $con = null) Return ChildClubinfo objects based on current ModelCriteria
 * @method     ChildClubinfo[]|ObjectCollection findById(int $id) Return ChildClubinfo objects filtered by the id column
 * @method     ChildClubinfo[]|ObjectCollection findByClubname(string $clubname) Return ChildClubinfo objects filtered by the clubname column
 * @method     ChildClubinfo[]|ObjectCollection findByPresident(string $president) Return ChildClubinfo objects filtered by the president column
 * @method     ChildClubinfo[]|ObjectCollection findByCountry(string $country) Return ChildClubinfo objects filtered by the country column
 * @method     ChildClubinfo[]|ObjectCollection findByCountrycode(string $countrycode) Return ChildClubinfo objects filtered by the countrycode column
 * @method     ChildClubinfo[]|ObjectCollection findByLocation(string $location) Return ChildClubinfo objects filtered by the location column
 * @method     ChildClubinfo[]|ObjectCollection findByCity(string $city) Return ChildClubinfo objects filtered by the city column
 * @method     ChildClubinfo[]|ObjectCollection findByDistrict(string $district) Return ChildClubinfo objects filtered by the district column
 * @method     ChildClubinfo[]|ObjectCollection findByContact1(int $contact1) Return ChildClubinfo objects filtered by the contact1 column
 * @method     ChildClubinfo[]|ObjectCollection findByContact2(int $contact2) Return ChildClubinfo objects filtered by the contact2 column
 * @method     ChildClubinfo[]|ObjectCollection findBySponsor(string $sponsor) Return ChildClubinfo objects filtered by the sponsor column
 * @method     ChildClubinfo[]|ObjectCollection findByUseruuid(string $useruuid) Return ChildClubinfo objects filtered by the useruuid column
 * @method     ChildClubinfo[]|ObjectCollection findByIntro(string $intro) Return ChildClubinfo objects filtered by the intro column
 * @method     ChildClubinfo[]|ObjectCollection findByCreated(int $created) Return ChildClubinfo objects filtered by the created column
 * @method     ChildClubinfo[]|ObjectCollection findByModified(int $modified) Return ChildClubinfo objects filtered by the modified column
 * @method     ChildClubinfo[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 *
 */
abstract class ClubinfoQuery extends ModelCriteria
{
    protected $entityNotFoundExceptionClass = '\\Propel\\Runtime\\Exception\\EntityNotFoundException';

    /**
     * Initializes internal state of \Base\ClubinfoQuery object.
     *
     * @param     string $dbName The database name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'default', $modelName = '\\Clubinfo', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildClubinfoQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildClubinfoQuery
     */
    public static function create($modelAlias = null, Criteria $criteria = null)
    {
        if ($criteria instanceof ChildClubinfoQuery) {
            return $criteria;
        }
        $query = new ChildClubinfoQuery();
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
     * @return ChildClubinfo|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, ConnectionInterface $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = ClubinfoTableMap::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getServiceContainer()->getReadConnection(ClubinfoTableMap::DATABASE_NAME);
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
     * @return ChildClubinfo A model object, or null if the key is not found
     */
    protected function findPkSimple($key, ConnectionInterface $con)
    {
        $sql = 'SELECT id, clubname, president, country, countrycode, location, city, district, contact1, contact2, sponsor, useruuid, intro, created, modified FROM clubinfo WHERE id = :p0';
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
            /** @var ChildClubinfo $obj */
            $obj = new ChildClubinfo();
            $obj->hydrate($row);
            ClubinfoTableMap::addInstanceToPool($obj, (string) $key);
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
     * @return ChildClubinfo|array|mixed the result, formatted by the current formatter
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
     * @return $this|ChildClubinfoQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(ClubinfoTableMap::COL_ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return $this|ChildClubinfoQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(ClubinfoTableMap::COL_ID, $keys, Criteria::IN);
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
     * @return $this|ChildClubinfoQuery The current query, for fluid interface
     */
    public function filterById($id = null, $comparison = null)
    {
        if (is_array($id)) {
            $useMinMax = false;
            if (isset($id['min'])) {
                $this->addUsingAlias(ClubinfoTableMap::COL_ID, $id['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($id['max'])) {
                $this->addUsingAlias(ClubinfoTableMap::COL_ID, $id['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ClubinfoTableMap::COL_ID, $id, $comparison);
    }

    /**
     * Filter the query on the clubname column
     *
     * Example usage:
     * <code>
     * $query->filterByClubname('fooValue');   // WHERE clubname = 'fooValue'
     * $query->filterByClubname('%fooValue%'); // WHERE clubname LIKE '%fooValue%'
     * </code>
     *
     * @param     string $clubname The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildClubinfoQuery The current query, for fluid interface
     */
    public function filterByClubname($clubname = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($clubname)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $clubname)) {
                $clubname = str_replace('*', '%', $clubname);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ClubinfoTableMap::COL_CLUBNAME, $clubname, $comparison);
    }

    /**
     * Filter the query on the president column
     *
     * Example usage:
     * <code>
     * $query->filterByPresident('fooValue');   // WHERE president = 'fooValue'
     * $query->filterByPresident('%fooValue%'); // WHERE president LIKE '%fooValue%'
     * </code>
     *
     * @param     string $president The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildClubinfoQuery The current query, for fluid interface
     */
    public function filterByPresident($president = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($president)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $president)) {
                $president = str_replace('*', '%', $president);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ClubinfoTableMap::COL_PRESIDENT, $president, $comparison);
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
     * @return $this|ChildClubinfoQuery The current query, for fluid interface
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

        return $this->addUsingAlias(ClubinfoTableMap::COL_COUNTRY, $country, $comparison);
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
     * @return $this|ChildClubinfoQuery The current query, for fluid interface
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

        return $this->addUsingAlias(ClubinfoTableMap::COL_COUNTRYCODE, $countrycode, $comparison);
    }

    /**
     * Filter the query on the location column
     *
     * Example usage:
     * <code>
     * $query->filterByLocation('fooValue');   // WHERE location = 'fooValue'
     * $query->filterByLocation('%fooValue%'); // WHERE location LIKE '%fooValue%'
     * </code>
     *
     * @param     string $location The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildClubinfoQuery The current query, for fluid interface
     */
    public function filterByLocation($location = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($location)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $location)) {
                $location = str_replace('*', '%', $location);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ClubinfoTableMap::COL_LOCATION, $location, $comparison);
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
     * @return $this|ChildClubinfoQuery The current query, for fluid interface
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

        return $this->addUsingAlias(ClubinfoTableMap::COL_CITY, $city, $comparison);
    }

    /**
     * Filter the query on the district column
     *
     * Example usage:
     * <code>
     * $query->filterByDistrict('fooValue');   // WHERE district = 'fooValue'
     * $query->filterByDistrict('%fooValue%'); // WHERE district LIKE '%fooValue%'
     * </code>
     *
     * @param     string $district The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildClubinfoQuery The current query, for fluid interface
     */
    public function filterByDistrict($district = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($district)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $district)) {
                $district = str_replace('*', '%', $district);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ClubinfoTableMap::COL_DISTRICT, $district, $comparison);
    }

    /**
     * Filter the query on the contact1 column
     *
     * Example usage:
     * <code>
     * $query->filterByContact1(1234); // WHERE contact1 = 1234
     * $query->filterByContact1(array(12, 34)); // WHERE contact1 IN (12, 34)
     * $query->filterByContact1(array('min' => 12)); // WHERE contact1 > 12
     * </code>
     *
     * @param     mixed $contact1 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildClubinfoQuery The current query, for fluid interface
     */
    public function filterByContact1($contact1 = null, $comparison = null)
    {
        if (is_array($contact1)) {
            $useMinMax = false;
            if (isset($contact1['min'])) {
                $this->addUsingAlias(ClubinfoTableMap::COL_CONTACT1, $contact1['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($contact1['max'])) {
                $this->addUsingAlias(ClubinfoTableMap::COL_CONTACT1, $contact1['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ClubinfoTableMap::COL_CONTACT1, $contact1, $comparison);
    }

    /**
     * Filter the query on the contact2 column
     *
     * Example usage:
     * <code>
     * $query->filterByContact2(1234); // WHERE contact2 = 1234
     * $query->filterByContact2(array(12, 34)); // WHERE contact2 IN (12, 34)
     * $query->filterByContact2(array('min' => 12)); // WHERE contact2 > 12
     * </code>
     *
     * @param     mixed $contact2 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildClubinfoQuery The current query, for fluid interface
     */
    public function filterByContact2($contact2 = null, $comparison = null)
    {
        if (is_array($contact2)) {
            $useMinMax = false;
            if (isset($contact2['min'])) {
                $this->addUsingAlias(ClubinfoTableMap::COL_CONTACT2, $contact2['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($contact2['max'])) {
                $this->addUsingAlias(ClubinfoTableMap::COL_CONTACT2, $contact2['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ClubinfoTableMap::COL_CONTACT2, $contact2, $comparison);
    }

    /**
     * Filter the query on the sponsor column
     *
     * Example usage:
     * <code>
     * $query->filterBySponsor('fooValue');   // WHERE sponsor = 'fooValue'
     * $query->filterBySponsor('%fooValue%'); // WHERE sponsor LIKE '%fooValue%'
     * </code>
     *
     * @param     string $sponsor The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildClubinfoQuery The current query, for fluid interface
     */
    public function filterBySponsor($sponsor = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($sponsor)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $sponsor)) {
                $sponsor = str_replace('*', '%', $sponsor);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ClubinfoTableMap::COL_SPONSOR, $sponsor, $comparison);
    }

    /**
     * Filter the query on the useruuid column
     *
     * Example usage:
     * <code>
     * $query->filterByUseruuid('fooValue');   // WHERE useruuid = 'fooValue'
     * $query->filterByUseruuid('%fooValue%'); // WHERE useruuid LIKE '%fooValue%'
     * </code>
     *
     * @param     string $useruuid The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildClubinfoQuery The current query, for fluid interface
     */
    public function filterByUseruuid($useruuid = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($useruuid)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $useruuid)) {
                $useruuid = str_replace('*', '%', $useruuid);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ClubinfoTableMap::COL_USERUUID, $useruuid, $comparison);
    }

    /**
     * Filter the query on the intro column
     *
     * Example usage:
     * <code>
     * $query->filterByIntro('fooValue');   // WHERE intro = 'fooValue'
     * $query->filterByIntro('%fooValue%'); // WHERE intro LIKE '%fooValue%'
     * </code>
     *
     * @param     string $intro The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildClubinfoQuery The current query, for fluid interface
     */
    public function filterByIntro($intro = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($intro)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $intro)) {
                $intro = str_replace('*', '%', $intro);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ClubinfoTableMap::COL_INTRO, $intro, $comparison);
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
     * @return $this|ChildClubinfoQuery The current query, for fluid interface
     */
    public function filterByCreated($created = null, $comparison = null)
    {
        if (is_array($created)) {
            $useMinMax = false;
            if (isset($created['min'])) {
                $this->addUsingAlias(ClubinfoTableMap::COL_CREATED, $created['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($created['max'])) {
                $this->addUsingAlias(ClubinfoTableMap::COL_CREATED, $created['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ClubinfoTableMap::COL_CREATED, $created, $comparison);
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
     * @return $this|ChildClubinfoQuery The current query, for fluid interface
     */
    public function filterByModified($modified = null, $comparison = null)
    {
        if (is_array($modified)) {
            $useMinMax = false;
            if (isset($modified['min'])) {
                $this->addUsingAlias(ClubinfoTableMap::COL_MODIFIED, $modified['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($modified['max'])) {
                $this->addUsingAlias(ClubinfoTableMap::COL_MODIFIED, $modified['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ClubinfoTableMap::COL_MODIFIED, $modified, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   ChildClubinfo $clubinfo Object to remove from the list of results
     *
     * @return $this|ChildClubinfoQuery The current query, for fluid interface
     */
    public function prune($clubinfo = null)
    {
        if ($clubinfo) {
            $this->addUsingAlias(ClubinfoTableMap::COL_ID, $clubinfo->getId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

    /**
     * Deletes all rows from the clubinfo table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public function doDeleteAll(ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(ClubinfoTableMap::DATABASE_NAME);
        }

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            $affectedRows += parent::doDeleteAll($con);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            ClubinfoTableMap::clearInstancePool();
            ClubinfoTableMap::clearRelatedInstancePool();

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
            $con = Propel::getServiceContainer()->getWriteConnection(ClubinfoTableMap::DATABASE_NAME);
        }

        $criteria = $this;

        // Set the correct dbName
        $criteria->setDbName(ClubinfoTableMap::DATABASE_NAME);

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con, $criteria) {
            $affectedRows = 0; // initialize var to track total num of affected rows

            ClubinfoTableMap::removeInstanceFromPool($criteria);

            $affectedRows += ModelCriteria::delete($con);
            ClubinfoTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

} // ClubinfoQuery
