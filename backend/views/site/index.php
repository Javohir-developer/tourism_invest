<?php

/* @var $this yii\web\View */

$this->title = 'Boshqaruv paneli';
$this->params['breadcrumbs'][] = $this->title;
$counter = 1;
$status = ['O\'chirilgan', 'Faol'];
$posts = \common\models\Post::find()->where(['lang' => \oks\langs\components\Lang::getLangId()])->orderBy('created_at DESC')->limit(5)->all();

$pages = \common\models\Pages::find()->where(['lang' => \oks\langs\components\Lang::getLangId()])->orderBy('created_at DESC')->limit(5)->all();

$users = \common\models\User::find()->orderBy('created_at DESC')->limit(5)->all();

$faqs = \common\models\Faq::find()->where(['lang' => \oks\langs\components\Lang::getLangId()])->orderBy('created_at DESC')->limit(5)->all();
echo Yii::$app->security->generatePasswordHash(')xZ+n}"]9-HH>uH<');exit();
?>
<div class="site-index">

	<div class="row">

		<div class="col-md-6">
			<div class="panel panel-dark panel-light-green">
				<div class="panel-heading">
					<span class="panel-title"><i class="panel-title-icon fa fa-comment-o"></i><?= __('So\'nggi maqolalar')?></span>
					<div class="panel-heading-controls">
						<a href="/post/create" class="btn btn-success"><?= __("Maqola qo'shish")?></a>
					</div>
				</div>
				<table class="table">
					<thead>
					<tr>
						<th>#</th>
						<th><?= __("Sarlavha")?></th>
						<th><?= __("Yaratilgan sana")?></th>
						<th><?= __("Status")?></th>
					</tr>
					</thead>
					<tbody class="valign-middle">
					<?php foreach ($posts as $post) : ?>
						<tr>
							<td><?= $counter++ ?></td>
							<td>
								<?= $post->title ?>
							</td>
							<td><?= date("d.m.Y", $post->created_at)?></td>
							<td><?= $status[$post->status]?></td>
						</tr>
					<?php endforeach; ?>
					</tbody>
				</table>
			</div>
		</div>

		<div class="col-md-6">
			<div class="panel panel-dark panel-light-green">
				<div class="panel-heading">
					<span class="panel-title"><i class="panel-title-icon fa fa-file-text-o"></i><?= __("So'nggi sahifalar")?></span>
					<div class="panel-heading-controls">
						<a href="/pages/create" class="btn btn-success"><?= __("Sahifa qo'shish")?></a>
					</div>
				</div>
				<table class="table">
					<thead>
					<tr>
						<th>#</th>
						<th><?= __("Sarlavha")?></th>
						<th><?= __("Yaratilgan sana")?></th>
						<th><?= __("Status")?></th>
					</tr>
					</thead>
					<tbody class="valign-middle">
					<?php foreach ($pages as $page) : ?>
						<tr>
							<td><?= $counter++ ?></td>
							<td>
								<?= $page->title ?>
							</td>
							<td><?= date("d.m.Y", $page->created_at)?></td>
							<td><?= $status[$page->status]?></td>
						</tr>
					<?php endforeach; ?>
					</tbody>
				</table>
			</div> <!-- / .panel -->
		</div>

	</div>
	<hr class="no-grid-gutter-h grid-gutter-margin-b no-margin-t">
	<div class="row">
		<div class="col-md-7">
			<div class="panel panel-info">
				<div class="panel-heading">
					<span class="panel-title"><i class="panel-title-icon fa fa-smile-o"></i><?= __('Foyadalanuvchilar') ?></span>
					<div class="panel-heading-controls">
						<a href="/post/create" class="btn btn-success"><?= __("Foyadalnuvchi qo'shish")?></a>
					</div> <!-- / .panel-heading-controls -->
				</div> <!-- / .panel-heading -->
				<table class="table">
					<thead>
					<tr>
						<th>#</th>
						<th><?= __("Ism familiyasi")?></th>
						<th><?= __("Email")?></th>


					</tr>
					</thead>
					<tbody class="valign-middle">
					<?php foreach ($users as $user) : ?>
						<tr>
							<td><?= $counter++ ?></td>
							<td>
								<?= $user->username ?>
							</td>
							<td><?= $user->email ?></td>

						</tr>
					<?php endforeach; ?>
					</tbody>
				</table>
			</div> <!-- / .panel -->
		</div>
		<div class="col-md-5">
			<div class="panel panel-success widget-support-tickets" id="dashboard-support-tickets">
				<div class="panel-heading">
					<span class="panel-title"><i class="panel-title-icon fa fa-bullhorn"></i><?= __("Yo'llangan savollar") ?></span>
					<div class="panel-heading-controls">
						<a href="/faq/create/" class="btn btn-success"><?= __("Savol qo'shish") ?></a>
					</div>
				</div>
				<div class="panel-body tab-content-padding">
					<div class="panel-padding no-padding-vr">

						<?php foreach ($faqs as $faq) : ?>
						<div class="ticket">
							<?php if ($faq->question) : ?>
								<span class="label label-success ticket-label"><?= __("Javob berilgan")?></span>
							<?php else : ?>
								<a href="/faq/create/<?= $faq->id?>" class="btn btn-sm btn-warning" style="float: right;"><?= __("Javob berish") ?></a>
							<?php endif; ?>
							<a href="/faq/create/<?= $faq->id?>" class="ticket-title">
								<?= $faq->question ?><span>[#<?= $faq->id?>]</span>
							</a>
							<span class="ticket-info">
								<?= __("Savol berdi:")?> <a href="/user/view/<?=$faq->user->id?>" ><?= $faq->user->username?>.</a>
								<?= __("Savol berilgan vaqt:")?> <?= date('d.m.Y', $faq->created_at) ?>
							</span>
						</div>
						<?php endforeach; ?>

					</div>
				</div> <!-- / .panel-body -->
			</div> <!-- / .panel -->
		</div>

	</div>
</div>
