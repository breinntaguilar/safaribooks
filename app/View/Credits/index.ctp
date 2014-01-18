<div class="credits index">
	<h2><?php echo __('Credits'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('ccNum'); ?></th>
			<th><?php echo $this->Paginator->sort('cusID'); ?></th>
			<th><?php echo $this->Paginator->sort('ccType'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($credits as $credit): ?>
	<tr>
		<td><?php echo h($credit['Credit']['ccNum']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($credit['CreditUser']['usrEmail'], array('controller' => 'users', 'action' => 'view', $credit['CreditUser']['usrID'])); ?>
		</td>
		<td><?php echo h($credit['Credit']['ccType']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $credit['Credit']['ccID'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $credit['Credit']['ccID'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $credit['Credit']['ccID']), null, __('Are you sure you want to delete # %s?', $credit['Credit']['ccID'])); ?>
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
		<li><?php echo $this->Html->link(__('New Credit'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Customers'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Credit Customer'), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>
