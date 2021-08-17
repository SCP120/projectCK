<?php

declare(strict_types=1);

namespace App\Orchid\Screens\khuyenmai;

use App\Orchid\Layouts\khuyenmai\KhuyenMaiEditLayout;

use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Orchid\Platform\Models\KhuyenMai;
use Orchid\Screen\Action;
use Orchid\Screen\Actions\Button;
use Orchid\Screen\Screen;
use Orchid\Support\Facades\Layout;
use Orchid\Support\Facades\Toast;
use Orchid\Platform\Models\Sukien;


class KhuyenMaiEditScreen extends Screen
{
    /**
     * Display header name.
     *
     * @var string
     */
    public $name = 'Sản phẩm khuyến mãi';

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
     * @param Sukien $role
     *
     * @return array
     */
    public function query(Sukien $sp): array
    {
        $this->exist = $sp->exists;

        return [
            'sukien'       => $sp,
            
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
                KhuyenMaiEditLayout::class,
            ])
                ->title('Khuyến mãi Sản phẩm')

        ];
    }

    /**
     * @param Sukien    $role
     * @param Request $request
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function save(Sukien $sukien, Request $request)
    {
        $request->validate([
            'sukien.sk_id' => [
                'required',
                Rule::unique(Sukien::class, 'sk_id')->ignore($sukien),
            ],
        ]);

        $sukien->fill($request->get('sukien'));


        $sukien->save();

        Toast::info(__('Khuyến mãi was saved'));

        return redirect()->route('platform.systems.khuyenmai');
    }

    /**
     * @param Sukien $role
     *
     * @throws \Exception
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function remove(Sukien $sp)
    {
        $sp->delete();

        Toast::info(__('Danh Mục San phẩm was removed'));

        return redirect()->route('platform.systems.khuyenmai');
    }
}
