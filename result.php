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

  <?php

// じゃんけんの手を配列に代入
$hands = ['グー','チョキ','パー'];

// プレイヤーの手がPOSTされたら
if (isset($_POST['playerHand'])) {
  // プレイヤーの手を代入
  $playerHand = $_POST['playerHand'];

  // PCの手をランダムで選択
  $key = array_rand($hands);
  $pcHand = $hands[$key];

  // 勝敗を判定
  if ($playerHand == $pcHand) {
      $result = "<img src='img/adraw.png'>";
  } elseif ($playerHand == 'グー' && $pcHand == 'チョキ') {
    $result = "<img src='img/youwin.png'>";
  } elseif ($playerHand == 'チョキ' && $pcHand == 'パー') {
      $result = "<img src='img/youwin.png'>";
  } elseif ($playerHand == 'パー' && $pcHand == 'グー') {
      $result = "<img src='img/youwin.png'>";
  } else {
      $result = "<img src='img/youlose.png'>";
  }
}

  ?>

<div id="wrapper">
    <main>
        <h3>The result is....</h3>
        <div class="result-box">
            <p class="result-word"><?php echo $result ?></p>

            YOU：<?php echo $playerHand ?><br>
            PC：<?php echo $pcHand ?><br>

            <p><a class="red" href="index.php">PLAY AGAIN 👊✌️🖐</a></p>
        </div>
    </main>
</div>

    <!-- jquery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <!-- js -->
    <script src='js/app.js'></script>
  </body>
</html>