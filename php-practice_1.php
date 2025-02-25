<?php
// Q1 変数と文字列
$name = '安藤';
var_dump($name);

$newMessage = '私は「 ' . $name . ' 」です。';
var_dump($newMessage);


// Q2 四則演算
$num = 5 * 4;
var_dump($num);

$num /= 2;
var_dump($num);


// Q3 日付操作
date_default_timezone_set('Asia/Tokyo');
echo date('現在時刻は、Y年m月d日 H時i分s秒です。');


// Q4 条件分岐-1 if文
$device = 'windows' ;
        
if($device === 'windows'|| $device === 'mac') {
    echo '使用OSは、' . $device . 'です。';
} else {
    echo 'どちらでもありません。';
}



// Q5 条件分岐-2 三項演算子
$age = 18;
$message = ($age >= 18) ? '成人です。' : '未成年です。';

echo $message;


// Q6 配列
$tokyoArea = ['東京都', '埼玉県', '群馬県', '栃木県', '千葉県', '茨城県', '神奈川県'];
echo  $tokyoArea[3] . 'と' . $tokyoArea[4] . 'は関東地方の都道府県です。';


// Q7 連想配列-1
$tokyoArea = ['東京都' => '新宿区', '埼玉県' => 'さいたま市', '群馬県' => '前橋市', '栃木県' => '宇都宮市', '千葉県' => '千葉市', '茨城県' => '水戸市', '神奈川県' => '横浜市'];

foreach ($tokyoArea as $prefecture => $city) {
    echo $city . "\n";
}


// Q8 連想配列-2
$tokyoArea = ['東京都' => '新宿区', '埼玉県' => 'さいたま市', '群馬県' => '前橋市', '栃木県' => '宇都宮市', '千葉県' => '千葉市', '茨城県' => '水戸市', '神奈川県' => '横浜市'];

foreach ($tokyoArea as $prefecture => $city) {
    if($prefecture === '埼玉県'){
        echo $prefecture . 'の県庁所在地は、' . $city . 'です。';
    }
}


// Q9 連想配列-3
$tokyoArea = ['東京都' => '新宿区', '埼玉県' => 'さいたま市', '群馬県' => '前橋市', '栃木県' => '宇都宮市', '千葉県' => '千葉市', '茨城県' => '水戸市', '神奈川県' => '横浜市', '新潟県' => '新潟市', '愛知県' => '名古屋市'];

foreach ($tokyoArea as $prefecture => $city) {
    if($prefecture === '東京都' || $prefecture === '埼玉県' || $prefecture === '群馬県' || $prefecture === '栃木県' || $prefecture === '千葉県' || $prefecture === '茨城県' || $prefecture === '神奈川県'){
        echo $prefecture . 'の県庁所在地は、' . $city . 'です。' . "\n";
    }else{
        echo $prefecture . 'は関東地方ではありません。' . "\n";
    }
}


// Q10 関数-1
function hello($name)
  {
    return $name . 'さん、こんにちは。' . "\n";
  }

echo hello('金谷');
echo hello('安藤');


// Q11 関数-2
function calcTaxInPrice($price) {
  $taxInPrice = $price * 1.1;
  return $price . 'の商品の税込価格は' . $taxInPrice . '円です。';
}

echo calcTaxInPrice(1000);


// Q12 関数とif文
function distinguishNum($number){
  if($number % 2 === 0) {
    return $number . 'は偶数です。' . "\n";
  }
  else{
    return $number . 'は奇数です。' . "\n";
  }
}

echo distinguishNum(11);
echo distinguishNum(24);


// Q13 関数とswitch文
function evaluateGrade($grade){
  switch ($grade) {
     case 'A':
     case 'B':  // caseは複数まとめて書くことも可能
         return '合格です。' . "\n";
         break;
 
     case 'C':
         return '合格ですが追加課題があります。' . "\n";
         break;
         
     case 'D':
         return '不合格です。' . "\n";
         break;
 
     default:
         return '判定不明です。講師に問い合わせてください。' . "\n";
         // 条件が全てfalseだった時の処理
         break;
     }
 }
 
 echo evaluateGrade('A');
 echo evaluateGrade('E');

?>