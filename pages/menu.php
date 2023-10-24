   
<div class="menu">
       
        <li <?php echo ($page==4)? "class='active'":"" ?> class="answer">
            <a href="index.php?page=4"> <p>Отвечать на вопросы</p> </a>
        </li>

        <li <?php echo ($page==3)? "class='active'":"" ?> class="question">
            <a href="index.php?page=3" > <p>Добавить вопрос</p> </a>
        </li>

        <?php
        if(isset($_SESSION['radmin'])){
            if($page==6)
                $c='active';
                else $c='';
                echo '<li class="'.$c.'"><a href="index.php?page=6">Private</a></li>';
        }
        ?>
</div>


<style>
    p{
        font-size: 25px;
        color: white;
        padding: 6px;
        
    }
    .menu{
        background-color: black;
        -webkit-border-radius: 30px;
        -moz-border-radius: 30px;
        border-radius: 30px;
    }
    .answer{
        color: white;
        float: left;
        padding: 3px;
        font-family: cursive;
        
    }
    .question{
        color: white;
        float: right;
        padding: 3px;
        font-family: cursive;
/*        font-family: Georgia, Verdana, "Trebuchet MS";*/
    }

</style>













