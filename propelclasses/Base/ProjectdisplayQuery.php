<?php

namespace Base;

use \Projectdisplay as ChildProjectdisplay;
use \ProjectdisplayQuery as ChildProjectdisplayQuery;
use \Exception;
use \PDO;
use Map\ProjectdisplayTableMap;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\ModelCriteria;
use Propel\Runtime\Collection\ObjectCollection;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\Exception\PropelException;

/**
 * Base class that represents a query for the 'projectdisplay' table.
 *
 *
 *
 * @method     ChildProjectdisplayQuery orderById($order = Criteria::ASC) Order by the id column
 * @method     ChildProjectdisplayQuery orderByUuid($order = Criteria::ASC) Order by the uuid column
 * @method     ChildProjectdisplayQuery orderByTagline($order = Criteria::ASC) Order by the tagline column
 * @method     ChildProjectdisplayQuery orderBydescription($order = Criteria::ASC) Order by the description column
 * @method     ChildProjectdisplayQuery orderByCategory($order = Criteria::ASC) Order by the category column
 * @method     ChildProjectdisplayQuery orderBySociallinks($order = Criteria::ASC) Order by the sociallinks column
 * @method     ChildProjectdisplayQuery orderByTags($order = Criteria::ASC) Order by the tags column
 * @method     ChildProjectdisplayQuery orderByProjectUuid($order = Criteria::ASC) Order by the projectuuid column
 * @method     ChildProjectdisplayQuery orderByClubuuid($order = Criteria::ASC) Order by the clubuuid column
 * @method     ChildProjectdisplayQuery orderByCreated($order = Criteria::ASC) Order by the created column
 * @method     ChildProjectdisplayQuery orderByModified($order = Criteria::ASC) Order by the modified column
 *
 * @method     ChildProjectdisplayQuery groupById() Group by the id column
 * @method     ChildProjectdisplayQuery groupByUuid() Group by the uuid column
 * @method     ChildProjectdisplayQuery groupByTagline() Group by the tagline column
 * @method     ChildProjectdisplayQuery groupBydescription() Group by the description column
 * @method     ChildProjectdisplayQuery groupByCategory() Group by the category column
 * @method     ChildProjectdisplayQuery groupBySociallinks() Group by the sociallinks column
 * @method     ChildProjectdisplayQuery groupByTags() Group by the tags column
 * @method     ChildProjectdisplayQuery groupByProjectUuid() Group by the projectuuid column
 * @method     ChildProjectdisplayQuery groupByClubuuid() Group by the clubuuid column
 * @method     ChildProjectdisplayQuery groupByCreated() Group by the created column
 * @method     ChildProjectdisplayQuery groupByModified() Group by the modified column
 *
 * @method     ChildProjectdisplayQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ChildProjectdisplayQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ChildProjectdisplayQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ChildProjectdisplayQuery leftJoinWith($relation) Adds a LEFT JOIN clause and with to the query
 * @method     ChildProjectdisplayQuery rightJoinWith($relation) Adds a RIGHT JOIN clause and with to the query
 * @method     ChildProjectdisplayQuery innerJoinWith($relation) Adds a INNER JOIN clause and with to the query
 *
 * @method     ChildProjectdisplay findOne(ConnectionInterface $con = null) Return the first ChildProjectdisplay matching the query
 * @method     ChildProjectdisplay findOneOrCreate(ConnectionInterface $con = null) Return the first ChildProjectdisplay matching the query, or a new ChildProjectdisplay object populated from the query conditions when no match is found
 *
 * @method     ChildProjectdisplay findOneById(int $id) Return the first ChildProjectdisplay filtered by the id column
 * @method     ChildProjectdisplay findOneByUuid(string $uuid) Return the first ChildProjectdisplay filtered by the uuid column
 * @method     ChildProjectdisplay findOneByTagline(string $tagline) Return the first ChildProjectdisplay filtered by the tagline column
 * @method     ChildProjectdisplay findOneBydescription(string $description) Return the first ChildProjectdisplay filtered by the description column
 * @method     ChildProjectdisplay findOneByCategory(string $category) Return the first ChildProjectdisplay filtered by the category column
 * @method     ChildProjectdisplay findOneBySociallinks(string $sociallinks) Return the first ChildProjectdisplay filtered by the sociallinks column
 * @method     ChildProjectdisplay findOneByTags(string $tags) Return the first ChildProjectdisplay filtered by the tags column
 * @method     ChildProjectdisplay findOneByProjectUuid(string $projectuuid) Return the first ChildProjectdisplay filtered by the projectuuid column
 * @method     ChildProjectdisplay findOneByClubuuid(string $clubuuid) Return the first ChildProjectdisplay filtered by the clubuuid column
 * @method     ChildProjectdisplay findOneByCreated(int $created) Return the first ChildProjectdisplay filtered by the created column
 * @method     ChildProjectdisplay findOneByModified(int $modified) Return the first ChildProjectdisplay filtered by the modified column *

 * @method     ChildProjectdisplay requirePk($key, ConnectionInterface $con = null) Return the ChildProjectdisplay by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildProjectdisplay requireOne(ConnectionInterface $con = null) Return the first ChildProjectdisplay matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildProjectdisplay requireOneById(int $id) Return the first ChildProjectdisplay filtered by the id column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildProjectdisplay requireOneByUuid(string $uuid) Return the first ChildProjectdisplay filtered by the uuid column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildProjectdisplay requireOneByTagline(string $tagline) Return the first ChildProjectdisplay filtered by the tagline column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildProjectdisplay requireOneBydescription(string $description) Return the first ChildProjectdisplay filtered by the description column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildProjectdisplay requireOneByCategory(string $category) Return the first ChildProjectdisplay filtered by the category column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildProjectdisplay requireOneBySociallinks(string $sociallinks) Return the first ChildProjectdisplay filtered by the sociallinks column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildProjectdisplay requireOneByTags(string $tags) Return the first ChildProjectdisplay filtered by the tags column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildProjectdisplay requireOneByProjectUuid(string $projectuuid) Return the first ChildProjectdisplay filtered by the projectuuid column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildProjectdisplay requireOneByClubuuid(string $clubuuid) Return the first ChildProjectdisplay filtered by the clubuuid column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildProjectdisplay requireOneByCreated(int $created) Return the first ChildProjectdisplay filtered by the created column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildProjectdisplay requireOneByModified(int $modified) Return the first ChildProjectdisplay filtered by the modified column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildProjectdisplay[]|ObjectCollection find(ConnectionInterface $con = null) Return ChildProjectdisplay objects based on current ModelCriteria
 * @method     ChildProjectdisplay[]|ObjectCollection findById(int $id) Return ChildProjectdisplay objects filtered by the id column
 * @method     ChildProjectdisplay[]|ObjectCollection findByUuid(string $uuid) Return ChildProjectdisplay objects filtered by the uuid column
 * @method     ChildProjectdisplay[]|ObjectCollection findByTagline(string $tagline) Return ChildProjectdisplay objects filtered by the tagline column
 * @method     ChildProjectdisplay[]|ObjectCollection findBydescription(string $description) Return ChildProjectdisplay objects filtered by the description column
 * @method     ChildProjectdisplay[]|ObjectCollection findByCategory(string $category) Return ChildProjectdisplay objects filtered by the category column
 * @method     ChildProjectdisplay[]|ObjectCollection findBySociallinks(string $sociallinks) Return ChildProjectdisplay objects filtered by the sociallinks column
 * @method     ChildProjectdisplay[]|ObjectCollection findByTags(string $tags) Return ChildProjectdisplay objects filtered by the tags column
 * @method     ChildProjectdisplay[]|ObjectCollection findByProjectUuid(string $projectuuid) Return ChildProjectdisplay objects filtered by the projectuuid column
 * @method     ChildProjectdisplay[]|ObjectCollection findByClubuuid(string $clubuuid) Return ChildProjectdisplay objects filtered by the clubuuid column
 * @method     ChildProjectdisplay[]|ObjectCollection findByCreated(int $created) Return ChildProjectdisplay objects filtered by the created column
 * @method     ChildProjectdisplay[]|ObjectCollection findByModified(int $modified) Return ChildProjectdisplay objects filtered by the modified column
 * @method     ChildProjectdisplay[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 *
 */
abstract class ProjectdisplayQuery extends ModelCriteria
{
    protected $entityNotFoundExceptionClass = '\\Propel\\Runtime\\Exception\\EntityNotFoundException';

    /**
     * Initializes internal state of \Base\ProjectdisplayQuery object.
     *
     * @param     string $dbName The database name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'default', $modelName = '\\Projectdisplay', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildProjectdisplayQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildProjectdisplayQuery
     */
    public static function create($modelAlias = null, Criteria $criteria = null)
    {
        if ($criteria instanceof ChildProjectdisplayQuery) {
            return $criteria;
        }
        $query = new ChildProjectdisplayQuery();
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
     * @return ChildProjectdisplay|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, ConnectionInterface $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = ProjectdisplayTableMap::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getServiceContainer()->getReadConnection(ProjectdisplayTableMap::DATABASE_NAME);
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
     * @return ChildProjectdisplay A model object, or null if the key is not found
     */
    protected function findPkSimple($key, ConnectionInterface $con)
    {
        $sql = 'SELECT id, uuid, tagline, description, category, sociallinks, tags, projectuuid, clubuuid, created, modified FROM projectdisplay WHERE id = :p0';
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
            /** @var ChildProjectdisplay $obj */
            $obj = new ChildProjectdisplay();
            $obj->hydrate($row);
            ProjectdisplayTableMap::addInstanceToPool($obj, (string) $key);
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
     * @return ChildProjectdisplay|array|mixed the result, formatted by the current formatter
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
     * @return $this|ChildProjectdisplayQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(ProjectdisplayTableMap::COL_ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return $this|ChildProjectdisplayQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(ProjectdisplayTableMap::COL_ID, $keys, Criteria::IN);
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
     * @return $this|ChildProjectdisplayQuery The current query, for fluid interface
     */
    public function filterById($id = null, $comparison = null)
    {
        if (is_array($id)) {
            $useMinMax = false;
            if (isset($id['min'])) {
                $this->addUsingAlias(ProjectdisplayTableMap::COL_ID, $id['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($id['max'])) {
                $this->addUsingAlias(ProjectdisplayTableMap::COL_ID, $id['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ProjectdisplayTableMap::COL_ID, $id, $comparison);
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
     * @return $this|ChildProjectdisplayQuery The current query, for fluid interface
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

        return $this->addUsingAlias(ProjectdisplayTableMap::COL_UUID, $uuid, $comparison);
    }

    /**
     * Filter the query on the tagline column
     *
     * Example usage:
     * <code>
     * $query->filterByTagline('fooValue');   // WHERE tagline = 'fooValue'
     * $query->filterByTagline('%fooValue%'); // WHERE tagline LIKE '%fooValue%'
     * </code>
     *
     * @param     string $tagline The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildProjectdisplayQuery The current query, for fluid interface
     */
    public function filterByTagline($tagline = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($tagline)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $tagline)) {
                $tagline = str_replace('*', '%', $tagline);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ProjectdisplayTableMap::COL_TAGLINE, $tagline, $comparison);
    }

    /**
     * Filter the query on the description column
     *
     * Example usage:
     * <code>
     * $query->filterBydescription('fooValue');   // WHERE description = 'fooValue'
     * $query->filterBydescription('%fooValue%'); // WHERE description LIKE '%fooValue%'
     * </code>
     *
     * @param     string $description The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildProjectdisplayQuery The current query, for fluid interface
     */
    public function filterBydescription($description = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($description)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $description)) {
                $description = str_replace('*', '%', $description);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ProjectdisplayTableMap::COL_DESCRIPTION, $description, $comparison);
    }

    /**
     * Filter the query on the category column
     *
     * Example usage:
     * <code>
     * $query->filterByCategory('fooValue');   // WHERE category = 'fooValue'
     * $query->filterByCategory('%fooValue%'); // WHERE category LIKE '%fooValue%'
     * </code>
     *
     * @param     string $category The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildProjectdisplayQuery The current query, for fluid interface
     */
    public function filterByCategory($category = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($category)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $category)) {
                $category = str_replace('*', '%', $category);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ProjectdisplayTableMap::COL_CATEGORY, $category, $comparison);
    }

    /**
     * Filter the query on the sociallinks column
     *
     * Example usage:
     * <code>
     * $query->filterBySociallinks('fooValue');   // WHERE sociallinks = 'fooValue'
     * $query->filterBySociallinks('%fooValue%'); // WHERE sociallinks LIKE '%fooValue%'
     * </code>
     *
     * @param     string $sociallinks The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildProjectdisplayQuery The current query, for fluid interface
     */
    public function filterBySociallinks($sociallinks = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($sociallinks)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $sociallinks)) {
                $sociallinks = str_replace('*', '%', $sociallinks);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ProjectdisplayTableMap::COL_SOCIALLINKS, $sociallinks, $comparison);
    }

    /**
     * Filter the query on the tags column
     *
     * Example usage:
     * <code>
     * $query->filterByTags('fooValue');   // WHERE tags = 'fooValue'
     * $query->filterByTags('%fooValue%'); // WHERE tags LIKE '%fooValue%'
     * </code>
     *
     * @param     string $tags The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildProjectdisplayQuery The current query, for fluid interface
     */
    public function filterByTags($tags = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($tags)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $tags)) {
                $tags = str_replace('*', '%', $tags);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ProjectdisplayTableMap::COL_TAGS, $tags, $comparison);
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
     * @return $this|ChildProjectdisplayQuery The current query, for fluid interface
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

        return $this->addUsingAlias(ProjectdisplayTableMap::COL_PROJECTUUID, $projectUuid, $comparison);
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
     * @return $this|ChildProjectdisplayQuery The current query, for fluid interface
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

        return $this->addUsingAlias(ProjectdisplayTableMap::COL_CLUBUUID, $clubuuid, $comparison);
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
     * @return $this|ChildProjectdisplayQuery The current query, for fluid interface
     */
    public function filterByCreated($created = null, $comparison = null)
    {
        if (is_array($created)) {
            $useMinMax = false;
            if (isset($created['min'])) {
                $this->addUsingAlias(ProjectdisplayTableMap::COL_CREATED, $created['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($created['max'])) {
                $this->addUsingAlias(ProjectdisplayTableMap::COL_CREATED, $created['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ProjectdisplayTableMap::COL_CREATED, $created, $comparison);
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
     * @return $this|ChildProjectdisplayQuery The current query, for fluid interface
     */
    public function filterByModified($modified = null, $comparison = null)
    {
        if (is_array($modified)) {
            $useMinMax = false;
            if (isset($modified['min'])) {
                $this->addUsingAlias(ProjectdisplayTableMap::COL_MODIFIED, $modified['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($modified['max'])) {
                $this->addUsingAlias(ProjectdisplayTableMap::COL_MODIFIED, $modified['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ProjectdisplayTableMap::COL_MODIFIED, $modified, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   ChildProjectdisplay $projectdisplay Object to remove from the list of results
     *
     * @return $this|ChildProjectdisplayQuery The current query, for fluid interface
     */
    public function prune($projectdisplay = null)
    {
        if ($projectdisplay) {
            $this->addUsingAlias(ProjectdisplayTableMap::COL_ID, $projectdisplay->getId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

    /**
     * Deletes all rows from the projectdisplay table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public function doDeleteAll(ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(ProjectdisplayTableMap::DATABASE_NAME);
        }

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            $affectedRows += parent::doDeleteAll($con);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            ProjectdisplayTableMap::clearInstancePool();
            ProjectdisplayTableMap::clearRelatedInstancePool();

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
            $con = Propel::getServiceContainer()->getWriteConnection(ProjectdisplayTableMap::DATABASE_NAME);
        }

        $criteria = $this;

        // Set the correct dbName
        $criteria->setDbName(ProjectdisplayTableMap::DATABASE_NAME);

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con, $criteria) {
            $affectedRows = 0; // initialize var to track total num of affected rows

            ProjectdisplayTableMap::removeInstanceFromPool($criteria);

            $affectedRows += ModelCriteria::delete($con);
            ProjectdisplayTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

} // ProjectdisplayQuery
