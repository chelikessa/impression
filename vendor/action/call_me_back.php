<?php 
    session_start();
    include '../components/core.php';

    if(isset($_POST['btn_aq'])){
        if(!empty($_POST['name'] && $_POST['tel'])){
            $link->query("INSERT INTO `call_me_back`(`status_id`, `name`, `tel`) 
            VALUES ('2', '{$_POST['name']}', '{$_POST['tel']}')");
            $_SESSION['success']['btn_aq'] = "Мы перезвоним вам в течении нескольких часов!";
            header("location:".$_SERVER['HTTP_REFERER']."#anyquestions");
        }else{
            $_SESSION['error']['btn_aq'] = "Заполните все поля!";
            header("location:".$_SERVER['HTTP_REFERER']."#anyquestions");
        }
    }
    
?>