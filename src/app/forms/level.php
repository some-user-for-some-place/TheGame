<?php
namespace app\forms;

use std, gui, framework, app;
use script\MediaPlayerScript;

global $player;
global $is_Level;

class level extends AbstractForm
{

    /**
     * @event construct 
     */
    function doConstruct(UXEvent $e = null) //При загрузке формы
    {    
        $this -> layout -> style = '-fx-background-color: #834d18';
    }

    /**
     * @event button4.action 
     */
    function doButton4Action(UXEvent $e = null) //Назад
    {    
        $this -> form('MainForm') -> show();
        $this -> form('level') -> hide();
    }

    /**
     * @event button.action 
     */
    function doButtonAction(UXEvent $e = null) //Переход на 1 уровень
    {   
        global $player; 
        $player->open('Audio/Level1.mp3');
        $player->play();
        
        $this -> form('level1') -> show();
        $this -> form('level') -> hide();
    }

    /**
     * @event buttonAlt.action 
     */
    function doButtonAltAction(UXEvent $e = null) //Переход на 2 уровень
    {    
        global $player; 
        $player->open('Audio/Level2.mp3');
        $player->play();
        
        $this -> form('level2') -> show();
        $this -> form('level') -> hide();
    }

    /**
     * @event button3.action 
     */
    function doButton3Action(UXEvent $e = null) //Переход на 3 уровень
    {    
        global $player; 
        $player->open('Audio/Level3.mp3');
        $player->play();
        
        $this -> form('level3') -> show();
        $this -> form('level') -> hide();
    }

    /**
     * @event button5.action 
     */
    function doButton5Action(UXEvent $e = null) // Настройки
    {    
        global $is_Level;
        $is_Level = 1;
    
        $this -> form('Seting') -> show();
        $this -> form('level') -> hide();
    }


}
