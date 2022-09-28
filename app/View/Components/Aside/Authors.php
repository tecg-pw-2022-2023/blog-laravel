<?php

namespace App\View\Components\Aside;

use App\Models\User;
use Illuminate\View\Component;
use Illuminate\Database\Eloquent\Collection;

class Authors extends Component
{

    public Collection $authors;
    public int $authors_count;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        $query = User::withCount(['posts', 'comments']);
        $this->authors_count = User::count();
        if (request()->has('aside-expanded') && request('aside-expanded') === 'authors') {
            $this->authors = $query->get();
        } else {
            $this->authors = $query->take(5)->get();
        }
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
