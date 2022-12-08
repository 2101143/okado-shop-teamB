CREATE TABLE cash
(cash_id INTEGER NOT NULL,
cash_method VARCHAR(20) NOT NULL,
 PRIMARY KEY(cash_id)
 );

 CREATE TABLE user
(user_id INTEGER AUTO_INCREMENT NOT NULL,
user_mail VARCHAR(191) NOT NULL,
user_password VARCHAR(191) NOT NULL,
cash_id INTEGER NOT NULL,
PRIMARY KEY(user_id),
FOREIGN KEY fkey1(cash_id)
	REFERENCES  cash(cash_id)
);

CREATE TABLE card_information
(card_id INTEGER AUTO_INCREMENT NOT NULL,
user_id INTEGER NOT NULL,
card_number CHAR(16) NOT NULL,
card_expiry DATE NOT NULL,
card_holder VARCHAR(191) NOT NULL,
card_securitycord VARCHAR(4) NOT NULL,
PRIMARY KEY (card_id),
FOREIGN KEY (user_id)
    REFERENCES user(user_id)
);

CREATE TABLE addressee
(addressee_id INTEGER AUTO_INCREMENT NOT NULL,
user_id INTEGER NOT NULL,
addressee_recipient VARCHAR(191) NOT NULL,
addressee_phonenumber VARCHAR(15) NOT NULL,
addressee_postcode VARCHAR(7) NOT NULL,
addressee_prefectures VARCHAR(4) NOT NULL,
addressee_municipalities VARCHAR(191) NOT NULL,
addressee_cityblock VARCHAR(191) NOT NULL,
addressee_buildingingname_name VARCHAR(191),
addressee_roomnumber VARCHAR(191),
PRIMARY KEY(addressee_id),
FOREIGN KEY (user_id)
	REFERENCES user(user_id)
);

CREATE TABLE workshop
(workshop_id INTEGER NOT NULL,
workshop_name VARCHAR(50) NOT NULL,
workshop_date DATE NOT NULL,
workshop_time VARCHAR(191) NOT NULL,
workshop_place VARCHAR(191) NOT NULL,
workshop_entryfee INTEGER NOT NULL,
workshop_content VARCHAR(800) NOT NULL,
workshop_seats INTEGER NOT NULL,
PRIMARY KEY(workshop_id)
);

CREATE TABLE workshop_reserve
(reserve_id INTEGER NOT NULL,
workshop_id INTEGER NOT NULL,
user_id INTEGER NOT NULL,
workshop_reservepeople INTEGER NOT NULL,
PRIMARY KEY(reserve_id),
FOREIGN KEY (workshop_id)
	REFERENCES workshop(workshop_id),
FOREIGN KEY (user_id)
    REFERENCES user(user_id)
);

CREATE TABLE items_category
(item_category_id INTEGER NOT NULL,
item_category_name VARCHAR(20) NOT NULL,
PRIMARY KEY(item_category_id)
);

CREATE TABLE items
(item_id INTEGER NOT NULL,
item_category_id INTEGER NOT NULL,
item_name VARCHAR(50) NOT NULL,
item_price INTEGER NOT NULL,
item_description VARCHAR(800) NOT NULL,
item_inventory INTEGER NOT NULL,
item_pickupflag BOOLEAN NOT NULL,
PRIMARY KEY (item_id),
FOREIGN KEY (item_category_id)
	REFERENCES items_category(item_category_id)
);

CREATE TABLE items_image
(item_image_id INTEGER AUTO_INCREMENT NOT NULL,
item_id INTEGER NOT NULL,
item_image_oder INTEGER NOT NULL,
item_image_path VARCHAR(191) NOT NULL,
PRIMARY KEY(item_image_id),
FOREIGN KEY (item_id)
    REFERENCES items(item_id)
);

CREATE TABLE favorite_item
(favorite_item_id INTEGER NOT NULL,
item_id INTEGER NOT NULL,
user_id INTEGER NOT NULL,
PRIMARY KEY(favorite_item_id),
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

CREATE TABLE purchase_history
(purchase_id INTEGER NOT NULL,
user_id INTEGER NOT NULL,
purchase_date DATE NOT NULL,
purchase_amount INTEGER NOT NULL,
PRIMARY KEY(purchase_id),
FOREIGN KEY (purchase_id)
	REFERENCES items(item_id),
FOREIGN KEY (user_id)
	REFERENCES user(user_id)
);

CREATE TABLE order_date
(purchase_deatails_id INTEGER NOT NULL,
purchase_id INTEGER NOT NULL,
item_id INTEGER NOT NULL,
item_price INTEGER NOT NULL,
purchase_detail_quanitity INTEGER NOT NULL,
PRIMARY KEY(purchase_deatails_id),
FOREIGN KEY (purchase_id)
    REFERENCES purchase_history(purchase_id),
FOREIGN KEY (item_id)
    REFERENCES items(item_id)
);