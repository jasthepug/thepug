<?php
/**
 * Template Name: Apply
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */


get_header();


?>


<div class="row" style="min-height:100%;">
    <div class="container">
        <div class="col-md-offset-2 col-xs-12 col-md-8">
            <h1 class="text-center">Find Out More</h1>

            <!--<?php

            if ($_POST[sent] == "apply"){
                ?>
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12  Gotham " >
			<img src="<?php echo get_template_directory_uri(); ?>/img/tie.gif" /><br />
			THANKS, <?php echo strtoupper($_POST[my_name]); ?>. JUST ONE MORE STEP.
			<br /><br />
			Here it a checklist of documents you need to prepare for your application:
			</div>
		</div>
		<div class="row" style="color:#1D707B;padding:0 20%;margin-top:20px;">
			
					<div class="col-lg-12 col-md-12 col-sm-12 " style="background-color:#f8f8f8">
						<div class="row">
							<div class="col-lg-6 col-md-6 col-sm-12   "  >
							<span style="font-size:1.2em;">Id Documents:</span>
							<br /><br />
								<div style="margin-left:20%;text-align:left">
								<ul >
									<li style="list-style: disc inside;">DRIVE LICENSE</li>
									<li style="list-style: disc inside;">PASSPORT</li>
									<li style="list-style: disc inside;">MEDICARE</li>
								</ul>
								</div>
							</div>
							<div class="col-lg-6 col-md-6 col-sm-12   "  >
								<span style="font-size:1.2em;">Income Proofs:</span><br /><br />
							<div style="margin-left:20%;text-align:left">
								<ul >
									<li style="list-style: disc inside;">SALARY SLIPS</li>
									<li style="list-style: disc inside;">INCOME TAX RETURNS</li>
									
								</ul>
							</div>
							
							</div>
						</div>
					</div>
			
					
			</div>
			<div class="row" style="margin:30px 0px;line-height:1em;font-size:1.0em;" >
				<div class="col-lg-12 col-md-12 col-sm-12  Gotham " style="color:#1D707B;">
				<form id="myform" name="myform" action="../form.php" method="post" >
				<input type="hidden" name="sent" value="apply"  />
				
				<input type="hidden" name="my_name" value="<?php echo $_POST[my_name]; ?>"  />
				<input type="hidden" name="my_email" value="<?php echo $_POST[my_email]; ?>"  />
				<input type="hidden" name="my_phone" value="<?php echo $_POST[my_phone]; ?>"  />
				<input type="hidden" name="my_address" value="<?php echo $_POST[my_address]; ?>"  />
				<input type="hidden" name="my_value" value="<?php echo $_POST[my_value]; ?>"  />
				<input type="hidden" name="my_loan" value="<?php echo $_POST[my_loan]; ?>"  />
				
				I do not have <span style="font-style:italic;">income proofs</span> but I have 
				<input type="text" name="my_proofs" class="txtf_blue" style="max-width:400px;"  />
				<br /><br /><br />
				<span >Please give me a call around &nbsp; </span>
					<select name="time_preferred" >
						<option value="7AM-9AM">7AM - 9AM &nbsp; </option>
						<option value="9AM-12PM">9AM - 12PM &nbsp; </option>
						<option value="12PM-5PM">12PM - 5PM &nbsp; </option>
						<option value="5PM-9PM">5PM - 9PM &nbsp; </option>
					</select>
				&nbsp;  &nbsp; 	&nbsp;  	&nbsp; 	&nbsp; including weekend	&nbsp;  	
			<input type="checkbox" name="weekend"/> 
				
					<div style="margin:50px 0px;"><input type="submit" value=" SUBMIT APPLICATION " class="butt_blue"  /></div>
				</form>
				</div>
			</div>
			
			
			
		<?php
            }else{
            ?>
		--->
            <div class="text-center text-muted mt-4">Please provide your contact details along with some information
                relating to your
                loan requirements and a home loan expert will be in touch with you soon.
            </div>

            <!--<form id="myform" name="myform" action="<?php the_permalink(); ?>" method="post" >-->
            <form id="myform" class="mt-6 mb-6" name="myform" action="../form.php" method="post">
                <input type="hidden" name="sent" value="apply"/>
                <input type="hidden" name="my_interest" value="<?php echo $_POST[my_loan]; ?>"/>

                <div class="">
                    <div class="form-group">
                        <label for="firstName">First Name</label>
                        <input id="firstName" type="text" name="my_name" class="form-control" placeholder="Name*"/>
                        <div id='myform_my_name_errorloc' class="small text-danger"></div>
                    </div>
                    <div class="form-group">
                        <label for="lastName">Last Name</label>
                        <input id="lastName" type="text" name="my_last_name" class="form-control"
                               placeholder="Last Name*"/>
                        <div id='myform_my_last_name_errorloc' class="small text-danger"></div>
                    </div>
                    <div class="form-group">
                        <label for="emailId">Email</label>
                        <input id="emailId" type="text" name="my_email" class="form-control" placeholder="Email*"/>
                        <div id='myform_my_email_errorloc' class="small text-danger"></div>
                    </div>
                    <div class="form-group">
                        <label for="phone">Contact number</label>
                        <input type="text" id="phone" name="my_phone" class="form-control"
                               placeholder="Contact Number"/>
                    </div>
                    <div style="padding-left:10%;text-align:left;margin-top:40px;font-size:0.9em">Read our
                        <a style="font-size:0.7em;text-decoration:underline;"
                           href="<?php echo get_site_url(); ?>/privacy">PRIVACY POLICY</a>

                        <a href="<?php echo get_site_url(); ?>/security" style="margin-left:60px;">
                            <img src="http://www.thepug.com.au/wp-content/uploads/2015/09/ssl.gif"/> </a>
                    </div>
                    <div class="mt-6">

                        <div class="soft_div">

                            <!--
					<div class="row" >
					<div class="col-lg-5 col-md-5 col-sm-12  "  >	INTERESTED IN &nbsp; &nbsp;</div>
					<div class="col-lg-7 col-md-7 col-sm-12  "  ><select name="loans" >
						<option value=""></option>
						<?php
                            $loop = new WP_Query(array(
                                    'showposts' => 4,
                                    'post_type' => array('loan'),
                                )
                            );


                            while ($loop->have_posts()) : $loop->the_post(); ?>
							<option value="<?php the_title(); ?>"><?php the_title(); ?></option>

							  <?php endwhile;
                            wp_reset_postdata();
                            ?>
						</select></div>
					</div>-->


                            <div class="row">
                                <div class="col-lg-5 col-md-5 col-sm-12  ">CURRENT VALUE OF THE PROPERTY</div>
                                <div class="col-lg-7 col-md-7 col-sm-12  "> $ <input id="rangeValue1"
                                                                                     name="my_value"
                                                                                     style="border:0px;" type="text"
                                                                                     size="9"/> &nbsp;
                                    <input type="range" id="value" onchange="printValue('value','rangeValue1')"
                                           oninput="printValue('value','rangeValue1')" max="30" step="0.1"/>
                                </div>
                            </div>
                            <div class="row" style="margin-top:40px;">

                                <div class="col-lg-5 col-md-5 col-sm-12  ">LOAN REQUIRED</div>
                                <div class="col-lg-7 col-md-7 col-sm-12  "> $ <input id="rangeValue2" name="my_loan"
                                                                                     style="border:0px;" type="text"
                                                                                     size="9"/> &nbsp;
                                    <input type="range" id="loan" onchange="printValue('loan','rangeValue2')"
                                           oninput="printValue('loan','rangeValue2')" max="30" step="0.1"/>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="text-center mt-6">
                        <button class="btn btn-primary btn-lg pg-btn-wide-padding" type="submit" />Go</div>
                    </div>
                    <script>
                        function printValue(sliderID, textbox) {
                            var x = document.getElementById(textbox);
                            var y = document.getElementById(sliderID);
                            var mll = parseFloat(y.value);
                            mll = mll * 100000;
                            mll = Math.round(mll);
                            mll = mll.toString().replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,");
                            x.value = mll;
                        }

                        window.onload = function () {
                            printValue('value', 'rangeValue1');
                            printValue('loan', 'rangeValue2');
                        }
                    </script>
                </div>

            </form>

            <script language="JavaScript" type="text/javascript"
                    xml:space="preserve">//<![CDATA[
                var frmvalidator = new Validator("myform");
                frmvalidator.EnableOnPageErrorDisplay();

                frmvalidator.EnableMsgsTogether();
                frmvalidator.addValidation("my_name", "req", "Required Field");
                frmvalidator.addValidation("my_last_name", "req", "Required Field");
                frmvalidator.addValidation("my_email", "req", "Required Field");
                frmvalidator.addValidation("my_email", "email", "Enter a valid Email address");


                //]]></script>

            <?php } ?>
        </div>
    </div>
</div>


<?php get_footer(); ?>
