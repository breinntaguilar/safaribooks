<div id="templatemo_content_left">
	<div class="templatemo_content_left_section">
		<div class="actions">
			<h1><?php echo __('Actions'); ?></h1>
			<ul>

				<li><?php echo $this->Html->link(__('List Wishlists'), array('action' => 'index')); ?></li>
				<li><?php echo $this->Html->link(__('List Customers'), array('controller' => 'customers', 'action' => 'index')); ?> </li>
				<li><?php echo $this->Html->link(__('New Wishlist Customer'), array('controller' => 'customers', 'action' => 'add')); ?> </li>
				<li><?php echo $this->Html->link(__('List Books'), array('controller' => 'books', 'action' => 'index')); ?> </li>
				<li><?php echo $this->Html->link(__('New Wishlist Book'), array('controller' => 'books', 'action' => 'add')); ?> </li>
			</ul>
		</div>
	</div>
</div>
<div id="templatemo_content_right">
	<div class="wishlists form">
		<h1>Add Wishlists</h1>
		<?php echo $this->Form->create('Wishlist'); ?>
		<table align='left' border=0>	
			<?php
				echo $this->Formadd->inputAdd('cusID');
				echo $this->Formadd->inputAdd('bkID');
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

