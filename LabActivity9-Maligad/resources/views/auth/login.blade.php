@extends('layouts.app')

@section('title', 'Sign In - Bakuna Tracker')

@section('content')
    <div class="mx-auto mt-12 max-w-md rounded-xl bg-white p-8 shadow-md">
        <h1 class="mb-2 text-center text-2xl font-bold text-emerald-700">
            Bakuna Tracker
        </h1>

        <p class="mb-6 text-center text-sm text-gray-500">
            Barangay Matina Crossing Health Center
        </p>

        <form method="POST" action="{{ route('login') }}" class="space-y-4">
            @csrf

            <div>
                <label for="email" class="mb-1 block text-sm font-medium text-gray-700">
                    Email Address
                </label>

                <input type="email" id="email" name="email"
                    value="{{ old('email') }}"
                    required
                    class="w-full rounded-lg border border-gray-300 p-3 focus:border-emerald-500 focus:outline-none">

                @error('email')
                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label for="password" class="mb-1 block text-sm font-medium text-gray-700">
                    Password
                </label>

                <input type="password" id="password" name="password"
                    required
                    class="w-full rounded-lg border border-gray-300 p-3 focus:border-emerald-500 focus:outline-none">

                @error('password')
                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>

            <button type="submit"
                class="w-full rounded-lg bg-emerald-600 p-3 font-semibold text-white hover:bg-emerald-700">
                Sign In
            </button>
        </form>
    </div>
@endsection
