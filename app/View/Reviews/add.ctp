<div id="templatemo_content_left">
	<div class="templatemo_content_left_section">
		<div class="actions">
			<h1><?php echo __('Actions'); ?></h1>
			<ul>
				<li><?php echo $this->Html->link(__('List Reviews'), array('action' => 'index')); ?></li>
				<li><?php echo $this->Html->link(__('List Books'), array('controller' => 'books', 'action' => 'index')); ?> </li>
			</ul>
		</div>
	</div>	
</div>
<!-- <<<<<<< HEAD -->
<!-- <div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
=======
>>>>>>> upstream/master -->

<div id="templatemo_content_right">
	<div class="reviews form">
		<h1>Add Book Review</h1>
		<div class="flexible-stars"
			data-gold="sprite-gold-star"
			data-silver="sprite-silver-star"
			data-half="sprite-half-star"
			data-init="0"
			data-doRate="#ReviewRevRating">
		</div>
		<?php echo $this->Form->create('Review', array('type' => 'file')); ?>
		<table align='left' border=0>	
			<?php
				echo $this->Formadd->inputAdd('cusID', array('label' => 'Customer ID', 'size' => '5%'));
				echo $this->Formadd->inputAdd('empID', array('label' => 'Employee ID', 'size' => '5%'));				
				echo $this->Formadd->inputAdd('bkID', array('label' => 'Book ID', 'size' => '5%', 'default' => $bookId));
				echo $this->Formadd->inputAdd('revDesc', array('label' => 'Description', 'cols' => '57', 'rows' => '10', 'maxlength' => '1500'));
				echo $this->Formadd->inputAdd('revRating', array('label' => 'Rating', 'size' => '5%'));
				echo $this->Formadd->inputAdd('revStat', array('label' => 'Status', 'size' => '5%'));
			?>
			<tr><td colspan="3"><div class="cleaner_with_image" /></td></tr>
			<tr>
				<td colspan="3" align="center">
					<div class="submit">
						<hr><br>
						<?php echo $this->Form->submit(__('Add Review'), array('div' => false)); ?>
						<?php echo $this->Form->submit(__('Cancel'), array('type' => 'button', 'id' => 'add', 'div' => false, 'onclick' => 'submitForm(id)')); ?>
						<?php echo $this->Form->submit(__('Reset'), array('type' => 'button', 'div' => false, 'onclick' => 'clearForm(this.form)')); ?>
						<input type="hidden" name="hiddenCancel" id="hiddenCancel">
					</div>
					<!-- <?php echo $this->Form->end(__('Submit')); ?> -->
				</td>
			</tr>
		</table>
	</div>
</div>
