<div class="coupons index">
	<h2><?php echo __('Coupons'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('cpnID'); ?></th>
			<th><?php echo $this->Paginator->sort('cpnType'); ?></th>
			<th><?php echo $this->Paginator->sort('cpnParam'); ?></th>
			<th><?php echo $this->Paginator->sort('cpnDetail'); ?></th>
			<th><?php echo $this->Paginator->sort('cpnStat'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($coupons as $coupon): ?>
	<tr>
		<td><?php echo h($coupon['Coupon']['cpnID']); ?>&nbsp;</td>
		<td><?php echo h($coupon['Coupon']['cpnType']); ?>&nbsp;</td>
		<td><?php echo h($coupon['Coupon']['cpnParam']); ?>&nbsp;</td>
		<td><?php echo h($coupon['Coupon']['cpnDetail']); ?>&nbsp;</td>
		<td><?php echo h($coupon['Coupon']['cpnStat']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $coupon['Coupon']['cpnID'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $coupon['Coupon']['cpnID'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $coupon['Coupon']['cpnID']), null, __('Are you sure you want to delete # %s?', $coupon['Coupon']['cpnID'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Coupon'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Checkouts'), array('controller' => 'checkouts', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Coupon Checkout'), array('controller' => 'checkouts', 'action' => 'add')); ?> </li>
	</ul>
</div>
