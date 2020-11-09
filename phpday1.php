<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php

 for ($i=0;$i<50; $i++){
echo "Johannes <br>";
 }

 $i=0;
 while ($i<=50)
 {
     $i++;
     echo "Johannes while <br>";
 }

 $b = 0;
 do{
     $b++;
     echo ("Johannes do while $b<br>");
 } while ($b<=49);


 $numbers = array( 1 , 2, 3, 4, 5, 6, 7, 8, 9, 10);
 foreach ($numbers as $value)
 {
     echo "Value is $value <br / >";
 }


//  $powerlevel = array(
//     "Mickey Mouse" => "under 2000",
//     "Super Mario"  => "over 1000",
//     "Son Goku" =>  "over 9000",
//     "Freakazoid" => "LUL 100"
//     );
//     echo $powerlevel["Mickey Mouse"];
//     foreach ($powerlevel as $whatever => $value)
// {
//     echo $whatever ; 
// }


// $fahr=12; ????
// global $fahr; ????



function temperatur()
{
$fahr=300;
$celsius= ($fahr-32)*5/9;
if ($celsius<=5)
echo "<img src='https://c.tadst.com/gfx/1200x630/winter-lake.jpg?1'>";
 elseif ($celsius<=10)
echo "Cold";
elseif ($celsius <=15)
echo "Pleasent";
elseif ($celsius<=20)
echo "Warm";
elseif ($celsius>20)
echo "Hot";
}


temperatur();
?>
    
</body>
</html>