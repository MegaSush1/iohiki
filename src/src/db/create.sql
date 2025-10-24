CREATE USER 'iohiki_root'@'localhost' IDENTIFIED BY 'bigpancake';
GRANT ALL PRIVILEGES ON iohiki_data.* TO 'iohiki_root'@'localhost';

CREATE DATABASE iohiki_data;

USE iohiki_data;

CREATE TABLE clients(
    UID VARCHAR(24) NOT NULL UNIQUE,
    name VARCHAR(255) NOT NULL,
    surname VARCHAR(255),
    mail VARCHAR(255) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL,
    create_date DATE NOT NULL,
    PRIMARY KEY (UID, mail)
) Engine=InnoDB;

CREATE TABLE artistes(
    UID VARCHAR(24) NOT NULL UNIQUE,
    surname VARCHAR(255) NOT NULL,
    mail VARCHAR(255) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL,
    create_date DATE NOT NULL,
    PRIMARY KEY (UID, mail)
) Engine=InnoDB;

CREATE TABLE albums(
    UID VARCHAR(24) NOT NULL UNIQUE,
    title VARCHAR(255) NOT NULL,
    artistes_UID VARCHAR(24) NOT NULL,
    create_date DATE NOT NULL,
    genre VARCHAR(255) NOT NULL,
    subgenre VARCHAR(255),
    PRIMARY KEY (UID),
    CONSTRAINT FK_albums_artistes FOREIGN KEY (artistes_UID) REFERENCES artistes(UID)
) Engine=InnoDB;

CREATE TABLE songs(
    UID VARCHAR(24) NOT NULL UNIQUE,
    title VARCHAR(255) NOT NULL,
    artistes_UID VARCHAR(24) NOT NULL,
    album_UID VARCHAR(24),
    create_date DATE NOT NULL,
    genre VARCHAR(255) NOT NULL,
    subgenre VARCHAR(255),
    views BIGINT DEFAULT 0,
    PRIMARY KEY (UID),
    CONSTRAINT FK_songs_albums FOREIGN KEY (album_UID) REFERENCES albums(UID),
    CONSTRAINT FK_songs_artistes FOREIGN KEY (artistes_UID) REFERENCES artistes(UID)
) Engine=InnoDB;

CREATE TABLE podcasts(
    UID VARCHAR(24) NOT NULL UNIQUE,
    title VARCHAR(255) NOT NULL,
    artistes_UID VARCHAR(24) NOT NULL,
    create_date DATE NOT NULL,
    PRIMARY KEY (UID),
    CONSTRAINT FK_podcasts_artistes FOREIGN KEY (artistes_UID) REFERENCES artistes(UID)
) Engine=InnoDB;

CREATE TABLE episodes(
    UID VARCHAR(24) NOT NULL UNIQUE,
    title VARCHAR(255) NOT NULL,
    podcasts_UID VARCHAR(24) NOT NULL,
    create_date DATE NOT NULL,
    views BIGINT DEFAULT 0,
    PRIMARY KEY (UID),
    CONSTRAINT FK_episodes_podcasts FOREIGN KEY (podcasts_UID) REFERENCES podcasts(UID)
) Engine=InnoDB;

CREATE TABLE like_content(
    ID INT NOT NULL UNIQUE AUTO_INCREMENT,
    content_type INT NOT NULL,
    UID_content VARCHAR(24) NOT NULL,
    UID_user VARCHAR(24) NOT NULL,
    PRIMARY KEY (ID),
    CONSTRAINT FK_content_podcasts FOREIGN KEY (UID_content) REFERENCES podcasts(UID),
    CONSTRAINT FK_content_episodes FOREIGN KEY (UID_content) REFERENCES episodes(UID),
    CONSTRAINT FK_content_songs FOREIGN KEY (UID_content) REFERENCES songs(UID),
    CONSTRAINT FK_content_albums FOREIGN KEY (UID_content) REFERENCES albums(UID),
    CONSTRAINT FK_user FOREIGN KEY (UID_user) REFERENCES clients(UID)
) Engine=InnoDB;

INSERT INTO clients(UID, name, surname, mail, password, create_date)
VALUES ("USSfCXQGtNwxx1mxgzW3U4n", "sushi","", "sushi@pancake.com", "ferrarie",CURRENT_DATE());

INSERT INTO clients(UID, name, surname, mail, password, create_date)
VALUES ("BGbQ5E9U7fLebc6nZRBKBXV", "Lambert","Rober", "lambert@gmail.com", "poireau",CURRENT_DATE());