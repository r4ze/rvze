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
                        <dl>
                            <dt>Micros <br>
                                Ташкент, ул. Кичик Бешагач, д.86
                            </dt>
                            <dd><span>Telephone:</span>+998 (71) 200-34-34</dd>
                            <dd>E-mail: <a href="#" class="col1">info@micros.uz</a></dd>
                        </dl>
                    </address>
                </div>
            </div>
            <div class="grid_6 prefix_1">
                <h3 class="mtop20">Напишите нам</h3>
                <form id="form">

                    <!--   <div class="success_wrapper">
                                  <div class="success-message">Contact form submitted</div>
                    </div> -->

                    <? $APPLICATION->IncludeComponent("bitrix:main.feedback", "writeus", Array(

                    ),
                    false
                    ); ?>
            </div>
        </div>
    </div>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>