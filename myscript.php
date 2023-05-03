<?php

$text = $_GET['textArea'];

/* echo $text, strlen(trim($text)); */

$censured = '***';
$word = $_GET['word'];

$text_censured = str_replace($word, $censured, $text);

/* echo $text_censured, strlen(trim($text_censured)); */

?>

<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css' rel='stylesheet' integrity='sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65' crossorigin='anonymous'>
   <title>BadWords | Result</title>
</head>

<body>
   <div class="container mt-5 d-flex justify-content-evenly">
      <div class="card">
         <div class="card-header">
            <h2>
               Censured word with length
            </h2>
         </div>
         <div class="card-body">
            <p>
               <?php echo $text; ?>
               <b>Length: </b>
               <?php echo strlen(trim($text)) ?>
            </p>
         </div>
      </div>
      <div class="card">
         <div class="card-header">
            <h2>
               Censured word with length
            </h2>
         </div>
         <div class="card-body">
            <p>
               <?php echo $text_censured; ?>
               <b>Length: </b>
               <?php echo strlen(trim($text_censured)) ?>
            </p>
         </div>
      </div>
   </div>
</body>

</html>