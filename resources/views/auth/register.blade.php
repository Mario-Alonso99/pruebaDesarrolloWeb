@extends('layouts.app')

@section('title', 'Register')

@section('content')

<div class="block mx-auto my-12 p-8 bg-white w-1/3 border border-gray-200 rounded-lg shadow-lg">

	<h1 class="text-3xl text-center font-bold">Nuevo Registro</h1>

	<form class="mt-4" method="POST" action="">
		@csrf
		<input type="text" class="border border-gray-200 rounded-md bg-gray-200 w-full text-lg placeholder-gray-900 p-2 my-2 focus:bg-white" placeholder="Nombre" id="name" name="name" required title="Utiliza solo letras como mínimo 3 y máximo 50" pattern="[a-zA-ZñÑáÁéÉíÍóÓúÚ ]{3,50}" maxlength="50" minlength="3">

		@error('name')

		<p class="border border-red-500 rounded-md bg-red-100 w-full text-red-600 p-2 my-2">* {{ $message }}</p>

		@enderror

		<input type="email" class="border border-gray-200 rounded-md bg-gray-200 w-full text-lg placeholder-gray-900 p-2 my-2 focus:bg-white" placeholder="Email" id="email" name="email" required>

		@error('email')

		<p class="border border-red-500 rounded-md bg-red-100 w-full text-red-600 p-2 my-2">* {{ $message }}</p>

		@enderror


		<input type="password" class="border border-gray-200 rounded-md bg-gray-200 w-full text-lg placeholder-gray-900 p-2 my-2 focus:bg-white" placeholder="Password" id="password" name="password" required maxlength="15" minlength="8" title="Introduce un password de mínimo 8 y máximo 15 caracteres">

		@error('password')

		<p class="border border-red-500 rounded-md bg-red-100 w-full text-red-600 p-2 my-2">* {{ $message }}</p>

		@enderror

		<input type="password" class="border border-gray-200 rounded-md bg-gray-200 w-full text-lg placeholder-gray-900 p-2 my-2 focus:bg-white" placeholder="Password Confirmación" id="password_confirmation" name="password_confirmation" required maxlength="15" minlength="8" title="Introduce un password de mínimo 8 y máximo 15 caracteres">

		<input type="text" class="border border-gray-200 rounded-md bg-gray-200 w-full text-lg placeholder-gray-900 p-2 my-2 focus:bg-white" placeholder="Teléfono" id="phone" name="phone" required title="Utiliza solo NÚMEROS. El Teléfono debe tener 10 caracteres" pattern="[0-9]{10,10}" maxlength="10" minlength="10">

		@error('phone')

		<p class="border border-red-500 rounded-md bg-red-100 w-full text-red-600 p-2 my-2">* El campo teléfono es obligatorio</p>

		@enderror


		<input type="text" class="border border-gray-200 rounded-md bg-gray-200 w-full text-lg placeholder-gray-900 p-2 my-2 focus:bg-white" placeholder="Dirección" id="address" name="address" required maxlength="60" minlength="5">

		@error('address')

		<p class="border border-red-500 rounded-md bg-red-100 w-full text-red-600 p-2 my-2">* El campo dirección es obligatorio.</p>

		@enderror

		<button type="submit" class="rounded-md bg-indigo-500 w-full text-lg text-white font-semibold p-2 my-3 hover:bg-indigo-600">REGISTRAR</button>

	</form>

</div>


@endsection