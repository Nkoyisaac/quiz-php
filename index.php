<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Php-Quiz</title>
</head>
<body>
<form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">

<?php
$quiz[] = [
    'question' => 'what is the largest living animal',
    'answer' => [
        'elephant',
        'blue_whale',
        'giraffe',
        'buffalo'
    ]

];
$quiz[] = [
    'question' => 'Against which illness do you use insuline',
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
    'question' => 'which is the longest river in the world' ,
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
    'question' => 'What is the national animal of China?'
    'answer' => [
        'leopard',
        'ELephant',
        'Giant Panda',
        'Crocodile'
    ]
];
$quiz[] = [
    'question' => 'What is the noisiest city in the world?'
    'answer' => [
        'siberia',
        'johannesburg',
        'Hong kong',
        'pretoria'
    ]
];
$quiz[] = [
    'question' => 'How many time zones are there in the world?'
    'answer' => [
        '12',
        '48',
        '32',
        '24'
    ]
];
$quiz[] = [
    'question' => 'Which is the largest desert on earth?'
    'answer' => [
        'kalahari',
        'Sonoran',
        'Sahara',
        'Arabian'
    ]
];
$quiz[] = [
    'question' => 'What is the second largest country in Europe after Russia?'
    'answer' => [
        'France',
        'Spain',
        'italy',
        'UK'
    ]
];
$quiz[] = [
    'question' => 'What is the largest city in Canada?'
    'answer' => [
        'Montreal',
        'Quebec',
        'Toronto',
        'Ottawa'
    ]
];
$quiz[] = [
    'question' => 'In which country were the first Olympic Games held?'
    'answer' => [
        'Greece',
        'Italy',
        'USA',
        'Russia'
    ]
];
$quiz[] = [
    'question' => 'How long is an Olympic swimming pool?'
    'answer' => [
        '60 meters',
        '30 meters',
        '50 meters',
        '40 meters'
    ]
];
$quiz[] = [
    'question' => 'How many stars has the American flag got?'
    'answer' => [
        '30',
        '40',
        '50',
        '60'
    ]
];
$quiz[] = [
    'question' => 'How long is the Great Wall of China?'
    'answer' => [
        '6000 miles',
        '5000 miles',
        '4000 miles',
        '3000 miles'
    ]
]

?>
</form>

</body>
</html>