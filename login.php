<?php include('connection.php');
session_start();?>



<?php
if(isset($_POST['login']))
{
   $email = $_POST['email'];
   $pwd  = $_POST['password'];

   $query = "SELECT * FROM register where email ='$email' && password ='$pwd'";
   $data = mysqli_query($conn,$query);
   $total =  mysqli_num_rows($data);
 
   if($total == 1){
    // echo"Successful";
    header("location:user.php");
   }else{
      ?>
      <script>
         alert("Wrong University roll no or password");
      </script>
      <?php
      

    
   }
}


?>