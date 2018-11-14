<?php
try {
$pdo = new PDO ('mysql:host=localhost;dbname=dbqis1','root','') ;
} catch (PDOException $e) {
	exit('Database Error.');
}
?>