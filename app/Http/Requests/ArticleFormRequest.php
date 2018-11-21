<?php

namespace App\Http\Requests;

use App\Article;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;

class ArticleFormRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return $this->user()->isSuperAdmin();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {

        return [
            'title' => 'required',
            'category' => 'required',
            'description' => 'required',
            'image' => 'mimes:jpeg,jpg,png|required_without:oldImage|dimensions:min_width:700,min_height:300',
        ];
    }

    public function save()
    {
        $article = new Article();
        $this->store($article);
    }


    public function store($article)
    {
        $article->title = $this->title;
//        $article->category = $this->category;
        $article->description = $this->description;
        $article->published = $this->published;
        $article->save();
        $article->categories()->sync($this->category);
        $id = $article->id;
        if (isset($this->image) && $this->image):
            $article->image = $this->saveImage($this->image, $id);
        endif;
        $article->save();
    }

    public function saveImage($image, $id)
    {
        $pathTo = 'public/uploads/articles/' . $id . '/';
        $error = false;
        try {
            //Saving New Image
            $fileName = md5(uniqid(rand(), true)) . '.' . $image->getClientOriginalExtension();
            $storage_path = $pathTo;
            if (!is_dir($storage_path)) {
                Storage::makeDirectory($storage_path);
                $storage_path = storage_path($pathTo);
            }
            list($width) = getimagesize($image);
            $width = $width < 800 ? $width : 800;
            $image = Image::make($image)->resize($width, null, function ($constraint) {
                $constraint->aspectRatio();
                $constraint->upsize();
            })->encode();
            Storage::put($pathTo . $fileName, $image);
        } catch (\Exception $e) {
            $error = true;
        }
        if (!$error) {
//            delete old image
            Storage::delete($pathTo . $this->oldImage);
        }
        return $fileName;
    }
}
