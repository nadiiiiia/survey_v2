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
    
     public function getAnswer($survey_id, $question_id,$user_id) {
            $query = $this->db->select('answer_body')
                ->from('survey_answers')
                ->where('user_id', $user_id) //le meme utilisateur
                ->where('answer_question_id', $question_id)  //la meme question
                ->where('answer_survey_id', $survey_id) //le meme questionnaire
                ->get(); //select * from ipw_report_categ‏

        $ret = $query->result_array();


        if ($ret) {
            return $ret[0]; // return all fields of table : ipw_create_report
        } else {
            return null;
        }
         
      
    }

    public function addAnswerActivity($data) {
        $survey_id = $data['survey_id'];
        $question_id = $data['question_id'];
        $user_id = $data['user_id'];
        $activity_id = $data['activity_id'];
        $DI = $data['DI'];
        $DNIND = $data['DNIND'];
        $DD = $data['DD'];
        $this->db->select('*');
        $this->db->from('survey_activity_ans');
        $this->db->where('user_id', $user_id); //le meme utilisateur
        $this->db->where('question_id', $question_id); //la meme question
        $this->db->where('survey_id', $survey_id); //  le meme questionnaire
        $this->db->where('activity_id', $activity_id); //  le meme questionnaire


        if ($this->db->count_all_results() == 0) { /// traitement si la réponse n'existe pas --> insert
            if ($this->db->insert('survey_activity_ans', $data)) {
                return true;
            }
        } else {  /// traitement si la réponse existe --> update
            if ($this->db->set('DI', $DI)
                            ->set('DNIND', $DNIND)
                            ->set('DD', $DD)
                            ->where('question_id', $question_id)
                            ->where('user_id', $user_id)
                            ->where('activity_id', $activity_id)
                            ->update('survey_activity_ans')) {
                return true;
            }
        }
    }
     public function addAnswerDechets($data) {
        $survey_id = $data['survey_id'];
        $question_id = $data['question_id'];
        $user_id = $data['user_id'];
        $dechet_id = $data['dechet_id'];
        $qte = $data['qte'];
        
        $this->db->select('*');
        $this->db->from('survey_dechets_ans');
        $this->db->where('user_id', $user_id); //le meme utilisateur
        $this->db->where('question_id', $question_id); //la meme question
        $this->db->where('survey_id', $survey_id); //  le meme questionnaire
        $this->db->where('dechet_id', $dechet_id); //  le meme questionnaire


        if ($this->db->count_all_results() == 0) { /// traitement si la réponse n'existe pas --> insert
            if ($this->db->insert('survey_dechets_ans', $data)) {
                return true;
            }
        } else {  /// traitement si la réponse existe --> update
            if ($this->db->set('qte', $qte)
                            ->where('survey_id', $survey_id)
                            ->where('question_id', $question_id)
                            ->where('user_id', $user_id)
                            ->where('dechet_id', $dechet_id)
                            ->update('survey_dechets_ans')) {
                return true;
            }
        }
    }
//        public function addAnswerDechets($data) {
//        $survey_id = $data['survey'];
//        $question_id = $data['question_id'];
//        $user_id = $data['user_id'];
//        $dechet_id = $data['dechet_id'];
//        $qte = $data['qte'];
//        $this->db->select('*');
//        $this->db->from('survey_dechets_ans');
//        $this->db->where('survey_id', $survey_id); //la meme question
//        $this->db->where('question_id', $question_id); //la meme question
//        $this->db->where('user_id', $user_id); //le meme utilisateur
//        $this->db->where('$dechet_id', $dechet_id); //  la meme activité
//
//        if ($this->db->count_all_results() == 0) { /// traitement si la réponse n'existe pas --> insert
//            if ($this->db->insert('survey_dechets_ans', $data)) {
//                return true;
//            }
//        } else {  /// traitement si la réponse existe --> update
//            if ($this->db->set('qte', $qte)
//                            ->where('survey_id', $survey_id)
//                            ->where('question_id', $question_id)
//                            ->where('user_id', $user_id)
//                            ->where('dechet_id', $dechet_id)
//                            ->update('survey_dechets_ans')) {
//                return true;
//            }
//        }
//    }

}

?>