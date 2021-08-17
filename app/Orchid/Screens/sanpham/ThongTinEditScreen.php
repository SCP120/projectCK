<?php

declare(strict_types=1);

namespace App\Orchid\Screens\sanpham;

use App\Orchid\Layouts\sanpham\SanPhamEditLayout;
use App\Orchid\Layouts\sanpham\ThongTinEditLayout;


use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Orchid\Platform\Models\ThongTin;
use Orchid\Platform\Models\Sanpham;

use Orchid\Screen\Action;
use Orchid\Screen\Actions\Button;
use Orchid\Screen\Screen;
use Orchid\Support\Facades\Layout;
use Orchid\Support\Facades\Toast;

class ThongTinEditScreen extends Screen
{
    /**
     * Display header name.
     *
     * @var string
     */
    public $name = 'Thông Tin Sản phẩm';

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
     * @param ThongTin $role
     *
     * @return array
     */
    public function query(ThongTin $sp): array
    {
        $sanpham1 = Sanpham::all();
        $sanpham = $sanpham1 ->all();

        $this->exist = $sp->exists;
        if($this->exist){

        }else{
            $sp->quyenloi1 = 'Cash on Delivery Eligible';
            $sp->quyenloi2 = 'Shipping Speed to Delivery';
            $sp->quyenloi3 = 'EMIs from $655/month';
            $sp->quyenloi4 = 'Bank OfferExtra 5% off* with Axis Bank Buzz Credit CardT&C';

        }
        return [
            'thongtin'       => $sp,
            
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
                ThongTinEditLayout::class,
            

        ];
    }

    /**
     * @param ThongTin    $role
     * @param Request $request
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function save(ThongTin $thongtin, Request $request)
    {
        $request->validate([
            'thongtin.sp_id' => [
                'required',
                Rule::unique(ThongTin::class, 'sp_id')->ignore($thongtin),
            ],
        ]);

        $thongtin->fill($request->get('thongtin'));

        $thongtin->id = $thongtin->sp_id;


        $thongtin->save();

        Toast::info(__('Thông Tin Sản phẩm was saved'));

        return redirect()->route('platform.systems.sanpham');
    }

    /**
     * @param ThongTin $role
     *
     * @throws \Exception
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function remove(ThongTin $sp)
    {
        $sp->delete();

        Toast::info(__('San phẩm was removed'));

        return redirect()->route('platform.systems.sanpham');
    }
}