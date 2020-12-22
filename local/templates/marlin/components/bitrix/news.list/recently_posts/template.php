<?php if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<aside class="widget pos-padding">
    <h3 class="widget-title text-uppercase text-center"><?= GetMessage('recently_posts') ?></h3>
    <?php foreach($arResult['ITEMS'] as $item): ?>
        <div class="thumb-latest-posts">
            <div class="media">
                <div class="media-left">
                    <a 
                        href="<?= $item['DETAIL_PAGE_URL'] ?>"
                        class="popular-img"
                    >
                        <img 
                            src="<?= $item['PREVIEW_PICTURE']['SRC'] ?>" 
                            alt="<?= $item['PREVIEW_PICTURE']['ALT'] ?>"
                            title="<?= $item['PREVIEW_PICTURE']['TITLE'] ?>"
                        >
                    </a>
                </div>
                <div class="p-content">
                    <a href="<?= $item['DETAIL_PAGE_URL'] ?>" class="text-uppercase"><?= $item['NAME'] ?></a>
                    <span class="p-date"><?= $item['DISPLAY_ACTIVE_FROM'] ?></span>
                </div>
            </div>
        </div>
    <?php endforeach ?>
</aside>
