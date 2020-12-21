<?php if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<aside class="widget">
    <h3 class="widget-title text-uppercase text-center">Popular Posts</h3>
    <?php foreach($arResult['ITEMS'] as $item): ?>
        <div class="popular-post">
            <a href="<?= $item['DETAIL_PAGE_URL'] ?>">
                <img 
                    src="<?= $item['PREVIEW_PICTURE']['SRC'] ?>" 
                    alt="<?= $item['PREVIEW_PICTURE']['ALT'] ?>"
                    title="<?= $item['PREVIEW_PICTURE']['TITLE'] ?>"
                >
            </a>
            <div class="p-content">
                <a href="<?= $item['DETAIL_PAGE_URL'] ?>" class="text-uppercase"><?= $item['NAME'] ?></a>
                <span class="p-date"><?= $item['DISPLAY_ACTIVE_FROM'] ?></span>
            </div>
        </div>
    <?php endforeach ?>
</aside>
