<!DOCTYPE html>
<html>
<head>
	<title>AJAX TODOLIST</title>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	
	{{-- font awesome cdn --}}

	<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.css" integrity="sha256-rByPlHULObEjJ6XQxW/flG2r+22R5dKiAoef+aXWfik=" crossorigin="anonymous" />
</head>
<body>
<br>
<br>
	<div class="container">
		<div class="row">
			{{-- <div class="col-md-3"></div> --}}
			<div class="col-md-6 col-md-offset-3">
				<div class="panel panel-default">
				  <div class="panel-heading" id="addNew">Add Items<a href="#" data-toggle="modal" data-target="#Modal"><i class="fa fa-plus pull-right" aria-hidden="true"></i></a></div>

				  <div class="panel-body" id="items">
				  	<ul class="list-group">
				  		@foreach ($items as $item)
						  <li class='list-group-item ourItem' data-toggle="modal" data-target="#Modal">{{ $item->item }}
						  	<input type="hidden" id="itemId" value="{{ $item->id }}">
						  </li>
				  		@endforeach
					</ul>
				  </div>
				</div>
			</div>

			{{-- Modal --}}
			<div class="modal" tabindex="-1" id="Modal" role="dialog">
			  <div class="modal-dialog" role="document">
			    <div class="modal-content">
			      <div class="modal-header">
			        <h5 class="modal-title" id="title">Add New Items</h5>
			        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
			          <span aria-hidden="true">&times;</span>
			        </button>
			      </div>
			      <div class="modal-body">
			        <p><input type="text" name="name" id="addItem" class="form-control" placeholder="Add Your Items">
			        <input type="hidden" id="id">
			        </p>
			      </div>
			      <div class="modal-footer">
			        <button type="button" class="btn btn-primary" data-dismiss="modal" id="saveChanges" style="display: none;">Save changes</button>
			        <button type="button" id="delete" class="btn btn-warning" data-dismiss="modal" style="display: none;">Delete</button>
			        <button type="button" class="btn btn-primary" data-dismiss="modal" id="addButton">Add Items</button>
			      </div>
			    </div>
			  </div>
			</div>
			<div class="col-md-2">
				<input type="text" name="item" class="form-control" id="term" placeholder="Search">
			</div>
@csrf

			{{-- <div class="col-md-3"></div> --}}
		</div>
	</div>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js" integrity="sha256-KM512VNnjElC30ehFwehXjx1YCHPiQkOPmqnrWtpccM=" crossorigin="anonymous"></script>
<script type="text/javascript">
	$(document).ready(function() {
		$(document).on('click', '.ourItem', function(event) {

				$('#title').text('Edit Item');
				var text =$(this).text();
				var text = $.trim(text);
				var id = $(this).find('#itemId').val();
				$('#addItem').val(text);
				$('#delete').show('400');
				$('#saveChanges').show('400');
				$('#addButton').hide('400');
				$('#id').val(id);
		});


		$(document).on('click', '#addNew', function(event) {

			$('#title').text('Add New Item');
			$('#addItem').val("");
			$('#delete').hide('400');
			$('#saveChanges').hide('400');
			$('#addButton').show('400');

		});


		$('#addButton').click(function(event) {
			var text = $('#addItem').val();
			if (text == "") 
			{
				alert("Fill The Form");
			}
			else
			{
				$.post('list', {text: text, _token: $('input[name=_token]').val()}, function(data) {
					/*optional stuff to do after success */
				console.log(data);
				$('#items').load(location.href + ' #items');
				});	
			}
		});

		$('#delete').click(function(event) {
			var id = $('#id').val();
			$.post('delete', {id: id, _token: $('input[name=_token]').val()}, function(data) {
			$('#items').load(location.href + ' #items');
			console.log(data);
			});
		});

		$('#saveChanges').click(function(event) {
			var id = $('#id').val();
			var value = $.trim($('#addItem').val());
			$.post('update', {id: id, value:value, _token: $('input[name=_token]').val()}, function(data) {
			$('#items').load(location.href + ' #items');
			console.log(data);
			});
		});

		$( function() {
    var availableTags = [
      "ActionScript",
      "AppleScript",
      "Asp",
      "BASIC",
      "C",
      "C++",
      "Clojure",
      "COBOL",
      "ColdFusion",
      "Erlang",
      "Fortran",
      "Groovy",
      "Haskell",
      "Java",
      "JavaScript",
      "Lisp",
      "Perl",
      "PHP",
      "Python",
      "Ruby",
      "Scala",
      "Scheme"
    ];
    $( "#term" ).autocomplete({
      source: 'http://127.0.0.1:8000/search'
    });
  } );


	});
</script>
</body>
</html>