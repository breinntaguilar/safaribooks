<div class="procures view">
<h2><?php echo __('Procure'); ?></h2>
	<dl>
		<dt><?php echo __('PrcID'); ?></dt>
		<dd>
			<?php echo h($procure['Procure']['prcID']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Procure Book'); ?></dt>
		<dd>
			<?php echo $this->Html->link($procure['ProcureBook']['bkTitle'], array('controller' => 'books', 'action' => 'view', $procure['ProcureBook']['bkID'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('PrcQnty'); ?></dt>
		<dd>
			<?php echo h($procure['Procure']['prcQnty']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('PrcLprice'); ?></dt>
		<dd>
			<?php echo h($procure['Procure']['prcLprice']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Procure Employee'); ?></dt>
		<dd>
			<?php echo $this->Html->link($procure['ProcureEmployee']['empID'], array('controller' => 'employees', 'action' => 'view', $procure['ProcureEmployee']['empID'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('PrcStat'); ?></dt>
		<dd>
			<?php echo h($procure['Procure']['prcStat']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Procure'), array('action' => 'edit', $procure['Procure']['prcID'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Procure'), array('action' => 'delete', $procure['Procure']['prcID']), null, __('Are you sure you want to delete # %s?', $procure['Procure']['prcID'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Procures'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Procure'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Employees'), array('controller' => 'employees', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Procure Employee'), array('controller' => 'employees', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Books'), array('controller' => 'books', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Procure Book'), array('controller' => 'books', 'action' => 'add')); ?> </li>
	</ul>
</div>
