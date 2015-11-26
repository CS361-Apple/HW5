<?php
require_once(APP_PATH . 'classes/BaseClass.class.php');
class LoginClass extends BaseClass {
		public function getData() {
				$sql = 'SELECT *
						FROM sports_events';
				$st = $this->dbh->prepare($sql);
				$st->execute();
				$data = $st->fetchAll(PDO::FETCH_ASSOC);

				return $data;
		}
}
?>
