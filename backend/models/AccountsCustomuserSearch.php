<?php
namespace backend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\AccountsCustomuser;

class AccountsCustomuserSearch extends AccountsCustomuser
{
    public function rules()
    {
        return[
            [['id'], 'integer'],
            [['username', 'email', 'password'], 'safe'],
        ];
    }

    public function scenarios()
    {
        return Model::scenarios();
    }

    public function search($params)
    {
        $query = AccountsCustomuser::find();
        $dataProvider = new ActiveDataProvider([
            'query'=> $query,
        ]);
        $this->load($params);

        if (!$this->validate()) {
            return $dataProvider;
        }

        $query->andFilterWhere(['id' => $this->id]);
        $query->andFilterWhere(['like','email', $this->email])->andFilterWhere(['like','username', $this->username]);

        return $dataProvider;
    }
}