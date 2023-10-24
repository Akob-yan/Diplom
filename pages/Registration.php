<div class="row">
    <div class="col-sm-6 col-md-6 col-lg-6 left">
        <?php

        echo '</select>';
        echo '</select>';
        echo '<input type="text" name="question" placeholder="Question">';
        echo '<input type="text" name="answer" placeholder="Answer">';
        echo '<input type="submit" name="addquestion" value="Добавить" class="btn btn-sm btn-info">';
        echo '</form>';
//        mysql_free_result($res);
        
        if(isset($_POST['addquestion'])){
            $question=trim(htmlspecialchars($_POST['question']));
            $answer=trim(htmlspecialchars($_POST['answer']));
            echo $question;
            echo $answer;
            echo "<script>";
            echo "console.log('srabotalo')";
            echo "</script>";
            
            
//            echo "<script>";
//            echo "window.location=document.URL;";
//            echo "</script>";
            }
//        if(isset($_POST['delquestion'])){
//            foreach($_POST as $k => $v){
//                if (substr($k,0,2)=="hb"){
//                $idc=substr($k,2);
//                $del='delete from questions where id=';
//                mysql_query($del);
//                if ($err){
//                echo 'Error code:'.$err.'<br>';
//                exit();
//                 }
//            }
//        }
//        echo "<script>";
//        echo "window.location=document.URL;";
//        echo "</script>";
//        }
    ?>
    </div>




















