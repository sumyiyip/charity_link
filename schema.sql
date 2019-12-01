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
    start_date DATETIME NOT NULL,
    end_date DATETIME NOT NULL,
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

INSERT INTO user (user_name, email_add, hashed_password, phone_number) 
VALUES ("Xinyi", "xinyi@hpb.com", "$oiaushdoaishdoiashd", "0741596152");
INSERT INTO user (user_name, email_add, hashed_password, phone_number) 
VALUES ("Ravi", "ravi@hpb.com", "$oiaushdoaishdoiashd", "074182213123");
INSERT INTO user (user_name, email_add, hashed_password, phone_number) 
VALUES ("Terry", "terry@hpb.com", "$oiaushdoaishdoiashd", "0887231312");
INSERT INTO user (user_name, email_add, hashed_password, phone_number) 
VALUES ("Hoang", "hoang@hpb.com", "$oiaushdoaishdoiashd", "09412238232");

INSERT INTO charity_event(name, description, start_date, end_date, address, postcode, organiser_id, imgurl, fund_goal)
VALUES("Blanket handouts", "Giving out blankets!", "2020-02-10", "2020-02-10", "60 Sporle Court", "SW112ER", 1, "", 0);

INSERT INTO charity_event(name, description, start_date, end_date, address, postcode, organiser_id, imgurl, fund_goal)
VALUES("Extra blankets", "Giving out more blankets!", "2020-12-10", "2020-12-11", "61 Sporle Court", "SW112ER", 2, "", 0);

INSERT INTO charity_event(name, description, start_date, end_date, address, postcode, organiser_id, imgurl, fund_goal)
VALUES("Free chicken soup", "Handing out birthday cake for the hungry poor!", "2019-12-30", "2019-12-31", "51 Sporle Court", "SW112ER", 3, "", 0);

