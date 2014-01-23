<div id="templatemo_content_left">
	<div class="templatemo_content_left_section">
		<div class="actions">
			<h1><?php echo __('Actions'); ?></h1>
			<ul>
				<li><?php
					if (isset($this->Session->read('Auth')['User']) && ($this->Session->read('Auth')['User']['usrRole'] === '2' || $this->Session->read('Auth')['User']['usrRole'] === '3')) {
						echo $this->Html->link(__('New Book'), array('action' => 'add'));
					}
				?></li>
				<li><?php echo $this->Html->link(__('List Reviews'), array('controller' => 'reviews', 'action' => 'index')); ?> </li>
				<li><?php echo $this->Html->link(__('List Carts'), array('controller' => 'carts', 'action' => 'index')); ?> </li>
				<li><?php echo $this->Html->link(__('List Coupons'), array('controller' => 'coupons', 'action' => 'index')); ?></li>
				<li><?php echo $this->Html->link(__('List Procures'), array('controller' => 'procures', 'action' => 'index')); ?> </li>
				<li><?php echo $this->Html->link(__('List Wishlists'), array('controller' => 'wishlists', 'action' => 'index')); ?> </li>
			</ul>
		</div>
	</div>
</div>

<div id="templatemo_content_right">
	<div class="books form">
		<h1>Search</h1>
		<table class="table table-condensed table-bordered table-hover" cellpadding="0" cellspacing="0" align="center">
			<?php  
		    	echo $this->Form->create("Book",array('action' => 'search'));
				echo $this->Form->input('search_key', array('label' => 'Search: ', 'size' => '50%', 'div' => false)) .
					$this->Form->end(array('label'=> 'Go', 'div' => false)) . '&nbsp;&nbsp;&nbsp;' .
					$this->Form->create("Book",array('action' => 'search')) . $this->Form->end(array('label'=> 'Show all books', 'div' => false));;
				if (isset($book)) {
					echo "<br><br>Total records found: ".count($book)."<br>";
					echo "<tr>";
					echo "<th>"."Title";
					echo "<th>"."Author";
					echo '<th>' . 'Book Number';
					echo "<th>"."Rating";
					echo '<th>' . 'Price';
					echo '<th>' . 'Stock';
					echo "</tr>";
					for ($i=0; $i<count($book); $i++) {
						echo "<tr>";
						echo '<td>' . $this->Html->link(__($book[$i]['Book']['bkTitle']), array('action' => 'view', $book[$i]['Book']['bkID']));
						echo "<td align='center'>".$book[$i]['Book']['bkAuthor'];
						echo '<td align=\'center\'>' . $book[$i]['Book']['bkID'];
						echo "<td align='center'>".$book[$i]['Book']['bkRating'];
						echo '<td align=\'center\'>$' . (empty($book[$i]['Book']['bkDiscPrice']) ? $book[$i]['Book']['bkPrice'] : $book[$i]['Book']['bkDiscPrice']);
						echo '<td align=\'center\'>' . ($book[$i]['Book']['bkQnty'] < 6 ? $book[$i]['Book']['bkQnty'] . ' remaining' : 'in stock');
						echo "</tr>";
					}
					echo "<br>";
				}
			?> 
		</table>
	</div>
</div>
