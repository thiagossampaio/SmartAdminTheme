<?php require_once("inc/init.php"); ?>
<div class="row">
	<div class="col-xs-12 col-sm-7 col-md-7 col-lg-4">
		<h1 class="page-title txt-color-blueDark">
			<i class="fa fa-map-marker fa-fw "></i> 
			Google Map
			<span>>
			Custom Skins
			</span>
		</h1>
	</div>
	<div class="col-xs-12 col-sm-5 col-md-5 col-lg-8">
		<ul id="sparks" class="">
			<li class="sparks-info">
				<h5> My Income <span class="txt-color-blue">$47,171</span></h5>
				<div class="sparkline txt-color-blue hidden-mobile hidden-md hidden-sm">
					1300, 1877, 2500, 2577, 2000, 2100, 3000, 2700, 3631, 2471, 2700, 3631, 2471
				</div>
			</li>
			<li class="sparks-info">
				<h5> Site Traffic <span class="txt-color-purple"><i class="fa fa-arrow-circle-up" data-rel="bootstrap-tooltip" title="Increased"></i>&nbsp;45%</span></h5>
				<div class="sparkline txt-color-purple hidden-mobile hidden-md hidden-sm">
					110,150,300,130,400,240,220,310,220,300, 270, 210
				</div>
			</li>
			<li class="sparks-info">
				<h5> Site Orders <span class="txt-color-greenDark"><i class="fa fa-shopping-cart"></i>&nbsp;2447</span></h5>
				<div class="sparkline txt-color-greenDark hidden-mobile hidden-md hidden-sm">
					110,150,300,130,400,240,220,310,220,300, 270, 210
				</div>
			</li>
		</ul>
	</div>
</div>

<!-- widget grid -->
<section id="widget-grid" class="">

	<!-- row -->

	<div class="row">

		<!-- NEW WIDGET START -->
		<article class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
			
			<!-- Widget ID (each widget will need unique ID)-->
			<div class="jarviswidget jarviswidget-color-white" id="wid-id-0" data-widget-editbutton="false" data-widget-deletebutton="false" data-widget-fullscreenbutton="false">
				<!-- widget options:
					usage: <div class="jarviswidget" id="wid-id-0" data-widget-editbutton="false">
					
					data-widget-colorbutton="false"	
					data-widget-editbutton="false"
					data-widget-togglebutton="false"
					data-widget-deletebutton="false"
					data-widget-fullscreenbutton="false"
					data-widget-custombutton="false"
					data-widget-collapsed="true" 
					data-widget-sortable="false"
					
				-->
				<header>
					<span class="widget-icon"> <i class="fa fa-map-marker"></i> </span>
					<h2>XML Generated</h2>				

					<div class="widget-toolbar">
						<!-- add: non-hidden - to disable auto hide -->

						<div class="btn-group">
							<button class="btn dropdown-toggle btn-xs btn-primary" data-toggle="dropdown">
								Load XML <i class="icon-caret-down"></i>
							</button>
							<ul class="dropdown-menu pull-right">
								<li>
									<a href="javascript:void(0);"><i class="icon-circle txt-color-green"></i> Realestate XML</a>
								</li>
								<li>
									<a href="javascript:void(0);"><i class="icon-circle txt-color-red"></i> Clients XML</a>
								</li>
								<li class="divider"></li>
								<li>
									<a href="javascript:void(0);"><i class="icon-delete"></i> Cancel</a>
								</li>
							</ul>
						</div>
					</div>
					
				</header>

				<!-- widget div-->
				<div>
					
					<!-- widget edit box -->
					<div class="jarviswidget-editbox">
						<!-- This area used as dropdown edit box -->
						
					</div>
					<!-- end widget edit box -->
					
					<!-- widget content -->
					<div class="widget-body no-padding">
						<div id="map_canvas" class="google_maps" gmap-data-lat="23.895883" data-gmap-lng="-80.650635" data-gmap-zoom="5" data-gmap-src="xml/test.xml">
							&nbsp;
						</div>
						
					</div>
					<!-- end widget content -->
					
				</div>
				<!-- end widget div -->
				
			</div>
			<!-- end widget -->

		</article>
		<!-- WIDGET END -->

	</div>

	<!-- end row -->

<!-- row -->

	<div class="row">

		<!-- NEW WIDGET START -->
		<article class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
			
			<!-- Widget ID (each widget will need unique ID)-->
			<div class="jarviswidget jarviswidget-color-white" id="wid-id-1" data-widget-editbutton="false" data-widget-deletebutton="false" data-widget-fullscreenbutton="false">
				<!-- widget options:
					usage: <div class="jarviswidget" id="wid-id-0" data-widget-editbutton="false">
					
					data-widget-colorbutton="false"	
					data-widget-editbutton="false"
					data-widget-togglebutton="false"
					data-widget-deletebutton="false"
					data-widget-fullscreenbutton="false"
					data-widget-custombutton="false"
					data-widget-collapsed="true" 
					data-widget-sortable="false"
					
				-->
				<header>
					<span class="widget-icon"> <i class="fa fa-map-marker"></i> </span>
					<h2>Greyscale</h2>									
				</header>

				<!-- widget div-->
				<div>
					
					<!-- widget edit box -->
					<div class="jarviswidget-editbox">
						<!-- This area used as dropdown edit box -->
						
					</div>
					<!-- end widget edit box -->
					
					<!-- widget content -->
					<div class="widget-body no-padding">
						
						<div id="map_canvas1" class="google_maps"></div>
						
						
					</div>
					<!-- end widget content -->
					
				</div>
				<!-- end widget div -->
				
			</div>
			<!-- end widget -->

			<!-- Widget ID (each widget will need unique ID)-->
			<div class="jarviswidget jarviswidget-color-blueDark" id="wid-id-3" data-widget-editbutton="false" data-widget-deletebutton="false" data-widget-fullscreenbutton="false">
				<!-- widget options:
					usage: <div class="jarviswidget" id="wid-id-0" data-widget-editbutton="false">
					
					data-widget-colorbutton="false"	
					data-widget-editbutton="false"
					data-widget-togglebutton="false"
					data-widget-deletebutton="false"
					data-widget-fullscreenbutton="false"
					data-widget-custombutton="false"
					data-widget-collapsed="true" 
					data-widget-sortable="false"
					
				-->
				<header>
					<span class="widget-icon"> <i class="fa fa-map-marker"></i> </span>
					<h2>Night Vision</h2>				
					
				</header>

				<!-- widget div-->
				<div>
					
					<!-- widget edit box -->
					<div class="jarviswidget-editbox">
						<!-- This area used as dropdown edit box -->
						
					</div>
					<!-- end widget edit box -->
					
					<!-- widget content -->
					<div class="widget-body no-padding">
						
						<div id="map_canvas3" class="google_maps"></div>
						
						
					</div>
					<!-- end widget content -->
					
				</div>
				<!-- end widget div -->
				
			</div>
			<!-- end widget -->

			<!-- Widget ID (each widget will need unique ID)-->
			<div class="jarviswidget jarviswidget-color-yellow" id="wid-id-5" data-widget-editbutton="false" data-widget-deletebutton="false" data-widget-fullscreenbutton="false">
				<!-- widget options:
					usage: <div class="jarviswidget" id="wid-id-0" data-widget-editbutton="false">
					
					data-widget-colorbutton="false"	
					data-widget-editbutton="false"
					data-widget-togglebutton="false"
					data-widget-deletebutton="false"
					data-widget-fullscreenbutton="false"
					data-widget-custombutton="false"
					data-widget-collapsed="true" 
					data-widget-sortable="false"
					
				-->
				<header>
					<span class="widget-icon"> <i class="fa fa-map-marker"></i> </span>
					<h2>Papiro Style </h2>				
					
				</header>

				<!-- widget div-->
				<div>
					
					<!-- widget edit box -->
					<div class="jarviswidget-editbox">
						<!-- This area used as dropdown edit box -->
						
					</div>
					<!-- end widget edit box -->
					
					<!-- widget content -->
					<div class="widget-body no-padding">
						
						<div id="map_canvas5" class="google_maps"></div>
						
						
					</div>
					<!-- end widget content -->
					
				</div>
				<!-- end widget div -->
				
			</div>
			<!-- end widget -->

			<!-- Widget ID (each widget will need unique ID)-->
			<div class="jarviswidget jarviswidget-color-teal" id="wid-id-7" data-widget-editbutton="false" data-widget-deletebutton="false" data-widget-fullscreenbutton="false">
				<!-- widget options:
					usage: <div class="jarviswidget" id="wid-id-0" data-widget-editbutton="false">
					
					data-widget-colorbutton="false"	
					data-widget-editbutton="false"
					data-widget-togglebutton="false"
					data-widget-deletebutton="false"
					data-widget-fullscreenbutton="false"
					data-widget-custombutton="false"
					data-widget-collapsed="true" 
					data-widget-sortable="false"
					
				-->
				<header>
					<span class="widget-icon"> <i class="fa fa-map-marker"></i> </span>
					<h2>Retro </h2>				
					
				</header>

				<!-- widget div-->
				<div>
					
					<!-- widget edit box -->
					<div class="jarviswidget-editbox">
						<!-- This area used as dropdown edit box -->
						
					</div>
					<!-- end widget edit box -->
					
					<!-- widget content -->
					<div class="widget-body no-padding">
						
						<div id="map_canvas7" class="google_maps"></div>
						
						
					</div>
					<!-- end widget content -->
					
				</div>
				<!-- end widget div -->
				
			</div>
			<!-- end widget -->

		</article>
		<!-- WIDGET END -->

		<!-- NEW WIDGET START -->
		<article class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
			
			<!-- Widget ID (each widget will need unique ID)-->
			<div class="jarviswidget jarviswidget-color-greenDark" id="wid-id-2" data-widget-editbutton="false" data-widget-deletebutton="false" data-widget-fullscreenbutton="false">
				<!-- widget options:
					usage: <div class="jarviswidget" id="wid-id-0" data-widget-editbutton="false">
					
					data-widget-colorbutton="false"	
					data-widget-editbutton="false"
					data-widget-togglebutton="false"
					data-widget-deletebutton="false"
					data-widget-fullscreenbutton="false"
					data-widget-custombutton="false"
					data-widget-collapsed="true" 
					data-widget-sortable="false"
					
				-->
				<header>
					<span class="widget-icon"> <i class="fa fa-map-marker"></i> </span>
					<h2>Cartoon Color</h2>				
					
				</header>

				<!-- widget div-->
				<div>
					
					<!-- widget edit box -->
					<div class="jarviswidget-editbox">
						<!-- This area used as dropdown edit box -->
						
					</div>
					<!-- end widget edit box -->
					
					<!-- widget content -->
					<div class="widget-body no-padding">
						
						<div id="map_canvas2" class="google_maps"></div>
						
						
					</div>
					<!-- end widget content -->
					
				</div>
				<!-- end widget div -->
				
			</div>
			<!-- end widget -->

			<!-- Widget ID (each widget will need unique ID)-->
			<div class="jarviswidget jarviswidget-color-orange" id="wid-id-4" data-widget-editbutton="false" data-widget-deletebutton="false" data-widget-fullscreenbutton="false">
				<!-- widget options:
					usage: <div class="jarviswidget" id="wid-id-0" data-widget-editbutton="false">
					
					data-widget-colorbutton="false"	
					data-widget-editbutton="false"
					data-widget-togglebutton="false"
					data-widget-deletebutton="false"
					data-widget-fullscreenbutton="false"
					data-widget-custombutton="false"
					data-widget-collapsed="true" 
					data-widget-sortable="false"
					
				-->
				<header>
					<span class="widget-icon"> <i class="fa fa-map-marker"></i> </span>
					<h2>Night Light</h2>				
					
				</header>

				<!-- widget div-->
				<div>
					
					<!-- widget edit box -->
					<div class="jarviswidget-editbox">
						<!-- This area used as dropdown edit box -->
						
					</div>
					<!-- end widget edit box -->
					
					<!-- widget content -->
					<div class="widget-body no-padding">
						
						<div id="map_canvas4" class="google_maps"></div>
						
						
					</div>
					<!-- end widget content -->
					
				</div>
				<!-- end widget div -->
				
			</div>
			<!-- end widget -->

			<!-- Widget ID (each widget will need unique ID)-->
			<div class="jarviswidget jarviswidget-color-pink" id="wid-id-6" data-widget-editbutton="false" data-widget-deletebutton="false" data-widget-fullscreenbutton="false">
				<!-- widget options:
					usage: <div class="jarviswidget" id="wid-id-0" data-widget-editbutton="false">
					
					data-widget-colorbutton="false"	
					data-widget-editbutton="false"
					data-widget-togglebutton="false"
					data-widget-deletebutton="false"
					data-widget-fullscreenbutton="false"
					data-widget-custombutton="false"
					data-widget-collapsed="true" 
					data-widget-sortable="false"
					
				-->
				<header>
					<span class="widget-icon"> <i class="fa fa-map-marker"></i> </span>
					<h2>One Color</h2>				
					
				</header>

				<!-- widget div-->
				<div>
					
					<!-- widget edit box -->
					<div class="jarviswidget-editbox">
						<!-- This area used as dropdown edit box -->
						
					</div>
					<!-- end widget edit box -->
					
					<!-- widget content -->
					<div class="widget-body no-padding">
						
						<div id="map_canvas6" class="google_maps"></div>
						
						
					</div>
					<!-- end widget content -->
					
				</div>
				<!-- end widget div -->
				
			</div>
			<!-- end widget -->

			<!-- Widget ID (each widget will need unique ID)-->
			<div class="jarviswidget jarviswidget-color-darken" id="wid-id-8" data-widget-editbutton="false" data-widget-deletebutton="false" data-widget-fullscreenbutton="false">
				<!-- widget options:
					usage: <div class="jarviswidget" id="wid-id-0" data-widget-editbutton="false">
					
					data-widget-colorbutton="false"	
					data-widget-editbutton="false"
					data-widget-togglebutton="false"
					data-widget-deletebutton="false"
					data-widget-fullscreenbutton="false"
					data-widget-custombutton="false"
					data-widget-collapsed="true" 
					data-widget-sortable="false"
					
				-->
				<header>
					<span class="widget-icon"> <i class="fa fa-map-marker"></i> </span>
					<h2>Black & White </h2>				
					
				</header>

				<!-- widget div-->
				<div>
					
					<!-- widget edit box -->
					<div class="jarviswidget-editbox">
						<!-- This area used as dropdown edit box -->
						
					</div>
					<!-- end widget edit box -->
					
					<!-- widget content -->
					<div class="widget-body no-padding">
						
						<div id="map_canvas8" class="google_maps"></div>
						
						
					</div>
					<!-- end widget content -->
					
				</div>
				<!-- end widget div -->
				
			</div>
			<!-- end widget -->

		</article>
		<!-- WIDGET END -->

	</div>

	<!-- end row -->	
	
</section>
<!-- end widget grid -->


<script type="text/javascript">
	
	// DO NOT REMOVE : GLOBAL FUNCTIONS!
	pageSetUp();
	
	// PAGE RELATED SCRIPTS

	var colorful_style = [{
    "featureType": "landscape",
    "stylers": [{
        "visibility": "off"
	    }]
	}, {
	    "featureType": "transit",
	    "stylers": [{
	        "visibility": "off"
	    }]
	}, {
	    "featureType": "poi.park",
	    "elementType": "labels",
	    "stylers": [{
	        "visibility": "off"
	    }]
	}, {
	    "featureType": "poi.park",
	    "elementType": "geometry.fill",
	    "stylers": [{
	        "color": "#d3d3d3"
	    }, {
	        "visibility": "on"
	    }]
	}, {
	    "featureType": "road",
	    "elementType": "geometry.stroke",
	    "stylers": [{
	        "visibility": "off"
	    }]
	}, {
	    "featureType": "landscape",
	    "stylers": [{
	        "visibility": "on"
	    }, {
	        "color": "#b1bc39"
	    }]
	}, {
	    "featureType": "landscape.man_made",
	    "stylers": [{
	        "visibility": "on"
	    }, {
	        "color": "#ebad02"
	    }]
	}, {
	    "featureType": "water",
	    "elementType": "geometry.fill",
	    "stylers": [{
	        "visibility": "on"
	    }, {
	        "color": "#416d9f"
	    }]
	}, {
	    "featureType": "road",
	    "elementType": "labels.text.fill",
	    "stylers": [{
	        "visibility": "on"
	    }, {
	        "color": "#000000"
	    }]
	}, {
	    "featureType": "road",
	    "elementType": "labels.text.stroke",
	    "stylers": [{
	        "visibility": "off"
	    }, {
	        "color": "#ffffff"
	    }]
	}, {
	    "featureType": "administrative",
	    "elementType": "labels.text.fill",
	    "stylers": [{
	        "visibility": "on"
	    }, {
	        "color": "#000000"
	    }]
	}, {
	    "featureType": "road",
	    "elementType": "geometry.fill",
	    "stylers": [{
	        "visibility": "on"
	    }, {
	        "color": "#ffffff"
	    }]
	}, {
	    "featureType": "road",
	    "elementType": "labels.icon",
	    "stylers": [{
	        "visibility": "off"
	    }]
	}, {
	    "featureType": "water",
	    "elementType": "labels",
	    "stylers": [{
	        "visibility": "off"
	    }]
	}, {
	    "featureType": "poi",
	    "elementType": "geometry.fill",
	    "stylers": [{
	        "color": "#ebad02"
	    }]
	}, {
	    "featureType": "poi.park",
	    "elementType": "geometry.fill",
	    "stylers": [{
	        "color": "#8ca83c"
	    }]
	}];
	
	// Grey Scale
	var greyscale_style = [{
	    "featureType": "road.highway",
	    "stylers": [{
	        "visibility": "off"
	    }]
	}, {
	    "featureType": "landscape",
	    "stylers": [{
	        "visibility": "off"
	    }]
	}, {
	    "featureType": "transit",
	    "stylers": [{
	        "visibility": "off"
	    }]
	}, {
	    "featureType": "poi",
	    "stylers": [{
	        "visibility": "off"
	    }]
	}, {
	    "featureType": "poi.park",
	    "stylers": [{
	        "visibility": "on"
	    }]
	}, {
	    "featureType": "poi.park",
	    "elementType": "labels",
	    "stylers": [{
	        "visibility": "off"
	    }]
	}, {
	    "featureType": "poi.park",
	    "elementType": "geometry.fill",
	    "stylers": [{
	        "color": "#d3d3d3"
	    }, {
	        "visibility": "on"
	    }]
	}, {
	    "featureType": "poi.medical",
	    "stylers": [{
	        "visibility": "off"
	    }]
	}, {
	    "featureType": "poi.medical",
	    "stylers": [{
	        "visibility": "off"
	    }]
	}, {
	    "featureType": "road",
	    "elementType": "geometry.stroke",
	    "stylers": [{
	        "color": "#cccccc"
	    }]
	}, {
	    "featureType": "water",
	    "elementType": "geometry.fill",
	    "stylers": [{
	        "visibility": "on"
	    }, {
	        "color": "#cecece"
	    }]
	}, {
	    "featureType": "road.local",
	    "elementType": "labels.text.fill",
	    "stylers": [{
	        "visibility": "on"
	    }, {
	        "color": "#808080"
	    }]
	}, {
	    "featureType": "administrative",
	    "elementType": "labels.text.fill",
	    "stylers": [{
	        "visibility": "on"
	    }, {
	        "color": "#808080"
	    }]
	}, {
	    "featureType": "road",
	    "elementType": "geometry.fill",
	    "stylers": [{
	        "visibility": "on"
	    }, {
	        "color": "#fdfdfd"
	    }]
	}, {
	    "featureType": "road",
	    "elementType": "labels.icon",
	    "stylers": [{
	        "visibility": "off"
	    }]
	}, {
	    "featureType": "water",
	    "elementType": "labels",
	    "stylers": [{
	        "visibility": "off"
	    }]
	}, {
	    "featureType": "poi",
	    "elementType": "geometry.fill",
	    "stylers": [{
	        "color": "#d2d2d2"
	    }]
	}];
	
	// Black & White
	var monochrome_style = [{
	    "featureType": "road.highway",
	    "stylers": [{
	        "visibility": "off"
	    }]
	}, {
	    "featureType": "landscape",
	    "stylers": [{
	        "visibility": "off"
	    }]
	}, {
	    "featureType": "transit",
	    "stylers": [{
	        "visibility": "off"
	    }]
	}, {
	    "featureType": "poi.park",
	    "elementType": "labels",
	    "stylers": [{
	        "visibility": "off"
	    }]
	}, {
	    "featureType": "poi.park",
	    "elementType": "geometry.fill",
	    "stylers": [{
	        "color": "#d3d3d3"
	    }, {
	        "visibility": "on"
	    }]
	}, {
	    "featureType": "road",
	    "elementType": "geometry.stroke",
	    "stylers": [{
	        "visibility": "off"
	    }]
	}, {
	    "featureType": "landscape",
	    "stylers": [{
	        "visibility": "on"
	    }, {
	        "color": "#ffffff"
	    }]
	}, {
	    "featureType": "water",
	    "elementType": "geometry.fill",
	    "stylers": [{
	        "visibility": "on"
	    }, {
	        "color": "#cecece"
	    }]
	}, {
	    "featureType": "road",
	    "elementType": "labels.text.fill",
	    "stylers": [{
	        "visibility": "on"
	    }, {
	        "color": "#000000"
	    }]
	}, {
	    "featureType": "road",
	    "elementType": "labels.text.stroke",
	    "stylers": [{
	        "visibility": "on"
	    }, {
	        "color": "#ffffff"
	    }]
	}, {
	    "featureType": "administrative",
	    "elementType": "labels.text.fill",
	    "stylers": [{
	        "visibility": "on"
	    }, {
	        "color": "#000000"
	    }]
	}, {
	    "featureType": "road",
	    "elementType": "geometry.fill",
	    "stylers": [{
	        "visibility": "on"
	    }, {
	        "color": "#000000"
	    }]
	}, {
	    "featureType": "road",
	    "elementType": "labels.icon",
	    "stylers": [{
	        "visibility": "off"
	    }]
	}, {
	    "featureType": "water",
	    "elementType": "labels",
	    "stylers": [{
	        "visibility": "off"
	    }]
	}, {
	    "featureType": "poi",
	    "elementType": "geometry.fill",
	    "stylers": [{
	        "visibility": "off"
	    }]
	}];
	
	// Retro
	var metro_style = [{
	    "featureType": "transit",
	    "stylers": [{
	        "visibility": "off"
	    }]
	}, {
	    "featureType": "poi.park",
	    "elementType": "geometry.fill",
	    "stylers": [{
	        "color": "#d3d3d3"
	    }, {
	        "visibility": "on"
	    }]
	}, {
	    "featureType": "road",
	    "elementType": "geometry.stroke",
	    "stylers": [{
	        "visibility": "off"
	    }]
	}, {
	    "featureType": "landscape",
	    "stylers": [{
	        "visibility": "on"
	    }, {
	        "color": "#eee8ce"
	    }]
	}, {
	    "featureType": "water",
	    "elementType": "geometry.fill",
	    "stylers": [{
	        "visibility": "on"
	    }, {
	        "color": "#b8cec9"
	    }]
	}, {
	    "featureType": "road",
	    "elementType": "labels.text.fill",
	    "stylers": [{
	        "visibility": "on"
	    }, {
	        "color": "#000000"
	    }]
	}, {
	    "featureType": "road",
	    "elementType": "labels.text.stroke",
	    "stylers": [{
	        "visibility": "off"
	    }, {
	        "color": "#ffffff"
	    }]
	}, {
	    "featureType": "administrative",
	    "elementType": "labels.text.fill",
	    "stylers": [{
	        "visibility": "on"
	    }, {
	        "color": "#000000"
	    }]
	}, {
	    "featureType": "road",
	    "elementType": "geometry.fill",
	    "stylers": [{
	        "visibility": "on"
	    }, {
	        "color": "#ffffff"
	    }]
	}, {
	    "featureType": "road",
	    "elementType": "geometry.stroke",
	    "stylers": [{
	        "visibility": "off"
	    }]
	}, {
	    "featureType": "road",
	    "elementType": "labels.icon",
	    "stylers": [{
	        "visibility": "off"
	    }]
	}, {
	    "featureType": "water",
	    "elementType": "labels",
	    "stylers": [{
	        "visibility": "off"
	    }]
	}, {
	    "featureType": "poi",
	    "elementType": "geometry.fill",
	    "stylers": [{
	        "color": "#d3cdab"
	    }]
	}, {
	    "featureType": "poi.park",
	    "elementType": "geometry.fill",
	    "stylers": [{
	        "color": "#ced09d"
	    }]
	}, {
	    "featureType": "poi",
	    "elementType": "labels",
	    "stylers": [{
	        "visibility": "off"
	    }]
	}];
	
	// Night
	var nightvision_style = [{
	    "featureType": "landscape",
	    "stylers": [{
	        "visibility": "off"
	    }]
	}, {
	    "featureType": "transit",
	    "stylers": [{
	        "visibility": "off"
	    }]
	}, {
	    "featureType": "poi.park",
	    "elementType": "labels",
	    "stylers": [{
	        "visibility": "off"
	    }]
	}, {
	    "featureType": "poi.park",
	    "elementType": "geometry.fill",
	    "stylers": [{
	        "color": "#d3d3d3"
	    }, {
	        "visibility": "on"
	    }]
	}, {
	    "featureType": "road",
	    "elementType": "geometry.stroke",
	    "stylers": [{
	        "visibility": "off"
	    }]
	}, {
	    "featureType": "landscape",
	    "stylers": [{
	        "visibility": "on"
	    }, {
	        "hue": "#0008ff"
	    }, {
	        "lightness": -75
	    }, {
	        "saturation": 10
	    }]
	}, {
	    "elementType": "geometry.stroke",
	    "stylers": [{
	        "color": "#1f1d45"
	    }]
	}, {
	    "featureType": "landscape.natural",
	    "stylers": [{
	        "color": "#1f1d45"
	    }]
	}, {
	    "featureType": "water",
	    "elementType": "geometry.fill",
	    "stylers": [{
	        "visibility": "on"
	    }, {
	        "color": "#01001f"
	    }]
	}, {
	    "elementType": "labels.text.fill",
	    "stylers": [{
	        "visibility": "on"
	    }, {
	        "color": "#e7e8ec"
	    }]
	}, {
	    "elementType": "labels.text.stroke",
	    "stylers": [{
	        "visibility": "on"
	    }, {
	        "color": "#151348"
	    }]
	}, {
	    "featureType": "administrative",
	    "elementType": "labels.text.fill",
	    "stylers": [{
	        "visibility": "on"
	    }, {
	        "color": "#f7fdd9"
	    }]
	}, {
	    "featureType": "administrative",
	    "elementType": "labels.text.stroke",
	    "stylers": [{
	        "visibility": "on"
	    }, {
	        "color": "#01001f"
	    }]
	}, {
	    "featureType": "road",
	    "elementType": "geometry.fill",
	    "stylers": [{
	        "visibility": "on"
	    }, {
	        "color": "#316694"
	    }]
	}, {
	    "featureType": "road",
	    "elementType": "labels.icon",
	    "stylers": [{
	        "visibility": "off"
	    }]
	}, {
	    "featureType": "water",
	    "elementType": "labels",
	    "stylers": [{
	        "visibility": "off"
	    }]
	}, {
	    "featureType": "poi",
	    "elementType": "geometry.fill",
	    "stylers": [{
	        "color": "#1a153d"
	    }]
	
	}];
	
	// Night Light
	var nightvision_highlight_style = [{
	    "elementType": "geometry",
	    "stylers": [{
	        "visibility": "on"
	    }, {
	        "hue": "#232a57"
	    }]
	}, {
	    "featureType": "road.highway",
	    "stylers": [{
	        "visibility": "off"
	    }]
	}, {
	    "featureType": "landscape",
	    "elementType": "geometry.fill",
	    "stylers": [{
	        "hue": "#0033ff"
	    }, {
	        "saturation": 13
	    }, {
	        "lightness": -77
	    }]
	}, {
	    "featureType": "landscape",
	    "elementType": "geometry.stroke",
	    "stylers": [{
	        "color": "#4657ab"
	    }]
	}, {
	    "featureType": "transit",
	    "stylers": [{
	        "visibility": "off"
	    }]
	}, {
	    "featureType": "road",
	    "elementType": "geometry.stroke",
	    "stylers": [{
	        "visibility": "off"
	    }]
	}, {
	    "featureType": "water",
	    "elementType": "geometry.fill",
	    "stylers": [{
	        "visibility": "on"
	    }, {
	        "color": "#0d0a1f"
	    }]
	}, {
	    "elementType": "labels.text.fill",
	    "stylers": [{
	        "visibility": "on"
	    }, {
	        "color": "#d2cfe3"
	    }]
	}, {
	    "elementType": "labels.text.stroke",
	    "stylers": [{
	        "visibility": "on"
	    }, {
	        "color": "#0d0a1f"
	    }]
	}, {
	    "featureType": "administrative",
	    "elementType": "labels.text.fill",
	    "stylers": [{
	        "visibility": "on"
	    }, {
	        "color": "#ffffff"
	    }]
	}, {
	    "featureType": "administrative",
	    "elementType": "labels.text.stroke",
	    "stylers": [{
	        "visibility": "on"
	    }, {
	        "color": "#0d0a1f"
	    }]
	}, {
	    "featureType": "road",
	    "elementType": "geometry.fill",
	    "stylers": [{
	        "visibility": "on"
	    }, {
	        "color": "#ff9910"
	    }]
	}, {
	    "featureType": "road.local",
	    "elementType": "geometry.fill",
	    "stylers": [{
	        "visibility": "on"
	    }, {
	        "color": "#4657ab"
	    }]
	}, {
	    "featureType": "road",
	    "elementType": "labels.icon",
	    "stylers": [{
	        "visibility": "off"
	    }]
	}, {
	    "featureType": "water",
	    "elementType": "labels",
	    "stylers": [{
	        "visibility": "off"
	    }]
	}, {
	    "featureType": "poi",
	    "elementType": "geometry.fill",
	    "stylers": [{
	        "color": "#232a57"
	    }]
	}, {
	    "featureType": "poi.park",
	    "elementType": "geometry.fill",
	    "stylers": [{
	        "color": "#232a57"
	    }]
	}, {
	    "featureType": "poi",
	    "elementType": "labels",
	    "stylers": [{
	        "visibility": "off"
	    }]
	}];
	
	// Papiro
	var old_paper_style = [{
	    "elementType": "geometry",
	    "stylers": [{
	        "visibility": "on"
	    }, {
	        "color": "#f2e48c"
	    }]
	}, {
	    "featureType": "road.highway",
	    "stylers": [{
	        "visibility": "off"
	    }]
	}, {
	    "featureType": "transit",
	    "stylers": [{
	        "visibility": "off"
	    }]
	}, {
	    "featureType": "poi.park",
	    "elementType": "labels",
	    "stylers": [{
	        "visibility": "off"
	    }]
	}, {
	    "featureType": "poi.park",
	    "elementType": "geometry.fill",
	    "stylers": [{
	        "color": "#d3d3d3"
	    }, {
	        "visibility": "on"
	    }]
	}, {
	    "featureType": "road",
	    "elementType": "geometry.stroke",
	    "stylers": [{
	        "visibility": "off"
	    }]
	}, {
	    "featureType": "landscape",
	    "elementType": "geometry.fill",
	    "stylers": [{
	        "visibility": "on"
	    }, {
	        "color": "#f2e48c"
	    }]
	}, {
	    "featureType": "landscape",
	    "elementType": "geometry.stroke",
	    "stylers": [{
	        "visibility": "on"
	    }, {
	        "color": "#592c00"
	    }]
	}, {
	    "featureType": "water",
	    "elementType": "geometry.fill",
	    "stylers": [{
	        "visibility": "on"
	    }, {
	        "color": "#a77637"
	    }]
	}, {
	    "elementType": "labels.text.fill",
	    "stylers": [{
	        "visibility": "on"
	    }, {
	        "color": "#592c00"
	    }]
	}, {
	    "elementType": "labels.text.stroke",
	    "stylers": [{
	        "visibility": "on"
	    }, {
	        "color": "#f2e48c"
	    }]
	}, {
	    "featureType": "administrative",
	    "elementType": "labels.text.fill",
	    "stylers": [{
	        "visibility": "on"
	    }, {
	        "color": "#592c00"
	    }]
	}, {
	    "featureType": "administrative",
	    "elementType": "labels.text.stroke",
	    "stylers": [{
	        "visibility": "on"
	    }, {
	        "color": "#f2e48c"
	    }]
	}, {
	    "featureType": "road",
	    "elementType": "geometry.fill",
	    "stylers": [{
	        "visibility": "on"
	    }, {
	        "color": "#a5630f"
	    }]
	}, {
	    "featureType": "road.highway",
	    "elementType": "geometry.fill",
	    "stylers": [{
	        "visibility": "on"
	    }, {
	        "color": "#592c00"
	    }]
	}, {
	    "featureType": "road",
	    "elementType": "labels.icon",
	    "stylers": [{
	        "visibility": "off"
	    }]
	}, {
	    "featureType": "water",
	    "elementType": "labels",
	    "stylers": [{
	        "visibility": "off"
	    }]
	}, {
	    "featureType": "poi",
	    "elementType": "geometry.fill",
	    "stylers": [{
	        "visibility": "off"
	    }]
	}, {
	    "featureType": "poi",
	    "elementType": "labels",
	    "stylers": [{
	        "visibility": "off"
	    }]
	}];
	
	// One color - Change the hue value for your desired color
	var mono_color_style = [{
	    "stylers": [{
	        "hue": "#ff00aa"
	    }, {
	        "saturation": 1
	    }, {
	        "lightness": 1
	    }]
	}];
	
	/*
	 * Google Maps Initialize
	 */
	
	function initialize() {
	
	    $this = $("#map_canvas");
	    $zoom_level = ($this.data("gmap-zoom") || 5);
	    $data_lat = ($this.data("gmap-lat") || 29.895883);
	    $data_lng = ($this.data("gmap-lng") || -80.650635);
	    $xml_src = ($this.data("gmap-src") || "<?php echo ASSETS_URL; ?>/js/test.xml");
	
	    var greyStyleMap = new google.maps.StyledMapType(greyscale_style, {
	        name: "Greyscale"
	    }),
	        monoChromeStyleMap = new google.maps.StyledMapType(monochrome_style, {
	            name: "Mono Chrome"
	        }),
	        metroStyleMap = new google.maps.StyledMapType(metro_style, {
	            name: "Metro"
	        }),
	        nightvisionStyleMap = new google.maps.StyledMapType(nightvision_style, {
	            name: "Nightvision"
	        }),
	        nvisionhstyleMap = new google.maps.StyledMapType(nightvision_highlight_style, {
	            name: "Nightvision Light"
	        }),
	        oPaperStyleMap = new google.maps.StyledMapType(old_paper_style, {
	            name: "Old Paper"
	        }),
	        colorfulStyleMap = new google.maps.StyledMapType(colorful_style, {
	            name: "Colorful"
	        }),
	        monoColorStyleMap = new google.maps.StyledMapType(mono_color_style, {
	            name: "One Color"
	        });
	
	    function xmlLoadMap() {
	
	        var centerLatLng = new google.maps.LatLng($data_lat, $data_lng),
	            mapOptions = {
	                zoom: $zoom_level,
	                center: centerLatLng,
	                //disableDefaultUI: true,
	                //mapTypeId : google.maps.MapTypeId.ROADMAP
	                mapTypeControlOptions: {
	                    mapTypeIds: [google.maps.MapTypeId.TERRAIN, 'colorful_style', 'greyscale_style',
	                        'monochrome_style', 'metro_style', 'nightvision_style', 'nightvision_highlight_style',
	                        'old_paper_style', 'mono_color_style'
	                    ]
	                }
	            },
	
	            bounds = new google.maps.LatLngBounds(),
	            infowindow = new google.maps.InfoWindow(),
	            map = new google.maps.Map(document.getElementById("map_canvas"), mapOptions);
	
	        map.mapTypes.set('colorful_style', colorfulStyleMap);
	        map.mapTypes.set('greyscale_style', greyStyleMap);
	        map.mapTypes.set('monochrome_style', monoChromeStyleMap);
	        map.mapTypes.set('metro_style', metroStyleMap);
	        map.mapTypes.set('nightvision_style', nightvisionStyleMap);
	        map.mapTypes.set('nightvision_highlight_style', nvisionhstyleMap);
	        map.mapTypes.set('old_paper_style', oPaperStyleMap);
	        map.mapTypes.set('mono_color_style', monoColorStyleMap);
	
	        //map.setMapTypeId(google.maps.MapTypeId.TERRAIN);
	        map.setMapTypeId('metro_style');
	
	        /*
				
				$.get($xml_src, function(data) {
		
			        // create the Bounds object
			        var bounds = new google.maps.LatLngBounds();
			        
					$(data).find("marker").each(function(){
			
						var eachMarker = jQuery(this),
							// grab the address from XML
							theAddress = eachMarker.find("address").text(),
							mygc = new google.maps.Geocoder(theAddress);
							
							mygc.geocode({'address' : theAddress}, function(results, status) {
			
								var mLat = results[0].geometry.location.lat(),
									Long = results[0].geometry.location.lng(),
				
									marker = new google.maps.Marker({
									position : new google.maps.LatLng(mLat, Long),
									map : map,
									icon : ('img/' + eachMarker.find("icons").text() + '.png'),
									scrollwheel : false,
									streetViewControl : true,
									title : eachMarker.find("name").text()
							}),
					        
							link = "link";
							
							google.maps.event.addListener(marker, 'click', function() {// click
								// Setting the content of the InfoWindow
								var contentString = '<div id="info-map" style="width:300px; height:85px; padding:0px;"><div>' + '<div style="display:inline-block; width:86px; verticle-align:top; float:left;"><img src=' + eachMarker.find("image").text() + ' class="thumbnail" style="width:80%; verticle-align:top;" /></div>' + '<div style="display:inline-block; width:200px; float:left;"><h6>' + eachMarker.find("name").text() + '</h6><b>' + eachMarker.find("address").text() + '</b><br/>' + '<p><a href="' + eachMarker.find("link").text() + '" class="btn btn-mini pull-right"><i class="fa fa-map-marker"></i>More Info</a></p>' + '</div></div></div>';
								infowindow.setContent(contentString);
								infowindow.open(map, marker);
			
								google.maps.event.addListener(map, 'click', function() {
									infowindow.close()
									})
								});
			
							});// end geocode
				
					});// end find marker loop
				
			});	// end get data
			
					*/
	    } // end xmlLoadMap
	
	    // grey
	    function generate_map_1() {
	
	        var mapOptions = {
	            center: new google.maps.LatLng(41.38155, 2.13752),
	            zoom: 12,
	        };
	        map = new google.maps.Map(document.getElementById('map_canvas1'), mapOptions);
	
	        // Setup skin for the map
	        map.mapTypes.set('greyscale_style', greyStyleMap);
	        map.setMapTypeId('greyscale_style');
	
	        /* map.mapTypes.set('colorful_style', colorfulStyleMap);
			    map.mapTypes.set('greyscale_style', greyStyleMap);
			    map.mapTypes.set('monochrome_style', monoChromeStyleMap);
			    map.mapTypes.set('metro_style', metroStyleMap);
			    map.mapTypes.set('nightvision_style', nightvisionStyleMap);
			    map.mapTypes.set('nightvision_highlight_style', nvisionhstyleMap);
			    map.mapTypes.set('old_paper_style', oPaperStyleMap);
			    map.mapTypes.set('mono_color_style', monoColorStyleMap);
			    */
	
	    }
	
	    // colorful
	    function generate_map_2() {
	
	        var mapOptions = {
	            center: new google.maps.LatLng(41.38155, 2.13752),
	            zoom: 12,
	        };
	        map = new google.maps.Map(document.getElementById('map_canvas2'), mapOptions);
	
	        // Setup skin for the map
	        map.mapTypes.set('colorful_style', colorfulStyleMap);
	        map.setMapTypeId('colorful_style');
	
	    }
	
	    // colorful
	    function generate_map_3() {
	
	        var mapOptions = {
	            center: new google.maps.LatLng(41.38155, 2.13752),
	            zoom: 12,
	        };
	        map = new google.maps.Map(document.getElementById('map_canvas3'), mapOptions);
	
	        // Setup skin for the map
	        map.mapTypes.set('nightvision_style', nightvisionStyleMap);
	        map.setMapTypeId('nightvision_style');
	
	    }
	
	    // Night Light
	    function generate_map_4() {
	
	        var mapOptions = {
	            center: new google.maps.LatLng(41.38155, 2.13752),
	            zoom: 12,
	        };
	        map = new google.maps.Map(document.getElementById('map_canvas4'), mapOptions);
	
	        // Setup skin for the map
	        map.mapTypes.set('nightvision_highlight_style', nvisionhstyleMap);
	        map.setMapTypeId('nightvision_highlight_style');
	
	    }
	
	    // Paper Style
	    function generate_map_5() {
	
	        var mapOptions = {
	            center: new google.maps.LatLng(41.38155, 2.13752),
	            zoom: 12,
	        };
	        map = new google.maps.Map(document.getElementById('map_canvas5'), mapOptions);
	
	        // Setup skin for the map
	        map.mapTypes.set('old_paper_style', oPaperStyleMap);
	        map.setMapTypeId('old_paper_style');
	
	        /* 
			    map.mapTypes.set('monochrome_style', monoChromeStyleMap);
			    map.mapTypes.set('metro_style', metroStyleMap);
			    map.mapTypes.set('mono_color_style', monoColorStyleMap);
			    */
	
	    }
	
	    // One Color Style
	    function generate_map_6() {
	
	        var mapOptions = {
	            center: new google.maps.LatLng(41.38155, 2.13752),
	            zoom: 12,
	        };
	        map = new google.maps.Map(document.getElementById('map_canvas6'), mapOptions);
	
	        // Setup skin for the map
	        map.mapTypes.set('mono_color_style', monoColorStyleMap);
	        map.setMapTypeId('mono_color_style');
	
	    }
	
	    // Monochrome Style
	    function generate_map_8() {
	
	        var mapOptions = {
	            center: new google.maps.LatLng(41.38155, 2.13752),
	            zoom: 12,
	        };
	        map = new google.maps.Map(document.getElementById('map_canvas8'), mapOptions);
	
	        // Setup skin for the map
	        map.mapTypes.set('monochrome_style', monoChromeStyleMap);
	        map.setMapTypeId('monochrome_style');
	
	    }
	
	    // Metro Style
	    function generate_map_7() {
	
	        var mapOptions = {
	            center: new google.maps.LatLng(41.38155, 2.13752),
	            zoom: 12,
	        };
	        map = new google.maps.Map(document.getElementById('map_canvas7'), mapOptions);
	
	        // Setup skin for the map
	        map.mapTypes.set('metro_style', metroStyleMap);
	        map.setMapTypeId('metro_style');
	
	    }
	
	    xmlLoadMap();
	    generate_map_1();
	    generate_map_2();
	    generate_map_3();
	    generate_map_4();
	    generate_map_5();
	    generate_map_6();
	    generate_map_7();
	    generate_map_8();
	}
	
	
	$(window).bind('gMapsLoaded', initialize);
	window.loadGoogleMaps();
		

</script>
