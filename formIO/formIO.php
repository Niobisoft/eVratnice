<?php
function formInit('action', 'method', 'optional') {
  echo "<form method=\"".$method."\" action=\"".$action."\" ".$optional.">";
}
function formFieldSet('action', 'legend') {
    if ($action == "activate") {
      echo "<fieldset>";
    }
    if ($action == "deactivate") {
      echo "</fieldset>";
    }
    if ($action == "legend") {
      echo "<legend>".$legend
      closer("legend");
    }
}
function formSelect ('type', 'name', 'text', 'optional') {
    if ($type == "select") {
      echo "<select name=\"".$name."\" ".$optional.">";
    }
    if ($type == "option") {
      echo "<option value=\"".$name."\" ".$optional.">".$text
      closer("option");
    }
    if ($type == "datalist") {
      echo "<datalist id=\"".$name."\">"
    }
}
function formTextarea  ('name', text', 'optional') {
  echo "<textarea name=\"".$name."\" ".$optional.">".$text;
  closer("textarea");
}
function formButton ('type', 'form', 'value', 'text', 'optional') {
  echo "<button type=\"".$type."\" form=\""$form"\" value=\".$value.\" ".$optional.">".$text
  closer("button");
}



//
// nezapomenout na list (formSelect.datalist) identifikator name
//

function formInput ('type', 'name', '') {

}

//
// Support fcs
//

function closer ($name) {
    echo "</".$name.">";
}
?>
