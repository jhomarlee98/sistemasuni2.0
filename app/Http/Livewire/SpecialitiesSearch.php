<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Repositories\WebRepository;


class SpecialitiesSearch extends Component
{
    public $name='';
    public $tipe='';


    public function render()
    {
        $data=new WebRepository();
        $specialities_lv= $data->listSpecialities2(null,htmlspecialchars($this->name),htmlspecialchars($this->tipe));

        return view('livewire.specialities-search')->with(compact('specialities_lv'));;
    }
}
