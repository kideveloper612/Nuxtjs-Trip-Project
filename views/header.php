<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>RolfsBuss</title>
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="/css/bootstrap.css">
  <!-- Site CSS -->
  <!--    <link href="https://fonts.googleapis.com/css?family=Merriweather:900|Montserrat:300,400,700,800" rel="stylesheet">-->
  <link href="https://fonts.googleapis.com/css?family=Merriweather:400,900|Montserrat:300,400,500,600,700,800" rel="stylesheet">

  <link rel="stylesheet" type="text/css" href="/css/slick.css"/>
  <link rel="stylesheet" type="text/css" href="/css/slick-theme.css"/>
  <link rel="stylesheet" href="/css/style.css">
</head>
<body>
<!-- HEADER BEGIN -->
<div class="container-fluid sticky-top header-nav__bg">
  <div class="row">
    <div class="col-xl-10 mx-auto">
      <div class="row">
        <nav class="navbar navbar-expand-lg navbar-light header-nav" style="z-index: 10;">
          <a class="navbar-brand" href="<?php echo $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] ?>"><img
                    src="/images/logo.png" alt=""></a>
          <button class="mobile-menu mobile-btn d-lg-none" onclick="sideMenuMobileDropDown();">menu</button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item active">
                <a class="nav-link" href="#">Välkommen<span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Kalender</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true"
                   aria-expanded="false">info<i class="icon-chevrondown"></i></a>
                <div class="dropdown-menu dropdown-menu-right">
                  <a class="dropdown-item" href="#">Action</a>
                  <a class="dropdown-item" href="#">Another action</a>
                  <a class="dropdown-item" href="#">Something else here</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="#">Separated link</a>
                </div>
              </li>
              <li class="nav-item">
                <a class="nav-link header-nav-search-btn" href="#"><i class="icon-search"></i></a>
              </li>
              <li>
                <form class="header-nav-search-form">
                  <input type="text" placeholder="Search" aria-label="Search">
                  <button class="btn btn-outline-success my-2 my-sm-0" hidden type="submit">Search</button>
                </form>
              </li>
            </ul>
          </div>
        </nav>
      </div>
    </div>
  </div>
</div>
<!-- HEADER EOF -->