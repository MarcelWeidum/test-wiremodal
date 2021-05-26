<?php

namespace App\Http\Livewire;

use LivewireUI\Modal\ModalComponent;

class EditUser extends ModalComponent
{
    public $userId;

    public function mount($userId)
    {
        $this->userId = $userId;
    }

    public function render()
    {
        return view('livewire.edit-user');
    }
}
