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
    password        VARCHAR(30),
    FOREIGN KEY (id_gender) REFERENCES GENDER(ID)
);

INSERT INTO user (firstname, name, birthday, mail, id_gender, password)
VALUES ('John', 'Doe', '1990-05-15', 'john.doe@example.com', 1, 'password123'),
        ('Andrianotahina', 'Kanto', '2003-08-21', 'kanto@gmail.com', 1, '123'),
        ('Razafimiandrisoa', 'Tendry', '2003-04-04', 'tendry@gmail.com', 1, '456'),
        ('Razafimiandrisoa', 'Tendry', '2003-04-04', 'tendry@gmail.com', 1, '456'),
        ('Raherinirina', 'Mino', '2002-04-09', 'mino@gmail.com', 2, '789'),
        ('Jane', 'Smith', '1985-09-22', 'jane.smith@example.com', 2, 'pass456');

CREATE table code (
    id              INT AUTO_INCREMENT PRIMARY KEY,
    num_code        NUMERIC UNIQUE,
    price           DOUBLE,
    state           INT default 1
);

-- Insertion des données pour num_code de 10000000 à 10000020 avec price = 5000.00
INSERT INTO code (num_code, price)
VALUES
    (10000000, 5000.00),
    (10000001, 5000.00),
    (10000002, 5000.00),
    (10000003, 5000.00),
    (10000004, 5000.00),
    (10000005, 5000.00),
    (10000006, 5000.00),
    (10000007, 5000.00),
    (10000008, 5000.00),
    (10000009, 5000.00),
    (10000010, 5000.00),
    (10000011, 5000.00),
    (10000012, 5000.00),
    (10000013, 5000.00),
    (10000014, 5000.00),
    (10000015, 5000.00),
    (10000016, 5000.00),
    (10000017, 5000.00),
    (10000018, 5000.00),
    (10000019, 5000.00),
    (10000020, 5000.00);

-- Insertion des données pour num_code de 20000000 à 20000020 avec price = 10000.00
INSERT INTO code (num_code, price)
VALUES
    (20000000, 10000.00),
    (20000001, 10000.00),
    (20000002, 10000.00),
    (20000003, 10000.00),
    (20000004, 10000.00),
    (20000005, 10000.00),
    (20000006, 10000.00),
    (20000007, 10000.00),
    (20000008, 10000.00),
    (20000009, 10000.00),
    (20000010, 10000.00),
    (20000011, 10000.00),
    (20000012, 10000.00),
    (20000013, 10000.00),
    (20000014, 10000.00),
    (20000015, 10000.00),
    (20000016, 10000.00),
    (20000017, 10000.00),
    (20000018, 10000.00),
    (20000019, 10000.00),
    (20000020, 10000.00);

-- Insertion des données pour num_code de 30000000 à 30000020 avec price = 20000.00
INSERT INTO code (num_code, price)
VALUES
    (30000000, 20000.00),
    (30000001, 20000.00),
    (30000002, 20000.00),
    (30000003, 20000.00),
    (30000004, 20000.00),
    (30000005, 20000.00),
    (30000006, 20000.00),
    (30000007, 20000.00),
    (30000008, 20000.00),
    (30000009, 20000.00),
    (30000010, 20000.00),
    (30000011, 20000.00),
    (30000012, 20000.00),
    (30000013, 20000.00),
    (30000014, 20000.00),
    (30000015, 20000.00),
    (30000016, 20000.00),
    (30000017, 20000.00),
    (30000018, 20000.00),
    (30000019, 20000.00),
    (30000020, 20000.00);


CREATE TABLE demand (
    id INT AUTO_INCREMENT PRIMARY KEY,
    id_user INT,
    id_code INT,
    state INT NOT NULL default -10,
    date DATE,
    FOREIGN KEY (id_user) REFERENCES user(id),
    FOREIGN KEY (id_code) REFERENCES code(id)
);

CREATE TABLE wallet (
    id INT AUTO_INCREMENT PRIMARY KEY,
    id_user INT,
    id_code INT,
    date DATE,
    profit DOUBLE,
    loss DOUBLE,
    FOREIGN KEY (id_user) REFERENCES user(id),
    FOREIGN KEY (id_code) REFERENCES code(id)
);

INSERT INTO wallet (id_user, id_code, date, profit, loss) VALUES 
    (2, 10, NOW(), 5000, 0),
    (2, 22, NOW(), 10000, 0),
    (2, 44, NOW(), 20000, 0);

SELECT * 
FROM wallet w
    JOIN code c ON w.id_code=c.id
WHERE id_user = 2;


create table target(
    id INT AUTO_INCREMENT PRIMARY KEY,
    value VARCHAR(50)
);

insert into target(value) values('Perdre de poids');
insert into target(value) values('Augmenter de poids');
insert into target(value) values('Atteindre son IMC ideal');



create table type(
    id INT AUTO_INCREMENT PRIMARY KEY,
    categorie VARCHAR(30)
);
insert into type(categorie) values('Viande rouge');
insert into type(categorie) values('Legume');

create table food(
    id INT AUTO_INCREMENT PRIMARY KEY,
    food VARCHAR(30),
    id_type int,
    FOREIGN KEY (id_type) REFERENCES type(id)
);
insert into food (food,id_type) values ('Pomme de terre',2);
insert into food (food,id_type) values ('Viande de boeuf',1);

create table diet(
    id INT AUTO_INCREMENT PRIMARY KEY,
    diet varchar(50),
    id_target int,
    weigth_start DOUBLE,
    weigth_end DOUBLE,
    dure int,
    price double,
    FOREIGN KEY (id_target) REFERENCES target(id)
); 
create table food_regime(
    id INT AUTO_INCREMENT PRIMARY KEY,
    id_regime int,
    FOREIGN KEY (id_regime) REFERENCES (id)
);
