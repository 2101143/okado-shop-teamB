INSERT INTO `cash`(`cash_method`)
            VALUES  ("クレジットカード"),
                    ("代金引換"),
                    ("コンビニ決済");

INSERT INTO `workshop`( `workshop_name`, `workshop_date`, `workshop_start`, `workshop_end`, `workshop_place`, `workshop_entryfee`, `workshop_seats`, `workshop_content`)
            VALUES ("workshop1", '2022-12-01', '12:00', '13:00', "cafeteria1", 1000, 3, "ワークショップ１"),
                    ("workshop1", '2022-12-01', '12:00', '13:00', "cafeteria1", 1000, 3, "ワークショップ１"),
                    ("workshop1", '2022-12-01', '12:00', '13:00', "cafeteria1", 1000, 3, "ワークショップ１");

INSERT INTO `item_categories`(`item_category_name`)
            VALUES ("ネックレス"),
                    (""),
                    (""),
                    ("");

VALUES ("", '', '', '', "", , , ""),
        ("", '', '', '', "", , , ""),
        ("", '', '', '', "", , , ""),
        ("", '', '', '', "", , , "");

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