
@props(['title'])

<section class="rounded-xl border border-gray-200 bg-white p-5 shadow-sm">
    <h2 class="mb-4 text-lg font-semibold text-gray-800">{{ $title }}</h2>
    {{ $slot }}
</section>
