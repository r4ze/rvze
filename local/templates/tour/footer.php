</div>




<?if(IS_INDEX):?>
               <?$APPLICATION->IncludeComponent("bitrix:news", "footernews", Array(

                    ),
                        false
                );?>
<?endif;?>

</div
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