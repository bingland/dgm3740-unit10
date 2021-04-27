<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:ital,wght@0,300;0,400;0,600;1,400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./scss/main.css">
    <title><?php echo($ptitle) ?></title>
</head>
<body>
    <header>
        <div class="wrapper1200">
            <div class="logo">
                <img src="/images/logo/logo.svg" alt="main logo" />
            </div>
            <div class="phone"><a href="tel:123-456-7890">1-123-456-7890</a></div>
        </div>
    </header>
    <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #6A66F2;">
        <div class="container-fluid wrapper1200">
            <a class="navbar-brand" href="/index.php">Dreamer Vacations</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link" href="/aboutus.php">About Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/destinations.php">Destinations</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/location.php">Location</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Contact</a>
                </li>
            </ul>
            <form class="d-flex">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-light" type="submit">Search</button>
            </form>
            </div>
        </div>
    </nav>