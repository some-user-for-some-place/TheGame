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
global $trucho8;
$trucho8 = 0;
global $trucho9;
$trucho9 = 0;

global $megatrucho;
$megatrucho = 0;

global $is_Level3;

class level3 extends AbstractForm
{
        /**
     * @event construct 
     */
    function doConstruct(UXEvent $e = null) // При загрузке формы
    {    
        $this -> layout -> style = '-fx-background-color: #834d18';
    }

    /**
     * @event imageAlt.mouseDown-Left 
     */
    function doImageAltMouseDownLeft(UXMouseEvent $e = null) // Тайтл 1 - Антена
    {    
        global $trucho1;
        global $trucho2;
        global $trucho3;
        global $trucho4;
        global $trucho5;
        global $trucho6;
        global $trucho7;
        global $trucho8;
        global $trucho9;
        
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
        
        if ($trucho1 == 1 && $trucho2 == 1 && $trucho3 == 1 && $trucho4 == 1 && $trucho5 == 1 && $trucho6 == 1 && $trucho7 == 1 && $trucho8 == 1 && $trucho9 == 1)
        {
            $this -> form(TheEnd) -> doConstruct();
            
            global $player;
            $player->open('Audio/TheEnd.mp3');
            $player->play();
            
            $this -> form('TheEnd') -> show();
            $this -> form('level3') -> hide();
        }
    }

    /**
     * @event image5.mouseDown-Left 
     */
    function doImage5MouseDownLeft(UXMouseEvent $e = null) // Тайтл 2 - Балкон без тени
    {    
        global $trucho1;
        global $trucho2;
        global $trucho3;
        global $trucho4;
        global $trucho5;
        global $trucho6;
        global $trucho7;
        global $trucho8;
        global $trucho9;
        
        $trucho2 = $trucho2 + 1;
        
        if ($trucho2 == 1)
        {
            global $сlick_counter;
            global $megatrucho;
            $сlick_counter = $сlick_counter + 1;
            $kicks = $сlick_counter;
            $this -> label -> text = "Счётчик кликов: $kicks";
            $this -> image5 -> hide();
            
            $megatrucho = $megatrucho + 1;
        }
        
        if ($trucho1 == 1 && $trucho2 == 1 && $trucho3 == 1 && $trucho4 == 1 && $trucho5 == 1 && $trucho6 == 1 && $trucho7 == 1 && $trucho8 == 1 && $trucho9 == 1)
        {
            $this -> form(TheEnd) -> doConstruct();
            
            global $player;
            $player->open('Audio/TheEnd.mp3');
            $player->play();
            
            $this -> form('TheEnd') -> show();
            $this -> form('level3') -> hide();
        }
    }

    /**
     * @event image3.mouseDown-Left 
     */
    function doImage3MouseDownLeft(UXMouseEvent $e = null) // Тайтл 3 - Звезда
    {    
        global $trucho1;
        global $trucho2;
        global $trucho3;
        global $trucho4;
        global $trucho5;
        global $trucho6;
        global $trucho7;
        global $trucho8;
        global $trucho9;
        
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
        
        if ($trucho1 == 1 && $trucho2 == 1 && $trucho3 == 1 && $trucho4 == 1 && $trucho5 == 1 && $trucho6 == 1 && $trucho7 == 1 && $trucho8 == 1 && $trucho9 == 1)
        {
            $this -> form(TheEnd) -> doConstruct();
            
            global $player;
            $player->open('Audio/TheEnd.mp3');
            $player->play();
            
            $this -> form('TheEnd') -> show();
            $this -> form('level3') -> hide();
        }
    }

    /**
     * @event image8.click-Left 
     */
    function doImage8ClickLeft(UXMouseEvent $e = null) // Тайтл 4 - Графити кусты
    {    
        global $trucho1;
        global $trucho2;
        global $trucho3;
        global $trucho4;
        global $trucho5;
        global $trucho6;
        global $trucho7;
        global $trucho8;
        global $trucho9;
        
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
        
        if ($trucho1 == 1 && $trucho2 == 1 && $trucho3 == 1 && $trucho4 == 1 && $trucho5 == 1 && $trucho6 == 1 && $trucho7 == 1 && $trucho8 == 1 && $trucho9 == 1)
        {
            $this -> form(TheEnd) -> doConstruct();
            
            global $player;
            $player->open('Audio/TheEnd.mp3');
            $player->play();
            
            $this -> form('TheEnd') -> show();
            $this -> form('level3') -> hide();
        }
    }

    /**
     * @event image10.mouseDown-Left 
     */
    function doImage10MouseDownLeft(UXMouseEvent $e = null) // Тайтл 5 - Люди
    {    
        global $trucho1;
        global $trucho2;
        global $trucho3;
        global $trucho4;
        global $trucho5;
        global $trucho6;
        global $trucho7;
        global $trucho8;
        global $trucho9;
        
        $trucho5 = $trucho5 + 1;
        
        if ($trucho5 == 1)
        {
            global $сlick_counter;
            global $megatrucho;
            $сlick_counter = $сlick_counter + 1;
            $kicks = $сlick_counter;
            $this -> label -> text = "Счётчик кликов: $kicks";
            $this -> image10 -> hide();
            
            $megatrucho = $megatrucho + 1;
        }
        
        if ($trucho1 == 1 && $trucho2 == 1 && $trucho3 == 1 && $trucho4 == 1 && $trucho5 == 1 && $trucho6 == 1 && $trucho7 == 1 && $trucho8 == 1 && $trucho9 == 1)
        {
            $this -> form(TheEnd) -> doConstruct();
            
            global $player;
            $player->open('Audio/TheEnd.mp3');
            $player->play();
            
            $this -> form('TheEnd') -> show();
            $this -> form('level3') -> hide();
        }
    }

    /**
     * @event image6.mouseDown-Left 
     */
    function doImage6MouseDownLeft(UXMouseEvent $e = null) // Тайтл 6 - Часть графити
    {    
        global $trucho1;
        global $trucho2;
        global $trucho3;
        global $trucho4;
        global $trucho5;
        global $trucho6;
        global $trucho7;
        global $trucho8;
        global $trucho9;
        
        $trucho6 = $trucho6 + 1;
        
        if ($trucho6 == 1)
        {
            global $сlick_counter;
            global $megatrucho;
            $сlick_counter = $сlick_counter + 1;
            $kicks = $сlick_counter;
            $this -> label -> text = "Счётчик кликов: $kicks";
            $this -> image6 -> hide();
            
            $megatrucho = $megatrucho + 1;
        }
        
        if ($trucho1 == 1 && $trucho2 == 1 && $trucho3 == 1 && $trucho4 == 1 && $trucho5 == 1 && $trucho6 == 1 && $trucho7 == 1 && $trucho8 == 1 && $trucho9 == 1)
        {
            $this -> form(TheEnd) -> doConstruct();
            
            global $player;
            $player->open('Audio/TheEnd.mp3');
            $player->play();
            
            $this -> form('TheEnd') -> show();
            $this -> form('level3') -> hide();
        }
    }

    /**
     * @event image7.mouseDown-Left 
     */
    function doImage7MouseDownLeft(UXMouseEvent $e = null) // Тайтл 7 - Цветок на окне
    {    
        global $trucho1;
        global $trucho2;
        global $trucho3;
        global $trucho4;
        global $trucho5;
        global $trucho6;
        global $trucho7;
        global $trucho8;
        global $trucho9;
        
        $trucho7 = $trucho7 + 1;
        
        if ($trucho7 == 1)
        {
            global $сlick_counter;
            global $megatrucho;
            $сlick_counter = $сlick_counter + 1;
            $kicks = $сlick_counter;
            $this -> label -> text = "Счётчик кликов: $kicks";
            $this -> image7 -> hide();
            
            $megatrucho = $megatrucho + 1;
        }
        
        if ($trucho1 == 1 && $trucho2 == 1 && $trucho3 == 1 && $trucho4 == 1 && $trucho5 == 1 && $trucho6 == 1 && $trucho7 == 1 && $trucho8 == 1 && $trucho9 == 1)
        {
            $this -> form(TheEnd) -> doConstruct();
            
            global $player;
            $player->open('Audio/TheEnd.mp3');
            $player->play();
            
            $this -> form('TheEnd') -> show();
            $this -> form('level3') -> hide();
        }
    }

    /**
     * @event image9.mouseDown-Left 
     */
    function doImage9MouseDownLeft(UXMouseEvent $e = null) // Тайтл 8 - Окно на верхнем этаже
    {    
        global $trucho1;
        global $trucho2;
        global $trucho3;
        global $trucho4;
        global $trucho5;
        global $trucho6;
        global $trucho7;
        global $trucho8;
        global $trucho9;
        
        $trucho8 = $trucho8 + 1;
        
        if ($trucho8 == 1)
        {
            global $сlick_counter;
            global $megatrucho;
            $сlick_counter = $сlick_counter + 1;
            $kicks = $сlick_counter;
            $this -> label -> text = "Счётчик кликов: $kicks";
            $this -> image9 -> hide();
            
            $megatrucho = $megatrucho + 1;
        }
        
        if ($trucho1 == 1 && $trucho2 == 1 && $trucho3 == 1 && $trucho4 == 1 && $trucho5 == 1 && $trucho6 == 1 && $trucho7 == 1 && $trucho8 == 1 && $trucho9 == 1)
        {
            $this -> form(TheEnd) -> doConstruct();
            
            global $player;
            $player->open('Audio/TheEnd.mp3');
            $player->play();
            
            $this -> form('TheEnd') -> show();
            $this -> form('level3') -> hide();
        }
    }

    /**
     * @event image4.mouseDown-Left 
     */
    function doImage4MouseDownLeft(UXMouseEvent $e = null) // Тайтл 9 - Реверсивный балкон
    {    
        global $trucho1;
        global $trucho2;
        global $trucho3;
        global $trucho4;
        global $trucho5;
        global $trucho6;
        global $trucho7;
        global $trucho8;
        global $trucho9;
        
        $trucho9 = $trucho9 + 1;
        
        if ($trucho9 == 1)
        {
            global $сlick_counter;
            global $megatrucho;
            $сlick_counter = $сlick_counter + 1;
            $kicks = $сlick_counter;
            $this -> label -> text = "Счётчик кликов: $kicks";
            $this -> image4 -> hide();
            
            $megatrucho = $megatrucho + 1;
        }
        
        if ($trucho1 == 1 && $trucho2 == 1 && $trucho3 == 1 && $trucho4 == 1 && $trucho5 == 1 && $trucho6 == 1 && $trucho7 == 1 && $trucho8 == 1 && $trucho9 == 1)
        {
            $this -> form(TheEnd) -> doConstruct();
            
            global $player;
            $player->open('Audio/TheEnd.mp3');
            $player->play();
            
            $this -> form('TheEnd') -> show();
            $this -> form('level3') -> hide();
        } 
    }

    /**
     * @event image.mouseDown-Left 
     */
    function doImageMouseDownLeft(UXMouseEvent $e = null) // Остальное изображение
    {    
        global $сlick_counter;
        $сlick_counter = $сlick_counter + 1;
        $kicks = $сlick_counter;
        $this -> label -> text = "Счётчик кликов: $kicks";
    }

    /**
     * @event button.action 
     */
    function doButtonAction(UXEvent $e = null)
    {
        pre("Отметте ЛКМ элементы на левой картинке, которые не сходятся с правой.");
    }

    /**
     * @event button4.action 
     */
    function doButton4Action(UXEvent $e = null) // << Назд
    {
        global $trucho1;
        global $trucho2;
        global $trucho3;
        global $trucho4;
        global $trucho5;
        global $trucho6;
        global $trucho7;
        global $trucho8;
        global $trucho9;
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
        $trucho8 = 0;
        $trucho9 = 0;
        $сlick_counter = 0;
        $megatrucho= 0;
        
        $this -> image4 -> show();
        $this -> imageAlt -> show();
        $this -> image3 -> show();
        $this -> image8 -> show();
        $this -> image5 -> show();
        $this -> image7 -> show();
        $this -> image6 -> show();
        $this -> image9 -> show();
        $this -> image10 -> show();
        
        $this -> label -> text = "Счётчик кликов: 0";
        
        $player->open('Audio/MainMenu.mp3');
        $player->play();
        
        $this -> form('level') -> show();
        $this -> form('level3') -> hide();
    }

    /**
     * @event button5.action 
     */
    function doButton5Action(UXEvent $e = null) // Настройки
    {
        global $is_Level3;
        $is_Level3 = 1;
    
        $this -> form('Seting') -> show();
        $this -> form('level3') -> hide();
    }
    
    
}
