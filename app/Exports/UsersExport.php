<?php

namespace App\Exports;

use App\Page;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class UsersExport implements FromCollection, WithHeadings
{
    public function headings(): array {
      return [
        'username', 'name', 'gender', 'email'
      ];
    }

    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return collect(Page::getUsers());

        // return AppPage::all();
    }
}
