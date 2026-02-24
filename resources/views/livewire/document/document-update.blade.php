<div class="container px-6 md:container md:mx-auto mt-4">
    <div class="mt-10 sm:mt-0">
        <div class="md:grid md:grid-cols-1 md:gap-6">
            <div class="md:col-span-1">
                <div class="px-6 sm:px-0  justify-between text-center">
                    <h3 class="text-lg font-medium leading-8 text-gray-900">
                        Update Data Dokument
                    </h3>
                </div>
            </div>
            <div class="mt-5 md:mt-0 md:col-span-2">
                <div class="shadow overflow-hidden sm:rounded-md">
                    <div class="px-4 py-5 bg-white sm:p-6">
                        <div class="grid grid-cols-6 gap-6">
                            <div class="col-span-6">
                                <div class="mb-3">
                                    <label for="exampleText0" class="form-label inline-block mb-2 text-gray-700">Nomor
                                        Dokument</label>
                                    <input type="text"
                                        class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0
                                    focus:text-gray-700 focus:bg-white focus:border-green-300 focus:outline-none"
                                        aria-label="Default select example" name="nomor_dokument"
                                        wire:model.defer="nomor_dokument">
                                    @error('nomor_dokument')
                                        <div class="mb-2 text-sm text-red-700  rounded-lg dark:bg-red-200 dark:text-red-800"
                                            role="alert">
                                            <span class="font-medium"></span>{{ $message }}
                                        </div>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label for="exampleText0" class="form-label inline-block mb-2 text-gray-700">Nama
                                        Dokument</label>
                                    <input type="text"
                                        class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0
                                    focus:text-gray-700 focus:bg-white focus:border-green-300 focus:outline-none"
                                        aria-label="Default select example" name="nama_dokument"
                                        wire:model.defer="nama_dokument">
                                    @error('nama_dokument')
                                        <div class="mb-2 text-sm text-red-700  rounded-lg dark:bg-red-200 dark:text-red-800"
                                            role="alert">
                                            <span class="font-medium"></span>{{ $message }}
                                        </div>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label for="exampleText0"
                                        class="form-label inline-block mb-2 text-gray-700">Dokument Group</label>

                                    <select
                                        class="form-select form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0
                                                            focus:text-gray-700 focus:bg-white focus:border-green-300 focus:outline-none select2"
                                        aria-label="Default select example" name="dokument_group_id"
                                        wire:model.defer="dokument_group_id" style="height: 110%">
                                        <option value="">-- Pilih Group-</option>
                                        @foreach ($group as $item)
                                            <option value="{{ $item->id }}">
                                                {{ $item->nama_dokument_group }}
                                            </option>
                                        @endforeach

                                    </select>
                                    @error('dokument_group_id')
                                        <div class="mb-2 text-sm text-red-700  rounded-lg dark:bg-red-200 dark:text-red-800"
                                            role="alert">
                                            <span class="font-medium"></span>{{ $message }}
                                        </div>
                                    @enderror
                                </div>






                                <div class="mb-3">
                                    <label for="exampleText0" class="form-label inline-block mb-2 text-gray-700">
                                        Treatment Risk </label>

                                    <select
                                        class="form-select form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0
                                                            focus:text-gray-700 focus:bg-white focus:border-green-300 focus:outline-none select2"
                                        aria-label="Default select example" name="dokument_jenis_id"
                                        wire:model.defer="dokument_jenis_id" style="height: 110%">
                                        <option value="">-- Pilih Jenis Dokument-</option>
                                        @foreach ($jenis as $item)
                                            <option value="{{ $item->id }}">
                                                {{ $item->nama_dokument_jenis }}
                                            </option>
                                        @endforeach

                                    </select>
                                    @error('dokument_jenis_id')
                                        <div class="mb-2 text-sm text-red-700  rounded-lg dark:bg-red-200 dark:text-red-800"
                                            role="alert">
                                            <span class="font-medium"></span>{{ $message }}
                                        </div>
                                    @enderror
                                </div>











                                <div class="mb-3">
                                    <label for="exampleText0"
                                        class="form-label inline-block mb-2 text-gray-700">Keterangan</label>
                                    <textarea rows="6"
                                        class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-green-300 focus:outline-none"
                                        aria-label="Default select example" name="keterangan" wire:model.defer="keterangan"></textarea>

                                    @error('keterangan')
                                        <div class="mb-2 text-sm text-red-700  rounded-lg dark:bg-red-200 dark:text-red-800"
                                            role="alert">
                                            <span class="font-medium"></span>{{ $message }}
                                        </div>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label for="exampleText0" class="form-label inline-block mb-2 text-gray-700">Masa
                                        Berlaku</label>
                                    <input type="date"
                                        class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0
                                    focus:text-gray-700 focus:bg-white focus:border-green-300 focus:outline-none"
                                        aria-label="Default select example" name="masa_berlaku"
                                        wire:model.defer="masa_berlaku">
                                    @error('masa_berlaku')
                                        <div class="mb-2 text-sm text-red-700  rounded-lg dark:bg-red-200 dark:text-red-800"
                                            role="alert">
                                            <span class="font-medium"></span>{{ $message }}
                                        </div>
                                    @enderror
                                </div>


                                {{-- <div class="mb-3">
                                    <label for="exampleText0"
                                        class="form-label inline-block mb-2 text-gray-700">Aktif</label>
                                    <input type="radio" wire:model.defer="aktif" value="Y" name="aktif"
                                        class="form-check-input"> Ya
                                    <input type="radio" wire:model.defer="aktif" value="N" name="aktif"
                                        class="form-check-input"> Tidak

                                    @error('aktif')
                                    <div class="mb-2 text-sm text-red-700  rounded-lg dark:bg-red-200 dark:text-red-800"
                                        role="alert">
                                        <span class="font-medium"></span>{{ $message }}
                                    </div>
                                    @enderror
                                </div> --}}


                                <button wire:click="update"
                                    class="px-4 py-2 font-medium leading-5 text-white transition-colors duration-150 bg-green-600 border border-transparent rounded-lg active:bg-green-600 hover:bg-green-700 focus:outline-none focus:shadow-outline-green"><i
                                        class="fas fa-fw fa-save"></i>Simpan Data</button>
                                <button wire:click="kembali"
                                    class="px-4 py-2 font-medium leading-5 text-white transition-colors duration-150 bg-red-600 border border-transparent rounded-lg active:bg-red-600 hover:bg-red-700 focus:outline-none focus:shadow-outline-red"><i
                                        class="fas fa-fw fa-arrow-right"></i>Kembali</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
