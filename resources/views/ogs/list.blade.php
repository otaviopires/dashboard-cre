@extends('layouts.app')

@section('content')
	<h1 align="center">Histórico de OGs</h1>
	<table class="table table-hover table-bordered">
		<thead>
			<tr style="background-color:lightgreen;" align="center">
				<th scope="col" style="vertical-align:middle">Protocolo</th>
				<th scope="col" style="vertical-align:middle">Fila</th>
				<th scope="col" style="vertical-align:middle">Status</th>
				<th scope="col" style="vertical-align:middle">Data de abertura</th>
				<th scope="col" style="vertical-align:middle">Serviço</th>			  
				<th scope="col" style="vertical-align:middle">Regional</th>
				<th scope="col" style="vertical-align:middle">Localidade</th>
				<th scope="col" style="vertical-align:middle">Interrompeu?</th>
				<th scope="col" style="vertical-align:middle">Quantidade de clientes</th>
			</tr>
		</thead>
	@foreach ($ogs as $i=>$og)
		<tbody>
	        <tr data-toggle="collapse" data-target="#demo{{$i}}" class="accordion-toggle" style="background-color:lightyellow; text-align:center">
			  <th scope="row">{{ $og['protocolo'] }}</th>
			  <td>{{ $og['fila'] }}</td>
			  <td>{{ $og['status'] }}</td>
			  <td>{{ $og['data_abertura'] }}</td>
			  <td>{{ $og['servico'] }}</td>
			  <td>{{ $og['regional'] }}</td>
			  <td>{{ $og['localidade'] }}</td>
			  <td>{{ $og['interrompeu'] }}</td>
			  <td>{{ $og['qtd_clientes'] }}</td>		
			</tr> 
			<tr>
				<td class="hiddenRow" colspan="9"  style="background-color:lightblue">
					<div id="demo{{$i}}" class="accordian-body collapse"> 
						<p>
							<strong>Descrição:</strong>
							{{$og['descricao']}}			
						</p>						
						<p>
							<!-- {{$og['OBS']}} -->
							{!! nl2br(e($og['obs'])) !!}
						</p>
					</div> 
				</td>
			</tr>
		</tbody>
	@endforeach
	</table>
    {{$ogs->links()}}	
@endsection