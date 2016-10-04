<?php

namespace Base;

use \Mediastore as ChildMediastore;
use \MediastoreQuery as ChildMediastoreQuery;
use \Exception;
use \PDO;
use Map\MediastoreTableMap;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\ModelCriteria;
use Propel\Runtime\Collection\ObjectCollection;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\Exception\PropelException;

/**
 * Base class that represents a query for the 'mediastore' table.
 *
 *
 *
 * @method     ChildMediastoreQuery orderById($order = Criteria::ASC) Order by the id column
 * @method     ChildMediastoreQuery orderByTitle($order = Criteria::ASC) Order by the title column
 * @method     ChildMediastoreQuery orderByDescription($order = Criteria::ASC) Order by the description column
 * @method     ChildMediastoreQuery orderByType($order = Criteria::ASC) Order by the type column
 * @method     ChildMediastoreQuery orderByFilename($order = Criteria::ASC) Order by the filename column
 * @method     ChildMediastoreQuery orderByExt($order = Criteria::ASC) Order by the ext column
 * @method     ChildMediastoreQuery orderByUuid($order = Criteria::ASC) Order by the uuid column
 * @method     ChildMediastoreQuery orderByMime($order = Criteria::ASC) Order by the mime column
 * @method     ChildMediastoreQuery orderBySize($order = Criteria::ASC) Order by the size column
 * @method     ChildMediastoreQuery orderByCreated($order = Criteria::ASC) Order by the created column
 * @method     ChildMediastoreQuery orderByModified($order = Criteria::ASC) Order by the modified column
 *
 * @method     ChildMediastoreQuery groupById() Group by the id column
 * @method     ChildMediastoreQuery groupByTitle() Group by the title column
 * @method     ChildMediastoreQuery groupByDescription() Group by the description column
 * @method     ChildMediastoreQuery groupByType() Group by the type column
 * @method     ChildMediastoreQuery groupByFilename() Group by the filename column
 * @method     ChildMediastoreQuery groupByExt() Group by the ext column
 * @method     ChildMediastoreQuery groupByUuid() Group by the uuid column
 * @method     ChildMediastoreQuery groupByMime() Group by the mime column
 * @method     ChildMediastoreQuery groupBySize() Group by the size column
 * @method     ChildMediastoreQuery groupByCreated() Group by the created column
 * @method     ChildMediastoreQuery groupByModified() Group by the modified column
 *
 * @method     ChildMediastoreQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ChildMediastoreQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ChildMediastoreQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ChildMediastoreQuery leftJoinWith($relation) Adds a LEFT JOIN clause and with to the query
 * @method     ChildMediastoreQuery rightJoinWith($relation) Adds a RIGHT JOIN clause and with to the query
 * @method     ChildMediastoreQuery innerJoinWith($relation) Adds a INNER JOIN clause and with to the query
 *
 * @method     ChildMediastore findOne(ConnectionInterface $con = null) Return the first ChildMediastore matching the query
 * @method     ChildMediastore findOneOrCreate(ConnectionInterface $con = null) Return the first ChildMediastore matching the query, or a new ChildMediastore object populated from the query conditions when no match is found
 *
 * @method     ChildMediastore findOneById(int $id) Return the first ChildMediastore filtered by the id column
 * @method     ChildMediastore findOneByTitle(string $title) Return the first ChildMediastore filtered by the title column
 * @method     ChildMediastore findOneByDescription(string $description) Return the first ChildMediastore filtered by the description column
 * @method     ChildMediastore findOneByType(string $type) Return the first ChildMediastore filtered by the type column
 * @method     ChildMediastore findOneByFilename(string $filename) Return the first ChildMediastore filtered by the filename column
 * @method     ChildMediastore findOneByExt(string $ext) Return the first ChildMediastore filtered by the ext column
 * @method     ChildMediastore findOneByUuid(string $uuid) Return the first ChildMediastore filtered by the uuid column
 * @method     ChildMediastore findOneByMime(string $mime) Return the first ChildMediastore filtered by the mime column
 * @method     ChildMediastore findOneBySize(int $size) Return the first ChildMediastore filtered by the size column
 * @method     ChildMediastore findOneByCreated(int $created) Return the first ChildMediastore filtered by the created column
 * @method     ChildMediastore findOneByModified(int $modified) Return the first ChildMediastore filtered by the modified column *

 * @method     ChildMediastore requirePk($key, ConnectionInterface $con = null) Return the ChildMediastore by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildMediastore requireOne(ConnectionInterface $con = null) Return the first ChildMediastore matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildMediastore requireOneById(int $id) Return the first ChildMediastore filtered by the id column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildMediastore requireOneByTitle(string $title) Return the first ChildMediastore filtered by the title column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildMediastore requireOneByDescription(string $description) Return the first ChildMediastore filtered by the description column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildMediastore requireOneByType(string $type) Return the first ChildMediastore filtered by the type column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildMediastore requireOneByFilename(string $filename) Return the first ChildMediastore filtered by the filename column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildMediastore requireOneByExt(string $ext) Return the first ChildMediastore filtered by the ext column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildMediastore requireOneByUuid(string $uuid) Return the first ChildMediastore filtered by the uuid column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildMediastore requireOneByMime(string $mime) Return the first ChildMediastore filtered by the mime column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildMediastore requireOneBySize(int $size) Return the first ChildMediastore filtered by the size column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildMediastore requireOneByCreated(int $created) Return the first ChildMediastore filtered by the created column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildMediastore requireOneByModified(int $modified) Return the first ChildMediastore filtered by the modified column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildMediastore[]|ObjectCollection find(ConnectionInterface $con = null) Return ChildMediastore objects based on current ModelCriteria
 * @method     ChildMediastore[]|ObjectCollection findById(int $id) Return ChildMediastore objects filtered by the id column
 * @method     ChildMediastore[]|ObjectCollection findByTitle(string $title) Return ChildMediastore objects filtered by the title column
 * @method     ChildMediastore[]|ObjectCollection findByDescription(string $description) Return ChildMediastore objects filtered by the description column
 * @method     ChildMediastore[]|ObjectCollection findByType(string $type) Return ChildMediastore objects filtered by the type column
 * @method     ChildMediastore[]|ObjectCollection findByFilename(string $filename) Return ChildMediastore objects filtered by the filename column
 * @method     ChildMediastore[]|ObjectCollection findByExt(string $ext) Return ChildMediastore objects filtered by the ext column
 * @method     ChildMediastore[]|ObjectCollection findByUuid(string $uuid) Return ChildMediastore objects filtered by the uuid column
 * @method     ChildMediastore[]|ObjectCollection findByMime(string $mime) Return ChildMediastore objects filtered by the mime column
 * @method     ChildMediastore[]|ObjectCollection findBySize(int $size) Return ChildMediastore objects filtered by the size column
 * @method     ChildMediastore[]|ObjectCollection findByCreated(int $created) Return ChildMediastore objects filtered by the created column
 * @method     ChildMediastore[]|ObjectCollection findByModified(int $modified) Return ChildMediastore objects filtered by the modified column
 * @method     ChildMediastore[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 *
 */
abstract class MediastoreQuery extends ModelCriteria
{
    protected $entityNotFoundExceptionClass = '\\Propel\\Runtime\\Exception\\EntityNotFoundException';

    /**
     * Initializes internal state of \Base\MediastoreQuery object.
     *
     * @param     string $dbName The database name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'default', $modelName = '\\Mediastore', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildMediastoreQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildMediastoreQuery
     */
    public static function create($modelAlias = null, Criteria $criteria = null)
    {
        if ($criteria instanceof ChildMediastoreQuery) {
            return $criteria;
        }
        $query = new ChildMediastoreQuery();
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
     * @return ChildMediastore|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, ConnectionInterface $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = MediastoreTableMap::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getServiceContainer()->getReadConnection(MediastoreTableMap::DATABASE_NAME);
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
     * @return ChildMediastore A model object, or null if the key is not found
     */
    protected function findPkSimple($key, ConnectionInterface $con)
    {
        $sql = 'SELECT id, title, description, type, filename, ext, uuid, mime, size, created, modified FROM mediastore WHERE id = :p0';
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
            /** @var ChildMediastore $obj */
            $obj = new ChildMediastore();
            $obj->hydrate($row);
            MediastoreTableMap::addInstanceToPool($obj, (string) $key);
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
     * @return ChildMediastore|array|mixed the result, formatted by the current formatter
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
     * @return $this|ChildMediastoreQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(MediastoreTableMap::COL_ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return $this|ChildMediastoreQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(MediastoreTableMap::COL_ID, $keys, Criteria::IN);
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
     * @return $this|ChildMediastoreQuery The current query, for fluid interface
     */
    public function filterById($id = null, $comparison = null)
    {
        if (is_array($id)) {
            $useMinMax = false;
            if (isset($id['min'])) {
                $this->addUsingAlias(MediastoreTableMap::COL_ID, $id['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($id['max'])) {
                $this->addUsingAlias(MediastoreTableMap::COL_ID, $id['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(MediastoreTableMap::COL_ID, $id, $comparison);
    }

    /**
     * Filter the query on the title column
     *
     * Example usage:
     * <code>
     * $query->filterByTitle('fooValue');   // WHERE title = 'fooValue'
     * $query->filterByTitle('%fooValue%'); // WHERE title LIKE '%fooValue%'
     * </code>
     *
     * @param     string $title The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildMediastoreQuery The current query, for fluid interface
     */
    public function filterByTitle($title = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($title)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $title)) {
                $title = str_replace('*', '%', $title);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(MediastoreTableMap::COL_TITLE, $title, $comparison);
    }

    /**
     * Filter the query on the description column
     *
     * Example usage:
     * <code>
     * $query->filterByDescription('fooValue');   // WHERE description = 'fooValue'
     * $query->filterByDescription('%fooValue%'); // WHERE description LIKE '%fooValue%'
     * </code>
     *
     * @param     string $description The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildMediastoreQuery The current query, for fluid interface
     */
    public function filterByDescription($description = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($description)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $description)) {
                $description = str_replace('*', '%', $description);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(MediastoreTableMap::COL_DESCRIPTION, $description, $comparison);
    }

    /**
     * Filter the query on the type column
     *
     * Example usage:
     * <code>
     * $query->filterByType('fooValue');   // WHERE type = 'fooValue'
     * $query->filterByType('%fooValue%'); // WHERE type LIKE '%fooValue%'
     * </code>
     *
     * @param     string $type The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildMediastoreQuery The current query, for fluid interface
     */
    public function filterByType($type = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($type)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $type)) {
                $type = str_replace('*', '%', $type);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(MediastoreTableMap::COL_TYPE, $type, $comparison);
    }

    /**
     * Filter the query on the filename column
     *
     * Example usage:
     * <code>
     * $query->filterByFilename('fooValue');   // WHERE filename = 'fooValue'
     * $query->filterByFilename('%fooValue%'); // WHERE filename LIKE '%fooValue%'
     * </code>
     *
     * @param     string $filename The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildMediastoreQuery The current query, for fluid interface
     */
    public function filterByFilename($filename = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($filename)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $filename)) {
                $filename = str_replace('*', '%', $filename);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(MediastoreTableMap::COL_FILENAME, $filename, $comparison);
    }

    /**
     * Filter the query on the ext column
     *
     * Example usage:
     * <code>
     * $query->filterByExt('fooValue');   // WHERE ext = 'fooValue'
     * $query->filterByExt('%fooValue%'); // WHERE ext LIKE '%fooValue%'
     * </code>
     *
     * @param     string $ext The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildMediastoreQuery The current query, for fluid interface
     */
    public function filterByExt($ext = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($ext)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $ext)) {
                $ext = str_replace('*', '%', $ext);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(MediastoreTableMap::COL_EXT, $ext, $comparison);
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
     * @return $this|ChildMediastoreQuery The current query, for fluid interface
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

        return $this->addUsingAlias(MediastoreTableMap::COL_UUID, $uuid, $comparison);
    }

    /**
     * Filter the query on the mime column
     *
     * Example usage:
     * <code>
     * $query->filterByMime('fooValue');   // WHERE mime = 'fooValue'
     * $query->filterByMime('%fooValue%'); // WHERE mime LIKE '%fooValue%'
     * </code>
     *
     * @param     string $mime The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildMediastoreQuery The current query, for fluid interface
     */
    public function filterByMime($mime = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($mime)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $mime)) {
                $mime = str_replace('*', '%', $mime);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(MediastoreTableMap::COL_MIME, $mime, $comparison);
    }

    /**
     * Filter the query on the size column
     *
     * Example usage:
     * <code>
     * $query->filterBySize(1234); // WHERE size = 1234
     * $query->filterBySize(array(12, 34)); // WHERE size IN (12, 34)
     * $query->filterBySize(array('min' => 12)); // WHERE size > 12
     * </code>
     *
     * @param     mixed $size The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildMediastoreQuery The current query, for fluid interface
     */
    public function filterBySize($size = null, $comparison = null)
    {
        if (is_array($size)) {
            $useMinMax = false;
            if (isset($size['min'])) {
                $this->addUsingAlias(MediastoreTableMap::COL_SIZE, $size['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($size['max'])) {
                $this->addUsingAlias(MediastoreTableMap::COL_SIZE, $size['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(MediastoreTableMap::COL_SIZE, $size, $comparison);
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
     * @return $this|ChildMediastoreQuery The current query, for fluid interface
     */
    public function filterByCreated($created = null, $comparison = null)
    {
        if (is_array($created)) {
            $useMinMax = false;
            if (isset($created['min'])) {
                $this->addUsingAlias(MediastoreTableMap::COL_CREATED, $created['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($created['max'])) {
                $this->addUsingAlias(MediastoreTableMap::COL_CREATED, $created['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(MediastoreTableMap::COL_CREATED, $created, $comparison);
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
     * @return $this|ChildMediastoreQuery The current query, for fluid interface
     */
    public function filterByModified($modified = null, $comparison = null)
    {
        if (is_array($modified)) {
            $useMinMax = false;
            if (isset($modified['min'])) {
                $this->addUsingAlias(MediastoreTableMap::COL_MODIFIED, $modified['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($modified['max'])) {
                $this->addUsingAlias(MediastoreTableMap::COL_MODIFIED, $modified['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(MediastoreTableMap::COL_MODIFIED, $modified, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   ChildMediastore $mediastore Object to remove from the list of results
     *
     * @return $this|ChildMediastoreQuery The current query, for fluid interface
     */
    public function prune($mediastore = null)
    {
        if ($mediastore) {
            $this->addUsingAlias(MediastoreTableMap::COL_ID, $mediastore->getId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

    /**
     * Deletes all rows from the mediastore table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public function doDeleteAll(ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(MediastoreTableMap::DATABASE_NAME);
        }

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            $affectedRows += parent::doDeleteAll($con);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            MediastoreTableMap::clearInstancePool();
            MediastoreTableMap::clearRelatedInstancePool();

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
            $con = Propel::getServiceContainer()->getWriteConnection(MediastoreTableMap::DATABASE_NAME);
        }

        $criteria = $this;

        // Set the correct dbName
        $criteria->setDbName(MediastoreTableMap::DATABASE_NAME);

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con, $criteria) {
            $affectedRows = 0; // initialize var to track total num of affected rows

            MediastoreTableMap::removeInstanceFromPool($criteria);

            $affectedRows += ModelCriteria::delete($con);
            MediastoreTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

} // MediastoreQuery
