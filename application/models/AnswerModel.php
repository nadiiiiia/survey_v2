<?php

Class AnswerModel extends CI_Model {

    public function addAnswer($data) {
        $question_id = $data['answer_question_id'];
        $survey_id = $data['answer_survey_id'];
        $answer = $data['answer_body'];
        $user_id = $data['user_id'];
        $this->db->select('*');
        $this->db->from('survey_answers');
        $this->db->where('user_id', $user_id); //le meme utilisateur
        $this->db->where('answer_question_id', $question_id); //la meme question
        $this->db->where('answer_survey_id', $survey_id); //le meme questionnaire

        if ($this->db->count_all_results() == 0) { /// traitement si la réponse n'existe pas --> insert
            if ($this->db->insert('survey_answers', $data)) {
                return true;
            } else {
                return false;
            }
        } else {  /// traitement si la réponse existe --> update
            if ($this->db->set('answer_body', $answer)
                            ->where('answer_question_id', $question_id)
                            ->where('answer_survey_id', $survey_id)
                            ->where('user_id', $user_id)
                            ->update('survey_answers')) {
                return true;
            } else {
                return false;
            }
        }
    }

    public function addContact($contactData) {
        $entreprise = $contactData['Entreprise'];
        $Personne = $contactData['Personne_contact'];
        $mail = $contactData['Contact_mail'];
        $tel = $contactData['contact_téléphonique'];

        $this->db->select('*');
        $this->db->from('ref_mail_list');
        $this->db->where('Contact_mail', $mail); //le meme utilisateur

        if ($this->db->count_all_results() == 0) { /// traitement si la réponse n'existe pas --> insert
            if ($this->db->insert('ref_mail_list', $contactData)) {
                return true;
            } else {
                return false;
            }
        } else {  /// traitement si la réponse existe --> update
            if ($this->db->set('Entreprise', $entreprise)
                            ->set('Personne_contact', $Personne)
                            ->set('contact_téléphonique', $tel)
                            ->where('Contact_mail', $mail)
                            ->update('ref_mail_list')) {
                return true;
            } else {
                return false;
            }
        }
    }

    public function getAnswer($survey_id, $question_id, $user_id) {
        $query = $this->db->select('answer_body')
                ->from('survey_answers')
                ->where('user_id', $user_id) //le meme utilisateur
                ->where('answer_question_id', $question_id)  //la meme question
                ->where('answer_survey_id', $survey_id) //le meme questionnaire
                ->get(); 

        $ret = $query->result_array();
        if ($ret) {
            return $ret[0];
        } else {
            return null;
        }
    }

    public function getAllAnswers($survey_id, $user_id) {
        $query = $this->db->select('*')
                ->from('survey_answers')
                ->where('user_id', $user_id) //le meme utilisateur
                ->where('answer_survey_id', $survey_id) //le meme questionnaire
                ->join("survey_complete_question", 'survey_complete_question.survey_id = answer_survey_id AND survey_complete_question.question_id = answer_question_id')
                ->get(); 

        $ret = $query->result_array();
        if ($ret) {
            return $ret; 
        } else {
            return null;
        }
    }
    
        public function setCompany($answer, $user_email) {
       
        $this->db->select('*');
        $this->db->from('ref_mail_list');
        $this->db->where('Contact_mail', $user_email); //le meme utilisateur

        if ($this->db->count_all_results() == 0) { /// traitement si la réponse n'existe pas --> insert
            if ($this->db->insert('ref_mail_list', $contactData)) {
                return true;
            } else {
                return false;
            }
        } else {  /// traitement si la réponse existe --> update
            if ($this->db->set('Entreprise', $entreprise)
                            
                            ->where('Contact_mail', $mail)
                            ->update('ref_mail_list')) {
                return true;
            } else {
                return false;
            }
        }
    }

    public function addAnswerActivity($data) {
        $survey_id = $data['survey_id'];
        $question_id = $data['question_id'];
        $user_id = $data['user_id'];
        $DI = $data['DI'];
        $DNIND = $data['DNIND'];
        $DD = $data['DD'];
        $this->db->select('*');
        $this->db->from('survey_activity_answer');
        $this->db->where('user_id', $user_id); //le meme utilisateur
        $this->db->where('question_id', $question_id); //la meme question
        $this->db->where('survey_id', $survey_id); //  le meme questionnaire
        //$this->db->where('activity_id', $activity_id); //  le meme questionnaire


        if ($this->db->count_all_results() == 0) { /// traitement si la réponse n'existe pas --> insert
            if ($this->db->insert('survey_activity_answer', $data)) {
                return true;
            }
        } else {  /// traitement si la réponse existe --> update
            if ($this->db->set('DI', $DI)
                            ->set('DNIND', $DNIND)
                            ->set('DD', $DD)
                            ->where('question_id', $question_id)
                            ->where('user_id', $user_id)
                            // ->where('activity_id', $activity_id)
                            ->update('survey_activity_answer')) {
                return true;
            }
        }
    }

    public function getAnswerActivity($survey_id, $question_id, $user_id) {
        $query = $this->db->select('*')
                ->from('survey_activity_answer')
                ->where('user_id', $user_id) //le meme utilisateur
                ->where('question_id', $question_id)  //la meme question
                ->where('survey_id', $survey_id) //le meme questionnaire
                ->get(); //select * from ipw_report_categ‏

        $ret = $query->result_array();
        if ($ret) {
            return $ret[0];
        } else {
            return null;
        }
    }

    public function addAnswerDechets($data) {
        $survey_id = $data['survey_id'];
        $question_id = $data['question_id'];
        $user_id = $data['user_id'];
        $oui_non = $data['oui_non'];
        $qte = $data['qte'];
        $autres = $data['autres'];

        $this->db->select('*');
        $this->db->from('survey_dechets_ans');
        $this->db->where('user_id', $user_id); //le meme utilisateur
        $this->db->where('question_id', $question_id); //la meme question
        $this->db->where('survey_id', $survey_id); //  le meme questionnaire


        if ($this->db->count_all_results() == 0) { /// traitement si la réponse n'existe pas --> insert
            if ($this->db->insert('survey_dechets_ans', $data)) {
                return true;
            }
        } else {  /// traitement si la réponse existe --> update
            if ($this->db->set('oui_non', $oui_non)
                            ->set('qte', $qte)
                            ->set('autres', $autres)
                            ->where('survey_id', $survey_id)
                            ->where('question_id', $question_id)
                            ->where('user_id', $user_id)
                            ->update('survey_dechets_ans')) {
                return true;
            }
        }
    }

    public function getAnswerDechets($survey_id, $question_id, $user_id) {
        $query = $this->db->select('*')
                ->from('survey_dechets_ans')
                ->where('user_id', $user_id) //le meme utilisateur
                ->where('question_id', $question_id)  //la meme question
                ->where('survey_id', $survey_id) //le meme questionnaire
                ->get(); //select * from ipw_report_categ‏

        $ret = $query->result_array();
        //return $ret[0];
        if ($ret) {
            return $ret[0];
        } else {
            return null;
        }
    }

    public function setBackPage($data) {
        $user = $data['user_id'];
        $survey = $data['survey_id'];
        $question = $data['question_nbr'];
        $back = $data['back_nbr'];
        $this->db->select('*');
        $this->db->from('survey_back_question');
        $this->db->where('user_id', $user); //le meme utilisateur
        $this->db->where('survey_id', $survey); //la meme question
        $this->db->where('question_nbr', $question); //la meme reponse

        if ($this->db->count_all_results() == 0) { /// traitement si la réponse n'existe pas --> insert
            if ($this->db->insert('survey_back_question', $data)) {
                return true;
            } else {
                return false;
            }
        } else {  /// traitement si la réponse existe --> update
            if ($this->db->set('back_nbr', $back)
                            ->where('user_id', $user) //le meme utilisateur
                            ->where('survey_id', $survey) //la meme question
                            ->where('question_nbr', $question)
                            ->update('survey_back_question')) {
                return true;
            }
        }
    }

    public function getBackPage($user, $survey) {
        $query = $this->db->select('question_nbr, back_nbr')
                ->from("survey_back_question")
                ->where('user_id', $user)
                ->where('survey_id', $survey)
                ->get();

        $ret = $query->result_array();
        return $ret;
    }

}

?>