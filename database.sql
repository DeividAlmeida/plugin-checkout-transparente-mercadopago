CREATE TABLE IF NOT EXISTS `ecommerce_mercadopago_transparente` ( 
`id` int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
`publickey` text DEFAULT NULL,
`accesstoken` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `ecommerce_mercadopago_transparente` (`id`,`publickey`,`accesstoken`) VALUES (1, NULL,NULL);

INSERT INTO `ecommerce_plugins` (`id`, `titulo`, `nome`, `tipo`, `path`, `img`, `status`) VALUES (7, 'Mercado Pago Transparente', 'mercadopagotransparente', 'gateways', 'ecommerce/plugins/gateways/mercadopagotransparente', '', '');