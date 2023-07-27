<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use App\Http\Requests\PagesRequest;
use Illuminate\Http\Request;
use App\Models\Page;
use Illuminate\Support\Str;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\File;

class PagesController extends Controller
{
    public function getPages(){
        $pages = Page::all();
        return view('backend.pages.pages')->with('pages',$pages);
    }

    public function getPagesAdd(){
        return view('backend.pages.page-add');
    }

    public function getPagesEdit($pageId){
        $pages = Page::where('id',$pageId)->first();
        return view('backend.pages.page-edit')->with('pages',$pages);
    }
    public function postPages(Request $request){
        if(isset($request->delete)){
            try {
                $pages =  Page::where('id',$request->id)->first();
                File::delete(public_path($pages->page_image));
                Page::where('id', $request->id)->delete();
                if (isset($request->page_image)){
                    File::delete(public_path($request->page_image));
                }
                toastr()->success('Sayfa Silindi', 'Başarılı');
            } catch (\Exception $e) {
                toastr()->error('Sayfa Silinemedi', 'Başarısız');
            }
        }

        elseif(isset($request->page_status)){
            try {
                Page::where('id', $request->id)->update($request->all());
                toastr()->success('Sayfa Durumu değiştirildi', 'Başarılı');
            } catch (\Exception $e) {
                toastr()->error('Sayfa Durumu değiştirilemedi', 'Başarısız');
            }
        }
    }

    public function postPagesAdd(PagesRequest $request)
    {
        try {
            $date = Str::slug(Carbon::now());
            $imageName = Str::slug($request->page_name) . '-' . $date;
            Image::make($request->file('image'))->save(public_path('/uploads/pages/') . $imageName . '.jpg')->encode('jpg','50');
            $request->merge(['page_image' => '/uploads/pages/'.$imageName.'.jpg']);
            $request->merge(['page_status' => $request->page_status == 'on' ? 'on' : 'off']);

            Page::create($request->all());

           /* $pages = new Page;
            $pages->page_name = $request->page_name;
            $pages->page_description = $request->page_description;
            $pages->page_tags = $request->page_tags;
            $pages->page_content = $request->page_content;
            $pages->page_status = $request->page_status;
            $pages->page_image = $request->page_image;

            $pages->save();*/

           /* Page::create([
                'page_name' => $request->page_name,
                'page_description' => $request->page_description,
                'page_tags' => $request->page_tags,
                'page_content' => $request->page_content,
                'page_status' => $request -> page_status,
                'page_image' => $request -> page_image,
            ]);*/
            toastr()->success('Sayfa Eklendi', 'Başarılı');
            return redirect()->route('page-add');
        }
        catch (\Exception $e) {
            toastr()->error('Sayfa Eklenemedi', 'Başarısız');
            return back();
        }
    }

    public function postPagesEdit(Request $request,$pageId){
        try {
            $pages =  Page::where('id',$pageId)->first();
            if ($request->hasFile('page_image')){
                File::delete(public_path($pages->page_image));
                $date = Str::slug(Carbon::now());
                $imageName = Str::slug($request->page_name) . '-' . $date;
                Image::make($request->file('page_image'))->save(public_path('/uploads/pages/') . $imageName . '.jpg')->encode('jpg','50');
            }

            Page::where('id',$pageId)->update([
                'page_name' => $request->page_name,
                'page_description'=> $request->page_description,
                'page_tags'=> $request->page_tags,
                'page_content'=> $request->page_content,
                'page_image'=> $request->hasFile('page_image') ? '/uploads/pages/' . $imageName . '.jpg' : $pages->page_image,
                'page_status'=> $request->page_status == 'on' ? 'on' : 'off',
            ]);

            return response(['status' => 'success', 'title' => 'Başarılı', 'content' => 'Sayfa Güncellendi ']);
        } catch (\Exception $e) {
            return response(['status' => 'error', 'title' => 'Başarısız', 'content' => 'Sayfa Güncellenemedi']);
        }
    }

}
