<div id="templatemo_content_left">
	<div class="templatemo_content_left_section">
		<div class="actions">
			<h3><?php echo __('Actions'); ?></h3>
			<ul>

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
		<h1>Add Book Review</h1>
		<?php echo $this->Form->create('Review', array('type' => 'file')); ?>
		<table align='center' border=0>	
			<?php
				echo $this->Formadd->inputAdd('cusID', array('label' => 'Customer ID', 'size' => '5%'));
				echo $this->Formadd->inputAdd('empID', array('label' => 'Employee ID', 'size' => '5%'));				
				echo $this->Formadd->inputAdd('bkID', array('label' => 'Book ID', 'size' => '5%', 'default' => $bookId));
				echo $this->Formadd->inputAdd('revDesc', array('label' => 'Description', 'cols' => '57', 'rows' => '10', 'maxlength' => '1500'));
				echo $this->Formadd->inputAdd('revRating', array('label' => 'Rating', 'size' => '5%'));
				echo $this->Formadd->inputAdd('revStat', array('label' => 'Status', 'size' => '5%'));
			?>
			<tr><td colspan=3><div class="cleaner_with_image" /></td></tr>
		</table>
		<?php echo $this->Form->end(__('Submit')); ?>
		
	</div>
</div>
