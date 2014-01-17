<div id="templatemo_content_left">
	<div class="templatemo_content_left_section">
		<div class="actions">
			<h1><?php echo __('Actions'); ?></h1>
			<ul>
				<li><?php echo $this->Html->link(__('List Users'), array('action' => 'index')); ?></li>
				<li><?php echo $this->Html->link(__('List Credits'), array('controller' => 'credits', 'action' => 'index')); ?> </li>
				<li><?php echo $this->Html->link(__('New User Credit'), array('controller' => 'credits', 'action' => 'add')); ?> </li>
				<li><?php echo $this->Html->link(__('List Carts'), array('controller' => 'carts', 'action' => 'index')); ?> </li>
				<li><?php echo $this->Html->link(__('New User Cart'), array('controller' => 'carts', 'action' => 'add')); ?> </li>
				<li><?php echo $this->Html->link(__('List Checkouts'), array('controller' => 'checkouts', 'action' => 'index')); ?> </li>
				<li><?php echo $this->Html->link(__('New User Checkout'), array('controller' => 'checkouts', 'action' => 'add')); ?> </li>
				<li><?php echo $this->Html->link(__('List Reviews'), array('controller' => 'reviews', 'action' => 'index')); ?> </li>
				<li><?php echo $this->Html->link(__('New User Review'), array('controller' => 'reviews', 'action' => 'add')); ?> </li>
				<li><?php echo $this->Html->link(__('List Wishlists'), array('controller' => 'wishlists', 'action' => 'index')); ?> </li>
				<li><?php echo $this->Html->link(__('New User Wishlist'), array('controller' => 'wishlists', 'action' => 'add')); ?> </li>
				<li><?php echo $this->Html->link(__('List Procures'), array('controller' => 'procures', 'action' => 'index')); ?> </li>
				<li><?php echo $this->Html->link(__('New User Procure'), array('controller' => 'procures', 'action' => 'add')); ?> </li>
			</ul>
		</div>
	</div>
</div>

<div id="templatemo_content_right">
	<div class="users form">
		<h1>Login</h1>
		<?php echo $this->Session->flash('auth'); ?>
		<?php echo $this->Form->create('User'); ?>
		<table align='center'>
			<?php
				echo $this->Formadd->inputAdd('usrEmail', array('label' => 'Email', 'size' => '5%'));
				echo $this->Formadd->inputAdd('usrPass', array('label' => 'Password', 'size' => '5%'));
			?>
			<tr><td colspan=3><div class="cleaner_with_image" /></td></tr>
			<tr>
				<td colspan=3 align=center>
					<div class="submit">
						<hr><br>
						<?php echo $this->Form->submit(__('Login'), array('div' => false)); ?>
						<?php echo $this->Form->submit(__('Cancel'), array('type' => 'button', 'id' => 'add', 'div' => false, 'onclick' => 'submitForm(id)')); ?>
						<input type="hidden" name="hiddenCancel" id="hiddenCancel">
					</div>
					<?php echo $this->Form->end();?>
				</td>
			</tr>
		</table>
	</div>
</div>
