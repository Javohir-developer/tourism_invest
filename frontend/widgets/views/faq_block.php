<div class="faq_block" xmlns="http://www.w3.org/1999/html">
    <div class="Bcontainer">
        <div class="left_block">
            <div class="title_block"><span><?=__('Вопросы и ответы')?></span>
                <a  href="javascript:void(0)" class="ask_question_btn"> <?=__('Задавать вопрось')?>
            </a>
            </div>
            <?php
            $portfolioSearch = new \common\models\QuestionSearch();
            $dataProvider = $portfolioSearch->search(\Yii::$app->request->queryParams);
            $dataProvider->query->orderBy(['id' => SORT_DESC]);
            $dataProvider->query->andWhere(['status'=>'1']);
            $dataProvider->pagination->pageSize = 10;
            echo \yii\widgets\ListView::widget([
                'dataProvider' => $dataProvider,
                'itemView' => '_item',
                'summary' => '',
                'pager' => [
                    'class' => \kop\y2sp\ScrollPager::className(),
                    'noneLeftText' => '',
                    'triggerTemplate' => '<div style="clear: both"></div> </div><a style="margin: 0 auto;width: 205px" href="javascript:void(0)" class="load_more">Загрузить еще</a>'
                ]
            ]);
            ?>
        </div>
        <?__('<div class="right_block">
            <div class="wrap">
                <div class="title">Внимание! Членам общество</div>
                <div class="text">
                    <p>Практическое задание заключается в определении хлористых солей по ГОСТ 21534-76 (метод А) в шифрованной пробе государственного стандартного образца. Объявляется диапазон концентрации в шифрованной пробе государственного стандартного
                        образца, контрольное время для выполнения задания, установленное исходя из технологии выполнения работ.</p>
                    <p>Председатель комитета социального партнерства, экспертизы условий и охраны труда Департамента труда и занятости населения Томской области Горячева Жанна Юрьевна</p>
                </div>
            </div>
        </div>
        ')?>
    </div>
</div>