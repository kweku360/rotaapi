<?php

/**
 * Data object containing the SQL and PHP code to migrate the database
 * up to version 1476786631.
 * Generated on 2016-10-18 12:30:31 
 */
class PropelMigration_1476786631
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

CREATE TABLE `projectbadge`
(
    `id` INTEGER NOT NULL AUTO_INCREMENT,
    `uuid` VARCHAR(255) NOT NULL,
    `badgeid` INTEGER,
    `badgename` VARCHAR(255),
    `notes` VARCHAR(255),
    `expiry` INTEGER,
    `projectuuid` VARCHAR(255) NOT NULL,
    `created` INTEGER NOT NULL,
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

DROP TABLE IF EXISTS `projectbadge`;

# This restores the fkey checks, after having unset them earlier
SET FOREIGN_KEY_CHECKS = 1;
',
);
    }

}