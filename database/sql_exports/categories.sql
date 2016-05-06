INSERT INTO `categories` (`id`, `name`, `slug`, `parent_id`, `created_at`, `updated_at`) VALUES
(1, 'Sensors', 'sensors', 0, '2016-04-21 00:00:00', NULL),
(2, 'Processing', 'processing', 0, '2016-04-21 00:00:00', NULL),
(3, 'Communications', 'communications', 0, '2016-04-21 00:00:00', NULL),
(4, 'User Interface', 'user_interface', 0, '2016-04-21 00:00:00', NULL),
(5, 'Storage', 'storage', 0, '2016-04-23 00:00:00', NULL),
(6, 'Temperature', 'temperature', 1, '2016-04-23 00:00:00', NULL),
(7, 'Accelerometer', 'accelerometer', 1, '2016-04-23 00:00:00', NULL),
(8, 'Arduino', 'arduino', 2, '2016-04-23 00:00:00', NULL),
(9, 'Atmega', 'atmega', 2, '2016-04-16 00:00:00', NULL),
(10, 'Bluetooth', 'bluetooth', 3, '2016-04-23 00:00:00', NULL),
(11, 'Wifi', 'wifi', 3, '2016-04-23 00:00:00', NULL),
(12, 'USB', 'usb', 3, '2016-04-23 00:00:00', NULL),
(13, 'SD Card', 'sd_card', 5, '2016-04-23 00:00:00', NULL),
(14, 'Button', 'button', 4, '2016-04-23 00:00:00', NULL),
(15, 'LCD', 'lcd', 4, '2016-04-23 00:00:00', NULL),
(16, 'Eeprom', 'eeprom', 5, '2016-04-23 00:00:00', NULL);