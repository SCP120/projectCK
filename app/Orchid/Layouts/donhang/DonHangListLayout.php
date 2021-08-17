<?php

declare(strict_types=1);

namespace App\Orchid\Layouts\donhang;

use Orchid\Platform\Models\Donhang;
use Orchid\Platform\Models\Khachhang;
use Orchid\Platform\Models\Giaohang;
use Orchid\Screen\Actions\Link;
use Orchid\Screen\Layouts\Table;
use Orchid\Platform\Models\Roles;
use Orchid\Screen\TD;

class DonHangListLayout extends Table
{
    /**
     * @var string
     */
    public $target = 'donhang';

    /**
     * @return TD[]
     */
    public function columns(): array
    {
        return [

            TD::make('id', __('Order Id'))
                ->sort()
                ->cantHide(),

 
            TD::make('khachhang_id', __('Customer name'))
                ->sort()
                ->cantHide()
                ->render(function (Donhang $donhang) {
                    $kh1= Khachhang::all();
                    $kh = $kh1->all();
                    $value = '';
                    foreach ($kh as $Khachhang){
                        if($Khachhang->id == $donhang->khachhang_id){
                            $value= $Khachhang->tenkh;
                        }
                    }
                    return $value;
                }),
        

            TD::make('tongtien', __('Total Order Amount'))
                ->sort()
                ->cantHide(),

            TD::make('giaohang_id', __('Shipping Address'))
                ->sort()
                ->cantHide()
                ->render(function (Donhang $donhang) {
                    $kh1= Giaohang::all();
                    $kh = $kh1->all();
                    $value = '';
                    foreach ($kh as $Khachhang){
                        if($Khachhang->shipping == $donhang->giaohang_id){
                            $value= $Khachhang->diachidonhang;
                        }
                    }
                    return $value;
                })
                ->filter(TD::FILTER_TEXT),

            TD::make('giaohang_id', __('Customer Phone Number'))
                ->sort()
                ->cantHide()
                ->render(function (Donhang $donhang) {
                    $kh1= Giaohang::all();
                    $kh = $kh1->all();
                    $value = '';
                    foreach ($kh as $Khachhang){
                        if($Khachhang->shipping == $donhang->giaohang_id){
                            $value= $Khachhang->sodienthoai;
                        }
                    }
                    return $value;
                })
                ->filter(TD::FILTER_TEXT),

            TD::make('giaohang_id', __('Customer Email Address'))
                ->sort()
                ->cantHide()
                ->render(function (Donhang $donhang) {
                    $kh1= Giaohang::all();
                    $kh = $kh1->all();
                    $value = '';
                    foreach ($kh as $Khachhang){
                        if($Khachhang->shipping == $donhang->giaohang_id){
                            $value= $Khachhang->email;
                        }
                    }
                    return $value;
                })
                ->filter(TD::FILTER_TEXT),

            TD::make('giaohang_id', __('Receiver Name'))
                ->sort()
                ->cantHide()
                ->render(function (Donhang $donhang) {
                    $kh1= Giaohang::all();
                    $kh = $kh1->all();
                    $value = '';
                    foreach ($kh as $Khachhang){
                        if($Khachhang->shipping == $donhang->giaohang_id){
                            $value= $Khachhang->tennguoinhan;
                        }
                    }
                    return $value;
                })
                ->filter(TD::FILTER_TEXT),

                

            // TD::make('ngaytao', __('Ngày tạo'))
            //     ->sort()
            //     ->render(function (Sanpham $sp) {
            //         return $sp->ngaytao->toDateTimeString();
            //     }),
                
        ];
    }
}
