
<script src="static/js/feedback.js"></script>


<div class="container">
	<div class="row">
		<div class="col-sm-6 col-sm-offset-3">
			<h2 class="text-center" id="title">
				Student feedback
			</h2>
			<br/>
			<form method="post" id="feedback_form" class="form-horizontal" role="form">
				<div class="form-group">
					<label for="inputEmail" class="col-sm-2 control-label">Email</label>
					<div class="col-sm-10">
						<input type="email" name="email" class="form-control" id="inputEmail" 
						placeholder="Please enter your email" required="" onchange="check_address()">
					</div>
				</div>
				<div id="msg"></div>
				<label for="option_area" class="col-sm-2">Category</label>
				<div class="=radio-inline col-sm-10" id="option_area">
					<label>
						<input type="radio" name="option" id="option1" value="suggest">
						Give suggesstions       
					</label>
					<label>
						<input type="radio" name="option" id="option2" value="complain">
						I'd like to complain
					</label>
				</div>
				<textarea class="form-control" id="content" name="content" rows="15" placeholder="Leave us an message..."></textarea>
				<br/>
			</form>
			<div class="col-sm-4 col-sm-offset-4" id="btn_area">
					<button class="btn btn-lg btn-primary btn-block" data-loading-text="Sending..." id="btn">Send</button>
			</div>
			<div id="callback"></div>
		</div>
	</div>
</div>

