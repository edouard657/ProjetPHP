CREATE TABLE article (
        id INTEGER PRIMARY KEY,
        title TEXT,
        price REAL,
        cover TEXT,
        category INTEGER,
        description text,
        FOREIGN KEY(category) REFERENCES category(id)
);

CREATE TABLE category (
        id INTEGER PRIMARY KEY,
        title TEXT
);