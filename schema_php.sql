
CREATE DATABASE SellingEyeglasses default charset utf8;
USE SellingEyeglasses; 

create table users (
	id_cus int auto_increment,
	name_cus varchar(255),
	address varchar(255),
	phone varchar(50),
	pass varchar(1000),
	email varchar(255),
    user_role varchar (255),
	primary key (id_cus)
);

CREATE TABLE categories(
    id_category INT AUTO_INCREMENT,
    name_category VARCHAR(255),
    PRIMARY KEY (id_category)
);

CREATE TABLE providers (
    id_provider INT AUTO_INCREMENT,
    name_provider VARCHAR(255),
    address VARCHAR(500),
    phone_num VARCHAR(20),
    email VARCHAR(250),
    PRIMARY KEY (id_provider)
);

	create table products(
	id_product int auto_increment,
	name_product varchar(255),
	quantity int,
	id_category int,
	foreign key (id_category)
	references categories(id_category),
	status varchar(255),
	date_insert datetime,
	price int,
	id_provider int,
	foreign key (id_provider)
	references providers(id_provider),
	image mediumblob,
	primary key (id_product)
	);

CREATE TABLE orders(
    id_order INT,
    id_cus INT NOT NULL,
    date_ord datetime,
    FOREIGN KEY (id_cus)
        REFERENCES users (id_cus),
    PRIMARY KEY (id_order , id_cus)
);

CREATE TABLE slides(
    id_slide INT auto_increment,
    image mediumblob,
    event varchar(255),
    PRIMARY KEY (id_slide)
);


	create table order_prod(
	id_order int not null,
	foreign key (id_order)
	references orders (id_order),
	id_product int not null,
	foreign key (id_product)
	references products (id_product),
	quantity int not null,
	primary key (id_order,id_product)
	);


insert into users (name_cus,address,phone,pass,email,user_role) values  ('admin','da nang','0123456789','qwerty','huong.nguyen@admin','admin');

insert into categories (id_category,name_category) values  (1,'Kính Nam');
insert into categories (id_category,name_category) values  (2,'Kính Nữ');
insert into categories (id_category,name_category) values  (3,'Kính Trẻ Em');
insert into categories (id_category,name_category) values  (4,'Lens');

insert into providers (name_provider,address,phone_num,email) values  ('VinCom Plaza','da nang','0123456789','huong.nguyen');
insert into providers (name_provider,address,phone_num,email) values  ('Big C','hue','0123456789','hanh.nguyen');
insert into providers (name_provider,address,phone_num,email) values  ('Vin Max','sai gon','0123456789','dieu.quach');
insert into providers (name_provider,address,phone_num,email) values  ('Asian Max','ha noi','0123456789','dieu.quach');

INSERT INTO slides (image,event) VALUES ('8.jpg','tet');
INSERT INTO slides (image,event) VALUES ('6.jpg','tet');
INSERT INTO slides (image,event) VALUES ('7.jpg','tet');

INSERT INTO `products` (`id_product`, `name_product`, `quantity`, `id_category`, `status`, `date_insert`, `price`, `id_provider`, `image`) VALUES
(1, 'TOPMAN', 15, 1, 1, '2019-01-01 00:00:00', 150000, 2, '1.jpg'),
(2, 'MANGO MAN', 2, 1, 1, '2019-01-01 00:00:00', 250000, 1, '2.jpg'),
(3, 'POLICE', 5, 1, 0, '2019-01-01 00:00:00', 2000000, 2, '3.jpg'),
(4, 'NIKE', 6, 1, 1, '2019-01-01 00:00:00', 3000000, 3, '4.jpg'),
(5, 'RAY-BAN', 9, 1, 0, '2019-01-01 00:00:00', 4000000, 1, '5.jpg'),
(6, 'GENTLE MONSTER', 8, 1, 1, '2019-01-01 00:00:00', 5000000, 2, '6.jpg'),
(7, 'D-FRAME ACETATE', 7, 1, 0, '2019-01-01 00:00:00', 6000000, 2, '7.jpg'),
(8, 'STEVE MCQUEEN', 4, 1, 1, '2019-01-01 00:00:00', 7000000, 1, '8.jpg'),
(9, 'BENEDICT GOLD', 5, 1, 0, '2019-01-01 00:00:00', 5000000, 2, '9.jpg'),
(10, 'SPITFIRE', 6, 1, 1, '2019-01-01 00:00:00', 3000000, 1, '10.jpg'),
(11, 'RAYBAN WAYFARER', 32, 1, 0, '2019-01-01 00:00:00', 4000000, 2, '11.jpg'),
(12, 'HAVANA GOLD MIRROR ', 2, 1, 1, '2019-01-01 00:00:00', 8000000, 3, '12.jpg'),
(13, 'LILY MAYMAC', 523, 2, 0, '2019-01-01 00:00:00', 9000000, 2, '13.jpg'),
(14, 'DOLCE & GABBANA', 25, 2, 1, '2019-01-01 00:00:00', 6000000, 3, '14.jpeg'),
(15, 'GUCCI', 2, 2, 0, '2019-01-01 00:00:00', 4000000, 1, '15.jpg'),
(16, 'DIOR', 5, 2, 1, '2019-01-01 00:00:00', 8800000, 2, '16.jpg'),
(17, 'PRADA', 6, 2, 0, '2019-01-01 00:00:00', 3000000, 1, '17.jpg'),
(18, 'FENDI', 8, 2, 1, '2019-01-01 00:00:00', 7000000, 2, '18.jpeg'),
(19, 'TOM FORD', 9, 2, 0, '2019-01-01 00:00:00', 5500000, 3, '19.jpg'),
(20, 'THOM BROWNE', 7, 2, 1, '2019-01-01 00:00:00', 900150, 1, '20.jpg'),
(21, 'RAYBAN', 8, 2, 1, '2019-01-01 00:00:00', 6000000, 2, '21.jpg'),
(22, 'LINDA FARROW', 9, 2, 0, '2019-01-01 00:00:00', 7000000, 3, '22.jpg'),
(23, 'BOTTEGA VENETA', 5, 2, 1, '2019-01-01 00:00:00', 3200000, 1, '23.jpg'),
(24, 'MAISON MARGIELA', 6, 2, 0, '2019-01-01 00:00:00', 4500000, 2, '24.jpg'),
(25, 'KÍNH ÁP TRÒNG EVE BROWN', 7, 3, 1, '2019-01-01 00:00:00', 6500000, 3, '25.jpg'),
(26, 'KÍNH ÁP TRÒNG EVE GRAY', 98, 3, 0, '2019-01-01 00:00:00', 5200000, 1, '26.jpg'),
(27, 'KÍNH ÁP TRÒNG SILICONE HYDROGEL VENUS GRAY', 98, 3, 1, '2019-01-01 00:00:00', 120000, 2, '27.jpg'),
(28, 'KÍNH ÁP TRÒNG SILICONE HYDROGEL CUPID BROWN', 65, 3, 0, '2019-01-01 00:00:00', 230000, 1, '28.jpg'),
(29, 'KÍNH ÁP TRÒNG SILICONE HYDROGEL OPAL BROWN( M?T MÈO NÂU)', 65, 3, 1, '2019-01-01 00:00:00', 520000, 2, '29.jpg'),
(30, 'KÍNH ÁP TRÒNG SILICONE HYDROGEL CUPID BROWN', 48, 3, 0, '2019-01-01 00:00:00', 820000, 1, '30.jpg'),
(31, 'KÍNH ÁP TRÒNG SILICONE HYDROGEL RUSIAN BROWN', 59, 3, 1, '2019-01-01 00:00:00', 890000, 2, '31.jpg'),
(32, 'KÍNH ÁP TRÒNG SILICONE HYDROGEL VENUS BROWN', 68, 3, 0, '2019-01-01 00:00:00', 366520, 1, '32.jpg'),
(33, 'KÍNH ÁP TRÒNG SILICONE HYDROGEL SNOWBALL BROWN', 69, 3, 1, '2019-01-01 00:00:00', 220000, 2, '33.jpg'),
(34, 'KÍNH ÁP TRÒNG SILICONE HYDROGEL TOPAZ CHOCO( HOÀNG NG?C SOCOLA)', 59, 3, 0, '2019-01-01 00:00:00', 300000, 1, '34.jpg'),
(35, 'KÍNH ÁP TRÒNG SILICONE HYDROGEL SNOWBALL GRAY', 85, 3, 1, '2019-01-01 00:00:00', 400000, 2, '35.jpg'),
(36, 'KÍNH ÁP TRÒNG SILICONE HYDROGEL OPAL AMBER( M?T MÈO H? PHÁCH)', 96, 3, 0, '2019-01-01 00:00:00', 500000, 3, '36.jpg'),
(37, 'MẮT KÍNH TRẺ EM GRIL AND BOY', 8, 4, 1, '2019-01-01 00:00:00', 300000, 2, '37.png'),
(38, 'MẮT KÍNH TRẺ EM GATEWAY', 9, 4, 0, '2019-01-01 00:00:00', 400000, 1, '38.png'),
(39, 'MẮT KÍNH TRẺ EM SECG 5007 C1', 8, 4, 1, '2019-01-01 00:00:00', 120000, 2, '39.png'),
(40, 'MẮT KÍNH TRẺ EM V-IDOL', 5, 4, 0, '2019-01-01 00:00:00', 450000, 1, '40.png'),
(41, 'MẮT KÍNH TRẺ EM VELOCITY', 98, 4, 1, '2019-01-01 00:00:00', 320000, 2, '41.png'),
(42, 'MẮT KÍNH TRẺ EM DISNEYFROZEN', 9, 4, 0, '2019-01-01 00:00:00', 420000, 3, '42.png'),
(43, 'MẮT KÍNH TRẺ EM XSPICE', 6, 4, 1, '2019-01-01 00:00:00', 520000, 2, '43.png'),
(44, 'MẮT KÍNH TRẺ EM SUNKID\'D', 9, 4, 0, '2019-01-01 00:00:00', 550000, 1, '44.jpg'),
(45, 'MẮT KÍNH TRẺ EM H&M', 8, 4, 1, '2019-01-01 00:00:00', 600000, 2, '45.jpg'),
(46, 'MẮT KÍNH TRẺ EM GYMBORRE', 9, 4, 0, '2019-01-01 00:00:00', 450000, 3, '46.jpg'),
(47, 'MẮT KÍNH TRẺ EM GOLDSUN 5008 F3', 9, 4, 1, '2019-01-01 00:00:00', 200000, 2, '47.jpg'),
(48, 'MẮT KÍNH TRẺ EM GOLDSUN 3008 T6', 6, 4, 0, '2019-01-01 00:00:00', 300000, 1, '48.jpg');


