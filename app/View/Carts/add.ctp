<div id="templatemo_content_left">
	<div class="templatemo_content_left_section">
		<div class="actions">
			<h1><?php echo __('Actions'); ?></h1>
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
		<table align='left' border=0>	
			<?php
				echo $this->Formadd->inputAdd('cusID', array('label' => 'Customer ID', 'size' => '5%'));
				echo $this->Formadd->inputAdd('bkID', array('label' => 'Book ID', 'default' => $bookId, 'size' => '5%', 'readonly' => 'readonly'));
				echo $this->Formadd->inputAdd('crtQnty', array('label' => 'Cart Quantity', 'size' => '5%'));
				echo $this->Formadd->inputAdd('crtShip', array('label' => 'Cart Shipment', 'size' => '5%'));
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

