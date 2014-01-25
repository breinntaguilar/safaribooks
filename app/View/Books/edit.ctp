<div id="templatemo_content_left">
	<div class="templatemo_content_left_section">
		<div class="actions">
			<h1><?php echo __('Admin'); ?></h1>
			<ul>
				<li><?php echo $this->Html->link(__('Add new book'), array('action' => 'add')); ?> </li>
				<li><?php echo $this->Html->link(__('View books'), array('action' => 'index')); ?></li>
				<li><?php echo $this->Html->link(__('View reviews'), array('controller' => 'reviews', 'action' => 'index')); ?> </li>
				<li><?php echo $this->Html->link(__('View book procurements'), array('controller' => 'procures', 'action' => 'index')); ?> </li>
				<li><?php echo $this->Html->link(__('View coupons'), array('controller' => 'coupons', 'action' => 'index')); ?> </li>
				<li><?php echo $this->Html->link(__('View wishlist'), array('controller' => 'wishlists', 'action' => 'index')); ?> </li>
			</ul>
		</div>
	</div>
</div>

<div id="templatemo_content_right">
	<div class="books form">
		<h1>Edit "<?php echo $this->data['Book']['bkTitle']; ?>"</h1>
		<?php echo $this->Form->create('Book', array('type' => 'file')); ?>
		<table align='center'>
			<?php
				echo $this->Form->input('bkID');
				echo $this->Formadd->inputAdd('bkTitle', array(
					'label' => 'Title',
					'error' => false,
					'size' => '75%'));
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
				echo $this->Formadd->inputAdd('bkSnippet', array(
					'label' => 'Description',
					'error' => false,
					'cols' => '57',
					'rows' => '10',
					'maxlength' => '1500'));
			?>
			<tr>
				<td>Book Cover</td>
				<td><div class="cleaner_with_image" /></td>
				<td><?php echo $this->Html->image($this->data['Book']['bkCover'], array('alt' => $this->data['Book']['bkTitle'], 'height' => 350)); ?></td>
			</tr>
			<?php echo $this->Formadd->inputAdd('bkCover', array('type' => 'file', 'label' => '', 'accept' => 'image/png, image/jpeg')); ?>
			<tr><td colspan=3><div class="cleaner_with_image" /></td></tr>
			<tr>
				<td colspan=3 align=center>
					<div class="submit">
						<hr><br>
						<?php echo $this->Form->submit(__('Edit book'), array('div' => false)); ?>
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
