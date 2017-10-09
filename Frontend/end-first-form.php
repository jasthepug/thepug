<?php include 'header.php';?>


<body>

<div class="tag">
   		<img src="img/Logo-Final.png" class="logo-tag" />
</div>

<div id="container">
   
   
   
   <div class="window">
		   <div id="formcontent">
               <div class="window-slog">Thanks!!</div>
               <div class="small-form">
               <div style="text-align:center !important;">Who would you like me to bite?</div>
                   <form action="thanks-action.php" method="post" id="secformid">
                   <input type="radio" name="who" value="big4">The Big 4 Banks<br><br />
                   <input type="radio" name="who" value="bestd">The Best Deal<br><br />
                   <input type="radio" name="who" value="quickest">The Quickest to Respond<br /><br />
                   <input type="submit" value="Submit" class="bigbutton spaced">
                   </form>
               </div>
           </div>
   </div>
   
   <div class="clear"></div>
   
</div>

   <?php include 'footer.php';?>

</body>
</html>
