SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


CREATE TABLE `products` (
  `id` int NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` int NOT NULL,
  `image_url` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;


INSERT INTO `products` (`id`, `name`, `price`, `image_url`) VALUES
(1, 'Iphone', 12, 'https://luxtrade.pl/img/c/16.jpg'),
(2, 'Nokia', 11, 'https://www.mediaexpert.pl/media/cache/resolve/filemanager_original_jpg/images/poradniki_-_zdjcia/rankingi/telefon_dla_dziecka/Smartfon-OPPO-A53-4-128GB-Czarny-front-tyl.jpg'),
(7, 'Samsung', 10, 'https://www.orange.pl/medias/sys_master/root/images/h2b/hc9/10769786011678/samsung-a22-5g-lavender-front.png');


CREATE TABLE `user` (
  `id` int NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;


INSERT INTO `user` (`id`, `email`, `password`) VALUES
(2, 'admin@admin.pl', '202cb962ac59075b964b07152d234b70');

ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `products`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

ALTER TABLE `user`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;
