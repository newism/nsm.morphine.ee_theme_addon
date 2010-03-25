<div class="tg" id="NSM_Cloneable">
	<h2>Simple table (Cloneable)</h2>
	<div class="alert info">
		<p>A table containing cloneable tbody > tr rows. Autoatically updates s_order and delete keys on add and delete events.</p>
		<pre><code>$("#table-cloneable table").NSM_Cloneable({
	cloneTemplate: $("&lt;tr&gt;"
		+ "&lt;td&gt;Order: &lt;input type='text' name='clone1[][s_order]' value='' style='width:20px;' /&gt;&lt;/td&gt;"
		+ "&lt;td&gt;&nbsp;&lt;/td&gt;"
		+ "&lt;td&gt;&lt;span class='icon delete'&gt;Delete&lt;/span&gt;&lt;/td&gt;"
	+ "&lt;/tr&gt;")
}).NSM_UpdateInputsOnChange();</code></pre>
	</div>
	<table id="clone1" class="cloneable NSM_Stripeable">
		<thead>
			<tr>
				<th scope="col">Order</th>
				<th scope="col">Delete</th>
			</tr>
		</thead>
		<tbody>
		</tbody>
	</table>
	<button class="add">Add a row</a>
</div>

<script type="text/javascript" charset="utf-8">
	$("#NSM_Cloneable table").NSM_Cloneable({
    cloneTemplate: $("<tr>"
        + "<td><input type='text' name='clone1[][s_order]' value='' style='width:20px;' /></td>"
		+ "<td><button class='delete' type='button'>Delete</span></td>"
        + "</tr>")
    })
	.NSM_UpdateInputsOnChange();
</script>
