<?php

namespace Command;

use Model\User;
use Service\API;
use splitbrain\phpcli\CLI;
use splitbrain\phpcli\Options;


class ApiCommand extends CLI
{
    protected function setup(Options $options): void
    {
        $options->setHelp('Call API for DB entities');
        $options->registerOption('help', 'print help', 'h');
    }

    protected function main(Options $options): void
    {
        if ($options->getOpt('help')) {
            $this->info($options->help());
        } else {
            $users = new User();
            foreach ($users->fetchAll() as $user) {
                $this->info("Sending data of user: {$user['id']}");
                API::callApi($user['id'], $user['name'])
                    ? $this->info('ok')
                    : $this->alert('not ok');
            }
            
            $this->success('Done');
        }
        
    }
}
