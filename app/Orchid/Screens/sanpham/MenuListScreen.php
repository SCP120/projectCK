<?php

declare(strict_types=1);

namespace App\Orchid\Screens\sanpham;

use App\Orchid\Layouts\sanpham\MenuListLayout;
use Orchid\Platform\Models\Menu;
use Orchid\Screen\Action;
use Orchid\Screen\Actions\Link;
use Orchid\Screen\Screen;

class MenuListScreen extends Screen
{
    /**
     * Display header name.
     *
     * @var string
     */
    public $name = 'Menu';

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
            'menu' => Menu::filters()->defaultSort('menu_id', 'desc')->paginate(),
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
                ->href(route('platform.systems.menu.create')),
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
            MenuListLayout::class,
        ];
    }
}
