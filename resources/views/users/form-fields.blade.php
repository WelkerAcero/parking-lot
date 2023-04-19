<label for="doctype_id" class="form-label user-title-dark">
    <b style="margin-left: 5px">Tipo de documento: </b><br>
    <select name="doctype_id" id="doctype_id" class="form-control input-form-ancho"
        value="{{ old('doctype_id', $user->doctype) }}" required>
        <option value="" disabled selected hidden>Seleccione el tipo de documento</option>
        @foreach ($doctypes as $item)
            @if ($item->id === $user->doctype_id)
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
    <input type="text" class="form-control input-form-ancho" name="ci" value="{{ old('ci', $user->ci) }}"
        placeholder="Digite el número de documento">
</label>
@error('ci')
    <p style="color: red">*{{ $message }}</p>
@enderror

<br>
<label for="name" class="form-label user-title-dark" style="text-align: left">
    <b style="margin-left: 5px">Nombre:</b><br>
    <input type="text" class="form-control input-form-ancho" name="name" value="{{ old('name', $user->name) }}"
        required placeholder="Digite el nombre">
</label>
@error('name')
    <p style="color: red">*{{ $message }}</p>
@enderror

<br>
<label for="lastname" class="form-label user-title-dark">
    <b style="margin-left: 5px">Apellido:</b><br>
    <input type="text" class="form-control input-form-ancho" name="lastname"
        value="{{ old('lastname', $user->lastname) }}" placeholder="Digite el apellido">
</label>
@error('lastname')
    <p style="color: red">*{{ $message }}</p>
@enderror

<br>
<label for="email" class="form-label user-title-dark">
    <b style="margin-left: 5px">Email de acceso:</b> <br>
    <input type="email" class="form-control input-form-ancho" name="email" value="{{ old('email', $user->email) }}"
        placeholder="Digite el correo">
</label>
@error('email')
    <p style="color: red">*{{ $message }}</p>
@enderror

<br>
<label for="password" class="form-label user-title-dark">
    <b style="margin-left: 5px">Contraseña de acceso:</b> <br>
    <input type="password" class="form-control input-form-ancho" name="password"
        value="{{ old('password', $user->cellphone) }}" placeholder="Digite la clave de acceso">
</label>
@error('password')
    <p style="color: red">*{{ $message }}</p>
@enderror
<br>
