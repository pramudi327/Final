  <?php 
//  include '../components/connect.php';
//     if (isset($_POST['submit'])){
       
//         $email = $_POST['email'];
//         $email = filter_var($email,FILTER_SANITIZE_STRING);

//         $pass = sha1($_POST['pass']);
//         $pass = filter_var($pass,FILTER_SANITIZE_STRING);

//         $select_seller =$conn->prepare("SELECT * FROM `SELLERS` WHERE email = ?");
//         $select_seller->execute([$email]);

//         if($select_seller->rowCount() > 0){
//             $warning_msg[] = 'eamil already exist!';
//         }else{
//             if($pass != $cpass){
//                 $warning_msg[] = 'confirm passsword not matched';
//             }else{
//                 $insert_seller
//             }
//         }

//     }
?>  

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blue Sky Summer - Seller registration page</title>
    <link rel="stylesheet" type="text/css" href="../css/admin_style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>

    <div class="form-container">
        <form action="" method="POST" enctype="multipart/form-data" class="login">
          <h3>Login now</h3>

          <div class="input-field">
                <p>Your email <span>*</span></p>
                <input type="email" name="email" placeholder="enter your email" maxlength="50" required class="box">
           </div>

           <div class="input-field">
                <p>Your password <span>*</span></p>
                <input type="password" name="name" placeholder="enter your password" maxlength="50" required class="box">
           </div>

         
                <p class="link" >Do you have an account? <a href="login.php"></a></p>
                <input type="submit" name="submit" value="login now" class="btn">
            
        </form>
    </div>
    


<!-- sweetalert cdn link -->
 <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>

 <!-- custom js link -->
  <script src="../js/script.js"></script>
 <script src="../components/alert.php"></script>



    
</body>
</html>