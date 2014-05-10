<html>
<head>
<title> HTML FORM FOR MULTIPLICATION TABLE </title>

<?php 

$counter = $_POST['endNumber']; 
$start = $_POST['startNumber']; 
$multiply = $_POST['multiply']; 

for($start; $start<$counter; $start++) { 
	$result = $start * $multiply; 
	print $start." x ".$multiply." = ".$result."<BR>"; 
}
?>

</head>
<body>

<FORM NAME = "form1" METHOD = "POST" ACTION = "Loop.php"> 
Create your very own multiplication table by filling in a value for low, high, and factor. 

	<INPUT TYPE = "TEXT" VALUE = <?php print "Low" ?> NAME = "startNumber"> 
	<INPUT TYPE = "TEXT" VALUE = <?php print "High" ?> NAME = "endNumber">
	<INPUT TYPE = "TEXT" VALUE = <?php print "Factor" ?> NAME = "multiply">
	<INPUT TYPE = "Submit" VALUE = "Create Table!" NAME = "submit">

</FORM>
</body>
</html>

	