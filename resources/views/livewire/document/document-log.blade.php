<div>

    <div class="p-6 relative overflow-x-auto shadow-md sm:rounded-lg bg-white">
        <div class="px-4 py-3 mb-8 bg-white rounded-lg shadow-md dark:bg-gray-800">
            {{-- <input type="search" wire:model="search"
                class="block w-full mt-1 text-sm border-blue-600 dark:text-gray-300 dark:bg-gray-700 focus:border-blue-400 focus:outline-none focus:shadow-outline-blue form-input"
                placeholder="Cari Nomor Dokument atau Nama Dokument..." /> --}}
            <h4>Dokument Log Akses</h4>
            <div class="col" wire:loading>
                <div class="spinner-border" role="status">
                    <span class=" text-sm border-blue-600 dark:text-gray-300">Loading...</span>
                </div>
            </div>
        </div>
        <div>
            @if (session()->has('success'))
                <div class="p-4 mb-4 text-sm text-green-700 bg-green-100 rounded-lg dark:bg-green-200 dark:text-green-800"
                    role="alert">
                    <span class="font-medium">Success!</span> {{ session('success') }}
                </div>
            @endif
            @if (session()->has('error'))
                <div class="p-4 mb-4 text-sm text-red-700 bg-red-100 rounded-lg dark:bg-red-200 dark:text-red-800"
                    role="alert">
                    <span class="font-medium">Danger alert!</span> {{ session('error') }}
                </div>
            @endif
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
                        User
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Keterangan
                    </th>
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
                            {{ $d->dokument->nomor_dokument }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $d->dokument->nama_dokument }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $d->dokument->dokument_jenis->nama_dokument_jenis }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $d->dokument->dokument_group->nama_dokument_group }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $d->user->first_name }} {{ $d->user->last_name }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $d->created_at }}
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
        {{$data->links()}}
    </div>

</div>
