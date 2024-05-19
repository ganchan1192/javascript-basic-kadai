<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>PHP基礎編</title>
</head>

<body>
    <p>
        <?php
       function sort_2way($array, $order) { //引数$array, $orderを宣言
        if($order) {                   //引数order
          echo '昇順にソートします。<br>'; //エコーする
          sort($array);               //引数arrayをソートする(※arrayに対応する$numsは後で設定)
          foreach($array as $num) {  // $numsの中順番に取り出す
            echo "{$num}<br>";       //　エコーする
          }
        } else {
          echo '降順にソートします。<br>';
          rsort($array);
          foreach($array as $num) { 
            echo "{$num}<br>";
          }
        }
      }
      $nums = [15, 4, 18, 23, 10]; // ソートする配列を宣言
      sort_2way($nums, true);  //$array = $nums  $order = TRUE or FALSE
      sort_2way($nums, false);
        ?>
    </p>
</body>

</html>