SET NAMES 'utf8';

INSERT INTO `PREFIX_hook` (`id_hook`, `name`, `title`, `description`, `position`) VALUES
(1, 'payment', 'Payment', NULL, 1),
(2, 'newOrder', 'New orders', NULL, 0),
(3, 'paymentConfirm', 'Payment confirmation', NULL, 0),
(4, 'paymentReturn', 'Payment return', NULL, 0),
(5, 'updateQuantity', 'Quantity update', 'Quantity is updated only when the customer effectively <b>place</b> his order.', 0),
(6, 'rightColumn', 'Right column blocks', NULL, 1),
(7, 'leftColumn', 'Left column blocks', NULL, 1),
(8, 'home', 'Homepage content', NULL, 1),
(9, 'header', 'Header of pages', 'A hook which allow you to do things in the header of each pages', 1),
(10, 'cart', 'Cart creation and update', NULL, 0),
(11, 'authentication', 'Successful customer authentication', NULL, 0),
(12, 'addproduct', 'Product creation', NULL, 0),
(13, 'updateproduct', 'Product Update', NULL, 0),
(14, 'top', 'Top of pages', 'A hook which allow you to do things a the top of each pages.', 1),
(15, 'extraRight', 'Extra actions on the product page (right column).', NULL, 0),
(16, 'deleteproduct', 'Product deletion', 'This hook is called when a product is deleted', 0),
(17, 'productfooter', 'Product footer', 'Add new blocks under the product description', 1),
(18, 'invoice', 'Invoice', 'Add blocks to invoice (order)', 1),
(19, 'updateOrderStatus', 'Order''s status update event', 'Launch modules when the order''s status of an order change.', 0),
(20, 'adminOrder', 'Display in Back-Office, tab AdminOrder', 'Launch modules when the tab AdminOrder is displayed on back-office.', 0),
(21, 'footer', 'Footer', 'Add block in footer', 1),
(22, 'PDFInvoice', 'PDF Invoice', 'Allow the display of extra informations into the PDF invoice', 0),
(23, 'adminCustomers', 'Display in Back-Office, tab AdminCustomers', 'Launch modules when the tab AdminCustomers is displayed on back-office.', 0),
(24, 'orderConfirmation', 'Order confirmation page', 'Called on order confirmation page', 0),
(25, 'createAccount', 'Successful customer create account', 'Called when new customer create account successfuled', 0),
(26, 'customerAccount', 'Customer account page display in front office', 'Display on page account of the customer', 1),
(27, 'orderSlip', 'Called when a order slip is created', 'Called when a quantity of one product change in an order.', 0),
(28, 'productTab', 'Tabs on product page', 'Called on order product page tabs', 0),
(29, 'productTabContent', 'Content of tabs on product page', 'Called on order product page tabs', 0),
(30, 'shoppingCart', 'Shopping cart footer', 'Display some specific informations on the shopping cart page', 0),
(31, 'createAccountForm', 'Customer account creation form', 'Display some information on the form to create a customer account', 1),
(32, 'AdminStatsModules','Stats - Modules', NULL, 1),
(33, 'GraphEngine','Graph Engines', NULL, 0),
(34, 'orderReturn','Product returned', NULL, 0),
(35, 'productActions', 'Product actions', 'Put new action buttons on product page', 1),
(36, 'backOfficeHome', 'Administration panel homepage', NULL, 1),
(37, 'GridEngine','Grid Engines', NULL, 0),
(38, 'watermark','Watermark', NULL, 0),
(39, 'cancelProduct', 'Product cancelled', 'This hook is called when you cancel a product in an order', 0),
(40, 'extraLeft', 'Extra actions on the product page (left column).', NULL, 0),
(41, 'productOutOfStock', 'Product out of stock', 'Make action while product is out of stock', 1),
(42, 'updateProductAttribute', 'Product attribute update', NULL, 0);

INSERT INTO `PREFIX_configuration` (`id_configuration`, `name`, `value`, `date_add`, `date_upd`) VALUES
(1, 'PS_LANG_DEFAULT', '1', NOW(), NOW()),
(2, 'PS_CURRENCY_DEFAULT', '1', NOW(), NOW()),
(3, 'PS_COUNTRY_DEFAULT', '8', NOW(), NOW()),
(4, 'PS_REWRITING_SETTINGS', '0', NOW(), NOW()),
(5, 'PS_ORDER_OUT_OF_STOCK', '0', NOW(), NOW()),
(6, 'PS_LAST_QTIES', '3', NOW(), NOW()),
(7, 'PS_CART_REDIRECT', '1', NOW(), NOW()),
(8, 'PS_HELPBOX', '1', NOW(), NOW()),
(9, 'PS_CONDITIONS', '1', NOW(), NOW()),
(10, 'PS_RECYCLABLE_PACK', '1', NOW(), NOW()),
(11, 'PS_GIFT_WRAPPING', '1', NOW(), NOW()),
(12, 'PS_GIFT_WRAPPING_PRICE', '0', NOW(), NOW()),
(13, 'PS_STOCK_MANAGEMENT', '1', NOW(), NOW()),
(14, 'PS_NAVIGATION_PIPE', '>', NOW(), NOW()),
(15, 'PS_PRODUCTS_PER_PAGE', '10', NOW(), NOW()),
(16, 'PS_PURCHASE_MINIMUM', '0', NOW(), NOW()),
(17, 'PS_PRODUCTS_ORDER_WAY', '1', NOW(), NOW()),
(18, 'PS_PRODUCTS_ORDER_BY', '4', NOW(), NOW()),
(19, 'PS_DISPLAY_QTIES', '1', NOW(), NOW()),
(20, 'PS_SHIPPING_HANDLING', '2', NOW(), NOW()),
(21, 'PS_SHIPPING_FREE_PRICE', '300', NOW(), NOW()),
(22, 'PS_SHIPPING_FREE_WEIGHT', '20', NOW(), NOW()),
(23, 'PS_SHIPPING_METHOD', '1', NOW(), NOW()),
(24, 'PS_TAX', '1', NOW(), NOW()),
(25, 'PS_SHOP_ENABLE', '1', NOW(), NOW()),
(26, 'PS_NB_DAYS_NEW_PRODUCT', '20', NOW(), NOW()),
(27, 'PS_SSL_ENABLED', '0', NOW(), NOW()),
(28, 'PS_WEIGHT_UNIT', 'kg', NOW(), NOW()),
(29, 'PS_BLOCK_CART_AJAX', '1', NOW(), NOW()),
(30, 'PS_ORDER_RETURN', '0', NOW(), NOW()),
(31, 'PS_ORDER_RETURN_NB_DAYS', '7', NOW(), NOW()),
(32, 'PS_MAIL_TYPE', '3', NOW(), NOW()),
(33, 'PS_PRODUCT_PICTURE_MAX_SIZE', '131072', NOW(), NOW()),
(34, 'PS_PRODUCT_PICTURE_WIDTH', '64', NOW(), NOW()),
(35, 'PS_PRODUCT_PICTURE_HEIGHT', '64', NOW(), NOW()),
(36, 'PS_INVOICE_PREFIX', 'IN', NOW(), NOW()),
(37, 'PS_INVOICE_NUMBER', '2', NOW(), NOW()),
(38, 'PS_DELIVERY_PREFIX', 'DE', NOW(), NOW()),
(39, 'PS_DELIVERY_NUMBER', '1', NOW(), NOW()),
(40, 'PS_INVOICE', '1', NOW(), NOW()),
(41, 'PS_PASSWD_TIME_BACK', '360', NOW(), NOW()),
(42, 'PS_PASSWD_TIME_FRONT', '360', NOW(), NOW()),
(43, 'PS_DISP_UNAVAILABLE_ATTR', '1', NOW(), NOW()),
(44, 'PS_VOUCHERS', '1', NOW(), NOW());

INSERT INTO `PREFIX_configuration_lang` (`id_configuration`, `id_lang`, `value`, `date_upd`) VALUES (36, 1, 'IN', NOW());
INSERT INTO `PREFIX_configuration_lang` (`id_configuration`, `id_lang`, `value`, `date_upd`) VALUES (36, 2, 'FA', NOW());
INSERT INTO `PREFIX_configuration_lang` (`id_configuration`, `id_lang`, `value`, `date_upd`) VALUES (38, 1, 'DE', NOW());
INSERT INTO `PREFIX_configuration_lang` (`id_configuration`, `id_lang`, `value`, `date_upd`) VALUES (38, 2, 'LI', NOW());

INSERT INTO `PREFIX_lang` (`id_lang`, `name`, `active`, `iso_code`) VALUES
(1, 'English (English)', 1, 'en'),
(2, 'Français (French)', 1, 'fr');

INSERT INTO `PREFIX_category` VALUES
(1, 0, 0, 1, NOW(), NOW());
INSERT INTO `PREFIX_category_lang` VALUES
(1, 1, 'Home', '', '', NULL, NULL, NULL),
(1, 2, 'Accueil', '', '', NULL, NULL, NULL),
(1, 3, 'Startseite', '', '', NULL, NULL, NULL),
(1, 4, 'Inicio', '', '', NULL, NULL, NULL);

INSERT INTO `PREFIX_order_state` (`id_order_state`, `invoice`, `send_email`, `color`, `unremovable`, `logable`, `delivery`) VALUES
(1, 0, 1, 'lightblue', 1, 0, 0),
(2, 1, 1, '#DDEEFF', 1, 1, 0),
(3, 1, 1, '#FFDD99', 1, 1, 1),
(4, 1, 1, '#EEDDFF', 1, 1, 1),
(5, 1, 0, '#DDFFAA', 1, 1, 1),
(6, 1, 1, '#DADADA', 1, 0, 0),
(7, 1, 1, '#FFFFBB', 1, 0, 0),
(8, 0, 1, '#FFDFDF', 1, 0, 0),
(9, 1, 1, '#FFD3D3', 1, 0, 0),
(10, 0, 1, 'lightblue', 1, 0, 0);

INSERT INTO `PREFIX_order_state_lang` (`id_order_state`, `id_lang`, `name`, `template`) VALUES
(1, 1, 'Awaiting cheque payment', 'cheque'),
(2, 1, 'Payment accepted', 'payment'),
(3, 1, 'Preparation in progress', 'preparation'),
(4, 1, 'Shipping', 'shipping'),
(5, 1, 'Delivered', ''),
(6, 1, 'Canceled', 'order_canceled'),
(7, 1, 'Refund', 'refund'),
(8, 1, 'Payment error', 'payment_error'),
(9, 1, 'Out of stock', 'outofstock'),
(10, 1, 'Awaiting bank wire payment', 'bankwire'),
(1, 2, 'En attente du paiement par chèque', 'cheque'),
(2, 2, 'Paiement accepté', 'payment'),
(3, 2, 'Préparation en cours', 'preparation'),
(4, 2, 'En cours de livraison', 'shipping'),
(5, 2, 'Livré', ''),
(6, 2, 'Annulé', 'order_canceled'),
(7, 2, 'Remboursé', 'refund'),
(8, 2, 'Erreur de paiement', 'payment_error'),
(9, 2, 'Produit(s) indisponibles', 'outofstock'),
(10, 2, 'En attente du paiement par virement bancaire', 'bankwire');

INSERT INTO `PREFIX_zone` (`id_zone`, `name`, `active`, `enabled`) VALUES
(1, 'Europe', 1, 1),
(2, 'US', 1, 1),
(3, 'Asia', 1, 1),
(4, 'Africa', 1, 1),
(5, 'Oceania', 1, 1);

INSERT INTO `PREFIX_country` (`id_country`, `id_zone`, `iso_code`, `active`, `contains_states`) VALUES
(1, 1, 'DE', 1, 0),
(2, 1, 'AT', 1, 0),
(3, 1, 'BE', 1, 0),
(4, 2, 'CA', 1, 0),
(5, 3, 'CN', 1, 0),
(6, 1, 'ES', 1, 0),
(7, 1, 'FI', 1, 0),
(8, 1, 'FR', 1, 0),
(9, 1, 'GR', 1, 0),
(10, 1, 'IT', 1, 0),
(11, 3, 'JP', 1, 0),
(12, 1, 'LU', 1, 0),
(13, 1, 'NL', 1, 0),
(14, 1, 'PL', 1, 0),
(15, 1, 'PT', 1, 0),
(16, 1, 'CZ', 1, 0),
(17, 1, 'GB', 1, 0),
(18, 1, 'SE', 1, 0),
(19, 1, 'CH', 1, 0),
(20, 1, 'DK', 1, 0),
(21, 2, 'US', 1, 1),
(22, 3, 'HK', 1, 0),
(23, 1, 'NO', 1, 0),
(24, 5, 'AU', 1, 0),
(25, 3, 'SG', 1, 0),
(26, 1, 'IE', 1, 0),
(27, 5, 'NZ', 1, 0),
(28, 3, 'KR', 1, 0),
(29, 3, 'IL', 1, 0),
(30, 4, 'ZA', 1, 0),
(31, 4, 'NG', 1, 0),
(32, 4, 'CI', 1, 0),
(33, 4, 'TG', 1, 0),
(34, 2, 'BO', 1, 0);

INSERT INTO `PREFIX_country_lang` (`id_country`, `id_lang`, `name`) VALUES
(1, 1, 'Germany'),
(1, 2, 'Allemagne'),
(2, 1, 'Austria'),
(2, 2, 'Autriche'),
(3, 1, 'Belgium'),
(3, 2, 'Belgique'),
(4, 1, 'Canada'),
(4, 2, 'Canada'),
(5, 1, 'China'),
(5, 2, 'Chine'),
(6, 1, 'Spain'),
(6, 2, 'Espagne'),
(7, 1, 'Finland'),
(7, 2, 'Finlande'),
(8, 1, 'France'),
(8, 2, 'France'),
(9, 1, 'Greece'),
(9, 2, 'Grèce'),
(10, 1, 'Italy'),
(10, 2, 'Italie'),
(11, 1, 'Japan'),
(11, 2, 'Japon'),
(12, 1, 'Luxemburg'),
(12, 2, 'Luxembourg'),
(13, 1, 'Netherlands'),
(13, 2, 'Pays-bas'),
(14, 1, 'Poland'),
(14, 2, 'Pologne'),
(15, 1, 'Portugal'),
(15, 2, 'Portugal'),
(16, 1, 'Czech Republic'),
(16, 2, 'République Tchèque'),
(17, 1, 'United Kingdom'),
(17, 2, 'Royaume-Uni'),
(18, 1, 'Sweden'),
(18, 2, 'Suède'),
(19, 1, 'Switzerland'),
(19, 2, 'Suisse'),
(20, 1, 'Denmark'),
(20, 2, 'Danemark'),
(21, 1, 'USA'),
(21, 2, 'USA'),
(22, 1, 'HongKong'),
(22, 2, 'Hong-Kong'),
(23, 1, 'Norway'),
(23, 2, 'Norvège'),
(24, 1, 'Australia'),
(24, 2, 'Australie'),
(25, 1, 'Singapore'),
(25, 2, 'Singapour'),
(26, 1, 'Ireland'),
(26, 2, 'Eire'),
(27, 1, 'New Zealand'),
(27, 2, 'Nouvelle-Zélande'),
(28, 1, 'South Korea'),
(28, 2, 'Corée du Sud'),
(29, 1, 'Israel'),
(29, 2, 'Israël'),
(30, 1, 'South Africa'),
(30, 2, 'Afrique du Sud'),
(31, 1, 'Nigeria'),
(31, 2, 'Nigeria'),
(32, 1, 'Ivory Coast'),
(32, 2, 'Côte d''Ivoire'),
(33, 1, 'Togo'),
(33, 2, 'Togo'),
(34, 1, 'Bolivia'),
(34, 2, 'Bolivie');

INSERT IGNORE INTO `PREFIX_country_lang` (`id_country`, `id_lang`, `name`)
    (SELECT `id_country`, id_lang, (SELECT tl.`name`
        FROM `PREFIX_country_lang` tl
        WHERE tl.`id_lang` = (SELECT c.`value`
            FROM `PREFIX_configuration` c
            WHERE c.`name` = 'PS_LANG_DEFAULT' LIMIT 1) AND tl.`id_country`=`PREFIX_country`.`id_country`)
    FROM `PREFIX_lang` CROSS JOIN `PREFIX_country`);

INSERT INTO `PREFIX_state` (`id_state`, `id_country`, `id_zone`, `name`, `iso_code`, `active`) VALUES
(1, 21, 2, 'Alabama', 'AL', 1),
(2, 21, 2, 'Alaska', 'AK', 1),
(3, 21, 2, 'Arizona', 'AZ', 1),
(4, 21, 2, 'Arkansas', 'AR', 1),
(5, 21, 2, 'California', 'CA', 1),
(6, 21, 2, 'Colorado', 'CO', 1),
(7, 21, 2, 'Connecticut', 'CT', 1),
(8, 21, 2, 'Delaware', 'DE', 1),
(9, 21, 2, 'Florida', 'FL', 1),
(10, 21, 2, 'Georgia', 'GA', 1),
(11, 21, 2, 'Hawaii', 'HI', 1),
(12, 21, 2, 'Idaho', 'ID', 1),
(13, 21, 2, 'Illinois', 'IL', 1),
(14, 21, 2, 'Indiana', 'IN', 1),
(15, 21, 2, 'Iowa', 'IA', 1),
(16, 21, 2, 'Kansas', 'KS', 1),
(17, 21, 2, 'Kentucky', 'KY', 1),
(18, 21, 2, 'Louisiana', 'LA', 1),
(19, 21, 2, 'Maine', 'ME', 1),
(20, 21, 2, 'Maryland', 'MD', 1),
(21, 21, 2, 'Massachusetts', 'MA', 1),
(22, 21, 2, 'Michigan', 'MI', 1),
(23, 21, 2, 'Minnesota', 'MN', 1),
(24, 21, 2, 'Mississippi', 'MS', 1),
(25, 21, 2, 'Missouri', 'MO', 1),
(26, 21, 2, 'Montana', 'MT', 1),
(27, 21, 2, 'Nebraska', 'NE', 1),
(28, 21, 2, 'Nevada', 'NV', 1),
(29, 21, 2, 'New Hampshire', 'NH', 1),
(30, 21, 2, 'New Jersey', 'NJ', 1),
(31, 21, 2, 'New Mexico', 'NM', 1),
(32, 21, 2, 'New York', 'NY', 1),
(33, 21, 2, 'North Carolina', 'NC', 1),
(34, 21, 2, 'North Dakota', 'ND', 1),
(35, 21, 2, 'Ohio', 'OH', 1),
(36, 21, 2, 'Oklahoma', 'OK', 1),
(37, 21, 2, 'Oregon', 'OR', 1),
(38, 21, 2, 'Pennsylvania', 'PA', 1),
(39, 21, 2, 'Rhode Island', 'RI', 1),
(40, 21, 2, 'South Carolina', 'SC', 1),
(41, 21, 2, 'South Dakota', 'SD', 1),
(42, 21, 2, 'Tennessee', 'TN', 1),
(43, 21, 2, 'Texas', 'TX', 1),
(44, 21, 2, 'Utah', 'UT', 1),
(45, 21, 2, 'Vermont', 'VT', 1),
(46, 21, 2, 'Virginia', 'VA', 1),
(47, 21, 2, 'Washington', 'WA', 1),
(48, 21, 2, 'West Virginia', 'WV', 1),
(49, 21, 2, 'Wisconsin', 'WI', 1),
(50, 21, 2, 'Wyoming', 'WY', 1),
(51, 21, 2, 'Puerto Rico', 'PR', 1),
(52, 21, 2, 'US Virgin Islands', 'VI', 1);

INSERT INTO `PREFIX_currency` (name, iso_code, sign, blank, conversion_rate, format, deleted) VALUES
('Euro', 'EUR', '€', 1, 1, 2, 0),
('Dollar', 'USD', '$', 0, 1.47, 1, 0),
('Pound', 'GBP', '£', 0, 0.8, 1, 0);

INSERT INTO `PREFIX_tax` (`id_tax`, `rate`) VALUES
(1, 19.6),
(2, 5.5),
(3, 17.5);

INSERT INTO `PREFIX_tax_lang` (`id_tax`, `id_lang`, `name`) VALUES
(1, 1, 'VAT 19.6%'),
(1, 2, 'TVA 19.6%'),
(2, 1, 'VAT 5.5%'),
(2, 2, 'TVA 5.5%'),
(3, 1, 'VAT 17.5%'),
(3, 2, 'TVA UK 17.5%');

INSERT INTO `PREFIX_tax_zone` (`id_tax`, `id_zone`) VALUES
(1, 1),
(2, 1);

INSERT INTO `PREFIX_image_type` (`id_image_type`, `name`, `width`, `height`, `products`, `categories`, `manufacturers`, `suppliers`, `scenes`) VALUES
(1, 'small', 45, 45, 1, 1, 1, 1, 0),
(2, 'medium', 80, 80, 1, 1, 1, 1, 0),
(3, 'large', 300, 300, 1, 1, 1, 1, 0),
(4, 'thickbox', 600, 600, 1, 0, 0, 0, 0),
(5, 'category', 500, 150, 0, 1, 0, 0, 0),
(6, 'home', 129, 129, 1, 0, 0, 0, 0),
(7, 'large_scene', 556, 200, 0, 0, 0, 0, 1),
(8, 'thumb_scene', 161, 58, 0, 0, 0, 0, 1);

INSERT INTO `PREFIX_contact_lang` (`id_contact`, `id_lang`, `name`, `description`) VALUES
(1, 1, 'Webmaster', 'If a technical problem occurs on this website'),
(1, 2, 'Webmaster', 'Si un problème technique survient sur le site'),
(2, 1, 'Customer service', 'For any question about a product, an order'),
(2, 2, 'Service client', 'Pour toute question ou réclamation sur une commande');

INSERT INTO `PREFIX_discount_type` (`id_discount_type`) VALUES (1),(2),(3);
INSERT INTO `PREFIX_discount_type_lang` (`id_discount_type`, `id_lang`, `name`) VALUES
(1, 1, 'Discount on order (%)'),
(2, 1, 'Discount on order (amount)'),
(3, 1, 'Free shipping'),
(1, 2, 'Réduction sur la commande (%)'),
(2, 2, 'Réduction sur la commande (montant)'),
(3, 2, 'Frais de port gratuits');

INSERT INTO `PREFIX_access` (`id_profile`, `id_tab`, `view`, `add`, `edit`, `delete`) VALUES
(1, 1, 1, 1, 1, 1),
(1, 2, 1, 1, 1, 1),
(1, 3, 1, 1, 1, 1),
(1, 4, 1, 1, 1, 1),
(1, 5, 1, 1, 1, 1),
(1, 6, 1, 1, 1, 1),
(1, 7, 1, 1, 1, 1),
(1, 8, 1, 1, 1, 1),
(1, 9, 1, 1, 1, 1),
(1, 10, 1, 1, 1, 1),
(1, 11, 1, 1, 1, 1),
(1, 12, 1, 1, 1, 1),
(1, 13, 1, 1, 1, 1),
(1, 14, 1, 1, 1, 1),
(1, 15, 1, 1, 1, 1),
(1, 16, 1, 1, 1, 1),
(1, 17, 1, 1, 1, 1),
(1, 18, 1, 1, 1, 1),
(1, 19, 1, 1, 1, 1),
(1, 20, 1, 1, 1, 1),
(1, 21, 1, 1, 1, 1),
(1, 22, 1, 1, 1, 1),
(1, 23, 1, 1, 1, 1),
(1, 24, 1, 1, 1, 1),
(1, 25, 1, 1, 1, 1),
(1, 26, 1, 1, 1, 1),
(1, 27, 1, 1, 1, 1),
(1, 28, 1, 1, 1, 1),
(1, 29, 1, 1, 1, 1),
(1, 30, 1, 1, 1, 1),
(1, 31, 1, 1, 1, 1),
(1, 32, 1, 1, 1, 1),
(1, 33, 1, 1, 1, 1),
(1, 34, 1, 1, 1, 1),
(1, 35, 1, 1, 1, 1),
(1, 36, 1, 1, 1, 1),
(1, 37, 1, 1, 1, 1),
(1, 38, 1, 1, 1, 1),
(1, 39, 1, 1, 1, 1),
(1, 40, 1, 1, 1, 1),
(1, 41, 1, 1, 1, 1),
(1, 42, 1, 1, 1, 1),
(1, 43, 1, 1, 1, 1),
(1, 44, 1, 1, 1, 1),
(1, 45, 1, 1, 1, 1),
(1, 46, 1, 1, 1, 1),
(1, 47, 1, 1, 1, 1),
(1, 48, 1, 1, 1, 1),
(1, 49, 1, 1, 1, 1),
(1, 50, 1, 1, 1, 1),
(1, 51, 1, 1, 1, 1),
(1, 52, 1, 1, 1, 1),
(1, 53, 1, 1, 1, 1),
(1, 54, 1, 1, 1, 1),
(1, 55, 1, 1, 1, 1),
(1, 56, 1, 1, 1, 1),
(1, 57, 1, 1, 1, 1),
(1, 58, 1, 1, 1, 1);

INSERT INTO `PREFIX_profile` (`id_profile`) VALUES (1);
INSERT INTO `PREFIX_profile_lang` (`id_profile`, `id_lang`, `name`) VALUES
(1, 1, 'Administrator'),
(1, 2, 'Administrateur');

INSERT INTO `PREFIX_tab` (`id_tab`, `class_name`, `id_parent`, `position`) VALUES
(1, 'AdminCatalog', 0, 1),
(2, 'AdminCustomers', 0, 2),
(3, 'AdminOrders', 0, 3),
(4, 'AdminPayment', 0, 4),
(5, 'AdminShipping', 0, 5),
(6, 'AdminStats', 0, 6),
(7, 'AdminModules', 0, 7),
(29, 'AdminEmployees', 0, 8),
(8, 'AdminPreferences', 0, 9),
(9, 'AdminTools', 0, 10),
(10, 'AdminManufacturers', 1, 1),
(34, 'AdminSuppliers', 1, 2),
(11, 'AdminAttributesGroups', 1, 3),
(36, 'AdminFeatures', 1, 4),
(12, 'AdminAddresses', 2, 1),
(42, 'AdminInvoices', 3, 1),
(55, 'AdminDeliverySlip', 3, 2),
(47, 'AdminReturn', 3, 3),
(49, 'AdminSlip', 3, 4),
(13, 'AdminOrdersStates', 3, 5),
(54, 'AdminOrderMessage', 3, 6),
(14, 'AdminDiscounts', 4, 3),
(15, 'AdminCurrencies', 4, 1),
(16, 'AdminTaxes', 4, 2),
(17, 'AdminCarriers', 5, 1),
(46, 'AdminStates', 5, 2),
(18, 'AdminCountries', 5, 3),
(19, 'AdminZones', 5, 4),
(20, 'AdminRangePrice', 5, 5),
(21, 'AdminRangeWeight', 5, 6),
(50, 'AdminStatsModules', 6, 1),
(51, 'AdminStatsConf', 6, 4),
(22, 'AdminModulesPositions', 7, 1),
(30, 'AdminProfiles', 29, 1),
(31, 'AdminAccess', 29, 2),
(28, 'AdminContacts', 29, 3),
(39, 'AdminContact', 8, 1),
(38, 'AdminAppearance', 8, 2),
(56, 'AdminMeta', 8, 3),
(27, 'AdminPPreferences', 8, 4),
(24, 'AdminEmails', 8, 5),
(26, 'AdminImages', 8, 6),
(23, 'AdminDb', 8, 7),
(48, 'AdminPDF', 8, 8),
(44, 'AdminLocalization', 8, 9),
(32, 'AdminLanguages', 9, 1),
(33, 'AdminTranslations', 9, 2),
(35, 'AdminTabs', 9, 3),
(37, 'AdminQuickAccesses', 9, 4),
(40, 'AdminAliases', 9, 5),
(41, 'AdminImport', 9, 6),
(52, 'AdminSubDomains', 9, 7),
(53, 'AdminBackup', 9, 8),
(43, 'AdminSearch', -1, 0),
(57, 'AdminCMS', 9, 9),
(58, 'AdminScenes', 1, 5);

INSERT INTO `PREFIX_tab_lang` (`id_lang`, `id_tab`, `name`) VALUES
(1, 1, 'Catalog'),
(1, 2, 'Customers'),
(1, 3, 'Orders'),
(1, 4, 'Payment'),
(1, 5, 'Shipping'),
(1, 6, 'Stats'),
(1, 7, 'Modules'),
(1, 8, 'Preferences'),
(1, 9, 'Tools'),
(1, 10, 'Manufacturers'),
(1, 11, 'Attributes and groups'),
(1, 12, 'Addresses'),
(1, 13, 'Order statuses'),
(1, 14, 'Vouchers'),
(1, 15, 'Currencies'),
(1, 16, 'Taxes'),
(1, 17, 'Carriers'),
(1, 18, 'Countries'),
(1, 19, 'Zones'),
(1, 20, 'Price ranges'),
(1, 21, 'Weight ranges'),
(1, 22, 'Positions'),
(1, 23, 'Database'),
(1, 24, 'Email'),
(1, 26, 'Image'),
(1, 27, 'Products'),
(1, 28, 'Contacts'),
(1, 29, 'Employees'),
(1, 30, 'Profiles'),
(1, 31, 'Permissions'),
(1, 32, 'Languages'),
(1, 33, 'Translations'),
(1, 34, 'Suppliers'),
(1, 35, 'Tabs'),
(1, 36, 'Features'),
(1, 37, 'Quick Accesses'),
(1, 38, 'Appearance'),
(1, 39, 'Contact'),
(1, 40, 'Aliases'),
(1, 41, 'Import'),
(1, 42, 'Invoices'),
(1, 43, 'Search'),
(1, 44, 'Localization'),
(1, 46, 'States'),
(1, 47, 'Merchandise return (RMAs)'),
(1, 48, 'PDF'),
(1, 49, 'Credit slips'),
(1, 50, 'Modules'),
(1, 51, 'Settings'),
(1, 52, 'Subdomains'),
(1, 53, 'Database backup'),
(1, 54, 'Order Messages'),
(1, 55, 'Delivery slips'),
(1, 56, 'Meta-Tags'),
(1, 57, 'CMS'),
(1, 58, 'Image mapping'),
(2, 1, 'Catalogue'),
(2, 2, 'Clients'),
(2, 3, 'Commandes'),
(2, 4, 'Paiement'),
(2, 5, 'Transport'),
(2, 6, 'Stats'),
(2, 7, 'Modules'),
(2, 8, 'Préférences'),
(2, 9, 'Outils'),
(2, 10, 'Fabricants'),
(2, 11, 'Attributs et groupes'),
(2, 12, 'Adresses'),
(2, 13, 'Statuts des commandes'),
(2, 14, 'Bons de réduction'),
(2, 15, 'Devises'),
(2, 16, 'Taxes'),
(2, 17, 'Transporteurs'),
(2, 18, 'Pays'),
(2, 19, 'Zones'),
(2, 20, 'Tranches de prix'),
(2, 21, 'Tranches de poids'),
(2, 22, 'Positions'),
(2, 23, 'Base de données'),
(2, 24, 'Emails'),
(2, 26, 'Images'),
(2, 27, 'Produits'),
(2, 28, 'Contacts'),
(2, 29, 'Employés'),
(2, 30, 'Profils'),
(2, 31, 'Permissions'),
(2, 32, 'Langues'),
(2, 33, 'Traductions'),
(2, 34, 'Fournisseurs'),
(2, 35, 'Onglets'),
(2, 36, 'Caractéristiques'),
(2, 37, 'Accès rapide'),
(2, 38, 'Apparence'),
(2, 39, 'Coordonnées'),
(2, 40, 'Alias'),
(2, 41, 'Import'),
(2, 42, 'Factures'),
(2, 43, 'Recherche'),
(2, 44, 'Localisation'),
(2, 46, 'Etats'),
(2, 47, 'Retours produits'),
(2, 48, 'PDF'),
(2, 49, 'Avoirs'),
(2, 50, 'Modules'),
(2, 51, 'Configuration'),
(2, 52, 'Sous domaines'),
(2, 53, 'Sauvegarde BDD'),
(2, 54, 'Messages prédéfinis'),
(2, 55, 'Bons de livraison'),
(2, 56, 'Méta-Tags'),
(2, 57, 'CMS'),
(2, 58, 'Scènes');

INSERT IGNORE INTO `PREFIX_tab_lang` (`id_tab`, `id_lang`, `name`)
    (SELECT `id_tab`, id_lang, (SELECT tl.`name`
        FROM `PREFIX_tab_lang` tl
        WHERE tl.`id_lang` = (SELECT c.`value`
            FROM `PREFIX_configuration` c
            WHERE c.`name` = 'PS_LANG_DEFAULT' LIMIT 1) AND tl.`id_tab`=`PREFIX_tab`.`id_tab`)
    FROM `PREFIX_lang` CROSS JOIN `PREFIX_tab`);

INSERT INTO `PREFIX_quick_access` (`id_quick_access`, `link`, `new_window`) VALUES
(1, 'index.php', 0),
(2, '../', 1),
(3, 'index.php?tab=AdminCatalog&addcategory', 0),
(4, 'index.php?tab=AdminCatalog&addproduct', 0),
(5, 'index.php?tab=AdminDiscounts&adddiscount', 0);

INSERT INTO `PREFIX_quick_access_lang` (`id_quick_access`, `id_lang`, `name`) VALUES
(1, 1, 'Home'),
(1, 2, 'Accueil'),
(2, 1, 'My Shop'),
(2, 2, 'Ma boutique'),
(3, 1, 'New category'),
(3, 2, 'Nouvelle catégorie'),
(4, 1, 'New product'),
(4, 2, 'Nouveau produit'),
(5, 1, 'New voucher'),
(5, 2, 'Nouveau bon de réduction');

INSERT INTO PREFIX_order_return_state (`id_order_return_state`, `color`) VALUES
(1, '#ADD8E6'),
(2, '#EEDDFF'),
(3, '#DDFFAA'),
(4, '#FFD3D3'),
(5, '#FFFFBB');

INSERT INTO PREFIX_order_return_state_lang (`id_order_return_state`, `id_lang`, `name`) VALUES
(1, 1, 'Waiting for confirmation'),
(2, 1, 'Waiting for package'),
(3, 1, 'Package received'),
(4, 1, 'Return denied'),
(5, 1, 'Return completed'),
(1, 2, 'En attente de confirmation'),
(2, 2, 'En attente du colis'),
(3, 2, 'Colis reçu'),
(4, 2, 'Retour refusé'),
(5, 2, 'Retour terminé');

INSERT INTO `PREFIX_meta` (`id_meta`, `page`) VALUES
(1, '404'),
(2, 'best-sales'),
(3, 'contact-form'),
(4, 'index'),
(5, 'manufacturer'),
(6, 'new-products'),
(7, 'password'),
(8, 'prices-drop'),
(9, 'sitemap'),
(10, 'supplier');

INSERT INTO `PREFIX_meta_lang` (`id_meta`, `id_lang`, `title`, `description`, `keywords`) VALUES
(1, 1, '404 error', 'This page cannot be found', 'error, 404, not found'),
(1, 2, 'Erreur 404', 'Cette page est introuvable', 'erreur, 404, introuvable'),
(2, 1, 'Best sales', 'Our best sales', 'best sales'),
(2, 2, 'Meilleures ventes', 'Liste de nos produits les mieux vendus', 'meilleures ventes'),
(3, 1, 'Contact us', 'Use our form to contact us', 'contact, form, e-mail'),
(3, 2, 'Contactez-nous', 'Utilisez notre formulaire pour nous contacter', 'contact, formulaire, e-mail'),
(4, 1, '', 'Shop powered by PrestaShop', 'shop, prestashop'),
(4, 2, '', 'Boutique propulsée par PrestaShop', 'boutique, prestashop'),
(5, 1, 'Manufacturers', 'Manufacturers list', 'manufacturer'),
(5, 2, 'Fabricants', 'Liste de nos fabricants', 'fabricants'),
(6, 1, 'New products', 'Our new products', 'new, products'),
(6, 2, 'Nouveaux produits', 'Liste de nos nouveaux produits', 'nouveau, produit'),
(7, 1, 'Forgot your password', 'Enter your e-mail address used to register in goal to get e-mail with your new password', 'forgot, password, e-mail, new, reset'),
(7, 2, 'Mot de passe oublié', 'Renseignez votre adresse e-mail afin de recevoir votre nouveau mot de passe.', 'mot de passe, oublié, e-mail, nouveau, regénération'),
(8, 1, 'Specials', 'Our special products', 'special, prices drop'),
(8, 2, 'Promotions', 'Nos produits en promotion', 'promotion, réduction'),
(9, 1, 'Sitemap', 'Lost ? Find what your are looking for', 'sitemap'),
(9, 2, 'Plan du site', 'Perdu ? Trouvez ce que vous cherchez', 'plan, site'),
(10, 1, 'Suppliers', 'Suppliers list', 'supplier'),
(10, 2, 'Fournisseurs', 'Liste de nos fournisseurs', 'fournisseurs');

/* Stats */
INSERT INTO `PREFIX_operating_system` (`name`) VALUES ('Windows XP'),('Windows Vista'),('MacOsX'),('Linux');
INSERT INTO `PREFIX_web_browser` (`name`) VALUES ('Safari'),('Firefox 2.x'),('Firefox 3.x'),('Opera'),('IE 6.x'),('IE 7.x'),('IE 8.x'),('Google Chrome');
INSERT INTO `PREFIX_page_type` (`name`) VALUES ('product.php'),('category.php'),('order.php'),('manufacturer.php');

/* SubDomains */
INSERT INTO PREFIX_subdomain (id_subdomain, name) VALUES (NULL, 'www');