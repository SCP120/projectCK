<?php

declare(strict_types=1);

namespace App\Orchid\Layouts\donhang;

use Orchid\Platform\Models\DonhangChitiet;
use Orchid\Platform\Models\Sanpham;
use Orchid\Screen\Actions\Link;
use Orchid\Screen\Layouts\Table;
use Orchid\Platform\Models\Roles;
use Orchid\Screen\TD;

class DonHangChiTietListLayout extends Table
{
    /**
     * @var string
     */
    public $target = 'donhang_chitiet';

    /**
     * @return TD[]
     */
    public function columns(): array
    {
        return [

 
            TD::make('dh_id', __('Order Id'))
                ->sort()
                ->cantHide()
                ->filter(TD::FILTER_TEXT),

            TD::make('sp_id', __('Product Id'))
                ->sort()
                ->cantHide()
                ->render(function (DonhangChitiet $dh){
                    $sp1= Sanpham::all();
                    $sp= $sp1->all();
                    $value='';
                    foreach($sp as $sanpham){
                        if($sanpham->id == $dh->sp_id){
                            $value= $sanpham->tendaydu;
                        }
                    }
                    return $value;
                }),
        

            TD::make('sotien', __('Bill'))
                ->sort()
                ->cantHide(),

            TD::make('soluong', __('Amount'))
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
