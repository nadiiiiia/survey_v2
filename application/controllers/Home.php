<?php

defined('BASEPATH') OR exit('No direct script access allowed');
ini_set("display_errors", 0);
error_reporting(0);

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

    public function pastrouve() { 
        header("HTTP/1.1 404 Not Found");
        $this->load->view('error_404');
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
            $email= $dataLogin["email"];
            $contact = $this->AnswerModel->getContactByMail($email);
            $answer = $this->AnswerModel->getAnswer($survey, $question_id, $user);
            $answer_Q17 = $this->AnswerModel->getAnswerActivity($survey, $question_id, $user);
            $answer_Dechets = $this->AnswerModel->getAnswerDechets($survey, $question_id, $user);
            $back_page = $this->AnswerModel->getBackPage($dataLogin["id"], $survey);
            $answer_Q12 = $this->AnswerModel->getAnswer(3, 3, $user);
            $answer_Q13 = $this->AnswerModel->getAnswer(3, 4, $user);
            $tab_Q13 = $answer_Q13['answer_body'];
            if ($tab_Q13 != null) {
                $tab_Q13 = explode(",", $tab_Q13);  // (implode) Join array elements with a string
            }
            $total_Q13 = ($tab_Q13[0]);

            $answer_Q15 = $this->AnswerModel->getAnswer(3, 6, $user);
            $tab_Q15 = $answer_Q15['answer_body'];
            if ($tab_Q15 != null) {
                $tab_Q15 = explode(",", $tab_Q15);  // (implode) Join array elements with a string
            }
            $moy_Q15 = ($tab_Q15[0] + $tab_Q15[1]) / 2; // la moyenne entre min et max dans Q15
            $answer_Q16 = $this->AnswerModel->getAnswer(3, 44, $user);



            $this->data["question_json"] = json_encode($question);
            $this->data["question_id"] = json_encode($question[0]["question_id"]);
            $this->data["question_number"] = json_encode($question[0]["question_number"]);
            $this->data["question_body"] = json_encode($question[0]["question_body"]);
            $this->data["question_note"] = json_encode($question[0]["note"]);
            $this->data["section_number"] = json_encode($question[0]["section_number"]);
            $this->data["section_name"] = json_encode($question[0]["section_name"]);
            $this->data["array_IDs_json"] = json_encode($id_questions);
            $this->data['id'] = $id;
            $this->data['survey'] = $survey;
            $this->data['answer'] = json_encode($answer['answer_body']);
            $this->data['answer_Q17_DI'] = json_encode($answer_Q17['DI']);
            $this->data['answer_Q17_DNIND'] = json_encode($answer_Q17['DNIND']);
            $this->data['answer_Q17_DD'] = json_encode($answer_Q17['DD']);
            $this->data['Dechets_oui_non'] = json_encode($answer_Dechets['oui_non']);
            $this->data['Dechets_qte'] = json_encode($answer_Dechets['qte']);
            $this->data['Dechets_autres'] = json_encode($answer_Dechets['autres']);
            $this->data["back_page"] = json_encode($back_page);
            $this->data["rapport"] = $this->AnswerModel->getAllAnswers($survey, $dataLogin["id"]);
            $this->data["answer_Q12"] = json_encode($answer_Q12['answer_body']);
            $this->data["total_Q13"] = json_encode($total_Q13);
            $this->data["moy_Q15"] = json_encode($moy_Q15);
            $this->data["answer_Q16"] = json_encode($answer_Q16['answer_body']);
            $this->data["contact"] = json_encode($contact);

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

    public function set_contact() {
        $survey = $survey = $this->input->post('survey_id');
        $user = $user = $this->input->post('user_id');
        $entreprise = $this->AnswerModel->getAnswer($survey, 11, $user);
        $contact = $this->AnswerModel->getAnswer($survey, 34, $user);
        $contact = explode(",", $contact['answer_body']);  //transform string to array;

        $contact_data = array(
            'Entreprise' => $entreprise['answer_body'],
            'Département' => 0,
            'Personne_contact' => $contact[0],
            'Contact_mail' => $contact[2],
            'contact_téléphonique' => $contact[1],
            'Démolition' => '',
            'Désamiantage' => '',
            'Sciage' => '',
            'Géographie' => '');
        // var_dump($contact_data); die;
        $this->AnswerModel->addContact($contact_data);
    }
    
        public function set_answers_q3() {

        $Entreprise = $this->input->post('answer_body');
        $user_email = $this->input->post('user_email');
        $contact_data = array(
            'Entreprise' => $Entreprise);
        
        $this->AnswerModel->setCompany($Entreprise, $user_email);
    }
     public function set_answers_q5() {

        $new_contact = $this->input->post('new_contact');
        $new_tel = $this->input->post('new_tel');
        $new_mail = $this->input->post('new_mail');
        $user_email = $this->input->post('user_email');
       
        
    $this->AnswerModel->setContact($new_contact,$new_tel, $new_mail, $user_email);
     }
      
    public function set_answers_back() {
        $answer = $this->input->post('answer_body');
        $user = $this->input->post('user_id');
        $question = $this->input->post('question_id');
        $back = $this->input->post('back');
        $next = $this->input->post('next');
        $survey = $this->input->post('survey_id');

        if (is_array($answer)) {
            $answer = implode(",", $answer);  // (implode) Join array elements with a string
        }

        $answer_data = array(
            'answer_question_id' => $question,
            'answer_survey_id' => $survey,
            'user_id' => $user,
            'answer_body' => $answer);

        $back_data = array(
            'user_id' => $user,
            'survey_id' => $survey,
            'question_nbr' => $next,
            'back_nbr' => $back);

        $this->AnswerModel->addAnswer($answer_data);
        $this->AnswerModel->setBackPage($back_data);
    }

    public function set_answers_q17() {

        $survey = $this->input->post('survey_id');
        $question = $this->input->post('question_id');
        $user = $this->input->post('user_id');
        $DI = $this->input->post('DI');
        $DNIND = $this->input->post('DNIND');
        $DD = $this->input->post('DD');

        $DI = implode(",", $DI);  // (implode) Join array elements with a string
        $DNIND = implode(",", $DNIND);  // (implode) Join array elements with a string
        $DD = implode(",", $DD);

        $activity_data = array(
            'survey_id' => $survey,
            'question_id' => $question,
            'user_id' => $user,
            'DI' => $DI,
            'DNIND' => $DNIND,
            'DD' => $DD);

        $this->AnswerModel->addAnswerActivity($activity_data);
    }

    public function set_answers_q18_q19_q20() {

        $survey = $this->input->post('survey_id');
        $question = $this->input->post('question_id');
        $user = $this->input->post('user_id');
        $oui_non_table = $this->input->post('oui_non_table');
        $qte_table = $this->input->post('qte_table');
        $autres = $this->input->post('autres');
        $percent = $this->input->post('percent_table');
        $back = $this->input->post('back');
        $next = $this->input->post('next');



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

        if ($next == 21) {
            $back_data = array(
                'user_id' => $user,
                'survey_id' => $survey,
                'question_nbr' => $next,
                'back_nbr' => $back);

            $this->AnswerModel->setBackPage($back_data);
        }
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

        $result = $this->input->post('contact_data');
        //  $result = implode(",", $result); 

        $this->output->set_content_type('application/json');
        $this->output->set_output(json_encode($result));
        return $result;
    }
    
    public function get_all_simple_answers($survey, $user){ /// pour le rapport PDF
        $result = $this->AnswerModel->getAllAnswers($survey, $user);
        $length = count($result);
          $answers = array();
        for ($i = 0; $i < $length; $i++) {
            $answers[$result[$i]['question_number']] = $result[$i]['answer_body'];
        }
        return $answers;
    }

    public function get_answer_test($survey, $user) {
        $result = $this->AnswerModel->getAllAnswers($survey, $user);
        // var_dump(json_encode($result));
       // echo $result[1]['answer_question_id'];
//        $length = count($result);
//        $answers = array();
//        for ($i = 0; $i < $length; $i++) {
//            $answers[$result[$i]['question_number']] = $result[$i]['answer_body'];
//        }

             $this->data["SimpleAnswers"] = $this->get_all_simple_answers($survey, $user);
        echo $this->data["SimpleAnswers"][1] ;

        die;
    }
      public function get_contact(){ /// pour le rapport PDF
        $result = $this->AnswerModel->getContactByMail('amtp.nicolas@orange.fr');
//        $length = count($result);
//          $answers = array();
//        for ($i = 0; $i < $length; $i++) {
//            $answers[$result[$i]['question_number']] = $result[$i]['answer_body'];
//        }
//        return $answers;
        var_dump($result);
        die;
    }

    public function generate_pdf_survey($survey, $user) {
        
        $this->data["SimpleAnswers"] = $this->get_all_simple_answers($survey, $user);
        $this->load->view('surveyReport', $this->data);
    }

    public function fin() {
        $this->load->view('fin', $this->data);
    }

}
