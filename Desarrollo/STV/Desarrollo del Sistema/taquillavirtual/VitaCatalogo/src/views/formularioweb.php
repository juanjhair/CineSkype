<!DOCTYPE html>
<html>
<head>
	<title>Formulario web</title>
</head>
    <link href="../../repositorio/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet"><!-- MetisMenu CSS -->    
    <link href="../../repositorio/vendor/metisMenu/metisMenu.min.css" rel="stylesheet"><!-- Custom CSS -->    
    <link href="../../repositorio/dist/css/sb-admin-2.css" rel="stylesheet"><!-- Morris Charts CSS -->    
    <link href="../../repositorio/vendor/morrisjs/morris.css" rel="stylesheet"><!-- Custom Fonts -->    
    <link href="../../repositorio/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"><!-- JQUERY-->    
    <script src="../../repositorio/vendor/jquery/jquery.min.js"></script><!-- Bootstrap Core JavaScript -->    
    <script src="../../repositorio/vendor/bootstrap/js/bootstrap.min.js"></script><!-- Metis Menu Plugin JavaScript -->    
    <script src="../../repositorio/vendor/metisMenu/metisMenu.min.js"></script><!-- Morris Charts JavaScript -->    
    <script src="../../repositorio/vendor/raphael/raphael.min.js"></script>
    <script src="../../repositorio/vendor/morrisjs/morris.min.js"></script>
    <script src="../../repositorio/data/morris-data.js"></script><!-- Custom Theme JavaScript -->    
    <script src="../../repositorio/dist/js/sb-admin-2.js"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
<body ng-app="myApp">
	<div class="row" style="width: 70%;margin-left: 15%;text-align: center;">
      <div class="col-lg-12">
           <h1 class="page-header"><b>Datos principales del reporte</b></h1>
      </div>              
    </div>
	 <div id="row">
	 	<div style="width: 70%; margin-left: 15%;background: #fff"> 	
          
            <div class="row">
                <div class="col-lg-11">
                    <h4 class="page-header" style="margin-left: 3%;"> Las siguientes preguntas son opcionales. Recuerda que la mayor cantidad de información, ayudará a realizar un mejor análisis de su denuncia.</h4>
                </div>              
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                          <div class="panel-body">
                            <div class="row">
                            	<div class="col-lg-6">
                            	   <div class="form-group">
                                       <label>Selecciona el tipo de reporte que deseas registrar </label>
                                        <select class="form-control">
                                           <option>Seleccionar</option>
                                           <option>2</option>
                                           <option>3</option>
                                           <option>4</option>
                                           <option>5</option>
                                        </select>
                                    </div>
                            	</div>	
                            </div>
                            <div class="row">
                            	<div class="col-lg-11">
                            	   <div class="form-group" style="display: inline-flex;" >
                            	   	 <div class="h1" style="margin-top: -0.5%" ><b>1</b></div>
                                     <div >Identifica a las personas involucradas en el reporte a registrar. Utiliza el siguiente botón para agregar los datos de un nuevo involucrado. 
                                      </div>
                                    </div>
                            	</div>	
                            </div>
                              <div class="row">
                            	<div class="col-lg-6" >
                            	      <div class="form-group">
                                      <p><b>Nombre del involucrado</b></p>
                                      <input class="form-control" >                                    
                                    </div>
                            	</div>
                            	<div class="col-lg-6">
                            	   <div class="form-group">
                                      <p><b>Apellidos del involucrado</b></p>
                                      <input class="form-control">                                    
                                    </div>
                            	</div>		
                            </div>
                             <div class="row">
                            	<div class="col-lg-6">
                            	     <div class="form-group">
                                       <label>Tipo de relacion con acceso</label>
                                        <select class="form-control">
                                           <option>Seleccionar</option>
                                           <option>2</option>
                                           <option>3</option>
                                           <option>4</option>
                                           <option>5</option>
                                        </select>
                                    </div>
                            	</div>
                            	<div class="col-lg-6">
                            	   <div class="form-group">
                                      <p><b>Especificar cargo</b></p>
                                      <input class="form-control">                                    
                                    </div>
                            	</div>		
                            </div>
                           <div class="row">
                            	<div class="col-lg-11">
                            	   <div class="form-group" style="display: inline-flex;" >
                            	   	 <div class="h1" style="margin-top: -0.5%" ><b>2</b></div>
                                     <div >Indica en qué lugar sucedió el incidente
                                      </div>
                                    </div>
                            	</div>	
                            </div>
                            <div class="row">
                            	<div class="col-lg-6">
                            	   <div class="form-group">
                                      <p><b>Pais</b></p>
                                      <input class="form-control">                                    
                                    </div>
                            	</div>
                            	<div class="col-lg-6">
                            	   <div class="form-group">
                                      <p><b>Departamento</b></p>
                                      <input class="form-control">                                    
                                   </div>
                                </div>
                             </div>   

                            <div class="row">
                            	<div class="col-lg-6">
                            	   <div class="form-group">
                                      <p><b>Provincia</b></p>
                                      <input class="form-control">                                    
                                    </div>
                            	</div>
                            	<div class="col-lg-6">
                            	   <div class="form-group">
                                      <p><b>Distrito</b></p>
                                      <input class="form-control">                                    
                                   </div>
                                </div>	
                            </div>
                            <div class="row">
                            	<div class="col-lg-11">
                            	   <div class="form-group" style="display: inline-flex;" >
                            	   	 <div class="h1" style="margin-top: -0.5%" ><b>3</b></div>
                                     <div >Indica la fecha o período en el cual sucedió el incidente
                                      </div>
                                    </div>
                            	</div>	
                            </div>
                            <div class="row">
                            	<div class="col-lg-6">
                            	    <div class="form-group">
                                      <input  placeholder="fecha y luagr del incidente" class="form-control">
                                    </div>
                            	</div>	
                            </div>
                            <div class="row">
                            	<div class="col-lg-11">
                            	   <div class="form-group" style="display: inline-flex;" >
                            	   	 <div class="h1" style="margin-top: -0.5%" ><b>4</b></div>
                                     <div >Describe todos los detalles que ayuden a analizar y evaluar su reporte
                                      </div>
                                    </div>
                            	</div>	
                            </div>
                            <div class="row">
                            	<div class="col-lg-6">
                            	    <div class="form-group">
                                      <textarea class="form-control"></textarea>  
                                    </div>
                            	</div>	
                            </div>
                             <div class="row">
                            	<div class="col-lg-11">
                            	   <div class="form-group" style="display: inline-flex;" >
                            	   	 <div class="h1" style="margin-top: -0.5%" ><b>5</b></div>
                                     <div >¿Posee usted evidencia física o digital que pueda ayudar en la investigación de esta denuncia?.
                                      </div>
                                    </div>
                            	</div>	
                            </div>
                            <div class="row">
                            	<div class="col-lg-6">
                            	      <div class="form-group">
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked>No me es posible proporcionar evidencias de ningún tipo
                                                </label>
                                            </div>
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">No tengo evidencias, pero podría obtenerlas y suministrarlas posteriormente
                                                </label>
                                            </div>
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" name="optionsRadios" id="optionsRadios3" value="option3">Tengo tanto evidencia física como digital que me gustaría entregar
                                                </label>
                                            </div>
                                             <div class="radio">
                                                <label>
                                                    <input type="radio" name="optionsRadios" id="optionsRadios3" value="option4">Tengo evidencia física que deseo entregar
                                                </label>
                                            </div>
                                             <div class="radio">
                                                <label>
                                                    <input type="radio" name="optionsRadios" id="optionsRadios3" value="option5">Tengo evidencia digital que deseo entregar
                                                </label>
                                            </div>
                                       </div>
                            	</div>	
                            </div>
                             <div class="row">
                            	<div class="col-lg-11">
                            	   <div class="form-group" style="display: inline-flex;" >
                            	   	 <div class="h1" style="margin-top: -0.5%" ><b>6</b></div>
                                     <div >AccesoCorp en dónde podría obtener evidencia de los hechos reportados?(lugar,   documentos, personas)
                                      </div>
                                    </div>
                            	</div>	
                            </div> 
                            <div class="row">
                            	<div class="col-lg-6">
                            	    <div class="form-group">
                                      <textarea class="form-control"></textarea>  
                                    </div>
                            	</div>	
                            </div> 
                              <div class="row">
                            	<div class="col-lg-11">
                            	   <div class="form-group" style="display: inline-flex;" >
                            	   	 <div class="h1" style="margin-top: -0.5%" ><b>7</b></div>
                                     <div >¿Cómo tomaste conocimiento de estos hechos?
                                      </div>
                                    </div>
                            	</div>	
                              </div> 
                             <div class="row">
                            	<div class="col-lg-6">
                            	      <div class="form-group">
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked>Me sucedió a mi
                                                </label>
                                            </div>
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">Fui testigo
                                                </label>
                                            </div>
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" name="optionsRadios" id="optionsRadios3" value="option3">Un compañero de trabajo me comentó la situación
                                                </label>
                                            </div>
                                             <div class="radio">
                                                <label>
                                                    <input type="radio" name="optionsRadios" id="optionsRadios3" value="option4">Lo escuché de casualidad
                                                </label>
                                            </div>
                                             <div class="radio">
                                                <label>
                                                    <input type="radio" name="optionsRadios" id="optionsRadios3" value="option5">Otros
                                                </label>
                                            </div>
                                       </div>
                            	    </div>	
                            </div>
                            <div class="row">
                            	<div class="col-lg-11">
                            	   <div class="form-group" style="display: inline-flex;" >
                            	   	 <div class="h1" style="margin-top: -0.5%" ><b>8</b></div>
                                     <div >¿Alguna dirección, gerencia, subgerencia o jefatura conoce de estos hechos o ha recibido previamente este reporte?
                                      </div>
                                    </div>
                            	</div>	
                              </div> 
                              <div class="row">
                            	  <div class="col-lg-6">
                            	      <div class="form-group">
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked>Si
                                                </label>
                                            </div>
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">No
                                                </label>
                                            </div>
                               
                                       </div>
                            	  </div>	
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                      <button type="button" class="btn btn-primary btn-lg">Enviar reporte</button>
                                    </div>
                                </div>  
                            </div>
                    </div>
                </div>
            </div>  
	 	</div>	      

     </div>
</body>
</html>