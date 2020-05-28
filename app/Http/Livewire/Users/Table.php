<?php

namespace App\Http\Livewire\Users;

use App\User;
use Livewire\Component;
use Livewire\WithPagination;

class Table extends Component
{
    use WithPagination;

    public $updatesQueryString = ['page'];

    public $perPage = 10;

    public $query = '';

    public function render()
    {
        $users = User::where('name', 'like', "%$this->query%")
                    ->orWhere('username', 'like', "%$this->query%")
                    ->orWhere('email', 'like', "%$this->query%")
                    ->orWhere('occupation', 'like', "%$this->query%")
                    ->latest()
                    ->paginate($this->perPage);

        $this->page > $users->lastPage() ? $this->page = $users->lastPage() : true;

        return view('livewire.users.table', compact('users'));
    }
}
