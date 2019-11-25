<?php
/* @var $this yii\web\View */
/* @var $model app\models\LoginForm */

use yii\helpers\Html;
use yii\widgets\ActiveForm;

$options = ["template"=>'{input}{error}'];
?>
<?php $form = ActiveForm::begin(); ?>
<div class="col-md-12">
<div class="col-md-3">
<?php require("300x250.php"); ?>
</div>
<div class="col-md-6">
  <div class="panel panel-primary">
	<div class="panel-heading">
		<h1 class="panel-title">Registration</h1>
	</div>
	<div style="padding: 40px;">
		<div class="col-md-6">
			Nickname:
			<?= $form->field($model, 'Name',$options)
				->textInput(["placeholder"=>"Username", "required"=>"required"]); ?>
		</div>
		<div class="col-md-6">
			E-mail:
			<?= $form->field($model, 'Email',$options)
				->textInput(["placeholder"=>"example@hotmail.com", "required"=>"required", "type"=>"email"]); ?>
			<div style="background: darkgreen; color: white; margin-bottom: 5px; border-radius: 5px; display: none;" id="emailMsg">
				<b>English:</b> <br>You can't recover your account if you are not using a real e-mail.<br><br>
				<b>Español:</b> <br>No podrás recuperar tu cuenta si no usas un correo real.
			</div>
		</div>
		<div class="col-md-6">
			Password:
			<?= $form->field($model, 'pwHash',$options)
				->passwordInput(["placeholder"=>"*********", "required"=>"required"]); ?>
		</div>
		<div class="col-md-6">
		Company:
		<?= Html::dropDownList("factionId","factionId",['1'=>'Organium','2'=>'Berazum','3'=>'Not implemented yet.'],["class"=>"form-control select","style"=>"width: 97%;"]); ?>
		</div>
		<div class="clearfix"></div>
		<!--<div class="col-md-6" style="color: red;">
		Bonus Type:
		<?= Html::dropDownList("bonusType","bonusType",['1'=>'undefined','2'=>'undefined','3'=>'undefined'],["class"=>"form-control select","style"=>"width: 97%;"]); ?>
		</div>-->
		<div class="col-md-6">
		Language:
		<?= Html::dropDownList("language","language",['us'=>'English','es'=>'Español'],["class"=>"form-control select","style"=>"width: 97%;"]); ?>
		</div>
		<div class="clearfix"></div>
		<hr>
		<button type="submit" class="btn btn-primary">PLAY NOW</button>
		<a href="/session/login" class="btn btn-default">CANCEL</a>
	</div>
  </div>
</div>
<div class="col-md-3">
<?php require("300x250.php"); ?>
</div>
</div>
<script>
window.onload = function(e){ 
	$("form :input").on('keyup',function() {
		console.log(this);
		if ($(this).prop("id") == "users-email") {
			$( "#emailMsg" ).slideDown( 1000 );
		} else {
			if ($("#emailMsg").is(":visible")){
				setTimeout(function(){
					$( "#emailMsg" ).slideUp( 2000 );
				},3000)
			}
		}
	});
}

function changeTextV (text) {
	$("#cTV").html(text);
}
function checkForm(form)
  {

	$("#cTV").css("background","darkred");
    re = /^\w+$/;

	console.log(form);
    if(form.value != "" && form.value == form.value) {
      if(form.value.length < 6) {
        changeTextV("<b>English:</b> <br>Error: token must contain at least 6 characters!<br><br><b>Español:</b> <br>Error: El Token debe tener mínimo 6 caracteres!");
        form.focus();
        return false;
      }
      re = /[0-9]/;
      if(!re.test(form.value)) {
        changeTextV("<b>English:</b> <br>Error: token must contain at least one number (0-9)!<br><br><b>Español:</b> <br>Error: El Token debe tener al menos un número");
        form.focus();
        return false;
      }
      re = /[a-z]/;
      if(!re.test(form.value)) {
        changeTextV("<b>English:</b> <br>Error: token must contain at least one lowercase letter (a-z)!<br><br><b>Español:</b> <br>Error: El Token debe tener al menos una letra en minúscula (a-z)!");
        form.focus();
        return false;
      }
      re = /[A-Z]/;
      if(!re.test(form.value)) {
        changeTextV("<b>English:</b> <br>Error: token must contain at least one uppercase letter (A-Z)!<br><br><b>Español:</b> <br>Error: El Token debe tener al menos una letra en mayúscula (A-Z)");
        form.focus();
        return false;
      }
	  
	  if (form.value == $("#users-pwhash").val()) {
        changeTextV("<b>English:</b> <br>Error: You can't use your password here!<br><br><b>Español:</b> <br>Error: No puedes usar tu contraseña aquí");
        form.focus();
        return false;
	  }
    } else {
      changeTextV("<b>English:</b> <br>Error: Please check that you've entered and confirmed your password!<br><br><b>Español:</b> <br>Error: Por favor asegúrate de que hayas escrito un Token");
      form.focus();
      return false;
    }

	$("#cTV").css("background","darkgreen");
    changeTextV("<b>English:</b> <br>You entered a valid Token: " + form.value + "<br><br><b>Español:</b> <br>Haz ingresado un Token válido: " + form.value);
    return true;
  }
</script>
<?php ActiveForm::end(); ?>