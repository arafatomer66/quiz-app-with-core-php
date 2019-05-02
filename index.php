<?php include 'database.php'; ?>

<?php
$query =  "SELECT * FROM questions ";
$results = $conn->query($query)  or die($conn->error);
$total = $results->num_rows;
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
                        <li class="uk-active">
                            <a href="#">
                                <i>
                                    <b>
                                        <h4>Quizzer App</h4>
                                    </b>
                                </i>
                            </a>   
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
    <br><br>
    <div class="uk-child-width-1-2@s uk-grid-match" uk-grid>
        <div class="container">
            <div class="uk-card uk-card-secondary uk-card-hover uk-card-body">
                <h2 class="uk-card-title">Test Your PHP Knowledge</h2>
                <p>Perform The <strong>Quiz</strong> And Know How Much You Know PHP</p>
                <ul class="uk-list uk-list-divider">
                    <li><strong>Number Of Questions :</strong> <?php echo $total; ?> </li>
                    <li><strong>Type :</strong>Multiple Choice</li>
                    <li><strong>Estimated Time</strong> <?php echo $total * .5; ?> Minutes</li>
                </ul>
                <a class="uk-button uk-button-default" href="question.php?n=1">Start Quiz</a>
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