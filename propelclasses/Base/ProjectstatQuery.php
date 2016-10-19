<?php

namespace Base;

use \Projectstat as ChildProjectstat;
use \ProjectstatQuery as ChildProjectstatQuery;
use \Exception;
use \PDO;
use Map\ProjectstatTableMap;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\ModelCriteria;
use Propel\Runtime\Collection\ObjectCollection;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\Exception\PropelException;

/**
 * Base class that represents a query for the 'projectstat' table.
 *
 *
 *
 * @method     ChildProjectstatQuery orderById($order = Criteria::ASC) Order by the id column
 * @method     ChildProjectstatQuery orderByUuid($order = Criteria::ASC) Order by the uuid column
 * @method     ChildProjectstatQuery orderByDonorcount($order = Criteria::ASC) Order by the donorcount column
 * @method     ChildProjectstatQuery orderByviews($order = Criteria::ASC) Order by the views column
 * @method     ChildProjectstatQuery orderByLikes($order = Criteria::ASC) Order by the likes column
 * @method     ChildProjectstatQuery orderByShares($order = Criteria::ASC) Order by the share column
 * @method     ChildProjectstatQuery orderByUpdatecount($order = Criteria::ASC) Order by the updatecount column
 * @method     ChildProjectstatQuery orderByCommentscount($order = Criteria::ASC) Order by the commentscount column
 * @method     ChildProjectstatQuery orderByFundedpercent($order = Criteria::ASC) Order by the fundedpercent column
 * @method     ChildProjectstatQuery orderByenddate($order = Criteria::ASC) Order by the enddate column
 * @method     ChildProjectstatQuery orderByProjectUuid($order = Criteria::ASC) Order by the projectuuid column
 * @method     ChildProjectstatQuery orderByCreated($order = Criteria::ASC) Order by the created column
 *
 * @method     ChildProjectstatQuery groupById() Group by the id column
 * @method     ChildProjectstatQuery groupByUuid() Group by the uuid column
 * @method     ChildProjectstatQuery groupByDonorcount() Group by the donorcount column
 * @method     ChildProjectstatQuery groupByviews() Group by the views column
 * @method     ChildProjectstatQuery groupByLikes() Group by the likes column
 * @method     ChildProjectstatQuery groupByShares() Group by the share column
 * @method     ChildProjectstatQuery groupByUpdatecount() Group by the updatecount column
 * @method     ChildProjectstatQuery groupByCommentscount() Group by the commentscount column
 * @method     ChildProjectstatQuery groupByFundedpercent() Group by the fundedpercent column
 * @method     ChildProjectstatQuery groupByenddate() Group by the enddate column
 * @method     ChildProjectstatQuery groupByProjectUuid() Group by the projectuuid column
 * @method     ChildProjectstatQuery groupByCreated() Group by the created column
 *
 * @method     ChildProjectstatQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ChildProjectstatQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ChildProjectstatQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ChildProjectstatQuery leftJoinWith($relation) Adds a LEFT JOIN clause and with to the query
 * @method     ChildProjectstatQuery rightJoinWith($relation) Adds a RIGHT JOIN clause and with to the query
 * @method     ChildProjectstatQuery innerJoinWith($relation) Adds a INNER JOIN clause and with to the query
 *
 * @method     ChildProjectstat findOne(ConnectionInterface $con = null) Return the first ChildProjectstat matching the query
 * @method     ChildProjectstat findOneOrCreate(ConnectionInterface $con = null) Return the first ChildProjectstat matching the query, or a new ChildProjectstat object populated from the query conditions when no match is found
 *
 * @method     ChildProjectstat findOneById(int $id) Return the first ChildProjectstat filtered by the id column
 * @method     ChildProjectstat findOneByUuid(string $uuid) Return the first ChildProjectstat filtered by the uuid column
 * @method     ChildProjectstat findOneByDonorcount(int $donorcount) Return the first ChildProjectstat filtered by the donorcount column
 * @method     ChildProjectstat findOneByviews(int $views) Return the first ChildProjectstat filtered by the views column
 * @method     ChildProjectstat findOneByLikes(int $likes) Return the first ChildProjectstat filtered by the likes column
 * @method     ChildProjectstat findOneByShares(int $share) Return the first ChildProjectstat filtered by the share column
 * @method     ChildProjectstat findOneByUpdatecount(int $updatecount) Return the first ChildProjectstat filtered by the updatecount column
 * @method     ChildProjectstat findOneByCommentscount(int $commentscount) Return the first ChildProjectstat filtered by the commentscount column
 * @method     ChildProjectstat findOneByFundedpercent(int $fundedpercent) Return the first ChildProjectstat filtered by the fundedpercent column
 * @method     ChildProjectstat findOneByenddate(string $enddate) Return the first ChildProjectstat filtered by the enddate column
 * @method     ChildProjectstat findOneByProjectUuid(string $projectuuid) Return the first ChildProjectstat filtered by the projectuuid column
 * @method     ChildProjectstat findOneByCreated(int $created) Return the first ChildProjectstat filtered by the created column *

 * @method     ChildProjectstat requirePk($key, ConnectionInterface $con = null) Return the ChildProjectstat by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildProjectstat requireOne(ConnectionInterface $con = null) Return the first ChildProjectstat matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildProjectstat requireOneById(int $id) Return the first ChildProjectstat filtered by the id column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildProjectstat requireOneByUuid(string $uuid) Return the first ChildProjectstat filtered by the uuid column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildProjectstat requireOneByDonorcount(int $donorcount) Return the first ChildProjectstat filtered by the donorcount column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildProjectstat requireOneByviews(int $views) Return the first ChildProjectstat filtered by the views column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildProjectstat requireOneByLikes(int $likes) Return the first ChildProjectstat filtered by the likes column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildProjectstat requireOneByShares(int $share) Return the first ChildProjectstat filtered by the share column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildProjectstat requireOneByUpdatecount(int $updatecount) Return the first ChildProjectstat filtered by the updatecount column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildProjectstat requireOneByCommentscount(int $commentscount) Return the first ChildProjectstat filtered by the commentscount column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildProjectstat requireOneByFundedpercent(int $fundedpercent) Return the first ChildProjectstat filtered by the fundedpercent column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildProjectstat requireOneByenddate(string $enddate) Return the first ChildProjectstat filtered by the enddate column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildProjectstat requireOneByProjectUuid(string $projectuuid) Return the first ChildProjectstat filtered by the projectuuid column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildProjectstat requireOneByCreated(int $created) Return the first ChildProjectstat filtered by the created column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildProjectstat[]|ObjectCollection find(ConnectionInterface $con = null) Return ChildProjectstat objects based on current ModelCriteria
 * @method     ChildProjectstat[]|ObjectCollection findById(int $id) Return ChildProjectstat objects filtered by the id column
 * @method     ChildProjectstat[]|ObjectCollection findByUuid(string $uuid) Return ChildProjectstat objects filtered by the uuid column
 * @method     ChildProjectstat[]|ObjectCollection findByDonorcount(int $donorcount) Return ChildProjectstat objects filtered by the donorcount column
 * @method     ChildProjectstat[]|ObjectCollection findByviews(int $views) Return ChildProjectstat objects filtered by the views column
 * @method     ChildProjectstat[]|ObjectCollection findByLikes(int $likes) Return ChildProjectstat objects filtered by the likes column
 * @method     ChildProjectstat[]|ObjectCollection findByShares(int $share) Return ChildProjectstat objects filtered by the share column
 * @method     ChildProjectstat[]|ObjectCollection findByUpdatecount(int $updatecount) Return ChildProjectstat objects filtered by the updatecount column
 * @method     ChildProjectstat[]|ObjectCollection findByCommentscount(int $commentscount) Return ChildProjectstat objects filtered by the commentscount column
 * @method     ChildProjectstat[]|ObjectCollection findByFundedpercent(int $fundedpercent) Return ChildProjectstat objects filtered by the fundedpercent column
 * @method     ChildProjectstat[]|ObjectCollection findByenddate(string $enddate) Return ChildProjectstat objects filtered by the enddate column
 * @method     ChildProjectstat[]|ObjectCollection findByProjectUuid(string $projectuuid) Return ChildProjectstat objects filtered by the projectuuid column
 * @method     ChildProjectstat[]|ObjectCollection findByCreated(int $created) Return ChildProjectstat objects filtered by the created column
 * @method     ChildProjectstat[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 *
 */
abstract class ProjectstatQuery extends ModelCriteria
{
    protected $entityNotFoundExceptionClass = '\\Propel\\Runtime\\Exception\\EntityNotFoundException';

    /**
     * Initializes internal state of \Base\ProjectstatQuery object.
     *
     * @param     string $dbName The database name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'default', $modelName = '\\Projectstat', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildProjectstatQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildProjectstatQuery
     */
    public static function create($modelAlias = null, Criteria $criteria = null)
    {
        if ($criteria instanceof ChildProjectstatQuery) {
            return $criteria;
        }
        $query = new ChildProjectstatQuery();
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
     * @return ChildProjectstat|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, ConnectionInterface $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = ProjectstatTableMap::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getServiceContainer()->getReadConnection(ProjectstatTableMap::DATABASE_NAME);
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
     * @return ChildProjectstat A model object, or null if the key is not found
     */
    protected function findPkSimple($key, ConnectionInterface $con)
    {
        $sql = 'SELECT id, uuid, donorcount, views, likes, share, updatecount, commentscount, fundedpercent, enddate, projectuuid, created FROM projectstat WHERE id = :p0';
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
            /** @var ChildProjectstat $obj */
            $obj = new ChildProjectstat();
            $obj->hydrate($row);
            ProjectstatTableMap::addInstanceToPool($obj, (string) $key);
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
     * @return ChildProjectstat|array|mixed the result, formatted by the current formatter
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
     * @return $this|ChildProjectstatQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(ProjectstatTableMap::COL_ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return $this|ChildProjectstatQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(ProjectstatTableMap::COL_ID, $keys, Criteria::IN);
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
     * @return $this|ChildProjectstatQuery The current query, for fluid interface
     */
    public function filterById($id = null, $comparison = null)
    {
        if (is_array($id)) {
            $useMinMax = false;
            if (isset($id['min'])) {
                $this->addUsingAlias(ProjectstatTableMap::COL_ID, $id['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($id['max'])) {
                $this->addUsingAlias(ProjectstatTableMap::COL_ID, $id['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ProjectstatTableMap::COL_ID, $id, $comparison);
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
     * @return $this|ChildProjectstatQuery The current query, for fluid interface
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

        return $this->addUsingAlias(ProjectstatTableMap::COL_UUID, $uuid, $comparison);
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
     * @return $this|ChildProjectstatQuery The current query, for fluid interface
     */
    public function filterByDonorcount($donorcount = null, $comparison = null)
    {
        if (is_array($donorcount)) {
            $useMinMax = false;
            if (isset($donorcount['min'])) {
                $this->addUsingAlias(ProjectstatTableMap::COL_DONORCOUNT, $donorcount['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($donorcount['max'])) {
                $this->addUsingAlias(ProjectstatTableMap::COL_DONORCOUNT, $donorcount['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ProjectstatTableMap::COL_DONORCOUNT, $donorcount, $comparison);
    }

    /**
     * Filter the query on the views column
     *
     * Example usage:
     * <code>
     * $query->filterByviews(1234); // WHERE views = 1234
     * $query->filterByviews(array(12, 34)); // WHERE views IN (12, 34)
     * $query->filterByviews(array('min' => 12)); // WHERE views > 12
     * </code>
     *
     * @param     mixed $views The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildProjectstatQuery The current query, for fluid interface
     */
    public function filterByviews($views = null, $comparison = null)
    {
        if (is_array($views)) {
            $useMinMax = false;
            if (isset($views['min'])) {
                $this->addUsingAlias(ProjectstatTableMap::COL_VIEWS, $views['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($views['max'])) {
                $this->addUsingAlias(ProjectstatTableMap::COL_VIEWS, $views['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ProjectstatTableMap::COL_VIEWS, $views, $comparison);
    }

    /**
     * Filter the query on the likes column
     *
     * Example usage:
     * <code>
     * $query->filterByLikes(1234); // WHERE likes = 1234
     * $query->filterByLikes(array(12, 34)); // WHERE likes IN (12, 34)
     * $query->filterByLikes(array('min' => 12)); // WHERE likes > 12
     * </code>
     *
     * @param     mixed $likes The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildProjectstatQuery The current query, for fluid interface
     */
    public function filterByLikes($likes = null, $comparison = null)
    {
        if (is_array($likes)) {
            $useMinMax = false;
            if (isset($likes['min'])) {
                $this->addUsingAlias(ProjectstatTableMap::COL_LIKES, $likes['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($likes['max'])) {
                $this->addUsingAlias(ProjectstatTableMap::COL_LIKES, $likes['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ProjectstatTableMap::COL_LIKES, $likes, $comparison);
    }

    /**
     * Filter the query on the share column
     *
     * Example usage:
     * <code>
     * $query->filterByShares(1234); // WHERE share = 1234
     * $query->filterByShares(array(12, 34)); // WHERE share IN (12, 34)
     * $query->filterByShares(array('min' => 12)); // WHERE share > 12
     * </code>
     *
     * @param     mixed $shares The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildProjectstatQuery The current query, for fluid interface
     */
    public function filterByShares($shares = null, $comparison = null)
    {
        if (is_array($shares)) {
            $useMinMax = false;
            if (isset($shares['min'])) {
                $this->addUsingAlias(ProjectstatTableMap::COL_SHARE, $shares['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($shares['max'])) {
                $this->addUsingAlias(ProjectstatTableMap::COL_SHARE, $shares['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ProjectstatTableMap::COL_SHARE, $shares, $comparison);
    }

    /**
     * Filter the query on the updatecount column
     *
     * Example usage:
     * <code>
     * $query->filterByUpdatecount(1234); // WHERE updatecount = 1234
     * $query->filterByUpdatecount(array(12, 34)); // WHERE updatecount IN (12, 34)
     * $query->filterByUpdatecount(array('min' => 12)); // WHERE updatecount > 12
     * </code>
     *
     * @param     mixed $updatecount The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildProjectstatQuery The current query, for fluid interface
     */
    public function filterByUpdatecount($updatecount = null, $comparison = null)
    {
        if (is_array($updatecount)) {
            $useMinMax = false;
            if (isset($updatecount['min'])) {
                $this->addUsingAlias(ProjectstatTableMap::COL_UPDATECOUNT, $updatecount['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($updatecount['max'])) {
                $this->addUsingAlias(ProjectstatTableMap::COL_UPDATECOUNT, $updatecount['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ProjectstatTableMap::COL_UPDATECOUNT, $updatecount, $comparison);
    }

    /**
     * Filter the query on the commentscount column
     *
     * Example usage:
     * <code>
     * $query->filterByCommentscount(1234); // WHERE commentscount = 1234
     * $query->filterByCommentscount(array(12, 34)); // WHERE commentscount IN (12, 34)
     * $query->filterByCommentscount(array('min' => 12)); // WHERE commentscount > 12
     * </code>
     *
     * @param     mixed $commentscount The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildProjectstatQuery The current query, for fluid interface
     */
    public function filterByCommentscount($commentscount = null, $comparison = null)
    {
        if (is_array($commentscount)) {
            $useMinMax = false;
            if (isset($commentscount['min'])) {
                $this->addUsingAlias(ProjectstatTableMap::COL_COMMENTSCOUNT, $commentscount['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($commentscount['max'])) {
                $this->addUsingAlias(ProjectstatTableMap::COL_COMMENTSCOUNT, $commentscount['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ProjectstatTableMap::COL_COMMENTSCOUNT, $commentscount, $comparison);
    }

    /**
     * Filter the query on the fundedpercent column
     *
     * Example usage:
     * <code>
     * $query->filterByFundedpercent(1234); // WHERE fundedpercent = 1234
     * $query->filterByFundedpercent(array(12, 34)); // WHERE fundedpercent IN (12, 34)
     * $query->filterByFundedpercent(array('min' => 12)); // WHERE fundedpercent > 12
     * </code>
     *
     * @param     mixed $fundedpercent The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildProjectstatQuery The current query, for fluid interface
     */
    public function filterByFundedpercent($fundedpercent = null, $comparison = null)
    {
        if (is_array($fundedpercent)) {
            $useMinMax = false;
            if (isset($fundedpercent['min'])) {
                $this->addUsingAlias(ProjectstatTableMap::COL_FUNDEDPERCENT, $fundedpercent['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($fundedpercent['max'])) {
                $this->addUsingAlias(ProjectstatTableMap::COL_FUNDEDPERCENT, $fundedpercent['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ProjectstatTableMap::COL_FUNDEDPERCENT, $fundedpercent, $comparison);
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
     * @return $this|ChildProjectstatQuery The current query, for fluid interface
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

        return $this->addUsingAlias(ProjectstatTableMap::COL_ENDDATE, $enddate, $comparison);
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
     * @return $this|ChildProjectstatQuery The current query, for fluid interface
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

        return $this->addUsingAlias(ProjectstatTableMap::COL_PROJECTUUID, $projectUuid, $comparison);
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
     * @return $this|ChildProjectstatQuery The current query, for fluid interface
     */
    public function filterByCreated($created = null, $comparison = null)
    {
        if (is_array($created)) {
            $useMinMax = false;
            if (isset($created['min'])) {
                $this->addUsingAlias(ProjectstatTableMap::COL_CREATED, $created['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($created['max'])) {
                $this->addUsingAlias(ProjectstatTableMap::COL_CREATED, $created['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ProjectstatTableMap::COL_CREATED, $created, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   ChildProjectstat $projectstat Object to remove from the list of results
     *
     * @return $this|ChildProjectstatQuery The current query, for fluid interface
     */
    public function prune($projectstat = null)
    {
        if ($projectstat) {
            $this->addUsingAlias(ProjectstatTableMap::COL_ID, $projectstat->getId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

    /**
     * Deletes all rows from the projectstat table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public function doDeleteAll(ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(ProjectstatTableMap::DATABASE_NAME);
        }

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            $affectedRows += parent::doDeleteAll($con);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            ProjectstatTableMap::clearInstancePool();
            ProjectstatTableMap::clearRelatedInstancePool();

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
            $con = Propel::getServiceContainer()->getWriteConnection(ProjectstatTableMap::DATABASE_NAME);
        }

        $criteria = $this;

        // Set the correct dbName
        $criteria->setDbName(ProjectstatTableMap::DATABASE_NAME);

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con, $criteria) {
            $affectedRows = 0; // initialize var to track total num of affected rows

            ProjectstatTableMap::removeInstanceFromPool($criteria);

            $affectedRows += ModelCriteria::delete($con);
            ProjectstatTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

} // ProjectstatQuery
