<?php

//header contains <body> tag
require_once("view/common/header.php");
//footer contains </body> and </html> tag
require_once("view/common/footer.php");

require_once("view/feedbackview.php");

display_header("View Feedback");
?>
<script src="static/js/view.js"></script>
<div class="container">
	<div class="row">
		<div class="col-sm-6 col-sm-offset-3">
			<h2 class="text-center" id="title">
				View feedback
			</h2>		
		</div>
	<div class="col-sm-10 col-sm-offset-1">
	<button type="button" id="bt1" class="btn btn-default">Delete</button>
	<button type="button" id="bt2" class="btn btn-default">Show Unread</button>
	<button type="button" id="bt3" class="btn btn-default">Show All</button>
	<!-- Mark as... -->
	<div class="btn-group">
		<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
			Mark as...
			<span class="caret"></span>
		</button>
		<ul class="dropdown-menu">
			<li><a href="#" id="set_read">Read</a></li>
			<li><a href="#" id="set_unread">Unread</a></li>
		</ul>
	</div>
	<table class="table table-hover">
	<!-- table header -->
	<thead>
          <tr>
          	<th><label><input type="checkbox" name="select_all" id="select_all"></label></th>
            <th>#</th>
            <th>Date</th>
            <th>Email</th>
            <th>Type</th>
            <th>Content</th>
            <th>Status</th>
          </tr>
    </thead>
    <!-- Display each item -->
    <?php get_feedback(); ?>
	<tbody>

    </tbody>
	</table>

	</div>
	</div>
</div>
<?php
display_footer();
?>





