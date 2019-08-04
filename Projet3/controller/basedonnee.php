<?php
class basedonnee{
	
        private $dbname=DataBaseConstante::$DB_NAME;
        private $dbhost=DataBaseConstante::$DB_HOST;
        private $dblogin=DataBaseConstante::$DB_LOGIN;
        private $dbpass=DataBaseConstante::$DB_PASS;
        private $db;

        function __construct($dbname::DataBaseConstante::$DB_NAME,$dbhost::DataBaseConstante::$DB_HOST,$dblogin::DataBaseConstante::$DB_LOGIN,$dbpass::DataBaseConstante::$DB_PASS)
        {
        	
            $this->db=new PDO("mysql:dbname=".$this->dbname.";host=".$this->dbhost,$this->dblogin);
        }

        public function getDB()
        {
		        	$this.$bd = null;
			try {
				$this.$bd =  new PDO("mysql:dbname=".$this->dbname.";host=".$this->dbhost,$this->dblogin);
			} catch (Exception $e) {
				echo $e;
			}
       	return $this->db;
        } 
      	 public function getAll($table_name){
       	$req="SELECT * from ".$table_name;
       	$int=$this->getDB()->query($req);

       	return $int->fetchAll();
       }
}
?>