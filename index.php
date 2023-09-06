
<?php
//Parte 1
//QUI FAREMO I FORM IN CUI FAREMO INSERIRE IL PARAGRAFO E LA PAROLA DA CENSURARE
//ALL'UTENTE E INVIEREMO LA RICHIESTA AL SERVER
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

    <form action="filter.php" method="POST">
      <div>
        <h1 class="text-center mt-3">No bad words</h1>
        <!--PARAGRAFO-->
        <div>
          <label class="fw-bold mt-5">Paragraph</label>
          <input type="text" class="form-control" name="paragraph">
        </div>
        <!--CENSURA-->
        <div>
          <label class="fw-bold mt-5">Word to censor</label>
          <input type="text" class="form-control" name="censored">
        </div>
        <!--Button-->
        <div>
          <button class="btn btn-primary mt-5" type="submit"> Submit</button>
        </div>
      </div>
    </form>
  </div>
</body>

</html>