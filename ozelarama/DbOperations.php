<?php 
class DbOperations{

	private $connection;

	function connect(){ //Db Bağlantı fonksiyonu
		
		$conn = mysqli_connect("localhost","root","","blogsite2");

		if (mysqli_connect_errno($conn))	//Bağlanmazsa error verdirilir.
			echo "MySQLe baglanamadi: " . mysqli_connect_error();
		else
			$this->connection = $conn;
	}

	function search($key){

		mysql_query("SET NAMES UTF8"); // Türkçe karakter sorununu ortadan kaldırır.
		$result = mysqli_query($this->connection, 
			"SELECT * FROM wp_posts WHERE wp_posts.post_content like '%$key%';");
		return $result;
	}

	function commentSearch($key){

		$result = mysqli_query($this->connection, 
			"SELECT * FROM wp_comments JOIN wp_posts on wp_posts.ID=wp_comments.comment_ID WHERE wp_comments.comment_content like '%$key%';");
		mysql_unbuffered_query('SET NAMES utf8');
		return $result;
	}

	function view($result, $commentResult){
		include 'results.php';
	}
}