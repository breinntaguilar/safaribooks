<div id="templatemo_content_left">
	<div class="templatemo_content_left_section">
		<h1><?php echo __('Actions'); ?></h1>
		<ul>
			<li><?php echo $this->Form->postLink(__('Sort by title'), array('action' => 'search', 'Book.bkTitle', 'ASC')); ?></li>
			<li><?php echo $this->Form->postLink(__('Sort by author'), array('action' => 'search', 'Book.bkAuthor', 'ASC')); ?></li>
			<li><?php echo $this->Form->postLink(__('Sort by newest first'), array('action' => 'search', 'Book.bkPubDate', 'DESC')); ?></li>
			<li><?php echo $this->Form->postLink(__('Sort by oldest first'), array('action' => 'search', 'Book.bkPubDate', 'ASC')); ?></li>
			<li><?php echo $this->Form->postLink(__('Sort by highest rated'), array('action' => 'search', 'Book.bkRating', 'DESC')); ?></li>
		</ul>
	</div>
	<?php
		if ($this->Session->read('Auth')['User']['usrRole'] !== '1') {
			echo '<div class="templatemo_content_left_section">';
			echo '<h1>' . __('Admin') . '</h1>';
			echo '<ul>';
			if ($this->Session->read('Auth')['User']['usrRole'] === '2') {
				echo '<li>' . $this->Html->link(__('Add new customer'), array('controller' => 'users', 'action' => 'add')) . '</li>';
				echo '<li>' . $this->Html->link(__('View book reviews'), array('controller' => 'reviews', 'action' => 'index')) . '</li>';
				echo '<li>' . $this->Html->link(__('View users'), array('controller' => 'users', 'action' => 'index')) . '</li>';
			}
			elseif ($this->Session->read('Auth')['User']['usrRole'] === '3') {
				echo '<li>' . $this->Html->link(__('Add new book'), array('controller' => 'books', 'action' => 'add')) . '</li>';
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
		<h1><?php echo __('Search'); ?></h1>
		<table class="table table-condensed table-bordered table-hover" cellpadding="0" cellspacing="0" align="center">
			<?php  
		    	echo $this->Form->create("Book",array('action' => 'search'));
				echo $this->Form->input('search_key', array('label' => 'Search: ', 'size' => '50%', 'div' => false)) . $this->Form->end(array('label'=> 'Go', 'div' => false)) . '&nbsp;&nbsp;&nbsp;' . $this->Form->create("Book",array('action' => 'search')) . $this->Form->end(array('label'=> 'Show all books', 'div' => false));
				if (isset($books)) {
					echo "<br><br>Total records found: ".count($books)."<br>";
					echo "<tr>";
					echo "<th>"."Title";
					echo "<th>"."Author";
					echo '<th>' . 'Book Number';
					echo "<th>"."Rating";
					echo '<th>' . 'Price';
					echo '<th>' . 'Stock';
					echo "</tr>";
					for ($i=0; $i<count($books); $i++) {
						echo "<tr>";
						echo '<td>' . $this->Html->link(__($books[$i]['Book']['bkTitle']), array('action' => 'view', $books[$i]['Book']['bkID']));
						echo "<td align='center'>".$books[$i]['Book']['bkAuthor'];
						echo '<td align="center">' . $books[$i]['Book']['bkID'];
						echo "<td align='center'>".$books[$i]['Book']['bkRating'];
						echo '<td align="center">$' . (empty($books[$i]['Book']['bkDiscPrice']) ? $books[$i]['Book']['bkPrice'] : $books[$i]['Book']['bkDiscPrice']);
						echo '<td align="center">' . ($books[$i]['Book']['bkQnty'] < 6 ? $books[$i]['Book']['bkQnty'] . ' remaining' : 'in stock');
						echo "</tr>";
					}
					echo "<br>";
				}
			?>
		</table>
	</div>
</div>
