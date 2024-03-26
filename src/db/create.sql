CREATE USER 'iohiki_root'@'localhost' IDENTIFIED BY 'bigpancake';

CREATE DATABASE iohiki_data;

USE iohiki_data;


CREATE TABLE clients(
    ID INT NOT NULL auto_increment,
    UID VARCHAR(24) NOT NULL,
    name VARCHAR(255) NOT NULL,
    surname VARCHAR(255),
    mail VARCHAR(255) NOT NULL,
    password VARCHAR(255) NOT NULL,
    create_date DATE NOT NULL,
    PRIMARY KEY (ID,UID)
);


CREATE TABLE artistes(
    ID INT NOT NULL auto_increment,
    UID VARCHAR(24) NOT NULL,
    surname VARCHAR(255) NOT NULL,
    mail VARCHAR(255) NOT NULL,
    password VARCHAR(255) NOT NULL,
    create_date DATE NOT NULL,
    PRIMARY KEY (ID,UID)
);


CREATE TABLE albums(
    ID INT NOT NULL auto_increment,
    UID VARCHAR(24) NOT NULL,
    title VARCHAR(255) NOT NULL,
    artistes_UID VARCHAR(24) NOT NULL,
    create_date DATE NOT NULL,
    PRIMARY KEY (ID,UID),
    CONSTRAINT FK_albums_uid FOREIGN KEY (UID) REFERENCES UID(UID),
    CONSTRAINT FK_albums_artistes FOREIGN KEY (artistes_UID) REFERENCES artistes(UID)
);


CREATE TABLE songs(
    ID INT NOT NULL auto_increment,
    UID VARCHAR(24) NOT NULL,
    title VARCHAR(255) NOT NULL,
    artistes_UID VARCHAR(24) NOT NULL,
    album_UID VARCHAR(24),
    create_date DATE NOT NULL,
    PRIMARY KEY (ID,UID),
    CONSTRAINT FK_songs_albums FOREIGN KEY (album_UID) REFERENCES albums(UID),
    CONSTRAINT FK_songs_artistes FOREIGN KEY (artistes_UID) REFERENCES artistes(UID)
);


CREATE TABLE podcasts(
    ID INT NOT NULL auto_increment,
    UID VARCHAR(24) NOT NULL,
    title VARCHAR(255) NOT NULL,
    artistes_UID VARCHAR(24) NOT NULL,
    create_date DATE NOT NULL,
    PRIMARY KEY (ID,UID),
    CONSTRAINT FK_podcasts_artistes FOREIGN KEY (artistes_UID) REFERENCES artistes(UID)
);


CREATE TABLE episodes(
    ID INT NOT NULL auto_increment,
    UID VARCHAR(24) NOT NULL,
    title VARCHAR(255) NOT NULL,
    podcasts_UID VARCHAR(24) NOT NULL,
    create_date DATE NOT NULL,
    PRIMARY KEY (ID,UID),
    CONSTRAINT FK_episodes_podcasts FOREIGN KEY (podcasts_UID) REFERENCES podcasts(UID)
);