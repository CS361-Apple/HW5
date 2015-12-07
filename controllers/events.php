<?php
require_once(APP_PATH . 'classes/events/Events.php');
class EventsController extends AppController {
    /**
     * Controller for base filter page
     *
     * Does nothing at the moment, will fill in with demo info at some point
     */
    public function actionIndex() {
        $data = new EventsClass();
        $data->dbConnect();

		    $test = $data->getData();

        $this->setLayoutVar('pageTitle', 'Kogu - Events');
        $this->setVar('data', $test);
        $this->setLayout('basicPage');
        $this->setLayoutVar('pageName', 'Events');
        $this->setLayoutVar('pageNameSmall', '');
    }
}
?>
