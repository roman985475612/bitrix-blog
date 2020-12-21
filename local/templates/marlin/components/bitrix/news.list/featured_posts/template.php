<?php if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<aside class="widget">
    <h3 class="widget-title text-uppercase text-center">Featured Posts</h3>
    <div id="widget-feature" class="owl-carousel">
        <?php foreach($arResult['ITEMS'] as $item): ?>
            <div class="item">
                <div class="feature-content">
                    <img 
                        src="<?= $item['PREVIEW_PICTURE']['SRC'] ?>" 
                        alt="<?= $item['PREVIEW_PICTURE']['ALT'] ?>"
                        title="<?= $item['PREVIEW_PICTURE']['TITLE'] ?>"
                    >
                    <a href="<?= $item['DETAIL_PAGE_URL'] ?>" class="overlay-text text-center">
                        <h5 class="text-uppercase"><?= $item['NAME'] ?></h5>
                        <p><?= cutStr($item['PREVIEW_TEXT'], 50) ?></p>
                    </a>
                </div>
            </div>
        <?php endforeach ?>
    </div>
</aside>
