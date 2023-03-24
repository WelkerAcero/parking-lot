<label for="doctype_id" class="form-label user-title-dark">
    <b style="margin-left: 5px">Tipo de documento: </b><br>
    <select name="doctype_id" id="doctype_id" class="form-control input-form-ancho"
        value="{{ old('doctype_id', $customer->doctype) }}" required>
        <option value="" disabled selected hidden>Seleccione el tipo de documento</option>
        @foreach ($doctypes as $item)
            @if ($item->id === $customer->doctype_id)
                <option value="{{ $item->id }}" selected>{{ $item->name }}</option>
            @else
                <option value="{{ $item->id }}">{{ $item->name }}</option>
            @endif
        @endforeach
    </select>
    @error('doctype_id')
        <p style="color: red">*{{ $message }}</p>
    @enderror
</label>
<br>

<label for="ci" class="form-label user-title-dark">
    <b style="margin-left: 5px">Cédula:</b> <br>
    <input type="text" class="form-control input-form-ancho" name="ci" value="{{ old('ci', $customer->ci) }}"
        placeholder="Digite el número de documento">
</label>
@error('ci')
    <p style="color: red">*{{ $message }}</p>
@enderror

<br>
<label for="name" class="form-label user-title-dark" style="text-align: left">
    <b style="margin-left: 5px">Nombre:</b><br>
    <input type="text" class="form-control input-form-ancho" name="name"
        value="{{ old('name', $customer->name) }}" required placeholder="Digite el nombre">
</label>
@error('name')
    <p style="color: red">*{{ $message }}</p>
@enderror

<br>
<label for="lastname" class="form-label user-title-dark">
    <b style="margin-left: 5px">Apellido:</b><br>
    <input type="text" class="form-control input-form-ancho" name="lastname"
        value="{{ old('lastname', $customer->lastname) }}" placeholder="Digite el apellido">
</label>
@error('lastname')
    <p style="color: red">*{{ $message }}</p>
@enderror

<br>
<label for="email" class="form-label user-title-dark">
    <b style="margin-left: 5px">Email:</b> <br>
    <input type="email" class="form-control input-form-ancho" name="email"
        value="{{ old('email', $customer->email) }}" placeholder="Digite el correo">
</label>
@error('email')
    <p style="color: red">*{{ $message }}</p>
@enderror

<br>
<label for="cellphone" class="form-label user-title-dark">
    <b style="margin-left: 5px">Número de celular:</b> <br>
    <input type="number" class="form-control input-form-ancho" name="cellphone"
        value="{{ old('cellphone', $customer->cellphone) }}" placeholder="Digite el número de celular">
</label>
@error('cellphone')
    <p style="color: red">*{{ $message }}</p>
@enderror
<br>

<label for="charge_id" class="form-label user-title-dark">
    <b style="margin-left: 5px">Cargo:</b> <br>
    <select name="charge_id" id="charge_id" class="form-control input-form-ancho"
        value="{{ old('charge_id', $customer->charge) }}">
        <option value="" disabled selected hidden> Seleccione el cargo/puesto</option>
        @foreach ($charges as $item)
            @if ($item->id === $customer->charge_id)
                <option value="{{ $item->id }}" selected>{{ $item->name }}</option>
            @else
                <option value="{{ $item->id }}">{{ $item->name }}</option>
            @endif
            {{-- <option value="{{ $item->id }}">{{ $item->name }}</option> --}}
        @endforeach
    </select>
    @error('charge_id')
        <p style="color: red">*{{ $message }}</p>
    @enderror
</label>
