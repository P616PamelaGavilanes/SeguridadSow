@extends('disenios.libro')
@section('contenido')
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->


<div class="">
  <div class="container">
  
    <h2 class="pb-3 pt-2 border-bottom mb-5">Listado de libros</h2>
    @foreach ($libros as $libro)
    <!--first section-->
    <div class="row align-items-center how-it-works d-flex">
      <div class="col-2 text-center bottom d-inline-flex justify-content-center align-items-center">
        <div class="circle font-weight-bold">{{$libro->id}}</div>
      </div>
      <div class="col-6">
        <h5>{{$libro->titulo}}</h5>
        <p>{{$libro->autor}}
                      <br>{{$libro->anio}}
                      <br>{{$libro->descripcion}}</p>
      </div>
      <button class = "btn btn-outline-danger"  onclick="location.href = '{{ url("libros/{$libro->id}") }}'"> Ver </button>
    </div>
    <!--path between 1-2-->
    <div class="row timeline">
      <div class="col-2">
        <div class="corner top-right"></div>
      </div>
      <div class="col-8">
        <hr/>
      </div>
      <div class="col-2">
        <div class="corner left-bottom"></div>
      </div>
    </div>
    @endforeach
    <button type="button" class= "btn btn-primary btn-lg" onclick="location.href = '{{ route('dashboard') }}'">Regresar</button>
  
  </div>

</div>
<style>
.circle {
  padding: 13px 20px;
  border-radius: 50%;
  background-color: #ED8D8D;
  color: #fff;
  max-height: 50px;
  z-index: 2;
}

.how-it-works.row .col-2 {
  align-self: stretch;
}
.how-it-works.row .col-2::after {
  content: "";
  position: absolute;
  border-left: 3px solid #ED8D8D;
  z-index: 1;
}
.how-it-works.row .col-2.bottom::after {
  height: 50%;
  left: 50%;
  top: 50%;
}
.how-it-works.row .col-2.full::after {
  height: 100%;
  left: calc(50% - 3px);
}
.how-it-works.row .col-2.top::after {
  height: 50%;
  left: 50%;
  top: 0;
}
.timeline div {
  padding: 0;
  height: 40px;
}
.timeline hr {
  border-top: 3px solid #ED8D8D;
  margin: 0;
  top: 17px;
  position: relative;
}
.timeline .col-2 {
  display: flex;
  overflow: hidden;
}
.timeline .corner {
  border: 3px solid #ED8D8D;
  width: 100%;
  position: relative;
  border-radius: 15px;
}
.timeline .top-right {
  left: 50%;
  top: -50%;
}
.timeline .left-bottom {
  left: -50%;
  top: calc(50% - 3px);
}
.timeline .top-left {
  left: -50%;
  top: -50%;
}
.timeline .right-bottom {
  left: 50%;
  top: calc(50% - 3px);
}
</style>
@endsection
