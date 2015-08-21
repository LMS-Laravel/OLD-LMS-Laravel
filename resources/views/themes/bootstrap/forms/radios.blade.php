@foreach($radios as $radio)
<div class="radio">
    <label>
        {!! Form::radio(
            $radio['name'],
            $radio['value'],
            $radio['selected'],
            ['id' => $radio['id']]) !!}
        {{ $radio['label'] }}
    </label>
</div>
@endforeach