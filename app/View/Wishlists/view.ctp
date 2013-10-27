<div class="wishlists view">
<h2><?php echo __('Wishlist'); ?></h2>
	<dl>
		<dt><?php echo __('WshID'); ?></dt>
		<dd>
			<?php echo h($wishlist['Wishlist']['wshID']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Wishlist Customer'); ?></dt>
		<dd>
			<?php echo $this->Html->link($wishlist['WishlistCustomer']['cusEmail'], array('controller' => 'customers', 'action' => 'view', $wishlist['WishlistCustomer']['cusID'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Wishlist Book'); ?></dt>
		<dd>
			<?php echo $this->Html->link($wishlist['WishlistBook']['bkTitle'], array('controller' => 'books', 'action' => 'view', $wishlist['WishlistBook']['bkID'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Wishlist'), array('action' => 'edit', $wishlist['Wishlist']['wshID'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Wishlist'), array('action' => 'delete', $wishlist['Wishlist']['wshID']), null, __('Are you sure you want to delete # %s?', $wishlist['Wishlist']['wshID'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Wishlists'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Wishlist'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Customers'), array('controller' => 'customers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Wishlist Customer'), array('controller' => 'customers', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Books'), array('controller' => 'books', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Wishlist Book'), array('controller' => 'books', 'action' => 'add')); ?> </li>
	</ul>
</div>
