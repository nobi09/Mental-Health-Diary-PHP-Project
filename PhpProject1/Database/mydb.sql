-- MySQL dump 10.13  Distrib 5.7.17, for Win64 (x86_64)
--
-- Host: 127.0.0.1    Database: mydb
-- ------------------------------------------------------
-- Server version	5.5.5-10.4.11-MariaDB

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `answers`
--

DROP TABLE IF EXISTS `answers`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `answers` (
  `aid` int(11) NOT NULL AUTO_INCREMENT,
  `answer` varchar(45) DEFAULT NULL,
  `answ_id` varchar(45) NOT NULL,
  PRIMARY KEY (`aid`)
) ENGINE=InnoDB AUTO_INCREMENT=73 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `answers`
--

LOCK TABLES `answers` WRITE;
/*!40000 ALTER TABLE `answers` DISABLE KEYS */;
INSERT INTO `answers` VALUES (1,'Never','1'),(2,'A few days','1'),(3,'More than half the days','1'),(4,'Nearly everyday','1'),(5,'Never','2'),(6,'A few days','2'),(7,'More than half the days','2'),(8,'Nearly everyday','2'),(9,'Never','3'),(10,'A few days','3'),(11,'More than half the days','3'),(12,'Nearly everyday','3'),(13,'Never','4'),(14,'A few days','4'),(15,'More than half the days','4'),(16,'Nearly everyday','4'),(17,'Never','5'),(18,'A few days','5'),(19,'More than half the days','5'),(20,'Nearly everyday','5'),(21,'Never','6'),(22,'A few days','6'),(23,'More than half the days','6'),(24,'Nearly everyday','6'),(25,'Never','7'),(26,'A few days','7'),(27,'More than half the days','7'),(28,'Nearly everyday','7'),(29,'Never','8'),(30,'A few days','8'),(31,'More than half the days','8'),(32,'Nearly everyday','8'),(33,'Never','9'),(34,'A few days','9'),(35,'More than half the days','9'),(36,'Nearly everyday','9'),(37,'Never','10'),(38,'A few days','10'),(39,'More than half the days','10'),(40,'Nearly everyday','10'),(41,'Never','11'),(42,'A few days','11'),(43,'More than half the days','11'),(44,'Nearly everyday','11'),(45,'Never','12'),(46,'A few days','12'),(47,'More than half the days','12'),(48,'Nearly everyday','12'),(49,'Never','13'),(50,'A few days','13'),(51,'More than half the days','13'),(52,'Nearly everyday','13'),(53,'Never','14'),(54,'A few days','14'),(55,'More than half the days','14'),(56,'Nearly everyday','14'),(57,'Never','15'),(58,'A few days','15'),(59,'More than half the days','15'),(60,'Nearly everyday','15'),(61,'Never','16'),(62,'A few days','16'),(63,'More than half the days','16'),(64,'Nearly everyday','16'),(65,'Never','17'),(66,'A few days','17'),(67,'More than half the days','17'),(68,'Nearly everyday','17'),(69,'Never','18'),(70,'A few days','18'),(71,'More than half the days','18'),(72,'Nearly everyday','18');
/*!40000 ALTER TABLE `answers` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `diary`
--

DROP TABLE IF EXISTS `diary`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `diary` (
  `diary_page_date` varchar(45) NOT NULL,
  `page` varchar(600) NOT NULL,
  `user_username` varchar(45) NOT NULL,
  `score` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `diary`
--

LOCK TABLES `diary` WRITE;
/*!40000 ALTER TABLE `diary` DISABLE KEYS */;
INSERT INTO `diary` VALUES ('15/4/2999','“It crosses my mind that Cinna\'s calm and normal demeanor masks a complete madman.” ','ajajaj',''),('16/4/2999','“It crosses my mind that Cinna\'s calm and normal demeanor masks a complete madman.” ','ajajaj',''),('14/4/2999','So it went on for three whole days. Harry was filled alternately with restless energy that made him unable to settle to anything, during which he paced his bedroom again, furious at the whole lot of them for leaving him to stew in this mess, and with a lethargy so complete that he could lie on his bed for an hour at a time, staring dazedly into space, aching with dread at the thought of the Ministry hearing. ','nao123',''),('23/01/2020','Harry had no particular feeling about the Dursleys leaving. It made no difference to him whether they were in the house or not. He could not even summon the energy to get up and turn on his bedroom light. The room grew steadily darker around him as he lay listening to the night sounds through the window he kept open all the time, waiting for the blessed moment when Hedwig returned. The empty house creaked around him. The pipes gurgled. Harry lay there in a kind of stupor, thinking of nothing, suspended in misery. ','nao123',''),('Wed/03/2020 05:42','Harry had no particular feeling about the Dursleys leaving. It made no difference to him whether they were in the house or not. He could not even summon the energy to get up and turn on his bedroom light. The room grew steadily darker around him as he lay listening to the night sounds through the window he kept open all the time, waiting for the blessed moment when Hedwig returned.\r\nThe empty house creaked around him. The pipes gurgled. Harry lay there in a kind of stupor, thinking of nothing, suspended in misery. ','nao123',''),('2020/Mar/27/Fri 02:28','“HARRY! Ron, he’s here, Harry’s here! We didn’t hear you arrive!\r\nOh, how are you? Are you all right? Have you been furious with us? I\r\nbet you have, I know our letters were useless — but we couldn’t tell\r\nyou anything, Dumbledore made us swear we wouldn’t, oh, we’ve got\r\nso much to tell you, and you’ve got to tell us — the dementors! When\r\nwe heard — and that Ministry hearing — it’s just outrageous, I’ve\r\nlooked it all up, they can’t expel you, they just can’t, there’s provision\r\nin the Decree for the Restriction of Underage Sorcery for the use of\r\nmagic in life-threatening situations —” ','nao123',''),('2020/Mar/27/Fri 03:29','“HARRY! Ron, he’s here, Harry’s here! We didn’t hear you arrive!\r\nOh, how are you? Are you all right? Have you been furious with us? I\r\nbet you have, I know our letters were useless — but we couldn’t tell\r\nyou anything, Dumbledore made us swear we wouldn’t, oh, we’ve got\r\nso much to tell you, and you’ve got to tell us — the dementors! When\r\nwe heard — and that Ministry hearing — it’s just outrageous, I’ve\r\nlooked it all up, they can’t expel you, they just can’t, there’s provision\r\nin the Decree for the Restriction of Underage Sorcery for the use of\r\nmagic in life-threatening situations —” ','nao123',''),('15/4/2999','is good to be alive','nao123',''),('2020/Mar/27/Fri 04:08','The warm glow that had flared inside him at the sight of his two\r\nbest friends was extinguished as something icy flooded the pit of his\r\nstomach. All of a sudden — after yearning to see them for a solid\r\nmonth — he felt he would rather Ron and Hermione left him alone.\r\nThere was a strained silence in which Harry stroked Hedwig automatically, not looking at either of the others. ','nao123',''),('2020/Mar/27/Fri 04:09','The warm glow that had flared inside him at the sight of his two\r\nbest friends was extinguished as something icy flooded the pit of his\r\nstomach. All of a sudden — after yearning to see them for a solid\r\nmonth — he felt he would rather Ron and Hermione left him alone.\r\nThere was a strained silence in which Harry stroked Hedwig automatically, not looking at either of the others. ','nao123','');
/*!40000 ALTER TABLE `diary` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `professional`
--

DROP TABLE IF EXISTS `professional`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `professional` (
  `firstname` varchar(45) NOT NULL,
  `lastname` varchar(45) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `username` varchar(45) NOT NULL,
  `password` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `professional`
--

LOCK TABLES `professional` WRITE;
/*!40000 ALTER TABLE `professional` DISABLE KEYS */;
INSERT INTO `professional` VALUES ('john','smith','jsmith@gmail.com','j123','pa12345'),('kane','grey','jgrey@gmail.com','kg20','pb12345');
/*!40000 ALTER TABLE `professional` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `questionnaire`
--

DROP TABLE IF EXISTS `questionnaire`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `questionnaire` (
  `symptom` varchar(25) NOT NULL,
  `score` int(11) DEFAULT NULL,
  `user_username` varchar(45) NOT NULL,
  `datetaken` varchar(45) DEFAULT NULL,
  KEY `fk_questionnaire_user1_idx` (`user_username`),
  CONSTRAINT `fk_questionnaire_user1` FOREIGN KEY (`user_username`) REFERENCES `user` (`username`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `questionnaire`
--

LOCK TABLES `questionnaire` WRITE;
/*!40000 ALTER TABLE `questionnaire` DISABLE KEYS */;
INSERT INTO `questionnaire` VALUES ('anxiety',7,'nao123','2020/03/22'),('depression',6,'nao123','2020/03/22'),('sdisorder',10,'nao123','2020/03/22'),('subabuse',10,'nao123','2020/03/22'),('anxiety',8,'nao123','2020/03/25'),('depression',8,'nao123','2020/03/25'),('sdisorder',8,'nao123','2020/03/25'),('subabuse',8,'nao123','2020/03/25'),('anxiety',6,'nao123','2020/03/27'),('depression',11,'nao123','2020/03/27'),('sdisorder',11,'nao123','2020/03/27'),('subabuse',9,'nao123','2020/03/27'),('anxiety',8,'ajajaj','2020/03/27'),('depression',6,'ajajaj','2020/03/27'),('sdisorder',6,'ajajaj','2020/03/27'),('subabuse',8,'ajajaj','2020/03/27'),('anxiety',8,'ajajaj','2020/03/25'),('depression',11,'ajajaj','2020/03/25'),('sdisorder',4,'ajajaj','2020/03/25'),('subabuse',12,'ajajaj','2020/03/25'),('anxiety',8,'ajajaj','2020/03/29'),('depression',9,'ajajaj','2020/03/29'),('sdisorder',8,'ajajaj','2020/03/29'),('subabuse',9,'ajajaj','2020/03/29'),('anxiety',12,'ajajaj','2020/02/25'),('depression',9,'ajajaj','2020/02/25'),('sdisorder',4,'ajajaj','2020/02/25'),('subabuse',15,'ajajaj','2020/02/25');
/*!40000 ALTER TABLE `questionnaire` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `questions`
--

DROP TABLE IF EXISTS `questions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `questions` (
  `questionid` int(11) NOT NULL AUTO_INCREMENT,
  `question` varchar(100) DEFAULT NULL,
  `answers_aid` int(11) NOT NULL,
  PRIMARY KEY (`questionid`),
  KEY `fk_questions_answers1_idx` (`answers_aid`),
  CONSTRAINT `fk_questions_answers1` FOREIGN KEY (`answers_aid`) REFERENCES `answers` (`aid`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `questions`
--

LOCK TABLES `questions` WRITE;
/*!40000 ALTER TABLE `questions` DISABLE KEYS */;
INSERT INTO `questions` VALUES (1,'Nervousness or shakiness inside',1),(2,'Spells of terror or panic',5),(3,'Worrying too much about things',9),(4,'Fearfulness',13),(5,'Loneliness',17),(6,'Self Blame',21),(7,'Feeling of being stuck in life',25),(8,'Feeling of worthlessness',29),(10,'Like you should cut out a particular habit/activity',33),(11,'Annoyed by people criticizing said habit/activity',37),(12,'Bad, guilty or shame about your said habit/activity',41),(13,'Felt an impulse or craving for said activity when stressed or at inopportune times',45),(14,'Headaches',49),(15,'Dizzines and faintness',53),(16,'Pains in heart and chest',57),(17,'Trouble breathing',61);
/*!40000 ALTER TABLE `questions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user` (
  `firstname` varchar(45) NOT NULL,
  `lastname` varchar(45) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `username` varchar(45) NOT NULL,
  `password` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user`
--

LOCK TABLES `user` WRITE;
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` VALUES ('alan','barnaby','abab@gmail.com','ajajaj','hellyeah123'),('anna','shee','ashe@yahoo.com','banshee123','casjncsui123'),('mamo','yang','maiyang@yahoo.ie','my122','abcd123'),('nana','olo','nao@gmail.com','nao123','ciao123'),('nathan','sung','nsung@outlook.it','nsung123','nirvana123'),('sam','price','vedo@dota.com','samP','sam123');
/*!40000 ALTER TABLE `user` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user_has_professional`
--

DROP TABLE IF EXISTS `user_has_professional`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user_has_professional` (
  `user_username` varchar(45) NOT NULL,
  `professional_username` varchar(45) NOT NULL,
  PRIMARY KEY (`user_username`,`professional_username`),
  KEY `fk_user_has_professional_professional1_idx` (`professional_username`),
  KEY `fk_user_has_professional_user1_idx` (`user_username`),
  CONSTRAINT `fk_user_has_professional_professional1` FOREIGN KEY (`professional_username`) REFERENCES `professional` (`username`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_user_has_professional_user1` FOREIGN KEY (`user_username`) REFERENCES `user` (`username`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user_has_professional`
--

LOCK TABLES `user_has_professional` WRITE;
/*!40000 ALTER TABLE `user_has_professional` DISABLE KEYS */;
/*!40000 ALTER TABLE `user_has_professional` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping routines for database 'mydb'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2020-03-30 10:48:36
