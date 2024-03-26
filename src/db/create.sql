CREATE USER 'iohiki_root'@'localhost' IDENTIFIED BY 'bigpancake';

CREATE DATABASE iohiki_data;

USE iohiki_data;

CREATE TABLE clients(
    UID VARCHAR(24) NOT NULL,
    name VARCHAR(255) NOT NULL,
    surname VARCHAR(255),
    mail VARCHAR(255) NOT NULL,
    password VARCHAR(255) NOT NULL,
    create_date DATE NOT NULL,
    PRIMARY KEY (UID)
) Engine=InnoDB;

CREATE TABLE artistes(
    UID VARCHAR(24) NOT NULL,
    surname VARCHAR(255) NOT NULL,
    mail VARCHAR(255) NOT NULL,
    password VARCHAR(255) NOT NULL,
    create_date DATE NOT NULL,
    PRIMARY KEY (UID)
) Engine=InnoDB;

CREATE TABLE albums(
    UID VARCHAR(24) NOT NULL,
    title VARCHAR(255) NOT NULL,
    artistes_UID VARCHAR(24) NOT NULL,
    create_date DATE NOT NULL,
    genre VARCHAR(255) NOT NULL,
    subgenre VARCHAR(255),
    PRIMARY KEY (UID),
    CONSTRAINT FK_albums_artistes FOREIGN KEY (artistes_UID) REFERENCES artistes(UID)
) Engine=InnoDB;

CREATE TABLE songs(
    UID VARCHAR(24) NOT NULL,
    title VARCHAR(255) NOT NULL,
    artistes_UID VARCHAR(24) NOT NULL,
    album_UID VARCHAR(24),
    create_date DATE NOT NULL,
    genre VARCHAR(255) NOT NULL,
    subgenre VARCHAR(255),
    PRIMARY KEY (UID),
    CONSTRAINT FK_songs_albums FOREIGN KEY (album_UID) REFERENCES albums(UID),
    CONSTRAINT FK_songs_artistes FOREIGN KEY (artistes_UID) REFERENCES artistes(UID)
) Engine=InnoDB;

CREATE TABLE podcasts(
    UID VARCHAR(24) NOT NULL,
    title VARCHAR(255) NOT NULL,
    artistes_UID VARCHAR(24) NOT NULL,
    create_date DATE NOT NULL,
    PRIMARY KEY (UID),
    CONSTRAINT FK_podcasts_artistes FOREIGN KEY (artistes_UID) REFERENCES artistes(UID)
) Engine=InnoDB;

CREATE TABLE episodes(
    UID VARCHAR(24) NOT NULL,
    title VARCHAR(255) NOT NULL,
    podcasts_UID VARCHAR(24) NOT NULL,
    create_date DATE NOT NULL,
    PRIMARY KEY (UID),
    CONSTRAINT FK_episodes_podcasts FOREIGN KEY (podcasts_UID) REFERENCES podcasts(UID)
) Engine=InnoDB;