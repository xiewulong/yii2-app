# Yii 2 Project Template



### Requirements
*	[Composer](https://getcomposer.org/doc/00-intro.md)
*	[Composer Asset Plugin](https://github.com/fxpio/composer-asset-plugin)



### Installation
```
composer create-project xiewulong/yii2-app Appname
```



### Directory structure
```
apps                     contains webapps
    backend/
        assets/          contains application assets such as JavaScript and CSS
        components/      contains backend-specific components
        config/          contains backend configurations
        controllers/     contains Web controller classes
        models/          contains backend-specific model classes
        runtime/         contains files generated during runtime
        views/           contains view files for the Web application
        web/             contains the entry script and Web resources
        widgets/         contains backend widgets
    frontend/
        assets/          contains application assets such as JavaScript and CSS
        components/      contains frontend-specific components
        config/          contains frontend configurations
        controllers/     contains Web controller classes
        models/          contains frontend-specific model classes
        runtime/         contains files generated during runtime
        views/           contains view files for the Web application
        web/             contains the entry script and Web resources
        widgets/         contains frontend widgets
common
    assets/              contains shared assets
    components/          contains shared components
    config/              contains shared configurations
    mail/                contains view files for e-mails
    messages/            contains i18n messages
    models/              contains shared models
    widgets/             contains shared widgets
console
    config/              contains console configurations
    controllers/         contains console controllers (commands)
    migrations/          contains database migrations
    models/              contains console-specific model classes
    runtime/             contains files generated during runtime
environments/            contains environment-based overrides
services                 contains webservices
    api/
        components/      contains api-specific components
        config/          contains api configurations
        controllers/     contains Webservice controller classes
        models/          contains api-specific model classes
        runtime/         contains files generated during runtime
        web/             contains the entry script and Web resources
tests                    contains various tests for the advanced application
    codeception/         contains tests developed with Codeception PHP Testing Framework
vendor/                  contains dependent 3rd-party packages
```
