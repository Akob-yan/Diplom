<!--
      <?php
        if(isset($_SESSION['radmin'])){
            if($page==6)
                $c='active';
                else $c='';
                echo '<li class="'.$c.'"><a href="index.php?page=6">Private</a></li>';
        }
        ?>
-->
       
<div class="menu">
       
        <li <?php echo ($page==4)? "class='active'":"" ?> class="answer">
            <a href="index.php?page=4"> <p>To answer</p> </a>
        </li>

        <li <?php echo ($page==3)? "class='active'":"" ?> class="question">
            <a href="index.php?page=3" > <p>Add a question</p> </a>
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
















<!--
<nav class="navbar navbar-expand-lg navbar navbar-dark bg-dark">
    <ul class="nav nav-tabs nav-justified" >
    
           <li <?php echo ($page==2)? "class='active'":"" ?> >
            <a href="index.php?page=2"> Comments </a>
        </li>
        <li <?php echo ($page==1)? "class='active'":"" ?> >
            <a href="index.php?page=1">Tours </a>
        </li>
    


        <li <?php echo ($page==4)? "class='active'":"" ?> >
            <a href="index.php?page=4"> Admin Forms </a>
        </li>

        <li <?php echo ($page==3)? "class='active'":"" ?> >
            <a href="index.php?page=3"> Registration </a>
        </li>
    </ul>
</nav>
-->