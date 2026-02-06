<?php

// Group Members: Tony Nguyen, Zoha Imtiaz 

$links = [
   [ "url"=>"index.php", "label"=>"Home"],
   [ "url"=>"about.php", "label"=>"About"],
   [ "url"=>"works.php", "label"=>"Art Works"],
   [ "url"=>"artist.php", "label"=>"Artists"]

];

$genres = ["Abstract", "Baroque", "Gothic", "Renaissance"];
$subjects = ["Animals", "Landscape", "People"];

function buildOptions($array) {
   $output = "";
   foreach ($array as $value) {
      $output .= "<option>$value</option>";
   }
   return $output;
}
?>