<?php
/**
 * Virtina
 * @package    Virtina_ProductSlider
 * @copyright  Copyright (c) 2015-2016 Virtina. (http://www.virtina.com)
 * @license    http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */
class Virtina_ProductSlider_Block_ProductSlider extends Mage_Catalog_Block_Product_Abstract
{
    public function _prepareLayout(){		
        return parent::_prepareLayout();
    } 
    
    # Retrieving backend configured values
    
	# Get products count in website view	
    public function getConfigNumber() {		
      $configNumber = Mage::getStoreConfig('producslider/slider/websiteview');			
	   if($configNumber == "")
       {
		    $configNumber = 4; //set default value
	   }
	   return $configNumber;
    }
    
    # Get Slider status
    public function getConfigSlider(){		
      $configSlider = Mage::getStoreConfig('producslider/general/enable_slider');			
	  return $configSlider;
    }
    
    # Get product price display status
    public function getConfigPrice(){		
      $configPrice = Mage::getStoreConfig('producslider/display/showprice');			
	  return $configPrice;
    }
    
    # Get product image display status
    public function getConfigImage(){		
      $configImage = Mage::getStoreConfig('producslider/display/showimage');		
	  return $configImage;
    }
    
    # Get product slider title 
    public function getConfigTitle(){		
      $configTitle = Mage::getStoreConfig('producslider/display/slidertitle');
      if($configTitle == "")
      {
		     $configTitle = 'Featured Products' ;  // Set slider title by default as Featured Products
	  }				
	  return $configTitle;
    }
    
    # Get products sliding  status
    public function getConfigAuto(){		
      $configAuto = Mage::getStoreConfig('producslider/display/auto');		
	  return $configAuto;
    }
    
    # Get products sliding  speed
    public function getConfigSpeed(){		
      $configSpeed = Mage::getStoreConfig('producslider/slider/speed');	
      if($configSpeed == "")
      {
		     $configSpeed = 1000 ; // Set default slide speed 
	  }			
	  return $configSpeed;
    }
    
    # Get products looping  status
    public function getConfigLoop(){		
      $configLoop = Mage::getStoreConfig('producslider/display/loop');				
	  return $configLoop;
    }
    
    # Get slider navigation display status
    public function getConfigNavigaton(){		
      $configNavigaton = Mage::getStoreConfig('producslider/display/shownavigation');					
	  return $configNavigaton;
    }
    
    # Get maximum number of slides 
    public function getConfigMaxCount(){		
      $configMaxCount = Mage::getStoreConfig('producslider/slider/number');	
       if($configMaxCount == "")
       {
		      $configMaxCount = 10 ;   // Set number of slides to 10 by default 
	   }			
	  return $configMaxCount;
    }
    
    # Get number of slides to display in tabview
    public function getConfigTabCount(){		
      $configTabCount = Mage::getStoreConfig('producslider/slider/tabview');	
       if($configTabCount == "")
       {
	      	$configTabCount = 2 ;  // Set number of slides in Tablet to 2 by default 
	   }				
	  return $configTabCount;
    }
    
    # Get number of slides to display in mobileview
    public function getConfigMobileCount(){		
      $configMobileCount = Mage::getStoreConfig('producslider/slider/mobileview');	
       if($configMobileCount == "")
       {
		     $configMobileCount = 1 ;  // Set number of slides in Mobile to 1 by default 
	   }			
	  return $configMobileCount;
    }
    
    # Get categoryid of products to be displayed
    public function getConfigCategoryId(){		
      $configCategoryId = Mage::getStoreConfig('producslider/slider/categoryid'); 					
	  return $configCategoryId;
    }
    
    # Get Add to cart button display status
    public function getConfigAddtoCart(){		
      $configAddtoCart = Mage::getStoreConfig('producslider/display/showaddtocart');				
	  return $configAddtoCart;
    }
    
    # Get product Name display status
    public function getConfigProductTitle(){		
      $configProductTitle = Mage::getStoreConfig('producslider/display/showtitle');			
	  return $configProductTitle;
    }
    
	# Get number of slides to scroll
    public function getConfigScrollCount(){		
      $configScrollCount = Mage::getStoreConfig('producslider/slider/slidestoscroll');	
      if($configScrollCount == "")
      {
		    $configScrollCount = 1;    		// set default number of slides to scroll
	  }			
	  return $configScrollCount;
    } 
    
    # Get product Review  display status
    public function getConfigProductRating(){		
      $configProductRating = Mage::getStoreConfig('producslider/display/showreview');			
	  return $configProductRating;
    }
    
    # Get Tier price  display status
    public function getConfigTierPrice(){		
      $configTierPrice = Mage::getStoreConfig('producslider/display/showntierprice');				
	  return $configTierPrice;
    }
           
    #Retrieving parameters passed from cms page block call
      
    # Get products count 
    public function getProductCount() {		
       $productcount = '';
       if ($this->hasData('products_count')) 
       {
			   $productcount = $this->getData("products_count");
       }
       return $productcount;
    } 
    
    # Get slider identifier value
    public function getSliderValue(){
	   $slider_id = '';	
	   if ($this->hasData('slider_id')) 
       {
			$slider_id = $this->getData("slider_id");
	   }
       return $slider_id;
    } 
    
    # Get categoryid
    public function getCategoryId(){		
       $category_id = '';
       if ($this->hasData('category_id')) 
       {
			   $category_id = $this->getData("category_id");
	   }
       return $category_id;
    }
     
    # Get number of slides to display in tabview
    public function getTabViewCount(){
	   $tabview_count = '';
	   if ($this->hasData('tabview_count')) 
       {
			 $tabview_count = $this->getData("tabview_count");
	   }	
       return $tabview_count;
    } 
    
    # Get number of slides to display in Mobileview
    public function getMobileViewCount(){
	   $mobileview_count = '';
	   if ($this->hasData('mobileview_count')) 
       {
			$mobileview_count = $this->getData("mobileview_count");
	   }
       return $mobileview_count;
    } 
    
    # Get number of slides to scroll
    public function getScrollCount(){
	   $scroll_count = '';
	   if ($this->hasData('scroll_count')) 
       {
			$scroll_count = $this->getData("scroll_count");
	   }
       return $scroll_count;
    } 
    
    # Get slider title
    public function getSliderTitle(){		
       $slider_title = '';
       if ($this->hasData('slider_title')) 
       {
			   $slider_title = $this->getData("slider_title");
	   }
       return $slider_title;
    } 
    
    # Get number of slides speed
    public function getSliderSpeed(){		
       $slider_speed = '';
       if ($this->hasData('slider_speed')) 
       {
			   $slider_speed = $this->getData("slider_speed");
	   }
       return $slider_speed;
    } 
    
    #Retrieving the product collection  
      
    public function getSliderProductCollection($cat_ids){
		$type1 = ''; 
		$type2 = '';
		$type3 = '';
		$type4 = ''; 
		$type5 = ''; 
		$type6 = ''; 
		
		$configProductTypes= Mage::getStoreConfig('producslider/display/product_type');
		$product_types  = explode(",", $configProductTypes);
		foreach ($product_types as $type) {
			if($type == 0)
				$type1 = 'simple';
			else if($type == 1)
				$type2 = 'configurable';
			else if($type == 2)
				$type3 = 'grouped';
			else if($type == 3)
				$type4 = 'bundle';
			else if($type == 4)
				$type5 = 'downloadable';
			else if($type == 5)
				$type6 = 'virtual';
			else
				$type1 = 'simple';		//default product type	
		}	
		
		$catfilters  = explode(",", $cat_ids);
		$collection = Mage::getModel('catalog/product')->getCollection()
					 ->addAttributeToSelect('*')
					 ->addAttributeToFilter('status', 1)
					 ->addAttributeToFilter('visibility', 4)
					 ->addAttributeToFilter('is_saleable', TRUE)
					 ->addAttributeToFilter('status', array('eq' => Mage_Catalog_Model_Product_Status::STATUS_ENABLED))
					 ->addAttributeToFilter('type_id', array('in' => array($type1,$type2,$type3,$type4,$type5,$type6)))
					 ->joinTable('catalog_category_product', 'product_id=entity_id', array('category_id'=>'category_id'), null, 'left')
					 ->addAttributeToFilter('category_id', array('in' => array('finset' => $catfilters)));
		$collection->getSelect()->group('e.entity_id');
		return $collection;       
    }
        
}
