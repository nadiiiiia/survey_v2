<?php

Class SurveyModel extends CI_Model {
    
 
 public function getQuestionsBySurveyAndGroup($survey,$group) {
        $query = $this->db->select('*')
                ->from("survey_complete_question")
                ->where("survey_id", $survey)
                ->where("group_nbr", $group)
                ->join('survey_section', 'survey_section.section_id = survey_complete_question.section_id', 'LEFT OUTER')
                ->join('survey_questions', 'survey_questions.question_id = survey_complete_question.question_id', 'LEFT OUTER')
                //->join('survey_back_question', 'survey_back_question.survey_id = survey_id', 'LEFT OUTER')
                //->join('survey_back_question', 'survey_back_question.question_nbr = question_number', 'LEFT OUTER')
                ->get(); //select * from survey_questions

        $ret = $query->result_array();
       // var_dump($ret);die;
        return $ret;
    }
    public function getGrQuestionsBySurvey($id) {
        $query = $this->db->distinct()
                ->select('group_nbr')
                ->from("survey_complete_question")
                ->where("survey_id", $id)
                 ->join('survey_section', 'survey_section.section_id = survey_complete_question.section_id', 'LEFT OUTER')
                ->join('survey_questions', 'survey_questions.question_id = survey_complete_question.question_id', 'LEFT OUTER')
                ->order_by('group_nbr', 'ASC')
                ->get(); //select * from survey_questions

        $ret = $query->result_array();
        $result = array(); // declarer le tableau des resultats
        foreach ($ret as $key => $val) {
            $id = array_values($val);
            $result[] = $id[0];  // enregistrer la valeur de l'id dans $result
        }
        return $result; //  retourne les IDs 
        
    }
    
       public function getIdQuestionsBySurvey($id) {
        $query = $this->db->select('question_number')
                ->from("survey_complete_question")
                ->where("survey_id", $id)
                 ->join('survey_section', 'survey_section.section_id = survey_complete_question.section_id', 'LEFT OUTER')
                ->join('survey_questions', 'survey_questions.question_id = survey_complete_question.question_id', 'LEFT OUTER')
                ->order_by('question_number', 'ASC')
                ->get(); //select * from survey_questions

        $ret = $query->result_array();
        $result = array(); // declarer le tableau des resultats
        foreach ($ret as $key => $val) {
            $id = array_values($val);
            $result[] = $id[0];  // enregistrer la valeur de l'id dans $result
        }
        return $result; //  retourne les IDs 
    }
    
        public function getQuestionBySurvey($survey, $question) {
        $query = $this->db->select('*')
                ->from("survey_complete_question")
                ->where("survey_id", $survey)
                ->where("question_number", $question)
                ->join('survey_section', 'survey_section.section_id = survey_complete_question.section_id', 'LEFT OUTER')
                ->join('survey_questions', 'survey_questions.question_id = survey_complete_question.question_id', 'LEFT OUTER')
                ->order_by('question_number', 'ASC')
                ->get(); //select * from survey_questions

        $ret = $query->result_array();

        return $ret; //  retourne les IDs 
    }
    
}

?>