<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="./asset/css/style.css" rel="stylesheet">
        <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
        
    </head>
    <body>
        <?php require_once './sideBar.php' ?>
        
        <div class="content">
        <?php
        $page ="accueil";
        $view = scandir("view");


        if (isset($_GET["page"]) ) {
            $view = scandir("view");
            $page = ($_GET["page"]) ? $_GET["page"] : "accueil"  ;
            $item =  isset($_GET["item"]) ? $_GET["item"] : "index" ;
            $item.=".php";
            require_once "view/".$page."/".$item; 

        } else if (!in_array($page,$view)){
            $page="404.php";
            require_once "view/".$page; 

        }else{
            require_once "view/".$page."/index.php"; 

        }
    ?>
        </div>
        
        
        
        
        
    </body>
        <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
    <script>
    $('.btn').click(function(){
      $(this).toggleClass("click");
      $('.sidebar').toggleClass("show");
    });
      $('.feat-btn').click(function(){
        $('nav ul .feat-show').toggleClass("show");
        $('nav ul .first').toggleClass("rotate");
      });
      $('.serv-btn').click(function(){
        $('nav ul .serv-show').toggleClass("show1");
        $('nav ul .second').toggleClass("rotate");
      });
      $('nav ul li').click(function(){
        $(this).addClass("active").siblings().removeClass("active");
      });
    </script>
</html>