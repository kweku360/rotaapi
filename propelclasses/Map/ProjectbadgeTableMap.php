<?php

namespace Map;

use \Projectbadge;
use \ProjectbadgeQuery;
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
 * This class defines the structure of the 'projectbadge' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 */
class ProjectbadgeTableMap extends TableMap
{
    use InstancePoolTrait;
    use TableMapTrait;

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'propelclasses.Map.ProjectbadgeTableMap';

    /**
     * The default database name for this class
     */
    const DATABASE_NAME = 'default';

    /**
     * The table name for this class
     */
    const TABLE_NAME = 'projectbadge';

    /**
     * The related Propel class for this table
     */
    const OM_CLASS = '\\Projectbadge';

    /**
     * A class that can be returned by this tableMap
     */
    const CLASS_DEFAULT = 'propelclasses.Projectbadge';

    /**
     * The total number of columns
     */
    const NUM_COLUMNS = 8;

    /**
     * The number of lazy-loaded columns
     */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /**
     * The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS)
     */
    const NUM_HYDRATE_COLUMNS = 8;

    /**
     * the column name for the id field
     */
    const COL_ID = 'projectbadge.id';

    /**
     * the column name for the uuid field
     */
    const COL_UUID = 'projectbadge.uuid';

    /**
     * the column name for the badgeid field
     */
    const COL_BADGEID = 'projectbadge.badgeid';

    /**
     * the column name for the badgename field
     */
    const COL_BADGENAME = 'projectbadge.badgename';

    /**
     * the column name for the notes field
     */
    const COL_NOTES = 'projectbadge.notes';

    /**
     * the column name for the expiry field
     */
    const COL_EXPIRY = 'projectbadge.expiry';

    /**
     * the column name for the projectuuid field
     */
    const COL_PROJECTUUID = 'projectbadge.projectuuid';

    /**
     * the column name for the created field
     */
    const COL_CREATED = 'projectbadge.created';

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
        self::TYPE_PHPNAME       => array('Id', 'Uuid', 'Badgeid', 'Badgename', 'Notes', 'Expiry', 'ProjectUuid', 'Created', ),
        self::TYPE_CAMELNAME     => array('id', 'uuid', 'badgeid', 'badgename', 'notes', 'expiry', 'projectUuid', 'created', ),
        self::TYPE_COLNAME       => array(ProjectbadgeTableMap::COL_ID, ProjectbadgeTableMap::COL_UUID, ProjectbadgeTableMap::COL_BADGEID, ProjectbadgeTableMap::COL_BADGENAME, ProjectbadgeTableMap::COL_NOTES, ProjectbadgeTableMap::COL_EXPIRY, ProjectbadgeTableMap::COL_PROJECTUUID, ProjectbadgeTableMap::COL_CREATED, ),
        self::TYPE_FIELDNAME     => array('id', 'uuid', 'badgeid', 'badgename', 'notes', 'expiry', 'projectuuid', 'created', ),
        self::TYPE_NUM           => array(0, 1, 2, 3, 4, 5, 6, 7, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. self::$fieldKeys[self::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        self::TYPE_PHPNAME       => array('Id' => 0, 'Uuid' => 1, 'Badgeid' => 2, 'Badgename' => 3, 'Notes' => 4, 'Expiry' => 5, 'ProjectUuid' => 6, 'Created' => 7, ),
        self::TYPE_CAMELNAME     => array('id' => 0, 'uuid' => 1, 'badgeid' => 2, 'badgename' => 3, 'notes' => 4, 'expiry' => 5, 'projectUuid' => 6, 'created' => 7, ),
        self::TYPE_COLNAME       => array(ProjectbadgeTableMap::COL_ID => 0, ProjectbadgeTableMap::COL_UUID => 1, ProjectbadgeTableMap::COL_BADGEID => 2, ProjectbadgeTableMap::COL_BADGENAME => 3, ProjectbadgeTableMap::COL_NOTES => 4, ProjectbadgeTableMap::COL_EXPIRY => 5, ProjectbadgeTableMap::COL_PROJECTUUID => 6, ProjectbadgeTableMap::COL_CREATED => 7, ),
        self::TYPE_FIELDNAME     => array('id' => 0, 'uuid' => 1, 'badgeid' => 2, 'badgename' => 3, 'notes' => 4, 'expiry' => 5, 'projectuuid' => 6, 'created' => 7, ),
        self::TYPE_NUM           => array(0, 1, 2, 3, 4, 5, 6, 7, )
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
        $this->setName('projectbadge');
        $this->setPhpName('Projectbadge');
        $this->setIdentifierQuoting(false);
        $this->setClassName('\\Projectbadge');
        $this->setPackage('propelclasses');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('id', 'Id', 'INTEGER', true, null, null);
        $this->addColumn('uuid', 'Uuid', 'VARCHAR', true, 255, null);
        $this->addColumn('badgeid', 'Badgeid', 'INTEGER', false, null, null);
        $this->addColumn('badgename', 'Badgename', 'VARCHAR', false, 255, null);
        $this->addColumn('notes', 'Notes', 'VARCHAR', false, 255, null);
        $this->addColumn('expiry', 'Expiry', 'INTEGER', false, null, null);
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
        return $withPrefix ? ProjectbadgeTableMap::CLASS_DEFAULT : ProjectbadgeTableMap::OM_CLASS;
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
     * @return array           (Projectbadge object, last column rank)
     */
    public static function populateObject($row, $offset = 0, $indexType = TableMap::TYPE_NUM)
    {
        $key = ProjectbadgeTableMap::getPrimaryKeyHashFromRow($row, $offset, $indexType);
        if (null !== ($obj = ProjectbadgeTableMap::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $offset, true); // rehydrate
            $col = $offset + ProjectbadgeTableMap::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = ProjectbadgeTableMap::OM_CLASS;
            /** @var Projectbadge $obj */
            $obj = new $cls();
            $col = $obj->hydrate($row, $offset, false, $indexType);
            ProjectbadgeTableMap::addInstanceToPool($obj, $key);
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
            $key = ProjectbadgeTableMap::getPrimaryKeyHashFromRow($row, 0, $dataFetcher->getIndexType());
            if (null !== ($obj = ProjectbadgeTableMap::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                /** @var Projectbadge $obj */
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                ProjectbadgeTableMap::addInstanceToPool($obj, $key);
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
            $criteria->addSelectColumn(ProjectbadgeTableMap::COL_ID);
            $criteria->addSelectColumn(ProjectbadgeTableMap::COL_UUID);
            $criteria->addSelectColumn(ProjectbadgeTableMap::COL_BADGEID);
            $criteria->addSelectColumn(ProjectbadgeTableMap::COL_BADGENAME);
            $criteria->addSelectColumn(ProjectbadgeTableMap::COL_NOTES);
            $criteria->addSelectColumn(ProjectbadgeTableMap::COL_EXPIRY);
            $criteria->addSelectColumn(ProjectbadgeTableMap::COL_PROJECTUUID);
            $criteria->addSelectColumn(ProjectbadgeTableMap::COL_CREATED);
        } else {
            $criteria->addSelectColumn($alias . '.id');
            $criteria->addSelectColumn($alias . '.uuid');
            $criteria->addSelectColumn($alias . '.badgeid');
            $criteria->addSelectColumn($alias . '.badgename');
            $criteria->addSelectColumn($alias . '.notes');
            $criteria->addSelectColumn($alias . '.expiry');
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
        return Propel::getServiceContainer()->getDatabaseMap(ProjectbadgeTableMap::DATABASE_NAME)->getTable(ProjectbadgeTableMap::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this tableMap class.
     */
    public static function buildTableMap()
    {
        $dbMap = Propel::getServiceContainer()->getDatabaseMap(ProjectbadgeTableMap::DATABASE_NAME);
        if (!$dbMap->hasTable(ProjectbadgeTableMap::TABLE_NAME)) {
            $dbMap->addTableObject(new ProjectbadgeTableMap());
        }
    }

    /**
     * Performs a DELETE on the database, given a Projectbadge or Criteria object OR a primary key value.
     *
     * @param mixed               $values Criteria or Projectbadge object or primary key or array of primary keys
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
            $con = Propel::getServiceContainer()->getWriteConnection(ProjectbadgeTableMap::DATABASE_NAME);
        }

        if ($values instanceof Criteria) {
            // rename for clarity
            $criteria = $values;
        } elseif ($values instanceof \Projectbadge) { // it's a model object
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(ProjectbadgeTableMap::DATABASE_NAME);
            $criteria->add(ProjectbadgeTableMap::COL_ID, (array) $values, Criteria::IN);
        }

        $query = ProjectbadgeQuery::create()->mergeWith($criteria);

        if ($values instanceof Criteria) {
            ProjectbadgeTableMap::clearInstancePool();
        } elseif (!is_object($values)) { // it's a primary key, or an array of pks
            foreach ((array) $values as $singleval) {
                ProjectbadgeTableMap::removeInstanceFromPool($singleval);
            }
        }

        return $query->delete($con);
    }

    /**
     * Deletes all rows from the projectbadge table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public static function doDeleteAll(ConnectionInterface $con = null)
    {
        return ProjectbadgeQuery::create()->doDeleteAll($con);
    }

    /**
     * Performs an INSERT on the database, given a Projectbadge or Criteria object.
     *
     * @param mixed               $criteria Criteria or Projectbadge object containing data that is used to create the INSERT statement.
     * @param ConnectionInterface $con the ConnectionInterface connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public static function doInsert($criteria, ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(ProjectbadgeTableMap::DATABASE_NAME);
        }

        if ($criteria instanceof Criteria) {
            $criteria = clone $criteria; // rename for clarity
        } else {
            $criteria = $criteria->buildCriteria(); // build Criteria from Projectbadge object
        }

        if ($criteria->containsKey(ProjectbadgeTableMap::COL_ID) && $criteria->keyContainsValue(ProjectbadgeTableMap::COL_ID) ) {
            throw new PropelException('Cannot insert a value for auto-increment primary key ('.ProjectbadgeTableMap::COL_ID.')');
        }


        // Set the correct dbName
        $query = ProjectbadgeQuery::create()->mergeWith($criteria);

        // use transaction because $criteria could contain info
        // for more than one table (I guess, conceivably)
        return $con->transaction(function () use ($con, $query) {
            return $query->doInsert($con);
        });
    }

} // ProjectbadgeTableMap
// This is the static code needed to register the TableMap for this table with the main Propel class.
//
ProjectbadgeTableMap::buildTableMap();
