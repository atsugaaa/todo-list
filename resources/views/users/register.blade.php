@extends('layout/app')
@section('title', 'Register')
@section('content')
<main class="flex justify-center py-20">
  <div class="flex h-auto w-[80vw] sm:w-[60vw] md:w-[40vw] drop-shadow-lg rounded-xl overflow-hidden bg-white py-4 px-4 sm:py-6 sm:px-6 md:py-8 md:px-8 lg:py-10 lg:px-10">
    <div class="h-full w-[100%]">
        <div id="default-styled-tab-content">
            <div class="rounded-lg bg-gray" id="styled-settings" role="tabpanel" aria-labelledby="settings-tab">
                <p class="text-3xl text-center">Daftar</p>
                <!-- Form -->
                <form method="POST" action="{{ route('users.register.submit') }}" class="max-w-sm mx-auto mt-10 flex flex-col">
                    @csrf
                    
                    <!-- Error Alert -->
                    <div class="mb-5">
                        @error('error')
                            <div id="alert-2" class="flex items-center p-4 mb-4 text-red-800 rounded-lg bg-red-50" role="alert">
                                <svg class="flex-shrink-0 w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z"/>
                                </svg>
                                <span class="sr-only">Info</span>
                                <div class="ms-3 text-sm font-medium">
                                    {{ $message }}
                                </div>
                                <button type="button" class="ms-auto -mx-1.5 -my-1.5 bg-red-50 text-red-500 rounded-lg focus:ring-2 focus:ring-red-400 p-1.5 hover:bg-red-200 inline-flex items-center justify-center h-8 w-8" data-dismiss-target="#alert-2" aria-label="Close">
                                    <span class="sr-only">Close</span>
                                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                                    </svg>
                                </button>
                            </div>
                        @enderror
                    </div>

                    <!-- Nama Field -->
                    <div class="mb-5">
                        <label for="name" class="block mb-2 text-sm font-medium text-gray-900">Nama Lengkap</label>
                        <input type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" id="name" name="name" value="{{ old('name') }}">
                        @error('name')
                            <small class="text-red-500 text-xs">{{ $message }}</small>
                        @enderror
                    </div>

                    <!-- Username Field -->
                    <div class="mb-5">
                        <label for="username" class="block mb-2 text-sm font-medium text-gray-900">Username</label>
                        <input type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" id="username" name="username" value="{{ old('username') }}">
                        @error('username')
                            <small class="text-red-500 text-xs">{{ $message }}</small>
                        @enderror
                    </div>

                    <!-- Password Field -->
                    <div class="mb-5">
                        <label for="password" class="block mb-2 text-sm font-medium text-gray-900">Password</label>
                        <input type="password" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" id="password" name="password">
                        @error('password')
                            <small class="text-red-500 text-xs">{{ $message }}</small>
                        @enderror
                    </div>

                    <!-- Submit Button -->
                    <button type="submit" class="w-full bg-blue-700 text-white font-medium rounded-lg text-sm px-5 py-2.5 focus:outline-none focus:ring-4 focus:ring-blue-300 hover:bg-blue-800">
                        Daftar
                    </button>

                    <!-- Link Login -->
                    <div class="mt-4 text-center">
                        <span class="text-sm text-gray-600">Sudah punya akun? </span>
                        <a href="/users/login" class="text-blue-600 hover:text-blue-800 font-semibold">Masuk</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</main>
@endsection
