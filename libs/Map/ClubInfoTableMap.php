<?php

namespace Map;

use \Clubinfo;
use \ClubinfoQuery;
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
 * This class defines the structure of the 'clubinfo' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 */
class ClubinfoTableMap extends TableMap
{
    use InstancePoolTrait;
    use TableMapTrait;

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = '.Map.ClubinfoTableMap';

    /**
     * The default database name for this class
     */
    const DATABASE_NAME = 'default';

    /**
     * The table name for this class
     */
    const TABLE_NAME = 'clubinfo';

    /**
     * The related Propel class for this table
     */
    const OM_CLASS = '\\Clubinfo';

    /**
     * A class that can be returned by this tableMap
     */
    const CLASS_DEFAULT = 'Clubinfo';

    /**
     * The total number of columns
     */
    const NUM_COLUMNS = 14;

    /**
     * The number of lazy-loaded columns
     */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /**
     * The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS)
     */
    const NUM_HYDRATE_COLUMNS = 14;

    /**
     * the column name for the id field
     */
    const COL_ID = 'clubinfo.id';

    /**
     * the column name for the clubname field
     */
    const COL_CLUBNAME = 'clubinfo.clubname';

    /**
     * the column name for the president field
     */
    const COL_PRESIDENT = 'clubinfo.president';

    /**
     * the column name for the country field
     */
    const COL_COUNTRY = 'clubinfo.country';

    /**
     * the column name for the countrycode field
     */
    const COL_COUNTRYCODE = 'clubinfo.countrycode';

    /**
     * the column name for the location field
     */
    const COL_LOCATION = 'clubinfo.location';

    /**
     * the column name for the city field
     */
    const COL_CITY = 'clubinfo.city';

    /**
     * the column name for the district field
     */
    const COL_DISTRICT = 'clubinfo.district';

    /**
     * the column name for the contact1 field
     */
    const COL_CONTACT1 = 'clubinfo.contact1';

    /**
     * the column name for the contact2 field
     */
    const COL_CONTACT2 = 'clubinfo.contact2';

    /**
     * the column name for the sponsor field
     */
    const COL_SPONSOR = 'clubinfo.sponsor';

    /**
     * the column name for the intro field
     */
    const COL_INTRO = 'clubinfo.intro';

    /**
     * the column name for the created field
     */
    const COL_CREATED = 'clubinfo.created';

    /**
     * the column name for the modified field
     */
    const COL_MODIFIED = 'clubinfo.modified';

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
        self::TYPE_PHPNAME       => array('Id', 'Clubname', 'President', 'Country', 'Countrycode', 'Location', 'City', 'District', 'Contact1', 'Contact2', 'Sponsor', 'Intro', 'Created', 'Modified', ),
        self::TYPE_CAMELNAME     => array('id', 'clubname', 'president', 'country', 'countrycode', 'location', 'city', 'district', 'contact1', 'contact2', 'sponsor', 'intro', 'created', 'modified', ),
        self::TYPE_COLNAME       => array(ClubinfoTableMap::COL_ID, ClubinfoTableMap::COL_CLUBNAME, ClubinfoTableMap::COL_PRESIDENT, ClubinfoTableMap::COL_COUNTRY, ClubinfoTableMap::COL_COUNTRYCODE, ClubinfoTableMap::COL_LOCATION, ClubinfoTableMap::COL_CITY, ClubinfoTableMap::COL_DISTRICT, ClubinfoTableMap::COL_CONTACT1, ClubinfoTableMap::COL_CONTACT2, ClubinfoTableMap::COL_SPONSOR, ClubinfoTableMap::COL_INTRO, ClubinfoTableMap::COL_CREATED, ClubinfoTableMap::COL_MODIFIED, ),
        self::TYPE_FIELDNAME     => array('id', 'clubname', 'president', 'country', 'countrycode', 'location', 'city', 'district', 'contact1', 'contact2', 'sponsor', 'intro', 'created', 'modified', ),
        self::TYPE_NUM           => array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. self::$fieldKeys[self::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        self::TYPE_PHPNAME       => array('Id' => 0, 'Clubname' => 1, 'President' => 2, 'Country' => 3, 'Countrycode' => 4, 'Location' => 5, 'City' => 6, 'District' => 7, 'Contact1' => 8, 'Contact2' => 9, 'Sponsor' => 10, 'Intro' => 11, 'Created' => 12, 'Modified' => 13, ),
        self::TYPE_CAMELNAME     => array('id' => 0, 'clubname' => 1, 'president' => 2, 'country' => 3, 'countrycode' => 4, 'location' => 5, 'city' => 6, 'district' => 7, 'contact1' => 8, 'contact2' => 9, 'sponsor' => 10, 'intro' => 11, 'created' => 12, 'modified' => 13, ),
        self::TYPE_COLNAME       => array(ClubinfoTableMap::COL_ID => 0, ClubinfoTableMap::COL_CLUBNAME => 1, ClubinfoTableMap::COL_PRESIDENT => 2, ClubinfoTableMap::COL_COUNTRY => 3, ClubinfoTableMap::COL_COUNTRYCODE => 4, ClubinfoTableMap::COL_LOCATION => 5, ClubinfoTableMap::COL_CITY => 6, ClubinfoTableMap::COL_DISTRICT => 7, ClubinfoTableMap::COL_CONTACT1 => 8, ClubinfoTableMap::COL_CONTACT2 => 9, ClubinfoTableMap::COL_SPONSOR => 10, ClubinfoTableMap::COL_INTRO => 11, ClubinfoTableMap::COL_CREATED => 12, ClubinfoTableMap::COL_MODIFIED => 13, ),
        self::TYPE_FIELDNAME     => array('id' => 0, 'clubname' => 1, 'president' => 2, 'country' => 3, 'countrycode' => 4, 'location' => 5, 'city' => 6, 'district' => 7, 'contact1' => 8, 'contact2' => 9, 'sponsor' => 10, 'intro' => 11, 'created' => 12, 'modified' => 13, ),
        self::TYPE_NUM           => array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, )
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
        $this->setName('clubinfo');
        $this->setPhpName('Clubinfo');
        $this->setIdentifierQuoting(false);
        $this->setClassName('\\Clubinfo');
        $this->setPackage('');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('id', 'Id', 'INTEGER', true, null, null);
        $this->addColumn('clubname', 'Clubname', 'VARCHAR', true, 255, null);
        $this->addColumn('president', 'President', 'VARCHAR', true, 255, null);
        $this->addColumn('country', 'Country', 'VARCHAR', true, 255, null);
        $this->addColumn('countrycode', 'Countrycode', 'VARCHAR', true, 3, null);
        $this->addColumn('location', 'Location', 'VARCHAR', false, 255, null);
        $this->addColumn('city', 'City', 'VARCHAR', true, 255, null);
        $this->addColumn('district', 'District', 'VARCHAR', true, 255, null);
        $this->addColumn('contact1', 'Contact1', 'INTEGER', true, 15, null);
        $this->addColumn('contact2', 'Contact2', 'INTEGER', false, 15, null);
        $this->addColumn('sponsor', 'Sponsor', 'VARCHAR', true, 255, null);
        $this->addColumn('intro', 'Intro', 'BLOB', false, null, null);
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
        return $withPrefix ? ClubinfoTableMap::CLASS_DEFAULT : ClubinfoTableMap::OM_CLASS;
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
     * @return array           (Clubinfo object, last column rank)
     */
    public static function populateObject($row, $offset = 0, $indexType = TableMap::TYPE_NUM)
    {
        $key = ClubinfoTableMap::getPrimaryKeyHashFromRow($row, $offset, $indexType);
        if (null !== ($obj = ClubinfoTableMap::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $offset, true); // rehydrate
            $col = $offset + ClubinfoTableMap::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = ClubinfoTableMap::OM_CLASS;
            /** @var Clubinfo $obj */
            $obj = new $cls();
            $col = $obj->hydrate($row, $offset, false, $indexType);
            ClubinfoTableMap::addInstanceToPool($obj, $key);
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
            $key = ClubinfoTableMap::getPrimaryKeyHashFromRow($row, 0, $dataFetcher->getIndexType());
            if (null !== ($obj = ClubinfoTableMap::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                /** @var Clubinfo $obj */
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                ClubinfoTableMap::addInstanceToPool($obj, $key);
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
            $criteria->addSelectColumn(ClubinfoTableMap::COL_ID);
            $criteria->addSelectColumn(ClubinfoTableMap::COL_CLUBNAME);
            $criteria->addSelectColumn(ClubinfoTableMap::COL_PRESIDENT);
            $criteria->addSelectColumn(ClubinfoTableMap::COL_COUNTRY);
            $criteria->addSelectColumn(ClubinfoTableMap::COL_COUNTRYCODE);
            $criteria->addSelectColumn(ClubinfoTableMap::COL_LOCATION);
            $criteria->addSelectColumn(ClubinfoTableMap::COL_CITY);
            $criteria->addSelectColumn(ClubinfoTableMap::COL_DISTRICT);
            $criteria->addSelectColumn(ClubinfoTableMap::COL_CONTACT1);
            $criteria->addSelectColumn(ClubinfoTableMap::COL_CONTACT2);
            $criteria->addSelectColumn(ClubinfoTableMap::COL_SPONSOR);
            $criteria->addSelectColumn(ClubinfoTableMap::COL_INTRO);
            $criteria->addSelectColumn(ClubinfoTableMap::COL_CREATED);
            $criteria->addSelectColumn(ClubinfoTableMap::COL_MODIFIED);
        } else {
            $criteria->addSelectColumn($alias . '.id');
            $criteria->addSelectColumn($alias . '.clubname');
            $criteria->addSelectColumn($alias . '.president');
            $criteria->addSelectColumn($alias . '.country');
            $criteria->addSelectColumn($alias . '.countrycode');
            $criteria->addSelectColumn($alias . '.location');
            $criteria->addSelectColumn($alias . '.city');
            $criteria->addSelectColumn($alias . '.district');
            $criteria->addSelectColumn($alias . '.contact1');
            $criteria->addSelectColumn($alias . '.contact2');
            $criteria->addSelectColumn($alias . '.sponsor');
            $criteria->addSelectColumn($alias . '.intro');
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
        return Propel::getServiceContainer()->getDatabaseMap(ClubinfoTableMap::DATABASE_NAME)->getTable(ClubinfoTableMap::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this tableMap class.
     */
    public static function buildTableMap()
    {
        $dbMap = Propel::getServiceContainer()->getDatabaseMap(ClubinfoTableMap::DATABASE_NAME);
        if (!$dbMap->hasTable(ClubinfoTableMap::TABLE_NAME)) {
            $dbMap->addTableObject(new ClubinfoTableMap());
        }
    }

    /**
     * Performs a DELETE on the database, given a Clubinfo or Criteria object OR a primary key value.
     *
     * @param mixed               $values Criteria or Clubinfo object or primary key or array of primary keys
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
            $con = Propel::getServiceContainer()->getWriteConnection(ClubinfoTableMap::DATABASE_NAME);
        }

        if ($values instanceof Criteria) {
            // rename for clarity
            $criteria = $values;
        } elseif ($values instanceof \Clubinfo) { // it's a model object
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(ClubinfoTableMap::DATABASE_NAME);
            $criteria->add(ClubinfoTableMap::COL_ID, (array) $values, Criteria::IN);
        }

        $query = ClubinfoQuery::create()->mergeWith($criteria);

        if ($values instanceof Criteria) {
            ClubinfoTableMap::clearInstancePool();
        } elseif (!is_object($values)) { // it's a primary key, or an array of pks
            foreach ((array) $values as $singleval) {
                ClubinfoTableMap::removeInstanceFromPool($singleval);
            }
        }

        return $query->delete($con);
    }

    /**
     * Deletes all rows from the clubinfo table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public static function doDeleteAll(ConnectionInterface $con = null)
    {
        return ClubinfoQuery::create()->doDeleteAll($con);
    }

    /**
     * Performs an INSERT on the database, given a Clubinfo or Criteria object.
     *
     * @param mixed               $criteria Criteria or Clubinfo object containing data that is used to create the INSERT statement.
     * @param ConnectionInterface $con the ConnectionInterface connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public static function doInsert($criteria, ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(ClubinfoTableMap::DATABASE_NAME);
        }

        if ($criteria instanceof Criteria) {
            $criteria = clone $criteria; // rename for clarity
        } else {
            $criteria = $criteria->buildCriteria(); // build Criteria from Clubinfo object
        }

        if ($criteria->containsKey(ClubinfoTableMap::COL_ID) && $criteria->keyContainsValue(ClubinfoTableMap::COL_ID) ) {
            throw new PropelException('Cannot insert a value for auto-increment primary key ('.ClubinfoTableMap::COL_ID.')');
        }


        // Set the correct dbName
        $query = ClubinfoQuery::create()->mergeWith($criteria);

        // use transaction because $criteria could contain info
        // for more than one table (I guess, conceivably)
        return $con->transaction(function () use ($con, $query) {
            return $query->doInsert($con);
        });
    }

} // ClubinfoTableMap
// This is the static code needed to register the TableMap for this table with the main Propel class.
//
ClubinfoTableMap::buildTableMap();
