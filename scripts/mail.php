<?php
    header('Content-Type: application/json;charset=utf-8');
    include_once('config.php');

    //$to = 'demo@spondonit.com';
    $fio = mysqli_real_escape_string($link, $_POST["fio"]);
    $coffee = mysqli_real_escape_string($link, $_POST["coffee"]);
    $phone = mysqli_real_escape_string($link, $_POST["phone"]);
    
    $query = "INSERT INTO orders (fio, phone, coffee) VALUES ('$fio', '$phone', '$coffee')";
    $query_result = mysqli_query($link, $query);
    $result = array();
    $result['success'] = ($query_result === TRUE);
    if ($result['success']) {
        $result['order_id'] = mysqli_insert_id($link);
    }
    echo json_encode($result);
    /*$headers = 'MIME-Version: 1.0' . "\r\n";
    $headers .= "From: " . $email . "\r\n"; // Sender's E-mail
    $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

    $message ='<table style="width:100%">
        <tr>
            <td>'.$fio.'  '.$laststname.'</td>
        </tr>
        <tr><td>Email: '.$email.'</td></tr>
        <tr><td>phone: '.$phone.'</td></tr>
        <tr><td>Text: '.$text.'</td></tr>
        
    </table>';

    if (mail($to, $email, $message, $headers))
    {
        echo 'The message has been sent.';
    }else{
        echo 'failed';
    }*/

?>