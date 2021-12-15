<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="/assets/css/bootstrap.css">
    <link rel="stylesheet" href="/assets/css/main.css">
    <script src='/assets/js/kit.fontawesome.js' crossorigin='anonymous'></script>
    <script src="/assets/js/bootstrap.min.js"></script>
    <script src="/assets/js/main.js"></script>
    <title><?php echo $title; ?></title>
</head>

<body>

    <div>
        <?php require 'partials/header.php'; ?>
    </div>

    <div class="container">
        <?php require VIEWS . $view; ?>
    </div>
    <div>
        <?php require 'partials/footer.php'; ?>
    </div>
</body>


   


</html>