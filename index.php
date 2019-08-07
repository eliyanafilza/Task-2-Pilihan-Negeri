<?php 

	include("connection.php");

	$sql_states = "SELECT s.id, s.name FROM states s LEFT JOIN state_select ss ON s.id = ss.state_id WHERE ss.state_id IS NULL";
    $result = mysqli_query($conn, $sql_states);
    $states = mysqli_fetch_all($result, MYSQLI_BOTH);

    $sql_selected = "SELECT ss.select_id AS id_selected, s.name FROM state_select ss JOIN states s ON ss.state_id = s.id";
    $result = mysqli_query($conn, $sql_selected);
    $selected_state = mysqli_fetch_all($result, MYSQLI_BOTH);

?>


<html>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
	<title>Assignment 2</title>
	<head>Pemilihan Negeri</head>

	<body>

		<div>
			<select id="state" name="state">
			 <option value="" selected disabled>Sila Pilih</option>
			 <?php 
			 	foreach ($states as $key => $value) { ?>
			 		<option id="state_item_<?= $value['id'] ?>" value="<?= $value['id'] ?>"><?= $value['name'] ?></option>
			 <?php } ?>
			</select>
			<button type="button" id="btn_submit" class="btn btn-info">Pilih</button>
		</div>

		

		<div>
			 <select id="selected_state_list" name="selected_state_list" style="width: 20%" multiple="multiple">
                <?php 
                    foreach ($selected_state as $key => $value){
                ?>
                    <option id="selected_state_name<?= $value['id_selected'] ?>" value="<?= $value['id_selected'] ?>"><?= $value['name'] ?></option>
     			<?php } ?>
            </select>
		</div>


		<script>
		
			 $("#btn_submit").click(function(){
				var state = $('#state').val();
			
				var ajax = $.ajax({
					method: "POST",
					url: "select_process.php",
					data: { state : state }
				});

				var nama_negeri = $('#state_item_'+ state).text();
				$('#state_item_' + state).remove();
					ajax.done(function(){
						console.log("success");
						location.reload();
						 $("#selected_state_list").append('<option id="selected_state_item_"'+name+' value="'+name+'">'+nama_negeri+'</option>');
				  });
				  
				  
			});

			$( "#selected_state_list" ).dblclick(function() {
				
				var item = $(this).val();

				var select = item[0];

				var ajax = $.ajax({
					method: "POST",
					url: "delete_process.php",
					data: { select : select }
				});

				ajax.done(function(){
					console.log("data dipadam");
					location.reload();

				});
			});
			
		</script>

	</body>

</html>

