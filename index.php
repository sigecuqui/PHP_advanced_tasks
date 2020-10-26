<?php
$police_report = [
    [
        'subject' => 'Minde',
        'reason' => 'Public urination',
        'amount' => rand(-150, 1000)
    ],
    [
        'subject' => 'Liudas',
        'reason' => 'Rabbit hearts thief',
        'amount' => rand(-150, 1000)
    ],
    [
        'subject' => 'Aistė',
        'reason' => 'Drinking in public',
        'amount' => rand(-150, 1000)
    ]
];

foreach ($police_report as $key => $report) {
    $police_report[$key]['warning_only'] = rand(0, 1);
    if ($report['amount'] < 0) {
        $police_report[$key]['class'] = 'expense';
    } else {
        $police_report[$key]['class'] = 'income';
    }
}

var_dump($police_report);




