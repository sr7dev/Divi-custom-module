 <?php

class ET_Builder_Module_Hits extends ET_Builder_Module {
	function init() {
    $this->name       = esc_html__( 'Hello_world', 'et_builder' );
    $this->slug       = 'algolia_hits';
    $this->vb_support = 'off';
    $this->main_css_element = '%%order_class%%.et_pb_promo';

		$this->advanced_fields = array(
			'background'            => array(
				'has_background_color_toggle' => true,
				'use_background_color' => 'fields_only',
				'options' => array(
					'background_color' => array(
						'depends_show_if'  => 'on',
						'default'          => et_builder_accent_color(),
					),
					'use_background_color' => array(
						'default'          => 'on',
					),
				),
			),
		);
  }
  function cloud_img_prefix()
  {
	  if (function_exists ('get_cloud_img_prefix'))
	  {

		  return get_cloud_img_prefix("","","","");
	  }
	  return "";
	
  }
  function cloud_img_gray_prefix()
  {
	  if (function_exists ('get_cloud_img_gray_prefix'))
	  {

		  return get_cloud_img_gray_prefix("","","","");
	  }
	  return "";
	
  }
  function cloud_img_full_prefix($operation, $width, $height, $filter)
  {
	  if (function_exists ('get_cloud_img_prefix'))
	  {

		  return get_cloud_img_prefix($operation, $width, $height, $filter);
	  }
	  return "";
	
  }
  function get_fields() {
    
    $fields = array(
/* Content */
      'instantsearch' => array(
        'label'           => esc_html__( 'Instant Search', 'et_builder' ),
        'type'            => 'text',
        'option_category' => 'basic_option',
        'description'     => esc_html__( 'Input variable name of instantsearch. ', 'et_builder' ),
        'toggle_slug'     => 'main_content',
        'default'     => 'searchDiscover'
      ),
      'container_id' => array(
        'label'           => esc_html__( 'ID of Container', 'et_builder' ),
        'type'            => 'text',
        'option_category' => 'basic_option',
        'description'     => esc_html__( 'Input id of container here.', 'et_builder' ),
        'toggle_slug'     => 'main_content',
        'default'     => 'hits',
      ),
      'type' => array(
        'label'             => esc_html__( 'Type of Hits. Define the formats of Hits', 'et_builder' ),
        'type'              => 'select',
        'option_category'   => 'layout',
        'options'           => array(
          'normal'  => esc_html__( 'Normal', 'et_builder' ),
          'athlete' => esc_html__( 'Discover Athlete', 'et_builder' ),
          'brand' => esc_html__( 'Discover Brand', 'et_builder'),
          'media' => esc_html__( 'Discover Media', 'et_builder'),
          'media_top' => esc_html__( 'Top Video Player List of Media Discover', 'et_builder'),
          'event' => esc_html__( 'Discover Event', 'et_builder'),
          'home_wall' => esc_html__( 'Home Wall', 'et_builder'),
          'home_highlight' => esc_html__( 'Home Media(Highlight, Podcast, Movie)', 'et_builder'),
          'home_athlete' => esc_html__( 'Home Athlete', 'et_builder'),
          'home_event' => esc_html__( 'Home Event', 'et_builder'),
          'home_gear' => esc_html__( 'Home Brand/Gear', 'et_builder'),
          'sport_wall' => esc_html__( 'Sport Wall', 'et_builder'),
		  'mrc_hospital_search' => esc_html__( 'MRC Hospital Search', 'et_builder'),	
		  'mrc_dtc_search' => esc_html__( 'MRC DTC Search', 'et_builder'),	
          'all' => esc_html__( 'Universal Search', 'et_builder'),
        ),
        
        'description'        => esc_html__( 'Select Type of Slider', 'et_builder' ),
        'toggle_slug'        => 'main_content',
        'default_on_front'   => 'athlete',
      ),

	 
      'leftfixedcols' => array(
        'label'           => esc_html__( 'Number of Left Fixed Column', 'et_builder' ),
        'type'            => 'text',
        'option_category' => 'basic_option',
        'description'     => esc_html__( 'Input a number of Left Fixed Column.', 'et_builder' ),
        'number_validation' => true,
        'value_type'        => 'int',
        'value_min'         => 0,
        'toggle_slug'     => 'main_content',
        'default'     => '0',
		'show_if' => array(
          'type'=> array('athlete', 'brand', 'media', 'event'),
        )
      ),
      'rightfixedcols' => array(
        'label'           => esc_html__( 'Number of Right Fixed Column', 'et_builder' ),
        'type'            => 'text',
        'option_category' => 'basic_option',
        'description'     => esc_html__( 'Input a number of Right Fixed Column.', 'et_builder' ),
        'number_validation' => true,
        'value_type'        => 'int',
        'value_min'         => 0,
        'toggle_slug'     => 'main_content',
        'default'     => '0',
		'show_if' => array(
          'type'=> array('athelte', 'brand', 'media', 'event',),
        )
      ),
      'usemenu_button' => array(
        'label'             => esc_html__( 'Use Menu Button', 'et_builder' ),
        'type'              => 'yes_no_button',
        'option_category'   => 'configuration',
        'options'           => array(
          'off' => esc_html__( 'No', 'et_builder' ),
          'on'  => esc_html__( 'Yes', 'et_builder' ),
        ),
        'default_on_front' => 'off',
        'toggle_slug'       => 'main_content',
        'description'       => esc_html__( 'Here, you can set whether you\'ll use menu button or not. You can show/hide menu by clicking Menu Button.', 'et_builder' ),
        'show_if' => array(
          'type'=> array('athlete', 'brand', 'media', 'event',),
        )
      ),
      'menubutton_id' => array(
        'label'           => esc_html__( 'ID of Menu Button', 'et_builder' ),
        'type'            => 'text',
        'option_category' => 'basic_option',
        'description'     => esc_html__( 'Input id of Menu Button here.', 'et_builder' ),
        'toggle_slug'     => 'main_content',
        'default'     => 'FilterMenuButton',
        'show_if' => array(
          'usemenu_button' => 'on',
        ),
      ),
      'menucolumn_id' => array(
        'label'           => esc_html__( 'ID of Column which is including Filter Menu', 'et_builder' ),
        'type'            => 'text',
        'option_category' => 'basic_option',
        'description'     => esc_html__( 'Input ID of Column which is including Filter Menu.', 'et_builder' ),
        'toggle_slug'     => 'main_content',
        'default'     => 'Mobile-column-sidebar',
        'show_if' => array(
          'usemenu_button' => 'on',
        ),
      ),
      'tablecolumn_id' => array(
        'label'           => esc_html__( 'ID of Column which is including HITs Table', 'et_builder' ),
        'type'            => 'text',
        'option_category' => 'basic_option',
        'description'     => esc_html__( 'Input ID of Column which is including HITs Table.', 'et_builder' ),
        'toggle_slug'     => 'main_content',
        'default'     => 'Mobile-column-table',
        'show_if' => array(
          'usemenu_button' => 'on',
        ),
      ),
      'menucolumn_width' => array(
        'label'           => esc_html__( 'Width of Column which is including Filter Menu', 'et_builder' ),
        'type'            => 'text',
        'option_category' => 'basic_option',
        'description'     => esc_html__( 'Input ID of Column which is including Filter Menu', 'et_builder' ),
        'toggle_slug'     => 'main_content',
        'default'     => '47%',
        'show_if' => array(
          'usemenu_button' => 'on',
        ),
      ),
	  'menubutton_fixposition' => array(
        'label'           => esc_html__( 'Menu Button is Left Fixed Position?', 'et_builder' ),
        'type'            => 'yes_no_button',
        'option_category' => 'basic_option',
		'options'           => array(
          'off' => esc_html__( 'No', 'et_builder' ),
          'on'  => esc_html__( 'Yes', 'et_builder' ),
        ),
        'description'     => esc_html__( 'Set if filter menu button is left fixed position or not.', 'et_builder' ),
        'toggle_slug'     => 'main_content',
        'default'     => 'off',
        'show_if' => array(
          'usemenu_button' => 'on',
        ),
      ),
      'open_img_src' => array(
        'type'               => 'upload',
        'option_category'    => 'basic_option',
        'upload_button_text' => esc_attr__( 'Upload an Open Menu image', 'et_builder' ),
        'choose_text'        => esc_attr__( 'Choose an Open Menu Image', 'et_builder' ),
        'update_text'        => esc_attr__( 'Set As Image', 'et_builder' ),
        'hide_metadata'      => true,
        'description'        => esc_html__( 'Select Open Image of Opened menu', 'et_builder'),
        'toggle_slug'        => 'main_content',
        'show_if' => array(
          'usemenu_button' => 'on',
        ),
      ),
      'close_img_src' => array(
        'type'               => 'upload',
        'option_category'    => 'basic_option',
        'upload_button_text' => esc_attr__( 'Upload an Close Menu image', 'et_builder' ),
        'choose_text'        => esc_attr__( 'Choose an Close Menu Image', 'et_builder' ),
        'update_text'        => esc_attr__( 'Set As Image', 'et_builder' ),
        'hide_metadata'      => true,
        'description'        => esc_html__( 'Select Close Image of Opened menu', 'et_builder'),
        'toggle_slug'        => 'main_content',
        'show_if' => array(
          'usemenu_button' => 'on',
        ),
      ),
      'menuimg_alt' => array(
        'label'           => esc_html__( 'Menu Image Alternative Text', 'et_builder' ),
        'type'            => 'text',
        'option_category' => 'basic_option',
        'description'     => esc_html__( 'This defines the HTML ALT text. A short description of your image can be placed here.', 'et_builder' ),
        'toggle_slug'     => 'main_content',
        'default'     => 'menu',
        'show_if' => array(
          'usemenu_button' => 'yes',
        ),
      ),
	 'use_instagram_for_emptyface' => array(
        'label'           => esc_html__( 'Use Instagram profile photo for empty photo field?', 'et_builder' ),
        'type'            => 'yes_no_button',
        'option_category' => 'basic_option',
		'options'           => array(
          'off' => esc_html__( 'No', 'et_builder' ),
          'on'  => esc_html__( 'Yes', 'et_builder' ),
        ),
        'description'     => esc_html__( 'If profile_img attribut is empty, will use Instagram profile photo for empty photo field.', 'et_builder' ),
        'toggle_slug'     => 'main_content',
        'default'     => 'on',
        'show_if' => array(
          'type'=> array('athlete', 'home_athlete'),
        )
      ),
	  'use_responsive_cloudimg_js' => array(
        'label'           => esc_html__( 'Will use js for responsive cloud image?', 'et_builder' ),
        'type'            => 'yes_no_button',
        'option_category' => 'basic_option',
		'options'           => array(
          'off' => esc_html__( 'No', 'et_builder' ),
          'on'  => esc_html__( 'Yes', 'et_builder' ),
        ),
        'description'     => esc_html__( 'Will use js for responsive cloud image. Will use ci-src instead of src in <img> tag.', 'et_builder' ),
        'toggle_slug'     => 'main_content',
        'default'     => 'on',
      ),
	   'cloudimg_responsive_ratio' => array(
        'label'           => esc_html__( 'Ratio for JS Responsive cloud image.', 'et_builder' ),
        'type'            => 'text',
        'option_category' => 'basic_option',
        'description'     => esc_html__( '"ratio" is recommended to prevent page layout jumping. The parameter is used to calculate image height to hold the image position while image is loading.', 'et_builder' ),
        'toggle_slug'     => 'main_content',
        'default'     => '1',
		'show_if' => array(
          'use_responsive_cloudimg_js'=> array('on'),
        )
      ),

	  'cloudimg_responsive_load' => array(
        'label'           => esc_html__( 'Will load JS Responsive CloudImage init function?', 'et_builder' ),
        'type'            => 'yes_no_button',
        'option_category' => 'basic_option',
		'options'           => array(
          'off' => esc_html__( 'No', 'et_builder' ),
          'on'  => esc_html__( 'Yes', 'et_builder' ),
        ),
        'description'     => esc_html__( 'Will load JS Responsive CloudImage init function? You can select this option on in last hit module of the page.', 'et_builder' ),
        'toggle_slug'     => 'main_content',
        'default'     => 'on',
		'show_if' => array(
          'use_responsive_cloudimg_js'=> array('on'),
        )
      ),
	  'cloudimg_responsive_delay' => array(
        'label'           => esc_html__( 'Call again after delay time for JS Responsive cloud image.', 'et_builder' ),
        'type'            => 'text',
        'option_category' => 'basic_option',
        'description'     => esc_html__( 'After this delay time, JS Responsive cloud image will pharse ci-src attribute. Mean if ci-src is setted after this delay time, it won\'t work as js responsive cloud image .', 'et_builder' ),
        'toggle_slug'     => 'main_content',
        'default'     => '0',
		'show_if' => array(
          'cloudimg_responsive_load'=> array('on'),
        )
      ),
	  'thumnail_container_id' => array(
        'label'           => esc_html__( 'ID of Thumnail Container', 'et_builder' ),
        'type'            => 'text',
        'option_category' => 'basic_option',
        'description'     => esc_html__( 'ID of Thumnail Container where the video or profile image of records  will be displayed. ex: #CSSID or .CSSClass or DIV', 'et_builder' ),
        'toggle_slug'     => 'main_content',
        'default'     => '',
      ),

   
	   'aspect_ratio' => array(
				'label'             => esc_html__( 'Aspect Ratio', 'et_builder' ),
				'type'              => 'select',
				'option_category'   => 'layout',
				'options'           => array(
				  '100'  => esc_html__( '1:1', 'et_builder' ),
				  '56.25'  => esc_html__( '16:9', 'et_builder' ),
				  '75'  => esc_html__( '4:3', 'et_builder' ),
				  '66.66'  => esc_html__( '3:2', 'et_builder' ),
				  '62.5'  => esc_html__( '8:5', 'et_builder' ),
				),
				
				'description'        => esc_html__( 'Select Aspect Ratio of Thumnail Contailer', 'et_builder' ),
				'toggle_slug'        => 'main_content',
				'default_on_front'   => '56.25',
				'show_if' => array(
				  'type'=> array('athlete', 'media'),
				),
		),
	   'video_player_type' => array(
				'label'             => esc_html__( 'Video Player Type', 'et_builder' ),
				'type'              => 'select',
				'option_category'   => 'layout',
				'options'           => array(
				  'common'  => esc_html__( 'Common URL', 'et_builder' ),
				  'youtube'  => esc_html__( 'YouTubue URL', 'et_builder' ),
                  'image'  => esc_html__( 'Image(Movie, Podcast)', 'et_builder' ),
				),
				'description'        => esc_html__( 'Select Type of Video Plyaer', 'et_builder' ),
				'toggle_slug'        => 'main_content',
				'default_on_front'   => 'youtube',
				'show_if' => array(
				  'type'=> array('home_highlight',
					'all'
					),
				),
		),
      'wall_speed' => array(
        'label'           => esc_html__( 'Speed of Wall Carousel', 'et_builder' ),
        'type'            => 'text',
        'option_category' => 'basic_option',
        'description'     => esc_html__( 'Input Speed of Wall Carousel(ex: 10). Smaller Value make speed up', 'et_builder' ),
        'number_validation' => true,
        'value_type'        => 'int',
        'value_min'         => 0,
        'toggle_slug'     => 'main_content',
        'default'     => '10',
		'show_if' => array(
          'type'=> array('home_wall',),
        )
      ),   
      'wall_item_count' => array(
        'label'           => esc_html__( 'Count of Wall Items', 'et_builder' ),
        'type'            => 'text',
        'option_category' => 'basic_option',
        'description'     => esc_html__( 'Input Count of Wall Items(ex: 10).', 'et_builder' ),
        'number_validation' => true,
        'value_type'        => 'int',
        'value_min'         => 0,
        'toggle_slug'     => 'main_content',
        'default'     => '10',
		'show_if' => array(
          'type'=> array('home_wall',),
        )
      ),

	  'show_section_label' => array(
        'label'           => esc_html__( 'Show Section Label', 'et_builder' ),
        'type'            => 'yes_no_button',
        'option_category' => 'basic_option',
		'options'           => array(
          'off' => esc_html__( 'No', 'et_builder' ),
          'on'  => esc_html__( 'Yes', 'et_builder' ),
        ),
        'description'     => esc_html__( 'Select yes if you want to show section label.', 'et_builder' ),
        'toggle_slug'     => 'main_content',
   	    'default'     => 'on',
        'show_if' => array(
          'type' => array('home_athlete', 'home_event', 'home_gear', 'home_highlight', 'all'),
        ),
	   ),

	
	  'section_label' => array(
        'label'           => esc_html__( 'Section Label', 'et_builder' ),
        'type'            => 'text',
        'option_category' => 'basic_option',
        'description'     => esc_html__( 'Type Section Label Here to display to the left side of section.', 'et_builder' ),
        'toggle_slug'     => 'main_content',
        'show_if' => array(
          'show_section_label' => array('on'),
        ),
	   ),
	   'section_url' => array(
        'label'           => esc_html__( 'Section URL', 'et_builder' ),
        'type'            => 'text',
        'option_category' => 'basic_option',
        'description'     => esc_html__( 'Type Section URL Here.', 'et_builder' ),
        'toggle_slug'     => 'main_content',
        'show_if' => array(
          'type' => array('home_athlete', 'home_event', 'home_gear'),
        ),
      ),
	  'div_id_for_empty_result' => array(
        'label'             => esc_html__( 'Id of DIV for empty result', 'et_builder' ),
        'type'            => 'text',
        'option_category' => 'basic_option',
        'toggle_slug'     => 'main_content',
        'description'       => esc_html__( 'Put id of DIV which will be shown when the result is empty.', 'et_builder' ),
      ),
 
    );

    return $fields;
  }
 

  public function get_html_with_js() {
	global $cloudimg_using, $cloudimg_url_prefix, $cloudimg_operation, $cloudimg_token, $cloudimg_width, $cloudimg_height, $cloudimg_filter;
    $instantsearch = $this->props['instantsearch'];
    $container_id = $this->props['container_id'];
    $leftfixedcols = $this->props['leftfixedcols'];
    $rightfixedcols = $this->props['rightfixedcols'];
    $HTB_id = "HitTable_".$container_id; /* id of Hit Table */
    $type = $this->props['type'];
    $usemenu_button = $this->props['usemenu_button'];
    $menubutton_id = $this->props['menubutton_id'];
	$menubutton_fixposition = $this->props['menubutton_fixposition'];
    $menucolumn_id = $this->props['menucolumn_id'];
    $tablecolumn_id = $this->props['tablecolumn_id'];
    $menucolumn_width = $this->props['menucolumn_width'];
    $open_img_src = $this->props['open_img_src'];
    $close_img_src = $this->props['close_img_src'];
    $menuimg_alt = $this->props['menuimg_alt'];
	$wall_speed = $this->props['wall_speed'];
	$wall_item_count = $this->props['wall_item_count'];
	$show_section_label = $this->props['show_section_label'];
	$section_label = $this->props['section_label'];
	$section_url = $this->props['section_url'];
	$use_instagram_for_emptyface = $this->props['use_instagram_for_emptyface'];
    $hit_widget = "";
	$use_responsive_cloudimg_js = $this->props['use_responsive_cloudimg_js'];
	$cloudimg_responsive_ratio = $this->props['cloudimg_responsive_ratio'];
	$cloudimg_responsive_delay = $this->props['cloudimg_responsive_delay'];
	$cloudimg_responsive_load = $this->props['cloudimg_responsive_load'];
	$thumnail_container_id = $this->props['thumnail_container_id'];
	$aspect_ratio = $this->props['aspect_ratio'];
	$cur_page_url = $_SERVER['REQUEST_URI'];
	$video_player_type = $this->props['video_player_type'];
	$div_id_for_empty_result = $this->props['div_id_for_empty_result'];
	$menu_button_js ='
      jQuery.fn.clickToggle = function(a,b) {
        function cb(){ [b,a][this._tog^=1].call(this); }
        return this.on("click", cb);
      };

      $("#'.$menubutton_id.'").clickToggle(
        function() {
          $("#'.$menucolumn_id.'").show(1000);
          $("#'.$tablecolumn_id.'").attr("style","width:'.$menucolumn_width.' !important");
          $("#'.$menubutton_id.' img").attr({"src":"'.esc_html__($close_img_src).'","class":"filter_menu_img close"});
          $("#'.$menubutton_id.'").attr({"class":"filter_menu_button close"});
          '.($menubutton_fixposition == "on" ?
			'$("#'.$menubutton_id.'").detach().prependTo($("#'.$menucolumn_id.'"));
		  
		  ' : '')
        .'
        },
        function() {
          $("#'.$menucolumn_id.'").hide(1000);
          $("#'.$tablecolumn_id.'").attr({"style":"width:100% !important"});
          $("#'.$menubutton_id.' img").attr({"src":"'.esc_html__($open_img_src).'","class":"filter_menu_img open"});
          $("#'.$menubutton_id.'").attr({"class":"filter_menu_button open"});
		  '.($menubutton_fixposition == "on" ?
			'$("#'.$menubutton_id.'").detach().prependTo($("#'.$tablecolumn_id.'"));' : '')
		  .'
        }
      );
      $("#'.$menubutton_id.'").click(function(){
        $("#'.$menubutton_id.'").toggle();
	    $("#'.$menucolumn_id.' #'.$menubutton_id.'").attr({"style":"display:grid;"});
		$("#'.$tablecolumn_id.' #'.$menubutton_id.'").attr({"style":"display:grid ;"});
      });';

    $menu_button_html = "<div id=\"".$menubutton_id."\" class=\"filter_menu_button first\" >".
              "<img src=\"".esc_attr( $open_img_src)."\" class=\"filter_menu_img open\" alt=\"".esc_attr($menuimg_alt)."\"></div>";
    $css = '
      <style>
		.ci-image-wrapper
		{
			background:transparent !important;
		}
        
		/*[BEGIN-ADD][STG:Bojana 4/20/2019] remove filter, transfrom, trasition of cloud image*/
		img {
		 filter: none !important;
		 transform: none !important;
		 transition: none !important;
		}
		/*[END-ADD][STG:Bojana 4/20/2019] remove filter, transfrom, trasition of cloud image*/
		'.($type === "home_highlight" || $type === "home_athlete" || $type === "home_event" || $type === "home_wall" || $type === "home_gear" 
			|| $type === "athlete" || $type === "event" || $type === "brand" || $type === "media" ? '
		 img {
		 -webkit-filter: grayscale(100%) !important;  /* Safari 6.0 - 9.0 */
		 filter: grayscale(100%) !important;
		}
		 img:hover {
		 -webkit-filter: grayscale(0%) !important; /* Safari 6.0 - 9.0 */
		 filter: grayscale(0%) !important;
		}
		img.favor_img
		{
		  -webkit-filter: grayscale(100%) !important; /* Safari 6.0 - 9.0 */
		   filter: grayscale(100%) !important;  
		}

		img.favor,
		img.favor_img.favor
		{
		   -webkit-filter: grayscale(0%) !important;
		   filter: grayscale(0%) !important;  
		}

		 .ci-image-wrapper {
				filter: grayscale(1);
		}
		.ci-image-wrapper:hover {
			filter: grayscale(0);
		}
		.deeds_partner .ci-image-wrapper,
		.deeds_partner .ci-image-wrapper img {
			filter: grayscale(0) ;
		}
         /*[END-ADD][STG:Bojana 4/19/2019] GrayScale Image(https://zenkit.com/collections/1vxX6qgtB-L/views/K5jgNXx4VM/entries/JxEQKk9dh)*/		/*[BEGIN-ADD][STG:Bojana 4/19/2019] Make sport blue when hover on profile image. (https://zenkit.com/collections/1vxX6qgtB-L/views/K5jgNXx4VM/entries/mqDMLEhLO)*/
		.flex-itemanddetail:hover * ,
		.flex-item:hover * {
			filter: grayscale(0) !important;
		}
		/*[END-ADD][STG:Bojana 4/19/2019] Make sport blue when hover on profile image. (https://zenkit.com/collections/1vxX6qgtB-L/views/K5jgNXx4VM/entries/mqDMLEhLO)*/
		':'').'
		/*[BEGIN-ADD][STG:Bojana 4/30/2019] add detail information on rollover (https://zenkit.com/collections/1vxX6qgtB-L/views/K5jgNXx4VM/entries/zW_j7NDR3) */
		.flex-itemanddetail
		{
			margin:0.5em;
		}
		.flex-itemanddetail .flex-item:hover {
			outline: 3px solid #d73f26;
		}

		.flex-detail
		{
		 display:none;
		}
		.flex-detail:hover
		{
			/*display:block;*/
			display:none;
		}
		.flex-item:hover ~ .flex-detail
		{
			/*display:block;*/
			display:none;
		}
	    .flex-detail {
			width: 16em;
			padding-left:1em;
			padding-right:1em;
		}
		.flex-container .flex-detail .flex-caption {
			white-space:wrap;
		}
		.flex-container
	    {
			display:flex;
		}
		/*[END-ADD][STG:Bojana 4/30/2019] add detail information on rollover (https://zenkit.com/collections/1vxX6qgtB-L/views/K5jgNXx4VM/entries/zW_j7NDR3) */
		.flex-itemanddetail {
			max-width:calc(33% - 1em);
		}
		.flex-item,
		.flex-container .flex-photo  {
				max-width: 100%;
				max-height: 100%;
		}
		'
        .($leftfixedcols + $rightfixedcols > 0 ? '
        /* Ensure that the demo table scrolls */
        
        div.dataTables_wrapper {
           margin: 0 auto;
          touch-action: none;
        }': '')
        .($usemenu_button == 'on' ?'
      
        div#'.$menubutton_id.'{
          padding: 15px;
          margin-bottom: -71px;
          background-image: linear-gradient(180deg,#d63e23 0%,#ff6c48 100%);
          max-width: 52px;
          margin-left: 0;
          z-index:2;
          position: relative;
        }
		
		'
        : '')
		.(1 || $type === "home_highlight" || $type === "home_athlete" || $type === "home_event" || $type === "home_wall" || $type === "home_gear" ? 
		  '#'.$container_id.' .label,
		  .HITSCONTAINER .label
		{
   		      
				font-size: 18px;
			  height: 0px;
		  }

		  #'.$container_id.' .label .content,
		  .HITSCONTAINER .label  .content{
			  height: 142px;
			  width: 40px;
			  text-align: center;
			  padding-right: 10px;
			  font-weight:bold;
			  writing-mode: vertical-rl; 
			  text-orientation: mixed;
			  transform: scale(-1); 
			  color: white;
		  }'
		  : '')
		

		.($type === "home_highlight" || $type==="all"?'
 			#'.$container_id.' .label .content, 
 			#'.$container_id.'_home_highlight .label .content
			.hits_home_media .label .content,
			{
			  height: 180px;
			 
			}
			#'.$container_id.' .flex-container,
			.hits_home_media .flex-container,
			#'.$container_id.'_home_highlight .flex-container
			{
			'.($show_section_label == "on"?
   			  'margin-left:40px;':'').'
			  display: flex;
			  overflow: auto;
			  align-content: center;
			  background: white;
			}
          	#'.$container_id.' .flex-container .flex-item,
			.hits_home_media .flex-container .flex-item,
          	#'.$container_id.'_home_highlight .flex-container .flex-item		
			{
			  flex-grow: 0;
			  flex-shrink: 0;
			  height: auto;
			  padding: 8px;
			  margin:8px;
		      box-shadow: 0 0 10px rgba(54, 54, 54, 0.35);
			  position: relative;
			}
          	#'.$container_id.' .flex-container .flex-video,
			.hits_home_media  .flex-container .flex-video,
          	#'.$container_id.'_home_highlight .flex-container .flex-video
			{
			  height: 200px;
			}
			#'.$container_id.' .flex-favor,
			.hits_home_media  .flex-favor,
			#'.$container_id.'_home_highlight .flex-favor	
			{
				/*position: absolute;*/
				/*width: 20%;*/
				top: 1em;
				left: 1em;
				float: left;
			}
			#'.$container_id.' .flex-caption,
			.hits_home_media  .flex-caption,
			#'.$container_id.'_home_highlight .flex-caption	
			{
				max-width:40ch;
				text-overflow: ellipsis;
			}
        '
        : '')
		.($type==="media"?'
			#'.$container_id.' .flex-container,
			#'.$container_id.'_media .flex-container 
			{
			  display: flex;
			  overflow: auto;
			  align-content: center;
			  background: white;
			  flex-wrap:wrap;
			  justify-content:left;
			}
	
          	#'.$container_id.' .flex-container .flex-item,
			#'.$container_id.'_media .flex-container .flex-item{
			  flex-grow: 0;
			  flex-shrink: 0;
			  height: auto;
			  padding: 0.5em;
		      box-shadow: 0 0 10px rgba(54, 54, 54, 0.35);
			}
			#'.$container_id.' .ci-image-wrapper,
			#'.$container_id.'_media .ci-image-wrapper
			{
				height: 11em;
				align-items: center;
				display: flex !important;
			}

			#'.$container_id.' .flex-container .flex-item,
			#'.$container_id.'_media .flex-container .flex-item
			{
				/*max-height:12em;*/
				/*width:16em;*/ min-width: calc(33% - 1em);
				background:white;
			    position: relative;
				max-width: 100%;
			}
			 #'.$container_id.' .flex-container .flex-photo-row,
			 #'.$container_id.'_media .flex-container .flex-photo-row
            {
                filter:grayscale(0%);
            }
			#'.$container_id.' .flex-container .flex-photo,
			#'.$container_id.'_media .flex-container .flex-photo
			{
				width:auto;
				max-width: 100%;
				max-height: 100%;
				margin:auto;
				background:white;
			}
			#'.$container_id.' .flex-favor,
			#'.$container_id.'_media .flex-favor
			{
				/*position: absolute;
				width: 20%;
				top: 1em;
				left: 1em;*/
				float:left;
			}
			#'.$container_id.' .flex-itemanddetail,
			#'.$container_id.'_media .flex-itemanddetail
			{
				margin:0.5em;
				flex-direction: column;
			    max-width:calc(33% - 1em);
			}
			#'.$container_id.' .flex-detail,
			#'.$container_id.'_media .flex-detail
			{
				width: 16em;
				padding-left:1em;
				padding-right:1em;
			}
			#'.$container_id.' .flex-caption,
			#'.$container_id.'_media .flex-caption
			{
			    display: flex;
				flex-wrap: wrap;
				/*width: 15em;*/
				max-width:calc(100% - 3em);
				text-overflow:ellipsis;
				white-space:nowrap;
			    overflow: hidden;
				margin-left:0.5em;
				/*left:1em;*/
			}
			#'.$container_id.' .sport_icon,
			#'.$container_id.'_media .sport_icon
			{
			  float: left;
			  width: 10%;
			}
			#'.$container_id.' .sport_name,
			#'.$container_id.'_media .sport_name			
			{
			  margin-left: 1em;
			}
			#'.$container_id.' .flex-container .flex-detail .flex-caption,
			#'.$container_id.'_media .flex-container .flex-detail .flex-caption			
			{
				white-space:pre-wrap;
			}

			#'.$container_id.' button.simplefavorite-button,
			#'.$container_id.'_media  button.simplefavorite-button
			{
				bottom:auto;
				left:0.5em;
				margin-right: 0.5em;
			}

        '
        : '')
		.($type === "media_top"?'
			#'.$container_id.' .flex-container ,
			#'.$container_id.'_media_top .flex-container 
			{
			  display: flex;
			  overflow: auto;
			  align-content: center;
			  background: white;
			}
			#'.$container_id.' .flex-itemanddetail, 
			#'.$container_id.'_media_top .flex-itemanddetail
			{
				display: flex;
				align-items: center;
  			    margin:1em;
				/*flex-direction:column;*/
			}
          	#'.$container_id.' .flex-container .flex-item ,
			#'.$container_id.'_media_top .flex-container .flex-item 
			{
			  flex-grow: 0;
			  flex-shrink: 0;
			  height: 30vh;
			  /*width: 50vh;*/
			  min-width: 30vh;
			  padding: 1em;
			  box-shadow: 0 0 1em rgba(54, 54, 54, 0.35);
			}
			#'.$container_id.' .flex-container .flex-item.highlight ,
			#'.$container_id.'_media_top .flex-container .flex-item.highlight 
			{
			  min-width: 50vh;
			}
			#'.$container_id.' .flex-detail,
			#'.$container_id.'_media_top .flex-detail			
			{
				width: 16em;
				padding-left:1em;
				padding-right:1em;
			}
			#'.$container_id.' .flex-caption ,
			#'.$container_id.'_media_top .flex-caption 			
			{
			    display: flex;
				flex-wrap: wrap;
				width: 15em;
			}
			#'.$container_id.' .sport_icon, 
			#'.$container_id.'_media_top .sport_icon			
			{
			  float: left;
			  width: 10%;
			}
			#'.$container_id.' .sport_name, 
			#'.$container_id.'_media_top .sport_name			
			{
			  margin-left: 1em;
			}
			#'.$container_id.' .flex-container .flex-thumnail, 
			#'.$container_id.'_media_top .flex-container .flex-thumnail			
			{
				width:auto;
				margin:auto;
				height:calc(30vh - 2em); /*2em=padding*2 */
				transform:none;
				filter:grayscale(100%);
			}
			.flex-container .flex-detail .flex-caption,
			.flex-container .flex-detail .flex-caption {
				white-space:wrap;
			}
			#'.$container_id.' .flex-container img.flex-thumnail,
			#'.$container_id.'_media_top .flex-container img.flex-thumnail	 
			{
			    max-width: none;
			
			}
        '
        : '')
        .($type === "home_athlete" || $type=="all"?'
		  #'.$container_id.' .label .content,
		  #'.$container_id.'_home_ambassador .label .content
		  {
			  height: 240px;
		  }
          #'.$container_id.' .flex-container,
          #'.$container_id.'_home_ambassador .flex-container
          {
			margin-left:40px;
            display:flex;
            overflow: auto;
            align-content: center;
          }
          #'.$container_id.' .flex-container .flex-item,
          #'.$container_id.'_home_ambassador .flex-container .flex-item
          {
            flex-grow: 0;
            flex-shrink: 0;
            flex-basis: 28%;
            height: auto;
			max-width:none;

            padding: 10px;
          }
          #'.$container_id.' .flex-container .flex-icon,
          #'.$container_id.'_home_ambassador .flex-container .flex-icon
          {

            /*float:left; */
            width:20px;
          }
          #'.$container_id.' .flex-container .flex-caption,
          #'.$container_id.'_home_ambassador .flex-container .flex-caption
          {
            color:white;
			display:block;
            /*word-spacing: 100vw;*/
          }
          #'.$container_id.' .flex-container .flex-caption .firstname,
          #'.$container_id.'_home_ambassador .flex-container .flex-caption .firstname,
		  #'.$container_id.' .flex-container .flex-caption .lastname,
          #'.$container_id.'_home_ambassador .flex-container .flex-caption .lastname
          {
			white-space:nowrap;
          }
          #'.$container_id.' .flex-container .flex-photo-row,
          #'.$container_id.'_home_ambassador .flex-container .flex-photo-row
          {
            background: white;
            position: relative;
          }
          #'.$container_id.' .flex-container .flex-photo,
          #'.$container_id.'_home_ambassador .flex-container .flex-photo
          {
            width:100%;
            /*height:150px;*/
			max-height:100%;
		    background:white;
          }
          #'.$container_id.' .flex-container .flex-favor,
          #'.$container_id.'_home_ambassador .flex-container .flex-favor
          {
            /* position: absolute;
             width: 20%;
             top: 7%;
             left: 7%;*/
          }
          #'.$container_id.' .flex-container .flex-desc,
          #'.$container_id.'_home_ambassador .flex-container .flex-desc
          {
            background: white;
          }
          #'.$container_id.' .flex-container .flex-desc1,
          #'.$container_id.'_home_ambassador .flex-container .flex-desc1
          {
            width:100%;
			display:none;
          }
          #'.$container_id.' .flex-container .flex-desc2,
          #'.$container_id.'_home_ambassador .flex-container .flex-desc2
          {
            Width 100%; 
            color:red;
            height: 60px;
            overflow-y: hide;
            word-spacing: unset;
			display:none !important;
          }
        '
        : '')
		.($type === "athlete" ?'
		  #'.$container_id.' .label .content {
			  height: 240px;
		  }
          #'.$container_id.' .flex-container
          {
	        display:flex;
            overflow: auto;
            align-content: center;
			background: rgba(235,235,235,1);
			flex-wrap:wrap;
			/*justify-content:center;*/
          }
		  #'.$container_id.' .flex-itemanddetail {
			margin:0.5em;
			flex-direction: column;
		    max-width:calc(33% - 1em);
		  }
          #'.$container_id.' .flex-container .flex-item
          {
            flex-grow: 0;
            flex-shrink: 0;
            flex-basis: 28%;
            height: auto;
            padding: 10px;
			background:white;
			padding: 7px;
			/*margin: 10px;*/
			/*min-width:115px;*/
			max-width:145px;
			box-shadow: 0 0 10px rgba(54, 54, 54, 0.35);

		  }
		 #'.$container_id.'   .top_row
	      {
			  display:flex;
		  }
		  #'.$container_id.' .flex-container .flex-item:hover
		  {
			    outline: 3px solid #d73f26;
		  }
          #'.$container_id.' .flex-container .flex-icon
          {
		    padding-top: 5px;
			margin: 5px;
     	    width: auto !important;
			height: 1.5em;
          }
          #'.$container_id.' .flex-container .flex-caption
          {
            color: rgba(54,54,54,1);
            word-spacing: 100vw;
		    width: calc(100% - 35px);
		    padding-top: 5px;
			font-family: "Josefin Sans",sans-serif!important;
			font-size: 9pt;
			font-weight: bold;
			text-align: left!important;
			line-height: normal;
			padding-bottom: 10px;
			display: block;
			/*word-break: break-word;*/
			text-overflow: ellipsis;
			max-height: 36px;
			overflow: hidden;
          }
          #'.$container_id.' .flex-container .flex-caption .firstname,
		  #'.$container_id.' .flex-container .flex-caption .lastname
          {
			white-space:nowrap;
          }
          #'.$container_id.' .flex-container .flex-photo-row
          {
            background: white;
            position: relative;
          }
          #'.$container_id.' .flex-container .flex-photo
          {
            width:100%;
            /*height:150px;*/
			max-height:100%;
			min-height:100%;
		    background:white;
          }
          #'.$container_id.' .flex-container .flex-favor
          {
             /*position: absolute;
             width: 20%;
             top: 7%;
             left: 7%;*/
			 z-index: 1;
          }
          #'.$container_id.' .flex-container .flex-desc
          {
            background: white;
          }
          #'.$container_id.' .flex-container .flex-desc1
          {
            width:100%;
			display:none;
          }
          #'.$container_id.' .flex-container .flex-desc2
          {
            Width 100%; 
            color:red;
            height: 60px;
            overflow-y: hide;
            word-spacing: unset;
			display:none !important;
          }
		  #'.$container_id.' button.simplefavorite-button {
			z-index: 3;
			padding: unset;
			margin-top: 0.5em;
			position: unset;
			margin-right: 0.5em;
		  }
        '
        : '')
		.($type === "home_event" || $type=="all"?'
			#'.$container_id.' .label .content, 
			#'.$container_id.'_home_event .label .content 			
			{
			}
			#'.$container_id.' .flex-container,
			#'.$container_id.'_home_event .flex-container 
			{
   			  margin-left:40px;
			  display: flex;
			  overflow: auto;
			  align-content: center;
			  
			}
			#'.$container_id.' .flex-container .flex-item,
			#'.$container_id.'_home_event .flex-container .flex-item 
			{
			  flex-grow: 0;
			  flex-shrink: 0;
			  flex-basis: 34%;
			  height: auto;

			  padding: 10px;
			}
			#'.$container_id.' .flex-container .flex-icon ,
			#'.$container_id.'_home_event .flex-container .flex-icon
			 /* float: left;*/
		      width: 2em;
			  margin:10px;
			}
			#'.$container_id.' .flex-container .flex-caption, 
			#'.$container_id.'_home_event .flex-container .flex-caption 			
			{
			  color: white;
			}
			#'.$container_id.' .flex-container .flex-date,
			#'.$container_id.'_home_event .flex-container .flex-date
			{
			  color: white;
			}
			#'.$container_id.' .flex-container .flex-photo-row, 
			#'.$container_id.'_home_event .flex-container .flex-photo-row
			{
			  position: relative;
			}
			#'.$container_id.' .flex-container .flex-photo,
			#'.$container_id.'_home_event .flex-container .flex-photo
			  width: 100%;
			  height: 150px;
			}
			#'.$container_id.' .flex-container .flex-favor, 
			#'.$container_id.'_home_event .flex-container .flex-favor 
			{
			  /*position: absolute;
			  width: 20%;
			  top: 7%;
			  left: 7%;*/
			}

        '
        : '')
		.($type === "event"?'
			#'.$container_id.' .flex-container {
			  display: flex;
			  overflow: auto;
			  align-content: center;
			  background: rgba(235,235,235,1);
			  flex-wrap:wrap;
			  
			}

			#'.$container_id.' .flex-container .flex-item {
			  flex-grow: 0;
			  flex-shrink: 0;
			  height: auto;
			  padding: 10px;
			  background:white;
			  width:270px;
			  box-shadow: 0 0 10px rgba(54, 54, 54, 0.35);
			}
			
			#'.$container_id.' .flex-container .flex-icon {
			  /*float: left;*/
		      width: 2em;
			  margin:10px;
 	
			}
			#'.$container_id.' .flex-container .flex-caption {
			    white-space: nowrap;
				overflow: hidden;
				text-overflow: ellipsis;
				font-family: "Josefin Sans",sans-serif!important;
				font-size: 9pt;
				font-weight: bold;
				padding-bottom: 0px;
				filter: grayscale(1);
			}
			#'.$container_id.' .flex-container .flex-date {
				white-space: nowrap;
				overflow: hidden;
				text-overflow: ellipsis;
				font-family: mr-eaves-xl-modern,sans-serif!important;
				filter: grayscale(1);
			}

			#'.$container_id.' .ci-image-wrapper {
				height: 150px;
				align-items: center;
				display: flex !important;
			}

			#'.$container_id.' .flex-container .flex-photo-row {
			  background: white;
			  position: relative;
			}
			#'.$container_id.' .flex-container .flex-photo {
			  width: auto;
			  margin:auto;
			}
			#'.$container_id.'  .bottom-row
			{
				display:flex;
				flex-flow:row;
			}
			#'.$container_id.' .flex-container .flex-favor {
			  /*position: absolute;
			  width: 20%;
			  top: 7%;
			  left: 7%;*/
			}
			#'.$container_id.' .flex-caption-date
			{
				
			}
			#'.$container_id.' button.simplefavorite-button
			{
				bottom:auto;
				margin-top: 0.5em;
				position: unset;
				margin-right: 0.5em;
				/*float:left;*/
			}
			#'.$container_id.' .sport_icon {
			  float: left;
			  width: 10%;
			  filter: grayscale(1);
			}
			#'.$container_id.' .sport_name {
			  margin-left: 1em;
			}
			#'.$container_id.' .flex-container .flex-detail .flex-caption {
				white-space:pre-wrap;
				
			}
	
        '
        : '')
		.($type === "home_gear" || $type=="all"?'
			#'.$container_id.' .label .content,
			.home_hits_brandsgear .label .content,
			#'.$container_id.'_home_gear .label .content			
			{
			  height: 209px;
			}
			#'.$container_id.' .clearfix,
			.home_hits_brandsgear .label .content,
			#'.$container_id.'_home_gear .clearfix 
			{
			  overflow: auto;
			}
			#'.$container_id.' .clearfix::after,
			.home_hits_brandsgear  .clearfix::after,
			#'.$container_id.'_home_gear .clearfix::after 
			{
			  content: "";
			  clear: both;
			  display: table;
			}
			#'.$container_id.' .flex-container,
			.home_hits_brandsgear .flex-container,
			#'.$container_id.'_home_gear .flex-container 
			{
			  margin-left:40px;
			  display: flex;
			  overflow: auto;
			  align-content: center;
			  background: white;
			}
			#'.$container_id.' .flex-container .flex-item,
			.home_hits_brandsgear .flex-item,
			#'.$container_id.'_home_gear .flex-container .flex-item 
			{
			  flex-grow: 0;
			  flex-shrink: 0;
			  flex-basis: 26%;
			  height: auto;

			  padding: 10px;
			}
			#'.$container_id.' .flex-top,
			.home_hits_brandsgear .flex-top,
			#'.$container_id.'_home_gear .flex-top
			{
			  height: 65px;
			  vertical-align: middle;
			}
			#'.$container_id.' .flex-container .flex-favor,
			.home_hits_brandsgear .flex-top,
			#'.$container_id.'_home_gear .flex-container .flex-favor 
			{
			  width: 25px;
			  /*float: left;*/
			  z-index: 1;
			}
			#'.$container_id.' .flex-container .flex-caption,
			.home_hits_brandsgear .flex-container .flex-caption,
			#'.$container_id.'_home_gear .flex-container .flex-caption			
			{
			  color: red;
			}

			#'.$container_id.' .flex-container .flex-photo-row,
			.home_hits_brandsgear .flex-container .flex-photo-row,
			#'.$container_id.'_home_gear .flex-container .flex-photo-row
			{
			  background: white;
			}
			#'.$container_id.' .flex-container .flex-photo,
			.home_hits_brandsgear .flex-container .flex-photo, 
			#'.$container_id.'_home_gear .flex-container .flex-photo 
			{
			  width: 100%;

			}
			#'.$container_id.' .flex-container .flex-photo.empty_img,
			.home_hits_brandsgear .flex-container .flex-photo.empty_img,
			#'.$container_id.'_home_gear .flex-container .flex-photo.empty_img
			{
				height: 150px;
			}
			#'.$container_id.' .ci-image-wrapper {
				height: 100px;
				align-items: center;
				display: flex !important;
			}

			#'.$container_id.' .flex-container .flex-icon,
			.home_hits_brandsgear .flex-container .flex-icon,
			#'.$container_id.'_home_gear .flex-container .flex-icon 			
			{
			  float: left;
			  width: 35px;
			}

			#'.$container_id.' .flex-container .flex-athlete, 
			.home_hits_brandsgear .flex-container .flex-athlete, 
			#'.$container_id.'_home_gear .flex-container .flex-athlete			
			{
			  background: white;
			}
			#'.$container_id.' .flex-container .flex-sport, 
			.home_hits_brandsgear .flex-container .flex-sport,
			#'.$container_id.'_home_gear .flex-container .flex-sport 			
			{
			  color: red;
			}


        '
        : '')
		.($type === "brand"?'
			
			#'.$container_id.' .clearfix {
			  overflow: auto;
			}
			#'.$container_id.' .clearfix::after {
			  content: "";
			  clear: both;
			  display: table;
			}
			#'.$container_id.' .flex-container {
			  display: flex;
			  overflow: auto;
			  align-content: center;
			  background: white;
			  flex-wrap:wrap;
			  /*justify-content:center;*/
			}
			#'.$container_id.' .flex-container .flex-item {
			  flex-grow: 0;
			  flex-shrink: 0;
			  flex-basis: 26%;
			  height: auto;
			  max-width:145px;
			  /*min-width:145px;*/
			  width:145px;
			  padding: 7px;
			  /*margin: 10px!important;*/
			  box-shadow: 0 0 10px rgba(54,54,54,0.35);
			  max-width: 100%;
			}
			
			#'.$container_id.' .flex-container .flex-itemanddetail .flex-item:hover
			{
			    outline: 3px solid #d73f26;
			}
			#'.$container_id.' .flex-top {
				color: #052441;
				font-family: "Josefin Sans",sans-serif!important;
				line-height: 25px;
				height: auto;
				vertical-align: middle;
				display: flex;
				/*flex-flow: column-reverse;*/
				overflow: unset;
				position: relative;
				top: 5px;
				z-index: 3;
			}
			#'.$container_id.' .flex-container .flex-favor {
			  width: 25px;
			  z-index: 1;
			  position: relative;
			}
			#'.$container_id.' .flex-container .flex-caption {
				position: relative;
				font-family: "Josefin Sans",sans-serif!important;
				font-size: 9pt;
				font-weight: bold;
				text-align: left!important;
				display: block;
				line-height: normal;
				align-self: center;
				text-transform: capitalize;
				white-space: nowrap;
				overflow: hidden;
				text-overflow: ellipsis;
			    margin-top: 0px;
			    width: 100%;
			    max-width: 140px;
				margin-left: 1em;
			}
			#'.$container_id.' .ci-image-wrapper {
				  height: 100px;
				  align-items: center;
				  display: flex;
			}
			#'.$container_id.' .flex-container .flex-photo-row {
			  background: white;
			  position: relative;
			  z-index: 1;
			}
			#'.$container_id.' .flex-container .flex-photo {
			  width: auto;
			  margin:auto;
			
			}

			#'.$container_id.' .flex-container .flex-icon {
			  float: left;
			  width: 20px;
			  margin: 5px;
			  padding-top: 5px;
			}

			#'.$container_id.' .flex-container .flex-athlete {
				background: white;
				font-family: mr-eaves-xl-modern,sans-serif!important;
				font-size: 9pt;
				white-space: nowrap;
				overflow: hidden;
				text-overflow: ellipsis;
				height: 20px;
				margin-top: 10px;
				margin-left: 5px;
			}
			#'.$container_id.' .flex-container .flex-sport {
			  color: red;
			  display:none;
			}

			#'.$container_id.' button.simplefavorite-button {
				margin-top: 0px;
				width: min-content;
				margin-right: 10px;
				position: relative !important;
				bottom: 0px;
				z-index: 3;
				right: 0px;
				top: 0.3em;
				width: 3em;
			}

        '
        : '')
		.($type === "home_wall"?'
			@keyframes scroll {
			  0% {
				transform: translateX(0);
			  }
			}
			#'.$container_id.' .slider {
			  left:40px;
			  height: 84px;
			  margin: auto;
			  overflow: hidden;
			  position: relative;
			}
			#'.$container_id.' .slider .slide-track {
			  animation: scroll '.$wall_speed.'s linear infinite;
			  display: flex;
			}
			#'.$container_id.' .slider .slide-track:active {
			  -webkit-animation-play-state: paused;
			  -moz-animation-play-state: paused;
			  -o-animation-play-state: paused;
			  animation-play-state: paused;
			  cursor: pointer;
			}
			#'.$container_id.' .slider .slide {
			  width: 400px;
			  padding: 12px;
			  padding-right:0px;
			  display: flex;
			}
			#'.$container_id.' .slider .slide-img_a {
			  height: 60px;
			  width: 20%;
			}
			#'.$container_id.' .slider .slide-img {
			  height: 60px;
			  width: auto;
			}
			#'.$container_id.' .slider .content {
			  white-space: nowrap;
			  height: 60px;
			  min-width: calc(100% - 72px);
			  padding: 10px;
			}
			#'.$container_id.' .slider .content .content-name {
			  font-weight: bold;
			}
			#'.$container_id.' .slider .content .content-action {
			  color: red;
			}
			#'.$container_id.' .slider .content .content-message {
			  color: red;
			  font-weight: bold;
			}

        '
        : '')
		.($type === "mrc_hospital_search"?'
		  
        '
        : '')
      .($type === "mrc_dtc_search"?'
			#'.$container_id.' .flex-container {
			  display: flex;
			  overflow: auto;
			  align-content: center;
				background: rgba(235,235,235,1);			  flex-wrap:wrap;
			  
			}

			#'.$container_id.' .flex-container .flex-item {
			  flex-grow: 0;
			  flex-shrink: 0;
			  height: auto;
			  padding: 10px;
			  background:white;
			  width:270px;
			  box-shadow: 0 0 10px rgba(54, 54, 54, 0.35);
			}
			

			#'.$container_id.' .flex-container .flex-caption {
			    white-space: nowrap;
				overflow: hidden;
				text-overflow: ellipsis;
				font-family: "Josefin Sans",sans-serif!important;
				font-size: 9pt;
				font-weight: bold;
				padding-bottom: 0px;

			}


			#'.$container_id.' .ci-image-wrapper {
				height: 150px;
				align-items: center;
				display: flex !important;
			}

			#'.$container_id.' .flex-container .flex-photo-row {
			  background: white;
			  position: relative;
			}
			#'.$container_id.' .flex-container .flex-photo {
			  width: 100%;
			height: 100%;
			  margin:auto;
			}
	
			
			#'.$container_id.' .flex-container .flex-detail .flex-caption {
				white-space:pre-wrap;
				
			}
			#'.$container_id.'  .flex-profile-img {
				
			}
        '
        : '')
      .'</style>';
		switch ($type) {
		
		  case "home_athlete":
			$hit_widget = (".addWidget({
            render: function(data) {
				
				var \$hits = [];
				var is_empty = 1;
				/*var read_hit_item_count = 0;*/
				\$hits.push('<div class=\"label\">');
				".(strlen($section_url) > 0 ? "\$hits.push('<a href=\"".$section_url."\">');" : "")
				. ($show_section_label == "on" ?
					"\$hits.push('<div class=\"content\">".($section_label ? $section_label: 'Ambassador')."</div>');"
				:"")
				.(strlen($section_url) > 0 ? "\$hits.push('</a>');" : "")
				."
				\$hits.push('</div>');
				\$hits.push('<div class=\"flex-container".($use_responsive_cloudimg_js == "on" ? " cloudimg_resp_js" :"")."\">');
				
 
				var hit_item = document.querySelector('#".$container_id." .flex-item');
				// width and height in pixels, including padding and border
				// Corresponds to jQuery outerWidth(), outerHeight()
				/*var view_hit_item_count = 20;
				if (hit_item && hit_item.offsetWidth)
				{
					view_hit_item_count = Math.round(browser_width / hit_item.offsetWidth);
					
				}
				console.log('view hit itemcount', view_hit_item_count);*/

				data.results.hits.some(function(hit, index, array) {

				  is_empty = 0;
				  /*read_hit_item_count ++;*/
				  /*if (hit.profile_img)*/
				     set_home_ambassador_hit".$container_id."(hit, \$hits, user_id,".$instantsearch.".indexName);
				});
				\$hits.push(('</div>'));
				if (is_empty)
				{
				  document.getElementById('".$container_id."').innerHTML = '';
				}
				else
				{
				  document.getElementById('".$container_id."').innerHTML = \$hits.join('');
				}
		
             }
          });");
		  break;
		  case "athlete":
			$hit_widget = (".addWidget({
            render: function(data) {
				
				var \$hits = [];
				var is_empty = 1, read_hit_item_count = 0;
				
				\$hits.push('<div class=\"flex-container".($use_responsive_cloudimg_js == "on" ? " cloudimg_resp_js" :"")."\">');
				
 
				var hit_item = document.querySelector('#".$container_id." .flex-item');
				// width and height in pixels, including padding and border
				// Corresponds to jQuery outerWidth(), outerHeight()
				var view_hit_item_count = 20;
				if (hit_item && hit_item.offsetWidth)
				{
					view_hit_item_count = Math.round(browser_width / hit_item.offsetWidth);
					
				}
				/*console.log('view hit itemcount', view_hit_item_count);*/

				data.results.hits.some(function(hit, index, array) {

				  is_empty = 0;
				  /*if (hit.profile_img)*/
				  /*read_hit_item_count ++;*/
				  set_athlete_hit".$container_id."(hit, \$hits, user_id,".$instantsearch.".indexName);
				  
				});
				\$hits.push(('</div>'));
				if (is_empty)
				{
				  document.getElementById('".$container_id."').innerHTML = '';
				}
				else
				{
				  document.getElementById('".$container_id."').innerHTML = \$hits.join('');
				}
		
             }
          });");
		  break;

		  case "home_highlight":
			$hit_widget = (".addWidget({
            render: function(data) {
				var \$hits = [];
				var is_empty = 1;
				var is_firsthighlight = 1;
				\$hits.push('<div class=\"hits_home_media\">');
					\$hits.push('<div class=\"label\">');
					".(strlen($section_url) > 0 ? "\$hits.push('<a href=\"".$section_url."\">');" : "")
					. ($show_section_label == "on" ?
						"\$hits.push('<div class=\"content\">".($section_label ? $section_label: 'Highlights')."</div>');"
					:"")
					.(strlen($section_url) > 0 ? "\$hits.push('</a>');" : "")
					."
					\$hits.push('</div>');
					\$hits.push('<div class=\"flex-container ".($use_responsive_cloudimg_js == "on" ? " cloudimg_resp_js" :"")."\">');
					data.results.hits.forEach(function(hit, index, array) {
						  is_empty = 0;

						  set_home_highlight_hit".$container_id."(hit, \$hits, user_id, (is_firsthighlight==1 ? '':''),".$instantsearch.".indexName);
						  is_firsthighlight = 0;
					});
					\$hits.push(('</div>'));
				\$hits.push(('</div>'));
				if (is_empty)
				{
				  document.getElementById('".$container_id."').innerHTML = '';
				}
				else
				{
				  document.getElementById('".$container_id."').innerHTML = \$hits.join('');
				}
			}
          });");
		  break;
		   case "media":
			$hit_widget = (".addWidget({
            render: function(data) {
				var \$hits = [];
				var is_empty = 1;

				\$hits.push('<div class=\"flex-container".($use_responsive_cloudimg_js == "on" ? " cloudimg_resp_js" :"")."\">');
				data.results.hits.forEach(function(hit, index, array) {
				  is_empty = 0;
				  set_media_hit".$container_id."(hit, \$hits, user_id,".$instantsearch.".indexName);
				});
				\$hits.push(('</div>'));
				
				if (is_empty)
				{
				  document.getElementById('".$container_id."').innerHTML = '';
				}
				else
				{
				  document.getElementById('".$container_id."').innerHTML = \$hits.join('');
				}
			}
          });");
		  break;
		    
		  case "media_top":
			$hit_widget = (".addWidget({
            render: function(data) {
				var \$hits = [];
				var is_empty = 1;

				\$hits.push('<div class=\"flex-container".($use_responsive_cloudimg_js == "on" ? " cloudimg_resp_js" :"")."\">');
				data.results.hits.forEach(function(hit, index, array) {

				  set_media_top_hit".$container_id."(hit, \$hits, user_id, (is_empty == 1 ? 'autoplay' : ''),".$instantsearch.".indexName);
				  is_empty = 0;
				  
				});
				\$hits.push(('</div>'));
				
				if (is_empty)
				{
				  document.getElementById('".$container_id."').innerHTML = '';
				  /*console.log(\"".$div_id_for_empty_result."\");*/
				 ".($div_id_for_empty_result !="" ? "document.getElementById(\"".$div_id_for_empty_result."\").style.display='block';" :"")."
				}
				else
				{
				 ".($div_id_for_empty_result !="" ? "document.getElementById(\"".$div_id_for_empty_result."\").style.display='none';" :"")."
				  document.getElementById('".$container_id."').innerHTML = \$hits.join('');
				}
			}
          });");
		  break;
		  case "home_event":
			$hit_widget = (".addWidget({
            render: function(data) {
				var \$hits = [];
				var is_empty = 1;
				\$hits.push('<div class=\"label\">');
				".(strlen($section_url) > 0 ? "\$hits.push('<a href=\"".$section_url."\">');" : "")
				. ($show_section_label == "on" ?
					"\$hits.push('<div class=\"content\">".($section_label ? $section_label: 'Events')."</div>');"
				:"")
				.(strlen($section_url) > 0 ? "\$hits.push('</a>');" : "")
				."
				\$hits.push('</div>');
				\$hits.push('<div class=\"flex-container".($use_responsive_cloudimg_js == "on" ? " cloudimg_resp_js" :"")."\">');
				data.results.hits.forEach(function(hit, index, array) {
				  is_empty = 0;
  				  set_home_events_hit".$container_id."(hit, \$hits, user_id,".$instantsearch.".indexName);
				});
				\$hits.push(('</div>'));
			 
				if (is_empty)
				{
				  document.getElementById('".$container_id."').innerHTML = '';
				}
				else
				{
				  document.getElementById('".$container_id."').innerHTML = \$hits.join('');
				}
			}	
		  });");
		  break;
		  case "event":
			$hit_widget = (".addWidget({
            render: function(data) {
				var \$hits = [];
				var is_empty = 1;
				
				\$hits.push('<div class=\"flex-container".($use_responsive_cloudimg_js == "on" ? " cloudimg_resp_js" :"")."\">');
				data.results.hits.forEach(function(hit, index, array) {
				  is_empty = 0;
  				  set_event_hit".$container_id."(hit, \$hits, user_id,".$instantsearch.".indexName);
				});
				\$hits.push(('</div>'));
			 
				if (is_empty)
				{
				  document.getElementById('".$container_id."').innerHTML = '';
				}
				else
				{
				  document.getElementById('".$container_id."').innerHTML = \$hits.join('');
				}
			}	
		  });");
		  break;
		  case "home_gear":
			$hit_widget = (".addWidget({
            render: function(data) {
				var \$hits = [];
				var is_empty = 1;
				\$hits.push('<div class=\"home_hits_brandsgear\">');
				\$hits.push('<div class=\"label\">');
				".(strlen($section_url) > 0 ? "\$hits.push('<a href=\"".$section_url."\">');" : "")
				. ($show_section_label == "on" ?
					"\$hits.push('<div class=\"content\">".($section_label ? $section_label: 'Gear')."</div>');"
				:"")
				.(strlen($section_url) > 0 ? "\$hits.push('</a>');" : "")
				."
				\$hits.push('</div>');
				\$hits.push('<div class=\"flex-container".($use_responsive_cloudimg_js == "on" ? " cloudimg_resp_js" :"")."\">');
				data.results.hits.forEach(function(hit, index, array) {
				  is_empty = 0;
				 
				 set_home_brandsgear_hit".$container_id."(hit, \$hits, user_id,".$instantsearch.".indexName);
				});
				\$hits.push(('</div>'));
				\$hits.push(('</div>'));
				if (is_empty)
				{
				  document.getElementById('".$container_id."').innerHTML = '';
				}
				else
				{
				  document.getElementById('".$container_id."').innerHTML = \$hits.join('');
				}
			}
          });");
		  break;
		  case "brand":
			$hit_widget = (".addWidget({
            render: function(data) {
				var \$hits = [];
				var is_empty = 1;
				
				\$hits.push('<div class=\"flex-container".($use_responsive_cloudimg_js == "on" ? " cloudimg_resp_js" :"")."\">');
				data.results.hits.forEach(function(hit, index, array) {
				  is_empty = 0;
				  set_brand_hit".$container_id."(hit, \$hits, user_id,".$instantsearch.".indexName);
				});
				\$hits.push(('</div>'));
				if (is_empty)
				{
				  document.getElementById('".$container_id."').innerHTML = '';
				}
				else
				{
				  document.getElementById('".$container_id."').innerHTML = \$hits.join('');
				}
			}
          });");
		  break;
		  case "home_wall":
			$hit_widget = (".addWidget({
            render: function(data) {
				var \$hits = [];
				var is_empty = 1;
				var all_side_html = '';
				var wall_item_count = 0;
				\$hits.push('<div class=\"hits_home_wall\">');
				\$hits.push('<div class=\"slider\">');
			    \$hits.push('<div class=\"slide-track\">');
				data.results.hits.some(function(hit, index, array) {
				  is_empty = 0;
				  wall_item_count = wall_item_count + 1;
				  var photo_img = !is_empty_field(hit.profile_img )
					  ? hit.profile_img
					  : '/wp-content/uploads/2019/03/empty-face-athlete.svg';
				  var one_slide_html =
					'<div class=\"slide".($use_responsive_cloudimg_js == "on" ? " cloudimg_resp_js" :"")."\">' +
					'<a href=\"' + hit.profile_url + '\" class=\"slide-img_a\">' +
					'<div class=\"flex-profile-img\">' +
					'<img ' + (".($use_responsive_cloudimg_js == "on")." && !is_empty_field(hit.profile_img) ? 
				    'ci-src=\"' + get_cloudImage_subfix(photo_img)	  
				    :'src=\"' + get_cloudImage_fullparam_url(photo_img, \"\", '400x250', \"\")) +
					'\" class=\"slide-img\">' + 
					'</div>' +
					'</a>' +
					'<div class=\"content\">' +
					'<a href=\"' + hit.profile_url + '\">' +
					'<span class=\"content-name\">' +
					hit.ambassador_name +
					'</span>' +
					'<span class=\"content-action\">' +
					hit.action +
					'</span>' +
					'<br>' +
					'<span class=\"content-message\">' +
					hit.content +
					'</span>' +
					'</a>' + 
					'</div>' +
					'</div>';
				  all_side_html = all_side_html + one_slide_html;
				  
				  if (wall_item_count >= ".$wall_item_count.")
					return 1;
				});
				
				\$hits.push(all_side_html);
				\$hits.push(all_side_html);
				\$hits.push(('</div>'));
				\$hits.push(('</div>'));
				\$hits.push(('</div>'));
				 if (is_empty)
				 {
					document.getElementById('".$container_id."').innerHTML = '';
				 }
				 else
				 {
					document.getElementById('".$container_id."').innerHTML = \$hits.join('');
				 }
				 if (wall_item_count < ".$wall_item_count.") 
					console.error(\"'Hit per page' must be larger than 'Wall Item Count'. Wall will displayed not correctly.\");
				 
				}
			});
			
			");
			
			$css = $css.'<style>
				@keyframes scroll {
				  100% {
					transform: translateX(calc(-400px * '.$wall_item_count.'));
				  }
				}
				#'.$container_id.' .slider .slide-track {
				  width: calc(800px * '.$wall_item_count.');
				}
				</style>';

			break;
		case "mrc_hospital_search":
			$hit_widget = (".addWidget({
            render: function(data) {
              var \$hits = [];
              var is_empty = 1;
              \$hits.push(('<div".($leftfixedcols + $rightfixedcols > 0 ? "": " style=\"overflow-x:auto;\"").">'));
              \$hits.push(('<table id=\"".$HTB_id."\">'));
			  
			  \$hits.push(('<tbody>'));
              data.results.hits.forEach(function(hit, index, array) {
                  
                  is_empty = 0;
                  
                  \$hits.push((
                      '<tr class=\"hit_record_row\">' +
						  '<td class=\"hit_record_col name\">' +
						  '<a href=\"' +
						  hit.permalink +
						  '\">' +
						  hit.post_title +
						  '</a>' +
					  '</td>' +
				  '</tr>'
                  )); 
                  
              });
        \$hits.push(('</tbody>'));
              \$hits.push(('</table>'));
              \$hits.push(('</div>'));
              if (is_empty)
              {
                  document.getElementById('".$container_id."').innerHTML = '';
              }
              else
              {
                  document.getElementById('".$container_id."').innerHTML = \$hits.join('');
              }
              
            }
          });");
		  break;
        case "mrc_dtc_search":
			$hit_widget = (".addWidget({
            render: function(data) {
				var \$hits = [];
				var is_empty = 1;
				
				\$hits.push('<div class=\"flex-container".($use_responsive_cloudimg_js == "on" ? " cloudimg_resp_js" :"")."\">');
				data.results.hits.forEach(function(hit, index, array) {
				  is_empty = 0;
				  set_mrc_dtc_search_hit(hit, \$hits, user_id,".$instantsearch.".indexName);
				});
				\$hits.push(('</div>'));
				if (is_empty)
				{
				  document.getElementById('".$container_id."').innerHTML = '';
				}
				else
				{
				  document.getElementById('".$container_id."').innerHTML = \$hits.join('');
				}
			}
          });");
		  break;
        case "all":
			$hit_widget = (".addWidget({
            render: function(data) {
				var \$hits_home_highlight = [];
				var \$hits_home_ambassador = [];
				var \$hits_home_events = [];
				var \$hits_home_gear = [];
				var \$hits_home_brand = [];
				var \$hits_home_podcast = [];
				var \$hits_home_movie = [];

				var \$hits_athlete = [];
				var \$hits_event = [];
				var \$hits_brand = [];
				var \$hits_media = [];
				var \$hits_media_top = [];
				var is_empty = 1;
				var is_firsthighlight = 1;

				\$hits_home_gear.push('<div class=\"home_hits_brandsgear\">');
				\$hits_home_brand.push('<div class=\"home_hits_brandsgear\">');
				\$hits_home_highlight.push('<div class=\"hits_home_media\">');
				\$hits_home_podcast.push('<div class=\"hits_home_media\">');
				\$hits_home_movie.push('<div class=\"hits_home_media\">');
				". ($show_section_label == "on" ?
					"
					\$hits_home_highlight.push('<div class=\"label\">');
					".(strlen($section_url) > 0 ? "\$hits_home_highlight.push('<a href=\"".$section_url."\">');" : "")."
					\$hits_home_highlight.push('<div class=\"content\">".($section_label ? $section_label: 'HIGHLIGHT')."</div>');
					".(strlen($section_url) > 0 ? "\$hits_home_highlight.push('</a>');" : "")."
					\$hits_home_highlight.push('</div>');

					\$hits_home_ambassador.push('<div class=\"label\">');
					".(strlen($section_url) > 0 ? "\$hits_home_ambassador.push('<a href=\"".$section_url."\">');" : "")."
					\$hits_home_ambassador.push('<div class=\"content\">".($section_label ? $section_label: 'ATHLETES')."</div>');
					".(strlen($section_url) > 0 ? "\$hits_home_ambassador.push('</a>');" : "")."
					\$hits_home_ambassador.push('</div>');

					\$hits_home_events.push('<div class=\"label\">');
					".(strlen($section_url) > 0 ? "\$hits_home_events.push('<a href=\"".$section_url."\">');" : "")."
					\$hits_home_events.push('<div class=\"content\">".($section_label ? $section_label: 'EVENTS')."</div>');
					".(strlen($section_url) > 0 ? "\$hits_home_events.push('</a>');" : "")."
					\$hits_home_events.push('</div>');
					
				
					\$hits_home_gear.push('<div class=\"label\">');
					".(strlen($section_url) > 0 ? "\$hits_home_gear.push('<a href=\"".$section_url."\">');" : "")."
					\$hits_home_gear.push('<div class=\"content\">".($section_label ? $section_label: 'GEAR')."</div>');
					".(strlen($section_url) > 0 ? "\$hits_home_gear.push('</a>');" : "")."
					\$hits_home_gear.push('</div>'); 

					\$hits_home_brand.push('<div class=\"label\">');
					".(strlen($section_url) > 0 ? "\$hits_home_brand.push('<a href=\"".$section_url."\">');" : "")."
					\$hits_home_brand.push('<div class=\"content\">".($section_label ? $section_label: 'BRANDS')."</div>');
					".(strlen($section_url) > 0 ? "\$hits_home_brand.push('</a>');" : "")."
					\$hits_home_brand.push('</div>');

					\$hits_home_podcast.push('<div class=\"label\">');
					".(strlen($section_url) > 0 ? "\$hits_home_podcast.push('<a href=\"".$section_url."\">');" : "")."
					\$hits_home_podcast.push('<div class=\"content\">".($section_label ? $section_label: 'PODCASTS')."</div>');
					".(strlen($section_url) > 0 ? "\$hits_home_podcast.push('</a>');" : "")."
					\$hits_home_podcast.push('</div>');

					\$hits_home_movie.push('<div class=\"label\">');
					".(strlen($section_url) > 0 ? "\$hits_home_movie.push('<a href=\"".$section_url."\">');" : "")."
					\$hits_home_movie.push('<div class=\"content\">".($section_label ? $section_label: 'MOVIES')."</div>');
					".(strlen($section_url) > 0 ? "\$hits_home_movie.push('</a>');" : "")."
					\$hits_home_movie.push('</div>');
					" : "").
					"
					\$hits_home_ambassador.push('<div class=\"flex-container".($use_responsive_cloudimg_js == "on" ? " cloudimg_resp_js" :"")."\">');
					\$hits_home_events.push('<div class=\"flex-container".($use_responsive_cloudimg_js == "on" ? " cloudimg_resp_js" :"")."\">');
					\$hits_home_gear.push('<div class=\"flex-container".($use_responsive_cloudimg_js == "on" ? " cloudimg_resp_js" :"")."\">');
					\$hits_home_brand.push('<div class=\"flex-container".($use_responsive_cloudimg_js == "on" ? " cloudimg_resp_js" :"")."\">');
					\$hits_home_highlight.push('<div class=\"flex-container".($use_responsive_cloudimg_js == "on" ? " cloudimg_resp_js" :"")."\">');
					\$hits_home_podcast.push('<div class=\"flex-container".($use_responsive_cloudimg_js == "on" ? " cloudimg_resp_js" :"")."\">');
					\$hits_home_movie.push('<div class=\"flex-container".($use_responsive_cloudimg_js == "on" ? " cloudimg_resp_js" :"")."\">');

					data.results.hits.forEach(function(hit, index, array) {

					  is_empty = 0;

					  /*console.log(hit.post_type_label);*/
					  switch (hit.post_type_label )
					 {

						 case 'Highlight':
						 case 'Highlights':
						  set_home_highlight_hit".$container_id."(hit, \$hits_home_highlight, user_id, (is_firsthighlight == 1 ? 'autoplay' : ''),".$instantsearch.".indexName);
						  is_firsthighlight = 0;
						  break;
						 case 'Movie':
						 case 'Movies':
						  set_home_highlight_hit".$container_id."(hit, \$hits_home_movie, user_id, '',".$instantsearch.".indexName);
						 
						  break;
						 case 'Podcast':
						 case 'Podcasts':
						  set_home_highlight_hit".$container_id."(hit, \$hits_home_podcast, user_id, '', ".$instantsearch.".indexName);
						 
						  break;
						 case 'Contacts':
						 case 'Contact':
							/*if (hit.profile_img) */
								set_home_ambassador_hit".$container_id."(hit, \$hits_home_ambassador, user_id,".$instantsearch.".indexName);
						  break;
						case 'Events':
						case 'Event':
							  set_home_events_hit".$container_id."(hit, \$hits_home_events, user_id,".$instantsearch.".indexName);
							  break;
						case 'Gear':
						case 'Gears':						
						  set_home_brandsgear_hit".$container_id."(hit, \$hits_home_gear, user_id ,".$instantsearch.".indexName);
						  break;
						case 'Brands':
						case 'Brand':
						  set_home_brandsgear_hit".$container_id."(hit, \$hits_home_brand, user_id ,".$instantsearch.".indexName);
						  break;
					}
				});
				\$hits_home_ambassador.push(('</div>'));
				\$hits_home_events.push(('</div>'));
				\$hits_home_gear.push(('</div>'));
				\$hits_home_gear.push('</div>'); 
				\$hits_home_brand.push(('</div>'));
				\$hits_home_brand.push('</div>'); 
				\$hits_home_highlight.push(('</div>'));
				\$hits_home_highlight.push(('</div>'));
				\$hits_home_podcast.push(('</div>'));
				\$hits_home_podcast.push(('</div>'));
				\$hits_home_movie.push(('</div>'));
				\$hits_home_movie.push(('</div>'));
				
				if (is_empty)
				{
				  document.getElementById('".$container_id."_home_ambassador').innerHTML = '';
				}
				else
				{
				  document.getElementById('".$container_id."_home_ambassador').innerHTML = \$hits_home_ambassador.join('');
				}

				if (is_empty)
				{
				  document.getElementById('".$container_id."_home_events').innerHTML = '';
				}
				else
				{
				  document.getElementById('".$container_id."_home_events').innerHTML = \$hits_home_events.join('');
				}

				if (is_empty)
				{
				  document.getElementById('".$container_id."_home_gear').innerHTML = '';
				}
				else
				{
				  document.getElementById('".$container_id."_home_gear').innerHTML = \$hits_home_gear.join('');
				}
				if (is_empty)
				{
				  document.getElementById('".$container_id."_home_brand').innerHTML = '';
				}
				else
				{
				  document.getElementById('".$container_id."_home_brand').innerHTML = \$hits_home_brand.join('');
				}
				if (is_empty)
				{
				  document.getElementById('".$container_id."_home_highlight').innerHTML = '';
				}
				else
				{
				  document.getElementById('".$container_id."_home_highlight').innerHTML = \$hits_home_highlight.join('');
				}
				if (is_empty)
				{
				  document.getElementById('".$container_id."_home_podcast').innerHTML = '';
				}
				else
				{
				  document.getElementById('".$container_id."_home_podcast').innerHTML = \$hits_home_podcast.join('');
				}
				if (is_empty)
				{
				  document.getElementById('".$container_id."_home_movie').innerHTML = '';
				}
				else
				{
				  document.getElementById('".$container_id."_home_movie').innerHTML = \$hits_home_movie.join('');
				}
			}
          });");
		  break;
		 default:
		 $hit_widget = ('.addWidget(
            instantsearch.widgets.hits({
              container: "#'.$container_id.'",
              templates: {
                empty: "",
                item: `
                  <table>
                      <tr class="hit_record_row">
                        <td class="hit_record_col no">{{ __hitIndex }}</td>
                        <td class="hit_record_col name"><strong> {{post_title}}</strong> </td>
                        
                      </tr>
                  </table>
                `,
                transformItems(items) {
                  return items.map(item => ({
                    ...item,
                    /*age: _calculateAge(item.UNIX_birthday),*/
                    age: item.birthday,
                  }));
                },
              },
            })
          );
		  ');
		}
    
    $java_script = '
		
	  '
		.($cloudimg_responsive_load == 'on'
        ?
        '
		   <!-- Add lazyload library -->
		  <script>
			window.lazySizesConfig = window.lazySizesConfig || {};
			window.lazySizesConfig.init = false;
		  </script>
		  <script src="https://cdn.scaleflex.it/filerobot/js-cloudimage-responsive/lazysizes.min.js"></script>

		  <!-- Add js-cloudimage-responsiv library -->
		  <script src="https://cdn.scaleflex.it/filerobot/js-cloudimage-responsive/v1.1.0.min.js"></script>
		 
		
		'
        :'')
		.

		'<script>
			
		'
		.('
		if (typeof get_cloudImage_url !== "function")
		{
			function get_cloudImage_subfix(org_url)
			{
			

				if (typeof (is_absolute_url) === "function" && is_absolute_url(org_url))
				{
					return org_url;
				}
				else
				{
					return "https://www.deedsalone.com" + "/" + org_url;
				}
			}

			function get_cloudImage_url(org_url, isGray)
			{
			
				var cloud_img_pre;
				if (isGray) {
					cloud_img_pre = "'.$this->cloud_img_gray_prefix().'";
				}
				else
				{
					cloud_img_pre = "'.$this->cloud_img_prefix().'";
				}
				if (typeof (is_absolute_url) === "function" && is_absolute_url(org_url))
				{
					return cloud_img_pre + org_url;
				}
				else if (cloud_img_pre.length > 0)
				{
					return cloud_img_pre + "_deeds_/" + org_url;
				}
				else 
					return org_url;
			}
	
			function get_cloudImage_fullparam_url(org_url, operation, size, filter)
			{
				/*console.log("get_cloudImage_fullparam_url", org_url, operation, width, height, filter);*/
				var cloud_img_pre;
				if (!operation)
					operation = "'.$cloudimg_operation.'";
				if (!size)
					size = "'.$cloudimg_width.'x'.$couldimg_height.'";
			
				if (!filter)
					filter = "'.$cloudimg_filter.'";
				/*console.log("changed  get_cloudImage_fullparam_url", org_url, operation, size, filter);*/
				cloud_img_pre =  "//" + "'.$cloudimg_token.'" + ".cloudimg.io/" + operation + "/" + size + "/" + filter + "/";
				/*console.log("cloud_img_pre", cloud_img_pre);*/
				if (typeof (is_absolute_url) === "function" && is_absolute_url(org_url))
				{
					return cloud_img_pre + org_url;
				}
				else
				{
					return cloud_img_pre + "_deeds_" + org_url;
				}
			}
		}
		function '.$container_id.'run_instagram_profile_url(name, indexName, ObjectID)
		{
				
				callAjax(
				 "https://www.instagram.com/" + name,
				  function (data) {
					var tmpstr = data.split(\'"ProfilePage":[{"logging_page_id":"profilePage_\')[1];
					usr_id = tmpstr.substr(0, tmpstr.indexOf(\'"\')); 
				    jQuery.getJSON("https://i.instagram.com/api/v1/users/"+usr_id+"/info/", function(info) {
					path = info.user.hd_profile_pic_url_info["url"];
					if (path)
					{
						console.log(path);
						/*console.log('.( $use_responsive_cloudimg_js == 'on' ? '"ci-src"' : '"src"') .','.$container_id.');*/
						document.getElementById(name).setAttribute('.( $use_responsive_cloudimg_js == 'on' ? '"ci-src"' : '"src"') .', path);
						document.getElementById(name).classList.remove("empty_img");
/*[BEGIN-ADD][STG:Bojana 6/21/2019] Update empty profile_img url with instagram photo url*/					
						update_profile_img(indexName, ObjectID, path);
/*[END-ADD][STG:Bojana 6/21/2019] Update empty profile_img url with instagram photo url*/					
					}
					return path;
				  })
				});
			}
		'
		).'
	
		var w = window,
		d = document,
		e = d.documentElement,
		g = d.getElementsByTagName("body")[0],
		browser_width = w.innerWidth || e.clientWidth || g.clientWidth;
		/*console.log(browser_width);*/
		'.($type === "home_highlight"  || $type=="all"?'
			function getParameterByName(name, url) {
			  if (!url) 
				url = window.location.href;
			  name = name.replace(/[\[\]]/g, "\\$&");
			  var regex = new RegExp("[?&]" + name + "(=([^&#]*)|&|#|$)"),
			  results = regex.exec(url);
			  if (!results) 
				return null;
			  if (!results[2]) 
				return "";
			  return decodeURIComponent(results[2].replace(/\+/g, " "));
			}
			function get_youtube_id(url) {
			  /*get lGgX-2ugkv8&t from https://www.youtube.com/watch?v=lGgX-2ugkv8&t=1s*/
			  //console.log(url);
			  return getParameterByName("v", url);
			}
			
			var youtube_button = document.querySelectorAll(".allMyVideos");
			for (var i = 0; i < youtube_button.length; youtube_button ++)
			{
				youtube_button[i].onclick = function() {
				/*console.log("allMyVideo click running!");*/
					// All but not this one - pause
					

				};
			}
		


			function get_vidoplayer_html(url, type, autoplay)
			{
				switch(type)
				{
					case "iframe":
						return "<iframe  width=\"100%\" height=\"100%\" class=\"allMyVideos datasrc_youtube\" src=\"\" data-src=\"" + url +
								  "/?rel=0" + (autoplay=="autoplay" ? "&autoplay=true&mute=1":"") + "\" frameborder=\"0\" allowfullscreen></iframe>" ;
					default:
						return "<embed class=\"flex-video allMyVideos\" src=\"" +
								 url +
								  "/?rel=0&mute=1"  + (autoplay=="autoplay" ? "&autoplay=true":"") +
								  "\" wmode=\"transparent\" " +
								  " type=\"application/x-shockwave-flash\"" +
								  "></embed>";

				}
			}
			' : '')
	    .($type == "home_highlight"  || $type=="all"?
				"function set_home_highlight_hit".$container_id."(hit, \$hits, user_id, autoplay, indexName)
				  {

					  var is_fav = hit.favorite_users && (hit.favorite_users.indexOf(user_id) >=0 )? 1 : 0;	

					  var favor_img_html = get_favbutton_html_by_instant2(user_id, ".$instantsearch.", hit.objectID, is_fav);			
					  \$hits.push(
					  '<div class=\"flex-item\">' +
					  '		<div class=\"flex-photo-row\">' +
						  '<a href=\"' + hit.permalink + '\">' +".
							  ($video_player_type == "image" ?
								"get_media_playlist_html(hit, autoplay) + "
								:($video_player_type == "youtube" ? 
									"get_vidoplayer_html('https://www.youtube.com/embed/' + get_youtube_id(hit.url), 'iframe', autoplay)+":
										($video_player_type == "media"?	"get_media_html(hit.url, hit.post_type_level) + "
										:"(hit.post_type_label == 'Highlight' || hit.post_type_label == 'Highlights' ? get_media_playlist_html(hit, autoplay): get_media_playlist_html(hit, autoplay))  + "
										)
								  )
							   ).
						 "'</a>' +
					
						'	</div>' +
						'<div class=\"bottom_row\">' +
						 '<div class=\"flex-favor\">' + favor_img_html + '</div>' +
						 '<a href=\"' + hit.permalink + '\">' +
						 '<p class=\"flex-caption\">' +
						  hit.post_title +
						  '</p>' +
						  '</a>' +
						  '</div>'+
					  '</div>'
					  );
					  if ( typeof lastseen === 'function')
					  {
					
							lastseen(indexName, hit.objectID, user_id, '".$cur_page_url."');
					  }

				 }":"")
	    .($type=="home_athlete" || $type=="all"? 
			"
			function set_home_ambassador_hit".$container_id."(hit, \$hits, user_id, indexName)
			{
				var is_fav = hit.favorite_users && (hit.favorite_users.indexOf(user_id) >=0 )? 1 : 0;


				  var favor_img_html = get_favbutton_html_by_instant2(user_id, ".$instantsearch.", hit.objectID, is_fav);
						 
				  
				  var instagram_uername= lastWordCapitalized(hit.instagramurl);
                  
                  var sport_img = get_blue_sport_img(get_hit_sport(hit));
		
                  var profile_img = !is_empty_field(hit.profile_img) ? hit.profile_img :(sport_img ? sport_img :  '/wp-content/uploads/2019/03/empty-face-athlete.svg');
				  var lastIndex = hit.post_title.lastIndexOf(' ');
				  var first_name = hit.post_title.substring(0, lastIndex);
				  var img_src_attr = 'src';
				  var img_src_val = get_cloudImage_url(profile_img);
				  var img_extra_attr = '';
				  var img_extra_class = '';
				  var extra_item_class = '';
				  

				  if (".($use_responsive_cloudimg_js == "on").")
				  {
					  if (!is_empty_field(hit.profile_img))
					  {	
						img_src_attr = 'ci-src';
						img_src_val = get_cloudImage_subfix(profile_img);
					  }
					  else
					  {
						img_src_attr = 'src';
						img_src_val = get_cloudImage_fullparam_url(profile_img, \"\", '400x250', \"\");
						img_extra_class = 'empty_img';
	
					  }
					  img_extra_attr = 'style=\"\" ratio=\"".$cloudimg_responsive_ratio."\"';
				  }
				
				  if (is_deeds_partner(hit))
				  {
					  extra_item_class = extra_item_class + ' deeds_partner'
				  }
				  \$hits.push(
				  '<div class=\"flex-item ' + extra_item_class + '\">' +
					
						'<div class=\"first_row\">' +
						 '<div class=\"flex-favor\">' + favor_img_html + '</div>' +
						  '<a href=\"' + hit.permalink + '\" class=\"linktag\">' +
						  '<span class=\"flex-caption\">' +
	  						'<span class=\"firstname\">' +
								first_name +
							'</span>' +
							'<br/>' +
	  						'<span class=\"lastname\">' +
								remove_first_occurrence(hit.post_title, first_name) +
							'</span>' +
						  '</span>' +
			  			  '<img class=\"flex-icon ' + get_hit_sport(hit) + '\" src=\"' + (get_blue_sport_img(get_hit_sport(hit))) +'\" alt=\"' + get_hit_sport(hit) + '\">' +
						  '</a>' + 
						'</div>' +
					
						'<div class=\"flex-photo-row\">' +
						 '<a href=\"' + hit.permalink + '\" class=\"linktag\">' +
						 '<div class=\"flex-profile-img\">' +
							'<img id=\"' + instagram_uername + '\" ' + img_src_attr + '=\"' + img_src_val + '\" class=\"flex-photo ' + img_extra_class + '\"' + img_extra_attr + '>' +
						  '</div>' + 
						  '</a>' + 
						 
						'</div>' +
				  
					  
					'</div>'
				  );
	
				  ".($use_instagram_for_emptyface == 'on'? '
                  if ( is_empty_field(hit.profile_img))
				  {
					  '.$container_id.'run_instagram_profile_url(instagram_uername, indexName, hit.objectID);
				  }':'')."
				  if (/*read_hit_item_count <= view_hit_item_count &&*/ typeof lastseen === 'function')
				  {
						lastseen(indexName, hit.objectID, user_id, '".$cur_page_url."');
				  }
			}
			":"")
  	   .($type=="home_event"  || $type=="all"? 
			"function set_home_events_hit".$container_id."(hit, \$hits, user_id, indexName)
			{
				var is_fav = hit.favorite_users && (hit.favorite_users.indexOf(user_id) >=0 )? 1 : 0;


				  var favor_img_html = get_favbutton_html_by_instant2(user_id, ".$instantsearch.", hit.objectID, is_fav);
				  var sport_img = get_blue_sport_img(get_hit_sport(hit));
				  var event_img = !is_empty_field(hit.event_img) ? hit.event_img 
					: (sport_img ? sport_img : '/wp-content/uploads/2019/03/event-red-footer.svg');
				  /*console.log('eventsport', get_hit_sport(hit));*/
				  \$hits.push(
					  '<div class=\"flex-item\">' +
						
						  '<div class=\"flex-photo-row\">' +
						  '<a href=\"' + hit.permalink + '\" class=\"linktag\">' +
						  '<div class=\"flex-profile-img\">' +
						  '<img ' + (".	($use_responsive_cloudimg_js == "on" ? "1" : "0")." && hit.event_img ?
						   'ci-src=\"' + get_cloudImage_subfix(event_img)	  
						   :'src=\"' + get_cloudImage_fullparam_url(event_img, \"\", '400x250', \"\"))
						    + 
						  '\" class=\"flex-photo '+ (is_empty_field(hit.event_img) ? 'empty_img' : '') +' \">' +
						  '</div>' +
						  '</a>' +
						  '</div>' +
						  '<a href=\"' + hit.permalink + '\" class=\"linktag\">' +
						  '<p class=\"flex-caption\">' +
						  hit.post_title +
						  '</p>' +
						  '</a>' +
						  '<div class=\"bottom_row\" style=\"float\">' +
						  '<div class=\"flex-favor\">' +
						  favor_img_html +
						  '</div>' +
						   '<a href=\"' + hit.permalink + '\"class=\"linktag\">' +
						  '<p class=\"flex-date\">' +
						  deeds_date_format(hit.start) + ' - ' + deeds_date_format(hit.end) +
						  '</p>' +
  						  '<img class=\"flex-icon ' + get_hit_sport(hit) + '\" src=\"' + (get_blue_sport_img(get_hit_sport(hit))) +'\" alt=\"' + get_hit_sport(hit) + '\">' +
						  '</a>' +
						  '</div>' +
						  
					  '</div>'
				  );
				  if ( typeof lastseen === 'function')
				  {
						lastseen(indexName, hit.objectID, user_id, '".$cur_page_url."');
				  }
			}
			
			":"")
	    .($type=="home_gear"  || $type=="all"? 
			"function set_home_brandsgear_hit".$container_id."(hit, \$hits, user_id, indexName)
			{
				 var is_fav = hit.favorite_users && (hit.favorite_users.indexOf(user_id) >=0 )? 1 : 0;


				  var favor_img_html = get_favbutton_html_by_instant2(user_id, ".$instantsearch.", hit.objectID, is_fav);
				  var gearbrand_name = (!is_empty_field(hit.gear_name) ? hit.gear_name: hit.post_title);
			
				  var hit_brandgear_img;
				  if (hit.brand_img)
					hit_brandgear_img = hit.brand_img;
				  else if (hit.gear_img)
					hit_brandgear_img = hit.gear_img;

				  var brands_gear_img = !is_empty_field(hit_brandgear_img)
					? hit_brandgear_img
					: '/wp-content/uploads/2019/03/gear-red.svg';
				  var first_sport = get_hit_sport(hit) ? (Array.isArray(get_hit_sport(hit)) ? get_hit_sport(hit)[0] : get_hit_sport(hit)) : '';
			
				  var bottom_text ='';
				  if (!is_empty_field(hit.ambassador_name))
						bottom_text = hit.ambassador_name;
				  /*else if (hit.categoriesendemics)
						bottom_text = hit.categoriesendemics;*/
				  var extra_item_class = '';
				  if (is_deeds_partner(hit))
				  {
					  extra_item_class = extra_item_class + ' deeds_partner'
				  }
				 
				   \$hits.push(
					  '<div class=\"flex-item ' + extra_item_class + '\">' +
						  '<div class=\"flex-favor\">' +
						  favor_img_html +
						  '</div>' +
						   
						  '<div class=\"flex-top clearfix\">' +
						 
						  '<span class=\"flex-caption\">' +
							gearbrand_name +
						  '</span>' +

						  '<img class=\"flex-icon ' + first_sport + '\" src=\"' + (get_blue_sport_img(first_sport)) + '\" alt=\"' + get_hit_sport(hit) + '\">' +

						  '</div>' +
						 '<div class=\"flex-athlete\">' +
							 bottom_text +
						  '</div>' +
						  '<div class=\"flex-sport\">' +
						  first_sport +
						  '</div>' +					  
						  '<div class=\"flex-photo-row\">' +

						   '<a href=\"' +  (!is_empty_field(hit.gear_url) ? hit.gear_url : hit.permalink) + '\">' +
						   '<div class=\"flex-profile-img\">' + 
						   '<img ' + (".	($use_responsive_cloudimg_js == "on" ? "1" : "0")." && hit_brandgear_img ?
						   ' ci-src=\"' + get_cloudImage_subfix(brands_gear_img)	  
						   :'src=\"' +  get_cloudImage_url(brands_gear_img)) + 
						  '\" class=\"flex-photo ' + (!hit_brandgear_img ? 'empty_img' : '') +' \">' +
						  '</div>' +
						  '</a>' +
						  '</div>' +
						 						

						 
					  '</div>'
				  );
				  if ( typeof lastseen === 'function')
				  {
					 
						lastseen(indexName, hit.objectID, user_id, '".$cur_page_url."');
				  }
			}
			
			":"")
        .($type=="athlete"  || $type=="all"? 
			"
			function set_athlete_hit".$container_id."(hit, \$hits, user_id, indexName)
			{
				var is_fav = hit.favorite_users && (hit.favorite_users.indexOf(user_id) >=0 )? 1 : 0;


				  var favor_img_html = get_favbutton_html_by_instant2(user_id, ".$instantsearch.", hit.objectID, is_fav);
						 
				  
				  var instagram_uername= lastWordCapitalized(hit.instagramurl);
                  
				  var sport_img = get_blue_sport_img(get_hit_sport(hit));
		
                  var profile_img = !is_empty_field(hit.profile_img) ? hit.profile_img :(sport_img ? sport_img :  '/wp-content/uploads/2019/03/empty-face-athlete.svg');
				  
				  var lastIndex = hit.post_title.lastIndexOf(' ');
				  var first_name = hit.post_title.substring(0, lastIndex);
				  var img_src_attr = 'src';
				  var img_src_val = get_cloudImage_url(profile_img);
				  var img_extra_attr = '';
				  var img_extra_class = '';
					
				  if (".($use_responsive_cloudimg_js == "on").")
				  {
					  if (!is_empty_field(hit.profile_img))
					  {	
						img_src_attr = 'ci-src';
						img_src_val = get_cloudImage_subfix(profile_img);
					  }
					  else
					  {
						img_src_attr = 'src';
						img_src_val = get_cloudImage_fullparam_url(profile_img, \"\", '400x250', \"\");
						img_extra_class = 'empty_img';
	
					  }
					  img_extra_attr = 'style=\"\" ratio=\"".$cloudimg_responsive_ratio."\"';
				  }

				  var extra_item_class = '';
				  if (is_deeds_partner(hit))
				  {
					  extra_item_class = extra_item_class + ' deeds_partner'
				  }
				 

				  \$hits.push(
    			   '<div class=\"flex-itemanddetail\">' +
				   '<div class=\"flex-item ' + extra_item_class + '\">' +
					
						'<div class=\"top_row\">' +
							'<div class=\"flex-favor\">' + favor_img_html + '</div>' +
							'<a href=\"' + hit.permalink + '\">' +
						  '<span class=\"flex-caption\">' +
	  						'<span class=\"firstname\">' +
								first_name +
							'</span>&#10;' +
							
	  						'<span class=\"lastname\">' +
								remove_first_occurrence(hit.post_title, first_name) +
							'</span>' +
						  '</span>' +
						   '<img class=\"flex-icon ' + get_hit_sport(hit) + '\" src=\"' + (get_blue_sport_img(get_hit_sport(hit))) +'\" alt=\"' + get_hit_sport(hit) + '\">' +
						   '</a>' + 
						'</div>' +
				
						'<div class=\"flex-photo-row\">' +
						 '<a href=\"' + hit.permalink + '\">' +
						 '<div class=\"flex-profile-img\">' +
							'<img id=\"' + instagram_uername + '\" ' + img_src_attr + '=\"' + img_src_val + '\" class=\"flex-photo ' + img_extra_class + '\"' + img_extra_attr + '>' +
						  '</div>' + 
						 '</a>' + 

						'</div>' +
					  
					  '<a href=\"' + hit.permalink + '\">' +
						'<div class=\"flex-desc\">' +
							'<div class=\"flex-desc1\">' +
							  'updated his <br> sponsors' +
							'</div>' +
							'<div class=\"flex-desc2\">' +
							  hit.gender +  get_hit_sport(hit) + ', FKD bearings' +
							'</div>' +
						'</div>' +
					  '</a>' + 
						'</div>' +
					'</div>'
				  );
				  ".($use_instagram_for_emptyface == 'on'? '
                  if ( is_empty_field(hit.profile_img))
				  {
					  '.$container_id.'run_instagram_profile_url(instagram_uername, indexName, hit.objectID);
				  }':'')."
				  if (/*read_hit_item_count <= view_hit_item_count &&*/ typeof lastseen === 'function')
				  {
						lastseen(indexName, hit.objectID, user_id, '".$cur_page_url."');
				  }
			}
			":"")
  	   .($type=="event"  || $type=="all"? 
			"function set_event_hit".$container_id."(hit, \$hits, user_id, indexName)
			{
				var is_fav = hit.favorite_users && (hit.favorite_users.indexOf(user_id) >=0 )? 1 : 0;


				  var favor_img_html = get_favbutton_html_by_instant2(user_id, ".$instantsearch.", hit.objectID, is_fav);
				  var sport_img = get_blue_sport_img(get_hit_sport(hit));
				  var event_img = !is_empty_field(hit.event_img) ? hit.event_img 
					: (sport_img ? sport_img : '/wp-content/uploads/2019/03/event-red-footer.svg');
				  
				  \$hits.push(
				    '<div class=\"flex-itemanddetail\">' +
					  '<div class=\"flex-item\">' +
						
						  '<div class=\"flex-photo-row\">' +
						  '<a href=\"' + hit.permalink + '\">' +
						  '<div class=\"flex-profile-img\">' +
						  '<img ' + (".	($use_responsive_cloudimg_js == "on" ? "1" : "0")." && hit.event_img ?
						   'ci-src=\"' + get_cloudImage_subfix(event_img)	  
						   :'src=\"' + get_cloudImage_fullparam_url(event_img, \"\", '400x250', \"\"))
						    + 
						  '\" class=\"flex-photo '+ (is_empty_field(hit.event_img) ? 'empty_img' : '') +' \">' +
						  '</div>' +
						  '</a>' +
						  
						  '</div>' +

						  '<a href=\"' + hit.permalink + '\">' +
  						  '<p class=\"flex-caption\">' +
						  hit.post_title +
						  '</p>' +
						  '</a>' +
						  '<div class=\"bottom-row\">' +
						  '<div class=\"flex-favor\">' +
						  favor_img_html +
						  '</div>' +
						  '<a href=\"' + hit.permalink + '\">' +
						  '<p class=\"flex-date\">' +
						  deeds_date_format(hit.start) + ' - ' + deeds_date_format(hit.end) +
						  '</p>' +
						  '<img class=\"flex-icon ' + get_hit_sport(hit) + '\" src=\"' + (get_blue_sport_img(get_hit_sport(hit))) +'\" alt=\"' + get_hit_sport(hit) + '\">' +
						    '</a>' +
						  '</div>' +
						  
					  '</div>' +
					  '<div class=\"flex-detail\">' +
						  '<span class=\"flex-caption\">' +
							hit.post_title +
						  '</span>' +
						  '<div class=\"flex-sport\" >' +
						  '<img class=\"sport_icon\" src=\"' +
						 
						  get_sport_img(get_hit_sport(hit)) +
						  '\"/> ' +
						  '<span class=\"sport_name\">' +
						  get_hit_sport(hit) +
						  '</span>' +
						  '</div>' +
						  
						  '<div>' +
						  '<span> ' + hit.location + ' </span>' +
						  
				 		  '</div>' +
					'</div>' +
				  '</div>'
				  );
				  if ( typeof lastseen === 'function')
				  {
						lastseen(indexName, hit.objectID, user_id, '".$cur_page_url."');
				  }
			}
			":"")
		.($type=="mrc_dtc_search"? 
			"function set_mrc_dtc_search_hit(hit, \$hits, user_id, indexName)
			{
				
				var profile_href = hit.permalink;
				 
				var profile_img = hit.image_url
					? hit.image_url
					: 'https://dtc-medicalrecords.pantheonsite.io/wp-content/uploads/2019/05/smile-direct.jpg';
				 
			   \$hits.push(
					   '<div class=\"flex-itemanddetail\">' +
					  '<div class=\"flex-item\">' +
						
						  '<div class=\"flex-top clearfix\">' +
							  '<div class=\"flex-photo-row\">' +
							  '<a href=\"' +  profile_href + '\">' +
							   '<div class=\"flex-profile-img\">' + 
							   '<img ' + (".	($use_responsive_cloudimg_js == "on" ? "1" : "0")." && profile_img ?
							   ' ci-src=\"' + get_cloudImage_subfix(profile_img)	  
							   :'src=\"' +  get_cloudImage_url(profile_img)) + 
							  '\" class=\"flex-photo\">' +
							  '</div>' +
							  '</a>' +
							  '</div>' +
							  '<span class=\"flex-caption\">' +
								  hit.post_title +
							  '</span>' +
							'</div>' +	
						  '</div>' +						
					  '</div>'
				  );
		
			}
			":"")
	    .($type=="brand"  || $type=="all"? 
			"function set_brand_hit".$container_id."(hit, \$hits, user_id, indexName)
			{
				var is_fav = hit.favorite_users && (hit.favorite_users.indexOf(user_id) >=0 )? 1 : 0;

				var profile_href = hit.permalink;
				  var favor_img_html = get_favbutton_html_by_instant2(user_id, ".$instantsearch.", hit.objectID, is_fav);
				  
				  var hit_brandgear_img;
				  if (hit.brand_img)
					hit_brandgear_img = hit.brand_img;
				  else if (hit.gear_img)
					hit_brandgear_img = hit.gear_img;

				  var brands_gear_img = !is_empty_field(hit_brandgear_img)
					? hit_brandgear_img
					: '/wp-content/uploads/2019/03/gear-red.svg';
				 
		                                     
				  var first_sport = get_hit_sport(hit) ? (Array.isArray(get_hit_sport(hit)) ? get_hit_sport(hit)[0] : get_hit_sport(hit)) : '';
				  var one_ambassador = !is_empty_field(hit.ambassador_name) ? hit.ambassador_name : ''; 
				  if (Array.isArray(hit.ambassador_name) )
				  {
					one_ambassador = hit.ambassador_name.length > 1 ? hit.ambassador_name[Math.random() * (hit.ambassador_name.length - 1)] : 
						hit.ambassador_name[0];
				  }
				   var bottom_text = '';
				  if (!is_empty_field(hit.ambassador_name))
						bottom_text = hit.ambassador_name;
				  /*else if (hit.categoriesendemics)
						bottom_text = hit.categoriesendemics;*/
				  var extra_item_class = '';
				  if (is_deeds_partner(hit))
				  {
					  extra_item_class = extra_item_class + ' deeds_partner'
				  }

				   \$hits.push(
					   '<div class=\"flex-itemanddetail\">' +
							'<div class=\"flex-item ' + extra_item_class + '\">' +
						
						  '<div class=\"flex-top clearfix\">' +
						  '<div class=\"flex-favor\">' +
						  favor_img_html +
						  '</div>' +
						  '<span class=\"flex-caption\">' +
						  hit.post_title +
						  '</span>' +
						  '<div class=\"clearfix\">' +
						  '<img class=\"flex-icon ' + first_sport + '\" src=\"' + (get_blue_sport_img(first_sport)) + '\" alt=\"' + get_hit_sport(hit) + '\">' +
						  '</div>' +
						 '<div class=\"flex-sport\">' +
						  first_sport +
						  '</div>' +
						  '</div>' +
						  '<div class=\"flex-athlete\">' +
						  bottom_text +
						  '</div>' +						  
						  '<div class=\"flex-photo-row\">' +
						  '<a href=\"' +  profile_href + '\">' +
						   '<div class=\"flex-profile-img\">' + 
						   '<img ' + (".	($use_responsive_cloudimg_js == "on" ? "1" : "0")." && !is_empty_field(hit_brandgear_img) ?
						   ' ci-src=\"' + get_cloudImage_subfix(brands_gear_img)	  
						   :'src=\"' +  get_cloudImage_url(brands_gear_img)) + 
						  '\" class=\"flex-photo '+ (is_empty_field(hit_brandgear_img) ? 'empty_img' : '') +' \">' +
						  '</div>' +
						  '</a>' +
						  '</div>' +
						
						  
						  '</div>' +						
					  '</div>'
				  );
				  if ( typeof lastseen === 'function')
				  {
						lastseen(indexName, hit.objectID, user_id, '".$cur_page_url."');
				  }
			}
			":"")
		.($type == "media"  || $type=="all"?
			"function set_media_hit".$container_id."(hit, \$hits, user_id, indexName) {
				var is_fav = hit.favorite_users && (hit.favorite_users.indexOf(user_id) >=0 )? 1 : 0;	

				  var favor_img_html = get_favbutton_html_by_instant2(user_id, ".$instantsearch.", hit.objectID, is_fav);				  				  
				  var thumbnail_img_html_withoutlink = get_thumbnail_img_html_withoutlink(hit);
				  var thumbnail_img_html_withlink = get_thumbnail_img_html_withlink(hit);
				  \$hits.push(
				  '<div class=\"flex-itemanddetail\">' +
				  '  <div class=\"flex-item\">' +
				  '		<div class=\"flex-photo-row\">' +
					
							thumbnail_img_html_withlink +
					'	</div>' +
						'<div class=\"bottom_row\">' +
						'		<div class=\"flex-favor\">' + favor_img_html + '</div>' +
						'			<p class=\"flex-caption\">' +
										hit.post_title +
						'			</p>' +
						'</div>'+
   				   '  </div>' +
				   '<div class=\"flex-detail\">' +
						  '<span class=\"flex-caption\">' +
							hit.post_title +
						  '</span>' +
						  '<div class=\"flex-sport\" >' +
						  '<img class=\"sport_icon\" src=\"' +
						 
						  (get_sport_img(get_hit_sport(hit))) +
						  '\"/> ' +
						  '<span class=\"sport_name\">' +
						  get_hit_sport(hit) +
						  '</span>' +
						  '</div>' +
						  (hit.episode
							? '<div>' +
							  '<span>' +
							  hit.episode +
							  '      <span>' +
							  '</div>': '') +
							'<div>'
							 +
						  '<span class=\"data-icon\">' + hit.post_date_formatted +'</span>' +
						  (hit.length ?
						  '<span> </span>' +
						  '<span>hit.length </span>':'') +
						  '   </div>' +
						  '<div>' +
						  '<span> ' + hit.post_type_label + ' </span>' +
						  (hit.production_company ? ', <span> ' + hit.production_company + '</span>': '') +
				 		  '</div>' +
				   '</div>' +
				  '</div>'

				  );
				  if ( typeof lastseen === 'function')
				  {
						lastseen(indexName, hit.objectID, user_id, '".$cur_page_url."');
				  }
			}" : ""	
		)
		.($type=="media_top"  || $type=="all"? 
			"function set_media_top_hit".$container_id."(hit, \$hits, user_id, autoplay, indexName){
				\$hits.push(
					  '<div class=\"flex-itemanddetail\">' +
					  '		<div class=\"flex-item' + ( hit.post_type_label == 'Highlights' || hit.post_type_label == 'Highlight' ? ' highlight' :'')+'\">' +
								get_media_playlist_html(hit, autoplay) +
					  '		</div>' +
					  '		<div class=\"flex-detail\">' +
							  '<span class=\"flex-caption\">' +
								hit.post_title +
							  '</span>' +
							  '<div class=\"flex-sport\" >' +
							  '<img class=\"sport_icon\" src=\"' +
							 
							  (get_sport_img(get_hit_sport(hit))) +
							  '\"/> ' +
							  '<span class=\"sport_name\">' +
							  get_hit_sport(hit) +
							  '</span>' +
							  '</div>' +
							  (hit.episode
								? '<div>' +
								  '<span>' +
								  hit.episode +
								  '      <span>' +
								  '</div>': '') +
								'<div>'
								 +
							  '<span class=\"data-icon\">' + hit.post_date_formatted +'</span>' +
							  (hit.length ?
							  '<span> </span>' +
							  '<span>hit.length </span>':'') +
							  '   </div>' +
							  '<div>' +
							  '<span> ' + hit.post_type_label + ' </span>' +
							  (hit.production_company ? ', <span> ' + hit.production_company + '</span>': '') +
							  '</div>' +
					   '	</div>' +
					  '</div>'
					  );
					  if ( typeof lastseen === 'function')
					  {
							lastseen(indexName, hit.objectID, user_id, '".$cur_page_url."');
					  }
			}" : "")
		.($type=="media_top" || $type=="media"  || $type=="all" || $type=="home_highlight"?"
			function get_thumbnail_img_html_withoutlink(hit)
			{
				var thumbnail_img = (hit.post_type_label == 'Highlights' || hit.post_type_label == 'Highlight') ?
						'http://i.ytimg.com/vi/' + get_youtube_id(hit.url)  + '/hqdefault.jpg'
					:(hit.media_img ? hit.media_img : '/wp-content/uploads/2019/03/news-hightlights-icon.svg');
				  var youtube_video_src = 'https://www.youtube.com/v/' + get_youtube_id(hit.url)  + '/?rel=0';
                  var thumbnail_href = hit.permalink;
				  var thumbnail_img_html_withoutlink = '<img class=\"flex-photo\" style=\"display:block; background:white;\" ".
							($use_responsive_cloudimg_js == "on"
						  ? " ci-src=\"' + get_cloudImage_subfix(thumbnail_img)"	  
						   :"src=\"' + get_cloudImage_fullparam_url(thumbnail_img, \"\", '250x100', \"\")"
						   )." +  
							'\"/>';
				return thumbnail_img_html_withoutlink;
			}
			function get_thumbnail_img_html_withlink(hit)
			{
				var thumbnail_img = (hit.post_type_label == 'Highlights' || hit.post_type_label == 'Highlight') ?
						'http://i.ytimg.com/vi/' + get_youtube_id(hit.url)  + '/hqdefault.jpg'
					:(hit.media_img ? hit.media_img : '/wp-content/uploads/2019/03/news-hightlights-icon.svg');
				  var youtube_video_src = 'https://www.youtube.com/v/' + get_youtube_id(hit.url)  + '/?rel=0';
                  var thumbnail_href = hit.permalink;
				  var thumbnail_img_html_withoutlink = '<img class=\"flex-photo\" style=\"display:block; background:white;\" ".
							($use_responsive_cloudimg_js == "on"
						  ? " ci-src=\"' + get_cloudImage_subfix(thumbnail_img)"	  
						   :"src=\"' + get_cloudImage_fullparam_url(thumbnail_img, \"\", '250x100', \"\")"
						   )." +  
							'\"/>';
				 var thumbnail_img_html = '<a href=\"' +  thumbnail_href + '\">' +
                                              thumbnail_img_html_withoutlink  +
                                           '</a>';
				return thumbnail_img_html;
			}

			function get_media_thumnail_html(hit)
			{
				var thumbnail_img = (hit.post_type_label == 'Highlights' || hit.post_type_label == 'Highlight') ?
						'http://i.ytimg.com/vi/' + get_youtube_id(hit.url)  + '/hqdefault.jpg'
					:(hit.media_img ? hit.media_img : '/wp-content/uploads/2019/03/news-hightlights-icon.svg');
				  var youtube_video_src = 'https://www.youtube.com/v/' + get_youtube_id(hit.url)  + '/?rel=0';
                  var thumbnail_href = hit.permalink;
				  var thumbnail_img_html_withoutlink = '<img class=\"flex-photo\" style=\"display:block; background:white;\" ".
							($use_responsive_cloudimg_js == "on"
						  ? " ci-src=\"' + get_cloudImage_subfix(thumbnail_img)"	  
						   :"src=\"' + get_cloudImage_fullparam_url(thumbnail_img, \"\", '250x100', \"\")"
						   )." +  
							'\"/>';
                  var thumbnail_img_html = '<a href=\"' +  thumbnail_href + '\">' +
                                              thumbnail_img_html_withoutlink  +
                                           '</a>';
				  thumbnail_video_html =  '<img class=\"profile\" style=\"display:block; background:white; width:100%; height:100%;\" ".
							($use_responsive_cloudimg_js == "on"
						  ? " ci-src=\"' + get_cloudImage_subfix(thumbnail_img)"	  
						   :"src=\"' + get_cloudImage_fullparam_url(thumbnail_img, \"\", '250x100', \"\")"
						   )." +  '\"/>';
					if (hit.post_type_label == 'Highlights' || hit.post_type_label == 'Highlight')
					{
							thumbnail_video_html =get_vidoplayer_html('https://www.youtube.com/embed/' + get_youtube_id(hit.url), 'iframe', autoplay); /*'<embed width=100% height=100%  class=\"flex-video\" src=\"' + youtube_video_src +	
								'\" allowfullscreen=\"true\" ' +
							  ' wmode=\"transparent\" ' +
							  ' type=\"application/x-shockwave-flash\"' +
							  '></embed>' ;*/
					}
                 var   thumbnail_video_html =  '<a class=\"ratio_thumnail_embed\" href=\"' +  thumbnail_href + '\">' 
												+  thumbnail_video_html + '</a>'; 
				return thumbnail_video_html;
			}
			function get_media_playlist_html(hit, autoplay)
			{
				var thumbnail_img = (hit.post_type_label == 'Highlights' || hit.post_type_label == 'Highlight') ?
						'http://i.ytimg.com/vi/' + get_youtube_id(hit.url)  + '/hqdefault.jpg'
					:(hit.media_img ? hit.media_img : '/wp-content/uploads/2019/03/news-hightlights-icon.svg');
				  var youtube_video_src = 'https://www.youtube.com/v/' + get_youtube_id(hit.url)  + '/?rel=0';
                  var thumbnail_href = hit.permalink;

				  var img_src_attr = 'src';
				  var img_src_val = get_cloudImage_url(thumbnail_img);
				  var img_extra_attr = '';
				  var img_extra_class = '';
					
				  if (".($use_responsive_cloudimg_js == "on" ? "1" : "0").")
				  {
					  if (!is_empty_field(hit.media_img) || (hit.post_type_label == 'Highlights' || hit.post_type_label == 'Highlight'))
					  {	
						img_src_attr = 'ci-src';
						img_src_val = get_cloudImage_subfix(thumbnail_img);
					  }
					  else
					  {
						img_src_attr = 'src';
						img_src_val = get_cloudImage_fullparam_url(thumbnail_img, \"\", '100x80', \"\");
						img_extra_class = 'empty_img';
	
					  }
					  img_extra_attr = 'ratio=\"".$cloudimg_responsive_ratio."\"';
				  }
 
         
				    
				    if (autoplay == 'autoplay')
					{
						youtube_video_src = youtube_video_src + '&autoplay=true';
					}
					if (hit.post_type_label == 'Highlights' || hit.post_type_label == 'Highlight')
					{
						thumbnail_video_html = get_vidoplayer_html('https://www.youtube.com/embed/' + get_youtube_id(hit.url), 'iframe', autoplay);/*'<embed width=100% height=100%  class=\"flex-video\" src=\"' + youtube_video_src +	
								'\" allowfullscreen=\"true\" ' +
							  ' wmode=\"transparent\" ' +
							  ' type=\"application/x-shockwave-flash\"' +
							  '></embed>' ;*/
					}
					else
					{
						thumbnail_video_html =  '<img ' + img_src_attr + '=\"' + img_src_val + '\" class=\"flex-thumnail ' + img_extra_class + '\">';
					}
                 var   thumbnail_video_html =  '<a  href=\"' +  thumbnail_href + '\">' 
												+  thumbnail_video_html + '</a>'; 
				 return thumbnail_video_html;
			}
		"
		:''
			
		)
		.($type=="home_event" || $type=="event"  || $type=="all"?"
			 function deeds_date_format (date) {
				var dateObject = new Date(date);
				var date_str = dateObject.toLocaleDateString(\"en-US\");
				var date_year = date_str.slice(-4);
				var cur_year = new Date().getFullYear();
				date_str = date_str.slice(0, -5);
				if (date_year != cur_year)
					date_str = date_str + '/' + date_year.slice(-2);

				return date_str;
			}
		"
		:'' )
		.($type=="home_athlete" || $type=="athlete"  || $type=="all"?"
			function remove_first_occurrence(str, searchstr)       {
				var index = str.indexOf(searchstr);
				if (index === -1) {
					return str;
				}
				return str.slice(0, index) + str.slice(index + searchstr.length);
			}
		"
		:'' ).
			
		'

	       document.addEventListener("DOMContentLoaded", function(event) 
			{
				var user_id = '. (is_user_logged_in()? get_current_user_id() : -1) .'
				if (Number.isInteger(user_id))
					user_id = user_id.toString();
				
				'
			.$instantsearch.'.on("render", function() {	'
				.($leftfixedcols + $rightfixedcols> 0 ? '
				 var table = $("#'.$HTB_id.'").DataTable( {
					scrollY:        "70vh",
					scrollX:        true,
					scrollCollapse: false,
					paging:         false,
					searching: false,
					info: false,
					bSort : false,
					fixedColumns:   {
					  leftColumns:  '.$leftfixedcols.',
					  rightColumns: '.$rightfixedcols.'
					}

				  });
				  
				'     
				:'')
			  .( $use_responsive_cloudimg_js == 'on' && $cloudimg_responsive_load == 'on'? '
				console.log("reponsive js loading'.$container_id.'");
				function load_js_responsive_cloudimage()
				{
		 			  var cloudimgResponsive'.$container_id.' = new window.CIResponsive({
						token: "amdgjadcen",
						lazyLoading: true,
						exactSize: true,
					  });
					  window.lazySizes.init();
				}
				load_js_responsive_cloudimage();
				'.($cloudimg_responsive_delay ?	'setTimeout(load_js_responsive_cloudimage, '.$cloudimg_responsive_delay.');'
					:'')
					:'')
               .'
			
			});
		  '
		  .($usemenu_button == 'on' ? $menu_button_js
            : '')
		  
          .($type === "athlete"   || $type=="all"?
		  '
          function _calculateAge(birthday) { // birthday is a date
            var ageDifMs = Date.now() - birthday.getTime();
            var ageDate = new Date(ageDifMs); // miliseconds from epoch
            return Math.abs(ageDate.getUTCFullYear() - 1970);
          }
          ' : '')
		  .$instantsearch.$hit_widget
        .'})
      </script>'
      ;
    $html = $css. ($usemenu_button == 'on' ? $menu_button_html:'')

	.($type=="all" ?
		'
		<div id="'.$container_id.'_home_highlight" class="HITSCONTAINER"></div>
		<div id="'.$container_id.'_home_ambassador" class="HITSCONTAINER"></div>
		<div id="'.$container_id.'_home_events" class="HITSCONTAINER"></div>
		<div id="'.$container_id.'_home_gear" class="HITSCONTAINER"></div>
		<div id="'.$container_id.'_home_brand" class="HITSCONTAINER"></div>
		<div id="'.$container_id.'_home_podcast" class="HITSCONTAINER"></div>
		<div id="'.$container_id.'_home_movie" class="HITSCONTAINER"></div>

		<div id="'.$container_id.'_athlete" class="HITSCONTAINER"></div>
		<div id="'.$container_id.'_event" class="HITSCONTAINER"></div>
		<div id="'.$container_id.'_brand" class="HITSCONTAINER"></div>
		<div id="'.$container_id.'_media_top" class="HITSCONTAINER"></div>
		<div id="'.$container_id.'_media" class="HITSCONTAINER"></div>
	'
	:
	'<div id="'.$container_id.'" style="color:#000000 !important"></div>');
    $html .= $java_script;

    return $html;
  }


  function render( $attrs, $content = null, $render_slug ) {

    /* Class */
    $background_color     = $this->props['background_color'];
    $use_background_color = $this->props['use_background_color'];
    $video_background          = $this->video_background();
    $parallax_image_background = $this->get_parallax_image_background();

    // Module classnames
    $this->add_classname( array(
      'right-panel', /*Set Button in Box*/
      'ais-InstantSearch',
      $this->get_text_orientation_classname(),
    ) );
    
    
    if ( 'on' !== $use_background_color ) {
      $this->add_classname( 'et_pb_no_bg' );
    }
    
    // Remove automatically added classname
    $this->remove_classname( 'et_pb_alghits' );
    $module_class = $this->module_classname( $render_slug );
    $module_style = sprintf('style="%1$s"'
      ,( 'on' === $use_background_color ? sprintf( 'background-color: %1$s;', esc_attr( $background_color ) ) : '')
    );
    // Render module output
    $output = sprintf(
      '<div%3$s class="%1$s"%2$s>
        %5$s
        %4$s
        %6$s
      </div>'
      ,$module_class
      ,$module_style
      ,$this->module_id()
      ,$video_background
      ,$parallax_image_background   
      ,$this->get_html_with_js()
    
    );

    return $output;
  }
}

new ET_Builder_Module_Hits;
