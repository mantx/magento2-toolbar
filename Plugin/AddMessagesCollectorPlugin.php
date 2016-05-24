<?php

namespace MagentoHackathon\Toolbar\Plugin;

use MagentoHackathon\Toolbar\Toolbar;
use DebugBar\DataCollector\MessagesCollector;

/**
 * Adds the Events collector
 *
 */
class AddMessagesCollectorPlugin extends AbstractAddCollectorPlugin
{
    public function __construct(Toolbar $toolbar, MessagesCollector $collector)
    {
        parent::__construct($toolbar, $collector);
    }
}
