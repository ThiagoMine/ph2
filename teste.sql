/*
Navicat MySQL Data Transfer

Source Server         : localhost_3306
Source Server Version : 50505
Source Host           : localhost:3306
Source Database       : teste

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2018-03-16 14:47:05
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for ph2_produtos
-- ----------------------------
DROP TABLE IF EXISTS `ph2_produtos`;
CREATE TABLE `ph2_produtos` (
  `ph2_id_produto` int(11) NOT NULL AUTO_INCREMENT,
  `ph2_nome` varchar(255) NOT NULL,
  `ph2_meta_titulo` varchar(255) DEFAULT NULL,
  `ph2_descricao` text NOT NULL,
  `ph2_meta_descricao` text,
  `ph2_fabricante` varchar(255) DEFAULT NULL,
  `ph2_modelo` varchar(255) DEFAULT NULL,
  `ph2_codigo_barras` varchar(50) NOT NULL,
  `ph2_preco` float NOT NULL,
  `ph2_peso` float DEFAULT NULL,
  `ph2_altura` float DEFAULT NULL,
  `ph2_largura` float DEFAULT NULL,
  `ph2_profundidade` float DEFAULT NULL,
  `ph2_status` int(11) DEFAULT NULL,
  PRIMARY KEY (`ph2_id_produto`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4;

-- ----------------------------
-- Records of ph2_produtos
-- ----------------------------
INSERT INTO `ph2_produtos` VALUES ('1', 'Pen Drive', 'Pen Drive', 'Pen Drive - 32GB Kingston', 'Pen Drive - 32GB Kingston', 'Kingston', null, '1254831xa54d846351', '32.5', '0.1', '1', '1', '1', '1');
INSERT INTO `ph2_produtos` VALUES ('2', 'HD EXterno', 'HD Externo', 'HD Externo 1TB Samsumg', 'HD Externo 1TB Samsumg', 'Samsumg', null, '32411f5dg3f1231651d', '350', '0.3', '30', '20', '5', '0');
INSERT INTO `ph2_produtos` VALUES ('3', 'Mouse', 'Mouse', 'Mouse Logitech Gaming Prodigy G PRO RGB 12000Dpi 910-004873', 'Mouse Logitech Gaming Prodigy G PRO RGB 12000Dpi 910-004873', 'Logitech', 'Gamer', '237324587598239894374598', '299.9', '0.1', '20', '40', '30', '1');
INSERT INTO `ph2_produtos` VALUES ('4', 'Fone De Ouvido', 'Fone De Ouvido', 'Fone De Ouvido Logitech Wireless G933 Gaming Usb', 'Fone De Ouvido Logitech Wireless G933 Gaming Usb', 'Logitech', 'Gaming', '32181316543131dsa1fsf13521', '729', '0.1', '30', '30', '30', '0');
