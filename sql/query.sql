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
-- Ajouter des champs dans la table ref_mail_list (21/12/2017)
--
ALTER TABLE `ref_mail_list` ADD `new_contact`  varchar(37) DEFAULT NULL AFTER `Personne_contact`;

ALTER TABLE `ref_mail_list` ADD `new_mail`  varchar(49) DEFAULT NULL AFTER `Contact_mail`;

ALTER TABLE `ref_mail_list` ADD `new_telephone`  varchar(14) DEFAULT NULL AFTER `contact_téléphonique`;