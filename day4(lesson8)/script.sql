CREATE TABLE categories (
    id INT PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(255) NOT NULL
);


CREATE TABLE products (
    id INT PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(255) NOT NULL,
    category_id INT NOT NULL,
    FOREIGN KEY (category_id) REFERENCES categories(id)
);

INSERT INTO categories(id,name) VALUES
(1,'Fruit'),
(2,'Bakery'),
(3,'Dry Goods'),
(4,'Vegatable');

INSERT INTO products(id,name,category_id) VALUES
(1,'Aple',1),
(2,'Bananas',1),
(3,'Bread',2),
(4,'Cake',2);
(5,'Pasta',3),
(6,'Rice',3),
