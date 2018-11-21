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
            'name' => 'required',
            'slug' => 'required'
        ];
    }

    public function save()
    {
        $category = new Category;
        $this->store($category);

    }

    public function update($category)
    {
        $this->store($category);
    }

    /**
     * @param $category
     * @param $categoy
     */
    public function store($category): void
    {
        $category->name = $this->name;
        $category->slug = $this->slug;
        $category->save();
    }
}
