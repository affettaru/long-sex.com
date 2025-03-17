<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("title", "Сайт международный медицинский центр УРО-ПРО");
$APPLICATION->SetTitle("Сайт международный медицинский центр УРО-ПРО");
$APPLICATION->SetPageProperty("description", "Сайт международный медицинский центр УРО-ПРО");
?>


        <section>
            <?php
            $APPLICATION->IncludeComponent(
	"bitrix:news.list", 
	"main_banner", 
	array(
		"IBLOCK_ID" => "3",
		"IBLOCK_TYPE" => "content",
		"NEWS_COUNT" => "5",
		"FIELD_CODE" => array(
			0 => "NAME",
			1 => "PREVIEW_TEXT",
			2 => "",
		),
		"PROPERTY_CODE" => array(
			0 => "",
			1 => "LINK",
			2 => "TEXT",
			3 => "",
		),
		"CACHE_TIME" => "36000000",
		"CACHE_TYPE" => "A",
		"CHECK_DATES" => "Y",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"SORT_BY1" => "SORT",
		"SORT_BY2" => "ID",
		"SORT_ORDER1" => "DESC",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
		"ADD_SECTIONS_CHAIN" => "N",
		"SORT_ORDER2" => "DESC",
		"COMPONENT_TEMPLATE" => "main_banner",
		"FILTER_NAME" => "",
		"DETAIL_URL" => "",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "Y",
		"PREVIEW_TRUNCATE_LEN" => "",
		"ACTIVE_DATE_FORMAT" => "d.m.Y",
		"SET_TITLE" => "N",
		"SET_BROWSER_TITLE" => "N",
		"SET_META_KEYWORDS" => "N",
		"SET_META_DESCRIPTION" => "N",
		"SET_LAST_MODIFIED" => "N",
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"PARENT_SECTION" => "",
		"PARENT_SECTION_CODE" => "",
		"INCLUDE_SUBSECTIONS" => "Y",
		"STRICT_SECTION_CHECK" => "N",
		"PAGER_TEMPLATE" => ".default",
		"DISPLAY_TOP_PAGER" => "N",
		"DISPLAY_BOTTOM_PAGER" => "Y",
		"PAGER_TITLE" => "Новости",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_SHOW_ALL" => "N",
		"PAGER_BASE_LINK_ENABLE" => "N",
		"SET_STATUS_404" => "N",
		"SHOW_404" => "N",
		"MESSAGE_404" => ""
	),
	false
);
            ?>
        </section>
        <section class="section">
        <?php
            $APPLICATION->IncludeComponent(
	"bitrix:news.list", 
	"premature_ejaculation", 
	array(
		"IBLOCK_ID" => "5",
		"IBLOCK_TYPE" => "content",
		"NEWS_COUNT" => "6",
		"FIELD_CODE" => array(
			0 => "NAME",
			1 => "PREVIEW_TEXT",
			2 => "",
		),
		"PROPERTY_CODE" => array(
			0 => "",
			1 => "LINK",
			2 => "TEXT",
			3 => "",
		),
		"CACHE_TIME" => "36000000",
		"CACHE_TYPE" => "A",
		"CHECK_DATES" => "Y",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"SORT_BY1" => "SORT",
		"SORT_BY2" => "ID",
		"SORT_ORDER1" => "DESC",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
		"ADD_SECTIONS_CHAIN" => "N",
		"SORT_ORDER2" => "DESC",
		"COMPONENT_TEMPLATE" => "premature_ejaculation",
		"FILTER_NAME" => "",
		"DETAIL_URL" => "",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "Y",
		"PREVIEW_TRUNCATE_LEN" => "",
		"ACTIVE_DATE_FORMAT" => "d.m.Y",
		"SET_TITLE" => "N",
		"SET_BROWSER_TITLE" => "N",
		"SET_META_KEYWORDS" => "N",
		"SET_META_DESCRIPTION" => "N",
		"SET_LAST_MODIFIED" => "N",
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"PARENT_SECTION" => "",
		"PARENT_SECTION_CODE" => "",
		"INCLUDE_SUBSECTIONS" => "Y",
		"STRICT_SECTION_CHECK" => "N",
		"PAGER_TEMPLATE" => ".default",
		"DISPLAY_TOP_PAGER" => "N",
		"DISPLAY_BOTTOM_PAGER" => "Y",
		"PAGER_TITLE" => "Новости",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_SHOW_ALL" => "N",
		"PAGER_BASE_LINK_ENABLE" => "N",
		"SET_STATUS_404" => "N",
		"SHOW_404" => "N",
		"MESSAGE_404" => ""
	),
	false
);
            ?>
        </section>
        <section class="section section__grey">
        <?php
            $APPLICATION->IncludeComponent(
	"bitrix:news.list", 
	"treatment", 
	array(
		"IBLOCK_ID" => "6",
		"IBLOCK_TYPE" => "content",
		"NEWS_COUNT" => "4",
		"FIELD_CODE" => array(
			0 => "NAME",
			1 => "PREVIEW_TEXT",
			2 => "",
		),
		"PROPERTY_CODE" => array(
			0 => "",
			1 => "LINK",
			2 => "TEXT",
			3 => "",
		),
		"CACHE_TIME" => "36000000",
		"CACHE_TYPE" => "A",
		"CHECK_DATES" => "Y",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"SORT_BY1" => "SORT",
		"SORT_BY2" => "ID",
		"SORT_ORDER1" => "DESC",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
		"ADD_SECTIONS_CHAIN" => "N",
		"SORT_ORDER2" => "DESC",
		"COMPONENT_TEMPLATE" => "treatment",
		"FILTER_NAME" => "",
		"DETAIL_URL" => "",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "Y",
		"PREVIEW_TRUNCATE_LEN" => "",
		"ACTIVE_DATE_FORMAT" => "d.m.Y",
		"SET_TITLE" => "N",
		"SET_BROWSER_TITLE" => "N",
		"SET_META_KEYWORDS" => "N",
		"SET_META_DESCRIPTION" => "N",
		"SET_LAST_MODIFIED" => "N",
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"PARENT_SECTION" => "",
		"PARENT_SECTION_CODE" => "",
		"INCLUDE_SUBSECTIONS" => "Y",
		"STRICT_SECTION_CHECK" => "N",
		"PAGER_TEMPLATE" => ".default",
		"DISPLAY_TOP_PAGER" => "N",
		"DISPLAY_BOTTOM_PAGER" => "Y",
		"PAGER_TITLE" => "Новости",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_SHOW_ALL" => "N",
		"PAGER_BASE_LINK_ENABLE" => "N",
		"SET_STATUS_404" => "N",
		"SHOW_404" => "N",
		"MESSAGE_404" => ""
	),
	false
);
            ?>
            
        </section><!-- /treatment methods--><!-- map-->
        <section class="section" id="map">
            <div class="container-custom">
                <div class="title">
                    <div class="title__body">
                        <div class="h2">Где лечиться</div>
                    </div>
                </div>

                <?php
$APPLICATION->IncludeComponent(
	"bitrix:news.list", 
	"offices", 
	array(
		"IBLOCK_ID" => "7",
		"IBLOCK_TYPE" => "regions",
		"FIELD_CODE" => array(
			0 => "NAME",
			1 => "",
		),
		"PROPERTY_CODE" => array(
			0 => "COORDS",
			1 => "PHONE",
			2 => "TYPE",
			3 => "MAIL",
			4 => "",
		),
		"CACHE_TIME" => "36000000",
		"CACHE_TYPE" => "A",
		"CHECK_DATES" => "Y",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"SORT_BY1" => "SORT",
		"SORT_BY2" => "ID",
		"SORT_ORDER1" => "DESC",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
		"ADD_SECTIONS_CHAIN" => "N",
		"SORT_ORDER2" => "DESC",
		"COMPONENT_TEMPLATE" => "offices",
		"FILTER_NAME" => "",
		"DETAIL_URL" => "",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"AJAX_OPTION_HISTORY" => "Y",
		"AJAX_OPTION_ADDITIONAL" => "",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "Y",
		"PREVIEW_TRUNCATE_LEN" => "",
		"ACTIVE_DATE_FORMAT" => "d.m.Y",
		"SET_TITLE" => "N",
		"SET_BROWSER_TITLE" => "N",
		"SET_META_KEYWORDS" => "N",
		"SET_META_DESCRIPTION" => "N",
		"SET_LAST_MODIFIED" => "N",
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"PARENT_SECTION" => "",
		"PARENT_SECTION_CODE" => "",
		"INCLUDE_SUBSECTIONS" => "Y",
		"STRICT_SECTION_CHECK" => "N",
		"DISPLAY_TOP_PAGER" => "N",
		"DISPLAY_BOTTOM_PAGER" => "Y",
		"PAGER_TITLE" => "Новости",
		"PAGER_SHOW_ALWAYS" => "Y",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_SHOW_ALL" => "N",
		"PAGER_BASE_LINK_ENABLE" => "N",
		"SET_STATUS_404" => "N",
		"SHOW_404" => "N",
		"MESSAGE_404" => "",
		"NEWS_COUNT" => "20",
		"PAGER_TEMPLATE" => ".default"
	),
	false
);
?>
                <!-- <div class="map">
                    <div class="map__select"><select class="js--select-cities" id="js--select-formap" name="#"></select></div>
                    <div class="map__columns">
                        <div class="map__columns__body">
                            <div class="map__yandex">
                                <div class="map__yandex__include" id="js--mapoffices"></div>
                            </div>
                            <div class="map__hidedesktop"> <a class="mbtn mbtn__outline mbtn__wicon mbtn__block" href="#"><span>Все адреса</span><i class="ic"><svg>
                                            <use xlink:href="img/icons.svg#arrow-long"></use>
                                        </svg></i></a></div>
                        </div>
                        <div class="map__columns__aside">
                            <div class="map__content">
                                <div class="map__des js--placemark">
                                    <div class="map__des__close js--btn-mapdes-close"><svg>
                                            <use xlink:href="img/icons.svg#ic-close"></use>
                                        </svg></div>
                                    <div class="map__des__content js--placemark--popup"></div>
                                </div>
                                <div class="map__content__body">
                                    <div class="map__addresses">
                                        <ul class="js--addresses"></ul>
                                    </div>
                                </div>
                                <div class="map__content__footer"><a class="mbtn mbtn__outline mbtn__wicon mbtn__block" href="#"><span>Все адреса</span><i class="ic"><svg>
                                                <use xlink:href="img/icons.svg#arrow-long"></use>
                                            </svg></i></a></div>
                            </div>
                        </div>
                    </div>
                </div> -->
            </div>
        </section><!-- /map--><!-- form order-->
        <section class="section section__grey">

            <div class="container-custom">
                <div class="title">
                    <div class="title__body">
                        <div class="h2">Записаться на прием</div>
                        <div class="block__body">
                            <div class="block__text">
                                <p>Запишитесь на бесплатную телефонную консультацию врача-уролога и получите ответы на все интересующие вас вопросы о лечении преждевременного семяизвержения.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="columns">
                    <div class="columns__item columns__item__sizehalf">
                        <div class="block__white">
                            <? $APPLICATION->IncludeComponent(
                                "form:feedback",
                                "bottom_order",
                                array(
                                    "IBLOCK_ID" => 11,
                                    "IBLOCK_TYPE" => "Forms",
                                    "MAIL_EVENT" => array(
                                        0 => "CALL",
                                    ),
                                    "TOKEN" => "bottom_order_form",
                                ),
                                false
                            ); ?>

                            
                        </div>
                    </div>
                    <div class="columns__item columns__item__sizehalf">
                        <div class="block__img"><img src="<?=SITE_TEMPLATE_PATH?>/img/home/img-page-01.jpg" alt="" /></div>
                    </div>
                </div>
            </div>
        </section><!-- /form order--><!-- Training and collaboration-->
        <section class="section">
        <?php
            $APPLICATION->IncludeComponent(
	"bitrix:news.list", 
	"training", 
	array(
		"IBLOCK_ID" => "8",
		"IBLOCK_TYPE" => "content",
		"NEWS_COUNT" => "4",
		"FIELD_CODE" => array(
			0 => "NAME",
			1 => "PREVIEW_TEXT",
			2 => "",
		),
		"PROPERTY_CODE" => array(
			0 => "",
			1 => "LINK",
			2 => "TEXT",
			3 => "",
		),
		"CACHE_TIME" => "36000000",
		"CACHE_TYPE" => "A",
		"CHECK_DATES" => "Y",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"SORT_BY1" => "SORT",
		"SORT_BY2" => "ID",
		"SORT_ORDER1" => "DESC",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
		"ADD_SECTIONS_CHAIN" => "N",
		"SORT_ORDER2" => "DESC",
		"COMPONENT_TEMPLATE" => "training",
		"FILTER_NAME" => "",
		"DETAIL_URL" => "",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "Y",
		"PREVIEW_TRUNCATE_LEN" => "",
		"ACTIVE_DATE_FORMAT" => "d.m.Y",
		"SET_TITLE" => "N",
		"SET_BROWSER_TITLE" => "N",
		"SET_META_KEYWORDS" => "N",
		"SET_META_DESCRIPTION" => "N",
		"SET_LAST_MODIFIED" => "N",
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"PARENT_SECTION" => "",
		"PARENT_SECTION_CODE" => "",
		"INCLUDE_SUBSECTIONS" => "Y",
		"STRICT_SECTION_CHECK" => "N",
		"PAGER_TEMPLATE" => ".default",
		"DISPLAY_TOP_PAGER" => "N",
		"DISPLAY_BOTTOM_PAGER" => "Y",
		"PAGER_TITLE" => "Новости",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_SHOW_ALL" => "N",
		"PAGER_BASE_LINK_ENABLE" => "N",
		"SET_STATUS_404" => "N",
		"SHOW_404" => "N",
		"MESSAGE_404" => ""
	),
	false
);
            ?>
            
        </section>
        <section class="section section__grey">
        <?php
            $APPLICATION->IncludeComponent(
	"bitrix:news.list", 
	"question", 
	array(
		"IBLOCK_ID" => "9",
		"IBLOCK_TYPE" => "content",
		"NEWS_COUNT" => "10",
		"FIELD_CODE" => array(
			0 => "NAME",
			1 => "PREVIEW_TEXT",
			2 => "",
		),
		"PROPERTY_CODE" => array(
			0 => "",
			1 => "LINK",
			2 => "TEXT",
			3 => "",
		),
		"CACHE_TIME" => "36000000",
		"CACHE_TYPE" => "A",
		"CHECK_DATES" => "Y",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"SORT_BY1" => "SORT",
		"SORT_BY2" => "ID",
		"SORT_ORDER1" => "DESC",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
		"ADD_SECTIONS_CHAIN" => "N",
		"SORT_ORDER2" => "DESC",
		"COMPONENT_TEMPLATE" => "question",
		"FILTER_NAME" => "",
		"DETAIL_URL" => "",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "Y",
		"PREVIEW_TRUNCATE_LEN" => "",
		"ACTIVE_DATE_FORMAT" => "d.m.Y",
		"SET_TITLE" => "N",
		"SET_BROWSER_TITLE" => "N",
		"SET_META_KEYWORDS" => "N",
		"SET_META_DESCRIPTION" => "N",
		"SET_LAST_MODIFIED" => "N",
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"PARENT_SECTION" => "",
		"PARENT_SECTION_CODE" => "",
		"INCLUDE_SUBSECTIONS" => "Y",
		"STRICT_SECTION_CHECK" => "N",
		"PAGER_TEMPLATE" => ".default",
		"DISPLAY_TOP_PAGER" => "N",
		"DISPLAY_BOTTOM_PAGER" => "Y",
		"PAGER_TITLE" => "Новости",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_SHOW_ALL" => "N",
		"PAGER_BASE_LINK_ENABLE" => "N",
		"SET_STATUS_404" => "N",
		"SHOW_404" => "N",
		"MESSAGE_404" => ""
	),
	false
);
            ?>
            
        </section>
        <section class="section">
        <?php
            $APPLICATION->IncludeComponent(
	"bitrix:news.list", 
	"blog", 
	array(
		"IBLOCK_ID" => "4",
		"IBLOCK_TYPE" => "content",
		"NEWS_COUNT" => "10",
		"FIELD_CODE" => array(
			0 => "NAME",
			1 => "PREVIEW_TEXT",
			2 => "",
		),
		"PROPERTY_CODE" => array(
			0 => "",
			1 => "LINK",
			2 => "TEXT",
			3 => "",
		),
		"CACHE_TIME" => "36000000",
		"CACHE_TYPE" => "A",
		"CHECK_DATES" => "Y",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"SORT_BY1" => "SORT",
		"SORT_BY2" => "ID",
		"SORT_ORDER1" => "DESC",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
		"ADD_SECTIONS_CHAIN" => "N",
		"SORT_ORDER2" => "DESC",
		"COMPONENT_TEMPLATE" => "blog",
		"FILTER_NAME" => "",
		"DETAIL_URL" => "",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "Y",
		"PREVIEW_TRUNCATE_LEN" => "",
		"ACTIVE_DATE_FORMAT" => "d.m.Y",
		"SET_TITLE" => "N",
		"SET_BROWSER_TITLE" => "N",
		"SET_META_KEYWORDS" => "N",
		"SET_META_DESCRIPTION" => "N",
		"SET_LAST_MODIFIED" => "N",
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"PARENT_SECTION" => "",
		"PARENT_SECTION_CODE" => "",
		"INCLUDE_SUBSECTIONS" => "Y",
		"STRICT_SECTION_CHECK" => "N",
		"PAGER_TEMPLATE" => ".default",
		"DISPLAY_TOP_PAGER" => "N",
		"DISPLAY_BOTTOM_PAGER" => "Y",
		"PAGER_TITLE" => "Новости",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_SHOW_ALL" => "N",
		"PAGER_BASE_LINK_ENABLE" => "N",
		"SET_STATUS_404" => "N",
		"SHOW_404" => "N",
		"MESSAGE_404" => ""
	),
	false
);
            ?>
            
        </section><!-- /blog--><!-- form qwestion-->
        <section class="section section__grey">
            <div class="container-custom">
                <div class="title">
                    <div class="title__body">
                        <div class="h2">Задать вопрос</div>
                        <div class="block__body">
                            <div class="block__text">
                                <p>Наши специалисты перезвонят и проконсултируют вас</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="columns">
                    <div class="columns__item columns__item__sizehalf">
                        <div class="block__white">

                        <? $APPLICATION->IncludeComponent(
                                "form:feedback",
                                "bottom_question",
                                array(
                                    "IBLOCK_ID" => 11,
                                    "IBLOCK_TYPE" => "Forms",
                                    "MAIL_EVENT" => array(
                                        0 => "CALL",
                                    ),
                                    "TOKEN" => "bottom_question_form",
                                ),
                                false
                            ); ?>
                            
                        </div>
                    </div>
                    <div class="columns__item columns__item__sizehalf">
                        <div class="block__img"><img src="<?=SITE_TEMPLATE_PATH?>/img/home/img-page-00.jpg" alt="" /></div>
                    </div>
                </div>
            </div>
        </section><!-- /form qwestion--><!-- certificates-->
        <section class="section">
        <?php
            $APPLICATION->IncludeComponent(
	"bitrix:news.list", 
	"certificates", 
	array(
		"IBLOCK_ID" => "10",
		"IBLOCK_TYPE" => "content",
		"NEWS_COUNT" => "10",
		"FIELD_CODE" => array(
			0 => "NAME",
			1 => "PREVIEW_TEXT",
			2 => "",
		),
		"PROPERTY_CODE" => array(
			0 => "",
			1 => "LINK",
			2 => "TEXT",
			3 => "",
		),
		"CACHE_TIME" => "36000000",
		"CACHE_TYPE" => "A",
		"CHECK_DATES" => "Y",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"SORT_BY1" => "SORT",
		"SORT_BY2" => "ID",
		"SORT_ORDER1" => "DESC",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
		"ADD_SECTIONS_CHAIN" => "N",
		"SORT_ORDER2" => "DESC",
		"COMPONENT_TEMPLATE" => "certificates",
		"FILTER_NAME" => "",
		"DETAIL_URL" => "",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "Y",
		"PREVIEW_TRUNCATE_LEN" => "",
		"ACTIVE_DATE_FORMAT" => "d.m.Y",
		"SET_TITLE" => "N",
		"SET_BROWSER_TITLE" => "N",
		"SET_META_KEYWORDS" => "N",
		"SET_META_DESCRIPTION" => "N",
		"SET_LAST_MODIFIED" => "N",
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"PARENT_SECTION" => "",
		"PARENT_SECTION_CODE" => "",
		"INCLUDE_SUBSECTIONS" => "Y",
		"STRICT_SECTION_CHECK" => "N",
		"PAGER_TEMPLATE" => ".default",
		"DISPLAY_TOP_PAGER" => "N",
		"DISPLAY_BOTTOM_PAGER" => "Y",
		"PAGER_TITLE" => "Новости",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_SHOW_ALL" => "N",
		"PAGER_BASE_LINK_ENABLE" => "N",
		"SET_STATUS_404" => "N",
		"SHOW_404" => "N",
		"MESSAGE_404" => ""
	),
	false
);
            ?>
        </section><!-- /certificates-->
   

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>