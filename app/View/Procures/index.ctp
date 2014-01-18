<div id="templatemo_content_left">
	<div class="templatemo_content_left_section">
		<div class="actions">
			<h1><?php echo __('Actions'); ?></h1>
			<ul>
				<li><?php echo $this->Html->link(__('New Procure'), array('action' => 'add')); ?></li>
				<li><?php echo $this->Html->link(__('List Employees'), array('controller' => 'users', 'action' => 'index')); ?> </li>
				<li><?php echo $this->Html->link(__('New Procure Employee'), array('controller' => 'users', 'action' => 'add')); ?> </li>
				<li><?php echo $this->Html->link(__('List Books'), array('controller' => 'books', 'action' => 'index')); ?> </li>
				<li><?php echo $this->Html->link(__('New Procure Book'), array('controller' => 'books', 'action' => 'add')); ?> </li>
			</ul>
		</div>
	</div>
</div>

<div id="templatemo_content_right">
	<div class="procures index">
		<h1><?php echo __('Procures'); ?></h1>
		<table class="table table-condensed table-bordered table-hover" cellpadding="1" cellspacing="1">
		<tr>
				<th><?php echo $this->Paginator->sort('prcID'); ?></th>
				<th><?php echo $this->Paginator->sort('bkID'); ?></th>
				<th><?php echo $this->Paginator->sort('prcQnty'); ?></th>
				<th><?php echo $this->Paginator->sort('prcLprice'); ?></th>
				<th><?php echo $this->Paginator->sort('usrID'); ?></th>
				<th><?php echo $this->Paginator->sort('prcStat'); ?></th>
				<th class="actions"><?php echo __('Actions'); ?></th>
		</tr>
		<?php foreach ($procures as $procure): ?>
		<tr>
			<td><?php echo h($procure['Procure']['prcID']); ?>&nbsp;</td>
			<td>
				<?php echo $this->Html->link($procure['ProcureBook']['bkTitle'], array('controller' => 'books', 'action' => 'view', $procure['ProcureBook']['bkID'])); ?>
			</td>
			<td><?php echo h($procure['Procure']['prcQnty']); ?>&nbsp;</td>
			<td><?php echo h($procure['Procure']['prcLprice']); ?>&nbsp;</td>
			<td>
				<?php echo $this->Html->link($procure['ProcureUser']['usrID'], array('controller' => 'users', 'action' => 'view', $procure['ProcureUser']['usrID'])); ?>
			</td>
			<td><?php echo h($procure['Procure']['prcStat']); ?>&nbsp;</td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('action' => 'view', $procure['Procure']['prcID'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $procure['Procure']['prcID'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $procure['Procure']['prcID']), null, __('Are you sure you want to delete # %s?', $procure['Procure']['prcID'])); ?>
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
</div>

