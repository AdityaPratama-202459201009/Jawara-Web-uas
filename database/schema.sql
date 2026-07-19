CREATE TABLE IF NOT EXISTS kategori (
    id INTEGER PRIMARY KEY AUTOINCREMENT,
    nama_kategori TEXT NOT NULL
);

CREATE TABLE IF NOT EXISTS kosakata (
    id INTEGER PRIMARY KEY AUTOINCREMENT,
    kata_jawa TEXT NOT NULL,
    arti_indonesia TEXT NOT NULL,
    kategori_id INTEGER NOT NULL,
    FOREIGN KEY (kategori_id) REFERENCES kategori(id)
);