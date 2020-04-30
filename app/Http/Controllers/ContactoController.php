<?php

namespace skynostrum\Http\Controllers;

use Illuminate\Http\Request;

class ContactoController extends Controller
{


    public function index(){

        $config = array();
        $config['center'] = 'auto';
        $config['onboundschanged'] = 'if (!centreGot) {
                var mapCentre = map.getCenter();
                marker_0.setOptions({
                    position: new google.maps.LatLng(mapCentre.lat(), mapCentre.lng())
                });
            }
            centreGot = true;';
    
        app('map')->initialize($config);
    
        // set up the marker ready for positioning
        // once we know the users location
        $marker = array();
        app('map')->add_marker($marker);
    
        $map = app('map')->create_map();
        
        
        
        return view('contacto.index', compact('map'));

    }
      
}
