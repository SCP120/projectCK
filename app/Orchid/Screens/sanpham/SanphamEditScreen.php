<?php

declare(strict_types=1);

namespace App\Orchid\Screens\sanpham;

use App\Orchid\Layouts\sanpham\SanPhamEditLayout;
use App\Orchid\Layouts\sanpham\ThongTinEditLayout;


use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Orchid\Platform\Models\Sanpham;
use Orchid\Platform\Models\Danhmucsp;
use Orchid\Screen\Action;
use Orchid\Screen\Actions\Button;
use Orchid\Screen\Screen;
use Orchid\Support\Facades\Layout;
use Orchid\Support\Facades\Toast;

class SanPhamEditScreen extends Screen
{
    /**
     * Display header name.
     *
     * @var string
     */
    public $name = 'Products';

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
     * @param Sanpham $role
     *
     * @return array
     */
    public function query(Sanpham $sp): array
    {
        $this->exist = $sp->exists;

        return [
            'sanpham'       => $sp,
            
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

            Button::make(__('Add Thongtin'))
                ->icon('check')
                ->method('Add'),

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
            
                SanPhamEditLayout::class,
            

        ];
    }

    /**
     * @param Sanpham    $role
     * @param Request $request
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function save(Sanpham $sanpham, Request $request)
    {
        $request->validate([
            'sanpham.sp_id' => [
                'required',
                Rule::unique(Sanpham::class, 'sp_id')->ignore($sanpham),
            ],
        ]);

        $sanpham->fill($request->get('sanpham'));


        $sanpham->save();

        Toast::info(__('Sản phẩm was saved'));

        $this->exist = $sanpham->exists;

        return redirect()->route('platform.systems.sanpham');
    }

    public function Add(Sanpham $sanpham, Request $request)
    {
        $request->validate([
            'sanpham.sp_id' => [
                'required',
                Rule::unique(Sanpham::class, 'sp_id')->ignore($sanpham),
            ],
        ]);

        $sanpham->fill($request->get('sanpham'));

        $sanpham1 = Danhmucsp::all();
        $dm = $sanpham1 ->all();

        foreach ($dm as $danhmucsp){
            if($sanpham->danhmuc_id == $danhmucsp->id){
                $sanpham->hang = $danhmucsp->tendn;
            }
        }


        $sanpham->save();

        Toast::info(__('Sản phẩm was saved'));

        $this->exist = $sanpham->exists;

        return redirect()->route('platform.systems.thongtin.create');
    }

    /**
     * @param Sanpham $role
     *
     * @throws \Exception
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function remove(Sanpham $sp)
    {
        $sp->delete();

        Toast::info(__('San phẩm was removed'));

        return redirect()->route('platform.systems.sanpham');
    }
}
