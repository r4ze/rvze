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

                    <label class="name">
                        <input type="text" placeholder="Имя" data-constraints="@Required @JustLetters" />
                        <span class="empty-message">*This field is required.</span>
                        <span class="error-message">*This is not a valid name.</span>
                    </label>
                    <label class="sirname">
                        <input type="text" placeholder="Фамилия" data-constraints="@Required @JustLetters"/>
                        <span class="empty-message">*This field is required.</span>
                        <span class="error-message">*This is not a valid phone.</span>
                    </label>
                    <label class="email">
                        <input type="text" placeholder="Email" data-constraints="@Required @Email" />
                        <span class="empty-message">*This field is required.</span>
                        <span class="error-message">*This is not a valid email.</span>
                    </label>

                    <label class="message">
                        <textarea placeholder="Сообщение" data-constraints='@Required @Length(min=20,max=999999)'></textarea>
                        <span class="empty-message">*This field is required.</span>
                        <span class="error-message">*The message is too short.</span>
                    </label>
                    <div>
                        <div class="clear"></div>
                        <div class="btns">
                            <a href="#" data-type="submit" class="btn">Отправить</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>