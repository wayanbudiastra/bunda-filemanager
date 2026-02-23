<div>
       
<div class="p-6 relative overflow-x-auto shadow-md sm:rounded-lg">
   
        <h2 class=" my-6 text-2xl font-semibold text-gray-700
        dark:text-gray-200">
            Users - Aksess
        </h2>
        <div class="px-4 py-3 mb-8 bg-white rounded-lg shadow-md dark:bg-gray-800">
            <div class="col-md-12">
                <div class="card">
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
    
                    <div class="px-4 py-3 mb-8 bg-white rounded-lg shadow-md dark:bg-gray-800">
                        <input type="search" wire:model="search"
                            class="block w-full mt-1 text-sm border-blue-600 dark:text-gray-300 dark:bg-gray-700 focus:border-blue-400 focus:outline-none focus:shadow-outline-blue form-input"
                            placeholder="Cari Nama User" />
                        <div class="col" wire:loading>
                            <div class="spinner-border" role="status">
                                <span class=" text-sm border-blue-600 dark:text-gray-300">Loading...</span>
                            </div>
                        </div>
                    </div>
                    <div class="w-full overflow-hidden rounded-lg shadow-xs mt-5">
                        <div class="w-full overflow-x-auto">
                            <table class="w-full whitespace-no-wrap" wire:loading.remove>

                                <thead>
                                    <tr
                                        class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
                                        <th class="px-4 py-3">#Id</th>

                                        <th class="px-4 py-3">NIK</th>
                                        <th class="px-4 py-3">Full Name</th>
                                        <th class="px-4 py-3">Email</th>
                                        <th class="px-4 py-3">Dokument Admin</th>

                                        <th class="px-4 py-3">Manage</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($users as $user)
                                        <tr class="text-gray-700 dark:text-gray-400">
                                            <th class="px-4 py-3">{{ $user->id }}</th>

                                            <td class="px-4 py-3">{{ $user->nik }}</td>
                                            <td class="px-4 py-3">
                                                {{ $user->first_name . ' ' . $user->last_name }}</td>
                                            <td class="px-4 py-3">{{ $user->email }}</td>
                                            <td class="px-4 py-3">{{ $user->dokumen_manager }}</td>

                                            <td class="px-4 py-3">
                                                @if($user->dokumen_manager=='N')
                                                <button wire:click="aktif({{ $user->id }})"
                                                    class="px-4 py-2 font-medium leading-5 text-white transition-colors duration-150 bg-blue-600 border border-transparent rounded-lg active:bg-blue-600 hover:bg-blue-700 focus:outline-none focus:shadow-outline-blue"><i
                                                        class="fas fa-fw fa-edit"></i>Aktifkan</button>
                                                @else
                                                <button wire:click="nonaktif({{ $user->id }})"
                                                    class="px-4 py-2 font-medium leading-5 text-white transition-colors duration-150 bg-red-600 border border-transparent rounded-lg active:bg-red-600 hover:bg-red-700 focus:outline-none focus:shadow-outline-blue"><i
                                                        class="fas fa-fw fa-edit"></i>Non-Aktifkan</button>
                                                @endif
                                                {{-- <button wire:click="deleteUser({{ $user->id }})"
                                            class="btn btn-danger btn-sm"><i class="fas fa-fw fa-trash"></i>Delete</button> --}}
                                            </td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <th>No Results</th>
                                        </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                        <div class="px-4 py-3 mb-5 mt-5 bg-white rounded-lg shadow-md dark:bg-gray-800">
                            {{ $users->links() }}
                        </div>
                    </div>

                    <!-- Modal -->
                    <div class="modal fade fixed top-0 left-0 hidden w-full h-full outline-none overflow-x-hidden overflow-y-auto"
                        id="userModal" tabindex="-1" aria-labelledby="exampleModalCenterTitle" aria-modal="true"
                        role="dialog">
                        <div class="modal-dialog modal-dialog-centered relative w-auto pointer-events-none">
                            <div
                                class="modal-content border-none shadow-lg relative flex flex-col w-full pointer-events-auto bg-white bg-clip-padding rounded-md outline-none text-current">
                                <div
                                    class="modal-header flex flex-shrink-0 items-center justify-between p-4 border-b border-gray-200 rounded-t-md">
                                    <h5 class="text-xl font-medium leading-normal text-gray-800"
                                        id="exampleModalScrollableLabel">
                                        Modal title
                                    </h5>
                                    <button type="button"
                                        class="btn-close box-content w-4 h-4 p-1 text-black border-none rounded-none opacity-50 focus:shadow-none focus:outline-none focus:opacity-100 hover:text-black hover:opacity-75 hover:no-underline"
                                        data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body relative p-4">
                                    <p>This is a vertically centered modal.</p>
                                </div>
                                <div
                                    class="modal-footer flex flex-shrink-0 flex-wrap items-center justify-end p-4 border-t border-gray-200 rounded-b-md">
                                    <button type="button"
                                        class="inline-block px-6 py-2.5 bg-blue-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out"
                                        data-bs-dismiss="modal">
                                        Close
                                    </button>
                                    <button type="button"
                                        class="inline-block px-6 py-2.5 bg-blue-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out ml-1">
                                        Save changes
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- <div class="modal fade" id="userModal" tabindex="-1" aria-labelledby="userModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="userModalLabel">Modal title</h5>
                                    <button type="button" class="close" data-dismiss="modal"
                                        aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <form>


                                        <div class="form-group row">
                                            <label for="countryId"
                                                class="col-md-4 col-form-label text-md-right">{{ __('Level') }}</label>

                                            <div class="col-md-6">
                                                <select wire:model.defer="level" class="custom-select">
                                                    <option selected>Choose</option>
                                                    <option value="admin">admin</option>
                                                    <option value="guest">guest</option>
                                                </select>
                                                @error('level')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                        @if ($editMode)
                                            @php
                                                if ($aktif == 'Y') {
                                                    $aktif = 'checked';
                                                    $aktif2 = '';
                                                } else {
                                                    $aktif = '';
                                                    $aktif2 = 'checked';
                                                }
                                            @endphp
                                            <div class="form-group row">
                                                <label for="countryId"
                                                    class="col-md-4 col-form-label text-md-right">{{ __('Approval') }}</label>

                                                <div class="col-md-6">
                                                    <label class="radio-inline"><input wire:model.defer="approval"
                                                            type="radio" name="approval" {!! $aktif !!}
                                                            value="Y">
                                                        Ya</label>
                                                    <label class="radio-inline"><input wire:model.defer="approval"
                                                            type="radio" name="approval" {!! $aktif2 !!}
                                                            value="N">
                                                        Tidak</label>

                                                    @error('approval')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>
                                        @endif


                                    </form>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary"
                                        wire:click="closeModal">Close</button>
                                    @if ($editMode)
                                        <button type="button" class="btn btn-primary" wire:click="updateUser">Update
                                            User</button>
                                    @else
                                        <button type="button" class="btn btn-primary" wire:click="storeUser">Store
                                            User</button>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div> --}}
                </div>
            </div>

        </div>
    </div>
