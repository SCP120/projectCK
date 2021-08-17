<?php

declare(strict_types=1);

namespace App\Orchid\Screens\donhang;

use App\Orchid\Layouts\sanpham\DonHangChiTietListLayout;
use Orchid\Platform\Models\DonhangChitiet;
use Orchid\Screen\Action;
use Orchid\Screen\Actions\Link;
use Orchid\Screen\Screen;

class DonHangChiTietListScreen extends Screen
{
    /**
     * Display header name.
     *
     * @var string
     */
    public $name = 'Đơn hàng chi tiết';

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
    public function query(): array
    {
        return [
            'donhang_chitiet' => DonhangChitiet::filters()->defaultSort('id', 'desc')->paginate(),
        ];
    }

    /**
     * Button commands.
     *
     * @return Action[]
     */
    public function commandBar(): array
    {
        // return [
        //     Link::make(__('Add'))
        //         ->icon('plus')
        //         ->href(route('platform.systems.d.create')),
        // ];
    }

    /**
     * Views.
     *
     * @return string[]|\Orchid\Screen\Layout[]
     */
    public function layout(): array
    {
        return [
            DonHangChiTietListLayout::class,
        ];
    }
}
