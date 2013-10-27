<div class="reviews index">
	<h2><?php echo __('Reviews'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('revID'); ?></th>
			<th><?php echo $this->Paginator->sort('cusID'); ?></th>
			<th><?php echo $this->Paginator->sort('empID'); ?></th>
			<th><?php echo $this->Paginator->sort('bkID'); ?></th>
			<th><?php echo $this->Paginator->sort('revDesc'); ?></th>
			<th><?php echo $this->Paginator->sort('revRating'); ?></th>
			<th><?php echo $this->Paginator->sort('revStat'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($reviews as $review): ?>
	<tr>
		<td><?php echo h($review['Review']['revID']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($review['ReviewCustomer']['cusEmail'], array('controller' => 'customers', 'action' => 'view', $review['ReviewCustomer']['cusID'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($review['ReviewEmployee']['empID'], array('controller' => 'employees', 'action' => 'view', $review['ReviewEmployee']['empID'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($review['ReviewBook']['bkTitle'], array('controller' => 'books', 'action' => 'view', $review['ReviewBook']['bkID'])); ?>
		</td>
		<td><?php echo h($review['Review']['revDesc']); ?>&nbsp;</td>
		<td><?php echo h($review['Review']['revRating']); ?>&nbsp;</td>
		<td><?php echo h($review['Review']['revStat']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $review['Review']['revID'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $review['Review']['revID'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $review['Review']['revID']), null, __('Are you sure you want to delete # %s?', $review['Review']['revID'])); ?>
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
		<li><?php echo $this->Html->link(__('New Review'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Customers'), array('controller' => 'customers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Review Customer'), array('controller' => 'customers', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Books'), array('controller' => 'books', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Review Book'), array('controller' => 'books', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Employees'), array('controller' => 'employees', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Review Employee'), array('controller' => 'employees', 'action' => 'add')); ?> </li>
	</ul>
</div>
