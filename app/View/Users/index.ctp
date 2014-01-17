<div class="users index">
	<h2><?php echo __('Users'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('usrID'); ?></th>
			<th><?php echo $this->Paginator->sort('usrEmail'); ?></th>
			<th><?php echo $this->Paginator->sort('usrPass'); ?></th>
			<th><?php echo $this->Paginator->sort('usrFname'); ?></th>
			<th><?php echo $this->Paginator->sort('usrLname'); ?></th>
			<th><?php echo $this->Paginator->sort('usrAddress1'); ?></th>
			<th><?php echo $this->Paginator->sort('usrAddress2'); ?></th>
			<th><?php echo $this->Paginator->sort('usrCity'); ?></th>
			<th><?php echo $this->Paginator->sort('usrProvince'); ?></th>
			<th><?php echo $this->Paginator->sort('usrZIP'); ?></th>
			<th><?php echo $this->Paginator->sort('usrPhone'); ?></th>
			<th><?php echo $this->Paginator->sort('usrSSN'); ?></th>
			<th><?php echo $this->Paginator->sort('usrRole'); ?></th>
			<th><?php echo $this->Paginator->sort('usrStat'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($users as $user): ?>
	<tr>
		<td><?php echo h($user['User']['usrID']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['usrEmail']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['usrPass']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['usrFname']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['usrLname']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['usrAddress1']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['usrAddress2']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['usrCity']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['usrProvince']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['usrZIP']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['usrPhone']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['usrSSN']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['usrRole']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['usrStat']); ?>&nbsp;</td>
		<td class="actions">
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
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New User'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Credits'), array('controller' => 'credits', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User Credit'), array('controller' => 'credits', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Carts'), array('controller' => 'carts', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User Cart'), array('controller' => 'carts', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Checkouts'), array('controller' => 'checkouts', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User Checkout'), array('controller' => 'checkouts', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Reviews'), array('controller' => 'reviews', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User Review'), array('controller' => 'reviews', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Wishlists'), array('controller' => 'wishlists', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User Wishlist'), array('controller' => 'wishlists', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Procures'), array('controller' => 'procures', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User Procure'), array('controller' => 'procures', 'action' => 'add')); ?> </li>
	</ul>
</div>
