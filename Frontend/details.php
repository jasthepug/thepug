<?php include 'header.php';?>

<body>

<div class="background" style="display:none"></div>
<div class="tag"><img src="img/Logo-Final.png" class="logo-tag" /></div>
<div class="polaroid"><img src="img/pol-home.png" /></div>

<div id="container" >
   
   
   <div class="window">
           <div id="formcontent">
   				<div class="window-slog white">Get a quick quote</div>
               	<form action="firstform.php" method="post" id="firstformid">
               	<label for="male">What’s your first name?</label><input id="male" name="" type="text" class="textf" />
               	<label for="postcode">What is your Post Code?</label><input id="postcode" name="" type="text" class="textf" />
               	
               	<label for="income">What is the value of the Property you want to buy?</label><input id="income" name="" type="text" class="textf" />
                <label for="howmuch">How Much Do You Want To Borrow?</label><input id="howmuch" name="" type="text" class="textf lastb" />
               	<input type="submit" value="Submit" class="lastbutton firstform">
               	</form>
           </div>
   </div>
   
   <div class="clear"></div>

</div>


</div>

   <?php include 'footer.php';?>

</body>
</html>
