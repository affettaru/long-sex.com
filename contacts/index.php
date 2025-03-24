<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Контакты");
use Bitrix\Main\Loader; 
Loader::includeModule("iblock");
?>
<section class="section">
	<div class="container-custom">
	<? $APPLICATION->IncludeComponent(
				"bitrix:breadcrumb",
				"main",
				array(
					"PATH" => "",
					"SITE_ID" => "s1",
					"START_FROM" => "0"
				)
			); ?>
		<!-- <div class="crumbs">
			<ol>
				<li><a href="#">Главная</a></li>
				<li>Где лечиться</li>
			</ol>
		</div> -->
		<div class="h2">Где лечиться</div>
		<div class="map__select">
			<select id="js--select-custom" name="#">
				<option value="0" selected="selected">Все города</option>
				<?
				$arFilter = array('IBLOCK_ID' => 7);
				$rsSections = CIBlockSection::GetList(array(), $arFilter);
				while ($arSection = $rsSections->Fetch())
				{?>
					<option value="<?=$arSection['ID']?>"><?=$arSection['NAME']?></option>
				<?}?>
				
			</select>
		</div>
		<?php
		$APPLICATION->IncludeComponent(
			"bitrix:news.list", 
			"offices_contacts", 
			array(
				"IBLOCK_ID" => "7",
				"IBLOCK_TYPE" => "regions",
				// "NEWS_COUNT" => "4",
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
				"SET_TITLE" => "Y",
				"SET_BROWSER_TITLE" => "Y",
				"SET_META_KEYWORDS" => "Y",
				"SET_META_DESCRIPTION" => "Y",
				"SET_LAST_MODIFIED" => "N",
				"HIDE_LINK_WHEN_NO_DETAIL" => "N",
				"PARENT_SECTION" => "",
				"PARENT_SECTION_CODE" => "",
				"INCLUDE_SUBSECTIONS" => "Y",
				"STRICT_SECTION_CHECK" => "N",
				"PAGER_TEMPLATE" => "main",
				"DISPLAY_TOP_PAGER" => "N",
				"DISPLAY_BOTTOM_PAGER" => "Y",
				"PAGER_TITLE" => "Новости",
				"PAGER_SHOW_ALWAYS" => "Y",
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
<!-- <div class="pagination">
                    <div class="pagination__item"><button class="pagination__btn" disabled="disabled"><svg>
                                <use xlink:href="img/icons.svg#ic-arrowleft-big"></use>
                            </svg></button></div>
                    <div class="pagination__item">
                        <ul>
                            <li><a class="pagination__link pagination__link__active" href="#">1</a></li>
                            <li><a class="pagination__link" href="#">2</a></li>
                            <li><a class="pagination__link" href="#">3</a></li>
                            <li class="pagination__hidemobile"><a class="pagination__link" href="#">4</a></li>
                            <li class="pagination__hidemobile"><a class="pagination__link" href="#">5</a></li>
                            <li><span>...</span></li>
                            <li><a class="pagination__link" href="#">10</a></li>
                        </ul>
                    </div>
                    <div class="pagination__item"><button class="pagination__btn"><svg>
                                <use xlink:href="img/icons.svg#ic-arrowright-big"></use>
                            </svg></button></div>
                </div> -->
	</div>
</section><!-- /contacts-->
<section class="section section__pt0">
	<div class="container-custom">
		<div class="contacts__map">
			<div class="contacts__map__yandex" id="js--map"></div>
		</div>
	</div>
</section>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>