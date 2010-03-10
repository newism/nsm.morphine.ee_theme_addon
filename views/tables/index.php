<ul class="menu tabs">
	<li><a href="#simple-table">Simple table</a></li>
	<li><a href="#simple-data-table">Simple data table</a></li>
	<li><a href="#simple-table-sortable">Simple date table (sortable)</a></li>
	<li><a href="#table-group-filtering">Table group with filtering</a></li>
	<li><a href="#simple-table-sub-headings">Table with sub headings</a></li>
	<li><a href="#show_all">Show all</a></li>
</ul>

<div class="tg" id="simple-table">
	<h2>Simple table</h2>
	<div class="alert info">A sample info alert</div>
	<table>
		<thead>
			<tr>
				<th scope="col">Heading 1</th>
				<th scope="col">Heading 2</th>
				<th scope="col">Heading 3</th>
			</tr>
		</thead>
		<tfoot>
			<tr>
				<td>&nbsp;</td>
				<td>Foot 2</td>
				<td>Foot 3</td>
			</tr>
		</tfoot>
		<tbody>
			<tr class="even">
				<th scope="row">Heading 1</th>
				<td>td</td>
				<td>td</td>
			</tr>
			<tr class="odd">
				<th scope="row">Heading 2</th>
				<td>td</td>
				<td>td</td>
			</tr>
			<tr class="even">
				<th scope="row">Heading 3</th>
				<td>td</td>
				<td>td</td>
			</tr>
		</tbody>
	</table>
</div>


<div class="tg" id="simple-data-table">
	<h2>Simple data table</h2>
	<div class="alert info">A sample info alert</div>
	<table class="data">
		<thead>
			<tr>
				<th scope="col">Heading 1</th>
				<th scope="col">Heading 2</th>
				<th scope="col">Heading 3</th>
			</tr>
		</thead>
		<tfoot>
			<tr>
				<td>&nbsp;</td>
				<td>Foot 2</td>
				<td>Foot 3</td>
			</tr>
		</tfoot>
		<tbody>
			<tr class="even">
				<th scope="row">th[scope=row]</th>
				<td>td</td>
				<td>td</td>
			</tr>
			<tr class="odd">
				<th scope="row">th[scope=row]</th>
				<td>td</td>
				<td>td</td>
			</tr>
			<tr class="even">
				<th scope="row">th[scope=row]</th>
				<td>td</td>
				<td>td</td>
			</tr>
		</tbody>
	</table>
</div>

<div class="tg" id="simple-table-sortable">
	<h2>Simple data table (sortable)</h2>
	<div class="alert info">A sample info alert</div>
	<table class="data col-sortable">
		<thead>
			<tr>
				<th scope="col">Heading 1</th>
				<th scope="col">Heading 2</th>
				<th scope="col">Heading 3</th>
			</tr>
		</thead>
		<tfoot>
			<tr>
				<td>&nbsp;</td>
				<td>Foot 2</td>
				<td>Foot 3</td>
			</tr>
		</tfoot>
		<tbody>
			<tr class="even">
				<th scope="row">Heading 1</th>
				<td>1</td>
				<td>td</td>
			</tr>
			<tr class="odd">
				<th scope="row">Heading 2</th>
				<td>3</td>
				<td>td</td>
			</tr>
			<tr class="even">
				<th scope="row">Heading 3</th>
				<td>2</td>
				<td>td</td>
			</tr>
		</tbody>
	</table>
</div>
<style type="text/css" media="screen">
</style>
<div class="tg" id="simple-table-sortable">
	<h2>Simple data table (sortable) colgroup test</h2>
	<table class="data col-sortable">
		<col class="id">
		<col class="date">
		<thead>
			<tr>
				<th scope="col">ID</th>
				<th scope="col">Date</th>
				<th scope="col">Number</th>
			</tr>
		</thead>
		<tbody>
			<tr class="even">
				<th scope="row">1</th>
				<td>2010-02-19 15:40</td>
				<td>13</td>
			</tr>
			<tr class="odd">
				<th scope="row">2</th>
				<td>2010-03-06 12:06</td>
				<td>15</td>
			</tr>
			<tr class="even">
				<th scope="row">3</th>
				<td>2010-03-06 12:02</td>
				<td>12</td>
			</tr>
		</tbody>
	</table>
</div>

<div class="tg" id="table-group-filtering">
	<h2>Table group with filtering</h2>
	<div class="alert info">A sample info alert</div>
	<ul class="menu tabs">
		<li><a href="#tg2-t1">Table 1</a></li>
		<li><a href="#tg2-t2">Table 2</a></li>
		<li><a href="#tg2-show_all">Show all</a></li>
	</ul>
	<div id="tg2-t1">
		<h3>Table 1</h3>
		<table>
			<thead>
				<tr>
					<th scope="col">Heading 1</th>
					<th scope="col">Heading 2</th>
					<th scope="col">Heading 3</th>
				</tr>
			</thead>
			<tfoot>
				<tr>
					<td>&nbsp;</td>
					<td>Foot 2</td>
					<td>Foot 3</td>
				</tr>
			</tfoot>
			<tbody>
				<tr class="even">
					<th scope="row">th[scope=row]</th>
					<td>td</td>
					<td>td</td>
				</tr>
				<tr class="odd">
					<th scope="row">th[scope=row]</th>
					<td>td</td>
					<td>td</td>
				</tr>
				<tr class="even">
					<th scope="row">th[scope=row]</th>
					<td>td</td>
					<td>td</td>
				</tr>
			</tbody>
		</table>
	</div>
	<div id="tg2-t2">
		<h3>Table 2</h3>
		<table>
			<thead>
				<tr>
					<th scope="col">Heading 1</th>
					<th scope="col">Heading 2</th>
					<th scope="col">Heading 3</th>
				</tr>
			</thead>
			<tfoot>
				<tr>
					<td>&nbsp;</td>
					<td>Foot 2</td>
					<td>Foot 3</td>
				</tr>
			</tfoot>
			<tbody>
				<tr class="even">
					<th scope="row">th[scope=row]</th>
					<td>td</td>
					<td>td</td>
				</tr>
				<tr class="odd">
					<th scope="row">th[scope=row]</th>
					<td>td</td>
					<td>td</td>
				</tr>
				<tr class="even">
					<th scope="row">th[scope=row]</th>
					<td>td</td>
					<td>td</td>
				</tr>
			</tbody>
		</table>
	</div>
</div>

<div class="tg" id="simple-table-sub-headings">
	<h2>Simple table with sub headings</h2>
	<div class="alert info">A sample info alert</div>
	<table>
		<tfoot>
			<tr>
				<td>&nbsp;</td>
				<td>Foot 2</td>
				<td>Foot 3</td>
			</tr>
		</tfoot>
		<tbody>
			<tr class="even">
				<th scope="row">th[scope=row]</th>
				<td colspan="2">td</td>
				<td>td</td>
			</tr>
			<tr class="odd">
				<th scope="row">th[scope=row]</th>
				<td colspan="2">td</td>
				<td>td</td>
			</tr>
			<tr class="even">
				<th scope="row" rowspan="2">th[scope=row]</th>
				<th class="sub-heading">Sub heading</th>
				<td>td</td>
				<td>td</td>
			</tr>
			<tr class="even">
				<th class="sub-heading">Sub heading</th>
				<td>td</td>
				<td>td</td>
			</tr>
			<tr class="odd">
				<th scope="row">th[scope=row]</th>
				<td colspan="2">td</td>
				<td>td</td>
			</tr>
		</tbody>
	</table>
</div>
