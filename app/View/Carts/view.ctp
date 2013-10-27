<div class="carts view">
<h2><?php echo __('Cart'); ?></h2>
	<dl>
		<dt><?php echo __('CrtID'); ?></dt>
		<dd>
			<?php echo h($cart['Cart']['crtID']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Cart Customer'); ?></dt>
		<dd>
			<?php echo $this->Html->link($cart['CartCustomer']['cusEmail'], array('controller' => 'customers', 'action' => 'view', $cart['CartCustomer']['cusID'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Cart Book'); ?></dt>
		<dd>
			<?php echo $this->Html->link($cart['CartBook']['bkTitle'], array('controller' => 'books', 'action' => 'view', $cart['CartBook']['bkID'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('CrtQnty'); ?></dt>
		<dd>
			<?php echo h($cart['Cart']['crtQnty']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('CrtShip'); ?></dt>
		<dd>
			<?php echo h($cart['Cart']['crtShip']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Cart'), array('action' => 'edit', $cart['Cart']['crtID'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Cart'), array('action' => 'delete', $cart['Cart']['crtID']), null, __('Are you sure you want to delete # %s?', $cart['Cart']['crtID'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Carts'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Cart'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Customers'), array('controller' => 'customers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Cart Customer'), array('controller' => 'customers', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Books'), array('controller' => 'books', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Cart Book'), array('controller' => 'books', 'action' => 'add')); ?> </li>
	</ul>
</div>
