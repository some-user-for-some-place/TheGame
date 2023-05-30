<?php
namespace app\forms;

use std, gui, framework, app;
use script\MediaPlayerScript;

global $player;

global $сlick_counter;
global $megatrucho;

class TheEnd extends AbstractForm
{

    /**
     * @event construct 
     */
    function doConstruct(UXEvent $e = null) // Загрузка формы
    {    
        $this -> layout -> style = '-fx-background-color: #834d18';
        
        global $сlick_counter;
        global $megatrucho;

        if ($сlick_counter > $megatrucho*2)
        {
            $this -> image4 -> visible = true;
        }
        
        if ($сlick_counter > $megatrucho && $сlick_counter <= $megatrucho*2)
        {
            $this -> image4 -> visible = true;
            $this -> image6 -> visible = true;
        }
        
        if ($сlick_counter == $megatrucho)
        {
            $this -> image4 -> visible = true;
            $this -> image5 -> visible = true;
            $this -> image6 -> visible = true;
        }
        
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
        global $trucho6;
        global $trucho7;
        global $trucho8;
        global $trucho9;
        global $сlick_counter;
        global $megatrucho;
        
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
        $megatrucho = 0;
        
        $this -> form (level1) -> imageAlt -> show();
        $this -> form (level1) -> image3 -> show();
        $this -> form (level1) -> image4 -> show();
        $this -> form (level1) -> image5 -> show();
        $this -> form (level1) -> image6 -> show();
        
        $this -> form (level2) -> image4 -> show();
        $this -> form (level2) -> imageAlt -> show();
        $this -> form (level2) -> image3 -> show();
        $this -> form (level2) -> image8 -> show();
        $this -> form (level2) -> image5 -> show();
        $this -> form (level2) -> image7 -> show();
        $this -> form (level2) -> image6 -> show();
        
        $this -> form (level3) -> image4 -> show();
        $this -> form (level3) -> imageAlt -> show();
        $this -> form (level3) -> image3 -> show();
        $this -> form (level3) -> image8 -> show();
        $this -> form (level3) -> image5 -> show();
        $this -> form (level3) -> image7 -> show();
        $this -> form (level3) -> image6 -> show();
        $this -> form (level3) -> image9 -> show();
        $this -> form (level3) -> image10 -> show();
        
        $this -> image4 -> visible = false;
        $this -> image5 -> visible = false;
        $this -> image6 -> visible = false;
        
        $this -> form('level1') -> label -> text = "Счётчик кликов: 0";
        $this -> form('level2') -> label -> text = "Счётчик кликов: 0";
        $this -> form('level3') -> label -> text = "Счётчик кликов: 0";
        
        global $player;
        $player->open('Audio/MainMenu.mp3');
        $player->play();
        
        $this -> form('level') -> show();
        $this -> form('TheEnd') -> hide();
        
    }

}
