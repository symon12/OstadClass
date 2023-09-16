<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document<<meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <title>Module 1 - Tempareture</title>
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
            <style>
                .input {
                    font-size: 1rem;
                    padding: 10px;
                    border-radius: 10px;
                }

                .continer {
                    text-align: center;
                    border: 1px solid #ddd;
                    margin: auto;
                    background-color: rgb(200, 200, 200);
                    width: 700px;
                    height: 300px;
                    border-radius: 7px 10px;
                    box-shadow: 10px darkblue;

                }

                .btn {
                    font-size: 22px;
                    height: 40px;
                    width: 135px;
                    border-radius: 7px;

                }

                .btn:hover {
                    color: #dc3545;
                    background-color: #fff;

                }

                body {
                    font-size: 20px;

                }
            </style>
</head>

<body>
<nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Ostad Assignment - Modules</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" href="convertedTemperature.php" aria-current="page">Convert Temp</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="evenOrOdd.php" aria-current="page">Even / Odd Number</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="grade.php" aria-current="page">Convert Temp</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="largeNumber.php" aria-current="page">large number</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="personal_info.php" aria-current="page">parsonal inpormation</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="simpleCalculator.php" aria-current="page">Calculator</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="weatherReport.php" aria-current="page">weather Report</a>
                    </li>
                
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Dropdown
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled" aria-disabled="true">Disabled</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="continer">
        <div class="row">
            <div class="col-md-12">
                <h1>Write your temperature</h1>
                    <form method="post" action="">
                        <div class="mb-3">
                            <input class="form-control" type="number" value="<?= isset($_POST["enter"])? $_POST["enter"]:"" ?>" name="enter" placeholder="ENTER YOUR Value" required>
                        </div>

                        <div class="mb-3">
                            <select class="form-control" name="search">
                                <option <?= (isset($_POST['search']) && $_POST['search'] == "cel")? "selected":"" ?> value="cel">Celsius</option>
                                <option <?= (isset($_POST['search']) && $_POST['search'] == "fer")? "selected":"" ?> value="fer">Fahrenheit</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <button class="btn-primary" type="submit">Submit</button>
                        </div>
                        
                        
                        
                    </form>

                <div class="col-md-12">
                    <?php
                    if ($_SERVER["REQUEST_METHOD"] == "POST") {
                        $enter = $_POST["enter"];
                        $search = $_POST["search"];

                        switch ($search) {
                            case "cel";
                                $result = (($enter * 9 / 5) + 32);
                                echo "Result : " . $result;
                                break;
                            case "fer";
                                $result = (($enter - 32) * 5) / 9;
                                echo "Result : " . $result;
                                break;
                            default;
                                echo "Enter you correct value";
                                break;
                        }
                    }
                    
                    ?>
                </div>
            </div>
        </div>
        
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>

</html>