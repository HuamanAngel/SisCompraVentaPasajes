
<div class="cardContainer1 shadow">
    <form action="{{ route('paymentMethod') }}" method="POST">
        @csrf
        <div class="p-3 d-flex justify-content-between">
            <h4 style="font-weight: bold">Salida</h4>
            <h4 style="font-weight: bold">Llegada</h4>
        </div>

        <div class="pl-3 pr-3 d-flex justify-content-between">
            <label for="">{{ $dataBus->iti_terminal_origen }}</label>
            <label for="">{{ $dataBus->iti_terminal_llegada }}</label>
        </div>
        <div class="pl-3 pr-3">
            <hr class="separatorLine">
        </div>
        <div class="pl-3 pr-3 d-flex justify-content-between">
            <h4 style="font-weight: bold">N° de asiento: </h4>
            <h4 style="font-weight: bold" class="class-asiento-select" data-asiento-select="0"> - - -</h4>
        </div>

        <div class="pl-3 pr-3">
            <hr class="separatorLine">
        </div>
        <div class="pl-3 pr-3 d-flex justify-content-between">
            <h4 style="font-weight: bold">Costo Base: </h4>
            <h4 style="font-weight: bold" class="class-base-select" data-base="{{ $dataBus->iti_price }}" >S/{{ $dataBus->iti_price }}</h4>
        </div>

        <div class="pl-3 pr-3">
            <hr class="separatorLine">
        </div>
        <div class="pl-3 pr-3 d-flex justify-content-between">
            <h4 style="font-weight: bold">Por Ubicacion: </h4>
            <h4 style="font-weight: bold" class="class-ubicacion-select" data-ubicacion="0"> - - -</h4>
        </div>

        <div class="pl-3 pr-3">
            <hr class="separatorLine">
        </div>
        <div class="pl-3 pr-3 d-flex justify-content-between">
            <h4 style="font-weight: bold">Costo Total: </h4>
            <h4 style="font-weight: bold" class="class-total-select" data-total="0"> - - -</h4>
        </div>

        <div class="pl-3 pr-3">
            <hr class="separatorLine">
        </div>
        <input type="hidden" name="id" value="{{ $dataBus->id}}">
        <input type="hidden" name="asiento" class="inputAsiento" value="">
        <input type="hidden" name="costoBase" class="inputPrice" value="{{ $dataBus->iti_price}}">
        <input type="hidden" name="costoUbicacion" class="inputUbicacion" value="">
        <input type="hidden" name="costoTotal" class="inputTotal" value="">
        <div class="pb-2 d-flex justify-content-center">
            <button type="submit" class="btn btn-info text-white" style="font-weight: bold">Comprar pasaje</button>
        </div>
    </form>
</div>