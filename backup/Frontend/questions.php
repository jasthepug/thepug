<?php include 'header.php';?>

<body>
<div class="background visible"></div>
<div class="tag visible"><img src="img/Logo-Final.png" class="logo-tag" /></div>
<div class="steps-pol"><img src="img/STAP-6.png"/></div>
        
<div id="container">
   
   
   
   <div class="window det autolheight">
		  
           <form method="post" id="wizard" action="details-action.php">
			
			<fieldset> 
			<legend>Property</legend>
			   <input id="male" name="" type="text" class="textfl textfleft" value="Where is this new property?" />
			   <input id="postcode" name="" type="text" class="textfl" value="Is it a new home? An Investment Property?"/>
			</fieldset>
			
			<fieldset> 
			<legend>Property</legend>
			   <input id="male" name="" type="text" class="textfl textfleft" value="What is the purchase price of the new property?"/>
			   <input id="postcode" name="" type="text" class="textfl" value="How much settlement fee are they taking?" />
			   <input id="howmuch" name="" type="text" class="textfl textfleft" value="What are the solicitor’s fees?" />
			   <input id="income" name="" type="text" class="textfl" value="And the stamp duty?" />
			   <input id="income" name="" type="text" class="textfl textfleft" value="Are you making any paid deposit?" />
			   <input id="income" name="" type="text" class="textfl" value="How much cash contribution?" />
			   <input id="income" name="" type="text" class="textfl textfleft" value="What is the limit sought?" />
			</fieldset>
			
			<fieldset> 
			<legend>Employment</legend>
			   <input id="male" name="" type="text" class="textfl textfleft" value="What sector do you work in?" />
			   <input id="postcode" name="" type="text" class="textfl" value="What’s your occupation?" />
			   <input id="howmuch" name="" type="text" class="textfl textfleft" value="Type of contract?" />
			   <input id="income" name="" type="text" class="textfl" value="How long have you been employed at this company?"/>
			   <input id="postcode" name="" type="text" class="textfl textfleft" value="What’s the company name?" />
			   <input id="howmuch" name="" type="text" class="textfl" value="Address?" />
			   <input id="income" name="" type="text" class="textfl textfleft" value="Who can be contacted there? Number?"/>
			</fieldset>
			
			<fieldset> 
			<legend>Employment</legend>
			   <input id="male" name="" type="text" class="textfl textfleft" value="What was your previous situation" />
			   <input id="postcode" name="" type="text" class="textfl" value="Which company were you working for?" />
			   <input id="howmuch" name="" type="text" class="textfl textfleft" value="Who can be contacted there? Number?"/>
			</fieldset>
			
			<fieldset> 
			<legend>Financial</legend>
				<input id="male" name="" type="text" class="textfl textfleft" value="What do you own"/>
				<input id="male" name="" type="text" class="textfl" value="Cash assets" />
				<input id="male" name="" type="text" class="textfl textfleft" value="Property assets"/>
				<input id="male" name="" type="text" class="textfl" value="Present Value of the property assets" />
				<input id="male" name="" type="text" class="textfl textfleft" value="Number of Motor Vehicules" />
				<input id="male" name="" type="text" class="textfl" value="Present Value of Motor Vehicules" />			
			</fieldset>
			
			<fieldset> 
			<legend>Financial</legend>
				<input id="male" name="" type="text" class="textfl textfleft" value="Do you have existing loans?" />
				<input id="male" name="" type="text" class="textfl" value="What’s the total amount?" />
				<input id="male" name="" type="text" class="textfl textfleft" value="What type?" />
				<input id="male" name="" type="text" class="textfl" value="Any credit card debt?" />
				<input id="male" name="" type="text" class="textfl textfleft" value="Any outstanding taxation?" />		
			</fieldset>
			
			<fieldset> 
			<legend>Financial</legend>
				<input id="male" name="" type="text" class="textfl textfleft" value="What’s your total household income? Just a ball park." /
				<input id="male" name="" type="text" class="textfl textfleft" value="Do you do overtime on a regular basis? How much?" />
				<input id="male" name="" type="text" class="textfl " value="Any government benefits? How Much?" />
				<input id="male" name="" type="text" class="textfl textfleft" value="Any dividends? Interests? How Much?" />
				<input id="male" name="" type="text" class="textfl" value="Receiving any rent? How Much?" />
				<input id="male" name="" type="text" class="textfl textfleft" value="Do you get any commission? How Much?" />		
			</fieldset>
			
			<fieldset> 
			<legend>Financial</legend>
				<input id="male" name="" type="text" class="textfl textfleft" value="How much is your total monthly repayment?"/>
				<input id="male" name="" type="text" class="textfl" value="Approximate living expenses?" />
				<input id="male" name="" type="text" class="textfl textfleft" value="Are you renting? How much do you pay?" />
				<input id="male" name="" type="text" class="textfl" value="How much is your insurance?" />
				<input id="male" name="" type="text" class="textfl textfleft" value="How many child do you have?" />
			</fieldset>
			
			<fieldset> 
			<legend>Personal</legend>
				<input id="male" name="" type="text" class="textfl textfleft" value="Mr/Mrs" />
				<input id="male" name="" type="text" class="textfl" value="What’s your name?" />
				<input id="male" name="" type="text" class="textfl textfleft" value="How old are you?" />
				<input id="male" name="" type="text" class="textfl" value="What’s your Driver’s License number?" />
				<input id="male" name="" type="text" class="textfl textfleft" value="Are you married?" />
				<input id="male" name="" type="text" class="textfl" value="What’s your address?" />
				<input id="male" name="" type="text" class="textfl textfleft" value="Approximate living expenses?" />
				<input id="male" name="" type="text" class="textfl" value="What’s the best number to contact you?" />
				<input id="male" name="" type="text" class="textfl textfleft" value="When is best?" />
				<input id="male" name="" type="text" class="textfl" value="Any email address?" />
			</fieldset>
			
		   <input type="submit" id="SubmitForm" value="Submit" class="bigbutton">
			
           </form>
   </div>
   
   <div class="clear"></div>

   
</div>
   <?php include 'footer.php';?>

</body>
</html>
