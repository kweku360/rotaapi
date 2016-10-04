<?php

namespace Map;

use \Projectaccount;
use \ProjectaccountQuery;
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
 * This class defines the structure of the 'projectaccount' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 */
class ProjectaccountTableMap extends TableMap
{
    use InstancePoolTrait;
    use TableMapTrait;

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'propelclasses.Map.ProjectaccountTableMap';

    /**
     * The default database name for this class
     */
    const DATABASE_NAME = 'default';

    /**
     * The table name for this class
     */
    const TABLE_NAME = 'projectaccount';

    /**
     * The related Propel class for this table
     */
    const OM_CLASS = '\\Projectaccount';

    /**
     * A class that can be returned by this tableMap
     */
    const CLASS_DEFAULT = 'propelclasses.Projectaccount';

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
    const COL_ID = 'projectaccount.id';

    /**
     * the column name for the uuid field
     */
    const COL_UUID = 'projectaccount.uuid';

    /**
     * the column name for the targetamt field
     */
    const COL_TARGETAMT = 'projectaccount.targetamt';

    /**
     * the column name for the Totaltargetamt field
     */
    const COL_TOTALTARGETAMT = 'projectaccount.Totaltargetamt';

    /**
     * the column name for the amtoffsite field
     */
    const COL_AMTOFFSITE = 'projectaccount.amtoffsite';

    /**
     * the column name for the amtraised field
     */
    const COL_AMTRAISED = 'projectaccount.amtraised';

    /**
     * the column name for the donorcount field
     */
    const COL_DONORCOUNT = 'projectaccount.donorcount';

    /**
     * the column name for the projectuuid field
     */
    const COL_PROJECTUUID = 'projectaccount.projectuuid';

    /**
     * the column name for the clubuuid field
     */
    const COL_CLUBUUID = 'projectaccount.clubuuid';

    /**
     * the column name for the created field
     */
    const COL_CREATED = 'projectaccount.created';

    /**
     * the column name for the modified field
     */
    const COL_MODIFIED = 'projectaccount.modified';

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
        self::TYPE_PHPNAME       => array('Id', 'Uuid', 'Targetamt', 'TotalTargetamt', 'Amtoffsite', 'Amtraised', 'Donorcount', 'ProjectUuid', 'Clubuuid', 'Created', 'Modified', ),
        self::TYPE_CAMELNAME     => array('id', 'uuid', 'targetamt', 'totalTargetamt', 'amtoffsite', 'amtraised', 'donorcount', 'projectUuid', 'clubuuid', 'created', 'modified', ),
        self::TYPE_COLNAME       => array(ProjectaccountTableMap::COL_ID, ProjectaccountTableMap::COL_UUID, ProjectaccountTableMap::COL_TARGETAMT, ProjectaccountTableMap::COL_TOTALTARGETAMT, ProjectaccountTableMap::COL_AMTOFFSITE, ProjectaccountTableMap::COL_AMTRAISED, ProjectaccountTableMap::COL_DONORCOUNT, ProjectaccountTableMap::COL_PROJECTUUID, ProjectaccountTableMap::COL_CLUBUUID, ProjectaccountTableMap::COL_CREATED, ProjectaccountTableMap::COL_MODIFIED, ),
        self::TYPE_FIELDNAME     => array('id', 'uuid', 'targetamt', 'Totaltargetamt', 'amtoffsite', 'amtraised', 'donorcount', 'projectuuid', 'clubuuid', 'created', 'modified', ),
        self::TYPE_NUM           => array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. self::$fieldKeys[self::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        self::TYPE_PHPNAME       => array('Id' => 0, 'Uuid' => 1, 'Targetamt' => 2, 'TotalTargetamt' => 3, 'Amtoffsite' => 4, 'Amtraised' => 5, 'Donorcount' => 6, 'ProjectUuid' => 7, 'Clubuuid' => 8, 'Created' => 9, 'Modified' => 10, ),
        self::TYPE_CAMELNAME     => array('id' => 0, 'uuid' => 1, 'targetamt' => 2, 'totalTargetamt' => 3, 'amtoffsite' => 4, 'amtraised' => 5, 'donorcount' => 6, 'projectUuid' => 7, 'clubuuid' => 8, 'created' => 9, 'modified' => 10, ),
        self::TYPE_COLNAME       => array(ProjectaccountTableMap::COL_ID => 0, ProjectaccountTableMap::COL_UUID => 1, ProjectaccountTableMap::COL_TARGETAMT => 2, ProjectaccountTableMap::COL_TOTALTARGETAMT => 3, ProjectaccountTableMap::COL_AMTOFFSITE => 4, ProjectaccountTableMap::COL_AMTRAISED => 5, ProjectaccountTableMap::COL_DONORCOUNT => 6, ProjectaccountTableMap::COL_PROJECTUUID => 7, ProjectaccountTableMap::COL_CLUBUUID => 8, ProjectaccountTableMap::COL_CREATED => 9, ProjectaccountTableMap::COL_MODIFIED => 10, ),
        self::TYPE_FIELDNAME     => array('id' => 0, 'uuid' => 1, 'targetamt' => 2, 'Totaltargetamt' => 3, 'amtoffsite' => 4, 'amtraised' => 5, 'donorcount' => 6, 'projectuuid' => 7, 'clubuuid' => 8, 'created' => 9, 'modified' => 10, ),
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
        $this->setName('projectaccount');
        $this->setPhpName('Projectaccount');
        $this->setIdentifierQuoting(false);
        $this->setClassName('\\Projectaccount');
        $this->setPackage('propelclasses');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('id', 'Id', 'INTEGER', true, null, null);
        $this->addColumn('uuid', 'Uuid', 'VARCHAR', true, 255, null);
        $this->addColumn('targetamt', 'Targetamt', 'INTEGER', true, null, null);
        $this->addColumn('Totaltargetamt', 'TotalTargetamt', 'INTEGER', true, null, null);
        $this->addColumn('amtoffsite', 'Amtoffsite', 'INTEGER', true, null, null);
        $this->addColumn('amtraised', 'Amtraised', 'INTEGER', true, null, null);
        $this->addColumn('donorcount', 'Donorcount', 'INTEGER', true, null, null);
        $this->addColumn('projectuuid', 'ProjectUuid', 'VARCHAR', true, 255, null);
        $this->addColumn('clubuuid', 'Clubuuid', 'VARCHAR', true, 255, null);
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
        return $withPrefix ? ProjectaccountTableMap::CLASS_DEFAULT : ProjectaccountTableMap::OM_CLASS;
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
     * @return array           (Projectaccount object, last column rank)
     */
    public static function populateObject($row, $offset = 0, $indexType = TableMap::TYPE_NUM)
    {
        $key = ProjectaccountTableMap::getPrimaryKeyHashFromRow($row, $offset, $indexType);
        if (null !== ($obj = ProjectaccountTableMap::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $offset, true); // rehydrate
            $col = $offset + ProjectaccountTableMap::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = ProjectaccountTableMap::OM_CLASS;
            /** @var Projectaccount $obj */
            $obj = new $cls();
            $col = $obj->hydrate($row, $offset, false, $indexType);
            ProjectaccountTableMap::addInstanceToPool($obj, $key);
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
            $key = ProjectaccountTableMap::getPrimaryKeyHashFromRow($row, 0, $dataFetcher->getIndexType());
            if (null !== ($obj = ProjectaccountTableMap::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                /** @var Projectaccount $obj */
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                ProjectaccountTableMap::addInstanceToPool($obj, $key);
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
            $criteria->addSelectColumn(ProjectaccountTableMap::COL_ID);
            $criteria->addSelectColumn(ProjectaccountTableMap::COL_UUID);
            $criteria->addSelectColumn(ProjectaccountTableMap::COL_TARGETAMT);
            $criteria->addSelectColumn(ProjectaccountTableMap::COL_TOTALTARGETAMT);
            $criteria->addSelectColumn(ProjectaccountTableMap::COL_AMTOFFSITE);
            $criteria->addSelectColumn(ProjectaccountTableMap::COL_AMTRAISED);
            $criteria->addSelectColumn(ProjectaccountTableMap::COL_DONORCOUNT);
            $criteria->addSelectColumn(ProjectaccountTableMap::COL_PROJECTUUID);
            $criteria->addSelectColumn(ProjectaccountTableMap::COL_CLUBUUID);
            $criteria->addSelectColumn(ProjectaccountTableMap::COL_CREATED);
            $criteria->addSelectColumn(ProjectaccountTableMap::COL_MODIFIED);
        } else {
            $criteria->addSelectColumn($alias . '.id');
            $criteria->addSelectColumn($alias . '.uuid');
            $criteria->addSelectColumn($alias . '.targetamt');
            $criteria->addSelectColumn($alias . '.Totaltargetamt');
            $criteria->addSelectColumn($alias . '.amtoffsite');
            $criteria->addSelectColumn($alias . '.amtraised');
            $criteria->addSelectColumn($alias . '.donorcount');
            $criteria->addSelectColumn($alias . '.projectuuid');
            $criteria->addSelectColumn($alias . '.clubuuid');
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
        return Propel::getServiceContainer()->getDatabaseMap(ProjectaccountTableMap::DATABASE_NAME)->getTable(ProjectaccountTableMap::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this tableMap class.
     */
    public static function buildTableMap()
    {
        $dbMap = Propel::getServiceContainer()->getDatabaseMap(ProjectaccountTableMap::DATABASE_NAME);
        if (!$dbMap->hasTable(ProjectaccountTableMap::TABLE_NAME)) {
            $dbMap->addTableObject(new ProjectaccountTableMap());
        }
    }

    /**
     * Performs a DELETE on the database, given a Projectaccount or Criteria object OR a primary key value.
     *
     * @param mixed               $values Criteria or Projectaccount object or primary key or array of primary keys
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
            $con = Propel::getServiceContainer()->getWriteConnection(ProjectaccountTableMap::DATABASE_NAME);
        }

        if ($values instanceof Criteria) {
            // rename for clarity
            $criteria = $values;
        } elseif ($values instanceof \Projectaccount) { // it's a model object
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(ProjectaccountTableMap::DATABASE_NAME);
            $criteria->add(ProjectaccountTableMap::COL_ID, (array) $values, Criteria::IN);
        }

        $query = ProjectaccountQuery::create()->mergeWith($criteria);

        if ($values instanceof Criteria) {
            ProjectaccountTableMap::clearInstancePool();
        } elseif (!is_object($values)) { // it's a primary key, or an array of pks
            foreach ((array) $values as $singleval) {
                ProjectaccountTableMap::removeInstanceFromPool($singleval);
            }
        }

        return $query->delete($con);
    }

    /**
     * Deletes all rows from the projectaccount table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public static function doDeleteAll(ConnectionInterface $con = null)
    {
        return ProjectaccountQuery::create()->doDeleteAll($con);
    }

    /**
     * Performs an INSERT on the database, given a Projectaccount or Criteria object.
     *
     * @param mixed               $criteria Criteria or Projectaccount object containing data that is used to create the INSERT statement.
     * @param ConnectionInterface $con the ConnectionInterface connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public static function doInsert($criteria, ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(ProjectaccountTableMap::DATABASE_NAME);
        }

        if ($criteria instanceof Criteria) {
            $criteria = clone $criteria; // rename for clarity
        } else {
            $criteria = $criteria->buildCriteria(); // build Criteria from Projectaccount object
        }

        if ($criteria->containsKey(ProjectaccountTableMap::COL_ID) && $criteria->keyContainsValue(ProjectaccountTableMap::COL_ID) ) {
            throw new PropelException('Cannot insert a value for auto-increment primary key ('.ProjectaccountTableMap::COL_ID.')');
        }


        // Set the correct dbName
        $query = ProjectaccountQuery::create()->mergeWith($criteria);

        // use transaction because $criteria could contain info
        // for more than one table (I guess, conceivably)
        return $con->transaction(function () use ($con, $query) {
            return $query->doInsert($con);
        });
    }

} // ProjectaccountTableMap
// This is the static code needed to register the TableMap for this table with the main Propel class.
//
ProjectaccountTableMap::buildTableMap();
