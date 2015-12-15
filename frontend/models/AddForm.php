<?php
namespace frontend\models;

use Yii;
use yii\base\Model;


/**
 * Signup form
 */
class AddForm extends Model
{
    public $bookname;
    public $authorname;
    public $about;
    public $page;


    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            ['bookname', 'filter', 'filter' => 'trim'],
            ['bookname', 'required'],
            //['bookname', 'unique', //'targetClass' => '\common\models\Add', 'message' => 'This bookname has already been taken.'],
            ['bookname', 'string', 'min' => 2, 'max' => 255],

            ['authorname', 'filter', 'filter' => 'trim'],
            ['authorname', 'required'],
            //['authorname', 'unique', 'targetClass' => '\common\models\User', 'message' => 'This  has already been taken.'],
            ['authorname', 'string', 'min' => 2, 'max' => 255],

            ['about', 'filter', 'filter' => 'trim'],
            ['about', 'required'],
            //['authorname', 'unique', 'targetClass' => '\common\models\User', 'message' => 'This  has already been taken.'],
            ['about', 'string', 'min' => 2, 'max' => 255],

            ['page', 'filter', 'filter' => 'trim'],
            ['page', 'required'],
            //['authorname', 'unique', 'targetClass' => '\common\models\User', 'message' => 'This  has already been taken.'],
            ['page', 'string', 'min' => 2, 'max' => 255],
        ];
    }

    /**
     * Signs user up.
     *
     * @return Book|null the saved model or null if saving fails
     */
    public function AddForm()
    {
        if ($this->validate()) {
            $model = new AddForm();
            $model->bookname = $this->bookname;
            $model->authorname = $this->authorname;
            $model->about = $this->about;
            $model->page = $this->page;
            // $book->generateAuthKey();
            if ($model->save()) {
                return $model;
            }
        }

        return null;
    }
}
