<?php

declare(strict_types=1);

namespace App\Orchid\Layouts\complains;

use Orchid\Platform\Models\Gopy;
use Orchid\Platform\Models\Nhanxet;
use Orchid\Platform\Models\Sanpham;
use Orchid\Screen\Actions\Link;
use Orchid\Screen\Layouts\Table;
use Orchid\Platform\Models\Roles;
use Orchid\Screen\TD;

class NhanXetListLayout extends Table
{
    /**
     * @var string
     */
    public $target = 'nhanxet';

    /**
     * @return TD[]
     */
    public function columns(): array
    {
        return [

            TD::make('id', __('Id Comment'))
                ->sort()
                ->cantHide(),

 
            TD::make('tennhanxet', __('Comment name'))
                ->sort()
                ->cantHide()
                ->filter(TD::FILTER_TEXT),

            TD::make('sp_id', __('Product name'))
                ->sort()
                ->cantHide()
                ->render(function (Nhanxet $dh){
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

            TD::make('thongtinnhanxet', __('Content'))
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
