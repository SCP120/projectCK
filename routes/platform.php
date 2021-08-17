<?php

declare(strict_types=1);

use App\Orchid\Screens\Examples\ExampleCardsScreen;
use App\Orchid\Screens\Examples\ExampleChartsScreen;
use App\Orchid\Screens\Examples\ExampleFieldsAdvancedScreen;
use App\Orchid\Screens\Examples\ExampleFieldsScreen;
use App\Orchid\Screens\Examples\ExampleLayoutsScreen;
use App\Orchid\Screens\Examples\ExampleScreen;
use App\Orchid\Screens\Examples\ExampleTextEditorsScreen;
use App\Orchid\Screens\PlatformScreen;
use App\Orchid\Screens\Role\RoleEditScreen;
use App\Orchid\Screens\Role\RoleListScreen;
use App\Orchid\Screens\User\UserEditScreen;
use App\Orchid\Screens\User\UserListScreen;
use App\Orchid\Screens\User\UserProfileScreen;
use Illuminate\Support\Facades\Route;
use Tabuna\Breadcrumbs\Trail;
use App\Orchid\Screens\sanpham\SanPhamEditScreen;
use App\Orchid\Screens\sanpham\SanPhamListScreen;
use App\Orchid\Screens\sanpham\DanhMucSPListScreen;
use App\Orchid\Screens\sanpham\DanhMucSPEditScreen;
use App\Orchid\Screens\sanpham\MenuListScreen;
use App\Orchid\Screens\sanpham\MenuEditScreen;
use App\Orchid\Screens\sanpham\ThongTinEditScreen;
use App\Orchid\Screens\sanpham\KhachHangListScreen;
use App\Orchid\Screens\donhang\DonHangListScreen;
use App\Orchid\Screens\donhang\DonHangChiTietListScreen;
use App\Orchid\Screens\complains\GopYListScreen;
use App\Orchid\Screens\complains\NhanXetListScreen;
use App\Orchid\Screens\khuyenmai\KhuyenMaiListScreen;
use App\Orchid\Screens\khuyenmai\KhuyenMaiEditScreen;
/*
|--------------------------------------------------------------------------
| Dashboard Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the need "dashboard" middleware group. Now create something great!
|
*/

// Main
Route::screen('/main', PlatformScreen::class)
    ->name('platform.main');

// Platform > Profile
Route::screen('profile', UserProfileScreen::class)
    ->name('platform.profile')
    ->breadcrumbs(function (Trail $trail) {
        return $trail
            ->parent('platform.index')
            ->push(__('Profile'), route('platform.profile'));
    });

// Platform > System > Users
Route::screen('users/{user}/edit', UserEditScreen::class)
    ->name('platform.systems.users.edit');

// Platform > System > Users > Create
Route::screen('users/create', UserEditScreen::class)
    ->name('platform.systems.users.create')
    ->breadcrumbs(function (Trail $trail) {
        return $trail
            ->parent('platform.systems.users')
            ->push(__('Create'), route('platform.systems.users.create'));
    });

// Platform > System > Users > User
Route::screen('users', UserListScreen::class)
    ->name('platform.systems.users')
    ->breadcrumbs(function (Trail $trail) {
        return $trail
            ->parent('platform.index')
            ->push(__('Users'), route('platform.systems.users'));
    });

// Platform > System > Roles > Role
Route::screen('roles/{roles}/edit', RoleEditScreen::class)
    ->name('platform.systems.roles.edit')
    ->breadcrumbs(function (Trail $trail, $role) {
        return $trail
            ->parent('platform.systems.roles')
            ->push(__('Role'), route('platform.systems.roles.edit', $role));
    });

// Platform > System > Roles > Create
Route::screen('roles/create', RoleEditScreen::class)
    ->name('platform.systems.roles.create')
    ->breadcrumbs(function (Trail $trail) {
        return $trail
            ->parent('platform.systems.roles')
            ->push(__('Create'), route('platform.systems.roles.create'));
    });

// Platform > System > Roles
Route::screen('roles', RoleListScreen::class)
    ->name('platform.systems.roles')
    ->breadcrumbs(function (Trail $trail) {
        return $trail
            ->parent('platform.index')
            ->push(__('Roles'), route('platform.systems.roles'));
    });

// Example...
Route::screen('example', ExampleScreen::class)
    ->name('platform.example')
    ->breadcrumbs(function (Trail $trail) {
        return $trail
            ->parent('platform.index')
            ->push(__('Example screen'));
    });

    Route::screen('sanpham/create', SanPhamEditScreen::class)
    ->name('platform.systems.sanpham.create')
    ->breadcrumbs(function (Trail $trail) {
        return $trail
            ->parent('platform.systems.sanpham')
            ->push(__('Create'), route('platform.systems.sanpham.create'));
    });

Route::screen('sanpham', SanPhamListScreen::class)
    ->name('platform.systems.sanpham')
    ->breadcrumbs(function (Trail $trail) {
        return $trail
            ->parent('platform.index')
            ->push(__('Sản phẩm'), route('platform.systems.sanpham'));
    });



Route::screen('sanpham/{sanphamId}/edit', SanPhamEditScreen::class)
    ->name('platform.systems.sanpham.edit')
    ->breadcrumbs(function (Trail $trail, $sanphamId) {
        return $trail
            ->parent('platform.systems.sanpham')
            ->push(__('Edit'), route('platform.systems.sanpham.edit', $sanphamId));
    });

    Route::screen('danhmucsp/create', DanhMucSPEditScreen::class)
    ->name('platform.systems.danhmucsp.create')
    ->breadcrumbs(function (Trail $trail) {
        return $trail
            ->parent('platform.systems.danhmucsp')
            ->push(__('Create'), route('platform.systems.danhmucsp.create'));
    });


Route::screen('danhmucsp', DanhMucSPListScreen::class)
    ->name('platform.systems.danhmucsp')
    ->breadcrumbs(function (Trail $trail) {
        return $trail
            ->parent('platform.index')
            ->push(__('Categories'), route('platform.systems.danhmucsp'));
    });


Route::screen('danhmucsp/{danhmucspId}/edit', DanhMucSPEditScreen::class)
    ->name('platform.systems.danhmucsp.edit')
    ->breadcrumbs(function (Trail $trail, $danhmucspId) {
        return $trail
            ->parent('platform.systems.danhmucsp')
            ->push(__('Edit'), route('platform.systems.danhmucsp.edit', $danhmucspId));
    });

    Route::screen('menu/create', MenuEditScreen::class)
    ->name('platform.systems.menu.create')
    ->breadcrumbs(function (Trail $trail) {
        return $trail
            ->parent('platform.systems.menu')
            ->push(__('Create'), route('platform.systems.menu.create'));
    });


    Route::screen('menu', MenuListScreen::class)
    ->name('platform.systems.menu')
    ->breadcrumbs(function (Trail $trail) {
        return $trail
            ->parent('platform.index')
            ->push(__('Menu'), route('platform.systems.menu'));
    });


Route::screen('menu/{menuId}/edit', MenuEditScreen::class)
    ->name('platform.systems.menu.edit')
    ->breadcrumbs(function (Trail $trail, $menuId) {
        return $trail
            ->parent('platform.systems.menu')
            ->push(__('Edit'), route('platform.systems.menu.edit', $menuId));
    });

    Route::screen('donhang', DonHangListScreen::class)
    ->name('platform.systems.donhang')
    ->breadcrumbs(function (Trail $trail) {
        return $trail
            ->parent('platform.index')
            ->push(__('Đơn hàng'), route('platform.systems.donhang'));
    });

    Route::screen('donhang/chitiet', DonHangChiTietListScreen::class)
    ->name('platform.systems.donhangchitiet')
    ->breadcrumbs(function (Trail $trail) {
        return $trail
            ->parent('platform.index')
            ->push(__('Đơn hàng chi tiết'), route('platform.systems.donhangchitiet'));
    });

    Route::screen('gopy', GopYListScreen::class)
    ->name('platform.systems.gopy')
    ->breadcrumbs(function (Trail $trail) {
        return $trail
            ->parent('platform.index')
            ->push(__('Góp ý'), route('platform.systems.gopy'));
    });

    Route::screen('nhanxet', NhanXetListScreen::class)
    ->name('platform.systems.nhanxet')
    ->breadcrumbs(function (Trail $trail) {
        return $trail
            ->parent('platform.index')
            ->push(__('Comment'), route('platform.systems.nhanxet'));
    });

    Route::screen('khuyenmai/create', KhuyenMaiEditScreen::class)
    ->name('platform.systems.khuyenmai.create')
    ->breadcrumbs(function (Trail $trail) {
        return $trail
            ->parent('platform.systems.khuyenmai')
            ->push(__('Create'), route('platform.systems.khuyenmai.create'));
    });

    Route::screen('khuyenmai', KhuyenMaiListScreen::class)
    ->name('platform.systems.khuyenmai')
    ->breadcrumbs(function (Trail $trail) {
        return $trail
            ->parent('platform.index')
            ->push(__('Khuyến mãi'), route('platform.systems.khuyenmai'));
    });



Route::screen('khuyenmai/{khuyenmaiId}/edit', KhuyenMaiEditScreen::class)
    ->name('platform.systems.khuyenmai.edit')
    ->breadcrumbs(function (Trail $trail, $khuyenmaiId) {
        return $trail
            ->parent('platform.systems.khuyenmai')
            ->push(__('Edit'), route('platform.systems.khuyenmai.edit', $khuyenmaiId));
    });

    Route::screen('khachhang', KhachHangListScreen::class)
    ->name('platform.systems.khachhang')
    ->breadcrumbs(function (Trail $trail) {
        return $trail
            ->parent('platform.index')
            ->push(__('Khách Hàng'), route('platform.systems.khachhang'));
    });

    Route::screen('thongtin/create', ThongTinEditScreen::class)
    ->name('platform.systems.thongtin.create')
    ->breadcrumbs(function (Trail $trail) {
        return $trail
            ->parent('platform.systems.sanpham')
            ->push(__('Create'), route('platform.systems.thongtin.create'));
    });

    Route::screen('thongtin/{thongtinId}/edit', ThongTinEditScreen::class)
    ->name('platform.systems.thongtin.edit')
    ->breadcrumbs(function (Trail $trail, $thongtinId) {
        return $trail
            ->parent('platform.systems.sanpham')
            ->push(__('Edit'), route('platform.systems.thongtin.edit', $thongtinId));
    });







Route::screen('example-fields', ExampleFieldsScreen::class)->name('platform.example.fields');
Route::screen('example-layouts', ExampleLayoutsScreen::class)->name('platform.example.layouts');
Route::screen('example-charts', ExampleChartsScreen::class)->name('platform.example.charts');
Route::screen('example-editors', ExampleTextEditorsScreen::class)->name('platform.example.editors');
Route::screen('example-cards', ExampleCardsScreen::class)->name('platform.example.cards');
Route::screen('example-advanced', ExampleFieldsAdvancedScreen::class)->name('platform.example.advanced');

//Route::screen('idea', 'Idea::class','platform.screens.idea');