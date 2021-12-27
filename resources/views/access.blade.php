<x-app-layout>
    <x-slot name="title">
        Account Manager
    </x-slot>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Pengaturan Akun Lanjutan') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    {{-- Pengaturan Lanjut Akun --}}
                    {{-- <x-backend.card>
                        <x-slot name="header">
                            @lang('User Management')
                        </x-slot>
                
                        @if ($logged_in_user->hasAllAccess())
                            <x-slot name="headerActions">
                                <x-utils.link
                                    icon="c-icon cil-plus"
                                    class="card-header-action"
                                    :href="route('admin.auth.user.create')"
                                    :text="__('Create User')"
                                />
                            </x-slot>
                        @endif
                
                        <x-slot name="body">
                            <livewire:users-table />
                        </x-slot>
                    </x-backend.card> --}}

                    <x-table :headings="$headings" :data="$data" />
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
