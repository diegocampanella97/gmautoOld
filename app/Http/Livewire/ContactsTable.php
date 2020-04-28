<?php

namespace App\Http\Livewire;

use App\Customer;
use Livewire\Component;
use Livewire\WithPagination;

class ContactsTable extends Component
{
    use WithPagination;

    public $perPage = 10;
    public $sortField = 'updated_at';
    public $sortAsc = true;
    public $search = '';
    public $customer = null;


    public function sortBy($field){
        if ($this->sortField === $field) {
            $this->sortAsc = ! $this->sortAsc;
        } else {
            $this->sortAsc = true;
        }
        $this->sortField = $field;
    }

    public function showDetailCustomer($id){
        $this->customer = Customer::find($id);
    }

    public function render(){
        return view('livewire.contacts-table', [
            'contacts' => Customer::search($this->search)
                ->orderBy($this->sortField, $this->sortAsc ? 'asc' : 'desc')
                ->paginate($this->perPage),
            'customer' => Customer::find(1),    
        ]);
    }

}