<?php include_once('./header.php');

session_start();

if (!isset($_SESSION['name'])) {

  $_SESSION['name'] = $_POST['name'];
  //characterName
  $_SESSION['charType'] = $_POST['charType'];
  //立ち絵
  $_SESSION['level'] = 1;
  //初期レベル
  $_SESSION['nextExp'] = 100;
  //初期経験値
  $_SESSION['exp'] = 0;
  //初期経験値
  $_SESSION['maxHp'] = 100;
  //初期最大ヘルス
  $_SESSION['hp'] = 100;
  //初期ヘルス
  $_SESSION['atk'] = 10;
  //初期ATK
  $_SESSION['def'] = 10;
  //初期DEF
  $_SESSION['wepon'] = $wepon1;
  //初期武器
  $_SESSION['armor'] = $armor1;
  //初期防具
}
//初期設定

if($_SESSION['hp'] <= 0) {

  $_SESSION['hp'] = $_SESSION['maxHp'];
  
}

?>

<!--header-->

<div class="wrapper">

  <div class="game-window flex">
    <div class="status flex">
      <ul>
        <li>
          <p class="bold">Name</p>
          <p><?php echo $_SESSION['name'] ?></p>
        </li>
        <li>
          <p class="bold">Level</p>
          <p><?php echo $_SESSION['level'] ?></p>
        </li>
        <li>
          <p class="bold">Hp</p>
          <p><?php echo $_SESSION['maxHp'] ?></p>
        </li>
        <li>
          <p class="bold">Atk</p>
          <p><?php echo $_SESSION['atk'] ?> + <span class="green"><?php echo $_SESSION['wepon']->getAd() ?></span></p>
        </li>
        <li>
          <p class="bold">Def</p>
          <p><?php echo $_SESSION['def'] ?> + <span class="green"><?php echo $_SESSION['armor']->getAr() ?></span></p>
        </li>
      </ul>
    </div>
    <div class="character flex">
      <p><img src='<?php echo "img/ch{$_SESSION['charType']}.png" ?>' alt="キャラクター画像" height="340"></p>
    </div>
  </div>

  <div class="equipment flex">
    <div class="wepon">
      <p class="bold">Wepon</p>
      <p class="green"><?php echo $_SESSION['wepon']->getName() ?></p>
    </div>
    <div class="armor">
      <p class="bold">Armor</p>
      <p class="green"><?php echo $_SESSION['armor']->getName() ?></p>
    </div>
  </div>


  <div class="destination">
    <form action="dungeon.php" method="post">
      <p class="bold">ダンジョン</p>
      <div class="flex">
        <p class="map">
          <select name="dungeon">
            <option value="スライムの街道">スライムの街道</option>
            <option value="ゴブリンの村落">ゴブリンの村落</option>
          </select>
        </p>
        <p class="map"><input type="submit" value="出発"></p>
      </div>
    </form>
  </div>

  <footer>
    <p>&copy;2014 CloverLab.,Inc.</p>
  </footer>

</div>

<!--footer-->
<?php include_once('./footer.php'); ?>
