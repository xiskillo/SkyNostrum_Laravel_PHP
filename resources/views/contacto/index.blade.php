@extends('layouts.app')



@section('content')
<script type="text/javascript">var centreGot = false;</script>{!!$map['js']!!}
<div class="row justify-content-center">
       
        <div class="col-md-8">
        
            
                            <div class="card-header text-center" style="text-shadow:1px -3px 5px rgba(200,145,255,0.7);font-weight:normal;
                color:#2F6982;letter-spacing:3pt;word-spacing:5pt;font-size:30px;text-align:justify;
                font-family:lucida sans unicode, lucida grande, sans-serif;line-height:1;">{{ __('SkyNostrum - Cerca de ti') }}</div>
                
               
                            <div class="card-body">
                                
                                    <div class="col-12 mb-2">

                                   <b> Contacto: </b>
                                   <p style="text-shadow:1px -3px 5px rgba(200,145,255,0.7);font-weight:normal;color:#5A3AA6;letter-spacing:3pt;word-spacing:5pt;
                                   font-size:30px;text-align:justify;font-family:courier new, courier, monospace;line-height:1;">Francisco José Acaso Valverde</p>
                                    <br>
                                    <p style="text-shadow:1px 1px 1px rgba(79,185,255,1);font-weight:normal;font-style:italic;color:#7E90BF;
                                    letter-spacing:1pt;word-spacing:2pt;font-size:17px;text-align:justify;font-family:lucida sans unicode, lucida grande, sans-serif;
                                    line-height:1;">Ante cualquier duda o problema que le surja, puede contactarnos por teléfono o correo electrónico, así como dirigirse a nuestras instalaciones, como se le indica a continuación.</p>
                                   <br>
                                    <b> Teléfono: </b>
                                    <br>
                                    661509798
                                    <br>
                                    <b> Correo Electrónico: </b>
                                    <br>                                   
                                    
                                    <a href="mailto:xiskillo@gmail.com?subject=Contacto">xiskillo@gmail.com</a>
                                    

                                    <br>  <br>  
                                    </div>

                                    <div class="card">
                                            <div class="card-header">

                                            LOCALIZANOS AQUÍ:
                                            
                                            </div>
                                            <div class="card-body">
                                                
                                            
                                                
                                                <div style="width: 100%"><iframe width="100%" 
                                                 height="600" src="https://maps.google.com/maps?width=100%&height=600&hl=es&q=Franciscco%20Garc%C3%ADa%20De%20Sola%2C%2047%20Cadiz+(Mi%20nombre%20de%20egocios)&ie=UTF8&t=&z=14&iwloc=B&output=embed" 
                                                frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe></div><br />

                                                 </div>
                                        
                                    </div>
                                    


                                    <div class="card">
                                            <div class="card-header">

                                            TU UBICACIÓN ES LA SIGUIENTE:
                                            
                                            </div>
                                            <div class="card-body">
                                                
                                            
                                            

                                            {!!$map['html']!!}

                                            </div>
                                        
                                    </div>

                                    
                                    
                            


                                





                            </div>
            </div>
        </div>
    </div>


@endsection

