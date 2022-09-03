CREATE TABLE Staff (
   StaffID int ,
   username  varchar(255),
   Pass varchar(255),
   LastName varchar(255),
   FirstName varchar(255),
   PRIMARY KEY (StaffID)
);
INSERT INTO  Staff VALUES ('1','N/A', 'pass', 'N/A', 'N/A');
INSERT INTO  Staff VALUES ('2','melsaka', 'pass', 'El Saka', 'Mohammed');
INSERT INTO  Staff VALUES ('3','loilvera', 'pass', 'Olivera', 'Louis');
INSERT INTO  Staff VALUES ('4','kseki', 'pass', 'Seki', 'Kuniyuki');
INSERT INTO  Staff VALUES ('5','scameron', 'pass', 'Cameron', 'Scott');
INSERT INTO  Staff VALUES ('6','mvelez', 'pass', 'Seki', 'Kuniyuki');
INSERT INTO  Staff VALUES ('7','kgorman', 'pass', 'Gorman', 'Kyle');
INSERT INTO  Staff VALUES ('8','mfarrel', 'pass', 'Farrel', 'Miles');
INSERT INTO  Staff VALUES ('9','bradics', 'pass', 'Radics', 'Barnabus');
INSERT INTO  Staff VALUES ('10','Rpremsewari', 'pass', 'Premsewari', 'Reyna');
INSERT INTO  Staff VALUES ('11','sdavis', 'pass', 'Sam', 'Davis');

ALTER TABLE Staff 
MODIFY StaffID INT NOT NULL AUTO_INCREMENT;
CREATE TABLE Devices (
    DeviceID int ,
    StaffID int,
    AssetTag int ,
    Model  varchar(255),
    purchased_On DATE,
    Stat  varchar(255),
    PRIMARY KEY (DeviceID),
    FOREIGN KEY (StaffID) REFERENCES Staff(StaffID)
);



INSERT INTO  Devices VALUES ('10','2','1111','MacBookPro18', '2021-12-22', 'Active');
INSERT INTO  Devices VALUES ('20','3', '1112', 'MacBookPro17', '2021-12-22','Active');
INSERT INTO  Devices VALUES ('30','4','1113', 'MacBookPro16', '2021-12-22','Active');
INSERT INTO  Devices VALUES ('40','5','1114','MacBookPro16', '2021-12-22','Active');
INSERT INTO  Devices VALUES ('50','6','1115' ,'MacBookPro16', '2019-12-22','Active');
INSERT INTO  Devices VALUES ('60','7','1116' ,'MacBookPro16', '2019-10-22','Active');
INSERT INTO  Devices VALUES ('70','8','1117' ,'MacBookPro15', '2019-09-22','Active');
INSERT INTO  Devices VALUES ('80','9','1118' ,'MacBookPro15', '2019-09-22','Active');
INSERT INTO  Devices VALUES ('90','10','1119' ,'MacBookPro15', '2019-08-22','Active');
INSERT INTO  Devices VALUES ('100','11','1120' ,'MacBookPro15', '2019-08-22','Active');

ALTER TABLE Devices
MODIFY DeviceID INT NOT NULL AUTO_INCREMENT;


