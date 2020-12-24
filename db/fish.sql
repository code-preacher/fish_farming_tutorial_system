

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin', '123456');

CREATE TABLE `book` (
  `sn` int(10) NOT NULL,
  `filen` text NOT NULL,
  `filed` text NOT NULL,
  `filep` varchar(200) NOT NULL,
  `date` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


CREATE TABLE `chat` (
  `id` int(30) NOT NULL,
  `chat` varchar(250) NOT NULL,
  `name` varchar(250) NOT NULL,
  `date` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


CREATE TABLE `register` (
  `id` int(30) NOT NULL,
  `fname` varchar(200) NOT NULL,
  `uname` varchar(200) NOT NULL,
  `password` varchar(50) NOT NULL,
  `pix` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


CREATE TABLE `video` (
  `sn` int(10) NOT NULL,
  `filen` text NOT NULL,
  `filed` text NOT NULL,
  `filep` varchar(200) NOT NULL,
  `date` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `book`
  ADD PRIMARY KEY (`sn`);


ALTER TABLE `chat`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `register`
  ADD PRIMARY KEY (`id`);


ALTER TABLE `video`
  ADD PRIMARY KEY (`sn`);


ALTER TABLE `book`
  MODIFY `sn` int(10) NOT NULL AUTO_INCREMENT;

ALTER TABLE `chat`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT;

ALTER TABLE `register`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT;

ALTER TABLE `video`
  MODIFY `sn` int(10) NOT NULL AUTO_INCREMENT;

