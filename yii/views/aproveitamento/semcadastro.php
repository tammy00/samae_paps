<?php
use yii\helpers\Html;
?>

<div class="aproveitamento-semcadastro">
	 <h2>Oops!</h2>
    <p>Você não tem cadastro no sistema. </p>
    <button onclick="goBack()">Voltar</button>
	<script>
		function goBack() 
		{
			window.history.back();
		}
		</script>
</div>