<?php
require_once ('../database/connect_sql.php');
$email = $password = "";
if($_SERVER['REQUEST_METHOD']==='POST'){
    $email = $_POST['email'];
    $password =$_POST['password'];
    $sql = "SELECT * FROM user WHERE email = '$email' and password = '$password'and role_id = '1'";
    $sql = $dbc->query($sql);
    $count = mysqli_num_rows($sql);
    if($count > 0){  
        $row = mysqli_fetch_array($sql);
        $_SESSION['id'] = $row['id'];
        $_SESSION['fullname'] = $row['fullname'];
        header('Location: funtion_AD.php');
    }
    else{
        echo("<script>alert('Vui lòng nhập đúng tài khoản!!');</script>" );
      }
    
    
}
?>
<!DOCTYPE html>
<html>
   <head>
      <meta charset="utf-8">
      <title>Đăng Nhập</title>
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css">
   </head>
   <body>
       <form action="index.php" method="POST">
       <section class="vh-100" style="background-color: #508bfc;">
           <div class="container py-5 h-100">
             <div class="row d-flex justify-content-center align-items-center h-100">
               <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                 <div class="card shadow-2-strong" style="border-radius: 1rem;">
                   <div class="card-body p-5 text-center">
         
                     <h3 class="mb-5">ĐĂNG NHẬP ADMIN</h3>
         
                     <div class="form-outline mb-4">
                       <input type="email" id="typeEmailX-2" class="form-control form-control-lg" placeholder="email" style="font-size: 17px;" required name="email"/>
                      
                     </div>
         
                     <div class="form-outline mb-4">
                       <input type="password" id="typePasswordX-2" class="form-control form-control-lg"  placeholder="password" style="font-size: 17px;" required name="password"/>
                       
                     </div>
         
                     <!-- Checkbox -->
                     <div class="form-check d-flex justify-content-start mb-4">
                       <input class="form-check-input" type="checkbox" value="" id="form1Example3" />
                       <label class="form-check-label" for="form1Example3"> Nhớ mật khẩu </label>
                     </div>
         
                     <button class="btn btn-primary btn-lg btn-block" type="submit">Đăng Nhập</button>
         
                     <hr class="my-4">
         
                   </div>
                 </div>
               </div>
             </div>
           </div>
         </section>
       </form>
   </body>
</html>