USE product_db;

GRANT ALL PRIVILEGES ON product_db.* TO 'user'@'%';

FLUSH PRIVILEGES;


CREATE TABLE IF NOT EXISTS products(
    sku VARCHAR(20) NOT NULL,
    prod_name VARCHAR(40) NOT NULL,
    price FLOAT(8,2) NOT NULL,
    PRIMARY KEY(sku)
);

CREATE TABLE IF NOT EXISTS dvd(
    sku VARCHAR(20) NOT NULL,
    size_mb INT,
    PRIMARY KEY (sku),
    FOREIGN KEY (sku) REFERENCES products(sku)
);

CREATE TABLE IF NOT EXISTS book(
    sku VARCHAR(20) NOT NULL,
    weight_kg INT,
    PRIMARY KEY (sku),
    FOREIGN KEY (sku) REFERENCES products(sku)
);

CREATE TABLE IF NOT EXISTS furniture(
    sku VARCHAR(20) NOT NULL,
    dimensions VARCHAR(20),
    PRIMARY KEY (sku),
    FOREIGN KEY (sku) REFERENCES products(sku)
);