<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
            </div>
            <div class="col-md-4" data-sticky_column>
                <div class="primary-sidebar">
                    <aside class="widget news-letter">
                        <h3 class="widget-title text-uppercase text-center">Get Newsletter</h3>

                        <form action="#">
                            <input type="email" placeholder="Your email address">
                            <input type="submit" value="Subscribe Now"
                                   class="text-uppercase text-center btn btn-subscribe">
                        </form>

                    </aside>
                    <?php $APPLICATION->IncludeComponent('bitrix:catalog.section.list', '', [
                        'IBLOCK_TYPE'            => 'Content',
                        'IBLOCK_ID'              => '2',
                    ]) ?> 
                    <?php $APPLICATION->IncludeComponent("bitrix:search.tags.cloud", '', [
                        'URL_SEARCH' => '/search/index.php',
                    ]) ?>   
                    <?php $APPLICATION->IncludeComponent('bitrix:news.list', 'popular_posts', [
                        'IBLOCK_TYPE'            => 'Content',
                        'IBLOCK_ID'              => '2',
                        'SEF_MODE'               => 'Y',
                        'SEF_FOLDER'             => '/',
                        'SEF_URL_TEMPLATES'      => [
                            'section' => '#SECTION_CODE_PATH#/',
                            'detail'  => '#SECTION_CODE_PATH#/#ELEMENT_CODE#',
                        ],
                        'NEWS_COUNT'              => 3,
                        'SORT_BY1'                => 'SHOW_COUNTER',
                        'SORT_ORDER1'             => 'DESC',
                        'LIST_ACTIVE_DATE_FORMAT' => 'j F Y',
                        'CACHE_TYPE'              => 'A',
                        'CACHE_TIME'              => '3600',
                        'SET_TITLE'               => 'N'                        
                    ]) ?>
                    <?php $APPLICATION->IncludeComponent('bitrix:news.list', 'featured_posts', [
                        'IBLOCK_TYPE'            => 'Content',
                        'IBLOCK_ID'              => '2',
                        'SEF_MODE'               => 'Y',
                        'SEF_FOLDER'             => '/',
                        'SEF_URL_TEMPLATES'      => [
                            'section' => '#SECTION_CODE_PATH#/',
                            'detail'  => '#SECTION_CODE_PATH#/#ELEMENT_CODE#',
                        ],
                        'NEWS_COUNT'              => 3,
                        'SORT_BY1'                => 'ID',
                        'SORT_ORDER1'             => 'ASC',
                        'CACHE_TYPE'              => 'A',
                        'CACHE_TIME'              => '3600',
                        'SET_TITLE'               => 'N'                        
                    ]) ?>
                    <?php $APPLICATION->IncludeComponent('bitrix:news.list', 'recently_posts', [
                        'IBLOCK_TYPE'            => 'Content',
                        'IBLOCK_ID'              => '2',
                        'SEF_MODE'               => 'Y',
                        'SEF_FOLDER'             => '/',
                        'SEF_URL_TEMPLATES'      => [
                            'section' => '#SECTION_CODE_PATH#/',
                            'detail'  => '#SECTION_CODE_PATH#/#ELEMENT_CODE#',
                        ],
                        'NEWS_COUNT'              => 3,
                        'SORT_BY1'                => 'ID',
                        'SORT_ORDER1'             => 'DESC',
                        'LIST_ACTIVE_DATE_FORMAT' => 'j F Y',
                        'CACHE_TYPE'              => 'A',
                        'CACHE_TIME'              => '3600',
                        'SET_TITLE'               => 'N'                        
                    ]) ?>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end main content-->

<!--footer start-->
<div id="footer">
    <?php $APPLICATION->IncludeComponent('bitrix:news.list', 'footer_instagram', [
        'IBLOCK_TYPE'       => 'Content',
        'IBLOCK_ID'         => '2',
        'SEF_MODE'          => 'Y',
        'SEF_FOLDER'        => '/',
        'SEF_URL_TEMPLATES' => [
            'section' => '#SECTION_CODE_PATH#/',
            'detail'  => '#SECTION_CODE_PATH#/#ELEMENT_CODE#',
        ],
        'NEWS_COUNT'        => 20,
        'CACHE_TYPE'        => 'A',
        'CACHE_TIME'        => '3600',    
        'SET_TITLE'         => 'N'
    ]) ?>
</div>

<footer class="footer-widget-section">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <aside class="footer-widget">
                    <div class="about-img">
                        <img src="/upload/medialibrary/378/3786dec1715163ced34417f74b14268f.png" alt="Логотип">
                    </div>
                    <div class="about-content">
                        <?php $APPLICATION->IncludeComponent('bitrix:main.include', '', [
                            'AREA_FILE_SHOW' => 'file',
                            'PATH'           =>  SITE_TEMPLATE_PATH . '/inc/about-content.php'
                        ]) ?>
                    </div>
                    <div class="address">
                        <h4 class="text-uppercase">contact Info</h4>
                        <?php $APPLICATION->IncludeComponent('bitrix:main.include', '', [
                            'AREA_FILE_SHOW' => 'file',
                            'PATH'           =>  SITE_TEMPLATE_PATH . '/inc/contact-info.php'
                        ]) ?>
                    </div>
                </aside>
            </div>
            <div class="col-md-4">
                <?php $APPLICATION->IncludeComponent('bitrix:news.list', 'testimonials', [
                    'IBLOCK_TYPE'   => 'testimonials',
                    'IBLOCK_ID'     => '3',
                    'NEWS_COUNT'    => 3,
                    'PROPERTY_CODE' => ['NAME', 'STATUS'],
                    'CACHE_TYPE'    => 'A',
                    'CACHE_TIME'    => '3600',
                    'SET_TITLE'     => 'N'
                ]) ?>
            </div>
            <div class="col-md-4">
                <aside class="footer-widget">
                    <h3 class="widget-title text-uppercase">Custom Category Post</h3>


                    <div class="custom-post">
                        <div>
                            <a href="#"><img src="<?= SITE_TEMPLATE_PATH ?>/assets/images/footer-img.png" alt=""></a>
                        </div>
                        <div>
                            <a href="#" class="text-uppercase">Home is peaceful Place</a>
                            <span class="p-date">February 15, 2016</span>
                        </div>
                    </div>
                </aside>
            </div>
        </div>
    </div>
    <div class="footer-copy">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="text-center">
                        <?php $APPLICATION->IncludeComponent('bitrix:main.include', '', [
                            'AREA_FILE_SHOW' => 'file',
                            'PATH'           =>  SITE_TEMPLATE_PATH . '/inc/copyright.php'
                        ]) ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
</body>
</html>