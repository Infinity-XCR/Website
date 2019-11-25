<?php
/* @var $this yii\web\View */
/* @var $model app\models\LoginForm */

use yii\helpers\Html;
use yii\widgets\ActiveForm;

$options = ["template"=>'{input}{error}'];
?>
<?php $form = ActiveForm::begin(); ?>
<div class="col-md-12">
	<div class="col-md-4">
	<?php require("300x250.php"); ?>
	</div>
	<div class="col-md-4">
	  <div class="panel panel-primary">
		<div class="panel-heading">
			<h1 class="panel-title">Log-in</h1>
		</div>
		<div style="padding: 30px;">
			<?php if(isset($_GET['error'], $_GET['message'])): ?>
			<br>
			<div class="alert alert-danger"><?= $_GET['message']; ?></div>
			<?php endif; ?>
			<br>
			<?= $form->field($model, 'username',$options)
			  ->input("text", ["placeholder"=>"Username or E-mail"]); ?>
			<?= $form->field($model, 'password',$options)
			  ->passwordInput(["placeholder"=>"************"]); ?>

			<?= Html::submitButton("LOGIN", ["class" => "btn btn-danger"]) ?>

			<button type="button" class="btn btn-warning" onclick="location.href='/session/register<?= isset($_GET['referedBy']) ? '?referedBy='.$_GET['referedBy'] : '' ?>'" style="cursor: pointer;">
				REGISTER
			</button>
			<br><br>
			<button type="button" class="btn btn-success" onclick="jQuery('#sBtns').slideToggle()" style="cursor: pointer;">
				Read before registering
			</button>
			<div id="sBtns" style="display: none; ">
			<br><br>
				<button type="button" class="btn btn-primary" onclick="sendA('en')" style="cursor: pointer;">
					English
				</button>
			</div>
			<br><br>
		</div>
		
		<div class="login-help">
			<a href="/session/recover">You can't login?</a>
		</div>
	  </div>
	</div>
	<div class="col-md-4">
	<?php require("300x250.php"); ?>
	</div>
</div>
<?php ActiveForm::end(); ?>
<script>
function sendA(l){
	if (l == "es") {
		alert("Dear user...\n\Welcome on N.E.X.U.S private server.\n\nWe want to announce you, that we are in developement state, anyway we preparing a lot of changes in our server for have a best game and more players...");
	}
}
    <?php if(isset($_GET['request']) && $_GET['request'] == 'login'):?>
        alert('Success, now you can login<br>');
    <?php elseif(isset($_GET['request']) && $_GET['request'] == 'enableAccount'):?>
        alert("Success, we send you an email, please click on LINK for activate your account<br>");
    <?php endif; ?>
</script>