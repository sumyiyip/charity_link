DROP DATABASE Hackkings6;
CREATE DATABASE Hackkings6;
Use Hackkings6;

CREATE TABLE user(
    id INT AUTO_INCREMENT PRIMARY KEY NOT NULL,
    user_name VARCHAR(255) NOT NULL UNIQUE,
    email_add VARCHAR(255) NOT NULL UNIQUE,
    hashed_password VARCHAR(255) NOT NULL,
    phone_number VARCHAR(15) NOT NULL
);
CREATE TABLE charity_event(
    id INT  AUTO_INCREMENT NOT NULL PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    description VARCHAR(8000) NOT NULL,
    start_date DATE NOT NULL,
    end_date DATE NOT NULL,
    address VARCHAR(255) NOT NULL,
    postcode VARCHAR(10) NOT NULL,
    organiser_id INT NOT NULL,
    imgurl VARCHAR(255),
    fund_goal INT DEFAULT 0,
    FOREIGN KEY(organiser_id) REFERENCES user(id)
        ON DELETE CASCADE
        ON UPDATE CASCADE
);


CREATE TABLE donation(
    id INT AUTO_INCREMENT PRIMARY KEY NOT NULL,
    eid INT NOT NULL,
    uid INT NOT NULL,
    amount INT NOT NULL DEFAULT 0,
    FOREIGN KEY (eid) REFERENCES charity_event(id)
        ON DELETE CASCADE
        ON UPDATE CASCADE,
    FOREIGN KEY (uid) REFERENCES user(id)
        ON DELETE CASCADE
        ON UPDATE CASCADE
    

);

CREATE TABLE participant(
    id INT AUTO_INCREMENT PRIMARY KEY NOT NULL,
    eid INT NOT NULL,
    uid INT NOT NULL,
    FOREIGN KEY (eid) REFERENCES charity_event(id)
        ON DELETE CASCADE
        ON UPDATE CASCADE,
    FOREIGN KEY (uid) REFERENCES user(id)
        ON DELETE CASCADE
        ON UPDATE CASCADE
    
);

