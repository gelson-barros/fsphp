<?php 
/*DRY Don't Repeat Yourself: Ao ser aplicado torna partes do sistema independentes. Cada parte  pode mudar de forma previsivel e uniforme, mantendo-se, portanto, sincronizadas com toda a aplicação*/
require __DIR__."/config.php";
require __DIR__."/vendor/autoload.php";
?>
<!DOCTYPE html>
<html lang="pt-pt">
<head>
	<!--head data -->
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<?php
require "header.php";
/* Uma logica aplicada fim de decidir o conteudo
 * a ser carregado. Podendo interagir com a logica
 * e regra de negocios para criar as visoes */
require "footer.php";
?>
<script type="text/javascript" src="scripts.js"></script>
</body>
</html> 