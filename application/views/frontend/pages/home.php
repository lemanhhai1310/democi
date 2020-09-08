<div class="uk-section-xsmall">
	<div class="uk-container">
		<form id="send_form" class="uk-form-stacked">
			<div class="uk-margin">
				<label class="uk-form-label" for="form-stacked-text">Text</label>
				<div class="uk-form-controls">
					<input class="uk-input" id="form-stacked-text" name="f_text" type="text" placeholder="Some text...">
				</div>
			</div>
			<div class="uk-margin">
				<label class="uk-form-label" for="form-stacked-desc">Description</label>
				<div class="uk-form-controls">
					<textarea class="uk-textarea" id="form-stacked-desc" name="f_desc" rows="5" placeholder="Textarea"></textarea>
				</div>
			</div>
			<div class="uk-margin">
				<button type="submit" id="addBtn" class="uk-button uk-button-primary">Submit</button>
			</div>
		</form>
	</div>
</div>
<div class="uk-section uk-background-muted">
	<div class="uk-container">
		<table class="uk-table uk-table-justify uk-table-divider">
			<thead>
			<tr>
				<th class="uk-width-small">Table Heading</th>
				<th>Table Heading</th>
				<th>Table Heading</th>
			</tr>
			</thead>
			<tbody>
			<tr>
				<td>Table Data</td>
				<td>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</td>
				<td>
					<a href="#" class="uk-icon-link uk-margin-small-right" uk-icon="copy"></a>
					<a href="#" class="uk-icon-link uk-margin-small-right" uk-icon="file-edit"></a>
					<a href="#" class="uk-icon-link" uk-icon="trash"></a>
				</td>
			</tr>
			</tbody>
		</table>
	</div>
</div>
<script>
	var form = $("#send_form"),
		base_url = '<?= base_url() ?>'

	form.on('submit',function (e) {
		e.preventDefault()
		$.ajax({
			url: base_url+'adddata',
			method: 'POST',
			dataType: 'json',
			data: {
				text: $('#form-stacked-text').val(),
				desc: $('#form-stacked-desc').val(),
			},
			success: function (response) {
				console.log(response)
				form.trigger('reset')
			},
			error: function (xhr, ajaxOptions, thrownError) {
				console.log(xhr.status)
				console.log(thrownError)
			}
		})
	})
</script>
