<?php include ROOT.'/views/header.php';?>
<div class="container" style="height: 100px"></div>
<div class="container">
	<form action="index.php?page=4" method="post" enctype="multipart/form-data">
			<div class="form-group">
				<label for="name">Name</label>
				<input type="text" name="name" class="form-control">
			</div>
								
			<div class="form-group">
				<label for="email">Email adres</label>
				<input type="email" name="email" class="form-control">
			</div>
			<div class="form-group">
				<label for="comment">Comment</label>
				<textarea name="comment" style=" width:100% " ></textarea>
			</div>
			<button type="submit" class="btn btn-primary" name="addcomment">send</button>
	</form>
</div>
<?php include ROOT.'/views/footer.php';?>