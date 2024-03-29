CREATE DATABASE yeticave;

CREATE TABLE `yeticave`.`user`(
`id` INT NOT NULL AUTO_INCREMENT ,
`name` VARCHAR(100) NOT NULL ,
`email` VARCHAR(255) NOT NULL ,
`password` VARCHAR(255) NOT NULL ,
`contacts` VARCHAR(255) NOT NULL ,
`date_of_registration` TIMESTAMP NOT NULL ,
PRIMARY KEY (`id`)
) ENGINE = InnoDB;


CREATE TABLE `yeticave`.`category`(
`id` INT NOT NULL AUTO_INCREMENT ,
`title` VARCHAR(100) NOT NULL ,
`code` VARCHAR(100) NOT NULL ,
PRIMARY KEY (`id`)
) ENGINE = InnoDB;

CREATE TABLE `yeticave`.`lot`(
`id` INT NOT NULL AUTO_INCREMENT ,
`name` VARCHAR(100) NOT NULL ,
`category_id` INT NOT NULL ,
`author_id` INT NOT NULL ,
`winner_id` INT NOT NULL ,
`starting_price` INT NOT NULL ,
`bid_step` INT NOT NULL ,
`image` VARCHAR(255) NOT NULL ,
`expiration_date` TIMESTAMP NOT NULL ,
`description` VARCHAR(255) NOT NULL ,
`creation_date` TIMESTAMP NOT NULL ,
PRIMARY KEY (`id`)
) ENGINE = InnoDB;

CREATE TABLE `yeticave`.`bid`(
`id` INT NOT NULL AUTO_INCREMENT ,
`date` TIMESTAMP NOT NULL ,
`amount` INT NOT NULL ,
`user_id` INT NOT NULL ,
`lot_id` INT NOT NULL ,
PRIMARY KEY (`id`)
) ENGINE = InnoDB;
