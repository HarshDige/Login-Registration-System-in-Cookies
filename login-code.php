<?php 
    require_once "./conection.php";

    if(isset($_POST['loginbtn'])){

        $user = $_POST['user-email'];
        $password = $_POST['password'];

        // echo $password;
        // echo $user;

        $query = "SELECT * FROM `stud` WHERE `usern`='$user' AND `pass`='$password'  ";
        $result = mysqli_query($conn, $query);
        

        //  mysqli_num_rows use for count row of data
        if(mysqli_num_rows($result) > 0)
        {
            $data = mysqli_fetch_assoc($result);
            $jsondata=json_encode($data);

            setcookie('user',$jsondata,time() + 20 ,"/");
            
            header("Location:dashbord.php");
        }
        else
        {
            echo "Invalid Username or password!";
            die();
        }
    }
    //  86400*30
?>