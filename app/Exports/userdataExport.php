<?php

namespace App\Exports;
use Illuminate\Support\Collection; 
use Maatwebsite\Excel\Concerns\FromCollection;
use App\Models\User;

class userdataExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        $userdata = User::with(['Basicsall', 'Educationall', 'Experiancesall', 'Familiesall'])
        ->get();
        $collection = new Collection([
            'users_data' => $userdata,
        ]);


        
      

        return $collection;
    }
}
