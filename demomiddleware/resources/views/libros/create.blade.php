@extends('disenios.libro')
@section('contenido')
<style>
body{
		background-color: #25274d;
	}
	.contact{
		height: 400px;
	}
	.col-md-3{
		background: #1c1c1c;
		padding: 1%;
		border-top-left-radius: 0.5rem;
		border-bottom-left-radius: 0.5rem;
	}
	.contact-info{
		margin-top:10%;
	}
	.contact-info img{
		margin-bottom: 15%;
        width: 50%;
        height: 50%;
	}
	.contact-info h2 {
		margin-bottom: 10%;
        color: #fff;
	}
    .contact-info h4 {
		margin-bottom: 10%;
        color: #fff;
	}
	.col-md-9{
		background: #fff;
		padding: 3%;
		border-top-right-radius: 0.5rem;
		border-bottom-right-radius: 0.5rem;
	}
	.contact-form label{
		font-weight:600;
	}
	.contact-form button{
		background: #25274d;
		color: #fff;
		font-weight: 600;
		width: 25%;
	}
	.contact-form button:focus{
		box-shadow:none;
	}
    .btn-label {position: relative;left: -12px;display: inline-block;padding: 6px 12px;background: rgba(0,0,0,0.15);border-radius: 3px 0 0 3px;}
.btn-labeled {padding-top: 0;padding-bottom: 0;}
.btn { margin-bottom:10px; }
</style>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<div class="container contact">
<button type="button" class= "btn btn-primary btn-lg" onclick="location.href = '{{ route('dashboard') }}'">Regresar</button>
	<div class="row">
		<div class="col-md-3">
			<div class="contact-info">
				<img src="https://www.nicepng.com/png/detail/239-2398877_icono-libros-back-to-school-1-001-facts.png" alt="image"/>
				<h2>Registrar libro</h2>
                <br><br><br><br>
				<h4>“La escritura es la pintura de la voz”</h4>
			</div>
		</div>
		<div class="col-md-9">
        <form action="{{route('libros.store')}}" method="post">
                    {!! csrf_field() !!}
                    <div class ="form-group">
                        <label for="">Titulo</label>
                        <input  class= "form-control" type="text" name="titulo">
						@error('titulo')
						<div class='alert alert-danger'>{{$message}}</div>
						@enderror
                    </div>
                    <div class ="form-group">
                        <label for="">Autor</label>
                        <input  class= "form-control" type="text" name="autor">
						@error('autor')
						<div class='alert alert-danger'>{{$message}}</div>
						@enderror
                    </div>
                    <div class ="form-group">
                        <label for="">Año</label>
                        <input  class= "form-control" type="number" name="anio">
						@error('anio')
						<div class='alert alert-danger'>Es requerido</div>
						@enderror
                    </div>
                    <div class ="form-group">
                        <label for="">Descripcion</label>
                        <textarea class= "form-control" name="descripcion" cols= "30" rows= "10"></textarea>
						@error('descripcion')
						<div class='alert alert-danger'>Es requerida</div>
						@enderror
                    </div>
                    <div class ="form-group">
                    <button class = "btn btn-dark"> Agregar libro</button>
                    </div>
                </form>
		</div>
	</div>
</div>
@endsection
