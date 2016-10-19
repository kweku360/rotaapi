
# This is a fix for InnoDB in MySQL >= 4.1.x
# It "suspends judgement" for fkey relationships until are tables are set.
SET FOREIGN_KEY_CHECKS = 0;

-- ---------------------------------------------------------------------
-- clubinfo
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `clubinfo`;

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
    `intro` TEXT,
    `created` INTEGER NOT NULL,
    `modified` INTEGER NOT NULL,
    PRIMARY KEY (`id`)
) ENGINE=InnoDB;

-- ---------------------------------------------------------------------
-- mediastore
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `mediastore`;

CREATE TABLE `mediastore`
(
    `id` INTEGER NOT NULL AUTO_INCREMENT,
    `title` VARCHAR(255) NOT NULL,
    `description` VARCHAR(255) NOT NULL,
    `type` VARCHAR(255) NOT NULL,
    `filename` VARCHAR(255) NOT NULL,
    `ext` VARCHAR(255),
    `uuid` VARCHAR(255) NOT NULL,
    `mime` VARCHAR(255),
    `size` INTEGER(15),
    `created` INTEGER NOT NULL,
    `modified` INTEGER NOT NULL,
    PRIMARY KEY (`id`)
) ENGINE=InnoDB;

-- ---------------------------------------------------------------------
-- project
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `project`;

CREATE TABLE `project`
(
    `id` INTEGER NOT NULL AUTO_INCREMENT,
    `uuid` VARCHAR(255) NOT NULL,
    `name` VARCHAR(255) NOT NULL,
    `urlcode` VARCHAR(255) NOT NULL,
    `status` VARCHAR(255) NOT NULL,
    `country` VARCHAR(255) NOT NULL,
    `countrycode` VARCHAR(3) NOT NULL,
    `city` VARCHAR(255) NOT NULL,
    `startdate` VARCHAR(255) NOT NULL,
    `clubuuid` VARCHAR(255) NOT NULL,
    `enddate` VARCHAR(255) NOT NULL,
    `created` INTEGER NOT NULL,
    `modified` INTEGER NOT NULL,
    PRIMARY KEY (`id`)
) ENGINE=InnoDB;

-- ---------------------------------------------------------------------
-- projectaccount
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `projectaccount`;

CREATE TABLE `projectaccount`
(
    `id` INTEGER NOT NULL AUTO_INCREMENT,
    `uuid` VARCHAR(255) NOT NULL,
    `targetamt` INTEGER NOT NULL,
    `currency` VARCHAR(255) NOT NULL,
    `Totaltargetamt` INTEGER NOT NULL,
    `amtoffsite` INTEGER NOT NULL,
    `amtraised` INTEGER NOT NULL,
    `donorcount` INTEGER NOT NULL,
    `projectuuid` VARCHAR(255) NOT NULL,
    `clubuuid` VARCHAR(255) NOT NULL,
    `created` INTEGER NOT NULL,
    `modified` INTEGER NOT NULL,
    PRIMARY KEY (`id`)
) ENGINE=InnoDB;

-- ---------------------------------------------------------------------
-- projectdisplay
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `projectdisplay`;

CREATE TABLE `projectdisplay`
(
    `id` INTEGER NOT NULL AUTO_INCREMENT,
    `uuid` VARCHAR(255) NOT NULL,
    `tagline` VARCHAR(255) NOT NULL,
    `description` TEXT NOT NULL,
    `category` VARCHAR(255) NOT NULL,
    `sociallinks` TEXT,
    `tags` TEXT NOT NULL,
    `projectuuid` VARCHAR(255) NOT NULL,
    `clubuuid` VARCHAR(255) NOT NULL,
    `created` INTEGER NOT NULL,
    `modified` INTEGER NOT NULL,
    PRIMARY KEY (`id`)
) ENGINE=InnoDB;

-- ---------------------------------------------------------------------
-- projectstat
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `projectstat`;

CREATE TABLE `projectstat`
(
    `id` INTEGER NOT NULL AUTO_INCREMENT,
    `uuid` VARCHAR(255) NOT NULL,
    `donorcount` INTEGER,
    `views` INTEGER,
    `likes` INTEGER,
    `share` INTEGER,
    `updatecount` INTEGER,
    `commentscount` INTEGER,
    `fundedpercent` INTEGER,
    `enddate` VARCHAR(255),
    `projectuuid` VARCHAR(255) NOT NULL,
    `created` INTEGER NOT NULL,
    PRIMARY KEY (`id`)
) ENGINE=InnoDB;

-- ---------------------------------------------------------------------
-- projectbadge
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `projectbadge`;

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
