<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Document</title>
</head>
<body>
<?php 
$line1 = readline("Welke operatie wil je uitvoeren? (+,-)");
	
if ($line1 == "+") { 
	$line = readline("eerste getal?");
	$line = readline("tweede getal?");
	echo "Het antwoord = "; 
	$line = readline($line + $line);
} elseif ($line1 == "-") { 
		$line = readline("eerste getal?");
		$line = readline("tweede getal?");
	echo "Het antwoord = "; 
		$line = readline($line - $line);
}
?>






    
</body>
</html>