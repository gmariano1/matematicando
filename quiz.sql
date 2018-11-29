CREATE TABLE `quiz` (
  `id` int PRIMARY KEY NOT NULL,
  `que` text NOT NULL,
  `option 1` varchar(222) NOT NULL,
  `option 2` varchar(222) NOT NULL,
  `option 3` varchar(222) NOT NULL,
  `option 4` varchar(222) NOT NULL,
  `ans` varchar(222) NOT NULL
);

CREATE TABLE rank (
	id int PRIMARY KEY NOT NULL AUTO_INCREMENT,
	nome varchar(200) NOT NULL,
	pont int NOT NULL

);

INSERT INTO `quiz` (`id`, `que`, `option 1`, `option 2`, `option 3`, `option 4`, `ans`) VALUES
(1, 'Quanto é 3+3', '2', '4', '6', '8', '6'),
(2, 'Quanto é 3*5', '9', '10', '15', '21', '15'),
(3, 'Quanto é 10/5', '7', '8', '2', '4', '2'),
(4, 'Quanto é 1+1', '2', '4', '10', '12', '2'),
(5, 'Quanto é 7*7', '26', '42', '49', '54', '49');