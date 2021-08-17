<?php

declare(strict_types=1);

namespace App\Orchid\Layouts\sanpham;

use Orchid\Platform\Models\Khachhang;
use Orchid\Screen\Actions\Link;
use Orchid\Screen\Layouts\Table;
use Orchid\Platform\Models\Roles;
use Orchid\Screen\TD;

class KhachHangListLayout extends Table
{
    /**
     * @var string
     */
    public $target = 'khachhang';

    /**
     * @return TD[]
     */
    public function columns(): array
    {
        return [

            TD::make('tenkh', __('Tên khách hàng'))
                ->sort()
                ->cantHide(),

 
            TD::make('sodienthoai', __('Số điện thoại'))
                ->sort()
                ->cantHide(),

            TD::make('email', __('Email'))
                ->sort()
                ->cantHide(),
            
            TD::make('diachi', __('Địa chỉ'))
                ->sort()
                ->cantHide(),

            TD::make('trangthai', __('Trạng thái'))
                ->sort()
                ->cantHide()
                ->render(function (Khachhang $sp) {
                    
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
