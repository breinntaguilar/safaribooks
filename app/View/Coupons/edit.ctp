<div class="coupons form">
<?php echo $this->Form->create('Coupon'); ?>
	<fieldset>
		<legend><?php echo __('Edit Coupon'); ?></legend>
	<?php
		echo $this->Form->input('cpnID');
		echo $this->Form->input('cpnType');
		echo $this->Form->input('cpnParam');
		echo $this->Form->input('cpnDetail');
		echo $this->Form->input('cpnStat');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Coupon.cpnID')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Coupon.cpnID'))); ?></li>
		<li><?php echo $this->Html->link(__('List Coupons'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Checkouts'), array('controller' => 'checkouts', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Coupon Checkout'), array('controller' => 'checkouts', 'action' => 'add')); ?> </li>
	</ul>
</div>
