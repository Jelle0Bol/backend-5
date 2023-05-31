<?php
$servername = "localhost";
$username = "root";
$password = "";

try {
  $conn = new PDO("mysql:host=$servername;dbname=databank_php", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  echo "";
} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}


$stmt  = $conn->query('SELECT * FROM onderwerpen');

?>



<!doctype html>


<html lang="en">
<head>
  <meta charset="utf-8">
  <title>J2F1BELP5L2 - Content uit je database</title>
  <link rel="stylesheet" href="css/style.css">
</head>
<body>

	<?php include 'includes/header.php'; 

		//  Haal hier uit de URL welke pagina uit het menu is opgevraagd. Gebruik deze om de content uit de database te halen. 
		$array = $stmt->fetchall(PDO::FETCH_ASSOC);

		if (!empty($_GET)) {
			$content = $_GET['content'];
			foreach ($array as $item){
				if($item['id'] == $content) {
					$subject = $item;
				}
			}
			echo $subject['name'] . "<br>";
			?>

			<p> <?php echo $subject['description']; ?> </p>
			<?php
			echo '<img src="' . $subject['image'] . '" alt="img">';
		  }
		//  Laat hier de content die je op hebt gehaald uit de database zien op de pagina.
			
			
	


	include 'includes/footer.php'; ?>


</body>
</html>