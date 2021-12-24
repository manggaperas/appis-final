<x-app-layout>
    <x-slot name="title">
        Data Management
    </x-slot>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Manajemen Data Dumptruck') }}
        </h2>
    </x-slot>

    {{-- <x-select></x-select> --}}
    <form action="{{ route('dumptruck.store') }}" method="post">
        @csrf
        <div class="p-5 bg-white">
            <div class="md:flex md:items-center">
                <div class="md:w-1/3">
                    <label class="block text-gray-700 font-semibold md:text-right mb-1 md:mb-0 pr-4"
                    for="inline-password">
                    Jarak TPA
                    </label>
                </div>
                <div class="md:w-2/3">
                    <div class="flex items-center border-b border-teal-500 py-2">
                        <input class="appearance-none border-2 border-gray-200 rounded py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-blue-500"
                        type="text" aria-label="Full name" name="ritasi">
                </div>
                </div>
            </div>
            <div class="md:flex md:items-center">
                <div class="md:w-1/3">
                    <label class="block text-gray-700 font-semibold md:text-right mb-1 md:mb-0 pr-4"
                    for="inline-password">
                    Kecepatan Dumptruck
                    </label>
                </div>
                <div class="md:w-2/3">
                    <div class="flex items-center border-b border-teal-500 py-2">
                        <input class="appearance-none border-2 border-gray-200 rounded py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-blue-500"
                        type="text" aria-label="Full name" name="ritasi">
                </div>
                </div>
            </div>
            <div class="md:flex md:items-center">
                <div class="md:w-1/3">
                    <label class="block text-gray-700 font-semibold md:text-right mb-1 md:mb-0 pr-4"
                    for="inline-password">
                    Waktu Tunggu Dumptruck
                    </label>
                </div>
                <div class="md:w-2/3">
                    <div class="flex items-center border-b border-teal-500 py-2">
                        <input class="appearance-none border-2 border-gray-200 rounded py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-blue-500"
                        type="text" aria-label="Full name" name="ritasi">
                </div>
                </div>
            </div>
            <div class="md:flex md:items-center">
                <div class="md:w-1/3">
                    <label class="block text-gray-700 font-semibold md:text-right mb-1 md:mb-0 pr-4"
                    for="inline-password">
                    Waktu Bongkar Tossa
                    </label>
                </div>
                <div class="md:w-2/3">
                    <div class="flex items-center border-b border-teal-500 py-2">
                        <input class="appearance-none border-2 border-gray-200 rounded py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-blue-500"
                        type="text" aria-label="Full name" name="ritasi">
                </div>
                </div>
            </div>
            <div class="md:flex md:items-center">
                <div class="md:w-1/3">
                    <label class="block text-gray-700 font-semibold md:text-right mb-1 md:mb-0 pr-4"
                    for="inline-password">
                    Waktu Istirahat
                    </label>
                </div>
                <div class="md:w-2/3">
                    <div class="flex items-center border-b border-teal-500 py-2">
                        <input class="appearance-none border-2 border-gray-200 rounded py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-blue-500"
                        type="text" aria-label="Full name" name="ritasi">
                </div>
                </div>
            </div>
            <div class="md:flex md:items-center">
                <div class="md:w-1/3">
                    <label class="block text-gray-700 font-semibold md:text-right mb-1 md:mb-0 pr-4"
                    for="inline-password">
                    Waktu Shift
                    </label>
                </div>
                <div class="md:w-2/3">
                    <div class="flex items-center border-b border-teal-500 py-2">
                        <input class="appearance-none border-2 border-gray-200 rounded py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-blue-500"
                        type="text" aria-label="Full name" name="ritasi">
                </div>
                </div>
            </div>
            <div class="md:flex md:items-center">
                <div class="md:w-1/3">
                    <label class="block text-gray-700 font-semibold md:text-right mb-1 md:mb-0 pr-4"
                    for="inline-password">
                    Volume Sampah Terangkut
                    </label>
                </div>
                <div class="md:w-2/3">
                    <div class="flex items-center border-b border-teal-500 py-2">
                        <input class="appearance-none border-2 border-gray-200 rounded py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-blue-500"
                        type="text" aria-label="Full name" name="ritasi">
                </div>
                </div>
            </div>
            <div class="md:flex md:items-center">
                <div class="md:w-1/3">
                    <label class="block text-gray-700 font-semibold md:text-right mb-1 md:mb-0 pr-4"
                    for="inline-password">
                    Volume Dumptruck
                    </label>
                </div>
                <div class="md:w-2/3">
                    <div class="flex items-center border-b border-teal-500 py-2">
                        <select name="volume" class="block appearance-none w-50 bg-white border border-gray-400 hover:border-gray-500 px-4 py-2 pr-8 rounded shadow leading-tight focus:outline-none focus:shadow-outline mr-3">
                            <option @if(old('volume') == '8') selected @endif value="8">8</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="md:flex md:items-center">
                <div class="md:w-1/3">
                    <label class="block text-gray-700 font-semibold md:text-right mb-1 md:mb-0 pr-4"
                    for="inline-password">
                    Bulan
                    </label>
                </div>
                <div class="md:w-2/3">
                    <div class="flex items-center border-b border-teal-500 py-2">
                        <select name="bulan" class="block appearance-none w-50 bg-white border border-gray-400 hover:border-gray-500 px-4 py-2 pr-8 rounded shadow leading-tight focus:outline-none focus:shadow-outline mr-3">
                            <option @if(old('bulan') == 'januari') selected @endif value="januari">Januari</option>
                            <option @if(old('bulan') == 'februari') selected @endif value="februari">Februari</option>
                            <option @if(old('bulan') == 'maret') selected @endif value="maret">Maret</option>
                            <option @if(old('bulan') == 'april') selected @endif value="april">April</option>
                            <option @if(old('bulan') == 'mei') selected @endif value="mei">Mei</option>
                            <option @if(old('bulan') == 'juni') selected @endif value="juni">Juni</option>
                            <option @if(old('bulan') == 'juli') selected @endif value="juli">Juli</option>
                            <option @if(old('bulan') == 'agustus') selected @endif value="agustus">Agustus</option>
                            <option @if(old('bulan') == 'september') selected @endif value="september">September</option>
                            <option @if(old('bulan') == 'oktober') selected @endif value="oktober">Oktober</option>
                            <option @if(old('bulan') == 'november') selected @endif value="november">November</option>
                            <option @if(old('bulan') == 'desember') selected @endif value="desember">Desember</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="md:flex md:items-center">
                <div class="md:w-1/3">
                    <label class="block text-gray-700 font-semibold md:text-right mb-1 md:mb-0 pr-4"
                    for="inline-password">
                    Tahun
                    </label>
                </div>
                <div class="md:w-2/3">
                    <div class="flex items-center border-b border-teal-500 py-2">
                        <select name="tahun" class="block appearance-none w-50 bg-white border border-gray-400 hover:border-gray-500 px-4 py-2 pr-8 rounded shadow leading-tight focus:outline-none focus:shadow-outline mr-3">
                            @for ($i = date('Y'); $i >= 2000; $i--)
                                <option @if(old('tahun') == $i) selected @endif value="{{ $i }}">{{ $i }}</option>
                            @endfor
                        </select>
                    </div>
                </div>
            </div>
            <div class="md:flex md:items-center mt-8">
                <div class="md:w-1/3"></div>
                <div class="md:w-2/3">
                    <button type="submit" class="shadow bg-blue-500 hover:bg-blue-700 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded">
                        Update
                    </button>
                </div>
            </div>
        </div>
    </form>
</x-app-layout>
