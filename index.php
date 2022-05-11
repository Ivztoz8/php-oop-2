<?php



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="./assets/img/fantasy-icon-7.jpg" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="./assets/css/style.css">
    <title>PHP OOP 2</title>
</head>
<body class="bg-secondary">
    <header class="border border-2 border-success">
        <div class="container mb-3">
            <div class="row d-flex justify-content-between align-items-center">
                    <div class="col-1 py-3 bg-secondary rounded-3 border border-success">
                        <a href="#"><img src="./assets/img/logoFantAnimalFoodHeader.png" alt="Logo E-commerce" class="img-fluid"></a>
                    </div>
                    <div class="col-1 py-3 d-flex">
                        <img src="./assets/img/avatar_employee.jpg" alt="avatar employee" class="img-fluid border rounded-2">
                        <div class="row-4 px-3 d-flex border text-white ">
                            employee n. :   <?php echo rand(1, 600) ?>
                        </div>
                        <div class="row-4 px-3 d-flex border text-white ">
                            hours worked:  <?php echo rand(1, 8760) ?>
                        </div>
                        <div class="row-4 px-3 d-flex border text-white ">
                            holidays accrued: <?php echo rand(1, 4380) ?>
                        </div>
                    </div>
                    <div class="col-1 py-3">
                        <span class="text-white">Order:</span>
                        <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
                            <div class="btn-group me-2" role="group" aria-label="First group">
                                <button type="button" class="btn btn-success">1</button>
                                <button type="button" class="btn btn-success">2</button>
                                <button type="button" class="btn btn-success">3</button>
                                <button type="button" class="btn btn-success">4</button>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
    </header>

<?php

require __DIR__ . '/class/orders.php';

?>
    <script src="https://cdn.jsdelivr.net/npm/vue@2"></script>
    <script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script> 
</body>
</html>