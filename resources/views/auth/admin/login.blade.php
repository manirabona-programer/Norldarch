@extends('layouts.master')

@section('title') Admin login @stop

@section('content')
    <livewire:navbar />

    <div class="overflow-hidden 2xl:container 2xl:mx-auto lg:py-15 lg:px-20 md:py-12 md:px-6 py-9 px-4">
        <section class="">
            <div class="px-6 h-full text-gray-800">
                <div
                    class="flex xl:justify-center lg:justify-between justify-center items-center flex-wrap h-full g-6"
                >
                    <div
                    class="grow-0 shrink-1 md:shrink-0 basis-auto xl:w-6/12 lg:w-6/12 md:w-9/12 mb-12 md:mb-0"
                    >
                    <img
                        src="https://img.freepik.com/free-vector/account-concept-illustration_114360-399.jpg?w=740&t=st=1660821913~exp=1660822513~hmac=cdf1656e526add6095ea715f0dd42ddb112571c6009115f08363f9dd82226605"
                        class="w-full"
                        alt="Sample image"
                    />
                    </div>
                    <div class="xl:ml-20 xl:w-5/12 lg:w-5/12 md:w-8/12 mb-12 md:mb-0">
                    <form action="{{ route('adminLogin') }}" method="POST">
                        {!! csrf_field() !!}

                        <div class="flex flex-row items-center justify-center lg:justify-start">
                        <p class="text-lg mb-0 mr-4">Admin area</p>
                        </div>

                        <div
                        class="flex items-center my-4 before:flex-1 before:border-t before:border-gray-300 before:mt-0.5 after:flex-1 after:border-t after:border-gray-300 after:mt-0.5"
                        >
                        <p class="text-center font-semibold mx-4 mb-0">Or</p>
                        </div>

                        <!-- Email input -->
                        <div class="mb-6">
                        <input
                            type="text"
                            class="form-control block w-full px-4 py-2 text-xl font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                            placeholder="Email address"
                            name="email"
                            autocomplete="off"
                        />
                        </div>
                        @if ($errors->has('email'))
                        <span class="help-block font-red-mint">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                        @endif

                        <!-- Password input -->
                        <div class="mb-6">
                        <input
                            type="password"
                            class="form-control block w-full px-4 py-2 text-xl font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                            placeholder="Password"
                            name="password"
                            autocomplete="off"
                        />
                        </div>
                        @if ($errors->has('password'))
                        <span class="help-block font-red-mint">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                        @endif

                        <div class="flex justify-between items-center mb-6">
                        <div class="form-group form-check">
                            <input
                            type="checkbox"
                            class="form-check-input appearance-none h-4 w-4 border border-gray-300 rounded-sm bg-white checked:bg-blue-600 checked:border-blue-600 focus:outline-none transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain float-left mr-2 cursor-pointer"
                            id="exampleCheck2"
                            />
                            <label class="form-check-label inline-block text-gray-800" for="exampleCheck2"
                            >Remember me</label
                            >
                        </div>
                        </div>

                        <div class="text-center lg:text-left">
                        <button
                            type="submit"
                            class="inline-block px-7 py-3 bg-blue-600 text-white font-medium text-sm leading-snug uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out"
                        >
                            Login
                        </button>

                        </div>
                    </form>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <livewire:footer />
@stop
