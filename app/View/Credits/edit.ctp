<div class="credits form">
<?php echo $this->Form->create('Credit'); ?>
	<fieldset>
		<legend><?php echo __('Edit Credit'); ?></legend>
	<?php
		echo $this->Form->input('ccNum');
		echo $this->Form->input('cusID');
		echo $this->Form->input('ccType');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Credit.ccID')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Credit.ccID'))); ?></li>
		<li><?php echo $this->Html->link(__('List Credits'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Customers'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Credit Customer'), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>
