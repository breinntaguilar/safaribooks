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
?>
<!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php echo 'Safari Books' ?>:
		<?php echo $title_for_layout; ?>
	</title>
	<?php
		echo $this->Html->meta('icon');

		echo $this->Html->css('templatemo_style');
		echo $this->Html->css('jquery-ui');
		
		echo $this->Html->script('jquery-1.10.2.min');
		echo $this->Html->script('jquery-ui.min');
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
				<li><?php echo $this->Html->link(__('Home'), array('controller' => 'books', 'action' => 'index'), array('style' => 'float: left')); ?></li>
				<li><?php echo $this->Html->link(__('Search'), array('controller' => 'books', 'action' => 'search'), array('style' => 'float: left')); ?></li>
				<li><?php echo $this->Html->link(__('Books'), array('controller' => 'books', 'action' => 'index'), array('style' => 'float: left')); ?></li>
				<li><?php echo $this->Html->link(__('New Releases'), array('controller' => 'books', 'action' => 'new_releases'), array('style' => 'float: left')); ?></li>
				<li><a style="float: left" href="#">Company</a></li>
				<li><?php echo $this->Html->link(__('Contact Us'), array('controller' => 'contacts', 'action' => 'index'), array('style' => 'float: left')); ?></li>
				<li><?php
					if (isset($this->Session->read('Auth')['User'])) {
						echo $this->Html->link(__('Logout'), array('controller' => 'users', 'action' => 'logout'), array('style' => 'float: right'));
					}
					else {
						echo $this->Html->link(__('Register'), array('controller' => 'users', 'action' => 'add'), array('style' => 'float: right'));
						echo $this->Html->link(__('Login'), array('controller' => 'users', 'action' => 'login'), array('style' => 'float: right'));
					}
				?></li>
				<li><?php
					if (isset($this->Session->read('Auth')['User'])) {
						echo $this->Html->link(__($this->Session->read('Auth')['User']['usrFname'] . ' ' . $this->Session->read('Auth')['User']['usrLname']),
							array('controller' => 'users', 'action' => 'view', $this->Session->read('Auth')['User']['usrID']), array('style' => 'float: right'));
					}
				?></li>
			</ul>
		</div>

		<div id="templatemo_header">
			<div id="templatemo_special_offers">
				...
			</div>
			<div id="templatemo_new_books">
				...
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
			<?php
				echo
					$this->Html->link(__('Home'), array('controller' => 'books', 'action' => 'index')) . ' | ' . 
					$this->Html->link(__('Search'), array('controller' => 'books', 'action' => 'search')) . ' | ' . 
					$this->Html->link(__('Books'), array('controller' => 'books', 'action' => 'index')) . ' | ' . 
					$this->Html->link(__('New Releases'), array('controller' => 'books', 'action' => 'new_releases')) . ' | ' . 
					$this->Html->link(__('Contact Us'), array('controller' => 'contacts', 'action' => 'index'));
				?>
				<br>
				Copyright © 2014 <strong>Safari Books</strong>
		</div>
	</div>
</body>
</html>
