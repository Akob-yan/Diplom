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

        <?php
        if(isset($_SESSION['radmin'])){
            if($page==6)
                $c='active';
                else $c='';
                echo '<li class="'.$c.'"><a href="index.php?page=6">Private</a></li>';
        }
        ?>
    </ul>
</nav>
-->


       
       
       
       
       
       
<div class="menu">
       
        <li <?php echo ($page==4)? "class='active'":"" ?> class="adminforms">
            <a href="index.php?page=4"> <p>Admin Forms</p> </a>
        </li>

        <li <?php echo ($page==3)? "class='active'":"" ?> class="registration">
            <a href="index.php?page=3" > <p>Registration</p> </a>
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
        color: white;
    }
    .menu{
        background-color: black;
        -webkit-border-radius: 10px;
        -moz-border-radius: 10px;
        border-radius: 10px;
    }
    .adminforms{
        color: white;
        float: left;
        
    }
    .registration{
        color: white;
        float: right;
    }

</style>