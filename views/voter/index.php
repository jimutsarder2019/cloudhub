<?php

use app\models\Voter;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var app\models\VoterSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Voters';

if(@$page == 'visit'){
    $this->title = 'Voters Visit';
}else if(@$page == 'call'){
    $this->title = 'Voters Call';
}else if(@$page == 'confirmed'){
	$this->title = 'Confirmed Vote List';
}else if(@$page == 'confirm'){
	$this->title = 'Confirm Vote';
}
$this->params['breadcrumbs'][] = $this->title;
?>
<style>
.call_done{
	background-color: lightgreen;
}
.visit_done{
	background-color: lightpink;
}
.call_visit_done{
	background-color: lightgray;
}
.confirm{
	background-color: lightblue;
}
</style>
<div class="page-body">
	<!-- Container-fluid starts-->
	<div class="container-fluid">
		<div class="page-header">
			<div class="row">
				<div class="col-lg-6">
					<div class="page-header-left">
						<h3><?= Html::encode($this->title) ?></h3>
						<?php if(@$page == 'voter'){ ?>
						</br>
						
						<p>
							<?= Html::a('Create Voter', ['create'], ['class' => 'btn btn-success']) ?>
						</p>
						<?php  } ?>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Container-fluid Ends-->

	<!-- Container-fluid starts-->
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12">
				<div class="card">
					<div class="card-body">
						<div class="user-status table-responsive latest-order-table">
							<?= GridView::widget([
								'dataProvider' => $dataProvider,
								'filterModel' => $searchModel,
								'rowOptions' => function ($model, $key, $index, $grid) {
									// $model is the current data model being rendered
									// check your condition in the if like `if($model->hasMedicalRecord())` which could be a method of model class which checks for medical records.
									if($model->visit_done && $model->call_done) { 
										 return ['class' => 'call_visit_done'];
									}
									else if($model->visit_done) { 
										 return ['class' => 'visit_done'];
									}
									else if($model->call_done) { 
										 return ['class' => 'call_done'];
									}else if($model->confirm) { 
										 return ['class' => 'confirm'];
									}
									return [];
								},
								'columns' => [
									//['class' => 'yii\grid\SerialColumn'],

									//'id',
									'company',
									'name',
									'ispab_member',
									'voter_no',
									'mobile1',
									//'mobile2',
									'email:email',
									//'thana',
									'district',
									//'address',
									//'license',
									//'date',
									[
									    'visible' => (@$page == 'confirm' || @$page == 'confirmed')?false:true,
										'label' => 'Call Done',
										'headerOptions' => ['style' => 'color:#ff4c3b'],
										'content' => function ($model) {
											return ($model->call_done)?'<span style="color:green; font-weight:bold; font-size:16px">Yes</span>':'<a href="?r=voter/call-done&vid='.$model->id.'"><span style="color:red; font-weight:bold; font-size:16px"><i style="color:red" class="fa fa-phone"></i> Call</span></a>';
										}
									],
									[
									    'visible' => (@$page == 'confirm' || @$page == 'confirmed')?false:true,
										'label' => 'Visit Done',
										'headerOptions' => ['style' => 'color:#ff4c3b'],
										'content' => function ($model) {
											return ($model->visit_done)?'<span style="color:green; font-weight:bold; font-size:16px">Yes</span>':'<a href="?r=voter/visit-done&vid='.$model->id.'"><span style="color:red; font-weight:bold; font-size:16px"><i style="color:red" class="fa fa-eye"></i>Visit</span></a>';
										}
									],
									[
										'visible' => (@$page == 'confirmed')?true:false,
									    'label' => 'Action',
										'headerOptions' => ['style' => 'color:#ff4c3b'],
										'content' => function ($model) {
											return ($model->confirm)?'<a href="?r=voter/confirm-remove&vid='.$model->id.'"><span style="color:red; font-weight:bold; font-size:16px"><i style="color:red" class="fa fa-delete"></i>Remove</span></a>':'--';
										}
									],
									[
										'visible' => (@$page == 'confirm')?true:false,
									    'label' => 'Confirm',
										'headerOptions' => ['style' => 'color:#ff4c3b'],
										'content' => function ($model) {
											return ($model->confirm)?'<span style="color:green; font-weight:bold; font-size:16px">Yes</span>':'<a href="?r=voter/confirm-done&vid='.$model->id.'"><span style="color:red; font-weight:bold; font-size:16px"><i style="color:red" class="fa fa-eye"></i>Confirm</span></a>';
										}
									],
									[
										'class' => ActionColumn::className(),
										'urlCreator' => function ($action, Voter $model, $key, $index, $column) {
											return Url::toRoute([$action, 'id' => $model->id]);
										 }
									],
								],
							]); ?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Container-fluid Ends-->
</div>
