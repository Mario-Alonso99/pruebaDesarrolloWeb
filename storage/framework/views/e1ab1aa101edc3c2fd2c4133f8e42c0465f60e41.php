<?php $__env->startSection('title', 'Register'); ?>

<?php $__env->startSection('content'); ?>

<div class="block mx-auto my-12 p-8 bg-white w-1/3 border border-gray-200 rounded-lg shadow-lg">

	<h1 class="text-3xl text-center font-bold">Nuevo Registro</h1>

	<form class="mt-4" method="POST" action="">
		<?php echo csrf_field(); ?>
		<input type="text" class="border border-gray-200 rounded-md bg-gray-200 w-full text-lg placeholder-gray-900 p-2 my-2 focus:bg-white" placeholder="Nombre" id="name" name="name" required title="Utiliza solo letras como mínimo 3 y máximo 50" pattern="[a-zA-ZñÑáÁéÉíÍóÓúÚ ]{3,50}" maxlength="50" minlength="3">

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

		<input type="email" class="border border-gray-200 rounded-md bg-gray-200 w-full text-lg placeholder-gray-900 p-2 my-2 focus:bg-white" placeholder="Email" id="email" name="email" required>

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


		<input type="password" class="border border-gray-200 rounded-md bg-gray-200 w-full text-lg placeholder-gray-900 p-2 my-2 focus:bg-white" placeholder="Password" id="password" name="password" required maxlength="15" minlength="8" title="Introduce un password de mínimo 8 y máximo 15 caracteres">

		<?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>

		<p class="border border-red-500 rounded-md bg-red-100 w-full text-red-600 p-2 my-2">* <?php echo e($message); ?></p>

		<?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

		<input type="password" class="border border-gray-200 rounded-md bg-gray-200 w-full text-lg placeholder-gray-900 p-2 my-2 focus:bg-white" placeholder="Password Confirmación" id="password_confirmation" name="password_confirmation" required maxlength="15" minlength="8" title="Introduce un password de mínimo 8 y máximo 15 caracteres">

		<input type="text" class="border border-gray-200 rounded-md bg-gray-200 w-full text-lg placeholder-gray-900 p-2 my-2 focus:bg-white" placeholder="Teléfono" id="phone" name="phone" required title="Utiliza solo NÚMEROS. El Teléfono debe tener 10 caracteres" pattern="[0-9]{10,10}" maxlength="10" minlength="10">

		<?php $__errorArgs = ['phone'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>

		<p class="border border-red-500 rounded-md bg-red-100 w-full text-red-600 p-2 my-2">* El campo teléfono es obligatorio</p>

		<?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>


		<input type="text" class="border border-gray-200 rounded-md bg-gray-200 w-full text-lg placeholder-gray-900 p-2 my-2 focus:bg-white" placeholder="Dirección" id="address" name="address" required maxlength="60" minlength="5">

		<?php $__errorArgs = ['address'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>

		<p class="border border-red-500 rounded-md bg-red-100 w-full text-red-600 p-2 my-2">* El campo dirección es obligatorio.</p>

		<?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

		<button type="submit" class="rounded-md bg-indigo-500 w-full text-lg text-white font-semibold p-2 my-3 hover:bg-indigo-600">REGISTRAR</button>

	</form>

</div>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel\pruebadesarrolloweb\resources\views/auth/register.blade.php ENDPATH**/ ?>