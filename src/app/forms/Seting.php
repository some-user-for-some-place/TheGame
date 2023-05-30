<?php
namespace app\forms;

use std, gui, framework, app;
use script\MediaPlayerScript;

global $player;
global $is_Menu;
global $is_Level;
global $is_Level1;
global $is_Level2;
global $is_Level3;

class Seting extends AbstractForm
{

    /**
     * @event button3.action 
     */
    function doButton3Action(UXEvent $e = null) // << Назад
    {  
        global $is_Menu;
        global $is_Level;
        global $is_Level1;
        global $is_Level2;
        global $is_Level3; 
         
        if ($is_Menu == 1)
        {
            $is_Menu = 0;
            $this -> form('MainForm') -> show();
            $this -> form('Seting') -> hide();
        }
        
        if ($is_Level == 1)
        {
            $is_Level = 0;
            $this -> form('level') -> show();
            $this -> form('Seting') -> hide();
        }
        
        if ($is_Level1 == 1)
        {
            $is_Level1 = 0;
            $this -> form('level1') -> show();
            $this -> form('Seting') -> hide();
        }
        
        if ($is_Level2 == 1)
        {
            $is_Level2 = 0;
            $this -> form('level2') -> show();
            $this -> form('Seting') -> hide();
        }
        
        if ($is_Level3 == 1)
        {
            $is_Level3 = 0;
            $this -> form('level3') -> show();
            $this -> form('Seting') -> hide();
        }
    }

    /**
     * @event slider.click 
     */
    function doSliderClick(UXMouseEvent $e = null) // Громкость
    {    
        global $player;
        $player->volume = $this -> slider->value / 100;
        
        if ($this->slider->value == 100)
        {
            $this -> labelAlt -> text = "100";
        }
        else 
        {
            $this -> labelAlt -> text = $this -> slider->value%100;
        }
    }

    /**
     * @event construct 
     */
    function doConstruct(UXEvent $e = null)  // При создании формы
    {    
        $this -> labelAlt -> text = "10";
        $this -> layout -> style = '-fx-background-color: #834d18';
    }






}
