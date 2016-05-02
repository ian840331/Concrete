<?php 

namespace Application\Theme\Urbanic;

use Concrete\Core\Page\Theme\Theme;

class PageTheme extends Theme {

       protected $pThemeGridFrameworkHandle = 'bootstrap3';

       public function registerAssets()
       {
            $this->providesAsset('javascript','bootstrap/*');
            $this->providesAsset('css','bootstrap/*');
            $this->providesAsset('css','block/form');
            $this->providesAsset('css','core/frontend/*');
            $this->requireAsset('javascript','jquery');
       }


     public function getThemeBlockClasses()
     {
          return array(
                'image' => array(
                       'img-thumbnail'
                )
          	);
     }

     public function getThemeAreaClasses()
     {
          return array(
                'Welcome' => array('templatemo-team')
          	);
     }


}