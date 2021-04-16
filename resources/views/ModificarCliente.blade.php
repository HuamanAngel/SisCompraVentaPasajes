@extends('layouts.appAdmin')


@section('contenido_js')
    
@endsection

@section('contenido_cSS')


  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset('VendorClientes/boxicons/css/boxicons.min.css')}}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{ asset('css/styleClientes.css') }} " rel="stylesheet">
  <style>
    .div-disabled {
        pointer-events: none;
        opacity: 0.4;
    }
    .button-hidden{
      display: none;
    }

</style>

@endsection


@section('content')

<main id="main">
  <!-- ======= Modificar Section ======= -->
  <section id="modificar" class="registro">
      <div class="container">
  
        <div class="section-title">
          <h2>Modificar Cliente</h2>
        </div>
        <div class="row m-2">
            <div class=" col-md-2">
                <p>Ingresar el DNI</p>
            </div>
            <div class="input-group  col-md-3">
              <input type="number" placeholder="Inserte numero de DNI" class="form-control search-dni-class">
              <div class="">
                  <button class="btn btn-danger btn-search-client" type="button" id=""><i class="fas fa-search"></i></button>
              </div>
          </div>
        </div>
        <div class="row" >
            <div class="col-lg-11 align-items-stretch" id="content-central-dni">
                    @include('partials/clientContentModi')

            </div>             
          </div>
      </div>
    </section><!-- End Modificar Section -->
    </main><!-- End #main -->
@endsection

@section('contenido_abajo_js')
<a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>
<script src="https://kit.fontawesome.com/2c36e9b7b1.js" crossorigin="anonymous"></script>


{{-- Ajax para search --}}

<script>
  $.ajaxSetup({
    headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') //Obtiene el token 										csrf
      }
  });

  $(document).ready(function(){
      $(document).on('keyup','.search-dni-class',function(event){
          let valueDniSearch = $('.search-dni-class').val();
          $.ajax({
              url: "/fetch-dni",
              method:"GET",
              data:{'numberDni':valueDniSearch},
              success: function(data) {
                  $("#content-central-dni").html(data);
                  $("#content-central-dni").removeClass('div-disabled');

              },
              beforeSend: function(thisXHR) {
                  $("#content-central-dni").addClass('div-disabled');
              },
              statusCode: {
                  404: function() {
                      alert("Error en la paginacion");
                  }
              },
              error: function(jqXHR, status, error) {
                  alert("Error al cargar tabla de productos");
              }
          });
      });




      $(document).on('click','.btn-search-client',function(event){
          let valueDniSearch = $('.search-dni-class').val();
          $.ajax({
              url: "/fetch-dni",
              method:"GET",
              data:{'numberDni':valueDniSearch},
              success: function(data) {
                  $("#content-central-dni").html(data);
                  $("#content-central-dni").removeClass('div-disabled');

              },
              beforeSend: function(thisXHR) {
                  $("#content-central-dni").addClass('div-disabled');
              },
              statusCode: {
                  404: function() {
                      alert("Error en la paginacion");
                  }
              },
              error: function(jqXHR, status, error) {
                  alert("Error al cargar tabla de productos");
              }
          });
      });

  });
</script>


<!-- Template Main JS File -->
<script src="{{ asset('js/funcClientes.js') }} "></script>


@if (session('userDniDelete'))
    <script>
        Swal.fire({
            title: "Categoria fue borrada correctamente",
            text:  "{{session('userDniDelete')}}",
            icon: "success"
        });
    </script>
@endif





  {{-- Cambia de texto el boton --}}
  {{--  0 : Para cambiar a actualizar
        1 : Para cambiar a editar--}}
        <script>
          $(document).on('click','.btn-submit-edit-client',function(event){
              if($(this).attr('data-button-edit')==0){
      
                  $(this).removeClass('btn-success').addClass('btn-info');
                  $(this).text('Actualizar');
                  $(this).attr('data-button-edit',1);
                  $(this).closest('.action-user').find('.btn-cancel-edit').removeClass('button-hidden');
      
                  // Mostrar input
      
                  $(this).closest('.trClientRegister').find('.inputDni').attr('type','number');            
                  $(this).closest('.trClientRegister').find('.classDni').addClass('button-hidden');            
      
                  $(this).closest('.trClientRegister').find('.inputApellido').attr('type','text');            
                  $(this).closest('.trClientRegister').find('.classApellido').addClass('button-hidden');            

                  $(this).closest('.trClientRegister').find('.inputName').attr('type','text');            
                  $(this).closest('.trClientRegister').find('.className').addClass('button-hidden');            

                  $(this).closest('.trClientRegister').find('.inputSexo').removeClass('button-hidden');            
                  $(this).closest('.trClientRegister').find('.classSexo').addClass('button-hidden');            

                  $(this).closest('.trClientRegister').find('.inputTel').attr('type','number');            
                  $(this).closest('.trClientRegister').find('.classTel').addClass('button-hidden');            

                  $(this).closest('.trClientRegister').find('.inputEmail').attr('type','email');            
                  $(this).closest('.trClientRegister').find('.classEmail').addClass('button-hidden');            

      
              }else if($(this).attr('data-button-edit')==1){
                  let valueIdJs = $(this).closest('.trClientRegister').find('.idUser').val();
                  let valueDnoJs = $(this).closest('.trClientRegister').find('.inputDni').val();
                  let valueApeJs = $(this).closest('.trClientRegister').find('.inputApellido').val();
                  let valueNamJs = $(this).closest('.trClientRegister').find('.inputName').val();
                  let valueSexJs = $(this).closest('.trClientRegister').find('.inputSexo').val();
                  let valueTelJs = $(this).closest('.trClientRegister').find('.inputTel').val();
                  let valueEmaJs = $(this).closest('.trClientRegister').find('.inputEmail').val();

                                   
                  //Datos de la tabla 
                  let  valueTableDni = $(this).closest('.trClientRegister').find('.classDni');
                  let  valueTableApe = $(this).closest('.trClientRegister').find('.classApellido');
                  let  valueTableNam = $(this).closest('.trClientRegister').find('.className');
                  let  valueTableSex = $(this).closest('.trClientRegister').find('.classSexo');

                  // $('select[name="lineas"] option:selected').text())

                  let  valueTableTel = $(this).closest('.trClientRegister').find('.classTel');
                  let  valueTableEma = $(this).closest('.trClientRegister').find('.classEmail');



                  // Esconde boton
                  $(this).removeClass('btn-info').addClass('btn-success');
                  $(this).text('Editar');
                  $(this).attr('data-button-edit',0);
                  $(this).closest('.action-user').find('.btn-cancel-edit').addClass('button-hidden');
      
      
                  // No mostrar input
                  $(this).closest('.trClientRegister').find('.inputDni').attr('type','hidden');            
                  $(this).closest('.trClientRegister').find('.classDni').removeClass('button-hidden');
      
      
                  $(this).closest('.trClientRegister').find('.inputApellido').attr('type','hidden');            
                  $(this).closest('.trClientRegister').find('.classApellido').removeClass('button-hidden');            
      
                  $(this).closest('.trClientRegister').find('.inputName').attr('type','hidden');            
                  $(this).closest('.trClientRegister').find('.className').removeClass('button-hidden');            

                  $(this).closest('.trClientRegister').find('.inputSexo').addClass('button-hidden');            
                  $(this).closest('.trClientRegister').find('.classSexo').removeClass('button-hidden');            

                  $(this).closest('.trClientRegister').find('.inputTel').attr('type','hidden');            
                  $(this).closest('.trClientRegister').find('.classTel').removeClass('button-hidden');            

                  $(this).closest('.trClientRegister').find('.inputEmail').attr('type','hidden');            
                  $(this).closest('.trClientRegister').find('.classEmail').removeClass('button-hidden');      
                  
                  // Colocar ajax
                let classTrNow = $(this).closest('.trClientRegister');
                $.ajax({
                    url: "/fetch-data-all",
                    method:"PUT",
                    data:{'dni':valueDnoJs,
                    'id':valueIdJs,
                    'lastname':valueApeJs,
                    'name':valueNamJs,
                    'sexo':valueSexJs,
                    'tel':valueTelJs,
                    'email':valueEmaJs},
                    success: function(data) {
                      if(data.error == 1){
                          Swal.fire({
                              title: "No se pudo actualizar",
                              html:  `
                              `+data.errorInfo+``,
                              icon: "error"
                          });

                        classTrNow.removeClass('div-disabled');

                      }else{
                        valueTableDni.text(data.dni);
                        valueTableApe.text(data.lastname);
                        valueTableNam.text(data.name);
                        valueTableSex.text(data.sexo);
                        valueTableTel.text(data.tel);
                        valueTableEma.text(data.email);
                        classTrNow.removeClass('div-disabled');
                      }
                    },
                    beforeSend: function(thisXHR) {
                      classTrNow.addClass('div-disabled');
                    },
                    statusCode: {
                        404: function() {
                            alert("Error en la paginacion");
                        }
                    },
                    error: function(jqXHR, status, error) {
                        alert("Error al cargar tabla de productos");
                    }
                });            
              }
          });
      
          // Cancela edicion
          $(document).on('click','.btn-cancel-edit',function(event){
              $(this).closest('.action-user').find('.btn-submit-edit-client').removeClass('btn-info').addClass('btn-success');
              $(this).closest('.action-user').find('.btn-submit-edit-client').text('Editar');
              $(this).closest('.action-user').find('.btn-submit-edit-client').attr('data-button-edit',0);
              $(this).addClass('button-hidden');
      
              // No mostrar input
              $(this).closest('.trClientRegister').find('.inputDni').attr('type','hidden');            
              $(this).closest('.trClientRegister').find('.classDni').removeClass('button-hidden');            
      
              $(this).closest('.trClientRegister').find('.inputApellido').attr('type','hidden');            
              $(this).closest('.trClientRegister').find('.classApellido').removeClass('button-hidden');            
      
              $(this).closest('.trClientRegister').find('.inputName').attr('type','hidden');            
              $(this).closest('.trClientRegister').find('.className').removeClass('button-hidden');            

              $(this).closest('.trClientRegister').find('.inputSexo').addClass('button-hidden');            
              $(this).closest('.trClientRegister').find('.classSexo').removeClass('button-hidden');            

              $(this).closest('.trClientRegister').find('.inputTel').attr('type','hidden');            
              $(this).closest('.trClientRegister').find('.classTel').removeClass('button-hidden');            

              $(this).closest('.trClientRegister').find('.inputEmail').attr('type','hidden');            
              $(this).closest('.trClientRegister').find('.classEmail').removeClass('button-hidden');     

      
          });
        </script>
      





@endsection