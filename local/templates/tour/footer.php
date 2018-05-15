

</div>

<?if(IS_INDEX):?>
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

<?endif;?>



</div>
</div>
<footer>
    <div class="container_12">
        <div class="grid_12">
                <?$APPLICATION->IncludeComponent("bitrix:main.include", ".default", array(
                    "AREA_FILE_SHOW" => "file",
                    "PATH" => "/social.php",
                    "EDIT_TEMPLATE" => "template.php"
                ),
                    false
                );?>
            <div class="copy">
            <?$APPLICATION->IncludeComponent("bitrix:main.include", ".default", array(
	"AREA_FILE_SHOW" => "file",
	"PATH" => "/test_inc.php",
	"EDIT_TEMPLATE" => "template.php"
	),
	false
);?>
            </div>
        </div>
    </div>
</footer>
<script>
    $(function (){
        $('#bookingForm').bookingForm({
            ownerEmail: '#'
        });
    })
</script>
</body>
</html>