<div class="form-group">
    {!! Form::label('name', 'Nombre') !!}
    {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el nombre del post']) !!}

    @error('name')
        <br>
        <small class="text-danger">{{$message}}</small>
    @enderror
    

</div>
<div class="form-group">
    {!! Form::label('slug', 'Slug') !!}
    {!! Form::text('slug', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el nombre del slug', 'readonly']) !!}

    @error('slug')
        <br>
        <small class="text-danger">{{$message}}</small>
    @enderror

</div>
<div class="form-group">
    {!! Form::label('Categoría', 'category_id') !!}
    {!! Form::select('category_id', $categories, null,['class' => 'form-control']) !!}

    @error('category_id')
        <br>
        <small class="text-danger">{{$message}}</small>
    @enderror

</div>
<div class="form-group">
    <p class="font-weigth-bold">Etiquetas</p>
    @foreach ($tags as $tag)
        <label for="" class="mr-2">
            {!! Form::checkbox('tags[]', $tag->id) !!}
            {{$tag->name}}
        </label>
    @endforeach

    @error('tags')
        <br>
        <small class="text-danger">{{$message}}</small>
    @enderror

</div>
<div class="form-group">
    <p class="font-weigth-bold">Estado</p>
    <label for="" class="mr-2">
        {!! Form::radio('status',1, true) !!}
        Borrador
    </label>
    <label for="" class="mr-2">
        {!! Form::radio('status',2) !!}
        Publicado
    </label>

    @error('status')
        <br>
        <small class="text-danger">{{$message}}</small>
    @enderror

</div>

<div class="row mb-3">
    <div class="col">
        <div class="image-wrapper">
            @isset ($post->image)
                <img id="picture" src="{{Storage::url($post->image->url)}}" alt="">
            @else
                <img id="picture" src="https://cdn.pixabay.com/photo/2016/10/20/18/35/earth-1756274_1280.jpg" alt="">
            @endisset
            
        </div>
    </div>
    <div class="col">
        <div class="form-group">
            {!! Form::label('file','Imagen que se mostrara') !!}
            {!! Form::file('file', ['class' => 'form-control-file', 'accept' => 'image/*']) !!}
        </div>

        @error('file')
            <br>
            <small class="text-danger">{{$message}}</small>
        @enderror

        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates architecto quisquam consectetur ratione iusto. Exercitationem ea rem quaerat eligendi voluptate voluptatum itaque magni doloremque, facilis, fugit quasi pariatur aperiam beatae.</p>
    </div>
</div>

<div class="form-group">
    {!! Form::label('extract', 'Extracto') !!}
    {!! Form::textarea('extract', null, ['class' => 'form-control']) !!}

    @error('extract')
        <br>
        <small class="text-danger">{{$message}}</small>
    @enderror

</div>
<div class="form-group">
    {!! Form::label('body', 'Cuerpo de post') !!}
    {!! Form::textarea('body', null, ['class' => 'form-control']) !!}

    @error('body')
        <br>
        <small class="text-danger">{{$message}}</small>
    @enderror

</div>
