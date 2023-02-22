DROP TABLE IF EXISTS `products`;

CREATE TABLE `products` (
`productId` INT(12) NOT NULL,
`productName` VARCHAR(50) NOT NULL,
`productPrice` DECIMAL(10, 2) NOT NULL,
`productCatagory` VARCHAR(50) NOT NULL,
`noInStock` INT(10) NOT NULL,
PRIMARY KEY(`productId`)
);

INSERT INTO `products` (`productId`, `productName`, `productPrice`, `productCatagory`, `noInStock`) VALUES
(1, "Number 7: Lucky Straight", 0.07, "Single", 13),
(2, "Urabrask the Hidden", 1.20, "Single", 3),
(3, "Doubling Season", 63.50, "Single", 1),
(4, "100 Top Loaders", 1.50, "Misc", 24);
