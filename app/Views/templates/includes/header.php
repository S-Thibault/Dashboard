<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <meta content="Olivier PRIEUR, Emma LEGER and Sylvain THIBAULT" name="author">

        <title><?= App::getInstance()->title; ?></title>

        <script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.3/dist/Chart.min.js"></script>

        <link rel="stylesheet" href="../public/css/style.css">


        <!-- Bootstrap core CSS -->
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


    </head>

    <body>

      <div class="page-content p-3" id="content">


        <div style ="" class="row align-items-center">

      <!-- Toggle button -->
      <div class="col-2">
        <button id="sidebarCollapse" class="btn btn-bubble height="100><i class="fa fa-bars mr-2"></i></button>
      </div>


      <div class="col-8">
        <div class="wrapper"><h1>Dashboard</h1></div>
      </div>

        <!-- Search form -->
        <div class="col-2">
        <div class="flexbox">
          <div class="search">
            <div>
              <input type="text" placeholder="Search . . ." required>
            </div>
          </div>
        </div>
      </div>
      </div>

 <button id="demo" class="btn btn-md btn-outline-secondary">Show</button>
 <section id='Show-stars'>
 <div id='stars'></div>
 <div id='stars2'></div>
 <div id='stars3'></div>
</section>

<div class="separator"></div>
