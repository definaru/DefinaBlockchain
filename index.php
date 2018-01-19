<?php

namespace body\aiDefina

use src\Blockchain;
use body\Scripts;

class DefinaBlockchain 
{
  
  
  protected function miningCripto()
  {
    $Blockchain = new Blockchain(Scripts::site(), Blockchain::api());
    return $Blockchain->setServiceUrl(Scripts::site());
  }
  
  // Network Timeouts
  protected function NetworkTime()
  {
    return $Blockchain->setTimeout($timeout_seconds);
  }
  
  
}

?>
