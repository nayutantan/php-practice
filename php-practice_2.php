<?php
// Q1 tic-tac問題
echo '1から100までのカウントを開始します'."\n";
echo "\n";

for ($i = 1; $i <= 100; $i ++){
    if($i % 4 == 0 && $i % 5 == 0){
    echo ('tic-tac'."\n");
}
elseif($i % 4 == 0){
    echo ('tic'."\n");
}
elseif($i % 5 == 0){
    echo ('tac'."\n");
}
else{
    echo($i."\n");
}
}


// Q2 多次元連想配列
$personalInfos = [
    [
        'name' => 'Aさん',
        'mail' => 'aaa@mail.com',
        'tel'  => '09011112222'
    ],
    [
        'name' => 'Bさん',
        'mail' => 'bbb@mail.com',
        'tel'  => '08033334444'
    ],
    [
        'name' => 'Cさん',
        'mail' => 'ccc@mail.com',
        'tel'  => '09055556666'
    ],
];

//問題１
echo $personalInfos[1]['name'].'の電話番号は'.$personalInfos[1]['tel'].'です。';

//問題２
foreach ($personalInfos as $order => $person) {
    echo ($order+1).'番目の'.$person['name'].'メールアドレスは'.$person['mail'].'で、電話番号は'.$person['tel'].'です。'."\n";
}

//問題３
$ageList = [25, 30, 18];

foreach ($ageList as $order => $age){
    $personalInfos[$order]['age'] = $age;
}

var_dump($personalInfos);


// Q3 オブジェクト-1
class Student
{
    public $studentId;
    public $studentName;
    public $gender;

    public function __construct($id, $name,$gender)
    {
        $this->studentId = $id;
        $this->studentName = $name;
        $this->gender
    }

    public function attend()
    {
        echo '授業に出席しました。';
    }
}

$user = new Student(120, "山田");

    echo '学籍番号'.$user->studentId.'番の生徒は'.$user->studentName.'です。';


// Q4 オブジェクト-2
class Student
{
    public $studentId;
    public $studentName;

    public function __construct($id, $name)
    {
        $this->studentId = $id;
        $this->studentName = $name;
    }

    public function attend($lesson)
    {
        echo $this->studentName.'は'.$lesson.'の授業に参加しました。学籍番号：'.$this->studentId;
    }
}

$yamada = new Student(120, '山田');
$yamada->attend('PHP');


// Q5 定義済みクラス
//問題1
$date = new DateTime('2021-3-2');
$date->modify('-1 month');

echo $date->format('Y-m-d');

//問題2
$thatday = new DateTime('1992-4-25');
$today = new DateTime('2021-03-02');
$diff = $thatday->diff($today);
echo 'あの日から'.$diff->days . '日経過しました。';
?>