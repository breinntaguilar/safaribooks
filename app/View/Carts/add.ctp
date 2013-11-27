<div id="templatemo_content_left">
	<div class="templatemo_content_left_section">
		<div class="actions">
			<h3><?php echo __('Actions'); ?></h3>
			<ul>

				<li><?php echo $this->Html->link(__('List Carts'), array('action' => 'index')); ?></li>
				<li><?php echo $this->Html->link(__('List Customers'), array('controller' => 'customers', 'action' => 'index')); ?> </li>
				<li><?php echo $this->Html->link(__('New Cart Customer'), array('controller' => 'customers', 'action' => 'add')); ?> </li>
				<li><?php echo $this->Html->link(__('List Books'), array('controller' => 'books', 'action' => 'index')); ?> </li>
				<li><?php echo $this->Html->link(__('New Cart Book'), array('controller' => 'books', 'action' => 'add')); ?> </li>
			</ul>
		</div>
	</div>
</div>

<div id="templatemo_content_right">
	<div class="cart form">
		<h1>Add Cart</h1>
		<?php echo $this->Form->create('Cart'); ?>
		<table align='center' border=0>	
			<?php
				echo $this->Formadd->inputAdd('cusID', array('label' => 'Customer ID', 'size' => '5%'));
				echo $this->Formadd->inputAdd('bkID', array('label' => 'Book ID', 'default' => $bookId, 'size' => '5%'));
				echo $this->Formadd->inputAdd('crtQnty', array('label' => 'Cart Quantity', 'size' => '5%'));
				echo $this->Formadd->inputAdd('crtShip', array('label' => 'Cart Shipment', 'size' => '5%'));
			?>
		<tr><td colspan=3><div class="cleaner_with_image" /></td></tr>
		</table>
		<?php echo $this->Form->end(__('Submit')); ?>
	</div>
</div>

