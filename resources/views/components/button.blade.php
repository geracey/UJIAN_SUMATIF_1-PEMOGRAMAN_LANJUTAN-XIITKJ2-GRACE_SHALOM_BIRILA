@props(['color'])


<button style="background-color: {{ $color }}; color: white; padding: 8px 16px; border-radius: 6px;">
    {{ $slot }}
</button>
