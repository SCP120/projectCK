<?php

declare(strict_types=1);

namespace App\Orchid\Layouts\complains;

use Orchid\Platform\Models\Gopy;
use Orchid\Screen\Actions\Link;
use Orchid\Screen\Layouts\Table;
use Orchid\Platform\Models\Roles;
use Orchid\Screen\TD;

class GopYListLayout extends Table
{
    /**
     * @var string
     */
    public $target = 'gopy';

    /**
     * @return TD[]
     */
    public function columns(): array
    {
        return [

            TD::make('id', __('Id Complains'))
                ->sort()
                ->cantHide(),

 
            TD::make('tenkhachhang', __('Customer name'))
                ->sort()
                ->cantHide()
                ->filter(TD::FILTER_TEXT),

            TD::make('noidung', __('Content'))
                ->sort()
                ->cantHide()
                ->filter(TD::FILTER_TEXT),
        


            // TD::make('ngaytao', __('Ngày tạo'))
            //     ->sort()
            //     ->render(function (Sanpham $sp) {
            //         return $sp->ngaytao->toDateTimeString();
            //     }),
                
        ];
    }
}
