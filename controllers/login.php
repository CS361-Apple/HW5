<?php
require_once(APP_PATH . 'classes/login/Login.php');
class LoginController extends AppController {
    /**
     * Controller for base filter page
     *
     * Does nothing at the moment, will fill in with demo info at some point 
     */
    public function actionIndex() {
        $data = new LoginClass();

        $this->setLayoutVar('pageTitle', 'Kogu - Login');
        $this->setLayout('basicPage');
        $this->setLayoutVar('pageName', 'Login');
        $this->setLayoutVar('pageNameSmall', '  or create an account below');
    }
}
?>
