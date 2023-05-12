<?php
include_once(__DIR__ . "/config/config.php");
include_once(__DIR__ . "/helpers/functions.php");
include_once(__DIR__ . "/tpl/header.php");
?>

<!-- Page Container -->
<main class="container">    
	<?php 

        /********************************************
        FUNÇÃO DO PRO PHP FAZ A NAVEGAÇÃO AMIGÁVEL
        ********************************************/

		$url = htmlentities(strip_tags($_GET['index.html'] ?? ''), ENT_QUOTES | ENT_HTML5, 'UTF-8');
		$url = explode('/', $url);
		$url[0] = ($url[0] == NULL ? 'index' : $url[0]);

		if(file_exists(__DIR__ . '/views/'.$url[0].'.php')){
            require_once(__DIR__ . '/views/'.$url[0].'.php');
		}elseif(file_exists(__DIR__ . '/views/'.$url[0].'/'.$url[1].'.php')){
            require_once(__DIR__ . '/views/'.$url[0].'/'.$url[1].'.php');
		}else{
            require_once(__DIR__ . '/views/404.php');
		}
	?>
</main><!-- End Page Container -->

<?php include_once(__DIR__ . "/tpl/footer.php"); ?>
