<?php include('connection.php');?>

<?php
if(isset($_POST['reg']))
{
   $name = $_POST['name'];
   
   $lname = $_POST['lname']; 
   $email = $_POST['email'];
   $pwd  = $_POST['password'];
   $cpwd = $_POST['cpassword'];
   

   $query = "INSERT INTO register values('$name','$lname','$email','$pwd','$cpwd')";
   $data = mysqli_query($conn,$query);
   
   if($data){
    ?>
    <script>
       alert("Registered Successfully");
    </script>
    <?php
    //  header('location:company_data1.html');
   }else{
    
      ?>
      <script>
         alert("User already exist");
      </script>
      <?php
      
   }}