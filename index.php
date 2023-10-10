<?php
    session_start();
    include_once ("pages/functions.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Diplom</title>
    <L
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
    <body>
        <div class="container">
            <div class="row">
                <header class="col-sm-12 col-md-12 col-lg-12">
<!--                    <?php include_once("pages/login.php");?>-->
                </header>
            </div>
            <div class="row">
                <?php
                    include_once("pages/menu.php");
                ?>
            </div>
            <section class="col-sm-12 col-md-12 col-lg-12">
                <?php
                    if(isset($_GET['page'])){
                        $page = $_GET['page'];
//                        if($page==1){
//                        include_once("pages/tours.php");
//                        }
//                        if($page==2){
//                        include_once("pages/comments.php");
//                        }
                        
                        if($page==3){
                        include_once("pages/registration.php");
                        }
                        if($page==4){
                        include_once("pages/admin.php");
                        }
                        if($page==6 && isset($_SESSION['radmin'])){
                            include_once("pages/private.php");
                        }
                    }
                ?>
            </section>
        </div>
        <div class="row">
            <footer class="btn btn-gray">Компания &copy;Diplom. Все права защищены.</footer>
        </div>
    </body>
</html>


























