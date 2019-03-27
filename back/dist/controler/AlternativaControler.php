<?php 
 include_once realpath('../mapper/AlternativaMapper.php'); 
 
        class alternativaController{ 
 public function insert($alternativa){
$alternativaMapper = new AlternativaMapper();
return $alternativaMapper->insert($alternativa);
}
public function update($alternativa){
$alternativaMapper = new AlternativaMapper();
return $alternativaMapper->update($alternativa);
}

 }?>