<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<aside class="widget tags-cloud">
    <h3 class="widget-title text-uppercase text-center"><?= GetMessage('TAGS_CLOUD') ?></h3>
    <div class="decoration">
        <?php foreach ($arResult['SEARCH'] as $tag): ?>
            <a href="<?= $tag['URL'] ?>" class="btn btn-default"><?= $tag['NAME'] ?></a>
        <?php endforeach ?>
    </div>
</aside>
