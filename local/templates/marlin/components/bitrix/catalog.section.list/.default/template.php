<?php if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?php //dd($arResult['SECTIONS']) ?>
<aside class="widget border pos-padding">
    <h3 class="widget-title text-uppercase text-center"><?= GetMessage('catalog_list') ?></h3>
    <ul>
        <?php foreach ($arResult['SECTIONS'] as $item): ?>
            <li>
                <a href="<?= $item['SECTION_PAGE_URL'] ?>"><?= $item['NAME'] ?></a>
                <span class="post-count pull-right"> (<?= $item['ELEMENT_CNT'] ?>)</span>
            </li>
        <?php endforeach ?>
    </ul>
</aside>
