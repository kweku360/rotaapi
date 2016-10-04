<?php

/**
 * Data object containing the SQL and PHP code to migrate the database
 * up to version 1475076334.
 * Generated on 2016-09-28 17:25:34 
 */
class PropelMigration_1475076334
{
    public $comment = '';

    public function preUp($manager)
    {
        // add the pre-migration code here
    }

    public function postUp($manager)
    {
        // add the post-migration code here
    }

    public function preDown($manager)
    {
        // add the pre-migration code here
    }

    public function postDown($manager)
    {
        // add the post-migration code here
    }

    /**
     * Get the SQL statements for the Up migration
     *
     * @return array list of the SQL strings to execute for the Up migration
     *               the keys being the datasources
     */
    public function getUpSQL()
    {
        return array (
  'default' => '
# This is a fix for InnoDB in MySQL >= 4.1.x
# It "suspends judgement" for fkey relationships until are tables are set.
SET FOREIGN_KEY_CHECKS = 0;

CREATE TABLE `clubinfo`
(
    `id` INTEGER NOT NULL AUTO_INCREMENT,
    `clubname` VARCHAR(255) NOT NULL,
    `president` VARCHAR(255) NOT NULL,
    `country` VARCHAR(255) NOT NULL,
    `countrycode` VARCHAR(3) NOT NULL,
    `location` VARCHAR(255),
    `city` VARCHAR(255) NOT NULL,
    `district` VARCHAR(255) NOT NULL,
    `contact1` INTEGER(15) NOT NULL,
    `contact2` INTEGER(15),
    `sponsor` VARCHAR(255) NOT NULL,
    `useruuid` VARCHAR(255) NOT NULL,
    `intro` BLOB,
    `created` INTEGER NOT NULL,
    `modified` INTEGER NOT NULL,
    PRIMARY KEY (`id`)
) ENGINE=InnoDB;

# This restores the fkey checks, after having unset them earlier
SET FOREIGN_KEY_CHECKS = 1;
',
);
    }

    /**
     * Get the SQL statements for the Down migration
     *
     * @return array list of the SQL strings to execute for the Down migration
     *               the keys being the datasources
     */
    public function getDownSQL()
    {
        return array (
  'default' => '
# This is a fix for InnoDB in MySQL >= 4.1.x
# It "suspends judgement" for fkey relationships until are tables are set.
SET FOREIGN_KEY_CHECKS = 0;

DROP TABLE IF EXISTS `clubinfo`;

# This restores the fkey checks, after having unset them earlier
SET FOREIGN_KEY_CHECKS = 1;
',
);
    }

}