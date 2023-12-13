<?php

include_once ('sendgrid/mail2/sendgrid-php.php');

//$to="Info@tertiaryglobal.com";
$to="selva.thanvitechnologies@gmail.com";
$from="microwebzc@gmail.com";//config pana email
// $from="selva.thanvitechnologies@gmail.com";
$name = $_POST['name'];
$email = $_POST['email'];
//$mobile = $_POST['mobile'];
$message = $_POST['message'];
$date = date("d-m-Y");
$message='<img src="https://microwebz.demolink.co.in/annapoornaainterio/demo/img/logo/annapoorna-logo.jpg"><table id="customers">
 
  <tr>
    <td>Name</td>
    <td>'.$name.'</td>
   
  </tr>
  <tr>
    <td>Email</td>
    <td>'.$email.'</td>
   
  </tr>
  
  <tr>
    <td>Message</td>
    <td>'.$message.'</td>
   
  </tr>
  <tr>
    <td>Date</td>
    <td>'.$date.'</td>
   
  </tr>
  
</table><style>
#customers {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 20%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #04AA6D;
  color: white;
}
</style>';
// $t=0;
// foreach($qyt as $qty1)
// {
//   $getrat1=$getrat[$t];
//   $tot1=$tot[$t];
//   $pro1=$pro[$t];
//   if($qty1!='') {
// $message .="<tr>
// <td>".$pro1."</td>
// <td>".$tot1."</td>
// <td>".$getrat1."</td>
// </tr>";
// }
// $t++;

// }

echo $message;
exit;

$subject = "tertiaryglobal";
$res = sendgridApiMail($to, $message, $subject, $from, '');
        if ($res->statusCode() == '202') 
        {
       echo '<script>alert("Send successfully")</script>'; 
       header('location:contact.php');
       }
        else
        {
          echo "failed";
          if($res->statusCode() == '400')
          {
            echo "Bad request";   
          }
          if($res->statusCode() == '401')
          {
            echo "Requires authentication";   
          }
          if($res->statusCode() == '406')
          {
            echo "Missing Accept header. For example: Accept: application/json";   
          }
          if($res->statusCode() == '429')
          {
            echo "Too many requests/Rate limit exceeded";   
          }
          if($res->statusCode() == '500')
          {
            echo "Internal server error";   
          }

        }
        header('location:contact.php');
        ?>


