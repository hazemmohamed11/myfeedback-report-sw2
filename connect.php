
<?php



class Connect 
{
	 public $conn;
	 public $dbcon;


    public function __construct() {
   
      require('../../../config.php');
      defined('MOODLE_INTERNAL') || die;
      require_login();
    }
	
	public function db_Connect()
	{

    define('DBHOST', '127.0.0.1');
    define('DBUSER', 'root');
    define('DBPASS', '');
    define('DBNAME', 'moodle');
     
    $conn = mysqli_connect(DBHOST,DBUSER,DBPASS,DBNAME);
    $dbcon = mysqli_select_db($conn,DBNAME);
   

	}
}



?>