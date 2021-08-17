<?php

declare(strict_types=1);

namespace App\Orchid\Screens\sanpham;

use App\Orchid\Layouts\sanpham\KhachHangListLayout;
use Orchid\Platform\Models\Sanpham;
use Orchid\Screen\Action;
use Orchid\Screen\Actions\Link;
use Orchid\Screen\Screen;
use App\Orchid\Layouts\DoanhSoChartLayouts;
use Orchid\Platform\Models\Khachhang;


class KhachHangListScreen extends Screen
{
    /**
     * Display header name.
     *
     * @var string
     */
    public $name = 'Khách Hàng';

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
            'khachhang' => Khachhang::filters()->paginate(),
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
    //             ->href(route('platform.systems.sanpham.create')),
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
            KhachHangListLayout::class,
        ];
    }
}
