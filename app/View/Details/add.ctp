<div class="details form">
<?php echo $this->Form->create('Detail'); ?>
	<fieldset>
		<legend><?php echo __('Add Detail'); ?></legend>
	<?php
		echo $this->Form->input('cmnFname');
		echo $this->Form->input('cmnLname');
		echo $this->Form->input('cmnSuffix');
		echo $this->Form->input('cmnAddress');
		echo $this->Form->input('cmnPhone');
		echo $this->Form->input('cmnRole');
		echo $this->Form->input('cmnStat');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Details'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Customers'), array('controller' => 'customers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Detail Customer'), array('controller' => 'customers', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Employees'), array('controller' => 'employees', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Detail Employee'), array('controller' => 'employees', 'action' => 'add')); ?> </li>
	</ul>
</div>
