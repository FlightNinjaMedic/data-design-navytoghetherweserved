-- drop table statements go here

CREATE TABLE  profile
(
	profileId INT UNSIGNED AUTO_INCREMENT NOT NULL,
	profileFirstName VARCHAR(32) NOT NULL,
	profileLastName  VARCHAR(32) NOT NULL ,
	profileEmail     VARCHAR(128) NOT NULL ,
	UNIQUE (profileEmail),
	PRIMARY KEY (profileId)
);

CREATE TABLE dutystation
(
 	dutyStationId INT UNSIGNED AUTO_INCREMENT NOT NULL,
	dutyStationName VARCHAR(32) NOT NULL,
	dutyStationLocation VARCHAR(32) NOT NULL,
	dutyStationImage VARCHAR(256) NOT NULL,
	PRIMARY KEY (dutyStationId),
);

CREATE TABLE profiledutystation
(
	profileDutyStationId INT UNSIGNED AUTO_INCREMENT NOT NULL,

);