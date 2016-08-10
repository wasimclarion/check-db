<?php 

	
	/*
	class Circle implements Shape{
		public function draw_shape(){
			echo "In Circle";
		}
	}
	
	class Square implements Shape{
		public $name;
		
		public function draw_shape(){
			echo "In Square";
		}
		
		public function get_name(){
			return $this->name;
		}
	}
	
	interface Shape{
		public function draw_shape();
	}
	
	$square = new Square();
	$square->draw_shape(); echo "<br>";
	$square->name = "testssssssss"; echo "<br>";
	echo $square->name;
	print_r($square);
	echo gettype($square), "\n";
	//$square.draw_shape();

		// connect to mongodb
	   $m = new MongoClient();
	   echo "Connection to database successfully";
		
	   // select a database
	   $db = $m->mydb;
	   echo "Database mydb selected";
	   $collection = $db->createCollection("mycol");
	   echo "Collection created succsessfully";
	   exit;*/
		$center = $_GET['dc'];
		
		switch($center){
			
			case 'ADC':		echo "ADC: ";		
					$servername = "119.160.193.220";
					$username = "sonar";
					$password = "sonar";
					$db = "sonar";
			break;		
			
			case 'BDC':	echo "BDC: ";		
					$servername = "202.62.83.150";
					$username = "sonarqube";
					$password = "sonar@123";
					$db = "sonr";
			break;			
			
			case 'PDC': echo "PDC: ";	
					$servername = "192.168.60.53";
					$username = "sonarlocal";
					$password = "clarion";
					$db = "sonar";
			break;			
			
			default:	echo "Default";			
					$servername = "192.168.60.53";
					$username = "sonarlocal";
					$password = "clarion";
					$db = "sonar";
		}
				
		// Create connection
		$conn = mysql_connect($servername,$username,$password) or die("Not able to connect");
		mysql_select_db($db, $conn);
		print_r("Connected Successfully! ".$conn);
		echo mysql_errno($conn) . ": " . mysql_error($conn). "\n";
		die();
?>