<?php

namespace App\Exports;

use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Concerns\FromView;

class SeoExport implements FromView
{
    public function view(): View
    {
        $keywords = DB::select('select name from keyword');
        $items = [];

        foreach($keywords as $key  => $row) {

            $word = $row->name;
            $items[$word] = DB::select('select * from texts where name like "%'.$word.'%" ');
        }

        return view('exports.seo', [
            'items' => $items
        ]);
    }
}
