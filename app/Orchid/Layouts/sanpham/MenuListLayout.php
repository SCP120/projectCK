<?php

declare(strict_types=1);

namespace App\Orchid\Layouts\sanpham;

use Orchid\Platform\Models\Menu;
use Orchid\Screen\Actions\Link;
use Orchid\Screen\Layouts\Table;
use Orchid\Platform\Models\Roles;
use Orchid\Screen\TD;

class MenuListLayout extends Table
{
    /**
     * @var string
     */
    public $target = 'menu';

    /**
     * @return TD[]
     */
    public function columns(): array
    {
        return [

            TD::make('menu_id', __('Id menu '))
                ->sort()
                ->cantHide()
                ->render(function (Menu $sp) {
                    return Link::make($sp->dmsp_id)
                        ->route('platform.systems.menu.edit', $sp->id);
                }),

 
            TD::make('tenmenu', __('Tên menu '))
                ->sort()
                ->cantHide()
                ->filter(TD::FILTER_TEXT),
        

            TD::make('mota', __('Mô tả '))
                ->sort()
                ->cantHide(),
                

            // TD::make('ngaytao', __('Ngày tạo'))
            //     ->sort()
            //     ->render(function (Sanpham $sp) {
            //         return $sp->ngaytao->toDateTimeString();
            //     }),

            TD::make('nguoitao', __('Người tạo '))
                ->sort()
                ->cantHide(),
                
        ];
    }
}
