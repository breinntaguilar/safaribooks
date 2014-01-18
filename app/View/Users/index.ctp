<div id="templatemo_content_left">
	<div class="templatemo_content_left_section">
		<div class="actions">
			<h1><?php echo __('Actions'); ?></h1>
			<ul>
				<li><?php echo $this->Html->link(__('New User'), array('action' => 'add')); ?></li>
				<li><?php echo $this->Html->link(__('List Books'), array('controller' => 'books', 'action' => 'index')); ?></li>
				<li><?php echo $this->Html->link(__('List Carts'), array('controller' => 'carts', 'action' => 'index')); ?> </li>
				<li><?php echo $this->Html->link(__('List Credits'), array('controller' => 'credits', 'action' => 'index')); ?> </li>
				<li><?php echo $this->Html->link(__('List Checkouts'), array('controller' => 'checkouts', 'action' => 'index')); ?> </li>
				<li><?php echo $this->Html->link(__('List Coupons'), array('controller' => 'coupons', 'action' => 'index')); ?> </li>
				<li><?php echo $this->Html->link(__('List Reviews'), array('controller' => 'reviews', 'action' => 'index')); ?> </li>
				<li><?php echo $this->Html->link(__('List Wishlists'), array('controller' => 'wishlists', 'action' => 'index')); ?> </li>
				<li><?php echo $this->Html->link(__('List Procures'), array('controller' => 'procures', 'action' => 'index')); ?> </li>
			</ul>
		</div>
	</div>
</div>
<div id="templatemo_content_right">
	<div class="users index">
		<h2><?php echo __('Users'); ?></h2>
		<table class="table table-condensed table-bordered table-hover" cellpadding="0" cellspacing="0">
			<tr>
				<th><?php echo $this->Paginator->sort('usrID', 'User ID'); ?></th>
				<th><?php echo $this->Paginator->sort('usrEmail', 'Email'); ?></th>
				<th><?php echo $this->Paginator->sort('usrFname', 'First Name'); ?></th>
				<th><?php echo $this->Paginator->sort('usrLname', 'Last Name'); ?></th>
				<th><?php echo $this->Paginator->sort('usrRole', 'Role'); ?></th>
				<th class="actions"><?php echo __('Actions'); ?></th>
			</tr>
		<?php foreach ($users as $user): ?>
			<tr>
				<td><?php echo h($user['User']['usrID']); ?>&nbsp;</td>
				<td><?php echo h($user['User']['usrEmail']); ?>&nbsp;</td>
				<td><?php echo h($user['User']['usrFname']); ?>&nbsp;</td>
				<td><?php echo h($user['User']['usrLname']); ?>&nbsp;</td>
				<td><?php echo h($user['User']['usrRole']); ?>&nbsp;</td>
				<td class="actions" align="center">
					<?php echo $this->Html->link(__('View'), array('action' => 'view', $user['User']['usrID'])); ?>
					<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $user['User']['usrID'])); ?>
					<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $user['User']['usrID']), null, __('Are you sure you want to delete # %s?', $user['User']['usrID'])); ?>
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
