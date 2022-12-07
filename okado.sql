CREATE TABLE cash
(cash_id INTEGER NOT NULL,
cash_method VARCHAR(10) NOT NULL,
 PRIMARY KEY(cash_id)
 );

 CREATE TABLE user
(user_id INTEGER AUTO_INCREMENT NOT NULL,
mail_address VARCHAR(191) NOT NULL,
password VARCHAR(191) NOT NULL,
cash_id INTEGER NOT NULL,
PRIMARY KEY(user_id),
FOREIGN KEY fkey1(cash_id)
	REFERENCES  cash(cash_id)
);

CREATE TABLE card_information
(card_id INTEGER AUTO_INCREMENT NOT NULL,
user_id INTEGER NOT NULL,
card_number VARCHAR(16) NOT NULL,
date_of_expiry DATE NOT NULL,
name VARCHAR(191) NOT NULL,
security_cord INTEGER  NOT NULL,
PRIMARY KEY (card_id),
FOREIGN KEY (user_id)
    REFERENCES user(user_id)
);

CREATE TABLE addressee
(addressee_id INTEGER AUTO_INCREMENT NOT NULL,
user_id INTEGER NOT NULL,
name VARCHAR(191) NOT NULL,
phone_number VARCHAR(15) NOT NULL,
post_code VARCHAR(7) NOT NULL,
prefectures VARCHAR(4) NOT NULL,
municipalities VARCHAR(200) NOT NULL,
city_block VARCHAR(200) NOT NULL,
buildingingname_name VARCHAR(200),
room_number VARCHAR(10),
PRIMARY KEY(addressee_id),
FOREIGN KEY (user_id)
	REFERENCES user(user_id)
);

CREATE TABLE workshop
(workshop_id INTEGER NOT NULL,
workshop_name VARCHAR(67) NOT NULL,
event_date DATE NOT NULL,
time VARCHAR(191) NOT NULL,
place VARCHAR(191) NOT NULL,
entryfee INTEGER NOT NULL,
content VARCHAR(831) NOT NULL,
seats INTEGER NOT NULL,
PRIMARY KEY(workshop_id)
);

CREATE TABLE workshop_reserve
(reserve_id INTEGER NOT NULL,
workshop_id INTEGER NOT NULL,
user_id INTEGER NOT NULL,
people INTEGER NOT NULL,
PRIMARY KEY(reserve_id),
FOREIGN KEY (workshop_id)
	REFERENCES workshop(workshop_id),
FOREIGN KEY (user_id)
    REFERENCES user(user_id)
);

CREATE TABLE items_category
(category_id INTEGER NOT NULL,
category_name VARCHAR(20) NOT NULL,
PRIMARY KEY(category_id)
);

CREATE TABLE items
(item_id INTEGER NOT NULL,
category_id INTEGER NOT NULL,
item_name VARCHAR(50) NOT NULL,
item_price INTEGER NOT NULL,
item_explanation VARCHAR(831) NOT NULL,
item_inventory INTEGER NOT NULL,
item_pickupflag BOOLEAN NOT NULL,
PRIMARY KEY (item_id),
FOREIGN KEY (category_id)
	REFERENCES items_category(category_id)
);

CREATE TABLE items_image
(image_id INTEGER AUTO_INCREMENT NOT NULL,
item_id INTEGER NOT NULL,
image_order VARCHAR(191) NOT NULL,
image_name VARCHAR(20) NOT NULL,
image_type VARCHAR(20) NOT NULL,
image_file VARCHAR(191) NOT NULL,
image_date DATE NOT NULL,
PRIMARY KEY(image_id),
FOREIGN KEY (item_id)
    REFERENCES items(item_id)
);

CREATE TABLE favorite_item
(favorite_id INTEGER NOT NULL,
item_id INTEGER NOT NULL,
user_id INTEGER NOT NULL,
PRIMARY KEY(favorite_id),
FOREIGN KEY (item_id)
	REFERENCES items(item_id),
FOREIGN KEY (user_id)
	REFERENCES user(user_id)
);

CREATE TABLE cart
(cart_id INTEGER NOT NULL,
user_id INTEGER NOT NULL,
item_id INTEGER NOT NULL,
cart_quanitity INTEGER NOT NULL,
PRIMARY KEY(cart_id),
FOREIGN KEY (user_id)
	REFERENCES user(user_id),
FOREIGN KEY (item_id)
	REFERENCES items(item_id)
);

CREATE TABLE order_history
(order_id INTEGER NOT NULL,
item_id INTEGER NOT NULL,
user_id INTEGER NOT NULL,
order_date DATE NOT NULL,
oder_amount INTEGER NOT NULL,
PRIMARY KEY(order_id),
FOREIGN KEY (item_id)
	REFERENCES items(item_id),
FOREIGN KEY (user_id)
	REFERENCES user(user_id)
);

CREATE TABLE order_date
(order_deatails_id INTEGER NOT NULL,
order_id INTEGER NOT NULL,
item_id INTEGER NOT NULL,
price INTEGER NOT NULL,
oder_detail_quanitity INTEGER NOT NULL,
PRIMARY KEY(order_deatails_id),
FOREIGN KEY (order_id)
    REFERENCES order_history(order_id),
FOREIGN KEY (item_id)
    REFERENCES items(item_id)

);