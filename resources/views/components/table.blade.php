@props([
    'headings' => collect([]),
    'data' => collect([]),
    'page' => 1,
    'numbering' => true
])

<!-- responsive table-->
<table class="items-center w-full mx-auto table-auto">
    <thead class="justify-between">
        <tr class="bg-green-600">
            @if ($numbering)
                <th class="p-2">
                    <span class="text-gray-100 font-semibold">No</span>
                </th>
            @endif
            @foreach ($headings as $key => $heading)
                <th class="px-2 py-2">
                    <span class="text-gray-100 font-semibold">{{ $heading }}</span>
                </th>
            @endforeach
        </tr>
    </thead>
    <tbody class="bg-gray-200">
        @forelse ($data as $index => $row)
            <tr class="bg-white border-b-2 border-gray-200">
                @if ($numbering)
                    <td class="p-4">
                        {{ ($index+1)*$page }}
                    </td>
                @endif
                @foreach ($headings as $key => $heading)
                    <td class="text-center px-12 py-2">
                        {{ is_array($row) ? $row[$key] : $row->{$key} }}
                    </td>
                @endforeach
            </tr>
        @empty
            <tr class="bg-white border-b-2 border-gray-200">
                <td class="px-16 py-5 text-center" colspan="{{ $numbering ? count($headings) + 1 : count($headings) }}">
                    Belum ada data
                </td>
            </tr>
        @endforelse
    </tbody>
</table>