<?php include 'database.php'; ?>

<?php

//questions
$number =  (int)$_GET['n'];
$query =  "SELECT * FROM questions WHERE question_number = $number ";
$result = $conn->query($query)  or die($conn->error);
$question = $result->fetch_assoc();

//choices 

$query =  "SELECT * FROM choices WHERE question_number = $number ";
$choices = $conn->query($query)  or die($conn->error);


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.1.4/css/uikit.min.css" />
    <link rel="stylesheet" href="css/style.css" type="text/css" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Quizzer</title>
</head>

<body>
    <div uk-sticky="sel-target: .uk-navbar-container; cls-active: uk-navbar-sticky; bottom: #transparent-sticky-navbar">
        <nav class="uk-navbar-container" uk-navbar style="position: relative; z-index: 980;">
            <div class="container">
                <div class="uk-navbar-left">
                    <ul class="uk-navbar-nav">
                        <li class="uk-active"><a href="#"><i><b>
                                        <h4>Quizzer App</h4>
                                    </b></a></i></li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
    <br><br>
    <div class="uk-child-width-1-2@s uk-grid-match" uk-grid>
        <div class="container">
            <div class="uk-card uk-card-secondary uk-card-hover uk-card-body">
                <div style="text-align: center;">
                    <h5>Question 1 Of 5</h5>
                </div>
                <hr>
                <form method="post" action="process.php">
                    <fieldset class="uk-fieldset">

                        <legend class="uk-legend">
                            <?php echo $question['text'] ?>
                        </legend>

                        <div class="uk-margin uk-grid-small uk-child-width-auto uk-grid">
                            <ul class="uk-list">
                            <input name="mycheckbox" type="hidden" value="0" />
                                <?php while($row = $choices->fetch_assoc()): ?>
                                <li>
                                    <label><input class="uk-radio" value="<?php echo $row['id']; ?>" type="radio" name="choice" > <?php echo $row['text']; ?> </label><br>
                                </li>
                                <?php endwhile ; ?>
                                <br><br>
                            </ul>

                        </div>
                        <div class="uk-margin">
                            <input class="uk-input" type="submit" value="Submit">
                        </div>

                    </fieldset>
                </form>


            </div>
        </div>
    </div>


</body>


<script src="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.1.4/js/uikit.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.1.4/js/uikit-icons.min.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</html>