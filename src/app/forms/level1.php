<?php
namespace app\forms;

use script\support\ScriptHelpers;
use std, gui, framework, app;
use script\MediaPlayerScript;

global $player;

global $сlick_counter;
$сlick_counter = 0;

global $trucho1;
$trucho1 = 0;
global $trucho2;
$trucho2 = 0;
global $trucho3;
$trucho3 = 0;
global $trucho4;
$trucho4 = 0;
global $trucho5;
$trucho5 = 0;

global $megatrucho;
$megatrucho = 0;

global $is_Level1;

class level1 extends AbstractForm
{

    /**
     * @event construct 
     */
    function doConstruct(UXEvent $e = null) // При загрузке ФОРМЫ
    {    
        $this -> layout -> style = '-fx-background-color: #834d18';
    }

    /**
     * @event button4.action 
     */
    function doButton4Action(UXEvent $e = null) // Назад
    {
        global $trucho1;
        global $trucho2;
        global $trucho3;
        global $trucho4;
        global $trucho5;
        global $сlick_counter;
        global $megatrucho;
        global $player;
        
        $trucho1 = 0;
        $trucho2 = 0;
        $trucho3 = 0;
        $trucho4 = 0;
        $trucho5 = 0;
        $сlick_counter = 0;
        $megatrucho= 0;
        
        $this -> imageAlt -> show();
        $this -> image3 -> show();
        $this -> image4 -> show();
        $this -> image5 -> show();
        $this -> image6 -> show();
        
        $this -> label -> text = "Счётчик кликов: 0";
        
        $player->open('Audio/MainMenu.mp3');
        $player->play();
        
        $this -> form('level') -> show();
        $this -> form('level1') -> hide();
    }

    /**
     * @event imageAlt.click-Left 
     */
    function doImageAltClickLeft(UXMouseEvent $e = null)    // Тайтл 1 - Дорога
    { 
        global $trucho1;
        global $trucho2;
        global $trucho3;
        global $trucho4;
        global $trucho5;
        
        $trucho1 = $trucho1 + 1;
        
        if ($trucho1 == 1)
        {
            global $сlick_counter;
            global $megatrucho;
            $сlick_counter = $сlick_counter + 1;
            $kicks = $сlick_counter;
            $this -> label -> text = "Счётчик кликов: $kicks";
            $this -> imageAlt -> hide();
            
            $megatrucho = $megatrucho + 1;
        }
        
        if ($trucho1 == 1 && $trucho2 == 1 && $trucho3 == 1 && $trucho4 == 1 && $trucho5 == 1)
        {
            $this -> form(TheEnd) -> doConstruct();
            
            global $player;
            $player->open('Audio/TheEnd.mp3');
            $player->play();
            
            $this -> form('TheEnd') -> show();
            $this -> form('level1') -> hide();
        }
                
    }

    /**
     * @event image3.click-Left 
     */
    function doImage3ClickLeft(UXMouseEvent $e = null)    // Тайтл 2 - Знак
    {  
        global $trucho1;
        global $trucho2;
        global $trucho3;
        global $trucho4;
        global $trucho5;
        
        $trucho2 = $trucho2 + 1;
        
        if ($trucho2 == 1)
        {
            global $сlick_counter;
            global $megatrucho;
            $сlick_counter = $сlick_counter + 1;
            $kicks = $сlick_counter;
            $this -> label -> text = "Счётчик кликов: $kicks";
            $this -> image3 -> hide();
            
            $megatrucho = $megatrucho + 1;
        }
        
        if ($trucho1 == 1 && $trucho2 == 1 && $trucho3 == 1 && $trucho4 == 1 && $trucho5 == 1)
        {
            $this -> form(TheEnd) -> doConstruct();
            
            global $player;
            $player->open('Audio/TheEnd.mp3');
            $player->play();
            
            $this -> form('TheEnd') -> show();
            $this -> form('level1') -> hide();
        }
        
    }

    /**
     * @event image5.click-Left 
     */
    function doImage5ClickLeft(UXMouseEvent $e = null)    // Тайтл 3 - Окно
    {  
        global $trucho1;
        global $trucho2;
        global $trucho3;
        global $trucho4;
        global $trucho5;
    
        $trucho3 = $trucho3 + 1;
        
        if ($trucho3 == 1)
        { 
            global $сlick_counter;
            global $megatrucho;
            $сlick_counter = $сlick_counter + 1;
            $kicks = $сlick_counter;
            $this -> label -> text = "Счётчик кликов: $kicks";
            $this -> image5 -> hide();
            
            $megatrucho = $megatrucho + 1;
        }
        
        if ($trucho1 == 1 && $trucho2 == 1 && $trucho3 == 1 && $trucho4 == 1 && $trucho5 == 1)
        {
            $this -> form(TheEnd) -> doConstruct();
            
            global $player;
            $player->open('Audio/TheEnd.mp3');
            $player->play();
            
            $this -> form('TheEnd') -> show();
            $this -> form('level1') -> hide();
        }
        
    }

    /**
     * @event image6.click-Left 
     */
    function doImage6ClickLeft(UXMouseEvent $e = null)    // Тайтл 4 - Дверь
    {    
        global $trucho1;
        global $trucho2;
        global $trucho3;
        global $trucho4;
        global $trucho5;
        
        $trucho4 = $trucho4 + 1;
        
        if ($trucho4 == 1)
        { 
            global $сlick_counter;
            global $megatrucho;
            $сlick_counter = $сlick_counter + 1;
            $kicks = $сlick_counter;
            $this -> label -> text = "Счётчик кликов: $kicks";
            $this -> image6 -> hide();
            
            $megatrucho = $megatrucho + 1;
        }
        
        if ($trucho1 == 1 && $trucho2 == 1 && $trucho3 == 1 && $trucho4 == 1 && $trucho5 == 1)
        {
            $this -> form(TheEnd) -> doConstruct();
        
            global $player;
            $player->open('Audio/TheEnd.mp3');
            $player->play();
        
            $this -> form('TheEnd') -> show();
            $this -> form('level1') -> hide();
        }
        
    }

    /**
     * @event image4.click-Left 
     */
    function doImage4ClickLeft(UXMouseEvent $e = null)    // Тайтл 5 - Облако
    {  
        global $trucho1;
        global $trucho2;
        global $trucho3;
        global $trucho4;
        global $trucho5;
      
        $trucho5 = $trucho5 + 1;
        
        if ($trucho5 == 1)
        { 
            global $сlick_counter;
            global $megatrucho;
            $сlick_counter = $сlick_counter + 1;
            $kicks = $сlick_counter;
            $this -> label -> text = "Счётчик кликов: $kicks";
            $this -> image4 -> hide();
            
            $megatrucho = $megatrucho + 1;
        }
        
        if ($trucho1 == 1 && $trucho2 == 1 && $trucho3 == 1 && $trucho4 == 1 && $trucho5 == 1)
        {
            $this -> form(TheEnd) -> doConstruct();
        
            global $player;
            $player->open('Audio/TheEnd.mp3');
            $player->play();
        
            $this -> form('TheEnd') -> show();
            $this -> form('level1') -> hide();
        }
        
    }

    /**
     * @event image.click-Left 
     */
    function doImageClickLeft(UXMouseEvent $e = null) // Остальная картина
    {    
        global $сlick_counter;
        $сlick_counter = $сlick_counter + 1;
        $kicks = $сlick_counter;
        $this -> label -> text = "Счётчик кликов: $kicks";
        
    }

    /**
     * @event button.action 
     */
    function doButtonAction(UXEvent $e = null) //?
    {    
        pre("Отметте ЛКМ элементы на левой картинке, которые не сходятся с правой.");
    }

    /**
     * @event button5.action 
     */
    function doButton5Action(UXEvent $e = null) // Настройки
    {
        global $is_Level1;
        $is_Level1 = 1;
    
        $this -> form('Seting') -> show();
        $this -> form('level1') -> hide();
    }


}
