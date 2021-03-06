<?php

namespace Map;

use \Mediastore;
use \MediastoreQuery;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\InstancePoolTrait;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\DataFetcher\DataFetcherInterface;
use Propel\Runtime\Exception\PropelException;
use Propel\Runtime\Map\RelationMap;
use Propel\Runtime\Map\TableMap;
use Propel\Runtime\Map\TableMapTrait;


/**
 * This class defines the structure of the 'mediastore' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 */
class MediastoreTableMap extends TableMap
{
    use InstancePoolTrait;
    use TableMapTrait;

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'propelclasses.Map.MediastoreTableMap';

    /**
     * The default database name for this class
     */
    const DATABASE_NAME = 'default';

    /**
     * The table name for this class
     */
    const TABLE_NAME = 'mediastore';

    /**
     * The related Propel class for this table
     */
    const OM_CLASS = '\\Mediastore';

    /**
     * A class that can be returned by this tableMap
     */
    const CLASS_DEFAULT = 'propelclasses.Mediastore';

    /**
     * The total number of columns
     */
    const NUM_COLUMNS = 11;

    /**
     * The number of lazy-loaded columns
     */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /**
     * The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS)
     */
    const NUM_HYDRATE_COLUMNS = 11;

    /**
     * the column name for the id field
     */
    const COL_ID = 'mediastore.id';

    /**
     * the column name for the title field
     */
    const COL_TITLE = 'mediastore.title';

    /**
     * the column name for the description field
     */
    const COL_DESCRIPTION = 'mediastore.description';

    /**
     * the column name for the type field
     */
    const COL_TYPE = 'mediastore.type';

    /**
     * the column name for the filename field
     */
    const COL_FILENAME = 'mediastore.filename';

    /**
     * the column name for the ext field
     */
    const COL_EXT = 'mediastore.ext';

    /**
     * the column name for the uuid field
     */
    const COL_UUID = 'mediastore.uuid';

    /**
     * the column name for the mime field
     */
    const COL_MIME = 'mediastore.mime';

    /**
     * the column name for the size field
     */
    const COL_SIZE = 'mediastore.size';

    /**
     * the column name for the created field
     */
    const COL_CREATED = 'mediastore.created';

    /**
     * the column name for the modified field
     */
    const COL_MODIFIED = 'mediastore.modified';

    /**
     * The default string format for model objects of the related table
     */
    const DEFAULT_STRING_FORMAT = 'YAML';

    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. self::$fieldNames[self::TYPE_PHPNAME][0] = 'Id'
     */
    protected static $fieldNames = array (
        self::TYPE_PHPNAME       => array('Id', 'Title', 'Description', 'Type', 'Filename', 'Ext', 'Uuid', 'Mime', 'Size', 'Created', 'Modified', ),
        self::TYPE_CAMELNAME     => array('id', 'title', 'description', 'type', 'filename', 'ext', 'uuid', 'mime', 'size', 'created', 'modified', ),
        self::TYPE_COLNAME       => array(MediastoreTableMap::COL_ID, MediastoreTableMap::COL_TITLE, MediastoreTableMap::COL_DESCRIPTION, MediastoreTableMap::COL_TYPE, MediastoreTableMap::COL_FILENAME, MediastoreTableMap::COL_EXT, MediastoreTableMap::COL_UUID, MediastoreTableMap::COL_MIME, MediastoreTableMap::COL_SIZE, MediastoreTableMap::COL_CREATED, MediastoreTableMap::COL_MODIFIED, ),
        self::TYPE_FIELDNAME     => array('id', 'title', 'description', 'type', 'filename', 'ext', 'uuid', 'mime', 'size', 'created', 'modified', ),
        self::TYPE_NUM           => array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. self::$fieldKeys[self::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        self::TYPE_PHPNAME       => array('Id' => 0, 'Title' => 1, 'Description' => 2, 'Type' => 3, 'Filename' => 4, 'Ext' => 5, 'Uuid' => 6, 'Mime' => 7, 'Size' => 8, 'Created' => 9, 'Modified' => 10, ),
        self::TYPE_CAMELNAME     => array('id' => 0, 'title' => 1, 'description' => 2, 'type' => 3, 'filename' => 4, 'ext' => 5, 'uuid' => 6, 'mime' => 7, 'size' => 8, 'created' => 9, 'modified' => 10, ),
        self::TYPE_COLNAME       => array(MediastoreTableMap::COL_ID => 0, MediastoreTableMap::COL_TITLE => 1, MediastoreTableMap::COL_DESCRIPTION => 2, MediastoreTableMap::COL_TYPE => 3, MediastoreTableMap::COL_FILENAME => 4, MediastoreTableMap::COL_EXT => 5, MediastoreTableMap::COL_UUID => 6, MediastoreTableMap::COL_MIME => 7, MediastoreTableMap::COL_SIZE => 8, MediastoreTableMap::COL_CREATED => 9, MediastoreTableMap::COL_MODIFIED => 10, ),
        self::TYPE_FIELDNAME     => array('id' => 0, 'title' => 1, 'description' => 2, 'type' => 3, 'filename' => 4, 'ext' => 5, 'uuid' => 6, 'mime' => 7, 'size' => 8, 'created' => 9, 'modified' => 10, ),
        self::TYPE_NUM           => array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, )
    );

    /**
     * Initialize the table attributes and columns
     * Relations are not initialized by this method since they are lazy loaded
     *
     * @return void
     * @throws PropelException
     */
    public function initialize()
    {
        // attributes
        $this->setName('mediastore');
        $this->setPhpName('Mediastore');
        $this->setIdentifierQuoting(false);
        $this->setClassName('\\Mediastore');
        $this->setPackage('propelclasses');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('id', 'Id', 'INTEGER', true, null, null);
        $this->addColumn('title', 'Title', 'VARCHAR', true, 255, null);
        $this->addColumn('description', 'Description', 'VARCHAR', true, 255, null);
        $this->addColumn('type', 'Type', 'VARCHAR', true, 255, null);
        $this->addColumn('filename', 'Filename', 'VARCHAR', true, 255, null);
        $this->addColumn('ext', 'Ext', 'VARCHAR', false, 255, null);
        $this->addColumn('uuid', 'Uuid', 'VARCHAR', true, 255, null);
        $this->addColumn('mime', 'Mime', 'VARCHAR', false, 255, null);
        $this->addColumn('size', 'Size', 'INTEGER', false, 15, null);
        $this->addColumn('created', 'Created', 'INTEGER', true, null, null);
        $this->addColumn('modified', 'Modified', 'INTEGER', true, null, null);
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
    } // buildRelations()

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param array  $row       resultset row.
     * @param int    $offset    The 0-based offset for reading from the resultset row.
     * @param string $indexType One of the class type constants TableMap::TYPE_PHPNAME, TableMap::TYPE_CAMELNAME
     *                           TableMap::TYPE_COLNAME, TableMap::TYPE_FIELDNAME, TableMap::TYPE_NUM
     *
     * @return string The primary key hash of the row
     */
    public static function getPrimaryKeyHashFromRow($row, $offset = 0, $indexType = TableMap::TYPE_NUM)
    {
        // If the PK cannot be derived from the row, return NULL.
        if ($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Id', TableMap::TYPE_PHPNAME, $indexType)] === null) {
            return null;
        }

        return (string) $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Id', TableMap::TYPE_PHPNAME, $indexType)];
    }

    /**
     * Retrieves the primary key from the DB resultset row
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, an array of the primary key columns will be returned.
     *
     * @param array  $row       resultset row.
     * @param int    $offset    The 0-based offset for reading from the resultset row.
     * @param string $indexType One of the class type constants TableMap::TYPE_PHPNAME, TableMap::TYPE_CAMELNAME
     *                           TableMap::TYPE_COLNAME, TableMap::TYPE_FIELDNAME, TableMap::TYPE_NUM
     *
     * @return mixed The primary key of the row
     */
    public static function getPrimaryKeyFromRow($row, $offset = 0, $indexType = TableMap::TYPE_NUM)
    {
        return (int) $row[
            $indexType == TableMap::TYPE_NUM
                ? 0 + $offset
                : self::translateFieldName('Id', TableMap::TYPE_PHPNAME, $indexType)
        ];
    }

    /**
     * The class that the tableMap will make instances of.
     *
     * If $withPrefix is true, the returned path
     * uses a dot-path notation which is translated into a path
     * relative to a location on the PHP include_path.
     * (e.g. path.to.MyClass -> 'path/to/MyClass.php')
     *
     * @param boolean $withPrefix Whether or not to return the path with the class name
     * @return string path.to.ClassName
     */
    public static function getOMClass($withPrefix = true)
    {
        return $withPrefix ? MediastoreTableMap::CLASS_DEFAULT : MediastoreTableMap::OM_CLASS;
    }

    /**
     * Populates an object of the default type or an object that inherit from the default.
     *
     * @param array  $row       row returned by DataFetcher->fetch().
     * @param int    $offset    The 0-based offset for reading from the resultset row.
     * @param string $indexType The index type of $row. Mostly DataFetcher->getIndexType().
                                 One of the class type constants TableMap::TYPE_PHPNAME, TableMap::TYPE_CAMELNAME
     *                           TableMap::TYPE_COLNAME, TableMap::TYPE_FIELDNAME, TableMap::TYPE_NUM.
     *
     * @throws PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     * @return array           (Mediastore object, last column rank)
     */
    public static function populateObject($row, $offset = 0, $indexType = TableMap::TYPE_NUM)
    {
        $key = MediastoreTableMap::getPrimaryKeyHashFromRow($row, $offset, $indexType);
        if (null !== ($obj = MediastoreTableMap::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $offset, true); // rehydrate
            $col = $offset + MediastoreTableMap::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = MediastoreTableMap::OM_CLASS;
            /** @var Mediastore $obj */
            $obj = new $cls();
            $col = $obj->hydrate($row, $offset, false, $indexType);
            MediastoreTableMap::addInstanceToPool($obj, $key);
        }

        return array($obj, $col);
    }

    /**
     * The returned array will contain objects of the default type or
     * objects that inherit from the default.
     *
     * @param DataFetcherInterface $dataFetcher
     * @return array
     * @throws PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public static function populateObjects(DataFetcherInterface $dataFetcher)
    {
        $results = array();

        // set the class once to avoid overhead in the loop
        $cls = static::getOMClass(false);
        // populate the object(s)
        while ($row = $dataFetcher->fetch()) {
            $key = MediastoreTableMap::getPrimaryKeyHashFromRow($row, 0, $dataFetcher->getIndexType());
            if (null !== ($obj = MediastoreTableMap::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                /** @var Mediastore $obj */
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                MediastoreTableMap::addInstanceToPool($obj, $key);
            } // if key exists
        }

        return $results;
    }
    /**
     * Add all the columns needed to create a new object.
     *
     * Note: any columns that were marked with lazyLoad="true" in the
     * XML schema will not be added to the select list and only loaded
     * on demand.
     *
     * @param Criteria $criteria object containing the columns to add.
     * @param string   $alias    optional table alias
     * @throws PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public static function addSelectColumns(Criteria $criteria, $alias = null)
    {
        if (null === $alias) {
            $criteria->addSelectColumn(MediastoreTableMap::COL_ID);
            $criteria->addSelectColumn(MediastoreTableMap::COL_TITLE);
            $criteria->addSelectColumn(MediastoreTableMap::COL_DESCRIPTION);
            $criteria->addSelectColumn(MediastoreTableMap::COL_TYPE);
            $criteria->addSelectColumn(MediastoreTableMap::COL_FILENAME);
            $criteria->addSelectColumn(MediastoreTableMap::COL_EXT);
            $criteria->addSelectColumn(MediastoreTableMap::COL_UUID);
            $criteria->addSelectColumn(MediastoreTableMap::COL_MIME);
            $criteria->addSelectColumn(MediastoreTableMap::COL_SIZE);
            $criteria->addSelectColumn(MediastoreTableMap::COL_CREATED);
            $criteria->addSelectColumn(MediastoreTableMap::COL_MODIFIED);
        } else {
            $criteria->addSelectColumn($alias . '.id');
            $criteria->addSelectColumn($alias . '.title');
            $criteria->addSelectColumn($alias . '.description');
            $criteria->addSelectColumn($alias . '.type');
            $criteria->addSelectColumn($alias . '.filename');
            $criteria->addSelectColumn($alias . '.ext');
            $criteria->addSelectColumn($alias . '.uuid');
            $criteria->addSelectColumn($alias . '.mime');
            $criteria->addSelectColumn($alias . '.size');
            $criteria->addSelectColumn($alias . '.created');
            $criteria->addSelectColumn($alias . '.modified');
        }
    }

    /**
     * Returns the TableMap related to this object.
     * This method is not needed for general use but a specific application could have a need.
     * @return TableMap
     * @throws PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public static function getTableMap()
    {
        return Propel::getServiceContainer()->getDatabaseMap(MediastoreTableMap::DATABASE_NAME)->getTable(MediastoreTableMap::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this tableMap class.
     */
    public static function buildTableMap()
    {
        $dbMap = Propel::getServiceContainer()->getDatabaseMap(MediastoreTableMap::DATABASE_NAME);
        if (!$dbMap->hasTable(MediastoreTableMap::TABLE_NAME)) {
            $dbMap->addTableObject(new MediastoreTableMap());
        }
    }

    /**
     * Performs a DELETE on the database, given a Mediastore or Criteria object OR a primary key value.
     *
     * @param mixed               $values Criteria or Mediastore object or primary key or array of primary keys
     *              which is used to create the DELETE statement
     * @param  ConnectionInterface $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).  This includes CASCADE-related rows
     *                         if supported by native driver or if emulated using Propel.
     * @throws PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
     public static function doDelete($values, ConnectionInterface $con = null)
     {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(MediastoreTableMap::DATABASE_NAME);
        }

        if ($values instanceof Criteria) {
            // rename for clarity
            $criteria = $values;
        } elseif ($values instanceof \Mediastore) { // it's a model object
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(MediastoreTableMap::DATABASE_NAME);
            $criteria->add(MediastoreTableMap::COL_ID, (array) $values, Criteria::IN);
        }

        $query = MediastoreQuery::create()->mergeWith($criteria);

        if ($values instanceof Criteria) {
            MediastoreTableMap::clearInstancePool();
        } elseif (!is_object($values)) { // it's a primary key, or an array of pks
            foreach ((array) $values as $singleval) {
                MediastoreTableMap::removeInstanceFromPool($singleval);
            }
        }

        return $query->delete($con);
    }

    /**
     * Deletes all rows from the mediastore table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public static function doDeleteAll(ConnectionInterface $con = null)
    {
        return MediastoreQuery::create()->doDeleteAll($con);
    }

    /**
     * Performs an INSERT on the database, given a Mediastore or Criteria object.
     *
     * @param mixed               $criteria Criteria or Mediastore object containing data that is used to create the INSERT statement.
     * @param ConnectionInterface $con the ConnectionInterface connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public static function doInsert($criteria, ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(MediastoreTableMap::DATABASE_NAME);
        }

        if ($criteria instanceof Criteria) {
            $criteria = clone $criteria; // rename for clarity
        } else {
            $criteria = $criteria->buildCriteria(); // build Criteria from Mediastore object
        }

        if ($criteria->containsKey(MediastoreTableMap::COL_ID) && $criteria->keyContainsValue(MediastoreTableMap::COL_ID) ) {
            throw new PropelException('Cannot insert a value for auto-increment primary key ('.MediastoreTableMap::COL_ID.')');
        }


        // Set the correct dbName
        $query = MediastoreQuery::create()->mergeWith($criteria);

        // use transaction because $criteria could contain info
        // for more than one table (I guess, conceivably)
        return $con->transaction(function () use ($con, $query) {
            return $query->doInsert($con);
        });
    }

} // MediastoreTableMap
// This is the static code needed to register the TableMap for this table with the main Propel class.
//
MediastoreTableMap::buildTableMap();
