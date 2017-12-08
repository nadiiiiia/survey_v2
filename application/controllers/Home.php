<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends Home_Controller {

    public function __construct() {
        parent::__construct();
//load models
        $this->load->model('UserModel', '', TRUE);
        $this->load->model('SurveyModel', '', TRUE);
        $this->load->model('AnswerModel', '', TRUE);

// load helpers
        $this->load->helper('form');
        $this->load->helper('file');
        $this->load->helper('url');
        $this->load->helper('download');

// load libraries
        $this->load->library('session');
        $this->load->library('Pdf_Library');
    }

    public function accueil() {
        if (!$this->session->userdata('logged_in')) {
            redirect('login', 'refresh');
        } else {
            $dataLogin = $this->session->userdata('logged_in');
            $this->data['role'] = $dataLogin["role"];
            $this->load->view('accueil', $dataLogin);
        }
    }

    public function logout() {
        parent::logout();
    }

    public function connexion() {

        $this->load->view('connexion');
    }

    public function survey($survey, $id) {
        if (!$this->session->userdata('logged_in')) {
            redirect('login', 'refresh');
        } else {
            $dataLogin = $this->session->userdata('logged_in');
            // $this->data['role'] = $dataLogin["role"];
            // $question_gr = $this->SurveyModel->getQuestionsBySurveyAndGroup($survey, $group);
            $gr_questions = $this->SurveyModel->getGrQuestionsBySurvey($survey);

            $question = $this->SurveyModel->getQuestionBySurvey($survey, $id);
            $question_id = $question[0]["question_id"];
            $id_questions = $this->SurveyModel->getIdQuestionsBySurvey($survey);
            $user = $dataLogin["id"];
            $answer = $this->AnswerModel->getAnswer($survey, $question_id, $user);
            $answer_Q17 = $this->AnswerModel->getAnswerActivity($survey, $question_id, $user);
            $answer_Dechets = $this->AnswerModel->getAnswerDechets($survey, $question_id, $user);


            $this->data["question_json"] = json_encode($question);
            $this->data["question_id"] = json_encode($question[0]["question_id"]);
            $this->data["question_number"] = json_encode($question[0]["question_number"]);
            $this->data["question_body"] = json_encode($question[0]["question_body"]);
            $this->data["question_note"] = json_encode($question[0]["note"]);
            $this->data["section_number"] = json_encode($question[0]["section_number"]);
            $this->data["section_name"] = json_encode($question[0]["section_name"]);
            $this->data["array_IDs_json"] = json_encode($id_questions);
            // var_dump($question);
            $this->data['id'] = $id;
            $this->data['survey'] = $survey;
            $this->data['answer'] = json_encode($answer['answer_body']);
            $this->data['answer_Q17'] = json_encode($answer_Q17);
            $this->data['Dechets_oui_non'] = json_encode($answer_Dechets['oui_non']);
             $this->data['Dechets_qte'] = json_encode($answer_Dechets['qte']);
             $this->data['Dechets_autres'] = json_encode($answer_Dechets['autres']);
            
// var_dump($answer['answer_body']); die;
            $this->load->view('survey', $this->data);
        }
    }

    /*
      public function page($survey, $id) {
      if (!$this->session->userdata('logged_in')) {
      redirect('login', 'refresh');
      } else {
      $dataLogin = $this->session->userdata('logged_in');
      // $this->data['role'] = $dataLogin["role"];
      $question = $this->SurveyModel->getQuestionBySurvey($survey, $id);
      $id_questions = $this->SurveyModel->getIdQuestionsBySurvey($survey);
      $back_page = $this->AnswerModel->getBackPage($dataLogin["id"], $survey);
      $this->data["back_page"] = json_encode($back_page);
      //var_dump($this->data["back_page"]);die;

      $this->data["question_json"] = json_encode($question);
      $this->data["question_id"] = json_encode($question[0]["question_id"]);
      $this->data["question_number"] = json_encode($question[0]["question_number"]);
      $this->data["question_body"] = json_encode($question[0]["question_body"]);
      $this->data["question_note"] = json_encode($question[0]["question_note"]);
      $this->data["section_number"] = json_encode($question[0]["section_number"]);
      $this->data["section_name"] = json_encode($question[0]["section_name"]);
      $this->data["array_IDs_json"] = json_encode($id_questions);

      $this->data['id'] = $id;
      $this->data['survey'] = $survey;
      $this->load->view('page', $this->data);
      }
      }
     */

    public function set_answers() {
        $answer = $this->input->post('answer_body');
        $user = $this->input->post('user_id');
        $question = $this->input->post('question_id');
        $survey = $this->input->post('survey_id');

        if (is_array($answer)) {
            $answer = implode(",", $answer);  // (implode) Join array elements with a string
        }
        $answer_data = array(
            'answer_question_id' => $question,
            'answer_survey_id' => $survey,
            'user_id' => $user,
            'answer_body' => $answer);

        $this->AnswerModel->addAnswer($answer_data);
    }

    public function set_answers_q17() {

        $answer_body = $this->input->post('answer_body');

        $result = array();
        $element = array();

        foreach ($answer_body as $cle => $valeur) {
            $data = array_values($valeur);
            $element['survey_id'] = $data[0];
            $element['question_id'] = $data[1];
            $element['user_id'] = $data[2];
            $element['activity_id'] = $data[3];
            $element['DI'] = $data[4];
            $element['DNIND'] = $data[5];
            $element['DD'] = $data[6];
            $result[] = $element;
        }

        foreach ($result as $row) {
            $this->AnswerModel->addAnswerActivity($row);
        }
    }

    public function set_answers_q18_q19_q20() {
     
        $survey = $this->input->post('survey_id');
        $question = $this->input->post('question_id');
        $user = $this->input->post('user_id');
        $oui_non_table = $this->input->post('oui_non_table');
         $qte_table = $this->input->post('qte_table');
          $autres = $this->input->post('autres');
        $percent = $this->input->post('percent_table');
        
        //transformer les tableaux en string
        $oui_non_table = implode(",", $oui_non_table);  // (implode) Join array elements with a string
        $qte_table = implode(",", $qte_table);  // (implode) Join array elements with a string
        $percent = implode(",", $percent);  // (implode) Join array elements with a string
        
        $dechets_data = array(
            'survey_id' => $survey,
            'question_id' => $question,
            'user_id' => $user,
            'oui_non' => $oui_non_table,
            'qte' => $qte_table,
            'autres' => $autres);
        
        $this->AnswerModel->addAnswerDechets($dechets_data);
        
        $answer_data = array(
            'answer_question_id' => $question,
            'user_id' => $user,
            'answer_survey_id' => $survey,
            'answer_body' => $percent);
        
        $this->AnswerModel->addAnswer($answer_data);
      
//        $result = array();
//        $element = array();
//
//        foreach ($answer_body as $cle => $valeur) {
//            $data = array_values($valeur);
//            $element['survey_id'] = $data[0];
//            $element['question_id'] = $data[1];
//            $element['user_id'] = $data[2];
//            $element['dechet_id'] = $data[3];
//            $element['qte'] = $data[4];
//            $result[] = $element;
//        }
//        foreach ($result as $row) {
//            $this->AnswerModel->addAnswerDechets($row);
//        }
    }

    public function set_answers_and_back() {
        $answer = $this->input->post('answer_body');
        $user = $this->input->post('user_id');
        $question = $this->input->post('question_id');
        $back = $this->input->post('back');        
        $next = $this->input->post('next');
        $survey = $this->input->post('survey');


        $answer_data = array(
            'answer_question_id' => $question,
            'user' => $user,
            'answer_body' => $answer);

        $back_data = array(
            'user_id' => $user,
            'survey_id' => $survey,
            'question_nbr' => $next,
            'back_nbr' => $back);

        $this->AnswerModel->addAnswer($answer_data);
        $this->AnswerModel->setBackPage($back_data);
    }

    public function set_answers_q14() {

        $answer_body = $this->input->post('answer_body');
        $user = $this->input->post('user_id');
        $back = $this->input->post('back');
        $next = $this->input->post('next');
        $survey = $this->input->post('survey');

        $result = array();
        $element = array();

        foreach ($answer_body as $cle => $valeur) {
            $data = array_values($valeur);
            $element['question_id'] = $data[3];
            $element['user_id'] = $data[2];
            $element['row_id'] = $data[4];
            $element['nom'] = $data[0];
            $element['qte'] = $data[1];
            $result[] = $element;
        }

        foreach ($result as $row) {
            $this->AnswerModel->addAnswerDepartement($row);
        }
        //////// back_question


        $back_data = array(
            'user_id' => $user,
            'survey_id' => $survey,
            'question_nbr' => $next,
            'back_nbr' => $back);

        $this->AnswerModel->setBackPage($back_data);
    }

    public function set_answers_array_back() {

        $answer = $this->input->post('answer_body');
        $user = $this->input->post('user_id');
        $survey = $this->input->post('survey');

        $next = $this->input->post('next');
        $back = $this->input->post('back');


        if ($answer != null) {
            $answer = implode(",", $answer);  // (implode) Join array elements with a string
        } else {
            $answer = $answer;
        }
        $user = $this->input->post('user_id');
        $question = $this->input->post('question_id');

        $answer_data = array(
            'answer_question_id' => $question,
            'user' => $user,
            'answer_body' => $answer);

        $back_data = array(
            'user_id' => $user,
            'survey_id' => $survey,
            'question_nbr' => $next,
            'back_nbr' => $back);

        $this->AnswerModel->addAnswer($answer_data);
        $this->AnswerModel->setBackPage($back_data);
    }

    public function set_answers_array() {

        $answer = $this->input->post('answer_body');
        $user = $this->input->post('user_id');
        $survey = $this->input->post('survey_id');
        $question = $this->input->post('question_id');

        if ($answer != null) {
            $answer = implode(",", $answer);  // (implode) Join array elements with a string
        } else {
            $answer = $answer;
        }


        $answer_data = array(
            'answer_question_id' => $question,
            'answer_survey_id' => $survey,
            'user_id' => $user,
            'answer_body' => $answer);

        $this->AnswerModel->addAnswer($answer_data);
    }

    public function set_answers_test() {

        $result = $this->input->post('answer_body');
        //  $result = implode(",", $result); 

        $this->output->set_content_type('application/json');
        $this->output->set_output(json_encode($result));
        return $result;
    }

    public function get_answer_test($survey, $question, $user) {
        $result = $this->AnswerModel->getAnswerDechets($survey, $question, $user);
        var_dump(json_encode($result['qte']));
        die;
    }

    public function generate_pdf_survey() {
        $this->data["action"] = 'attach';
        $this->load->view('surveyReport', $this->data);
    }

    public function fin() {
        $this->load->view('fin', $this->data);
    }

}
