create database CoTracker;
use CoTracker;

create table users(
username varchar(20),
password varchar(20),
name varchar(30),
position varchar(15),  -- either Patient,Tester, Manager
patientType varchar(15),
symptoms varchar(30),
);
