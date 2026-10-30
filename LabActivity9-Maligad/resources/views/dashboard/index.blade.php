
@extends('layouts.app')

@section('title', $title)

@section('content')
    <div class="space-y-6">
        <div>
            <h1 class="text-3xl font-bold text-gray-900">{{ $title }}</h1>
            <p class="mt-2 text-gray-500">Barangay Matina Crossing Health Center</p>
        </div>

        <div class="grid grid-cols-1 gap-4 sm:grid-cols-2 md:grid-cols-4">
            @foreach ($stats as $stat)
                <x-stat-card :title="$stat['label']" :value="$stat['value']" />
            @endforeach
        </div>

        @if ($alerts->count() > 0)
            <div class="rounded-lg bg-red-100 p-4 text-red-800">
                {{ $alerts->count() }} vaccination schedule(s) are overdue.
            </div>
        @elseif ($schedules->isEmpty())
            <div class="rounded-lg bg-yellow-100 p-4 text-yellow-800">
                No vaccination schedules have been added.
            </div>
        @else
            <div class="rounded-lg bg-green-100 p-4 text-green-800">
                All clear! No overdue vaccinations.
            </div>
        @endif

        <x-panel title="Vaccination Schedules">
            <div class="overflow-x-auto">
                <table class="w-full text-left text-sm">
                    <thead class="bg-gray-100">
                        <tr>
                            <th class="p-3">#</th>
                            <th class="p-3">Patient</th>
                            <th class="p-3">Vaccine</th>
                            <th class="p-3">Date</th>
                            <th class="p-3">Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($schedules as $schedule)
                            <tr class="{{ $loop->odd ? 'bg-gray-50' : 'bg-white' }} border-b">
                                <td class="p-3">{{ $loop->iteration }}</td>
                                <td class="p-3">{{ $schedule->patient_name }}</td>
                                <td class="p-3">{{ $schedule->vaccine }}</td>
                                <td class="p-3">{{ $schedule->scheduled_at->format('M d, Y') }}</td>
                                <td class="p-3">
                                    {{ $schedule->status }}

                                    @unless ($schedule->status !== 'Overdue')
                                        <span class="ml-1 rounded bg-red-100 px-2 py-1 text-xs text-red-700">
                                            Overdue
                                        </span>
                                    @endunless
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="5" class="p-6 text-center text-gray-500">
                                    No schedules yet.
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </x-panel>
    </div>
@endsection
