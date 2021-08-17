<?php

declare(strict_types=1);

namespace App\Orchid\Screens;

use Orchid\Screen\Actions\Link;
use Orchid\Screen\Screen;
use Orchid\Support\Facades\Layout;
use Orchid\Screen\TD;
use App\Orchid\Layouts\Examples\ChartBarExample;
use App\Orchid\Layouts\Examples\ChartLineExample;
use App\Orchid\Layouts\Examples\MetricsExample;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Orchid\Screen\Actions\Button;
use Orchid\Screen\Actions\DropDown;
use Orchid\Screen\Actions\ModalToggle;
use Orchid\Screen\Fields\Input;
use Orchid\Screen\Repository;
use Orchid\Platform\Models\Donhang;
use Orchid\Platform\Models\Sanpham;
use Orchid\Platform\Models\DonhangChitiet;
use App\Orchid\Layouts\DoanhSoChartLayouts;

class PlatformScreen extends Screen
{
    /**
     * Display header name.
     *
     * @var string
     */
    public $name = 'Dashboard';

    /**
     * Display header description.
     *
     * @var string
     */
    public $description = 'Welcome to E4 admin panel.';

    /**
     * Query data.
     *
     * @return array
     */
    public function query(): array
    {
        $donhang1 = Donhang::all();
        $donhang = $donhang1 ->all();

        $sanpham1 = Sanpham::all();
        $sanpham = $sanpham1 ->all();

        $dhChiTiet1= DonhangChitiet::all();
        $dhChiTiet= $dhChiTiet1 ->all();

        $donhangDanhgia1 = 0;
        $todayOrders = 0;
        foreach ($donhang as $don){
                if($don->trangthai == 'Pending'){
                     $donhangDanhgia1 ++;
                }
                if(date_format(date_create($don->ngaytao),"Y/m/d") == date("Y/m/d")){
                    $todayOrders ++;
                }
        };
        $xiaomiValue=[];
        $samsungValue=[];
        $iphoneValue=[];
        $vsmartValue=[];
        $oppoValue=[];
        $nokiaValue=[];
        $otherValue=[];
        $xiaomiTime=[];
        $samsungTime=[];
        $iphoneTime=[];
        $vsmartTime=[];
        $oppoTime=[];
        $nokiaTime=[];
        $otherTime=[];

        foreach($donhang as $don){
            foreach($dhChiTiet as $dh){
                if($dh->dh_id == $don->id){
                    foreach($sanpham as $sp){
                        if($dh->sp_id == $sp->id){
                            if($sp->danhmuc_id==1){
                                array_push($samsungValue, (float)$don->tongtien);
                                $date = date('l', strtotime($don->ngaytao));
                                // $date1= $date->format("l");
                                array_push($samsungTime, $date);
                            }
                            if($sp->danhmuc_id==2){
                                array_push($iphoneValue, (float)$don->tongtien);
                                $date = date('l', strtotime($don->ngaytao));
                                // $date1= $date->format("l");
                                array_push($iphoneTime, $date);
                            }
                            if($sp->danhmuc_id==7){
                                array_push($otherValue, (float)$don->tongtien);
                                $date = date('l', strtotime($don->ngaytao));
                                // $date1= $date->format("l");
                                array_push($otherTime, $date);
                            }
                            if($sp->danhmuc_id==3){
                                array_push($xiaomiValue, (float)$don->tongtien);
                                $date = date('l', strtotime($don->ngaytao));
                                // $date1= $date->format("l");
                                array_push($xiaomiTime, $date);
                            }
                            if($sp->danhmuc_id==4){
                                array_push($vsmartValue, (float)$don->tongtien);
                                $date = date('l', strtotime($don->ngaytao));
                                // $date1= $date->format("l");
                                array_push($vsmartTime, $date);
                            }
                            if($sp->danhmuc_id==5){
                                array_push($oppoValue, (float)$don->tongtien);
                                $date = date('l', strtotime($don->ngaytao));
                                // $date1= $date->format("l");
                                array_push($oppoTime, $date);
                            }
                            if($sp->danhmuc_id==6){
                                array_push($nokiaValue, (float)$don->tongtien);
                                $date = date('l', strtotime($don->ngaytao));
                                // $date1= $date->format("l");
                                array_push($nokiaTime, $date);
                            }
                        }
                    }
                }
            }
        }
            
        

        $sanpham1 = Sanpham::all();
        $sanpham= $sanpham1 ->all();

        return [
            'metrics' => [
                ['keyValue' => array_sum(array_column($donhang, 'tongtien'))],
                ['keyValue' => count($sanpham)],

                ['keyValue' => $donhangDanhgia1],
                ['keyValue' => $todayOrders],
            ],
            'charts'  => [
                [
                    'name'   => 'Xiaomi',
                    'values' => $xiaomiValue,
                    'labels' => ['Monday','Tuesday','Wednesday','Thursday','Friday','Saturday','Sunday'],
                ],
                [
                    'name'   => 'Samsung',
                    'values' => $samsungValue,
                    'labels' => ['Monday','Tuesday','Wednesday','Thursday','Friday','Saturday','Sunday'],
                ],
                [
                    'name'   => 'Apple',
                    'values' => $iphoneValue,
                    'labels' => ['Monday','Tuesday','Wednesday','Thursday','Friday','Saturday','Sunday'],
                ],
                [
                    'name'   => 'Vsmart',
                    'values' =>  $vsmartValue,
                    'labels' => ['Monday','Tuesday','Wednesday','Thursday','Friday','Saturday','Sunday'],
                ],
                [
                    'name'   => 'Oppo',
                    'values' => $oppoValue,
                    'labels' => ['Monday','Tuesday','Wednesday','Thursday','Friday','Saturday','Sunday'],
                ],
                [
                    'name'   => 'Nokia',
                    'values' => $nokiaValue,
                    'labels' => ['Monday','Tuesday','Wednesday','Thursday','Friday','Saturday','Sunday'],
                ],
                [
                    'name'   => 'Other',
                    'values' => $otherValue,
                    'labels' => ['Monday','Tuesday','Wednesday','Thursday','Friday','Saturday','Sunday'],
                ],
            ],
            'sanphamCharts' => Sanpham::countForGroup('hang')->toChart(),
        ];
    }

    /**
     * Button commands.
     *
     * @return \Orchid\Screen\Action[]
     */
    // public function commandBar(): array
    // {
    //     return [
    //         Link::make('Website')
    //             ->href('http://orchid.software')
    //             ->icon('globe-alt'),

    //         Link::make('Documentation')
    //             ->href('https://orchid.software/en/docs')
    //             ->icon('docs'),

    //         Link::make('GitHub')
    //             ->href('https://github.com/orchidsoftware/platform')
    //             ->icon('social-github'),
    //     ];
    // }

    /**
     * Views.
     *
     * @return \Orchid\Screen\Layout[]
     */
    public function layout(): array
    {
        return [
            MetricsExample::class,
            
                ChartLineExample::class,
                DoanhSoChartLayouts::class,
        ];
    }
}
