<div id="templatemo_content_left">
	<?php
		if (!isset($this->Session->read('Auth')['User']) OR $this->Session->read('Auth')['User']['usrRole'] === '1') {
			echo '<div class="templatemo_content_left_section">';
			echo '<h1>' . __('Actions') . '</h1>';
			echo '<ul>';
			echo '<li>' . $this->Html->link(__('View profile'), array('controller' => 'users', 'action' => 'view', $this->Session->read('Auth')['User']['usrID'])) . '</li>';
			echo '<li>' . $this->Html->link(__('Add credit card'), array('controller' => 'credits', 'action' => 'add')) . '</li>';
			echo '<li>' . $this->Html->link(__('View books'), array('controller' => 'books', 'action' => 'index')) . '</li>';
			echo '<li>' . $this->Html->link(__('View active coupons'), array('controller' => 'coupons', 'action' => 'index')) . '</li>';
			echo '</ul>';
			echo '</div>';
		}
		elseif (isset($this->Session->read('Auth')['User']) && $this->Session->read('Auth')['User']['usrRole'] !== '1') {
			echo '<div class="templatemo_content_left_section">';
			echo '<h1>' . __('Admin') . '</h1>';
			echo '<ul>';
			if ($this->Session->read('Auth')['User']['usrRole'] === '2') {
				echo '<li>' . $this->Html->link(__('View reviews'), array('controller' => 'reviews', 'action' => 'index')) . '</li>';
				echo '<li>' . $this->Html->link(__('View users'), array('controller' => 'users', 'action' => 'index')) . '</li>';
			}
			elseif ($this->Session->read('Auth')['User']['usrRole'] === '3') {
				echo '<li>' . $this->Html->link(__('Add new book'), array('action' => 'add')) . '</li>';
				echo '<li>' . $this->Html->link(__('View reviews'), array('controller' => 'reviews', 'action' => 'index')) . '</li>';
				echo '<li>' . $this->Html->link(__('View book procurements'), array('controller' => 'procures', 'action' => 'index')) . '</li>';
				echo '<li>' . $this->Html->link(__('View coupons'), array('controller' => 'coupons', 'action' => 'index')) . '</li>';
				echo '<li>' . $this->Html->link(__('View wishlist'), array('controller' => 'wishlists', 'action' => 'index')) . '</li>';
				echo '<li>' . $this->Html->link(__('View users'), array('controller' => 'users', 'action' => 'index')) . '</li>';
			}
			echo '</ul>';
			echo '</div>';
		}
	?>
</div>

<div id="templatemo_content_right">
	<div class="credits index">
		<h1><?php echo __('Credit Cards'); ?></h1>
		<table class="table table-condensed table-bordered table-hover" cellpadding="0" cellspacing="0">
			<tr>
				<th><?php echo $this->Paginator->sort('ccNum', 'Credit Card Number'); ?></th>
				<th><?php echo $this->Paginator->sort('ccType', 'Card Type'); ?></th>
				<th class="actions"><?php echo __('Actions'); ?></th>
			</tr>
			<?php foreach ($credits as $credit): ?>
				<tr align="center">
					<td><?php echo h($credit['Credit']['ccNum']); ?>&nbsp;</td>
					<td><?php echo h($credit['Credit']['ccType']); ?>&nbsp;</td>
					<td class="actions">
						<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $credit['Credit']['ccNum'])); ?>
						<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $credit['Credit']['ccNum']), null, __('Are you sure you want to delete this card?', $credit['Credit']['ccNum'])); ?>
					</td>
				</tr>
			<?php endforeach; ?>
		</table>
	</div>
</div>
