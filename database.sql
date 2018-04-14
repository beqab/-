create table orders(
	id int,
	user_id int,
	town varchar(150),
	address varchar(2000),
	parent_name varchar(500),
	parent_lastname varchar(500),
	contact_number int(100),
	contact_info varchar(100),
	price int,
	books varchar(4000),
	book_prices varchar(1000),
	primary key(id)
);