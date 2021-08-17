<?php

declare(strict_types=1);

namespace App\Orchid\Layouts\sanpham;

use Orchid\Platform\Models\Danhmucsp;
use Orchid\Screen\Actions\Link;
use Orchid\Screen\Layouts\Table;
use Orchid\Platform\Models\Roles;
use Orchid\Screen\TD;

class DanhMucSPListLayout extends Table
{
    /**
     * @var string
     */
    public $target = 'danhmucsp';

    /**
     * @return TD[]
     */
    public function columns(): array
    {
        return [

            TD::make('dmsp_id', __('Category Id'))
                ->sort()
                ->cantHide()
                ->render(function (Danhmucsp $sp) {
                    return Link::make($sp->dmsp_id)
                        ->route('platform.systems.danhmucsp.edit', $sp->id);
                }),

 
            TD::make('tendn', __('Category Name'))
                ->sort()
                ->cantHide()
                ->filter(TD::FILTER_TEXT),
        

            TD::make('mota', __('Description '))
                ->sort()
                ->cantHide(),
                

            // TD::make('ngaytao', __('Ngày tạo'))
            //     ->sort()
            //     ->render(function (Sanpham $sp) {
            //         return $sp->ngaytao->toDateTimeString();
            //     }),

            TD::make('nguoitao', __('Created By'))
                ->sort()
                ->cantHide(),
                
        ];
    }
}
