<?php
namespace App\Routing\Filter;

use Cake\Event\Event;
use Cake\Network\Response;
use Cake\Routing\DispatcherFilter;

class MyFilter extends DispatcherFilter
{
    public function afterDispatch(Event $event)
    {
        /** @var Response $response */
        $response = $event->data['response'];
        $response->body($response->body() . '<p>Filter-appended content</p>');
    }
}