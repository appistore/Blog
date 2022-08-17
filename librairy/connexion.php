<?php  
 // information pour la connection à le DB locale
//=========================================
$host = '51.91.118.208';
$user = 'appistor_admin';
$pass = 'UXZ(ri#t9x';
$db = 'appistor_blogue-db';
// $link = mysqli_connect("localhost","my_user","my_password","my_db");
$link = mysqli_connect($host,$user,$pass,$db);

// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

// Change charracter set to utf8 
mysqli_set_charset ($link,'UTF8');
// =========================================



////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
class Eburny
{
	    private static $serveur='mysql:host=51.91.118.208';
      	private static $bdd='dbname=appistor_blogue-db';   		
      	private static $user='appistor_admin' ;    		
      	private static $mdp='UXZ(ri#t9x' ;	
		private static $monPdo;
		private static $Eburny = null; 
		
		private function __construct()
	    {
		 try{
    		Eburny::$monPdo = new PDO(Eburny::$serveur.';'.Eburny::$bdd, Eburny::$user, Eburny::$mdp); 
			Eburny::$monPdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		   }
			
         catch (PDOException $error) 
                 {	
                     echo 'N° : '.$error->getCode().'<br />';
                     die ('Erreur : '.$error->getMessage().'<br />');
                 }
	   }
	   
	    public function _destruct(){
		       Eburny::$monPdo = null;
	          } 
	    public  static function getPdoEburny()
	    {
		    if( Eburny::$Eburny == null)
		    {
			    Eburny::$Eburny= new  Eburny();
		    }
		    return  Eburny::$Eburny;  
	    }    // variables
		
 // constructor:::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::
 		

	
	
	
	
	
	
<?php  
// information pour la connection à le DB locale
//=========================================
$host = 'localhost';
$user = 'root';
$pass = '';
$db = 'blogue-db';
$link = mysqli_connect($host,$user,$pass,$db);

// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

// Change charracter set to utf8 
mysqli_set_charset ($link,'UTF8');
 // =========================================



///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
class Eburny
{
	    private static $serveur='mysql:host=localhost';
      	private static $bdd='dbname=blogue-db';   		
      	private static $user='root' ;    		
      	private static $mdp='' ;	
		private static $monPdo;
		private static $Eburny = null; 
		
		private function __construct()
	    {
		 try{
    		Eburny::$monPdo = new PDO(Eburny::$serveur.';'.Eburny::$bdd, Eburny::$user, Eburny::$mdp,array (PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES \'UTF8\'')); 
			Eburny::$monPdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		   }
			
         catch (PDOException $error) 
                 {	
                     echo 'N° : '.$error->getCode().'<br />';
                     die ('Erreur : '.$error->getMessage().'<br />');
                 }
	   }
	   
	    public function _destruct(){
		       Eburny::$monPdo = null;
	          } 
	    public  static function getPdoEburny()
	    {
		    if( Eburny::$Eburny == null)
		    {
			    Eburny::$Eburny= new  Eburny();
		    }
		    return  Eburny::$Eburny;  
	    }    // variables

    // constructor:::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::
 
 
 
 
 
 
 
 
 
 
 
<?php  
// information pour la connection à le DB locale
//=========================================
$host = '164.160.35.251';
$user = 'batimat-user';
$pass = 'BximTOEo17C';
$db = 'blogue-db';  
// $link = mysqli_connect("localhost","my_user","my_password","my_db");
$link = mysqli_connect($host,$user,$pass,$db);

// Check connection
if (mysqli_connect_errno())
 {
 echo "Failed to connect to MySQL: " . mysqli_connect_error();
 }
//Change charracter set to utf8 
mysqli_set_charset ($link,'UTF8');
// =========================================


///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
class Eburny
{
	   private static $serveur='mysql:host=164.160.35.251';
		 private static $bdd='dbname=blogue-db';   		
		 private static $user='batimat-user' ;    		
		 private static $mdp='BximTOEo17C' ;	
	   private static $monPdo;
	   private static $Eburny = null; 
	   
	   private function __construct()
	   {
		try{
		   Eburny::$monPdo = new PDO(Eburny::$serveur.';'.Eburny::$bdd, Eburny::$user, Eburny::$mdp,array (PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES \'UTF8\'')); 
		   Eburny::$monPdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		  }
		   
		catch (PDOException $error) 
				{	
					echo 'N° : '.$error->getCode().'<br />';
					die ('Erreur : '.$error->getMessage().'<br />');
				}
	  }
	  
	   public function _destruct(){
			  Eburny::$monPdo = null;
			 } 
	   public  static function getPdoEburny()
	   {
		   if( Eburny::$Eburny == null)
		   {
			   Eburny::$Eburny= new  Eburny();
		   }
		   return  Eburny::$Eburny;  
	   }    // variables

   // constructor:::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::

