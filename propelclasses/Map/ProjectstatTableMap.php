<?php

namespace Map;

use \Projectstat;
use \ProjectstatQuery;
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
 * This class defines the structure of the 'projectstat' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 */
class ProjectstatTableMap extends TableMap
{
    use InstancePoolTrait;
    use TableMapTrait;

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'propelclasses.Map.ProjectstatTableMap';

    /**
     * The default database name for this class
     */
    const DATABASE_NAME = 'default';

    /**
     * The table name for this class
     */
    const TABLE_NAME = 'projectstat';

    /**
     * The related Propel class for this table
     */
    const OM_CLASS = '\\Projectstat';

    /**
     * A class that can be returned by this tableMap
     */
    const CLASS_DEFAULT = 'propelclasses.Projectstat';

    /**
     * The total number of columns
     */
    const NUM_COLUMNS = 12;

    /**
     * The number of lazy-loaded columns
     */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /**
     * The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS)
     */
    const NUM_HYDRATE_COLUMNS = 12;

    /**
     * the column name for the id field
     */
    const COL_ID = 'projectstat.id';

    /**
     * the column name for the uuid field
     */
    const COL_UUID = 'projectstat.uuid';

    /**
     * the column name for the donorcount field
     */
    const COL_DONORCOUNT = 'projectstat.donorcount';

    /**
     * the column name for the views field
     */
    const COL_VIEWS = 'projectstat.views';

    /**
     * the column name for the likes field
     */
    const COL_LIKES = 'projectstat.likes';

    /**
     * the column name for the share field
     */
    const COL_SHARE = 'projectstat.share';

    /**
     * the column name for the updatecount field
     */
    const COL_UPDATECOUNT = 'projectstat.updatecount';

    /**
     * the column name for the commentscount field
     */
    const COL_COMMENTSCOUNT = 'projectstat.commentscount';

    /**
     * the column name for the fundedpercent field
     */
    const COL_FUNDEDPERCENT = 'projectstat.fundedpercent';

    /**
     * the column name for the enddate field
     */
    const COL_ENDDATE = 'projectstat.enddate';

    /**
     * the column name for the projectuuid field
     */
    const COL_PROJECTUUID = 'projectstat.projectuuid';

    /**
     * the column name for the created field
     */
    const COL_CREATED = 'projectstat.created';

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
        self::TYPE_PHPNAME       => array('Id', 'Uuid', 'Donorcount', 'views', 'Likes', 'Shares', 'Updatecount', 'Commentscount', 'Fundedpercent', 'enddate', 'ProjectUuid', 'Created', ),
        self::TYPE_CAMELNAME     => array('id', 'uuid', 'donorcount', 'views', 'likes', 'shares', 'updatecount', 'commentscount', 'fundedpercent', 'enddate', 'projectUuid', 'created', ),
        self::TYPE_COLNAME       => array(ProjectstatTableMap::COL_ID, ProjectstatTableMap::COL_UUID, ProjectstatTableMap::COL_DONORCOUNT, ProjectstatTableMap::COL_VIEWS, ProjectstatTableMap::COL_LIKES, ProjectstatTableMap::COL_SHARE, ProjectstatTableMap::COL_UPDATECOUNT, ProjectstatTableMap::COL_COMMENTSCOUNT, ProjectstatTableMap::COL_FUNDEDPERCENT, ProjectstatTableMap::COL_ENDDATE, ProjectstatTableMap::COL_PROJECTUUID, ProjectstatTableMap::COL_CREATED, ),
        self::TYPE_FIELDNAME     => array('id', 'uuid', 'donorcount', 'views', 'likes', 'share', 'updatecount', 'commentscount', 'fundedpercent', 'enddate', 'projectuuid', 'created', ),
        self::TYPE_NUM           => array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. self::$fieldKeys[self::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        self::TYPE_PHPNAME       => array('Id' => 0, 'Uuid' => 1, 'Donorcount' => 2, 'views' => 3, 'Likes' => 4, 'Shares' => 5, 'Updatecount' => 6, 'Commentscount' => 7, 'Fundedpercent' => 8, 'enddate' => 9, 'ProjectUuid' => 10, 'Created' => 11, ),
        self::TYPE_CAMELNAME     => array('id' => 0, 'uuid' => 1, 'donorcount' => 2, 'views' => 3, 'likes' => 4, 'shares' => 5, 'updatecount' => 6, 'commentscount' => 7, 'fundedpercent' => 8, 'enddate' => 9, 'projectUuid' => 10, 'created' => 11, ),
        self::TYPE_COLNAME       => array(ProjectstatTableMap::COL_ID => 0, ProjectstatTableMap::COL_UUID => 1, ProjectstatTableMap::COL_DONORCOUNT => 2, ProjectstatTableMap::COL_VIEWS => 3, ProjectstatTableMap::COL_LIKES => 4, ProjectstatTableMap::COL_SHARE => 5, ProjectstatTableMap::COL_UPDATECOUNT => 6, ProjectstatTableMap::COL_COMMENTSCOUNT => 7, ProjectstatTableMap::COL_FUNDEDPERCENT => 8, ProjectstatTableMap::COL_ENDDATE => 9, ProjectstatTableMap::COL_PROJECTUUID => 10, ProjectstatTableMap::COL_CREATED => 11, ),
        self::TYPE_FIELDNAME     => array('id' => 0, 'uuid' => 1, 'donorcount' => 2, 'views' => 3, 'likes' => 4, 'share' => 5, 'updatecount' => 6, 'commentscount' => 7, 'fundedpercent' => 8, 'enddate' => 9, 'projectuuid' => 10, 'created' => 11, ),
        self::TYPE_NUM           => array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, )
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
        $this->setName('projectstat');
        $this->setPhpName('Projectstat');
        $this->setIdentifierQuoting(false);
        $this->setClassName('\\Projectstat');
        $this->setPackage('propelclasses');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('id', 'Id', 'INTEGER', true, null, null);
        $this->addColumn('uuid', 'Uuid', 'VARCHAR', true, 255, null);
        $this->addColumn('donorcount', 'Donorcount', 'INTEGER', false, null, null);
        $this->addColumn('views', 'views', 'INTEGER', false, null, null);
        $this->addColumn('likes', 'Likes', 'INTEGER', false, null, null);
        $this->addColumn('share', 'Shares', 'INTEGER', false, null, null);
        $this->addColumn('updatecount', 'Updatecount', 'INTEGER', false, null, null);
        $this->addColumn('commentscount', 'Commentscount', 'INTEGER', false, null, null);
        $this->addColumn('fundedpercent', 'Fundedpercent', 'INTEGER', false, null, null);
        $this->addColumn('enddate', 'enddate', 'VARCHAR', false, 255, null);
        $this->addColumn('projectuuid', 'ProjectUuid', 'VARCHAR', true, 255, null);
        $this->addColumn('created', 'Created', 'INTEGER', true, null, null);
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
        return $withPrefix ? ProjectstatTableMap::CLASS_DEFAULT : ProjectstatTableMap::OM_CLASS;
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
     * @return array           (Projectstat object, last column rank)
     */
    public static function populateObject($row, $offset = 0, $indexType = TableMap::TYPE_NUM)
    {
        $key = ProjectstatTableMap::getPrimaryKeyHashFromRow($row, $offset, $indexType);
        if (null !== ($obj = ProjectstatTableMap::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $offset, true); // rehydrate
            $col = $offset + ProjectstatTableMap::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = ProjectstatTableMap::OM_CLASS;
            /** @var Projectstat $obj */
            $obj = new $cls();
            $col = $obj->hydrate($row, $offset, false, $indexType);
            ProjectstatTableMap::addInstanceToPool($obj, $key);
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
            $key = ProjectstatTableMap::getPrimaryKeyHashFromRow($row, 0, $dataFetcher->getIndexType());
            if (null !== ($obj = ProjectstatTableMap::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                /** @var Projectstat $obj */
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                ProjectstatTableMap::addInstanceToPool($obj, $key);
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
            $criteria->addSelectColumn(ProjectstatTableMap::COL_ID);
            $criteria->addSelectColumn(ProjectstatTableMap::COL_UUID);
            $criteria->addSelectColumn(ProjectstatTableMap::COL_DONORCOUNT);
            $criteria->addSelectColumn(ProjectstatTableMap::COL_VIEWS);
            $criteria->addSelectColumn(ProjectstatTableMap::COL_LIKES);
            $criteria->addSelectColumn(ProjectstatTableMap::COL_SHARE);
            $criteria->addSelectColumn(ProjectstatTableMap::COL_UPDATECOUNT);
            $criteria->addSelectColumn(ProjectstatTableMap::COL_COMMENTSCOUNT);
            $criteria->addSelectColumn(ProjectstatTableMap::COL_FUNDEDPERCENT);
            $criteria->addSelectColumn(ProjectstatTableMap::COL_ENDDATE);
            $criteria->addSelectColumn(ProjectstatTableMap::COL_PROJECTUUID);
            $criteria->addSelectColumn(ProjectstatTableMap::COL_CREATED);
        } else {
            $criteria->addSelectColumn($alias . '.id');
            $criteria->addSelectColumn($alias . '.uuid');
            $criteria->addSelectColumn($alias . '.donorcount');
            $criteria->addSelectColumn($alias . '.views');
            $criteria->addSelectColumn($alias . '.likes');
            $criteria->addSelectColumn($alias . '.share');
            $criteria->addSelectColumn($alias . '.updatecount');
            $criteria->addSelectColumn($alias . '.commentscount');
            $criteria->addSelectColumn($alias . '.fundedpercent');
            $criteria->addSelectColumn($alias . '.enddate');
            $criteria->addSelectColumn($alias . '.projectuuid');
            $criteria->addSelectColumn($alias . '.created');
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
        return Propel::getServiceContainer()->getDatabaseMap(ProjectstatTableMap::DATABASE_NAME)->getTable(ProjectstatTableMap::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this tableMap class.
     */
    public static function buildTableMap()
    {
        $dbMap = Propel::getServiceContainer()->getDatabaseMap(ProjectstatTableMap::DATABASE_NAME);
        if (!$dbMap->hasTable(ProjectstatTableMap::TABLE_NAME)) {
            $dbMap->addTableObject(new ProjectstatTableMap());
        }
    }

    /**
     * Performs a DELETE on the database, given a Projectstat or Criteria object OR a primary key value.
     *
     * @param mixed               $values Criteria or Projectstat object or primary key or array of primary keys
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
            $con = Propel::getServiceContainer()->getWriteConnection(ProjectstatTableMap::DATABASE_NAME);
        }

        if ($values instanceof Criteria) {
            // rename for clarity
            $criteria = $values;
        } elseif ($values instanceof \Projectstat) { // it's a model object
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(ProjectstatTableMap::DATABASE_NAME);
            $criteria->add(ProjectstatTableMap::COL_ID, (array) $values, Criteria::IN);
        }

        $query = ProjectstatQuery::create()->mergeWith($criteria);

        if ($values instanceof Criteria) {
            ProjectstatTableMap::clearInstancePool();
        } elseif (!is_object($values)) { // it's a primary key, or an array of pks
            foreach ((array) $values as $singleval) {
                ProjectstatTableMap::removeInstanceFromPool($singleval);
            }
        }

        return $query->delete($con);
    }

    /**
     * Deletes all rows from the projectstat table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public static function doDeleteAll(ConnectionInterface $con = null)
    {
        return ProjectstatQuery::create()->doDeleteAll($con);
    }

    /**
     * Performs an INSERT on the database, given a Projectstat or Criteria object.
     *
     * @param mixed               $criteria Criteria or Projectstat object containing data that is used to create the INSERT statement.
     * @param ConnectionInterface $con the ConnectionInterface connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public static function doInsert($criteria, ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(ProjectstatTableMap::DATABASE_NAME);
        }

        if ($criteria instanceof Criteria) {
            $criteria = clone $criteria; // rename for clarity
        } else {
            $criteria = $criteria->buildCriteria(); // build Criteria from Projectstat object
        }

        if ($criteria->containsKey(ProjectstatTableMap::COL_ID) && $criteria->keyContainsValue(ProjectstatTableMap::COL_ID) ) {
            throw new PropelException('Cannot insert a value for auto-increment primary key ('.ProjectstatTableMap::COL_ID.')');
        }


        // Set the correct dbName
        $query = ProjectstatQuery::create()->mergeWith($criteria);

        // use transaction because $criteria could contain info
        // for more than one table (I guess, conceivably)
        return $con->transaction(function () use ($con, $query) {
            return $query->doInsert($con);
        });
    }

} // ProjectstatTableMap
// This is the static code needed to register the TableMap for this table with the main Propel class.
//
ProjectstatTableMap::buildTableMap();
