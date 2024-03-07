<?php

namespace App\Admin\Controllers;

use App\Http\Controllers\Controller;
use Encore\Admin\Controllers\Dashboard;
use Encore\Admin\Layout\Column;
use Encore\Admin\Layout\Content;
use Encore\Admin\Layout\Row;

class UserHomeController extends Controller
{
    public function index(Content $content)
    {
        return $content
            ->title('User Home')
            ->description('ここはホーム画面です')
            ->row(
                view('admin::dashboard.title')
            )
            ->row(function (Row $row) {

                $row->column(12, function (Column $column) {
                    $column->append(Dashboard::environment());
                });

            });
    }
}
