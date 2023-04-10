/*

path : C:\xampp\mysql\bin

mysql 실행
./mysql -u root -p

id : root
password : root

password 초기화 or update
set PASSWORD for ‘계정’@’host정보' = PASSWORD(‘바꿀 비밀번호’);
FLUSH PRIVILEGES;


*/

-- CREATE DATABASE
CREATE DATABASE phpTest;
SHOW DATABASES;
use phpTest;

-- CREATE TABLE
CREATE TABLE topic (
    id int(20) NOT NULL AUTO_INCREMENT
  , title varchar(50) NOT NULL
  , description text
  , reg_date datetime NOT NULL
  , PRIMARY KEY(id)
) ENGINE=InnoDB;

SHOW TABLES;

DESC topic;