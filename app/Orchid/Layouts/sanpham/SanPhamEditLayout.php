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


class SanPhamEditLayout extends Rows
{
    /**
     * Views.
     *
     * @return Field[]
     */
    public function fields(): array
    {
        return [
            
            Input::make('sanpham.sp_id')
            ->type('text')
            ->max(255)
            ->required()
            ->title(__('SP id'))
            ->placeholder(__('id_001'))
            ->help(__('Product Id')),

            Input::make('sanpham.tendaydu')
            ->type('text')
            ->max(255)
            ->required()
            ->title(__('Name'))
            ->placeholder(__('Name'))
            ->help(__('Product Name ')),

            Input::make('sanpham.price')
            ->type('number')
            ->title('Price')
            ->required(),

            Select::make('sanpham.danhmuc_id')
                ->fromModel(Danhmucsp::class, 'tendn','id')
                ->empty('No select')
                ->title(__('Category')),

            Picture::make('sanpham.anhdaidien')
                // ->storage('s3')
                ->title(__('Product Image 1')),

                Picture::make('sanpham.anhdaidien2')
                // ->storage('s3')
                ->title(__('Product Image  2')),

                Picture::make('sanpham.anhdaidien3')
                // ->storage('s3')
                ->title(__('Product Image 3')),


            Select::make('sanpham.trangthai')
                ->options([
                1   => 'Active',
                0 => 'Inactive',
                ])
                ->title('Status'),

            Select::make('sanpham.loaisp')
                ->options([
                'LikeNew'   => 'LikeNew',
                'BrandNew' => 'BrandNew',
                ])
                ->title('Product Type'),

        ];
    }
}
