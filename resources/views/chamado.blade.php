@extends('templates/navbar')

@section('formulario')
<div class="p-4">
<form class="border border-primary border-4 rounded-end p-4" method="POST" action="{{ route('registrar_chamado')}}">
    <h1 class="text-center">Ordem de serviço</h1>
    @if($errors->has('checkbox'))
    <p class="text-center fs-3 text-danger fw-bold">Você não concordou com os termos.</p>
    @endif
    @csrf
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">Aparelho:</label>
      <input type="text" class="form-control"  name="descApp" required>
    </div>
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Defeito relatado:</label>
        <div class="form-floating">
          <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea" name="descRelat" required></textarea>
        </div>
      </div>
      <div class="input-group mb-3">
        <span class="input-group-text">Data de entrada</span>
        <input type="date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="dataEntrada" required>
        <span class="input-group-text">Data de saída</span>
        <input type="date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="dataSaida" required>
      </div>
      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Nome do cliente: </label>
        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="nomeCliente" required>
      </div>
      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Telefone para contato: </label>
        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="telefoneContato" required>
      </div>

      <legend>Acessórios:</legend>

      <div class="input-group mb-3">
        <span class="input-group-text">Capa</span>
        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="Capa">
        <span class="input-group-text">Chip</span>
        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="Chip">
      </div>

      <div class="input-group mb-3">
        <span class="input-group-text">Operadora(as)</span>
        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="Operadoras">
        <span class="input-group-text">Cabo USB</span>
        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="caboUsb">
        <span class="input-group-text">Cartão de memória(GB)</span>
        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="Cartao">
      </div>
      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Ao preencher a caixa abaixo o cliente está ciente que o prazo máximo para resgatar é de 90 dias, após esse prazo o aparelho será enviado para compensação do preço da peça substituida e mão de obra do mesmo:</label>
      </div>
      <div class="mb-3 form-check">
        <input type="checkbox" class="form-check-input" id="exampleCheck1" name="checkbox" value="1">
        <label class="form-check-label" for="exampleCheck1">Estou de acordo</label>
      </div>
      
    <button type="submit" class="btn btn-primary">Enviar</button>
  </form>


@endsection