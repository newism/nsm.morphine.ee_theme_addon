<ul class="menu tabs">
	<li><a href="#simple">Simple tables</a></li>
	<li><a href="#NSM_MagicCheckboxes">Magic checkboxes</a></li>
	<li><a href="#sortable">Sortable rows</a></li>
	<li><a href="#draggable">Draggable rows</a></li>
	<li><a href="#NSM_Cloneable">Cloneable rows</a></li>
	<li><a href="#complex">Complex example</a></li>
	<li><a href="#show_all">Show all</a></li>
</ul>

<?= $this->EE->load->view("tables/simple", array(), TRUE); ?>
<?= $this->EE->load->view("tables/NSM_MagicCheckboxes", array(), TRUE); ?>
<?= $this->EE->load->view("tables/sortable", array(), TRUE); ?>
<?= $this->EE->load->view("tables/draggable", array(), TRUE); ?>
<?= $this->EE->load->view("tables/NSM_Cloneable", array(), TRUE); ?>
<?= $this->EE->load->view("tables/complex", array(), TRUE); ?>
