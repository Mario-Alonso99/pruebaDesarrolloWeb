<?php $__env->startSection('title', 'Consulta'); ?>

<?php $__env->startSection('content'); ?>

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
			<?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
			<tr class="text-lg text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
				<td><?php echo e($user->id); ?></td>
				<td><?php echo e($user->name); ?></td>
				<td><?php echo e($user->email); ?></td>
				<td><?php echo e($user->phone); ?></td>
				<td><?php echo e($user->address); ?></td>
				<td>
					<a href="<?php echo e(url('/usuario/'.$user->id.'/edit' )); ?>" class="bg-blue-500 hover:bg-blue-400 text-white font-bold py-2 px-4 border-b-4 border-blue-700 hover:border-blue-500 rounded">Editar</a>
				</td>
				<td>
					
					<form action="<?php echo e(url('/usuario/'.$user->id )); ?>" method="POST">
						<?php echo csrf_field(); ?>
						<?php echo e(method_field('DELETE')); ?>

						<input type="submit" value="Eliminar" onclick="return confirm('¿Deseas Borrar el Registro?')" class="bg-red-500 hover:bg-red-400 text-white font-bold py-2 px-4 border-b-4 border-red-700 hover:border-red-500 rounded">
					</form>
				</td>
			</tr>
			<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
			
		</tbody>
	</table>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel\pruebadesarrolloweb\resources\views/auth/show.blade.php ENDPATH**/ ?>