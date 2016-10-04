<?php

namespace Base;

use \Projectaccount as ChildProjectaccount;
use \ProjectaccountQuery as ChildProjectaccountQuery;
use \Exception;
use \PDO;
use Map\ProjectaccountTableMap;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\ModelCriteria;
use Propel\Runtime\Collection\ObjectCollection;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\Exception\PropelException;

/**
 * Base class that represents a query for the 'projectaccount' table.
 *
 *
 *
 * @method     ChildProjectaccountQuery orderById($order = Criteria::ASC) Order by the id column
 * @method     ChildProjectaccountQuery orderByUuid($order = Criteria::ASC) Order by the uuid column
 * @method     ChildProjectaccountQuery orderByTargetamt($order = Criteria::ASC) Order by the targetamt column
 * @method     ChildProjectaccountQuery orderByTotalTargetamt($order = Criteria::ASC) Order by the Totaltargetamt column
 * @method     ChildProjectaccountQuery orderByAmtoffsite($order = Criteria::ASC) Order by the amtoffsite column
 * @method     ChildProjectaccountQuery orderByAmtraised($order = Criteria::ASC) Order by the amtraised column
 * @method     ChildProjectaccountQuery orderByDonorcount($order = Criteria::ASC) Order by the donorcount column
 * @method     ChildProjectaccountQuery orderByProjectUuid($order = Criteria::ASC) Order by the projectuuid column
 * @method     ChildProjectaccountQuery orderByClubuuid($order = Criteria::ASC) Order by the clubuuid column
 * @method     ChildProjectaccountQuery orderByCreated($order = Criteria::ASC) Order by the created column
 * @method     ChildProjectaccountQuery orderByModified($order = Criteria::ASC) Order by the modified column
 *
 * @method     ChildProjectaccountQuery groupById() Group by the id column
 * @method     ChildProjectaccountQuery groupByUuid() Group by the uuid column
 * @method     ChildProjectaccountQuery groupByTargetamt() Group by the targetamt column
 * @method     ChildProjectaccountQuery groupByTotalTargetamt() Group by the Totaltargetamt column
 * @method     ChildProjectaccountQuery groupByAmtoffsite() Group by the amtoffsite column
 * @method     ChildProjectaccountQuery groupByAmtraised() Group by the amtraised column
 * @method     ChildProjectaccountQuery groupByDonorcount() Group by the donorcount column
 * @method     ChildProjectaccountQuery groupByProjectUuid() Group by the projectuuid column
 * @method     ChildProjectaccountQuery groupByClubuuid() Group by the clubuuid column
 * @method     ChildProjectaccountQuery groupByCreated() Group by the created column
 * @method     ChildProjectaccountQuery groupByModified() Group by the modified column
 *
 * @method     ChildProjectaccountQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ChildProjectaccountQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ChildProjectaccountQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ChildProjectaccountQuery leftJoinWith($relation) Adds a LEFT JOIN clause and with to the query
 * @method     ChildProjectaccountQuery rightJoinWith($relation) Adds a RIGHT JOIN clause and with to the query
 * @method     ChildProjectaccountQuery innerJoinWith($relation) Adds a INNER JOIN clause and with to the query
 *
 * @method     ChildProjectaccount findOne(ConnectionInterface $con = null) Return the first ChildProjectaccount matching the query
 * @method     ChildProjectaccount findOneOrCreate(ConnectionInterface $con = null) Return the first ChildProjectaccount matching the query, or a new ChildProjectaccount object populated from the query conditions when no match is found
 *
 * @method     ChildProjectaccount findOneById(int $id) Return the first ChildProjectaccount filtered by the id column
 * @method     ChildProjectaccount findOneByUuid(string $uuid) Return the first ChildProjectaccount filtered by the uuid column
 * @method     ChildProjectaccount findOneByTargetamt(int $targetamt) Return the first ChildProjectaccount filtered by the targetamt column
 * @method     ChildProjectaccount findOneByTotalTargetamt(int $Totaltargetamt) Return the first ChildProjectaccount filtered by the Totaltargetamt column
 * @method     ChildProjectaccount findOneByAmtoffsite(int $amtoffsite) Return the first ChildProjectaccount filtered by the amtoffsite column
 * @method     ChildProjectaccount findOneByAmtraised(int $amtraised) Return the first ChildProjectaccount filtered by the amtraised column
 * @method     ChildProjectaccount findOneByDonorcount(int $donorcount) Return the first ChildProjectaccount filtered by the donorcount column
 * @method     ChildProjectaccount findOneByProjectUuid(string $projectuuid) Return the first ChildProjectaccount filtered by the projectuuid column
 * @method     ChildProjectaccount findOneByClubuuid(string $clubuuid) Return the first ChildProjectaccount filtered by the clubuuid column
 * @method     ChildProjectaccount findOneByCreated(int $created) Return the first ChildProjectaccount filtered by the created column
 * @method     ChildProjectaccount findOneByModified(int $modified) Return the first ChildProjectaccount filtered by the modified column *

 * @method     ChildProjectaccount requirePk($key, ConnectionInterface $con = null) Return the ChildProjectaccount by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildProjectaccount requireOne(ConnectionInterface $con = null) Return the first ChildProjectaccount matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildProjectaccount requireOneById(int $id) Return the first ChildProjectaccount filtered by the id column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildProjectaccount requireOneByUuid(string $uuid) Return the first ChildProjectaccount filtered by the uuid column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildProjectaccount requireOneByTargetamt(int $targetamt) Return the first ChildProjectaccount filtered by the targetamt column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildProjectaccount requireOneByTotalTargetamt(int $Totaltargetamt) Return the first ChildProjectaccount filtered by the Totaltargetamt column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildProjectaccount requireOneByAmtoffsite(int $amtoffsite) Return the first ChildProjectaccount filtered by the amtoffsite column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildProjectaccount requireOneByAmtraised(int $amtraised) Return the first ChildProjectaccount filtered by the amtraised column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildProjectaccount requireOneByDonorcount(int $donorcount) Return the first ChildProjectaccount filtered by the donorcount column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildProjectaccount requireOneByProjectUuid(string $projectuuid) Return the first ChildProjectaccount filtered by the projectuuid column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildProjectaccount requireOneByClubuuid(string $clubuuid) Return the first ChildProjectaccount filtered by the clubuuid column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildProjectaccount requireOneByCreated(int $created) Return the first ChildProjectaccount filtered by the created column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildProjectaccount requireOneByModified(int $modified) Return the first ChildProjectaccount filtered by the modified column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildProjectaccount[]|ObjectCollection find(ConnectionInterface $con = null) Return ChildProjectaccount objects based on current ModelCriteria
 * @method     ChildProjectaccount[]|ObjectCollection findById(int $id) Return ChildProjectaccount objects filtered by the id column
 * @method     ChildProjectaccount[]|ObjectCollection findByUuid(string $uuid) Return ChildProjectaccount objects filtered by the uuid column
 * @method     ChildProjectaccount[]|ObjectCollection findByTargetamt(int $targetamt) Return ChildProjectaccount objects filtered by the targetamt column
 * @method     ChildProjectaccount[]|ObjectCollection findByTotalTargetamt(int $Totaltargetamt) Return ChildProjectaccount objects filtered by the Totaltargetamt column
 * @method     ChildProjectaccount[]|ObjectCollection findByAmtoffsite(int $amtoffsite) Return ChildProjectaccount objects filtered by the amtoffsite column
 * @method     ChildProjectaccount[]|ObjectCollection findByAmtraised(int $amtraised) Return ChildProjectaccount objects filtered by the amtraised column
 * @method     ChildProjectaccount[]|ObjectCollection findByDonorcount(int $donorcount) Return ChildProjectaccount objects filtered by the donorcount column
 * @method     ChildProjectaccount[]|ObjectCollection findByProjectUuid(string $projectuuid) Return ChildProjectaccount objects filtered by the projectuuid column
 * @method     ChildProjectaccount[]|ObjectCollection findByClubuuid(string $clubuuid) Return ChildProjectaccount objects filtered by the clubuuid column
 * @method     ChildProjectaccount[]|ObjectCollection findByCreated(int $created) Return ChildProjectaccount objects filtered by the created column
 * @method     ChildProjectaccount[]|ObjectCollection findByModified(int $modified) Return ChildProjectaccount objects filtered by the modified column
 * @method     ChildProjectaccount[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 *
 */
abstract class ProjectaccountQuery extends ModelCriteria
{
    protected $entityNotFoundExceptionClass = '\\Propel\\Runtime\\Exception\\EntityNotFoundException';

    /**
     * Initializes internal state of \Base\ProjectaccountQuery object.
     *
     * @param     string $dbName The database name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'default', $modelName = '\\Projectaccount', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildProjectaccountQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildProjectaccountQuery
     */
    public static function create($modelAlias = null, Criteria $criteria = null)
    {
        if ($criteria instanceof ChildProjectaccountQuery) {
            return $criteria;
        }
        $query = new ChildProjectaccountQuery();
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
     * @return ChildProjectaccount|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, ConnectionInterface $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = ProjectaccountTableMap::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getServiceContainer()->getReadConnection(ProjectaccountTableMap::DATABASE_NAME);
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
     * @return ChildProjectaccount A model object, or null if the key is not found
     */
    protected function findPkSimple($key, ConnectionInterface $con)
    {
        $sql = 'SELECT id, uuid, targetamt, Totaltargetamt, amtoffsite, amtraised, donorcount, projectuuid, clubuuid, created, modified FROM projectaccount WHERE id = :p0';
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
            /** @var ChildProjectaccount $obj */
            $obj = new ChildProjectaccount();
            $obj->hydrate($row);
            ProjectaccountTableMap::addInstanceToPool($obj, (string) $key);
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
     * @return ChildProjectaccount|array|mixed the result, formatted by the current formatter
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
     * @return $this|ChildProjectaccountQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(ProjectaccountTableMap::COL_ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return $this|ChildProjectaccountQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(ProjectaccountTableMap::COL_ID, $keys, Criteria::IN);
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
     * @return $this|ChildProjectaccountQuery The current query, for fluid interface
     */
    public function filterById($id = null, $comparison = null)
    {
        if (is_array($id)) {
            $useMinMax = false;
            if (isset($id['min'])) {
                $this->addUsingAlias(ProjectaccountTableMap::COL_ID, $id['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($id['max'])) {
                $this->addUsingAlias(ProjectaccountTableMap::COL_ID, $id['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ProjectaccountTableMap::COL_ID, $id, $comparison);
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
     * @return $this|ChildProjectaccountQuery The current query, for fluid interface
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

        return $this->addUsingAlias(ProjectaccountTableMap::COL_UUID, $uuid, $comparison);
    }

    /**
     * Filter the query on the targetamt column
     *
     * Example usage:
     * <code>
     * $query->filterByTargetamt(1234); // WHERE targetamt = 1234
     * $query->filterByTargetamt(array(12, 34)); // WHERE targetamt IN (12, 34)
     * $query->filterByTargetamt(array('min' => 12)); // WHERE targetamt > 12
     * </code>
     *
     * @param     mixed $targetamt The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildProjectaccountQuery The current query, for fluid interface
     */
    public function filterByTargetamt($targetamt = null, $comparison = null)
    {
        if (is_array($targetamt)) {
            $useMinMax = false;
            if (isset($targetamt['min'])) {
                $this->addUsingAlias(ProjectaccountTableMap::COL_TARGETAMT, $targetamt['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($targetamt['max'])) {
                $this->addUsingAlias(ProjectaccountTableMap::COL_TARGETAMT, $targetamt['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ProjectaccountTableMap::COL_TARGETAMT, $targetamt, $comparison);
    }

    /**
     * Filter the query on the Totaltargetamt column
     *
     * Example usage:
     * <code>
     * $query->filterByTotalTargetamt(1234); // WHERE Totaltargetamt = 1234
     * $query->filterByTotalTargetamt(array(12, 34)); // WHERE Totaltargetamt IN (12, 34)
     * $query->filterByTotalTargetamt(array('min' => 12)); // WHERE Totaltargetamt > 12
     * </code>
     *
     * @param     mixed $totalTargetamt The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildProjectaccountQuery The current query, for fluid interface
     */
    public function filterByTotalTargetamt($totalTargetamt = null, $comparison = null)
    {
        if (is_array($totalTargetamt)) {
            $useMinMax = false;
            if (isset($totalTargetamt['min'])) {
                $this->addUsingAlias(ProjectaccountTableMap::COL_TOTALTARGETAMT, $totalTargetamt['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($totalTargetamt['max'])) {
                $this->addUsingAlias(ProjectaccountTableMap::COL_TOTALTARGETAMT, $totalTargetamt['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ProjectaccountTableMap::COL_TOTALTARGETAMT, $totalTargetamt, $comparison);
    }

    /**
     * Filter the query on the amtoffsite column
     *
     * Example usage:
     * <code>
     * $query->filterByAmtoffsite(1234); // WHERE amtoffsite = 1234
     * $query->filterByAmtoffsite(array(12, 34)); // WHERE amtoffsite IN (12, 34)
     * $query->filterByAmtoffsite(array('min' => 12)); // WHERE amtoffsite > 12
     * </code>
     *
     * @param     mixed $amtoffsite The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildProjectaccountQuery The current query, for fluid interface
     */
    public function filterByAmtoffsite($amtoffsite = null, $comparison = null)
    {
        if (is_array($amtoffsite)) {
            $useMinMax = false;
            if (isset($amtoffsite['min'])) {
                $this->addUsingAlias(ProjectaccountTableMap::COL_AMTOFFSITE, $amtoffsite['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($amtoffsite['max'])) {
                $this->addUsingAlias(ProjectaccountTableMap::COL_AMTOFFSITE, $amtoffsite['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ProjectaccountTableMap::COL_AMTOFFSITE, $amtoffsite, $comparison);
    }

    /**
     * Filter the query on the amtraised column
     *
     * Example usage:
     * <code>
     * $query->filterByAmtraised(1234); // WHERE amtraised = 1234
     * $query->filterByAmtraised(array(12, 34)); // WHERE amtraised IN (12, 34)
     * $query->filterByAmtraised(array('min' => 12)); // WHERE amtraised > 12
     * </code>
     *
     * @param     mixed $amtraised The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildProjectaccountQuery The current query, for fluid interface
     */
    public function filterByAmtraised($amtraised = null, $comparison = null)
    {
        if (is_array($amtraised)) {
            $useMinMax = false;
            if (isset($amtraised['min'])) {
                $this->addUsingAlias(ProjectaccountTableMap::COL_AMTRAISED, $amtraised['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($amtraised['max'])) {
                $this->addUsingAlias(ProjectaccountTableMap::COL_AMTRAISED, $amtraised['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ProjectaccountTableMap::COL_AMTRAISED, $amtraised, $comparison);
    }

    /**
     * Filter the query on the donorcount column
     *
     * Example usage:
     * <code>
     * $query->filterByDonorcount(1234); // WHERE donorcount = 1234
     * $query->filterByDonorcount(array(12, 34)); // WHERE donorcount IN (12, 34)
     * $query->filterByDonorcount(array('min' => 12)); // WHERE donorcount > 12
     * </code>
     *
     * @param     mixed $donorcount The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildProjectaccountQuery The current query, for fluid interface
     */
    public function filterByDonorcount($donorcount = null, $comparison = null)
    {
        if (is_array($donorcount)) {
            $useMinMax = false;
            if (isset($donorcount['min'])) {
                $this->addUsingAlias(ProjectaccountTableMap::COL_DONORCOUNT, $donorcount['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($donorcount['max'])) {
                $this->addUsingAlias(ProjectaccountTableMap::COL_DONORCOUNT, $donorcount['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ProjectaccountTableMap::COL_DONORCOUNT, $donorcount, $comparison);
    }

    /**
     * Filter the query on the projectuuid column
     *
     * Example usage:
     * <code>
     * $query->filterByProjectUuid('fooValue');   // WHERE projectuuid = 'fooValue'
     * $query->filterByProjectUuid('%fooValue%'); // WHERE projectuuid LIKE '%fooValue%'
     * </code>
     *
     * @param     string $projectUuid The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildProjectaccountQuery The current query, for fluid interface
     */
    public function filterByProjectUuid($projectUuid = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($projectUuid)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $projectUuid)) {
                $projectUuid = str_replace('*', '%', $projectUuid);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ProjectaccountTableMap::COL_PROJECTUUID, $projectUuid, $comparison);
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
     * @return $this|ChildProjectaccountQuery The current query, for fluid interface
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

        return $this->addUsingAlias(ProjectaccountTableMap::COL_CLUBUUID, $clubuuid, $comparison);
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
     * @return $this|ChildProjectaccountQuery The current query, for fluid interface
     */
    public function filterByCreated($created = null, $comparison = null)
    {
        if (is_array($created)) {
            $useMinMax = false;
            if (isset($created['min'])) {
                $this->addUsingAlias(ProjectaccountTableMap::COL_CREATED, $created['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($created['max'])) {
                $this->addUsingAlias(ProjectaccountTableMap::COL_CREATED, $created['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ProjectaccountTableMap::COL_CREATED, $created, $comparison);
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
     * @return $this|ChildProjectaccountQuery The current query, for fluid interface
     */
    public function filterByModified($modified = null, $comparison = null)
    {
        if (is_array($modified)) {
            $useMinMax = false;
            if (isset($modified['min'])) {
                $this->addUsingAlias(ProjectaccountTableMap::COL_MODIFIED, $modified['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($modified['max'])) {
                $this->addUsingAlias(ProjectaccountTableMap::COL_MODIFIED, $modified['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ProjectaccountTableMap::COL_MODIFIED, $modified, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   ChildProjectaccount $projectaccount Object to remove from the list of results
     *
     * @return $this|ChildProjectaccountQuery The current query, for fluid interface
     */
    public function prune($projectaccount = null)
    {
        if ($projectaccount) {
            $this->addUsingAlias(ProjectaccountTableMap::COL_ID, $projectaccount->getId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

    /**
     * Deletes all rows from the projectaccount table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public function doDeleteAll(ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(ProjectaccountTableMap::DATABASE_NAME);
        }

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            $affectedRows += parent::doDeleteAll($con);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            ProjectaccountTableMap::clearInstancePool();
            ProjectaccountTableMap::clearRelatedInstancePool();

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
            $con = Propel::getServiceContainer()->getWriteConnection(ProjectaccountTableMap::DATABASE_NAME);
        }

        $criteria = $this;

        // Set the correct dbName
        $criteria->setDbName(ProjectaccountTableMap::DATABASE_NAME);

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con, $criteria) {
            $affectedRows = 0; // initialize var to track total num of affected rows

            ProjectaccountTableMap::removeInstanceFromPool($criteria);

            $affectedRows += ModelCriteria::delete($con);
            ProjectaccountTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

} // ProjectaccountQuery
