<?php include_once('./header.php');

session_start();
$_SESSION['dungeon'] = $_POST['dungeon'];

?>

<!--header-->

<div class="wrapper">

  <div class="dungeon-name">
    <p><?php echo $_SESSION['dungeon'] ?></p>
  </div>

  <div class="dungeon">

    <?php
      switch($_SESSION['dungeon']) {
          
        case 'スライムの街道';
          echo
            '<div class="message">
              <p>
              町を出たあなたが見たのは大きな街道だった。<br>
              商人たちがせわしなく動いているのを眺めていると、<br>
              北側だけ人通りが少ないことに気づいた。<br>
              どうやらここは<span class="red">スライム</span>の縄張りのようだ。
              </p>
            </div>';
          
          for($i = 1; $i <= 6; $i ++) {
            
            $dice = rand(1,25);
            
            switch($dice) {
                
                case $dice == 1 ;
                  
                  battle($slime3);

                  if($_SESSION['hp'] <= 0) {
                    //敗北時
                    break 2;
                  }

                  //強敵イベント
                  break;
                
                case $dice == 25 ;
                
                reward($wepon4, $armor4);
                
                //強装備イベント
                  break;
                
                case $dice >= 2 && $dice <= 11;
                  
                  battle($slime1);

                  if($_SESSION['hp'] <= 0) {
                  //敗北時
                  break 2;
                  }
                
                  //弱敵イベント
                  break;
                
                case $dice >= 12 && $dice <= 16;
                    
                  battle($slime2);

                  if($_SESSION['hp'] <= 0) {
                    //敗北時
                    break 2;
                  }
                  //中敵イベント
                  break;
                
                case $dice >= 17 && $dice <= 21;
                
                reward($wepon2, $armor2);
                
                //弱アイテムイベント
                  break;
                
                case $dice >= 22 && $dice <= 24;
                
                reward($wepon3, $armor3);
                
                //中アイテムイベント
                  break;
                
            }
            
            if($i == 6) {
            
              $_SESSION['hp'] = $_SESSION['maxHp'];
              
              echo "<div class='event-footer'>
                      <p>
                        ついに最奥にたどり着いたようだ。<br>
                        少し自信のついたあなたは、晴れやかな気持ちで帰路に就いた。
                      </p>
                      <form action='main.php' method='post'>
                        <p class='submit'><input type='submit' value='町へ戻る'></p>
                      </form>
                    </div>";
            }
            
          }//for
          break; //スライム街道ここまで
      } ?>

  </div>

  <footer>
    <p>&copy;2014 CloverLab.,Inc.</p>
  </footer>

</div>

<!--footer-->
<?php include_once('./footer.php'); ?>
