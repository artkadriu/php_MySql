<?php

include_once('config.php');
if(isset($_POST['submit']));{

$movie_name = $_Post['movie_name'];
$movie_decs = $_Post['movie_desc'];
$movie_quality = $_Post['movie_quality'];
$movie_rating = $_Post['movie_ratign'];
$movie_image = $_Post['movie_image'];

$sql "INSERT INTO movies(movie_name,movie_desc,movie_quality,movie_ratign,movie_image) VALUES(:movie_name, :movie_desc, :movie_quality, :movie_ratign, :movie_image)";





$insertMovie = $conn->prepare($sql);

$insertMovie->bindParam(':movie_name',$movie_name);
$insertMovie->bindParam(':movie_desc',$movie_desc)
$insertMovie->bindParam(':movie_quality',$movie_quality)
$insertMovie->bindParam(':movie_image',$movie_image)



$insertMovie->execute();
header("Location:movies.php");

}



?>

