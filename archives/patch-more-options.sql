-- (c) Jan Luca, 2009, CC by-sa 3.0 or later
-- Table structure for table `Poll`
-- Replace /*$wgDBprefix*/ with the proper prefix

ALTER TABLE /*$wgDBprefix*/poll
ADD COLUMN `alternative_7` VARCHAR( 255 ) NOT NULL AFTER `alternative_6`,
ADD COLUMN `alternative_8` VARCHAR( 255 ) NOT NULL AFTER `alternative_7`,
ADD COLUMN `alternative_9` VARCHAR( 255 ) NOT NULL AFTER `alternative_8`,
ADD COLUMN `alternative_10` VARCHAR( 255 ) NOT NULL AFTER `alternative_9`,
ADD COLUMN `alternative_11` VARCHAR( 255 ) NOT NULL AFTER `alternative_10`,
ADD COLUMN `alternative_12` VARCHAR( 255 ) NOT NULL AFTER `alternative_11`;
