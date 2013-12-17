<div id="templatemo_content_left">
	<div class="templatemo_content_left_section">
		<div class="actions">
			<h1><?php echo __('Actions'); ?></h1>
			<ul>
				<li><?php echo $this->Html->link(__('List Coupons'), array('action' => 'index')); ?></li>
				<li><?php echo $this->Html->link(__('List Checkouts'), array('controller' => 'checkouts', 'action' => 'index')); ?> </li>
				<li><?php echo $this->Html->link(__('New Coupon Checkout'), array('controller' => 'checkouts', 'action' => 'add')); ?> </li>
			</ul>
		</div>
	</div>
</div>

<div id="templatemo_content_right">
	<div class="coupons form">
		<h1>Add Coupon</h1>
		<?php echo $this->Form->create('Coupon', array('type' => 'file')); ?>
		<table align='center'>
			<?php
				echo $this->Formadd->inputAdd('cpnID', array('label' => 'Coupon Code', 'error' => false, 'size' => '25%', 'type' => 'text'));
				echo $this->Formadd->inputAdd('cpnType', array('label' => 'Type', 'error' => false, 'onclick' => 'couponfunction(value)', 'options' => array(
					'' => '', 
					'freeshipping' => 'Free Shipping', 
					'discount' => 'Discount')));
				echo $this->Formadd->inputAdd('cpnParam', array('label' => 'Discount', 'error' => false, 'options' => array(
					'' => '', 
					'0.1' => '10%', 
					'0.2' => '20%', 
					'0.3' => '30%', 
					'0.4' => '40%', 
					'0.5' => '50%')));
				echo $this->Formadd->inputAdd('cpnDetail', array('label' => 'Description', 'error' => false, 'cols' => '40', 'rows' => '3', 'maxlength' => '100'));
			?>
			<tr><td colspan=3><div class="cleaner_with_image" /></td></tr>
			<tr>
				<td colspan=3 align=center>
					<div class="submit">
						<hr><br>
						<?php echo $this->Form->submit(__('Reset'), array('type' => 'button', 'div' => false, 'onclick' => 'clearForm(this.form)')); ?>
						&emsp;&emsp;&emsp;&emsp;&emsp;
						<?php echo $this->Form->submit(__('Add Coupon'), array('div' => false)); ?>
						&nbsp;
						<?php echo $this->Form->submit(__('Cancel'), array('type' => 'button', 'id' => 'add', 'div' => false, 'onclick' => 'submitForm(id)')); ?>
						<input type="hidden" name="hiddenCancel" id="hiddenCancel">
					</div>
					<?php echo $this->Form->end();?>
				</td>
			</tr>
		</table>
	</div>
</div>
