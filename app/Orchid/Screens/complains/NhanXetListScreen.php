<?php

declare(strict_types=1);

namespace App\Orchid\Screens\complains;

use App\Orchid\Layouts\complains\NhanXetListLayout;
use Orchid\Platform\Models\Nhanxet;
use Orchid\Screen\Action;
use Orchid\Screen\Actions\Link;
use Orchid\Screen\Screen;

class NhanXetListScreen extends Screen
{
    /**
     * Display header name.
     *
     * @var string
     */
    public $name = 'Comments';

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
            'nhanxet' => Nhanxet::filters()->defaultSort('id', 'desc')->paginate(),
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
            NhanXetListLayout::class,
        ];
    }
}
