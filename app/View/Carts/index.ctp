<div id="templatemo_content_left">
    <div class="templatemo_content_left_section">
		<div class="actions">
			<h1><?php echo __('Actions'); ?></h1>
			<ul>
				<li><?php echo $this->Html->link(__('List Customers'), array('controller' => 'users', 'action' => 'index')); ?> </li>
				<li><?php echo $this->Html->link(__('New Cart Customer'), array('controller' => 'users', 'action' => 'add')); ?> </li>
				<li><?php echo $this->Html->link(__('List Books'), array('controller' => 'books', 'action' => 'index')); ?> </li>
			</ul>
		</div>
	</div>
</div>
<div id="templatemo_content_right">
		<div class="carts index">
			<h1>Cart List</h1>
			<table class="table table-condensed table-bordered table-hover" cellpadding="1" cellspacing="1">
			<tr>
					<th><?php echo $this->Paginator->sort('crtID'); ?></th>
					<th><?php echo $this->Paginator->sort('usrID'); ?></th>
					<th><?php echo $this->Paginator->sort('bkID'); ?></th>
					<th><?php echo $this->Paginator->sort('crtQnty'); ?></th>
					<th><?php echo $this->Paginator->sort('crtShip'); ?></th>
					<th class="actions"><?php echo __('Actions'); ?></th>
			</tr>
			<?php foreach ($carts as $cart): ?>
			<tr>
				<td><?php echo h($cart['Cart']['crtID']); ?>&nbsp;</td>
				<td>
					<?php echo $this->Html->link($cart['CartCustomer']['cusEmail'], array('controller' => 'users', 'action' => 'view', $cart['CartUser']['usrID'])); ?>
				</td>
				<td>
					<?php echo $this->Html->link($cart['CartBook']['bkTitle'], array('controller' => 'books', 'action' => 'view', $cart['CartBook']['bkID'])); ?>
				</td>
				<td><?php echo h($cart['Cart']['crtQnty']); ?>&nbsp;</td>
				<td><?php echo h($cart['Cart']['crtShip']); ?>&nbsp;</td>
				<td class="actions">
					<?php echo $this->Html->link(__('View'), array('action' => 'view', $cart['Cart']['crtID'])); ?>
					<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $cart['Cart']['crtID'])); ?>
					<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $cart['Cart']['crtID']), null, __('Are you sure you want to delete # %s?', $cart['Cart']['crtID'])); ?>
				</td>
			</tr>
		<?php endforeach; ?>
			</table>
			<p>
			<?php
			echo $this->Paginator->counter(array(
			'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
			));
			?>	</p>
			<div class="paging">
			<?php
				echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
				echo $this->Paginator->numbers(array('separator' => ''));
				echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
			?>
			</div>
		</div>
</div>



