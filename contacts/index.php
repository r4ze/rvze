<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Контакты");
?>

    <div class="content">
        <div class="container_12">
            <div class="grid_5">
                <h3 class="mtop20">Контакты</h3>
                <div class="map">
                    <div class="clear"></div>
                    <figure class="">
                        <script type="text/javascript" charset="utf-8" src="https://api-maps.yandex.ru/services/constructor/1.0/js/?sid=vBJndINxhJpPz8FQ8TR5JM3CARWk5i87&width=500&height=400&lang=ru_RU&sourceType=constructor"></script>
                    </figure>
                    <address>
                        <?$APPLICATION->IncludeComponent("bitrix:main.include", ".default", array(
                            "AREA_FILE_SHOW" => "file",
                            "PATH" => "/undermap.php",
                            "EDIT_TEMPLATE" => "template.php"
                        ),
                            false
                        );?>
                    </address>
                </div>
            </div>
            <div class="grid_6 prefix_1">
                <h3 class="mtop20">Напишите нам</h3>
                    <? $APPLICATION->IncludeComponent("bitrix:main.feedback", "writeus", Array(

                    ),
                    false
                    ); ?>
            </div>
        </div>
    </div>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>