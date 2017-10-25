<?php include 'header.php';?>


<body>
<div class="background visible"></div>
<div class="polaroid"><img src="img/pug-coff.png" /></div>
<div class="tag visible"><img src="img/Logo-Final.png" class="logo-tag" /></div>
        
<div id="container">

   <div id="body">
        <div class="coffee-main">
            <div class="window-coffee"><img src="img/corner.png" class="corner"/>
            All Right!<br />
            You might want to grab yourself a coffee and sit comfortably. You’re about to get the banks to work for you.
            But before that, we need to go through the essential info.
            </div>
               <div class="clear"></div>
            <div class="window-coffee-form">
            <form action="signup.php" method="post" id="userform">
            <input name="user" type="text" onClick="this.value='';" onFocus="this.select()" 
            onblur="this.value=!this.value?'choose a username':this.value;" value="choose a username" />
            <input name="pwd" type="text" onClick="this.value='';" onFocus="this.select()" 
            onblur="this.value=!this.value?'choose a password':this.value;" value="choose a password" />
            <input type="submit" style="position: absolute; left: -9999px; width: 1px; height: 1px;"/>
            </form>
            </div>
               <div class="clear"></div>
        </div>
   </div>
   <div class="clear"></div>
   
</div>
   <?php include 'footer.php';?>

</body>
</html>
