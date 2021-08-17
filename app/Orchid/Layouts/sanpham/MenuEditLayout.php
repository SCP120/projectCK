<?php

declare(strict_types=1);

namespace App\Orchid\Layouts\sanpham;

use Orchid\Screen\Field;
use Orchid\Screen\Fields\Input;
use Orchid\Screen\Fields\TextArea;
use Orchid\Screen\Layouts\Rows;
use Orchid\Screen\Fields\Checkbox;
use Orchid\Screen\Fields\Select;
use Orchid\Screen\Fields\Picture;
use Orchid\Screen\Fields\Radio;

use Orchid\Platform\Models\Menu;
use Orchid\Platform\Models\Danhmucsp;


class MenuEditLayout extends Rows
{
    /**
     * Views.
     *
     * @return Field[]
     */
    public function fields(): array
    {
        return [
            Input::make('menu.menu_id')
            ->type('text')
            ->max(255)
            ->required()
            ->title(__('Menu id'))
            ->placeholder(__('id_001'))
            ->help(__(' Id menu')),

            Select::make('menu.ad_id')
            ->options([
            1   => 'Admin',
            ])
            ->title('Id admin'),

            Input::make('menu.tenmenu')
            ->type('text')
            ->max(255)
            ->required()
            ->title(__('Name'))
            ->placeholder(__('Name'))
            ->help(__('Tên menu ')),


            TextArea::make('menu.mota')
                ->rows(5)
                ->title(__('Mô tả'))
                ->placeholder(__('Mô tả'))
                ->help(__('Mô tả menu ')),


            Select::make('menu.parent_id')
            ->fromModel(Menu::class, 'menu_id','id')
            ->empty('No select')
            ->title(__('Id cha của menu')),

        ];
    }
}
