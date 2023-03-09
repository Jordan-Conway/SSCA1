-- START TRANSACTION;
-- SET autocommit = OFF;

DROP TABLE IF EXISTS `sleeves/sizes`;
DROP TABLE IF EXISTS `products`;
DROP TABLE IF EXISTS `sleeveTypes`;

CREATE TABLE `products` (
`productId` INT(12) NOT NULL AUTO_INCREMENT,
`productName` VARCHAR(50) NOT NULL,
`productPrice` DECIMAL(10, 2) NOT NULL,
`productCatagory` VARCHAR(50) NOT NULL,
`noInStock` INT(10) NOT NULL,
`dateAdded` DATE NOT NULL,
PRIMARY KEY(`productId`)
);

CREATE TABLE `sleeveTypes`(
    `sleeveTypeId` INT(12) NOT NULL AUTO_INCREMENT,
    `sleeveSizeName` VARCHAR(30) NOT NULL,
    `width` INT(5) NOT NULL,   
    `height` INT(5) NOT NULL,
    PRIMARY KEY(`sleeveTypeId`) 
);

CREATE TABLE `sleeves/sizes`(
    `productId` INT(12) NOT NULL PRIMARY KEY,
    `sleeveTypeId` INT(12) NOT NULL,
    FOREIGN KEY(`productId`) REFERENCES `products`(`productId`),
    FOREIGN KEY(`sleeveTypeId`) REFERENCES `sleeveTypes`(`sleeveTypeId`)
);

INSERT INTO `products` (`productName`, `productPrice`, `productCatagory`, `noInStock`, `dateAdded`) VALUES
("Number 7: Lucky Straight", 0.07, "Single", 13, NOW()),
("Urabrask the Hidden", 1.20, "Single", 3, NOW()),
("Doubling Season", 63.50, "Single", 1, NOW()),
("100 Top Loaders", 1.50, "Misc", 24, NOW()),
("60x Dragon Shield Might Matte Dual Sleeves", 8.99, "Sleeve", 32, NOW()),
("Dominaria Remastered Draft Booster Box", 159.99, "Booster Box", 4, NOW()),
("Shining Fates Elite Trainer Box", 49.99, "Booster Box", 3, NOW());

INSERT INTO `sleeveTypes` (`sleeveSizeName`, `width`, `height`) VALUES
("Standard", 63, 88),
("Japanese", 59, 86);

INSERT INTO `sleeves/sizes` (`productId`, `sleeveTypeId`) VALUES
((SELECT `productId` FROM `products` WHERE `productName` = "60x Dragon Shield Might Matte Dual Sleeves"), (SELECT `sleeveTypeId` FROM `sleeveTypes` WHERE `sleeveSizeName` = "Japanese"));

-- SET autocommit = ON;
-- COMMIT;