INSERT INTO `cash`(`cash_method`)
            VALUES  ("クレジットカード"),
                    ("代金引換"),
                    ("コンビニ決済");

"" = 文字列
'' = 日付,時刻
なし= 半角数字

INSERT INTO `workshop`( `workshop_name`, `workshop_date`, `workshop_start`, `workshop_end`, `workshop_place`, `workshop_entryfee`, `workshop_seats`, `workshop_content`)
            VALUES  ( "イベントタイトル", 'yyyy-mm-dd（開催日）', 'hh:mm（開始時刻）', 'hh:mm（終了時刻）', "会場(カフェや公園など)", 参加費（５００～２０００）, 席数（２～２０）, "ワークショップの内容~~"),
                    ( "", '', '', '', "", , , ""),
                    ( "", '', '', '', "", , , ""),
                    ( "", '', '', '', "", , , "");

INSERT INTO `item_categories`(`item_category_name`)
                    VALUES  ("ネックレス"),
                            (""),
                            (""),
                            (""),
                            ("");

INSERT INTO `items`(`item_category_id`, `item_name`, `item_price`, `item_description`, `item_inventory`, `item_pickupflag`)
            VALUES  (該当するカテゴリーID, "商品名", 価格（５００～）, "商品説明", 在庫数（１～１０）, 0),
                *1  ( , "", , "", , 0),
                    ( , "", , "", , 0),
                    ( , "", , "", , 0),
                    ( , "", , "", , 0),
                    ( , "", , "", , 0),
                    ( , "", , "", , 0),
                    ( , "", , "", , 0),
                    ( , "", , "", , 0),
                    ( , "", , "", , 0),
                *10 ( , "", , "", , 0),
                    ( , "", , "", , 0),
                    ( , "", , "", , 0),
                    ( , "", , "", , 0),
                    ( , "", , "", , 0),
                    ( , "", , "", , 0),
                    ( , "", , "", , 0),
                    ( , "", , "", , 0),
                    ( , "", , "", , 0),
                    ( , "", , "", , 0),
                *20 ( , "", , "", , 0),
                    ( , "", , "", , 0),
                    ( , "", , "", , 0),
                    ( , "", , "", , 0),
                    ( , "", , "", , 0),
                    ( , "", , "", , 0),
                    ( , "", , "", , 0),
                    ( , "", , "", , 0),
                    ( , "", , "", , 0),
                    ( , "", , "", , 0),
                *30 ( , "", , "", , 0),
                    ( , "", , "", , 0),
                    ( , "", , "", , 0),
                    ( , "", , "", , 0),
                    ( , "", , "", , 0),
                    ( , "", , "", , 0),
                    ( , "", , "", , 0),
                    ( , "", , "", , 0),
                    ( , "", , "", , 0),
                    ( , "", , "", , 0),
                *40 ( , "", , "", , 0),
                    ( , "", , "", , 0),
                    ( , "", , "", , 0),
                    ( , "", , "", , 0),
                    ( , "", , "", , 0),
                    ( , "", , "", , 0),
                    ( , "", , "", , 0),
                    ( , "", , "", , 0),
                    ( , "", , "", , 0),
                    ( , "", , "", , 0),
                *50 ( , "", , "", , 0),
                    ( , "", , "", , 0),
                    ( , "", , "", , 0),
                    ( , "", , "", , 0),
                    ( , "", , "", , 0),
                    ( , "", , "", , 0),
                    ( , "", , "", , 0),
                    ( , "", , "", , 0),
                    ( , "", , "", , 0),
                    ( , "", , "", , 0),
                *60 ( , "", , "", , 0),
                    ( , "", , "", , 0),
                    ( , "", , "", , 0),
                    ( , "", , "", , 0),
                    ( , "", , "", , 0),
                    ( , "", , "", , 0),
                    ( , "", , "", , 0),
                    ( , "", , "", , 0);
                    
INSERT INTO `item_images`(`item_id`, `item_image_order`, `item_image_path`)
                VALUES  ( 対応する商品ID, 商品画像の表示順番, "商品画像のパス"),
                    *1  ( , , ""),
                        ( , , ""),
                        ( , , ""),
                        ( , , ""),
                        ( , , ""),
                        ( , , ""),
                        ( , , ""),
                        ( , , ""),
                        ( , , ""),
                    *10 ( , , ""),
                        ( , , ""),
                        ( , , ""),
                        ( , , ""),
                        ( , , ""),
                        ( , , ""),
                        ( , , ""),
                        ( , , ""),
                        ( , , ""),
                        ( , , ""),
                    *20 ( , , ""),
                        ( , , ""),
                        ( , , ""),
                        ( , , ""),
                        ( , , ""),
                        ( , , ""),
                        ( , , ""),
                        ( , , ""),
                        ( , , ""),
                        ( , , ""),
                    *30 ( , , ""),
                        ( , , ""),
                        ( , , ""),
                        ( , , ""),
                        ( , , ""),
                        ( , , ""),
                        ( , , ""),
                        ( , , ""),
                        ( , , ""),
                        ( , , ""),
                    *40 ( , , ""),
                        ( , , ""),
                        ( , , ""),
                        ( , , ""),
                        ( , , ""),
                        ( , , ""),
                        ( , , ""),
                        ( , , ""),
                        ( , , ""),
                        ( , , ""),
                    *50 ( , , ""),
                        ( , , ""),
                        ( , , ""),
                        ( , , ""),
                        ( , , ""),
                        ( , , ""),
                        ( , , ""),
                        ( , , ""),
                        ( , , ""),
                        ( , , ""),
                    *60 ( , , ""),
                        ( , , ""),
                        ( , , ""),
                        ( , , ""),
                        ( , , ""),
                        ( , , ""),
                        ( , , ""),
                        ( , , "");