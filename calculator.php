<?php
$line1 = readline("Welke operatie wil je uitvoeren? (+,-)");
$line2 = readline("Eerste getal? ");
$line3 = readline("Tweede getal? ");
$line4 = readline("Uw resultaat is: ");
readline_add_history($line);
if ($line1== "+") {
$uitkomst=readline($line2+$line3); }
elseif ($line1=="-") {
$uitkomst=readline($line2-$line3);
}
?>