<?php

    require_once "Date.php";

    $date = null;

    if (isset($_POST['submit'])) {
        if (isset($_POST['string'])) {
            $string = $_POST['string'];
            $date = Date::formatDate($string);
        }
    }

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Title</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
              integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65"
              crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
                integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
                crossorigin="anonymous"></script>
    </head>
    <body>
        
        <div class="d-flex align-items-center justify-content-center vh-100" style="flex-direction: column;">
            <form method="POST">
                <div class="mb-3">
                    <label
                            for="input-string"
                            class="form-label"
                            id="input-length-label">Date string</label>
                    <input
                            id="input-string"
                            class="form-control"
                            type="text"
                            name="string"
                            required>
                </div>
                <div style="text-align: center; margin-top: 10px">
                    <input name="submit" value="Submit" type="submit" class="btn btn-primary">
                </div>
            </form>
            <div style="text-align: center; margin-top: 10px">
                <?php
                    if ($date != null) {
                        if ($date == "error") {
                            echo "Ambiguous format.";
                        } else {
                            echo "Date in mm/dd/yyyy:<br>".$date;
                        }
                    }
                ?>
            </div>
        </div>
    
    </body>

</html>