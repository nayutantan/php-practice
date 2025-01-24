<?php
// Q1 変数と文字列
$name='安藤';
var_dump($name);

$newMessage = '私は「 ' . $name . ' 」です。';
var_dump($newMessage);


// Q2 四則演算
$num=5*4;
var_dump($num);

$num /= 2;
var_dump($num);


// Q3 日付操作
date_default_timezone_set("Asia/Tokyo");
$date = new DateTime('now');
echo $date->format('現在時刻は、Y年m月d日 H時i分s秒です。');


// Q4 条件分岐-1 if文
$device = 'windows' ;
        
if($device === 'windows') {
    echo '使用OSは、windowsです。';
//windowsだったら使用OSは、windowsです。
}else if($device === 'mac') {
    echo '使用OSは、macです。';
//mac」だったら、「使用OSは、macです。」
}else {
    echo'どちらでもありません。';
}
//上記2つ以外だったら、「どちらでもありません。


// Q5 条件分岐-2 三項演算子
$age = 18;
$message = ($age >= 18) ? '成人です。' : '未成年です。';

echo $message;


// Q6 配列
$tokyoarea = ['東京都', '埼玉県', '群馬県','栃木県','千葉県','茨城県','神奈川県'];
echo ''.$tokyoarea[3].'と'.$tokyoarea[4].'は関東地方の都道府県です。';


// Q7 連想配列-1
$tokyoarea = ['東京都' => '新宿区', '埼玉県' => 'さいたま市', '群馬県' => '前橋市','栃木県' => '宇都宮市','千葉県' => '千葉市','茨城県' => '水戸市','神奈川県' => '横浜市'];

foreach ($tokyoarea as $x => $y) {
    echo $y."\n";
}


// Q8 連想配列-2
$tokyoarea = ['東京都' => '新宿区', '埼玉県' => 'さいたま市', '群馬県' => '前橋市','栃木県' => '宇都宮市','千葉県' => '千葉市','茨城県' => '水戸市','神奈川県' => '横浜市'];

foreach ($tokyoarea as $x => $y) {
    if($x === '埼玉県'){
        echo $x.'の県庁所在地は、'.$y.'です。';
    }
}


// Q9 連想配列-3
$tokyoarea = ['東京都' => '新宿区', '埼玉県' => 'さいたま市', '群馬県' => '前橋市','栃木県' => '宇都宮市','千葉県' => '千葉市','茨城県' => '水戸市','神奈川県' => '横浜市','新潟県' => '新潟市','愛知県' => '名古屋市'];

foreach ($tokyoarea as $x => $y) {
    if($x ==='東京都'|| $x==='埼玉県'||$x==='群馬県'||$x==='栃木県'||$x==='千葉県'||$x==='茨城県'||$x==='神奈川県'){
        echo $x.'の県庁所在地は、'.$y.'です。'."\n";
    }else{
        echo $x.'は関東地方ではありません。'."\n";
    }
}


// Q10 関数-1
function hello($name)
  {
    echo $name.'さん、こんにちは。'."\n";
  }

hello('金谷');
hello('安藤');


// Q11 関数-2
function calcTaxInPrice($price) {
  $taxInPrice = $price * 1.1;
  echo $price.'の商品の税込価格は'.$taxInPrice. '円です。';
}

calcTaxInPrice(1000);


// Q12 関数とif文
function distinguishNum($number){
  if($number % 2 === 0) {
    echo $number.'は偶数です。'."\n";
  }
  else{
    echo $number.'は奇数です。'."\n";
  }
}

distinguishNum(11);
distinguishNum(24);


// Q13 関数とswitch文
function evaluateGrade($grade){
  switch ($grade) {
     case 'A':
     case 'B':  // caseは複数まとめて書くことも可能
         echo '合格です。'."\n";
         break;
 
     case 'C':
         echo '合格ですが追加課題があります。'."\n";
         break;
         
     case 'D':
         echo '不合格です。'."\n";
         break;
 
     default:
         echo '判定不明です。講師に問い合わせてください。'."\n";
         // 条件が全てfalseだった時の処理
         break;
     }
 }
 
 evaluateGrade('A');
 evaluateGrade('E');

?>