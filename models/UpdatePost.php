<?php

namespace app\models;


use yii\base\Model;
use yii;

/**
 * UserUpdate form
 */
class UpdatePost extends Model
{

  public  $image;
  public  $title;
  public  $text;
  /**
   * @var Post
   */
  private $_post;

  public function __construct(Post $post, $config = [])
  {
    $this->_post = $post;
    $this->image = $post->image;
    $this->title = $post->title;
    $this->text = $post->text;
    parent::__construct($config);
  }

  public function rules()
  {
    return [
      [['image', 'title', 'text',], 'required', 'message' => 'Введите значение...'],
    ];
  }

  public function update()
  {
    if ($this->validate()) {
      $post = $this->_post;

      $post->image = $this->image;
      $post->text = $this->text;
      $post->title = $this->title;

      return $post->save();
    } else {
      return false;
    }
  }
}
