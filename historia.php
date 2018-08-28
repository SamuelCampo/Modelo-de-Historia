<?
class Historia extends CI_Model {
  
  var $arr_viaing;
  var $arr_motivoing;
  var $arr_destino;
  var $arr_antecedentes;
  var $arr_antecedentesp;
  var $arr_habitos; 
  var $arr_clastriage; 
  var $arr_tipolaboratorios;
  var $arr_viaadmon;
  var $arr_udosis;
  var $arr_evmedestadoobj;
  var $arr_evmedesatdoplan;
  var $arr_tipoejecplan;
  var $arr_vacvalor;
  var $arr_normalanorm;
  var $listaAptitudExamenSaludOcupacional;

  function __construct(){
    parent::__construct();
    $this->listaAptitudExamenSaludOcupacional = [
      (object)["aptitud"=>"Apto"],
      (object)["aptitud"=>"Apto con Restricciones"],
      (object)["aptitud"=>"No Apto"],
      (object)["aptitud"=>"Aplazado"]
      ];
    $this->arr_actera = [
      "fortalec"=>[
        (object)array('activ'=>'C.C.A'),
        (object)array('activ'=>'C.C.C')
      ],
      "mediosfisicos"=>[
        (object)array('activ'=>'FRIO'),
        (object)array('activ'=>'CALOR'),
        (object)array('activ'=>'CONTRASTE'),
      ],
      "tipocorriente"=>[
        (object)array('activ'=>'TENS'),
        (object)array('activ'=>'EMS')
      ],
      "bandaselasticas"=>[
        (object)array('activ'=>'AMARILLO'),
        (object)array('activ'=>'ROJO'),
        (object)array('activ'=>'VERDE'),
        (object)array('activ'=>'AZUL'),
        (object)array('activ'=>'NEGRA'),
        (object)array('activ'=>'GRIS'),
        (object)array('activ'=>'DORADA')
      ],
      "resistencia"=>[
        (object)array('activ'=>'LEVE'),
        (object)array('activ'=>'MODERADA'),
        (object)array('activ'=>'MEDIA'),
        (object)array('activ'=>'MEDIA - ALTA'),
        (object)array('activ'=>'ALTA')
      ],
      "cardiovasc"=>[
        (object)array('activ'=>'BICICLETA'),
        (object)array('activ'=>'ELIPTICA'),
        (object)array('activ'=>'BANDA SIN FIN'),
        (object)array('activ'=>'ESCALADORA'),
        (object)array('activ'=>'BALON DE BOBATH'),
        (object)array('activ'=>'TERATUBO'),
        (object)array('activ'=>'BARRAS PARALELAS'),
        (object)array('activ'=>'RAMPA'),
        (object)array('activ'=>'ESCALERAS')
      ]
    ];
    
    $this->arr_normalanorm = array(
      (object)array('item'=>'NA'),
      (object)array('item'=>'NORMAL'),
      (object)array('item'=>'ANORMAL')
    );
    $this->arr_vaccunas = array(
      (object)array('codigo'=>'BCG','vacuna'=>'BCG'),
      (object)array('codigo'=>'DPT','vacuna'=>'DPT MENORES DE 5 AÑOS'),
      (object)array('codigo'=>'FAMARILLAN','vacuna'=>'FIEBRE AMARILLA NIÑOS DE 1 AÑO'),
      (object)array('codigo'=>'HEPATITA','vacuna'=>'HEPATITIS A '),
      (object)array('codigo'=>'HEPATITB','vacuna'=>'HEPATITIS B MENORES DE 1 AÑO'),
      (object)array('codigo'=>'INFLUEZN','vacuna'=>'INFLUENZA NIÑOS'),
      (object)array('codigo'=>'NEUMOCOCO','vacuna'=>'NEUMOCOCO'),
      (object)array('codigo'=>'PENTAVALENTE','vacuna'=>'PENTAVALENTE'),
      (object)array('codigo'=>'POLIO','vacuna'=>'POLIO'),
      (object)array('codigo'=>'ROTAVIRUS','vacuna'=>'ROTAVIRUS'),
      (object)array('codigo'=>'TDTT','vacuna'=>'TD O TT MUJERES EN EDAD FÉRTIL 15 A 49 AÑOS'),
      (object)array('codigo'=>'TRIPVIRAL','vacuna'=>'TRIPLE VIRAL NIÑOS'),
      (object)array('codigo'=>'VPH','vacuna'=>'VIRUS DEL PAPILOMA HUMANO (VPH)'),
      (object)array('codigo'=>'ESQAD','vacuna'=>'ESQUEMA ADECUADO PARA LA EDAD')
    );
    $this->arr_vacvalor = array(
      (object)array('codigo'=>'0','valor'=>'NO APLICA'),
      (object)array('codigo'=>'1','valor'=>'PRIMERA DOSIS'),
      (object)array('codigo'=>'2','valor'=>'SEGUNDA DOSIS'),
      (object)array('codigo'=>'3','valor'=>'TERCERA DOSIS'),
      (object)array('codigo'=>'4','valor'=>'CUATRO DOSIS'),
      (object)array('codigo'=>'5','valor'=>'CINCO DOSIS'),
      (object)array('codigo'=>'16','valor'=>'NO SE ADMINISTRA POR UNA TRADICIÓN'),
      (object)array('codigo'=>'17','valor'=>'NO SE ADMINISTRA POR UNA CONDICIÓN DE SALUD'),
      (object)array('codigo'=>'18','valor'=>'NO SE ADMINISTRA POR NEGACIÓN DEL USUARIO'),
      (object)array('codigo'=>'19','valor'=>'NO SE ADMINISTRA POR TENER DATOS DE CONTACTO DEL USUARIO NO ACTUALIZADOS'),
      (object)array('codigo'=>'20','valor'=>'NO SE ADMINISTRA POR OTRAS RAZONES'),
      (object)array('codigo'=>'22','valor'=>'SIN DATO')
    );
    $this->arr_evmedestadoobj = array(
      (object)array("estado"=>"EN PROCESO"),
      (object)array("estado"=>"CUMPLIDO")
    );
    $this->arr_evmedesatdoplan = array(
      (object)array("estado"=>"PENDIENTE"),
      (object)array("estado"=>"EJECUTADO")
    );
    $this->arr_tipoejecplan = array(
      (object)array("tipo"=>"ENFERMERÍA"),
      (object)array("tipo"=>"TERAPIA FÍSICA"),
      (object)array("tipo"=>"TERAPIA RESPIRATORIA")
    );
    $this->arr_causaext = array(
      (object)array("causaext"=>"ACCIDENTE DE TRABAJO"),
      (object)array("causaext"=>"ACCIDENTE DE TRANSITO"),
      (object)array("causaext"=>"ACCIDENTE RÁBICO"),
      (object)array("causaext"=>"ACCIDENTE OFÍRICO"),
      (object)array("causaext"=>"OTRO TIPO DE ACCIDENTE"),
      (object)array("causaext"=>"EVENTO CATASTRÓFICO"),
      (object)array("causaext"=>"LESIÓN POR AGRESIÓN"),
      (object)array("causaext"=>"LESIÓN AUTOINFRENGIDA"),
      (object)array("causaext"=>"SOSPECHA DE MALTRATO FÍSICO"),
      (object)array("causaext"=>"SOSPECHA DE ABUSO SEXUAL"),
      (object)array("causaext"=>"SOSPECHA DE VIOLENCIA SEXUAL"),
      (object)array("causaext"=>"SOSPECHA DE MALTRATO EMOSIONAL"),
      (object)array("causaext"=>"ENFERMEDAD GENERAL"),
      (object)array("causaext"=>"ENFERMEDAD PROFESIONAL"),
      (object)array("causaext"=>"OTRA")
    );
    $this->arr_destino = $this->Constante->arr_servicios;
    $this->arr_viaing = array(
      (object)array("viaing"=>"CONSULTA EXTERNA"),
      (object)array("viaing"=>"URGENCIAS"),
      (object)array("viaing"=>"REMITIDO"),
      (object)array("viaing"=>"QUIRÓFANO"),
      (object)array("viaing"=>"INTERNACIÓN")
    );
    $this->arr_clastriage = array(
      (object)array("tipo"=>"1"),
      (object)array("tipo"=>"2"),
      (object)array("tipo"=>"3"),
      (object)array("tipo"=>"4")
       );
    $this->arr_tipolaboratorios = array(
      (object)array("tipo"=>"MEDICAMENTOS"),
      (object)array("tipo"=>"IMAGENES DIAGNOSTICAS"),
      (object)array("tipo"=>"LABORATORIOS"),
      (object)array("tipo"=>"PROCEDIMIENTOS"),
      (object)array("tipo"=>"CIRUGÍAS")
      );
    //$this->arr_destinopac = $this->Constante->arr_servicios;
    $this->arr_destinopac = array((object)array("destino"=>"DE ALTA"));
    $this->arr_destinopac[]=(object)array("destino"=>"REMITIDOS");
    $this->arr_destinopac[]=(object)array("destino"=>"FALLECIMIENTO");
    $this->arr_destinopac[]=(object)array("destino"=>"CONSULTA EXTERNA");
    
    $this->arr_viaadmon = array(
      (object)array("via"=>"CUTANEA"),
      (object)array("via"=>"INHALATORIA"),
      (object)array("via"=>"INTRAMUSCULAR"),
      (object)array("via"=>"INTRAVENOSA"),
      (object)array("via"=>"ORAL"),
      (object)array("via"=>"SUBCUTANEA"),
      (object)array("via"=>"SUBLINGUAL"),
      (object)array("via"=>"RECTAL"),
      (object)array("via"=>"TOPICA"),
      (object)array("via"=>"VAGINAL")
    );
    
    $this->arr_udosis = array(
      (object)array("udos"=>"CENTÍMETROS CÚBICOS"),
      (object)array("udos"=>"GRAMOS"),
      (object)array("udos"=>"LITROS"),
      (object)array("udos"=>"MICROGRAMOS"),
      (object)array("udos"=>"MILILITROS"),
      (object)array("udos"=>"MILIEQUIVALENTES"),
      (object)array("udos"=>"MILIGRAMOS"),
      (object)array("udos"=>"NA"),
      (object)array("udos"=>"ONZAS"),
      (object)array("udos"=>"PULGADAS"),
      (object)array("udos"=>"UNIDADES INTERNACIONALES")
    );
  }

    function obtener_ordenes($id){
    $this->db->from('ps_hist_ordenes_t67');
    $this->db->where('idhistoria_t67',$id);
    $result = $this->db->get();
    return $result->result();
  }

  function tarifario($historia)
  {
    foreach ($historia as $fila) {
      echo $fila->codigo_t67."<br>";
      $this->db->select("valor_t63,codplantarifa_t63");
      $this->db->where('codplantarifa_t63',$fila->codigo_t67);
      $query[] = $this->db->get('ps_plan_tarifario_t63')->result();
    }
    return $query;
  }
  
  function obtener($id){
    $resul = false;
    $this->db->from("ps_historia_t4");
    $this->db->join("ps_historiadet_t5","idps_historia_t4 = historia_t5","left");
    $this->db->join("ps_paciente_t3","paciente_t4 = identificacion_t3","inner");
    $this->db->where("idps_historia_t4",$id);
    $query = $this->db->get();
    $arr_datos = $query->result();
    // debug($this->db->last_query());
    if (count($arr_datos) > 0){
      $historia = $query->row();
    }
    return $historia;
  }

  function ginecoAntes($idpaciente){
    $this->db->where('id_paciente_gineco',$idpaciente);
    $this->db->order_by('id_gineco', 'desc');
    $this->db->limit(1);
    return $this->db->get('ps_hist_consulta_gineco')->result();
  }
  
  function ordenespend($buscado){
    if(!empty($buscado)){
      $this->db->from("v_ps_hist_ordenes_t67_pend");
      $this->db->like('idps_historia_t4',$buscado);
      $this->db->or_like('ubicacion_t4',$buscado);
      $this->db->or_like('identificacion_t3',$buscado);
      $this->db->or_like('nomcomp_t3',$buscado);
      $this->db->order_by("paciente_t4",'asc');
      $query = $this->db->get();
      return $query->result();
    }
    return false;
  }
  
/*
Autor: Ing Mauricio Garibello R
Fecha: 10/12/2017
Nota: Se optimiza consulta para busqueda de pacientes.
se elimina busqueda en tabla ps_historia_t4
*/

function listar($buscado){
    if(!empty($buscado)){
      $this->db->from("ps_historia_t4");
      $this->db->join("ps_paciente_t3","paciente_t4=identificacion_t3","inner");
      $this->db->or_like('identificacion_t3',$buscado);
      $this->db->or_like('nomcomp_t3',$buscado);
      $this->db->order_by("fingreso_t4",'desc');
      $query = $this->db->get();
      $arr_datos = $query->result();
      if (count($arr_datos) > 0){
        return $arr_datos;
      }
    }
    return false;
  } 
  function buscar_facturados($numfac)
  {
    $this->db->where('idfactura_t67', $numfac);
    return $this->db->get('ps_hist_ordenes_t67')->result();
  }



    function obtener_diagnostico($historia)
  {
    $this->db->where('idhistoria_t64',$historia);
    return $this->db->get('ps_hist_consulta_t64')->result();
  }
    function tarifario_medicamentos($historia)
  {
        foreach ($historia as $fila) {
        $this->db->select("tarifa1_t73,codigoatc_t73");
        $this->db->where('codigoatc_t73',$fila->codigo_t67);
        $sql[] = $this->db->get('ps_cums_t73')->result();
        }
        return $sql;
  }
    function confirmar_ordenes($conf,$numfac)
  {
    foreach ($conf->conf as $codigo) {
      $reg = explode("T", $codigo);
      $data = array('estado_f_t67' => 'FACTURADO','valor_t67' => $reg[1],'idfactura_t67' => $numfac);
      $this->db->where('idhist_ordenes_t67',$reg[0])->update('ps_hist_ordenes_t67', $data);
    }
  }

  function convenio($codigo){
    $this->db->where('codministerio_t70',$codigo);
    return $this->db->get('ps_administradoras_t70')->result();
  }

    function convenios($codigo)
  {
    $this->db->select('nit_t70');
    $this->db->where('codministerio_t70',$codigo);
    $result = $this->db->get('ps_administradoras_t70')->result();

    if ($result != NULL) {
        $reg = explode("-", $result[0]->nit_t70);
        $this->db->where('tercero_t95',$reg[0]);
        $query = $this->db->get('ps_convenios_t95'); 
        return $query->result();
      }
  }
  
  function regevento($evento,$historia=""){
    if(empty($historia)){
      $dathistoria->paciente = $evento->paciente;
      $dathistoria->fingreso = date("Y-m-d H:i");
      $dathistoria->ubicacion = $evento->ubicacion;
      $dathistoria->motivoing = $evento->motivoing;
      $dathistoria->viaing = $evento->viaing;
      $dathistoria->causaext = $evento->causaext;
      $dathistoria->obs = $evento->obs;
      $historia = $this->registrar($dathistoria);
    }
    $arr_evento["historia_t5"]=$historia;
    $arr_evento["fecha_t5"]=$this->Modulo->ahora();
    $arr_evento["evento_t5"]=$evento->evento;
    $arr_evento["detalevento_t5"]=$evento->detalevento;
    $arr_evento["usrmod_t5"]=$this->Modulo->usr->idusr;
    $arr_evento["fmod_t5"]=$this->Modulo->ahora();
    $this->db->insert("ps_historiadet_t5",$arr_evento);
    return $historia;
  }
  
  function procestado($estadoact,$estadon){
    
    switch($estadon){
      case "ADMITIDO":
        if(empty($estadoact) || $estadoact=='PROGRAMADO'){
          return $estadon;
        }else{
          return $estadoact;
        }
        break;
      default :
        return $estadon;
        break;
    }
  }
  
  function registrar($id="",$dathistoria=""){
    if(empty($dathistoria)){
      $dathistoria = (object)$this->input->post();
    }
    $historiaact = $this->obtener($id);
    if(!empty($dathistoria->identificacion)){
      $arr_nuevo["paciente_t4"]=$dathistoria->identificacion;
    }
    $arr_nuevo["fingreso_t4"]=$this->Modulo->ahora();
    $arr_nuevo["fmod_t4"]=$this->Modulo->ahora();
    $arr_nuevo["usrmod_t4"]=$this->Modulo->usr->idusr;
    if(!empty($dathistoria->fingreso)){
      $arr_nuevo["fingreso_t4"]=$dathistoria->fingreso;
    }
    if(!empty($dathistoria->fsalida)){
      $arr_nuevo["fsalida_t4"]=$dathistoria->fsalida;
    }
    if(is_null($dathistoria->ubicacion)==false){
      $arr_nuevo["ubicacion_t4"]=$dathistoria->ubicacion;
      $arr_nuevo["ubicacion_t4"]=$dathistoria->ubicacion;
    }
    
    if(is_null($dathistoria->ubicaciondet)==false)$arr_nuevo["ubicaciondet_t4"]=$dathistoria->ubicaciondet;
    if(is_null($dathistoria->motivoing)==false)$arr_nuevo["motivoing_t4"]=$dathistoria->motivoing;
    if(is_null($dathistoria->estado)==false){
      $arr_nuevo["estado_t4"]=$this->Historia->procestado($historiaact->estado_t4,$dathistoria->estado);
      $arr_datpac["estado_t3"]=$arr_nuevo["estado_t4"];
      $arr_datpac["usrmod_t3"]=$this->Modulo->usr->idusr;
      $arr_datpac["fmod_t3"]=$this->Modulo->ahora();
      $this->db->where("identificacion_t3",$arr_nuevo["paciente_t4"]);
      $this->db->update("ps_paciente_t3",$arr_datpac);
    }
    if(is_null($dathistoria->viaing)==false)$arr_nuevo["viaing_t4"]=$dathistoria->viaing;
    if(is_null($dathistoria->causaext)==false)$arr_nuevo["causaext_t4"]=$dathistoria->causaext;
    if(is_null($dathistoria->tipocta)==false)$arr_nuevo["tipocta_t4"]=$dathistoria->tipocta;
    if(is_null($dathistoria->obs)==false)$arr_nuevo["obs_t4"]=$dathistoria->obs;
    if(empty($id)){
      $this->db->insert("ps_historia_t4",$arr_nuevo);
      $id = $this->db->insert_id();
    }else{
      $this->db->where("idps_historia_t4",$id);
      $this->db->update("ps_historia_t4",$arr_nuevo);
    }
    return $id;
  }
  
  function consulta_registrar($idhistoria,$dathistoria=""){
    
    $historia = $this->obtener($idhistoria);
    $paciente = $this->Paciente->obtener($historia->identificacion_t3);
    $consulta = $this->consulta_obtener($idhistoria);
    $arr_consulta["usrmod_t64"]=$this->Modulo->usr->idusr;
    $arr_consulta["fmod_t64"]=$this->Modulo->ahora();
    
    if(empty($dathistoria)){
      $dathistoria=(object)$this->input->post();
     
    }
// debug($dathistoria);
   /* var_dump($dathistoria);
    var_dump($dathistoria->formularioenviado);
    exit;*/
    
    
    $arr_consulta['idpaciente_t64']=$historia->identificacion_t3;
    $arr_consulta['idhistoria_t64']=$historia->idps_historia_t4;
    switch($dathistoria->formularioenviado){
      case "triage":
        $arr_consulta['triage_t64']=$dathistoria->triage;
        $arr_dathistoria['triage_t4']=$dathistoria->triage;
        $arr_dathistoria["estado_t4"]='ATENCION MEDICA';
      case "consultaso":
        $oConsultaso = $this->consultaso_obtener($idhistoria);
        if(is_array($dathistoria->consultaso)){
          foreach($dathistoria->consultaso as $campo=>$dato){
            if($campo!='emp' && $campo!='aat' && $campo!='aep'){
              $arr_consultaso[$campo.'_t99']=$dato;
            }
          }
          $arr_consultaso['idhistoria_t99']=$historia->idps_historia_t4;
          $arr_consultaso['idpaciente_t99']=$historia->identificacion_t3;
          $arr_consultaso["usrmod_t99"]=$this->Modulo->usr->idusr;
          $arr_consultaso["fmod_t99"]=$this->Modulo->ahora();
          if(!empty($oConsultaso->idps_hist_consulta_so_t99)){
            $idconsultaso = $oConsultaso->idps_hist_consulta_so_t99;
            $this->db->where("idps_hist_consulta_so_t99",$idconsultaso);
            $this->db->update("ps_hist_consulta_so_t99",$arr_consultaso);
          }else{
            $this->db->insert("ps_hist_consulta_so_t99",$arr_consultaso);
            $idconsultaso = $this->db->insert_id();
          }
          
          $datos = $dathistoria->consultaso["emp"];
          $filas = count($datos["empant_ample"]);
          $this->db->where("idconsulta_so_t100",$idconsultaso);
          $this->db->delete("ps_hist_consulta_soemp_t100");
          for($i=0;$i<$filas;$i++){
            if(!empty($datos["empant_ample"][$i]) && !empty($datos["empant_tiemp"][$i]) && !empty($datos["empant_carg"][$i])){
              $arr_consultasoemp[$i]["empant_ample_t100"]=$datos["empant_ample"][$i];
              $arr_consultasoemp[$i]["empant_tiemp_t100"]=$datos["empant_tiemp"][$i];
              $arr_consultasoemp[$i]["empant_carg_t100"]=$datos["empant_carg"][$i];
              $arr_consultasoemp[$i]["empant_fact_t100"]=$datos["empant_fact"][$i];
              $arr_consultasoemp[$i]["empant_fin_t100"]=$datos["empant_fin"][$i];
              $arr_consultasoemp[$i]['idconsulta_so_t100']=$idconsultaso;
              $arr_consultasoemp[$i]["usrmod_t100"]=$this->Modulo->usr->idusr;
              $arr_consultasoemp[$i]["fmod_t100"]=$this->Modulo->ahora();
            }
          }
          if(is_array($arr_consultasoemp)){
            $this->db->insert_batch("ps_hist_consulta_soemp_t100",$arr_consultasoemp);
          }
          
          $datos = $dathistoria->consultaso["aat"];
          $filas = count($datos["antacc_fec"]);
          $this->db->where("idps_hist_consulta_so_t101",$idconsultaso);
          $this->db->delete("ps_hist_consulta_soaat_t101");
          for($i=0;$i<$filas;$i++){
            if(!empty($datos["antacc_fec"][$i]) && !empty($datos["antacc_empre"][$i])){
              $arr_consultasoaat[$i]["antacc_fec_t101"]=$datos["antacc_fec"][$i];
              $arr_consultasoaat[$i]["antacc_empre_t101"]=$datos["antacc_empre"][$i];
              $arr_consultasoaat[$i]["antacc_natulesi_t101"]=$datos["antacc_natulesi"][$i];
              $arr_consultasoaat[$i]["antacc_partafec_t101"]=$datos["antacc_partafec"][$i];
              $arr_consultasoaat[$i]["antacc_incap_t101"]=$datos["antacc_incap"][$i];
              $arr_consultasoaat[$i]["antacc_secu_t101"]=$datos["antacc_secu"][$i];
              $arr_consultasoaat[$i]['idps_hist_consulta_so_t101']=$idconsultaso;
              $arr_consultasoaat[$i]["usrmod_t101"]=$this->Modulo->usr->idusr;
              $arr_consultasoaat[$i]["fmod_t101"]=$this->Modulo->ahora();
            }
          }
          if(is_array($arr_consultasoaat)){
            $this->db->insert_batch("ps_hist_consulta_soaat_t101",$arr_consultasoaat);
          }
          
          $datos = $dathistoria->consultaso["aep"];
          $filas = count($datos["antenf_feccal"]);
          $this->db->where("idps_hist_consulta_so_t109",$idconsultaso);
          $this->db->delete("ps_hist_consulta_soaep_t109");
          for($i=0;$i<$filas;$i++){
            if(!empty($datos["antenf_feccal"][$i]) && !empty($datos["antenf_empre"][$i])){
              $arr_consultasoaep[$i]["antenf_feccal_t109"]=$datos["antenf_feccal"][$i];
              $arr_consultasoaep[$i]["antenf_empre_t109"]=$datos["antenf_empre"][$i];
              $arr_consultasoaep[$i]["antenf_dx_t109"]=$datos["antenf_dx"][$i];
              $arr_consultasoaep[$i]["antenf_entcalif_t109"]=$datos["antenf_entcalif"][$i];
              $arr_consultasoaep[$i]['idps_hist_consulta_so_t109']=$idconsultaso;
              $arr_consultasoaep[$i]["usrmod_t109"]=$this->Modulo->usr->idusr;
              $arr_consultasoaep[$i]["fmod_t109"]=$this->Modulo->ahora();
            }
          }
          if(is_array($arr_consultasoaep)){
            $this->db->insert_batch("ps_hist_consulta_soaep_t109",$arr_consultasoaep);
          }
        }
        
      case "consultaext":
    
      
        if (!empty($dathistoria)) {
          
            /*$this->db->from("ps_hist_consulta_gineco");
            $this->db->where("idhistoria_gineco",$historia->idps_historia_t4);
            $result= $this->db->get();*/
            $result= $this->modelo_universal->select("ps_hist_consulta_gineco","*",array('idhistoria_gineco'=>$historia->idps_historia_t4));
       
            
                    $array["id_paciente_gineco"] = $historia->identificacion_t3;
                    $array["id_consulta_gineco"] = $consulta->idhist_consulta_t64;
                    $array["idhistoria_gineco"] =$historia->idps_historia_t4;
                    $array["menarca_gineco"] = $dathistoria->menarca_gineco;
                    $array["inicvs_gineco"] =$dathistoria->inicvs_gineco;
                    $array["fum_gineco"] =$dathistoria->fum_gineco;
                    $array["ets_gineco"] =$dathistoria->ets_gineco;
                    $array["sus_gineco"] =$dathistoria->sus_gineco;
                    $array["result_gineco"] =$dathistoria->result_gineco;
                    $array["anti_gineco"]= $dathistoria->anti_gineco;
                    $array["tipooption_gienco"]= $dathistoria->tipooption_gienco;
                    $array["inicio_gineco"] =$dathistoria->inicio_gineco;
                    $array["fu_citologia_gineco"] =$dathistoria->fu_citologia_gineco;
                    $array["fecha_su_gineco"] =$dathistoria->fecha_su_gineco;
                    $array["concep_gineco"] =$dathistoria->concep_gineco;
                    $array["cuello_u_gineco"]= $dathistoria->cuello_u_gineco;
                    $array["gestas_gineco"]= $dathistoria->gestas_gineco;
                    $array["partos_gineco"]= $dathistoria->partos_gineco;
                    $array["vivos_gineco"] =$dathistoria->vivos_gineco;
                    $array["abortos_gineco"] =$dathistoria->abortos_gineco;
                    $array["mortinatos_gineco"] =$dathistoria->mortinatos_gineco;
                    $array["especiales_gineco"] =$dathistoria->especiales_gineco;
                    $array["tipoem_gineco"] =$dathistoria->tipoem_gineco;
                    $array["hta_gineco"] =$dathistoria->hta_gineco;
                    $array["infecc_gineco"] =$dathistoria->infecc_gineco;
                    $array["iso_gineco"] =$dathistoria->iso_gineco;
                    $array["descrip_gineco"] =$dathistoria->descrip_gineco;
                    $array["aten_pre_gineco"]= $dathistoria->aten_pre_gineco;
                    $array["n_consult_gineco"]= $dathistoria->n_consult_gineco;
                    $array["ex_com_gineco"]= $dathistoria->ex_com_gineco;
                    $array["alte_gineco"] =$dathistoria->alte_gineco;
                    $array["vacuna_gineco"] =$dathistoria->vacuna_gineco;
                    $array["influe_gineco"] =$dathistoria->influe_gineco;
                    $array["hayb_gineco"] =$dathistoria->hayb_gineco;
                    $array["f_ama_gineco"]= $dathistoria->f_ama_gineco;
                    $array["varicela_gineco"] =$dathistoria->varicela_gineco;
                    $array["rabia_gineco"]= $dathistoria->rabia_gineco;
                    $array["fpp_gineco"] =$dathistoria->fpp_gineco;
                    $array["ultimo_parto_gineco"]= $dathistoria->ultimo_parto_gineco;
                    $array["ultima_cesarea_gineco"] =$dathistoria->ultima_cesarea_gineco;
                    $array["malformaciones_gineco"]= $dathistoria->malformaciones_gineco;
                    $array["prematuros_gineco"]= $dathistoria->prematuros_gineco;
                    $array["edadgest_gineco"] =$dathistoria->edadgest_gineco;
                    //////nuevo campos 24/4
                    $array["num_cs_gineco"]= $dathistoria->num_cs;
                    $array["proc_cuello_gineco"]= $dathistoria->proc_cuello_gineco;
                    $array["descrip_proc_gineco"]= $dathistoria->descrip_proc_gineco;
                    $array["asp_cuello_gineco"]= $dathistoria->asp_cuello_gineco;
                    $array["des_asp_gineco"]= $dathistoria->des_asp_gineco;
                    $array["obser_gineco"]= $dathistoria->obser_gineco;
                    $array["cita_primera"] = $dathistoria->cita_primera;
                    $array["metodo_oral"] = $dathistoria->metodo_oral;
                    ////////nuevos campos 24/4
                    $array["fmod_gineco"] = $this->Modulo->usr->idusr;
                    $array["usrmod_gineco"]=$this->Modulo->ahora();
                 
               if(!empty($result)){

                    $this->db->where("idhistoria_gineco",$historia->idps_historia_t4);
                    $this->db->update('ps_hist_consulta_gineco', $array); 
                   }else{
                    $this->db->insert("ps_hist_consulta_gineco",$array);
            }   
            
          
        }
      case "examingreso":
        if(is_null($dathistoria->estadoingreso)===false)$arr_consulta['estadoingreso_t64']=$dathistoria->estadoingreso;
        if(is_null($dathistoria->motconsulta)===false)$arr_consulta['motconsulta_t64']=$dathistoria->motconsulta;
        if(is_null($dathistoria->enfermactual)===false)$arr_consulta['enfermactual_t64']=$dathistoria->enfermactual;
        $arr_dathistoria["estado_t4"]='ATENCION MEDICA';
        if(is_array($dathistoria->antecedentes["PERSONALES"])){
          foreach($dathistoria->antecedentes["PERSONALES"] as $campo=>$dato){
            if(!empty($dato)){
              $arr_antec[$campo.'_t65']=$dato;
            }
          }
          if(is_array($arr_antec)){
            $arr_antec['tipo_t65']="PERSONALES";
            $arr_antec["usrmod_t65"]=$this->Modulo->usr->idusr;
            $arr_antec["fmod_t65"]=$this->Modulo->ahora();
            $arr_antec['id_consulta_t65']=$consulta->idhist_consulta_t64;
            $arr_antec['idpaciente_t65']=$historia->identificacion_t3;
            $arr_antec['idhistoria_t65']=$historia->idps_historia_t4;
            $this->db->insert("ps_hist_antecedentes_t65",$arr_antec);
            unset($arr_antec);
          }
        }
        if(is_array($dathistoria->antecedentes["FAMILIARES"])){
          foreach($dathistoria->antecedentes["FAMILIARES"] as $campo=>$dato){
            if(!empty($dato)){
              $arr_antec[$campo.'_t65']=$dato;
            }
          }
          if(is_array($arr_antec)){
            $arr_antec['tipo_t65']="FAMILIARES";
            $arr_antec["usrmod_t65"]=$this->Modulo->usr->idusr;
            $arr_antec["fmod_t65"]=$this->Modulo->ahora();
            $arr_antec['id_consulta_t65']=$consulta->idhist_consulta_t64;
            $arr_antec['idpaciente_t65']=$historia->identificacion_t3;
            $arr_antec['idhistoria_t65']=$historia->idps_historia_t4;
            $this->db->insert("ps_hist_antecedentes_t65",$arr_antec);
            unset($arr_antec);
          }
        }
        if(is_array($dathistoria->antecedentes["PATOLOGICOS"])){
          foreach($dathistoria->antecedentes["PATOLOGICOS"] as $campo=>$dato){
            if(!empty($dato)){
              $arr_antec[$campo.'_t66']=$dato;
            }
          }
          if(is_array($arr_antec)){
            $arr_antec["usrmod_t66"]=$this->Modulo->usr->idusr;
            $arr_antec["fmod_t66"]=$this->Modulo->ahora();
            $arr_antec['id_consulta_t66']=$consulta->idhist_consulta_t64;
            $arr_antec['idpaciente_t66']=$historia->identificacion_t3;
            $arr_antec['idhistoria_t66']=$historia->idps_historia_t4;
            $this->db->insert("ps_hist_antecedpatbiol_t66",$arr_antec);
            unset($arr_antec);
          }
        }
         $this->modelo_universal->insert('antecedentes203',array('idpaciente203'=>$historia->identificacion_t3,'json203'=>json_encode($dathistoria)));
        
        if(is_array($dathistoria->vacunas)){
          $arr_vac = $this->Modulo->objarrasoc($this->arr_vaccunas,'codigo');
          $arr_vacval = $this->Modulo->objarrasoc($this->arr_vacvalor,'codigo');
          $arr_sino = $this->Modulo->objarrasoc($this->Constante->arr_sino,'vaccod');
          foreach($dathistoria->vacunas as $idvac=>$valorvac){
            $arr_regvac["vacuna_t106"]=$arr_vac[$idvac]->vacuna;
            $arr_regvac["vacunacod_t106"]=$arr_vac[$idvac]->codigo;
            if($arr_vac[$idvac]->codigo=='ESQAD'){
              $arr_regvac["valor_t106"]=$arr_sino[$valorvac]->sino;
              $arr_regvac["valorcod_t106"]=$valorvac;
            }else{
              $arr_regvac["valor_t106"]=$arr_vacval[$valorvac]->valor;
              $arr_regvac["valorcod_t106"]=$arr_vacval[$valorvac]->codigo;
            }
            
            $arr_regvac["usrmod_t106"]=$this->Modulo->usr->idusr;
            $arr_regvac["fmod_t106"]=$this->Modulo->ahora();
            $arr_regvac['id_consulta_t106']=$consulta->idhist_consulta_t64;
            $arr_regvac['idpaciente_t106']=$historia->identificacion_t3;
            $arr_regvac['idhistoria_t106']=$historia->idps_historia_t4;
            $this->db->insert("ps_historia_vacunas_t106",$arr_regvac);
            unset($arr_regvac);
          }
        }
        
        if(!empty($dathistoria->grupoespecial) || !empty($dathistoria->discapacidad)){
          if(!empty($dathistoria->grupoespecial)){
            $arr_datpac["grupoespec_t3"]=$dathistoria->grupoespecial;
          }
          IF(!empty($dathistoria->discapacidad)){
            $arr_datpac["discap_t3"]=$dathistoria->discapacidad;
          }
          $arr_datpac["grupoetnic_t3"]=$dathistoria->grupoetcod;
          $arr_datpac["rh_t3"]=$dathistoria->rh;
          $arr_datpac["usrmod_t3"]=$this->Modulo->usr->idusr;
          $arr_datpac["fmod_t3"]=$this->Modulo->ahora();
          $this->db->where("identificacion_t3",$historia->identificacion_t3);
          $this->db->update("ps_paciente_t3",$arr_datpac);
        }
        //exit;
        $arr_dathistoria["estado_t4"]='ATENCION MEDICA';
        if(is_null($dathistoria->altura)===false)$arr_consulta['altura_t64']=$dathistoria->altura;
        if(is_null($dathistoria->peso)===false)$arr_consulta['peso_t64']=$dathistoria->peso;
      
        if(is_null($dathistoria->imc)===false)$arr_consulta['imc_t64']=$dathistoria->imc;
        if(is_null($dathistoria->temp)===false)$arr_consulta['temp_t64']=$dathistoria->temp;
        if(is_null($dathistoria->pabd)===false)$arr_consulta['pabd_t64']=$dathistoria->pabd;
        if(is_null($dathistoria->fr)===false)$arr_consulta['fr_t64']=$dathistoria->fr;
        if(is_null($dathistoria->fc)===false)$arr_consulta['fc_t64']=$dathistoria->fc;
        if(is_null($dathistoria->ta)===false)$arr_consulta['ta_t64']=$dathistoria->ta;
        if(is_null($dathistoria->pvc)===false)$arr_consulta['pvc_t64']=$dathistoria->pvc;
        ///////nuevos campos de examen fisico 18/04/2018
        if(is_null($dathistoria->mcraneo)===false)$arr_consulta['mcraneo_t64']=$dathistoria->mcraneo;
        if(is_null($dathistoria->mmuneca)===false)$arr_consulta['mmuneca_t64']=$dathistoria->mmuneca;
        if(is_null($dathistoria->SINTR)===false)$arr_consulta['SINTR_t64']=$dathistoria->SINTR;
        if(is_null($dathistoria->SINTP)===false)$arr_consulta['SINTP_t64']=$dathistoria->SINTP;
        if(is_null($dathistoria->SINTF)===false)$arr_consulta['SINTF_t64']=$dathistoria->SINTF;
        if(is_null($dathistoria->pbrazo)===false)$arr_consulta['pbrazo_t64']=$dathistoria->pbrazo;
        ///////
        if(is_null($dathistoria->sao2)===false)$arr_consulta['sao2_t64']=$dathistoria->sao2;
        if(is_null($dathistoria->gmotora)===false)$arr_consulta['ggowmotora_t64']=$dathistoria->gmotora;
        if(is_null($dathistoria->gocular)===false)$arr_consulta['ggowocular_t64']=$dathistoria->gocular;
        if(is_null($dathistoria->gverb)===false)$arr_consulta['ggowverbal_t64']=$dathistoria->gverb;
        if(is_null($dathistoria->glsgow)===false)$arr_consulta['glsgow_t64']=$dathistoria->glsgow;
        
        if(is_null($dathistoria->pielanexos)===false)$arr_consulta['pielanexos_t64']=$dathistoria->pielanexos;
        if(is_null($dathistoria->ojos)===false)$arr_consulta['ojos_t64']=$dathistoria->ojos;
        if(is_null($dathistoria->orl)===false)$arr_consulta['orl_t64']=$dathistoria->orl;
        if(is_null($dathistoria->cuello)===false)$arr_consulta['cuello_t64']=$dathistoria->cuello;
        if(is_null($dathistoria->digestivo)===false)$arr_consulta['digestivo_t64']=$dathistoria->digestivo;
        if(is_null($dathistoria->pulmonar)===false)$arr_consulta['pulmonar_t64']=$dathistoria->pulmonar;
        if(is_null($dathistoria->genitourinario)===false)$arr_consulta['genitourinario_t64']=$dathistoria->genitourinario;
        if(is_null($dathistoria->musculoesqueletico)===false)$arr_consulta['musculoesqueletico_t64']=$dathistoria->musculoesqueletico;
        if(is_null($dathistoria->neurologico)===false)$arr_consulta['neurologico_t64']=$dathistoria->neurologico;
        if(is_null($dathistoria->extremidades)===false)$arr_consulta['extremidades_t64']=$dathistoria->extremidades;
        if(is_null($dathistoria->respiratorio)===false)$arr_consulta['respiratorio_t64']=$dathistoria->respiratorio;
        if(is_null($dathistoria->cardiovascular)===false)$arr_consulta['cardiovascular_t64']=$dathistoria->cardiovascular;
        if(is_null($dathistoria->otros)===false)$arr_consulta['otros_t64']=$dathistoria->otros;
        if(is_null($dathistoria->podpulsos)===false)$arr_consulta['podpulsos_t64']=$dathistoria->podpulsos;
        if(is_null($dathistoria->podaltbiomecanica)===false)$arr_consulta['podaltbiomecanica_t64']=$dathistoria->podaltbiomecanica;
        if(is_null($dathistoria->podsensibplantar)===false)$arr_consulta['podsensibplantar_t64']=$dathistoria->podsensibplantar;
        if(is_null($dathistoria->podamputacion)===false)$arr_consulta['podamputacion_t64']=$dathistoria->podamputacion;
        if(is_null($dathistoria->popiel)===false)$arr_consulta['popiel_t64']=$dathistoria->popiel;
        if(is_null($dathistoria->otros)===false)$arr_consulta['podunasmicosis_t64']=$dathistoria->podunasmicosis;
        
        if(is_null($dathistoria->rs_pielanexos)===false)$arr_consulta['rs_pielanexos_t64']=$dathistoria->rs_pielanexos;
        if(is_null($dathistoria->rs_ojos)===false)$arr_consulta['rs_ojos_t64']=$dathistoria->rs_ojos;
        if(is_null($dathistoria->rs_orl)===false)$arr_consulta['rs_orl_t64']=$dathistoria->rs_orl;
        if(is_null($dathistoria->rs_cuello)===false)$arr_consulta['rs_cuello_t64']=$dathistoria->rs_cuello;
        if(is_null($dathistoria->rs_digestivo)===false)$arr_consulta['rs_digestivo_t64']=$dathistoria->rs_digestivo;
        if(is_null($dathistoria->rs_pulmonar)===false)$arr_consulta['rs_pulmonar_t64']=$dathistoria->rs_pulmonar;
        if(is_null($dathistoria->rs_genitourinario)===false)$arr_consulta['rs_genitourinario_t64']=$dathistoria->rs_genitourinario;
        if(is_null($dathistoria->rs_musculoesqueletico)===false)$arr_consulta['rs_musculoesqueletico_t64']=$dathistoria->rs_musculoesqueletico;
        if(is_null($dathistoria->rs_neurologico)===false)$arr_consulta['rs_neurologico_t64']=$dathistoria->rs_neurologico;
        if(is_null($dathistoria->rs_extremidades)===false)$arr_consulta['rs_extremidades_t64']=$dathistoria->rs_extremidades;
        if(is_null($dathistoria->rs_respiratorio)===false)$arr_consulta['rs_respiratorio_t64']=$dathistoria->rs_respiratorio;
        if(is_null($dathistoria->rs_cardiovascular)===false)$arr_consulta['rs_cardiovascular_t64']=$dathistoria->rs_cardiovascular;
        if(is_null($dathistoria->rs_otros)===false)$arr_consulta['rs_otros_t64']=$dathistoria->rs_otros;
        
        if(is_null($dathistoria->abdomen)===false)$arr_consulta['abdomen_t64']=$dathistoria->abdomen;
        if(is_null($dathistoria->urinario)===false)$arr_consulta['urinario_t64']=$dathistoria->urinario;
        if(is_null($dathistoria->extremidad)===false)$arr_consulta['extremidad_t64']=$dathistoria->extremidad;
        
        
        if(is_null($dathistoria->apache)===false)$arr_consulta['apache_t64']=$dathistoria->apache;
        $arr_dathistoria["estado_t4"]='ATENCION MEDICA';
      
      case "evolmed":
        $arr_consulta['valoracionini_t64']=1;
        $arr_consulta['medreg_t64']=$this->Modulo->usr->personal->registromedico_t10;
        $arr_consulta['medidentif_t64']=$this->Modulo->usr->identificacion_t0;
        $arr_consulta['mednomcomp_t64']=$this->Modulo->usr->nombre_t0;
        $arr_consulta['medcargo_t64']=$this->Modulo->usr->personal->cargo_t10;
        $arr_consulta['medespec_t64']=$this->Modulo->usr->personal->especialidades[0]->especialidades_t9;
        if(is_null($dathistoria->dxprincipal)===false)$arr_consulta['dxprincipal_t64']=$dathistoria->dxprincipal;
        if(is_null($dathistoria->dxprincipalcod)===false)$arr_consulta['dxprincipalcod_t64']=$dathistoria->dxprincipalcod;
        if(is_null($dathistoria->dxsecundario)===false)$arr_consulta['dxsecundario_t64']=$dathistoria->dxsecundario;
        if(is_null($dathistoria->dxsecundariocod)===false)$arr_consulta['dxsecundariocod_t64']=$dathistoria->dxsecundariocod;
        if(is_null($dathistoria->dxegreso)===false)$arr_consulta['dxegreso_t64']=$dathistoria->dxegreso;
        if(is_null($dathistoria->dxegresocod)===false)$arr_consulta['dxegresocod_t64']=$dathistoria->dxegresocod;
        if(is_null($dathistoria->dxrelprincipal)===false)$arr_consulta['dxrelprincipal_t64']=$dathistoria->dxrelprincipal;
        if(is_null($dathistoria->dxrelprincipalcod)===false)$arr_consulta['dxrelprincipalcod_t64']=$dathistoria->dxrelprincipalcod;
        if(is_null($dathistoria->dxrelsecundario)===false)$arr_consulta['dxrelsecundario_t64']=$dathistoria->dxrelsecundario;
        if(is_null($dathistoria->dxrelsecundariocod)===false)$arr_consulta['dxrelsecundariocod_t64']=$dathistoria->dxrelsecundariocod;
        if(is_null($dathistoria->dxtercero)===false)$arr_consulta['dxtercero_t64']=$dathistoria->dxtercero;
        if(is_null($dathistoria->dxtercerocod)===false)$arr_consulta['dxtercerocod_t64']=$dathistoria->dxtercerocod;
        if(is_null($dathistoria->dxcuarto)===false)$arr_consulta['dxcuarto_t64']=$dathistoria->dxcuarto;
        if(is_null($dathistoria->dxcuartocod)===false)$arr_consulta['dxcuartocod_t64']=$dathistoria->dxcuartocod;
        if(is_null($dathistoria->dxfallecido)===false)$arr_consulta['dxfallecido_t64']=$dathistoria->dxfallecido;
        if(is_null($dathistoria->dxfallecidocod)===false)$arr_consulta['dxfallecidocod_t64']=$dathistoria->dxfallecidocod;
        if(is_null($dathistoria->laboratorios)===false)$arr_consulta['laboratorios_t64']=$dathistoria->laboratorios;
        if(is_null($dathistoria->objetivos)===false)$arr_consulta['objetivos_t64']=$dathistoria->objetivos;
        if(is_null($dathistoria->conducta)===false)$arr_consulta['conducta_t64']=$dathistoria->conducta;
        if(is_null($dathistoria->planmanejo)===false)$arr_consulta['planmanejo_t64']=$dathistoria->planmanejo;
        //////nuevos campos del diagnostico 18/04/2018
        if(is_null($dathistoria->tipooption)===false)$arr_consulta['tipooption_t64']=$dathistoria->tipooption;
        if(is_null($dathistoria->causaext)===false)$arr_consulta['causaext_t64']=$dathistoria->causaext;
        if(is_null($dathistoria->viaing)===false)$arr_consulta['viaing_t64']=$dathistoria->viaing;
        if(is_null($dathistoria->finalconsu)===false)$arr_consulta['finalconsu_t64']=$dathistoria->finalconsu;
        if(is_null($dathistoria->finalproc)===false)$arr_consulta['finalproc_t64']=$dathistoria->finalproc;
        ////
        $arr_evoluc['medreg_t68']=$this->Modulo->usr->personal->registromedico_t10;
        $arr_evoluc['medidentif_t68']=$this->Modulo->usr->identificacion_t0;
        $arr_evoluc['mednomcomp_t68']=$this->Modulo->usr->nombre_t0;
        $arr_evoluc['medcargo_t68']=$this->Modulo->usr->personal->cargo_t10;
        $arr_evoluc['medespec_t68']=$this->Modulo->usr->personal->especialidades[0]->especialidades_t9;
        if(is_null($dathistoria->dxprincipal)===false)$arr_evoluc['dxprincipal_t68']=$dathistoria->dxprincipal;
        if(is_null($dathistoria->dxprincipalcod)===false)$arr_evoluc['dxprincipalcod_t68']=$dathistoria->dxprincipalcod;
        if(is_null($dathistoria->dxsecundario)===false)$arr_evoluc['dxsecundario_t68']=$dathistoria->dxsecundario;
        if(is_null($dathistoria->dxsecundariocod)===false)$arr_evoluc['dxsecundariocod_t68']=$dathistoria->dxsecundariocod;
        if(is_null($dathistoria->dxegreso)===false)$arr_evoluc['dxegreso_t68']=$dathistoria->dxegreso;
        if(is_null($dathistoria->dxegresocod)===false)$arr_evoluc['dxegresocod_t68']=$dathistoria->dxegresocod;
        if(is_null($dathistoria->dxrelprincipal)===false)$arr_evoluc['dxrelprincipal_t68']=$dathistoria->dxrelprincipal;
        if(is_null($dathistoria->dxrelprincipalcod)===false)$arr_evoluc['dxrelprincipalcod_t68']=$dathistoria->dxrelprincipalcod;
        if(is_null($dathistoria->dxrelsecundario)===false)$arr_evoluc['dxrelsecundario_t68']=$dathistoria->dxrelsecundario;
        if(is_null($dathistoria->dxrelsecundariocod)===false)$arr_evoluc['dxrelsecundariocod_t68']=$dathistoria->dxrelsecundariocod;
        if(is_null($dathistoria->dxtercero)===false)$arr_evoluc['dxtercero_t68']=$dathistoria->dxtercero;
        if(is_null($dathistoria->dxtercerocod)===false)$arr_evoluc['dxtercerocod_t68']=$dathistoria->dxtercerocod;
        if(is_null($dathistoria->dxcuarto)===false)$arr_evoluc['dxcuarto_t68']=$dathistoria->dxcuarto;
        if(is_null($dathistoria->dxcuartocod)===false)$arr_evoluc['dxcuartocod_t68']=$dathistoria->dxcuartocod;
        if(is_null($dathistoria->laboratorios)===false)$arr_evoluc['laboratorios_t68']=$dathistoria->laboratorios;
        if(is_null($dathistoria->objetivos)===false)$arr_evoluc['objetivos_t68']=$dathistoria->objetivos;
        if(is_null($dathistoria->conducta)===false)$arr_evoluc['conducta_t68']=$dathistoria->conducta;
        if(is_null($dathistoria->planmanejo)===false)$arr_evoluc['planmanejo_t68']=$dathistoria->planmanejo;
        if(is_null($dathistoria->tipoevol)===false)$arr_evoluc['tipoevol_t68']=$dathistoria->tipoevol;

        
        $arr_dathistoria["estado_t4"]='ATENCION MEDICA';
        break;
        
      case "evoldiar":
        $arr_consulta['valoracionini_t64']=1;
        $arr_consulta['medreg_t64']=$this->Modulo->usr->personal->registromedico_t10;
        $arr_consulta['medidentif_t64']=$this->Modulo->usr->identificacion_t0;
        $arr_consulta['mednomcomp_t64']=$this->Modulo->usr->nombre_t0;
        $arr_consulta['medcargo_t64']=$this->Modulo->usr->personal->cargo_t10;
        $arr_consulta['medespec_t64']=$this->Modulo->usr->personal->especialidades[0]->especialidades_t9;
        $arr_dathistoria["estado_t4"]='ATENCION MEDICA';
        $fevolucion = $this->Modulo->ahora();
        $arr_evolhist['id_paciente_t84']=$historia->identificacion_t3;
        $arr_evolhist['id_historia_t84']=$historia->idps_historia_t4;
        $arr_evolhist['id_consulta_t84']=$consulta->idhist_consulta_t64;
        $arr_evolhist['tipo_t84']=$dathistoria->tipoevolucion;
        $arr_evolhist['fecha_t84']=$fevolucion;
        $arr_evolhist['medreg_t84']=$this->Modulo->usr->personal->registromedico_t10;
        $arr_evolhist['medidentif_t84']=$this->Modulo->usr->identificacion_t0;
        $arr_evolhist['mednomcomp_t84']=$this->Modulo->usr->nombre_t0;
        $arr_evolhist['medcargo_t84']=$this->Modulo->usr->personal->cargo_t10;
        $arr_consulta['medespec_t64']=$this->Modulo->usr->personal->especialidades[0]->especialidades_t9;
        $arr_evolhist['usrmod_t84']=$this->Modulo->usr->idusr;
        $arr_evolhist['fmod_t84']=$this->Modulo->ahora();
        $this->db->insert("ps_hist_evolhist_t84",$arr_evolhist);
        unset($arr_evolhist);
        $idevol = $this->Modulo->insertid();
        switch($dathistoria->tipoevolucion){
          case "ENFERMERÍA":
            $arr_concepevol = $dathistoria->evolenf["concep"];
            break;
          case "EVOLUCIÓN MÉDICA":
            $arr_concepevol = $dathistoria->evolmed["concep"];
            break;
          case "TERAPIA RESPIRATORIA":
            $arr_concepevol = $dathistoria->evolterresp["concep"];
            break;
          case "TERAPIA FÍSICA":
            $arr_concepevol = $dathistoria->evolterfis["concep"];
            break;
        }
        //var_dump($arr_concepevol); exit;
        if(is_array($arr_concepevol)){
          $arr_evolconce['id_paciente_t83']=$historia->identificacion_t3;
          $arr_evolconce['id_historia_t83']=$historia->idps_historia_t4;
          $arr_evolconce['id_consulta_t83']=$consulta->idhist_consulta_t64;
          $arr_evolconce['id_evol_t83']=$idevol;
          $arr_evolconce['tipo_t83']=$dathistoria->tipoevolucion;
          $arr_evolconce['fecha_t83']=$fevolucion;
          foreach($arr_concepevol as $concepto=>$valor){
            $arr_evolcond = $arr_evolconce;
            $arr_evolcond['concepto_t83']=$concepto;
            $arr_evolcond['valor_t83']=$valor;
            $arr_evolcond['usrmod_t83']=$this->Modulo->usr->idusr;
            $arr_evolcond['fmod_t83']=$this->Modulo->ahora();
            $this->db->insert("ps_hist_evolmedconc_t83",$arr_evolcond);
            unset($arr_evolcond);
          }
          unset($arr_evolconce);
        }
        if(is_array($dathistoria->evolmed["obj"])){
          $arr_evolconce['id_paciente_t81']=$historia->identificacion_t3;
          $arr_evolconce['id_historia_t81']=$historia->idps_historia_t4;
          $arr_evolconce['id_consulta_t81']=$consulta->idhist_consulta_t64;
          $arr_evolconce['id_evol_t81']=$idevol;
          $arr_evolconce['fecha_t81']=$fevolucion;
          foreach($dathistoria->evolmed["obj"] as $idobj=>$arr_obj){
            $arr_evolcond = $arr_evolconce;
            $arr_evolcond['objetivo_t81']=$arr_obj["objetivo"];
            $arr_evolcond['observacion_t81']=$arr_obj["obs"];
            $arr_evolcond['estado_t81']=$arr_obj["estado"];
            $arr_evolcond['usrmod_t81']=$this->Modulo->usr->idusr;
            $arr_evolcond['fmod_t81']=$this->Modulo->ahora();
            $this->db->insert("ps_hist_evolmedobj_t81",$arr_evolcond);
            unset($arr_evolcond);
            $idobj = $this->Modulo->insertid();
            if(is_array($arr_obj["planes"])){
              $arr_planes = $arr_obj["planes"];
              $arr_evolobjple['id_paciente_t82']=$historia->identificacion_t3;
              $arr_evolobjple['id_historia_t82']=$historia->idps_historia_t4;
              $arr_evolobjple['id_consulta_t82']=$consulta->idhist_consulta_t64;
              $arr_evolobjple['id_evol_t82']=$idevol;
              $arr_evolobjple['id_objetivo_t82']=$idobj;
              $arr_evolobjple['fecha_t82']=$fevolucion;
              $numplanes = count($arr_planes["plan"]);
              for($i=0;$i<$numplanes;$i++){
                $arr_evolobjpld = $arr_evolobjple;
                $arr_evolobjpld['plan_t82']=$arr_planes["plan"][$i];
                $arr_evolobjpld['observacion_t82']=$arr_planes["obs"][$i];
                $arr_evolobjpld['tipo_t82']=$arr_planes["tipo"][$i];
                $arr_evolobjpld['estado_t82']=$arr_planes["estado"][$i];
                $arr_evolobjpld['actividad_t82']=$arr_planes["actividad"][$i];
                $arr_evolobjpld['usrmod_t82']=$this->Modulo->usr->idusr;
                $arr_evolobjpld['fmod_t82']=$this->Modulo->ahora();
                $this->db->insert("ps_hist_evolmedplan_t82",$arr_evolobjpld);
                unset($arr_evolobjpld);
              }
              unset($arr_evolobjple);
            }
          }
          unset($arr_evolconce);
        }
        break;
      case "plantratamto":
        if(is_null($dathistoria->conducta)===false)$arr_evoluc['conducta_t68']=$dathistoria->conducta;
        if(is_null($dathistoria->justificacion)===false)$arr_evoluc['justificacion_t68']=$dathistoria->justificacion;
        $arr_dathistoria["estado_t4"]='ATENCION MEDICA';
        break;
      case "evlucorden":
        if(is_array($dathistoria->evoluord)){
          foreach($dathistoria->evoluord as $idord=>$evolucion){
            if(!empty($evolucion)){
              // debug($evolucion);
              $datorden = $this->ordenproc_obtener($idord);
              $arr_evoluc['medreg_t68']=$this->Modulo->usr->personal->registromedico_t10;
              $arr_evoluc['medidentif_t68']=$this->Modulo->usr->identificacion_t0;
              $arr_evoluc['mednomcomp_t68']=$this->Modulo->usr->nombre_t0;
              $arr_evoluc['medcargo_t68']=$this->Modulo->usr->personal->cargo_t10;
              $arr_evoluc['medespec_t68']=$this->Modulo->usr->personal->especialidades[0]->especialidades_t9;
              if(is_null($dathistoria->dxprincipal)===false)$arr_evoluc['dxprincipal_t68']=$dathistoria->dxprincipal;
              if(is_null($dathistoria->dxprincipalcod)===false)$arr_evoluc['dxprincipalcod_t68']=$dathistoria->dxprincipalcod;
              if(is_null($dathistoria->dxsecundario)===false)$arr_evoluc['dxsecundario_t68']=$dathistoria->dxsecundario;
              if(is_null($dathistoria->dxsecundariocod)===false)$arr_evoluc['dxsecundariocod_t68']=$dathistoria->dxsecundariocod;
              if(is_null($dathistoria->dxegreso)===false)$arr_evoluc['dxegreso_t68']=$dathistoria->dxegreso;
              if(is_null($dathistoria->dxegresocod)===false)$arr_evoluc['dxegresocod_t68']=$dathistoria->dxegresocod;
              if(is_null($dathistoria->dxrelprincipal)===false)$arr_evoluc['dxrelprincipal_t68']=$dathistoria->dxrelprincipal;
              if(is_null($dathistoria->dxrelprincipalcod)===false)$arr_evoluc['dxrelprincipalcod_t68']=$dathistoria->dxrelprincipalcod;
              if(is_null($dathistoria->dxrelsecundario)===false)$arr_evoluc['dxrelsecundario_t68']=$dathistoria->dxrelsecundario;
              if(is_null($dathistoria->dxrelsecundariocod)===false)$arr_evoluc['dxrelsecundariocod_t68']=$dathistoria->dxrelsecundariocod;
              if(is_null($dathistoria->dxtercero)===false)$arr_evoluc['dxtercero_t68']=$dathistoria->dxtercero;
              if(is_null($dathistoria->dxtercerocod)===false)$arr_evoluc['dxtercerocod_t68']=$dathistoria->dxtercerocod;
              if(is_null($dathistoria->dxcuarto)===false)$arr_evoluc['dxcuarto_t68']=$dathistoria->dxcuarto;
              if(is_null($dathistoria->dxcuartocod)===false)$arr_evoluc['dxcuartocod_t68']=$dathistoria->dxcuartocod;
              if(is_null($dathistoria->laboratorios)===false)$arr_evoluc['laboratorios_t68']=$dathistoria->laboratorios;
              if(is_null($dathistoria->objetivos)===false)$arr_evoluc['objetivos_t68']=$dathistoria->objetivos;
              if(is_null($dathistoria->conducta)===false)$arr_evoluc['conducta_t68']=$dathistoria->conducta;
              if(is_null($dathistoria->planmanejo)===false)$arr_evoluc['planmanejo_t68']=$dathistoria->planmanejo;
              if(is_null($dathistoria->tipoevol)===false)$arr_evoluc['tipoevol_t68']=$dathistoria->tipoevol;
              
              unset($arr_evolucord);
              if(is_null($dathistoria->dxprincipal)===false)$arr_consulta['dxprincipal_t64']=$dathistoria->dxprincipal;
              if(is_null($dathistoria->dxprincipalcod)===false)$arr_consulta['dxprincipalcod_t64']=$dathistoria->dxprincipalcod;
              if(is_null($dathistoria->dxrelprincipal)===false)$arr_consulta['dxrelprincipal_t64']=$dathistoria->dxrelprincipal;
              if(is_null($dathistoria->dxrelprincipalcod)===false)$arr_consulta['dxrelprincipalcod_t64']=$dathistoria->dxrelprincipalcod;
              if(is_null($evolucion)===false)$arr_evolucord['observacion_t67']=$evolucion;
              if(is_null($dathistoria->objetivos)===false)$arr_evolucord['objetivos_t67']=$dathistoria->objetivos;
              if(is_null($dathistoria->planmanejo)===false)$arr_evolucord['planmanejo_t67']=$dathistoria->planmanejo;
              if($datorden->cantidadpen_t67>0){
                $arr_evolucord['cantidadpen_t67']=$datorden->cantidadpen_t67-1;
              }else{
                $arr_evolucord['cantidadpen_t67']=0;
              }
              if(is_array($arr_evolucord)){
                $this->db->where("idhist_ordenes_t67",$idord);
                $this->db->update("ps_hist_ordenes_t67",$arr_evolucord);
                // debug($this->db->last_query());
              }
            }
          }
        }else{
          $datorden = $this->ordenproc_obtener($dathistoria->numorden);
          if(is_null($dathistoria->dxprincipal)===false)$arr_consulta['dxprincipal_t64']=$dathistoria->dxprincipal;
          if(is_null($dathistoria->dxprincipalcod)===false)$arr_consulta['dxprincipalcod_t64']=$dathistoria->dxprincipalcod;
          if(is_null($dathistoria->dxrelprincipal)===false)$arr_consulta['dxrelprincipal_t64']=$dathistoria->dxrelprincipal;
          if(is_null($dathistoria->dxrelprincipalcod)===false)$arr_consulta['dxrelprincipalcod_t64']=$dathistoria->dxrelprincipalcod;
          if(is_null($dathistoria->conducta)===false)$arr_evolucord['conducta_t67']=$dathistoria->conducta;
          if(is_null($dathistoria->objetivos)===false)$arr_evolucord['objetivos_t67']=$dathistoria->objetivos;
          if(is_null($dathistoria->planmanejo)===false)$arr_evolucord['planmanejo_t67']=$dathistoria->planmanejo;
          if($datorden->cantidadpen_t67>0){
            $arr_evolucord['cantidadpen_t67']=$datorden->cantidadpen_t67-1;
          }else{
            $arr_evolucord['cantidadpen_t67']=0;
          }
          if(is_array($arr_evolucord)){
            $this->db->where("idhist_ordenes_t67",$dathistoria->numorden);
            $this->db->update("ps_hist_ordenes_t67",$arr_evolucord);
          }
          
          $arr_evoluc['medreg_t68']=$this->Modulo->usr->personal->registromedico_t10;
          $arr_evoluc['medidentif_t68']=$this->Modulo->usr->identificacion_t0;
          $arr_evoluc['mednomcomp_t68']=$this->Modulo->usr->nombre_t0;
          $arr_evoluc['medcargo_t68']=$this->Modulo->usr->personal->cargo_t10;
          $arr_evoluc['medespec_t68']=$this->Modulo->usr->personal->especialidades[0]->especialidades_t9;
          if(is_null($dathistoria->dxprincipal)===false)$arr_evoluc['dxprincipal_t68']=$dathistoria->dxprincipal;
          if(is_null($dathistoria->dxprincipalcod)===false)$arr_evoluc['dxprincipalcod_t68']=$dathistoria->dxprincipalcod;
          if(is_null($dathistoria->dxsecundario)===false)$arr_evoluc['dxsecundario_t68']=$dathistoria->dxsecundario;
          if(is_null($dathistoria->dxsecundariocod)===false)$arr_evoluc['dxsecundariocod_t68']=$dathistoria->dxsecundariocod;
          if(is_null($dathistoria->dxegreso)===false)$arr_evoluc['dxegreso_t68']=$dathistoria->dxegreso;
          if(is_null($dathistoria->dxegresocod)===false)$arr_evoluc['dxegresocod_t68']=$dathistoria->dxegresocod;
          if(is_null($dathistoria->dxrelprincipal)===false)$arr_evoluc['dxrelprincipal_t68']=$dathistoria->dxrelprincipal;
          if(is_null($dathistoria->dxrelprincipalcod)===false)$arr_evoluc['dxrelprincipalcod_t68']=$dathistoria->dxrelprincipalcod;
          if(is_null($dathistoria->dxrelsecundario)===false)$arr_evoluc['dxrelsecundario_t68']=$dathistoria->dxrelsecundario;
          if(is_null($dathistoria->dxrelsecundariocod)===false)$arr_evoluc['dxrelsecundariocod_t68']=$dathistoria->dxrelsecundariocod;
          if(is_null($dathistoria->dxtercero)===false)$arr_evoluc['dxtercero_t68']=$dathistoria->dxtercero;
          if(is_null($dathistoria->dxtercerocod)===false)$arr_evoluc['dxtercerocod_t68']=$dathistoria->dxtercerocod;
          if(is_null($dathistoria->dxcuarto)===false)$arr_evoluc['dxcuarto_t68']=$dathistoria->dxcuarto;
          if(is_null($dathistoria->dxcuartocod)===false)$arr_evoluc['dxcuartocod_t68']=$dathistoria->dxcuartocod;
          if(is_null($dathistoria->laboratorios)===false)$arr_evoluc['laboratorios_t68']=$dathistoria->laboratorios;
          if(is_null($dathistoria->objetivos)===false)$arr_evoluc['objetivos_t68']=$dathistoria->objetivos;
          if(is_null($dathistoria->conducta)===false)$arr_evoluc['conducta_t68']=$dathistoria->conducta;
          if(is_null($dathistoria->planmanejo)===false)$arr_evoluc['planmanejo_t68']=$dathistoria->planmanejo;
          if(is_null($dathistoria->tipoevol)===false)$arr_evoluc['tipoevol_t68']=$dathistoria->tipoevol;
          if(is_array($dathistoria->detalle)){
            $evolucordendet = true;
          }
        }
            if(is_array($dathistoria->referencia)){
              $x=0;
          foreach($dathistoria->referencia as $idord=>$evolucion){
          // debug($dathistoria->codigot[$idord]);
            $this->modelo_universal->update('ps_plan_tarifario_t63',array('referencia1_t67'=>$evolucion),array('codplantarifa_t63'=>$dathistoria->codigot[$idord]));
            $x++;
          }
        }
               if(is_array($dathistoria->evoluordtext)){
          foreach($dathistoria->evoluordtext as $idord=>$evolucion){
            if(!empty($evolucion)){
              $datorden = $this->ordenproc_obtener($idord);
              $arr_evoluc['medreg_t68']=$this->Modulo->usr->personal->registromedico_t10;
              $arr_evoluc['medidentif_t68']=$this->Modulo->usr->identificacion_t0;
              $arr_evoluc['mednomcomp_t68']=$this->Modulo->usr->nombre_t0;
              $arr_evoluc['medcargo_t68']=$this->Modulo->usr->personal->cargo_t10;
              $arr_evoluc['medespec_t68']=$this->Modulo->usr->personal->especialidades[0]->especialidades_t9;
              if(is_null($dathistoria->dxprincipal)===false)$arr_evoluc['dxprincipal_t68']=$dathistoria->dxprincipal;
              if(is_null($dathistoria->dxprincipalcod)===false)$arr_evoluc['dxprincipalcod_t68']=$dathistoria->dxprincipalcod;
              if(is_null($dathistoria->dxsecundario)===false)$arr_evoluc['dxsecundario_t68']=$dathistoria->dxsecundario;
              if(is_null($dathistoria->dxsecundariocod)===false)$arr_evoluc['dxsecundariocod_t68']=$dathistoria->dxsecundariocod;
              if(is_null($dathistoria->dxegreso)===false)$arr_evoluc['dxegreso_t68']=$dathistoria->dxegreso;
              if(is_null($dathistoria->dxegresocod)===false)$arr_evoluc['dxegresocod_t68']=$dathistoria->dxegresocod;
              if(is_null($dathistoria->dxrelprincipal)===false)$arr_evoluc['dxrelprincipal_t68']=$dathistoria->dxrelprincipal;
              if(is_null($dathistoria->dxrelprincipalcod)===false)$arr_evoluc['dxrelprincipalcod_t68']=$dathistoria->dxrelprincipalcod;
              if(is_null($dathistoria->dxrelsecundario)===false)$arr_evoluc['dxrelsecundario_t68']=$dathistoria->dxrelsecundario;
              if(is_null($dathistoria->dxrelsecundariocod)===false)$arr_evoluc['dxrelsecundariocod_t68']=$dathistoria->dxrelsecundariocod;
              if(is_null($dathistoria->dxtercero)===false)$arr_evoluc['dxtercero_t68']=$dathistoria->dxtercero;
              if(is_null($dathistoria->dxtercerocod)===false)$arr_evoluc['dxtercerocod_t68']=$dathistoria->dxtercerocod;
              if(is_null($dathistoria->dxcuarto)===false)$arr_evoluc['dxcuarto_t68']=$dathistoria->dxcuarto;
              if(is_null($dathistoria->dxcuartocod)===false)$arr_evoluc['dxcuartocod_t68']=$dathistoria->dxcuartocod;
              if(is_null($dathistoria->laboratorios)===false)$arr_evoluc['laboratorios_t68']=$dathistoria->laboratorios;
              if(is_null($dathistoria->objetivos)===false)$arr_evoluc['objetivos_t68']=$dathistoria->objetivos;
              if(is_null($dathistoria->conducta)===false)$arr_evoluc['conducta_t68']=$dathistoria->conducta;
              if(is_null($dathistoria->planmanejo)===false)$arr_evoluc['planmanejo_t68']=$dathistoria->planmanejo;
              if(is_null($dathistoria->tipoevol)===false)$arr_evoluc['tipoevol_t68']=$dathistoria->tipoevol;
              
              unset($arr_evolucord);
              if(is_null($dathistoria->dxprincipal)===false)$arr_consulta['dxprincipal_t64']=$dathistoria->dxprincipal;
              if(is_null($dathistoria->dxprincipalcod)===false)$arr_consulta['dxprincipalcod_t64']=$dathistoria->dxprincipalcod;
              if(is_null($dathistoria->dxrelprincipal)===false)$arr_consulta['dxrelprincipal_t64']=$dathistoria->dxrelprincipal;
              if(is_null($dathistoria->dxrelprincipalcod)===false)$arr_consulta['dxrelprincipalcod_t64']=$dathistoria->dxrelprincipalcod;
              if(is_null($evolucion)===false)$arr_evolucord['referencia_t67']=$evolucion;
              if(is_null($dathistoria->objetivos)===false)$arr_evolucord['objetivos_t67']=$dathistoria->objetivos;
              if(is_null($dathistoria->planmanejo)===false)$arr_evolucord['planmanejo_t67']=$dathistoria->planmanejo;
              if($datorden->cantidadpen_t67>0){
                $arr_evolucord['cantidadpen_t67']=$datorden->cantidadpen_t67-1;
              }else{
                $arr_evolucord['cantidadpen_t67']=0;
              }
              if(is_array($arr_evolucord)){
                //$this->db->where("idhist_ordenes_t67",$idord);
                //$this->db->update("ps_hist_ordenes_t67",$arr_evolucord);
              }
            }
          }
        }else{
          $datorden = $this->ordenproc_obtener($dathistoria->numorden);
          if(is_null($dathistoria->dxprincipal)===false)$arr_consulta['dxprincipal_t64']=$dathistoria->dxprincipal;
          if(is_null($dathistoria->dxprincipalcod)===false)$arr_consulta['dxprincipalcod_t64']=$dathistoria->dxprincipalcod;
          if(is_null($dathistoria->dxrelprincipal)===false)$arr_consulta['dxrelprincipal_t64']=$dathistoria->dxrelprincipal;
          if(is_null($dathistoria->dxrelprincipalcod)===false)$arr_consulta['dxrelprincipalcod_t64']=$dathistoria->dxrelprincipalcod;
          if(is_null($dathistoria->conducta)===false)$arr_evolucord['conducta_t67']=$dathistoria->conducta;
          if(is_null($dathistoria->objetivos)===false)$arr_evolucord['objetivos_t67']=$dathistoria->objetivos;
          if(is_null($dathistoria->planmanejo)===false)$arr_evolucord['planmanejo_t67']=$dathistoria->planmanejo;
          if($datorden->cantidadpen_t67>0){
            $arr_evolucord['cantidadpen_t67']=$datorden->cantidadpen_t67-1;
          }else{
            $arr_evolucord['cantidadpen_t67']=0;
          }
          if(is_array($arr_evolucord)){
            //$this->db->where("idhist_ordenes_t67",$dathistoria->numorden);
            //$this->db->update("ps_hist_ordenes_t67",$arr_evolucord);
          }
          
          $arr_evoluc['medreg_t68']=$this->Modulo->usr->personal->registromedico_t10;
          $arr_evoluc['medidentif_t68']=$this->Modulo->usr->identificacion_t0;
          $arr_evoluc['mednomcomp_t68']=$this->Modulo->usr->nombre_t0;
          $arr_evoluc['medcargo_t68']=$this->Modulo->usr->personal->cargo_t10;
          $arr_evoluc['medespec_t68']=$this->Modulo->usr->personal->especialidades[0]->especialidades_t9;
          if(is_null($dathistoria->dxprincipal)===false)$arr_evoluc['dxprincipal_t68']=$dathistoria->dxprincipal;
          if(is_null($dathistoria->dxprincipalcod)===false)$arr_evoluc['dxprincipalcod_t68']=$dathistoria->dxprincipalcod;
          if(is_null($dathistoria->dxsecundario)===false)$arr_evoluc['dxsecundario_t68']=$dathistoria->dxsecundario;
          if(is_null($dathistoria->dxsecundariocod)===false)$arr_evoluc['dxsecundariocod_t68']=$dathistoria->dxsecundariocod;
          if(is_null($dathistoria->dxegreso)===false)$arr_evoluc['dxegreso_t68']=$dathistoria->dxegreso;
          if(is_null($dathistoria->dxegresocod)===false)$arr_evoluc['dxegresocod_t68']=$dathistoria->dxegresocod;
          if(is_null($dathistoria->dxrelprincipal)===false)$arr_evoluc['dxrelprincipal_t68']=$dathistoria->dxrelprincipal;
          if(is_null($dathistoria->dxrelprincipalcod)===false)$arr_evoluc['dxrelprincipalcod_t68']=$dathistoria->dxrelprincipalcod;
          if(is_null($dathistoria->dxrelsecundario)===false)$arr_evoluc['dxrelsecundario_t68']=$dathistoria->dxrelsecundario;
          if(is_null($dathistoria->dxrelsecundariocod)===false)$arr_evoluc['dxrelsecundariocod_t68']=$dathistoria->dxrelsecundariocod;
          if(is_null($dathistoria->dxtercero)===false)$arr_evoluc['dxtercero_t68']=$dathistoria->dxtercero;
          if(is_null($dathistoria->dxtercerocod)===false)$arr_evoluc['dxtercerocod_t68']=$dathistoria->dxtercerocod;
          if(is_null($dathistoria->dxcuarto)===false)$arr_evoluc['dxcuarto_t68']=$dathistoria->dxcuarto;
          if(is_null($dathistoria->dxcuartocod)===false)$arr_evoluc['dxcuartocod_t68']=$dathistoria->dxcuartocod;
          if(is_null($dathistoria->laboratorios)===false)$arr_evoluc['laboratorios_t68']=$dathistoria->laboratorios;
          if(is_null($dathistoria->objetivos)===false)$arr_evoluc['objetivos_t68']=$dathistoria->objetivos;
          if(is_null($dathistoria->conducta)===false)$arr_evoluc['conducta_t68']=$dathistoria->conducta;
          if(is_null($dathistoria->planmanejo)===false)$arr_evoluc['planmanejo_t68']=$dathistoria->planmanejo;
          if(is_null($dathistoria->tipoevol)===false)$arr_evoluc['tipoevol_t68']=$dathistoria->tipoevol;
          if(is_array($dathistoria->detalle)){
            $evolucordendet = true;
          }
        }
          
          
        $arr_dathistoria["estado_t4"]='ATENCION MEDICA';
        break;
      case "ordenmedcs":

        if(is_array($dathistoria->orden["medcs"])){
          $idorden = $this->orden_siguiente();
          $orden = $dathistoria->orden["medcs"];
          $num = count($orden);
          $nopos = false;
          
          for($i=0;$i<$num;$i++){
            if(!empty($orden["cum"][$i])){
              $omed = $this->Constante->cums_obtener($orden["cum"][$i]);
              $arr_orden['tipo_t67']=$orden["tipo"][$i];
              $arr_orden['codigo_t67']=$orden["cum"][$i];
              /*
              if($nopos==true){
                $arr_orden['pos_t67']='HPNP';
              }else{
                $arr_orden['pos_t67']=$omed->pos_t73;
              }
              */
              $arr_orden['pos_t67']=$omed->pos_t73;
              $arr_orden['noposjust_t67']=$orden["noposjust"];
              $arr_orden['noposevid_t67']=$orden["noposevid"];
              $arr_orden['noposprec_t67']=$orden["noposprec"];
              $arr_orden['noposgen_t67']=$orden["noposgen"];
              $arr_orden['descripcion_t67']=$orden["cum_desc"][$i];
              $arr_orden['cantidad_t67']=$orden["cantidad"][$i];
              $arr_orden['cantidadpen_t67']=$orden["cantidad_t67"][$i];
              $arr_orden['cantfac_t67']=$orden["cantidad_t67"][$i];
              $arr_orden['durdias_t67']=$orden["durante"][$i];
              $arr_orden['frecuencia_t67']=$orden["frecuencia"][$i];
              $arr_orden['posologia_t67']=$orden["posologia"][$i];
              $arr_orden['dosis_t67']=$orden["dosis"][$i];
              $arr_orden['udosis_t67']=$orden["udos"][$i];
              $arr_orden['aplicnum_t67']=$arr_orden['cantidad_t67']/$arr_orden['dosis_t67'];
              $arr_orden['aplicsig_t67']=$this->Modulo->adicitiempo($this->Modulo->ahora(),$arr_orden['summed_t67']);
              $arr_orden['aplicpend_t67']=$arr_orden['aplicnum_t67'];
              $arr_orden['via_t67']=$orden["via"][$i];
              $arr_orden['externo_t67']=$orden["externo"][$i];
              $arr_orden['observacion_t67']=$orden["observacion"][$i];
              $arr_orden['summed_t67']=$orden["summed"][$i];
              /* datos modificados */
              //$arr_orden['sum_tiempo_t67'] = $orden["sum_tiempo"][$i];
              $arr_orden['sum_descr_t67'] = $orden["sum_descr"][$i];
              /*
              var_dump($orden["sum_descr"][$i]);
              exit;
              */
              /* datos modificados */
              $arr_orden["usrmod_t67"]=$this->Modulo->usr->idusr;
              $arr_orden["fmod_t67"]=$this->Modulo->ahora();
              $arr_orden['id_consulta_t67']=$consulta->idhist_consulta_t64;
              $arr_orden['orden_t67']=$idorden;
              $arr_orden['idpaciente_t67']=$historia->identificacion_t3;
              $arr_orden['idhistoria_t67']=$historia->idps_historia_t4;

              $this->db->insert("ps_hist_ordenes_t67",$arr_orden);
          
             
           
              //$this->dosificar($arr_orden);
              unset($arr_orden);
              $datossalida->codigo=$orden["cum"][$i];
              $datossalida->almacen=1;
              $datossalida->cantidad=$orden["cantidad"][$i];
              $this->Inventario->salidamerc($datossalida);
              unset($datossalida);

              /*
              if($omed->pos_t73=='NO POS'){
                $nopos=true;
              }
              */

            }
          }
        }
        //exit;
        break;
      case "ordenprocs":
        if(is_array($dathistoria->orden["procs"])){
          $idorden = $this->orden_siguiente();
          $orden = $dathistoria->orden["procs"];
          $num = count($orden);
          for($i=0;$i<$num;$i++){
            $arr_orden['tipo_t67']=$dathistoria->orden["procs"]["idtipoproce"];
            if(!empty($dathistoria->orden["procs"]["especialidades"])){
              $oespec = $this->Especialidades->obtener($dathistoria->orden["procs"]["especialidades"]);
              $arr_orden['idespecialidad_t67'] = $oespec->idps_especialidades_t9;
              $arr_orden['especialidad_t67'] = $oespec->especialidades_t9;
            }
            if(!empty($dathistoria->orden["procs"]["terceroid"])){
              $arr_terceros = $this->Modulo->objarrasoc($this->Constante->arr_terimxaliad,"idtercer");
              $tercero = $arr_terceros[$dathistoria->orden["procs"]["terceroid"]];
              $arr_orden['terid_t67']=$tercero->idtercer;
              $arr_orden['ternom_t67']=$tercero->tercero;
              $arr_orden['ternit_t67']=$tercero->nit;
              $arr_orden['terdir_t67']=$tercero->direccion;
            }
            if(!empty($orden["procedimmientocod"][$i])){
              $cups = $this->Cups->obtener($orden["procedimmientocod"][$i]);
              if(empty($arr_orden['tipo_t67'])){
                $arr_orden['tipo_t67']=$cups->tiposervicio_t63;
              }
              $arr_orden['codigo_t67']=$orden["procedimmientocod"][$i];
              $arr_orden['tipoplan_t67']=$cups->tipoplan_t63;
              $arr_orden['archrips_t67']=$cups->archrips_t63;
              $arr_orden['descripcion_t67']=$orden["procedimmiento"][$i];
              $arr_orden['cantidad_t67']=$orden["cantidad"][$i];
              $arr_orden['cantfac_t67']=$orden["cantidad"][$i];
              if($orden["aplicado"][$i]=='SI'){
                $arr_orden['cantidadpen_t67']=$arr_orden['cantidad_t67']-1;
              }else{
                $arr_orden['cantidadpen_t67']=$arr_orden['cantidad_t67'];
              }
              $arr_orden['valor_t67']=$cups->valor_t63;
              $arr_orden['observacion_t67']=$orden["observacion"][$i];
              $arr_orden["usrmod_t67"]=$this->Modulo->usr->idusr;
              $arr_orden["fmod_t67"]=$this->Modulo->ahora();
              $arr_orden['id_consulta_t67']=$consulta->idhist_consulta_t64;
              $arr_orden['orden_t67']=$idorden;
              $arr_orden['idpaciente_t67']=$historia->identificacion_t3;
              $arr_orden['idhistoria_t67']=$historia->idps_historia_t4;
              $this->db->insert("ps_hist_ordenes_t67",$arr_orden);
              unset($arr_orden);
            }
          }
        }
        break;
        
      case "notaclarat":
        if(is_null($dathistoria->notaclarat)===false){
          $arr_consulta['notaclarat_t64']=$dathistoria->notaclarat;
          $arr_consulta['medreg_t64']=$this->Modulo->usr->personal->registromedico_t10;
          $arr_consulta['medidentif_t64']=$this->Modulo->usr->identificacion_t0;
          $arr_consulta['mednomcomp_t64']=$this->Modulo->usr->nombre_t0;
          $arr_consulta['medcargo_t64']=$this->Modulo->usr->personal->cargo_t10;
          $arr_consulta['medespec_t64']=$this->Modulo->usr->personal->especialidades[0]->especialidades_t9;
        }
        break;
        
      case "remision":
        if(is_null($dathistoria->remisdestino)===false){
          $arr_consulta['remisdestino_t64']=$dathistoria->remisdestino;
          $arr_consulta['remismedico_t64']=$dathistoria->remismedico;
          $arr_consulta['remisespec_t64']=$dathistoria->remisespec;
          $arr_consulta['remismotivo_t64']=$dathistoria->remismotivo;
          $arr_consulta['medreg_t64']=$this->Modulo->usr->personal->registromedico_t10;
          $arr_consulta['medidentif_t64']=$this->Modulo->usr->identificacion_t0;
          $arr_consulta['mednomcomp_t64']=$this->Modulo->usr->nombre_t0;
          $arr_consulta['medcargo_t64']=$this->Modulo->usr->personal->cargo_t10;
          $arr_consulta['medespec_t64']=$this->Modulo->usr->personal->especialidades[0]->especialidades_t9;
        }
        break;
        
      case "cierre":
        $arr_infosalida = (object)array(
          "destino"=>$dathistoria->destinopac,
          "condicion"=>$dathistoria->condicionsalida
        );
        $this->cierre($historia,$consulta,$arr_infosalida);
        if(is_null($dathistoria->dxegreso)===false)$arr_consulta['dxegreso_t64']=$dathistoria->dxegreso;
        break;
    }
    if(is_array($arr_evoluc)){
      $arr_evoluc["usrmod_t68"]=$this->Modulo->usr->idusr;
      $arr_evoluc["fmod_t68"]=$this->Modulo->ahora();
      $arr_evoluc['id_consulta_t68']=$consulta->idhist_consulta_t64;
      $arr_evoluc['idpaciente_t68']=$historia->identificacion_t3;
      $arr_evoluc['idhistoria_t68']=$historia->idps_historia_t4;
      $this->db->insert("ps_hist_evolucion_t68",$arr_evoluc);
      $idevolucion = $this->db->insert_id();
      if($evolucordendet===true){
        $this->evolucdet_reg($idevolucion,$dathistoria);
      }
      unset($arr_evoluc);
    }
    $arr_consulta['medreg_t64']=$this->Modulo->usr->personal->registromedico_t10;
    $arr_consulta['medidentif_t64']=$this->Modulo->usr->identificacion_t0;
    $arr_consulta['mednomcomp_t64']=$this->Modulo->usr->nombre_t0;
    $arr_consulta['medcargo_t64']=$this->Modulo->usr->personal->cargo_t10;
    $arr_consulta['medespec_t64']=$this->Modulo->usr->personal->especialidades[0]->especialidades_t9;
    
    if(is_null($consulta->idhist_consulta_t64)){
      $this->db->insert("ps_hist_consulta_t64",$arr_consulta);
      $idconsulta = $this->db->insert_id();
    }else{
      $this->db->where("idhist_consulta_t64",$consulta->idhist_consulta_t64);
      $this->db->update("ps_hist_consulta_t64",$arr_consulta);
    }
    //var_dump($arr_dathistoria); exit;
    if(!empty($arr_dathistoria["estado_t4"])){
      $arr_dathistoria["estado_t4"]=$this->procestado($historia->estado_t4,$arr_dathistoria["estado_t4"]);
      $arr_datpac["estado_t3"]=$arr_dathistoria["estado_t4"];
      $arr_datpac["usrmod_t3"]=$this->Modulo->usr->idusr;
      $arr_datpac["fmod_t3"]=$this->Modulo->ahora();
      $this->db->where("identificacion_t3",$historia->identificacion_t3);
      $this->db->update("ps_paciente_t3",$arr_datpac);
    }
    //var_dump($arr_dathistoria["estado_t4"]); exit;
    $arr_dathistoria["usrmod_t4"]=$this->Modulo->usr->idusr;
    $arr_dathistoria["fmod_t4"]=$this->Modulo->ahora();
    $this->db->where("idps_historia_t4",$historia->idps_historia_t4);
    $this->db->update("ps_historia_t4",$arr_dathistoria);
    unset($arr_dathistoria);
    return $historia->idps_historia_t4;
  }
  
  function odontologia($idhistoria,$dathistoria="",$evento){
    
        if ($this->uri->segment(5) == "evol_med") {
      $idhistoria = $this->uri->segment(6);
    }else{
      $idhistoria = $this->uri->segment(5);
    }
    $historia = $this->obtener($idhistoria);
    // debug($historia);
    //$paciente = $this->Paciente->obtener($historia->identificacion_t3);
    //$consulta = $this->consulta_obtener($idhistoria);
    $arr_consulta["usrmod_t64"]=$this->Modulo->usr->idusr;
    $arr_consulta["fmod_t64"]=$this->Modulo->ahora();
    $arr_consulta['idpaciente_t64']=$historia->identificacion_t3;
    $arr_consulta['idhistoria_t64']=$historia->idps_historia_t4;
    
    if(empty($dathistoria)){
      $dathistoria=(object)$this->input->post();
    }
  $evento=$this->uri->segment(6);
  
   if(empty($evento)){
      $result= $this->modelo_universal->select("ps_hist_consulta_odon","*",array('idhistoria_odon'=>$historia->idps_historia_t4));
 
        $array["id_paciente_odon"] = $historia->identificacion_t3;
        $array["idhistoria_odon"] = $idhistoria;
        ///////motivo
        $array["m_consulta_odon"] = $dathistoria->motivo["consulta"];
        $array["m_enfer_actual_odon"] =$dathistoria->motivo["enfer_actual"];
        ///////revision
        $array["r_cepillado_odon"] =$dathistoria->revision["cepillado"];
        $array["r_dental_odon"] =$dathistoria->revision["dental"];
        $array["r_bucal_odon"] =$dathistoria->revision["bucal"];
        $array["r_habitos_odon"] =$dathistoria->revision["habitos"];
        
        $array["r_ultima_consulta_odon"]= $dathistoria->revision["ultima_consulta"];
        $array["r_labios_odon"] =$dathistoria->revision["labios"];
        $array["r_vestibulo_odon"] =$dathistoria->revision["vestibulo"];
        $array["r_carrillos_odon"] =$dathistoria->revision["carrillos"];
        $array["r_paladar_odon"] =$dathistoria->revision["paladar"];
        $array["r_lengua_odon"]= $dathistoria->revision["lengua"];
        $array["r_piso_lengua_odon"]= $dathistoria->revision["piso_lengua"];
        $array["r_descrip_odon"]= $dathistoria->revision["descrip"];
        $array["r_aspecto_odon"] =$dathistoria->revision["aspecto"];
        $array["r_color_odon"] =$dathistoria->revision["color"];
        $array["r_forma_odon"] =$dathistoria->revision["forma"];
        $array["r_descrip2_odon"] =$dathistoria->revision["descrip2"];

        $array["r_irritantes_odon"] =$dathistoria->revision["irritantes"];
        $array["r_supra_odon"] =$dathistoria->revision["supra"];
        $array["r_bolsas_odon"] =$dathistoria->revision["bolsas"];
        $array["r_movilidad_odon"] =$dathistoria->revision["movilidad"];
        $array["r_malposicion_odon"] =$dathistoria->revision["malposicion"];
        $array["r_obturaciones_odon"] =$dathistoria->revision["obturaciones"];
        $array["r_coronas_odon"] =$dathistoria->revision["coronas"];

        $array["r_descrip3_odon"] =$dathistoria->revision["descrip3"];
        $array["r_otros_odon"] =$dathistoria->revision["otros"];
        $array["r_clasif_odon"] =$dathistoria->revision["clasif"];
        $array["r_lateralidad_odon"] =$dathistoria->revision["lateralidad"];
        $array["r_protrusiva_odon"] =$dathistoria->revision["protrusiva"];
        $array["r_atm_odon"]= $dathistoria->revision["atm"];
        $array["r_examen_rx_odon"]= $dathistoria->revision["examen_rx"];
        $array["r_clasif_ries_odon"]= $dathistoria->revision["clasif_ries"];
        $array["r_descrip4_odon"] =$dathistoria->revision["descrip4"];
        $array['oleary'] = $dathistoria->revision['oleary'];
        $array['dean'] = $dathistoria->revision['dean'];
        $array["r_clasif_odon2"] =$dathistoria->revision["clasif2"];
        //////////////////////revisio
        //////////////////////DX
        $array["dx_dxprincipal_odon"] =$dathistoria->dx["dxprincipal"];
        $array["dx_dxprincipalcod_odon"] =$dathistoria->dx["dxprincipalcod"];
        $array["dx_tipodx_odon"] =$dathistoria->dx["tipodx"];
        $array["dx_dxtercero_odon"] =$dathistoria->dx["dxtercero"];
        //$array["dx_dxtercerocod_odon"]= $dathistoria->dx["dxtercerocod"];
        $array["dx_dxsecundario_odon"] =$dathistoria->dx["dxsecundario"];
        $array["dx_dxsecundariocod_odon"]= $dathistoria->dx["dxsecundariocod"];
        $array["dx_tipodiag2_odon"] =$dathistoria->dx["tipodiag2"];
        $array["dx_dxcuarto_odon"]= $dathistoria->dx["dxcuarto"];
        $array["dx_dxrelprincipal_odon"] =$dathistoria->dx["dxrelprincipal"];
        $array["dx_dxrelprincipalcod_odon"]= $dathistoria->dx["dxrelprincipalcod"];

        $array["dx_dxrelsecundario_odon"]= $dathistoria->dx["dxrelsecundario"];
        $array["dx_dxrelsecundariocod_odon"]= $dathistoria->dx["dxrelsecundariocod"];
       
        $array["dx_causaext_odon"]= $dathistoria->dx["causaext"];
        $array["dx_viaing_odon"]= $dathistoria->dx["viaing"];
        $array["dx_finalconsu_odon"]= $dathistoria->dx["finalconsu"];
        $array["dx_finalproc_odon"]= $dathistoria->dx["finalproc"];
        ////////////DX
        /////ANALISIS
        $array["a_laboratorios_odon"]= $dathistoria->analisis["laboratorios"];
        $array["a_conducta_odon"]= $dathistoria->analisis["conducta"];
       $array["a_planmanejo_odon"]= $dathistoria->analisis["planmanejo"];
        /////////ANALISIS
        $array["fmod_odon"] = $this->Modulo->usr->idusr;
        $array["usrmod_odon"]=$this->Modulo->ahora();
        
         echo "<h1 style='text-aling:center'>".$historia->idps_historia_t4."</h1>";
        if(!empty($result)){ 
          echo "Aqui";
            $this->db->where("idhistoria_odon",$historia->idps_historia_t4); 
       $this->db->update('ps_hist_consulta_odon', $array);
            
        }else{
              
           $this->db->insert('ps_hist_consulta_odon', $array); 
            return 1;
        } 
    }else{

      // debug($historia);
                   $evol_odon["idpaciente_t68"]=$historia->identificacion_t3;
                    $evol_odon["idhistoria_t68"]=$historia->idps_historia_t4;
                    $evol_odon["tipoevol_t68"]=$dathistoria->tipoevol; 
                    //$evol_odon["evoldiaria_t68"]=$dathistoria->dx["evoldiaria_t68"];
                    $evol_odon["planmanejo_t68"]=$dathistoria->planmanejo ;
                    $evol_odon["conducta_t68"]=$dathistoria->conducta ;
                    //$evol_odon["justificacion_t68"]=$dathistoria->dx["justificacion_t68"] ;
                    //$evol_odon["objetivos_t68"]=$dathistoria->dx["objetivos_t68"] ;
                    $evol_odon["laboratorios_t68"]=$dathistoria->laboratorios; 

                    $evol_odon["dx_dxprincipal_odon"]=$dathistoria->dx["dxprincipal"];
                    $evol_odon["dx_dxprincipalcod_odon"]=$dathistoria->dx["dxprincipalcod"]; 
                    $evol_odon["dx_tipodx_odon"]=$dathistoria->dx["tipodx"] ;
                   
                    $evol_odon["dx_dxtercerocod_odon"]=$dathistoria->dx["dxtercero"] ;
                    $evol_odon["dx_dxsecundario_odon"]=$dathistoria->dx["dxsecundario"] ;
                    $evol_odon["dx_dxsecundariocod_odon"]=$dathistoria->dx["dxsecundariocod"] ;
                    $evol_odon["dx_tipodiag2_odon"]=$dathistoria->dx["tipodiag2"]; 
                    $evol_odon["dx_dxcuarto_odon"]=$dathistoria->dx["dxcuarto"]; 
                    $evol_odon["dx_dxrelsecundario_odon"]=$dathistoria->dx["dxrelsecundario"]; 
                    $evol_odon["dx_dxrelsecundariocod_odon"]=$dathistoria->dx["dxrelsecundariocod"] ;
                    $evol_odon["dx_dxrelprincipal_odon"]=$dathistoria->dx["dxrelprincipal"] ;
                    $evol_odon["dx_dxrelprincipalcod_odon"]=$dathistoria->dx["dxrelprincipalcod"] ;
                    
                       $evol_odon['medreg_t68']=$this->Modulo->usr->personal->registromedico_t10;
                       $evol_odon['medidentif_t68']=$this->Modulo->usr->identificacion_t0;
                       $evol_odon['mednomcomp_t68']=$this->Modulo->usr->nombre_t0;
                       $evol_odon['medcargo_t68']=$this->Modulo->usr->personal->cargo_t10;
                       $evol_odon['medespec_t68']=$this->Modulo->usr->personal->especialidades[0]->especialidades_t9;
                       $evol_odon['tipoevol_t68']=$dathistoria->tipoevol;
                    //DEBUG(date("g"));
                    $evol_odon["usrmod_t68"]=$this->Modulo->usr->idusr;
                    $evol_odon["fmod_t68"]=$this->Modulo->ahora();
                    $evol_odon["dx_dxrelprincipalcod_odon"]=$dathistoria->dx["tipoevol"];
                     $evol_odon["dx_causaext_odon"]=$dathistoria->dx["causaext"]; 
                     $evol_odon["dx_viaing_odon"]=$dathistoria->dx["viaing"]; 
                     $evol_odon["dx_finalconsu_odon"]=$dathistoria->dx["finalconsu"]; 
                     $evol_odon["dx_finalproc_odon"]=$dathistoria->dx["finalproc"];
                    $evol_odon["fecha_evol_odon"]=date("Y").date("m").date("d").date("g").":".date("i").":".date("s");
                    $evol_odon['jsont68']=json_encode($dathistoria);
                     //debug($evol_odon); 
                     $this->db->insert("ps_hist_evolucion_odon_t68",$evol_odon);
                      return 1;
        
          
   
      }

  }
   function incapacidad($idhistoria,$dathistoria=""){
    
  
    $historia = $this->obtener($idhistoria);
    //$paciente = $this->Paciente->obtener($historia->identificacion_t3);
    //$consulta = $this->consulta_obtener($idhistoria);
  
    
    if(empty($dathistoria)){
      $dathistoria=(object)$this->input->post();
    }
       $result= $this->modelo_universal->select("ps_historia_incapacidad","*",array('idhistoria_inca'=>$historia->idps_historia_t4));

        $inca["id_paciente_inca"] = $historia->identificacion_t3;
        $inca["idhistoria_inca"] =$historia->idps_historia_t4;
        $inca["fmod_inca"] = $this->Modulo->usr->idusr;
        $inca["usrmod_inca"]=$this->Modulo->ahora();
        $inca["motivo_inca"]=  $dathistoria->motivo_inca;

        $inca["tipo_inca"] = $dathistoria->tipo_inca;
        $inca["diag_enfer_inca"]=  $dathistoria->diag_enfer_inca;
        $inca["dias_inca"] = $dathistoria->dias_inca;
        $inca["fecha_inic_inca"] = $dathistoria->fecha_inic_inca;
        $inca["fecha_ter_inca"]=  $dathistoria->fecha_ter_inca;
        $inca["porroga_inca"]=  $dathistoria->porroga_inca;
        $inca["fecha_ult_inca"] = $dathistoria->fecha_ult_inca;
        $inca["numer_dias_inca"]= $dathistoria ->numer_dias_inca;
        $inca["obser_inca" ]= $dathistoria->obser_inca;
//debug($inca);
          if(!empty($result)){   
            $this->db->where("id_inca",$historia->idps_historia_t4); 
            $this->db->update('ps_historia_incapacidad', $inca);
            
        }else{
              
            $this->db->insert('ps_historia_incapacidad', $inca); 
            return 1;
        } 

  }
  function evolucdet_obt($idevolucion){
    $this->db->from("ps_hist_evoluciondet_t111");
    $this->db->where("idevolucion_t111",$idevolucion);
    $query = $this->db->get();
    $arrdetevol =  $query->result();
    if(is_array($arrdetevol)){
      foreach($arrdetevol as $reg){
        switch($reg->tipo_t111){
          case "evolterapactiv":
            $tipodesc = "ACTIVIDADES TERAPIAS";
            break;
        }
        switch($reg->categoria_t111){
          case "articulacion":
            $catdesc = "ARTICULACIÓN";
            break;
          case "movimientos":
            $catdesc = "MOVIMIENTOS";
            break;
          case "mediosfisicos":
            $catdesc = "MEDIOS FÍSICOS";
            break;
          case "fortalecimiento":
            $catdesc = "FORTALECIMIENTO";
            break;
          case "tipocorriente":
            $catdesc = "TIPO CORRIENTE";
            break;
          case "resistencia":
            $catdesc = "RESISTENCIA";
            break;
          case "actividadescv":
            $catdesc = "ACTIVIDADES CARDIO VACULARES";
            break;
          case "bandaselasticas":
            $catdesc = "BANDAS ELÁSTICAS";
            break;
          case "tiempo":
            $catdesc = "TIEMPO";
            break;
          case "peso":
            $catdesc = "PESO";
            break;
          case "mancuernas":
            $catdesc = "MANCUERNAS";
            break;
          case "series":
            $catdesc = "SERIES";
            break;
          case "repeticiones":
            $catdesc = "REPETICIONES";
            break;
        }
        $arr_detevol[$reg->tipo_t111]["desc"] = $tipodesc;
        $arr_detevol[$reg->tipo_t111]["det"][$reg->categoria_t111]["desc"] = $catdesc;
        $arr_detevol[$reg->tipo_t111]["det"][$reg->categoria_t111]["det"][] = $reg->valor_t111;
      }
    }
    return $arr_detevol;
  }
  
  function evolucdet_reg($idevolucion,$dathistoria){
    if(is_array($dathistoria->detalle)){
      $arr_reg = [];
      foreach($dathistoria->detalle as $tipo=>$arr_cat){
        if(is_array($arr_cat)){
          foreach($arr_cat as $categ=>$valor){
            if(is_array($valor)){
              foreach($valor as $dato){
                $arr_reg[]=[
                  "idevolucion_t111"=>$idevolucion,
                  "tipo_t111"=>$tipo,
                  "categoria_t111"=>$categ,
                  "valor_t111"=>$dato,
                  "usrmod_t111"=>$this->Modulo->usr->idusr,
                  "fmod_t111"=>$this->Modulo->ahora()
                ];
              }
            }else{
              $arr_reg[]=[
                "idevolucion_t111"=>$idevolucion,
                "tipo_t111"=>$tipo,
                "categoria_t111"=>$categ,
                "valor_t111"=>$valor,
                "usrmod_t111"=>$this->Modulo->usr->idusr,
                "fmod_t111"=>$this->Modulo->ahora()
              ];
            }
          }
        }
        $this->db->insert_batch("ps_hist_evoluciondet_t111",$arr_reg);
      }
    }
  }
  
  function dosificar($ordenmed){
    $cantidad=$ordenmed['cantidad_t67'];
    for ($i=1; $i<=$cantidad; $i++) {
      unset($arr_suministrar);
      if($i==1){
        $aplicar=$this->Modulo->adicitiempo($ordenmed['fmod_t67'],$ordenmed['summed_t67']);
      }else{
        $aplicar=$this->Modulo->adicitiempo($aplicar,$ordenmed['frecuencia_t67']*60);
      }
      $arr_suministrar['idconsulta_t80']=$ordenmed["id_consulta_t67"];
      $arr_suministrar['idpaciente_t80']=$ordenmed["idpaciente_t67"];
      $arr_suministrar['idhistoria_t80']=$ordenmed["idhistoria_t67"];
      $arr_suministrar['orden_t80']=$ordenmed["orden_t67"];
      $arr_suministrar['tipo_t80']=$ordenmed["tipo_t67"];
      $arr_suministrar['codigo_t80']=$ordenmed["codigo_t67"];
      $arr_suministrar['descripcion_t80']=$ordenmed["descripcion_t67"];
      $arr_suministrar['dosis_t80']=$ordenmed["dosis_t67"];
      $arr_suministrar['via_t80']=$ordenmed["via_t67"];
      $arr_suministrar['observacion_t80']=$ordenmed["observacion_t67"];
      $arr_suministrar['aplicar_t80']=$aplicar;
      $arr_suministrar["usrmod_t80"]=$this->Modulo->usr->idusr;
      $arr_suministrar["fmod_t80"]=$this->Modulo->ahora();
      $this->db->insert("ps_hist_ordenes_sum_t80",$arr_suministrar);
    }
  }
  
  function orden_siguiente(){
    $this->db->select_max('orden_t67');
    $this->db->from("ps_hist_ordenes_t67");
    $query = $this->db->get();
    $arr_datos = $query->result();
    if (count($arr_datos) > 0){
      $res =  $query->row();
    }
    return $res->orden_t67+1;
  }
  
  function interconsulta_pendagend(){
    $arr_interc=false;
    $this->db->from("ps_hist_ordenes_t67");
    $this->db->join("ps_historia_t4","idhistoria_t67 = idps_historia_t4","inner");
    $this->db->join("ps_paciente_t3","paciente_t4 = identificacion_t3","inner");
    $this->db->where("tipo_t67 = 'ICONS' and ref1_t67 IS NULL");
    $query = $this->db->get();
    $arr_datos = $query->result();
    if (count($arr_datos) > 0){
      foreach($arr_datos as $reginterc){
        $arr_interc[$reginterc->especialidad_t67][$reginterc->descripcion_t67][]=$reginterc;
      }
    }
    return $arr_interc;
  }
  
  function cierre($historia,$consulta,$infosalida){
    //var_dump($infosalida); exit;
    switch($infosalida->destino){
      case "DE ALTA":
      case "AYUDAS DIAGNÓSTICAS":
      case "CONSULTA EXTERNA":
      case "LABORATORIO":
        $cierre = true;
        $arr_estado["paciente"]=$infosalida->destino;
        $arr_estado["historia"]="CERRADA";
        break;
      case "FALLECIDO":
        $cierre = true;
        $arr_estado["paciente"]="FALLECIDO";
        $arr_estado["historia"]="CERRADA";
        break;
      case "REMITIDO":
        $cierre = true;
        $arr_estado["paciente"]="REMITIDO";
        $arr_estado["historia"]="CERRADA";
        break;
      default:
        $cierre = false;
        //$arr_estado["consulta"]="CERRADA";
        break;
    }
    if($cierre===true){
      $arr_datpac["estado_t3"]=$arr_estado["paciente"];
      $arr_datpac["usrmod_t3"]=$this->Modulo->usr->idusr;
      $arr_datpac["fmod_t3"]=$this->Modulo->ahora();
      $this->db->where("identificacion_t3",$historia->identificacion_t3);
      $this->db->update("ps_paciente_t3",$arr_datpac);
      $arr_dathist["estado_t4"]=$arr_estado["historia"];
      $arr_dathist["fsalida_t4"]=$this->Modulo->ahora();
      $arr_dathist["usrmod_t4"]=$this->Modulo->usr->idusr;
      $arr_dathist["fmod_t4"]=$this->Modulo->ahora();
      $this->db->where("idps_historia_t4",$historia->idps_historia_t4);
      $this->db->update("ps_historia_t4",$arr_dathist);
      $arr_datcons["condicionsalida_t64"]=$infosalida->condicion;
      $arr_datcons["destinopac_t64"]=$infosalida->destino;
      $arr_datcons["usrmod_t64"]=$this->Modulo->usr->idusr;
      $arr_datcons["fmod_t64"]=$this->Modulo->ahora();
      $this->db->where("idhist_consulta_t64",$consulta->idhist_consulta_t64);
      $this->db->update("ps_hist_consulta_t64",$arr_datcons);
    }else{
      $arr_dathist["ubicacion_t4"]=$infosalida->destino;
      $arr_dathist["usrmod_t4"]=$this->Modulo->usr->idusr;
      $arr_dathist["fmod_t4"]=$this->Modulo->ahora();
      $this->db->where("idps_historia_t4",$historia->idps_historia_t4);
      $this->db->update("ps_historia_t4",$arr_dathist);
      $arr_datcons["condicionsalida_t64"]=$infosalida->condicion;
      $arr_datcons["destinopac_t64"]=$infosalida->destino;
      $arr_datcons["usrmod_t64"]=$this->Modulo->usr->idusr;
      $arr_datcons["fmod_t64"]=$this->Modulo->ahora();
      $this->db->where("idhist_consulta_t64",$consulta->idhist_consulta_t64);
      $this->db->update("ps_hist_consulta_t64",$arr_datcons);
    }
  }
  
  function evoldiariadetalle($idevol){
    $this->db->from("ps_hist_evolhist_t84");
    $this->db->where("idps_hist_evolhist_t84",$idevol);
    $query = $this->db->get();
    $arr_datos = $query->result();
    if (count($arr_datos) > 0){
      $arr_datevol = $query->row();
    }
    $this->db->from("ps_hist_evolmedconc_t83");
    $this->db->where("id_evol_t83",$idevol);
    $query = $this->db->get();
    $arr_datos = $query->result();
    if (count($arr_datos) > 0){
      foreach($arr_datos as $regconcep){
        $arr_datevol->concep[$regconcep->concepto_t83]=$regconcep;
      }
    }
    $this->db->from("ps_hist_evolmedobj_t81");
    $this->db->join("ps_hist_evolmedplan_t82","idps_hist_evolmedobj_t81=id_objetivo_t82","left");
    $this->db->where("id_evol_t81",$idevol);
    $query = $this->db->get();
    $arr_datos = $query->result();
    if (count($arr_datos) > 0){
      foreach($arr_datos as $reg){
        $arr_datevol->obj[$reg->idps_hist_evolmedobj_t81][]=$reg;
      }
    }
    return $arr_datevol;
  }
  
  function consulta_historial($idpaciente){
    $this->db->from("ps_historia_t4");
    $this->db->join("ps_hist_consulta_t64","idps_historia_t4 = idhistoria_t64","left");
    $this->db->where("idpaciente_t64",$idpaciente);
    $this->db->order_by("fmod_t64",'desc');
    $query = $this->db->get();
    return $query->result();
  }
  
  function consulta_obtener($idhistoria){
    $resul = false;
    $this->db->from("ps_historia_t4");
    $this->db->join("ps_hist_consulta_t64","idps_historia_t4 = idhistoria_t64","left");
    $this->db->join("ps_hist_antecedpatbiol_t66","idps_historia_t4 = idhistoria_t66","left");
    $this->db->where("idps_historia_t4",$idhistoria);
    $query = $this->db->get();
    $arr_datos = $query->result();
    if (count($arr_datos) > 0){
      $arr_consulta = $query->row();
    }
    $arr_consulta->historicocons=$this->consulta_historial($arr_consulta->paciente_t4);
    
    $this->db->from("ps_historia_vacunas_t106");
    $this->db->where("idpaciente_t106",$arr_consulta->paciente_t4);
    $this->db->order_by("fmod_t106","ASC");
    $query = $this->db->get();
    $arr_datos = $query->result();
    if (count($arr_datos) > 0){
      foreach($arr_datos as $regvac){
        $arr_consulta->vacunas[$regvac->vacunacod_t106] = $regvac;
      }
    }
    
    $this->db->from("ps_hist_antecedentes_t65");
    $this->db->where("idhistoria_t65",$idhistoria);
    $this->db->where("tipo_t65","FAMILIARES");
    $query = $this->db->get();
    $arr_datos = $query->result();
    if (count($arr_datos) > 0){
      $arr_consulta->datantfam = $query->row();
    }
    
    $this->db->from("ps_hist_antecedentes_t65");
    $this->db->where("idhistoria_t65",$idhistoria);
    $this->db->where("tipo_t65","PERSONALES");
    $query = $this->db->get();
    $arr_datos = $query->result();
    if (count($arr_datos) > 0){
      $arr_consulta->datantpers = $query->row();
    }
    
    $this->db->from("ps_hist_ordenes_t67");
    $this->db->where("idhistoria_t67",$idhistoria);
    $this->db->order_by("orden_t67","desc");
    $this->db->order_by("descripcion_t67","asc");
    $query = $this->db->get();
    $arr_datos = $query->result();
    if (count($arr_datos) > 0){
      foreach($arr_datos as $reg){
        switch($reg->tipo_t67){
          case "BASA":
          case "CONS":
          case "TERA":
          case "ICONS":
            $arr_consulta->datordenes["OTROSPROC"][$reg->orden_t67][] = $reg;
            break;
          default:
            $arr_consulta->datordenes[$reg->tipo_t67][$reg->orden_t67][] = $reg;
            break;
        }
      }
    }
        
    $this->db->from("ps_hist_ordenes_sum_t80");
    $this->db->where("idhistoria_t80",$idhistoria);
    $this->db->where("tipo_t80",'MED');
    $this->db->order_by("aplicar_t80","asc");
    $query = $this->db->get();
    $arr_datos = $query->result();
    if (count($arr_datos) > 0){
      $arr_consulta->datordenessum = $arr_datos;
    }
    
    $this->db->from("ps_hist_evolucion_t68");
    $this->db->where("idhistoria_t68",$idhistoria);
    $this->db->where("tipoevol_t68",'MEDICA');
    $this->db->order_by("fmod_t68","desc");
    $query = $this->db->get();
    $arr_datos = $query->result();
    if (count($arr_datos) > 0){
      $arr_consulta->datevoluciones['MEDICA'] = $arr_datos;
    }
    
    $this->db->from("ps_hist_evolhist_t84");
    $this->db->where("id_historia_t84",$idhistoria);
    $this->db->order_by("fecha_t84","desc");
    $query = $this->db->get();
    $arr_datos = $query->result();
    if (count($arr_datos) > 0){
      //var_dump($arr_datos); exit;
      foreach($arr_datos as $reg ){
        $reg->evoldet = $this->evoldiariadetalle($reg->idps_hist_evolhist_t84);
        $fecha = $this->Modulo->formatofecha($reg->fecha_t84);
        $arr_consulta->datevoldiaria[$fecha][]=$reg;
        if(empty($arr_consulta->datevoldiariaact[$reg->tipo_t84])){
          $arr_consulta->datevoldiariaact[$reg->tipo_t84]=$this->evoldiariadetalle($reg->idps_hist_evolhist_t84);
        }
      }
    }
    $this->db->from("ps_hist_evolucion_t68");
    $this->db->where("idhistoria_t68",$idhistoria);
    $this->db->where("tipoevol_t68",'ENFERMERIA');
    $this->db->order_by("fmod_t68","desc");
    $query = $this->db->get();
    $arr_datos = $query->result();
    if (count($arr_datos) > 0){
      $arr_consulta->datevoluciones['ENFERMERIA'] = $arr_datos;
    }
    
    $this->db->from("ps_hist_evolucion_t68");
    $this->db->where("idhistoria_t68",$idhistoria);
    $this->db->where("tipoevol_t68",'TERAPIAS');
    $this->db->order_by("fmod_t68","desc");
    $query = $this->db->get();
    $arr_datos = $query->result();
    if (count($arr_datos) > 0){
      foreach($arr_datos as $regevolteap){
        $regevolteap->detalle = $this->evolucdet_obt($regevolteap->idhist_evolucion_t68);
        $arr_histevol[]=$regevolteap;
      }
      $arr_consulta->datevoluciones['TERAPIAS'] = $arr_histevol;
    }
    return $arr_consulta;
  }
  
  function consultaso_obtener($idhistoria){
    $resul = false;
    $this->db->from("ps_historia_t4");
    $this->db->join("ps_hist_consulta_so_t99","idps_historia_t4 = idhistoria_t99","inner");
    $this->db->where("idps_historia_t4",$idhistoria);
    $query = $this->db->get();
    $arr_datos = $query->result();
    if (count($arr_datos) > 0){
      $arr_consulta = $query->row();
    }
    
    $this->db->from("ps_hist_consulta_soaat_t101");
    $this->db->where("idps_hist_consulta_so_t101",$arr_consulta->idps_hist_consulta_so_t99);
    $query = $this->db->get();
    $arr_consulta->aat = $query->result();
    
    $this->db->from("ps_hist_consulta_soemp_t100");
    $this->db->where("idconsulta_so_t100",$arr_consulta->idps_hist_consulta_so_t99);
    $query = $this->db->get();
    $arr_consulta->emp = $query->result();
    
    $this->db->from("ps_hist_consulta_soaep_t109");
    $this->db->where("idps_hist_consulta_so_t109",$arr_consulta->idps_hist_consulta_so_t99);
    $query = $this->db->get();
    $arr_consulta->aep = $query->result();
    
    return $arr_consulta;
  }
  
  function orden_obtenernewpk($orden){
    $this->db->from("ps_hist_ordenes_t67");
        $this->db->join('ps_plan_tarifario_t63', 'ps_plan_tarifario_t63.codplantarifa_t63 = ps_hist_ordenes_t67.codigo_t67');
    $this->db->where("orden_t67",$orden);
        $this->db->group_by("idhist_ordenes_t67");
    $this->db->order_by("descripcion_t67","asc");
    $query = $this->db->get();
    $arr_datos = $query->result();
    if (count($arr_datos) > 0){
      return $arr_datos;
    }
  }
    function orden_obtener($orden){
    $this->db->from("ps_hist_ordenes_t67");

    $this->db->where("orden_t67",$orden);

    $this->db->order_by("descripcion_t67","asc");
    $query = $this->db->get();
    $arr_datos = $query->result();
    if (count($arr_datos) > 0){
      return $arr_datos;
    }
  }
      function orden_obtenerpk2($orden){
    $this->db->from("ps_hist_ordenes_t67");

    $this->db->where("idhistoria_t67",$orden);
         $this->db->where("tipo_t67 !=",'MED');
     $this->db->where("tipo_t67 !=",'MD');
    $this->db->order_by("descripcion_t67","asc");
    $query = $this->db->get();
    $arr_datos = $query->result();
    // debug($this->db->last_query());
    if (count($arr_datos) > 0){
      return $arr_datos;
    }
  }
  function ordenproc_obtener($idproc){
    $this->db->from("ps_hist_ordenes_t67");
    $this->db->where("idhist_ordenes_t67",$idproc);
    $this->db->order_by("descripcion_t67","asc");
    $query = $this->db->get();
    return $query->row();
  }
  function ordenproc_obtenerhistory($idproc){

    $this->db->from("ps_hist_ordenes_t67");
    $this->db->join('ps_plan_tarifario_t63', 'ps_plan_tarifario_t63.codplantarifa_t63 = ps_hist_ordenes_t67.codigo_t67');
    $this->db->where("idhistoria_t67",$idproc);
    $this->db->group_by("idhist_ordenes_t67");
    $this->db->order_by("idhistoria_t67","asc");
    $query = $this->db->get();
     // debug($this->db->last_query());
    return $query->result();;

  }
  function guardar_suministro(){
    $datos_paciente = (object)$this->input->post();
    $idorden = $this->orden_siguiente();
    $array_paciente = array(
                'idpaciente_t67' => $datos_paciente->paciente,
                'idhistoria_t67' => $datos_paciente->historia,
                'orden_t67'  => $idorden,
                'tipo_t67' => $datos_paciente->suministro,
                'codigo_t67' => $datos_paciente->co_suministro,
                'descripcion_t67' => $datos_paciente->valcod_desc,
                'cantidad_t67' => $datos_paciente->cantidad,
                'usrmod_t67' => $this->Modulo->usr->idusr,
                'fmod_t67' => $this->Modulo->ahora(),
                'Estado_orden' => 'PENDIENTE',
                'valunit_t67' => $datos_paciente->costo,
                'valor_t67' => $datos_paciente->costo
              );
    return $this->db->insert('ps_hist_ordenes_t67', $array_paciente);
  }


}

?>