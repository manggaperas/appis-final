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

    <div class="bg-white p-5">
        <div class="flex items-center justify-between">
            <form action="{{ route('dumptruck') }}" method="get">
                <div class="mb-3 flex items-center justify-start py-3">
                    <select name="bulan" class="block appearance-none w-50 bg-white border border-gray-400 hover:border-gray-500 px-4 py-2 pr-8 rounded shadow leading-tight focus:outline-none focus:shadow-outline mr-3">
                        <option @if(Request::get('bulan') == 'januari') selected @endif value="januari">Januari</option>
                        <option @if(Request::get('bulan') == 'februari') selected @endif value="februari">Februari</option>
                        <option @if(Request::get('bulan') == 'maret') selected @endif value="maret">Maret</option>
                        <option @if(Request::get('bulan') == 'april') selected @endif value="april">April</option>
                        <option @if(Request::get('bulan') == 'mei') selected @endif value="mei">Mei</option>
                        <option @if(Request::get('bulan') == 'juni') selected @endif value="juni">Juni</option>
                        <option @if(Request::get('bulan') == 'juli') selected @endif value="juli">Juli</option>
                        <option @if(Request::get('bulan') == 'agustus') selected @endif value="agustus">Agustus</option>
                        <option @if(Request::get('bulan') == 'september') selected @endif value="september">September</option>
                        <option @if(Request::get('bulan') == 'oktober') selected @endif value="oktober">Oktober</option>
                        <option @if(Request::get('bulan') == 'november') selected @endif value="november">November</option>
                        <option @if(Request::get('bulan') == 'desember') selected @endif value="desember">Desember</option>
                    </select>
        
                    <select name="tahun" class="block appearance-none w-50 bg-white border border-gray-400 hover:border-gray-500 px-4 py-2 pr-8 rounded shadow leading-tight focus:outline-none focus:shadow-outline mr-3">
                        @for ($i = date('Y'); $i >= 2000; $i--)
                            <option @if(Request::get('tahun') == $i) selected @endif value="{{ $i }}">{{ $i }}</option>
                        @endfor
                    </select>
        
                    <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Submit</button>
                </div>
            </form>

            <a class="flex items-center rounded rounded-md bg-green-500 px-2 py-2 hover:bg-green-600 text-white" href="{{ route('dumptruck.create') }}">
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" style="vertical-align: -0.125em;" width="1em" height="1em" preserveAspectRatio="xMidYMid meet" viewBox="0 0 32 32"><path d="M17 15V8h-2v7H8v2h7v7h2v-7h7v-2z" fill="currentColor"/></svg>
                <span>Tambah Dumptruck</span></a>
        </div>
    </div>

        <x-table :headings="$headings" :data="$data" />
    </div>
</x-app-layout>
