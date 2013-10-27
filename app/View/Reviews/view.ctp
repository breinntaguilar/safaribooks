<div class="reviews view">
<h2><?php echo __('Review'); ?></h2>
	<dl>
		<dt><?php echo __('RevID'); ?></dt>
		<dd>
			<?php echo h($review['Review']['revID']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Review Customer'); ?></dt>
		<dd>
			<?php echo $this->Html->link($review['ReviewCustomer']['cusEmail'], array('controller' => 'customers', 'action' => 'view', $review['ReviewCustomer']['cusID'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Review Employee'); ?></dt>
		<dd>
			<?php echo $this->Html->link($review['ReviewEmployee']['empID'], array('controller' => 'employees', 'action' => 'view', $review['ReviewEmployee']['empID'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Review Book'); ?></dt>
		<dd>
			<?php echo $this->Html->link($review['ReviewBook']['bkTitle'], array('controller' => 'books', 'action' => 'view', $review['ReviewBook']['bkID'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('RevDesc'); ?></dt>
		<dd>
			<?php echo h($review['Review']['revDesc']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('RevRating'); ?></dt>
		<dd>
			<?php echo h($review['Review']['revRating']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('RevStat'); ?></dt>
		<dd>
			<?php echo h($review['Review']['revStat']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Review'), array('action' => 'edit', $review['Review']['revID'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Review'), array('action' => 'delete', $review['Review']['revID']), null, __('Are you sure you want to delete # %s?', $review['Review']['revID'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Reviews'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Review'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Customers'), array('controller' => 'customers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Review Customer'), array('controller' => 'customers', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Books'), array('controller' => 'books', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Review Book'), array('controller' => 'books', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Employees'), array('controller' => 'employees', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Review Employee'), array('controller' => 'employees', 'action' => 'add')); ?> </li>
	</ul>
</div>
