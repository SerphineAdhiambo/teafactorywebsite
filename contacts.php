<?php
include("config/dbconnect.php");
include('include/header.php'); 
?>

<!-- Contact Section -->
<div class="w3-container w3-dark-grey" style="padding:128px 16px" id="contact">
  <h3 class="w3-center">CONTACT</h3>
  <p class="w3-center w3-large">Lets get in touch. Send us a message:</p>
  <div style="margin-top:48px">
    <p><i class="fa fa-map-marker fa-fw w3-xxlarge w3-margin-right"></i> Located at Kericho Town, Kericho</p>
    <p><i class="fa fa-phone fa-fw w3-xxlarge w3-margin-right"></i> Call: +254 (0) 703337559 or +254 (0) 729836934</p>
    <p><i class="fa fa-envelope fa-fw w3-xxlarge w3-margin-right"> </i> Email: kerichofactory@gmail.com</p>
    <br>
    <form method="POST" action="" >
      <p><input class="w3-input w3-border" type="text" placeholder="Name" name="name"></p>
      <p><input class="w3-input w3-border" type="text" placeholder="Email"  name="email"></p>
      <p><input class="w3-input w3-border" type="number" placeholder="phone" name="phone"></p>
      <p><input class="w3-input w3-border" type="text" placeholder="Subject" name="subject"></p>
      <p><input class="w3-input w3-border" type="text" placeholder="Message" name="message"></p>
      <p>
        <button class="w3-button w3-black" type="submit"name="sendmessage">
          <i class="fa fa-paper-plane"></i> SEND MESSAGE
        </button>
      </p>
    </form>
  </div>
</div>

<?php
if(isset($_POST['sendmessage']))
{
	$name=$_POST['name'];
	$email=$_POST['email'];
	$phone=$_POST['phone'];
	$subject=$_POST['subject'];
	$message=$_POST['message'];
	
	if(!empty($name) && !empty($email) && !empty($phone) && !empty($subject) && !empty($message))
	{
		
		$sql="insert into contact values ('','$name','$email','$phone','$subject','$message')";
		   $result=mysqli_query($conn, $sql);
		   if($result)
       {

        echo  '<script type="text/javascript">
        Swal.fire({
        icon: "success",
        title: "Success...",
        confirmButtonColor: "#0275d8",
        iconColor: "#0275d8",
        text: "message send successfully.."
        }).then(function(){
  window.location.href = "index.php";
})
        </script>';
    
  }
  else
    {
  
  echo '<script type="text/javascript">
        Swal.fire({
        icon: "error",
        title: "Error!!!",
        confirmButtonColor: "#0275d8",
        iconColor: "#d33",
        text: "message Failed... Please Try Again"
        })
        </script>';
    }
  
  
  }

}



?> 

<?php
 include('include/footer.php');
 ?>