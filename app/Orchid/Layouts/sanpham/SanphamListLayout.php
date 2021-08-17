<?php

declare(strict_types=1);

namespace App\Orchid\Layouts\sanpham;

use Orchid\Platform\Models\Sanpham;
use Orchid\Platform\Models\ThongTin;
use Orchid\Platform\Models\Danhmucsp;

use Orchid\Screen\Actions\Link;
use Orchid\Screen\Layouts\Table;
use Orchid\Platform\Models\Roles;
use Orchid\Screen\TD;

class SanPhamListLayout extends Table
{
    /**
     * @var string
     */
    public $target = 'sanpham';

    /**
     * @return TD[]
     */
    public function columns(): array
    {
        return [

            TD::make('sp_id', __('Product Id'))
                ->sort()
                ->cantHide()
                ->render(function (Sanpham $sp) {
                    return Link::make($sp->sp_id)
                        ->route('platform.systems.sanpham.edit', $sp->id);
                }),

 
            TD::make('tendaydu', __('Product Name'))
                ->sort()
                ->cantHide()
                ->render(function (Sanpham $sp) {
                    return Link::make($sp->tendaydu)
                        ->route('platform.systems.thongtin.edit', $sp->id);
                }),

            TD::make('price', __('Product Price'))
                ->sort()
                ->cantHide(),
            
            TD::make('danhmuc_id', __('Category Name'))
                ->sort()
                ->cantHide()
                ->render(function (Sanpham $sp) {
                    $dm1 = Danhmucsp::all();
                    $dm= $dm1 ->all();
                    $value = '';
                    foreach ($dm as $danhmuc) {
                        if($danhmuc->id == $sp->danhmuc_id) {
                            $value = $danhmuc->tendn;
                        }
                    }
                    return $value;
                }),
            TD::make('loaisp', __('Type'))
                ->sort()
                ->cantHide(),

            TD::make('trangthai', __('Status'))
                ->sort()
                ->cantHide()
                ->render(function (Sanpham $sp) {
                    
                    if($sp->trangthai == 1){
                        return 'active';
                    }else{
                        return 'inactive';
                    }
                }),
                

            // TD::make('ngaytao', __('Ngày tạo'))
            //     ->sort()
            //     ->render(function (Sanpham $sp) {
            //         return $sp->ngaytao->toDateTimeString();
            //     }),

                
        ];
    }
}
