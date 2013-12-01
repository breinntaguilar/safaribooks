<div id="templatemo_content_left">
	<div class="templatemo_content_left_section">
		<div class="actions">
			<h1><?php echo __('Actions'); ?></h1>
			<ul>
				<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Detail.cmnID')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Detail.cmnID'))); ?></li>
				<li><?php echo $this->Html->link(__('List Details'), array('action' => 'index')); ?></li>
				<li><?php echo $this->Html->link(__('List Customers'), array('controller' => 'customers', 'action' => 'index')); ?> </li>
				<li><?php echo $this->Html->link(__('New Detail Customer'), array('controller' => 'customers', 'action' => 'add')); ?> </li>
				<li><?php echo $this->Html->link(__('List Employees'), array('controller' => 'employees', 'action' => 'index')); ?> </li>
				<li><?php echo $this->Html->link(__('New Detail Employee'), array('controller' => 'employees', 'action' => 'add')); ?> </li>
			</ul>
		</div>
	</div>
</div>

<div id="templatemo_content_right">
	<div class="details form">
		<h1>Edit Account</h1>
		<?php echo $this€->Form->create('Detail'); ?>
		<table align='center'>
			<?php
				echo $this->Form->input('cmnID');
				echo $this->Formadd->inputAdd('Detail.cmnFname', array('label' => 'First Name', 'error' => false, 'size' => '76%'));
				echo $this->Formadd->inputAdd('Detail.cmnLname', array('label' => 'Last Name', 'error' => false, 'size' => '76%'));
				echo $this->Formadd->inputAdd('Detail.cmnAddress1', array('label' => 'Address Line 1', 'error' => false, 'size' => '76%'));
				echo $this->Formadd->inputAdd('Detail.cmnAddress2', array('label' => 'Address Line 2', 'error' => false, 'size' => '76%'));
				echo $this->Formadd->inputAdd('Detail.cmnZIP', array('label' => 'Zip/Postal Code', 'error' => false, 'size' => '3%', 'type' => 'text', 'maxlength' => '4', 'onblur' => 'checkAddress()'));
				echo $this->Formadd->inputAdd('Detail.cmnCity', array('label' => 'Town or City', 'error' => false, 'size' => '76%'));
				echo $this->Formadd->inputAdd('Detail.cmnProvince', array('label' => 'Province', 'error' => false, 'size' => '76%'));
				echo $this->Formadd->inputAdd('Detail.cmnPhone', array('label' => 'Phone', 'error' => false, 'size' => '10%', 'type' => 'text', 'maxlength' => '10'));
				echo $this->Formadd->inputAdd('Customer.cusEmail', array('label' => 'Email Address', 'error' => false, 'size' => '35%'));
				echo $this->Formadd->inputAdd('Customer.cusPass', array('label' => 'Password', 'error' => false, 'size' => '35%'));
				echo $this->Formadd->inputAdd('Detail.cmnStat', array('label' => 'Status', 'error' => false));
			?>
			<tr><td colspan=3><div class="cleaner_with_image" /></td></tr>
			<tr>
				<td colspan=3 align=center>
					<div class="submit">
						<hr><br>
						<?php echo $this->Form->submit(__('Reset'), array('type' => 'reset', 'div' => false)); ?>
						&emsp;&emsp;&emsp;&emsp;&emsp;
						<?php echo $this->Form->submit(__('Edit account'), array('div' => false)); ?>
						&nbsp;
						<?php echo $this->Form->submit(__('Cancel'), array('type' => 'button', 'id' => 'edit', 'div' => false, 'onclick' => 'submitForm(id)')); ?>
						<input type="hidden" name="hiddenCancel" id="hiddenCancel">
					</div>
					<?php echo $this->Form->end();?>
				</td>
			</tr>
		</table>
	</div>
</div>
