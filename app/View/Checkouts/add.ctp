<div class="checkouts form">
<?php echo $this->Form->create('Checkout'); ?>
	<fieldset>
		<legend><?php echo __('Add Checkout'); ?></legend>
	<?php
		echo $this->Form->input('cusID');
		echo $this->Form->input('usedCC');
		echo $this->Form->input('cpnID');
		echo $this->Form->input('chkDate');
		echo $this->Form->input('chkTprice');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Checkouts'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Customers'), array('controller' => 'customers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Checkout Customer'), array('controller' => 'customers', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Coupons'), array('controller' => 'coupons', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Checkout Coupon'), array('controller' => 'coupons', 'action' => 'add')); ?> </li>
	</ul>
</div>
