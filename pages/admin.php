<div class="">
    <div>
       <div class="diiv">
        <?php
        connect();
        $min = 0;
        $max = 2;
        $random = mt_rand($min,$max);
        $sel='select question from question where id='.$random;
        $res= mysql_query($sel);
        echo '<form action="index.php?page=4" method="post" class="" id="formquestion">';
        echo '<table class="blok">';
        while($row=mysql_fetch_array($res, MYSQL_NUM)){
            echo '<tr>';
            echo '<td>'.$row[0].'</td>';
            echo '<td>'.$row[1].'</td>';
            echo '</tr>';
        }
        echo '</table>';
        echo '</div>';
        mysql_free_result($res);
        echo '<input type="text" name="question" placeholder="Ответ" class="answ">';
        echo '<input type="submit" name="addquestion" value="Ответить" class="bttn">';
        echo '</form>';
        ?>
        <?php
        if(isset($_POST['addquestion'])){
            $question=trim(htmlspecialchars($_POST['question']));
            $ins='select answer from question where id='.$random;
            $answer = mysql_query($ins);
            $answer2=mysql_fetch_array($answer, MYSQL_NUM);
            echo '<div class="pravN">';
            if($question == $answer2[0]){
                echo "<p style='color:green'>Правильно</p>";
            }else{
                echo "<p style='color:red'>НЕ правильно</p>";
            }
            echo '<input type="reset" value="Следующий вопрос" onclick="window.location.reload()" style="color:green">';
            echo '</div>';
            
            
                
                
//            echo "<script>";
//            echo "window.location=document.URL;";
//            echo "</script>";
        }
        ?>
        
        <style>
            .bttn{
            margin-left: 550px;
            margin-top: 200px;
            margin: 0;
            width: 120px;
            height: 40px;
            color: snow;
            background: #6331eb;
            position: absolute;
            top: 40%;
            left: 50%;
            margin-right: -50%;
            transform: translate(-50%, -50%) ;
            border-radius: 10px;
            -webkit-border-radius: 30px;
            -moz-border-radius: 30px;
            -khtml-border-radius: 30px;
            border: 1px solid #000;
            display: block;
            }
            .bttn:hover {
                background-color: deepskyblue; /* Цвет фона при наведении */
           }
            .blok{
                font-size: 2em;
                margin-top: 50px;
                margin-left: 265px;
                background-color: gainsboro;
            }
            .diiv{
                margin-left: 310px;
                margin-right: 270px;
                background-color: gainsboro;
                -webkit-border-radius: 30px;
                -moz-border-radius: 30px;
                border-radius: 30px;
                
            }
            .answ{
            margin-left: 325px;
            margin-top: 50px;
            height: 50px;
            width: 700px;
            border-radius: 10px;
            -webkit-border-radius: 10px;
            -moz-border-radius: 10px;
            -khtml-border-radius: 10px;
            border: 1px solid #000;
            display: block;
            }
            .pravN{
                margin-left: 575px;
                margin-top: 150px;
            }
        </style>
    </div>
    



















