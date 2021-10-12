<html>
<head>
<title>
OOPS CONCEPT
</title>
</head>

<body>

<?php 
class fruits{
	public $name;
	public $color;
	
	const nam = "Stawberry";
	const col = "rose";
	
	function set_name($n){
		$this->name=$n;
	}
	
	function get_name(){
		 echo $this->name."<br>";
	}
	
	
	function set_color($n,$c){
		$this->name=$n;
		$this->color=$c;
	}
	
	function get_color(){
		echo  "Fruit name is ".$this->name." and that color is ".$this->color."<br>";
		
		echo "Fruit name is ".self::nam." and that color is ".self::col."\n";
		
	}
	
}


$obj = new fruits();
$obj1 = new fruits();
$obj->set_name('Apple');
$obj->get_name();

$obj1->set_color('Apple','Red');
$obj1->get_color();
?>

</body>
</html>