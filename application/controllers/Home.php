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
             $email= $dataLogin["email"];
            $this->verify_mail_list($email); // pour ajouter le mail s'il n'existe pas dans ref_mail_list 
            $gr_questions = $this->SurveyModel->getGrQuestionsBySurvey($survey);

            $question = $this->SurveyModel->getQuestionBySurvey($survey, $id);
            $question_id = $question[0]["question_id"];
            $id_questions = $this->SurveyModel->getIdQuestionsBySurvey($survey);
            $user = $dataLogin["id"];  
           
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
            
            $this->session->set_userdata('user', $user); // save contact data in a session
             $this->session->set_userdata('survey', $survey); // save contact data in a session
             $this->session->set_userdata('contactFin', $contact); // save contact data in a session
             
      


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


    
        public function set_answers_q3() {

        $Entreprise = $this->input->post('answer_body');
        $user_email = $this->input->post('user_email');
        $contact_data = array(
            'Entreprise' => $Entreprise);
        
        $this->AnswerModel->setCompany($Entreprise, $user_email);
    }
     public function set_answers_q5() {

        $Personne_contact = $this->input->post('new_contact');
        $contact_téléphonique = $this->input->post('new_tel');
        $Contact_mail = $this->input->post('new_mail');
        $user_email = $this->input->post('user_email');
       
        
    $this->AnswerModel->setContact($Personne_contact,$contact_téléphonique, $Contact_mail, $user_email);
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
        if($oui_non_table != null){
        $oui_non_table = implode(",", $oui_non_table);  // (implode) Join array elements with a string
        }else{
            $oui_non_table = '';
        }
        if ($qte_table != null){
        $qte_table = implode(",", $qte_table);  // (implode) Join array elements with a string
        }else{
            $qte_table='';
        }
        if($percent != null){
        $percent = implode(",", $percent);  // (implode) Join array elements with a string
        }else{
            $percent='';
        }
      
        
        $dechets_data = array(
            'survey_id' => $survey,
            'question_id' => $question,
            'user_id' => $user,
            'oui_non' => $oui_non_table,
            'qte' => $qte_table,
            'autres' => $autres);

        

        $answer_data = array(
            'answer_question_id' => $question,
            'user_id' => $user,
            'answer_survey_id' => $survey,
            'answer_body' => $percent);

        $this->AnswerModel->addAnswer($answer_data);
        $this->AnswerModel->addAnswerDechets($dechets_data);

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
      //  var_dump($answers);die;
        return $answers;
    }
    
    public function get_all_dechets_answers($survey, $user){ /// pour le rapport PDF
        $result = $this->AnswerModel->getAllDechetsAnswers($survey, $user);
        $length = count($result);
          $answers = array();
        for ($i = 0; $i < $length; $i++) {
            $answers[$result[$i]['question_number']] = $result[$i];
        }
       // var_dump($answers);die;
        return $answers;
    }

    public function get_answer_test($survey, $user) {
        $result = $this->AnswerModel->getAllAnswers($survey, $user);
             $this->data["SimpleAnswers"] = $this->get_all_simple_answers($survey, $user);
//        echo $this->data["SimpleAnswers"][1] ;
//
//        
    }

    
          public function verify_mail_list($user_mail){ /// pour vérifier que le mail exite dans la table ref_mail_list
          
              $contact_data = array(
            'Entreprise' => '',
            'Département' => 0,
            'Personne_contact' => '',
            'Contact_mail' => $user_mail,
            'contact_téléphonique' => '',
            'Démolition' => '',
            'Désamiantage' => '',
            'Sciage' => '',
            'Géographie' => '');
              $this->AnswerModel->verifyMailList($user_mail, $contact_data);
        
    }

    public function generate_pdf_survey() {
        $survey = $this->session->userdata('survey');
        $user = $this->session->userdata('user');
        
        
        $this->data["SimpleAnswers"] = $this->get_all_simple_answers($survey, $user);
        $email= $this->AnswerModel->getMailById($user);
        $this->data["ContactAnswers"] = $this->AnswerModel->getContactByMail($email);
        $answer_Q17 = $this->AnswerModel->getAnswerActivity($survey, 45, $user);
        
        $this->data['Q17_DI'] = $answer_Q17['DI']; 
        $this->data['Q17_DNIND'] = $answer_Q17['DNIND'];
        $this->data['Q17_DD'] = $answer_Q17['DD'];
        $this->data["dechetsAnswers"] = $this->get_all_dechets_answers($survey, $user);
        $email= $this->AnswerModel->getMailById($user);
        $this->data["email"] = $email;
        
       
        $this->load->view('surveyReport', $this->data);
               
    }
    
        public function survey_pdf($user) {
            
        $this->data["SimpleAnswers"] = $this->get_all_simple_answers(3, $user);
        $email= $this->AnswerModel->getMailById($user);
        $this->data["ContactAnswers"] = $this->AnswerModel->getContactByMail($email);
        $answer_Q17 = $this->AnswerModel->getAnswerActivity(3, 45, $user);
        
        $this->data['Q17_DI'] = $answer_Q17['DI']; 
        $this->data['Q17_DNIND'] = $answer_Q17['DNIND'];
        $this->data['Q17_DD'] = $answer_Q17['DD'];
        $this->data["dechetsAnswers"] = $this->get_all_dechets_answers(3, $user);
        $this->data["email"] = $email;
       
        $this->load->view('surveyReport', $this->data);          
    }
    
    public function survey_xls() {
            
         $survey = $this->session->userdata('survey');
        $user = $this->session->userdata('user');
        
        
        $this->data["SimpleAnswers"] = $this->get_all_simple_answers($survey, $user);
        $email= $this->AnswerModel->getMailById($user);
        $this->data["ContactAnswers"] = $this->AnswerModel->getContactByMail($email);
        $answer_Q17 = $this->AnswerModel->getAnswerActivity($survey, 45, $user);
        
        $this->data['Q17_DI'] = $answer_Q17['DI']; 
        $this->data['Q17_DNIND'] = $answer_Q17['DNIND'];
        $this->data['Q17_DD'] = $answer_Q17['DD'];
        $this->data["dechetsAnswers"] = $this->get_all_dechets_answers($survey, $user);
        $email= $this->AnswerModel->getMailById($user);
        $this->data["email"] = $email;
        
        $this->load->view('xlsReport', $this->data);          
    }


    public function fin() {
        $this->load->view('fin', $this->data);
    }

}
