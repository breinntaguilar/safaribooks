<div id="templatemo_content_left">
	<div class="templatemo_content_left_section">
		<div class="actions">
			<h1><?php echo __('Actions'); ?></h1>
			<ul>

				<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Review.revID')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Review.revID'))); ?></li>
				<li><?php echo $this->Html->link(__('List Reviews'), array('action' => 'index')); ?></li>
				<li><?php echo $this->Html->link(__('List Customers'), array('controller' => 'customers', 'action' => 'index')); ?> </li>
				<li><?php echo $this->Html->link(__('New Review Customer'), array('controller' => 'customers', 'action' => 'add')); ?> </li>
				<li><?php echo $this->Html->link(__('List Books'), array('controller' => 'books', 'action' => 'index')); ?> </li>
				<li><?php echo $this->Html->link(__('New Review Book'), array('controller' => 'books', 'action' => 'add')); ?> </li>
				<li><?php echo $this->Html->link(__('List Employees'), array('controller' => 'employees', 'action' => 'index')); ?> </li>
				<li><?php echo $this->Html->link(__('New Review Employee'), array('controller' => 'employees', 'action' => 'add')); ?> </li>
			</ul>
		</div>
	</div>
</div>

<div id="templatemo_content_right">
	<div class="reviews form">
		<h1>Edit Review</h1>
		<?php echo $this->Form->create('Review'); ?>
		<table align='left' border=0>
			<?php
				echo $this->Formadd->inputAdd('revID', array('label' => 'Review ID', 'size' => '5%', 'readonly' => 'readonly'));
				echo $this->Formadd->inputAdd('cusID', array('label' => 'Customer ID', 'size' => '5%', 'readonly' => 'readonly'));
				echo $this->Formadd->inputAdd('empID', array('label' => 'Employee ID', 'size' => '5%', 'readonly' => 'readonly'));				
				echo $this->Formadd->inputAdd('bkID', array('label' => 'Book ID', 'size' => '5%', 'readonly' => 'readonly'));
				echo $this->Formadd->inputAdd('revDesc', array('label' => 'Description', 'cols' => '57', 'rows' => '10', 'maxlength' => '1500'));
				echo $this->Formadd->inputAdd('revRating', array('label' => 'Rating', 'size' => '5%'));
				echo $this->Formadd->inputAdd('revStat', array('label' => 'Status', 'size' => '5%'));
			?>
			<tr><td colspan="3"><div class="cleaner_with_image" /></td></tr>
	            <tr>
	                <td colspan="3" align="left">
	                    <div class="submit">
	                        <hr><br>
	                        <?php echo $this->Form->submit(__('Submit'), array('div' => false)); ?>
	                    </div>
	                    <!-- <?php echo $this->Form->end(__('Submit')); ?> -->
	                </td>
	            </tr>			
		</table>
	</div>
</div>
	
