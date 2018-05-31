<?php 
function setComments($conn) 
{  
 $message = ''; 
 if(isset($_POST['commentSubmit'])) 
 {
  $conn = mysqli_connect('localhost','root','','guest_book');
  mysqli_select_db($con , "logindb");
  		  
  $usname = $_POST['username']; 
  $commnt = $_POST['comments'];   
  $sql = "insert into tblcomment(user, comments) values('$usname','$commnt')"; 
  $result = $conn->query($sql); 
 } 
} 
?> 