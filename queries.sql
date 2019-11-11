INSERT INTO user (date_of_registration,email,name,password,contacts) values
('2019-11-12 22:36:00','ivanova@it.com','Ivanova','0507','Sample text'),
('2019-11-13 22:36:00','ivano@it.com','Ivanov','1234','Sample text');
INSERT INTO category (title,code) values
('Доски и лыжи','boards'),
('Крепления','attachment'),
('Ботинки','boots'),
('Одежда','clothing'),
('Инструменты','tools'),
('Разное','other');


 INSERT INTO lot (name,category_id,author_id,winner_id,starting_price,bid_step,image,expiration_date,description,creation_date) values
('2014 Rossignol District Snowboard', '2', '2','1','10999','500','img/lot-1.jpg','2019-12-24','sample text','2019-11-11 22:44:00'),
('DC Ply Mens 2016/2017 Snowboard', '3', '1','2','159999','400','img/lot-2.jpg','2019-12-24','sample text','2019-11-11 22:44:00'),
('Крепления Union Contact Pro 2015 года размер L/XL', '4', '2','1','8000','300','img/lot-3.jpg','2019-12-24','sample text','2019-11-11 22:44:00'),
('Ботинки для сноуборда DC Mutiny Charocal', '5', '1','2','10999','200','img/lot-4.jpg','2019-12-24','sample text','2019-11-11 22:44:00'),
('Куртка для сноуборда DC Mutiny Charocal', '6', '2','1','7500','100','img/lot-5.jpg','2019-12-24','sample text','2019-11-11 22:44:00'),
('"Маска Oakley Canopy', '7', '1','2','5400','250','img/lot-6.jpg','2019-12-24','sample text','2019-11-11 22:44:00');
INSERT INTO bid (date,amount,user_id,lot_id) values
('2019-11-11 23:10:00','11250','2','1');


-- получить все категории;
SELECT * FROM category;

-- получить самые новые, открытые лоты. Каждый лот должен включать название, стартовую цену, ссылку на изображение, цену, название категории;
SELECT name, starting_price, image, category_id FROM lot i
JOIN category c
ON i.category_id = c.id
ORDER BY creation_date ASC;

-- показать лот по его id. Получите также название категории, к которой принадлежит лот;
SELECT * FROM lot i
JOIN category  c
ON i.category_id = c.id
WHERE i.id = 1;

-- обновить название лота по его идентификатору;
UPDATE lot SET name = '2014 Rossignol District Snowboard 2'
WHERE id = 1;

 -- получить список ставок для лота по его идентификатору с сортировкой по дате.
SELECT amount FROM bid b
JOIN lot i
ON lot_id = i.id
WHERE i.id = 1
ORDER BY i.creation_date ASC;

CREATE UNIQUE INDEX emailkey ON user(email);
