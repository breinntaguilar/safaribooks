<div id="templatemo_content_left">
	<div class="templatemo_content_left_section">
		<h1><?php echo __('Admin'); ?></h1>
		<ul>
			<li><?php echo $this->Html->link(__('View books'), array('action' => 'index')); ?></li>
			<li><?php echo $this->Html->link(__('View book reviews'), array('controller' => 'reviews', 'action' => 'index')); ?></li>
			<li><?php echo $this->Html->link(__('View book procurements'), array('controller' => 'procures', 'action' => 'index')); ?></li>
			<li><?php echo $this->Html->link(__('View coupons'), array('controller' => 'coupons', 'action' => 'index')); ?></li>
			<li><?php echo $this->Html->link(__('View wishlist'), array('controller' => 'wishlists', 'action' => 'index')); ?></li>
			<li><?php echo $this->Html->link(__('View users'), array('controller' => 'users', 'action' => 'index')); ?></li>
		</ul>
	</div>
</div>

<div id="templatemo_content_right">
	<div class="books form">
		<h1>Add Book</h1>
		<?php echo $this->Form->create('Book', array('type' => 'file')); ?>
		<table align='center'>
			<?php
				echo $this->Formadd->inputAdd('bkTitle', array(
					'label' => 'Title',
					'error' => false,
					'size' => '75%',
					'id' => 'focusme'));
				echo $this->Formadd->inputAdd('bkAuthor', array(
					'label' => 'Author',
					'error' => false,
					'size' => '75%'));
				echo $this->Formadd->inputAdd('bkPubDate', array(
					'label' => 'Published',
					'error' => false,
					'type' => 'text',
					'id' => 'datepicker1'));
				echo $this->Formadd->inputAdd('bkQnty', array(
					'label' => 'Quantity',
					'error' => false,
					'size' => '1%',
					'type' => 'text',
					'maxlength' => '3',
					'onkeypress' => 'return isNumKey(event)'));
				echo $this->Formadd->inputAdd('bkPrice', array(
					'label' => 'Price',
					'error' => false,
					'size' => '5%',
					'type' => 'text',
					'maxlength' => '7',
					'onkeypress' => 'return isDecKey(event)',
					'onblur' => 'convDecimal(id)'));
				echo $this->Formadd->inputAdd('bkDiscPrice', array(
					'label' => 'Discounted Price',
					'error' => false,
					'size' => '5%',
					'type' => 'text',
					'maxlength' => '7',
					'onkeypress' => 'return isDecKey(event)',
					'onblur' => 'convDecimal(id)'));
				echo $this->Formadd->inputAdd('bkAddedDate', array(
					'label' => 'Date Added',
					'error' => false,
					'type' => 'text',
					'id' => 'datepicker2'));
				echo $this->Formadd->inputAdd('bkSnippet', array(
					'label' => 'Description',
					'error' => false,
					'cols' => '57',
					'rows' => '10',
					'maxlength' => '1500'));
				echo $this->Formadd->inputAdd('bkCover', array(
					'type' => 'file',
					'label' => 'Book Cover',
					'error' => false,
					'accept' => 'image/png, image/jpeg',
					'required' => true));
			?>
			<tr><td colspan=3><div class="cleaner_with_image" /></td></tr>
			<tr>
				<td colspan=3 align=center>
					<div class="submit">
						<hr><br>
						<?php echo $this->Form->submit(__('Add book'), array('div' => false)); ?>
						<?php echo $this->Form->submit(__('Cancel'), array('type' => 'button', 'id' => 'add', 'div' => false, 'onclick' => 'submitForm(id)')); ?>
						<input type="hidden" name="hiddenCancel" id="hiddenCancel">
						&emsp;&emsp;&emsp;
						<?php echo $this->Form->submit(__('Reset'), array('type' => 'button', 'div' => false, 'onclick' => 'clearForm(this.form)')); ?>
					</div>
					<?php echo $this->Form->end();?>
				</td>
			</tr>
		</table>
	</div>
</div>
