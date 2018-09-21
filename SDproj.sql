drop table if exists Users;
drop table if exists Items;

create table Users
(
	id			integer auto_increment primary key,
    name		varchar(255),
    username	varchar(255),
    usertype	varchar(255),
    email		varchar(255),
    enabled		boolean
);

create table Items
(
	id				integer auto_increment primary key,
    name			varchar(255),
    description		varchar(8000),
    item_type		varchar(255),
    status			varchar(255),
    is_container	boolean,
    parent_id		integer,
    time_entered	timestamp,
    time_updated	timestamp,
    deleted			boolean
);

insert into Users (name, username, usertype, email, enabled) values ('John Doe', 'jdoe', 'regular', 'jdoe@test.com', TRUE);
insert into Users (name, username, usertype, email, enabled) values ('Jane Doe', 'jdoee', 'regular', 'jdoee@test.com', TRUE);

insert into Items (name, description, item_type, status, is_container, parent_id, time_entered, time_updated, deleted)
	values ('Shovel 3000', 'A shovel.', 'shovel', 'new', FALSE, NULL, '2017-04-08 17:10:00', '2017-04-08 17:10:00', FALSE);
insert into Items (name, description, item_type, status, is_container, parent_id, time_entered, time_updated, deleted)
	values ('Printer 3000', 'A printer.', 'printer', 'new', FALSE, NULL, '2017-04-08 17:10:00', '2017-04-08 17:10:00', FALSE);
insert into Items (name, description, item_type, status, is_container, parent_id, time_entered, time_updated, deleted)
	values ('DPW Office Bldg.', 'Our office', 'building', 'new', TRUE, NULL, '2017-04-08 17:10:00', '2017-04-08 17:10:00', FALSE);