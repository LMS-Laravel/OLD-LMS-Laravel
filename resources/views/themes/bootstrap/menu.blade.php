<ul class="{{ $class }}">
@foreach ($items as $item)
    <li @if ($item['class']) class="{{ $item['class'] }}" @endif id="menu_{{ $item['id'] }}">
    @if (empty($item['submenu']))
        <a href="{{ $item['url'] }}" @if (isset($item['target'])) target = {{ $item['target'] }}  @endif @if (isset($item['data-scroll'])) data-scroll @endif >
            @if(isset($item['icon']))
                <i class="fa fa-{{ $item['title'] }}"></i>
            @else
                {{ $item['title'] }}
            @endif
        </a>
    @else
        <a href="{{ $item['url'] }}" class="dropdown-toggle" data-toggle="dropdown">
            {{ $item['title'] }}
            <b class="caret"></b>
        </a>
        <ul class="dropdown-menu">
            @foreach ($item['submenu'] as $subitem)
                <li><a href="{{ $subitem['url'] }}">{{ $subitem['title'] }}</a></li>
            @endforeach
        </ul>
    @endif
    </li>
@endforeach
</ul>