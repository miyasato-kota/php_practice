<?php
$num1 = 4;
$num2 = 23;
$sum_num;
$array_num = array(1, 3, 5 ,7, 9);
$array_max = array(92, 12, 15 ,61, 53);


// 関数実行
echo problem1(2);
echo problem2($num1, $num2);
echo problem3($array_num);
echo max_array($array_max);
echo problem5($array_max, $array_num);

// 問１
function problem1($a) {
    $b = $a * 2;
    return $b;
}
// 問２
function problem2($a, $b) {
    $sum_num = $a + $b;
    return $sum_num;
}
// 問3
function problem3($arr) {
    $arr_result = 0;
    for ($i = 0; $i < count($arr); $i++) {
        if($i == 0){
            $arr_result += $arr[$i];
        }else{
            $arr_result *= $arr[$i];
        }
    }
    return $arr_result.'<br>';
}
// 問4
function max_array($arr) {
     $max_number = $arr[0];
     foreach($arr as $a) {
         if ($max_number < $a) {
            $max_number = $a; 
         }
     }
     return $max_number; 
}
// 問5
function problem5($arr, $arr1) {
    
    // 1.
    $str = "<p><?php var_dump('string'); ?>テスト<br>テキスト</p>";
    $result = strip_tags($str);

    // 2.
    array_push($arr, 20, 35, 46, 3, 999);
    foreach ($arr AS $merge) {
        $result .= $merge;
    }

    // 3.
    $array_string = array('abc', 'def');
    $num_array = array(1, 2, 3);
    $make_array = array_merge($array_string, $num_array);
    
    foreach ($make_array AS $arr_val) {
        $result .= $arr_val;
    }
    
    // 4.
    $time = time() + (7 * 24 * 60 * 60);
    $nuw_time = date('Y-m-d', $time);
    $get_tiem = date("M-d-Y", mktime(0, 0, 0, 1, 1, 2021));;
    $result .= $nuw_time;
    $result .= $get_tiem;
    
    // 5.
    $get_date = date('Y-m-d H:i:s');
    $result .= $get_date;
    return $result;
}
?>