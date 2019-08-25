    <?php
    
     define('DBHOST','localhost');
     define('DBUSER','root');
     define('DBPASS','');
     define('DBNAME','theatershow');

     class theater{
        public $host   = DBHOST; 
        public $user   = DBUSER; 
        public $pass   = DBPASS; 
        public $dbname = DBNAME;

        public $link;
        public function __construct(){
            $this->connectdb();
        }
        public function connectdb(){
            $this->link = new mysqli($this->host,$this->user,$this->pass,$this->dbname);
            if(!$this->link){
                return false;
        }
     }
     public function login($sql){
        $result =$this->link->query($sql);
        if($result->num_rows>0){
           //$row = $result->fetch_assoc();
            header('location:dashboard.php');
            
        }else{
         $msg = "<p>Password Or Email Doesn't Match Try Again!</p>";
            return $msg;
        }
    }
    } 
    ?>