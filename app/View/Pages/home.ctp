<?php
/**
 *
 * PHP 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.View.Pages
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */
if (!Configure::read('debug')):
	throw new NotFoundException();
endif;
App::uses('Debugger', 'Utility');
?>

<h3>Primeira Brincadeira com o cakePHP :)</h3>
<p>
	<span class="notice success">George Jegon - Exercício 1</span>
</p>

<div id="box-list">
	<div class="box-home round-box shadow-box">
		<?php 
			echo $this->Html->link(
				$this->Html->image("github.png",array("title"=>"GitHub","name"=>"GitHub")),
				"https://github.com/GeorgeJegon/cursoCakePHP",
				array('escape'=>false,'target'=>'_blank')); 
			?>
	</div>
	<div class="box-home round-box shadow-box">
		<?php 
			echo $this->Html->link(
				$this->Html->image("cakePHP.png",array("title"=>"Logo cakePHP","alt"=>"Logo cakePHP")),
				"http://www.cakephp.org/",
				array('escape'=>false,'target'=>'_blank')
			); 
		?>
	</div>
	<div class="box-home round-box shadow-box">
		<?php 
			echo $this->Html->link(
				$this->Html->image("assando-sites.png",array("title"=>"Assando Sites","alt"=>"Assando Sites")),
				"http://www.assando-sites.com.br/",
				array('escape'=>false,'target'=>'_blank')
			); 
		?>
	</div>
</div>
