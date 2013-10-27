<div class="procures form">
<?php echo $this->Form->create('Procure'); ?>
	<fieldset>
		<legend><?php echo __('Edit Procure'); ?></legend>
	<?php
		echo $this->Form->input('prcID');
		echo $this->Form->input('bkID');
		echo $this->Form->input('prcQnty');
		echo $this->Form->input('prcLprice');
		echo $this->Form->input('empID');
		echo $this->Form->input('prcStat');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Procure.prcID')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Procure.prcID'))); ?></li>
		<li><?php echo $this->Html->link(__('List Procures'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Employees'), array('controller' => 'employees', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Procure Employee'), array('controller' => 'employees', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Books'), array('controller' => 'books', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Procure Book'), array('controller' => 'books', 'action' => 'add')); ?> </li>
	</ul>
</div>
