<?php
$name = '宮里';
if ($name == '宮里') {
    echo '私はあなたの名前です';
} else {
    echo 'あなたの名前ではありません';
}
echo strip_tags(nl2br("\n"));

$a = 0;
for ($i = 0; $i <= 10000; $i++) {
    $a += $i;
}
echo $a;
echo strip_tags(nl2br("\n"));

$fruits = array('apple', 'orange', 'banana', 'peach', 'grape');
foreach ($fruits AS $value) {
    echo $value. strip_tags(nl2br("\n"));
}

/* for文の始めの値を定義する */
$start = 0;
/* for文の終わりの値を定義する */
$end = 100;
for ($i = $start; $i <= $end; $i++) {
  // 5で割り切れたら{}内を実行する
  if($i != 0 && $i % 5 == 0){
    echo $i. strip_tags(nl2br("\n"));
  }
}
?>