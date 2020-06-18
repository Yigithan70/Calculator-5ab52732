<<<<<<< HEAD
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
=======
<?php

	$line1 = readline("Welke operatie wil je uitvoeren? (+,-)");
	$line2 = readline("Eerste getal?");
	$line3 = readline("Tweede getal?");
	$line4 = readline("Uw resultaat is:");
	readline_add_history($line);

	if ($line1 == "+"){
		$uitkomst = readline($line2 + $line3); }

	elseif ($line1 == "-"){
		$uitkomst = readline($line2 - $line3);
	}

?>
>>>>>>> 7a9ee9041e93dac52383f29b979ea0a558d33bb1
