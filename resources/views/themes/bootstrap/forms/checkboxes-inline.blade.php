@foreach($checkboxes as $checkbox)
    <label class="checkbox-inline">
        {!! Form::checkbox(
            $checkbox['name'],
            $checkbox['value'],
            $checkbox['checked'],
            ['id' => $checkbox['id']]
        ) !!}
        {{ $checkbox['label'] }}
    </label>
@endforeach