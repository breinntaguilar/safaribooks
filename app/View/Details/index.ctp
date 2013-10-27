<div class="details index">
	<h2><?php echo __('Details'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('cmnID'); ?></th>
			<th><?php echo $this->Paginator->sort('cmnFname'); ?></th>
			<th><?php echo $this->Paginator->sort('cmnLname'); ?></th>
			<th><?php echo $this->Paginator->sort('cmnSuffix'); ?></th>
			<th><?php echo $this->Paginator->sort('cmnAddress'); ?></th>
			<th><?php echo $this->Paginator->sort('cmnPhone'); ?></th>
			<th><?php echo $this->Paginator->sort('cmnRole'); ?></th>
			<th><?php echo $this->Paginator->sort('cmnStat'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($details as $detail): ?>
	<tr>
		<td><?php echo h($detail['Detail']['cmnID']); ?>&nbsp;</td>
		<td><?php echo h($detail['Detail']['cmnFname']); ?>&nbsp;</td>
		<td><?php echo h($detail['Detail']['cmnLname']); ?>&nbsp;</td>
		<td><?php echo h($detail['Detail']['cmnSuffix']); ?>&nbsp;</td>
		<td><?php echo h($detail['Detail']['cmnAddress']); ?>&nbsp;</td>
		<td><?php echo h($detail['Detail']['cmnPhone']); ?>&nbsp;</td>
		<td><?php echo h($detail['Detail']['cmnRole']); ?>&nbsp;</td>
		<td><?php echo h($detail['Detail']['cmnStat']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $detail['Detail']['cmnID'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $detail['Detail']['cmnID'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $detail['Detail']['cmnID']), null, __('Are you sure you want to delete # %s?', $detail['Detail']['cmnID'])); ?>
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
		<li><?php echo $this->Html->link(__('New Detail'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Customers'), array('controller' => 'customers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Detail Customer'), array('controller' => 'customers', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Employees'), array('controller' => 'employees', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Detail Employee'), array('controller' => 'employees', 'action' => 'add')); ?> </li>
	</ul>
</div>
