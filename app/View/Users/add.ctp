<div id="templatemo_content_left">
	<div class="templatemo_content_left_section">
		<h1><?php echo __('Actions'); ?></h1>
		<ul>
			<?php
				if (isset($this->Session->read('Auth')['User']) && $this->Session->read('Auth')['User']['usrRole'] === '1') {
					echo '<li>' . $this->Html->link(__('List Books'), array('controller' => 'books', 'action' => 'index')) . '</li>';
					echo '<li>' . $this->Html->link(__('List Active Coupons'), array('controller' => 'coupons', 'action' => 'index')) . '</li>';
				}
				elseif (isset($this->Session->read('Auth')['User']) && $this->Session->read('Auth')['User']['usrRole'] === '2') {
					echo '<li>' . $this->Html->link(__('List Customers'), array('controller' => 'users', 'action' => 'index')) . '</li>';
					echo '<li>' . $this->Html->link(__('Register Customer'), array('controller' => 'users', 'action' => 'add')) . '</li>';
				}
				elseif (isset($this->Session->read('Auth')['User']) && $this->Session->read('Auth')['User']['usrRole'] === '3') {
					echo '<li>' . $this->Html->link(__('Register User'), array('controller' => 'users', 'action' => 'add')) . '</li>';
					echo '<li>' . $this->Html->link(__('List Users'), array('action' => 'index')) . '</li>';
				}
			?>
			<li><?php echo $this->Html->link(__('List Credits'), array('controller' => 'credits', 'action' => 'index')); ?> </li>
			<li><?php echo $this->Html->link(__('New User Credit'), array('controller' => 'credits', 'action' => 'add')); ?> </li>
			<li><?php echo $this->Html->link(__('List Carts'), array('controller' => 'carts', 'action' => 'index')); ?> </li>
			<li><?php echo $this->Html->link(__('New User Cart'), array('controller' => 'carts', 'action' => 'add')); ?> </li>
			<li><?php echo $this->Html->link(__('List Checkouts'), array('controller' => 'checkouts', 'action' => 'index')); ?> </li>
			<li><?php echo $this->Html->link(__('New User Checkout'), array('controller' => 'checkouts', 'action' => 'add')); ?> </li>
			<li><?php echo $this->Html->link(__('List Reviews'), array('controller' => 'reviews', 'action' => 'index')); ?> </li>
			<li><?php echo $this->Html->link(__('New User Review'), array('controller' => 'reviews', 'action' => 'add')); ?> </li>
			<li><?php echo $this->Html->link(__('List Wishlists'), array('controller' => 'wishlists', 'action' => 'index')); ?> </li>
			<li><?php echo $this->Html->link(__('New User Wishlist'), array('controller' => 'wishlists', 'action' => 'add')); ?> </li>
			<li><?php echo $this->Html->link(__('List Procures'), array('controller' => 'procures', 'action' => 'index')); ?> </li>
			<li><?php echo $this->Html->link(__('New User Procure'), array('controller' => 'procures', 'action' => 'add')); ?> </li>
		</ul>
	</div>
	<?php
		if (isset($this->Session->read('Auth')['User']) && $this->Session->read('Auth')['User']['usrRole'] === '3') {
			echo '<div class="templatemo_content_left_section">';
			echo '<h1>' . __('Admin') . '</h1>';
			echo '<ul>';
			echo '<li>' . $this->Html->link(__('List Users'), array('action' => 'index')) . '</li>';
			echo '</ul>';
			echo '</div>';
		}
	?>
</div>

<div id="templatemo_content_right">
	<div class="users form">
		<h1>Register User</h1>
		<?php echo $this->Form->create('User'); ?>
		<table align='center'>
			<?php
				echo $this->Form->input('usrFname');
				echo $this->Form->input('usrLname');
				echo $this->Form->input('usrAddress1');
				echo $this->Form->input('usrAddress2');
				echo $this->Form->input('usrCity');
				echo $this->Form->input('usrProvince');
				echo $this->Form->input('usrZIP');
				echo $this->Form->input('usrPhone');
				echo $this->Form->input('usrSSN');
				echo $this->Form->input('usrRole', array('options' => array(
					'1' => 'Customer',
					'2' => 'Employee',
					'3' => 'Manager')));
				echo $this->Form->input('usrEmail');
				echo $this->Form->input('usrPass');
				echo $this->Form->input('usrStat');
			?>
			<tr><td colspan=3><div class="cleaner_with_image" /></td></tr>
			<tr>
				<td colspan=3 align=center>
					<div class="submit">
						<hr><br>
						<?php echo $this->Form->submit(__('Add user'), array('div' => false)); ?>
						<?php echo $this->Form->submit(__('Cancel'), array('type' => 'button', 'id' => 'add', 'div' => false, 'onclick' => 'submitForm(id)')); ?>
						<input type="hidden" name="hiddenCancel" id="hiddenCancel">
						&emsp;&emsp;&emsp;
						<?php echo $this->Form->submit(__('Reset'), array('type' => 'button', 'div' => false, 'onclick' => 'clearForm(this.form)')); ?>
					</div>
					<?php echo $this->Form->end();?>
				</td>
			</tr>
		</table>
	</div>
</div>
