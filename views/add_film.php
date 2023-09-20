<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="traitement/action.php" method="POST" enctype="multipart/form-data">

    <label for="film">Selectionnez votre film</label>
    <input type="file" id="film" name="film">
  
       <button type="submit" name="add"> Add actor</button>
    </form>
</body>
</html>