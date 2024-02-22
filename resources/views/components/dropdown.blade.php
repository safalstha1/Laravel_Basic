{{--@props(['trigger'])--}}

{{--<div x-data="{ show: false }" @click.away="show = false">--}}
{{--    --}}{{-- Trigger --}}
{{--    <div @click="show = ! show">--}}
{{--        {{ $trigger }}--}}
{{--    </div>--}}

{{--    --}}{{-- Links --}}
{{--    <div x-show="show" class="py-2 absolute bg-gray-100 mt-2 rounded-xl w-full z-50 overflow-auto max-h-52" style="display: none">--}}
{{--        {{ $slot }}--}}
{{--    </div>--}}
{{--</div>--}}

@props(['active' => false])

@php
    $classes = 'block text-left px-3 text-sm leading-6 hover:bg-blue-500 focus:bg-blue-500 hover:text-white focus:text-white';
    if ($active) $classes .= ' bg-blue-500 text-white';
@endphp

<a {{ $attributes(['class' => $classes]) }}
>{{ $slot }}</a>
