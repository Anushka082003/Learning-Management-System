<?php
/*if(!defined('DB_SERVER')){
    require_once("../initialize.php");
}
class DBConnection{

    private $host = DB_SERVER;
    private $username = DB_USERNAME;
    private $password = DB_PASSWORD;
    private $database = DB_NAME;
    
    public $conn;
    
    public function __construct(){

        if (!isset($this->conn)) {
            
           // $this->conn = new mysqli($this->host, $this->username, $this->password, $this->database);
           $this->conn = new mysqli('localhost', 'root', 'Rajaram@05', 'database_name');

            
            if (!$this->conn) {
                echo 'Cannot connect to database server';
                exit;
            }            
        }    
        
    }
    public function __destruct(){
        $this->conn->close();
    }
}*/
?>

<?php
class DBConnection {
    protected $conn;

    public function __construct() {
        $this->open_connection();
    }

    private function open_connection() {
        // Check if constants are already defined before defining them
        if (!defined('DB_SERVER')) {
            define('DB_SERVER', 'localhost');
        }
        if (!defined('DB_USER')) {
            define('DB_USER', 'root');
        }
        if (!defined('DB_PASSWORD')) {
            define('DB_PASSWORD', 'Rajaram@05');
        }
        if (!defined('DB_NAME')) {
            define('DB_NAME', 'elearning');
        }

        // Create a new connection
        $this->conn = new mysqli(DB_SERVER, DB_USER, 'Rajaram@05', DB_NAME);

        // Check connection
        if ($this->conn->connect_error) {
            die("Connection failed: " . $this->conn->connect_error);
        }
    }

    public function query($sql) {
        return $this->conn->query($sql);
    }

    public function escape($value) {
        return $this->conn->real_escape_string($value);
    }

    public function close_connection() {
        if (isset($this->conn)) {
            $this->conn->close();
            unset($this->conn);
        }
    }

    // Public method to get the connection
    public function getConnection() {
        return $this->conn;
    }
}
?>





