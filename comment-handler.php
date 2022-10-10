<!DOCTYPE HTML>

<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Comments Form - Response</title>
    </head>

    <body>
        <!--All PHP scripts need to go inside these tags-->
        <?php
            
            $comment = $_POST['comment'];
            if (!empty($_POST['comment'])) {
                $comment = $_POST['comment'];
                echo 'Thank you for your feedback<br>';
                echo "<p>Feedback: $comment </p>";
            }
            else {
                $comment = NULL;
                echo 'You must enter some feedback<br>';
            }

        ?>
    </body>

</html>