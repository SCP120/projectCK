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

use Orchid\Platform\Models\Sanpham;
use Orchid\Platform\Models\Danhmucsp;


class DanhMucSPEditLayout extends Rows
{
    /**
     * Views.
     *
     * @return Field[]
     */
    public function fields(): array
    {
        return [
            Input::make('danhmucsp.dmsp_id')
            ->type('text')
            ->max(255)
            ->required()
            ->title(__('Categories id'))
            ->placeholder(__('id_001')),

            Input::make('danhmucsp.tendn')
            ->type('text')
            ->max(255)
            ->required()
            ->title(__('Name'))
            ->placeholder(__('Name'))
            ->help(__('Category Name')),


            TextArea::make('danhmucsp.mota')
                ->rows(5)
                ->title(__('Mô tả'))
                ->placeholder(__('Mô tả'))
                ->help(__('Category Description')),


        ];
    }
}
