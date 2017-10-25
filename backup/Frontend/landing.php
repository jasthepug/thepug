<?php include 'header.php';?>

<body>

<div id="container">
   <header>
       <img class="logo" src="img/Logo-Final.png" alt="" />
  
   <div class="info lastright">Customer Rating<br />
           <div class="evaluation">
               <img class="paw lastright mobilenomargin" src="img/Paw.jpg" alt="" />
               <img class="paw" src="img/Paw.jpg" alt="" />
               <img class="paw" src="img/Paw.jpg" alt="" />
               <img class="paw" src="img/Paw.jpg" alt="" />
               <img class="paw" src="img/Paw.jpg" alt="" />
               <div class="clear"></div>
           </div>
   </div>
       <div class="info">Loans Approved<br />
         <span class="big_font">$300.000.000</span></div>
           <div class="clear"></div>
   </header>
   <div id="body">
      		<img id="pug" src="img/Web-Pug.jpg" />
            
            <div class="drop settings">
           <div class="dropdown">
  <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown">
    <span class="glyphicon glyphicon-cog"></span>
    <span class="caret"></span>
  </button>
  <ul class="dropdown-menu dropdown-menu-right" role="menu" aria-labelledby="dropdownMenu1">
    <li role="presentation"><a role="menuitem" tabindex="-1" href="login">Login</a></li>
  </ul>
</div>

   </div>

        <div id="cbp-qtrotator" class="cbp-qtrotator">
            <div class="cbp-qtcontent">
              <p class="slogans">When Banks Fight for Your Loan, You Win !!</p>
            </div>
            <div class="cbp-qtcontent">
              <p class="slogans">Get the banks to apply for you...</p>
            </div>
            <div class="cbp-qtcontent">
              <p class="slogans">Home Loans Easy Peasy !</p>
            </div>
        <div class="_b">
        <div class="main_b"><a class="mainajax" href="details">REFINANCE</a></div>
        <div class="main_b"><a class="mainajax" href="details">GET A LOAN</a></div>
        <div class="clear"></div>
        </div>
    	</div>
    <div class="_bm">
        <div class="main_b"><a href="details">REFINANCE</a></div>
        <div class="main_b"><a href="details">GET A LOAN</a></div>
        <div class="clear"></div>
        </div>    
   	</div>
              <div class="clear"></div>

</div>
   <?php include 'footer.php';?>

		<script>
			$( function() {
				/*
				- how to call the plugin:
				$( selector ).cbpQTRotator( [options] );
				- options:
				{
					// default transition speed (ms)
					speed : 700,
					// default transition easing
					easing : 'ease',
					// rotator interval (ms)
					interval : 8000
				}
				- destroy:
				$( selector ).cbpQTRotator( 'destroy' );
				*/

				$( '#cbp-qtrotator' ).cbpQTRotator();

			} );
		</script>

</body>
</html>
