<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>app</title>
  <link rel="stylesheet" href="css/destyle.css">
  <link rel="stylesheet" href="css/style.css">
  <link href="https://fonts.googleapis.com/css2?family=Kosugi+Maru&display=swap" rel="stylesheet">
</head>

<body>

  <div class="wrapper">

    <form class="char-form" action="main.php" method="post">
      <div class="game-window flex">
        <div class="char-type type1">
          <p><label><input type="radio" name="charType" value="1" checked>type1</label></p>
        </div>
        <div class="char-type type2">
          <p><label><input type="radio" name="charType" value="2">type2</label></p>
        </div>
      </div>

      <div class="char-name">
        <p>
          キャラクター名: <input type="text" name="name" required>
        </p>
      </div>

      <div class="start">
        <p><input type="submit" value="ゲームスタート"></p>
      </div>
    </form>

    <footer>
      <p>キャラクター画像素材: &copy;2014 CloverLab.,Inc.</p>
    </footer>

  </div>

</body>

</html>
