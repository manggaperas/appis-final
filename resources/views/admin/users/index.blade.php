<x-app-layout>
    <x-slot name="title">
        Data Management
    </x-slot>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Manajemen Akun') }}
        </h2>
    </x-slot>

    {{-- Searching Engine --}}
    <div class="bg-white p-5">
        <div class="flex items-center justify-between">
            <form action="#" method="get" id="edit_form">
                <div class="mb-3 flex items-center justify-start py-3">
                    <select id="id_user" class="block appearance-none w-50 bg-white border border-gray-400 hover:border-gray-500 px-4 py-2 pr-8 rounded shadow leading-tight focus:outline-none focus:shadow-outline mr-3">
                        @foreach($data as $d)
                        <option value="{{ $d->id }}">{{ $d->id }}</option>
                        @endforeach
                    </select>

                    <button type="submit" class="bg-yellow-500 hover:bg-yellow-700 text-white font-bold py-2 px-4 rounded">Edit</button>
                </div>
            </form>

            <form action="#" method="post" id="delete_form">
                @csrf
                <input name="_method" type="hidden" value="POST">
                <div class="mb-3 flex items-center justify-start py-3">
                    <button type="submit" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">Delete</button>
                </div>
            </form>

            <a class="flex items-center rounded rounded-md bg-green-500 px-2 py-2 hover:bg-green-600 text-white" href="{{ route('user.create') }}">
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" style="vertical-align: -0.125em;" width="1em" height="1em" preserveAspectRatio="xMidYMid meet" viewBox="0 0 32 32">
                    <path d="M17 15V8h-2v7H8v2h7v7h2v-7h7v-2z" fill="currentColor" />
                </svg>
                <span>Tambah User</span></a>
        </div>
    </div>

    {{-- Show Table --}}
    <x-table :headings="$headings" :data="$data" />
    </div>
    </div>
</x-app-layout>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.6.4/jquery.min.js" integrity="sha512-SW0bB7zYONzOFdTogLM8mF+lpvSaPH55g+RyyV8+dRZkiW5n/c1gNgGk5i2xfzDLTmPHvSCqsaiEoZJDiToTWg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script>
    $('#id_user').change(function() {
        var id_user = $('#id_user').val();

        if (id_user) {
            $('#edit_form').attr('action', '/user/' + id_user + '/edit/');
            $('#delete_form').attr('action', '/user/' + id_user + '/delete/');
        }
    });
</script>