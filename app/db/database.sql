 /*========================================================= Shanlinbao数据库*/

/*================================= 建立表空间及对应dba*/
 -- create user
 GRANT USAGE ON *.* TO 'radiichina'@'localhost' IDENTIFIED BY 'e1OKmKq4w^ygK6L7bX' WITH GRANT OPTION;
 -- create database
 CREATE DATABASE radiichina CHARACTER SET  utf8  COLLATE utf8_general_ci;
 -- grant user 权限1,权限2,select,insert,update,delete,create,drop,index,alter,grant,references,reload,shutdown,process,file等14个权限
 GRANT SELECT,INSERT,UPDATE,DELETE,CREATE,DROP,LOCK TABLES ON radiichina.*  TO 'radiichina'@'localhost' IDENTIFIED BY 'e1OKmKq4w^ygK6L7bX';

 /*================================= 建立表、表主外键、多表关联等T-SQL*/
 -- 改变当前数据库
 USE radiichina;

/*
用户表
*/
create table subscribes (
id INT NOT NULL auto_increment COMMENT 'ID标识',
email VARCHAR(256) NOT NULL COMMENT '邮件地址',
adate VARCHAR(19) NOT NULL COMMENT '提交信息时间',
primary key (id) -- 主键
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
