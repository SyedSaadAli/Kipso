<?php 
include('security.php');
//include('CheckLogin.php');





if(isset($_POST['login_btn']))
{


 $Username = $_POST['Username'];
 $Password = $_POST['Password'];
 


 $query = "SELECT * FROM register";
 $query_run = mysqli_query($connection, $query);
 if(mysqli_num_rows($query_run) > 0)        
 {
    while($row = mysqli_fetch_assoc($query_run))
    {
      if($row['fname'] === $Username && $row['Pass'] === $Password)
      {
         
        $query2 = "INSERT INTO login (Username,Password) VALUES 
        ('$Username','$Password')";
        $query_run2 = mysqli_query($connection, $query2);
        header('Location: index.php');
    }

}
}
     

}

//----------------------------------------------------------------------------------------------------------------------




if(isset($_POST['reg_btn']))
{


 $fname = $_POST['fname'];
 $lname = $_POST['lname'];
 $email = $_POST['email'];
 $number = $_POST['number'];
 $pass = $_POST['pass'];
 $Cpass = $_POST['Cpass'];


if($pass === $Cpass){
 $query = "INSERT INTO register (fname,lname,email,PN,pass) VALUES 
  ('$fname','$lname','$email','$PN','$pass')";
     $query_run = mysqli_query($connection, $query);
     header('Location: login.php');
     }
     else
     {
        $_SESSION['message'] = "Password & Confirm Password does not match";
        header('Location: register.php');

     }

}



//----------------------------------------------------------------------------------------------------------------------




if(isset($_POST['comment_btn']))
{


 $CName = $_POST['name'];
 $CEmail = $_POST['email'];
 $CMessage = $_POST['message'];

 $query = "INSERT INTO contact (Name,Email,Message) VALUES 
  ('$CName','$CEmail','$CMessage')";
     $query_run = mysqli_query($connection, $query);
     header('Location: contact.php');
      if($query_run)
    {
        $_SESSION['status'] = "Your Message Has Been Sent Successfully !";
        $_SESSION['status_code'] = "success";
        header('Location: contact.php');
    }
    else
    {
        $_SESSION['status'] = "Your Message Has Not Been Sent !";
        $_SESSION['status_code'] = "error";
        header('Location: contact.php'); 
    }

}



//----------------------------------------------------------------------------------------------------------------------





if(isset($_POST['become_teacher_btn']))
{


 $Teacher_Name = $_POST['Teacher_Name'];
 $Teacher_Email = $_POST['Teacher_Email'];
 $Teacher_PhoneNumber = $_POST['Teacher_PhoneNumber'];
 $Teacher_message = $_POST['Teacher_message'];

 $query = "INSERT INTO become_teacher (T_Name,T_Email,T_PN,T_Message) VALUES 
  ('$Teacher_Name','$Teacher_Email','$Teacher_PhoneNumber','$Teacher_message')";
     $query_run = mysqli_query($connection, $query);
     header('Location: contact.php');
      if($query_run)
    {
        $_SESSION['status'] = "Your Request Is Recorded !";
        $_SESSION['status_code'] = "success";
        header('Location: become_teacher.php');
    }
    else
    {
        $_SESSION['status'] = "Your Request Is Not Recorded !";
        $_SESSION['status_code'] = "error";
        header('Location: become_teacher.php'); 
    }

}






//----------------------------------------------------------------------------------------------------------------------







if(isset($_POST['Review_btn']))
{


 $Name = $_POST['Name'];
 $Email = $_POST['Email'];
 $Message = $_POST['Message'];
 

 $query = "INSERT INTO review (Name,Email,Message) VALUES 
  ('$Name','$Email','$Message')";
     $query_run = mysqli_query($connection, $query);
     header('Location: contact.php');
      if($query_run)
    {
        $_SESSION['status'] = "Your Review Is Recorded !";
        $_SESSION['status_code'] = "success";
        header('Location: course-details.php');
    }
    else
    {
        $_SESSION['status'] = "Your Review Is Not Recorded !";
        $_SESSION['status_code'] = "error";
        header('Location: course-details.php'); 
    }

}






//----------------------------------------------------------------------------------------------------------------------




if(isset($_POST['Apply_btn']))
{


 $Name = $_POST['Name'];
 $Email = $_POST['Email'];
 $PhoneNumber = $_POST['PhoneNumber'];
 $Comment = $_POST['Comment'];
 

 $query = "INSERT INTO free_course (Name,Email,PhoneNumber,Comment) VALUES 
  ('$Name','$Email','$PhoneNumber','$Comment')";
     $query_run = mysqli_query($connection, $query);
     header('Location: index.php');
     

}




if(isset($_POST['subscribe_btn']))
{

 $Email = $_POST['Email'];


 $query2 = "INSERT INTO subscribe (Email) VALUES ('$Email')";
     $query_run2 = mysqli_query($connection, $query2);
     header('Location: .php');
      

}




//----------------------------------------------------------------------------------------------------------------------






if(isset($_POST['comment_btn']))
{


 $Name = $_POST['Name'];
 $Email = $_POST['Email'];
 $Comment = $_POST['Comment'];
 

 $query = "INSERT INTO comment (Name,Email,Comment) VALUES 
  ('$Name','$Email','$Comment')";
     $query_run = mysqli_query($connection, $query);
     header('Location: news-details.php');
     

}






//----------------------------------------------------------------------------------------------------------------------


?>