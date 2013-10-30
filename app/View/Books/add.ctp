<div class="books form">
<?php echo $this->Form->create('Book', array('type' => 'file')); ?>
	<fieldset>
		<legend><?php echo __('Add Book'); ?></legend>
	<?php
		echo $this->Form->input('bkTitle');
		echo $this->Form->input('bkAuthor');
		echo $this->Form->input('bkPubDate');
		echo $this->Form->input('bkQnty');
		//echo $this->Form->input('bkRating');
		echo $this->Form->input('bkPrice');
		echo $this->Form->input('bkDiscPrice');
		//echo $this->Form->input('bkStat');
		echo $this->Form->input('bkAddedDate');
		echo $this->Form->input('bkSnippet');
		echo $this->Form->input('bkCover', array('type' => 'file'));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Books'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Reviews'), array('controller' => 'reviews', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Book Review'), array('controller' => 'reviews', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Carts'), array('controller' => 'carts', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Book Cart'), array('controller' => 'carts', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Procures'), array('controller' => 'procures', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Book Procure'), array('controller' => 'procures', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Wishlists'), array('controller' => 'wishlists', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Book Wishlist'), array('controller' => 'wishlists', 'action' => 'add')); ?> </li>
	</ul>
</div>
