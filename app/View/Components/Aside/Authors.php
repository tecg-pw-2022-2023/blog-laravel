<?php

namespace App\View\Components\Aside;

use App\Models\User;
use Illuminate\View\Component;
use Illuminate\Database\Eloquent\Collection;

class Authors extends Component
{

    public Collection $authors;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->authors = User::withCount(['posts', 'comments'])->get();
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.aside.authors');
    }
}
