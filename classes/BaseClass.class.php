<?php
class BaseClass {
    public function __construct() {
    }

    /**
     * Creates a new PDO object for this class
     *
     * Adds the PDO object dbh as a new property of BaseClass
     *
     * @return void
     */
    public function dbConnect() {
        $hostname = APP_DB_HOSTNAME;
        $database = APP_DB_DATABASE;
        $username = APP_DB_USERNAME;
        $pass = APP_DB_PASSWORD;

        $this->dbh = new PDO("mysql:host=$hostname;dbname=$database", $username, $pass);
    }

    /**
     * Sanitizes get parameters to make sure only valid ones are passed
     *
     * Compares $get to $getParams and makes sure only valid ($getParams) 
     *
     * @param array $get Contains get parameters to be sanitized
     *
     * @param array $getParams An array of correct keys to be compared agains $get
     *
     * @return array $getValues Contains sanitized get parameters
     */
    public function sanitizeGet($get, $getParams) {
        $getValues = array();
        foreach($getParams as $key => $value) {
            if(isset($get[$value]) && $get[$value] != '') {
                $getValues[$value] = $get[$value];
            } else {
                $getValues[$value] = 'Any';
            }
        }
        return $getValues;
    }

    /**
     * Formats the given get parameters back into a query string
     *
     * Used to recreate the query string so it can be used for hyperlink purposes
     * As far as I know there is no built in method to do this in lvc, but if there
     * is then that method should probably be used
     *
     * @param array $get Contains get parameters to be formatted, these should be
     *    sanitized before being passed here
     *
     * @return string $queryString Contains the formatted query string
     */
    public function formatQueryString($get) {
        $queryString = '?';
        foreach($get as $key => $value) {
            if($value != '') {
                if($key == 'page') {
                    break;
                }
                if(is_array($value)) {
                    foreach($value as $arrayValue) {
                        $queryString .= $key . '[]' . '=' . $arrayValue . '&';
                    }
                } else {
                    $queryString .= $key . '=' . $value . '&';
                }
            }
        }
        $queryString = preg_replace('/ /', '+', $queryString);
        return $queryString;
    }
}
?>
