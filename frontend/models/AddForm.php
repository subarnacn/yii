<?php
namespace frontend\models;

//use models\AddForm;
use yii\base\Model;
use Yii;

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
    public function add()
    {
        if ($this->validate()) {
            $book = new Book();
            $book->bookname = $this->bookname;
            $book->authorname = $this->authorname;
            $book->about = $this->about;
            $book->page = $this->page;
            // $book->generateAuthKey();
            if ($book->save()) {
                return $book;
            }
        }

        return null;
    }
}
