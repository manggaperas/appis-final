<x-app-layout>
    <x-slot name="title">
        Data Management
    </x-slot>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Tambah Data Kontainer') }}
        </h2>
    </x-slot>

    <div class="py-8">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    {{-- <form class="w-full max-w-sm"> --}}
                        {{-- <div class="flex items-center justify-around"> --}}
                        {{-- <div class="inline-block relative w-64">
                            <select class="block appearance-none w-full bg-white border border-gray-400 hover:border-gray-500 px-4 py-2 pr-8 rounded shadow leading-tight focus:outline-none focus:shadow-outline">
                            <option class="text-center">---Pilih Bulan---</option>
                            <option>Januari</option>
                            <option>Februari</option>
                            <option>Maret</option>
                            <option>April</option>
                            <option>Mei</option>
                            <option>Juni</option>
                            <option>Juli</option>
                            <option>Agustus</option>
                            <option>September</option>
                            <option>Oktober</option>
                            <option>November</option>
                            <option>Desember</option>
                            </select>
                        </div>
                        <div class="inline-block relative w-64 ml-12">
                            <select class="block appearance-none w-full bg-white border border-gray-400 hover:border-gray-500 px-4 py-2 pr-8 rounded shadow leading-tight focus:outline-none focus:shadow-outline">
                            <option class="text-center">---Pilih Tahun---</option>
                            <option>2000</option>
                            <option>2001</option>
                            <option>2002</option>
                            <option>2003</option>
                            <option>2004</option>
                            <option>2005</option>
                            <option>2006</option>
                            <option>2007</option>
                            <option>2008</option>
                            <option>2009</option>
                            <option>2010</option>
                            <option>2011</option>
                            <option>2012</option>
                            <option>2013</option>
                            <option>2014</option>
                            <option>2015</option>
                            <option>2016</option>
                            <option>2017</option>
                            <option>2018</option>
                            <option>2019</option>
                            <option>2020</option>
                            <option>2021</option>
                            <option>2022</option>
                            <option>2023</option>
                            </select>
                        </div>
                        </div>
                        <div class="inline-block relative w-64 mt-8">
                            <select class="block appearance-none w-full bg-white border border-gray-400 hover:border-gray-500 px-4 py-2 pr-8 rounded shadow leading-tight focus:outline-none focus:shadow-outline">
                            <option>---Kategori Kendaraan---</option>
                            <option>Kontainer</option>
                            <option>Armroll</option>
                            <option>Dumptruck</option>
                            <option>Gondolan</option>
                            </select>
                        </div> --}}
                        {{-- <div class="md:flex md:items-center mb-6 mt-8">
                        <div class="md:w-1/3">
                            <label class="block text-gray-700 font-semibold md:text-right mb-1 md:mb-0 pr-4" for="inline-full-name">
                            Kecepatan Kontainer
                            </label>
                        </div>
                        <div class="md:w-2/3">
                            <input class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-1/3 py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-blue-500"
                            id="inline-full-name"
                            type="text">
                        </div>
                        </div>
                        <div class="md:flex md:items-center mb-6">
                        <div class="md:w-1/3">
                            <label class="block text-gray-700 font-semibold md:text-right mb-1 md:mb-0 pr-4"
                            for="inline-full-name">
                            Jarak TPA Terjauh
                            </label>
                        </div>
                        <div class="md:w-2/3">
                            <input class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-1/3 py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-blue-500"
                            id="inline-full-name"
                            type="text">
                        </div>
                        </div>
                        <div class="md:flex md:items-center mb-6">
                            <div class="md:w-1/3">
                                <label class="block text-gray-700 font-semibold md:text-right mb-1 md:mb-0 pr-4"
                                for="inline-password">
                                Waktu Tempuh Perjalanan
                                </label>
                            </div>
                            <div class="md:w-1/3">
                                <div class="flex items-center border-b border-teal-500 py-2">
                                    <input class="appearance-none bg-transparent border-none rounded w-2/3 text-gray-700 mr-3 py-1 px-2 leading-tight focus:outline-none"
                                    type="text" aria-label="Full name">
                            </div>
                            </div>
                        </div>
                        <div class="md:flex md:items-center mb-6">
                            <div class="md:w-1/3">
                                <label class="block text-gray-700 font-semibold md:text-right mb-1 md:mb-0 pr-4"
                                for="inline-password">
                                Ritasi Perjalanan
                                </label>
                            </div>
                            <div class="md:w-1/3">
                                <div class="flex items-center border-b border-teal-500 py-2">
                                    <input class="appearance-none bg-transparent border-none rounded w-2/3 text-gray-700 mr-3 py-1 px-2 leading-tight focus:outline-none"
                                    type="text" aria-label="Full name">
                            </div>
                            </div>
                        </div>
                        <div class="md:flex md:items-center mb-6">
                            <div class="md:w-1/3">
                                <label class="block text-gray-700 font-semibold md:text-right mb-1 md:mb-0 pr-4"
                                for="inline-password">
                                Jumlah Kontainer
                                </label>
                            </div>
                            <div class="md:w-1/3">
                                <div class="flex items-center border-b border-teal-500 py-2">
                                    <input class="appearance-none bg-transparent border-none w-2/3 rounded text-gray-700 mr-3 py-1 px-2 leading-tight focus:outline-none"
                                    type="text" aria-label="Full name">
                                </div>
                            </div>
                        </div> --}}
                <form class="w-full max-w-lg">
                    <div class="flex flex-wrap -mx-3 mb-6">
                        <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                        for="grid-first-name">
                            First Name
                        </label>
                        <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-red-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white"
                        id="grid-first-name" type="text" placeholder="Jane">
                        <p class="text-red-500 text-xs italic">Please fill out this field.</p>
                        </div>
                        <div class="w-full md:w-1/2 px-3">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                        for="grid-last-name">
                            Last Name
                        </label>
                        <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                        id="grid-last-name" type="text" placeholder="Doe">
                        </div>
                    </div>
                    <div class="flex flex-wrap -mx-3 mb-6">
                        <div class="w-full px-3">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" 
                        for="grid-password">
                            Password
                        </label>
                        <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                        id="grid-password" type="password" placeholder="******************">
                        <p class="text-gray-600 text-xs italic">Make it as long and as crazy as you'd like</p>
                        </div>
                    </div>
                    <div class="flex flex-wrap -mx-3 mb-2">
                        <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                        for="grid-city">
                            City
                        </label>
                        <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                        id="grid-city" type="text" placeholder="Albuquerque">
                        </div>
                        <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-state">
                            State
                        </label>
                        <div class="relative">
                            <select class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-state">
                            <option>New Mexico</option>
                            <option>Missouri</option>
                            <option>Texas</option>
                            </select>
                            <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                            </div>
                        </div>
                        </div>
                        <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-zip">
                            Zip
                        </label>
                        <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                        id="grid-zip" type="text" placeholder="90210">
                        </div>
                    </div>
                    </form>
                        <div class="md:flex md:items-center mt-8 ml-12">
                        <div class="md:w-1/3"></div>
                        <div class="md:w-2/3 ml-2">
                            <button class="shadow bg-blue-500 hover:bg-blue-700 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded" type="button">
                            Submit
                            </button>
                        </div>
                        </div>
                    {{-- </form> --}}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
