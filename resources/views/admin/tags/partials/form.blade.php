<div class="form-group">
                    {!! Form::label('name', 'Nombre:') !!}
                    {!! Form::text('name', null, ['Class'=>'form-control', 'placeholder'=>'Ingrese el nombre de la Etiqueta ... ']) !!}
                
                    @error('name')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-group">
                    {!! Form::label('slug', 'Slug:') !!}
                    {!! Form::text('slug', null, ['Class'=>'form-control', 'placeholder'=>'Slug de la Etiqueta ... ','readonly']) !!}
                
                    @error('slug')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-group">
                    {!! Form::label('color', 'Color:') !!}
                    {!! Form::select('color', $colors, null,['Class'=>'form-control']) !!}
                
                    @error('color')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>