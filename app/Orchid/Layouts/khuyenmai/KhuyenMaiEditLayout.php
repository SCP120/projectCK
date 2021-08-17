<?php

declare(strict_types=1);

namespace App\Orchid\Layouts\khuyenmai;

use Orchid\Screen\Field;
use Orchid\Screen\Fields\Input;
use Orchid\Screen\Fields\TextArea;
use Orchid\Screen\Layouts\Rows;
use Orchid\Screen\Fields\Checkbox;
use Orchid\Screen\Fields\Select;
use Orchid\Screen\Fields\Picture;
use Orchid\Screen\Fields\Radio;
use Orchid\Screen\Fields\DateTimer;


use Orchid\Platform\Models\Khuyenmai;

use Orchid\Platform\Models\Sanpham;

class KhuyenMaiEditLayout extends Rows
{
    /**
     * Views.
     *
     * @return Field[]
     */
    public function fields(): array
    {
        return [
            Input::make('sukien.sk_id')
                ->type('text')
                ->max(255)
                ->required()
                ->title(__('Id'))
                ->placeholder(__('id001'))
                ->help(__('Event Id')),

            Input::make('sukien.tensukien')
                ->type('text')
                ->max(255)
                ->required()
                ->title(__('Name'))
                ->placeholder(__('Name'))
                ->help(__('Event Name ')),

            TextArea::make('sukien.mota')
                ->rows(5)
                ->title(__('Event Description'))
                ->placeholder(__('Mô tả'))
                ->help(__('Event Description')),

            Select::make('sukien.sp_id')
                ->fromModel(Sanpham::class, 'tendaydu', 'id')
                ->empty('No select')
                ->multiple()
                ->title(__('Event Product')),

            Picture::make('sukien.anhsukien')
                // ->storage('s3')
                ->title(__('Image')),

            DateTimer::make('sukien.start')
                ->title('Opening date'),

            DateTimer::make('sukien.end')
                ->title('End date'),

            Select::make('sukien.trangthai')
                ->options([
                    'Active'   => 'Active',
                    'Inactive' => 'Inactive',
                ])
                ->title('Status'),




        ];
    }
}
