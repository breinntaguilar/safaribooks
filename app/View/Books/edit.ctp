<div id="templatemo_content_left">
	<div class="templatemo_content_left_section">
		<div class="actions">
			<h1><?php echo __('Actions'); ?></h1>
			<ul>
				<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Book.bkID')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Book.bkID'))); ?></li>
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
		<h1>Edit "<?php echo $this->data['Book']['bkTitle']; ?>"</h1>
		<?php echo $this->Form->create('Book', array('type' => 'file')); ?>
		<table align='center' border=0>
			<?php
				echo $this->Form->input('bkID');
				echo $this->Formadd->inputAdd('bkTitle', array('label' => 'Title', 'size' => '75%', 'required' => false));
				echo $this->Formadd->inputAdd('bkAuthor', array('label' => 'Author', 'size' => '75%', 'required' => false));
				echo $this->Formadd->inputAdd('bkPubDate', array('label' => 'Published', 'required' => false));
				echo $this->Formadd->inputAdd('bkQnty',
					array('label' => 'Quantity', 'size' => '1%', 'type' => 'text', 'onkeypress' => 'return isNumKey(event)', 'maxlength' => '3', 'required' => false));
				//echo $this->Form->input('bkRating');
				echo $this->Formadd->inputAdd('bkPrice',
					array('label' => 'Price', 'size' => '5%', 'type' => 'text', 'onkeypress' => 'return isDecKey(event)',
						'maxlength' => '7', 'onblur' => 'convDecimal(id)', 'required' => false));
				echo $this->Formadd->inputAdd('bkDiscPrice',
					array('label' => 'Discounted Price', 'size' => '5%', 'type' => 'text', 'onkeypress' => 'return isDecKey(event)',
						'maxlength' => '7', 'onblur' => 'convDecimal(id)', 'required' => false));
				//echo $this->Form->input('bkAddedDate');
				echo $this->Formadd->inputAdd('bkSnippet', array('label' => 'Description', 'cols' => '57', 'rows' => '10', 'maxlength' => '1500', 'required' => false));
				echo $this->Formadd->inputAdd('bkStat', array('label' => ' Discontinued', 'hiddenField' => false));
			?>
			<tr>
				<td>Book Cover</td>
				<td><div class="cleaner_with_image" /></td>
				<td><?php echo $this->Html->image($this->data['Book']['bkCover'], array('alt' => $this->data['Book']['bkTitle'], 'height' => 350)); ?></td>
			</tr>
			<?php echo $this->Formadd->inputAdd('bkCover', array('type' => 'file', 'label' => '', 'accept' => 'image/png, image/jpeg', 'required' => false)); ?>
			<tr><td colspan=3><div class="cleaner_with_image" /></td></tr>
			<tr>
				<td colspan=3 align=center>
					<div class="submit">
						<hr><br>
						<?php echo $this->Form->submit(__('Reset'), array('type' => 'reset', 'name' => 'ok', 'div' => false)); ?>
						&emsp;&emsp;&emsp;&emsp;&emsp;
						<?php echo $this->Form->submit(__('Edit book'), array('name' => 'ok', 'div' => false)); ?>
						&nbsp;
						<?php echo $this->Form->submit(__('Cancel'), array('name' => 'cancel','div' => false)); ?>
					</div>
					<?php echo $this->Form->end();?>
				</td>
			</tr>
		</table>
	</div>
</div>
