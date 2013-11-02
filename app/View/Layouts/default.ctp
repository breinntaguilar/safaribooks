<?php
/**
 *
 * PHP 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

$cakeDescription = __d('cake_dev', 'CakePHP: the rapid development php framework');
?>
<!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php echo $cakeDescription ?>:
		<?php echo $title_for_layout; ?>
	</title>
	<?php
		echo $this->Html->meta('icon');

		echo $this->Html->css('templatemo_style');
		echo $this->Html->script('jquery-1.10.2.min');
		echo $this->Html->script('jquery.flexible.stars');
		echo $this->Html->script('additional');

		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>
</head>
<body>
	<div id="templatemo_container">
		<div id="templatemo_menu">
			<ul>
				<li><a href="index.html" class="current">Home</a></li>
				<li><a href="subpage.html">Search</a></li>
				<li><a href="subpage.html">Books</a></li>            
				<li><a href="subpage.html">New Releases</a></li>  
				<li><a href="#">Company</a></li> 
				<li><a href="#">Contact</a></li>
			</ul>
		</div>
		
		<div id="templatemo_header">
			<div id="templatemo_special_offers">
				Test
			</div>
			
			<div id="templatemo_new_books">
				Test
			</div>
		</div>
		
		<div id="templatemo_content">
			<!-- <div id="templatemo_content_left">
				<div class="templatemo_content_left_section">
					<h1>Payment Methods</h1>
					<img src="img/payment.png" title="Payment Methods" alt="Payments Methods" width=145>
				</div>
			</div> -->
			
			<?php echo $this->Session->flash(); ?>
			<?php echo $this->fetch('content'); ?>
			
			<div class="cleaner_with_height">&nbsp;</div>
		</div>
		
		<div id="templatemo_footer">
			<a>Home</a> | <a>Search</a> | <a>Books</a> | <a>New Releases</a> | <a>FAQs</a> | <a>Contact Us</a><br />
			Copyright © 2013 <a><strong>Safari Books</strong></a>
		</div>
	</div>
</body>
</html>
