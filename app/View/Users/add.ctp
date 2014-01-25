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
			
			<li><?php echo $this->Html->link(__('List Books'), array('action' => 'index')); ?> </li>
			<li><?php echo $this->Html->link(__('List Reviews'), array('controller' => 'reviews', 'action' => 'index')); ?> </li>
			<li><?php echo $this->Html->link(__('List Carts'), array('controller' => 'carts', 'action' => 'index')); ?> </li>
			<li><?php echo $this->Html->link(__('List Procures'), array('controller' => 'procures', 'action' => 'index')); ?> </li>
			<li><?php echo $this->Html->link(__('List Wishlists'), array('controller' => 'wishlists', 'action' => 'index')); ?> </li>
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
		<h1>Register Account</h1>
		<?php echo $this->Form->create('User'); ?>
		<table align='center'>
			<?php
				echo $this->Formadd->inputAdd('usrFname', array(
					'label' => 'First Name',
					'error' => false,
					'size' => '25%'));
				echo $this->Formadd->inputAdd('usrLname', array(
					'label' => 'Last Name',
					'error' => false,
					'size' => '25%'));
				echo $this->Formadd->inputAdd('usrAddress1', array(
					'label' => 'Street',
					'error' => false,
					'size' => '50%'));
				echo $this->Formadd->inputAdd('usrAddress2', array(
					'label' => 'Barangay',
					'error' => false,
					'size' => '50%'));
				echo $this->Formadd->inputAdd('usrCity', array(
					'label' => 'City',
					'error' => false,
					'size' => '50%'));
				echo $this->Formadd->inputAdd('usrProvince', array(
					'label' => 'Province',
					'error' => false,
					'size' => '50%'));
				echo $this->Formadd->inputAdd('usrZIP', array(
					'label' => 'ZIP Code',
					'error' => false,
					'size' => '2%',
					'type' => 'text',
					'maxlength' => '4',
					'onkeypress' => 'return isNumKey(event)'));
				echo $this->Formadd->inputAdd('usrPhone', array(
					'label' => 'Phone',
					'error' => false,
					'size' => '11%',
					'type' => 'text',
					'maxlength' => '11',
					'onkeypress' => 'return isNumKey(event)'));
				if ((!isset($this->Session->read('Auth')['User'])) OR (isset($this->Session->read('Auth')['User']) && $this->Session->read('Auth')['User']['usrRole'] !== '3')) {
					echo $this->Form->hidden('usrSSN', array('value' => 0));
					echo $this->Form->hidden('usrRole', array('value' => 1));
				}
				else {
					echo $this->Formadd->inputAdd('usrSSN', array(
						'label' => 'Social Security Number',
						'error' => false,
						'size' => '11%',
						'type' => 'text',
						'maxlength' => '10',
						'onkeypress' => 'return isNumKey(event)'));
					echo $this->Formadd->inputAdd('usrRole', array(
						'label' => 'Role',
						'options' => array(
							'2' => 'Employee',
							'3' => 'Manager')));
				}
				echo $this->Formadd->inputAdd('usrEmail', array(
					'label' => 'Email Address',
					'error' => false,
					'size' => '25%'));
				echo $this->Formadd->inputAdd('usrPass', array(
					'label' => 'Password',
					'error' => false,
					'size' => '25%',
					'type' => 'password'));
				echo $this->Formadd->inputAdd('usrPassOld', array(
					'label' => 'Verify Password',
					'error' => false,
					'size' => '25%',
					'type' => 'password'));
			?>
			<tr><td colspan=3><div class="cleaner_with_image" /></td></tr>
			<tr>
				<td colspan=3 align=center>
					<div class="submit">
						<hr><br>
						<?php echo $this->Form->submit(__('Register'), array('div' => false)); ?>
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
