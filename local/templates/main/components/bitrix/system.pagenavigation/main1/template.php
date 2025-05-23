<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true)
	
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);


?>
    <!-- $arResult["NavFirstRecordShow"] - текущая страница   -->
    <!-- $arResult["NavLastRecordShow"] - сколько мы уже пролистали элементов   -->
    <!-- $arResult["NavRecordCount"] - всего элементов   -->
   
<?php if ($arResult["nEndPage"] != 1):?>
    <div class="pagination">
        <? if ($arResult["NavPageNomer"] - 1 != 0): ?>
            <div class="pagination__item"><a href="<?= addGet("PAGEN_" . $arResult["NavNum"], $arResult["NavPageNomer"] - 1) ?>"><button class="pagination__btn" disabled="disabled"><svg>
                                <use xlink:href="<?=SITE_TEMPLATE_PATH?>/img/icons.svg#ic-arrowleft-big"></use>
                            </svg></button></a></div>
                            <?php endif ?>
        <ul>
           
            <? if ($arResult["NavPageNomer"] > 5): ?>
                <li>
                    <a class=""
                            href="<?= addGet("PAGEN_" . $arResult["NavNum"], 1) ?>"
                    >
                        ...
                    </a>
                </li>
            <?php endif ?>
			<? while ($arResult["nStartPage"] <= $arResult["nEndPage"]): ?>
				<? if ($arResult["nStartPage"] == $arResult["NavPageNomer"]): ?>
                    <li >
                        <a class="pagination__link pagination__link__active" href="<?= addGet("PAGEN_" . $arResult["NavNum"], $arResult["nStartPage"]) ?>">
							<?= $arResult["nStartPage"] ?>
                        </a>
                    </li>
				<? else: ?>
                    <li>
                        <a class="pagination__link"
                                href="<?= addGet("PAGEN_" . $arResult["NavNum"], $arResult["nStartPage"]) ?>"
                        >
							<?= $arResult["nStartPage"] ?>
                        </a>
                    </li>
				<? endif ?>

				<? $arResult["nStartPage"]++ ?>
			<? endwhile ?>
            <? if ($arResult["nStartPage"] - 1 != $arResult["NavPageNomer"] && $arResult["NavPageNomer"] + 1 != $arResult["nEndPage"]): ?>
                <li>
                    <a
                            href="<?= addGet("PAGEN_" . $arResult["NavNum"], $arResult["NavPageCount"]) ?>"
                    >
                       ...
                    </a>
                </li>
            <?php endif ?>
            </ul>
            <? if ($arResult["nStartPage"] - 1 != $arResult["NavPageNomer"] && $arResult["nEndPage"] > 1): ?>
                <div class="pagination__item"><a href="<?= addGet("PAGEN_" . $arResult["NavNum"], $arResult["NavPageNomer"] + 1) ?>"><button class="pagination__btn"><svg>
                                <use xlink:href="<?=SITE_TEMPLATE_PATH?>/img/icons.svg#ic-arrowright-big"></use>
                            </svg></button></a></div>
            <?php endif ?>
          
    </div>
<?php endif; ?>