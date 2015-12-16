<?php 
/******************************************************
 *  Leo Prestashop Theme Framework for Prestashop 1.5.x
 *
 * @package   leotempcp
 * @version   3.0
 * @author    http://www.leotheme.com
 * @copyright Copyright (C) October 2013 LeoThemes.com <@emai:leotheme@gmail.com>
 *               <info@leotheme.com>.All rights reserved.
 * @license   GNU General Public License version 2
 * ******************************************************/

class LeoWidgetProducttabs extends LeoWidgetBase {

		public $widget_name = 'Producttabs';
		public $for_module = 'manage';
		public function getWidgetInfo(){
			return  array('label' => $this->l('Product Tabs'), 'explain' => $this->l('Create Products Tabs')) ;
		}

		public function renderForm( $args, $data ){	
			$options = array(
							array(
								'id' => 'active_on',
								'value' => 1,
								'label' => $this->l('Enabled')
								),
							array(
								'id' => 'active_off',
								'value' => 0,
								'label' => $this->l('Disabled')
								)
						);
			$orderby = array(
			  array(
				'order' => 'date_add',                 // The value of the 'value' attribute of the <option> tag.
				'name' 	=> 	$this->l('Date Add')             // The value of the text content of the  <option> tag.
			  ),
			  array(
				'order' => 'date_upd',                 // The value of the 'value' attribute of the <option> tag.
				'name' 	=> 	$this->l('Date Update')             // The value of the text content of the  <option> tag.
			  ),
			  array(
				'order' => 'name',
				'name' 	=> $this->l('Name')
			  ),
			  array(
				'order' => 'id_product',
				'name' 	=> $this->l('Product Id')
			  ),
			  array(
				'order' => 'price',
				'name' 	=> $this->l('Price')
			  ),
			);
			
			$orderway = array(
			  array(
				'orderway' => 'ASC',                 // The value of the 'value' attribute of the <option> tag.
				'name' 	=> 	$this->l('Ascending')             // The value of the text content of the  <option> tag.
			  ),
			  array(
				'orderway' => 'DESC',                 // The value of the 'value' attribute of the <option> tag.
				'name' 	=> 	$this->l('Descending')             // The value of the text content of the  <option> tag.
			  ),
			);
			$helper = $this->getFormHelper();
			$this->fields_form[1]['form'] = array(
	            'legend' => array(
	                'title' => $this->l('Carousel Form.'),
	            ),
	            'input' => array(
	                array(
	                    'type'  => 'text',
	                    'label' => $this->l('Number of Items In Page'),
	                    'name'  => 'itemspage',
	                    'default'=> 3,
						'desc'  => $this->l('The maximum number of products in each page tab (default: 3).')
	                ),		
					array(
	                    'type'  => 'text',
	                    'label' => $this->l('Number of Columns In Page'),
	                    'name'  => 'columns',
	                    'default'=> 3,
						'desc'  => $this->l('The maximum number of products in each page tab (default: 3).')
	                ),		
					array(
	                    'type'  => 'text',
	                    'label' => $this->l('Number of products displayed In Tab'),
	                    'name'  => 'itemstab',
	                    'default'=> 6,
						'desc'  => $this->l('The maximum number of products in each tab (default: 6).')
	                ),
					array(
					  'type' => 'select',                              
					  'label' => $this->l('Order By:'),         
					  'desc' => $this->l('The maximum number of products in each page  (default: 3).'),  
					  'name' => 'orderby',   
					  'default' => 'date_add',		                          
					  'options' => array(
						'query' => $orderby,                          
						'id' => 'order',                           
						'name' => 'name'                               
					  )
					),
					
					array(
					  'type' => 'select',                              
					  'label' => $this->l('Order Way:'),         
					  'desc' => $this->l('The maximum number of products in each page  (default: 3).'),  
					  'name' => 'orderway',   
					  'default' => 'date_add',		                          
					  'options' => array(
						'query' => $orderway,                          
						'id' => 'orderway',                           
						'name' => 'name'                               
					  )
					),
					array(
						'type' => 'switch',
						'label' => $this->l('Special Tab'),
						'name' => 'special_display',
						'desc' => $this->l('Show Special Tab.'),
						'default'=> 1,
						'values' => $options,
					),
					array(
						'type' => 'switch',
						'label' => $this->l('BestSeller Tab'),
						'name' => 'bestseller_display',
						'desc' => $this->l('Show BestSeller Tab.'),
						'default'=> 1,
						'values' => $options,
					),
					array(
						'type' => 'switch',
						'label' => $this->l('Featured Tab'),
						'name' => 'featured_display',
						'desc' => $this->l('Show Featured Tab.'),
						'default'=> 1,
						'values' => $options,
					),
					array(
						'type' => 'switch',
						'label' => $this->l('New Arrials Tab'),
						'name' => 'newarrivals_display',
						'desc' => $this->l('Show New Arrials Tab.'),
						'default'=> 0,
						'values' => $options,
					),
					array(
	                    'type'  => 'text',
	                    'label' => $this->l('Interval'),
	                    'name'  => 'interval',
	                    'default'=> 8000,
						'desc'  => $this->l('Enter Time(miniseconds) to play carousel. Value 0 to stop.')
	                )
	            ),
	      		 'buttons' => array(
                            array(
                                'title' => $this->l('Save And Stay'),
                                'icon' => 'process-icon-save',
                                'class' => 'pull-right',
                                'type' => 'submit',
                                'name' => 'saveandstayleotempcp'
                            ),
                            array(
                                'title' => $this->l('Save'),
                                'icon' => 'process-icon-save',
                                'class' => 'pull-right',
                                'type' => 'submit',
                                'name' => 'saveleotempcp'
                            ),
                        )
	        );

 
		 	$default_lang = (int)Configuration::get('PS_LANG_DEFAULT');
			
			$helper->tpl_vars = array(
	                'fields_value' => $this->getConfigFieldsValues( $data  ),
	                'languages' => Context::getContext()->controller->getLanguages(),
	                'id_language' => $default_lang
        	); 
			return  $helper->generateForm( $this->fields_form );

		}

		public function renderContent( $args, $setting ){
			$t  = array(
				'name'=> '',
				'html'   => '',
			);
			$setting = array_merge( $t, $setting );
			$setting['special'] = array();
            $setting['bestseller'] = array();
            $setting['featured'] = array();
            $setting['newproducts'] = array();
            $category = new Category(Context::getContext()->shop->getCategory(), (int) Context::getContext()->language->id);
			$nb = ($setting['itemstab']) ? (int)($setting['itemstab']) : 6;
			$orderby = ($setting['orderby']) ? ($setting['orderby']) : 'position';
			$orderway = ($setting['orderway']) ? ($setting['orderway']) : 'ASC';
			$items_page 	= ($setting['itemspage']) ? (int)($setting['itemspage']) : 3;
            $columns_page 	= ($setting['columns']) ? (int)($setting['columns']) : 3;
			$interval 		= isset($setting['interval']) ? (int)($setting['interval']) : 8000;
            if ($setting['featured_display'] && $setting['featured_display'] == 1) {
				$pro_featured = $category->getProducts((int)Context::getContext()->language->id, 1, $nb,$orderby,$orderway);
				Context::getContext()->controller->addColorsToProductList($pro_featured);
                $setting['featured'] = $pro_featured;
            }
            if ($setting['newarrivals_display'] && $setting['newarrivals_display'] == 1) {
				$pro_newproducts = Product::getNewProducts((int)(Context::getContext()->language->id), 0, $nb,false,$orderby,$orderway);
				Context::getContext()->controller->addColorsToProductList($pro_newproducts);
                $setting['newproducts'] = $pro_newproducts;
            }
            if ($setting['special_display'] && $setting['special_display'] == 1) {
				$pro_special = Product::getPricesDrop((int)(Context::getContext()->language->id), 0, $nb,false,$orderby,$orderway);
				Context::getContext()->controller->addColorsToProductList($pro_special);
                $setting['special'] = $pro_special;
            }

            if ($setting['bestseller_display'] && $setting['bestseller_display'] == 1) {
				$pro_bestseller = ProductSale::getBestSales((int)(Context::getContext()->language->id), 0, $nb,$orderby,$orderway);
                Context::getContext()->controller->addColorsToProductList($pro_bestseller);
				$setting['bestseller'] = $pro_bestseller;
            }
			
			$setting['itemsperpage'] = $items_page; 
			$setting['columnspage'] = $columns_page; 
			$setting['interval'] 	= $interval; 
			$setting['scolumn']    = 12 / $columns_page;
			$setting['myTab'] 	= 'leoproducttab'.rand(20,rand());	
			$output = array('type'=>'producttabs','data' => $setting );

			return $output;
		} 

	}
?>