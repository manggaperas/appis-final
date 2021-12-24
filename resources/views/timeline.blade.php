<x-app-layout>
    <x-slot name="title">
        Timeline
    </x-slot>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Lini Masa') }}
        </h2>
    </x-slot>

    <div class="py-8">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="grid grid-cols-12 gap-6">
                        <div class="col-span-9">
                            <div class="space-y-6">
                                @foreach ($posts as $post)
                                <div class="flex ">
                                    <div class="font-semibold">
                                        {{ $post->user->name }}
                                    </div>
                                    <div class="leading-relaxed">
                                        {{ $post->body }}
                                    </div>
                                    <div class="text-sm text-gray-600">
                                        {{-- {{ $post->created_at->format("d F, Y") }} --}}
                                        {{ $post->created_at->diffForHumans() }}
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                        <div class="col-span-3">
                            <div class="border p-5 rounded-xl">
                                <h1 class="font-semibold mb-5">Recently Update</h1>
                                <div class="flex items-center">
                                    <div class="font-semibold">
                                        A name of user
                                    </div>
                                    <div class="text-sm text-gray-600">
                                        A second ago . . .
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
