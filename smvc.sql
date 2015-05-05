/*
MySQL Data Transfer
Source Host: localhost
Source Database: smvc
Target Host: localhost
Target Database: smvc
Date: 05/05/2015 14:47:30
*/

SET FOREIGN_KEY_CHECKS=0;
-- ----------------------------
-- Table structure for smvc_order_products
-- ----------------------------
DROP TABLE IF EXISTS `smvc_order_products`;
CREATE TABLE `smvc_order_products` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `order_id` int(11) DEFAULT NULL,
  `product_id` int(11) DEFAULT NULL,
  `product_name` varchar(255) DEFAULT NULL,
  `product_price` double DEFAULT NULL,
  `product_qty` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Table structure for smvc_orders
-- ----------------------------
DROP TABLE IF EXISTS `smvc_orders`;
CREATE TABLE `smvc_orders` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `date_added` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `status` varchar(255) DEFAULT NULL,
  `customer_name` varchar(11) DEFAULT NULL,
  `order_data` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Table structure for smvc_products
-- ----------------------------
DROP TABLE IF EXISTS `smvc_products`;
CREATE TABLE `smvc_products` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `price` double DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records 
-- ----------------------------
INSERT INTO `smvc_order_products` VALUES ('4', '27', '2', 'chips', '1.5', '2');
INSERT INTO `smvc_order_products` VALUES ('5', '27', '3', 'burger', '4', '1');
INSERT INTO `smvc_order_products` VALUES ('6', '27', '11', 'pizza', '10.99', '3');
INSERT INTO `smvc_orders` VALUES ('27', null, null, 'Steve', null);
INSERT INTO `smvc_products` VALUES ('2', 'chips', '1.5');
INSERT INTO `smvc_products` VALUES ('3', 'burger', '4');
INSERT INTO `smvc_products` VALUES ('11', 'pizza', '10.99');
