
<!DOCTYPE html>
<html>
<head>
    <link href="style.css" rel="stylesheet" type="text/css">
    <script defer src="script.js"></script>
</head>
<body>
    <div class="mainbox"> <!-- mainbox start --> 
       
    <?php include 'components/top-navigation.php';?>
        <div class="mainbox2"> <!-- mainbox2 start-->
        <?php include 'components/left-navigation.php';?>
            <div class="middlebox"> <!-- middlebox start-->
            <div class="contactusmainbox"> <!-- contactusmainbox start -->
        
        <div class="contactustitle"> <!-- contactustitle start -->
            <h1 class="contactustitletext">Contact Us</h1>
        </div> <!-- contactustitle end -->
        <form action="savedata.php" onsubmit= "return validateform()" method="post">
        <div class="contactusmainbox2"> <!-- contactusmainbox2 start -->
            <div class="contactusform1"> <!-- contactusform1  start -->
                <div class="form1box1"> <!-- form1box1 start -->
                    <h2 class="form1box1text">Name:</h2>
                </div> <!-- form1box1 end -->
                <div class="form1box2"> <!-- form1box2 start -->
                    <input  class="form1box2inputbox"  placeholder="Enter The Name Here" id="name" /> <!-- form1box2inputbox start -->
                    <p id="usererror" class="error"></p>
                </div> <!-- form1box2 end -->
            </div> <!-- contactusform1 end  -->

            <div class="contactusform2"> <!-- contactusform2 start -->
                <div class="form2box1"> <!-- form2box1 start -->
                    <h2 class="form2box1text">Email:</h2>
                </div> <!-- form2box1 end -->
                <div class="form2box2"> <!-- form2box2 start -->
                    <input class="form2box2inputbox" type="email" placeholder="Enter The Email Here" id="email" /> <!-- form2box2inputbox start -->
                    <p id="emailerror" class="error"></p>
                    
                </div> <!-- form2box2 end --> 
            </div> <!-- contactusform2 end -->


            <div class="contactusform3"> <!-- contactusform3 start -->
                <div class="form3box1"> <!-- form3box1 start -->
                    <h2 class="form3box1text">Phone No:</h2>
                </div> <!-- form3box1 end -->
                <div class="form3box2"> <!-- form3box2 start -->
                    <input class="form3box2inputbox" placeholder="Enter The Phone Here" id="phone" /> <!-- form3box2inputbox start -->
                    <p id="phoneerror" class="error"></p>
                </div> <!-- form3box2 end --> 
            </div> <!-- contactusform3 end -->

            
            <div class="contactusform4"> <!-- contactusform4 start -->
                <div class="form4box1"> <!-- form4box1 start -->
                   <h2 class="form4box1text">Message:</h2>
                </div> <!-- form4box1 end -->
                <div class="form4box2"> <!-- form4box2 start -->
                   
                        <textarea  name = "datamessage" class="textareatext" rows="2" cols="70"    placeholder="Enter The Message Here" id="message"></textarea> 
                        <p id="messageerror" class="error"></p>
                    
                </div> <!-- form4box2 end --> 
            </div> <!-- contactusform4 end -->

            <div class="contactussubmitbutton"> <!-- contactussubmitbutton start -->
                <button class="contactussubmitbuttonbox" type="submit"> <!-- contactussubmitbuttonbox start -->
                    <h2 class="contactussubmittext">Submit</h2>
                </button> <!-- contactussubmitbuttonbox end --> 
            </div> <!-- contactussubmitbutton end -->

            <div class="contactusfooter"> <!-- contactusfooter start -->
            </div> <!-- contactusfooter end -->

        </div> <!-- contactusmainbox2 end  -->
</form>
    </div> <!-- contactusmainbox end -->
            </div> <!-- middlebox end -->
            <?php include 'components/right-navigation.php';?>
        </div> <!-- mainbox2 end--> 
       <?php include 'components/footer.php';?>     
    </div><!-- mainbox end -->
</body>
</html>