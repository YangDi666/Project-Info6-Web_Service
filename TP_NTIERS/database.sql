//Queries for creating and congiguring the database and the tables in MySQL

create database test;

use test;

CREATE TABLE `users` (
  `id` int(11) NOT NULL auto_increment,
  `name` varchar(100) NOT NULL,
  `age` int(3) NOT NULL,
  `email` varchar(100) NOT NULL,
  `id_event` int(11),
  PRIMARY KEY  (`id`)
);

CREATE TABLE `Events` (
  `id` int(11) NOT NULL auto_increment,
  `name` varchar(100) NOT NULL,
  `date` text NOT NULL,
  `location` text NOT NULL,
  `description` text NOT NULL,
  PRIMARY KEY  (`id`)
);

alter table users add constraint FK_ID foreign key(id_event) REFERENCES Events(id);

ALTER TABLE `users` ADD unique(`email`);       

SET FOREIGN_KEY_CHECKS = 0;

