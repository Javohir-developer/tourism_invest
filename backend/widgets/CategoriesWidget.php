<?php
namespace backend\widgets;

use backend\assets\CategoriesAsset;
use Yii;
use yii\base\Widget;
use yii\db\ActiveRecord;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\helpers\Url;
use oks\categories\models\Categories;
use oks\langs\components\Lang;
use yii\web\JsExpression;

/**
 * Class CategoriesWidget
 * @package oks\categories\widgets
 * @author OKS Technologies info@oks.uz
 * Вывод категории в выбранный записи в сингле (single)
 * @example  @file update.php folder views
 * ```php


 ...

echo oks\categories\widgets\CategoriesWidget::widget([
  'selected' => $model->categoriesSelected(),
  'model_db' => $model,'name' => 'Posts[categoriesform]'
  ]);

 ...

 * ```
 */
class CategoriesWidget extends Widget
{
    /**
     *  Вы должны вести текушей тип категории который должно вывестись эти
     *  категории перечеслаются в
        Categories::find()->allTypes();
     *  100 = posts
     *  200 = pages
     *  300 = castings
     */

    public $type = 100;//posts
    /**
     * @var array|String
     * selected array not use separator
     * but if you use string you must use separator
     */
    public $selected = [];
    /**
     * @var string
     * array
     * delimitr separator
     * , . - and others for selected by function explode
     */
    public $separator = "array";
    /**
     * @var ActiveRecord model
     */
    public $model_db;
    /**
     * @var attribute model;
     */
    public $attribute = 'categoriesform';

    public $name = "categoriesform";

    private $data = null;

    private $value = null;

    public function init()
    {
        parent::init();
        $this->data = Categories::find()->buildTreeByRoot($this->getSelected(),$this->type);
        $values = [];
        $elements = $this->model_db->categories;
        if(count($elements) > 0)  {
            foreach ($elements as $element)
            {
                $values[] =  $element->id;
            }
            $this->value = implode(",",$values);
        }
    }
    private function getSelected(){
        if($this->separator == "array")
        {
            if(is_array($this->selected))
            {
                return $this->selected;
            }
        }
        if($this->separator !== "array")
        {
            if(!is_array($this->selected))
            {
                $selecteds = explode($this->separator,$this->selected);
                $this->selected = [];
                foreach ($selecteds as $selected)
                {
                    $this->selected[$selected] = '';
                }
                return $this->selected;
            }
        }
        return $this->selected;
    }

    public function treeDrawer($data) {
        echo "<div style='margin-left:10px;'>";
        foreach ($data as $datum) {

            echo "<div class='category-selector'><input data-category-id='{$datum['key']}'" . ((in_array($datum['key'], explode(",", $this->value))) ? "checked" : "") . " type='checkbox' class='category-id' /> {$datum['title']}</div>";

            if(array_key_exists("children", $datum)) {
                $this->treeDrawer($datum["children"]);
            }
        }
        echo "</div>";
    }


    public function run()
    {

        CategoriesAsset::register(\Yii::$app->view);

        $this->treeDrawer($this->data);

        echo Html::hiddenInput($this->name, $this->value,['id' => 'categories-data']);


        return;

        echo \wbraganca\fancytree\FancytreeWidget::widget([
            'options' =>[
                'source' => $this->data,
                'extensions' => ['dnd'],
                'checkbox'=> 'true',
                'selectMode'=> 2,
                'dnd' => [
                    'preventVoidMoves' => true,
                    'preventRecursiveMoves' => true,
                    'autoExpandMS' => 400,
                    'dragStart' => new JsExpression('function(node, data) {
				return true;
			}'),
                    'dragEnter' => new JsExpression('function(node, data) {
				return true;
			}'),
                    'dragDrop' => new JsExpression('function(node, data) {
				data.otherNode.moveTo(node, data.hitMode);
			}'),
                ],
                'select' => new JsExpression('function(event, data) {
        // Display list of selected nodes
         var selKeys = $.map(data.tree.getSelectedNodes(), function(node){
          return node.key;
        }); 
        $("#categories-data").val(selKeys.join(","));
      }'),
            ]
        ]);


    }
}