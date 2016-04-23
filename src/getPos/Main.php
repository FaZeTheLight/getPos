<?php
namespace getPos;

use pocketmine\Player;
use pocketmine\event\Listener;
use pocketmine\Server;
use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\plugin\PluginBase;
use pocketmine\level\Position;
use pocketmine\utils\TextFormat as color;
class Main extends PluginBase implements Listener{
public function onEnable(){
$this->getServer()->getLogger()->info("[getPos]v1.0 by BoyIsDino Enabled!");
$this->getServer()->getPluginManager()->registerEvents($this,$this);
}

public function onCommand(CommandSender $sender, Command $command, $label, array $args) {
        switch ($command){
            case 'getpos':
			$x = $p->getX();
			$y = $p->gety();
                        $z = $p->getZ();
				$sender->sendMessage("Your current coordinates are; ".color::RED.$x[$p->getx()]."\n".color::RESET."X=".color::BlUE.$y[$p->gety()]."\n".color::RESET."Y=".color::GREEN.$z[$p->getZ()]."\n".color::RESET."Z=");
		}
}
public function Disable(){
$this->getServer()->getLogger()->info("[getPos]v1.0 by BoyIsDino Disabled!");
$this->getServer()->getPluginManager()->registerEvents($this,$this);
}

}
