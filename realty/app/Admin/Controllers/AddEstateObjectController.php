<?php

namespace App\Admin\Controllers;

use App\Http\Controllers\Controller;
use Encore\Admin\Layout\Content;
use Encore\Admin\Layout\Row;

class AddEstateObjectController extends Controller
{
    public function index(Content $content)
    {
        return $content->row(function(Row $row) {
            $row->column(12, view('admin.estate-objects'));
        });
    }
}
