{{-- <div>

    <div class="flex flex-col">
        <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">

            <div class="container px-6 mx-auto md:container md:mx-auto ">

                <h2 class=" my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">
                    Dashboard
                </h2>
                <div class="px-4 py-3 mb-8 bg-white rounded-lg shadow-md dark:bg-gray-800">
                    <div class="col-md-12">
                        <div class="card">
                            <div>
                                @if (session()->has('user-message'))
                                <div class="alert alert-success">
                                    {{ session('user-message') }}
                                </div>
                                @endif
                            </div>
                            Dokument Katagory
                            <div class="flex flex-row">
                                <div
                                    class="p-6 max-w-sm bg-white rounded-lg border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700 basis-1/4">

                                    <a href="">
                                        <h5
                                            class="mb-2 text-2xl text-center font-bold tracking-tight text-gray-900 dark:text-white">
                                            {{ $dokument_jenis_1_counter }}</h5>
                                    </a>
                                    <h2 class="text-center text-xl">{{ $dokument_jenis_1 }}</h2>

                                </div>
                                <div
                                    class="p-6 max-w-sm bg-white rounded-lg border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700 basis-1/4">
                                    <a href="">
                                        <h5
                                            class="mb-2 text-2xl text-center font-bold tracking-tight text-gray-900 dark:text-white">
                                            {{ $dokument_jenis_2_counter }}</h5>
                                    </a>
                                    <h2 class="text-center text-xl">{{ $dokument_jenis_2 }}</h2>

                                </div>
                                <div
                                    class="p-6 max-w-sm bg-white rounded-lg border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700 basis-1/4">
                                    <a href="">
                                        <h5
                                            class="mb-2 text-2xl text-center font-bold tracking-tight text-gray-900 dark:text-white">
                                            {{ $dokument_jenis_3_counter }}
                                        </h5>
                                    </a>
                                    <h2 class="text-center text-xl">{{ $dokument_jenis_3 }}</h2>

                                </div>
                                <div
                                    class="p-6 max-w-sm bg-white rounded-lg border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700 basis-1/4">
                                    <a href="">
                                        <h5
                                            class="mb-2 text-2xl text-center font-bold tracking-tight text-gray-900 dark:text-white">
                                            {{ $dokument_jenis_4_counter }}
                                        </h5>
                                    </a>
                                    <h2 class="text-center text-xl">{{ $dokument_jenis_4 }}</h2>

                                </div>
                            </div>

                            <div class="w-full overflow-hidden rounded-lg shadow-xs mt-5">
                                <div class="w-full overflow-x-auto">
                                    {{-- <table class="min-w-full whitespace-no-wrap" wire:loading.remove>
                                        <thead>
                                            <tr
                                                class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
                                                <th class="px-4 py-3">#Id</th>
                                                <th class="px-4 py-3">NIK</th>
                                                <th class="px-4 py-3">Full Name</th>
                                                <th class="px-4 py-3">Email</th>
                                                <th class="px-4 py-3">Posisi</th>
                                                <th class="px-4 py-3">Role</th>
                                                <th class="px-4 py-3">Manage</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                            <tr class="text-gray-700 dark:text-gray-400">
                                                <th class="px-4 py-3">{{ $no++ }}</th>

                                                <td class="px-4 py-3">{{ $data->nik }}</td>
                                                <td class="px-4 py-3">
                                                    {{ $data->nama_lengkap }}</td>
                                                <td class="px-4 py-3">{{ $data->user->email }}</td>
                                                <td class="px-4 py-3">{{ $data->perawat_lokasi->nama_lokasi }}
                                                </td>
                                                <td class="px-4 py-3">{{ $data->perawat_role->nama_role }}</td>
                                                <td class="px-4 py-3">

                                                    <a href="{{ url('resume/' . $data->id) }}" target="_BLANK"
                                                        class="px-4 py-2 font-medium leading-5 text-white transition-colors duration-150 bg-blue-600 border border-transparent rounded-lg active:bg-blue-600 hover:bg-blue-700 focus:outline-none focus:shadow-outline-blue"><i
                                                            class="fas fa-fw fa-edit"></i>Resume</a>

                                                </td>
                                            </tr>

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div> --}}

<div>
    <div class="p-6 relative overflow-x-auto shadow-md sm:rounded-lg">
        <div class="flex flex-col">

            <h2 class=" my-6 text-2xl font-semibold text-gray-700
        dark:text-gray-200">
                Dokument Katagori
            </h2>
            <div class="px-4 py-3 mt-4 mb-8 bg-white rounded-lg shadow-md dark:bg-gray-800">

                <div class="flex flex-row">
                    <div
                        class="p-6 max-w-sm bg-white rounded-lg border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700 basis-1/4">

                        <a href="{{url('dashboard-detail/1')}}">
                            <h5
                                class="mb-2 text-2xl text-center font-bold tracking-tight text-gray-900 dark:text-white">
                                {{ $dokument_jenis_1_counter }}</h5>
                        </a>
                        <h2 class="text-center text-xl">{{ $dokument_jenis_1 }}</h2>

                    </div>
                    <div
                        class="p-6 max-w-sm bg-white rounded-lg border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700 basis-1/4">
                        <a href="{{url('dashboard-detail/2')}}">
                            <h5
                                class="mb-2 text-2xl text-center font-bold tracking-tight text-gray-900 dark:text-white">
                                {{ $dokument_jenis_2_counter }}</h5>
                        </a>
                        <h2 class="text-center text-xl">{{ $dokument_jenis_2 }}</h2>

                    </div>
                    <div
                        class="p-6 max-w-sm bg-white rounded-lg border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700 basis-1/4">
                        <a href="{{url('dashboard-detail/3')}}">
                            <h5
                                class="mb-2 text-2xl text-center font-bold tracking-tight text-gray-900 dark:text-white">
                                {{ $dokument_jenis_3_counter }}
                            </h5>
                        </a>
                        <h2 class="text-center text-xl">{{ $dokument_jenis_3 }}</h2>

                    </div>
                    <div
                        class="p-6 max-w-sm bg-white rounded-lg border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700 basis-1/4">
                        <a href="{{url('dashboard-detail/4')}}">
                            <h5
                                class="mb-2 text-2xl text-center font-bold tracking-tight text-gray-900 dark:text-white">
                                {{ $dokument_jenis_4_counter }}
                            </h5>
                        </a>
                        <h2 class="text-center text-xl">{{ $dokument_jenis_4 }}</h2>

                    </div>

                    <div
                        class="p-6 max-w-sm bg-white rounded-lg border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700 basis-1/4">
                        <a href="{{url('dashboard-detail/5')}}">
                            <h5
                                class="mb-2 text-2xl text-center font-bold tracking-tight text-gray-900 dark:text-white">
                                {{ $dokument_jenis_5_counter }}
                            </h5>
                        </a>
                        <h2 class="text-center text-xl">{{ $dokument_jenis_5 }}</h2>

                    </div>
                </div>

                <h2 class=" my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">
                    Dokument Unit
                </h2>
                <div class="w-full overflow-hidden rounded-lg shadow-xs mt-5">
                    <div class="w-full overflow-x-auto">
                        <table class="min-w-full whitespace-no-wrap" wire:loading.remove>
                            <thead>
                                <tr
                                    class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
                                    <th class="px-4 py-3">#Id</th>
                                    <th class="px-4 py-3">Nama Unit</th>
                                    <th class="px-4 py-3">Jumlah Dokument</th>
                                    <th class="px-4 py-3">Cek Dokument</th>

                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($data as $dd)
                                <tr class="text-gray-700 dark:text-gray-400">
                                    <th class="px-4 py-3">{{ $no++ }}</th>

                                    <td class="px-4 py-3">{{ $dd->nama_dokument_group }}</td>
                                    <td class="px-4 py-3">
                                        {{ jumlah_dokument_unit($dd->id) }}</td>

                                    <td>
                                        <a href="{{ url('document-unit/' . $dd->id) }}"
                                            class="px-4 py-2 font-medium leading-5 text-white transition-colors duration-150 bg-blue-600 border border-transparent rounded-lg active:bg-blue-600 hover:bg-blue-700 focus:outline-none focus:shadow-outline-blue"><i
                                                class="fas fa-fw fa-edit"></i>Lihat Dokument</a>

                                    </td>
                                </tr>
                                @endforeach


                            </tbody>
                        </table>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>