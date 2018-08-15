<?php require 'form.php';?>
<html>
<head>
    <title>HBTU Times</title>
    <script src="https://code.jquery.com/jquery-3.2.1.js"></script>
    <script src="hbtutimes.js"></script>
    <link rel="stylesheet" href="hbtutimes.css" type="text/css" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> 
    
</head>


    
<body>
            <section class="wrapper">
                
                    <div class="logo1"><span class="hbtu">HBTU </span> <span class="times"> Times</span>
                    </div>
                    <div class="logo2"><span class="hbtu">H</span> <span class="times"> T</span>
                    </div>
                    <input class="button1" type="button" name="login" value="LOG IN"/>
                    
                    <input class="button2" type="button" name="signup" placeholder="signup" value="SIGN UP"/>
            </section>
   
  
    <section class="box">
            <section class="content">
                <div class="p1">
                    <p>
                        <span class="hello">Hello </span><br />
                        <span class="hello">Harcortians </span><br />
                        <span class="welcome">Welcome to HBTU Times! <br/>
                          Here at HT You will Get all the related stuff of our university.<br />
                          <a href="#">LOG IN</a> or <a href="#">SIGN UP</a> for HT to access all features of HT.
                        </span>
                    </p>
                </div>
                <div class="p2">
                    <div class="signup-box">
                        <form action="#" method="POST">
                            <div class="alert alert-error"><?= $_SESSION['message'];?></div>
                            <input id="name" type="text" size="20" name="first-name" placeholder="First Name" required="required" />
                            <input id="name" type="text" size="20" name="last-name" placeholder="Last Name" required="required" />
                            <input type="text" size="10" name="roll-no" placeholder="Roll No.*" required="required" />
                            <input type="text" size="40" name="email" placeholder="EMail I'd" />
                            <input type="radio" name="gender" value="male" placeholder="Male" /><span id="m-f"> Male </span>
                            <input type="radio" name="gender" value="female" /> <span id="m-f">Female </span>                                  <br />
                            <blockquote><span style="color:grey">DOB</span> 
                            <input type="date" placeholder="date" name="date">
                            </blockquote>
                             <!-- <span id="dob"> Date Of Birth: </span> <br/>
                            <select name="day">
                                <option selected="selected">Day</option> 
                                <option value="01">01</option> 
                                <option value="02">02</option> 
                                <option value="03">03</option>
                                <option value="04">04</option>
                                <option value="05">05</option>
                                <option value="06">06</option>
                                <option value="07">07</option> 
                                <option value="08">08</option> 
                                <option value="09">09</option> 
                                <option value="10">10</option> 
                                <option value="11">11</option> 
                                <option value="12">12</option> 
                                <option value="13">13</option> 
                                <option value="14">14</option> 
                                <option value="15">15</option> 
                                <option value="16">16</option> 
                                <option value="17">17</option> 
                                <option value="18">18</option> 
                                <option value="19">19</option> 
                                <option value="20">20</option> 
                                <option value="21">21</option> 
                                <option value="22">22</option> 
                                <option value="23">23</option> 
                                <option value="24">24</option> 
                                <option value="25">25</option> 
                                <option value="26">26</option> 
                                <option value="27">27</option> 
                                <option value="28">28</option> 
                                <option value="29">29</option> 
                                <option value="30">30</option> 
                                <option value="31">31</option>
                            </select> 
                            <select name="month">
                                <option selected="selected">Month</option> <option value="january">January</option> <option value="february">February</option> <option value="March">March</option> <option value="april">April</option> <option value="may">May</option> <option value="june">June</option> <option value="july">July</option> <option value="august">August</option> <option value="September">September</option> <option value="october">October</option> <option value="november">November</option> <option value="december">December</option>
                            </select>
                            <select name="year">
                                    <option selected="selected">Year</option> <option value="2017">2017</option> <option value="2016">2016</option> <option value="2015">2015</option> <option value="2014">2014</option> <option value="2013">2013</option> <option value="2012">2012</option> <option value="2011">2011</option> <option value="2010">2010</option> <option value="2009">2009</option> <option value="2008">2008</option> <option value="2007">2007</option> <option value="2006">2006</option> <option value="2005">2005</option> <option value="2004">2004</option> <option value="2003">2003</option> <option value="2002">2002</option> <option value="2001">2001</option> <option value="2000">2000</option> <option value="1999">1999</option> <option value="1998">1998</option> <option value="1997">1997</option> <option value="1996">1996</option> <option value="1995">1995</option> <option value="1994">1994</option> <option value="1993">1993</option> <option value="1992">1992</option> <option value="1991">1991</option> <option value="1990">1990</option> <option value="1989">1989</option> <option value="1988">1988</option> <option value="1987">1987</option> <option value="1986">1986</option> <option value="1985">1985</option> <option value="1984">1984</option> <option value="1983">1983</option> <option value="1982">1982</option> <option value="1981">1981</option> <option value="1980">1980</option> 
                            </select> <br /> -->
                            <input type="password" name="password" size="20" placeholder="Create Password" required="required" />
                            <input type="password" name="password2" size="20" placeholder="Confirm Password" required="required" />
                        <input type="submit" name="Sign Up" placeholder="Sign Up " value="Sign Up for HT" />
                        </form>
                    </div>
                </div>
                </section>
           
        <div class="slider">
                <img src="pictures/ht1.jpg" >
                <img src="pictures/ht2.jpg" >
                <img src="pictures/ht3.jpg" >
                <img src="pictures/ht5.png" >
            
        </div>
    </section>
    
    <section class="sec1">
        
            <img src="pictures/news.png" id="img1"> 
        
        <p id="body-p1">
            <span id="h">H</span>BTU TIMES is the official site for each action occurring in our college.
             Our sole reason for existing is to spread mindfulness among Harcourtians about up and coming occasions, news, sports, fests and all that you should know as a Harcourtian.
              We will focus on the diverse kind of exercises and make the clubs dynamic to build up the general identity and help you in your future. 
        </p>

        <p id="body-p2">
                HBTU TIMES is the place to come on the off chance that you are keen on the official clubs built up in the college.
                 A portion of the dynamic clubs in the college are E-CELL, Nukkad, Aeroclub, Harcourtian F.C., Decoder, Kalakriti, Q-Frat and HBTU Confessions.
                  To stay in the dash of these and alternate clubs, you simply need to visit HBTU TIMES.
                  Our college has tutors for each movement and you can reach them here.

        </p>

        <img src="pictures/clubs.png" id="img2">
        
        <p id="body-p3">
                The essential establishment for each instructive organization is to give great key training as well as enhance them in the extracurricular movement and help them to assemble identity.
                 As a piece of the Harcourtian family, we discover it our obligation to help you inside and out.
        </p>
        <img src="pictures/reading.png" id="img3">

        <img src="pictures/education.png" id="img4">
    </section>

 <footer>
    <div class="footer">
        <div class="footer-div1">
            <h2>Quick Links</h2>
            <a href="#">about</a>
            <a href="#">HBTU official page </a>
            <a href="#">our team</a>
            <a href="#" id="footer-log-in">log in</a>
            
        </div>
        <div class="footer-div2"> <h2>Get us on</h2><br/>
            <a href="#" class="fa fa-facebook"></a>
            <a href="#" class="fa fa-twitter"></a>
            <a href="#" class="fa fa-google"></a>
            <a href="#" class="fa fa-linkedin"></a><br>
            <a href="#" class="fa fa-youtube"></a>
            <a href="#" class="fa fa-instagram"></a>
        </div>
        <div class="footer-div3">
           <h2>Contact Us</h2><br>
           <img src="icons/location-icon.png">
             HBTU East Campus, Nawabganj,
            <span id="pincode">Kanpur, U.P </span><br><span id="pincode">208002</span><br>
            <img src="icons/email-icons.png">
            admin@hbtutimes.com<br>
            <img src="icons/mobile-icon.png">
            +91 8126560602<br>
        </div>
        <div class="footer-div4">
            Copyright @ Sky Incorporates <br />
            Developers: HBTU Times Team
        </div>
    </div>
 </footer>



</body>
</html>
