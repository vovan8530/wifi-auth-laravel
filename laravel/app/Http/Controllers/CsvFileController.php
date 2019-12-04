<?php

namespace App\Http\Controllers;

use App\Exports\UsersExport;

use Maatwebsite\Excel\Facades\Excel;


class CsvFileController extends Controller
{

    /**
     * @return \Symfony\Component\HttpFoundation\BinaryFileResponse
     */
    public function export()
    {
        return Excel::download(new UsersExport, 'users.csv');
    }

}
