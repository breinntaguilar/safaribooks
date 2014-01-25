<div id="templatemo_content_left">
	<?php
		if ((!isset($this->Session->read('Auth')['User'])) OR (isset($this->Session->read('Auth')['User']) && $this->Session->read('Auth')['User']['usrRole'] === '1')) {
			echo '<div class="templatemo_content_left_section">';
			echo '<h1>' . __('Actions') . '</h1>';
			echo '<ul>';
			echo '<li>' . $this->Html->link(__('Review the book'), array('controller' => 'reviews', 'action' => 'add', $book['Book']['bkID'])) . '</li>';
			echo '<li>' . $this->Html->link(__('Add to Wishlist'), array('controller' => 'wishlists', 'action' => 'add', $book['Book']['bkID'])) . '</li>';
			echo '<li>' . $this->Html->link(__('Add to Cart'), array('controller' => 'carts', 'action' => 'add', $book['Book']['bkID'])) . '</li>';
			echo '</ul>';
			echo '</div>';
		}
		elseif (isset($this->Session->read('Auth')['User']) && $this->Session->read('Auth')['User']['usrRole'] !== '1') {
			echo '<div class="templatemo_content_left_section">';
			echo '<h1>' . __('Admin') . '</h1>';
			echo '<ul>';
			if ($this->Session->read('Auth')['User']['usrRole'] === '2') {
				echo '<li>' . $this->Html->link(__('View reviews'), array('controller' => 'reviews', 'action' => 'index', $book['Book']['bkID'])) . '</li>';
			}
			elseif ($this->Session->read('Auth')['User']['usrRole'] === '3') {
				echo '<li>' . $this->Html->link(__('Edit book'), array('action' => 'edit', $book['Book']['bkID'])) . '</li>';
				if ($book['Book']['bkStat'] == 0) {
					echo '<li>' . $this->Html->link(__('Delete book'), array('action' => 'delete', $book['Book']['bkID']), null, __('Are you sure you want to delete this book?')) . '</li>';
				}
				else {
					echo '<li>' . $this->Html->link(__('Re-add book'), array('action' => 'readd', $book['Book']['bkID']), null, __('Are you sure you want to add this book again to the inventory?')) . '</li>';
				}
				echo '<li>' . $this->Html->link(__('Add new book'), array('action' => 'add')) . '</li>';
				echo '<li>' . $this->Html->link(__('View reviews'), array('controller' => 'reviews', 'action' => 'index', $book['Book']['bkID'])) . '</li>';
				echo '<li>' . $this->Html->link(__('View book procurements'), array('controller' => 'procures', 'action' => 'index')) . '</li>';
				echo '<li>' . $this->Html->link(__('View coupons'), array('controller' => 'coupons', 'action' => 'index')) . '</li>';
				echo '<li>' . $this->Html->link(__('View wishlist'), array('controller' => 'wishlists', 'action' => 'index')) . '</li>';
			}
			echo '</ul>';
			echo '</div>';
		}
	?>
</div>

<div id="templatemo_content_right">
	<div class="books view">
		<h1><?php echo h($book['Book']['bkTitle']); ?></h1>
		<div class="image_panel"><?php if ($book['Book']['bkCover']) echo $this->Html->image($book['Book']['bkCover'], array('alt' => $book['Book']['bkTitle'], 'height' => 350)); ?></div>
		<ul>
			<li>By <?php echo h($book['Book']['bkAuthor']); ?></li>
			<li>Published: <?php echo h($book['Book']['bkPubDate']); ?></li>
			<li>Book No.: <?php echo h($book['Book']['bkID']); ?></li>
			<li>
				<div class="flexible-stars"
					data-gold="sprite-gold-star"
					data-silver="sprite-silver-star"
					data-half="sprite-half-star"
					data-init="<?php echo h($book['Book']['bkRating']); ?>"
					data-isLocked="yes">
				</div>
				<?php echo $this->Html->link(__(h(count($book['BookReview'])) .	' customer reviews'), array('controller' => 'reviews', 'action' => 'index', $book['Book']['bkID'])); ?>
			</li>
			<li><?php echo '', (!empty($book['Book']['bkDiscPrice']) ? '<strike><font color="orange">$' . h($book['Book']['bkPrice']) . '</font></strike>' : '$' . h($book['Book']['bkPrice'])); echo '', (!empty($book['Book']['bkDiscPrice']) ? '&nbsp;&nbsp;&nbsp; | &nbsp;&nbsp;&nbsp;$' . h($book['Book']['bkDiscPrice']) : false); ?></li>
			<li><?php echo ($book['Book']['bkQnty'] < 6 ? 'only ' . h($book['Book']['bkQnty']) . ' remaining' : 'in stock'); ?></li>
			<li><?php echo ($book['Book']['bkStat'] == 1 ? '<strong><font color="red">Discontinued</font></strong>' : false); ?></li>
		</ul>
		<p />
		<p><?php echo nl2br(h($book['Book']['bkSnippet'])); ?></p>
		<div class="cleaner_with_height">&nbsp;</div>
	</div>
</div>
