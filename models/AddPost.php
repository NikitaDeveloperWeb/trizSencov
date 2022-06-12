<?php

namespace app\models;

use yii\base\Model;

class AddPost extends Model
{

  public  $image;
  public  $title;
  public  $text;
  public function rules()
  {
    return [
      [['image', 'title',  'text',], 'required', 'message' => 'Введите значение...'],
      [['image'], 'file', 'extensions' => 'png, jpg'],

    ];
  }
  public function Add()
  {
    $post = new Post();
    $post->image = $this->image;
    $post->title = $this->title;
    $post->text = $this->text;
    return $post->save();
  }
}
