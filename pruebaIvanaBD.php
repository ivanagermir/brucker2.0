<div class="fullvideo-searchbox">
        <div class="fullvideo-search">
            <div class="fullvideo-operation">
                <select id="operations" class="montserrat">
                
                        
                            
                                <option data-name="Venta" value="1">Venta</option>
                            
                            
                            
                        
                            
                            
                                <option data-name="Alquiler" value="2">Alquiler</option>
                            
                            
                        
                
                </select>
            </div>
            <div class="fullvideo-property">
                <select id="property_types" class="montserrat">
                    <option value="-1">Tipo de Propiedad</option>
            
                    
                        <option data-name="Terreno" value="1">Terreno</option>
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    

           
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                        <option data-name="Departamento" value="2">Departamento</option>
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    

           
                    
                    
                        <option data-name="Casa" value="3">Casa</option>
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    

           
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                        <option data-name="Locales" value="7">Locales</option>
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    

           

                </select>
            </div>
            <div class="fullvideo-input">
              <input type="search" id="location_quicksearch" placeholder="Buscar por ubicación, dirección o calle" class="montserrat ui-autocomplete-input autocomplete" />
              <input type="hidden" id="location_id" value="0">
            </div>
            <div class="fullvideo-searchbtn montserrat" onclick="do_search()">Buscar</div>
        </div>
    </div>
        <div id="fullscreenvideo" class="player"></div>
        <div id="fullscreenvideo-thumb"><img id="fullscreenvideo-thumb-img" src="" /></div>
    <script>
        $(document).ready(function() {
          
            $("#fullscreenvideo").YTPlayer({
                videoId: 'oB4DpK6MK2o',
            });
          
            $(".header-lateral").css("padding-top",0);
        });

        $(window).load(function(){ $("#fullscreenvideo-box").height( $(window).height() );

        })
    </script>
</div>

<script>
