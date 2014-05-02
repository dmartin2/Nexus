<?php if (theme_get_setting('grid_display','nexus')): ?>
  <div class="button_grid"></div>
<?php endif; ?>
	<script type="text/javascript">
		jQuery(document).ready(function() {
			jQuery('#fullpage').fullpage({
				'verticalCentered': false,
				'css3': true,
				'slidesColor': ['#F0F2F4', 'lightblue', '#DDCCAA', '#AACCDD', '#F0A8C9'],
				'navigation': true,
				'navigationPosition': 'right',
				'navigationTooltips': [],
								
				'afterLoad': function(anchorLink, index){
					if(index == 2){
						jQuery('#iphone3, #iphone2, #iphone4').addClass('active');
					}					
				},
				
				'onLeave': function(index, newIndex, direction){
					if (index == 3 && direction == 'down'){
						jQuery('.section').eq(index -1).removeClass('moveDown').addClass('moveUp');
					}
					else if(index == 3 && direction == 'up'){
						jQuery('.section').eq(index -1).removeClass('moveUp').addClass('moveDown');
					}
					
					jQuery('#staticImg').toggleClass('active', (index == 2 && direction == 'down' ) || (index == 4 && direction == 'up'));
					jQuery('#staticImg').toggleClass('moveDown', index == 3 && direction == 'down');	
				}
			});
		});
	</script>


<? 
$_SESSION['count'] = 0;
?>

<?php if (!empty($title)): ?>
  <h3><?php print $title; ?></h3>
<?php endif; ?>
   <div id="fullpage">  
<?php foreach ($rows as $id => $row): ?>

  
      <?php print $row; ?>
		</div>
			</div>
		</div>
<?php endforeach; ?>
    </div>