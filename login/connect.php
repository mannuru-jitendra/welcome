<?php
    $firstname=$_POST['firstname'];
    $lastname=$_POST['lastname'];
    $gender=$_POST['gender'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $number=$_POST['number'];
    //database connection

    $conn= new mysqli('localhost','admin','','registration');
    if ($conn->connect_error) {
        die('connection failed :'.$conn->connect_error);
    }else {
        /*$stmt=$conn->prepare("insert into registation(firstName,lastName,gender,email,password,number)values(?,?,?,?,?,?)");
        $stmt->blind_param("sssssi",$firstName,$lastName,$gender,$email,$password,$number);
        $stmt->excute();
        echo "registration successfull";
        $conn->close();*/
        $sql = "INSERT INTO registration(firstname,lastname,gender,email,password,number) values ('$firstname','$lastname','$gender','$email','$password','$number')";
        if ($conn->query($sql))
        {
        	echo "new record stored";
        }
        else{
        	echo "error".$sql.<br>.$conn->error;
        }
    }
?>
