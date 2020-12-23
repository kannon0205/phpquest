<?php

require_once('data.php');

//戦闘システム
function battle($enemy) {

  echo
    "<div class='event-header'>
    <p><span class='red'>{$enemy->getName()}</span>が飛び出してきた！</p>
    </div>";
  
  $_SESSION['enemyHp'] = $enemy->getHp();
  
  $playerAtk = $_SESSION['atk'] + $_SESSION['wepon']->getAd() * 2;
  //攻撃力＋装備攻撃力
  $attackDamage = $playerAtk - $enemy->getDef() * 3;
  
  $enemyAttackDamage = ceil(($enemy->getAtk() / 2 - $_SESSION['def'] / 4) + (($enemy->getAtk() / 2) / ($_SESSION['armor']->getAr() / 4)));
  
  for($i = 1; $i <= 100; $i ++) {
    
    echo
      "<div class='message'>
      <p>あなたは<span class='red'>{$enemy->getName()}</span>に攻撃した。<br>";
    
    if($attackDamage >= 1) {
      //ダメージが1以上の時

      $_SESSION['enemyHp'] -= $attackDamage;
      //攻撃する処理
      
      echo
        "<span class='green'>{$attackDamage}</span>ダメージを与えた。</p>";
      
    } else {
      //ダメージがなかった時

      echo
        "<span class='red'>まるで効いていないようだ。</span></p>";
    
    }
      
    echo "</div>";

    if($_SESSION['enemyHp'] <= 0) {
      //倒した時
      
      echo
        "<div class='message'>
        <p><span class='red'>{$enemy->getName()}</span>を倒した。<br>
        経験値を<span class='green'>{$enemy->getExp()}</span>獲得した。</p>
        </div>";

      $_SESSION['exp'] += $enemy->getExp();
      //経験値獲得

      if($_SESSION['exp'] >= $_SESSION['nextExp']) {
        //経験値が100溜まった時レベルアップ

        $_SESSION['level'] += 1;
        $_SESSION['maxHp'] += rand(5, 10);
        $_SESSION['atk'] += rand(1, 3);
        $_SESSION['def'] += rand(1, 3);
        $_SESSION['exp'] -= $_SESSION['nextExp'];
        $_SESSION['nextExp'] += $_SESSION['nextExp'] / 10;

        echo
          "<div class='message'>
          <p><span class='green'>レベルアップ！</span><br>
          あなたはレベル{$_SESSION['level']}になった。</p>
          </div>";
      }
      //レベルアップ

      break;
    }//勝利
    
    echo
      "<div class='message'>
      <p><span class='red'>{$enemy->getName()}</span>があなたに攻撃してきた。<br>";
    
    if($enemyAttackDamage >= 1) {
      //ダメージが1以上の時

      $_SESSION['hp'] -= $enemyAttackDamage;
      //攻撃される処理

      echo
        "あなたは<span class='red'>{$enemyAttackDamage}</span>ダメージを受けた。</p>";

    } else {
      //ダメージがなかった時

      echo
        "<span class='green'>この程度の攻撃ではあなたに傷をつけることはできない。</span></p>";

    }
    
      echo "</div>";

    if($_SESSION['hp'] <= 0) {

      echo
        "<div class='event-footer'>
        <p><span class='red'>あなたは力尽きた。</span></p>
        <form action='index.php' method='post'>
        <p class='submit'><input type='submit' value='リトライ'></p>
        </form>
        </div>";
      
      break;
    }
  }
}
//戦闘システム

function reward($item1, $item2) {
  
  echo
    "<div class='event-header'>
    <p>道端になにか落ちているようだ。</p>
    </div>";

  $half = rand(1, 2);

  switch($half) {
    case 1:

      if($_SESSION['wepon']->getAd() < $item1->getAd()) {

        $_SESSION['wepon'] = $item1;

        echo
          "<div class='message'>
          <p><span class='green'>{$item1->getName()}(攻撃力{$item1->getAd()})</span>を手に入れた。</p>
          </div>";

      } else {

        echo
          "<div class='message'>
          <p>どうやらゴミだったようだ。</p>
          </div>";

      }

      break;

    case 2:

      if($_SESSION['armor']->getAr() < $item2->getAr()) {

        $_SESSION['armor'] = $item2;

        echo
          "<div class='message'>
          <p><span class='green'>{$item2->getName()}(防御力{$item2->getAr()})</span>を手に入れた。</p>
          </div>";
        
      } else {
        
        echo
          "<div class='message'>
          <p>どうやらゴミだったようだ。</p>
          </div>";
        
      }

      break;
      
  }

}

?>
