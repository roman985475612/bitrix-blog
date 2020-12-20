<?php if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<div class="footer-instagram-section">
    <h3 class="footer-instagram-title text-center text-uppercase">Instagram</h3>
    <div id="footer-instagram" class="owl-carousel">
    	<?php foreach($arResult['ITEMS'] as $item): ?>
	        <div class="item">
	            <a href="<?= $item['DETAIL_URL'] ?>">
	                <img 
	                	src="<?= $item['PREVIEW_PICTURE']['SRC'] ?>" 
	                	alt="<?= $item['PREVIEW_PICTURE']['ALT'] ?>"
	                	title="<?= $item['PREVIEW_PICTURE']['TITLE'] ?>"
	            	>
	            </a>
	        </div>
        <?php endforeach ?>
        <!-- Повторный вывод элементов на время разработки, ввиду отсутствия в базе нужного количества записей -->
    	<?php foreach($arResult['ITEMS'] as $item): ?> 
	        <div class="item">
	            <a href="<?= $item['DETAIL_URL'] ?>">
	                <img 
	                	src="<?= $item['PREVIEW_PICTURE']['SRC'] ?>" 
	                	alt="<?= $item['PREVIEW_PICTURE']['ALT'] ?>"
	                	title="<?= $item['PREVIEW_PICTURE']['TITLE'] ?>"
	            	>
	            </a>
	        </div>
        <?php endforeach ?>
    </div>
</div>
