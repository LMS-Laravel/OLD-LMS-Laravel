@foreach($checkboxes as $checkbox)
<div class="checkbox">
    <label>
        {!! Form::checkbox(
            $checkbox['name'],
            $checkbox['value'],
            $checkbox['checked'],
            ['id' => $checkbox['id']]
        ) !!}
        {{ $checkbox['label'] }}
    </label>
</div>
@endforeach