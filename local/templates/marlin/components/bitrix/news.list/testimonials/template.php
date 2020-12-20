<?php if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<aside class="footer-widget">
    <h3 class="widget-title text-uppercase">Testimonials</h3>
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <!--Indicator-->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner" role="listbox">
        	<?php foreach ($arResult['ITEMS'] as $key => $item): ?>
	            <div class="item <?php if ($key == 0) echo 'active'; ?>">
	                <div class="single-review">
	                    <div class="review-text">
	                    	<?= $item['PREVIEW_TEXT'] ?>
	                    </div>
	                    <div class="author-id">
	                        <img 
	                        	src="<?= $item['PREVIEW_PICTURE']['SRC'] ?>" 
	                        	alt="<?= $item['PREVIEW_PICTURE']['ALT'] ?>"
	                        	title="<?= $item['PREVIEW_PICTURE']['TITLE'] ?>"
                        	>
	                        <div class="author-text">
	                            <h4><?= $item['PROPERTIES']['NAME']['VALUE'] ?></h4>
	                            <h4><?= $item['PROPERTIES']['STATUS']['VALUE'] ?></h4>
	                        </div>
	                    </div>
	                </div>
	            </div>
        	<?php endforeach ?>
        </div>
    </div>
</aside>
