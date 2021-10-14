<div class="form-group">
    {!! Form::label('name', 'Nombre') !!}
    {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el nombre del Tag']) !!}
    @error('name')
        <span class="text-danger">{{$message}}</span>
    @enderror
</div>

<div class="form-group">
    {!! Form::label('slug', 'slug') !!}
    {!! Form::text('slug', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el Slug del tag', 'readonly']) !!}
    @error('slug')
        <span class="text-danger">{{$message}}</span>
    @enderror
</div>

<div class="form-group">
    {{-- <label for="color">color</label>
    <select name="color" id="color" class="form-control">
        <option value="red">Rojo</option>
        <option value="blue">Zul</option>
        <option value="green">Verde</option>
    </select> --}}
    {!! Form::label('color', 'Selecciona tu color') !!}
    {!! Form::select('color', $colors, null, ['class' => 'form-control']) !!}
    @error('color')
        <span class="text-danger">{{$message}}</span>
    @enderror
</div>