<div id="templatemo_content_left">
	<div class="templatemo_content_left_section">
		<h1><?php echo __('Actions'); ?></h1>
		<ul>
			<li><?php echo $this->Form->postLink(__('Sort by title'), array('action' => 'new_releases', 'Book.bkTitle', 'ASC')); ?></li>
			<li><?php echo $this->Form->postLink(__('Sort by author'), array('action' => 'new_releases', 'Book.bkAuthor', 'ASC')); ?></li>
			<li><?php echo $this->Form->postLink(__('Sort by newest first'), array('action' => 'new_releases', 'Book.bkPubDate', 'DESC')); ?></li>
			<li><?php echo $this->Form->postLink(__('Sort by oldest first'), array('action' => 'new_releases', 'Book.bkPubDate', 'ASC')); ?></li>
			<li><?php echo $this->Form->postLink(__('Sort by highest rated'), array('action' => 'new_releases', 'Book.bkRating', 'DESC')); ?></li>
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
	<div class="books form">
		<h1>New releases for the past year!!!</h1>
		<table class="table table-condensed table-bordered table-hover" cellpadding="0" cellspacing="0" align="center">
			<tr>
				<th>Title</th>
				<th>Author</th>
				<th>Book Number</th>
				<th>Rating</th>
				<th>Price</th>
				<th>Stock</th>
			</tr>
				<?php 
			    	for ($i=0; $i<count($releases); $i++) {
			    		echo "<tr>";
						echo '<td>' . $this->Html->link(__($releases[$i]['Book']['bkTitle']), array('action' => 'view', $releases[$i]['Book']['bkID']));
						echo "<td align='center'>".$releases[$i]['Book']['bkAuthor'];
						echo '<td align=\'center\'>' . $releases[$i]['Book']['bkID'];
						echo "<td align='center'>".$releases[$i]['Book']['bkRating'];
						echo '<td align=\'center\'>$' . (empty($releases[$i]['Book']['bkDiscPrice']) ? $releases[$i]['Book']['bkPrice'] : $releases[$i]['Book']['bkDiscPrice']);
						echo '<td align=\'center\'>' . ($releases[$i]['Book']['bkQnty'] < 6 ? $releases[$i]['Book']['bkQnty'] . ' remaining' : 'in stock');
						echo "</tr>";
			    	}
			    	echo "<br>";
				?>
		</table>
	</div>
</div>
