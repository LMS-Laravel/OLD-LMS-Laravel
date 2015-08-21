@foreach($radios as $radio)
    <label class="radio-inline">
        {!! Form::radio(
            $radio['name'],
            $radio['value'],
            $radio['selected'],
            ['id' => $radio['id']]
        ) !!}
        {{ $radio['label'] }}
    </label>
@endforeach
