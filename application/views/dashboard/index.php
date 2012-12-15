<form class="form-signin span3" method="post" >
    <h2 class="lead">Tweet</h2>
    <textarea name="tweet" rows="3" placeholder="Write something!" maxlength="140"></textarea>

    <button class="btn btn-success btn-primary" type="submit">Sign in</button>
</form>

    <h2>My tweets</h2>

        <table class="table table-striped table-bordered span6">
			<thead>
			<tr>
				<th>
					Tweet
				</th>
				<th class="span3">
					Time
				</th>
			</tr>
			</thead>
            <tbody>
            <?php foreach($tweets as $tweet): ?>
                <tr>
                    <td><?php echo $tweet->content; ?> </td>
                    <td><?php echo $tweet->created; ?> </td>
                </tr>
            <?php endforeach?>
            </tbody>
        </table>