INSERT INTO `cash`(`cash_method`)
            VALUES  ("クレジットカード"),
                    ("代金引換"),
                    ("コンビニ決済");

INSERT INTO `workshop`( `workshop_name`, `workshop_date`, `workshop_start`, `workshop_end`, `workshop_place`, `workshop_entryfee`, `workshop_seats`, `workshop_content`)
            VALUES  ( "ワークショップ第一弾", '2022-06-15', '10:00', '12:00', "公園", 1000, 10, "レジンでオリジナル耳飾りを作ろう"),
                    ( "夏休み工作イベント", '2022-08-07', '13:00', '15:00', "公民館", 1500, 20, "ビーズでオリジナルリングを作ろう"),
                    ( "クリスマスイベント", '2022-12-20', '11:45', '13:45', "広場", 750, 5, "オリジナルアイテムを作ろう");

INSERT INTO `item_categories`(`item_category_name`)
                    VALUES  ("ネックレス"),
                            ("イヤリング"),
                            ("ピアス"),
                            ("リング"),
                            ("アイテム");

INSERT INTO `items`(`item_category_id`, `item_name`, `item_price`, `item_description`, `item_inventory`, `item_pickupflag`)
            VALUES  ( 5, "マスクチェーン1", 500, "キャンディーをモチーフにしたマスクチェーン", 5, 0),
                    ( 5, "サングラス1", 2398, "紫外線カット", 3, 0),
                    ( 5, "サングラス2", 2398, "紫外線カット", 4, 0),
                    ( 2, "特別な海月(青)", 5700, "みずみずしい海月", 2, 0),
                    ( 2, "特別な海月(紫)", 5700, "みずみずしい海月", 2, 0),
                    ( 2, "蝶の憧れ", 2000, "綺麗な蝶", 1, 0),
                    ( 2, "西日の中", 2500, "西日の輝き", 4, 0),
                    ( 2, "遊星", 2000, "遊ぶ星", 3, 0),
                    ( 2, "ヘンテコ", 1500, "手書き模様", 1, 0),
                    ( 2, "ゼリー", 2700, "ゼリーのような", 1, 0),
                    ( 2, "マカロニ(gold)", 2000, "イヤリングとピアスの2way", 1, 0),
                    ( 2, "マカロニ(silver)", 2000, "イヤリングとピアスの2way", 3, 0),
                    ( 2, "気まぐれハンドメイド赤", 1900, "気まぐれアイデア", 1, 0),
                    ( 2, "気まぐれハンドメイド金", 1900, "気まぐれアイデア", 2, 0),
                    ( 2, "気まぐれハンドメイド紫", 1900, "気まぐれアイデア", 1, 0),
                    ( 1, "ネックレス水色", 2000, "淡水パール製", 2, 0),
                    ( 1, "ネックレス青", 2000, "多色のネックレス", 1, 0),
                    ( 1, "ネックレス紫", 2000, "多色のネックレス", 6, 0),
                    ( 1, "ネックレス緑", 2000, "多色のネックレス", 8, 0),
                    ( 1, "ネックレス黄色", 2000, "多色のネックレス", 1, 0),
                    ( 3, "ゼリー", 2000, "ピアスvar", 1, 0),
                    ( 3, "自由作品", 1980, "自由気まま", 9, 0),
                    ( 3, "ノンホールピアス", 2000, "ノンホールなピアス", 1, 0),
                    ( 3, "気まぐれハンドメイド", 1900, "気まぐれアイデア", 1, 0),
                    ( 3, "マカロニ(紫)", 2000, "イヤリングとピアスの2way", 1, 0),
                    ( 3, "マカロニ(赤)", 2000, "イヤリングとピアスの2way", 3, 0),
                    ( 3, "マカロニ(白)", 2000, "イヤリングとピアスの2way", 3, 0),
                    ( 3, "蝶の憧れ", 2000, "綺麗な蝶", 1, 0),
                    ( 3, "特別な海月", 5700, "みずみずしい海月", 2, 0),
                    ( 3, "花しずく", 2200, "花のしずくみたい", 1, 0),
                    ( 4, "ダイヤの指輪(白)", 6700, "光輝くダイヤ", 1, 0),
                    ( 4, "ダイヤの指輪(青)", 7100, "青く光るダイヤ", 5, 0),
                    ( 4, "黒リング", 5800, "黒色のリング", 1, 0);
                    
INSERT INTO `item_images`(`item_id`, `item_image_order`, `item_image_path`)
                VALUES  
                        /*特別な海月(青)*/
                        ( 4, 1, "e_02"),
                        ( 4, 2, "e_04"),
                        ( 4, 3, "e_08"),
                        ( 4, 4, "e_10"),
                        /*特別な海月(紫)*/
                        ( 5, 1, "e_09"),
                        ( 5, 2, "e_10"),
                        ( 5, 3, "e_12"),
                        /*蝶の憧れ*/
                        ( 6, 1, "e_03"),
                        ( 6, 2, "e_05"),
                        ( 6, 3, "e_06"),
                        ( 6, 4, "e_07"),
                        ( 6, 5, "e_11"),
                        /*マカロニ(gold)*/
                        ( 11, 1, "i_1"),
                        ( 11, 2, "i_09"),
                        ( 11, 3, "i_10"),
                        /*ノンホールピアス*/
                        ( 23, 1, "i_02"),
                        ( 23, 2, "i_04"),
                        /*ゼリー*/
                        ( 21, 1, "i_11"),
                        ( 21, 2, "i_12"),
                        ( 21, 3, "i_13"),
                        ( 21, 4, "i_14"),
                        ( 21, 5, "i_15"),
                        ( 21, 6, "i_16"),
                        ( 21, 7, "i_17"),
                        /*マカロニ*/
                        ( 25, 1, "p_1"),
                        ( 26, 1, "p_16"),
                        ( 27, 1, "p_17"),
                        /*ヘンテコ*/
                        ( 9, 1, "p_3"),
                        ( 9, 2, "p_5"),
                        ( 9, 3, "p_8"),
                        /*花しずく*/
                        ( 30, 1, "p_18"),
                        ( 30, 2, "p_21"),
                        ( 30, 3, "p_23");