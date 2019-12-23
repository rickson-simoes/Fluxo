@extends ('layout.unificar')

@section ('titulo','Fluxo')

@section ('conteudo')

<div class="controle_fluxo">
 <label class="cash">♥</label><b> {{$cash}} </b>
 <label class="sobra">♠</label><b> {{$sobra}} </b>
 <label class="pagar">♣</label><b> {{$soma}}</b>
</div>

<div class="box_principal">
	<div class="titulo"> Extras <label class="pagar_tit"><label class="pagar">♣</label> {{$soma_ext}}</label></div>
	
	<div class="conteudo">
		
	<div class="box_tabela">

		<table class="tarefaTabela">

			<th class="tarefaTituloTabela">Nome</th>
			<th class="tarefaTituloTabela">Parcelas</th>
			<th class="tarefaTituloTabela">Preço</th>
			<th class="tarefaTituloTabela"> </th>
		@foreach ($exibirdados as $exb)
			<tr class="tarefaLinhaTabela">
				<td class="tarefaDataTabela">{{$exb->nome}}</td>
				<td class="tarefaDataTabela">{{$exb->parcelas}}</td>
				<td class="tarefaDataTabela">R$ {{$exb->preco}}</td>
				<td class="tarefaDataTabela"><a class="deletar" href="{{route('deletar',$exb->id)}}"><img alt="Deletar" title="Deletar" src="icons\deletar.png"></a></td>
			</tr>
		@endforeach
		</table>
	</div>
	</div>
	<div style="border-top: 1px solid #81525f; padding-top: 7px;">
		<a id="botaoPaguei" href="{{route('pagueiCredito')}}"><div class="botao_paguei"> Paguei :)</div></a>
	</div>
</div>

<div class="box_credito">
	<div class="titulo_credito"> Mensais <label class="pagar_tit"><label class="pagar">♣</label> {{$soma_cre}}</label></div>
	
	<div class="conteudo">
		
	<div class="box_tabela">

		<table class="tarefaTabela">

			<th class="tarefaTituloTabela">Nome</th>
			<th class="tarefaTituloTabela">Parcelas</th>
			<th class="tarefaTituloTabela">Preço</th>
			<th class="tarefaTituloTabela"> </th>
		@foreach ($exibirdados_cre as $exb_cre)
			<tr class="tarefaLinhaTabela">

				<td class="tarefaDataTabela_cre">{{$exb_cre->nome_credito}}</td>
				<td class="tarefaDataTabela_cre">{{$exb_cre->parcelas_credito}}</td>
				<td class="tarefaDataTabela_cre">R$ {{$exb_cre->preco_credito}}</td>
				<td class="tarefaDataTabela_cre"><a class="deletar" href="{{route('deletarCredito',$exb_cre->id_credito)}}"><img alt="Deletar" title="Deletar" src="icons\deletar.png"></a></td>
			</tr>
		@endforeach
		</table>
	</div>
	</div>
</div>

<script type="text/javascript">
$(document).ready(function(){

	$('#botaoPaguei').click( function(going){

	var confirmacao = confirm("Deseja confirmar sua requisição?") ? '' : going.preventDefault();

	});
});

</script>

@endsection