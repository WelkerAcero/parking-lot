<label for="l_plate" class="form-label user-title-dark">
    <b style="margin-left: 5px">Placa:</b> <br>
    <input type="text" class="form-control input-form-ancho" name="l_plate"
        value="{{ old('l_plate', $vehicle->l_plate) }}" required placeholder="Digite la placa">
</label>
@error('l_plate')
    <p style="color: red">*{{ $message }}</p>
@enderror

<label for="color" class="form-label user-title-dark" style="text-align: left">
    <b style="margin-left: 5px">Color:</b><br>
    <input type="text" class="form-control input-form-ancho" name="color"
        value="{{ old('color', $vehicle->color) }}" required placeholder="Digite el color">
</label>

<label for="model" class="form-label user-title-dark" style="text-align: left">
    <b style="margin-left: 5px">Modelo:</b><br>
    <input type="number" class="form-control input-form-ancho" name="model"
        value="{{ old('model', $vehicle->model) }}" min="1950" max="2023" required
        placeholder="Digite el modelo">
</label>

<label for="brand" class="form-label user-title-dark" style="text-align: left">
    <b style="margin-left: 5px">Marca:</b><br>
    <input type="text" class="form-control input-form-ancho" name="brand"
        value="{{ old('brand', $vehicle->brand) }}" required placeholder="Digite la marca">
</label>


<label for="customer_id" class="form-label user-title-dark">
    <b style="margin-left: 5px">Propietario: </b><br>
    <select name="customer_id" id="customer_id" class="form-control input-form-ancho"
        value="{{ old('customer_id', $vehicle->customer_id) }}" required>
        <option value="" disabled selected hidden>Seleccione el propietario</option>
        @foreach ($owner as $item)
            @if ($item->id === $vehicle->customer_id)
                <option value="{{ $item->id }}" selected>{{ $item->name }}</option>
            @else
                <option value="{{ $item->id }}">{{ $item->name }}</option>
            @endif
        @endforeach
    </select>
</label>

<label for="engine_id" class="form-label user-title-dark">
    <b style="margin-left: 5px">Tipo de automóvil: </b><br>
    <select name="vehicle_type_id" id="vehicle_type_id" class="form-control input-form-ancho"
        value="{{ old('vehicle_type_id', $vehicle->vehicle_type_id) }}" required>

        @foreach ($engines as $item)
            @if ($item->id === $vehicle->vehicle_type_id)
                <option value="{{ $item->id }}" selected>{{ $item->name }}</option>
            @else
                <option value="{{ $item->id }}">{{ $item->name }}</option>
            @endif
        @endforeach
    </select>
</label>

<br>
