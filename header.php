<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="/docs/4.1/assets/img/favicons/favicon.ico">

    <title><?php echo isset($title) ?  $title :  "Mon Site"; ?></title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.1/examples/starter-template/">

    <!-- Bootstrap core CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <!-- Custom styles for this template -->
    <link href="starter-template.css" rel="stylesheet">
  </head>

  <body>

<nav class="navbar navbar-expand-md  navbar-dark bg-dark mb-4">
  <a class="navbar-brand  " href="#">Mon site</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarsExampleDefault">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item <?php if ($nav === "index"): ?>bg-primary<?php endif;?>">
        <a class="nav-link" href="/index.php">Acceuil</a>
      </li>
      <li class="nav-item <?php if ($nav === "contact"): ?>bg-primary<?php endif;?>">
        <a class="nav-link" href="/contact.php">Contact</a>
      </li>
      <li class="nav-item <?php if ($nav === "dashboard"): ?>bg-primary<?php endif;?>">
        <a class="nav-link" href="/dashboard.php">Dashboard</a>
      </li>
    </ul>
  </div>
</nav>