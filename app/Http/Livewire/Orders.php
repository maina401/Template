<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Auth;
use Laravel\Jetstream\RedirectsActions;
use Livewire\Component;

class Orders extends Component
{
    use RedirectsActions;

    /**
     * The component's state.
     *
     * @var array
     */
    public $state = [];



    public function getUserProperty()
    {
        return Auth::user();
    }

    public function render()
    {
        return view('livewire.orders');
    }
}
