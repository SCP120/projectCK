<?php

declare(strict_types=1);

namespace App\Orchid\Screens\sanpham;

use App\Orchid\Layouts\sanpham\SanPhamListLayout;
use Orchid\Platform\Models\Sanpham;
use Orchid\Screen\Action;
use Orchid\Screen\Actions\Link;
use Orchid\Screen\Screen;
use App\Orchid\Layouts\DoanhSoChartLayouts;

class SanPhamListScreen extends Screen
{
    /**
     * Display header name.
     *
     * @var string
     */
    public $name = 'Products';

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
            'sanpham' => Sanpham::filters()->defaultSort('sp_id', 'desc')->paginate(),
            'sanphamCharts' => Sanpham::countForGroup('hang')->toChart(),
        ];
    }

    /**
     * Button commands.
     *
     * @return Action[]
     */
    public function commandBar(): array
    {
        return [
            Link::make(__('Add'))
                ->icon('plus')
                ->href(route('platform.systems.sanpham.create')),
        ];
    }

    /**
     * Views.
     *
     * @return string[]|\Orchid\Screen\Layout[]
     */
    public function layout(): array
    {
        return [
            SanPhamListLayout::class,
            DoanhSoChartLayouts::class,
        ];
    }
}
