<?php
use yii\helpers\Html;
?>

<div class="aproveitamento-failed">
	 <h2>Oops!</h2>
    <p>Alguma coisa deu errado. Verifique se digitou corretamente todos os dados pertinentes.</p>
    <button onclick="goBack()">Voltar</button>
	<script>
		function goBack() 
		{
			window.history.back();
		}
		</script>
</div>