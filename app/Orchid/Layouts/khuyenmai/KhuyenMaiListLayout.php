<?php

declare(strict_types=1);

namespace App\Orchid\Layouts\khuyenmai;

use Orchid\Platform\Models\Sukien;
use Orchid\Screen\Actions\Link;
use Orchid\Screen\Layouts\Table;
use Orchid\Platform\Models\Roles;
use Orchid\Screen\TD;

class KhuyenMaiListLayout extends Table
{
    /**
     * @var string
     */
    public $target = 'sukien';

    /**
     * @return TD[]
     */
    public function columns(): array
    {
        return [

            TD::make('sk_id', __('Event Id'))
                ->sort()
                ->cantHide()
                ->render(function (Sukien $sp) {
                    return Link::make($sp->sk_id)
                        ->route('platform.systems.khuyenmai.edit', $sp->id);
                }),

 
            TD::make('sp_id', __('Product Id'))
                ->sort()
                ->cantHide(),

            TD::make('tensukien', __('Event Name'))
                ->sort()
                ->cantHide(),
            

            TD::make('mota', __('Event Description'))
                ->sort()
                ->cantHide(),

            TD::make('start', __('Start Time'))
                ->sort()
                ->cantHide(),

                TD::make('end', __('End Time'))
                ->sort()
                ->cantHide(),

            TD::make('trangthai', __('Status'))
                ->sort()
                ->cantHide(),
                

            // TD::make('ngaytao', __('Ngày tạo'))
            //     ->sort()
            //     ->render(function (Sanpham $sp) {
            //         return $sp->ngaytao->toDateTimeString();
            //     }),

                
        ];
    }
}
