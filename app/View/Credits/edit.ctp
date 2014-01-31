<div id="templatemo_content_left">
	<?php
		if (!isset($this->Session->read('Auth')['User']) OR $this->Session->read('Auth')['User']['usrRole'] === '1') {
			echo '<div class="templatemo_content_left_section">';
			echo '<h1>' . __('Actions') . '</h1>';
			echo '<ul>';
			echo '<li>' . $this->Html->link(__('View profile'), array('controller' => 'users', 'action' => 'view', $this->Session->read('Auth')['User']['usrID'])) . '</li>';
			echo '<li>' . $this->Html->link(__('View credit cards'), array('controller' => 'credits', 'action' => 'index')) . '</li>';
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

<div class="credits form">
<?php echo $this->Form->create('Credit'); ?>
	<fieldset>
		<legend><?php echo __('Edit Credit'); ?></legend>
	<?php
		echo $this->Form->input('ccNum');
		echo $this->Form->input('cusID');
		echo $this->Form->input('ccType');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Credit.ccID')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Credit.ccID'))); ?></li>
		<li><?php echo $this->Html->link(__('List Credits'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Customers'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Credit Customer'), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>
