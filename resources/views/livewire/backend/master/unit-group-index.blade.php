<div>
    <div class="p-6 relative overflow-x-auto shadow-md sm:rounded-lg">
        <h2 class=" my-6 text-2xl font-semibold text-gray-700
        dark:text-gray-200">
            Dokument Group
        </h2>
        <div class="px-4 py-3 mt-4 mb-8 bg-white rounded-lg shadow-md dark:bg-gray-800">
            <label class="block text-sm">
                <span class="text-gray-700 dark:text-gray-400">Nama Dokument Group</span>
                <input name="nama_dokument_group" wire:model.defer="nama_dokument_group"
                    class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-green-400 focus:outline-none focus:shadow-outline-green dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                    placeholder="Nama Dokument Group" />
                    @error('nama_dokument_group')
                    <div class="mb-2 text-sm text-red-700  rounded-lg dark:bg-red-200 dark:text-red-800"
                            role="alert">
                            <span class="font-medium"></span>{{ $message }}
                        </div>
                    @enderror
            </label>

            @if ($editMode)
            @php
              if ($aktif=='Y') {
                  $chek1 = 'checked';
                  $chek2 = '';
              } else {
                $chek1 = '';
                  $chek2 = 'checked';
              }
                
            @endphp
                <div class="mt-4 text-sm">
                    <span class="text-gray-700 dark:text-gray-400">
                        Aktifasi
                    </span>
                    <div class="mt-2">
                        <label class="inline-flex items-center text-gray-600 dark:text-gray-400">
                            <input type="radio"
                                class="text-green-600 form-radio focus:border-green-400 focus:outline-none focus:shadow-outline-green dark:focus:shadow-outline-gray"
                                name="aktif" wire:model.defer="aktif" value="Y" {!! $chek1 !!}/>
                            <span class="ml-2">Aktif</span>
                        </label>
                        <label class="inline-flex items-center ml-6 text-gray-600 dark:text-gray-400">
                            <input type="radio"
                                class="text-green-600 form-radio focus:border-green-400 focus:outline-none focus:shadow-outline-green dark:focus:shadow-outline-gray"
                                name="aktif" wire:model.defer="aktif" value="N" {!! $chek2 !!}/>
                            <span class="ml-2">Non Aktif</span>
                        </label>
                    </div>
                </div>
            @endif

            <div class="flex mt-6 text-sm">
                @if ($editMode)
                    <button wire:click="update"
                        class="px-3 py-1 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-blue-600 border border-transparent rounded-md active:bg-blue-600 hover:bg-blue-700 focus:outline-none focus:shadow-outline-blue">
                        Update
                    </button>
                    <input type="hidden" wire:model="Id">
                @else
                    <button wire:click="store"
                        class="px-3 py-1 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-blue-600 border border-transparent rounded-md active:bg-blue-600 hover:bg-blue-700 focus:outline-none focus:shadow-outline-blue">
                        Simpan
                    </button>
                @endif

            </div>
            <div class="mt-4 mb-4 relative overflow-x-auto shadow-md sm:rounded-lg">
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
                                Nama Dokument Group
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Aktif
                            </th>

                            <th scope="col" class="px-6 py-3">
                                <span class="sr-only">Edit</span>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($data as $d)
                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                            <th scope="row"
                                class="px-6 py-4 font-medium text-gray-900 dark:text-white whitespace-nowrap">
                                {{$no}}
                            </th>
                            <td class="px-6 py-4">
                                {{$d->nama_dokument_group}}
                            </td>
                            <td class="px-6 py-4">
                                {{$d->aktif}}
                            </td>

                            <td class="px-6 py-4 text-right">
                                <button
                                wire:click="edit({{$d->id}})"
                                    class="px-3 py-1 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-red-600 border border-transparent rounded-md active:bg-red-600 hover:bg-red-700 focus:outline-none focus:shadow-outline-blue">
                                Edit</button>
                            </td>
                            @php
                            $no++;    
                            @endphp
                        </tr>
                        @empty
                        <tr>
                            <th class="px-6 py-4">No Results</th>
                        </tr>
                    @endforelse
                    </tbody>
                </table>
                <div class="px-4 py-3 mb-5 mt-5 bg-white rounded-lg shadow-md dark:bg-gray-800">
                    {{ $data->links() }}
                </div>

            </div>
        </div>
    </div>
