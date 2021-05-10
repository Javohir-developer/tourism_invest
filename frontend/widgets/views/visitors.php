<section class="visitors">
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-sm-12 col-xs-12">
                <div class="frame">
                    <div class="img">
                        <img src="<?= $this->getImageUrl("img/tashrif.svg")?>" alt="">
                    </div>
                    <div class="text">
                        <div class="title"><?=__('Tashriflar hisoblagichi')?></div>
                        <div class="list">
                            <a><span><?=__('Online')?></span><span class="line"></span><span><?=Yii::$app->userCounter->getOnline();?></span></a>
                            <a><span><?=__('Bugungi hostlar')?></span><span class="line"></span><span><?=Yii::$app->userCounter->getToday()?></span></a>
                            <a><span><?=__('Barcha xostlar')?></span><span class="line"></span><span><?=Yii::$app->userCounter->getTotal()?></span></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-12 col-xs-12">
                <div class="frame">
                    <div class="img img1">
                        <img src="<?= $this->getImageUrl("img/xatotekst.svg")?>" alt="">
                    </div>
                    <div class="text"><?=__('Matnda xato ko`rdingizmi? Sichqoncha bilan belgilab CTRL + ENTER tugmasini bosing')?></div>
                </div>
            </div>
            <div class="col-md-4 col-sm-12 col-xs-12">
                <div class="news">
                    <div class="title"><?=__('Yangiliklarga a’zo bo’lish')?></div>
                    <div class="join">
                        <form action="<?= \yii\helpers\Url::to('site/ajax')?>" name="subscribe" id="subscribe2">
                            <input type="email" placeholder="<?=__('Elektron manzilingizni kiriting')?>">
                            <button></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>