<div class="checkouts index">
	<h2><?php echo __('Checkouts'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('chkID'); ?></th>
			<th><?php echo $this->Paginator->sort('usrID'); ?></th>
			<th><?php echo $this->Paginator->sort('usedCC'); ?></th>
			<th><?php echo $this->Paginator->sort('cpnID'); ?></th>
			<th><?php echo $this->Paginator->sort('chkDate'); ?></th>
			<th><?php echo $this->Paginator->sort('chkTprice'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($checkouts as $checkout): ?>
	<tr>
		<td><?php echo h($checkout['Checkout']['chkID']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($checkout['CheckoutUser']['usrEmail'], array('controller' => 'users', 'action' => 'view', $checkout['CheckoutUser']['usrID'])); ?>
		</td>
		<td><?php echo h($checkout['Checkout']['usedCC']); ?>&nbsp;</td>
		<td><?php echo h($checkout['Checkout']['cpnID']); ?>&nbsp;</td>
		<td><?php echo h($checkout['Checkout']['chkDate']); ?>&nbsp;</td>
		<td><?php echo h($checkout['Checkout']['chkTprice']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $checkout['Checkout']['chkID'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $checkout['Checkout']['chkID'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $checkout['Checkout']['chkID']), null, __('Are you sure you want to delete # %s?', $checkout['Checkout']['chkID'])); ?>
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
		<li><?php echo $this->Html->link(__('New Checkout'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Customers'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Checkout Customer'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Coupons'), array('controller' => 'coupons', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Checkout Coupon'), array('controller' => 'coupons', 'action' => 'add')); ?> </li>
	</ul>
</div>
