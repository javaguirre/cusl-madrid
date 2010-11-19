
# This is a fix for InnoDB in MySQL >= 4.1.x
# It "suspends judgement" for fkey relationships until are tables are set.
SET FOREIGN_KEY_CHECKS = 0;

#-----------------------------------------------------------------------------
#-- entry
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `entry`;


CREATE TABLE `entry`
(
	`id` INTEGER  NOT NULL AUTO_INCREMENT,
	`title` VARCHAR(255)  NOT NULL,
	`text` TEXT  NOT NULL,
	`slug` VARCHAR(255),
	`created_at` DATETIME  NOT NULL,
	`updated_at` DATETIME  NOT NULL,
	PRIMARY KEY (`id`),
	UNIQUE KEY `title` (`title`),
	UNIQUE KEY `slug` (`slug`)
)Type=InnoDB;

#-----------------------------------------------------------------------------
#-- jury
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `jury`;


CREATE TABLE `jury`
(
	`id` INTEGER  NOT NULL AUTO_INCREMENT,
	`name` VARCHAR(255)  NOT NULL,
	`description` TEXT  NOT NULL,
	`created_at` DATETIME  NOT NULL,
	`updated_at` DATETIME  NOT NULL,
	PRIMARY KEY (`id`),
	UNIQUE KEY `name` (`name`)
)Type=InnoDB;

#-----------------------------------------------------------------------------
#-- project
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `project`;


CREATE TABLE `project`
(
	`id` INTEGER  NOT NULL AUTO_INCREMENT,
	`name` VARCHAR(255)  NOT NULL,
	`description` TEXT  NOT NULL,
	`blog` VARCHAR(255),
	`rss` VARCHAR(255),
	`code` VARCHAR(255),
	`created_at` DATETIME  NOT NULL,
	`updated_at` DATETIME  NOT NULL,
	PRIMARY KEY (`id`),
	UNIQUE KEY `name` (`name`)
)Type=InnoDB;

#-----------------------------------------------------------------------------
#-- participant
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `participant`;


CREATE TABLE `participant`
(
	`id` INTEGER  NOT NULL AUTO_INCREMENT,
	`name` VARCHAR(255)  NOT NULL,
	`university` VARCHAR(255)  NOT NULL,
	`project_id` INTEGER  NOT NULL,
	PRIMARY KEY (`id`),
	UNIQUE KEY `name` (`name`),
	KEY `project_id_idx`(`project_id`),
	CONSTRAINT `participant_FK_1`
		FOREIGN KEY (`project_id`)
		REFERENCES `project` (`id`)
		ON UPDATE RESTRICT
		ON DELETE CASCADE
)Type=InnoDB;

#-----------------------------------------------------------------------------
#-- project_jury
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `project_jury`;


CREATE TABLE `project_jury`
(
	`id` INTEGER  NOT NULL AUTO_INCREMENT,
	`project_id` INTEGER  NOT NULL,
	`jury_id` INTEGER  NOT NULL,
	`created_at` DATETIME,
	`updated_at` DATETIME,
	PRIMARY KEY (`id`),
	INDEX `project_jury_FI_1` (`project_id`),
	CONSTRAINT `project_jury_FK_1`
		FOREIGN KEY (`project_id`)
		REFERENCES `project` (`id`),
	INDEX `project_jury_FI_2` (`jury_id`),
	CONSTRAINT `project_jury_FK_2`
		FOREIGN KEY (`jury_id`)
		REFERENCES `jury` (`id`)
)Type=InnoDB;

#-----------------------------------------------------------------------------
#-- eval_type
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `eval_type`;


CREATE TABLE `eval_type`
(
	`id` INTEGER  NOT NULL AUTO_INCREMENT,
	`name` VARCHAR(255)  NOT NULL,
	PRIMARY KEY (`id`),
	UNIQUE KEY `eval_type_U_1` (`name`)
)Type=InnoDB;

#-----------------------------------------------------------------------------
#-- eval_question
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `eval_question`;


CREATE TABLE `eval_question`
(
	`id` INTEGER  NOT NULL AUTO_INCREMENT,
	`name` VARCHAR(255)  NOT NULL,
	`point` INTEGER  NOT NULL,
	`eval_type_id` INTEGER  NOT NULL,
	`comment` TEXT  NOT NULL,
	PRIMARY KEY (`id`),
	UNIQUE KEY `eval_question_U_1` (`name`),
	INDEX `eval_question_FI_1` (`eval_type_id`),
	CONSTRAINT `eval_question_FK_1`
		FOREIGN KEY (`eval_type_id`)
		REFERENCES `eval_type` (`id`)
)Type=InnoDB;

#-----------------------------------------------------------------------------
#-- evaluation
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `evaluation`;


CREATE TABLE `evaluation`
(
	`id` INTEGER  NOT NULL AUTO_INCREMENT,
	`devel` INTEGER  NOT NULL,
	`finished` INTEGER  NOT NULL,
	`doc` INTEGER  NOT NULL,
	`community` INTEGER  NOT NULL,
	`comment` VARCHAR(255),
	`finished_form` TINYINT default 0,
	`created_at` DATETIME,
	`updated_at` DATETIME,
	`project_jury_id` INTEGER  NOT NULL,
	PRIMARY KEY (`id`),
	INDEX `evaluation_FI_1` (`project_jury_id`),
	CONSTRAINT `evaluation_FK_1`
		FOREIGN KEY (`project_jury_id`)
		REFERENCES `project_jury` (`id`)
)Type=InnoDB;

# This restores the fkey checks, after having unset them earlier
SET FOREIGN_KEY_CHECKS = 1;
