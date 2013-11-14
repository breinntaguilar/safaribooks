<div id="templatemo_content_left">
	<div class="templatemo_content_left_section">
		<div class="actions">
			<h1><?php echo __('Actions'); ?></h1>
			<ul>
				<li><?php echo $this->Html->link(__('List Details'), array('action' => 'index')); ?></li>
				<li><?php echo $this->Html->link(__('List Customers'), array('controller' => 'customers', 'action' => 'index')); ?> </li>
				<li><?php echo $this->Html->link(__('New Detail Customer'), array('controller' => 'customers', 'action' => 'add')); ?> </li>
				<li><?php echo $this->Html->link(__('List Employees'), array('controller' => 'employees', 'action' => 'index')); ?> </li>
				<li><?php echo $this->Html->link(__('New Detail Employee'), array('controller' => 'employees', 'action' => 'add')); ?> </li>
			</ul>
		</div>
	</div>
</div>

<div id="templatemo_content_right">
	<div class="details form">
		<h1>Register</h1>
		<?php echo $this->Form->create('Detail'); ?>
		<table align='center'>
			<?php
				echo $this->Formadd->inputAdd('Detail.cmnFname', array('label' => 'First Name', 'error' => false, 'size' => '76%'));
				echo $this->Formadd->inputAdd('Detail.cmnLname', array('label' => 'Last Name', 'error' => false, 'size' => '76%'));
				echo $this->Formadd->inputAdd('Detail.cmnAddress', array('label' => 'Address', 'error' => false, 'size' => '76%'));
				echo $this->Formadd->inputAdd('AddressLine1', array('label' => 'Address Line 1', 'error' => false, 'size' => '76%', 'onchange' => 'updateAddress()'));
				echo $this->Formadd->inputAdd('AddressLine2', array('label' => 'Address Line 2', 'error' => false, 'size' => '76%', 'onchange' => 'updateAddress()'));
				echo $this->Formadd->inputAdd('AddressLine4', array('label' => 'Zip/Postal Code', 'error' => false, 'size' => '2%',
					'type' => 'text', 'maxlength' => '4', 'onchange' => 'updateAddress()'));
				echo $this->Formadd->inputAdd('AddressLine3', array('label' => 'Town or City', 'error' => false, 'size' => '76%', 'onchange' => 'updateAddress()'));
				echo $this->Formadd->inputAdd('AddressLine5', array('label' => 'Province', 'error' => false, 'size' => '76%', 'onchange' => 'updateAddress()'));
				echo $this->Formadd->inputAdd('Detail.cmnPhone', array('label' => 'Phone', 'error' => false, 'size' => '76%'));
				echo $this->Formadd->inputAdd('Customer.cusEmail', array('label' => 'Email Address', 'error' => false, 'size' => '76%'));
				echo $this->Formadd->inputAdd('Customer.cusPass', array('label' => 'Password', 'error' => false, 'size' => '76%'));
				//echo $this->Form->input('Detail.cmnRole');
				//echo $this->Form->input('Detail.cmnStat');
			?>
		</table>
		<?php echo $this->Form->end(__('Submit')); ?>
	</div>
</div>
