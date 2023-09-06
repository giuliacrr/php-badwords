<?php
//PARTE 2 
// QUI SI RICEVERA' LA RICHIESTA E VERRANO ESEGUITE LE SEGUENTI OPZIONI:
//1)STAMPARE IL PARAGRAFO E LA SUA LUNGHEZZA IN CARATTERI (SPAZI COMPRESI);
//2)STAMPARE LA STESSA E IDENTICA COSA ,A DOPO AVER SOSTITUITO LA PAROLA DA CENSURARE CON 3 ASTERISCHI *** OGNI VOLTA CHE OCCORRE.

$paragraph = $_POST["paragraph"];
$censored =$_POST["censored"];

$answer = str_replace($censored, "***", $paragraph);

?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>No bad words</title>
  <!-- CUSTOM STYLE SHEET FILE LINK -->
  <link rel="stylesheet" href="./css/style.css">
  
  <!-- THIRD PARTY LIBRARIES -->
  <!-- BOOTSTRAP CDN -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  <!-- FONTAWESOME CDN -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <!-- STANDARD FAVICON -->
  <link rel="icon"type="image/x-icon" href="https://boolean.careers/favicon/favicon.ico">
  <!-- VUE CDN -->
  <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
  <!-- LUXON CDN -->
  <script src="https://cdn.jsdelivr.net/npm/luxon@3.3.0/build/global/luxon.min.js"></script>
  <!-- AXIOS CDN -->
  <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
</head>

<body>

<div class="container">
  <h3 class="text-center">Answer from the server:</h3>
  <ul>
    <li><span class="fw-bold">Uncensored paragraph: </span><?php echo $paragraph  ?></li>
    <li><span class="fw-bold">Paragraph length: </span><?php echo strlen($paragraph)  ?></li>
    <li><span class="fw-bold">Censored paragraph: </span><?php echo $answer ?></li>
  </ul>
  <a href="./index.php">Go back</a>
</div>

</div>
</body>

</html>