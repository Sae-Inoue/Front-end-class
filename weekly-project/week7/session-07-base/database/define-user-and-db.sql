-- Filename: define-user-and-db.sql

-- Clear up previous database, database user instances
DROP DATABASE IF EXISTS si_saas_fed;
DROP USER IF EXISTS 'si_saas_fed'@'127.0.0.1';
    
-- Define Database (si_saas_fed)
CREATE DATABASE IF NOT EXISTS si_saas_fed /*!40100 COLLATE 'utf8mb4_general_ci' */;

-- Define Database User & Give access to Database
-- Username:    INTIALS_saas_fed;
-- Password:    Password1
-- Host:        127.0.0.1 (localhost can cause issues due to IPv6)

CREATE USER IF NOT EXISTS 'si_saas_fed'@'127.0.0.1'
    IDENTIFIED BY 'Password1';

GRANT USAGE ON *.* TO 'si_saas_fed'@'127.0.0.1';

GRANT ALL ON si_saas_fed.*
    TO 'si_saas_fed'@'127.0.0.1'
    WITH GRANT OPTION;

# GRANT EXECUTE, SELECT, SHOW VIEW, ALTER, ALTER ROUTINE,
#     CREATE, CREATE ROUTINE, CREATE TEMPORARY TABLES,
#     CREATE VIEW, DELETE, DROP, EVENT, INDEX, INSERT,
#     REFERENCES, TRIGGER, UPDATE, LOCK TABLES
#     ON `si\_saas\_fed`.* TO 'si_saas_fed'@'127.0.0.1'
#     WITH GRANT OPTION;

FLUSH PRIVILEGES;
