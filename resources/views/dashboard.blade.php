<x-app-layout>
    <!-- Banner inicio-->
<div class=" text-gray-800 h-56 md:h-64 bg-cover bg-bottom" style="background-image: url('https://images.unsplash.com/photo-1519389950473-47ba0277781c?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1500&q=80');">
    
    <div class="py-16 md:py-28 text-center">
        <h1 style="font-weight:bold; font-size: xx-large;" class="bg-white bg-opacity-75 w-full md:text-base text-gray-900 p-2 mb-10">Bienvenido a JobsTech</h1>
    </div>
</div>
<!-- Banner end-->

<!-- Sidebar Inicio -->
<div class="md:flex min-h-screen bg-white">

<nav class="md:ml-2 h-screen flex flex-col bg-gray-50">

    <ul class="p-2 space-y-2 flex-1 overflow-auto" style="scrollbar-width: thin;">
        <p style="font-weight: bold;">Categorías</p>
        <!-- Sidebar (Category) Start -->
        <div class="sidebar-widget">
            <div class="inner items-center text-gray-600 p-2 bg-gray-200 rounded-lg">
                <form action="#" class="mb-n1">
                    <div class="custom-control custom-checkbox mb-1">
                        <input type="checkbox" class="custom-control-input" id="jobtype0">
                        <label class="custom-control-label" for="jobtype0">Todas las categorias</label>
                    </div>
                    <div class="custom-control custom-checkbox mb-1">
                        <input type="checkbox" class="custom-control-input" id="jobtype1">
                        <label class="custom-control-label" for="jobtype1">Programación</label>
                    </div>
                    <div class="custom-control custom-checkbox mb-1">
                        <input type="checkbox" class="custom-control-input" id="jobtype2">
                        <label class="custom-control-label" for="jobtype2">Diseño y multimedia</label>
                    </div>
                    <div class="custom-control custom-checkbox mb-1">
                        <input type="checkbox" class="custom-control-input" id="jobtype3">
                        <label class="custom-control-label" for="jobtype3">Marketing digital</label>
                    </div>
                    <div class="custom-control custom-checkbox mb-1">
                        <input type="checkbox" class="custom-control-input" id="jobtype4">
                        <label class="custom-control-label" for="jobtype4">Ingeniería y arquitectura</label>
                    </div>
                    <div class="custom-control custom-checkbox mb-1">
                        <input type="checkbox" class="custom-control-input" id="jobtype5">
                        <label class="custom-control-label" for="jobtype5">UI & UX </label>
                    </div>
                </form>
            </div>
        </div><br>
        <!-- Sidebar (Category) End -->

        <p style="font-weight: bold;">Rango Salarial:</p>
        <!-- Sidebar (Rango Salarial) Start -->
        <div class="sidebar-widget">
            <div class="inner items-center text-gray-600 p-2 bg-gray-200 rounded-lg">

                <form action="#">
                    <select>
                        <option value="1">Menos de $1'000.000</option>
                        <option value="2">Más de $1'000.000</option>
                        <option value="3">Más de $2'000.000</option>
                        <option value="4">Más de $3'000.000</option>
                        <option value="5">Más de $4'000.000</option>
                    </select>
                </form>
            </div>
        </div><br>
        <!-- Sidebar (Rango Salarial) End -->

        <p style="font-weight: bold;">Experiencia:</p>
        <!-- Sidebar (Experiencia) Start -->
        <div class="sidebar-widget">
            <div class="inner items-center text-gray-600 p-2 bg-gray-200 rounded-lg">

                <form action="#">
                    <select>
                        <option value="1">Sin experiencia</option>
                        <option value="2">Menos de 1 año</option>
                        <option value="3">Más de 1 año</option>
                        <option value="4">Más de 2 años</option>
                        <option value="5">Más de 3 años</option>
                    </select>
                </form>
            </div>
        </div><br>
        <!-- Sidebar (Experiencia) End -->

        <p style="font-weight: bold;">Departamento:</p>

        <!-- Sidebar (Departamento) Start -->
        <div class="sidebar-widget">
            <div class="inner items-center text-gray-600 p-2 bg-gray-200 rounded-lg">

                <form action="#">
                    <select>
                        <option value="1">Bogotá</option>
                        <option value="2">Antioquia</option>

                    </select>
                </form>
            </div>
        </div><br>
        <!-- Sidebar (Departamento) End -->
        <li>
            <a href="#" class="flex space-x-2 items-center text-gray-600 p-2 hover:bg-gray-200 rounded-lg hover:text-gray-900">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-7 fill-current" width="24" height="24" viewBox="0 0 24 24">
                    <path d="M10 15v-10h-5.033c-2.743 0-4.967 2.239-4.967 5 0 2.762 2.224 5 4.967 5h5.033zm-8-5c0-1.654 1.331-3 2.967-3h3.033v6h-3.033c-1.636 0-2.967-1.346-2.967-3zm22-10v20c-4.839-3.008-8.836-4.491-12-5v-2.014c3.042.438 6.393 1.624 10 3.548v-13.064c-3.622 1.941-6.912 3.099-10 3.544v-2.014c3.124-.498 7.036-1.915 12-5zm-11.993 22.475c-.52-.424-.902-.994-1.095-1.637l-1.151-3.827h-6.146l1.905 5.883c.214.659.828 1.106 1.522 1.106h4.46c.358 0 .677-.225.797-.562.12-.337.015-.713-.263-.939l-.029-.024zm-4.674-.475l-.982-3h1.933l.927 3h-1.878z" />
                </svg>
                <span>Announcements</span>
            </a>
        </li>
        <li>
            <a href="#" class="flex space-x-2 items-center text-gray-600 p-2 hover:bg-gray-200 rounded-lg hover:text-gray-900">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-7 fill-current" width="24" height="24" viewBox="0 0 24 24">
                    <path d="M17.997 18h-.998c0-1.552.06-1.775-.88-1.993-1.438-.332-2.797-.645-3.293-1.729-.18-.396-.301-1.048.155-1.907 1.021-1.929 1.277-3.583.702-4.538-.672-1.115-2.707-1.12-3.385.017-.576.968-.316 2.613.713 4.512.465.856.348 1.51.168 1.908-.49 1.089-1.836 1.4-3.262 1.728-.982.227-.92.435-.92 2.002h-.995l-.002-.623c0-1.259.1-1.985 1.588-2.329 1.682-.389 3.344-.736 2.545-2.209-2.366-4.365-.676-6.839 1.865-6.839 2.492 0 4.227 2.383 1.867 6.839-.775 1.464.824 1.812 2.545 2.209 1.49.344 1.589 1.072 1.589 2.333l-.002.619zm4.81-2.214c-1.289-.298-2.489-.559-1.908-1.657 1.77-3.342.47-5.129-1.4-5.129-1.265 0-2.248.817-2.248 2.325 0 1.269.574 2.175.904 2.925h1.048c-.17-.75-1.466-2.562-.766-3.736.412-.692 1.704-.693 2.114-.012.38.631.181 1.812-.534 3.161-.388.733-.28 1.301-.121 1.648.305.666.977.987 1.737 1.208 1.507.441 1.368.042 1.368 1.48h.997l.002-.463c0-.945-.074-1.492-1.193-1.75zm-22.805 2.214h.997c0-1.438-.139-1.039 1.368-1.48.761-.221 1.433-.542 1.737-1.208.159-.348.267-.915-.121-1.648-.715-1.349-.914-2.53-.534-3.161.41-.682 1.702-.681 2.114.012.7 1.175-.596 2.986-.766 3.736h1.048c.33-.75.904-1.656.904-2.925.001-1.509-.982-2.326-2.247-2.326-1.87 0-3.17 1.787-1.4 5.129.581 1.099-.619 1.359-1.908 1.657-1.12.258-1.194.805-1.194 1.751l.002.463z" />
                </svg>
                <span>Teams</span>
            </a>
        </li>
        
    </ul>
</nav>
<div class="container sm">
    <div class="p-4">
        <p class="text-gray-800">Buscador de trabajo</p>

       <!-- Search Start -->
       <div class=" inner items-center text-gray-600 p-2 rounded-lg">
            <div class="inner">
                <form action="#">
                    <input class="w-full rounded-lg" type="text" placeholder="&#xF002; Buscar"  style="font-family:Arial, FontAwesome">
                </form>
            </div>
        </div>
        <!-- Search End -->
    </div>

    <div>

        <!-- Job List Start -->
        
                <livewire:vacancies-card>
            


    </div>
</div>

</div>

<!-- sidebar End -->
</x-app-layout>
