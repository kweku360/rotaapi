<?php

namespace Map;

use \Project;
use \ProjectQuery;
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
 * This class defines the structure of the 'project' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 */
class ProjectTableMap extends TableMap
{
    use InstancePoolTrait;
    use TableMapTrait;

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'propelclasses.Map.ProjectTableMap';

    /**
     * The default database name for this class
     */
    const DATABASE_NAME = 'default';

    /**
     * The table name for this class
     */
    const TABLE_NAME = 'project';

    /**
     * The related Propel class for this table
     */
    const OM_CLASS = '\\Project';

    /**
     * A class that can be returned by this tableMap
     */
    const CLASS_DEFAULT = 'propelclasses.Project';

    /**
     * The total number of columns
     */
    const NUM_COLUMNS = 13;

    /**
     * The number of lazy-loaded columns
     */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /**
     * The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS)
     */
    const NUM_HYDRATE_COLUMNS = 13;

    /**
     * the column name for the id field
     */
    const COL_ID = 'project.id';

    /**
     * the column name for the uuid field
     */
    const COL_UUID = 'project.uuid';

    /**
     * the column name for the name field
     */
    const COL_NAME = 'project.name';

    /**
     * the column name for the urlcode field
     */
    const COL_URLCODE = 'project.urlcode';

    /**
     * the column name for the status field
     */
    const COL_STATUS = 'project.status';

    /**
     * the column name for the country field
     */
    const COL_COUNTRY = 'project.country';

    /**
     * the column name for the countrycode field
     */
    const COL_COUNTRYCODE = 'project.countrycode';

    /**
     * the column name for the city field
     */
    const COL_CITY = 'project.city';

    /**
     * the column name for the startdate field
     */
    const COL_STARTDATE = 'project.startdate';

    /**
     * the column name for the clubuuid field
     */
    const COL_CLUBUUID = 'project.clubuuid';

    /**
     * the column name for the enddate field
     */
    const COL_ENDDATE = 'project.enddate';

    /**
     * the column name for the created field
     */
    const COL_CREATED = 'project.created';

    /**
     * the column name for the modified field
     */
    const COL_MODIFIED = 'project.modified';

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
        self::TYPE_PHPNAME       => array('Id', 'Uuid', 'Name', 'urlcode', 'status', 'Country', 'Countrycode', 'City', 'Startdate', 'Clubuuid', 'enddate', 'Created', 'Modified', ),
        self::TYPE_CAMELNAME     => array('id', 'uuid', 'name', 'urlcode', 'status', 'country', 'countrycode', 'city', 'startdate', 'clubuuid', 'enddate', 'created', 'modified', ),
        self::TYPE_COLNAME       => array(ProjectTableMap::COL_ID, ProjectTableMap::COL_UUID, ProjectTableMap::COL_NAME, ProjectTableMap::COL_URLCODE, ProjectTableMap::COL_STATUS, ProjectTableMap::COL_COUNTRY, ProjectTableMap::COL_COUNTRYCODE, ProjectTableMap::COL_CITY, ProjectTableMap::COL_STARTDATE, ProjectTableMap::COL_CLUBUUID, ProjectTableMap::COL_ENDDATE, ProjectTableMap::COL_CREATED, ProjectTableMap::COL_MODIFIED, ),
        self::TYPE_FIELDNAME     => array('id', 'uuid', 'name', 'urlcode', 'status', 'country', 'countrycode', 'city', 'startdate', 'clubuuid', 'enddate', 'created', 'modified', ),
        self::TYPE_NUM           => array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. self::$fieldKeys[self::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        self::TYPE_PHPNAME       => array('Id' => 0, 'Uuid' => 1, 'Name' => 2, 'urlcode' => 3, 'status' => 4, 'Country' => 5, 'Countrycode' => 6, 'City' => 7, 'Startdate' => 8, 'Clubuuid' => 9, 'enddate' => 10, 'Created' => 11, 'Modified' => 12, ),
        self::TYPE_CAMELNAME     => array('id' => 0, 'uuid' => 1, 'name' => 2, 'urlcode' => 3, 'status' => 4, 'country' => 5, 'countrycode' => 6, 'city' => 7, 'startdate' => 8, 'clubuuid' => 9, 'enddate' => 10, 'created' => 11, 'modified' => 12, ),
        self::TYPE_COLNAME       => array(ProjectTableMap::COL_ID => 0, ProjectTableMap::COL_UUID => 1, ProjectTableMap::COL_NAME => 2, ProjectTableMap::COL_URLCODE => 3, ProjectTableMap::COL_STATUS => 4, ProjectTableMap::COL_COUNTRY => 5, ProjectTableMap::COL_COUNTRYCODE => 6, ProjectTableMap::COL_CITY => 7, ProjectTableMap::COL_STARTDATE => 8, ProjectTableMap::COL_CLUBUUID => 9, ProjectTableMap::COL_ENDDATE => 10, ProjectTableMap::COL_CREATED => 11, ProjectTableMap::COL_MODIFIED => 12, ),
        self::TYPE_FIELDNAME     => array('id' => 0, 'uuid' => 1, 'name' => 2, 'urlcode' => 3, 'status' => 4, 'country' => 5, 'countrycode' => 6, 'city' => 7, 'startdate' => 8, 'clubuuid' => 9, 'enddate' => 10, 'created' => 11, 'modified' => 12, ),
        self::TYPE_NUM           => array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, )
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
        $this->setName('project');
        $this->setPhpName('Project');
        $this->setIdentifierQuoting(false);
        $this->setClassName('\\Project');
        $this->setPackage('propelclasses');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('id', 'Id', 'INTEGER', true, null, null);
        $this->addColumn('uuid', 'Uuid', 'VARCHAR', true, 255, null);
        $this->addColumn('name', 'Name', 'VARCHAR', true, 255, null);
        $this->addColumn('urlcode', 'urlcode', 'VARCHAR', true, 255, null);
        $this->addColumn('status', 'status', 'VARCHAR', true, 255, null);
        $this->addColumn('country', 'Country', 'VARCHAR', true, 255, null);
        $this->addColumn('countrycode', 'Countrycode', 'VARCHAR', true, 3, null);
        $this->addColumn('city', 'City', 'VARCHAR', true, 255, null);
        $this->addColumn('startdate', 'Startdate', 'VARCHAR', true, 255, null);
        $this->addColumn('clubuuid', 'Clubuuid', 'VARCHAR', true, 255, null);
        $this->addColumn('enddate', 'enddate', 'VARCHAR', true, 255, null);
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
        return $withPrefix ? ProjectTableMap::CLASS_DEFAULT : ProjectTableMap::OM_CLASS;
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
     * @return array           (Project object, last column rank)
     */
    public static function populateObject($row, $offset = 0, $indexType = TableMap::TYPE_NUM)
    {
        $key = ProjectTableMap::getPrimaryKeyHashFromRow($row, $offset, $indexType);
        if (null !== ($obj = ProjectTableMap::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $offset, true); // rehydrate
            $col = $offset + ProjectTableMap::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = ProjectTableMap::OM_CLASS;
            /** @var Project $obj */
            $obj = new $cls();
            $col = $obj->hydrate($row, $offset, false, $indexType);
            ProjectTableMap::addInstanceToPool($obj, $key);
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
            $key = ProjectTableMap::getPrimaryKeyHashFromRow($row, 0, $dataFetcher->getIndexType());
            if (null !== ($obj = ProjectTableMap::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                /** @var Project $obj */
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                ProjectTableMap::addInstanceToPool($obj, $key);
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
            $criteria->addSelectColumn(ProjectTableMap::COL_ID);
            $criteria->addSelectColumn(ProjectTableMap::COL_UUID);
            $criteria->addSelectColumn(ProjectTableMap::COL_NAME);
            $criteria->addSelectColumn(ProjectTableMap::COL_URLCODE);
            $criteria->addSelectColumn(ProjectTableMap::COL_STATUS);
            $criteria->addSelectColumn(ProjectTableMap::COL_COUNTRY);
            $criteria->addSelectColumn(ProjectTableMap::COL_COUNTRYCODE);
            $criteria->addSelectColumn(ProjectTableMap::COL_CITY);
            $criteria->addSelectColumn(ProjectTableMap::COL_STARTDATE);
            $criteria->addSelectColumn(ProjectTableMap::COL_CLUBUUID);
            $criteria->addSelectColumn(ProjectTableMap::COL_ENDDATE);
            $criteria->addSelectColumn(ProjectTableMap::COL_CREATED);
            $criteria->addSelectColumn(ProjectTableMap::COL_MODIFIED);
        } else {
            $criteria->addSelectColumn($alias . '.id');
            $criteria->addSelectColumn($alias . '.uuid');
            $criteria->addSelectColumn($alias . '.name');
            $criteria->addSelectColumn($alias . '.urlcode');
            $criteria->addSelectColumn($alias . '.status');
            $criteria->addSelectColumn($alias . '.country');
            $criteria->addSelectColumn($alias . '.countrycode');
            $criteria->addSelectColumn($alias . '.city');
            $criteria->addSelectColumn($alias . '.startdate');
            $criteria->addSelectColumn($alias . '.clubuuid');
            $criteria->addSelectColumn($alias . '.enddate');
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
        return Propel::getServiceContainer()->getDatabaseMap(ProjectTableMap::DATABASE_NAME)->getTable(ProjectTableMap::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this tableMap class.
     */
    public static function buildTableMap()
    {
        $dbMap = Propel::getServiceContainer()->getDatabaseMap(ProjectTableMap::DATABASE_NAME);
        if (!$dbMap->hasTable(ProjectTableMap::TABLE_NAME)) {
            $dbMap->addTableObject(new ProjectTableMap());
        }
    }

    /**
     * Performs a DELETE on the database, given a Project or Criteria object OR a primary key value.
     *
     * @param mixed               $values Criteria or Project object or primary key or array of primary keys
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
            $con = Propel::getServiceContainer()->getWriteConnection(ProjectTableMap::DATABASE_NAME);
        }

        if ($values instanceof Criteria) {
            // rename for clarity
            $criteria = $values;
        } elseif ($values instanceof \Project) { // it's a model object
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(ProjectTableMap::DATABASE_NAME);
            $criteria->add(ProjectTableMap::COL_ID, (array) $values, Criteria::IN);
        }

        $query = ProjectQuery::create()->mergeWith($criteria);

        if ($values instanceof Criteria) {
            ProjectTableMap::clearInstancePool();
        } elseif (!is_object($values)) { // it's a primary key, or an array of pks
            foreach ((array) $values as $singleval) {
                ProjectTableMap::removeInstanceFromPool($singleval);
            }
        }

        return $query->delete($con);
    }

    /**
     * Deletes all rows from the project table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public static function doDeleteAll(ConnectionInterface $con = null)
    {
        return ProjectQuery::create()->doDeleteAll($con);
    }

    /**
     * Performs an INSERT on the database, given a Project or Criteria object.
     *
     * @param mixed               $criteria Criteria or Project object containing data that is used to create the INSERT statement.
     * @param ConnectionInterface $con the ConnectionInterface connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public static function doInsert($criteria, ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(ProjectTableMap::DATABASE_NAME);
        }

        if ($criteria instanceof Criteria) {
            $criteria = clone $criteria; // rename for clarity
        } else {
            $criteria = $criteria->buildCriteria(); // build Criteria from Project object
        }

        if ($criteria->containsKey(ProjectTableMap::COL_ID) && $criteria->keyContainsValue(ProjectTableMap::COL_ID) ) {
            throw new PropelException('Cannot insert a value for auto-increment primary key ('.ProjectTableMap::COL_ID.')');
        }


        // Set the correct dbName
        $query = ProjectQuery::create()->mergeWith($criteria);

        // use transaction because $criteria could contain info
        // for more than one table (I guess, conceivably)
        return $con->transaction(function () use ($con, $query) {
            return $query->doInsert($con);
        });
    }

} // ProjectTableMap
// This is the static code needed to register the TableMap for this table with the main Propel class.
//
ProjectTableMap::buildTableMap();
