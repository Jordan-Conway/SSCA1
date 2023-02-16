DROP TABLE IF EXISTS `products`;

CREATE TABLE `products` (
`productId` INT(12) NOT NULL,
`productName` VARCHAR(50) NOT NULL,
`productPrice` DECIMAL(10, 2) NOT NULL,
`manufacturer` VARCHAR(50) NOT NULL,
`noInStock` INT(10) NOT NULL,
PRIMARY KEY(`productId`),
);

INSERT INTO `products` (`productId`, `productName`, `productPrice`, `manufacturer`, `noInStock`) VALUES
