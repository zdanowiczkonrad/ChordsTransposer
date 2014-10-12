<style type="text/css">
<!--
* {
	margin: 0;
}
body {
	background:#444;
}

div {
	width: 770px;
	margin: 10px auto;
	background: #bdb;
	padding:10px;
	border-radius: 10px;
}

h1 {
	display: block;
	color: #eee;
	background: #222;
	margin: 0;
	font-family: "Droid Sans",Arial,Helvetica,sans-serif;
	font-size: 70px;
	letter-spacing: -6px;
	overflow: hidden;
	border-radius: 3px;
	padding: 3px;
	
}

strong {
font-family: "Droid Sans",Arial,Helvetica,sans-serif;
margin: 20px 0;
display: block;
}

textarea {
	background: #777;
	border: 2px #333 solid;
	border-radius: 4px;
	padding: 10px;
	color: #eee;
	width: auto;
	display: block;
font-family: "Droid Sans",Arial,Helvetica,sans-serif;
font-size: 16px;

}

input {
	background: #aaa;
	border: 1px #aaa solid;
	border-radius: 4px;
	padding: 4px 10px;
	font-size: 17px;
	font-weight: bold;
	font-family: "Droid Sans",Arial,Helvetica,sans-serif;
	text=s
}

ul {
	font-size: 17px;

	font-family: "Droid Sans",Arial,Helvetica,sans-serif;
	background: #eee;
	padding: 10px;

}

li {
	margin-left: 20px;
	padding: 5px 4px;
	border-bottom: 1px #888 dotted;
	color: #444;
	font-weight: bold;
}
-->
</style>
<div>
<h1>Transposer</h1>
<?php

$moll["a"]=1;
$moll["b"]=2;
$moll["h"]=3;
$moll["c"]=4;
$moll["cis"]=5;
$moll["d"]=6;
$moll["dis"]=7;
$moll["e"]=8;
$moll["f"]=9;
$moll["fis"]=10;
$moll["g"]=11;
$moll["gis"]=12;


$dur["A"]=1;
$dur["B"]=2;
$dur["H"]=3;
$dur["C"]=4;
$dur["Cis"]=5;
$dur["D"]=6;
$dur["Dis"]=7;
$dur["E"]=8;
$dur["F"]=9;
$dur["Fis"]=10;
$dur["G"]=11;
$dur["Gis"]=12;

$moll_r=array_flip($moll);
$dur_r=array_flip($dur);


echo '<form action="" method="POST"><strong>Input chords</strong><br/><br/><textarea name="chwyty" rows="10" cols=60">'.$_POST['chwyty'].'</textarea><br/><br/><input type="submit" value="transpose!"/><br/><br/>';


if(isset($_POST['chwyty']))
{

	$wyrazy=explode(" ",$_POST['chwyty']);
	echo "<ul>";
	for($i=-1;$i<11;$i++)
	{
		echo "<li>";
	
		foreach ($wyrazy as $element)
		{
			if($moll[$element])
			{
				
				echo $moll_r[($moll[($element)]+$i)%12+1];
			}
			else if($dur[$element])
			{
				echo $dur_r[($dur[($element)]+$i)%12+1];
			}
			else 
			{
				echo $element;
			}
			
			echo ' ';
			
		}
		
		echo "</li>";
	}
	echo "</ul>";

}
?>

</div>