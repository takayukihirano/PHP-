<?php
    echo 'Hello,' . 'world!';
    echo '<br>';

    echo '<br>' . '練習２' . '<br>';

    echo 5*3 .'<br>';
    echo 8/2 .'<br>';
    echo 3+6 . '<br>';
    echo 5-2 . '<br>';
    echo 7%3 . '<br>';

    echo'<br>' . '練習３' . '<br>';

    $var = '変数の値を出力します';
    echo $var;
    echo '<br>';

    $var = '変数を定義します。';
    echo $var;

    $var = '変数を再代入します。';
    echo $var;

    $var = 'Hello,';
    $var .= 'world!';

    echo '<br>' . '<br>' . '練習4' . '<br>';

    $var = 'この文字列と';
    $var .= 'この文字列を';
    $var .= '繋げます';
    echo $var;
    echo '<br>';

    echo'<br>' . '練習5' . '<br>';

    $var = 5;
    echo $var . '<br>';
    $var = '文字に上書き';
    echo $var;
    echo '<br>';

    echo'<br>' . '練習6' . '<br>';

    $color = 'red';
    echo "My ${color} car was stolen";
    echo '<br>';

    echo'<br>' . '練習7' . '<br>';

    $var = 11;
    if ($var > 10){
        echo '10より大きい数値です';
    }
    echo '<br>';

    echo'<br>' . '練習8' . '<br>';

    $var = 23;
    if($var >= 20 && $var < 30){
        echo '20代です。';
    }
    echo '<br>';

    echo'<br>' . '練習9' . '<br>';

    $var = 32;
    if($var >=20 && $var < 30){
        echo '20代です';
    } else{
        echo '20代ではありません';
    }
    echo '<br>';

    echo'<br>' . '練習10' . '<br>';

    $var = 19;
    if($var >=20 && $var < 30){
        echo '20代です';
    }elseif($var >= 30 && $var < 40){
        echo '30代です';
    } else{
        echo '20代または30代ではありません';
    }
    echo '<br>';

    echo'<br>' . '練習11' . '<br>';
    $var = 'male';
    switch ($var){
        case 'male':
        // 処理
        echo '男性です';
        break;
        case 'female':
        // 処理
        echo '女性です';
        break;
        default:
        // 処理
        echo '?';
        break;
    echo'<br>';
    }

    echo'<br>' . '練習12' . '<br>';
    $var = 0;
    while ($var < 10){
        echo $var . '<br>';
        $var++;
    }

    echo'<br>' . '練習1３' . '<br>';
    for ($i = 0; $i < 10; $i++){
        echo $i . '<br>';
    }

    echo'<br>' . '練習14' . '<br>';
    $fruits = ['りんご',  'みかん',  'ばなな', 'マンゴー', 'ドリアン', 'いちご', 'さくらんぼ'];
    $counter = 1;

    foreach ($fruits as $fruit) {
        echo $fruit . ' ';
        if ($counter % 3 == 0){
            echo '<br>';
        }
        $counter++;
    }

    echo '<br>' .'<br>' . '練習15' . '<br>';
    $fruits = ['apple' => 'りんご', 'orange' => 'みかん', 'banana' => 'ばなな'];
    foreach ($fruits as $key => $value) {
    echo "${value} は英語で ${key} です。" . '<br>';
    }

?>