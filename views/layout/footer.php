<?php
    error_reporting(E_ALL);
    ini_set('display_errors', '1');
?>

            </div><!--<div id="central"> sidebar.php-->
        </div><!--<div id="content"> header.php-->
        <footer id="footer">
            <p>Developed by <a href="mailto:ulisesvil5@hotmail.com" title="E-mail me">Ulises Villa</a> &copy; <?= date('Y') ?></p>
        </footer>
    </div><!--<div id="container">-->
    <!--Upload Button-->
    <script type="application/javascript">
        $('input[type=file]').change(function(){
            var filename = $(this).val().split('\\').pop();
            var idname = $(this).attr('id');
            console.log($(this));
            console.log(filename);
            console.log(idname);
            $('span.'+idname).next().find('span').html(filename);
        });           
    </script>
</body>
</html>