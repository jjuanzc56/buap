<x-guest-layout>

<body class="font-mono bg-gray-800">
		<!-- Container -->
		<div class="container mx-auto">
			<div class="flex justify-center px-6 my-12">
				<!-- Row -->
				<div class="w-full xl:w-3/4 lg:w-11/12 flex">
					<!-- Col -->
					<div
						class="w-full h-auto bg-gray-200 hidden lg:block lg:w-6/12 bg-cover rounded-l-lg"
						style="background-image: url(https://seeklogo.com/images/B/BUAP-logo-30249BD9B8-seeklogo.com.png)"
					></div>
					<!-- Col -->
					<div class="w-full lg:w-6/12 bg-white p-5 rounded-lg lg:rounded-l-none">
						<h3 class="pt-4 text-2xl text-center">Crea una cuenta!</h3>
						<form class="px-18 pt-6 pb-8 mb-4 bg-white rounded" method="POST" action="{{ route('register') }}" x-data="{role_id: 2}">
						@csrf							
							<div class="mb-4 md:mr-2 md:mb-0">
							<label class="block mb-2 text-sm font-bold text-gray-700" for="name">
							Nombre
							</label>
							<input
							class="w-full px-50 py-2 text-sm leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
							id="name"
							name="name"
							type="text"
							required autofocus autocomplete="name"
							placeholder="Ingrese su nombre"
							/>
							<div class="mb-4 md:mr-2 md:mb-0">
							<label class="block mb-2 text-sm font-bold text-gray-700" for="firstName">
							¿Quíen eres?
							</label>
							<select name="role_id" x-model="role_id" class="block mt-1 w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm">
                    		<option value="2">Estudiante</option>
                    		<option value="3">Docente</option>
                			</select>
							</div>

							<div class="mb-4">
							<label class="block mb-2 text-sm font-bold text-gray-700" for="carrera">
							Carrera
							</label>
							<select name="carrera" id="carrera" x-model="carrera" class="block mt-1 w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm">
    						<option value="ISTII">Ingeniería en sistemas y tecnologías de la información industrial</option>
    						<option value="IAA">Ingeniería en automatización y autotrónica</option>
    						<option value="IPGI">Ingeniería en procesos y gestión industrial</option>
    						</select>
							</div>
							
							<div class="mb-4" x-show="role_id == 2">
							<label class="block mb-2 text-sm font-bold text-gray-700" for="student_matricula">
							Matricula
							</label>
							<input
							class="w-full px-3 py-2 mb-3 text-sm leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
							id="student_matricula"
							name="student_matricula"
							type="text"
							placeholder="Ingrese su matricula"
							/>
							</div>

							<div class="mb-4" x-show="role_id == 3">
							<label class="block mb-2 text-sm font-bold text-gray-700" for="teacher_celula">
							Célula profesional
							</label>
							<input
							class="w-full px-3 py-2 mb-3 text-sm leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
							id="teacher_celula"
							name="teacher_celula"
							type="text"
							placeholder="Ingrese su célula profesional"
							/>
							</div>

							<div class="mb-4">
							<label class="block mb-2 text-sm font-bold text-gray-700" for="email">
							Email
							</label>
							<input
							class="w-full px-3 py-2 mb-3 text-sm leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
							id="email"
							name="email"
							type="email"
							placeholder="Ingrese su email"
							/>
							<div class="mb-4 md:flex md:justify-between">
							<div class="mb-4 md:mr-2 md:mb-0">
							<label class="block mb-2 text-sm font-bold text-gray-700" for="password">
							Password
							</label>
							<input
							class="w-full px-3 py-2 mb-3 text-sm leading-tight text-gray-700 border border-red-500 rounded shadow appearance-none focus:outline-none focus:shadow-outline"
							id="password"
							name="password"
							type="password"
							placeholder="******************"
							required autocomplete="new-password"
							/>
							</div>
							<div class="md:ml-2">
							<label class="block mb-2 text-sm font-bold text-gray-700" for="password_confirmation">
							Confirma Password
							</label>
							<input
							class="w-full px-3 py-2 mb-3 text-sm leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
							id="password_confirmation"
							name="password_confirmation"
							type="password"
							placeholder="******************"
							required autocomplete="new-password"
							/>
							</div>
							
							</div>
							<div class="mb-6 text-center">
								<button
								class="w-full px-4 py-2 font-bold text-white bg-blue-500 rounded-full hover:bg-blue-700 focus:outline-none focus:shadow-outline"
								type="submit"
								>
								Registrar Cuenta
								</button>
							</div>
							<hr class="mb-6 border-t" />
							<div class="text-center">
								<a
									class="inline-block text-sm text-blue-500 align-baseline hover:text-blue-800"
									href="#"
								>
									Forgot Password?
								</a>
							</div>
							<div class="text-center">
								<a
									class="inline-block text-sm text-blue-500 align-baseline hover:text-blue-800"
									href="{{ route('login') }}"
								>
									Already have an account? Login!
								</a>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
</x-guest-layout>
