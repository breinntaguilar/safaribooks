<div class="carts form">
<?php echo $this->Form->create('Cart'); ?>
	<fieldset>
		<legend><?php echo __('Add Cart'); ?></legend>
	<?php
		echo $this->Form->input('cusID');
		echo $this->Form->input('bkID');
		echo $this->Form->input('crtQnty');
		echo $this->Form->input('crtShip');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Carts'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Customers'), array('controller' => 'customers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Cart Customer'), array('controller' => 'customers', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Books'), array('controller' => 'books', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Cart Book'), array('controller' => 'books', 'action' => 'add')); ?> </li>
	</ul>
</div>
