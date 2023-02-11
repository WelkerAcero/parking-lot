<label for="doctype_id" class="form-label user-title-dark">
    <b style="margin-left: 5px">Tipo de documento: </b><br>
    <select name="doctype_id" id="doctype_id" class="form-control input-form-ancho"
        value="{{ old('doctype', $data->doctype) }}" required>
        <option value="" disabled selected hidden>Seleccione el tipo de documento</option>
        @foreach ($doctypes as $item)
            @if ($item->id === $data->doctype_id)
                <option value="{{ $item->id }}" selected>{{ $item->name }}</option>
            @else
                <option value="{{ $item->id }}">{{ $item->name }}</option>
            @endif
        @endforeach
    </select>
</label>
<br>

<label for="ci" class="form-label user-title-dark">
    <b style="margin-left: 5px">Cédula:</b> <br>
    <input type="text" class="form-control input-form-ancho" name="ci" value="{{ old('ci', $data->ci) }}"
        placeholder="Digite el número de documento">
    @error('ci')
        <p style="color: red">*{{ $message }}</p>
    @enderror
</label>

<br>
<label for="name" class="form-label user-title-dark" style="text-align: left">
    <b style="margin-left: 5px">Nombre:</b><br>
    <input type="text" class="form-control input-form-ancho" name="name" value="{{ old('name', $data->name) }}"
        required placeholder="Digite el nombre">
</label>
<br>
<label for="lastname" class="form-label user-title-dark">
    <b style="margin-left: 5px">Apellido:</b><br>
    <input type="text" class="form-control input-form-ancho" name="lastname"
        value="{{ old('lastname', $data->lastname) }}" placeholder="Digite el apellido">
</label>
<br>
<label for="email" class="form-label user-title-dark">
    <b style="margin-left: 5px">Email:</b> <br>
    <input type="email" class="form-control input-form-ancho" name="email" value="{{ old('email', $data->email) }}"
        placeholder="Digite el correo">
</label>
<br>
<label for="charge_id" class="form-label user-title-dark">
    <b style="margin-left: 5px">Cargo:</b> <br>
    <select name="charge_id" id="charge_id" class="form-control input-form-ancho"
        value="{{ old('charge', $data->charge) }}">
        <option value="" disabled selected hidden>Seleccione el cargo/puesto</option>
        @foreach ($charges as $item)
            @if ($item->id === $data->charge_id)
                <option value="{{ $item->id }}" selected>{{ $item->name }}</option>
            @else
                <option value="{{ $item->id }}">{{ $item->name }}</option>
            @endif
            {{-- <option value="{{ $item->id }}">{{ $item->name }}</option> --}}
        @endforeach
    </select>
</label>
<br>
<div class="user-btn-container">
    <button type="reset" class="btn btn-primary user-btn">Limpiar</button>
    <button type="submit" class="btn btn-success user-btn">Guardar</button>
</div>
</div>
