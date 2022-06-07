<?php
function vat ($amount)
{
return $vat = $amount*15/100;
}
echo ('the vat is : ') . vat (300);
?>
