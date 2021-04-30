<?php

/* 2) mysqli_connect-ის გამოყენებით დაუკავშირდით მონაცემთა ბაზას,
თუ კავშირი შედგა გამოტანეთ შეტყობეინება "მონაცემთა ბაზასთან კავშირი წარმატებით დამყარდა",
წინააღმდეგ შემთხვევაში შეწყვიტეთ სკრიპტის შესრულება
და გამოიტანეთ შეტყობინება "შეცდომა მონაცემთა ბაზასთან კავშირისას"*/

$serveri = 'localhost';
$momxmarebeli = 'root';
$paroli = '';
$baza = 'test';


// დაკავშირება
$dakavshireba = mysqli_connect($serveri, $momxmarebeli, $paroli, $baza);


// კავშირის შემოწმება
if (!$dakavshireba)
{
    die("<p style='color:red; text-align:center; font-weight: bold;'>".'შეცდომა მონაცემთა ბაზასთან კავშირისას: '.mysqli_connect_error()."</p>");
}

echo ("<p style='color:blue; text-align:center; font-weight: bold;'>".'მონაცემთა ბაზასთან კავშირი წარმატებით დამყარდა!'."</p>");

?>