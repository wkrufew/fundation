<x-app-layout>
    <style>
        section {
            overflow: hidden;

        }

        .custom-img {
            background-image: url("fotos/fondo1pro - copia.jpg");
            opacity: 0.6;
        }

        .imagen1 {
            background-image: url("fotos/mision1.png");
            width: 300px;
            height: 200px;
            padding: 15px;

        }

        .imagen2 {
            background-image: url("fotos/vision1.jpg");
            width: 200px;
            height: 200px;
            box-shadow: 0 0 8px 8px white inset;
        }

        .imagen3 {
            background-image: url("fotos/valores1.jpg");
            width: 200px;
            height: 200px;
            box-shadow: 0 0 8px 8px white inset;
        }

    </style>

    <section>
        {{-- CONSULTA DE LOS DATOS DE LA EMPRESA --}}
        @php
            $empresas = DB::table('empresas')->first();
        @endphp
        {{-- FIN DE LA CONSULTA --}}
        <div class="fixed z-50 right-1 bottom-1 md:right-6 md:bottom-6">
            <a href="{{$empresas->whatsapp}}"
                class="" target=" _blank">
                <img class="h-16 w-16 transition duration-500 ease-in-out bg-transparent transform hover:-translate-y-1 hover:scale-110"
                    src="{{ asset('fotos/whatsapp.png') }}">
            </a>
        </div>
    </section>

    <section id="inicio" class=" bg-gradient-to-b h-1/2 from-purple-400 to-red-200 relative">
        <div class="fixed bg-fixed h-full w-full bg-center bg-cover  top-0 left-0 z-0">
            <img src="{{ asset('fotos/portada.jpg') }}" alt="" class="object-cover w-full h-full opacity-25">
        </div>
        <div class=" bg-cover max-w-full mx-2 md:mx-6 px-2 sm:px-2 lg:px-4 pt-6 md:pt-10 py-3">
            <div class=" flex flex-col w-full md:w-full justify-center text-center md:text-left">
                <div
                    class=" lg:pt-12 pt-6 w-full px-2 md:px-4 mx-auto text-center transition duration-500 ease-in-out transform hover:-translate-y-1 hover:scale-110 rounded-lg object-cover">
                    <div class="relative flex flex-col min-w-0 break-words bg-transparent w-full mb-8 ">
                        <div class="px-1 py-5 flex-auto">
                            <h6
                                class="text-center text-green-50 texto-portada my-4 text-4xl font-bold leading-tight mt-32 md:mt-32">
                                Ayudamos a la clase marginal, trabajamos sin fines de lucro</h6>
                            <p class="leading-normal text-gray-100 text-center text-2xl mb-8">Compromiso con la causa
                                noble del desarrollo social</p>
                        </div>
                    </div>
                </div>
                <div class="mx-auto  mt-4 animate-bounce">
                    <a href="#formulario"
                        class="boton transition delay-150 duration-300 ease-in-out flex items-center shadow border-gray-50 border-2  rounded-full  px-4 py-2 text-white bg-gradient-to-b from-transparent to-transparent hover:from-transparent hover:to-red-200 hover:text-white">Contacto</a>
                </div>
            </div>
        </div>
        <div class="relative">
            <svg viewBox="0 0 1428 174" version="1.1" xmlns="http://www.w3.org/2000/svg"
                xmlns:xlink="http://www.w3.org/1999/xlink">
                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                    <g transform="translate(-2.000000, 44.000000)" fill="#FFFFFF" fill-rule="nonzero">
                        <path
                            d="M0,0 C90.7283404,0.927527913 147.912752,27.187927 291.910178,59.9119003 C387.908462,81.7278826 543.605069,89.334785 759,82.7326078 C469.336065,156.254352 216.336065,153.6679 0,74.9732496"
                            opacity="0.100000001"></path>
                        <path
                            d="M100,104.708498 C277.413333,72.2345949 426.147877,52.5246657 546.203633,45.5787101 C666.259389,38.6327546 810.524845,41.7979068 979,55.0741668 C931.069965,56.122511 810.303266,74.8455141 616.699903,111.243176 C423.096539,147.640838 250.863238,145.462612 100,104.708498 Z"
                            opacity="0.100000001"></path>
                        <path
                            d="M1046,51.6521276 C1130.83045,29.328812 1279.08318,17.607883 1439,40.1656806 L1439,120 C1271.17211,77.9435312 1140.17211,55.1609071 1046,51.6521276 Z"
                            id="Path-4" opacity="0.200000003"></path>
                    </g>
                    <g transform="translate(-4.000000, 76.000000)" fill="#FFFFFF" fill-rule="nonzero">
                        <path
                            d="M0.457,34.035 C57.086,53.198 98.208,65.809 123.822,71.865 C181.454,85.495 234.295,90.29 272.033,93.459 C311.355,96.759 396.635,95.801 461.025,91.663 C486.76,90.01 518.727,86.372 556.926,80.752 C595.747,74.596 622.372,70.008 636.799,66.991 C663.913,61.324 712.501,49.503 727.605,46.128 C780.47,34.317 818.839,22.532 856.324,15.904 C922.689,4.169 955.676,2.522 1011.185,0.432 C1060.705,1.477 1097.39,3.129 1121.236,5.387 C1161.703,9.219 1208.621,17.821 1235.4,22.304 C1285.855,30.748 1354.351,47.432 1440.886,72.354 L1441.191,104.352 L1.121,104.031 L0.457,34.035 Z">
                        </path>
                    </g>
                </g>
            </svg>

        </div>

    </section>

    <section id="informacion" class="relative bg-white py-20">
        <div class="bottom-auto top-0 left-0 right-0 w-full absolute pointer-events-none overflow-hidden -mt-20"
            style="height:80px">
            <svg class="absolute bottom-0 overflow-hidden" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none"
                version="1.1" viewBox="0 0 2560 100" x="0" y="0">
                <polygon class="text-white fill-current" points="2560 0 2560 100 0 100"></polygon>
            </svg>
        </div>
        <div class="container mx-auto px-4">
            <div class="items-center flex flex-wrap">
                <div class="w-full md:w-4/12 ml-auto mr-auto px-4">
                    <img alt="..." class="max-w-3/4 h-auto rounded-lg shadow-lg"
                        src="{{ asset('fotos/doctor.jpg') }}">
                </div>
                <div class="w-full md:w-5/12 ml-auto mr-auto px-4 mt-5 md:mt-0">
                    <div class="md:pr-12">
                        <div
                            class="text-purple-600 p-3 text-center inline-flex items-center justify-center w-16 h-16 mb-6 shadow-lg rounded-full bg-purple-300">
                            <i class="fas fa-place-of-worship text-2xl"></i>
                        </div>


                        {{-- CONSULTA DE LOS DATOS DE LA EMPRESA --}}
                        @php
                            $empresa = DB::table('empresas')->first();
                        @endphp
                        {{-- FIN DE LA CONSULTA --}}
                        <h3 class="mt-2 text-xl font-semibold text-gray-700">Fundador {{ $empresa->propietario }}</h3>
                        <p class="mt-4 text-base leading-relaxed text-gray-600 text-justify">
                            Creada mediante acuerdo ministerial No. 00668 del 28 de marzo de 1991, con sede en la ciudad
                            de Quito Ecuador.
                        </p>
                        <p class="mt-4 text-base leading-relaxed text-gray-600 text-justify">
                            FUNDECOM, es una entidad de ayuda a la clase marginal de nuestro país, no persigue fines de
                            lucro. Preocura
                            mejorar áreas como: Educación, Salud, Viabilidad y Desarrollo Comunitario.
                        </p>
                        <ul class="list-none mt-6">
                            <li class="py-2">
                                <div class="flex items-center">
                                    <div>
                                        <span
                                            class="text-xs font-semibold p-3 text-center inline-flex items-center justify-center w-10 h-10 uppercase rounded-full text-pink-600 bg-pink-200 mr-3">
                                            <i class="fas fa-thumbs-up text-lg"></i>
                                        </span>
                                    </div>
                                    <div>
                                        <p class="text-gray-600 text-base">Responsable</p>
                                    </div>
                                </div>
                            </li>
                            <li class="py-2">
                                <div class="flex items-center">
                                    <div>
                                        <span
                                            class="text-xs font-semibold p-3 text-center inline-flex items-center justify-center w-10 h-10 uppercase rounded-full text-pink-600 bg-pink-200 mr-3">
                                            <i class="fas fa-user-lock text-lg"></i>
                                        </span>
                                    </div>
                                    <div>
                                        <p class="text-gray-600 text-base">Segura</p>
                                    </div>
                                </div>
                            </li>
                            <li class="py-2">
                                <div class="flex items-center">
                                    <div>
                                        <span
                                            class="text-xs font-semibold p-3 text-center inline-flex items-center justify-center w-10 h-10 uppercase rounded-full text-pink-600 bg-pink-200 mr-3">
                                            <i class="far fa-paper-plane text-lg"></i>
                                        </span>
                                    </div>
                                    <div>
                                        <p class="text-gray-600 text-base">Eficiente</p>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- FIN DE SECCION 2 --}}


    {{-- SECCION 3 --}}
    <section id="servicios" class="relative bg-white py-20 md:py-32">

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 flex py-0 md:py-0">


            <div class="container mx-auto px-4">
                <h1 class="w-full text-3xl font-bold leading-tight text-center text-purple-400 ">SERVICIOS</h1>
                <div class="h-1 mx-auto bg-purple-400 gradient w-64 opacity-50 my-0 py-0 rounded-t mb-10"></div>
                <div class="flex flex-wrap">
                    <div
                        class="lg:pt-12 pt-6 w-full md:w-3/12 px-4 text-center transition duration-500 ease-in-out transform hover:-translate-y-1 hover:scale-110 rounded-lg object-cover">
                        <div
                            class="relative flex flex-col min-w-0 break-words bg-white w-full mb-8 shadow-lg rounded-lg">
                            <div class="px-4 py-5 flex-auto">
                                <div
                                    class="text-white p-3 text-center inline-flex items-center justify-center w-12 h-12 mb-5 shadow-lg rounded-full bg-red-400">
                                    <i class="fas fa-heartbeat"></i>
                                </div>
                                <h6 class="text-xl font-semibold">Salud</h6>
                                <p class="mt-2 mb-4 text-blueGray-500">Ancianatos, Hospitales, Centros de Salud,
                                    Dispensarios, Guarderías, Albergues, etc.</p>
                            </div>
                        </div>
                    </div>
                    <div
                        class="w-full md:w-3/12 px-4 text-center transition duration-500 ease-in-out transform hover:-translate-y-1 hover:scale-110 rounded-lg object-cover">
                        <div
                            class="relative flex flex-col min-w-0 break-words bg-white w-full mb-8 shadow-lg rounded-lg">
                            <div class="px-4 py-5 flex-auto">
                                <div
                                    class="text-white p-3 text-center inline-flex items-center justify-center w-12 h-12 mb-5 shadow-lg rounded-full bg-blue-400">
                                    <i class="fas fa-book-reader"></i>
                                </div>
                                <h6 class="text-xl font-semibold">Educación</h6>
                                <p class="mt-2 mb-4 text-blueGray-500">Infraestructura, Escuelas, Institutos,
                                    Laboratorios, Centros de Capacitaciones, etc.</p>
                            </div>
                        </div>
                    </div>
                    <div
                        class="pt-6 w-full md:w-3/12 px-4 text-center transition duration-500 ease-in-out transform hover:-translate-y-1 hover:scale-110 rounded-lg object-cover">
                        <div
                            class="relative flex flex-col min-w-0 break-words bg-white w-full mb-8 shadow-lg rounded-lg">
                            <div class="px-4 py-5 flex-auto">
                                <div
                                    class="text-white p-3 text-center inline-flex items-center justify-center w-12 h-12 mb-5 shadow-lg rounded-full bg-green-400">
                                    <i class="fas fa-road"></i>
                                </div>
                                <h6 class="text-xl font-semibold">Viabilidad</h6>
                                <p class="mt-2 mb-4 text-blueGray-500">Construcción de redes viales: carreteras,
                                    puentes, etc.</p>
                            </div>
                        </div>
                    </div>


                    <div
                        class="lg:pt-12 pt-6 w-full md:w-3/12 px-4 text-center transition duration-500 ease-in-out transform hover:-translate-y-1 hover:scale-110 rounded-lg object-cover">
                        <div
                            class="relative flex flex-col min-w-0 break-words bg-white w-full mb-8 shadow-lg rounded-lg">
                            <div class="px-4 py-5 flex-auto">
                                <div
                                    class="text-white p-3 text-center inline-flex items-center justify-center w-12 h-12 mb-5 shadow-lg rounded-full bg-purple-400">
                                    <i class="fas fa-people-carry"></i>
                                </div>
                                <h6 class="text-xl font-semibold">Desarrollo Comunitario</h6>
                                <p class="mt-2 mb-4 text-blueGray-500">Ayuda al adulto mayor y apoyo integral a los
                                    sectores marginados del sector rural ecuatoriano.</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

        </div>

    </section>

    {{-- FIN DE SECCION 3 --}}

    <section class=" relative py-24 bg-white bg-fixed h-auto bg-center bg-cover  top-0 left-0 z-0"
        style="background-image:url('{{ asset('fotos/fondo7.jpg') }}');">
        <div
            class="absolute inset-0 block w-full h-full opacity-25 bg-gradient-to-br from-transparent via-black to-transparent lg:hidden">
        </div>
        <div class="flex flex-col items-center justify-between px-5 mx-auto sm:px-10 max-w-7xl xl:px-12 lg:flex-row">
            <div class="relative mb-6 lg:mb-0">
                <h2
                    class="w-full mx-auto mb-2 text-xl font-extrabold leading-none text-center text-white sm:text-center md:text-3xl xl:text-3xl lg:text-center ">
                    <b>"</b>
                    Vamos más allá de una labor social, nosotros cambiamos
                    vidas y mejoramos, a cambio sólo necesitamos una sonrisa.
                    <b>"</b>
                </h2>
            </div>
        </div>
    </section>

    <section class="bg-white py-24 relative">
        <div class="container max-w-5xl mx-auto">
            <h1
                class="w-full text-3xl font-bold leading-tight text-center mt-6 text-purple-500 md:mt-10 tituloemprersa">
                FUNDECOM</h1>
            <div class="h-1 mx-auto text-purple-500 gradient w-64 opacity-25 my-0 py-0 rounded-t mb-10"></div>
            <div class="flex justify-around flex-col sm:flex-row gap-16 mt-24">
                <div class="w-5/6 md:w-1/2  p-6 mx-4 my-auto">
                    <h3 class="text-2xl text-purple-500 font-bold leading-none mb-3 mx-auto titulodescripcion">MISIÓN
                    </h3>
                    <p class="text-gray-600  text-justify descripcion">
                        Ejecutar proyectos y programas, para promover y mejorar la calidad de vida de las
                        familias marginadas, receptando donaciones de instituciones y personas filántropas
                        con alto sentido de sensibilidad social, que permitan transformar las condiciones
                        socio-económicas de sectores vulnerables en la población ecuatoriana.
                </div>
                <div class="md:w-1/2  my-auto  bg-cover px-4 mx-auto imagen1">
                    {{-- <img class="mx-auto -mt-10 fotodescripcion" width="30%" src="{{ asset('fotos/mision.jpg') }}" alt=""> --}}
                </div>

            </div>

            {{-- segunda tarde --}}
            <div class="flex flex-col justify-around sm:flex-row-reverse mt-12">
                <div class="w-5/6 md:w-1/2  p-6 mx-4 my-auto">
                    <h3 class="text-2xl text-purple-500 font-bold leading-none mb-3 mx-auto titulodescripcion ">VISIÓN
                    </h3>
                    <p class="text-gray-600  text-justify descripcion">

                        Transformar y mejorar la historia de vida de las familias desprotegidas, reconocimiento de
                        deberes y derechos, autogestión y participación en políticas públicas y privadas.

                </div>
                <div class="md:w-1/2  my-auto  bg-cover px-4 mx-auto elegirfoto imagen2">
                    {{-- <img class="mx-auto mt-14" width="30%" src="{{ asset('fotos/vision.jpg') }}" alt=""> --}}
                </div>

            </div>
            <div class="flex justify-around flex-col sm:flex-row gap-16 mt-10">
                <div class="w-5/6 md:w-1/2  p-6 mx-4 my-auto">
                    <h3 class="text-2xl text-purple-500 font-bold leading-none mb-6 mx-auto ">VALORES CORPORATIVOS</h3>
                    <ul class="grid grid-cols-1 md:grid-cols-1 gap-y-1 ">

                        <li class="text-gray-700 text-base text-justify"><i
                                class="fas fa-check text-purple-600 mr-2"></i>Conocimiento</li>
                        <li class="text-gray-700 text-base text-justify"><i
                                class="fas fa-check text-purple-600 mr-2"></i>Compromiso</li>
                        <li class="text-gray-700 text-base text-justify"><i
                                class="fas fa-check text-purple-600 mr-2"></i>Responsabilidad</li>
                        <li class="text-gray-700 text-base text-justify"><i
                                class="fas fa-check text-purple-600 mr-2"></i>Honestidad</li>
                    </ul>
                </div>
                <div class="w-full md:w-1/2 py-2  bg-cover px-4 mx-auto mt-10 imagen3">
                    {{-- <img class="mx-auto -mt-10" width="30%" src="{{ asset('fotos/valores1.jpg') }}" alt=""> --}}
                </div>

            </div>

        </div>

    </section>
    {{-- CONSULTA DE LOS DATOS DE LA EMPRESA --}}
    @php
        $integrantes = DB::table('integrantes')->get();
    @endphp
    {{-- FIN DE LA CONSULTA --}}
    @if ($integrantes->count() > 2)
        <section id="integrantes" class="py-20 md:py-36 relative bg-purple-400">

            <div class="container mx-auto px-4">
                <div class="flex flex-wrap justify-center text-center mb-6">
                    <div class="w-full lg:w-6/12 px-4">
                        <h2 class="text-4xl font-semibold mt-10 text-purple-50">Miembros de la fundación</h2>
                        <p class="text-lg leading-relaxed m-4 text-purple-50">Grupo de fundadores y colaboradores</p>
                    </div>
                </div>
                <div class="-mt-10">

                    <div id="image-slider" class="splide">
                        <div class="splide__track">
                            <ul class="splide__list p-6">
                                @foreach ($integrantes as $integrante)
                                    <li class="splide__slide p-4 md:p-10  py-2">
                                        <div class="px-0 md:px-7">
                                            <div class="px-6 bg-purple-300 rounded-3xl shadow-lg ">
                                                <div class="">
                                                    @if ($integrante->foto)
                                                       <div class="">
                                                        <img alt=" ..." src="{{ Storage::url($integrante->foto) }}"
                                                    class="shadow-lg rounded-full max-w-full mx-auto object-cover"
                                                    style="max-width:120px; max-height:120px;">
                                                </div>
                                @endif
                                <div class="pt-6 text-center">
                                    <h5 class="text-sm md:text-base text-white ">{{ $integrante->nombre }}
                                    </h5>
                                    <p class="mt-1 text-xs md:text-sm text-purple-50 font-semibold">
                                        {{ $integrante->cargo }}</p>
                                    <div class="mt-6">
                                        @if ($integrante->url)
                                            <a href="{{ $integrante->url }}" target="_blank">
                                                <i class="fas fa-link text-purple-600 cursor-pointer"></i>
                                            </a>
                                        @else
                                            <a>
                                                <i class="fas fa-link text-purple-600"></i>
                                            </a>
                                        @endif
                                    </div>
                                </div>
                        </div>
                    </div>
                </div>
                </li>
    @endforeach
    </ul>
    </div>
    </div>
    </div>
    </div>
    </section>
    @endif

    {{-- FIN DE SECCION 4 --}}

    {{-- SECCION FORMULARIO --}}
    {{-- seccion del formulario --}}
    <section id="formulario" class="relative bg-white formulario py-16">

        <div class="container mx-auto px-4">
            <div class="flex flex-wrap justify-center lg:-mt-0 -mt-0">
                <div class="w-full lg:w-6/12 px-4">
                    <div
                        class=" bg-purple-400 relative flex flex-col min-w-0 break-words w-full mb-6 mt-6 shadow-2xl rounded-lg">
                        <div x-data="{ open: false }" class="flex-auto p-5 lg:p-10">
                            <h4 class="text-2xl text-gray-50 font-semibold">Contacto</h4>
                            <p class="leading-relaxed mt-1 mb-4 text-gray-50">Dispuestos a servir a la comunidad, al
                                cuidado y protección. </p>
                            <div>
                                <div x-on:click="open = !open" class="mx-auto mb-2 mt-2 text-center">
                                    <button
                                        class="border-0 mx-auto boton animate-bounce focus:outline-none focus:ring ease-linear transition-all duration-150 lg:mx-0 hover:bg-purple-500 hover:text-gray-100 bg-white text-purple-400 font-bold rounded-full my-2 py-2 px-8 shadow-2xl">Formulario</button>

                                </div>
                                {{-- caja de formulario --}}
                                <div x-show="open">
                                    @livewire('formulario-component')
                                </div>
                                {{-- fin del formulario --}}
                            </div>
                        </div>
                    </div>
                </div>
    </section>
    {{-- FIN SECCION FORMULARIO --}}

    {{-- SECCION 5 MAPA y pagos --}}
    <section id="pago" class="relative bg-white p-7 sm:px-8 lg:px-16 xl:px-32 2xl:px-44 py-32">
        <div class="flex flex-col md:flex-row lg:-mx-8">
            <div class="w-full lg:w-1/2 lg:px-8">

                {{-- CONSULTA DE LOS DATOS DE LA EMPRESA --}}
                @php
                    $empresa = DB::table('empresas')->first();
                @endphp
                {{-- FIN DE LA CONSULTA --}}

                <h2 class="text-3xl leading-tight font-bold text-purple-500">Punto de pago</h2>
                <p class="mt-2 mb-6 md:mb-0 text-gray-500 leading-relaxed text-justify pt-3">{{ $empresa->nota }}</p>
                <div class="container bg-purple-400  h-auto w-full rounded-xl shadow-2xl overflow-hidden">

                    <div class="flex items-center border-b border-purple-300 py-2">
                        <div
                            class="w-1/2 select-none  border-transparent border-4 text-gray-50 font-bold text-sm py-1 px-2 rounded">
                            Banco:
                        </div>
                        <p class="w-full text-base text-gray-200 mr-3 py-1 px-2">{{ $empresa->banco }}</p>
                    </div>
                    <div class="flex items-center border-b border-purple-300 py-2">
                        <div
                            class="w-1/2 select-none  border-transparent border-4 text-gray-50 font-bold text-sm py-1 px-2 rounded">
                            Tipo de cuenta:
                        </div>
                        <p
                            class="appearance-none bg-transparent border-none w-full text-base text-gray-200 mr-3 py-1 px-2">
                            {{ $empresa->tipo_cuenta }}</p>
                    </div>
                    <div class="flex items-center border-b border-purple-300 py-2">
                        <div
                            class="w-1/2 select-none  border-transparent border-4 text-gray-50 font-bold text-sm py-1 px-2 rounded">
                            Numero de cuenta:
                        </div>
                        <p
                            class="appearance-none bg-transparent border-none w-full text-base text-gray-200 mr-3 py-1 px-2">
                            {{ $empresa->numero_cuenta }}</p>
                    </div>
                    <div class="flex items-center border-b border-purple-300 py-2">
                        <div
                            class="w-1/2 select-none  border-transparent border-4 text-gray-50 font-bold text-sm py-1 px-2 rounded">
                            Nombre de cuenta:
                        </div>
                        <p
                            class="appearance-none bg-transparent border-none w-full text-base text-gray-200 mr-3 py-1 px-2">
                            {{ $empresa->nombre_cuenta }}</p>
                    </div>
                    @if ($empresa->ruc)
                        <div class="flex items-center border-b border-purple-300 py-2">
                            <div
                                class="w-1/2 select-none  border-transparent border-4 text-gray-50 font-bold text-sm py-1 px-2 rounded">
                                R.U.C.:
                            </div>
                            <p
                                class="appearance-none bg-transparent border-none w-full text-base text-gray-200 mr-3 py-1 px-2">
                                {{ $empresa->ruc }}</p>
                        </div>
                    @endif

                    @if ($empresa->telefono3)
                        <div class="flex items-center border-b border-purple-300 py-2">
                            <div
                                class="w-1/2 select-none  border-transparent border-4 text-gray-50 font-bold text-sm py-1 px-2 rounded">
                                Telefono/Celular:
                            </div>
                            <p
                                class="appearance-none bg-transparent border-none w-full text-base text-gray-200 mr-3 py-1 px-2">
                                {{ $empresa->telefono3 }}</p>
                        </div>
                    @endif

                </div>
            </div>

            <div class="w-full lg:w-1/2 lg:px-8 mt-5 md:mt-0">
                <div class="bg-white w-full rounded-lg">

                    <iframe class="w-full rounded-lg h-full md:h-96" style="border-radius: 20px"
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3989.792780079943!2d-78.4872837854281!3d-0.2050094998504208!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x91d59b687f86eba3%3A0x843f89b44b7f0972!2sFundecon!5e0!3m2!1ses!2sec!4v1633199811645!5m2!1ses!2sec"
                        width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                </div>
                <p class="italic text-sm mt-2 text-right text-purple-500 pt-1">Ubicación de FUNDECOM</p>
            </div>
        </div>
    </section>
    {{-- FIN DE SECCION 5 --}}


    {{-- FOOTER --}}


    <footer class="relative bg-purple-400 text-gray-700">
        <div class="relative w-full">
            <svg class="wave-top" viewBox="0 0 1439 147" version="1.1" xmlns="http://www.w3.org/2000/svg"
                xmlns:xlink="http://www.w3.org/1999/xlink">
                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                    <g transform="translate(-1.000000, -14.000000)" fill-rule="nonzero">
                        <g class="wave" fill="#FFFFFF">
                            <path
                                d="M1440,84 C1383.555,64.3 1342.555,51.3 1317,45 C1259.5,30.824 1206.707,25.526 1169,22 C1129.711,18.326 1044.426,18.475 980,22 C954.25,23.409 922.25,26.742 884,32 C845.122,37.787 818.455,42.121 804,45 C776.833,50.41 728.136,61.77 713,65 C660.023,76.309 621.544,87.729 584,94 C517.525,105.104 484.525,106.438 429,108 C379.49,106.484 342.823,104.484 319,102 C278.571,97.783 231.737,88.736 205,84 C154.629,75.076 86.296,57.743 0,32 L0,0 L1440,0 L1440,84 Z">
                            </path>
                        </g>
                        <g transform="translate(1.000000, 15.000000)" fill="#FFFFFF">
                            <g
                                transform="translate(719.500000, 68.500000) rotate(-180.000000) translate(-719.500000, -68.500000) ">
                                <path
                                    d="M0,0 C90.7283404,0.927527913 147.912752,27.187927 291.910178,59.9119003 C387.908462,81.7278826 543.605069,89.334785 759,82.7326078 C469.336065,156.254352 216.336065,153.6679 0,74.9732496"
                                    opacity="0.100000001"></path>
                                <path
                                    d="M100,104.708498 C277.413333,72.2345949 426.147877,52.5246657 546.203633,45.5787101 C666.259389,38.6327546 810.524845,41.7979068 979,55.0741668 C931.069965,56.122511 810.303266,74.8455141 616.699903,111.243176 C423.096539,147.640838 250.863238,145.462612 100,104.708498 Z"
                                    opacity="0.100000001"></path>
                                <path
                                    d="M1046,51.6521276 C1130.83045,29.328812 1279.08318,17.607883 1439,40.1656806 L1439,120 C1271.17211,77.9435312 1140.17211,55.1609071 1046,51.6521276 Z"
                                    opacity="0.200000003"></path>
                            </g>
                        </g>
                    </g>
                </g>
            </svg>
        </div>

        <div class="px-4 sm:px-8 lg:px-16 xl:px-40 2xl:px-32 py-12">
            <div class="flex flex-col md:flex-row">
                <div class="w-full lg:w-2/6 lg:mx-4 lg:pr-8">
                    <h3 class="font-bold text-2xl text-white">{{ $empresa->nombre }}</h3>

                    <div class="flex items-center mt-6">
                        <div class="w-full">
                            <label class="block uppercase tracking-wide text-white text-xs font-bold mb-6"
                                for="grid-last-name">
                                {{ $empresa->propietario }}
                            </label>
                            <img src=" {{ Storage::url($empresa->logo) }}" width="80px;" alt="">
                        </div>
                    </div>
                </div>

                <div class="w-full lg:w-1/6 mt-8 lg:mt-0 lg:mx-4">
                    <h5 class="uppercase tracking-wider font-bold text-white">Fundación</h5>
                    <ul class="mt-4">
                        <li class="mt-2"><a href="#" title=""
                                class="opacity-90 hover:opacity-100 text-white">Responsable</a></li>
                        <li class="mt-2"><a href="#" title=""
                                class="opacity-90 hover:opacity-100 text-white">Segura</a></li>
                        <li class="mt-2"><a href="#" title=""
                                class="opacity-90 hover:opacity-100 text-white">Eficiente</a></li>
                    </ul>
                </div>

                <div class="w-full lg:w-2/6 mt-8 lg:mt-0 lg:mx-4 lg:pr-8">
                    <h5 class="uppercase tracking-wider font-bold text-white">Detalles de contacto</h5>
                    <ul class="mt-4">
                        <li>
                            <a href="" title="" class="flex items-center opacity-90 hover:opacity-100">
                                <span>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                        class="fill-current">
                                        <path class="text-white"
                                            d="M12,2C7.589,2,4,5.589,4,9.995C3.971,16.44,11.696,21.784,12,22c0,0,8.029-5.56,8-12C20,5.589,16.411,2,12,2z M12,14 c-2.21,0-4-1.79-4-4s1.79-4,4-4s4,1.79,4,4S14.21,14,12,14z">
                                        </path>
                                    </svg>
                                </span>
                                <span class="ml-3 text-white">
                                    {{ $empresa->pais_ciudad }}, {{ $empresa->direccion }}
                                </span>
                            </a>
                        </li>
                        <li class="mt-4">
                            <a href="" title="" class=" flex items-center opacity-90 hover:opacity-100">
                                <span>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                        class="fill-current">
                                        <path class="text-white"
                                            d="M12,2C6.486,2,2,6.486,2,12s4.486,10,10,10c5.514,0,10-4.486,10-10S17.514,2,12,2z M12,20c-4.411,0-8-3.589-8-8 s3.589-8,8-8s8,3.589,8,8S16.411,20,12,20z">
                                        </path>
                                        <path class="text-white" d="M13 7L11 7 11 13 17 13 17 11 13 11z"></path>
                                    </svg>
                                </span>
                                <span class="ml-3 text-white">
                                    {{ $empresa->dias }}<br>
                                    {{ $empresa->horas }}
                                </span>
                            </a>
                        </li>
                        <li class="mt-4 flex">
                            <a href="" title="" class=" flex items-center opacity-90 hover:opacity-100">
                                <span>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                        class="fill-current">
                                        <path class="text-white"
                                            d="M14.594,13.994l-1.66,1.66c-0.577-0.109-1.734-0.471-2.926-1.66c-1.193-1.193-1.553-2.354-1.661-2.926l1.661-1.66 l0.701-0.701L5.295,3.293L4.594,3.994l-1,1C3.42,5.168,3.316,5.398,3.303,5.643c-0.015,0.25-0.302,6.172,4.291,10.766 C11.6,20.414,16.618,20.707,18,20.707c0.202,0,0.326-0.006,0.358-0.008c0.245-0.014,0.476-0.117,0.649-0.291l1-1l0.697-0.697 l-5.414-5.414L14.594,13.994z">
                                        </path>
                                    </svg>
                                </span>
                                <span class="ml-3 text-white">
                                    <a class="text-white" href="tel:{{ $empresa->telefono1 }}">
                                        {{ $empresa->telefono1 }} </a> &nbsp;&nbsp; <b class="text-white">-</b>
                                    &nbsp;&nbsp; <a class="text-white"
                                        href="tel:{{ $empresa->telefono2 }}">{{ $empresa->telefono2 }}</a>
                                </span>
                            </a>
                        </li>
                        <li class="mt-4 flex">
                            <a href="" title="" class=" flex items-center opacity-90 hover:opacity-100">
                                <span>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                        class="fill-current">
                                        <path class="text-white"
                                            d="M20,4H4C2.896,4,2,4.896,2,6v12c0,1.104,0.896,2,2,2h16c1.104,0,2-0.896,2-2V6C22,4.896,21.104,4,20,4z M20,8.7l-8,5.334 L4,8.7V6.297l8,5.333l8-5.333V8.7z">
                                        </path>
                                    </svg>
                                </span>
                                <span class="ml-3 text-white">
                                    <a class="text-white" href="mailto:m.{{ $empresa->correo }}">
                                        {{ $empresa->correo }}</a>
                                </span>
                            </a>
                        </li>
                    </ul>
                </div>

                <div class="w-full lg:w-1/6 mt-8 lg:mt-0 lg:mx-4">
                    @if ($empresa->facebook)
                        <h5 class="uppercase tracking-wider font-bold text-white">Redes Sociales</h5>
                        <ul class="mt-4 flex">
                            @if ($empresa->facebook)
                                <li>
                                    <a href="{{ $empresa->facebook }}" target="_blank" title="facebook">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25"
                                            viewBox="0 0 24 24" class="fill-current">
                                            <path fill="#ffff" fill-rule="nonzero"
                                                d="M20,3H4C3.447,3,3,3.448,3,4v16c0,0.552,0.447,1,1,1h8.615v-6.96h-2.338v-2.725h2.338v-2c0-2.325,1.42-3.592,3.5-3.592	c0.699-0.002,1.399,0.034,2.095,0.107v2.42h-1.435c-1.128,0-1.348,0.538-1.348,1.325v1.735h2.697l-0.35,2.725h-2.348V21H20	c0.553,0,1-0.448,1-1V4C21,3.448,20.553,3,20,3z">
                                            </path>
                                        </svg>
                                    </a>
                                </li>
                            @endif
                            @if ($empresa->whatsapp)
                                <li class="ml-6">
                                    <a href="{{ $empresa->whatsapp }}" target="_blank" title="Whatsapp">
                                        <svg style="background: #00bb2d" class=" rounded-md p-0.5 mt-0.5" version="1.1"
                                            id="Capa_1" xmlns="http://www.w3.org/2000/svg"
                                            xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="22"
                                            height="22" viewBox="0 0 90 90" xml:space="preserve">
                                            <g fill="#FFFFFF" fill-rule="nonzero">
                                                <path id="WhatsApp"
                                                    d="M90,43.841c0,24.213-19.779,43.841-44.182,43.841c-7.747,0-15.025-1.98-21.357-5.455L0,90l7.975-23.522
                                c-4.023-6.606-6.34-14.354-6.34-22.637C1.635,19.628,21.416,0,45.818,0C70.223,0,90,19.628,90,43.841z M45.818,6.982
                                c-20.484,0-37.146,16.535-37.146,36.859c0,8.065,2.629,15.534,7.076,21.61L11.107,79.14l14.275-4.537
                                c5.865,3.851,12.891,6.097,20.437,6.097c20.481,0,37.146-16.533,37.146-36.857S66.301,6.982,45.818,6.982z M68.129,53.938
                                c-0.273-0.447-0.994-0.717-2.076-1.254c-1.084-0.537-6.41-3.138-7.4-3.495c-0.993-0.358-1.717-0.538-2.438,0.537
                                c-0.721,1.076-2.797,3.495-3.43,4.212c-0.632,0.719-1.263,0.809-2.347,0.271c-1.082-0.537-4.571-1.673-8.708-5.333
                                c-3.219-2.848-5.393-6.364-6.025-7.441c-0.631-1.075-0.066-1.656,0.475-2.191c0.488-0.482,1.084-1.255,1.625-1.882
                                c0.543-0.628,0.723-1.075,1.082-1.793c0.363-0.717,0.182-1.344-0.09-1.883c-0.27-0.537-2.438-5.825-3.34-7.977
                                c-0.902-2.15-1.803-1.792-2.436-1.792c-0.631,0-1.354-0.09-2.076-0.09c-0.722,0-1.896,0.269-2.889,1.344
                                c-0.992,1.076-3.789,3.676-3.789,8.963c0,5.288,3.879,10.397,4.422,11.113c0.541,0.716,7.49,11.92,18.5,16.223
                                C58.2,65.771,58.2,64.336,60.186,64.156c1.984-0.179,6.406-2.599,7.312-5.107C68.398,56.537,68.398,54.386,68.129,53.938z" />
                                            </g>
                                        </svg>
                                    </a>
                                </li>
                            @endif

                            @if ($empresa->instagram)
                                <li class="ml-6">
                                    <a style="background: #3f729b; color:red" href="{{ $empresa->instagram }}"
                                        target="_blank" title="instagram">
                                        <svg style="color: blue;" class="bg-pruple-400"
                                            xmlns="http://www.w3.org/2000/svg" width="27" height="27"
                                            viewBox="0 0 24 24" class="fill-current">
                                            <path fill="#E1306C" fill-rule="nonzero"
                                                d="M20.947,8.305c-0.011-0.757-0.151-1.508-0.419-2.216c-0.469-1.209-1.424-2.165-2.633-2.633 c-0.699-0.263-1.438-0.404-2.186-0.42C14.747,2.993,14.442,2.981,12,2.981s-2.755,0-3.71,0.055 c-0.747,0.016-1.486,0.157-2.185,0.42C4.896,3.924,3.94,4.88,3.472,6.089C3.209,6.788,3.067,7.527,3.053,8.274 c-0.043,0.963-0.056,1.268-0.056,3.71s0,2.754,0.056,3.71c0.015,0.748,0.156,1.486,0.419,2.187 c0.469,1.208,1.424,2.164,2.634,2.632c0.696,0.272,1.435,0.426,2.185,0.45c0.963,0.043,1.268,0.056,3.71,0.056s2.755,0,3.71-0.056 c0.747-0.015,1.486-0.156,2.186-0.419c1.209-0.469,2.164-1.425,2.633-2.633c0.263-0.7,0.404-1.438,0.419-2.187 c0.043-0.962,0.056-1.267,0.056-3.71C21.003,9.572,21.003,9.262,20.947,8.305z M11.994,16.602c-2.554,0-4.623-2.069-4.623-4.623 s2.069-4.623,4.623-4.623c2.552,0,4.623,2.069,4.623,4.623S14.546,16.602,11.994,16.602z M16.801,8.263 c-0.597,0-1.078-0.482-1.078-1.078s0.481-1.078,1.078-1.078c0.595,0,1.077,0.482,1.077,1.078S17.396,8.263,16.801,8.263z">
                                            </path>
                                            <circle fill="#E1306C" fill-rule="nonzero" cx="11.994" cy="11.979"
                                                r="3.003">
                                            </circle>
                                        </svg>
                                    </a>
                                </li>
                            @endif

                        </ul>
                    @endif
                    <div class=" w-full py-4 mx-auto text-center mt-1   text-white text-sm">
                        Copyright ©
                        <script>
                            document.write(new Date().getFullYear());
                        </script>
                        {{ $empresa->nombre }}&nbsp; - &nbsp; Todos los derechos reservados.
                        </p>
                        <p class=" text-white">

                        </p>
                    </div>
                    </p>
                </div>
            </div>
        </div>
    </footer>

    {{-- FIN DE FOOTER --}}


</x-app-layout>

{{-- JAVASCRIPT --}}

<script>
    ///INICIO SLIDER REFERENCIAS
    document.addEventListener('DOMContentLoaded', function() {
        new Splide('#image-slider', {
            type: 'loop',
            speed: 2000,
            perPage: 3,
            trimSpace: false,
            focus: 'center',
            breakpoints: {
                600: {
                    perPage: 1,
                    height: 'auto',
                }
            },

            interval: 5000,
            pagination: false,
            autoplay: true,
            prev: 'splide__arrow--prev your-class-prev',
            next: 'splide__arrow--next your-class-next',

        }).mount();
    });
</script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
<script src="{{ asset('https://unpkg.com/sweetalert/dist/sweetalert.min.js') }}"></script>

<script>
    //FIN SLIDER REFERENCIAS
    @if (Session::has('mensaje'))
    
        Swal.fire({
        position: 'top-end',
        width: 400,
        /* background: '#333333',*/
        toast: true,
        timerProgressBar: true,
        icon: 'success',
        title: 'Datos enviados con exito!',
        showConfirmButton: false,
        timer: 4000
        })
    
    @endif
</script>
