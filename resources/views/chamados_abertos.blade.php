@extends('templates/navbar')

@section('chamados')
<table class="table table-dark table-striped table-hover  table-bordered">
    @foreach ($chamados as $chamado)
    <thead>
       
            
  
      <tr>
        <th scope="col">ID do Chamado</th>
        <th scope="col">Nome do Cliente</th>
        <th scope="col">Aparelho Quebrado</th>

      </tr>
    </thead>
    <tbody>
        <tr class="border border-primar">
            <td>{{$chamado -> id}}</td>
            <td>{{$chamado -> nomeCliente}}</td>
            <td>{{$chamado -> descApp}}</td>
        </tr>

    </tbody>
    
    @endforeach
  </table>
@endsection