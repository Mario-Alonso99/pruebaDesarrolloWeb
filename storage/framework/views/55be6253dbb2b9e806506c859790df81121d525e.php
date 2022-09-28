<?php $__env->startSection('title', 'Edit'); ?>

<?php $__env->startSection('content'); ?>

<div class="block mx-auto my-12 p-8 bg-white w-1/3 border border-gray-200 rounded-lg shadow-lg">
	<a href="<?php echo e(route('consulta.index')); ?>" class="rounded-md bg-red-500 w-full text-lg text-white font-semibold p-2 my-3 hover:bg-red-600">REGRESAR</a>
	<h1 class="text-3xl text-center font-bold">Editar</h1>

	<form class="mt-4" method="POST" action="<?php echo e(url('/usuario/'.$user->id)); ?>">
		<?php echo csrf_field(); ?>
		<?php echo e(method_field('PATCH')); ?>

		<input type="text" class="border border-gray-200 rounded-md bg-gray-200 w-full text-lg placeholder-gray-900 p-2 my-2 focus:bg-white" placeholder="Nombre" value="<?php echo e($user->name); ?>" id="name" name="name" required title="Utiliza solo letras como mínimo 3 y máximo 50" pattern="[a-zA-ZñÑáÁéÉíÍóÓúÚ ]{3,50}" maxlength="50" minlength="3">

		<?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>

		<p class="border border-red-500 rounded-md bg-red-100 w-full text-red-600 p-2 my-2">* <?php echo e($message); ?></p>

		<?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

		<input type="email" class="border border-gray-200 rounded-md bg-gray-200 w-full text-lg placeholder-gray-900 p-2 my-2 focus:bg-white" placeholder="Email" id="email" value="<?php echo e($user->email); ?>" name="email" required>

		<?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>

		<p class="border border-red-500 rounded-md bg-red-100 w-full text-red-600 p-2 my-2">* <?php echo e($message); ?></p>

		<?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>


		<input type="text" class="border border-gray-200 rounded-md bg-gray-200 w-full text-lg placeholder-gray-900 p-2 my-2 focus:bg-white" placeholder="Teléfono" id="phone" name="phone" value="<?php echo e($user->phone); ?>" required title="Utiliza solo NÚMEROS. El Teléfono debe tener 10 caracteres" pattern="[0-9]{10,10}" maxlength="10" minlength="10">

		<?php $__errorArgs = ['phone'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>

		<p class="border border-red-500 rounded-md bg-red-100 w-full text-red-600 p-2 my-2">* <?php echo e($message); ?></p>

		<?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>


		<input type="text" class="border border-gray-200 rounded-md bg-gray-200 w-full text-lg placeholder-gray-900 p-2 my-2 focus:bg-white" placeholder="Dirección" id="address" name="address" value="<?php echo e($user->address); ?>" required maxlength="60" minlength="5">

		<?php $__errorArgs = ['address'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>

		<p class="border border-red-500 rounded-md bg-red-100 w-full text-red-600 p-2 my-2">* <?php echo e($message); ?></p>

		<?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

		<button type="submit" class="rounded-md bg-indigo-500 w-full text-lg text-white font-semibold p-2 my-3 hover:bg-indigo-600">ACTUALIZAR</button>

	</form>

</div>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel\pruebadesarrolloweb\resources\views/auth/edit.blade.php ENDPATH**/ ?>