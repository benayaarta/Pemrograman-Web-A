CREATE TABLE bio (
npm VARCHAR (20), 
nama VARCHAR (25),
tempat_lahir VARCHAR (25),
tanggal_lahir DATE,
jenis_kelamin VARCHAR (1), 
alamat VARCHAR (20)
); 
CREATE TABLE education (
sekolah VARCHAR(20),
tahun_lulus VARCHAR(5)
);
INSERT INTO bio(npm,nama,tempat_lahir,tanggal_lahir,jenis_kelamin,alamat) 
VALUES ('18081010037','Benaya Arta Hendratri','bengkulu','1999-10-21','L','Nganjuk');
INSERT INTO education (sekolah,tahun_lulus)
VALUES ('SDN Begadung I','2013'),('SMPN 4 Nganjuk','2016'),('SMAN 3 NGANJUK','2018'),('UPN VETERAN JATIM','');
SELECT * FROM bio;
SELECT * FROM education;
	