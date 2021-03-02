<?php
if(isset($_POST['email']) && $_POST['email']!="")
{
  if (filter_var($_POST['email'],FILTER_VALIDATE_EMAIL)){
    $useremail = $_POST['email'];
    $username = $_POST['name'];
    $usermessage = $_POST['message'];

    $to = $useremail;
    $body = "";
    $body .= "From: ".$useremail."\r\n";
    $body .= "Username: ".$username."\r\n";
    mail($to,$body,$usermessage);
    }
}

?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Contact form</title>
    <style >
    *{
      margin: 0;
      padding: 0;
    }
      .input{
        position: fixed;
        background: #2ff;
        height: 100%;
        width: 100%;
        display: flex;
        justify-content: center;
        align-items: center;
      }
      .h{
        justify-content:flex-end;
        align-items: baseline;
        font-family:cursive;
      }
      .form{
        background: lightgrey;
        border: black solid 2px;
        box-sizing: border-box;
        font-size: 20px;
        font-family: cursive, Helvetica, sans-serif;
      }
      input,textarea{
        border-radius: 4px;
        border-style:groove;
        box-sizing: border-box;
      }
    </style>
  </head>
  <body>
    <div class="input">
    <form class="form" action="contact.php" method="post">
        <table>
          <tr>
            <td><h2 style="text-align:center">Contact form</h2></td></tr>
          <tr>
            <td>
        <label class="in" for="email">Email </label>
        <input type="email" name="email" size="50" required></td>
        </tr>
        <tr>
          <td>
        <label class="in" for="username">Name</label>
        <input type="text" name="name"  size="50" required></td>
        </tr>
        <tr>
          <td>
        <label class="in" for="message" >Message</label><br>
        <textarea name="message" rows="8" cols="70" value="Message" size="50"
         required
        ></textarea></td>
        </tr>
        <tr>
          <td>
        <label for="submit"></label>
        <input type="submit" name="submit" value="Submit" style="font-family:cursive"></td>
        </tr>
        </table>

    </form>
    </div>

  </body>
</html>
