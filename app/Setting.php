<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    protected $fillable = ['content', 'group'];

    public function saveSetting($data, $group)
    {
        $setting = self::where('group', $group)->first();

        $content = isset($setting->content) ? json_decode($setting->content, true) : '';
        $input['meta']['title'] = $data['title'] ?? (isset($content['meta']['title']) ?? '');
        $input['meta']['keywords'] = $data['keywords'] ?? $content['meta']['keywords'] ?? '';
        $input['meta']['description'] = $data['description'] ?? $content['meta']['description'] ?? '';
        $input['contact']['email'] = $data['email'] ?? $content['contact']['email'] ?? '';
        $input['contact']['phone'] = $data['email'] ?? $content['contact']['phone'] ?? '';
        self::query()->updateOrCreate([
            'group' => $group
        ], [
            'content' => json_encode($input)
        ]);
    }
}
