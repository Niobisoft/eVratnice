<?php
echo "ahoj";
// Všechny prvky počítají s style parametrem v $optional
// Založení formu
// další možnosti optional:
// target="_blank", "_parent", "_top"
// autocomplete="on", "off"
// novalidate (parametr bez obsahu)
function formInit('action', 'method', 'optional') {
  echo "<form method=\"".$method."\" action=\"".$action."\" ".$optional.">";
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
// nezapomenout na input list="" (formSelect.datalist) identifikator name
//

function formInput ('type', 'name', '') {

}

//
// Support fcs
//
function formStarter ($name) {
    echo "<".$name.">";
}

function formCloser ($name) {
    echo "</".$name.">";
}

?>
