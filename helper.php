<?php 

require('../../config.php');
defined('MOODLE_INTERNAL') || die;
 require_login();

?>

<!DOCTYPE>

<html >

<head>


    <title>About</title>

<style type="text/css">
    


body{
        font-family:cursive;
        font-size:18px;
        font-weight: bold;
        line-height:1.5em;
}


#wrapper{

        width:960px;
        margin:0 auto;

    }


h1{
        margin: 0;
        font-size:18px;
        color: white;
        }



article{       
          text-align:justify;
       }


#main{

        width:100%;
        background:#eee;
        text-align: center;       
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


#sidebar{

        width:600px;
        float:left;
        }


#navigation {

    height: 40px;
    left:692px;
    position: absolute;
    top:31px;
    z-index:400;
    width: 271px;    

}

.nav {

    list-style-type: none;
    margin-left:140%;
    padding: 0;
}


#footer{

    float: center;
    padding: 40px 0 0;
    width: 100%;
    z-index: 100; 
    margin-bottom: 20px;
} 

        
#footer p{
        font-size:18px;
        text-align:center;
        line-height:22px;}  

</style>
 

  </head>
  <body >

    <div id="wrapper">

        <div id="mainbody">

            <div id="navigation">

                <div class="nav">

                    <ul>
                        <!--<a href="index.php?userid" style="color:whiite"><span style="color:white;text-decoration:underline;">Back</span></a>-->
                    </ul>
                </div>
            </div>

          
            <div id="main">
                <div class="about_page">
                        <div class="grey_bar">

                            <h1>MyFeedback Report</h1>

                        </div>

                        
                      <section>
                        <article>



A plugin, (previously known as an add-on, contributed code, or "contrib" for short), is code enabling you to add additional features and functionality to Moodle.
A number of plugins are included in the standard Moodle download. Additional plugins may be obtained from the Moodle plugins directory.
My Feedback is a single-view report that enables different staff and student roles to view a report of grades and feedback recorded in Moodle, across modules. The report includes Moodle Assignments, Turning Assignments, Workshops, Quizzes and Grade items entered directly in the Moodle course Gradebook. The report provides links to submissions and any feedback that has been released to students. Watch the video on how students can use the My Feedback report: 
The Moodle My feedback report appears in the My Profile > Activity Reports menu and allows students to see an overview of all their grades and feedback for assessment activities such as Moodle Assignments, Turning Assignments (v1 & v2), Workshops and Quizzes. It provides their visible grades and a link to their submission and any feedback that has been released to them. The feedback report displays this information in a searchable and sortable table. When clicking a link from this table, the user is directed to that course activity information (in some cases the link will be directly to the submission or feedback files - e.g. Turning Assignments open directly in a new window). When clicking on feedback this will usually take you to the user's result page for that activity
The report is intended to help students understand the variety of feedback they receive. It can also be used to identify similarities between feedback received from across modules and years to help students see how they can improve their work in future assessments. This is intended to be done in partnership with teaching staff (such as personal tutors at university, or a home group teacher in a school setting). See setting up staff access below.
When installed and enabled, My Feedback is available to students, personal tutors, teachers and departmental administrators.
Students can view feedback and grades from their assessments across all their UCL Moodle courses. - Personal tutors can see their tutees' full My Feedback reports across all the modules their students are studying. Note: personal tutors will not be able to link through to assessments on courses they do not have tutor access to. Personal tutors are assigned to students using the Moodle Parent role functionality. - Teachers can see My feedback reports for their students containing assessment information for any modules they teach and/or assess. They will not see any assessments for modules they do not teach (unless they have been granted teacher access to those Moodle courses). Departmental administrators can see My Feedback reports for all the Moodle courses within categories where they have been assigned departmental administrator access in Moodle. Categories in Moodle will either be for the entire department, or might be broken down further into undergraduate and postgraduate modules. This feature assumes your Moodle installation makes use of category enrolments.
 
<center>For more Information please read the user Manual</center>


                       </article>
                   </section>

                    </div>
                </div>
            </div>



    <div id="footer">

        <p style="color: black">

            <span>Moodle.org.</span></p>

      

    </div>

    

</body>

</html>

