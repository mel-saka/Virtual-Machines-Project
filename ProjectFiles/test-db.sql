CREATE TABLE Staff (
   StaffID int,
   username  varchar(255),
   Pass varchar(255),
   LastName varchar(255),
   FirstName varchar(255),
   PRIMARY KEY (StaffID)
);
INSERT INTO  Staff VALUES ('1','melsaka', 'pass', 'El Saka', 'Mohammed');
INSERT INTO  Staff VALUES ('2','loilvera', 'pass', 'Olivera', 'Louis');
INSERT INTO  Staff VALUES ('3','kseki', 'pass', 'Seki', 'Kuniyuki');
INSERT INTO  Staff VALUES ('4','scameron', 'pass', 'Cameron', 'Scott');
INSERT INTO  Staff VALUES ('5','mvelez', 'pass', 'Seki', 'Kuniyuki');
INSERT INTO  Staff VALUES ('6','kgorman', 'pass', 'Gorman', 'Kyle');
INSERT INTO  Staff VALUES ('7','mfarrel', 'pass', 'Farrel', 'Miles');
INSERT INTO  Staff VALUES ('8','bradics', 'pass', 'Radics', 'Barnabus');
INSERT INTO  Staff VALUES ('9','Rpremsewari', 'pass', 'Premsewari', 'Reyna');
INSERT INTO  Staff VALUES ('10','sdavis', 'pass', 'Sam', 'Davis');


CREATE TABLE Devices (
    DeviceID int,
    StaffID int,
    Model  varchar(255),
    purchased_On DATE,
    PRIMARY KEY (DeviceID),
    FOREIGN KEY (StaffID) REFERENCES Staff(StaffID)
);

INSERT INTO  Devices VALUES ('10','1', 'MacBookPro18', '2021-12-22');
INSERT INTO  Devices VALUES ('20','2', 'MacBookPro17', '2021-12-22');
INSERT INTO  Devices VALUES ('30','3', 'MacBookPro16', '2021-12-22');
INSERT INTO  Devices VALUES ('40','4', 'MacBookPro16', '2021-12-22');
INSERT INTO  Devices VALUES ('50','5', 'MacBookPro16', '2019-12-22');
INSERT INTO  Devices VALUES ('60','6', 'MacBookPro16', '2019-10-22');
INSERT INTO  Devices VALUES ('70','7', 'MacBookPro15', '2019-09-22');
INSERT INTO  Devices VALUES ('80','8', 'MacBookPro15', '2019-09-22');
INSERT INTO  Devices VALUES ('90','9', 'MacBookPro15', '2019-08-22');
INSERT INTO  Devices VALUES ('100','10', 'MacBookPro15', '2019-08-22');



