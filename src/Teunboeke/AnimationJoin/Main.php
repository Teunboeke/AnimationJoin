<?php

declare(strict_types=1);

namespace Teunboeke\AnimationJoin;

use pocketmine\event\listener;
use pocketmine\event\player\PlayerJoinEvent;
use pocketmine\item\item;
use pocketmine\network\mcpe\protocol\ActorEventPacket;
use pocketmine\network\mcpe\protocol\LevelEventPacket;

class Main implements Listener
  
