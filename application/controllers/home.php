<?php

/**
    * Autocomplete for CodeIgniter...
    * @property CI_Loader $load
    * @property CI_Form_validation $form_validation
    * @property CI_Input $input
    * @property CI_Email $email
    * @property CI_DB_active_record $db
    * @property CI_DB_forge $dbforge
    * @property CI_Table $table
    * @property CI_Session $session
    * @property CI_FTP $ftp
    * @property CI_Encrypt $encrypt
    * @property CI_Parser $parser
    *
*/
class Home extends CI_Controller {

    public function __construct() {
        parent::__construct();
    }

    public function index() {
        $this->load->view('home');
    }
}
