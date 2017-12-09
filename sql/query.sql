--
-- ajouter un champ user .. qui contient l'id de l'utilisateur (08/11/2017)
--
ALTER TABLE  `survey_answers` ADD  `user` INT DEFAULT 0 AFTER `answer_question_id`;

--
-- ajouter un champ created_at .. qui contient la date de reponse (08/11/2017)
--
ALTER TABLE `survey_answers` ADD `created_at` datetime NOT NULL DEFAULT NOW();

--
-- ajouter un champ question_back .. qui contient l'id de la page précédente (16/11/2017)
--
ALTER TABLE `survey_questions` ADD `question_back`  INT DEFAULT 0 AFTER `question_body`;
--
-- Augmenter la taille de la réponse (5/12/2017)
--
ALTER TABLE `survey_answers` CHANGE  `answer_body` `answer_body` VARCHAR(1000) DEFAULT '' ;
--
-- Augmenter la taille de la réponse (9/12/2017)
--
DROP TABLE IF EXISTS `survey_activity_answer`;
CREATE TABLE IF NOT EXISTS `survey_activity_answer` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `survey_id` int(11) NOT NULL,
  `question_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `DI` int(11) DEFAULT NULL,
  `DNIND` int(11) DEFAULT NULL,
  `DD` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=latin1;