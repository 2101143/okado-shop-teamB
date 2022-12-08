CREATE TABLE cash
(cash_id INT AUTO_INCREMENT,
cash_method VARCHAR(20) NOT NULL,
PRIMARY KEY(cash_id)
);

CREATE TABLE user
(user_id INT AUTO_INCREMENT,
user_mail VARCHAR(191) NOT NULL,
user_password VARCHAR(191) NOT NULL,
cash_id INT,
PRIMARY KEY(user_id),
FOREIGN KEY fkey1(cash_id)
	REFERENCES cash(cash_id)
);

CREATE TABLE cards
(card_id INT AUTO_INCREMENT,
user_id INT NOT NULL,
card_number VARCHAR(16) NOT NULL,
card_expiry DATE NOT NULL,
card_holder VARCHAR(191) NOT NULL,
card_securitycord INT NOT NULL,
PRIMARY KEY (card_id),
FOREIGN KEY fkey1(user_id)
    REFERENCES user(user_id)
);

CREATE TABLE addressee
(address_id INT AUTO_INCREMENT,
user_id INT NOT NULL,
address_recipient VARCHAR(191) NOT NULL,
address_phonenumber VARCHAR(15) NOT NULL,
address_postcode VARCHAR(7) NOT NULL,
address_prefecture VARCHAR(4) NOT NULL,
address_municipality VARCHAR(191) NOT NULL,
city_block VARCHAR(191) NOT NULL,
address_buildingname VARCHAR(191),
address_roomnumber VARCHAR(191),
PRIMARY KEY(address_id),
FOREIGN KEY fkey1(user_id)
	REFERENCES user(user_id)
);

CREATE TABLE workshop
(workshop_id INT AUTO_INCREMENT,
workshop_name VARCHAR(50) NOT NULL,
workshop_date DATE NOT NULL,
workshop_start TIME NOT NULL,
workshop_end TIME NOT NULL,
workshop_place VARCHAR(191) NOT NULL,
workshop_entryfee INT NOT NULL,
workshop_content VARCHAR(800) NOT NULL,
workshop_seats INT NOT NULL,
PRIMARY KEY(workshop_id)
);

CREATE TABLE workshop_reserve
(workshop_reserve_id INT AUTO_INCREMENT,
workshop_id INT NOT NULL,
user_id INT NOT NULL,
workshop_reserve_people INT NOT NULL,
PRIMARY KEY(workshop_reserve_id),
FOREIGN KEY fkey1(workshop_id)
	REFERENCES workshop(workshop_id),
FOREIGN KEY fkey2(user_id)
    REFERENCES user(user_id)
);

CREATE TABLE item_categories
(item_category_id INT AUTO_INCREMENT,
item_category_name VARCHAR(20) NOT NULL,
PRIMARY KEY(item_category_id)
);

CREATE TABLE items
(item_id INT AUTO_INCREMENT,
item_category_id INT NOT NULL,
item_name VARCHAR(50) NOT NULL,
item_price INT NOT NULL,
item_description VARCHAR(800) NOT NULL,
item_inventory INT NOT NULL,
item_pickupflag BOOLEAN NOT NULL,
PRIMARY KEY (item_id),
FOREIGN KEY fkey1(item_category_id)
	REFERENCES item_categories(item_category_id)
);

CREATE TABLE item_images
(item_image_id INT AUTO_INCREMENT,
item_id INT NOT NULL,
item_image_order INT NOT NULL,
item_image_path VARCHAR(191) NOT NULL,
PRIMARY KEY(item_image_id),
FOREIGN KEY fkey1(item_id)
    REFERENCES items(item_id)
);

CREATE TABLE favorite_items
(favorite_item_id INT AUTO_INCREMENT,
item_id INT NOT NULL,
user_id INT NOT NULL,
PRIMARY KEY(favorite_item_id),
FOREIGN KEY fkey1(item_id)
	REFERENCES items(item_id),
FOREIGN KEY fkey2(user_id)
	REFERENCES user(user_id)
);

CREATE TABLE carts
(cart_id INT AUTO_INCREMENT,
user_id INT NOT NULL,
item_id INT NOT NULL,
cart_quantity INT NOT NULL,
PRIMARY KEY(cart_id),
FOREIGN KEY fkey1(user_id)
	REFERENCES user(user_id),
FOREIGN KEY fkey2(item_id)
	REFERENCES items(item_id)
);

CREATE TABLE purchase_histories
(purchase_id INT AUTO_INCREMENT,
user_id INT NOT NULL,
purchase_date DATE NOT NULL,
purchase_amount INT NOT NULL,
PRIMARY KEY(purchase_id),
FOREIGN KEY fkey1(user_id)
	REFERENCES user(user_id)
);

CREATE TABLE purchase_details
(purchase_deatail_id INT AUTO_INCREMENT,
purchase_id INT NOT NULL,
item_id INT NOT NULL,
item_price INT NOT NULL,
purchase_detail_quantity INT NOT NULL,
PRIMARY KEY(purchase_deatail_id),
FOREIGN KEY fkey1(purchase_id)
    REFERENCES purchase_histories(purchase_id),
FOREIGN KEY fkey2(item_id)
    REFERENCES items(item_id)
);