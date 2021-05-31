<?php
      if(fopen($_FILES['student']['tmp_name'], "r") !== FALSE){
        $archivo = fopen($_FILES['student']['tmp_name'], "r");
        $rondas = 0;
        //recorremos los datos del csv
        while (($datos = fgetcsv($archivo,1000, ",")) == true) {
            if($rondas>0) {
                include_once('tbs_class.php'); 
                include_once('plugins/tbs_plugin_opentbs.php'); 

                $TBS = new clsTinyButStrong; 
                $TBS->Plugin(TBS_INSTALL, OPENTBS_PLUGIN); 
                //Parametros
                $nomstudent = $datos[0];
                //Carga del template
                $template = 'Fundacion.docx';
                $TBS->LoadTemplate($template, OPENTBS_ALREADY_UTF8);
                //Reemplazo de variables en el documento
                $TBS->MergeField('pro.nomstudent', $nomstudent);

                $TBS->PlugIn(OPENTBS_DELETE_COMMENTS);

                $output_file_name = $datos[0].'.docx';
                $TBS->Show(OPENTBS_FILE, $output_file_name);
                $num = count($datos);
                $name = $datos[0];
            }
            $rondas++;
        }
        header("Location: ../index.php?status=successful");
        exit();
}  
?>