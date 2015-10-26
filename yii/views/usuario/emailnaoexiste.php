<?php
use yii\helpers\Html;
?>

<div class="usuario-avisoemail">
	 <h2>Oops!</h2>
    <p>O e-mail informado não existe. Verifique se digitou corretamente.</p>
    <button onclick="goBack()">Voltar</button>
	<script>
		function goBack() 
		{
			window.history.back();
		}
		</script>
</div>