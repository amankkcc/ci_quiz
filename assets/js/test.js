$('document').ready(function(){
	$('#bt_submit').click(function(){
		var data = JSON.stringify($('#dataForm').serializeArray());
		$.ajax({
		  method: "POST",
		  url: "handle.php",
		  data: data
		})
		.done(function( msg ) {
		    alert( "Data Saved: " + msg );
		})
		.fail(function(xhr,setting, error){

		});
	});// end of click
});

/* 

php codes to receive this data

$input = file_get_contents("php://input");


$received = json_decode($input, true);

$data = array();

	foreach( $received as $value)
	{
		$data[$value['name']] = $value['value'];
	}


// php codes to send response data

$data = array();

$json_data = json_encode($data);

echo $json_data;
