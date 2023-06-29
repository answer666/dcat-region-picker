<?php

namespace Answer\DcatRegion\Http\Controllers;

use Dcat\Admin\Layout\Content;
use Dcat\Admin\Admin;
use Illuminate\Routing\Controller;

class RegionPickerController extends Controller
{
    public function index(Content $content)
    {
        return $content
            ->title('Title')
            ->description('Description')
            ->body(Admin::view('answers.region-picker::index'));
    }
}