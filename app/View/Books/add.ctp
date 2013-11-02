<div id="templatemo_content_left">
	<div class="templatemo_content_left_section">
		<div class="actions">
			<h1><?php echo __('Actions'); ?></h1>
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
	</div>
</div>

<div id="templatemo_content_right">
	<div class="books form">
		<h1>Add Book</h1>
		<?php echo $this->Form->create('Book', array('type' => 'file')); ?>
		<table align='center' border=0>
			<?php
				echo $this->Formadd->inputAdd('bkTitle', array('label' => 'Title', 'size' => '75%'));
				echo $this->Formadd->inputAdd('bkAuthor', array('label' => 'Author', 'size' => '75%'));
				echo $this->Formadd->inputAdd('bkPubDate', array('label' => 'Published'));
				echo $this->Formadd->inputAdd('bkQnty',
					array('label' => 'Quantity', 'size' => '1%', 'type' => 'text', 'onkeypress' => 'return isNumKey(event)', 'maxlength' => '3'));
				echo $this->Formadd->inputAdd('bkPrice',
					array('label' => 'Price', 'size' => '5%', 'type' => 'text', 'onkeypress' => 'return isDecKey(event)', 'maxlength' => '7', 'onblur' => 'convDecimal(id)'));
				echo $this->Formadd->inputAdd('bkDiscPrice',
					array('label' => 'Discounted Price', 'size' => '5%', 'type' => 'text', 'onkeypress' => 'return isDecKey(event)', 'maxlength' => '7', 'onblur' => 'convDecimal(id)'));
				echo $this->Formadd->inputAdd('bkAddedDate', array('label' => 'Date Added'));
				echo $this->Formadd->inputAdd('bkSnippet', array('label' => 'Description', 'cols' => '57', 'maxlength' => '1500'));
				echo $this->Formadd->inputAdd('bkCover', array('type' => 'file', 'label' => 'Book Cover'));
			?>
		</table>
		<?php echo $this->Form->end(__('Submit')); ?>
	</div>
</div>
