<?php
require_once("./fpdm/fpdm.php");
$fields = array(
    'txtbx_fname'    => $_POST['firstname'], // checkbox will be checked;  Careful, that includes ANY non-empty string (even "no" or "unchecked")
    'txtbx_address' => $_POST['address'], // checkbox will be UNchecked; empty string or 0 work as well
);

$filename = date("Y_i_s") . time() . ".pdf";

$pdf = new FPDM('first_form.pdf');
//$pdf->useCheckboxParser = true; // Checkbox parsing is ignored (default FPDM behaviour) unless enabled with this setting
$pdf->Load($fields);
$pdf->Merge();
$pdf->Output('F',"files/$filename");

header("Location: files/$filename");