<?php

namespace App\Http\Livewire\Admin\Category;

use App\Models\Prodi;
use Livewire\Component;
use Livewire\WithPagination;
// use Illuminate\Support\Facades\File;

class Index extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    public $prodi_id;

    public function deleteProdi($id)
    {
        $this->prodi_id = $id;
    }

    public function destroyProdi()
    {
        $category = Prodi::find($this->id);
        $category->delete();
        session()->flash('message', 'Prodi deleted successfully');
        $this->dispatchBrowserEvent('close-modal');
    }
}
