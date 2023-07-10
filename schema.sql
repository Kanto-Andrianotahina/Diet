creata database regime

use regime

CREATE TABLE gender (
    id              INT AUTO_INCREMENT PRIMARY KEY,
    gender          VARCHAR(30)
);

INSERT INTO gender (gender) VALUES ('Homme'),('Femme');

CREATE TABLE user (
    id              INT AUTO_INCREMENT PRIMARY KEY,
    firstname       VARCHAR(30),
    name            VARCHAR(30),
    birthday        DATE,
    mail            VARCHAR(50),
    id_gender       INT,
    size            double,
    weigth          double,
    password        VARCHAR(30),
    FOREIGN KEY (id_gender) REFERENCES GENDER(ID)
);

INSERT INTO user (firstname, name, birthday, mail, id_gender, size, weigth, password)
VALUES ('John', 'Doe', '1990-05-15', 'john.doe@example.com', 1, 180.5, 75.2, 'password123'),
        ('Andrianotahina', 'Kanto', '2003-08-21', 'kanto@gmail.com', 1, 170.5, 67, '123'),
        ('Razafimiandrisoa', 'Tendry', '2003-04-04', 'tendry@gmail.com', 1, 165.5, 50, '456'),
        ('Razafimiandrisoa', 'Tendry', '2003-04-04', 'tendry@gmail.com', 1, 165.5, 50, '456'),
        ('Raherinirina', 'Mino', '2002-04-09', 'mino@gmail.com', 2, 160, 47, '789'),
        ('Jane', 'Smith', '1985-09-22', 'jane.smith@example.com', 2, 165.8, 60.7, 'pass456');

create table state (
    id              INT AUTO_INCREMENT PRIMARY KEY,
    VALUE           VARCHAR(30)
);
insert into STATE (VALUE) VALUES ('disponible'),('non disponible');

CREATE table code (
    id              INT AUTO_INCREMENT PRIMARY KEY,
    num_code        NUMERIC,
    price           DOUBLE,
    id_state           INT ,
    FOREIGN KEY (id_state) REFERENCES state(id)
);





