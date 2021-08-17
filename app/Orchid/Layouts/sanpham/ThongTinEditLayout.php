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
use Orchid\Screen\Fields\Group;

use Orchid\Platform\Models\Sanpham;
use Orchid\Platform\Models\Danhmucsp;
use Orchid\Platform\Models\ThongTin;


class ThongTinEditLayout extends Rows
{
    /**
     * Views.
     *
     * @return Field[]
     */
    public function fields(): array
    {
        return [
            Select::make('thongtin.sp_id')
                ->fromModel(Sanpham::class, 'sp_id','id')
                ->empty('No select')
                ->title(__('Product Id')),

            Input::make('thongtin.tieude')
            ->type('text')
            ->max(255)
            ->required()
            ->title(__('Name'))
            ->placeholder(__('Name'))
            ->help(__('Product Name')),

            TextArea::make('thongtin.quyenloi1')
                ->rows(5)
                ->title(__('Privilege 1'))
                ->placeholder(__('privilege'))
                ->help(__('Privilege 1')),

                TextArea::make('thongtin.quyenloi2')
                ->rows(5)
                ->title(__('Privilege 2'))
                ->placeholder(__('Mô tả'))
                ->help(__('Privilege 2')),

                TextArea::make('thongtin.quyenloi3')
                ->rows(5)
                ->title(__('Privilege 3'))
                ->placeholder(__('Mô tả'))
                ->help(__('Privilege 3')),

                TextArea::make('thongtin.quyenloi4')
                ->rows(5)
                ->title(__('Privilege 4'))
                ->placeholder(__('Mô tả'))
                ->help(__('QPrivilege 4')),

            Input::make('thongtin.baohanh')
            ->type('number')
            ->title('Warranty year')
            ->required(),

            TextArea::make('thongtin.thongso1')
                ->rows(5)
                ->title(__('Specs 1'))
                ->placeholder(__('Specs 1')),

                TextArea::make('thongtin.thongso2')
                ->rows(5)
                ->title(__('Specs 2'))
                ->placeholder(__('Specs 2')),

                TextArea::make('thongtin.thongso3')
                ->rows(5)
                ->title(__('Specs 3'))
                ->placeholder(__('Specs 3')),

                TextArea::make('thongtin.thongso4')
                ->rows(5)
                ->title(__('Specs 4'))
                ->placeholder(__('Specs 4')),

                TextArea::make('thongtin.thongso5')
                ->rows(5)
                ->title(__('Specs 5'))
                ->placeholder(__('Specs 5')),

        ];
    }
}
