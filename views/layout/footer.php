<?php
    error_reporting(E_ALL);
    ini_set('display_errors', '1');
?>

            </div><!--<div id="central"> tag opened at sidebar.php-->
        </div><!--<div id="content"> tag opened at header.php-->
        <footer id="footer">
            <p>Developed and Designed by <a href="mailto:ulisesvil5@hotmail.com" title="E-mail me">Ulises Villa</a> &copy; <?= date('Y') ?></p>
        </footer>
    </div><!--<div id="container"> tag opened at header.php-->
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