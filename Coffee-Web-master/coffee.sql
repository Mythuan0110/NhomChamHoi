SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";

CREATE TABLE `coffee` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` varchar(15) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `coffee` (`id`, `name`, `price`,  `image`) VALUES
(1, 'Bạc Sỉu', 12.000,'uploads/bacsiu.jpg'),
(2, 'Cafe Đen', 10.000,'uploads/cafeden.jpg'),
(3, 'Cafe Sữa', 15.000,'uploads/cafesua.jpg');

ALTER TABLE `coffee`
    ADD PRIMARY KEY (`id`);

ALTER TABLE `coffee`
    MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;
