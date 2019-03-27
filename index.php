<!DOCTYPE html>
<html class="h-100" lang="en">
<head>
    <meta charset="UTF-8">
    <title>Mutterkuh-Rassen</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.0/css/bootstrap.min.css"
          integrity="sha384-PDle/QlgIONtM1aqA2Qemk5gPOE7wFq8+Em+G/hmo5Iq0CCmYZLv3fVRDJ4MMwEA" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link rel="stylesheet" href="css/stylesheet.css" />
    <link rel="shortcut icon" href="/favicon.ico">

</head>
<body class="d-flex flex-column h-100">
<nav class="navbar navbar-expand-md navbar-dark bg-dark mb-4">
    <a class="navbar-brand" href="#">Hauptmenü</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse"
            aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="rassen.php">Rassen</a>
            </li>
        </ul>
    </div>
</nav>
<main role="main" class="container flex-shrink-0">
    <div id="mainJumbo" style="display:none" class="jumbotron">
        <h1>Hallo zusammen!</h1>
        <p class="lead">Diese Webseite soll die wichtigsten Mutterkuh-Rassen der Schweiz kurz präsentieren.</p>
        <a id="readMoreButton" class="btn btn-lg btn-dark" href="rassen.php" role="button">Zu den Rassen »</a>
    </div>
</main>

<script>
    $(document).ready(function () {
        $('.jumbotron').slideDown('slow');
    })
</script>

<?php include_once('footer.php') ?>


<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.0/js/bootstrap.min.js"
        integrity="sha384-7aThvCh9TypR7fIc2HV4O/nFMVCBwyIUKL8XCtKE+8xgCgl/PQGuFsvShjr74PBp"
        crossorigin="anonymous"></script>
</body>
</html>