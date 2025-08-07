@props(['type', 'color'])

<button type="{{$type}}" style="padding: 4px; bg-color: green; color {{ $color }};">{{ $slot }}
    
</button>