<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <!-- google font link -->
    <link href="https://fonts.googleapis.com/css?family=Bitter&display=swap" rel="stylesheet">
    <title>Php-Quiz</title>
</head>
<body>
<h1>Welcome to my quiz</h1>
<hr class="line">
<form role="form" method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">

<?php
error_reporting(E_ALL);
$quiz[] = [
    'question' => 'what is the largest living animal?',
    'answer' => [
        'elephant',
        'blue_whale',
        'giraffe',
        'buffalo'
    ]

];
$quiz[] = [
    'question' => 'Against which illness do you use insulin?',
    'answer' => [
        'high_blood_pressure',
        'adiposity',
        'diabetes',
        'cardiac_infection'
    ]

];
$quiz[] = [
    'question' => 'what is the biggest city in USA according to the mass of metropolitan area?',
    'answer' => [
        'Los Angeles',
        'New york',
        'chicago',
        'san diego'
    ]

];

$quiz[] = [
    'question' => 'which word does the "e" in e-mail stand for?',
    'answer' => [
        'explain',
        'electronic',
        'execute',
        'exact'
        ]
    ];

$quiz[] = [
    'question' => 'how much % of the world is covered with water?',
    'answer' => [
        '92%',
        '63%',
        '37%',
        '71%'
    ]

];
$quiz[] = [
    'question' => 'which is the longest river in the world?' ,
    'answer' => [
        'nil',
        'congo',
        'mississipi',
        'amazon'
    ]
    
];
$quiz[] = [
    'question' => 'how many teeth does an adult human usualy have?' ,
    'answer' => [
        '12-16',
        '28-32',
        '16-24',
        '32-36'
    ]
    
];
$quiz[] = [
    'question' => 'who developed the theory of evolution?' ,
    'answer' => [
        'Isaac Newton',
        'Chareles Darwin',
        'Pythagore',
        'Davinci'
    ]
    
];
$quiz[] = [
    'question' => 'which one of this animal is a fish?' ,
    'answer' => [
        'Shark',
        'Whale',
        'Dolphin',
        'Seal'
    ]
    
];
$quiz[] = [
    'question' => 'which one of these numbers is without rest dividable through the numbers : 1,2,3,4,5,6?' ,
    'answer' => [
        '42',
        '40',
        '60',
        '128'
    ]
];
$quiz[] = [
    'question' => 'What is the national animal of China?',
    'answer' => [
        'leopard',
        'ELephant',
        'Giant Panda',
        'Crocodile'
    ]
];
$quiz[] = [
    'question' => 'What is the noisiest city in the world?',
    'answer' => [
        'siberia',
        'johannesburg',
        'Hong kong',
        'pretoria'
    ]
];
$quiz[] = [
    'question' => 'How many time zones are there in the world?',
    'answer' => [
        '12',
        '48',
        '32',
        '24'
    ]
];
$quiz[] = [
    'question' => 'Which is the largest desert on earth?',
    'answer' => [
        'kalahari',
        'Sonoran',
        'Sahara',
        'Arabian'
    ]
];
$quiz[] = [
    'question' => 'What is the second largest country in Europe after Russia?',
    'answer' => [
        'France',
        'Spain',
        'italy',
        'UK'
    ]
];
$quiz[] = [
    'question' => 'What is the largest city in Canada?',
    'answer' => [
        'Montreal',
        'Quebec',
        'Toronto',
        'Ottawa'
    ]
];
$quiz[] = [
    'question' => 'In which country were the first Olympic Games held?',
    'answer' => [
        'Greece',
        'Italy',
        'USA',
        'Russia'
    ]
];
$quiz[] = [
    'question' => 'How long is an Olympic swimming pool?',
    'answer' => [
        '60 meters',
        '30 meters',
        '50 meters',
        '40 meters'
    ]
];
$quiz[] = [
    'question' => 'How many stars has the American flag got?',
    'answer' => [
        '30',
        '40',
        '50',
        '60'
    ]
];
$quiz[] = [
    'question' => 'How long is the Great Wall of China?',
    'answer' => [
        '6000 miles',
        '5000 miles',
        '4000 miles',
        '3000 miles'
    ]
];
$answerName = array('question1','question2','question3','question4','question5','question6','question7','question8','question9','question10','question11','question12','question13','question14','question15','question16','question17','question18','question19','question20');
$number = array('1','2','3','4','5','6','7','8','9','10','11','12','13','14','15','16','17','18','19','20');

for($i = 0; $i < count($quiz); ++$i){
    $outputquestion = "<h3>".$number[$i].')'.$quiz[$i]['question']."</h3>";
    echo $outputquestion;

    foreach($quiz[$i]['answer'] as $value ){
        $outputanswer =  "<input id=\"input\" required type=\"radio\" name=".$answerName[$i]." 
        value=".$value.">"."<span>$value</span>";
        echo $outputanswer;
        }


}
// isset check if the superglobal variable have been populated
if(isset($_POST['submit'])){
    $score = 0;
// the rest of the if statements increment the variable $score if the condition is match    
if($_POST['question1'] == 'blue_whale' ){
    $score++;
    
    }
    
    if($_POST['question2'] == 'diabetes' ){
    $score++;
    
    }
    
    if($_POST['question3'] == 'New_york' ){
     $score++;   
    
    }
    if($_POST['question4'] == 'electronic' ){
        $score++;   
       
    }
    if($_POST['question5'] == '71%'){ 
        $score++;   
       
    }
    if($_POST['question6'] == 'amazon'){ 
        $score++;   
       
    }
    if($_POST['question7'] == '28-32'){ 
        $score++;   
       
    }
    if($_POST['question8'] == 'Chareles Darwin'){ 
        $score++;   
       
    }
    if($_POST['question9'] == 'Shark'){ 
        $score++;   
       
    }
    if($_POST['question10'] == '60'){ 
     $score++;

    }
    if($_POST['question11'] == 'Giant Panda'){
        $score++;

    }
    if($_POST['question12'] == 'Hong kong'){
        $score++;

    }
    if($_POST['question13'] == '24'){
        $score++;

    }
    if($_POST['question14'] == 'Sahara' ){
        $score++;

    }
    if($_POST['question15'] == 'France'){
        $score++;

    }
    if($_POST['question16'] == 'Toronto'){
        $score++;

    }
    if($_POST['question17'] == 'Greece'){
        $score++;

    }
    if($_POST['question18'] == '50 meters'){
        $socre++;

    }
    if($_POST['question19'] == '50'){
        $score++;

    }
    if($_POST['question20'] == '5000 miles'){
        $score++;
        
    }
    echo "<br>"."<p>"."Your score is ".$score."/20"."</p>";
}

?>
<br>
<input id="input" type="submit" name="submit">
</form>

</body>
</html>