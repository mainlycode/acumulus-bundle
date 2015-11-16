<?php

namespace MainlyCode\Bundle\AcumulusBundle\Command;

use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class GeneralMyAcumulusCommand extends ContainerAwareCommand
{
    protected function configure()
    {
        $this
            ->setName('acumulus:general:my-acumulus')
            ->setDescription('A simple API-call providing some information on your registration details. Useful for showing in setups where multiple accounts are registered or specific account-information needs to be displayed.')
        ;
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $data = $this->getContainer()->get('acumulus.provider.general')
            ->getMyAcumulus()
            ->sendRequest();

        $output->write(var_export($data, true));
    }
}
