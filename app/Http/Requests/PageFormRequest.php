<?php

namespace App\Http\Requests;

use App\PageDetail;
use App\Pages;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;

class PageFormRequest extends FormRequest
{
    protected $slug;

    public function __construct()
    {
        parent::__construct();
        $this->slug = request()->route('name');
    }

    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        if ($this->user()->user_type == 'admin') return true;
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        $slug = $this->slug;
        if ($slug == 'about-us')
            return [
                'title' => 'required|max:150',
                'slogan' => 'required|max:150',
                'image' => 'mimes:jpeg,jpg,png|required_without:oldImage',
                'description' => 'required',
            ];
        elseif ($slug == 'contact')
            return [
                'name' => 'required|unique:pages',
                'title' => 'required|max:150',
                'description' => 'required',
                'address' => 'required',
                'phone' => 'required',
                'email' => 'required|email',
            ];
        return abort(400);
    }

    public function save()
    {
        $content['title'] = $this->title;
        $content['image'] = ($this->image) ? $this->saveImage() : $this->oldImage;
        $content['slogan'] = $this->slogan;
        $content['description'] = $this->description;
        $meta['meta_title'] = $this->meta_title;
        $meta['meta_description'] = $this->meta_description;
        $content = json_encode($content);
        $meta = json_encode($meta);
        $page_id = Pages::query()->where('slug', $this->slug)->value('id');
        PageDetail::query()->updateOrCreate(
            [
                'page_id' => $page_id]
            , [
            'content' => $content,
            'meta' => $meta
        ]);
    }

    public function saveImage()
    {
        $image = $this->image;
        $pathTo = 'app/public/uploads/admin/about/';
        $error = false;
        try { //Saving New Image
            $fileName = md5(uniqid(rand(), true)) . '.' . $image->getClientOriginalExtension();
            $storage_path = storage_path($pathTo);
            if (!is_dir($storage_path)) {
                mkdir($storage_path);
            }
            list($width) = getimagesize($image);
            $width = $width < 700 ? $width : 700;
            Image::make($image)->resize($width, null, function ($constraint) {
                $constraint->aspectRatio();
                $constraint->upsize();
            })->save(storage_path($pathTo . $fileName));
        } catch (Exception $e) {
            $error = true;
        }
        if (!$error) {
            //delete old image
            Storage::delete($pathTo . $this->oldImage);
        }
        return $fileName;
    }
}
