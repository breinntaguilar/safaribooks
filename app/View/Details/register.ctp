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
	<?php echo $this->Form->create('Detail'); ?>
		<fieldset>
			<legend><?php echo __('Add Detail'); ?></legend>
		<?php
			//echo $this->Form->input('Customer.cmnID');
			echo $this->Form->input('Customer.cusEmail');
			echo $this->Form->input('Customer.cusPass');
			echo $this->Form->input('Detail.cmnFname');
			echo $this->Form->input('Detail.cmnLname');
			echo $this->Form->input('Detail.cmnSuffix');
			echo $this->Form->input('Detail.cmnAddress');
			echo $this->Form->input('Detail.cmnPhone');
			echo $this->Form->input('Detail.cmnRole');
			echo $this->Form->input('Detail.cmnStat');
			//echo $this->Form->input('Credit.ccNum');
			//echo $this->Form->input('Credit.cusID');
			//echo $this->Form->input('Credit.ccType');
		?>
		</fieldset>
	<?php echo $this->Form->end(__('Submit')); ?>
	</div>
</div>
