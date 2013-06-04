/*DROP database pnReviews;
CREATE database pnReviews;*/
USE pnReviews;

CREATE TABLE UserStatus (
    UserStatusID INTEGER NOT NULL PRIMARY KEY AUTO_INCREMENT,
	Name VARCHAR(128) NOT NULL,
	
	INDEX I_UserStatus_Name (Name)
);

CREATE TABLE User (
    UserID INTEGER NOT NULL PRIMARY KEY AUTO_INCREMENT,
	Name VARCHAR(128) NOT NULL,
	Email VARCHAR(128) NOT NULL,
	UserStatusID INTEGER NOT NULL,

	CONSTRAINT FK_UserStatus_User FOREIGN KEY (UserStatusID)
		REFERENCES UserStatus (UserStatusID) ON DELETE CASCADE ON UPDATE RESTRICT,
	INDEX I_User_Name (Name)
);

CREATE TABLE Category (
    CategoryID INTEGER NOT NULL PRIMARY KEY AUTO_INCREMENT,
	Name VARCHAR(128) NOT NULL,
	
	INDEX I_Category_Name (Name)
);

CREATE TABLE Store (
    StoreID INTEGER NOT NULL PRIMARY KEY AUTO_INCREMENT,
	Name VARCHAR(128) NOT NULL,
	Link VARCHAR(128) NOT NULL,
	
	INDEX I_Store_Name (Name)
);

CREATE TABLE ReviewStatus (
    ReviewStatusID INTEGER NOT NULL PRIMARY KEY AUTO_INCREMENT,
	Name VARCHAR(128) NOT NULL,
	
	INDEX I_ReviewStatus_Name (Name)
);

CREATE TABLE Review (
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
		REFERENCES User (UserID) ON DELETE CASCADE ON UPDATE RESTRICT,
	CONSTRAINT FK_Category_Review FOREIGN KEY (CategoryID)
		REFERENCES Category (CategoryID) ON DELETE CASCADE ON UPDATE RESTRICT,
	CONSTRAINT FK_Store_Review FOREIGN KEY (StoreID)
		REFERENCES Store (StoreID) ON DELETE CASCADE ON UPDATE RESTRICT,
	CONSTRAINT FK_ReviewStatus_Review FOREIGN KEY (ReviewStatusID)
		REFERENCES ReviewStatus (ReviewStatusID) ON DELETE CASCADE ON UPDATE RESTRICT,
	INDEX I_Review_Title (Title)
	/*FULLTEXT INDEX I_Review_ReviewText (ReviewText),*/
);

