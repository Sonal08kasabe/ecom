<?php 

include 'php/database.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="login.css">
    <title>Document</title>
</head>
<body>

<div class="container ">
    <div class="row justify-content-center mt-100" id="main">
        <div class="col-lg-12 " id="login-container" style="width:500px">
            <h3 class="text-center text-primary " style="margin-top:40%">Login to your ecom</h3>
            <div class="card" style="margin-top:20px">
                <div class="card-body">
                    <form action="" post="POST" >
                        <div class="form-group">
                            <label for="">Username</label>
                          <input type="text" name="username" id="username" class="password w-100">
                          <h6 id="user_error"></h6>
                        </div>
                        <div class="form-group ">
                            <label for="" class="mt-3">Password</label>
                           <input type="password" name="password" id="password" class="password w-100">
                           <h6 id="pass_error"></h6>
                        </div>
                       
                        <div class="form-group mt-3">
                        <a href="register.php" class="nav-link text-primary">Don't have an account ? Register</a>
                        <input type="submit" name="login" id="submit" class="submit mt-2 btn btn-primary w-100">
                        </div>
                        
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>


<script>

    $(document).ready(()=>{
        $("#submit").click(()=>{
            let username=$('#username').val();
            let password=$('#password').val();
            let error=$('#user_error');
            let errormsg=$('#pass_error');

            if(username == ""){
                error.html("Username should not be blank").css("color","red");
                return false;
            }else if(username.length<3){
                 error.html("Username must be 3 characters long").css("color","red");
                 return false;
            }else if(password ==""){
                errormsg.html("Password should not be blank").css("color","red");
                return false;
            }else if(password.length<8){
                errormsg.html("Password must be 8 character long").css("color","red");
                return false;
            }

        })
        return false;
    })
</script>
</body>
</html>

<?php 

if (isset ($_POST['login'])){
    $username = $_POST['username'];
$password = $_POST['password'];

echo $username.$password;


$result = $db->login($username , $password , "users");
if($result[0] == 1)
{
   header('location:index.php');
} else {
    echo " Failed to login";
}

}




?>