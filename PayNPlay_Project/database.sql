
CREATE DATABASE IF NOT EXISTS paynplay;
USE paynplay;

CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    email VARCHAR(100) UNIQUE NOT NULL,
    password VARCHAR(255) NOT NULL,
    wallet_balance DECIMAL(15,2) DEFAULT 0.00
);

CREATE TABLE games (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    category ENUM('Top-Up Langsung', 'Voucher') NOT NULL,
    image_url VARCHAR(255)
);

CREATE TABLE items (
    id INT AUTO_INCREMENT PRIMARY KEY,
    game_id INT,
    item_name VARCHAR(100) NOT NULL,
    price DECIMAL(15,2) NOT NULL,
    FOREIGN KEY (game_id) REFERENCES games(id)
);

CREATE TABLE transactions (
    id INT AUTO_INCREMENT PRIMARY KEY,
    user_id INT,
    game_id INT,
    item_id INT,
    game_user_id VARCHAR(50),
    server_id VARCHAR(50),
    payment_method VARCHAR(50),
    total_price DECIMAL(15,2),
    status ENUM('Pending', 'Sukses', 'Gagal') DEFAULT 'Pending',
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (user_id) REFERENCES users(id),
    FOREIGN KEY (game_id) REFERENCES games(id),
    FOREIGN KEY (item_id) REFERENCES items(id)
);

-- Dummy Data
INSERT INTO users (name, email, password, wallet_balance) VALUES ('Budi', 'budi@email.com', '$2y$10$dummyhash', 125000);
INSERT INTO games (name, category) VALUES ('Starfall Arena', 'Top-Up Langsung'), ('Dragon Rift', 'Top-Up Langsung'), ('Pixel Racers', 'Voucher');
INSERT INTO items (game_id, item_name, price) VALUES (1, '100 Diamonds', 26000), (1, '500 Diamonds', 130000);
