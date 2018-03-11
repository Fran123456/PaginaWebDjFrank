<script src="http://js.nicedit.com/nicEdit-latest.js" type="text/javascript"></script>
<script type="text/javascript">bkLib.onDomLoaded(nicEditors.allTextAreas);</script>
<div class="form-group">
    {{ Form::label('name', 'Nombre de del diseño') }}
    {{ Form::text('name', null, ['class' => 'form-control', 'id' => 'name']) }}
</div>




<div class="form-group">
    {{ Form::label('body', 'Descripción') }}
    {{ Form::textarea('body', null, ['class' => 'form-control']) }}
</div>
<div class="form-group">
    {{ Form::label('file', 'Url imagen') }}
    {{ Form::text('file', null, ['class' => 'form-control']  ) }}
</div>
<div class="form-group">
    {{ Form::submit('Guardar', ['class' => 'btn btn-sm btn-primary']) }}
</div>

@section('scripts')
<script src="{{ asset('vendor/stringToSlug/jquery.stringToSlug.min.js') }}"></script>

@endsection
