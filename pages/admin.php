<div class="row">
    <div class="col-sm-6 col-md-6 col-lg-6 left">
        <?php
//        if(!isset($_SESSION['radmin'])){
//            echo "<h3/><span style='color:red;'>For Administrator Only!</span><h3/>";
//        return false;
//        }
        
        
        connect();
        $sel='select * from questions';
        $res= mysql_query($sel);
        echo '<form action="index.php?page=4" method="post" class="input-group" id="formquestion">';
        echo '<table class="table table-striped">';
        while($row=mysql_fetch_array($res, MYSQL_NUM)){
            echo '<tr>';
            echo '<td>'.$row[0].'</td>';
            echo '<td>'.$row[1].'</td>';
            echo '<td><input type="checkbox" name="cb'.$row[0].'"></td>';
            echo '</tr>';
        }
        echo '</table>';
        mysql_free_result($res);
        echo '<input type="text" name="question" placeholder="Question">';
        echo '<input type="submit" name="addquestion" value="Add" class="btn btn-sm btn-info">';
        echo '<input type="submit" name="delquestion" value="Delete" class="btn btn-sm btn-warning">';
        echo '</form>';
        ?>
        <?php
        if(isset($_POST['addquestion'])){
            $question=trim(htmlspecialchars($_POST['question']));
//            if($country="") exit();
            $ins='insert into questions(question) values("'.$question.'")';
            mysql_query($ins);
            echo "<script>";
            echo "window.location=document.URL;";
            echo "</script>";
        }
        if(isset($_POST['delquestion'])){
            foreach($_POST as $k => $v){
                if(substr($k,0,2)=="cb"){
                    $idc=substr($k,2);
                    $del='delete from questions where id='.$idc;
                    mysql_query($del);
                }
            }
            echo "<script>";
            echo "window.location=document.URL;";
            echo "</script>";
        }
        ?>
    </div>
    




















