1. Tạo bảng products
CREATE TABLE products (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    old_price DECIMAL(15,2),
    price DECIMAL(15,2) NOT NULL,
    discount INT DEFAULT 0,
    image VARCHAR(500),
    rating FLOAT DEFAULT 0,
    category VARCHAR(100)
);


2. Tạo bảng product_details
CREATE TABLE product_details (
    id INT PRIMARY KEY,   -- trùng với id bên bảng products
    description TEXT,
    specifications TEXT,
    warranty VARCHAR(100),
    brand VARCHAR(100),
);
3.Tạo bảng users
CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(100) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

4.Tạo bảng cart
CREATE TABLE cart (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(100) NOT NULL,
    product_id INT NOT NULL,
    quantity INT DEFAULT 1,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
5. Tạo bảng orders
CREATE TABLE orders (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(100) NOT NULL,
    fullname VARCHAR(255),
    phone VARCHAR(20),
    address TEXT,
    payment_method VARCHAR(50),
    total_amount DECIMAL(15,2),
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
6. Tạo bảng order_items
CREATE TABLE order_items (
    id INT AUTO_INCREMENT PRIMARY KEY,
    order_id INT,
    product_id INT,
    quantity INT,
    price DECIMAL(15,2),
    FOREIGN KEY (order_id) REFERENCES orders(id)
);
