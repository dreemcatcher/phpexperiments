<?php
error_reporting(-1);
mb_internal_encoding('utf-8');
function numberCheck($number){

    $regexp='/([А|В|Е|К|М|Н|О|Р|С|Т|У|Х]|[A-Z]){1}[0-9]{3}({А|В|Е|К|М|Н|О|Р|С|Т|У|Х}|[A-Z]){2}/ui';
    $match = [];
    if (preg_match($regexp, $number, $match)) {
        echo "+ Номер верный '{$match[0]}'\n";
    } else {
        echo "- Номер {$number} неверный \n";
    }
}
$autonombers=['а876ке','в876ке','к876ке','о876ке','х876ке','м876ке','р876ке','а876ке','ф876ке','ы876ке',
    'в876ке','е876нн','а456не','м567ее','в522ии','ы678нн','с879шш','ч567тт','в567лл','z111ad'
];

$arCount=count($autonombers);
for ($i=0;$i<$arCount;$i++){
    echo " ".numberCheck($autonombers[$i])."<br>";
}

