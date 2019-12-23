<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="{{ URL::to('/css/estilo.css') }}">
	<script type="text/javascript" src="{{ URL::to('/js/jQuery.js') }}"></script>
	<title>@yield('titulo')</title>
</head>
<body>

<div class="nav_bar">	
	<form autocomplete="off" action="{{route('inserir')}}" method="post" enctype="multipart/form-data">
			{{ csrf_field() }}	
		<label class="nav_bar_opcao">Money keeps raining </label>
		<input type="text" class="nav_bar_input" name="nome" placeholder="A man need's a name" required>
		<input type="number" class="nav_bar_input" name="parcelas" placeholder="Parcels" required>
		<input type="text" class="nav_bar_input" name="preco" placeholder="How much?" required>
		<input type="submit" class="nav_bar_submit" name="enviar" value="►">
		<label id="trocar"> <img class="img_trocar" alt="Trocar" title="Trocar" src="icons\trocar.png"></label>
	</form>
</div>

<div class="nav_bar_2" hidden>	
	<form autocomplete="off" action="{{route('inserirCredito')}}" method="post" enctype="multipart/form-data">
			{{ csrf_field() }}	
		<label class="nav_bar_opcao">Money keeps raining </label>
		<input type="text" class="nav_bar_input" name="nome" placeholder="A man need's a name" required>
		<input type="number" class="nav_bar_input" name="parcelas" placeholder="Parcels" required>
		<input type="text" class="nav_bar_input" name="preco" placeholder="How much?" required>
		<input type="submit" class="nav_bar_submit" name="enviar" value="►">
		<label id="trocar2"> <img class="img_trocar" alt="Trocar" title="Trocar" src="icons\trocar.png"></label>
	</form>
</div>

<script type="text/javascript">
	
$(document).ready(function()
{

	$('#trocar').on('click',function()
		{
			$('.nav_bar').hide();
			$('.nav_bar_2').show();
			$('#trocar').hide();
			$('#trocar2').show();
		});

	$('#trocar2').on('click',function()
		{
			$('.nav_bar').show();
			$('.nav_bar_2').hide();
			$('#trocar').show();
			$('#trocar2').hide();
		});

});

</script>


