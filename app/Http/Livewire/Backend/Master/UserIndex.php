<?php

namespace App\Http\Livewire\Backend\Master;

use App\Models\User;
use Exception;
use Livewire\Component;
use Livewire\WithPagination;

class UserIndex extends Component
{

    use WithPagination;
    public $search = '';
    public $userId, $level, $approval, $aktif;
    public $selected = '';
    public $editMode = false;

    public function showEditModal($id)
    {
        $this->reset();
        $this->editMode = true;
        // find user
        $this->userId = $id;
        // load user
        $this->loadUser();
        // show Modal
        $this->dispatchBrowserEvent('modal', ['modalId' => '#userModal', 'actionModal' => 'show']);
    }
    public function loadUser()
    {
        $user = User::find($this->userId);
        $this->level = $user->level;
        $this->approval = $user->approval;
    }

    public function updateUser()
    {
        $validated = $this->validate([
            'level' => 'required',
            'approval' => 'required',
        ]);
        $user = User::find($this->userId);
        $user->update($validated);
        $this->reset();
        $this->dispatchBrowserEvent('modal', ['modalId' => '#userModal', 'actionModal' => 'hide']);
        session()->flash('user-message', 'User successfully updated');
    }

    public function aktif($id){
        try{
            $data = User::find($id);
            $data->update([
                'dokumen_manager' => 'Y' 
            ]);
            session()->flash('success', 'User successfully updated');
        }catch(Exception $e){
            session()->flash('error', 'terjadi Kesalahan....'.$e);
        }
    }

    public function nonaktif($id){
        try{
            $data = User::find($id);
            $data->update([
                'dokumen_manager' => 'N' 
            ]);
            session()->flash('success', 'User successfully updated');
        }catch(Exception $e){
            session()->flash('error', 'terjadi Kesalahan....'.$e);
        }
    }

    public function render()
    {
        $users = User::paginate(10);
        if (strlen($this->search) > 2) {
            $this->resetPage();
            $users = User::where('username', 'like', "%{$this->search}%")->orWhere('email', 'like', "%{$this->search}%")->orWhere('first_name', 'like', "%{$this->search}%")->orWhere('last_name', 'like', "%{$this->search}%")->paginate(10);
        }

        return view('livewire.backend.master.user-index', [
            'users' => $users
        ])->layout('layouts.main');
    }
}