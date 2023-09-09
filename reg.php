<?php
require 'connect.php';
if(isset ($_POST['submit'])){
    echo "da submit";
    echo "<pre>";
    print_r($_POST);

    $username = $_POST['username'];
    $email = $_POST['email'];
    $sodienthoai = $_POST['sdt'];
    $loinhan = $_POST['loinhan'];

    if(!empty($username) && !empty($email) && !empty($sodienthoai) && !empty($loinhan)){
        $sql = "INSERT INTO `user` (`username`, `email`, `sodienthoai`, `loinhan`) VALUE('$username', '$email', '$sodienthoai','$loinhan')";
        if($conn->query($sql)===true){
            echo "Them du lieu thanh cong";
        }else{
            echo "loi {$sql}".$conn->error;
        };
    }else{
        echo "ban can nhap day du thong tin";
    };
};
    
?>