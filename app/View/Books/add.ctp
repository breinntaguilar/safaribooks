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
		<table align='center'>
			<?php
				echo $this->Formadd->inputAdd('bkTitle', array('label' => 'Title', 'error' => false, 'size' => '75%'));
				echo $this->Formadd->inputAdd('bkAuthor', array('label' => 'Author', 'error' => false, 'size' => '75%'));
				echo $this->Formadd->inputAdd('bkPubDate', array('label' => 'Published', 'error' => false, 'type' => 'text', 'id' => 'datepicker1'));
				echo $this->Formadd->inputAdd('bkQnty',
					array('label' => 'Quantity', 'error' => false, 'size' => '1%', 'type' => 'text', 'maxlength' => '3', 'onkeypress' => 'return isNumKey(event)'));
				echo $this->Formadd->inputAdd('bkPrice',
					array('label' => 'Price', 'error' => false, 'size' => '5%', 'type' => 'text',
					'onkeypress' => 'return isDecKey(event)', 'maxlength' => '7', 'onblur' => 'convDecimal(id)'));
				echo $this->Formadd->inputAdd('bkDiscPrice',
					array('label' => 'Discounted Price', 'error' => false, 'size' => '5%', 'type' => 'text',
					'onkeypress' => 'return isDecKey(event)', 'maxlength' => '7', 'onblur' => 'convDecimal(id)'));
				echo $this->Formadd->inputAdd('bkAddedDate', array('label' => 'Date Added', 'error' => false, 'type' => 'text', 'id' => 'datepicker2'));
				echo $this->Formadd->inputAdd('bkSnippet', array('label' => 'Description', 'error' => false, 'cols' => '57', 'rows' => '10', 'maxlength' => '1500'));
				echo $this->Formadd->inputAdd('bkCover', array('type' => 'file', 'label' => 'Book Cover', 'error' => false, 'accept' => 'image/png, image/jpeg', 'required' => true));
			?>
			<tr><td colspan=3><div class="cleaner_with_image" /></td></tr>
			<tr>
				<td colspan=3 align=center>
					<div class="submit">
						<hr><br>
						<?php echo $this->Form->submit(__('Reset'), array('type' => 'button', 'id' => 'try','div' => false, 'onclick' => 'clearForm(this.form)')); ?>
						&emsp;&emsp;&emsp;&emsp;&emsp;
						<?php echo $this->Form->submit(__('Add book'), array('name' => 'ok', 'div' => false)); ?>
						&nbsp;
						<?php echo $this->Form->submit(__('Cancel'), array('type' => 'button', 'name' => 'cancel','div' => false, 'onclick' => 'submitForm()')); ?>
						<input type="hidden" name="hiddenCancel" id="hiddenCancel">
					</div>
					<?php echo $this->Form->end();?>
				</td>
			</tr>
		</table>
	</div>
</div>
