<?php
    echo "hello php!";
    echo nl2br("\n");

    $a = 3;
    $b = 7;
    $c = $a + $b;
    echo $c;
    echo nl2br("\n");

    $array_month = array("1月","2月","3月","4月","5月","6月","7月","8月","9月","10月","11月","12月");
    echo $array_month[7];
    echo nl2br("\n");

    $hello = "Hello,";
    $name = "miyasato kota";
    $world = "'s World!";
    $word = $hello . $name . $world;
    echo $word;
    echo nl2br("\n");

    $tech_boost = "tech";
    $tech_boost .= " boost";
    echo $tech_boost;
    echo nl2br("\n");

    $calendar_2018 = array(
        "January" => "1月",
        "February" => "2月",
        "March" => "3月",
        "April" => "4月",
        "May" => "5月",
        "June" => "6月",
        "July" => "7月",
        "August" => "8月",
        "September" => "9月",
        "October" => "10月",
        "November" => "11月",
        "December" => "12月"
    );
  
    // 12月を表示する
    echo $calendar_2018["December"];
?>