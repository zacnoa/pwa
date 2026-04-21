<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Vježba-5</title>
  <style>
    body {
      background-color: #282828;
      color: #ebdbb2;
      font-family: Arial, sans-serif;
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
      min-height: 100vh;
      margin: 0;
    }

    input[type="number"] {
      background-color: #3c3836;
      color: #ebdbb2;
      border: 1px solid #ebdbb2;
      padding: 8px 12px;
      font-size: 16px;
      border-radius: 4px;
      margin-top: 8px;
      display: block;
    }

    label {
      font-size: 16px;
    }
  </style>
</head>
<body>
  <h1>Igra (pogodi broj)</h1>
  <form action="" method="POST" id="calculator">
    <label for="number">Probajte pogoditi jedan broj od 1 do 10*</label>
    <input type="number" name="number" id="number" required autofocus>
  </form>
  <?php
    $randomNumber = rand(1, 9);
    if (isset($_POST["number"])) {
      if ($_POST["number"] == $randomNumber ) {
        print '<h2 style="color:green;">Pogodak, probaj ponovno!</h2>';
      } else {
        print '<h2 style="color:red;">Krivo, probaj ponovno!</h2>';
      }
      print '<h3>Zamišljeni broj je bio '.$randomNumber.'</h3>';
    }
  ?>
</body>
</html>