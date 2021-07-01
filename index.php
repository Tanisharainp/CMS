<?php
// session_start();
// if (!isset($_SESSION['email'])){
//     header('location: index.php');
// }

?>


<!-- Faults:
1.Hashed password isn't getting compared
2.Session in index.php -->




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>First page</title>
    <link rel="stylesheet" href="index.css">
</head>

<body>

    <nav>
        <h1 class="logo">CMS</h1>
        <ul>
            <li><a href="index.php" class="active">Home</a></li>
            <li><a href="howToComplain.html">Complain Procedure</a></li>
            <li><a href="ad_log.php">Admin</a></li>
            <li><a href="us_log.php">User</a></li>
        </ul>
    </nav>
    <div style="margin: 0px 150px;">
        <div class="heading">
            <h2 id="indexheading">Complaint Management System</h2>
        </div>
        <div style="font-weight: bold; font-size: 30px; margin: 10px 30px;">
            <h3 style="margin-left: 70px;">“Your most unhappy customers are your greatest source of learning” – Bill Gates.
            </h3>
    
        </div>
        <div class="content1">
            <img class="complaint" src="images/complaint.jpg" alt="">
            <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Many business owners go into a full-blown panic mode when they go
                through customer complaints. Others just get angry. Neither way is ideal. Instead, business owners should
                take a step back and firstly realize that customer complaints can be a good thing for your business. This is
                where a good customer complaint management process can change your perception of such
                complaints.</br></br><b>Most Customers Don’t Complain, They Just Leave</b></br>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Do you know that most customers don’t complain after a poor
                customer experience? In fact, only about 4% say anything. Keeping this in mind, any negative feedback should
                be carefully looked at and seen as a stepping stone. Every complaint you receive is an opportunity to
                salvage the relationship with that particular customer.</p>
    
        </div>
        <div class="content2">
            <p><b>A Customer Complaint Is an Opportunity to Improve Customer Loyalty</b><br>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Receiving a complaint is a great way to test how effective your
                complaint management process is and provides you with a unique opportunity to increase customer loyalty. If
                you handle the complaint properly, not only will you earn the loyalty of that particular customer in
                question but also of other customers who see how you handle these situations. In other words, by showing
                your customers you care and are willing to go out of your way to solve their problems, you turn them into
                loyal evangelists: customers who promote your brand to the outside world.
    
                <br><br><b>Complaints Can Shake Things Up</b><br>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Some companies can get stuck in a rut, and customer complaints can challenge this very same status quo,
                forcing you to come up with new ways of doing things. They can be the proverbial kick in the rear that will
                fuel your business to the next level.
            </p>
            <img src="images/content2.jpg" alt="" style="height: 300px; width: 600px; margin: 30px;">
        </div>
    </div>
    <footer class="footer">
        <h4 style="margin-left: 540px; padding: 30px; font-size: 17px;"> &copy;2020 COMPLAINT MANAGEMENT SYSTEM</h4>
     </footer>
</body>

</html>