creata database regime

use regime

CREATE gender (
    id              int auto_incerment PRIMARY KEY,
    gender          VARCHAR(30)
);

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


