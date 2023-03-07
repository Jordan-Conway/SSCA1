DROP TABLE IF EXISTS `products`;

CREATE TABLE `products` (
`productId` INT(12) NOT NULL AUTO_INCREMENT,
`productName` VARCHAR(50) NOT NULL,
`productPrice` DECIMAL(10, 2) NOT NULL,
`productCatagory` VARCHAR(50) NOT NULL,
`noInStock` INT(10) NOT NULL,
`dateAdded` DATE NOT NULL,
PRIMARY KEY(`productId`)
);

INSERT INTO `products` (`productName`, `productPrice`, `productCatagory`, `noInStock`, `dateAdded`) VALUES
("Number 7: Lucky Straight", 0.07, "Single", 13, NOW()),
("Urabrask the Hidden", 1.20, "Single", 3, NOW()),
("Doubling Season", 63.50, "Single", 1, NOW()),
("100 Top Loaders", 1.50, "Misc", 24, NOW()),
("Dominaria Remastered Draft Booster Box", 159.99, "Booster Box", 4, NOW());
