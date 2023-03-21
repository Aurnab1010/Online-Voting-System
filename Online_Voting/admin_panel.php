<?php
require('connection.php');

session_start();

?>
<html><head>

</head><body bgcolor="#e6e6e6">

<center><b><font color = "red" size="6">Online Voting System</font></b></center><br><br>
<div id="page">
<div id="header">
<h1>Admin Panel </h1>

 <a href="result.php">Result</a> |  <a href="logout.php">Logout</a> |  <a href="candidate_reg.php">Candidate Registration</a>

</div>
<div id="container">
    <section>
        <div class="container">
            <div class="row">
                <div class="col-12 h-500 div-bg">
                    <div>
                        <h1 class="font-size-36 bebas">Features Of Online Voteing System:</h1>

                        <h2 class="font-size-36 bebas">For Voter</h2>
                        <li class="oleo">Easy Signup for voters.</li>
                        <li class="oleo">Single step login.</li>
                        <li class="oleo">Easy Voting methods.</li>

                        <h1 class="font-size-36 bebas">For Admin</h1>
                        <li class="oleo">Easy admin login.</li>
                        <li class="oleo">Candidate registration.</li>
                        <li class="oleo">See voting result.</li>
                        <li class="oleo">Publish Voting result.\\\NOT AVAILABLE</li>
                        <li class="oleo">Emergency voting freeze \\\NOT AVAILABLE.</li>


                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

</body></html>