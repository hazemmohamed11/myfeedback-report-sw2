<?php

require_once("Subject.php");
require_once("Connect.php");


class Server implements Subject {

      public $sql;
      public $message;
      public $about;


    
    public function send_feedback()
    {
       

    define('DBHOST', '127.0.0.1');
    define('DBUSER', 'root');
    define('DBPASS', '');
    define('DBNAME', 'moodle');
     
    $conn = mysqli_connect(DBHOST,DBUSER,DBPASS,DBNAME);
    $dbcon = mysqli_select_db($conn,DBNAME);
    $result = mysqli_query($conn,"SELECT username from mdl_user where id=5");
    $row=mysqli_fetch_row($result);
    echo "<p style=position:absolute;margin-left:43%;margin-top:12%>TeacherName : " . $row[0] . "</p>";
    
         if(isset($_POST['sub']))
       {
          $message=$_POST['message'];

    $sql1=mysqli_query($conn,"SELECT studentName from mdl_user where teacherName='Mohammed'");
     if ($sql) {
        empty($message);
}
}


    }


    
}

  $server=new Server();
  $server->send_feedback();
?>
<!DOCTYPE>

<html>

<head>


    <title>Respond</title>

<style type="text/css">
    


h1 {

    margin: 0;
}


body{
        font-family:cursive;
        font-size:18px;
        font-weight: bold;
        line-height:1 em;
}


#wrapper{

        width:960px;
        margin:0 auto;
    }


h1{
        font-size:18px;
        color: white;
        text-transform:capitalize;
        line-height:28px;
        text-align:center;
        }


#main{

        width:100%;
        background:#eee;       

            }

.about_page{

        width:930px;
        padding:15px 0px 0px 0px;
        margin:1px 0px 0px 15px;
        }

    

.grey_bar{

        width:898px;
        height:22px;
        background:#262626;
        margin-bottom:20px;
        padding:18px 15px 15px 15px;}
        }


</style>
 

  </head>
  <body bgcolor="white" style=>

<br>
    <div id="wrapper">

        <div id="mainbody">

                        <!--
                        <a href="../index.php?$userid=$id"><span style="color:white;text-decoration:underline;position:absolute;margin-top:2.5%;margin-left:65%">Back</span></a>
                        -->

              

          
            <div id="main" style="text-align: center;">
                <div class="about_page">
                    <div class="about_items">
                        <div class="grey_bar">

                            <h1>respoond to this Feedback</h1>

                        </div>

                        <h2>Write your Message </h2>

                        <br/><br/>
                        <br/>
                        
                        <p>Message</p>


<form method="POST" action="">    
  <input type="textarea" name="message" style="width:50%;height:30%" ><br><br>
<input type="submit" name="sub" value="Send" onclick="alert('Message Send Successffully')" style="width:8%;height:6%;margin-left:2%;background-color:white;font-weight:bold;border-radius:20px"><br><br>

</form>

</div>

</body>

</html>




   
    

