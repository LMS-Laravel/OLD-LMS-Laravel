<h4>{{ $label }}</h4>

{!! $input !!}

@if ( ! empty($errors))
<div class="controls">
    @foreach ($errors as $error)
        <p class="help-block">{{ $error }}</p>
    @endforeach
</div>
@endif
<hr>