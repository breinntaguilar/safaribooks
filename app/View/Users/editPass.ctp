<div id="templatemo_content_left">
	<div class="templatemo_content_left_section">
		<div class="actions">
			<h1><?php echo __('Actions'); ?></h1>
			<ul>
				<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('User.usrID')), null, __('Are you sure you want to delete # %s?', $this->Form->value('User.usrID'))); ?></li>
				<li><?php echo $this->Html->link(__('List Users'), array('action' => 'index')); ?></li>
				<li><?php echo $this->Html->link(__('List Credits'), array('controller' => 'credits', 'action' => 'index')); ?> </li>
				<li><?php echo $this->Html->link(__('List Carts'), array('controller' => 'carts', 'action' => 'index')); ?> </li>
				<li><?php echo $this->Html->link(__('List Reviews'), array('controller' => 'reviews', 'action' => 'index')); ?> </li>
				<li><?php echo $this->Html->link(__('List Procures'), array('controller' => 'procures', 'action' => 'index')); ?> </li>
			</ul>
		</div>
	</div>
</div>

<div id="templatemo_content_right">
	<div class="users form">
		<h1>Edit Profile</h1>
		<?php echo $this->Form->create('User', array('type' => 'file')); ?>
		<table align='center'>
			<?php
				if ($this->data['User']['usrRole'] != '2' OR $this->Session->read('Auth')['User']['usrRole'] !== '2') {
					echo $this->Formadd->inputAdd('usrFname', array(
						'label' => 'First Name',
						'error' => false,
						'size' => '25%'));
					echo $this->Formadd->inputAdd('usrLname', array(
						'label' => 'Last Name',
						'error' => false,
						'size' => '25%'));
				}
				echo $this->Formadd->inputAdd('usrAddress1', array(
					'label' => 'Barangay',
					'error' => false,
					'size' => '50%'));
				echo $this->Formadd->inputAdd('usrAddress2', array(
					'label' => '',
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
				if ($this->data['User']['usrRole'] != '2' OR $this->Session->read('Auth')['User']['usrRole'] !== '2') {
					echo $this->Formadd->inputAdd('usrEmail', array(
						'label' => 'Email Address',
						'error' => false,
						'size' => '25%'));
				}
			?>
			<tr><td colspan=3><div class="cleaner_with_image" /></td></tr>
			<tr>
				<td colspan=3 align=center>
					<div class="submit">
						<hr><br>
						<?php echo $this->Form->submit(__('Edit profile'), array('div' => false)); ?>
						<?php echo $this->Form->submit(__('Cancel'), array('type' => 'button', 'id' => 'edit', 'div' => false, 'onclick' => 'submitForm(id)')); ?>
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
