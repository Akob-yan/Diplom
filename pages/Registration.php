<div class="row">
    <div>
        <?php
        if(isset($_POST['addquestion'])){
            $question=trim(htmlspecialchars($_POST['question']));
            $answer=trim(htmlspecialchars($_POST['answer']));
//            $ins='insert into question(question,answer) values("'.$question.'"), ("'.$answer.'")';

            $ins='insert into question(question) values("'.$question.'")';
            $ins2='insert into question(answer) values("'.$answer.'")';
            mysql_query($ins);
            mysql_query($ins2);
        } else{
            
        
        echo '<form>';
        echo '<input type="text" name="question" placeholder="Вопрос" id="question"><br>';
        echo '<input type="text" name="answer" placeholder="Ответ" id="answer"><br>';
        echo '<input type="submit" name="addquestion" value="Добавить" class="btn">';
        echo '</form>';
        }
//        mysql_free_result($res);
        
        
            
            
//            echo "<script>";
//            echo "window.location=document.URL;";
//            echo "</script>";
            
    ?>
    <style>
        #question{
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
        #answer{
            margin-left: 325px;
            margin-top: 30px;
            height: 50px;
            width: 700px;
            border-radius: 10px;
            -webkit-border-radius: 10px;
            -moz-border-radius: 10px;
            -khtml-border-radius: 10px;
            border: 1px solid #000;
            display: block;
        }
        .btn{
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
            -webkit-border-radius: 10px;
            -moz-border-radius: 10px;
            -khtml-border-radius: 10px;
            border: 1px solid #000;
            display: block;
            
            }
        
           .btn:hover {
                background-color: deepskyblue; /* Цвет фона при наведении */
           }
           .btn:active{
                background-color: limegreen; /* фон у активной кнопки */
           }
    </style>
    </div>




















