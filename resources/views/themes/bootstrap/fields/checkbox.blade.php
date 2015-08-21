<div id="field_{{ $id }}"{!! Html::classes(['checkbox', 'error' => $hasErrors]) !!}>
    <label>
        {!! $input !!}
        {{ $label }}
    </label>
    @if ($required)
     <span class="label label-info">Required</span>
    @endif
    @if (!empty($errors))
    <div class="controls">
        @foreach ($errors as $error)
            <p class="help-block">{{ $error }}</p>
        @endforeach
    </div>
    @endif
</div>