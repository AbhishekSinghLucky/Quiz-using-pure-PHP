
<?php

 if(isset($_POST['submit']))
 {
     
$answer1=$_POST['q1a'];
$answer2=$_POST['q2a'];
$answer3=$_POST['q3a'];
$answer4=$_POST['q4a'];
$answer5=$_POST['q5a'];     

$count=0;

if($answer1=='B')
{
$count++;    
}
if($answer2=='A')
{
$count++;    
}
if($answer3=='C')
{
$count++;    
}
if($answer4=='C')
{
$count++;    
}
if($answer5=='D')
{
$count++;
}
}
if($count!=0){
    $incorrect= 5-$count;
    echo "Correct Answers = ".$count.""; echo "<br>";
    echo "Incorrect Answers = ".$incorrect."";
}
else{
    echo "O Answers Correct";
}

?>