<?php

namespace amangini\ArtifactDeploy;

use Symfony\Component\Yaml\Yaml;

class ArtifactDeploy
{
    public static function build()
    {
        if (! file_exists(getcwd() . '/deploy/artifact-deploy.yml')){
            throw new \Exception("You do not have any builds defined.");
        }

        $definition = Yaml::parseFile(getcwd() . '/deploy/artifact-deploy.yml');
        echo print_r($definition, true);
    }
}
