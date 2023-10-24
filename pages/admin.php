<div class="row">
    <div class="col-sm-6 col-md-6 col-lg-6 left">
        <?php
        connect();
        $min = 0;
        $max = 2;
        $random = mt_rand($min,$max);
        $sel='select question from question where id='.$random;
        $res= mysql_query($sel);
        echo '<form action="index.php?page=4" method="post" class="input-group" id="formquestion">';
        echo '<table class="table table-striped">';
        while($row=mysql_fetch_array($res, MYSQL_NUM)){
            echo '<tr>';
            echo '<td>'.$row[0].'</td>';
            echo '<td>'.$row[1].'</td>';
            echo '</tr>';
        }
        echo '</table>';
        mysql_free_result($res);
        echo '<input type="text" name="question" placeholder="Question">';
        echo '<input type="submit" name="addquestion" value="Add" class="btn btn-sm btn-info">';
        echo '</form>';
        ?>
        <?php
        if(isset($_POST['addquestion'])){
            $question=trim(htmlspecialchars($_POST['question']));
            $ins='select answer from question where id='.$random;
            $answer = mysql_query($ins);
            $answer2=mysql_fetch_array($answer, MYSQL_NUM);
            if($question == $answer2[0]){
                echo "<p style='color:green'>Правильно</p>";
            }else{
                echo "<p style='color:red'>НЕ правильно</p>";
            }
            echo '<input type="submit"  value="Next Question" style="color:green">';
                
                
//            echo "<script>";
//            echo "window.location=document.URL;";
//            echo "</script>";
        }
//        if(isset($_POST['delquestion'])){
//            foreach($_POST as $k => $v){
//                if(substr($k,0,2)=="cb"){
//                    $idc=substr($k,2);
//                    $del='delete from question where id='.$idc;
//                    mysql_query($del);
//                }
//            }
//            echo "<script>";
//            echo "window.location=document.URL;";
//            echo "</script>";
//        }
        ?>
    </div>
    



















