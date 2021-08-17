<?php

declare(strict_types=1);

namespace App\Orchid\Screens\sanpham;

use App\Orchid\Layouts\sanpham\DanhMucSPEditLayout;

use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Orchid\Platform\Models\Danhmucsp;
use Orchid\Screen\Action;
use Orchid\Screen\Actions\Button;
use Orchid\Screen\Screen;
use Orchid\Support\Facades\Layout;
use Orchid\Support\Facades\Toast;

class DanhMucSPEditScreen extends Screen
{
    /**
     * Display header name.
     *
     * @var string
     */
    public $name = 'Categories';

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
     * @param Danhmucsp $role
     *
     * @return array
     */
    public function query(Danhmucsp $sp): array
    {
        $this->exist = $sp->exists;

        return [
            'danhmucsp'       => $sp,
            
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
                DanhMucSPEditLayout::class,
            ])
                ->title('Categories')

        ];
    }

    /**
     * @param Danhmucsp    $role
     * @param Request $request
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function save(Danhmucsp $danhmucsp, Request $request)
    {
        $request->validate([
            'danhmucsp.dmsp_id' => [
                'required',
                Rule::unique(Danhmucsp::class, 'dmsp_id')->ignore($danhmucsp),
            ],
        ]);

        $danhmucsp->fill($request->get('danhmucsp'));


        $danhmucsp->save();

        Toast::info(__('Category was saved'));

        return redirect()->route('platform.systems.danhmucsp');
    }

    /**
     * @param Danhmucsp $role
     *
     * @throws \Exception
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function remove(Danhmucsp $sp)
    {
        $sp->delete();

        Toast::info(__('Danh Mục San phẩm was removed'));

        return redirect()->route('platform.systems.danhmucsp');
    }
}
