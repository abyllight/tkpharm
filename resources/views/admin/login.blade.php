@extends('layouts.admin')
@section('content')
    <div class="w-full max-w-sm mx-auto">
        <div class="relative flex flex-col min-w-0 w-full mb-6 shadow rounded-lg border">
            <div class="flex-auto px-4 lg:px-10 py-10">
                <form method="post" action="{{ route('login') }}">
                    @csrf
                    <div class="relative w-full mb-3">
                        <label class="block uppercase text-xs font-bold mb-2">
                            Почта
                        </label>
                        <input
                            type="email"
                            name="email"
                            class="border-0 px-3 py-3 rounded text-sm shadow focus:outline-none focus:ring w-full"
                            placeholder="Почта"
                        />
                        @error('email')
                            <p class="text-red-600 text-sm" >{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="relative w-full mb-3">
                        <label class="block uppercase text-xs font-bold mb-2">
                            Пароль
                        </label>
                        <input
                            type="password"
                            name="password"
                            class="border-0 px-3 py-3 rounded text-sm shadow focus:outline-none focus:ring w-full"
                            placeholder="Пароль"
                        />
                        @error('password')
                            <p class="text-red-600 text-sm" >{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="text-center mt-6">
                        <button
                            class="bg-blue-500 text-white active:bg-blueGray-600 text-sm font-bold uppercase px-6 py-3 rounded shadow hover:shadow-lg outline-none focus:outline-none mr-1 mb-1 w-full ease-linear transition-all duration-150"
                            type="submit"
                        >
                            Войти
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
