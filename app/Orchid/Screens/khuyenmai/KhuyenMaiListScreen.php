<?php

declare(strict_types=1);

namespace App\Orchid\Screens\khuyenmai;

use App\Orchid\Layouts\khuyenmai\KhuyenMaiListLayout;
use Orchid\Platform\Models\Khuyenmai;
use Orchid\Screen\Action;
use Orchid\Screen\Actions\Link;
use Orchid\Screen\Screen;
use Orchid\Platform\Models\Sukien;


class KhuyenMaiListScreen extends Screen
{
    /**
     * Display header name.
     *
     * @var string
     */
    public $name = 'Events';

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
            'sukien' => Sukien::filters()->defaultSort('sk_id', 'desc')->paginate(),
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
                ->href(route('platform.systems.khuyenmai.create')),
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
            KhuyenMaiListLayout::class,
        ];
    }
}
