<?php

namespace App\View\Components\Aside;

use App\Models\Post;
use App\Models\Category;
use Illuminate\View\Component;
use Illuminate\Database\Eloquent\Collection;

class Categories extends Component
{
    public Collection $categories;
    public int $uncategorized;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->categories = Category::withCount('posts')->get();
        $this->uncategorized = Post::doesntHave('categories')->count();
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.aside.categories');
    }
}
