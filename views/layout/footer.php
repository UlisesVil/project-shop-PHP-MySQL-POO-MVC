<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');
?>

</div>
</div>

            <!-- PIE DE PAGINA -->
            <footer id="footer">
                <p>Developed by Ulises Villa &copy; <?= date('Y') ?></p>
            </footer>
        </div>
        <script type="application/javascript">
                jQuery('input[type=file]').change(function(){
                 var filename = jQuery(this).val().split('\\').pop();
                 var idname = jQuery(this).attr('id');
                 console.log(jQuery(this));
                 console.log(filename);
                 console.log(idname);
                 jQuery('span.'+idname).next().find('span').html(filename);
                });           
        </script>
    </body>

</html>