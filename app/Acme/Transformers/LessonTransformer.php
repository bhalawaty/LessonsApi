<?php


namespace App\Acme\Transformers;


class LessonTransformer extends Transformer
{

    public function transform($lesson)
    {
        return [
            'title' => $lesson['title'],
            'active' => (boolean)$lesson['some_bool'],
            'body' => $lesson['body']
        ];
    }
}
