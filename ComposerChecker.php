<?php
namespace Hipay\PHPCI\Plugin;

use PHPCI\Plugin;
use SensioLabs\Security\SecurityChecker;

class ComposerChecker implements Plugin
{
    public function __construct(Builder $phpci, Build $build, array $options = array())
    {
        $this->phpci = $phpci;
        $this->build = $build;
        $this->buildArgs($options);
    }

    public function buildArgs($options)
    {
    }

    public static function canExecute($stage, Builder $builder, Build $build)
    {
        $path = $builder->buildPath . '/composer.lock';

        if (file_exists($path) && $stage == 'setup') {
            return true;
        }

        return false;
    }

    public function execute()
    {
        $this->phpci->logExecOutput(false);

        $checker = new SecurityChecker();
        $alerts = $checker->check($this->phpci->buildPath . '/composer.lock');

        if (!$alerts) {
            return true;
        }
        return false;
    }
}
