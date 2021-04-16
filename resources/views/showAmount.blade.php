@extends('layouts.app')


@section('contenido_js')
    
@endsection

@section('contenido_cSS')
<link rel="stylesheet" href="{{ asset('css/styleShowAmount.css') }}">

@endsection


@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-8">


            <h4 class="py-4">Piso 1</h4>

            <div class="col-md-6">
                <div class="cardContainer1 shadow">
                    <div class="row">
                        <div class="col-md-12 d-flex justify-content-around">
                            <button data-number="1" class="m-2 @if($todosAsientos->contains('pas_numero_asiento',1)) btn-danger @else buttonAmount @endif" data-floor="1" data-select="0">1</button>
                            <button data-number="2" class="m-2 @if($todosAsientos->contains('pas_numero_asiento',2)) btn-danger @else buttonAmount @endif" data-floor="1" data-select="0">2</button>
                            <button data-number="3" class="m-2 @if($todosAsientos->contains('pas_numero_asiento',3)) btn-danger @else buttonAmount @endif" data-floor="1" data-select="0">3</button>
                            <button data-number="4" class="m-2 @if($todosAsientos->contains('pas_numero_asiento',4)) btn-danger @else buttonAmount @endif" data-floor="1" data-select="0">4</button>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 d-flex justify-content-around">
                            <button data-number="5" class="m-2 @if($todosAsientos->contains('pas_numero_asiento',5)) btn-danger @else buttonAmount @endif" data-floor="1" data-select="0">5</button>
                            <button data-number="6" class="m-2 @if($todosAsientos->contains('pas_numero_asiento',6)) btn-danger @else buttonAmount @endif" data-floor="1" data-select="0">6</button>
                            <button data-number="7" class="m-2 @if($todosAsientos->contains('pas_numero_asiento',7)) btn-danger @else buttonAmount @endif" data-floor="1" data-select="0">7</button>
                            <button data-number="8" class="m-2 @if($todosAsientos->contains('pas_numero_asiento',8)) btn-danger @else buttonAmount @endif" data-floor="1" data-select="0">8</button>
                        </div>
                    </div>

                </div>
            </div>





            <h4 class="py-4">Piso 2</h4>


            <div class="col-md-12">
                <div class="cardContainer1 shadow">


                    <div class="row">
                        <div class="col-md-12 d-flex justify-content-around">
                            <button data-number="9" class="m-2 @if($todosAsientos->contains('pas_numero_asiento',9)) btn-danger @else buttonAmount @endif" data-floor="2" data-select="0">9</button>
                            <button data-number="10" class="m-2 @if($todosAsientos->contains('pas_numero_asiento',10)) btn-danger @else buttonAmount @endif" data-floor="2" data-select="0">10</button>
                            <button class="m-2 buttonAmount buttonAmountHidden"></button>
                            <button data-number="11" class="m-2 @if($todosAsientos->contains('pas_numero_asiento',11)) btn-danger @else buttonAmount @endif" data-floor="2" data-select="0">11</button>
                            <button data-number="12" class="m-2 @if($todosAsientos->contains('pas_numero_asiento',12)) btn-danger @else buttonAmount @endif" data-floor="2" data-select="0">12</button>
                            <button data-number="13" class="m-2 @if($todosAsientos->contains('pas_numero_asiento',13)) btn-danger @else buttonAmount @endif" data-floor="2" data-select="0">13</button>
                            <button data-number="14" class="m-2 @if($todosAsientos->contains('pas_numero_asiento',14)) btn-danger @else buttonAmount @endif" data-floor="2" data-select="0">14</button>
                            <button data-number="15" class="m-2 @if($todosAsientos->contains('pas_numero_asiento',15)) btn-danger @else buttonAmount @endif" data-floor="2" data-select="0">15</button>
                            <button data-number="16" class="m-2 @if($todosAsientos->contains('pas_numero_asiento',16)) btn-danger @else buttonAmount @endif" data-floor="2" data-select="0">16</button>

                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 d-flex justify-content-around">
                            <button data-number="17" class="m-2 @if($todosAsientos->contains('pas_numero_asiento',17)) btn-danger @else buttonAmount @endif" data-floor="2" data-select="0">17</button>
                            <button data-number="18" class="m-2 @if($todosAsientos->contains('pas_numero_asiento',18)) btn-danger @else buttonAmount @endif" data-floor="2" data-select="0">18</button>
                            <button class="m-2 buttonAmount buttonAmountHidden"></button>
                            <button data-number="19" class="m-2 @if($todosAsientos->contains('pas_numero_asiento',19)) btn-danger @else buttonAmount @endif" data-floor="2" data-select="0">19</button>
                            <button data-number="20" class="m-2 @if($todosAsientos->contains('pas_numero_asiento',20)) btn-danger @else buttonAmount @endif" data-floor="2" data-select="0">20</button>
                            <button data-number="21" class="m-2 @if($todosAsientos->contains('pas_numero_asiento',21)) btn-danger @else buttonAmount @endif" data-floor="2" data-select="0">21</button>
                            <button data-number="22" class="m-2 @if($todosAsientos->contains('pas_numero_asiento',22)) btn-danger @else buttonAmount @endif" data-floor="2" data-select="0">22</button>
                            <button data-number="23" class="m-2 @if($todosAsientos->contains('pas_numero_asiento',23)) btn-danger @else buttonAmount @endif" data-floor="2" data-select="0">23</button>
                            <button data-number="24" class="m-2 @if($todosAsientos->contains('pas_numero_asiento',24)) btn-danger @else buttonAmount @endif" data-floor="2" data-select="0">24</button>

                        </div>
                    </div>                    




                    <div class="row">
                        <div class="col-md-12 h-50 pt-4"></div>
                    </div>


                    <div class="row">
                        <div class="col-md-12 d-flex justify-content-around">
                            <button data-number="25" class="m-2 @if($todosAsientos->contains('pas_numero_asiento',25)) btn-danger @else buttonAmount @endif" data-floor="2" data-select="0">25</button>
                            <button data-number="26" class="m-2 @if($todosAsientos->contains('pas_numero_asiento',26)) btn-danger @else buttonAmount @endif" data-floor="2" data-select="0">26</button>
                            <button data-number="27" class="m-2 @if($todosAsientos->contains('pas_numero_asiento',27)) btn-danger @else buttonAmount @endif" data-floor="2" data-select="0">27</button>
                            <button data-number="28" class="m-2 @if($todosAsientos->contains('pas_numero_asiento',28)) btn-danger @else buttonAmount @endif" data-floor="2" data-select="0">28</button>
                            <button data-number="29" class="m-2 @if($todosAsientos->contains('pas_numero_asiento',29)) btn-danger @else buttonAmount @endif" data-floor="2" data-select="0">29</button>
                            <button data-number="30" class="m-2 @if($todosAsientos->contains('pas_numero_asiento',30)) btn-danger @else buttonAmount @endif" data-floor="2" data-select="0">30</button>
                            <button data-number="31" class="m-2 @if($todosAsientos->contains('pas_numero_asiento',31)) btn-danger @else buttonAmount @endif" data-floor="2" data-select="0">31</button>
                            <button data-number="32" class="m-2 @if($todosAsientos->contains('pas_numero_asiento',32)) btn-danger @else buttonAmount @endif" data-floor="2" data-select="0">32</button>
                            <button data-number="33" class="m-2 @if($todosAsientos->contains('pas_numero_asiento',33)) btn-danger @else buttonAmount @endif" data-floor="2" data-select="0">33</button>

                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 d-flex justify-content-around">
                            <button data-number="34" class="m-2 @if($todosAsientos->contains('pas_numero_asiento',34)) btn-danger @else buttonAmount @endif" data-floor="2" data-select="0">34</button>
                            <button data-number="35" class="m-2 @if($todosAsientos->contains('pas_numero_asiento',35)) btn-danger @else buttonAmount @endif" data-floor="2" data-select="0">35</button>
                            <button data-number="36" class="m-2 @if($todosAsientos->contains('pas_numero_asiento',36)) btn-danger @else buttonAmount @endif" data-floor="2" data-select="0">36</button>
                            <button data-number="37" class="m-2 @if($todosAsientos->contains('pas_numero_asiento',37)) btn-danger @else buttonAmount @endif" data-floor="2" data-select="0">37</button>
                            <button data-number="38" class="m-2 @if($todosAsientos->contains('pas_numero_asiento',38)) btn-danger @else buttonAmount @endif" data-floor="2" data-select="0">38</button>
                            <button data-number="39" class="m-2 @if($todosAsientos->contains('pas_numero_asiento',39)) btn-danger @else buttonAmount @endif" data-floor="2" data-select="0">39</button>
                            <button data-number="40" class="m-2 @if($todosAsientos->contains('pas_numero_asiento',40)) btn-danger @else buttonAmount @endif" data-floor="2" data-select="0">40</button>
                            <button data-number="41" class="m-2 @if($todosAsientos->contains('pas_numero_asiento',41)) btn-danger @else buttonAmount @endif" data-floor="2" data-select="0">41</button>
                            <button data-number="42" class="m-2 @if($todosAsientos->contains('pas_numero_asiento',42)) btn-danger @else buttonAmount @endif" data-floor="2" data-select="0">42</button>

                        </div>
                    </div>

                </div>
            </div>


        </div>
        <div class="col-md-4">
            @include('partials.totalMont')
        </div>
    </div>

</div>

@endsection

@section('contenido_abajo_js')
<script>
  $.ajaxSetup({
    headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') //Obtiene el token 										csrf
      }
  });

</script>
    <script>
       $(document).ready(function(){
        let classAnteriorSeleccionada=null;
        $(document).on('click','.buttonAmount',function(event){
            let valorAsiento = $(this).attr('data-number');
            let valorPiso = $(this).attr('data-floor');            
            let valorUbicacion=' - - -';
            if(valorPiso == 1){
                valorUbicacion =40;
            }else if(valorPiso == 2){
                valorUbicacion =20;
            }
            if($(this).attr('data-select')==0){
                if(classAnteriorSeleccionada !=null){
                    classAnteriorSeleccionada.removeClass('btn-success');
                    classAnteriorSeleccionada.attr('data-select',0);
                }
                $(this).addClass('btn-success');
                $(this).attr('data-select',1);
                $('.class-asiento-select').attr('data-asiento-select',valorAsiento);
                $('.class-asiento-select').text(valorAsiento);
                $('.class-ubicacion-select').text('S/'+valorUbicacion);
                
                $('.class-total-select').text('S/'+(parseFloat(valorUbicacion)+parseFloat($('.inputPrice').val())));

                $('.inputAsiento').val(valorAsiento);
                $('.inputUbicacion').val(valorUbicacion);
                $('.inputTotal').val(parseFloat(valorUbicacion)+parseFloat($('.inputPrice').val()));                                

            }else if($(this).attr('data-select')==1){
                $(this).removeClass('btn-success');
                $(this).attr('data-select',0);
                $('.class-asiento-select').attr('data-asiento-select',0);
                $('.class-asiento-select').text(' - - -');
                $('.class-ubicacion-select').text(' - - - ');
                $('.class-total-select').text(' - - -');


                $('.inputAsiento').val('');
                $('.inputUbicacion').val('');
                $('.inputTotal').val('');                                


            }
            classAnteriorSeleccionada=$(this);
        });
       });

   </script>

@if (session('errorBuy'))
    <script>
        Swal.fire({
            title: "No se genero la compra",
            html:  `
            {{session('errorBuy')}}`,
            icon: "error"
        });
    </script>
@endif
@if (session('buySuccess'))
    <script>
        Swal.fire({
            title: "Compra de boleto",
            html: `<p>La compra de boleto fue comprada exitosamente</p>
            <hr class='separatorLine'>`,
            icon: "success",
            confirmButtonText:"Continuar",
            footer: '<a href="{{ route("misPasajes") }}">Ver mi pasaje</a>'
        });
    </script>
@endif
@endsection