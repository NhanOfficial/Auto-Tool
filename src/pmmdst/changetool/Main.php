<?php

namespace pmmdst\changetool;

use pocketmine\Server;
use pocketmine\player\Player;
use pocketmine\plugin\PluginBase;
use pocketmine\event\Listener;
use pocketmine\event\player\PlayerInteractEvent;
use pocketmine\item\Item;
use pocketmine\item\ItemFactory;
use pocketmine\item\Pickaxe;
use pocketmine\item\Axe;
use pocketmine\item\Shovel;

class Main extends PluginBase implements Listener {
  
  public function onEnable(): void{
    $this->getServer()->getPluginManager()->registerEvents($this, $this);
  }
  
  public function onInteract(PlayerInteractEvent $event){
    $player = $event->getPlayer();
    $block = $event->getBlock();
    $hand = $player->getInventory()->getItemInHand();
    if(!$event->isCancelled()){
      switch($block->getId()){
        case 1:
          if($hand instanceof Axe or $hand instanceof Shovel){
            switch($hand->getId()){
              case 269:
         $cup = ItemFactory::getInstance()->get(270, $hand->getDamage(), 1);
         if($hand->hasCustomName()){
           $cup->setCustomName($hand->getCustomName());
         }
         if($hand->hasEnchantments()){
           foreach($hand->getEnchantments() as $ec){
             $cup->addEnchantment($ec);
           }
         }
         if($hand->getLore() != []){
           $cup->setLore($hand->getLore());
         }
         $player->getInventory()->setItemInHand($cup);
         break;
         
         case 273: 
           $cup = ItemFactory::getInstance()->get(274, $hand->getDamage(), 1);
         if($hand->hasCustomName()){
           $cup->setCustomName($hand->getCustomName());
         }
         if($hand->hasEnchantments()){
           foreach($hand->getEnchantments() as $ec){
             $cup->addEnchantment($ec);
           }
         }
         if($hand->getLore() != []){
           $cup->setLore($hand->getLore());
         }
         $player->getInventory()->setItemInHand($cup);
           break;
          
          case 256:
            $cup = ItemFactory::getInstance()->get(257, $hand->getDamage(), 1);
         if($hand->hasCustomName()){
           $cup->setCustomName($hand->getCustomName());
         }
         if($hand->hasEnchantments()){
           foreach($hand->getEnchantments() as $ec){
             $cup->addEnchantment($ec);
           }
         }
         if($hand->getLore() != []){
           $cup->setLore($hand->getLore());
         }
         $player->getInventory()->setItemInHand($cup);
            break;
            
            case 277:
              $cup = ItemFactory::getInstance()->get(278, $hand->getDamage(), 1);
         if($hand->hasCustomName()){
           $cup->setCustomName($hand->getCustomName());
         }
         if($hand->hasEnchantments()){
           foreach($hand->getEnchantments() as $ec){
             $cup->addEnchantment($ec);
           }
         }
         if($hand->getLore() != []){
           $cup->setLore($hand->getLore());
         }
         $player->getInventory()->setItemInHand($cup);
              break;
              
              case 271:
                $cup = ItemFactory::getInstance()->get(270, $hand->getDamage(), 1);
         if($hand->hasCustomName()){
           $cup->setCustomName($hand->getCustomName());
         }
         if($hand->hasEnchantments()){
           foreach($hand->getEnchantments() as $ec){
             $cup->addEnchantment($ec);
           }
         }
         if($hand->getLore() != []){
           $cup->setLore($hand->getLore());
         }
         $player->getInventory()->setItemInHand($cup);
                break;
                
                case 275:
                  $cup = ItemFactory::getInstance()->get(274, $hand->getDamage(), 1);
         if($hand->hasCustomName()){
           $cup->setCustomName($hand->getCustomName());
         }
         if($hand->hasEnchantments()){
           foreach($hand->getEnchantments() as $ec){
             $cup->addEnchantment($ec);
           }
         }
         if($hand->getLore() != []){
           $cup->setLore($hand->getLore());
         }
         $player->getInventory()->setItemInHand($cup);
                  break;
                  
                  case 258:
                    $cup = ItemFactory::getInstance()->get(257, $hand->getDamage(), 1);
         if($hand->hasCustomName()){
           $cup->setCustomName($hand->getCustomName());
         }
         if($hand->hasEnchantments()){
           foreach($hand->getEnchantments() as $ec){
             $cup->addEnchantment($ec);
           }
         }
         if($hand->getLore() != []){
           $cup->setLore($hand->getLore());
         }
         $player->getInventory()->setItemInHand($cup);
                    break;
                    
                    case 279:
                      $cup = ItemFactory::getInstance()->get(278, $hand->getDamage(), 1);
         if($hand->hasCustomName()){
           $cup->setCustomName($hand->getCustomName());
         }
         if($hand->hasEnchantments()){
           foreach($hand->getEnchantments() as $ec){
             $cup->addEnchantment($ec);
           }
         }
         if($hand->getLore() != []){
           $cup->setLore($hand->getLore());
         }
         $player->getInventory()->setItemInHand($cup);
                      break;
          }
          }
          break;
          
          case 49:
            if($hand instanceof Axe or $hand instanceof Shovel){
            switch($hand->getId()){
              case 269:
         $cup = ItemFactory::getInstance()->get(270, $hand->getDamage(), 1);
         if($hand->hasCustomName()){
           $cup->setCustomName($hand->getCustomName());
         }
         if($hand->hasEnchantments()){
           foreach($hand->getEnchantments() as $ec){
             $cup->addEnchantment($ec);
           }
         }
         if($hand->getLore() != []){
           $cup->setLore($hand->getLore());
         }
         $player->getInventory()->setItemInHand($cup);
         break;
         
         case 273: 
           $cup = ItemFactory::getInstance()->get(274, $hand->getDamage(), 1);
         if($hand->hasCustomName()){
           $cup->setCustomName($hand->getCustomName());
         }
         if($hand->hasEnchantments()){
           foreach($hand->getEnchantments() as $ec){
             $cup->addEnchantment($ec);
           }
         }
         if($hand->getLore() != []){
           $cup->setLore($hand->getLore());
         }
         $player->getInventory()->setItemInHand($cup);
           break;
          
          case 256:
            $cup = ItemFactory::getInstance()->get(257, $hand->getDamage(), 1);
         if($hand->hasCustomName()){
           $cup->setCustomName($hand->getCustomName());
         }
         if($hand->hasEnchantments()){
           foreach($hand->getEnchantments() as $ec){
             $cup->addEnchantment($ec);
           }
         }
         if($hand->getLore() != []){
           $cup->setLore($hand->getLore());
         }
         $player->getInventory()->setItemInHand($cup);
            break;
            
            case 277:
              $cup = ItemFactory::getInstance()->get(278, $hand->getDamage(), 1);
         if($hand->hasCustomName()){
           $cup->setCustomName($hand->getCustomName());
         }
         if($hand->hasEnchantments()){
           foreach($hand->getEnchantments() as $ec){
             $cup->addEnchantment($ec);
           }
         }
         if($hand->getLore() != []){
           $cup->setLore($hand->getLore());
         }
         $player->getInventory()->setItemInHand($cup);
              break;
              
              case 271:
                $cup = ItemFactory::getInstance()->get(270, $hand->getDamage(), 1);
         if($hand->hasCustomName()){
           $cup->setCustomName($hand->getCustomName());
         }
         if($hand->hasEnchantments()){
           foreach($hand->getEnchantments() as $ec){
             $cup->addEnchantment($ec);
           }
         }
         if($hand->getLore() != []){
           $cup->setLore($hand->getLore());
         }
         $player->getInventory()->setItemInHand($cup);
                break;
                
                case 275:
                  $cup = ItemFactory::getInstance()->get(274, $hand->getDamage(), 1);
         if($hand->hasCustomName()){
           $cup->setCustomName($hand->getCustomName());
         }
         if($hand->hasEnchantments()){
           foreach($hand->getEnchantments() as $ec){
             $cup->addEnchantment($ec);
           }
         }
         if($hand->getLore() != []){
           $cup->setLore($hand->getLore());
         }
         $player->getInventory()->setItemInHand($cup);
                  break;
                  
                  case 258:
                    $cup = ItemFactory::getInstance()->get(257, $hand->getDamage(), 1);
         if($hand->hasCustomName()){
           $cup->setCustomName($hand->getCustomName());
         }
         if($hand->hasEnchantments()){
           foreach($hand->getEnchantments() as $ec){
             $cup->addEnchantment($ec);
           }
         }
         if($hand->getLore() != []){
           $cup->setLore($hand->getLore());
         }
         $player->getInventory()->setItemInHand($cup);
                    break;
                    
                    case 279:
                      $cup = ItemFactory::getInstance()->get(278, $hand->getDamage(), 1);
         if($hand->hasCustomName()){
           $cup->setCustomName($hand->getCustomName());
         }
         if($hand->hasEnchantments()){
           foreach($hand->getEnchantments() as $ec){
             $cup->addEnchantment($ec);
           }
         }
         if($hand->getLore() != []){
           $cup->setLore($hand->getLore());
         }
         $player->getInventory()->setItemInHand($cup);
                      break;
          }
          }
            break;
          
          case 4:
            if($hand instanceof Axe or $hand instanceof Shovel){
            switch($hand->getId()){
              case 269:
         $cup = ItemFactory::getInstance()->get(270, $hand->getDamage(), 1);
         if($hand->hasCustomName()){
           $cup->setCustomName($hand->getCustomName());
         }
         if($hand->hasEnchantments()){
           foreach($hand->getEnchantments() as $ec){
             $cup->addEnchantment($ec);
           }
         }
         if($hand->getLore() != []){
           $cup->setLore($hand->getLore());
         }
         $player->getInventory()->setItemInHand($cup);
         break;
         
         case 273: 
           $cup = ItemFactory::getInstance()->get(274, $hand->getDamage(), 1);
         if($hand->hasCustomName()){
           $cup->setCustomName($hand->getCustomName());
         }
         if($hand->hasEnchantments()){
           foreach($hand->getEnchantments() as $ec){
             $cup->addEnchantment($ec);
           }
         }
         if($hand->getLore() != []){
           $cup->setLore($hand->getLore());
         }
         $player->getInventory()->setItemInHand($cup);
           break;
          
          case 256:
            $cup = ItemFactory::getInstance()->get(257, $hand->getDamage(), 1);
         if($hand->hasCustomName()){
           $cup->setCustomName($hand->getCustomName());
         }
         if($hand->hasEnchantments()){
           foreach($hand->getEnchantments() as $ec){
             $cup->addEnchantment($ec);
           }
         }
         if($hand->getLore() != []){
           $cup->setLore($hand->getLore());
         }
         $player->getInventory()->setItemInHand($cup);
            break;
            
            case 277:
              $cup = ItemFactory::getInstance()->get(278, $hand->getDamage(), 1);
         if($hand->hasCustomName()){
           $cup->setCustomName($hand->getCustomName());
         }
         if($hand->hasEnchantments()){
           foreach($hand->getEnchantments() as $ec){
             $cup->addEnchantment($ec);
           }
         }
         if($hand->getLore() != []){
           $cup->setLore($hand->getLore());
         }
         $player->getInventory()->setItemInHand($cup);
              break;
              
              case 271:
                $cup = ItemFactory::getInstance()->get(270, $hand->getDamage(), 1);
         if($hand->hasCustomName()){
           $cup->setCustomName($hand->getCustomName());
         }
         if($hand->hasEnchantments()){
           foreach($hand->getEnchantments() as $ec){
             $cup->addEnchantment($ec);
           }
         }
         if($hand->getLore() != []){
           $cup->setLore($hand->getLore());
         }
         $player->getInventory()->setItemInHand($cup);
                break;
                
                case 275:
                  $cup = ItemFactory::getInstance()->get(274, $hand->getDamage(), 1);
         if($hand->hasCustomName()){
           $cup->setCustomName($hand->getCustomName());
         }
         if($hand->hasEnchantments()){
           foreach($hand->getEnchantments() as $ec){
             $cup->addEnchantment($ec);
           }
         }
         if($hand->getLore() != []){
           $cup->setLore($hand->getLore());
         }
         $player->getInventory()->setItemInHand($cup);
                  break;
                  
                  case 258:
                    $cup = ItemFactory::getInstance()->get(257, $hand->getDamage(), 1);
         if($hand->hasCustomName()){
           $cup->setCustomName($hand->getCustomName());
         }
         if($hand->hasEnchantments()){
           foreach($hand->getEnchantments() as $ec){
             $cup->addEnchantment($ec);
           }
         }
         if($hand->getLore() != []){
           $cup->setLore($hand->getLore());
         }
         $player->getInventory()->setItemInHand($cup);
                    break;
                    
                    case 279:
                      $cup = ItemFactory::getInstance()->get(278, $hand->getDamage(), 1);
         if($hand->hasCustomName()){
           $cup->setCustomName($hand->getCustomName());
         }
         if($hand->hasEnchantments()){
           foreach($hand->getEnchantments() as $ec){
             $cup->addEnchantment($ec);
           }
         }
         if($hand->getLore() != []){
           $cup->setLore($hand->getLore());
         }
         $player->getInventory()->setItemInHand($cup);
         break;
          }
          }
            break;
            
            case 14:
              if($hand instanceof Axe or $hand instanceof Shovel){
            switch($hand->getId()){
              case 269:
         $cup = ItemFactory::getInstance()->get(270, $hand->getDamage(), 1);
         if($hand->hasCustomName()){
           $cup->setCustomName($hand->getCustomName());
         }
         if($hand->hasEnchantments()){
           foreach($hand->getEnchantments() as $ec){
             $cup->addEnchantment($ec);
           }
         }
         if($hand->getLore() != []){
           $cup->setLore($hand->getLore());
         }
         $player->getInventory()->setItemInHand($cup);
         break;
         
         case 273: 
           $cup = ItemFactory::getInstance()->get(274, $hand->getDamage(), 1);
         if($hand->hasCustomName()){
           $cup->setCustomName($hand->getCustomName());
         }
         if($hand->hasEnchantments()){
           foreach($hand->getEnchantments() as $ec){
             $cup->addEnchantment($ec);
           }
         }
         if($hand->getLore() != []){
           $cup->setLore($hand->getLore());
         }
         $player->getInventory()->setItemInHand($cup);
           break;
          
          case 256:
            $cup = ItemFactory::getInstance()->get(257, $hand->getDamage(), 1);
         if($hand->hasCustomName()){
           $cup->setCustomName($hand->getCustomName());
         }
         if($hand->hasEnchantments()){
           foreach($hand->getEnchantments() as $ec){
             $cup->addEnchantment($ec);
           }
         }
         if($hand->getLore() != []){
           $cup->setLore($hand->getLore());
         }
         $player->getInventory()->setItemInHand($cup);
            break;
            
            case 277:
              $cup = ItemFactory::getInstance()->get(278, $hand->getDamage(), 1);
         if($hand->hasCustomName()){
           $cup->setCustomName($hand->getCustomName());
         }
         if($hand->hasEnchantments()){
           foreach($hand->getEnchantments() as $ec){
             $cup->addEnchantment($ec);
           }
         }
         if($hand->getLore() != []){
           $cup->setLore($hand->getLore());
         }
         $player->getInventory()->setItemInHand($cup);
              break;
              
              case 271:
                $cup = ItemFactory::getInstance()->get(270, $hand->getDamage(), 1);
         if($hand->hasCustomName()){
           $cup->setCustomName($hand->getCustomName());
         }
         if($hand->hasEnchantments()){
           foreach($hand->getEnchantments() as $ec){
             $cup->addEnchantment($ec);
           }
         }
         if($hand->getLore() != []){
           $cup->setLore($hand->getLore());
         }
         $player->getInventory()->setItemInHand($cup);
                break;
                
                case 275:
                  $cup = ItemFactory::getInstance()->get(274, $hand->getDamage(), 1);
         if($hand->hasCustomName()){
           $cup->setCustomName($hand->getCustomName());
         }
         if($hand->hasEnchantments()){
           foreach($hand->getEnchantments() as $ec){
             $cup->addEnchantment($ec);
           }
         }
         if($hand->getLore() != []){
           $cup->setLore($hand->getLore());
         }
         $player->getInventory()->setItemInHand($cup);
                  break;
                  
                  case 258:
                    $cup = ItemFactory::getInstance()->get(257, $hand->getDamage(), 1);
         if($hand->hasCustomName()){
           $cup->setCustomName($hand->getCustomName());
         }
         if($hand->hasEnchantments()){
           foreach($hand->getEnchantments() as $ec){
             $cup->addEnchantment($ec);
           }
         }
         if($hand->getLore() != []){
           $cup->setLore($hand->getLore());
         }
         $player->getInventory()->setItemInHand($cup);
                    break;
                    
                    case 279:
                      $cup = ItemFactory::getInstance()->get(278, $hand->getDamage(), 1);
         if($hand->hasCustomName()){
           $cup->setCustomName($hand->getCustomName());
         }
         if($hand->hasEnchantments()){
           foreach($hand->getEnchantments() as $ec){
             $cup->addEnchantment($ec);
           }
         }
         if($hand->getLore() != []){
           $cup->setLore($hand->getLore());
         }
         $player->getInventory()->setItemInHand($cup);
         break;
          }
          }
              break;
              
              case 15:
                if($hand instanceof Axe or $hand instanceof Shovel){
            switch($hand->getId()){
              case 269:
         $cup = ItemFactory::getInstance()->get(270, $hand->getDamage(), 1);
         if($hand->hasCustomName()){
           $cup->setCustomName($hand->getCustomName());
         }
         if($hand->hasEnchantments()){
           foreach($hand->getEnchantments() as $ec){
             $cup->addEnchantment($ec);
           }
         }
         if($hand->getLore() != []){
           $cup->setLore($hand->getLore());
         }
         $player->getInventory()->setItemInHand($cup);
         break;
         
         case 273: 
           $cup = ItemFactory::getInstance()->get(274, $hand->getDamage(), 1);
         if($hand->hasCustomName()){
           $cup->setCustomName($hand->getCustomName());
         }
         if($hand->hasEnchantments()){
           foreach($hand->getEnchantments() as $ec){
             $cup->addEnchantment($ec);
           }
         }
         if($hand->getLore() != []){
           $cup->setLore($hand->getLore());
         }
         $player->getInventory()->setItemInHand($cup);
           break;
          
          case 256:
            $cup = ItemFactory::getInstance()->get(257, $hand->getDamage(), 1);
         if($hand->hasCustomName()){
           $cup->setCustomName($hand->getCustomName());
         }
         if($hand->hasEnchantments()){
           foreach($hand->getEnchantments() as $ec){
             $cup->addEnchantment($ec);
           }
         }
         if($hand->getLore() != []){
           $cup->setLore($hand->getLore());
         }
         $player->getInventory()->setItemInHand($cup);
            break;
            
            case 277:
              $cup = ItemFactory::getInstance()->get(278, $hand->getDamage(), 1);
         if($hand->hasCustomName()){
           $cup->setCustomName($hand->getCustomName());
         }
         if($hand->hasEnchantments()){
           foreach($hand->getEnchantments() as $ec){
             $cup->addEnchantment($ec);
           }
         }
         if($hand->getLore() != []){
           $cup->setLore($hand->getLore());
         }
         $player->getInventory()->setItemInHand($cup);
              break;
              
              case 271:
                $cup = ItemFactory::getInstance()->get(270, $hand->getDamage(), 1);
         if($hand->hasCustomName()){
           $cup->setCustomName($hand->getCustomName());
         }
         if($hand->hasEnchantments()){
           foreach($hand->getEnchantments() as $ec){
             $cup->addEnchantment($ec);
           }
         }
         if($hand->getLore() != []){
           $cup->setLore($hand->getLore());
         }
         $player->getInventory()->setItemInHand($cup);
                break;
                
                case 275:
                  $cup = ItemFactory::getInstance()->get(274, $hand->getDamage(), 1);
         if($hand->hasCustomName()){
           $cup->setCustomName($hand->getCustomName());
         }
         if($hand->hasEnchantments()){
           foreach($hand->getEnchantments() as $ec){
             $cup->addEnchantment($ec);
           }
         }
         if($hand->getLore() != []){
           $cup->setLore($hand->getLore());
         }
         $player->getInventory()->setItemInHand($cup);
                  break;
                  
                  case 258:
                    $cup = ItemFactory::getInstance()->get(257, $hand->getDamage(), 1);
         if($hand->hasCustomName()){
           $cup->setCustomName($hand->getCustomName());
         }
         if($hand->hasEnchantments()){
           foreach($hand->getEnchantments() as $ec){
             $cup->addEnchantment($ec);
           }
         }
         if($hand->getLore() != []){
           $cup->setLore($hand->getLore());
         }
         $player->getInventory()->setItemInHand($cup);
                    break;
                    
                    case 279:
                      $cup = ItemFactory::getInstance()->get(278, $hand->getDamage(), 1);
         if($hand->hasCustomName()){
           $cup->setCustomName($hand->getCustomName());
         }
         if($hand->hasEnchantments()){
           foreach($hand->getEnchantments() as $ec){
             $cup->addEnchantment($ec);
           }
         }
         if($hand->getLore() != []){
           $cup->setLore($hand->getLore());
         }
         $player->getInventory()->setItemInHand($cup);
                      break;
          }
          }
                break;
                
                case 16:
                  if($hand instanceof Axe or $hand instanceof Shovel){
            switch($hand->getId()){
              case 269:
         $cup = ItemFactory::getInstance()->get(270, $hand->getDamage(), 1);
         if($hand->hasCustomName()){
           $cup->setCustomName($hand->getCustomName());
         }
         if($hand->hasEnchantments()){
           foreach($hand->getEnchantments() as $ec){
             $cup->addEnchantment($ec);
           }
         }
         if($hand->getLore() != []){
           $cup->setLore($hand->getLore());
         }
         $player->getInventory()->setItemInHand($cup);
         break;
         
         case 273: 
           $cup = ItemFactory::getInstance()->get(274, $hand->getDamage(), 1);
         if($hand->hasCustomName()){
           $cup->setCustomName($hand->getCustomName());
         }
         if($hand->hasEnchantments()){
           foreach($hand->getEnchantments() as $ec){
             $cup->addEnchantment($ec);
           }
         }
         if($hand->getLore() != []){
           $cup->setLore($hand->getLore());
         }
         $player->getInventory()->setItemInHand($cup);
           break;
          
          case 256:
            $cup = ItemFactory::getInstance()->get(257, $hand->getDamage(), 1);
         if($hand->hasCustomName()){
           $cup->setCustomName($hand->getCustomName());
         }
         if($hand->hasEnchantments()){
           foreach($hand->getEnchantments() as $ec){
             $cup->addEnchantment($ec);
           }
         }
         if($hand->getLore() != []){
           $cup->setLore($hand->getLore());
         }
         $player->getInventory()->setItemInHand($cup);
            break;
            
            case 277:
              $cup = ItemFactory::getInstance()->get(278, $hand->getDamage(), 1);
         if($hand->hasCustomName()){
           $cup->setCustomName($hand->getCustomName());
         }
         if($hand->hasEnchantments()){
           foreach($hand->getEnchantments() as $ec){
             $cup->addEnchantment($ec);
           }
         }
         if($hand->getLore() != []){
           $cup->setLore($hand->getLore());
         }
         $player->getInventory()->setItemInHand($cup);
              break;
              
              case 271:
                $cup = ItemFactory::getInstance()->get(270, $hand->getDamage(), 1);
         if($hand->hasCustomName()){
           $cup->setCustomName($hand->getCustomName());
         }
         if($hand->hasEnchantments()){
           foreach($hand->getEnchantments() as $ec){
             $cup->addEnchantment($ec);
           }
         }
         if($hand->getLore() != []){
           $cup->setLore($hand->getLore());
         }
         $player->getInventory()->setItemInHand($cup);
                break;
                
                case 275:
                  $cup = ItemFactory::getInstance()->get(274, $hand->getDamage(), 1);
         if($hand->hasCustomName()){
           $cup->setCustomName($hand->getCustomName());
         }
         if($hand->hasEnchantments()){
           foreach($hand->getEnchantments() as $ec){
             $cup->addEnchantment($ec);
           }
         }
         if($hand->getLore() != []){
           $cup->setLore($hand->getLore());
         }
         $player->getInventory()->setItemInHand($cup);
                  break;
                  
                  case 258:
                    $cup = ItemFactory::getInstance()->get(257, $hand->getDamage(), 1);
         if($hand->hasCustomName()){
           $cup->setCustomName($hand->getCustomName());
         }
         if($hand->hasEnchantments()){
           foreach($hand->getEnchantments() as $ec){
             $cup->addEnchantment($ec);
           }
         }
         if($hand->getLore() != []){
           $cup->setLore($hand->getLore());
         }
         $player->getInventory()->setItemInHand($cup);
                    break;
                    
                    case 279:
                      $cup = ItemFactory::getInstance()->get(278, $hand->getDamage(), 1);
         if($hand->hasCustomName()){
           $cup->setCustomName($hand->getCustomName());
         }
         if($hand->hasEnchantments()){
           foreach($hand->getEnchantments() as $ec){
             $cup->addEnchantment($ec);
           }
         }
         if($hand->getLore() != []){
           $cup->setLore($hand->getLore());
         }
         $player->getInventory()->setItemInHand($cup);
                      break;
          }
          }
                  break;
                  
                  case 21:
                    if($hand instanceof Axe or $hand instanceof Shovel){
            switch($hand->getId()){
              case 269:
         $cup = ItemFactory::getInstance()->get(270, $hand->getDamage(), 1);
         if($hand->hasCustomName()){
           $cup->setCustomName($hand->getCustomName());
         }
         if($hand->hasEnchantments()){
           foreach($hand->getEnchantments() as $ec){
             $cup->addEnchantment($ec);
           }
         }
         if($hand->getLore() != []){
           $cup->setLore($hand->getLore());
         }
         $player->getInventory()->setItemInHand($cup);
         break;
         
         case 273: 
           $cup = ItemFactory::getInstance()->get(274, $hand->getDamage(), 1);
         if($hand->hasCustomName()){
           $cup->setCustomName($hand->getCustomName());
         }
         if($hand->hasEnchantments()){
           foreach($hand->getEnchantments() as $ec){
             $cup->addEnchantment($ec);
           }
         }
         if($hand->getLore() != []){
           $cup->setLore($hand->getLore());
         }
         $player->getInventory()->setItemInHand($cup);
           break;
          
          case 256:
            $cup = ItemFactory::getInstance()->get(257, $hand->getDamage(), 1);
         if($hand->hasCustomName()){
           $cup->setCustomName($hand->getCustomName());
         }
         if($hand->hasEnchantments()){
           foreach($hand->getEnchantments() as $ec){
             $cup->addEnchantment($ec);
           }
         }
         if($hand->getLore() != []){
           $cup->setLore($hand->getLore());
         }
         $player->getInventory()->setItemInHand($cup);
            break;
            
            case 277:
              $cup = ItemFactory::getInstance()->get(278, $hand->getDamage(), 1);
         if($hand->hasCustomName()){
           $cup->setCustomName($hand->getCustomName());
         }
         if($hand->hasEnchantments()){
           foreach($hand->getEnchantments() as $ec){
             $cup->addEnchantment($ec);
           }
         }
         if($hand->getLore() != []){
           $cup->setLore($hand->getLore());
         }
         $player->getInventory()->setItemInHand($cup);
              break;
              
              case 271:
                $cup = ItemFactory::getInstance()->get(270, $hand->getDamage(), 1);
         if($hand->hasCustomName()){
           $cup->setCustomName($hand->getCustomName());
         }
         if($hand->hasEnchantments()){
           foreach($hand->getEnchantments() as $ec){
             $cup->addEnchantment($ec);
           }
         }
         if($hand->getLore() != []){
           $cup->setLore($hand->getLore());
         }
         $player->getInventory()->setItemInHand($cup);
                break;
                
                case 275:
                  $cup = ItemFactory::getInstance()->get(274, $hand->getDamage(), 1);
         if($hand->hasCustomName()){
           $cup->setCustomName($hand->getCustomName());
         }
         if($hand->hasEnchantments()){
           foreach($hand->getEnchantments() as $ec){
             $cup->addEnchantment($ec);
           }
         }
         if($hand->getLore() != []){
           $cup->setLore($hand->getLore());
         }
         $player->getInventory()->setItemInHand($cup);
                  break;
                  
                  case 258:
                    $cup = ItemFactory::getInstance()->get(257, $hand->getDamage(), 1);
         if($hand->hasCustomName()){
           $cup->setCustomName($hand->getCustomName());
         }
         if($hand->hasEnchantments()){
           foreach($hand->getEnchantments() as $ec){
             $cup->addEnchantment($ec);
           }
         }
         if($hand->getLore() != []){
           $cup->setLore($hand->getLore());
         }
         $player->getInventory()->setItemInHand($cup);
                    break;
                    
                    case 279:
                      $cup = ItemFactory::getInstance()->get(278, $hand->getDamage(), 1);
         if($hand->hasCustomName()){
           $cup->setCustomName($hand->getCustomName());
         }
         if($hand->hasEnchantments()){
           foreach($hand->getEnchantments() as $ec){
             $cup->addEnchantment($ec);
           }
         }
         if($hand->getLore() != []){
           $cup->setLore($hand->getLore());
         }
         $player->getInventory()->setItemInHand($cup);
                      break;
          }
          }
                    break;
                    
                    case 56:
                      if($hand instanceof Axe or $hand instanceof Shovel){
            switch($hand->getId()){
              case 269:
         $cup = ItemFactory::getInstance()->get(270, $hand->getDamage(), 1);
         if($hand->hasCustomName()){
           $cup->setCustomName($hand->getCustomName());
         }
         if($hand->hasEnchantments()){
           foreach($hand->getEnchantments() as $ec){
             $cup->addEnchantment($ec);
           }
         }
         if($hand->getLore() != []){
           $cup->setLore($hand->getLore());
         }
         $player->getInventory()->setItemInHand($cup);
         break;
         
         case 273: 
           $cup = ItemFactory::getInstance()->get(274, $hand->getDamage(), 1);
         if($hand->hasCustomName()){
           $cup->setCustomName($hand->getCustomName());
         }
         if($hand->hasEnchantments()){
           foreach($hand->getEnchantments() as $ec){
             $cup->addEnchantment($ec);
           }
         }
         if($hand->getLore() != []){
           $cup->setLore($hand->getLore());
         }
         $player->getInventory()->setItemInHand($cup);
           break;
          
          case 256:
            $cup = ItemFactory::getInstance()->get(257, $hand->getDamage(), 1);
         if($hand->hasCustomName()){
           $cup->setCustomName($hand->getCustomName());
         }
         if($hand->hasEnchantments()){
           foreach($hand->getEnchantments() as $ec){
             $cup->addEnchantment($ec);
           }
         }
         if($hand->getLore() != []){
           $cup->setLore($hand->getLore());
         }
         $player->getInventory()->setItemInHand($cup);
            break;
            
            case 277:
              $cup = ItemFactory::getInstance()->get(278, $hand->getDamage(), 1);
         if($hand->hasCustomName()){
           $cup->setCustomName($hand->getCustomName());
         }
         if($hand->hasEnchantments()){
           foreach($hand->getEnchantments() as $ec){
             $cup->addEnchantment($ec);
           }
         }
         if($hand->getLore() != []){
           $cup->setLore($hand->getLore());
         }
         $player->getInventory()->setItemInHand($cup);
              break;
              
              case 271:
                $cup = ItemFactory::getInstance()->get(270, $hand->getDamage(), 1);
         if($hand->hasCustomName()){
           $cup->setCustomName($hand->getCustomName());
         }
         if($hand->hasEnchantments()){
           foreach($hand->getEnchantments() as $ec){
             $cup->addEnchantment($ec);
           }
         }
         if($hand->getLore() != []){
           $cup->setLore($hand->getLore());
         }
         $player->getInventory()->setItemInHand($cup);
                break;
                
                case 275:
                  $cup = ItemFactory::getInstance()->get(274, $hand->getDamage(), 1);
         if($hand->hasCustomName()){
           $cup->setCustomName($hand->getCustomName());
         }
         if($hand->hasEnchantments()){
           foreach($hand->getEnchantments() as $ec){
             $cup->addEnchantment($ec);
           }
         }
         if($hand->getLore() != []){
           $cup->setLore($hand->getLore());
         }
         $player->getInventory()->setItemInHand($cup);
                  break;
                  
                  case 258:
                    $cup = ItemFactory::getInstance()->get(257, $hand->getDamage(), 1);
         if($hand->hasCustomName()){
           $cup->setCustomName($hand->getCustomName());
         }
         if($hand->hasEnchantments()){
           foreach($hand->getEnchantments() as $ec){
             $cup->addEnchantment($ec);
           }
         }
         if($hand->getLore() != []){
           $cup->setLore($hand->getLore());
         }
         $player->getInventory()->setItemInHand($cup);
                    break;
                    
                    case 279:
                      $cup = ItemFactory::getInstance()->get(278, $hand->getDamage(), 1);
         if($hand->hasCustomName()){
           $cup->setCustomName($hand->getCustomName());
         }
         if($hand->hasEnchantments()){
           foreach($hand->getEnchantments() as $ec){
             $cup->addEnchantment($ec);
           }
         }
         if($hand->getLore() != []){
           $cup->setLore($hand->getLore());
         }
         $player->getInventory()->setItemInHand($cup);
                      break;
          }
          }
                      break;
                      
                      case 73:
                        if($hand instanceof Axe or $hand instanceof Shovel){
            switch($hand->getId()){
              case 269:
         $cup = ItemFactory::getInstance()->get(270, $hand->getDamage(), 1);
         if($hand->hasCustomName()){
           $cup->setCustomName($hand->getCustomName());
         }
         if($hand->hasEnchantments()){
           foreach($hand->getEnchantments() as $ec){
             $cup->addEnchantment($ec);
           }
         }
         if($hand->getLore() != []){
           $cup->setLore($hand->getLore());
         }
         $player->getInventory()->setItemInHand($cup);
         break;
         
         case 273: 
           $cup = ItemFactory::getInstance()->get(274, $hand->getDamage(), 1);
         if($hand->hasCustomName()){
           $cup->setCustomName($hand->getCustomName());
         }
         if($hand->hasEnchantments()){
           foreach($hand->getEnchantments() as $ec){
             $cup->addEnchantment($ec);
           }
         }
         if($hand->getLore() != []){
           $cup->setLore($hand->getLore());
         }
         $player->getInventory()->setItemInHand($cup);
           break;
          
          case 256:
            $cup = ItemFactory::getInstance()->get(257, $hand->getDamage(), 1);
         if($hand->hasCustomName()){
           $cup->setCustomName($hand->getCustomName());
         }
         if($hand->hasEnchantments()){
           foreach($hand->getEnchantments() as $ec){
             $cup->addEnchantment($ec);
           }
         }
         if($hand->getLore() != []){
           $cup->setLore($hand->getLore());
         }
         $player->getInventory()->setItemInHand($cup);
            break;
            
            case 277:
              $cup = ItemFactory::getInstance()->get(278, $hand->getDamage(), 1);
         if($hand->hasCustomName()){
           $cup->setCustomName($hand->getCustomName());
         }
         if($hand->hasEnchantments()){
           foreach($hand->getEnchantments() as $ec){
             $cup->addEnchantment($ec);
           }
         }
         if($hand->getLore() != []){
           $cup->setLore($hand->getLore());
         }
         $player->getInventory()->setItemInHand($cup);
              break;
              
              case 271:
                $cup = ItemFactory::getInstance()->get(270, $hand->getDamage(), 1);
         if($hand->hasCustomName()){
           $cup->setCustomName($hand->getCustomName());
         }
         if($hand->hasEnchantments()){
           foreach($hand->getEnchantments() as $ec){
             $cup->addEnchantment($ec);
           }
         }
         if($hand->getLore() != []){
           $cup->setLore($hand->getLore());
         }
         $player->getInventory()->setItemInHand($cup);
                break;
                
                case 275:
                  $cup = ItemFactory::getInstance()->get(274, $hand->getDamage(), 1);
         if($hand->hasCustomName()){
           $cup->setCustomName($hand->getCustomName());
         }
         if($hand->hasEnchantments()){
           foreach($hand->getEnchantments() as $ec){
             $cup->addEnchantment($ec);
           }
         }
         if($hand->getLore() != []){
           $cup->setLore($hand->getLore());
         }
         $player->getInventory()->setItemInHand($cup);
                  break;
                  
                  case 258:
                    $cup = ItemFactory::getInstance()->get(257, $hand->getDamage(), 1);
         if($hand->hasCustomName()){
           $cup->setCustomName($hand->getCustomName());
         }
         if($hand->hasEnchantments()){
           foreach($hand->getEnchantments() as $ec){
             $cup->addEnchantment($ec);
           }
         }
         if($hand->getLore() != []){
           $cup->setLore($hand->getLore());
         }
         $player->getInventory()->setItemInHand($cup);
                    break;
                    
                    case 279:
                      $cup = ItemFactory::getInstance()->get(278, $hand->getDamage(), 1);
         if($hand->hasCustomName()){
           $cup->setCustomName($hand->getCustomName());
         }
         if($hand->hasEnchantments()){
           foreach($hand->getEnchantments() as $ec){
             $cup->addEnchantment($ec);
           }
         }
         if($hand->getLore() != []){
           $cup->setLore($hand->getLore());
         }
         $player->getInventory()->setItemInHand($cup);
                      break;
          }
          }
                        break;
                        
                        case 74:
                          if($hand instanceof Axe or $hand instanceof Shovel){
            switch($hand->getId()){
              case 269:
         $cup = ItemFactory::getInstance()->get(270, $hand->getDamage(), 1);
         if($hand->hasCustomName()){
           $cup->setCustomName($hand->getCustomName());
         }
         if($hand->hasEnchantments()){
           foreach($hand->getEnchantments() as $ec){
             $cup->addEnchantment($ec);
           }
         }
         if($hand->getLore() != []){
           $cup->setLore($hand->getLore());
         }
         $player->getInventory()->setItemInHand($cup);
         break;
         
         case 273: 
           $cup = ItemFactory::getInstance()->get(274, $hand->getDamage(), 1);
         if($hand->hasCustomName()){
           $cup->setCustomName($hand->getCustomName());
         }
         if($hand->hasEnchantments()){
           foreach($hand->getEnchantments() as $ec){
             $cup->addEnchantment($ec);
           }
         }
         if($hand->getLore() != []){
           $cup->setLore($hand->getLore());
         }
         $player->getInventory()->setItemInHand($cup);
           break;
          
          case 256:
            $cup = ItemFactory::getInstance()->get(257, $hand->getDamage(), 1);
         if($hand->hasCustomName()){
           $cup->setCustomName($hand->getCustomName());
         }
         if($hand->hasEnchantments()){
           foreach($hand->getEnchantments() as $ec){
             $cup->addEnchantment($ec);
           }
         }
         if($hand->getLore() != []){
           $cup->setLore($hand->getLore());
         }
         $player->getInventory()->setItemInHand($cup);
            break;
            
            case 277:
              $cup = ItemFactory::getInstance()->get(278, $hand->getDamage(), 1);
         if($hand->hasCustomName()){
           $cup->setCustomName($hand->getCustomName());
         }
         if($hand->hasEnchantments()){
           foreach($hand->getEnchantments() as $ec){
             $cup->addEnchantment($ec);
           }
         }
         if($hand->getLore() != []){
           $cup->setLore($hand->getLore());
         }
         $player->getInventory()->setItemInHand($cup);
              break;
              
              case 271:
                $cup = ItemFactory::getInstance()->get(270, $hand->getDamage(), 1);
         if($hand->hasCustomName()){
           $cup->setCustomName($hand->getCustomName());
         }
         if($hand->hasEnchantments()){
           foreach($hand->getEnchantments() as $ec){
             $cup->addEnchantment($ec);
           }
         }
         if($hand->getLore() != []){
           $cup->setLore($hand->getLore());
         }
         $player->getInventory()->setItemInHand($cup);
                break;
                
                case 275:
                  $cup = ItemFactory::getInstance()->get(274, $hand->getDamage(), 1);
         if($hand->hasCustomName()){
           $cup->setCustomName($hand->getCustomName());
         }
         if($hand->hasEnchantments()){
           foreach($hand->getEnchantments() as $ec){
             $cup->addEnchantment($ec);
           }
         }
         if($hand->getLore() != []){
           $cup->setLore($hand->getLore());
         }
         $player->getInventory()->setItemInHand($cup);
                  break;
                  
                  case 258:
                    $cup = ItemFactory::getInstance()->get(257, $hand->getDamage(), 1);
         if($hand->hasCustomName()){
           $cup->setCustomName($hand->getCustomName());
         }
         if($hand->hasEnchantments()){
           foreach($hand->getEnchantments() as $ec){
             $cup->addEnchantment($ec);
           }
         }
         if($hand->getLore() != []){
           $cup->setLore($hand->getLore());
         }
         $player->getInventory()->setItemInHand($cup);
                    break;
                    
                    case 279:
                      $cup = ItemFactory::getInstance()->get(278, $hand->getDamage(), 1);
         if($hand->hasCustomName()){
           $cup->setCustomName($hand->getCustomName());
         }
         if($hand->hasEnchantments()){
           foreach($hand->getEnchantments() as $ec){
             $cup->addEnchantment($ec);
           }
         }
         if($hand->getLore() != []){
           $cup->setLore($hand->getLore());
         }
         $player->getInventory()->setItemInHand($cup);
                      break;
          }
          }
                          break;
                          
                          case 129:
                            if($hand instanceof Axe or $hand instanceof Shovel){
            switch($hand->getId()){
              case 269:
         $cup = ItemFactory::getInstance()->get(270, $hand->getDamage(), 1);
         if($hand->hasCustomName()){
           $cup->setCustomName($hand->getCustomName());
         }
         if($hand->hasEnchantments()){
           foreach($hand->getEnchantments() as $ec){
             $cup->addEnchantment($ec);
           }
         }
         if($hand->getLore() != []){
           $cup->setLore($hand->getLore());
         }
         $player->getInventory()->setItemInHand($cup);
         break;
         
         case 273: 
           $cup = ItemFactory::getInstance()->get(274, $hand->getDamage(), 1);
         if($hand->hasCustomName()){
           $cup->setCustomName($hand->getCustomName());
         }
         if($hand->hasEnchantments()){
           foreach($hand->getEnchantments() as $ec){
             $cup->addEnchantment($ec);
           }
         }
         if($hand->getLore() != []){
           $cup->setLore($hand->getLore());
         }
         $player->getInventory()->setItemInHand($cup);
           break;
          
          case 256:
            $cup = ItemFactory::getInstance()->get(257, $hand->getDamage(), 1);
         if($hand->hasCustomName()){
           $cup->setCustomName($hand->getCustomName());
         }
         if($hand->hasEnchantments()){
           foreach($hand->getEnchantments() as $ec){
             $cup->addEnchantment($ec);
           }
         }
         if($hand->getLore() != []){
           $cup->setLore($hand->getLore());
         }
         $player->getInventory()->setItemInHand($cup);
            break;
            
            case 277:
              $cup = ItemFactory::getInstance()->get(278, $hand->getDamage(), 1);
         if($hand->hasCustomName()){
           $cup->setCustomName($hand->getCustomName());
         }
         if($hand->hasEnchantments()){
           foreach($hand->getEnchantments() as $ec){
             $cup->addEnchantment($ec);
           }
         }
         if($hand->getLore() != []){
           $cup->setLore($hand->getLore());
         }
         $player->getInventory()->setItemInHand($cup);
              break;
              
              case 271:
                $cup = ItemFactory::getInstance()->get(270, $hand->getDamage(), 1);
         if($hand->hasCustomName()){
           $cup->setCustomName($hand->getCustomName());
         }
         if($hand->hasEnchantments()){
           foreach($hand->getEnchantments() as $ec){
             $cup->addEnchantment($ec);
           }
         }
         if($hand->getLore() != []){
           $cup->setLore($hand->getLore());
         }
         $player->getInventory()->setItemInHand($cup);
                break;
                
                case 275:
                  $cup = ItemFactory::getInstance()->get(274, $hand->getDamage(), 1);
         if($hand->hasCustomName()){
           $cup->setCustomName($hand->getCustomName());
         }
         if($hand->hasEnchantments()){
           foreach($hand->getEnchantments() as $ec){
             $cup->addEnchantment($ec);
           }
         }
         if($hand->getLore() != []){
           $cup->setLore($hand->getLore());
         }
         $player->getInventory()->setItemInHand($cup);
                  break;
                  
                  case 258:
                    $cup = ItemFactory::getInstance()->get(257, $hand->getDamage(), 1);
         if($hand->hasCustomName()){
           $cup->setCustomName($hand->getCustomName());
         }
         if($hand->hasEnchantments()){
           foreach($hand->getEnchantments() as $ec){
             $cup->addEnchantment($ec);
           }
         }
         if($hand->getLore() != []){
           $cup->setLore($hand->getLore());
         }
         $player->getInventory()->setItemInHand($cup);
                    break;
                    
                    case 279:
                      $cup = ItemFactory::getInstance()->get(278, $hand->getDamage(), 1);
         if($hand->hasCustomName()){
           $cup->setCustomName($hand->getCustomName());
         }
         if($hand->hasEnchantments()){
           foreach($hand->getEnchantments() as $ec){
             $cup->addEnchantment($ec);
           }
         }
         if($hand->getLore() != []){
           $cup->setLore($hand->getLore());
         }
         $player->getInventory()->setItemInHand($cup);
                      break;
          }
          }
                            break;
                            
             case 153:
               if($hand instanceof Axe or $hand instanceof Shovel){
            switch($hand->getId()){
              case 269:
         $cup = ItemFactory::getInstance()->get(270, $hand->getDamage(), 1);
         if($hand->hasCustomName()){
           $cup->setCustomName($hand->getCustomName());
         }
         if($hand->hasEnchantments()){
           foreach($hand->getEnchantments() as $ec){
             $cup->addEnchantment($ec);
           }
         }
         if($hand->getLore() != []){
           $cup->setLore($hand->getLore());
         }
         $player->getInventory()->setItemInHand($cup);
         break;
         
         case 273: 
           $cup = ItemFactory::getInstance()->get(274, $hand->getDamage(), 1);
         if($hand->hasCustomName()){
           $cup->setCustomName($hand->getCustomName());
         }
         if($hand->hasEnchantments()){
           foreach($hand->getEnchantments() as $ec){
             $cup->addEnchantment($ec);
           }
         }
         if($hand->getLore() != []){
           $cup->setLore($hand->getLore());
         }
         $player->getInventory()->setItemInHand($cup);
           break;
          
          case 256:
            $cup = ItemFactory::getInstance()->get(257, $hand->getDamage(), 1);
         if($hand->hasCustomName()){
           $cup->setCustomName($hand->getCustomName());
         }
         if($hand->hasEnchantments()){
           foreach($hand->getEnchantments() as $ec){
             $cup->addEnchantment($ec);
           }
         }
         if($hand->getLore() != []){
           $cup->setLore($hand->getLore());
         }
         $player->getInventory()->setItemInHand($cup);
            break;
            
            case 277:
              $cup = ItemFactory::getInstance()->get(278, $hand->getDamage(), 1);
         if($hand->hasCustomName()){
           $cup->setCustomName($hand->getCustomName());
         }
         if($hand->hasEnchantments()){
           foreach($hand->getEnchantments() as $ec){
             $cup->addEnchantment($ec);
           }
         }
         if($hand->getLore() != []){
           $cup->setLore($hand->getLore());
         }
         $player->getInventory()->setItemInHand($cup);
              break;
              
              case 271:
                $cup = ItemFactory::getInstance()->get(270, $hand->getDamage(), 1);
         if($hand->hasCustomName()){
           $cup->setCustomName($hand->getCustomName());
         }
         if($hand->hasEnchantments()){
           foreach($hand->getEnchantments() as $ec){
             $cup->addEnchantment($ec);
           }
         }
         if($hand->getLore() != []){
           $cup->setLore($hand->getLore());
         }
         $player->getInventory()->setItemInHand($cup);
                break;
                
                case 275:
                  $cup = ItemFactory::getInstance()->get(274, $hand->getDamage(), 1);
         if($hand->hasCustomName()){
           $cup->setCustomName($hand->getCustomName());
         }
         if($hand->hasEnchantments()){
           foreach($hand->getEnchantments() as $ec){
             $cup->addEnchantment($ec);
           }
         }
         if($hand->getLore() != []){
           $cup->setLore($hand->getLore());
         }
         $player->getInventory()->setItemInHand($cup);
                  break;
                  
                  case 258:
                    $cup = ItemFactory::getInstance()->get(257, $hand->getDamage(), 1);
         if($hand->hasCustomName()){
           $cup->setCustomName($hand->getCustomName());
         }
         if($hand->hasEnchantments()){
           foreach($hand->getEnchantments() as $ec){
             $cup->addEnchantment($ec);
           }
         }
         if($hand->getLore() != []){
           $cup->setLore($hand->getLore());
         }
         $player->getInventory()->setItemInHand($cup);
                    break;
                    
                    case 279:
                      $cup = ItemFactory::getInstance()->get(278, $hand->getDamage(), 1);
         if($hand->hasCustomName()){
           $cup->setCustomName($hand->getCustomName());
         }
         if($hand->hasEnchantments()){
           foreach($hand->getEnchantments() as $ec){
             $cup->addEnchantment($ec);
           }
         }
         if($hand->getLore() != []){
           $cup->setLore($hand->getLore());
         }
         $player->getInventory()->setItemInHand($cup);
                      break;
          }
          }
               break;
               
              case 2: //Here start
                if($hand instanceof Axe or $hand instanceof Pickaxe){
            switch($hand->getId()){
              case 271:
         $xeng = ItemFactory::getInstance()->get(269, $hand->getDamage(), 1);
         if($hand->hasCustomName()){
           $xeng->setCustomName($hand->getCustomName());
         }
         if($hand->hasEnchantments()){
           foreach($hand->getEnchantments() as $ec){
             $xeng->addEnchantment($ec);
           }
         }
         if($hand->getLore() != []){
           $xeng->setLore($hand->getLore());
         }
         $player->getInventory()->setItemInHand($xeng);
         break;
         
         case 275: 
           $xeng = ItemFactory::getInstance()->get(273, $hand->getDamage(), 1);
         if($hand->hasCustomName()){
           $xeng->setCustomName($hand->getCustomName());
         }
         if($hand->hasEnchantments()){
           foreach($hand->getEnchantments() as $ec){
             $xeng->addEnchantment($ec);
           }
         }
         if($hand->getLore() != []){
           $xeng->setLore($hand->getLore());
         }
         $player->getInventory()->setItemInHand($xeng);
           break;
          
          case 258:
            $xeng = ItemFactory::getInstance()->get(256, $hand->getDamage(), 1);
         if($hand->hasCustomName()){
           $xeng->setCustomName($hand->getCustomName());
         }
         if($hand->hasEnchantments()){
           foreach($hand->getEnchantments() as $ec){
             $xeng->addEnchantment($ec);
           }
         }
         if($hand->getLore() != []){
           $xeng->setLore($hand->getLore());
         }
         $player->getInventory()->setItemInHand($xeng);
            break;
            
            case 279:
              $xeng = ItemFactory::getInstance()->get(277, $hand->getDamage(), 1);
         if($hand->hasCustomName()){
           $xeng->setCustomName($hand->getCustomName());
         }
         if($hand->hasEnchantments()){
           foreach($hand->getEnchantments() as $ec){
             $xeng->addEnchantment($ec);
           }
         }
         if($hand->getLore() != []){
           $xeng->setLore($hand->getLore());
         }
         $player->getInventory()->setItemInHand($xeng);
              break;
              
              case 270:
                $xeng = ItemFactory::getInstance()->get(269, $hand->getDamage(), 1);
         if($hand->hasCustomName()){
           $xeng->setCustomName($hand->getCustomName());
         }
         if($hand->hasEnchantments()){
           foreach($hand->getEnchantments() as $ec){
             $xeng->addEnchantment($ec);
           }
         }
         if($hand->getLore() != []){
           $xeng->setLore($hand->getLore());
         }
         $player->getInventory()->setItemInHand($xeng);
                break;
                
                case 274:
                  $xeng = ItemFactory::getInstance()->get(273, $hand->getDamage(), 1);
         if($hand->hasCustomName()){
           $xeng->setCustomName($hand->getCustomName());
         }
         if($hand->hasEnchantments()){
           foreach($hand->getEnchantments() as $ec){
             $xeng->addEnchantment($ec);
           }
         }
         if($hand->getLore() != []){
           $xeng->setLore($hand->getLore());
         }
         $player->getInventory()->setItemInHand($xeng);
                  break;
                  
                  case 257:
                    $xeng = ItemFactory::getInstance()->get(256, $hand->getDamage(), 1);
         if($hand->hasCustomName()){
           $xeng->setCustomName($hand->getCustomName());
         }
         if($hand->hasEnchantments()){
           foreach($hand->getEnchantments() as $ec){
             $xeng->addEnchantment($ec);
           }
         }
         if($hand->getLore() != []){
           $xeng->setLore($hand->getLore());
         }
         $player->getInventory()->setItemInHand($xeng);
                    break;
                    
                    case 278:
                      $xeng = ItemFactory::getInstance()->get(277, $hand->getDamage(), 1);
         if($hand->hasCustomName()){
           $xeng->setCustomName($hand->getCustomName());
         }
         if($hand->hasEnchantments()){
           foreach($hand->getEnchantments() as $ec){
             $xeng->addEnchantment($ec);
           }
         }
         if($hand->getLore() != []){
           $xeng->setLore($hand->getLore());
         }
         $player->getInventory()->setItemInHand($xeng);
                      break;
          }
          }
                break; //Here end
                
                case 3:
                  if($hand instanceof Axe or $hand instanceof Pickaxe){
            switch($hand->getId()){
              case 271:
         $xeng = ItemFactory::getInstance()->get(269, $hand->getDamage(), 1);
         if($hand->hasCustomName()){
           $xeng->setCustomName($hand->getCustomName());
         }
         if($hand->hasEnchantments()){
           foreach($hand->getEnchantments() as $ec){
             $xeng->addEnchantment($ec);
           }
         }
         if($hand->getLore() != []){
           $xeng->setLore($hand->getLore());
         }
         $player->getInventory()->setItemInHand($xeng);
         break;
         
         case 275: 
           $xeng = ItemFactory::getInstance()->get(273, $hand->getDamage(), 1);
         if($hand->hasCustomName()){
           $xeng->setCustomName($hand->getCustomName());
         }
         if($hand->hasEnchantments()){
           foreach($hand->getEnchantments() as $ec){
             $xeng->addEnchantment($ec);
           }
         }
         if($hand->getLore() != []){
           $xeng->setLore($hand->getLore());
         }
         $player->getInventory()->setItemInHand($xeng);
           break;
          
          case 258:
            $xeng = ItemFactory::getInstance()->get(256, $hand->getDamage(), 1);
         if($hand->hasCustomName()){
           $xeng->setCustomName($hand->getCustomName());
         }
         if($hand->hasEnchantments()){
           foreach($hand->getEnchantments() as $ec){
             $xeng->addEnchantment($ec);
           }
         }
         if($hand->getLore() != []){
           $xeng->setLore($hand->getLore());
         }
         $player->getInventory()->setItemInHand($xeng);
            break;
            
            case 279:
              $xeng = ItemFactory::getInstance()->get(277, $hand->getDamage(), 1);
         if($hand->hasCustomName()){
           $xeng->setCustomName($hand->getCustomName());
         }
         if($hand->hasEnchantments()){
           foreach($hand->getEnchantments() as $ec){
             $xeng->addEnchantment($ec);
           }
         }
         if($hand->getLore() != []){
           $xeng->setLore($hand->getLore());
         }
         $player->getInventory()->setItemInHand($xeng);
              break;
              
              case 270:
                $xeng = ItemFactory::getInstance()->get(269, $hand->getDamage(), 1);
         if($hand->hasCustomName()){
           $xeng->setCustomName($hand->getCustomName());
         }
         if($hand->hasEnchantments()){
           foreach($hand->getEnchantments() as $ec){
             $xeng->addEnchantment($ec);
           }
         }
         if($hand->getLore() != []){
           $xeng->setLore($hand->getLore());
         }
         $player->getInventory()->setItemInHand($xeng);
                break;
                
                case 274:
                  $xeng = ItemFactory::getInstance()->get(273, $hand->getDamage(), 1);
         if($hand->hasCustomName()){
           $xeng->setCustomName($hand->getCustomName());
         }
         if($hand->hasEnchantments()){
           foreach($hand->getEnchantments() as $ec){
             $xeng->addEnchantment($ec);
           }
         }
         if($hand->getLore() != []){
           $xeng->setLore($hand->getLore());
         }
         $player->getInventory()->setItemInHand($xeng);
                  break;
                  
                  case 257:
                    $xeng = ItemFactory::getInstance()->get(256, $hand->getDamage(), 1);
         if($hand->hasCustomName()){
           $xeng->setCustomName($hand->getCustomName());
         }
         if($hand->hasEnchantments()){
           foreach($hand->getEnchantments() as $ec){
             $xeng->addEnchantment($ec);
           }
         }
         if($hand->getLore() != []){
           $xeng->setLore($hand->getLore());
         }
         $player->getInventory()->setItemInHand($xeng);
                    break;
                    
                    case 278:
                      $xeng = ItemFactory::getInstance()->get(277, $hand->getDamage(), 1);
         if($hand->hasCustomName()){
           $xeng->setCustomName($hand->getCustomName());
         }
         if($hand->hasEnchantments()){
           foreach($hand->getEnchantments() as $ec){
             $xeng->addEnchantment($ec);
           }
         }
         if($hand->getLore() != []){
           $xeng->setLore($hand->getLore());
         }
         $player->getInventory()->setItemInHand($xeng);
                      break;
          }
          }
                  break;
                  
                  case 12:
                    if($hand instanceof Axe or $hand instanceof Pickaxe){
            switch($hand->getId()){
              case 271:
         $xeng = ItemFactory::getInstance()->get(269, $hand->getDamage(), 1);
         if($hand->hasCustomName()){
           $xeng->setCustomName($hand->getCustomName());
         }
         if($hand->hasEnchantments()){
           foreach($hand->getEnchantments() as $ec){
             $xeng->addEnchantment($ec);
           }
         }
         if($hand->getLore() != []){
           $xeng->setLore($hand->getLore());
         }
         $player->getInventory()->setItemInHand($xeng);
         break;
         
         case 275: 
           $xeng = ItemFactory::getInstance()->get(273, $hand->getDamage(), 1);
         if($hand->hasCustomName()){
           $xeng->setCustomName($hand->getCustomName());
         }
         if($hand->hasEnchantments()){
           foreach($hand->getEnchantments() as $ec){
             $xeng->addEnchantment($ec);
           }
         }
         if($hand->getLore() != []){
           $xeng->setLore($hand->getLore());
         }
         $player->getInventory()->setItemInHand($xeng);
           break;
          
          case 258:
            $xeng = ItemFactory::getInstance()->get(256, $hand->getDamage(), 1);
         if($hand->hasCustomName()){
           $xeng->setCustomName($hand->getCustomName());
         }
         if($hand->hasEnchantments()){
           foreach($hand->getEnchantments() as $ec){
             $xeng->addEnchantment($ec);
           }
         }
         if($hand->getLore() != []){
           $xeng->setLore($hand->getLore());
         }
         $player->getInventory()->setItemInHand($xeng);
            break;
            
            case 279:
              $xeng = ItemFactory::getInstance()->get(277, $hand->getDamage(), 1);
         if($hand->hasCustomName()){
           $xeng->setCustomName($hand->getCustomName());
         }
         if($hand->hasEnchantments()){
           foreach($hand->getEnchantments() as $ec){
             $xeng->addEnchantment($ec);
           }
         }
         if($hand->getLore() != []){
           $xeng->setLore($hand->getLore());
         }
         $player->getInventory()->setItemInHand($xeng);
              break;
              
              case 270:
                $xeng = ItemFactory::getInstance()->get(269, $hand->getDamage(), 1);
         if($hand->hasCustomName()){
           $xeng->setCustomName($hand->getCustomName());
         }
         if($hand->hasEnchantments()){
           foreach($hand->getEnchantments() as $ec){
             $xeng->addEnchantment($ec);
           }
         }
         if($hand->getLore() != []){
           $xeng->setLore($hand->getLore());
         }
         $player->getInventory()->setItemInHand($xeng);
                break;
                
                case 274:
                  $xeng = ItemFactory::getInstance()->get(273, $hand->getDamage(), 1);
         if($hand->hasCustomName()){
           $xeng->setCustomName($hand->getCustomName());
         }
         if($hand->hasEnchantments()){
           foreach($hand->getEnchantments() as $ec){
             $xeng->addEnchantment($ec);
           }
         }
         if($hand->getLore() != []){
           $xeng->setLore($hand->getLore());
         }
         $player->getInventory()->setItemInHand($xeng);
                  break;
                  
                  case 257:
                    $xeng = ItemFactory::getInstance()->get(256, $hand->getDamage(), 1);
         if($hand->hasCustomName()){
           $xeng->setCustomName($hand->getCustomName());
         }
         if($hand->hasEnchantments()){
           foreach($hand->getEnchantments() as $ec){
             $xeng->addEnchantment($ec);
           }
         }
         if($hand->getLore() != []){
           $xeng->setLore($hand->getLore());
         }
         $player->getInventory()->setItemInHand($xeng);
                    break;
                    
                    case 278:
                      $xeng = ItemFactory::getInstance()->get(277, $hand->getDamage(), 1);
         if($hand->hasCustomName()){
           $xeng->setCustomName($hand->getCustomName());
         }
         if($hand->hasEnchantments()){
           foreach($hand->getEnchantments() as $ec){
             $xeng->addEnchantment($ec);
           }
         }
         if($hand->getLore() != []){
           $xeng->setLore($hand->getLore());
         }
         $player->getInventory()->setItemInHand($xeng);
                      break;
          }
          }
                    break;
                    
                    case 13:
                      if($hand instanceof Axe or $hand instanceof Pickaxe){
            switch($hand->getId()){
              case 271:
         $xeng = ItemFactory::getInstance()->get(269, $hand->getDamage(), 1);
         if($hand->hasCustomName()){
           $xeng->setCustomName($hand->getCustomName());
         }
         if($hand->hasEnchantments()){
           foreach($hand->getEnchantments() as $ec){
             $xeng->addEnchantment($ec);
           }
         }
         if($hand->getLore() != []){
           $xeng->setLore($hand->getLore());
         }
         $player->getInventory()->setItemInHand($xeng);
         break;
         
         case 275: 
           $xeng = ItemFactory::getInstance()->get(273, $hand->getDamage(), 1);
         if($hand->hasCustomName()){
           $xeng->setCustomName($hand->getCustomName());
         }
         if($hand->hasEnchantments()){
           foreach($hand->getEnchantments() as $ec){
             $xeng->addEnchantment($ec);
           }
         }
         if($hand->getLore() != []){
           $xeng->setLore($hand->getLore());
         }
         $player->getInventory()->setItemInHand($xeng);
           break;
          
          case 258:
            $xeng = ItemFactory::getInstance()->get(256, $hand->getDamage(), 1);
         if($hand->hasCustomName()){
           $xeng->setCustomName($hand->getCustomName());
         }
         if($hand->hasEnchantments()){
           foreach($hand->getEnchantments() as $ec){
             $xeng->addEnchantment($ec);
           }
         }
         if($hand->getLore() != []){
           $xeng->setLore($hand->getLore());
         }
         $player->getInventory()->setItemInHand($xeng);
            break;
            
            case 279:
              $xeng = ItemFactory::getInstance()->get(277, $hand->getDamage(), 1);
         if($hand->hasCustomName()){
           $xeng->setCustomName($hand->getCustomName());
         }
         if($hand->hasEnchantments()){
           foreach($hand->getEnchantments() as $ec){
             $xeng->addEnchantment($ec);
           }
         }
         if($hand->getLore() != []){
           $xeng->setLore($hand->getLore());
         }
         $player->getInventory()->setItemInHand($xeng);
              break;
              
              case 270:
                $xeng = ItemFactory::getInstance()->get(269, $hand->getDamage(), 1);
         if($hand->hasCustomName()){
           $xeng->setCustomName($hand->getCustomName());
         }
         if($hand->hasEnchantments()){
           foreach($hand->getEnchantments() as $ec){
             $xeng->addEnchantment($ec);
           }
         }
         if($hand->getLore() != []){
           $xeng->setLore($hand->getLore());
         }
         $player->getInventory()->setItemInHand($xeng);
                break;
                
                case 274:
                  $xeng = ItemFactory::getInstance()->get(273, $hand->getDamage(), 1);
         if($hand->hasCustomName()){
           $xeng->setCustomName($hand->getCustomName());
         }
         if($hand->hasEnchantments()){
           foreach($hand->getEnchantments() as $ec){
             $xeng->addEnchantment($ec);
           }
         }
         if($hand->getLore() != []){
           $xeng->setLore($hand->getLore());
         }
         $player->getInventory()->setItemInHand($xeng);
                  break;
                  
                  case 257:
                    $xeng = ItemFactory::getInstance()->get(256, $hand->getDamage(), 1);
         if($hand->hasCustomName()){
           $xeng->setCustomName($hand->getCustomName());
         }
         if($hand->hasEnchantments()){
           foreach($hand->getEnchantments() as $ec){
             $xeng->addEnchantment($ec);
           }
         }
         if($hand->getLore() != []){
           $xeng->setLore($hand->getLore());
         }
         $player->getInventory()->setItemInHand($xeng);
                    break;
                    
                    case 278:
                      $xeng = ItemFactory::getInstance()->get(277, $hand->getDamage(), 1);
         if($hand->hasCustomName()){
           $xeng->setCustomName($hand->getCustomName());
         }
         if($hand->hasEnchantments()){
           foreach($hand->getEnchantments() as $ec){
             $xeng->addEnchantment($ec);
           }
         }
         if($hand->getLore() != []){
           $xeng->setLore($hand->getLore());
         }
         $player->getInventory()->setItemInHand($xeng);
                      break;
          }
          }
                      break;
                  
                  case 17: //Start wood
                    if($hand instanceof Shovel or $hand instanceof Pickaxe){
            switch($hand->getId()){
              case 269:
         $riu = ItemFactory::getInstance()->get(271, $hand->getDamage(), 1);
         if($hand->hasCustomName()){
           $riu->setCustomName($hand->getCustomName());
         }
         if($hand->hasEnchantments()){
           foreach($hand->getEnchantments() as $ec){
             $riu->addEnchantment($ec);
           }
         }
         if($hand->getLore() != []){
           $riu->setLore($hand->getLore());
         }
         $player->getInventory()->setItemInHand($riu);
         break;
         
         case 273: 
           $riu = ItemFactory::getInstance()->get(275, $hand->getDamage(), 1);
         if($hand->hasCustomName()){
           $riu->setCustomName($hand->getCustomName());
         }
         if($hand->hasEnchantments()){
           foreach($hand->getEnchantments() as $ec){
             $riu->addEnchantment($ec);
           }
         }
         if($hand->getLore() != []){
           $riu->setLore($hand->getLore());
         }
         $player->getInventory()->setItemInHand($riu);
           break;
          
          case 256:
            $riu = ItemFactory::getInstance()->get(258, $hand->getDamage(), 1);
         if($hand->hasCustomName()){
           $riu->setCustomName($hand->getCustomName());
         }
         if($hand->hasEnchantments()){
           foreach($hand->getEnchantments() as $ec){
             $riu->addEnchantment($ec);
           }
         }
         if($hand->getLore() != []){
           $riu->setLore($hand->getLore());
         }
         $player->getInventory()->setItemInHand($riu);
            break;
            
            case 277:
              $riu = ItemFactory::getInstance()->get(279, $hand->getDamage(), 1);
         if($hand->hasCustomName()){
           $riu->setCustomName($hand->getCustomName());
         }
         if($hand->hasEnchantments()){
           foreach($hand->getEnchantments() as $ec){
             $riu->addEnchantment($ec);
           }
         }
         if($hand->getLore() != []){
           $riu->setLore($hand->getLore());
         }
         $player->getInventory()->setItemInHand($riu);
              break;
              
              case 270:
                $riu = ItemFactory::getInstance()->get(271, $hand->getDamage(), 1);
         if($hand->hasCustomName()){
           $riu->setCustomName($hand->getCustomName());
         }
         if($hand->hasEnchantments()){
           foreach($hand->getEnchantments() as $ec){
             $riu->addEnchantment($ec);
           }
         }
         if($hand->getLore() != []){
           $riu->setLore($hand->getLore());
         }
         $player->getInventory()->setItemInHand($riu);
                break;
                
                case 274:
                  $riu = ItemFactory::getInstance()->get(275, $hand->getDamage(), 1);
         if($hand->hasCustomName()){
           $riu->setCustomName($hand->getCustomName());
         }
         if($hand->hasEnchantments()){
           foreach($hand->getEnchantments() as $ec){
             $riu->addEnchantment($ec);
           }
         }
         if($hand->getLore() != []){
           $riu->setLore($hand->getLore());
         }
         $player->getInventory()->setItemInHand($riu);
                  break;
                  
                  case 257:
                    $riu = ItemFactory::getInstance()->get(258, $hand->getDamage(), 1);
         if($hand->hasCustomName()){
           $riu->setCustomName($hand->getCustomName());
         }
         if($hand->hasEnchantments()){
           foreach($hand->getEnchantments() as $ec){
             $riu->addEnchantment($ec);
           }
         }
         if($hand->getLore() != []){
           $riu->setLore($hand->getLore());
         }
         $player->getInventory()->setItemInHand($riu);
                    break;
                    
                    case 278:
                      $riu = ItemFactory::getInstance()->get(279, $hand->getDamage(), 1);
         if($hand->hasCustomName()){
           $riu->setCustomName($hand->getCustomName());
         }
         if($hand->hasEnchantments()){
           foreach($hand->getEnchantments() as $ec){
             $riu->addEnchantment($ec);
           }
         }
         if($hand->getLore() != []){
           $riu->setLore($hand->getLore());
         }
         $player->getInventory()->setItemInHand($riu);
                      break;
          }
          }
                    break; //End wood
                    
                    case 162:
                      if($hand instanceof Shovel or $hand instanceof Pickaxe){
            switch($hand->getId()){
              case 269:
         $riu = ItemFactory::getInstance()->get(271, $hand->getDamage(), 1);
         if($hand->hasCustomName()){
           $riu->setCustomName($hand->getCustomName());
         }
         if($hand->hasEnchantments()){
           foreach($hand->getEnchantments() as $ec){
             $riu->addEnchantment($ec);
           }
         }
         if($hand->getLore() != []){
           $riu->setLore($hand->getLore());
         }
         $player->getInventory()->setItemInHand($riu);
         break;
         
         case 273: 
           $riu = ItemFactory::getInstance()->get(275, $hand->getDamage(), 1);
         if($hand->hasCustomName()){
           $riu->setCustomName($hand->getCustomName());
         }
         if($hand->hasEnchantments()){
           foreach($hand->getEnchantments() as $ec){
             $riu->addEnchantment($ec);
           }
         }
         if($hand->getLore() != []){
           $riu->setLore($hand->getLore());
         }
         $player->getInventory()->setItemInHand($riu);
           break;
          
          case 256:
            $riu = ItemFactory::getInstance()->get(258, $hand->getDamage(), 1);
         if($hand->hasCustomName()){
           $riu->setCustomName($hand->getCustomName());
         }
         if($hand->hasEnchantments()){
           foreach($hand->getEnchantments() as $ec){
             $riu->addEnchantment($ec);
           }
         }
         if($hand->getLore() != []){
           $riu->setLore($hand->getLore());
         }
         $player->getInventory()->setItemInHand($riu);
            break;
            
            case 277:
              $riu = ItemFactory::getInstance()->get(279, $hand->getDamage(), 1);
         if($hand->hasCustomName()){
           $riu->setCustomName($hand->getCustomName());
         }
         if($hand->hasEnchantments()){
           foreach($hand->getEnchantments() as $ec){
             $riu->addEnchantment($ec);
           }
         }
         if($hand->getLore() != []){
           $riu->setLore($hand->getLore());
         }
         $player->getInventory()->setItemInHand($riu);
              break;
              
              case 270:
                $riu = ItemFactory::getInstance()->get(271, $hand->getDamage(), 1);
         if($hand->hasCustomName()){
           $riu->setCustomName($hand->getCustomName());
         }
         if($hand->hasEnchantments()){
           foreach($hand->getEnchantments() as $ec){
             $riu->addEnchantment($ec);
           }
         }
         if($hand->getLore() != []){
           $riu->setLore($hand->getLore());
         }
         $player->getInventory()->setItemInHand($riu);
                break;
                
                case 274:
                  $riu = ItemFactory::getInstance()->get(275, $hand->getDamage(), 1);
         if($hand->hasCustomName()){
           $riu->setCustomName($hand->getCustomName());
         }
         if($hand->hasEnchantments()){
           foreach($hand->getEnchantments() as $ec){
             $riu->addEnchantment($ec);
           }
         }
         if($hand->getLore() != []){
           $riu->setLore($hand->getLore());
         }
         $player->getInventory()->setItemInHand($riu);
                  break;
                  
                  case 257:
                    $riu = ItemFactory::getInstance()->get(258, $hand->getDamage(), 1);
         if($hand->hasCustomName()){
           $riu->setCustomName($hand->getCustomName());
         }
         if($hand->hasEnchantments()){
           foreach($hand->getEnchantments() as $ec){
             $riu->addEnchantment($ec);
           }
         }
         if($hand->getLore() != []){
           $riu->setLore($hand->getLore());
         }
         $player->getInventory()->setItemInHand($riu);
                    break;
                    
                    case 278:
                      $riu = ItemFactory::getInstance()->get(279, $hand->getDamage(), 1);
         if($hand->hasCustomName()){
           $riu->setCustomName($hand->getCustomName());
         }
         if($hand->hasEnchantments()){
           foreach($hand->getEnchantments() as $ec){
             $riu->addEnchantment($ec);
           }
         }
         if($hand->getLore() != []){
           $riu->setLore($hand->getLore());
         }
         $player->getInventory()->setItemInHand($riu);
                      break;
          }
          }
                      break;
      }
    }
  }
}