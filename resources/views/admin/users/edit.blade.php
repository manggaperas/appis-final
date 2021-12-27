<x-app-layout>
   <x-slot name="title">
      Data Management
   </x-slot>
   <x-slot name="header">
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">
         {{ __('Manajemen Data Infrastruktur') }}
      </h2>
   </x-slot>

   {{-- Start Section Form --}}
   <form action="{{ route('user.update', ['id' => $user->id]) }}" method="POST">
      @csrf
      <input name="_method" type="hidden" value="PUT">
      <div class="p-5 bg-white">

         <div class="md:flex md:items-center">
            <div class="md:w-1/3">
               <label class="block text-gray-700 font-semibold md:text-right mb-1 md:mb-0 pr-4" for="inline-kecepatan">
                  Nama
               </label>
            </div>
            <div class="md:w-2/3">
               <div class="flex items-center border-b border-teal-500 py-2">
                  <input class="appearance-none border-2 border-gray-200 rounded py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-blue-500" type="text" aria-label="Full name" name="name" value="{{ $user->name ?? ''}}">
               </div>
            </div>
         </div>

         <div class="md:flex md:items-center">
            <div class="md:w-1/3">
               <label class="block text-gray-700 font-semibold md:text-right mb-1 md:mb-0 pr-4" for="inline-jarak">
                  Email
               </label>
            </div>
            <div class="md:w-2/3">
               <div class="flex items-center border-b border-teal-500 py-2">
                  <input class="appearance-none border-2 border-gray-200 rounded py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-blue-500" type="text" aria-label="Full name" name="email" value="{{ $user->email ?? ''}}">
               </div>
            </div>
         </div>

         <div class="md:flex md:items-center">
            <div class="md:w-1/3">
               <label class="block text-gray-700 font-semibold md:text-right mb-1 md:mb-0 pr-4" for="inline-jarak">
                  Password
               </label>
            </div>
            <div class="md:w-2/3">
               <div class="flex items-center border-b border-teal-500 py-2">
                  <input name="password" id="password" type="password" class="form-control" value="" placeholder="(biarkan kosong jika tidak ingin mengubah)">
               </div>
            </div>
         </div>

         <div class="md:flex md:items-center">
            <div class="md:w-1/3">
               <label class="block text-gray-700 font-semibold md:text-right mb-1 md:mb-0 pr-4" for="inline-jarak">
                  Role
               </label>
            </div>
            <div class="md:w-2/3">
               <div class="flex items-center border-b border-teal-500 py-2">
                  <select name="role_id" class="block appearance-none w-50 bg-white border border-gray-400 hover:border-gray-500 px-4 py-2 pr-8 rounded shadow leading-tight focus:outline-none focus:shadow-outline mr-3">
                     <option value="{{ $user->roles->first()->id }}" selected>{{ $user->roles->first()->name }}</option>
                     @foreach(\Spatie\Permission\Models\Role::whereNotIn('name', ['sadmin', 'admin'] )->get() as $role)
                     <option value="{{ $role->id }}">{{ $role->name }}</option>
                     @endforeach
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

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.6.4/jquery.min.js" integrity="sha512-SW0bB7zYONzOFdTogLM8mF+lpvSaPH55g+RyyV8+dRZkiW5n/c1gNgGk5i2xfzDLTmPHvSCqsaiEoZJDiToTWg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>