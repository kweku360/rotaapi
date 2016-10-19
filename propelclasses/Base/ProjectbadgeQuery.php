<?php

namespace Base;

use \Projectbadge as ChildProjectbadge;
use \ProjectbadgeQuery as ChildProjectbadgeQuery;
use \Exception;
use \PDO;
use Map\ProjectbadgeTableMap;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\ModelCriteria;
use Propel\Runtime\Collection\ObjectCollection;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\Exception\PropelException;

/**
 * Base class that represents a query for the 'projectbadge' table.
 *
 *
 *
 * @method     ChildProjectbadgeQuery orderById($order = Criteria::ASC) Order by the id column
 * @method     ChildProjectbadgeQuery orderByUuid($order = Criteria::ASC) Order by the uuid column
 * @method     ChildProjectbadgeQuery orderByBadgeid($order = Criteria::ASC) Order by the badgeid column
 * @method     ChildProjectbadgeQuery orderByBadgename($order = Criteria::ASC) Order by the badgename column
 * @method     ChildProjectbadgeQuery orderByNotes($order = Criteria::ASC) Order by the notes column
 * @method     ChildProjectbadgeQuery orderByExpiry($order = Criteria::ASC) Order by the expiry column
 * @method     ChildProjectbadgeQuery orderByProjectUuid($order = Criteria::ASC) Order by the projectuuid column
 * @method     ChildProjectbadgeQuery orderByCreated($order = Criteria::ASC) Order by the created column
 *
 * @method     ChildProjectbadgeQuery groupById() Group by the id column
 * @method     ChildProjectbadgeQuery groupByUuid() Group by the uuid column
 * @method     ChildProjectbadgeQuery groupByBadgeid() Group by the badgeid column
 * @method     ChildProjectbadgeQuery groupByBadgename() Group by the badgename column
 * @method     ChildProjectbadgeQuery groupByNotes() Group by the notes column
 * @method     ChildProjectbadgeQuery groupByExpiry() Group by the expiry column
 * @method     ChildProjectbadgeQuery groupByProjectUuid() Group by the projectuuid column
 * @method     ChildProjectbadgeQuery groupByCreated() Group by the created column
 *
 * @method     ChildProjectbadgeQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ChildProjectbadgeQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ChildProjectbadgeQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ChildProjectbadgeQuery leftJoinWith($relation) Adds a LEFT JOIN clause and with to the query
 * @method     ChildProjectbadgeQuery rightJoinWith($relation) Adds a RIGHT JOIN clause and with to the query
 * @method     ChildProjectbadgeQuery innerJoinWith($relation) Adds a INNER JOIN clause and with to the query
 *
 * @method     ChildProjectbadge findOne(ConnectionInterface $con = null) Return the first ChildProjectbadge matching the query
 * @method     ChildProjectbadge findOneOrCreate(ConnectionInterface $con = null) Return the first ChildProjectbadge matching the query, or a new ChildProjectbadge object populated from the query conditions when no match is found
 *
 * @method     ChildProjectbadge findOneById(int $id) Return the first ChildProjectbadge filtered by the id column
 * @method     ChildProjectbadge findOneByUuid(string $uuid) Return the first ChildProjectbadge filtered by the uuid column
 * @method     ChildProjectbadge findOneByBadgeid(int $badgeid) Return the first ChildProjectbadge filtered by the badgeid column
 * @method     ChildProjectbadge findOneByBadgename(string $badgename) Return the first ChildProjectbadge filtered by the badgename column
 * @method     ChildProjectbadge findOneByNotes(string $notes) Return the first ChildProjectbadge filtered by the notes column
 * @method     ChildProjectbadge findOneByExpiry(int $expiry) Return the first ChildProjectbadge filtered by the expiry column
 * @method     ChildProjectbadge findOneByProjectUuid(string $projectuuid) Return the first ChildProjectbadge filtered by the projectuuid column
 * @method     ChildProjectbadge findOneByCreated(int $created) Return the first ChildProjectbadge filtered by the created column *

 * @method     ChildProjectbadge requirePk($key, ConnectionInterface $con = null) Return the ChildProjectbadge by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildProjectbadge requireOne(ConnectionInterface $con = null) Return the first ChildProjectbadge matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildProjectbadge requireOneById(int $id) Return the first ChildProjectbadge filtered by the id column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildProjectbadge requireOneByUuid(string $uuid) Return the first ChildProjectbadge filtered by the uuid column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildProjectbadge requireOneByBadgeid(int $badgeid) Return the first ChildProjectbadge filtered by the badgeid column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildProjectbadge requireOneByBadgename(string $badgename) Return the first ChildProjectbadge filtered by the badgename column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildProjectbadge requireOneByNotes(string $notes) Return the first ChildProjectbadge filtered by the notes column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildProjectbadge requireOneByExpiry(int $expiry) Return the first ChildProjectbadge filtered by the expiry column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildProjectbadge requireOneByProjectUuid(string $projectuuid) Return the first ChildProjectbadge filtered by the projectuuid column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildProjectbadge requireOneByCreated(int $created) Return the first ChildProjectbadge filtered by the created column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildProjectbadge[]|ObjectCollection find(ConnectionInterface $con = null) Return ChildProjectbadge objects based on current ModelCriteria
 * @method     ChildProjectbadge[]|ObjectCollection findById(int $id) Return ChildProjectbadge objects filtered by the id column
 * @method     ChildProjectbadge[]|ObjectCollection findByUuid(string $uuid) Return ChildProjectbadge objects filtered by the uuid column
 * @method     ChildProjectbadge[]|ObjectCollection findByBadgeid(int $badgeid) Return ChildProjectbadge objects filtered by the badgeid column
 * @method     ChildProjectbadge[]|ObjectCollection findByBadgename(string $badgename) Return ChildProjectbadge objects filtered by the badgename column
 * @method     ChildProjectbadge[]|ObjectCollection findByNotes(string $notes) Return ChildProjectbadge objects filtered by the notes column
 * @method     ChildProjectbadge[]|ObjectCollection findByExpiry(int $expiry) Return ChildProjectbadge objects filtered by the expiry column
 * @method     ChildProjectbadge[]|ObjectCollection findByProjectUuid(string $projectuuid) Return ChildProjectbadge objects filtered by the projectuuid column
 * @method     ChildProjectbadge[]|ObjectCollection findByCreated(int $created) Return ChildProjectbadge objects filtered by the created column
 * @method     ChildProjectbadge[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 *
 */
abstract class ProjectbadgeQuery extends ModelCriteria
{
    protected $entityNotFoundExceptionClass = '\\Propel\\Runtime\\Exception\\EntityNotFoundException';

    /**
     * Initializes internal state of \Base\ProjectbadgeQuery object.
     *
     * @param     string $dbName The database name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'default', $modelName = '\\Projectbadge', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildProjectbadgeQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildProjectbadgeQuery
     */
    public static function create($modelAlias = null, Criteria $criteria = null)
    {
        if ($criteria instanceof ChildProjectbadgeQuery) {
            return $criteria;
        }
        $query = new ChildProjectbadgeQuery();
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
     * @return ChildProjectbadge|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, ConnectionInterface $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = ProjectbadgeTableMap::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getServiceContainer()->getReadConnection(ProjectbadgeTableMap::DATABASE_NAME);
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
     * @return ChildProjectbadge A model object, or null if the key is not found
     */
    protected function findPkSimple($key, ConnectionInterface $con)
    {
        $sql = 'SELECT id, uuid, badgeid, badgename, notes, expiry, projectuuid, created FROM projectbadge WHERE id = :p0';
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
            /** @var ChildProjectbadge $obj */
            $obj = new ChildProjectbadge();
            $obj->hydrate($row);
            ProjectbadgeTableMap::addInstanceToPool($obj, (string) $key);
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
     * @return ChildProjectbadge|array|mixed the result, formatted by the current formatter
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
     * @return $this|ChildProjectbadgeQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(ProjectbadgeTableMap::COL_ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return $this|ChildProjectbadgeQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(ProjectbadgeTableMap::COL_ID, $keys, Criteria::IN);
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
     * @return $this|ChildProjectbadgeQuery The current query, for fluid interface
     */
    public function filterById($id = null, $comparison = null)
    {
        if (is_array($id)) {
            $useMinMax = false;
            if (isset($id['min'])) {
                $this->addUsingAlias(ProjectbadgeTableMap::COL_ID, $id['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($id['max'])) {
                $this->addUsingAlias(ProjectbadgeTableMap::COL_ID, $id['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ProjectbadgeTableMap::COL_ID, $id, $comparison);
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
     * @return $this|ChildProjectbadgeQuery The current query, for fluid interface
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

        return $this->addUsingAlias(ProjectbadgeTableMap::COL_UUID, $uuid, $comparison);
    }

    /**
     * Filter the query on the badgeid column
     *
     * Example usage:
     * <code>
     * $query->filterByBadgeid(1234); // WHERE badgeid = 1234
     * $query->filterByBadgeid(array(12, 34)); // WHERE badgeid IN (12, 34)
     * $query->filterByBadgeid(array('min' => 12)); // WHERE badgeid > 12
     * </code>
     *
     * @param     mixed $badgeid The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildProjectbadgeQuery The current query, for fluid interface
     */
    public function filterByBadgeid($badgeid = null, $comparison = null)
    {
        if (is_array($badgeid)) {
            $useMinMax = false;
            if (isset($badgeid['min'])) {
                $this->addUsingAlias(ProjectbadgeTableMap::COL_BADGEID, $badgeid['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($badgeid['max'])) {
                $this->addUsingAlias(ProjectbadgeTableMap::COL_BADGEID, $badgeid['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ProjectbadgeTableMap::COL_BADGEID, $badgeid, $comparison);
    }

    /**
     * Filter the query on the badgename column
     *
     * Example usage:
     * <code>
     * $query->filterByBadgename('fooValue');   // WHERE badgename = 'fooValue'
     * $query->filterByBadgename('%fooValue%'); // WHERE badgename LIKE '%fooValue%'
     * </code>
     *
     * @param     string $badgename The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildProjectbadgeQuery The current query, for fluid interface
     */
    public function filterByBadgename($badgename = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($badgename)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $badgename)) {
                $badgename = str_replace('*', '%', $badgename);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ProjectbadgeTableMap::COL_BADGENAME, $badgename, $comparison);
    }

    /**
     * Filter the query on the notes column
     *
     * Example usage:
     * <code>
     * $query->filterByNotes('fooValue');   // WHERE notes = 'fooValue'
     * $query->filterByNotes('%fooValue%'); // WHERE notes LIKE '%fooValue%'
     * </code>
     *
     * @param     string $notes The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildProjectbadgeQuery The current query, for fluid interface
     */
    public function filterByNotes($notes = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($notes)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $notes)) {
                $notes = str_replace('*', '%', $notes);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ProjectbadgeTableMap::COL_NOTES, $notes, $comparison);
    }

    /**
     * Filter the query on the expiry column
     *
     * Example usage:
     * <code>
     * $query->filterByExpiry(1234); // WHERE expiry = 1234
     * $query->filterByExpiry(array(12, 34)); // WHERE expiry IN (12, 34)
     * $query->filterByExpiry(array('min' => 12)); // WHERE expiry > 12
     * </code>
     *
     * @param     mixed $expiry The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildProjectbadgeQuery The current query, for fluid interface
     */
    public function filterByExpiry($expiry = null, $comparison = null)
    {
        if (is_array($expiry)) {
            $useMinMax = false;
            if (isset($expiry['min'])) {
                $this->addUsingAlias(ProjectbadgeTableMap::COL_EXPIRY, $expiry['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($expiry['max'])) {
                $this->addUsingAlias(ProjectbadgeTableMap::COL_EXPIRY, $expiry['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ProjectbadgeTableMap::COL_EXPIRY, $expiry, $comparison);
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
     * @return $this|ChildProjectbadgeQuery The current query, for fluid interface
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

        return $this->addUsingAlias(ProjectbadgeTableMap::COL_PROJECTUUID, $projectUuid, $comparison);
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
     * @return $this|ChildProjectbadgeQuery The current query, for fluid interface
     */
    public function filterByCreated($created = null, $comparison = null)
    {
        if (is_array($created)) {
            $useMinMax = false;
            if (isset($created['min'])) {
                $this->addUsingAlias(ProjectbadgeTableMap::COL_CREATED, $created['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($created['max'])) {
                $this->addUsingAlias(ProjectbadgeTableMap::COL_CREATED, $created['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ProjectbadgeTableMap::COL_CREATED, $created, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   ChildProjectbadge $projectbadge Object to remove from the list of results
     *
     * @return $this|ChildProjectbadgeQuery The current query, for fluid interface
     */
    public function prune($projectbadge = null)
    {
        if ($projectbadge) {
            $this->addUsingAlias(ProjectbadgeTableMap::COL_ID, $projectbadge->getId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

    /**
     * Deletes all rows from the projectbadge table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public function doDeleteAll(ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(ProjectbadgeTableMap::DATABASE_NAME);
        }

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            $affectedRows += parent::doDeleteAll($con);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            ProjectbadgeTableMap::clearInstancePool();
            ProjectbadgeTableMap::clearRelatedInstancePool();

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
            $con = Propel::getServiceContainer()->getWriteConnection(ProjectbadgeTableMap::DATABASE_NAME);
        }

        $criteria = $this;

        // Set the correct dbName
        $criteria->setDbName(ProjectbadgeTableMap::DATABASE_NAME);

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con, $criteria) {
            $affectedRows = 0; // initialize var to track total num of affected rows

            ProjectbadgeTableMap::removeInstanceFromPool($criteria);

            $affectedRows += ModelCriteria::delete($con);
            ProjectbadgeTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

} // ProjectbadgeQuery
