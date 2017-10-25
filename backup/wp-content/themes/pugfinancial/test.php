<?php
/**
 * Template Name: testttt
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */






?>
<?php get_header(); ?>

		<form action="<?php the_permalink(); ?>" method="post" >
				
			
					<input type="text" name="myname"  value="<?php echo $_POST[myname];?>" />
					
					
					<input type="submit" value = " GO "  name = "ddfdf"  />
				
			</form>
			
		
		<form action="<?php the_permalink(); ?>"  method="post">
					
					
							<input type="text" name="nm"  value="<?php echo $_POST[nm];?>" />
						
							<input type="submit" name = "bbbb" value = "bbbbbbb" />
						
				</form>		
				
				
			
		

