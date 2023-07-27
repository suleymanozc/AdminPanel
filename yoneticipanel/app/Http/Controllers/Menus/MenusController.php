<?php

namespace App\Http\Controllers\Menus;

use App\Http\Controllers\Controller;
use App\Http\Requests\MenusRequest;
use Illuminate\Http\Request;
use App\Models\Menu;
use App\Models\Page;
use Illuminate\Support\Str;

class MenusController extends Controller
{
    public function getMenus()
    {

        $menus = Menu::where('up_menu', 0)->orderBy('list', 'asc')->get();
        return view('backend.menus.menus')->with('menus', $menus);
    }

    public function getMenusAdd()
    {
        $pages = Page::all();
        $menus = Menu::all();
        return view('backend.menus.menu-add', compact('menus', 'pages'));
    }

    public function getMenusEdit($menuId)
    {
        $pages = Page::all();
        $menus = Menu::all();
        $menu = Menu::where('id', $menuId)->first();
        return view('backend.menus.menu-edit', compact('menus', 'pages', 'menu'));
    }

    public function postMenus(Request $request)
    {
       if(isset($request->item)){
            try {
                foreach ($_POST['item'] as $key => $value) {
                    $menus = Menu::find(intval($value));
                    $menus->list = intval($key);
                    $menus->save();
                }
                toastr()->success('Menü Sırası Değiştirildi', 'Başarılı');
                return back();
            } catch (\Exception $e) {
                toastr()->error('Menü Sırası Değiştirilemedi', 'Başarısız');
            }
        }
        elseif(isset($request->delete)){
            try {
                Menu::where('id', $request->id)->delete();
                toastr()->success('Menü Silindi', 'Başarılı');
                return back();
            } catch (\Exception $e) {
                toastr()->error('Menü Silinemedi', 'Başarısız');
            }
        }

    }

    public function postMenusAdd(MenusRequest $request)
    {
        try {
            $slug = Str::slug($request->menu_name, '-');
            $request->merge(['menu_slug' => $slug]);
            $request->merge(['menu_status' => $request->menu_status == 'on' ? 'on' : 'off']);
            Menu::create($request->all());
            toastr()->success('Menü Eklendi', 'Başarılı');
            return redirect()->route('menu-add');
        } catch (\Exception $e) {
            toastr()->error('Menü Eklenemedi', 'Başarısız');
            return back();
        }
    }

    public function postMenusEdit(Request $request, $menuId)
    {
        try {
            $slug = Str::slug($request->menu_name, '-');
            $request->merge(['menu_slug' => $slug]);
            $request->merge(['menu_status' => $request->menu_status == 'on' ? 'on' : 'off']);
            Menu::where('id', $menuId)->update($request->all());
            toastr()->success('Menü Güncellendi', 'Başarılı');
        } catch (\Exception $e) {
            toastr()->error('Menü Güncellenemedi', 'Başarısız');
        }
    }

    public function menusDelete($menuId){
        $deleted = Menu::whereId($menuId)->first();
        if($deleted){
            Menu::whereId($menuId)->delete();
            toastr()->success('Menü Silindi', 'Başarılı');
            return redirect()->route('menus');
        }

    }
}
