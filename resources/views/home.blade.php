@extends('templates/navbar')

@section('home')
<div class="d-flex justify-content-evenly p-4">
<div class="card" style="width: 18rem;">
    <img src="{{('assets/img/mandy.jpeg')}}" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Mandy Consertos</h5>
      <p class="card-text">Caso você queira um conserto da menina mais fria existente.</p>
      <a href="/chamado" class="btn btn-primary">Solicitar conserto</a>
    </div>
  </div>

  <div class="card" style="width: 18rem;">
    <img src="{{('assets/img/puroosso.jpeg')}}" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Puro-Osso Serviços</h5>
      <p class="card-text">Caso você queira um serviço do próprio senhor da morte.</p>
      <a href="/chamado" class="btn btn-primary">Solicitar Serviços</a>
    </div>
  </div>

  <div class="card" style="width: 18rem;">
    <img src="{{('assets/img/billy.jpeg')}}" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Billy Boboquices</h5>
      <p class="card-text">Caso você queira dar boas risadas com o maior bobão do planeta terra.</p>
      <a href="/chamado" class="btn btn-primary">Solicitar boboquices</a>
    </div>
  </div>
</div>



@endsection