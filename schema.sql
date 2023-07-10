creata database regime

use regime

CREATE table gender (
    id              int auto_increment PRIMARY KEY,
    gender          VARCHAR(30)
);

INSERT into gender (gender) VALUES ('Homme'),('Femme');

create table user (
    id              int auto_increment PRIMARY key,
    firstname       VARCHAR(30),
    name            VARCHAR(30),
    birthday        date,
    mail            VARCHAR(50),
    id_gender       int,
    size            DECIMAL(3,3),
    weigth          DECIMAL(3,3),
    password        VARCHAR(30)
);

INSERT INTO user (firstname, name, birthday, mail, id_gender, size, weigth, password)
VALUES ('John', 'Doe', '1990-05-15', 'john.doe@example.com', 1, 180.5, 75.2, 'password123'),
        ('Andrianotahina', 'Kanto', '2003-08-21', 'kanto@gmail.com', 1, 170.5, 67, '123'),
        ('Razafimiandrisoa', 'Tendry', '2003-04-04', 'tendry@gmail.com', 1, 165.5, 50, '456'),
        ('Razafimiandrisoa', 'Tendry', '2003-04-04', 'tendry@gmail.com', 1, 165.5, 50, '456'),
        ('Raherinirina', 'Mino', '2002-04-09', 'mino@gmail.com', 2, 160, 47, '789'),
        ('Jane', 'Smith', '1985-09-22', 'jane.smith@example.com', 2, 165.8, 60.7, 'pass456');




