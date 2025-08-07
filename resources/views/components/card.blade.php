@props(['heading'])

<div class="border border-gray-300 bg-white p-6 rounded-lg shadow hover:shadow-md transition-shadow duration-300">
    <h2 class="text-lg font-semibold text-gray-800 mb-2">{{ $heading }}</h2>
    <div>{{ $slot }}</div>
</div>
