
@extends('layouts.app')

@section('title', 'Vaccination Schedule')

@section('content')
    <div class="space-y-6">
        <div>
            <h1 class="text-3xl font-bold text-gray-900">
                Vaccination Schedule
            </h1>
            <p class="mt-2 text-gray-500">
                Barangay Matina Crossing Health Center
            </p>
        </div>

        <x-panel title="All Vaccination Records">
            <div class="overflow-x-auto">
                <table class="w-full text-left text-sm">
                    <thead class="bg-gray-100">
                        <tr>
                            <th class="p-3">#</th>
                            <th class="p-3">Patient</th>
                            <th class="p-3">Purok</th>
                            <th class="p-3">Vaccine</th>
                            <th class="p-3">Dose</th>
                            <th class="p-3">Date</th>
                            <th class="p-3">Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($schedules as $schedule)
                            <tr class="{{ $loop->odd ? 'bg-gray-50' : 'bg-white' }} border-b">
                                <td class="p-3">{{ $loop->iteration }}</td>
                                <td class="p-3">{{ $schedule->patient_name }}</td>
                                <td class="p-3">{{ $schedule->purok }}</td>
                                <td class="p-3">{{ $schedule->vaccine }}</td>
                                <td class="p-3">{{ $schedule->dose }}</td>
                                <td class="p-3">{{ $schedule->scheduled_at->format('M d, Y') }}</td>
                                <td class="p-3">{{ $schedule->status }}</td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="7" class="p-6 text-center text-gray-500">
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
