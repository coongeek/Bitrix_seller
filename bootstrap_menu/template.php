<?php if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED != true) die();?>
<?php if (!empty($arResult)):?>
<nav class="navbar">
	<div class="container-fluid">
		<ul class="nav">
<?php foreach($arResult as $arItem):?>
	
	<?php if($arItem["PERMISSION"] > "D"):?>
		
		<?php if($arItem["SELECTED"] === true):?>
			<li class="active">
		<?php else:?>
			<li>
		<?php endif; ?>
				<a href="<?php=$arItem["LINK"]?>"><?php=$arItem["TEXT"]):?></a>
			</li>
	<?php endif;?>
<?php endforeach;?>
	</div>
</nav>
<?php endif;?>
