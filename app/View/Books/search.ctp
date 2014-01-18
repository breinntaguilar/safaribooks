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
		<h1>Looking for:</h1>
		<table align="center">
			<?php  
		    	echo $this->Form->create("Book",array('action' => 'search')); 
		    	echo $this->Form->input("search_key", array('label' => 'Search for: ')); 
		    	echo $this->Form->end("Search"); 
		    	echo "<br>";
		    	echo "Total records found: ".count($book)."<br>";
		    	if (count($book) == 0) echo "No results found.";
		    	for ($i=0; $i<count($book); $i++) {
					echo "<br>Title: ".$book[$i]['Book']['bkTitle'];
					echo "<br>Author: ".$book[$i]['Book']['bkAuthor'];
					echo "<br>Rating: ".$book[$i]['Book']['bkRating'];
					echo "<br>";
		    	}
		    	echo "<br>";
			?> 
		</table>
	</div>
</div>
