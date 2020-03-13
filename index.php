<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>php課題</title>
    <link rel="stylesheet" href="css/reset.css" />
    <link rel="stylesheet" href="css/style.css" />
  </head>
  <body>

  <h1><img src='img/rpspic.jpg' alt=""></h1>
  <h2>CHOOSE YOUR HAND FROM BELOW👇</h2>

  <div class="form-box">

    <form action="result.php" method="post">
      
      <label>
        <input type="radio" title="playerHand" name="playerHand" value="グー" checked>
        <img src="img/rockpic.png" alt="">
      </label>

      <label>
        <input type="radio" title="playerHand" name="playerHand" value="チョキ">
        <img src="img/scissorspic.png" alt="">
      </label>

      <label>
        <input type="radio" title="playerHand" name="playerHand" value="パー">
        <img src="img/paperpic.png" alt="">
      </label>

      <br>
      <button type="submit" class="battle-button">SHOOT!</button>

    </form>
  </div>





    <?php

    ?>


    <!-- jquery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <!-- js -->
    <script src='js/app.js'></script>
  </body>
</html>
