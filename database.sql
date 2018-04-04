
CREATE DATABASE IF NOT EXISTS ordered_books;

use ordered_books;

create table orders(
	id int,
	town varchar(150),
	address varchar(500),
	contact_number varchar(100),
	contact_info varchar(100),
	price int,
	books varchar(2000),
	book_prices varchar(1000),
	primary key(id)
);