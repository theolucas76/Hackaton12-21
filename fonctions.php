<?php
	if( isset($_POST['submitHour']) ) {
		postForm();
	}else{
		echo 'pas bien';
	}




	public function postForm(){
		if( isset($_POST['submitHour']) ){
			echo 'coucou';
		}else{
			echo 'coucoucoucouco';
		}
	}

