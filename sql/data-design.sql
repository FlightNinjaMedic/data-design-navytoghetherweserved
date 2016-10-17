-- drop table statements go here

CREATE TABLE  profile
(
	profileId INT UNSIGNED AUTO_INCREMENT NOT NULL,
	profileFirstName VARCHAR(32) NOT NULL,
	profileLastName  VARCHAR(32) NOT NULL ,
	profileEmail     VARCHAR(128) NOT NULL ,
	UNIQUE (profileEmail),
	PRIMARY KEY (profileId)
)