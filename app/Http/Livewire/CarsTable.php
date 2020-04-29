<?php

namespace App\Http\Livewire;

use App\Car;
use Livewire\Component;
use Livewire\WithPagination;

class CarsTable extends Component
{
    use WithPagination;

    public $perPage = 10;
    public $sortField = 'updated_at';
    public $sortAsc = true;
    public $search = '';
    public $item = null;

    public function sortBy($field)
    {
        if ($this->sortField === $field) {
            $this->sortAsc = ! $this->sortAsc;
        } else {
            $this->sortAsc = true;
        }

        $this->sortField = $field;
    }

    public function showDetailCar($id){
        $this->item = Car::find($id);
    }

    public function render()
    {
        return view('livewire.cars-table', [
            'cars' => Car::search($this->search)
                ->orderBy($this->sortField, $this->sortAsc ? 'asc' : 'desc')
                ->paginate($this->perPage),
        ]);
    }
}