<div id="templatemo_content_left">
	<div class="templatemo_content_left_section">
		<h1><?php echo __('Actions'); ?></h1>
		<ul>
			<li><?php echo $this->Html->link(__('Edit profile'), array('action' => 'edit', $user['User']['usrID'])); ?></li>
			<?php
				if ($user['User']['usrStat'] == 0) {
					echo '<li>' . $this->Html->link(__('Deactivate account'), array('action' => 'delete', $user['User']['usrID']), null, __('Are you sure you want to deactivate the account?')) . '</li>';
				}
				elseif (isset($this->Session->read('Auth')['User']) && $this->Session->read('Auth')['User']['usrRole'] !== '1') {
					echo '<li>' . $this->Html->link(__('Re-activate account'), array('action' => 'readd', $user['User']['usrID']), null, __('Are you sure you want to re-activate the account?')) . '</li>';
				}
			?>
		</ul>
	</div>
	<?php
		if (isset($this->Session->read('Auth')['User']) && $this->Session->read('Auth')['User']['usrRole'] !== '1') {
			echo '<div class="templatemo_content_left_section">';
			echo '<h1>' . __('Admin') . '</h1>';
			echo '<ul>';
			if ($this->Session->read('Auth')['User']['usrRole'] === '2') {
				echo '<li>' . $this->Html->link(__('View book reviews'), array('controller' => 'reviews', 'action' => 'index')) . '</li>';
				echo '<li>' . $this->Html->link(__('View users'), array('controller' => 'users', 'action' => 'index')) . '</li>';
			}
			elseif ($this->Session->read('Auth')['User']['usrRole'] === '3') {
				echo '<li>' . $this->Html->link(__('Add new book'), array('action' => 'add')) . '</li>';
				echo '<li>' . $this->Html->link(__('View book reviews'), array('controller' => 'reviews', 'action' => 'index')) . '</li>';
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
	<div class="users view">
		<h1><?php echo h($user['User']['usrFname'] . ' ' . $user['User']['usrLname']); ?></h1>
		<ul>
			<?php
				if (isset($this->Session->read('Auth')['User']) && $this->Session->read('Auth')['User']['usrRole'] !== '1') {
					echo '<li>' . __('User ID: ') . h($user['User']['usrID']) . '</li>';
				}
			?>
			<li><?php echo __('Email address: ') . h($user['User']['usrEmail']); ?></li>
			<li></li>
			<li><?php echo __('First name: ') . h($user['User']['usrFname']); ?></li>
			<li><?php echo __('Last name: ') . h($user['User']['usrLname']); ?></li>
			<li></li>
			<li><?php echo __('Barangay: ') . h($user['User']['usrAddress1']); ?></li>
			<li><?php echo __('qwe') . h($user['User']['usrAddress2']); ?></li>
			<li><?php echo __('City: ') . h($user['User']['usrCity']); ?></li>
			<li><?php echo __('Province: ') . h($user['User']['usrProvince']); ?></li>
			<li><?php echo __('ZIP code: ') . h($user['User']['usrZIP']); ?></li>
			<li></li>
			<li><?php echo __('Phone number: ') . h($user['User']['usrPhone']); ?></li>
			<li><?php echo __('SS number: ') . h($user['User']['usrSSN']); ?></li>
			<li></li>
			<?php
				if (isset($this->Session->read('Auth')['User']) && $this->Session->read('Auth')['User']['usrRole'] !== '1') {
					if ($this->Session->read('Auth')['User']['usrRole'] === '3') {
						echo '<li>' . __('Role: ') . h($user['User']['usrRole']) . '</li>';
					}
					echo '<li>' . __('User status: ') . h($user['User']['usrStat']) . '</li>';
				}
			?>
		</ul>
	</div>
</div>
