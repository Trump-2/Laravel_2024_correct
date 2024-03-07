



CREATE TABLE `laravel`.`test` (
    `id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT ,
    `name` TEXT NOT NULL , 
    PRIMARY KEY (`id`)) ENGINE = InnoDB;

CREATE TABLE `laravel`.`test2` (`id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT , `name` TEXT NOT NULL , PRIMARY KEY (`id`)) ENGINE = InnoDB;
CREATE TABLE `laravel`.`test3` (`id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT , `name` TEXT NOT NULL , PRIMARY KEY (`id`)) ENGINE = InnoDB;
CREATE TABLE `laravel`.`test4` (`id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT , `name` TEXT NOT NULL , PRIMARY KEY (`id`)) ENGINE = InnoDB;
CREATE TABLE `laravel`.`test5` (`id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT , `name` TEXT NOT NULL , PRIMARY KEY (`id`)) ENGINE = InnoDB;


CREATE TABLE `laravel`.`0307_test` (
    `id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT , 
    `name` TEXT NULL COMMENT '姓名' , 
    `num` INT(10) NULL COMMENT '數量' , 
    `date` DATE NULL COMMENT '日期' , PRIMARY KEY (`id`)) ENGINE = InnoDB;

    
CREATE TABLE `laravel`.`cat` (
    `id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT , 
    `name` TEXT NULL COMMENT '姓名' , 
    `num` INT(10) NULL COMMENT '數量' , 
    `date` DATE NULL COMMENT '日期' , PRIMARY KEY (`id`)) ENGINE = InnoDB;

CREATE TABLE `laravel`.`dog` (
    `id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT , 
    `name` TEXT NULL COMMENT '姓名' , 
    `num` INT(10) NULL COMMENT '數量' , 
    `date` DATE NULL COMMENT '日期' , PRIMARY KEY (`id`)) ENGINE = InnoDB;


INSERT INTO `dogs`(`id`, `name`, `address`, `mobile`, `created_at`, `updated_at`) 
VALUES ('','Linda','台中市','888','','')
INSERT INTO `dogs`(`id`, `name`, `address`, `mobile`, `created_at`, `updated_at`) 
VALUES ('','Allen','台中市','666','','')
INSERT INTO `dogs`(`id`, `name`, `address`, `mobile`, `created_at`, `updated_at`) 
VALUES ('','Murray','台中市','555','','')