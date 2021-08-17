<?php

declare(strict_types=1);

namespace App\Orchid\Screens\donhang;

use App\Orchid\Layouts\donhang\DonHangListLayout;
use Orchid\Platform\Models\Donhang;
use Orchid\Platform\Models\Giaohang;
use Orchid\Screen\Action;
use Orchid\Screen\Actions\Link;
use Orchid\Screen\Screen;
use App\Orchid\Layouts\donhang\DonHangChiTietListLayout;
use Orchid\Platform\Models\DonhangChitiet;

class DonHangListScreen extends Screen
{
    /**
     * Display header name.
     *
     * @var string
     */
    public $name = 'Orders';

    /**
     * Display header description.
     *
     * @var string
     */

    /**
     * @var string
     */
    //public $permission = 'platform.systems.objects';

    /**
     * Query data.
     *
     * @return array
     */
    public function query(Donhang $dh): array
    {   
        $donhang1 = Giaohang::all();
        $giaohang = $donhang1 ->all();
        
            foreach ($giaohang as $gh){
                if($gh->shipping == $dh->giaohang_id){
                    $dh->diachidonhang = $gh->diachidonhang;
                    $dh->sodienthoai = $gh->sodienthoai;
                    $dh->email = $gh->email;
                    $dh->tennguoinhan = $gh->tennguoinhan;

                }
            }
        
        return [
            'donhang' => $dh::filters()->defaultSort('id', 'desc')->paginate(),
            'donhang_chitiet' => DonhangChitiet::filters()->defaultSort('dh_id', 'desc')->paginate(),
        ];
    }

    /**
     * Button commands.
     *
     * @return Action[]
     */
    // public function commandBar(): array
    // {
    //     return [
    //         Link::make(__('Add'))
    //             ->icon('plus')
    //             ->href(route('platform.systems.d.create')),
    //     ];
    // }

    /**
     * Views.
     *
     * @return string[]|\Orchid\Screen\Layout[]
     */
    public function layout(): array
    {
        return [
            DonHangListLayout::class,
            DonHangChiTietListLayout::class,
        ];
    }
}
