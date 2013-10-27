<div class="wishlists index">
	<h2><?php echo __('Wishlists'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('wshID'); ?></th>
			<th><?php echo $this->Paginator->sort('cusID'); ?></th>
			<th><?php echo $this->Paginator->sort('bkID'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($wishlists as $wishlist): ?>
	<tr>
		<td><?php echo h($wishlist['Wishlist']['wshID']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($wishlist['WishlistCustomer']['cusEmail'], array('controller' => 'customers', 'action' => 'view', $wishlist['WishlistCustomer']['cusID'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($wishlist['WishlistBook']['bkTitle'], array('controller' => 'books', 'action' => 'view', $wishlist['WishlistBook']['bkID'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $wishlist['Wishlist']['wshID'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $wishlist['Wishlist']['wshID'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $wishlist['Wishlist']['wshID']), null, __('Are you sure you want to delete # %s?', $wishlist['Wishlist']['wshID'])); ?>
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
		<li><?php echo $this->Html->link(__('New Wishlist'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Customers'), array('controller' => 'customers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Wishlist Customer'), array('controller' => 'customers', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Books'), array('controller' => 'books', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Wishlist Book'), array('controller' => 'books', 'action' => 'add')); ?> </li>
	</ul>
</div>
