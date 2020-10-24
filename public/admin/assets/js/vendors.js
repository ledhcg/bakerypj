
// Simple Datatable
let table1 = document.querySelector('#table1');
let dataTable = new simpleDatatables.DataTable(table1);

//Keep sub menu after click
// hide all the sub menus
$('#keep-submenu > li > ul').hide();

// show/hide sub menu if it exists
$('#keep-submenu > li > a').click(function () {
    var $ul = $(this).siblings('ul');
    if ($ul.length > 0) {
        $ul.toggle();
        return false;
    }
});

