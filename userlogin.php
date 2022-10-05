<?php
    require "connect.php";

    $response = array();

    if(isset($_POST['uemail']) && isset($_POST['upassword'])){

        $email = $_POST['uemail'];
        $password = $_POST['upassword'];


        $query = "SELECT * FROM user WHERE uemail='$email'";
        $result = mysqli_query($conn,$query);

        if(mysqli_num_rows($result) > 0){
            $pass = "SELECT * FROM user WHERE uemail='$email' AND upassword='$password'"; 
            $check_pass = mysqli_query($conn,$pass);
            // echo $check_pass;

            if(mysqli_num_rows($check_pass) > 0){
              
                while($row = mysqli_fetch_array($check_pass)){
                    // $temp = array();
                    $response['success'] = 1;
                    $response['email'] = $row['uemail'];
                    $response['password'] = $row['upassword'];
                }
                echo json_encode($response);
            }else{
                $response["success"] = 0;
                $response["message"] = "email or password is incorrect";
                echo json_encode($response);
            }
            

            
        }else{
            $response["success"] = 0;
            $response["message"] = "email is not registered";
            echo json_encode($response);
        }

    }else{
        $response["success"] = 0;
        $response["message"] ="Enter all the required details";

        echo json_encode($response);
    }

    mysqli_close($conn);

?>    