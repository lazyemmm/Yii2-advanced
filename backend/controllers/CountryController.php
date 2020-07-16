<?php
namespace backend\controllers;

use Yii;
use yii\web\Controller;
use app\Models\Country;
use yii\data\Pagination;

class CountryController extends Controller{
    /**
     * test
     */
    function actionSay()
    {
        echo "dsb";
    }

    /**
     * get country
     */
    public function actionGetCountry()
    {
        $query = Country::find();

        $pagination = new Pagination([
            'totalCount' => $query->count(),//必须提供
            'defaultPageSize' => 5,
            'validatePage' => false,//页码不对则不显示内容
        ]);
        $countries = $query->orderBy('name')
            ->offset($pagination->offset)
            ->limit($pagination->limit)
            ->all();
        return $this->render('index', [
            'countries' => $countries,
            'pagination' => $pagination,
        ]);
    }
}
