
CREATE TABLE produk (
sku VARCHAR (10), 
nama VARCHAR (20),
kategori VARCHAR (25),
stok INT,
harga INT
); 

ALTER TABLE produk
ADD PRIMARY KEY (sku);

INSERT INTO produk (sku,nama,kategori,stok,harga)
VALUES ('p1','mie instan','makanan','40','3000')
SELECT * FROM produk;
