<div>

    <div class="p-6 relative overflow-x-auto shadow-md sm:rounded-lg">
        <h2 class=" my-6 text-2xl font-semibold text-gray-700
        dark:text-gray-200">
            Master Dokument
        </h2>
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
        <div class="px-4 py-3 mt-4 mb-8 bg-white rounded-lg shadow-md dark:bg-gray-800">
            <label class="block text-sm mt-4">
                <span class="text-gray-700 dark:text-gray-400">Nomor Dokument</span>
                <input name="nama_dokument_jenis" wire:model.defer="nomor_dokument"
                    class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-green-400 focus:outline-none focus:shadow-outline-green dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                    placeholder="Nomor Dokument" />
                @error('nomor_dokument')
                    <div class="mb-2 text-sm text-red-700  rounded-lg dark:bg-red-200 dark:text-red-800" role="alert">
                        <span class="font-medium"></span>{{ $message }}
                    </div>
                @enderror
            </label>
            <label class="block text-sm mt-4">
                <span class="text-gray-700 dark:text-gray-400">Nama Dokument</span>
                <input name="nama_dokument_jenis" wire:model.defer="nama_dokument"
                    class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-green-400 focus:outline-none focus:shadow-outline-green dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                    placeholder="Nama Dokument" />
                @error('nama_dokument')
                    <div class="mb-2 text-sm text-red-700  rounded-lg dark:bg-red-200 dark:text-red-800" role="alert">
                        <span class="font-medium"></span>{{ $message }}
                    </div>
                @enderror
            </label>
            <label class="block text-sm mt-4">
                <span class="text-gray-700 dark:text-gray-400">Dokument Group</span>
                <select name="dokument_group_id" wire:model.defer="dokument_group_id"
                    class="form-select appearance-none
                    block
                    w-full
                    px-3
                    py-1.5
                    text-base
                    font-normal
                    text-gray-700
                    bg-white bg-clip-padding bg-no-repeat
                    border border-solid border-gray-300
                    rounded
                    transition
                    ease-in-out
                    m-0
                    focus:text-gray-700 focus:bg-white focus:border-green-600 focus:outline-none"
                    aria-label="Default select example" placeholder="Nama Dokument" />
                <option>--Pilih Group--</option>
                @foreach ($group as $item)
                    <option value="{{ $item->id }}">{{ $item->nama_dokument_group }}</option>
                @endforeach
                </select>
                @error('dokument_group_id')
                    <div class="mb-2 text-sm text-red-700  rounded-lg dark:bg-red-200 dark:text-red-800" role="alert">
                        <span class="font-medium"></span>{{ $message }}
                    </div>
                @enderror
            </label>

            <label class="block text-sm mt-4">
                <span class="text-gray-700 dark:text-gray-400">Dokument Katagori</span>
                <select name="dokument_jenis_id" wire:model.defer="dokument_jenis_id"
                    class="form-select appearance-none
                    block
                    w-full
                    px-3
                    py-1.5
                    text-base
                    font-normal
                    text-gray-700
                    bg-white bg-clip-padding bg-no-repeat
                    border border-solid border-gray-300
                    rounded
                    transition
                    ease-in-out
                    m-0
                    focus:text-gray-700 focus:bg-white focus:border-green-600 focus:outline-none"
                    aria-label="Default select example" placeholder="Nama Dokument" />
                <option>--Pilih Katagori--</option>
                @foreach ($jenis as $item)
                    <option value="{{ $item->id }}">{{ $item->nama_dokument_jenis }}</option>
                @endforeach
                </select>
                @error('dokument_jenis_id')
                    <div class="mb-2 text-sm text-red-700  rounded-lg dark:bg-red-200 dark:text-red-800" role="alert">
                        <span class="font-medium"></span>{{ $message }}
                    </div>
                @enderror
            </label>
            <label class="block text-sm mt-4">
                <span class="text-gray-700 dark:text-gray-400">File</span>
                <input type="file" name="file" wire:model="file"
                    class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-green-400 focus:outline-none focus:shadow-outline-green dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                    placeholder="Nama Dokument" />
                @error('file')
                    <div class="mb-2 text-sm text-red-700  rounded-lg dark:bg-red-200 dark:text-red-800" role="alert">
                        <span class="font-medium"></span>{{ $message }}
                    </div>
                @enderror
            </label>
            <label class="block text-sm mt-4">
                <span class="text-gray-700 dark:text-gray-400">Masa Berlaku</span>
                <input type="date" name="masa_berlaku" wire:model.defer="masa_berlaku"
                    class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-green-400 focus:outline-none focus:shadow-outline-green dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                    placeholder="Masa Berlaku" />
                @error('masa_berlaku')
                    <div class="mb-2 text-sm text-red-700  rounded-lg dark:bg-red-200 dark:text-red-800" role="alert">
                        <span class="font-medium"></span>{{ $message }}
                    </div>
                @enderror
            </label>
            <label class="block text-sm mt-4">
                <span class="text-gray-700 dark:text-gray-400">Keterangan</span>
                <textarea name="keterangan" wire:model.defer="keterangan"
                    class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-green-400 focus:outline-none focus:shadow-outline-green dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                    placeholder="Keterangan" />
            </textarea>
                @error('keterangan')
                    <div class="mb-2 text-sm text-red-700  rounded-lg dark:bg-red-200 dark:text-red-800" role="alert">
                        <span class="font-medium"></span>{{ $message }}
                    </div>
                @enderror
            </label>
            @if ($editMode)
                @php
                    if ($aktif == 'Y') {
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
                                name="aktif" wire:model.defer="aktif" value="Y" {!! $chek1 !!} />
                            <span class="ml-2">Aktif</span>
                        </label>
                        <label class="inline-flex items-center ml-6 text-gray-600 dark:text-gray-400">
                            <input type="radio"
                                class="text-green-600 form-radio focus:border-green-400 focus:outline-none focus:shadow-outline-green dark:focus:shadow-outline-gray"
                                name="aktif" wire:model.defer="aktif" value="N" {!! $chek2 !!} />
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

        </div>
