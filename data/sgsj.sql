SET NAMES UTF8;
DROP DATABASE IF EXISTS sgsj;
CREATE DATABASE sgsj CHARSET=UTF8;
USE sgsj;

CREATE TABLE sgsj_user(
  uid INT PRIMARY KEY AUTO_INCREMENT,
  uname VARCHAR(32),
  upwd VARCHAR(32)
);
INSERT INTO sgsj_user VALUES
(1, 'qiangdong', '123456'),
(2, 'naicha', '456789'),
(3, 'cjsong', '930510'),
(4, 'xuliping', '931229');

SELECT * FROM sgsj_user;








