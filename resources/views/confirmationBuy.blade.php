@extends('layouts.app')


@section('contenido_js')
    
@endsection

@section('contenido_cSS')
    
@endsection


@section('content')
@endsection

@section('contenido_abajo_js')
<script>

Swal.fire({
		title: "Compra de boleto",
        html: `<p>La compra de boleto fue comprada exitosamente</p>
        <hr class='separatorLine'>`,
		icon: "success",
        confirmButtonText:"Continuar",
        footer: '<a href>Ver mi pasaje</a>'
	});
</script>
    
@endsection