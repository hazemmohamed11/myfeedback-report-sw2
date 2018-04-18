<?php

require_once('Observer.php');
require_once 'Subject.php';
require_once("Connect.php");


class Client implements Observer {
    


    public function View_Feedback() {

    define('DBHOST', '127.0.0.1');
    define('DBUSER', 'root');
    define('DBPASS', '');
    define('DBNAME', 'moodle');
     
    $conn = mysqli_connect(DBHOST,DBUSER,DBPASS,DBNAME);
    $dbcon = mysqli_select_db($conn,DBNAME);

    $result = mysqli_query($conn,"SELECT * from feedback where studentName=");

   echo "<table border='3'>
    <tr>
    <th>TeacherName</th>
    <th>Message</th>
    <th>Check</th>   

      </tr>";

while($row = mysqli_fetch_row($result))
{
	echo "<tr>";
echo "<td>" . $row[1] . "</td>";
echo "<td>" . $row[2] . "</td>";
echo "<td><a href=Respond.php ><p style=color:black>Respond</p></a></td>";
}


echo "</tr>";
echo "</table>";

           
    }

   

};
?>






<!DOCTYPE>

<html >

<head>


    <title>Rspond</title>

<style type="text/css">


table{
  border: 3px solid #eee;
  text-align:center;
  background-color: white;
  border-radius: 5px;
  width:90%; 
  font-style: italic;
  font-family: sans-serif;
  font-weight: bold;
  margin-top:5px;


}

th{
  background-color: black;
  color: white;
  padding:10px;
  text-align: center;
}
td
{
    padding:5px;
    border: 3px solid black;


}
tr
{
  background-color: #eee;
  border: 3px solid black;

}



dl, dt, dd,table,tr, th, td,h1{

    margin: 0;
    padding: 0;
    border: 0;
    outline: 0;    
    font-size: 100%;
    vertical-align: baseline; 
}


body{

        font-family:cursive;
        font-size:18px;
        font-weight: bold;
        color:#bb5544     
        line-height:1.5em;
        background-color:white;

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
  <body>

<br>
    <div id="wrapper">

        <div id="mainbody">

                      <!--  <a href="../index.php"><span style="color:white;text-decoration:underline;position:absolute;margin-top:2.5%;margin-left:65%">Back</span></a>-->
          
            <div id="main" style="text-align: center;">
                <div class="about_page">
                    <div class="about_items">
                        <div class="grey_bar">

                            <h1> Feedback</h1>

                        </div>

                        <h2> Message </h2>

                        <br />

                     <center>       


                        <?php

                          //$Connect=new Connect();
                          //$Connect->db_Connect();

                          $Client=new Client();

                          $Client->View_Feedback();
                        ?>
    </div>

</center>
</div>

    

</body>

</html>
