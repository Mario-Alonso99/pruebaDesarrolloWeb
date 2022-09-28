@extends('layouts.app')

@section('title', 'Consulta')

@section('content')

<div class="p-5 mt-2 text-center bg-gray-400">
    <strong>USUARIOS REGISTRADOS</strong>
</div>

<div class="p-8 bg-white border border-gray-200 rounded-lg shadow-lg">
	<table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
		<thead class="text-lg text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
			<tr>
				<th >#</th>
				<th>Nombre</th>
				<th>Email</th>
				<th>Teléfono</th>
				<th>Dirección</th>
				<th colspan="2">Acciones</th>
			</tr>
		</thead>
		<tbody>
			@foreach($users as $user)
			<tr class="text-lg text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
				<td>{{ $user->id }}</td>
				<td>{{ $user->name }}</td>
				<td>{{ $user->email }}</td>
				<td>{{ $user->phone }}</td>
				<td>{{ $user->address }}</td>
				<td>
					<a href="{{ url('/usuario/'.$user->id.'/edit' ) }}" class="bg-blue-500 hover:bg-blue-400 text-white font-bold py-2 px-4 border-b-4 border-blue-700 hover:border-blue-500 rounded">Editar</a>
				</td>
				<td>
					
					<form action="{{ url('/usuario/'.$user->id ) }}" method="POST">
						@csrf
						{{ method_field('DELETE') }}
						<input type="submit" value="Eliminar" onclick="return confirm('¿Deseas Borrar el Registro?')" class="bg-red-500 hover:bg-red-400 text-white font-bold py-2 px-4 border-b-4 border-red-700 hover:border-red-500 rounded">
					</form>
				</td>
			</tr>
			@endforeach
			
		</tbody>
	</table>
</div>

@endsection