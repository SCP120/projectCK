<?php

declare(strict_types=1);

namespace App\Orchid\Screens\sanpham;

use App\Orchid\Layouts\sanpham\MenuEditLayout;

use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Orchid\Platform\Models\Menu;
use Orchid\Screen\Action;
use Orchid\Screen\Actions\Button;
use Orchid\Screen\Screen;
use Orchid\Support\Facades\Layout;
use Orchid\Support\Facades\Toast;

class MenuEditScreen extends Screen
{
    /**
     * Display header name.
     *
     * @var string
     */
    public $name = 'Menu';

    /**
     * @var string
     */
    //public $permission = 'platform.systems.objects';

    /**
     * @var bool
     */
    private $exist = false;

    /**
     * Query data.
     *
     * @param Menu $role
     *
     * @return array
     */
    public function query(Menu $sp): array
    {
        $this->exist = $sp->exists;

        return [
            'menu'       => $sp,
            
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
            Button::make(__('Save'))
                ->icon('check')
                ->method('save'),

            Button::make(__('Remove'))
                ->icon('trash')
                ->method('remove')
                ->canSee($this->exist),
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
            Layout::block([
                MenuEditLayout::class,
            ])
                ->title('Menu')

        ];
    }

    /**
     * @param Menu    $role
     * @param Request $request
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function save(Menu $menu, Request $request)
    {
        $request->validate([
            'menu.menu_id' => [
                'required',
                Rule::unique(Menu::class, 'menu_id')->ignore($menu),
            ],
        ]);

        $menu->fill($request->get('menu'));


        $menu->save();

        Toast::info(__('Menu was saved'));

        return redirect()->route('platform.systems.menu');
    }

    /**
     * @param Menu $role
     *
     * @throws \Exception
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function remove(Menu $sp)
    {
        $sp->delete();

        Toast::info(__('Menu was removed'));

        return redirect()->route('platform.systems.menu');
    }
}
