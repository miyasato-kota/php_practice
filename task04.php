<?php
$num1 = 4;
$num2 = 23;
$sum_num;
$array_num = array(1, 3, 5 ,7, 9);
$array_max = array(9, 12, 15 ,61, 53);


// 関数実行
echo problem1(252);
echo problem2($num1, $num2);
echo problem3($array_num);
echo max_array($array_max);
echo problem5($array_max, $array_num);

// 問１
function problem1($a) {
    $a *= 2;
    return $a. strip_tags(nl2br("\n"));
}
// 問２
function problem2($a, $b) {
    $sum_num = $a + $b;
    return $sum_num. strip_tags(nl2br("\n"));
}
// 問3
function problem3($arr) {
    $get_array_num = 1;
    foreach ($arr AS $value) {
        $get_array_num *= $value;
    }
    return $get_array_num. strip_tags(nl2br("\n"));
}
// 問4
function max_array($arr) {
     $max_number = $arr[0];
     foreach($arr as $a) {
         if ($max_number < $a) {
            $max_number = $a; 
         }
     }
     return $max_number. strip_tags(nl2br("\n")); 
}
// 問5
function problem5($arr, $arr1) {
    
    // 1.
    $str = "<p><?php var_dump('string'); ?>テスト<br>テキスト</p>";
    $result = strip_tags($str). strip_tags(nl2br("\n"));

    // 2.
    array_push($arr, 20, 35, 46, 3, 999);
    foreach ($arr AS $merge) {
        $result .= $merge. strip_tags(nl2br("\n"));
    }

    // 3.
    $array_string = array('abc', 'def');
    $num_array = array(1, 2, 3);
    $make_array = array_merge($array_string, $num_array);
    
    foreach ($make_array AS $arr_val) {
        $result .= $arr_val. strip_tags(nl2br("\n"));
    }
    
    // 4.
    $nuw_time = time();
    $get_tiem = mktime(1);
    $result .= $nuw_time. strip_tags(nl2br("\n"));
    $result .= $get_tiem. strip_tags(nl2br("\n"));
    
    // 5.
    $get_date = date('Y-m-d H:i:s');
    $result .= $get_date;
    return $result;
}
?>