
    <div class="form-group">
                    {!! Form::label('name', 'Nombre:') !!}
                    {!! Form::text('name', null, ['Class'=>'form-control', 'placeholder'=>'Ingrese el nombre del Posts ... ']) !!}
                
                    @error('name')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>

                <div class="form-group">
                    {!! Form::label('slug', 'Slug:') !!}
                    {!! Form::text('slug', null, ['Class'=>'form-control', 'placeholder'=>'Slug del Posts ... ','readonly']) !!}
                
                    @error('slug')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>

                <div class="form-group">
                    {!! Form::label('category_id', 'Categorias:') !!}
                    {!! Form::select('category_id', $categories, null,['Class'=>'form-control']) !!}
                
                    @error('category_id')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>

                <div class="form-group">
                    <p class="font-weight-bold">Etiquetas</p>
                    @foreach ($tags as $tag)
                        <label class="mr-2">
                            {!! Form::checkbox('tags[]', $tag->id, null) !!}
                            {{ $tag->name }}
                        </label>
                    @endforeach

                    @error('tags')
                        <br>
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>

                <div class="form-group">
                    <p class="font-weight-bold">Estado</p>

                    <label class="mr-2">
                        {!! Form::radio('status', 1, true) !!}
                        Borrador
                    </label>
                    <label class="mr-2">
                        {!! Form::radio('status', 2) !!}
                        Publicado
                    </label>

                    @error('status')
                        <br>
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>

                <div class="row mb-3">
                    <div class="col">
                        <div class="image-wrapper">
                            @isset ($post->image)
                                <img id="picture" src="{{ Storage::url($post->image->url) }}" alt="">
                            @else
                                <img id="picture" src="https://cdn.pixabay.com/photo/2021/03/29/08/22/peach-flower-6133330_960_720.jpg" alt="">
                            @endisset
                            
                        </div>
                    </div>

                    <div class="col">
                        <div class="form-group">
                            {!! Form::label('file', 'Imagen del Post:') !!}
                            {!! Form::file('file', ['Class'=>'form-control-file', 'accept' => 'image/*']) !!}
                            @error('file')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum saepe velit, at cupiditate vitae earum minima, sit a labore ipsum mollitia quidem quibusdam incidunt itaque tenetur, tempora ducimus totam hic?
                        </p>
                    </div>
                </div>

                <div class="form-group">
                    {!! Form::label('extract', 'Extracto:') !!}
                    {!! Form::textarea('extract', null,['Class'=>'form-control']) !!}
                
                    @error('extract')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror

                </div>

                <div class="form-group">
                    {!! Form::label('body', 'Cuerpo del Post:') !!}
                    {!! Form::textarea('body', null,['Class'=>'form-control']) !!}
                 
                    @error('body')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror   
                </div>
                