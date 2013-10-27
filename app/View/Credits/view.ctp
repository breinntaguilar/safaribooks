<div class="credits view">
<h2><?php echo __('Credit'); ?></h2>
	<dl>
		<dt><?php echo __('CcNum'); ?></dt>
		<dd>
			<?php echo h($credit['Credit']['ccNum']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Credit Customer'); ?></dt>
		<dd>
			<?php echo $this->Html->link($credit['CreditCustomer']['cusEmail'], array('controller' => 'customers', 'action' => 'view', $credit['CreditCustomer']['cusID'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('CcType'); ?></dt>
		<dd>
			<?php echo h($credit['Credit']['ccType']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Credit'), array('action' => 'edit', $credit['Credit']['ccID'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Credit'), array('action' => 'delete', $credit['Credit']['ccID']), null, __('Are you sure you want to delete # %s?', $credit['Credit']['ccID'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Credits'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Credit'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Customers'), array('controller' => 'customers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Credit Customer'), array('controller' => 'customers', 'action' => 'add')); ?> </li>
	</ul>
</div>
