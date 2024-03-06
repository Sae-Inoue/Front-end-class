-- Filename: define-tables.sql

-- Direct the script to use the database
USE si_saas_fed;

    -- Define Users Table(Note tables are PLURALISED)
CREATE TABLE si_saas_fed.users(
  id BigInt unsigned not null auto_increment,
  given_name varchar(192) not null,
  family_name varchar(192) null,
  photo varchar(255) null default "avatar.png",
  email varchar(320) not null,
  pass_word varchar(255) null,

  PRIMARY KEY (id)
);