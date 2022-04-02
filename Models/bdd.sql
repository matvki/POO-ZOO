-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Apr 02, 2022 at 10:15 AM
-- Server version: 5.7.32
-- PHP Version: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `animals`
--

-- --------------------------------------------------------

--
-- Table structure for table `AnimalCaretaker`
--

CREATE TABLE `AnimalCaretaker`
(
    `id`        int(11) NOT NULL,
    `animal`    int(11) NOT NULL,
    `caretaker` int(11) NOT NULL
) ENGINE = InnoDB
  DEFAULT CHARSET = utf8;

--
-- Dumping data for table `AnimalCaretaker`
--

INSERT INTO `AnimalCaretaker` (`id`, `animal`, `caretaker`)
VALUES (1, 1, 1),
       (2, 2, 2);

-- --------------------------------------------------------

--
-- Table structure for table `AnimalEnclosure`
--

CREATE TABLE `AnimalEnclosure`
(
    `id`        int(11) NOT NULL,
    `animal`    int(11) NOT NULL,
    `enclosure` int(11) NOT NULL
) ENGINE = InnoDB
  DEFAULT CHARSET = utf8;

--
-- Dumping data for table `AnimalEnclosure`
--

INSERT INTO `AnimalEnclosure` (`id`, `animal`, `enclosure`)
VALUES (1, 1, 1),
       (2, 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `Animals`
--

CREATE TABLE `Animals`
(
    `id`          int(11)      NOT NULL,
    `name`        varchar(255) NOT NULL,
    `age`         date         NOT NULL,
    `specie`      varchar(255) NOT NULL,
    `arrival`     date         NOT NULL,
    `gender`      varchar(255) NOT NULL,
    `parents`     varchar(255) NOT NULL,
    `food`        varchar(255) NOT NULL,
    `treatment`   varchar(255) NOT NULL,
    `environment` varchar(255) NOT NULL,
    `death`       date         DEFAULT NULL,
    `information` varchar(255) DEFAULT NULL
) ENGINE = InnoDB
  DEFAULT CHARSET = utf8;

--
-- Dumping data for table `Animals`
--

INSERT INTO `Animals` (`id`, `name`, `age`, `specie`, `arrival`, `gender`, `parents`, `food`, `treatment`,
                       `environment`, `death`, `information`)
VALUES (1, 'gris', '2017-03-20', 'loup gris', '2020-01-01', 'male', 'N/A', 'carnivore', 'N/A', 'foret', NULL, NULL),
       (2, 'grise', '2017-03-27', 'loup gris', '2020-01-10', 'femelle', 'N/A', 'carnivore', 'N/A', 'foret', NULL, NULL),
       (3, 'test1', '2022-04-02', 'test', '2022-04-02', 'test', 'N/A', 'test', 'N/A', 'test', '1900-01-01', 'null'),
       (4, 'test', '2022-04-02', 'test', '2022-04-02', 'test', 'N/A', 'test', 'N/A', 'test', '1900-01-01', 'null');

-- --------------------------------------------------------

--
-- Table structure for table `Caretaker`
--

CREATE TABLE `Caretaker`
(
    `id`              int(11)      NOT NULL,
    `firstname`       varchar(255) NOT NULL,
    `lastname`        varchar(255) NOT NULL,
    `arrival`         date         NOT NULL,
    `gender`          varchar(255) NOT NULL,
    `number`          tinyblob     NOT NULL,
    `email`           varchar(255) NOT NULL,
    `picture`         blob,
    `specialty`       varchar(255) NOT NULL,
    `superior`        int(11)      DEFAULT NULL,
    `exitDate`        date         DEFAULT NULL,
    `information`     varchar(255) DEFAULT NULL,
    `nbrEnclosureMax` int(11)      NOT NULL
) ENGINE = InnoDB
  DEFAULT CHARSET = utf8;

--
-- Dumping data for table `Caretaker`
--

INSERT INTO `Caretaker` (`id`, `firstname`, `lastname`, `arrival`, `gender`, `number`, `email`, `picture`, `specialty`,
                         `superior`, `exitDate`, `information`, `nbrEnclosureMax`)
VALUES (1, 'test', 'caminade', '2019-05-22', 'femme', 0x363030303030303030, 'test.test@gmail.com',
        0xefbbbf37514343554768766447397a6147397749444d754d414134516b6c4e42415141414141414147556341566f414178736c527877424141414341415163416741414167414548414c6d41454e6f64485277637a6f764c325a7361574e726369356a623230765a53396f4f4531524f4446735233567053335579533168544e6b6471556d46505557646e62325a5a633259336357355355476c6d643078584f584e6e4a544e454841494141414941424144,
        'loup', 2, '1900-01-01', 'null', 3),
       (2, 'didier', 'dupont', '2007-01-01', 'homme', 0x30363030303030303030, 'test.test@gmail.com',
        0x37514347554768766447397a6147397749444d754d414134516b6c4e424151414141414141476b6341566f414178736c527877424141414341415163416741414167414548414c6d4145646f64485277637a6f764c325a7361574e726369356a623230765a5339726157644a61584a51616a6c474d6a68575930466f645670684a544a475a6d464b545656445932684251535579516d566e553364355156413354314a6d6379557a524277434141414341415141,
        'loup', NULL, NULL, NULL, 5),
       (4, 'test', 'test', '2022-04-02', 'test', 0x74746573, 'test@gmail.com', NULL, 'test', NULL, '1900-01-01', 'N/A',
        0);

-- --------------------------------------------------------

--
-- Table structure for table `Enclosure`
--

CREATE TABLE `Enclosure`
(
    `id`          int(11)      NOT NULL,
    `environment` varchar(255) NOT NULL,
    `area`        varchar(255) DEFAULT NULL,
    `capacity`    int(11)      NOT NULL
) ENGINE = InnoDB
  DEFAULT CHARSET = utf8;

--
-- Dumping data for table `Enclosure`
--

INSERT INTO `Enclosure` (`id`, `environment`, `area`, `capacity`)
VALUES (1, 'boisé', '100', 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `AnimalCaretaker`
--
ALTER TABLE `AnimalCaretaker`
    ADD PRIMARY KEY (`id`),
    ADD UNIQUE KEY `AnimalCaretaker_id_uindex` (`id`),
    ADD KEY `AnimalCaretaker_Animals__fk` (`animal`),
    ADD KEY `AnimalCaretaker_Caretaker__fk` (`caretaker`);

--
-- Indexes for table `AnimalEnclosure`
--
ALTER TABLE `AnimalEnclosure`
    ADD PRIMARY KEY (`id`),
    ADD UNIQUE KEY `AnimalEnclosure_id_uindex` (`id`),
    ADD KEY `AnimalEnclosure_Animals__fk` (`animal`),
    ADD KEY `AnimalEnclosure_Enclosure__fk` (`enclosure`);

--
-- Indexes for table `Animals`
--
ALTER TABLE `Animals`
    ADD PRIMARY KEY (`id`),
    ADD UNIQUE KEY `animals_id_uindex` (`id`);

--
-- Indexes for table `Caretaker`
--
ALTER TABLE `Caretaker`
    ADD PRIMARY KEY (`id`),
    ADD UNIQUE KEY `Caretaker_id_uindex` (`id`);

--
-- Indexes for table `Enclosure`
--
ALTER TABLE `Enclosure`
    ADD PRIMARY KEY (`id`),
    ADD UNIQUE KEY `Enclosure_id_uindex` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `AnimalCaretaker`
--
ALTER TABLE `AnimalCaretaker`
    MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,
    AUTO_INCREMENT = 3;

--
-- AUTO_INCREMENT for table `AnimalEnclosure`
--
ALTER TABLE `AnimalEnclosure`
    MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,
    AUTO_INCREMENT = 3;

--
-- AUTO_INCREMENT for table `Animals`
--
ALTER TABLE `Animals`
    MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,
    AUTO_INCREMENT = 12;

--
-- AUTO_INCREMENT for table `Caretaker`
--
ALTER TABLE `Caretaker`
    MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,
    AUTO_INCREMENT = 5;

--
-- AUTO_INCREMENT for table `Enclosure`
--
ALTER TABLE `Enclosure`
    MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,
    AUTO_INCREMENT = 2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `AnimalCaretaker`
--
ALTER TABLE `AnimalCaretaker`
    ADD CONSTRAINT `AnimalCaretaker_Animals__fk` FOREIGN KEY (`animal`) REFERENCES `Animals` (`id`),
    ADD CONSTRAINT `AnimalCaretaker_Caretaker__fk` FOREIGN KEY (`caretaker`) REFERENCES `Caretaker` (`id`);

--
-- Constraints for table `AnimalEnclosure`
--
ALTER TABLE `AnimalEnclosure`
    ADD CONSTRAINT `AnimalEnclosure_Animals__fk` FOREIGN KEY (`animal`) REFERENCES `Animals` (`id`),
    ADD CONSTRAINT `AnimalEnclosure_Enclosure__fk` FOREIGN KEY (`enclosure`) REFERENCES `Enclosure` (`id`);
