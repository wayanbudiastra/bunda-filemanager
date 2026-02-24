<div>

    <div class="p-6 relative overflow-x-auto shadow-md sm:rounded-lg bg-white">
        <div class="px-4 py-3 mb-8 bg-white rounded-lg shadow-md dark:bg-gray-800">
            <input type="search" wire:model="search"
                class="block w-full mt-1 text-sm border-blue-600 dark:text-gray-300 dark:bg-gray-700 focus:border-blue-400 focus:outline-none focus:shadow-outline-blue form-input"
                placeholder="Cari Nomor Dokument atau Nama Dokument..." />
            <div class="col" wire:loading>
                <div class="spinner-border" role="status">
                    <span class=" text-sm border-blue-600 dark:text-gray-300">Loading...</span>
                </div>
            </div>
        </div>
        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        No
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Nomor Dokument
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Nama Dokument
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Jenis
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Group
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Keterangan
                    </th>
                     
                     <th scope="col" class="px-6 py-3">
                        Masa Aktif
                    <th scope="col" class="px-6 py-3">
                        <span class="sr-only">Manage</span>
                    </th>
                </tr>
            </thead>
            <tbody>
                @forelse($data as $d)
                    <tr
                        class="border-b dark:bg-gray-800 dark:border-gray-700 odd:bg-white even:bg-gray-50 odd:dark:bg-gray-800 even:dark:bg-gray-700">

                        <th scope="row"
                            class="px-6 py-4 font-medium text-gray-900 dark:text-white whitespace-nowrap">
                            {{ $no }}
                        </th>
                        <td class="px-6 py-4">
                            {{ $d->nomor_dokument }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $d->nama_dokument }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $d->dokument_jenis->nama_dokument_jenis }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $d->dokument_group->nama_dokument_group }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $d->keterangan }}
                        </td>
                        <td class="px-6 py-4">
                            {{ masa_aktif($d->masa_berlaku) }} Hari
                        </td>
                        <td class="px-6 py-4 text-right">
                            <button wire:click="edit({{ $d->id }})"
                                class="px-3 py-1 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-red-600 border border-transparent rounded-md active:bg-red-600 hover:bg-red-700 focus:outline-none focus:shadow-outline-blue" title="View Dokument">
                                 <i class="fas fa-fw fa-eye"></i></button>
                            @if (auth()->user()->dokumen_manager == 'Y')
                                @if ($d->aktif == 'Y')
                                    <button wire:click="nonaktifkan({{ $d->id }})"
                                        class="px-3 py-1 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-green-600 border border-transparent rounded-md active:bg-green-600 hover:bg-green-700 focus:outline-none focus:shadow-outline-blue" title="Non-Aktifkan Dokument">
                                         <i class="fas fa-fw fa-times"></i></button>
                                @else
                                    <button wire:click="aktifkan({{ $d->id }})"
                                        class="px-3 py-1 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-green-600 border border-transparent rounded-md active:bg-green-600 hover:bg-green-700 focus:outline-none focus:shadow-outline-blue" title="Non-Aktifkan Dokument">
                                        <i class="fas fa-fw fa-check"></i></button>
                                @endif

                                <button wire:click="update_data({{ $d->id }})"
                                    class="px-3 py-1 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-blue-600 border border-transparent rounded-md active:bg-blue-600 hover:bg-blue-700 focus:outline-none focus:shadow-outline-blue" title="Non-Aktifkan Dokument">
                                    <i class="fas fa-fw fa-pencil"></i></button>
                            @endif
                        </td>
                    </tr>
                    @php
                        $no++;
                    @endphp
                @empty
                    <tr>
                        <th class="px-6 py-4">No Results</th>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>

</div>
