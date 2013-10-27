<div class="noshippings index">
	<h2><?php echo __('Noshippings'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('provName'); ?></th>
			<th><?php echo $this->Paginator->sort('areaCode'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($noshippings as $noshipping): ?>
	<tr>
		<td><?php echo h($noshipping['Noshipping']['provName']); ?>&nbsp;</td>
		<td><?php echo h($noshipping['Noshipping']['areaCode']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $noshipping['Noshipping']['provName'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $noshipping['Noshipping']['provName'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $noshipping['Noshipping']['provName']), null, __('Are you sure you want to delete # %s?', $noshipping['Noshipping']['provName'])); ?>
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
		<li><?php echo $this->Html->link(__('New Noshipping'), array('action' => 'add')); ?></li>
	</ul>
</div>
