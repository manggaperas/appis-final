<x-app-layout>
    <x-slot name="title">
        Data Management
    </x-slot>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Manajemen Data Infrastruktur') }}
        </h2>
    </x-slot>

    <div class="py-8">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <form class="w-full max-w-sm">
                        <div class="flex items-center justify-around">
                        <div class="inline-block relative w-64">
                        <select class="block appearance-none w-full bg-white border border-gray-400 hover:border-gray-500 px-4 py-2 pr-8 rounded shadow leading-tight focus:outline-none focus:shadow-outline">
                            <option class="text-center">---Pilih Bulan---</option>
                            <option value="1">Januari</option>
                            <option value="2">Februari</option>
                            <option value="3">Maret</option>
                            <option value="4">April</option>
                            <option value="5">Mei</option>
                            <option value="6">Juni</option>
                            <option value="7">Juli</option>
                            <option value="8">Agustus</option>
                            <option value="9">September</option>
                            <option value="10">Oktober</option>
                            <option value="11">November</option>
                            <option value="12">Desember</option>
                            </select>
                            {{-- <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                            <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
                            </div> --}}
                        </div>
                        <div class="inline-block relative w-64 ml-12">
                            <select class="block appearance-none w-full bg-white border border-gray-400 hover:border-gray-500 px-4 py-2 pr-8 rounded shadow leading-tight focus:outline-none focus:shadow-outline">
                                <option class="text-center">---Pilih Tahun---</option>
                                @for ($i = date('Y'); $i >= 2000; $i--)
                                    <option value="{{ $i }}">{{ $i }}</option>
                                @endfor
                            </select>
                        {{-- <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                        <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
                        </div> --}}
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
                            <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                            <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
                            </div>
                        </div>
                        {{-- <div class="md:flex md:items-center mb-6 mt-8">
                        <div class="md:w-1/3">
                            <label class="block text-gray-700 font-semibold md:text-right mb-1 md:mb-0 pr-4" for="inline-full-name">
                            Kecepatan Armroll
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
                            Jarak TPA Terjauh
                            </label>
                        </div>
                        <div class="md:w-2/3">
                            <input class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-1/3 py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-blue-500"
                            id="inline-password"
                            type="password">
                        </div>
                        </div>
                        <div class="md:flex md:items-center mb-6">
                            <div class="md:w-1/3">
                                <label class="block text-gray-700 font-semibold md:text-right mb-1 md:mb-0 pr-4"
                                for="inline-password">
                                Waktu Tempuh Perjalanan
                                </label>
                            </div>
                            <div class="md:w-2/3">
                                <div class="flex items-center border-b border-teal-500 py-2">
                                    <input class="appearance-none bg-transparent border-none w-1/3 text-gray-700 mr-3 py-1 px-2 leading-tight focus:outline-none"
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
                            <div class="md:w-2/3">
                                <div class="flex items-center border-b border-teal-500 py-2">
                                    <input class="appearance-none bg-transparent border-none w-1/3 text-gray-700 mr-3 py-1 px-2 leading-tight focus:outline-none"
                                    type="text" aria-label="Full name">
                            </div>
                            </div>
                        </div>
                        <div class="md:flex md:items-center mb-6">
                            <div class="md:w-1/3">
                                <label class="block text-gray-700 font-semibold md:text-right mb-1 md:mb-0 pr-4"
                                for="inline-password">
                                Jumlah Armroll
                                </label>
                            </div>
                            <div class="md:w-2/3">
                                <div class="flex items-center border-b border-teal-500 py-2">
                                    <input class="appearance-none bg-transparent border-none w-1/3 text-gray-700 mr-3 py-1 px-2 leading-tight focus:outline-none"
                                    type="text" placeholder="Jane Doe" aria-label="Full name">
                            </div>
                            </div>
                        </div>
                        <div class="md:flex md:items-center mt-8">
                        <div class="md:w-1/3"></div>
                        <div class="md:w-2/3">
                            <button class="shadow bg-blue-500 hover:bg-blue-700 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded" type="button">
                            Submit
                            </button>
                        </div>
                        </div> --}}
                    </form>
                    {{-- <select name="Bulan" id=""> 
                        <option value="a">Januari</option>
                        <option value="b">Februari</option>
                        <option value="c">Maret</option>
                        <option value="d">April</option>
                        <option value="">Mei</option>
                        <option value="">Juni</option>
                        <option value="">Juli</option>
                        <option value="">Agustus</option>
                        <option value="">September</option>
                        <option value="">Oktober</option>
                        <option value="">November</option>
                        <option value="">Desember</option>
                    </select>
                    <select name="" id=""></select> --}}
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
