<?
include_once($_SERVER['DOCUMENT_ROOT'].'/bitrix/modules/main/include/urlrewrite.php');

CHTTP::SetStatus("404 Not Found");
@define("ERROR_404","Y");

require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");

$APPLICATION->SetPageProperty("title", "404. Страница не найдена");

// $APPLICATION->IncludeComponent("bitrix:main.map", ".default", Array(
// 	"LEVEL"	=>	"3",
// 	"COL_NUM"	=>	"2",
// 	"SHOW_DESCRIPTION"	=>	"Y",
// 	"SET_TITLE"	=>	"Y",
// 	"CACHE_TIME"	=>	"36000000"
// 	)
// );?>
<section class="section">
            <div class="container-custom">
                <div class="page404"><img class="page404__img" src="<?=SITE_TEMPLATE_PATH?>/img/page404/img-error.png" alt="" />
                    <div class="page404__title">Страница не найдена. Мы разберемся с этим, а пока предлагаем вам вернуться на главную.</div>
                    <div class="page404__footer"><a class="mbtn mbtn__primary mbtn__blockmobile" href="/">На главную</a></div>
                </div>
            </div>
        </section>
<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>