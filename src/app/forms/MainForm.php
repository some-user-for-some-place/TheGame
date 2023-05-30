<?php
namespace app\forms;

use std, gui, framework, app;
use script\MediaPlayerScript;

global $player;
$player = new MediaPlayerScript();

global $player;
global $is_Menu;

class MainForm extends AbstractForm
{

    /**
     * @event construct 
     */
    function doConstruct(UXEvent $e = null)    // При создании формы
    {    
        $this -> layout -> style = '-fx-background-color: #834d18';
        
        global $player;
        $player->open('Audio/MainMenu.mp3');
        $player->play();
        $player->volume = 0.10;
    }

    /**
     * @event button.action 
     */
    function doButtonAction(UXEvent $e = null) // Начать игру
    {    
        $this -> form('level') -> show();
        $this -> form('MainForm') -> hide();
    }

    /**
     * @event buttonAlt.action 
     */
    function doButtonAltAction(UXEvent $e = null) // Кнопка выхода из программы
    {    
        
    }

    /**
     * @event button3.action 
     */
    function doButton3Action(UXEvent $e = null) // Настройки
    {    
        global $is_Menu;
        $is_Menu = 1;
        
        $this -> form('Seting') -> show();
        $this -> form('MainForm') -> hide();
    }




}
