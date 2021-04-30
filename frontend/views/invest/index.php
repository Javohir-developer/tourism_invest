<?php
$lang = Yii::$app->language;
$this->title = Yii::t('app','Joylashtirish vositalarining reyestri');
$this->params['titlebreadcrumbs'] = Yii::t('app','REYESTR');
$this->params['breadcrumbs'][] = 'Reyestr';
?>

<style>
    .table-responsive {
        overflow-x: hidden;
    }
    #datatable1_filter{
        float: right;
    }
    .fbox-icon i {
        font-size: 1.2rem;
        line-height: 2.4rem;
    }
    .fbox-icon {
        width: 4rem;
        height: 2.4rem;
        padding: 0 .75rem;
    }
</style>

<section id="content">
    <div class="content-wrap">
        <div class="container clearfix">

            <div class="table-responsive">
                <table id="datatable1" class="table table-striped table-bordered" cellspacing="0" width="100%">
                    <thead>
                    <tr>
                        <th>НАИМЕНОВАНИЕ ПРОЕКТА</th>
                        <th>РЕГИОН</th>
                        <th>ВИД ДЕЯТЕЛЬНОСТИ</th>
                        <th>СОЗДАВАЕМЫЕ РАБОЧИЕ МЕСТА</th>
                        <th>Xaritada joylashuvi</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($invest as $inv):?>
                    <tr>
                        <td><?=$inv->project_name; ?></td>
                        <td><?=$inv->region->name_uz; ?></td>
                        <td><?=$inv->vid->value_uz; ?></td>
                        <td><?=$inv->created_jobs; ?></td>
                        <td>
                            <a href="">
                                <div class="fbox-icon">
                                    <a href="<?= \yii\helpers\Url::to(["/invest/views?latitude=$inv->latitude&longitude=$inv->longitude"], true); ?>"><i class="icon-eye i-alt"></i></a>
                                </div>
                            </a>

                        </td>
                    </tr>
                    <?php endforeach;?>
                    </tbody>
                </table>
            </div>

        </div>
    </div>
</section>