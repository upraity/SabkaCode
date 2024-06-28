<?php
    session_start();
    if(!isset($_SESSION['loggedin']) && $_SESSION['loggedin'] != true){
        header("location: https://dj.000.pe/talksta");
    }
    session_unset();
    session_destroy();
    echo'
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
            <strong> You are Logout successfully </strong>
            </button>
        </div>
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
            <strong> You will be redirect automatically </strong>
            </button>
        </div>
    ';
    // header("location:index.php");
    header( "refresh:3;url= https://dj.000.pe/talksta" );
?>

<html>
  <head>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  </head>
  <body>
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
    </script>
  </body>
</html>
