<?php
$host='locaLhost';
$username='root';
$password='';
$dbname='web2';
$connt =  new mysqli($host,$username,$password,$dbname);
if($connt->connect_error){
echo"error";
} else {
echo"connection done";
}
//$query="SELECT FROM  * users"
//$result =mysqli_query($connt,$query);









if (isset($_POST['send'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];
    $name = $_POST['name'];

    if (strlen($name) > 3 && !empty($name)) {
        echo "<br> <h6>The Name Is Valid</h6>";
    } else {
        echo "<br> <h6>The Name is Invalid</h6>";
     
    }

    if (filter_var($email, FILTER_VALIDATE_EMAIL) && !empty($email)) {
        echo "<br> <h5>The email is Valid</h5>";
    } else {
        echo "<br> <h6>The Email Is Invalid</h6>";
     
    }

    if (strlen($password) > 5 && !empty($password)) { 
        echo "<br> <h6>The Password is Valid</h6>";
    } else {
        echo "<br> <h6>The Password is invalid</h6>";
    
    }


    if (isset($_POST['checkMe'])) {
        echo "<br> <h6>Checked Remember</h6>";
    } else {
        echo "<h6>Not Checked Remember</h6>";
     
    }

    if (isset($_POST['gender'])) {
        echo "<br> <h6> Clicked Gender</h6>";
    } else {
        echo "<br> <h6>must Select The Gender</h6>";
    
    }

    if (empty($_FILES['image']['name'])) {
        echo "Not Found File";
    } else {
        if ($_FILES['image']['size'] <= 1024 * 1024) {
            echo "Available Size For File";
         
        } else {
            echo "<br> The Size Of File Greater than 1MB";
            header("refresh");
        }
    }
    $gender =  $_POST['gender'];
    htmlspecialchars($name);
    htmlspecialchars($password);
    htmlspecialchars($email);
   $pass =md5($password);
   $hash = password_hash($password, PASSWORD_DEFAULT);

  
   $stmt=$connt->prepare("insert into users2(name ,email ,password) values(?,?,?)");
   $stmt->bind_param("sss",$name,$email,$password);

   $name="yusra";
   $email="yusra@";
   $password="123456";

   $stmt->execute();
   $name="hh";
   $email="hh@";
   $password="123456789";
 
   $stmt->execute();
   echo"</br>new record creat succesfully";
   $stmt->close();





   $insert = "insert into users2(name ,email ,password ,gender) values
   ('$name','$email','$hash','$gender')";
   
   $result =mysqli_query($connt,$insert);
   if($result==TRUE){
       echo"<br/>successfully add";
    }  else{
       echo"error:";//.mysqli_error($connt);
   }


    $connt->close(); 






}

?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>yusra atwan 2301199166</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>

<body>
    <div class="container" style="margin-top: 30px;">

        <form action="" method="post" enctype="multipart/form-data">
            <div class="fo-3">
                <label  class="formlabel">Name</label>
                <input value="" name="name" type="text" class="form-control" id="exampleInputName1" aria-describedby="nameHelp">
            </div>
            <div class="fo-3">
                <label for="exampleInputEmail1" class="formlabel">Email address</label>
                <input value="" name="email" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="fo-3">
                <label for="exampleInputPassword1" class="formlabel">Password</label>
                <input name="password" value="" type="text" class="form-control" id="exampleInputPassword1">
            </div>
            <div class="fo-3 ">
                <input name='checkMe' type="checkbox" class="form-check-input" id="exampleCheck1" require>
                <label class="check" >Remember Me</label>
            </div>
            <label class="check" >Gender:</label>
            <div class="formcheck">
                <input name="gender" value="1" class="form-check-input" type="radio" id="flexRadioDefault1">
                <label class="check">
                    Male
                </label>
            </div>
            <div class="formcheck">
                <input name="gender" value="2" class="form-check-input" type="radio" id="flexRadioDefault2">
                <label class="check">
                    Female
                </label>
  …</div><br>
            <div class="fo-3">
                <label  class="formlabel">Image</label>
                <input name="image" class="form-control" type="file" id="formFileDisabled">
            </div>

            <button name="send" type="submit" class=" btn-primary">Submit</button>
        </form>

    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>

</html>