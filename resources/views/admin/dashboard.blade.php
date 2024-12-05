<x-app-layout>
    <div class="flex">
        <!-- Menú lateral inmovilizado -->
        <div class="w-64 bg-gray-600 shadow-xl p-4 fixed h-screen top-0 left-0 z-10">
            <div class="mb-6 text-center">
                <div class="relative w-32 h-32 mx-auto mb-4">
                    <img id="profile-image"
                        src="{{ Auth::guard('admin')->user()->profile_photo_url ?? '/default-avatar.png' }}"
                        alt="Profile" class="rounded-full w-full h-full object-cover">
                    <label for="admin-photo-upload"
                        class="absolute bottom-0 right-0 bg-purple-500 text-white rounded-full p-2 cursor-pointer hover:bg-purple-600">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 20 20" fill="currentColor">
                            <path
                                d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z" />
                        </svg>
                    </label>
                    <input type="file" id="admin-photo-upload" class="hidden" onchange="previewImage(event)">
                </div>
                <h4 class="font-semibold">{{ Auth::guard('admin')->user()->name ?? 'Administrador' }}</h4>
                <p class="text-sm text-gray-500">Administrador del Sistema</p>
            </div>

            <!-- Navigation Menu -->
            <nav class="space-y-2">
                <a href="{{ '/' }}"
                    class="load-view-button block px-4 py-2 text-sm text-black hover:bg-gray-400 rounded-md">
                    <div class="flex flex-col space-y-2 md:flex-row md:space-y-0 space-x-2 items-center">
                        <div>
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                class="h-6 w-6 group-hover:text-indigo-400">
                                <path d="M3 9L12 2L21 9V20C21 20.553 20.553 21 20 21H4C3.447 21 3 20.553 3 20V9Z">
                                </path>
                                <path d="M9 21V12H15V21"></path>
                            </svg>
                        </div>
                        <div>
                            <p class="font-bold text-base lg:text-lg text-black leading-4 group-hover:text-indigo-400">
                                Inicio
                            </p>
                        </div>
                    </div>
                </a>
                <a href="{{ route('admin.crud.usuarios') }}"
                    class="load-view-button block px-4 py-2 text-sm text-black hover:bg-gray-400 rounded-md">
                    <div class="flex flex-col space-y-2 md:flex-row md:space-y-0 space-x-2 items-center">
                        <div>
                            <svg xmlns="http://www.w3.org/2000/svg"
                                class="h-6 w-6 text-black group-hover:text-indigo-400" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <!-- Persona central -->
                                <circle cx="12" cy="8" r="3" />
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M9 14c0-2 2-3 3-3s3 1 3 3v1H9v-1z" />

                                <!-- Persona izquierda -->
                                <circle cx="6" cy="10" r="2" />
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M4 16c0-1.5 1.5-2.5 2-2.5s2 1 2 2.5v0.5H4v-0.5z" />

                                <!-- Persona derecha -->
                                <circle cx="18" cy="10" r="2" />
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M16 16c0-1.5 1.5-2.5 2-2.5s2 1 2 2.5v0.5h-4v-0.5z" />
                            </svg>
                        </div>
                        <div>
                            <p class="font-bold text-base lg:text-lg text-black leading-4 group-hover:text-indigo-400">
                                Usuarios
                            </p>
                        </div>
                    </div>
                </a>
                <a href="{{ route('admin.crud.evento') }}"
                    class="load-view-button block px-4 py-2 text-sm text-black hover:bg-gray-400 rounded-md">
                    <div class="flex flex-col space-y-2 md:flex-row md:space-y-0 space-x-2 items-center">
                        <div>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" class="w-6 h-6 group-hover:text-indigo-400">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M11.48 3.499a.375.375 0 01.683 0l2.08 4.214a.375.375 0 00.282.205l4.595.668a.375.375 0 01.208.639l-3.326 3.24a.375.375 0 00-.108.332l.785 4.577a.375.375 0 01-.544.395L12 15.854l-4.105 2.158a.375.375 0 01-.544-.395l.785-4.577a.375.375 0 00-.108-.332L4.702 9.226a.375.375 0 01.208-.639l4.595-.668a.375.375 0 00.282-.205l2.08-4.214z" />
                            </svg>
                        </div>
                        <div>
                            <p class="font-bold text-base lg:text-lg text-black leading-4 group-hover:text-indigo-400">
                                Eventos
                            </p>
                        </div>
                    </div>
                </a>
                <a href="{{ route('admin.crud.torneo') }}"
                    class="load-view-button block px-4 py-2 text-sm text-black hover:bg-gray-400 rounded-md">
                    <div class="flex flex-col space-y-2 md:flex-row md:space-y-0 space-x-2 items-center">
                        <div>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" class="w-6 h-6 group-hover:text-indigo-400">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M16.5 3.75h3.75c.621 0 1.125.504 1.125 1.125v6.375a1.125 1.125 0 01-1.125 1.125H16.5M7.5 3.75H3.75c-.621 0-1.125.504-1.125 1.125v6.375c0 .621.504 1.125 1.125 1.125H7.5m0 0v4.5m0-4.5h9m0 0v4.5m0 0h-9m0 0V21h9v-4.5" />
                            </svg>
                        </div>
                        <div>
                            <p class="font-bold text-base lg:text-lg text-black leading-4 group-hover:text-indigo-400">
                                Torneos
                            </p>
                        </div>
                    </div>
                </a>
                <a href="{{ route('admin.crud.recompensas') }}"
                    class="load-view-button block px-4 py-2 text-sm text-black hover:bg-gray-400 rounded-md">
                    <div class="flex flex-col space-y-2 md:flex-row md:space-y-0 space-x-2 items-center">
                        <div>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" class="w-6 h-6 group-hover:text-indigo-400">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M12 8.25v13.5m0-13.5H8.25A2.25 2.25 0 116 6a2.25 2.25 0 012.25 2.25M12 8.25h3.75A2.25 2.25 0 1016 6a2.25 2.25 0 00-2.25 2.25M21 12.75v6a2.25 2.25 0 01-2.25 2.25H5.25A2.25 2.25 0 013 18.75v-6m18 0v-3a2.25 2.25 0 00-2.25-2.25H5.25A2.25 2.25 0 003 9.75v3m18 0H3" />
                            </svg>
                        </div>
                        <div>
                            <p class="font-bold text-base lg:text-lg text-black leading-4 group-hover:text-indigo-400">
                                Premios
                            </p>
                        </div>
                    </div>
                </a>
            </nav>
        </div>

        <!-- Contenido principal con espacio a la izquierda para el menú -->
        <div class="flex-1 py-12 px-4 bg-gray-900 ml-64">
            @yield('crudAdm')
        </div>

    </div>

    <script>
        function previewImage(event) {
            const input = event.target;
            const reader = new FileReader();
            reader.onload = function() {
                const img = document.getElementById('profile-image');
                img.src = reader.result;
            }
            reader.readAsDataURL(input.files[0]);
        }
        reader.readAsDataURL(input.files[0]);

        $(document).ready(function() {
            addClickEventHandler();
        });
    </script>
</x-app-layout>
