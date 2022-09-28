@extends('layouts.app')

@section('title', 'Edit')

@section('content')

<div class="block mx-auto my-12 p-8 bg-white w-1/3 border border-gray-200 rounded-lg shadow-lg">
	<a href="{{ route('consulta.index') }}" class="rounded-md bg-red-500 w-full text-lg text-white font-semibold p-2 my-3 hover:bg-red-600">REGRESAR</a>
	<h1 class="text-3xl text-center font-bold">Editar</h1>

	<form class="mt-4" method="POST" action="{{ url('/usuario/'.$user->id) }}">
		@csrf
		{{method_field('PATCH')}}
		<input type="text" class="border border-gray-200 rounded-md bg-gray-200 w-full text-lg placeholder-gray-900 p-2 my-2 focus:bg-white" placeholder="Nombre" value="{{ $user->name }}" id="name" name="name" required title="Utiliza solo letras como mínimo 3 y máximo 50" pattern="[a-zA-ZñÑáÁéÉíÍóÓúÚ ]{3,50}" maxlength="50" minlength="3">

		@error('name')

		<p class="border border-red-500 rounded-md bg-red-100 w-full text-red-600 p-2 my-2">* {{ $message }}</p>

		@enderror

		<input type="email" class="border border-gray-200 rounded-md bg-gray-200 w-full text-lg placeholder-gray-900 p-2 my-2 focus:bg-white" placeholder="Email" id="email" value="{{ $user->email }}" name="email" required>

		@error('email')

		<p class="border border-red-500 rounded-md bg-red-100 w-full text-red-600 p-2 my-2">* {{ $message }}</p>

		@enderror


		<input type="text" class="border border-gray-200 rounded-md bg-gray-200 w-full text-lg placeholder-gray-900 p-2 my-2 focus:bg-white" placeholder="Teléfono" id="phone" name="phone" value="{{ $user->phone }}" required title="Utiliza solo NÚMEROS. El Teléfono debe tener 10 caracteres" pattern="[0-9]{10,10}" maxlength="10" minlength="10">

		@error('phone')

		<p class="border border-red-500 rounded-md bg-red-100 w-full text-red-600 p-2 my-2">* {{ $message }}</p>

		@enderror


		<input type="text" class="border border-gray-200 rounded-md bg-gray-200 w-full text-lg placeholder-gray-900 p-2 my-2 focus:bg-white" placeholder="Dirección" id="address" name="address" value="{{ $user->address }}" required maxlength="60" minlength="5">

		@error('address')

		<p class="border border-red-500 rounded-md bg-red-100 w-full text-red-600 p-2 my-2">* {{ $message }}</p>

		@enderror

		<button type="submit" class="rounded-md bg-indigo-500 w-full text-lg text-white font-semibold p-2 my-3 hover:bg-indigo-600">ACTUALIZAR</button>

	</form>

</div>


@endsection