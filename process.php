<?php include 'database.php' ; ?>


<?php
    session_start();
?>


<?php 

  if(!isset($_SESSION['score'])){
    $_SESSION['score'] = 0 ; 
  }


  if($_POST){
      $number =  $_POST['number'];
      $selected_choice = $_POST['choice'] ;
      $next = $number + 1 ;


      $sql =  "SELECT * FROM questions";
      $result = $conn->query($sql)  or die($conn->error);
      $total = $result->num_rows;

      $query = "SELECT * FROM  choices WHERE question_number = $number AND is_correct = 1" ;
      $result = $conn->query($query)  or die($conn->error);
      $row = $result->fetch_assoc();
      $correct_choice = $row['id'];

      if($selected_choice == $correct_choice){
          $_SESSION['score'] = $_SESSION['score'] + 1 ;
      }




      if($number == $total ){
           header('Location: final.php') ;
           exit();
      }else {
        header('Location: question.php?n='.$next) ;

      }
  }

?>