-- Filename: define-and-seed-users-table.sql

-- Direct the script to use the database
USE
    INITIALS_saas_fed;

-- Define Users Table (Note tables are PLURALISED)
DROP TABLE IF EXISTS INITIALS_saas_fed.users;
CREATE TABLE INITIALS_saas_fed.users
(
    id          BIGINT UNSIGNED NOT NULL AUTO_INCREMENT,
    given_name  varchar(192)    NOT NULL,
    family_name varchar(192)    NULL,
    photo       varchar(255)    NULL DEFAULT "avatar.png",
    email       varchar(320)    NOT NULL UNIQUE,
    pass_word   varchar(255)    NULL,

    PRIMARY KEY (id),
    INDEX (family_name, given_name),
    INDEX (given_name, family_name),
    INDEX (email)
);

INSERT INTO users
VALUES (1, "Ad", "Min", "Admin.png", "ad.min@example.com", "Secret1");

INSERT INTO users
VALUES (100, "Jacques", "d'Carre", "Jacques.png", "Jacques.D.Carre@example.com", "Password1");

INSERT INTO users(given_name, family_name, email, pass_word, photo)
VALUES
       ('Dinah', 'Soares', 'Dinah.Soares@example.com', "Password1", 'Dinah.png'),
       ('Cheri', 'Pitts', 'Cheri.Pitts@example.com', "Password1", 'Cheri.png'),
       ('Dee', 'Licious', 'Dee.Licious@example.com', "Password1", null),
       ('Bobby', 'Socks', 'Bobby.Socks@example.com', "Password1", 'Bobby.png'),
       ('Dee', 'Faced', 'Dee.Faced@example.com', "Password1", 'DeeF.png'),
       ('Cliff', 'Dweller', 'Cliff.Dweller@example.com', "Password1", 'Cliff.png'),
       ('Cole', 'Slaw', 'Cole.Slaw@example.com', "Password1", 'Cole.png'),
       ('Daisy', 'Chain', 'Daisy.Chain@example.com', "Password1", 'Daisy.png'),
       ('Dusty', 'Rhodes', 'Dusty.Rhodes@example.com', "Password1", 'Dusty.png'),
       ('Dan', 'Singh', 'Dan.Singh@example.com', "Password1", 'Dan.png')
;
