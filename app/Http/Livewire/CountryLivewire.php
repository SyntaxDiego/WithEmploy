<?php

namespace App\Http\Livewire;

use App\Models\Country;
use Livewire\Component;

class CountryLivewire extends Component
{
    public $searchCountry = '';
    public function render()
    {
        $countries = Country::query();
        if ($this->searchCountry) {
            $countries->where('name', 'like', '%' . $this->searchCountry . '%');
        }
        $countries = $countries->get();
        return view('livewire.country-livewire', [
            'countries' => $countries,
        ]);
    }
}
