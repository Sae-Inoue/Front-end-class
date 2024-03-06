-- Filename: define-user-and-db.sql

-- Define Database (INITIALS_saas_fed)

CREATE DATABASE si_saas_fed;

-- Define Database User & Give access to Database
-- Username: INITIALS_saas_fed;
-- Password: Password1
-- Host: 127.0.0.1 (localhost can cause issues due to IPv6)

CREATE USER 'si_saas_fed'@'127.0.0.1' IDENTIFIED BY 'Password1';
GRANT USAGE ON *.* TO 'si_saas_fed'@'127.0.0.1';

GRANT ALL ON 'si\_saas\_fed'.* TO 'si_saas_fed'@'127.0.0.1' WITH GRANT OPTION;

FLUSH PRIVILEGES;



