<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Главная");
?>
    <div class="slider_wrapper">
        <div id="camera_wrap" class="">
            <div data-src="<?=SITE_TEMPLATE_PATH?>/images/slide.jpg">
                <div class="caption fadeIn">
                    <h2>ЛОНДОН</h2>
                    <div class="price">
                        <span>$1000</span>
                    </div>
                    <a href="#">Подробнее</a>
                </div>
            </div>
            <div data-src="<?=SITE_TEMPLATE_PATH?>/images/slide1.jpg">
                <div class="caption fadeIn">
                    <h2>МАЛЬДИВЫ</h2>
                    <div class="price">
                        <span>$2000</span>
                    </div>
                    <a href="#">Подробнее</a>
                </div>
            </div>
            <div data-src="<?=SITE_TEMPLATE_PATH?>/images/slide2.jpg">
                <div class="caption fadeIn">
                    <h2>ВЕНЕЦИЯ</h2>
                    <div class="price">
                        <span>$1600</span>
                    </div>
                    <a href="#">Подробнее</a>
                </div>
            </div>
        </div>
    </div>

    <div class="content"><div class="ic">More Website Templates @ TemplateMonster.com - February 10, 2014!</div>
        <div class="container_12">
            <div class="grid_4">
                <div class="banner">


                    <img src="<?=SITE_TEMPLATE_PATH?>/images/ban_img1.jpg" alt="">
                    <div class="label">
                        <div class="title"><a href="#">Старинная Барселона</a></div>
                        <div class="price"><span>$ 1000</span></div>
                        <a href="tours_detail.html">Подробнее</a>
                    </div>
                </div>
            </div>
            <div class="grid_4">
                <div class="banner">
                    <img src="<?=SITE_TEMPLATE_PATH?>/images/ban_img2.jpg" alt="">
                    <div class="label">
                        <div class="title"><a href="tours_detail.html">Великолепный ГОА</a></div>
                        <div class="price"><span>$ 1500</span></div>
                        <a href="tours_detail.html">ПОДРОБНЕЕ</a>
                    </div>
                </div>
            </div>
            <div class="grid_4">
                <div class="banner">
                    <img src="<?=SITE_TEMPLATE_PATH?>/images/ban_img3.jpg" alt="">
                    <div class="label">
                        <div class="title"><a href="tours_detail.html">Романтический ПАРИЖ</a></div>
                        <div class="price"><span>$ 1600</span></div>
                        <a href="tours_detail.html">ПОДРОБНЕЕ</a>
                    </div>
                </div>
            </div>
            <div class="clear"></div>
            <div class="grid_4 prefix_1">
                <h5>Выберите страну</h5>
                <ul class="list">
                    <li><a href="countries_detail.html">Америка</a></li>
                    <li><a href="countries_detail.html">Мексика</a></li>
                    <li><a href="countries_detail.html">Карибы</a></li>
                    <li><a href="countries_detail.html">Европа</a></li>
                    <li><a href="countries_detail.html">Канада</a></li>
                    <li><a href="countries_detail.html">Азия</a></li>
                    <li><a href="countries_detail.html">Австралия</a></li>
                    <li><a href="countries_detail.html">Россия</a></li>
                    <li><a href="countries_detail.html">Узбекистан</a></li>
                    <li><a href="countries_detail.html">Турция</a></li>
                    <li><a href="countries_detail.html">Африка</a></li>
                </ul>

                <h3 class="mtop20">Найти Тур</h3>
                <form id="bookingForm">
                    <div class="fl1 fl2">
                        <em>Страна</em>
                        <select>
                            <option>Выберите страну</option>
                            <option>Америка</option>
                            <option>Мексика</option>
                            <option>Карибы</option>
                            <option>Европа</option>
                            <option>Канада</option>
                            <option>Азия</option>
                            <option>Австралия</option>
                            <option>Россия</option>
                            <option>Узбекистан</option>
                            <option>Турция</option>
                            <option>Африка</option>
                        </select>
                        <div class="clear"></div>
                        <em>Город</em>
                        <select>
                            <option>Выберите город</option>
                            <option>Москва</option>
                            <option>Ташкент</option>
                            <option>Бухарест</option>
                            <option>Киев</option>
                        </select>
                        <div class="clear"></div>
                        <em>Тип тура</em>
                        <select>
                            <option>Выберите тур</option>
                            <option>Семейный</option>
                            <option>Три страны</option>
                            <option>Пять городов</option>
                            <option>Европа</option>
                        </select>
                        <label class="price">Цена до ($)</label>
                        <input type="text">
                    </div>

                    <div class="clear"></div>
                    <div class="tmRadio hot_tour">
                        <label>
                            <input name="Comfort" type="checkbox" id="tmRadio0" data-constraints='	@RadioGroupChecked(name="Comfort", groups=[RadioGroup])' />
                            Горячий тур
                        </label>
                    </div>
                    <div class="clear"></div>

                    <a href="#" class="btn" data-type="submit">Найти</a>
                </form>
            </div>
            <div class="grid_8 prefix_1">
                <h3>Добро пожаловать</h3>
                <img src="<?=SITE_TEMPLATE_PATH?>/images/page1_img1.jpg" alt="" class="img_inner fleft">
                <div class="extra_wrapper">
                    <p>Lorem ipsum dolor sit ere amet, consectetur ipiscin.</p>
                    In mollis erat mattis neque facilisis, sit ametiol
                </div>
                <div class="clear cl1"></div>
                <p>Find the detailed description of this <span class="col1"><a href="http://blog.templatemonster.com/free-website-templates/" rel="dofollow">freebie</a></span> at TemplateMonster blog.</p>
                <p><span class="col1"><a href="http://www.templatemonster.com/category/travel-website-templates/" rel="nofollow">Travel Website Templates</a></span> category offers you a variety of designs that are perfect for travel sphere of business.</p>

                <p>Secuit iapeto. Umor eurus! Opifex origine mixta coercuit erat concordi.
                    Tegi igni ensis di vix non. Terram mortales zephyro inclusum videre! Fuerat
                    carentem tanto sublime rerum mixta traxit ambitae fixo induit.</p>
                <p>Piscibus circumdare spectent perveniunt montes ut concordi feras sidera.
                    Nitidis colebat silvas ab retinebat lege densior mentisque deorum. Aliud
                    descenderat conversa densior hominum nabataeaque onus. Nitidis agitabilis
                    ipsa melioris nova?</p>
                <ul>
                    <li>Usu nec austro obliquis quam aer ligavit: fratrum omnia obstabatque</li>
                    <li>Vindice porrexerat tempora et ensis di corpore siccis crescendo corpore
                        postquam cum hanc sunt nunc terras terrarum valles pluvialibus iudicis
                        foret perpetuum</li>
                    <li>Hanc nova perpetuum caelo pronaque egens cesserunt rectumque alto hanc
                        locis caeca evolvit erant metusque sponte totidem spisso tanta</li>
                </ul>
                <p>Totidemque illic. Dicere cepit quoque iapeto forma viseret stagna. Nubes
                    stagna quisque stagna parte origo caeli. Pontus rudis. Foret erat securae.
                    Animal habentia litora quisque. Mentes cingebant matutinis sua habentem
                    quia erectos animalibus origo. Uno ripis passim dissociata fronde umor
                    terrarum recens prima. Rapidisque aere.</p>
                <p>Effigiem quanto ne dominari. Sic quam otia adhuc. Imagine principio agitabilis
                    adspirate congestaque. Sanctius rapidisque meis ultima siccis alta deerat
                    feras fontes. Praeter oppida circumfuso indigestaque elementaque fuerat
                    flexi. Aliis lumina fossae? Perpetuum vis sectamque quod terram illic erant
                    margine galeae habitandae.</p>
            </div>
            <div class="grid_12">
                <h3 class="head1">Новости</h3>
            </div>
            <div class="grid_4">
                <div class="block1">
                    <time datetime="2014-01-01">10<span>Янв</span></time>
                    <div class="extra_wrapper">
                        <div class="text1 col1"><a href="news_detail.html">Новость 1</a></div>
                        Proin pharetra luctus diam, any scelerisque eros convallisumsan. Maecenas vehicula egestas
                    </div>
                </div>
            </div>
            <div class="grid_4">
                <div class="block1">
                    <time datetime="2014-01-01">21<span>Янв</span></time>
                    <div class="extra_wrapper">
                        <div class="text1 col1"><a href="news_detail.html">Новость 2</a></div>
                        Any scelerisque eros vallisumsan. Maecenas vehicula egestas natis. Duis massa elit, auctor non
                    </div>
                </div>
            </div>
            <div class="grid_4">
                <div class="block1">
                    <time datetime="2014-01-01">15<span>Фев</span></time>
                    <div class="extra_wrapper">
                        <div class="text1 col1"><a href="news_detail.html">Новость 3</a></div>
                        Ros convallisumsan. Maecenas vehicula egestas venenatis. Duis massa elit, auctor non
                    </div>
                </div>
            </div>
        </div>
    </div>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>