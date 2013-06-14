DROP database IF EXISTS pncreviews;
CREATE database pncreviews;
USE pncreviews;

CREATE TABLE userstatus (
    UserStatusID INTEGER NOT NULL PRIMARY KEY AUTO_INCREMENT,
	Name VARCHAR(128) NOT NULL,
	
	INDEX I_UserStatus_Name (Name)
);

CREATE TABLE user (
    UserID INTEGER NOT NULL PRIMARY KEY AUTO_INCREMENT,
	Name VARCHAR(128) NOT NULL,
	Email VARCHAR(128) NOT NULL,
	Password VARCHAR(128) NOT NULL,
	UserStatusID INTEGER NOT NULL,

	CONSTRAINT FK_UserStatus_User FOREIGN KEY (UserStatusID)
		REFERENCES userstatus (UserStatusID) ON DELETE CASCADE ON UPDATE RESTRICT,
	INDEX I_User_Name (Name)
);

CREATE TABLE category (
    CategoryID INTEGER NOT NULL PRIMARY KEY AUTO_INCREMENT,
	Name VARCHAR(128) NOT NULL,
	
	INDEX I_Category_Name (Name)
);

CREATE TABLE store (
    StoreID INTEGER NOT NULL PRIMARY KEY AUTO_INCREMENT,
	Name VARCHAR(128) NOT NULL,
	Link VARCHAR(128) NOT NULL,
	
	INDEX I_Store_Name (Name)
);

CREATE TABLE reviewstatus (
    ReviewStatusID INTEGER NOT NULL PRIMARY KEY AUTO_INCREMENT,
	Name VARCHAR(128) NOT NULL,
	
	INDEX I_ReviewStatus_Name (Name)
);

CREATE TABLE review (
    ReviewID INTEGER NOT NULL PRIMARY KEY AUTO_INCREMENT,
	UserID INTEGER NOT NULL,
	CategoryID INTEGER NOT NULL,
	StoreID INTEGER NOT NULL,
	ReviewStatusID INTEGER NOT NULL,
	Title VARCHAR(128) NOT NULL,
	ProdLink VARCHAR(128) NOT NULL,
	PicLink VARCHAR(128) NOT NULL,
	Price DECIMAL(10,2) NOT NULL,
	ReviewText TEXT,
	
	CONSTRAINT FK_User_Review FOREIGN KEY (UserID)
		REFERENCES user (UserID) ON DELETE CASCADE ON UPDATE RESTRICT,
	CONSTRAINT FK_Category_Review FOREIGN KEY (CategoryID)
		REFERENCES category (CategoryID) ON DELETE CASCADE ON UPDATE RESTRICT,
	CONSTRAINT FK_Store_Review FOREIGN KEY (StoreID)
		REFERENCES store (StoreID) ON DELETE CASCADE ON UPDATE RESTRICT,
	CONSTRAINT FK_ReviewStatus_Review FOREIGN KEY (ReviewStatusID)
		REFERENCES reviewstatus (ReviewStatusID) ON DELETE CASCADE ON UPDATE RESTRICT,
	INDEX I_Review_Title (Title)
	/*FULLTEXT INDEX I_Review_ReviewText (ReviewText),*/
);

INSERT INTO userstatus(Name) Values('active');
INSERT INTO user(Name, Email, Password, UserStatusID) Values('andrey','andrey.dev@gmail.com','$2a$13$sdl.bIs//vAcv96Au8WsN.2mm4YcfWgDyXyo7AqXsxhhO9.CT9D4m',1);
INSERT INTO user(Name, Email, Password, UserStatusID) Values('katie','katie@pncreviews.com','$2a$13$sdl.bIs//vAcv96Au8WsN.2mm4YcfWgDyXyo7AqXsxhhO9.CT9D4m',1);

INSERT INTO category(Name) Values('Other');
INSERT INTO reviewstatus(Name) Values('New');
INSERT INTO store(Name,Link) Values('Other','');
