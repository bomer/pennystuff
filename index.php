<?php 

echo "hello world";
?>
<h1>I am html</h1>

<?php 

echo "And back to php<br>";


/*
{
  "0": "James",
  "1": "Penny",
  "2": 5,
  "999": "Daum",
  "Daum": "super awesome guy",
  "Pikachu": "small mouse"
}
*/

// $people=[];
// $people[0]="James";
// $people[1]="Penny";
// $people[2]=5;
// $people[999]="Daum";

// file_put_contents("data.json", json_encode($people));
// $people=[];
$jsonstring = file_get_contents("data.json");
$people = json_decode($jsonstring,true);
error_reporting(E_ERROR);
// echo $jsonstring;
// var_dump($people);

// $people["Daum"] = "super awesomeish guy";

$newperson=$_POST['name'];
$desc=$_POST['description'];

$people[$newperson] = $desc;

// if($newperson != "")
file_put_contents("data.json", json_encode($people));

//THis will not work if we have keys like $people["daum"] vs $people[0] which is what it will expect.
// for ($i=0; $i < count($people); $i++) { 
// 	echo $people[$i] . "<br>";
// }



echo "<br>";
foreach ($people as $key => $person) {
	echo $key . " - " . $person."<br>";
}

?>
<br>

<form method="post">
	Name:<input name="name"><br>
	description:<input name="description">
	<button>GO</button>

	
</form>
