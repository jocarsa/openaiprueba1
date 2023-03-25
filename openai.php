<?php 

$command = escapeshellcmd('C:\xampp\htdocs\openai\dos.py "'.$_GET['pregunta'].'"' );
$output = shell_exec($command);
echo $output;

?>