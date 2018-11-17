<?php

namespace App\Http\Requests;

use App\Category;
use Illuminate\Foundation\Http\FormRequest;

class CategoryFormRequest extends FormRequest
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
            'slug' => 'required'
        ];
    }

    public function update()
    {
        if (isset($this->id)) {
            $category = Category::query()->find($this->id);
        } else {
            $category = new Category();
        }

        $category->name = $this->title;
        $category->slug = $this->slug;
        $category->save();

    }
}
