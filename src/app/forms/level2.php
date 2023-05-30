<?php
namespace app\forms;

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
global $trucho6;
$trucho6 = 0;
global $trucho7;
$trucho7 = 0;

global $megatrucho;
$megatrucho = 0;

global $is_Level2;

class level2 extends AbstractForm
{

    /**
     * @event construct 
     */
    function doConstruct(UXEvent $e = null) // При загрузке формы
    {    
        $this -> layout -> style = '-fx-background-color: #834d18';
    }

    /**
     * @event image4.click-Left 
     */
    function doImage4ClickLeft(UXMouseEvent $e = null)  // Тайтл 1 - Кран
    {    
        global $trucho1;
        global $trucho2;
        global $trucho3;
        global $trucho4;
        global $trucho5;
        global $trucho6;
        global $trucho7;
        
        $trucho1 = $trucho1 + 1;
        
        if ($trucho1 == 1)
        {
            global $сlick_counter;
            global $megatrucho;
            $сlick_counter = $сlick_counter + 1;
            $kicks = $сlick_counter;
            $this -> label -> text = "Счётчик кликов: $kicks";
            $this -> image4 -> hide();
            
            $megatrucho = $megatrucho + 1;
        }
        
        if ($trucho1 == 1 && $trucho2 == 1 && $trucho3 == 1 && $trucho4 == 1 && $trucho5 == 1 && $trucho6 == 1 && $trucho7 == 1)
        {
            $this -> form(TheEnd) -> doConstruct();
            
            global $player;
            $player->open('Audio/TheEnd.mp3');
            $player->play();
            
            $this -> form('TheEnd') -> show();
            $this -> form('level2') -> hide();
        }
    }

    /**
     * @event imageAlt.click-Left 
     */
    function doImageAltClickLeft(UXMouseEvent $e = null)  // Тайтл 2 - Елка
    {    
        global $trucho1;
        global $trucho2;
        global $trucho3;
        global $trucho4;
        global $trucho5;
        global $trucho6;
        global $trucho7;
        
        $trucho2 = $trucho2 + 1;     
        
        if ($trucho2 == 1)
        {
            global $сlick_counter;
            global $megatrucho;
            $сlick_counter = $сlick_counter + 1;
            $kicks = $сlick_counter;
            $this -> label -> text = "Счётчик кликов: $kicks";
            $this -> imageAlt -> hide();
            
            $megatrucho = $megatrucho + 1;
        }
        
        if ($trucho1 == 1 && $trucho2 == 1 && $trucho3 == 1 && $trucho4 == 1 && $trucho5 == 1 && $trucho6 == 1 && $trucho7 == 1)
        {
            $this -> form(TheEnd) -> doConstruct();
            
            global $player;
            $player->open('Audio/TheEnd.mp3');
            $player->play();
            
            $this -> form('TheEnd') -> show();
            $this -> form('level2') -> hide();
        } 
    }

    /**
     * @event image3.mouseDown-Left 
     */
    function doImage3MouseDownLeft(UXMouseEvent $e = null) // Тайтл 3 - Дым
    {    
        global $trucho1;
        global $trucho2;
        global $trucho3;
        global $trucho4;
        global $trucho5;
        global $trucho6;
        global $trucho7;
        
        $trucho3 = $trucho3 + 1;
        
        if ($trucho3 == 1)
        {
            global $сlick_counter;
            global $megatrucho;
            $сlick_counter = $сlick_counter + 1;
            $kicks = $сlick_counter;
            $this -> label -> text = "Счётчик кликов: $kicks";
            $this -> image3 -> hide();
            
            $megatrucho = $megatrucho + 1;
        }
        
        if ($trucho1 == 1 && $trucho2 == 1 && $trucho3 == 1 && $trucho4 == 1 && $trucho5 == 1 && $trucho6 == 1 && $trucho7 == 1)
        {
            $this -> form(TheEnd) -> doConstruct();
            
            global $player;
            $player->open('Audio/TheEnd.mp3');
            $player->play();
            
            $this -> form('TheEnd') -> show();
            $this -> form('level2') -> hide();
        } 
    }

    /**
     * @event image8.mouseDown-Left 
     */
    function doImage8MouseDownLeft(UXMouseEvent $e = null) // Тайтл 4 - Облако
    {    
        global $trucho1;
        global $trucho2;
        global $trucho3;
        global $trucho4;
        global $trucho5;
        global $trucho6;
        global $trucho7;
        
        $trucho4 = $trucho4 + 1;     
        
        if ($trucho4 == 1)
        {
            global $сlick_counter;
            global $megatrucho;
            $сlick_counter = $сlick_counter + 1;
            $kicks = $сlick_counter;
            $this -> label -> text = "Счётчик кликов: $kicks";
            $this -> image8 -> hide();
            
            $megatrucho = $megatrucho + 1;
        }
        
        if ($trucho1 == 1 && $trucho2 == 1 && $trucho3 == 1 && $trucho4 == 1 && $trucho5 == 1 && $trucho6 == 1 && $trucho7 == 1)
        {
            $this -> form(TheEnd) -> doConstruct();
            
            global $player;
            $player->open('Audio/TheEnd.mp3');
            $player->play();
            
            $this -> form('TheEnd') -> show();
            $this -> form('level2') -> hide();
        }    
    }

    /**
     * @event image5.mouseDown-Left 
     */
    function doImage5MouseDownLeft(UXMouseEvent $e = null) // Тайтл 5 - Дверь
    {    
        global $trucho1;
        global $trucho2;
        global $trucho3;
        global $trucho4;
        global $trucho5;
        global $trucho6;
        global $trucho7;
        
        $trucho5 = $trucho5 + 1;
        
        if ($trucho5 == 1)
        {
            global $сlick_counter;
            global $megatrucho;
            $сlick_counter = $сlick_counter + 1;
            $kicks = $сlick_counter;
            $this -> label -> text = "Счётчик кликов: $kicks";
            $this -> image5 -> hide();
            
            $megatrucho = $megatrucho + 1;
        }
        
        if ($trucho1 == 1 && $trucho2 == 1 && $trucho3 == 1 && $trucho4 == 1 && $trucho5 == 1 && $trucho6 == 1 && $trucho7 == 1)
        {
            $this -> form(TheEnd) -> doConstruct();
            
            global $player;
            $player->open('Audio/TheEnd.mp3');
            $player->play();
            
            $this -> form('TheEnd') -> show();
            $this -> form('level2') -> hide();
        }
    }

    /**
     * @event image7.mouseDown-Left 
     */
    function doImage7MouseDownLeft(UXMouseEvent $e = null) // Тайтл 6 - Окно
    {    
        global $trucho1;
        global $trucho2;
        global $trucho3;
        global $trucho4;
        global $trucho5;
        global $trucho6;
        global $trucho7;
        
        $trucho6 = $trucho6 + 1;
        
        if ($trucho6 == 1)
        {
            global $сlick_counter;
            global $megatrucho;
            $сlick_counter = $сlick_counter + 1;
            $kicks = $сlick_counter;
            $this -> label -> text = "Счётчик кликов: $kicks";
            $this -> image7 -> hide();
            
            $megatrucho = $megatrucho + 1;
        }
        
        if ($trucho1 == 1 && $trucho2 == 1 && $trucho3 == 1 && $trucho4 == 1 && $trucho5 == 1 && $trucho6 == 1 && $trucho7 == 1)
        {
            $this -> form(TheEnd) -> doConstruct();
            
            global $player;
            $player->open('Audio/TheEnd.mp3');
            $player->play();
            
            $this -> form('TheEnd') -> show();
            $this -> form('level2') -> hide();
        }
    }

    /**
     * @event image6.mouseDown-Left 
     */
    function doImage6MouseDownLeft(UXMouseEvent $e = null) // Тайтл 7 - Куст
    {    
        global $trucho1;
        global $trucho2;
        global $trucho3;
        global $trucho4;
        global $trucho5;
        global $trucho6;
        global $trucho7;
        
        $trucho7 = $trucho7 + 1;
        
        if ($trucho7 == 1)
        {
            global $сlick_counter;
            global $megatrucho;
            $сlick_counter = $сlick_counter + 1;
            $kicks = $сlick_counter;
            $this -> label -> text = "Счётчик кликов: $kicks";
            $this -> image6 -> hide();
            
            $megatrucho = $megatrucho + 1;
        }
        
        if ($trucho1 == 1 && $trucho2 == 1 && $trucho3 == 1 && $trucho4 == 1 && $trucho5 == 1 && $trucho6 == 1 && $trucho7 == 1)
        {
            $this -> form(TheEnd) -> doConstruct();
            
            global $player;
            $player->open('Audio/TheEnd.mp3');
            $player->play();
            
            $this -> form('TheEnd') -> show();
            $this -> form('level2') -> hide();
        }
    }

    /**
     * @event image.mouseDown-Left 
     */
    function doImageMouseDownLeft(UXMouseEvent $e = null)  // Остальное изображение
    {    
        global $сlick_counter;
        $сlick_counter = $сlick_counter + 1;
        $kicks = $сlick_counter;
        $this -> label -> text = "Счётчик кликов: $kicks";
    }

    /**
     * @event button.action 
     */
    function doButtonAction(UXEvent $e = null) // ?
    {
        pre("Отметте ЛКМ отличные элементы на левой и правой картинках.");
    }

    /**
     * @event button4.action 
     */
    function doButton4Action(UXEvent $e = null) // "<< Назад"
    {
        global $trucho1;
        global $trucho2;
        global $trucho3;
        global $trucho4;
        global $trucho5;
        global $trucho6;
        global $trucho7;
        global $сlick_counter;
        global $megatrucho;
        global $player;
        
        $trucho1 = 0;
        $trucho2 = 0;
        $trucho3 = 0;
        $trucho4 = 0;
        $trucho5 = 0;
        $trucho6 = 0;
        $trucho7 = 0;
        $сlick_counter = 0;
        $megatrucho= 0;
        
        $this -> image4 -> show();
        $this -> imageAlt -> show();
        $this -> image3 -> show();
        $this -> image8 -> show();
        $this -> image5 -> show();
        $this -> image7 -> show();
        $this -> image6 -> show();
        
        $this -> label -> text = "Счётчик кликов: 0";
        
        $player->open('Audio/MainMenu.mp3');
        $player->play();
        
        $this -> form('level') -> show();
        $this -> form('level2') -> hide();
    }

    /**
     * @event button5.action 
     */
    function doButton5Action(UXEvent $e = null) // Настройки
    {
        global $is_Level2;
        $is_Level2 = 1;
        
        $this -> form('Seting') -> show();
        $this -> form('level2') -> hide();
    }

}
