<?php

namespace App\Http\Livewire;

use Livewire\Component;

use App\Models\Mantenance\Service;
use App\Models\GestionPpSky\Category;
use App\Models\Mantenance\Level;
use Livewire\WithPagination;

class ServicesIndex extends Component
{
    use WithPagination;

    public $category_id;
    public $service_id;
    public $level_id;

    public function render()
    {
        $categories = Category::all();
        $levels = Level::all();
        $servs = Service::all();
        //$subcategories = Subcategory::all();

        $services = Service::where('status', 3)
                            ->category($this->category_id)
                            ->level($this->level_id)
                            ->service($this->service_id)
                            ->latest('id')
                            ->paginate(8);

        return view('livewire.services-index', compact('services', 'categories', 'levels','servs'));
    }

    public function resetFilters(){
        $this->reset(['category_id','level_id', 'service_id']);
    }
}
