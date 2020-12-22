<?php if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?php //dd($arResult['ITEMS']) ?>
<?php foreach ($arResult['ITEMS'] as $item): ?>
    <article class="post">
        <div class="post-thumb">
            <a href="<?= $item['DETAIL_PAGE_URL'] ?>">
                <img 
                    src="<?= $item['PREVIEW_PICTURE']['SRC'] ?>" 
                    title="<?= $item['PREVIEW_PICTURE']['TITLE'] ?>"
                    alt="<?= $item['PREVIEW_PICTURE']['ALT'] ?>"
                >
            </a>
            <a href="<?= $item['DETAIL_PAGE_URL'] ?>" class="post-thumb-overlay text-center">
                <div class="text-uppercase text-center">View Post</div>
            </a>
        </div>
        <div class="post-content">
            <header class="entry-header text-center text-uppercase">
                <h6><a href="<?= $item['CATEGORY']['URL'] ?>"><?= $item['CATEGORY']['NAME'] ?></a></h6>
                <h1 class="entry-title"><a href="<?= $item['DETAIL_PAGE_URL'] ?>"><?= $item['NAME'] ?></a></h1>
            </header>
            <div class="entry-content">
                <?= $item['PREVIEW_TEXT'] ?>
                <div class="btn-continue-reading text-center text-uppercase">
                    <a href="<?= $item['DETAIL_PAGE_URL'] ?>" class="more-link">Continue Reading</a>
                </div>
            </div>
            <div class="social-share">
                <span class="social-share-title pull-left text-capitalize">By <a href="#"><?= $item['AUTHOR'] ?></a> On <?= $item['DISPLAY_ACTIVE_FROM'] ?></span>
                <ul class="text-center pull-right">
                    <li><a href="#"><i class="fa fa-eye"></i> <?= $item['SHOW_COUNTER'] ?></a></li>
                    <li><a class="s-facebook" href="#"><i class="fa fa-facebook"></i></a></li>
                    <li><a class="s-twitter" href="#"><i class="fa fa-twitter"></i></a></li>
                    <li><a class="s-google-plus" href="#"><i class="fa fa-google-plus"></i></a></li>
                    <li><a class="s-linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>
                    <li><a class="s-instagram" href="#"><i class="fa fa-instagram"></i></a></li>
                </ul>
            </div>
        </div>
    </article>
<?php endforeach ?>

<?= $arResult['NAV_STRING'] ?>
