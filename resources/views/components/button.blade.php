<div style="display: flex; align-items:center">
    <div class="component-button">
        <a href='{{ route("$type.create") }}' id="button-add-off" class="boton-clear button-add-off">
            {{ $add }}
        </a>
    </div>

    <div class="component-button">
        <a href='{{ route("$type.index") }}' id="button-list-off" class="boton-clear button-list-off">
            {{ $list }}
        </a>
    </div>
</div>
