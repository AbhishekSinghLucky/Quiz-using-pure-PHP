<?php
session_start();
?>
<html>
    <head>
  <title>Quiz</title>
    </head>
    <body>
    <form action="second.php" method="POST">
        
        <ol>
        <li>
            <h4>Question 1</h4>
            <input type="radio" name="q1a" value="A" id="q1a1" >Option 1<br>
            <input type="radio" name="q1a" value="B" id="q1a2">Option 2<br>
            <input type="radio" name="q1a" value="C" id="q1a3">Option 3<br>
            <input type="radio" name="q1a" value="D" id="q1a4">Option 4<br>
            </li>
            <li>
            <h4>Question 2</h4>
            <input type="radio" name="q2a" value="A" id="q2a1">Option 1<br>
            <input type="radio" name="q2a" value="B" id="q2a1">Option 2<br>
            <input type="radio" name="q2a" value="C" id="q2a1">Option 3<br>
            <input type="radio" name="q2a" value="D" id="q2a1">Option 4<br>
            </li> 
             <li>
            <h4>Question 3</h4>
            <input type="radio" name="q3a" value="A" id="q3a1">Option 1<br>
            <input type="radio" name="q3a" value="B" id="q3a2">Option 2<br>
            <input type="radio" name="q3a" value="C" id="q3a3">Option 3<br>
            <input type="radio" name="q3a" value="D" id="q3a4">Option 4<br>
            </li>
             <li>
            <h4>Question 4</h4>
            <input type="radio" name="q4a" value="A" id="q4a1">Option 1<br>
            <input type="radio" name="q4a" value="B" id="q4a2">Option 2<br>
            <input type="radio" name="q4a" value="C" id="q4a3">Option 3<br>
            <input type="radio" name="q4a" value="D" id="q4a4">Option 4<br>
            </li>
             <li>
            <h4>Question 5</h4>
            <input type="radio" name="q5a" value="A" id="q5a1">Option 1<br>
            <input type="radio" name="q5a" value="B" id="q5a2">Option 2<br>
            <input type="radio" name="q5a" value="C" id="q5a3">Option 3<br>
            <input type="radio" name="q5a" value="D" id="q5a4">Option 4<br>
            </li>
        </ol>
        <input type="submit" name="submit">
        
        </form>
        
    </body>
        
    
</html>