<div id="templatemo_content_left">
	<?php
		if ((!isset($this->Session->read('Auth')['User'])) OR ($this->Session->read('Auth')['User']['usrRole'] === '1')) {
			echo '<div class="templatemo_content_left_section">';
			echo '<h1>' . __('Actions') . '</h1>';
			echo '<ul>';
			echo '<li>' . $this->Html->link(__('View active coupons'), array('controller' => 'coupons', 'action' => 'index')) . '</li>';
			echo '</ul>';
			echo '</div>';
		}
		elseif ($this->Session->read('Auth')['User']['usrRole'] !== '1') {
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
	<div class="books index">
		<?php $cnt = 1; foreach ($books as $book): ?>
			<div class="templatemo_product_box">
				<h1><?php echo '', (strlen($book['Book']['bkTitle']) + strlen($book['Book']['bkAuthor']) > 28 ?
						$this->Text->truncate(h($book['Book']['bkTitle']), abs(25 - strlen($book['Book']['bkAuthor'])), array('ellipsis' => '...', 'exact' => true)) :
						h($book['Book']['bkTitle'])); ?>
					<span>(by <?php echo h($book['Book']['bkAuthor']); ?>)</span>
				</h1>
				<?php if ($book['Book']['bkCover']) echo $this->Html->image($book['Book']['bkCover'],
					array('alt' => $book['Book']['bkTitle'], 'width' => 100, 'url' => array('action' => 'view', $book['Book']['bkID']))); ?>
				<div class="product_info">
					<p><?php echo $this->Text->truncate(h($book['Book']['bkSnippet']), 100, array('ellipsis' => '...', 'exact' => true)); ?></p>
					<h3><?php echo '', (!empty($book['Book']['bkDiscPrice']) ? '<strike><font color="orange">$' . h($book['Book']['bkPrice']) . '</font></strike>' : '$' . h($book['Book']['bkPrice'])); echo '', (!empty($book['Book']['bkDiscPrice']) ? '<font color="black">|</font>$' . h($book['Book']['bkDiscPrice']) : false); ?></h3>
					<div class="buy_now_button"><?php echo $this->Html->link(__('Buy Now'), array('controller' => 'carts', 'action' => 'add', $book['Book']['bkID']));?></div>
					<div class="detail_button"><?php echo $this->Html->link(__('Details'), array('action' => 'view', $book['Book']['bkID'])); ?></div>
				</div>
				<div class="cleaner">&nbsp;</div>
			</div>
			<?php
				$cnt++;
				echo '<div class="cleaner_with_', ($cnt % 2 == 0 ? 'width' : 'height') . '">&nbsp;</div>';
		endforeach; ?>
		
		<div class="cleaner_with_height">&nbsp;</div>
		<hr>
		<div class="paging" align="center">
			<?php
				echo $this->Paginator->prev('<< ', array(), null, array('class' => 'prev disabled'));
				echo $this->Paginator->numbers(array('separator' => ' '));
				echo $this->Paginator->next(' >>', array(), null, array('class' => 'next disabled'));
			?>
		</div>
	</div>
</div>
