<!DOCTYPE html>
<html>
<head>
    <title>
        Assignment_3
    </title>
</head>
<body style="background-color:rgb(161, 176, 178);">
    <?php 
  Echo "Hi{". $_POST['sname'] ."},here are your quiz results.</br>";
  $score = 0;

  echo"</br>";

  if($_POST['q1']=="c"){
      echo"Question 1:CORRECT Asnwere! The Developer's Group Web Site is www.php.net.</br>";
      $score += 1;
    }
    elseif($_POST['q1']==""){
        echo"Question 1: Please a option please.</br>";
    }
  else{
    echo"Question 1:WRONG Asnwere! The Developer's Group Web Site is www.php.net.</br>";
    }

    echo"</br>";
    

    if($_POST['q2']=="c"){
    echo"Question 2:CORRECT Asnwere! php document use the .php eztension</br>";
    $score += 1;
    }
    elseif($_POST['q2']==""){
        echo"Question 2: Please a option please.</br>";
    }
    else{
    echo"Question 2:WRONG Asnwere! php document use the .php eztension</br>";
    }

    echo"</br>";

    if($_POST['q3']=="c"){
        echo"Question 3:CORRECT Asnwere! PHP stands for PHP:Hypertext Preprocessor</br>";
        $score += 1;
        } elseif($_POST['q3']==""){
            echo"Question 3: Please a option please.</br>";
        }
        else{
        echo"Question 3:WRONG Asnwere! PHP stands for PHP:Hypertext Preprocessor</br>";
        }

        echo"</br>";

    if($_POST['q4']=="c"){
        echo"Question 4:CORRECT Asnwere! PHP statement should be closed with a semicolon(;)</br>";
        $score += 1;
        }
        elseif($_POST['q4']==""){
            echo"Question 4: Please a option please.</br>";
        }
        else{
        echo"Question 4:WRONG Asnwere! PHP statement should be closed with a semicolon(;)</br>";
        }

        echo"</br>";

    if($_POST['q5']=="c"){
        echo"Question 5:CORRECT Asnwere! The default HTTP method is GET</br>";
        $score += 1;
        }
        elseif($_POST['q5']==""){
            echo"Question 5: Please a option please.</br>";
        }
        else{
        echo"Question 5:WRONG Asnwere! The default HTTP method is GET</br>";
        }

        echo"</br>";

        if($score == 0){
            Echo  $_POST['sname'] .",your score is 0 out of 5</br>";
        }

        if($score == 1){
            Echo  $_POST['sname'] .",your score is 1 out of 5</br>";
        }

        if($score == 2){
            Echo  $_POST['sname'] .",your score is 2 out of 5</br>";
        }

        if($score == 3){
            Echo  $_POST['sname'] .",your score is 3 out of 5</br>";
        }

        if($score == 4){
            Echo  $_POST['sname'] .",your score is 4 out of 5</br>";
        }

        if($score == 5){
            Echo  $_POST['sname'] .",your score is 5 out of 5</br>";
        }

    ?>
</body>
</html> 