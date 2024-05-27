<?php

namespace App\Http\Livewire;

use App\Models\Department;
use Livewire\Component;

class DepartmentLivewire extends Component
{
    public $searchDepartment = '';
    public function render()
    {
        $departments = Department::query();
        if ($this->searchDepartment) {
            $departments->where('name', 'like', '%' . $this->searchDepartment . '%');
        }
        $departments = $departments->get();
        return view('livewire.department-livewire', [
            'departments' => $departments,
        ]);
    }
}
