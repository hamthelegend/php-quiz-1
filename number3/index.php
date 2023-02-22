<?php
    
    require_once "Salary.php";
    $employee = null;
    
    if (
            isset($_POST['submit']) &&
            isset($_POST['type']) &&
            isset($_POST['name']) &&
            isset($_POST['salary']) &&
            isset($_POST['months-of-stay'])
    ){
        $type = $_POST['type'];
        $name = $_POST['name'];
        $salary = $_POST['salary'];
        $monthsOfStay = $_POST['months-of-stay'];

        $employee = $type == "employee" ?
                new Employee(
                        $name,
                        $salary,
                        $monthsOfStay,
                ) :
                new Manager(
                        $name,
                        $salary,
                        $monthsOfStay,
                );
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
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="type" id="input-employee" value="employee"
                               checked>
                        <label class="form-check-label" for="input-employee">Employee</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="type" id="input-manager" value="manager">
                        <label class="form-check-label" for="input-manager">Manager</label>
                    </div>
                </div>
                <div class="mb-3">
                    <label
                            for="input-name"
                            class="form-label"
                            id="input-length-label">Name</label>
                    <input
                            id="input-name"
                            class="form-control"
                            type="text"
                            name="name"
                            required>
                </div>
                <div class="mb-3">
                    <label
                            for="input-salary"
                            class="form-label"
                            id="input-length-label">Salary</label>
                    <input
                            id="input-salary"
                            class="form-control"
                            type="text"
                            name="salary"
                            required>
                </div>
                <div class="mb-3">
                    <label
                            for="input-months-of-stay"
                            class="form-label"
                            id="input-length-label">Months of stay</label>
                    <input
                            id="input-months-of-stay"
                            class="form-control"
                            type="text"
                            name="months-of-stay"
                            required>
                </div>
                <div style="text-align: center; margin-top: 10px">
                    <input name="submit" value="Submit" type="submit" class="btn btn-primary">
                </div>
            </form>
            <div style="text-align: center; margin-top: 10px">
                <?= $employee != null ? "Name: " . $employee->getName() .
                            "<br>Type: ". ($employee instanceof Manager ? "Manager" : "Employee").
                            "<br>Salary: ₱" . $employee->getSalary() . " per month" .
                            "<br>Months of stay: " . $employee->getMonthsOfStay() .
                            "<br>Thirteenth month pay: ₱" . $employee->getThirteenthMonthPay() .
                            "<br>Hourly rate: ₱" . $employee->getHourlyRate() : "" ?>
            </div>
        </div>
    
    </body>

</html>