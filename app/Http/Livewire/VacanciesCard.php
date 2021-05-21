<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Vacancy;

class VacanciesCard extends Component
{
    public function render()
    {
        return view('livewire.vacancies-card', [
            'vacancies' => Vacancy::latest()->get()
        ]);
    }
}
