@extends('layout.template')

@section('container')
    
	<!--Container-->
	<div class="container w-full mx-auto pt-20">
		
		<div class="w-full px-4 md:px-0 md:mt-8 mb-16 text-gray-800 leading-normal">
			
			<!--Console Content-->
			
			<div class="flex flex-wrap">
                <div class="w-full md:w-1/2 xl:w-1/3 p-3">
                    <!--Metric Card-->
                    <div class="bg-gray-400 border border-gray-800 rounded shadow p-2">
                        <div class="flex flex-row items-center">
                            <div class="flex-shrink pr-4">
                                <div class="rounded p-3 bg-blue-600"><i class="fas fa-server fa-2x fa-fw fa-inverse"></i></div>
                            </div>
                            <div class="flex-2 text-right md:text-center">
                                <h2 class="font-bold uppercase text-black">
                                    <a href="/listpelajar">Pelajar</a> 
                                </h2>
                            </div>
                        </div>
                    </div>
                    <!--/Metric Card-->
                </div>
                <div class="w-full md:w-1/2 xl:w-1/3 p-3">
                    <!--Metric Card-->
                    <div class="bg-gray-400 border border-gray-800 rounded shadow p-2">
                        <div class="flex flex-row items-center">
                            <div class="flex-shrink pr-4">
                                <div class="rounded p-3 bg-indigo-600"><i class="fas fa-tasks fa-2x fa-fw fa-inverse"></i></div>
                            </div>
                            <div class="flex-2 text-right md:text-center">
                                <h2 class="font-bold uppercase text-black">
                                    <a href="/soal">Latihan Soal</a> 
                                </h2>
                            </div>
                        </div>
                    </div>
                    <!--/Metric Card-->
                </div>
                <div class="w-full md:w-1/2 xl:w-1/3 p-3">
                    <!--Metric Card-->
                    <div class="bg-gray-400 border border-gray-800 rounded shadow p-2">
                        <div class="flex flex-row items-center">
                            <div class="flex-shrink pr-4">
                                <div class="rounded p-3 bg-red-600"><i class="fas fa-inbox fa-2x fa-fw fa-inverse"></i></div>
                            </div>
                            <div class="flex-2 text-right md:text-center">
                                <h2 class="font-bold uppercase text-black">
                                    <a href="/data_ujian">Ujian</a> 
                                </h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

			<!--Divider-->
			<hr class="border-b-2 border-gray-600 my-5 mx-4">

            <div class="flex flex-row flex-wrap flex-grow mt-2">

                <div class="w-full p-1">
                    <!--Table Card-->
                    <div class="bg-gray-50 border border-gray-800 rounded shadow">
                        <div class="border-b border-gray-900 p-3">
                            <h5 class="font-bold uppercase text-gray-500">MBD F</h5>
                        </div>
                        <div class="p-5">
                            <table class="w-full p-5 text-gray-700">
                                <thead>
                                    <tr>
                                        <th class="text-left text-gray-600">Name</th>
                                        <th class="text-left text-gray-600">NRP</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    <tr>
                                        <td>Obi Wan Kenobi</td>
                                        <td>Light</td>
                                    </tr>
                                    <tr>
                                        <td>Greedo</td>
                                        <td>South</td>
                                    </tr>
                                    <tr>
                                        <td>Darth Vader</td>
                                        <td>Dark</td>
                                    </tr>                                   
                                </tbody>
                            </table>


                        </div>
                    </div>
                    <!--/table Card-->
                </div>


            </div>
								
			<!--/ Console Content-->
					
		</div>
		

	</div> 
	<!--/container-->


@endsection