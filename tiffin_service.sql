-- ---------------------------
-- --------------------------
-- admin login credentials

create table admin_login(
	username varchar(50) not null,
	password varchar(50) not null
);

insert into admin_login(username,password)
values
('vedant@foodorder.com','vedu@123'),
('vikrant@foodorder.com','vikrant@123'),
('admin@foodorder.com','admin@123');

select * from admin_login;

-- ---------------------------
-- --------------------------
-- contact us form

create table contact_form(
	full_name varchar(100),
	mobile_no numeric(10),
	email_id varchar(30),
	message varchar(200)
);

insert into contact_form(full_name,mobile_no,email_id,message)
values
('vedant ghadge',9325433589,'ghadgevedant320@gmail.com','This site is good by look but it has some minors bugus in it. To run properly solve those bugs/errors.');

select * from contact_form;


-- ---------------------------
-- --------------------------
















