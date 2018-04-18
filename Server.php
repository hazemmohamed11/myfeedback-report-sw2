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
    
   

   if(isset($_POST['sub']))
       
      {  
          $message=$_POST['message'];


    $sql=mysqli_query($conn,"INSERT INTO feedback(teacherName,message,StudentName)values((SELECT username from mdl_user where firstname='Mohammed' and lastname='ahmed'),'$message',(SELECT username from mdl_user where firstname='Adam' and lastname='Ali'))");

    $sql=mysqli_query($conn,"INSERT INTO feedback(teacherName,message,StudentName)values((SELECT username from mdl_user where firstname='Mohammed' and lastname='ahmed'),'$message',(SELECT username from mdl_user where firstname='Hamza' and lastname='Adel'))");



}

     if ($sql) {
        empty($_POST['message']);
        empty($_POST['sub']);
      }

     echo "<a href=Recive.php style=margin-top:4.4%;margin-left:73%;color:white;position:absolute>Check Message</a>";
}

}

  $server=new Server();
  $server->send_feedback();
?>
<!DOCTYPE>

<html>

<head>


    <title>Send Feedback</title>

<style type="text/css">
    


h1,table,tr, th, td {

    margin: 0;
    padding: 0;
    border: 0;
    outline: 0;   

}


body{

        font-family:cursive;
        font-size:18px;
        font-weight: bold;
        color:#bb5544     
        line-height:1.5em;

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
        float:left;
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
  <body bgcolor="white">

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

                            <h1>Send Feedback</h1>

                        </div>

                        <h2>Write your Message </h2>

                        <br />

                        

<form method="POST" action="">    
Message  <input type="text" name="message" style="width:50%;height:30%"><br><br>
<input type="submit" onclick="alert('feedback send successffully')" name="sub" value="Send" style="width:8%;height:6%;margin-left:8%;background-color:white;font-weight:bold;border-radius:20px" ><br><br>

</form>

</div>

</body>

</html>




   
    

