member Id
fullname
 password
 phoneno
 height
 age
gender
weight
address
<?php

include "./connect.php";
include "./helper.php";



class register {


    public $conn = '';

    public $servername = "localhost";
    public $username = "root";
    public $password = "";
    public $dbname = "gym";
  
public function  __construct(){
    $conn = new mysqli($this->servername, $this->username, $this->password, $this->dbname);
    // Check connection
    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    }
}
// session_start();



public function index(){
    $response = array();

    if(isset($_POST['fullname']) && isset($_POST['password']) && isset($_POST['phoneno']) && isset($_POST['height']) 
    && isset($_POST['age'])  && isset($_POST['address']) && isset($_POST['gender']) && isset($_POST['weight'])){

        $user_uid = uniqid('member Id');       
        $fullname = $_POST['fullname'];
        $password = $_POST['password'];
        $contact = $_POST['phoneno'];
        $height= $_POST['height'];
        $age = $_POST['age'];
        $address = $_POST['address'];
        $gender = $_POST['gender'];
    }

    $checkifUserExists = $this->checkIfUserExists($fullname);

    if(!$checkifUserExists['data']){
        return 'User Already Exists';
    }

    $createUser = $this->createUser($fullname, $password, $contact, $height, $age, $address, $gender ); 

    if(!$createUser['data']){
        return 'User Creation Failed';
    }

    return sendResponse (true, 'User Creation Succesful', $createUser);

}


public function checkIfUserExists($fullname){

        $checkQuery = "SELECT member Id FROM user WHERE fullname='$fullname'";
        $checkResults = mysqli_query($conn,$checkQuery);
        $row = mysqli_fetch_array($checkResults);
        
        if(mysqli_num_rows($checkResults) > 0){
            echo json_encode(sendResponse(true, "User Already Exists", [
                'member Id' => data_get($row, 'uid', '')
            ]));

        }
    
        echo json_encode($response);
    }
        

    public function createUser($fullname, $password, $contact, $height, $age, $address, $gender){

        $query = "INSERT into user(fullname, contact, height, age, address, gender) values
        ('$fullname', '$password' '$contact', '$height', '$age', 
        '$address', '$gender')";

       $result = mysqli_query($conn,$query);


       if($result){
           $response["status"] = true;
           $response["message"] = "Registered Successfully";
           $response["data"] = [];
           echo json_encode($response);
       }
       else{
           $response["status"] = false;
           $response["message"] = "Something went wrong";
           $response["data"] = [];
           echo json_encode($response);
       }


    } 
        

    //     }
    // }
    // else{
    //     $response["success"] = 0;
    //     $response["message"] ="Enter all the required details";
    //     echo json_encode($response);
    // }
    // mysqli_close($conn);
    // echo"registration Successfully...";

//   echo "Connected";
//   $stmt = $conn->prepare("insert into user (uname, ucontact, udob, ugender, uaddress) values(?, ?, ?, ?, ?)");
//   $stmt->bind_param($name, $contact, $dob, $gender, $address);
//   $stmt->execute();

//   echo"registration Successfully...";
//   $stmt->close();
//   $conn->close();

}



?>