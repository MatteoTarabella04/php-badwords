<!DOCTYPE html>
<html lang='en'>

<head>
   <meta charset='UTF-8'>
   <meta http-equiv='X-UA-Compatible' content='IE=edge'>
   <meta name='viewport' content='width=device-width, initial-scale=1.0'>
   <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css' rel='stylesheet' integrity='sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65' crossorigin='anonymous'>
   <title>PHP | Badwords</title>
</head>

<body>
   <div class="container d-flex">
      <div class="card col-8 m-auto">
         <div class="card-header">
            <h2>Badwords</h2>
         </div>
         <div class="card-body d-flex align-items-center">
            <form class="w-100" action="myscript.php" method="$_GET">
               <div class="mb-3">
                  <label class="form-label" for="textArea">Insert Your Text Here
                  </label>
                  <textarea class="form-control" name="textArea" id="textArea" rows="5">
                  </textarea>
               </div>

               <div class="mb-3">
                  <label class="form-label" for="word">
                     Cesure a Word
                  </label>
                  <input class="form-control" type="text" name="word" id="word">
               </div>

               <div class="mb-3">
                  <button type="submit" class="btn btn-primary">Censure</button>
                  <button type="reset" class="btn btn-danger">Reset</button>
               </div>
            </form>
         </div>
      </div>
   </div>
</body>

</html>