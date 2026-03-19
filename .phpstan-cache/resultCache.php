<?php declare(strict_types = 1);

return [
	'lastFullAnalysisTime' => 1773962834,
	'meta' => array (
  'cacheVersion' => 'v12-linesToIgnore',
  'phpstanVersion' => '2.1.42',
  'fnsr' => false,
  'metaExtensions' => 
  array (
  ),
  'phpVersion' => 80504,
  'projectConfig' => '{conditionalTags: {Larastan\\Larastan\\Rules\\NoEnvCallsOutsideOfConfigRule: {phpstan.rules.rule: %noEnvCallsOutsideOfConfig%}, Larastan\\Larastan\\Rules\\NoModelMakeRule: {phpstan.rules.rule: %noModelMake%}, Larastan\\Larastan\\Rules\\NoUnnecessaryCollectionCallRule: {phpstan.rules.rule: %noUnnecessaryCollectionCall%}, Larastan\\Larastan\\Rules\\NoUnnecessaryEnumerableToArrayCallsRule: {phpstan.rules.rule: %noUnnecessaryEnumerableToArrayCalls%}, Larastan\\Larastan\\Rules\\OctaneCompatibilityRule: {phpstan.rules.rule: %checkOctaneCompatibility%}, Larastan\\Larastan\\Rules\\UnusedViewsRule: {phpstan.rules.rule: %checkUnusedViews%}, Larastan\\Larastan\\Rules\\NoMissingTranslationsRule: {phpstan.rules.rule: %checkMissingTranslations%}, Larastan\\Larastan\\Rules\\ModelAppendsRule: {phpstan.rules.rule: %checkModelAppends%}, Larastan\\Larastan\\Rules\\NoPublicModelScopeAndAccessorRule: {phpstan.rules.rule: %checkModelMethodVisibility%}, Larastan\\Larastan\\Rules\\NoAuthFacadeInRequestScopeRule: {phpstan.rules.rule: %checkAuthCallsWhenInRequestScope%}, Larastan\\Larastan\\Rules\\NoAuthHelperInRequestScopeRule: {phpstan.rules.rule: %checkAuthCallsWhenInRequestScope%}, Larastan\\Larastan\\ReturnTypes\\Helpers\\EnvFunctionDynamicFunctionReturnTypeExtension: {phpstan.broker.dynamicFunctionReturnTypeExtension: %generalizeEnvReturnType%}, Larastan\\Larastan\\ReturnTypes\\Helpers\\ConfigFunctionDynamicFunctionReturnTypeExtension: {phpstan.broker.dynamicFunctionReturnTypeExtension: %checkConfigTypes%}, Larastan\\Larastan\\ReturnTypes\\ConfigRepositoryDynamicMethodReturnTypeExtension: {phpstan.broker.dynamicMethodReturnTypeExtension: %checkConfigTypes%}, Larastan\\Larastan\\ReturnTypes\\ConfigFacadeCollectionDynamicStaticMethodReturnTypeExtension: {phpstan.broker.dynamicStaticMethodReturnTypeExtension: %checkConfigTypes%}, Larastan\\Larastan\\Rules\\ConfigCollectionRule: {phpstan.rules.rule: %checkConfigTypes%}}, parameters: {universalObjectCratesClasses: [Illuminate\\Http\\Request, Illuminate\\Support\\Optional], earlyTerminatingFunctionCalls: [abort, dd], mixinExcludeClasses: [Eloquent], bootstrapFiles: [bootstrap.php], checkOctaneCompatibility: false, noEnvCallsOutsideOfConfig: true, noModelMake: true, noUnnecessaryCollectionCall: true, noUnnecessaryCollectionCallOnly: [], noUnnecessaryCollectionCallExcept: [], noUnnecessaryEnumerableToArrayCalls: false, squashedMigrationsPath: [], databaseMigrationsPath: [], disableMigrationScan: false, disableSchemaScan: false, configDirectories: [], viewDirectories: [], translationDirectories: [], checkModelProperties: false, checkUnusedViews: false, checkMissingTranslations: false, checkModelAppends: true, checkModelMethodVisibility: false, generalizeEnvReturnType: false, checkConfigTypes: false, checkAuthCallsWhenInRequestScope: false, parseModelCastsMethod: false, enableMigrationCache: false, level: 8, paths: [D:\\setup\\sourcecode\\package\\laravel-agent-board\\src], checkPhpDocMissingReturn: false, treatPhpDocTypesAsCertain: false, resultCachePath: .phpstan-cache/resultCache.php, excludePaths: {analyseAndScan: [src/AgentBoardServiceProvider.php], analyse: []}}, rules: [Larastan\\Larastan\\Rules\\UselessConstructs\\NoUselessWithFunctionCallsRule, Larastan\\Larastan\\Rules\\UselessConstructs\\NoUselessValueFunctionCallsRule, Larastan\\Larastan\\Rules\\DeferrableServiceProviderMissingProvidesRule, Larastan\\Larastan\\Rules\\ConsoleCommand\\UndefinedArgumentOrOptionRule], services: {{class: Larastan\\Larastan\\Methods\\RelationForwardsCallsExtension, tags: [phpstan.broker.methodsClassReflectionExtension]}, {class: Larastan\\Larastan\\Methods\\ModelForwardsCallsExtension, tags: [phpstan.broker.methodsClassReflectionExtension]}, {class: Larastan\\Larastan\\Methods\\EloquentBuilderForwardsCallsExtension, tags: [phpstan.broker.methodsClassReflectionExtension]}, {class: Larastan\\Larastan\\Methods\\HigherOrderTapProxyExtension, tags: [phpstan.broker.methodsClassReflectionExtension]}, {class: Larastan\\Larastan\\Methods\\HigherOrderCollectionProxyExtension, tags: [phpstan.broker.methodsClassReflectionExtension]}, {class: Larastan\\Larastan\\Methods\\StorageMethodsClassReflectionExtension, tags: [phpstan.broker.methodsClassReflectionExtension]}, {class: Larastan\\Larastan\\Methods\\Extension, tags: [phpstan.broker.methodsClassReflectionExtension]}, {class: Larastan\\Larastan\\Methods\\ModelFactoryMethodsClassReflectionExtension, tags: [phpstan.broker.methodsClassReflectionExtension]}, {class: Larastan\\Larastan\\Methods\\RedirectResponseMethodsClassReflectionExtension, tags: [phpstan.broker.methodsClassReflectionExtension]}, {class: Larastan\\Larastan\\Methods\\MacroMethodsClassReflectionExtension, tags: [phpstan.broker.methodsClassReflectionExtension]}, {class: Larastan\\Larastan\\Methods\\ViewWithMethodsClassReflectionExtension, tags: [phpstan.broker.methodsClassReflectionExtension]}, {class: Larastan\\Larastan\\Properties\\ModelAccessorExtension, tags: [phpstan.broker.propertiesClassReflectionExtension]}, {class: Larastan\\Larastan\\Properties\\ModelPropertyExtension, tags: [phpstan.broker.propertiesClassReflectionExtension]}, {class: Larastan\\Larastan\\Properties\\HigherOrderCollectionProxyPropertyExtension, tags: [phpstan.broker.propertiesClassReflectionExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\HigherOrderTapProxyExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\ContainerArrayAccessDynamicMethodReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension], arguments: {className: Illuminate\\Contracts\\Container\\Container}}, {class: Larastan\\Larastan\\ReturnTypes\\ContainerArrayAccessDynamicMethodReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension], arguments: {className: Illuminate\\Container\\Container}}, {class: Larastan\\Larastan\\ReturnTypes\\ContainerArrayAccessDynamicMethodReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension], arguments: {className: Illuminate\\Foundation\\Application}}, {class: Larastan\\Larastan\\ReturnTypes\\ContainerArrayAccessDynamicMethodReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension], arguments: {className: Illuminate\\Contracts\\Foundation\\Application}}, {class: Larastan\\Larastan\\Properties\\ModelRelationsExtension, tags: [phpstan.broker.propertiesClassReflectionExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\ModelOnlyDynamicMethodReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\ModelFactoryDynamicStaticMethodReturnTypeExtension, tags: [phpstan.broker.dynamicStaticMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\ModelDynamicStaticMethodReturnTypeExtension, tags: [phpstan.broker.dynamicStaticMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\AppMakeDynamicReturnTypeExtension, tags: [phpstan.broker.dynamicStaticMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\AuthExtension, tags: [phpstan.broker.dynamicStaticMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\GuardDynamicStaticMethodReturnTypeExtension, tags: [phpstan.broker.dynamicStaticMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\AuthManagerExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\DateExtension, tags: [phpstan.broker.dynamicStaticMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\GuardExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\RequestFileExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\RequestRouteExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\RequestUserExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\EloquentBuilderExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\RelationCollectionExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\TestCaseExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\Support\\CollectionHelper}, {class: Larastan\\Larastan\\ReturnTypes\\Helpers\\AuthExtension, tags: [phpstan.broker.dynamicFunctionReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\Helpers\\CollectExtension, tags: [phpstan.broker.dynamicFunctionReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\Helpers\\NowAndTodayExtension, tags: [phpstan.broker.dynamicFunctionReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\Helpers\\ResponseExtension, tags: [phpstan.broker.dynamicFunctionReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\Helpers\\ValidatorExtension, tags: [phpstan.broker.dynamicFunctionReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\Helpers\\LiteralExtension, tags: [phpstan.broker.dynamicFunctionReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\CollectionFilterRejectDynamicReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\CollectionWhereNotNullDynamicReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\NewModelQueryDynamicMethodReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\FactoryDynamicMethodReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\Types\\AbortIfFunctionTypeSpecifyingExtension, tags: [phpstan.typeSpecifier.functionTypeSpecifyingExtension], arguments: {methodName: abort, negate: false}}, {class: Larastan\\Larastan\\Types\\AbortIfFunctionTypeSpecifyingExtension, tags: [phpstan.typeSpecifier.functionTypeSpecifyingExtension], arguments: {methodName: abort, negate: true}}, {class: Larastan\\Larastan\\Types\\AbortIfFunctionTypeSpecifyingExtension, tags: [phpstan.typeSpecifier.functionTypeSpecifyingExtension], arguments: {methodName: throw, negate: false}}, {class: Larastan\\Larastan\\Types\\AbortIfFunctionTypeSpecifyingExtension, tags: [phpstan.typeSpecifier.functionTypeSpecifyingExtension], arguments: {methodName: throw, negate: true}}, {class: Larastan\\Larastan\\ReturnTypes\\Helpers\\AppExtension, tags: [phpstan.broker.dynamicFunctionReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\Helpers\\ValueExtension, tags: [phpstan.broker.dynamicFunctionReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\Helpers\\StrExtension, tags: [phpstan.broker.dynamicFunctionReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\Helpers\\TapExtension, tags: [phpstan.broker.dynamicFunctionReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\StorageDynamicStaticMethodReturnTypeExtension, tags: [phpstan.broker.dynamicStaticMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\Types\\GenericEloquentCollectionTypeNodeResolverExtension, tags: [phpstan.phpDoc.typeNodeResolverExtension]}, {class: Larastan\\Larastan\\Types\\ViewStringTypeNodeResolverExtension, tags: [phpstan.phpDoc.typeNodeResolverExtension]}, {class: Larastan\\Larastan\\Rules\\OctaneCompatibilityRule}, {class: Larastan\\Larastan\\Rules\\NoEnvCallsOutsideOfConfigRule, arguments: {configDirectories: %configDirectories%}}, {class: Larastan\\Larastan\\Rules\\NoModelMakeRule}, {class: Larastan\\Larastan\\Rules\\NoUnnecessaryCollectionCallRule, arguments: {onlyMethods: %noUnnecessaryCollectionCallOnly%, excludeMethods: %noUnnecessaryCollectionCallExcept%}}, {class: Larastan\\Larastan\\Rules\\NoUnnecessaryEnumerableToArrayCallsRule}, {class: Larastan\\Larastan\\Rules\\ModelAppendsRule}, {class: Larastan\\Larastan\\Rules\\NoPublicModelScopeAndAccessorRule}, {class: Larastan\\Larastan\\Types\\GenericEloquentBuilderTypeNodeResolverExtension, tags: [phpstan.phpDoc.typeNodeResolverExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\AppEnvironmentReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension], arguments: {class: Illuminate\\Foundation\\Application}}, {class: Larastan\\Larastan\\ReturnTypes\\AppEnvironmentReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension], arguments: {class: Illuminate\\Contracts\\Foundation\\Application}}, {class: Larastan\\Larastan\\ReturnTypes\\AppFacadeEnvironmentReturnTypeExtension, tags: [phpstan.broker.dynamicStaticMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\Types\\ModelProperty\\ModelPropertyTypeNodeResolverExtension, tags: [phpstan.phpDoc.typeNodeResolverExtension], arguments: {active: %checkModelProperties%}}, {class: Larastan\\Larastan\\Types\\CollectionOf\\CollectionOfTypeNodeResolverExtension, tags: [phpstan.phpDoc.typeNodeResolverExtension]}, {class: Larastan\\Larastan\\Properties\\MigrationHelper, arguments: {databaseMigrationPath: %databaseMigrationsPath%, disableMigrationScan: %disableMigrationScan%, parser: @migrationsParser, reflectionProvider: @reflectionProvider}}, iamcalSqlParser: {class: Larastan\\Larastan\\SQL\\IamcalSqlParser, autowired: false}, sqlParserFactory: {class: Larastan\\Larastan\\SQL\\SqlParserFactory, arguments: {iamcalSqlParser: @iamcalSqlParser}}, sqlParser: {type: Larastan\\Larastan\\SQL\\SqlParser, factory: [@sqlParserFactory, create]}, {class: Larastan\\Larastan\\Properties\\SquashedMigrationHelper, arguments: {schemaPaths: %squashedMigrationsPath%, disableSchemaScan: %disableSchemaScan%}}, {class: Larastan\\Larastan\\Properties\\ModelCastHelper, arguments: {parser: @currentPhpVersionSimpleDirectParser, parseModelCastsMethod: %parseModelCastsMethod%}}, {class: Larastan\\Larastan\\Properties\\MigrationCache, arguments: {cacheDirectory: %tmpDir%, enabled: %enableMigrationCache%}}, {class: Larastan\\Larastan\\Properties\\ModelPropertyHelper}, {class: Larastan\\Larastan\\Rules\\ModelRuleHelper}, {class: Larastan\\Larastan\\Methods\\BuilderHelper, arguments: {checkProperties: %checkModelProperties%}}, {class: Larastan\\Larastan\\Rules\\RelationExistenceRule, tags: [phpstan.rules.rule]}, {class: Larastan\\Larastan\\Rules\\CheckDispatchArgumentTypesCompatibleWithClassConstructorRule, arguments: {dispatchableClass: Illuminate\\Foundation\\Bus\\Dispatchable}, tags: [phpstan.rules.rule]}, {class: Larastan\\Larastan\\Rules\\CheckDispatchArgumentTypesCompatibleWithClassConstructorRule, arguments: {dispatchableClass: Illuminate\\Foundation\\Events\\Dispatchable}, tags: [phpstan.rules.rule]}, {class: Larastan\\Larastan\\Properties\\Schema\\MySqlDataTypeToPhpTypeConverter}, {class: Larastan\\Larastan\\LarastanStubFilesExtension, tags: [phpstan.stubFilesExtension]}, {class: Larastan\\Larastan\\Rules\\UnusedViewsRule}, {class: Larastan\\Larastan\\Collectors\\UsedViewFunctionCollector, tags: [phpstan.collector]}, {class: Larastan\\Larastan\\Collectors\\UsedEmailViewCollector, tags: [phpstan.collector]}, {class: Larastan\\Larastan\\Collectors\\UsedViewMakeCollector, tags: [phpstan.collector]}, {class: Larastan\\Larastan\\Collectors\\UsedViewFacadeMakeCollector, tags: [phpstan.collector]}, {class: Larastan\\Larastan\\Collectors\\UsedRouteFacadeViewCollector, tags: [phpstan.collector]}, {class: Larastan\\Larastan\\Collectors\\UsedViewInAnotherViewCollector}, {class: Larastan\\Larastan\\Support\\ViewFileHelper, arguments: {viewDirectories: %viewDirectories%}}, {class: Larastan\\Larastan\\Support\\ViewParser, arguments: {parser: @currentPhpVersionSimpleDirectParser}}, {class: Larastan\\Larastan\\Rules\\NoMissingTranslationsRule, arguments: {translationDirectories: %translationDirectories%}}, {class: Larastan\\Larastan\\Collectors\\UsedTranslationFunctionCollector, tags: [phpstan.collector]}, {class: Larastan\\Larastan\\Collectors\\UsedTranslationTranslatorCollector, tags: [phpstan.collector]}, {class: Larastan\\Larastan\\Collectors\\UsedTranslationFacadeCollector, tags: [phpstan.collector]}, {class: Larastan\\Larastan\\Collectors\\UsedTranslationViewCollector}, {class: Larastan\\Larastan\\ReturnTypes\\ApplicationMakeDynamicReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\ContainerMakeDynamicReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\ConsoleCommand\\ArgumentDynamicReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\ConsoleCommand\\HasArgumentDynamicReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\ConsoleCommand\\OptionDynamicReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\ConsoleCommand\\HasOptionDynamicReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\TranslatorGetReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\LangGetReturnTypeExtension, tags: [phpstan.broker.dynamicStaticMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\TransHelperReturnTypeExtension, tags: [phpstan.broker.dynamicFunctionReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\DoubleUnderscoreHelperReturnTypeExtension, tags: [phpstan.broker.dynamicFunctionReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\AppMakeHelper}, {class: Larastan\\Larastan\\Internal\\ConsoleApplicationResolver}, {class: Larastan\\Larastan\\Internal\\ConsoleApplicationHelper}, {class: Larastan\\Larastan\\Support\\HigherOrderCollectionProxyHelper}, {class: Larastan\\Larastan\\ReturnTypes\\Helpers\\ConfigFunctionDynamicFunctionReturnTypeExtension}, {class: Larastan\\Larastan\\ReturnTypes\\ConfigRepositoryDynamicMethodReturnTypeExtension}, {class: Larastan\\Larastan\\ReturnTypes\\ConfigFacadeCollectionDynamicStaticMethodReturnTypeExtension}, {class: Larastan\\Larastan\\Support\\ConfigParser, arguments: {parser: @currentPhpVersionSimpleDirectParser, configPaths: %configDirectories%, treatPhpDocTypesAsCertain: %treatPhpDocTypesAsCertain%}}, {class: Larastan\\Larastan\\Internal\\ConfigHelper}, {class: Larastan\\Larastan\\ReturnTypes\\Helpers\\EnvFunctionDynamicFunctionReturnTypeExtension}, {class: Larastan\\Larastan\\ReturnTypes\\FormRequestSafeDynamicMethodReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\Rules\\NoAuthFacadeInRequestScopeRule}, {class: Larastan\\Larastan\\Rules\\NoAuthHelperInRequestScopeRule}, {class: Larastan\\Larastan\\Rules\\ConfigCollectionRule}, {class: Illuminate\\Filesystem\\Filesystem, autowired: self}, migrationsParser: {class: PHPStan\\Parser\\CachedParser, arguments: {originalParser: @currentPhpVersionSimpleDirectParser, cachedNodesByStringCountMax: %cache.nodesByStringCountMax%}, autowired: false}}}',
  'analysedPaths' => 
  array (
    0 => 'D:\\setup\\sourcecode\\package\\laravel-agent-board\\src',
  ),
  'scannedFiles' => 
  array (
  ),
  'composerLocks' => 
  array (
    'D:/setup/sourcecode/package/laravel-agent-board/composer.lock' => '38943c7b0bfdd96e4c09d5d20353a585e0a38e0ec7312c0644284b5e3b58fef4',
  ),
  'composerInstalled' => 
  array (
    'D:/setup/sourcecode/package/laravel-agent-board/vendor/composer/installed.php' => 
    array (
      'versions' => 
      array (
        'brick/math' => 
        array (
          'pretty_version' => '0.14.8',
          'version' => '0.14.8.0',
          'reference' => '63422359a44b7f06cae63c3b429b59e8efcc0629',
          'type' => 'library',
          'install_path' => 'D:\\setup\\sourcecode\\package\\laravel-agent-board\\vendor\\composer/../brick/math',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'carbonphp/carbon-doctrine-types' => 
        array (
          'pretty_version' => '3.2.0',
          'version' => '3.2.0.0',
          'reference' => '18ba5ddfec8976260ead6e866180bd5d2f71aa1d',
          'type' => 'library',
          'install_path' => 'D:\\setup\\sourcecode\\package\\laravel-agent-board\\vendor\\composer/../carbonphp/carbon-doctrine-types',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'composer/semver' => 
        array (
          'pretty_version' => '3.4.4',
          'version' => '3.4.4.0',
          'reference' => '198166618906cb2de69b95d7d47e5fa8aa1b2b95',
          'type' => 'library',
          'install_path' => 'D:\\setup\\sourcecode\\package\\laravel-agent-board\\vendor\\composer/./semver',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'cordoval/hamcrest-php' => 
        array (
          'dev_requirement' => true,
          'replaced' => 
          array (
            0 => '*',
          ),
        ),
        'davedevelopment/hamcrest-php' => 
        array (
          'dev_requirement' => true,
          'replaced' => 
          array (
            0 => '*',
          ),
        ),
        'dflydev/dot-access-data' => 
        array (
          'pretty_version' => 'v3.0.3',
          'version' => '3.0.3.0',
          'reference' => 'a23a2bf4f31d3518f3ecb38660c95715dfead60f',
          'type' => 'library',
          'install_path' => 'D:\\setup\\sourcecode\\package\\laravel-agent-board\\vendor\\composer/../dflydev/dot-access-data',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'doctrine/inflector' => 
        array (
          'pretty_version' => '2.1.0',
          'version' => '2.1.0.0',
          'reference' => '6d6c96277ea252fc1304627204c3d5e6e15faa3b',
          'type' => 'library',
          'install_path' => 'D:\\setup\\sourcecode\\package\\laravel-agent-board\\vendor\\composer/../doctrine/inflector',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'doctrine/lexer' => 
        array (
          'pretty_version' => '3.0.1',
          'version' => '3.0.1.0',
          'reference' => '31ad66abc0fc9e1a1f2d9bc6a42668d2fbbcd6dd',
          'type' => 'library',
          'install_path' => 'D:\\setup\\sourcecode\\package\\laravel-agent-board\\vendor\\composer/../doctrine/lexer',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'dragonmantank/cron-expression' => 
        array (
          'pretty_version' => 'v3.6.0',
          'version' => '3.6.0.0',
          'reference' => 'd61a8a9604ec1f8c3d150d09db6ce98b32675013',
          'type' => 'library',
          'install_path' => 'D:\\setup\\sourcecode\\package\\laravel-agent-board\\vendor\\composer/../dragonmantank/cron-expression',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'egulias/email-validator' => 
        array (
          'pretty_version' => '4.0.4',
          'version' => '4.0.4.0',
          'reference' => 'd42c8731f0624ad6bdc8d3e5e9a4524f68801cfa',
          'type' => 'library',
          'install_path' => 'D:\\setup\\sourcecode\\package\\laravel-agent-board\\vendor\\composer/../egulias/email-validator',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'fakerphp/faker' => 
        array (
          'pretty_version' => 'v1.24.1',
          'version' => '1.24.1.0',
          'reference' => 'e0ee18eb1e6dc3cda3ce9fd97e5a0689a88a64b5',
          'type' => 'library',
          'install_path' => 'D:\\setup\\sourcecode\\package\\laravel-agent-board\\vendor\\composer/../fakerphp/faker',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'filp/whoops' => 
        array (
          'pretty_version' => '2.18.4',
          'version' => '2.18.4.0',
          'reference' => 'd2102955e48b9fd9ab24280a7ad12ed552752c4d',
          'type' => 'library',
          'install_path' => 'D:\\setup\\sourcecode\\package\\laravel-agent-board\\vendor\\composer/../filp/whoops',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'fruitcake/php-cors' => 
        array (
          'pretty_version' => 'v1.4.0',
          'version' => '1.4.0.0',
          'reference' => '38aaa6c3fd4c157ffe2a4d10aa8b9b16ba8de379',
          'type' => 'library',
          'install_path' => 'D:\\setup\\sourcecode\\package\\laravel-agent-board\\vendor\\composer/../fruitcake/php-cors',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'graham-campbell/result-type' => 
        array (
          'pretty_version' => 'v1.1.4',
          'version' => '1.1.4.0',
          'reference' => 'e01f4a821471308ba86aa202fed6698b6b695e3b',
          'type' => 'library',
          'install_path' => 'D:\\setup\\sourcecode\\package\\laravel-agent-board\\vendor\\composer/../graham-campbell/result-type',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'guzzlehttp/guzzle' => 
        array (
          'pretty_version' => '7.10.0',
          'version' => '7.10.0.0',
          'reference' => 'b51ac707cfa420b7bfd4e4d5e510ba8008e822b4',
          'type' => 'library',
          'install_path' => 'D:\\setup\\sourcecode\\package\\laravel-agent-board\\vendor\\composer/../guzzlehttp/guzzle',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'guzzlehttp/promises' => 
        array (
          'pretty_version' => '2.3.0',
          'version' => '2.3.0.0',
          'reference' => '481557b130ef3790cf82b713667b43030dc9c957',
          'type' => 'library',
          'install_path' => 'D:\\setup\\sourcecode\\package\\laravel-agent-board\\vendor\\composer/../guzzlehttp/promises',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'guzzlehttp/psr7' => 
        array (
          'pretty_version' => '2.9.0',
          'version' => '2.9.0.0',
          'reference' => '7d0ed42f28e42d61352a7a79de682e5e67fec884',
          'type' => 'library',
          'install_path' => 'D:\\setup\\sourcecode\\package\\laravel-agent-board\\vendor\\composer/../guzzlehttp/psr7',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'guzzlehttp/uri-template' => 
        array (
          'pretty_version' => 'v1.0.5',
          'version' => '1.0.5.0',
          'reference' => '4f4bbd4e7172148801e76e3decc1e559bdee34e1',
          'type' => 'library',
          'install_path' => 'D:\\setup\\sourcecode\\package\\laravel-agent-board\\vendor\\composer/../guzzlehttp/uri-template',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'hamcrest/hamcrest-php' => 
        array (
          'pretty_version' => 'v2.1.1',
          'version' => '2.1.1.0',
          'reference' => 'f8b1c0173b22fa6ec77a81fe63e5b01eba7e6487',
          'type' => 'library',
          'install_path' => 'D:\\setup\\sourcecode\\package\\laravel-agent-board\\vendor\\composer/../hamcrest/hamcrest-php',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'iamcal/sql-parser' => 
        array (
          'pretty_version' => 'v0.7',
          'version' => '0.7.0.0',
          'reference' => '610392f38de49a44dab08dc1659960a29874c4b8',
          'type' => 'library',
          'install_path' => 'D:\\setup\\sourcecode\\package\\laravel-agent-board\\vendor\\composer/../iamcal/sql-parser',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'illuminate/auth' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v12.55.1',
          ),
        ),
        'illuminate/broadcasting' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v12.55.1',
          ),
        ),
        'illuminate/bus' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v12.55.1',
          ),
        ),
        'illuminate/cache' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v12.55.1',
          ),
        ),
        'illuminate/collections' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v12.55.1',
          ),
        ),
        'illuminate/concurrency' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v12.55.1',
          ),
        ),
        'illuminate/conditionable' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v12.55.1',
          ),
        ),
        'illuminate/config' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v12.55.1',
          ),
        ),
        'illuminate/console' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v12.55.1',
          ),
        ),
        'illuminate/container' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v12.55.1',
          ),
        ),
        'illuminate/contracts' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v12.55.1',
          ),
        ),
        'illuminate/cookie' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v12.55.1',
          ),
        ),
        'illuminate/database' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v12.55.1',
          ),
        ),
        'illuminate/encryption' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v12.55.1',
          ),
        ),
        'illuminate/events' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v12.55.1',
          ),
        ),
        'illuminate/filesystem' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v12.55.1',
          ),
        ),
        'illuminate/hashing' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v12.55.1',
          ),
        ),
        'illuminate/http' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v12.55.1',
          ),
        ),
        'illuminate/json-schema' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v12.55.1',
          ),
        ),
        'illuminate/log' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v12.55.1',
          ),
        ),
        'illuminate/macroable' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v12.55.1',
          ),
        ),
        'illuminate/mail' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v12.55.1',
          ),
        ),
        'illuminate/notifications' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v12.55.1',
          ),
        ),
        'illuminate/pagination' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v12.55.1',
          ),
        ),
        'illuminate/pipeline' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v12.55.1',
          ),
        ),
        'illuminate/process' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v12.55.1',
          ),
        ),
        'illuminate/queue' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v12.55.1',
          ),
        ),
        'illuminate/redis' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v12.55.1',
          ),
        ),
        'illuminate/reflection' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v12.55.1',
          ),
        ),
        'illuminate/routing' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v12.55.1',
          ),
        ),
        'illuminate/session' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v12.55.1',
          ),
        ),
        'illuminate/support' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v12.55.1',
          ),
        ),
        'illuminate/testing' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v12.55.1',
          ),
        ),
        'illuminate/translation' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v12.55.1',
          ),
        ),
        'illuminate/validation' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v12.55.1',
          ),
        ),
        'illuminate/view' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v12.55.1',
          ),
        ),
        'kodova/hamcrest-php' => 
        array (
          'dev_requirement' => true,
          'replaced' => 
          array (
            0 => '*',
          ),
        ),
        'larastan/larastan' => 
        array (
          'pretty_version' => 'v3.9.3',
          'version' => '3.9.3.0',
          'reference' => '64a52bcc5347c89fdf131cb59f96ebfbc8d1ad65',
          'type' => 'phpstan-extension',
          'install_path' => 'D:\\setup\\sourcecode\\package\\laravel-agent-board\\vendor\\composer/../larastan/larastan',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'laravel/framework' => 
        array (
          'pretty_version' => 'v12.55.1',
          'version' => '12.55.1.0',
          'reference' => '6d9185a248d101b07eecaf8fd60b18129545fd33',
          'type' => 'library',
          'install_path' => 'D:\\setup\\sourcecode\\package\\laravel-agent-board\\vendor\\composer/../laravel/framework',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'laravel/pail' => 
        array (
          'pretty_version' => 'v1.2.6',
          'version' => '1.2.6.0',
          'reference' => 'aa71a01c309e7f66bc2ec4fb1a59291b82eb4abf',
          'type' => 'library',
          'install_path' => 'D:\\setup\\sourcecode\\package\\laravel-agent-board\\vendor\\composer/../laravel/pail',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'laravel/pint' => 
        array (
          'pretty_version' => 'v1.29.0',
          'version' => '1.29.0.0',
          'reference' => 'bdec963f53172c5e36330f3a400604c69bf02d39',
          'type' => 'project',
          'install_path' => 'D:\\setup\\sourcecode\\package\\laravel-agent-board\\vendor\\composer/../laravel/pint',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'laravel/prompts' => 
        array (
          'pretty_version' => 'v0.3.15',
          'version' => '0.3.15.0',
          'reference' => '4bb8107ec97651fd3f17f897d6489dbc4d8fb999',
          'type' => 'library',
          'install_path' => 'D:\\setup\\sourcecode\\package\\laravel-agent-board\\vendor\\composer/../laravel/prompts',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'laravel/serializable-closure' => 
        array (
          'pretty_version' => 'v2.0.10',
          'version' => '2.0.10.0',
          'reference' => '870fc81d2f879903dfc5b60bf8a0f94a1609e669',
          'type' => 'library',
          'install_path' => 'D:\\setup\\sourcecode\\package\\laravel-agent-board\\vendor\\composer/../laravel/serializable-closure',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'laravel/tinker' => 
        array (
          'pretty_version' => 'v2.11.1',
          'version' => '2.11.1.0',
          'reference' => 'c9f80cc835649b5c1842898fb043f8cc098dd741',
          'type' => 'library',
          'install_path' => 'D:\\setup\\sourcecode\\package\\laravel-agent-board\\vendor\\composer/../laravel/tinker',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'league/commonmark' => 
        array (
          'pretty_version' => '2.8.2',
          'version' => '2.8.2.0',
          'reference' => '59fb075d2101740c337c7216e3f32b36c204218b',
          'type' => 'library',
          'install_path' => 'D:\\setup\\sourcecode\\package\\laravel-agent-board\\vendor\\composer/../league/commonmark',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'league/config' => 
        array (
          'pretty_version' => 'v1.2.0',
          'version' => '1.2.0.0',
          'reference' => '754b3604fb2984c71f4af4a9cbe7b57f346ec1f3',
          'type' => 'library',
          'install_path' => 'D:\\setup\\sourcecode\\package\\laravel-agent-board\\vendor\\composer/../league/config',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'league/flysystem' => 
        array (
          'pretty_version' => '3.32.0',
          'version' => '3.32.0.0',
          'reference' => '254b1595b16b22dbddaaef9ed6ca9fdac4956725',
          'type' => 'library',
          'install_path' => 'D:\\setup\\sourcecode\\package\\laravel-agent-board\\vendor\\composer/../league/flysystem',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'league/flysystem-local' => 
        array (
          'pretty_version' => '3.31.0',
          'version' => '3.31.0.0',
          'reference' => '2f669db18a4c20c755c2bb7d3a7b0b2340488079',
          'type' => 'library',
          'install_path' => 'D:\\setup\\sourcecode\\package\\laravel-agent-board\\vendor\\composer/../league/flysystem-local',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'league/mime-type-detection' => 
        array (
          'pretty_version' => '1.16.0',
          'version' => '1.16.0.0',
          'reference' => '2d6702ff215bf922936ccc1ad31007edc76451b9',
          'type' => 'library',
          'install_path' => 'D:\\setup\\sourcecode\\package\\laravel-agent-board\\vendor\\composer/../league/mime-type-detection',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'league/uri' => 
        array (
          'pretty_version' => '7.8.1',
          'version' => '7.8.1.0',
          'reference' => '08cf38e3924d4f56238125547b5720496fac8fd4',
          'type' => 'library',
          'install_path' => 'D:\\setup\\sourcecode\\package\\laravel-agent-board\\vendor\\composer/../league/uri',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'league/uri-interfaces' => 
        array (
          'pretty_version' => '7.8.1',
          'version' => '7.8.1.0',
          'reference' => '85d5c77c5d6d3af6c54db4a78246364908f3c928',
          'type' => 'library',
          'install_path' => 'D:\\setup\\sourcecode\\package\\laravel-agent-board\\vendor\\composer/../league/uri-interfaces',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'mockery/mockery' => 
        array (
          'pretty_version' => '1.6.12',
          'version' => '1.6.12.0',
          'reference' => '1f4efdd7d3beafe9807b08156dfcb176d18f1699',
          'type' => 'library',
          'install_path' => 'D:\\setup\\sourcecode\\package\\laravel-agent-board\\vendor\\composer/../mockery/mockery',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'monolog/monolog' => 
        array (
          'pretty_version' => '3.10.0',
          'version' => '3.10.0.0',
          'reference' => 'b321dd6749f0bf7189444158a3ce785cc16d69b0',
          'type' => 'library',
          'install_path' => 'D:\\setup\\sourcecode\\package\\laravel-agent-board\\vendor\\composer/../monolog/monolog',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'mtdowling/cron-expression' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => '^1.0',
          ),
        ),
        'myclabs/deep-copy' => 
        array (
          'pretty_version' => '1.13.4',
          'version' => '1.13.4.0',
          'reference' => '07d290f0c47959fd5eed98c95ee5602db07e0b6a',
          'type' => 'library',
          'install_path' => 'D:\\setup\\sourcecode\\package\\laravel-agent-board\\vendor\\composer/../myclabs/deep-copy',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'nesbot/carbon' => 
        array (
          'pretty_version' => '3.11.3',
          'version' => '3.11.3.0',
          'reference' => '6a7e652845bb018c668220c2a545aded8594fbbf',
          'type' => 'library',
          'install_path' => 'D:\\setup\\sourcecode\\package\\laravel-agent-board\\vendor\\composer/../nesbot/carbon',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'nette/schema' => 
        array (
          'pretty_version' => 'v1.3.5',
          'version' => '1.3.5.0',
          'reference' => 'f0ab1a3cda782dbc5da270d28545236aa80c4002',
          'type' => 'library',
          'install_path' => 'D:\\setup\\sourcecode\\package\\laravel-agent-board\\vendor\\composer/../nette/schema',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'nette/utils' => 
        array (
          'pretty_version' => 'v4.1.3',
          'version' => '4.1.3.0',
          'reference' => 'bb3ea637e3d131d72acc033cfc2746ee893349fe',
          'type' => 'library',
          'install_path' => 'D:\\setup\\sourcecode\\package\\laravel-agent-board\\vendor\\composer/../nette/utils',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'nikic/php-parser' => 
        array (
          'pretty_version' => 'v5.7.0',
          'version' => '5.7.0.0',
          'reference' => 'dca41cd15c2ac9d055ad70dbfd011130757d1f82',
          'type' => 'library',
          'install_path' => 'D:\\setup\\sourcecode\\package\\laravel-agent-board\\vendor\\composer/../nikic/php-parser',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'nunomaduro/collision' => 
        array (
          'pretty_version' => 'v8.9.1',
          'version' => '8.9.1.0',
          'reference' => 'a1ed3fa530fd60bc515f9303e8520fcb7d4bd935',
          'type' => 'library',
          'install_path' => 'D:\\setup\\sourcecode\\package\\laravel-agent-board\\vendor\\composer/../nunomaduro/collision',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'nunomaduro/termwind' => 
        array (
          'pretty_version' => 'v2.4.0',
          'version' => '2.4.0.0',
          'reference' => '712a31b768f5daea284c2169a7d227031001b9a8',
          'type' => 'library',
          'install_path' => 'D:\\setup\\sourcecode\\package\\laravel-agent-board\\vendor\\composer/../nunomaduro/termwind',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'openai-php/client' => 
        array (
          'pretty_version' => 'v0.10.3',
          'version' => '0.10.3.0',
          'reference' => '4a565d145e0fb3ea1baba8fffe39d86c56b6dc2c',
          'type' => 'library',
          'install_path' => 'D:\\setup\\sourcecode\\package\\laravel-agent-board\\vendor\\composer/../openai-php/client',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'orchestra/canvas' => 
        array (
          'pretty_version' => 'v10.1.1',
          'version' => '10.1.1.0',
          'reference' => '6e63f56acd46b0ee842e922d0ebb18af8f7a60f6',
          'type' => 'library',
          'install_path' => 'D:\\setup\\sourcecode\\package\\laravel-agent-board\\vendor\\composer/../orchestra/canvas',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'orchestra/canvas-core' => 
        array (
          'pretty_version' => 'v10.2.0',
          'version' => '10.2.0.0',
          'reference' => '11fdb579f4f2d4bd68a22bd206cabc32e7856e32',
          'type' => 'library',
          'install_path' => 'D:\\setup\\sourcecode\\package\\laravel-agent-board\\vendor\\composer/../orchestra/canvas-core',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'orchestra/sidekick' => 
        array (
          'pretty_version' => 'v1.2.20',
          'version' => '1.2.20.0',
          'reference' => '267a71b56cb2fe1a634d69fc99889c671b77ff43',
          'type' => 'library',
          'install_path' => 'D:\\setup\\sourcecode\\package\\laravel-agent-board\\vendor\\composer/../orchestra/sidekick',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'orchestra/testbench' => 
        array (
          'pretty_version' => 'v10.11.0',
          'version' => '10.11.0.0',
          'reference' => 'd73b4426dacddd2c1f5e671e0efd7665b16d2b84',
          'type' => 'library',
          'install_path' => 'D:\\setup\\sourcecode\\package\\laravel-agent-board\\vendor\\composer/../orchestra/testbench',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'orchestra/testbench-core' => 
        array (
          'pretty_version' => 'v10.11.0',
          'version' => '10.11.0.0',
          'reference' => '8d6e72fb0d75049ddb36fddcaada0d9f6aa3ecd3',
          'type' => 'library',
          'install_path' => 'D:\\setup\\sourcecode\\package\\laravel-agent-board\\vendor\\composer/../orchestra/testbench-core',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'orchestra/workbench' => 
        array (
          'pretty_version' => 'v10.0.8',
          'version' => '10.0.8.0',
          'reference' => '88bb9b5872539dd8b556b232a1b466f639c18259',
          'type' => 'library',
          'install_path' => 'D:\\setup\\sourcecode\\package\\laravel-agent-board\\vendor\\composer/../orchestra/workbench',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'phar-io/manifest' => 
        array (
          'pretty_version' => '2.0.4',
          'version' => '2.0.4.0',
          'reference' => '54750ef60c58e43759730615a392c31c80e23176',
          'type' => 'library',
          'install_path' => 'D:\\setup\\sourcecode\\package\\laravel-agent-board\\vendor\\composer/../phar-io/manifest',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'phar-io/version' => 
        array (
          'pretty_version' => '3.2.1',
          'version' => '3.2.1.0',
          'reference' => '4f7fd7836c6f332bb2933569e566a0d6c4cbed74',
          'type' => 'library',
          'install_path' => 'D:\\setup\\sourcecode\\package\\laravel-agent-board\\vendor\\composer/../phar-io/version',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'php-http/async-client-implementation' => 
        array (
          'dev_requirement' => false,
          'provided' => 
          array (
            0 => '*',
          ),
        ),
        'php-http/client-implementation' => 
        array (
          'dev_requirement' => false,
          'provided' => 
          array (
            0 => '*',
          ),
        ),
        'php-http/discovery' => 
        array (
          'pretty_version' => '1.20.0',
          'version' => '1.20.0.0',
          'reference' => '82fe4c73ef3363caed49ff8dd1539ba06044910d',
          'type' => 'composer-plugin',
          'install_path' => 'D:\\setup\\sourcecode\\package\\laravel-agent-board\\vendor\\composer/../php-http/discovery',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'php-http/multipart-stream-builder' => 
        array (
          'pretty_version' => '1.4.2',
          'version' => '1.4.2.0',
          'reference' => '10086e6de6f53489cca5ecc45b6f468604d3460e',
          'type' => 'library',
          'install_path' => 'D:\\setup\\sourcecode\\package\\laravel-agent-board\\vendor\\composer/../php-http/multipart-stream-builder',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'phpoption/phpoption' => 
        array (
          'pretty_version' => '1.9.5',
          'version' => '1.9.5.0',
          'reference' => '75365b91986c2405cf5e1e012c5595cd487a98be',
          'type' => 'library',
          'install_path' => 'D:\\setup\\sourcecode\\package\\laravel-agent-board\\vendor\\composer/../phpoption/phpoption',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'phpstan/phpstan' => 
        array (
          'pretty_version' => '2.1.42',
          'version' => '2.1.42.0',
          'reference' => '1279e1ce86ba768f0780c9d889852b4e02ff40d0',
          'type' => 'library',
          'install_path' => 'D:\\setup\\sourcecode\\package\\laravel-agent-board\\vendor\\composer/../phpstan/phpstan',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'phpstan/phpstan-strict-rules' => 
        array (
          'pretty_version' => '2.0.10',
          'version' => '2.0.10.0',
          'reference' => '1aba28b697c1e3b6bbec8a1725f8b11b6d3e5a5f',
          'type' => 'phpstan-extension',
          'install_path' => 'D:\\setup\\sourcecode\\package\\laravel-agent-board\\vendor\\composer/../phpstan/phpstan-strict-rules',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'phpunit/php-code-coverage' => 
        array (
          'pretty_version' => '12.5.3',
          'version' => '12.5.3.0',
          'reference' => 'b015312f28dd75b75d3422ca37dff2cd1a565e8d',
          'type' => 'library',
          'install_path' => 'D:\\setup\\sourcecode\\package\\laravel-agent-board\\vendor\\composer/../phpunit/php-code-coverage',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'phpunit/php-file-iterator' => 
        array (
          'pretty_version' => '6.0.1',
          'version' => '6.0.1.0',
          'reference' => '3d1cd096ef6bea4bf2762ba586e35dbd317cbfd5',
          'type' => 'library',
          'install_path' => 'D:\\setup\\sourcecode\\package\\laravel-agent-board\\vendor\\composer/../phpunit/php-file-iterator',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'phpunit/php-invoker' => 
        array (
          'pretty_version' => '6.0.0',
          'version' => '6.0.0.0',
          'reference' => '12b54e689b07a25a9b41e57736dfab6ec9ae5406',
          'type' => 'library',
          'install_path' => 'D:\\setup\\sourcecode\\package\\laravel-agent-board\\vendor\\composer/../phpunit/php-invoker',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'phpunit/php-text-template' => 
        array (
          'pretty_version' => '5.0.0',
          'version' => '5.0.0.0',
          'reference' => 'e1367a453f0eda562eedb4f659e13aa900d66c53',
          'type' => 'library',
          'install_path' => 'D:\\setup\\sourcecode\\package\\laravel-agent-board\\vendor\\composer/../phpunit/php-text-template',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'phpunit/php-timer' => 
        array (
          'pretty_version' => '8.0.0',
          'version' => '8.0.0.0',
          'reference' => 'f258ce36aa457f3aa3339f9ed4c81fc66dc8c2cc',
          'type' => 'library',
          'install_path' => 'D:\\setup\\sourcecode\\package\\laravel-agent-board\\vendor\\composer/../phpunit/php-timer',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'phpunit/phpunit' => 
        array (
          'pretty_version' => '12.5.14',
          'version' => '12.5.14.0',
          'reference' => '47283cfd98d553edcb1353591f4e255dc1bb61f0',
          'type' => 'library',
          'install_path' => 'D:\\setup\\sourcecode\\package\\laravel-agent-board\\vendor\\composer/../phpunit/phpunit',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'psr/clock' => 
        array (
          'pretty_version' => '1.0.0',
          'version' => '1.0.0.0',
          'reference' => 'e41a24703d4560fd0acb709162f73b8adfc3aa0d',
          'type' => 'library',
          'install_path' => 'D:\\setup\\sourcecode\\package\\laravel-agent-board\\vendor\\composer/../psr/clock',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'psr/clock-implementation' => 
        array (
          'dev_requirement' => false,
          'provided' => 
          array (
            0 => '1.0',
          ),
        ),
        'psr/container' => 
        array (
          'pretty_version' => '2.0.2',
          'version' => '2.0.2.0',
          'reference' => 'c71ecc56dfe541dbd90c5360474fbc405f8d5963',
          'type' => 'library',
          'install_path' => 'D:\\setup\\sourcecode\\package\\laravel-agent-board\\vendor\\composer/../psr/container',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'psr/container-implementation' => 
        array (
          'dev_requirement' => false,
          'provided' => 
          array (
            0 => '1.1|2.0',
          ),
        ),
        'psr/event-dispatcher' => 
        array (
          'pretty_version' => '1.0.0',
          'version' => '1.0.0.0',
          'reference' => 'dbefd12671e8a14ec7f180cab83036ed26714bb0',
          'type' => 'library',
          'install_path' => 'D:\\setup\\sourcecode\\package\\laravel-agent-board\\vendor\\composer/../psr/event-dispatcher',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'psr/event-dispatcher-implementation' => 
        array (
          'dev_requirement' => false,
          'provided' => 
          array (
            0 => '1.0',
          ),
        ),
        'psr/http-client' => 
        array (
          'pretty_version' => '1.0.3',
          'version' => '1.0.3.0',
          'reference' => 'bb5906edc1c324c9a05aa0873d40117941e5fa90',
          'type' => 'library',
          'install_path' => 'D:\\setup\\sourcecode\\package\\laravel-agent-board\\vendor\\composer/../psr/http-client',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'psr/http-client-implementation' => 
        array (
          'dev_requirement' => false,
          'provided' => 
          array (
            0 => '*',
            1 => '1.0',
          ),
        ),
        'psr/http-factory' => 
        array (
          'pretty_version' => '1.1.0',
          'version' => '1.1.0.0',
          'reference' => '2b4765fddfe3b508ac62f829e852b1501d3f6e8a',
          'type' => 'library',
          'install_path' => 'D:\\setup\\sourcecode\\package\\laravel-agent-board\\vendor\\composer/../psr/http-factory',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'psr/http-factory-implementation' => 
        array (
          'dev_requirement' => false,
          'provided' => 
          array (
            0 => '*',
            1 => '1.0',
          ),
        ),
        'psr/http-message' => 
        array (
          'pretty_version' => '2.0',
          'version' => '2.0.0.0',
          'reference' => '402d35bcb92c70c026d1a6a9883f06b2ead23d71',
          'type' => 'library',
          'install_path' => 'D:\\setup\\sourcecode\\package\\laravel-agent-board\\vendor\\composer/../psr/http-message',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'psr/http-message-implementation' => 
        array (
          'dev_requirement' => false,
          'provided' => 
          array (
            0 => '*',
            1 => '1.0',
          ),
        ),
        'psr/log' => 
        array (
          'pretty_version' => '3.0.2',
          'version' => '3.0.2.0',
          'reference' => 'f16e1d5863e37f8d8c2a01719f5b34baa2b714d3',
          'type' => 'library',
          'install_path' => 'D:\\setup\\sourcecode\\package\\laravel-agent-board\\vendor\\composer/../psr/log',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'psr/log-implementation' => 
        array (
          'dev_requirement' => false,
          'provided' => 
          array (
            0 => '1.0|2.0|3.0',
            1 => '3.0.0',
          ),
        ),
        'psr/simple-cache' => 
        array (
          'pretty_version' => '3.0.0',
          'version' => '3.0.0.0',
          'reference' => '764e0b3939f5ca87cb904f570ef9be2d78a07865',
          'type' => 'library',
          'install_path' => 'D:\\setup\\sourcecode\\package\\laravel-agent-board\\vendor\\composer/../psr/simple-cache',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'psr/simple-cache-implementation' => 
        array (
          'dev_requirement' => false,
          'provided' => 
          array (
            0 => '1.0|2.0|3.0',
          ),
        ),
        'psy/psysh' => 
        array (
          'pretty_version' => 'v0.12.21',
          'version' => '0.12.21.0',
          'reference' => '4821fab5b7cd8c49a673a9fd5754dc9162bb9e97',
          'type' => 'library',
          'install_path' => 'D:\\setup\\sourcecode\\package\\laravel-agent-board\\vendor\\composer/../psy/psysh',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'ralouphie/getallheaders' => 
        array (
          'pretty_version' => '3.0.3',
          'version' => '3.0.3.0',
          'reference' => '120b605dfeb996808c31b6477290a714d356e822',
          'type' => 'library',
          'install_path' => 'D:\\setup\\sourcecode\\package\\laravel-agent-board\\vendor\\composer/../ralouphie/getallheaders',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'ramsey/collection' => 
        array (
          'pretty_version' => '2.1.1',
          'version' => '2.1.1.0',
          'reference' => '344572933ad0181accbf4ba763e85a0306a8c5e2',
          'type' => 'library',
          'install_path' => 'D:\\setup\\sourcecode\\package\\laravel-agent-board\\vendor\\composer/../ramsey/collection',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'ramsey/uuid' => 
        array (
          'pretty_version' => '4.9.2',
          'version' => '4.9.2.0',
          'reference' => '8429c78ca35a09f27565311b98101e2826affde0',
          'type' => 'library',
          'install_path' => 'D:\\setup\\sourcecode\\package\\laravel-agent-board\\vendor\\composer/../ramsey/uuid',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'rhumsaa/uuid' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => '4.9.2',
          ),
        ),
        'sebastian/cli-parser' => 
        array (
          'pretty_version' => '4.2.0',
          'version' => '4.2.0.0',
          'reference' => '90f41072d220e5c40df6e8635f5dafba2d9d4d04',
          'type' => 'library',
          'install_path' => 'D:\\setup\\sourcecode\\package\\laravel-agent-board\\vendor\\composer/../sebastian/cli-parser',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'sebastian/comparator' => 
        array (
          'pretty_version' => '7.1.4',
          'version' => '7.1.4.0',
          'reference' => '6a7de5df2e094f9a80b40a522391a7e6022df5f6',
          'type' => 'library',
          'install_path' => 'D:\\setup\\sourcecode\\package\\laravel-agent-board\\vendor\\composer/../sebastian/comparator',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'sebastian/complexity' => 
        array (
          'pretty_version' => '5.0.0',
          'version' => '5.0.0.0',
          'reference' => 'bad4316aba5303d0221f43f8cee37eb58d384bbb',
          'type' => 'library',
          'install_path' => 'D:\\setup\\sourcecode\\package\\laravel-agent-board\\vendor\\composer/../sebastian/complexity',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'sebastian/diff' => 
        array (
          'pretty_version' => '7.0.0',
          'version' => '7.0.0.0',
          'reference' => '7ab1ea946c012266ca32390913653d844ecd085f',
          'type' => 'library',
          'install_path' => 'D:\\setup\\sourcecode\\package\\laravel-agent-board\\vendor\\composer/../sebastian/diff',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'sebastian/environment' => 
        array (
          'pretty_version' => '8.0.4',
          'version' => '8.0.4.0',
          'reference' => '7b8842c2d8e85d0c3a5831236bf5869af6ab2a11',
          'type' => 'library',
          'install_path' => 'D:\\setup\\sourcecode\\package\\laravel-agent-board\\vendor\\composer/../sebastian/environment',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'sebastian/exporter' => 
        array (
          'pretty_version' => '7.0.2',
          'version' => '7.0.2.0',
          'reference' => '016951ae10980765e4e7aee491eb288c64e505b7',
          'type' => 'library',
          'install_path' => 'D:\\setup\\sourcecode\\package\\laravel-agent-board\\vendor\\composer/../sebastian/exporter',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'sebastian/global-state' => 
        array (
          'pretty_version' => '8.0.2',
          'version' => '8.0.2.0',
          'reference' => 'ef1377171613d09edd25b7816f05be8313f9115d',
          'type' => 'library',
          'install_path' => 'D:\\setup\\sourcecode\\package\\laravel-agent-board\\vendor\\composer/../sebastian/global-state',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'sebastian/lines-of-code' => 
        array (
          'pretty_version' => '4.0.0',
          'version' => '4.0.0.0',
          'reference' => '97ffee3bcfb5805568d6af7f0f893678fc076d2f',
          'type' => 'library',
          'install_path' => 'D:\\setup\\sourcecode\\package\\laravel-agent-board\\vendor\\composer/../sebastian/lines-of-code',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'sebastian/object-enumerator' => 
        array (
          'pretty_version' => '7.0.0',
          'version' => '7.0.0.0',
          'reference' => '1effe8e9b8e068e9ae228e542d5d11b5d16db894',
          'type' => 'library',
          'install_path' => 'D:\\setup\\sourcecode\\package\\laravel-agent-board\\vendor\\composer/../sebastian/object-enumerator',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'sebastian/object-reflector' => 
        array (
          'pretty_version' => '5.0.0',
          'version' => '5.0.0.0',
          'reference' => '4bfa827c969c98be1e527abd576533293c634f6a',
          'type' => 'library',
          'install_path' => 'D:\\setup\\sourcecode\\package\\laravel-agent-board\\vendor\\composer/../sebastian/object-reflector',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'sebastian/recursion-context' => 
        array (
          'pretty_version' => '7.0.1',
          'version' => '7.0.1.0',
          'reference' => '0b01998a7d5b1f122911a66bebcb8d46f0c82d8c',
          'type' => 'library',
          'install_path' => 'D:\\setup\\sourcecode\\package\\laravel-agent-board\\vendor\\composer/../sebastian/recursion-context',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'sebastian/type' => 
        array (
          'pretty_version' => '6.0.3',
          'version' => '6.0.3.0',
          'reference' => 'e549163b9760b8f71f191651d22acf32d56d6d4d',
          'type' => 'library',
          'install_path' => 'D:\\setup\\sourcecode\\package\\laravel-agent-board\\vendor\\composer/../sebastian/type',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'sebastian/version' => 
        array (
          'pretty_version' => '6.0.0',
          'version' => '6.0.0.0',
          'reference' => '3e6ccf7657d4f0a59200564b08cead899313b53c',
          'type' => 'library',
          'install_path' => 'D:\\setup\\sourcecode\\package\\laravel-agent-board\\vendor\\composer/../sebastian/version',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'spatie/once' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => '*',
          ),
        ),
        'staabm/side-effects-detector' => 
        array (
          'pretty_version' => '1.0.5',
          'version' => '1.0.5.0',
          'reference' => 'd8334211a140ce329c13726d4a715adbddd0a163',
          'type' => 'library',
          'install_path' => 'D:\\setup\\sourcecode\\package\\laravel-agent-board\\vendor\\composer/../staabm/side-effects-detector',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'symfony/clock' => 
        array (
          'pretty_version' => 'v8.0.0',
          'version' => '8.0.0.0',
          'reference' => '832119f9b8dbc6c8e6f65f30c5969eca1e88764f',
          'type' => 'library',
          'install_path' => 'D:\\setup\\sourcecode\\package\\laravel-agent-board\\vendor\\composer/../symfony/clock',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/console' => 
        array (
          'pretty_version' => 'v7.4.7',
          'version' => '7.4.7.0',
          'reference' => 'e1e6770440fb9c9b0cf725f81d1361ad1835329d',
          'type' => 'library',
          'install_path' => 'D:\\setup\\sourcecode\\package\\laravel-agent-board\\vendor\\composer/../symfony/console',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/css-selector' => 
        array (
          'pretty_version' => 'v8.0.6',
          'version' => '8.0.6.0',
          'reference' => '2a178bf80f05dbbe469a337730eba79d61315262',
          'type' => 'library',
          'install_path' => 'D:\\setup\\sourcecode\\package\\laravel-agent-board\\vendor\\composer/../symfony/css-selector',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/deprecation-contracts' => 
        array (
          'pretty_version' => 'v3.6.0',
          'version' => '3.6.0.0',
          'reference' => '63afe740e99a13ba87ec199bb07bbdee937a5b62',
          'type' => 'library',
          'install_path' => 'D:\\setup\\sourcecode\\package\\laravel-agent-board\\vendor\\composer/../symfony/deprecation-contracts',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/error-handler' => 
        array (
          'pretty_version' => 'v7.4.4',
          'version' => '7.4.4.0',
          'reference' => '8da531f364ddfee53e36092a7eebbbd0b775f6b8',
          'type' => 'library',
          'install_path' => 'D:\\setup\\sourcecode\\package\\laravel-agent-board\\vendor\\composer/../symfony/error-handler',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/event-dispatcher' => 
        array (
          'pretty_version' => 'v8.0.4',
          'version' => '8.0.4.0',
          'reference' => '99301401da182b6cfaa4700dbe9987bb75474b47',
          'type' => 'library',
          'install_path' => 'D:\\setup\\sourcecode\\package\\laravel-agent-board\\vendor\\composer/../symfony/event-dispatcher',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/event-dispatcher-contracts' => 
        array (
          'pretty_version' => 'v3.6.0',
          'version' => '3.6.0.0',
          'reference' => '59eb412e93815df44f05f342958efa9f46b1e586',
          'type' => 'library',
          'install_path' => 'D:\\setup\\sourcecode\\package\\laravel-agent-board\\vendor\\composer/../symfony/event-dispatcher-contracts',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/event-dispatcher-implementation' => 
        array (
          'dev_requirement' => false,
          'provided' => 
          array (
            0 => '2.0|3.0',
          ),
        ),
        'symfony/finder' => 
        array (
          'pretty_version' => 'v7.4.6',
          'version' => '7.4.6.0',
          'reference' => '8655bf1076b7a3a346cb11413ffdabff50c7ffcf',
          'type' => 'library',
          'install_path' => 'D:\\setup\\sourcecode\\package\\laravel-agent-board\\vendor\\composer/../symfony/finder',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/http-foundation' => 
        array (
          'pretty_version' => 'v7.4.7',
          'version' => '7.4.7.0',
          'reference' => 'f94b3e7b7dafd40e666f0c9ff2084133bae41e81',
          'type' => 'library',
          'install_path' => 'D:\\setup\\sourcecode\\package\\laravel-agent-board\\vendor\\composer/../symfony/http-foundation',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/http-kernel' => 
        array (
          'pretty_version' => 'v7.4.7',
          'version' => '7.4.7.0',
          'reference' => '3b3fcf386c809be990c922e10e4c620d6367cab1',
          'type' => 'library',
          'install_path' => 'D:\\setup\\sourcecode\\package\\laravel-agent-board\\vendor\\composer/../symfony/http-kernel',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/mailer' => 
        array (
          'pretty_version' => 'v7.4.6',
          'version' => '7.4.6.0',
          'reference' => 'b02726f39a20bc65e30364f5c750c4ddbf1f58e9',
          'type' => 'library',
          'install_path' => 'D:\\setup\\sourcecode\\package\\laravel-agent-board\\vendor\\composer/../symfony/mailer',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/mime' => 
        array (
          'pretty_version' => 'v7.4.7',
          'version' => '7.4.7.0',
          'reference' => 'da5ab4fde3f6c88ab06e96185b9922f48b677cd1',
          'type' => 'library',
          'install_path' => 'D:\\setup\\sourcecode\\package\\laravel-agent-board\\vendor\\composer/../symfony/mime',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/polyfill-ctype' => 
        array (
          'pretty_version' => 'v1.33.0',
          'version' => '1.33.0.0',
          'reference' => 'a3cc8b044a6ea513310cbd48ef7333b384945638',
          'type' => 'library',
          'install_path' => 'D:\\setup\\sourcecode\\package\\laravel-agent-board\\vendor\\composer/../symfony/polyfill-ctype',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/polyfill-intl-grapheme' => 
        array (
          'pretty_version' => 'v1.33.0',
          'version' => '1.33.0.0',
          'reference' => '380872130d3a5dd3ace2f4010d95125fde5d5c70',
          'type' => 'library',
          'install_path' => 'D:\\setup\\sourcecode\\package\\laravel-agent-board\\vendor\\composer/../symfony/polyfill-intl-grapheme',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/polyfill-intl-idn' => 
        array (
          'pretty_version' => 'v1.33.0',
          'version' => '1.33.0.0',
          'reference' => '9614ac4d8061dc257ecc64cba1b140873dce8ad3',
          'type' => 'library',
          'install_path' => 'D:\\setup\\sourcecode\\package\\laravel-agent-board\\vendor\\composer/../symfony/polyfill-intl-idn',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/polyfill-intl-normalizer' => 
        array (
          'pretty_version' => 'v1.33.0',
          'version' => '1.33.0.0',
          'reference' => '3833d7255cc303546435cb650316bff708a1c75c',
          'type' => 'library',
          'install_path' => 'D:\\setup\\sourcecode\\package\\laravel-agent-board\\vendor\\composer/../symfony/polyfill-intl-normalizer',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/polyfill-mbstring' => 
        array (
          'pretty_version' => 'v1.33.0',
          'version' => '1.33.0.0',
          'reference' => '6d857f4d76bd4b343eac26d6b539585d2bc56493',
          'type' => 'library',
          'install_path' => 'D:\\setup\\sourcecode\\package\\laravel-agent-board\\vendor\\composer/../symfony/polyfill-mbstring',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/polyfill-php80' => 
        array (
          'pretty_version' => 'v1.33.0',
          'version' => '1.33.0.0',
          'reference' => '0cc9dd0f17f61d8131e7df6b84bd344899fe2608',
          'type' => 'library',
          'install_path' => 'D:\\setup\\sourcecode\\package\\laravel-agent-board\\vendor\\composer/../symfony/polyfill-php80',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/polyfill-php83' => 
        array (
          'pretty_version' => 'v1.33.0',
          'version' => '1.33.0.0',
          'reference' => '17f6f9a6b1735c0f163024d959f700cfbc5155e5',
          'type' => 'library',
          'install_path' => 'D:\\setup\\sourcecode\\package\\laravel-agent-board\\vendor\\composer/../symfony/polyfill-php83',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/polyfill-php84' => 
        array (
          'pretty_version' => 'v1.33.0',
          'version' => '1.33.0.0',
          'reference' => 'd8ced4d875142b6a7426000426b8abc631d6b191',
          'type' => 'library',
          'install_path' => 'D:\\setup\\sourcecode\\package\\laravel-agent-board\\vendor\\composer/../symfony/polyfill-php84',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/polyfill-php85' => 
        array (
          'pretty_version' => 'v1.33.0',
          'version' => '1.33.0.0',
          'reference' => 'd4e5fcd4ab3d998ab16c0db48e6cbb9a01993f91',
          'type' => 'library',
          'install_path' => 'D:\\setup\\sourcecode\\package\\laravel-agent-board\\vendor\\composer/../symfony/polyfill-php85',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/polyfill-uuid' => 
        array (
          'pretty_version' => 'v1.33.0',
          'version' => '1.33.0.0',
          'reference' => '21533be36c24be3f4b1669c4725c7d1d2bab4ae2',
          'type' => 'library',
          'install_path' => 'D:\\setup\\sourcecode\\package\\laravel-agent-board\\vendor\\composer/../symfony/polyfill-uuid',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/process' => 
        array (
          'pretty_version' => 'v7.4.5',
          'version' => '7.4.5.0',
          'reference' => '608476f4604102976d687c483ac63a79ba18cc97',
          'type' => 'library',
          'install_path' => 'D:\\setup\\sourcecode\\package\\laravel-agent-board\\vendor\\composer/../symfony/process',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/routing' => 
        array (
          'pretty_version' => 'v7.4.6',
          'version' => '7.4.6.0',
          'reference' => '238d749c56b804b31a9bf3e26519d93b65a60938',
          'type' => 'library',
          'install_path' => 'D:\\setup\\sourcecode\\package\\laravel-agent-board\\vendor\\composer/../symfony/routing',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/service-contracts' => 
        array (
          'pretty_version' => 'v3.6.1',
          'version' => '3.6.1.0',
          'reference' => '45112560a3ba2d715666a509a0bc9521d10b6c43',
          'type' => 'library',
          'install_path' => 'D:\\setup\\sourcecode\\package\\laravel-agent-board\\vendor\\composer/../symfony/service-contracts',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/string' => 
        array (
          'pretty_version' => 'v8.0.6',
          'version' => '8.0.6.0',
          'reference' => '6c9e1108041b5dce21a9a4984b531c4923aa9ec4',
          'type' => 'library',
          'install_path' => 'D:\\setup\\sourcecode\\package\\laravel-agent-board\\vendor\\composer/../symfony/string',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/translation' => 
        array (
          'pretty_version' => 'v8.0.6',
          'version' => '8.0.6.0',
          'reference' => '13ff19bcf2bea492d3c2fbeaa194dd6f4599ce1b',
          'type' => 'library',
          'install_path' => 'D:\\setup\\sourcecode\\package\\laravel-agent-board\\vendor\\composer/../symfony/translation',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/translation-contracts' => 
        array (
          'pretty_version' => 'v3.6.1',
          'version' => '3.6.1.0',
          'reference' => '65a8bc82080447fae78373aa10f8d13b38338977',
          'type' => 'library',
          'install_path' => 'D:\\setup\\sourcecode\\package\\laravel-agent-board\\vendor\\composer/../symfony/translation-contracts',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/translation-implementation' => 
        array (
          'dev_requirement' => false,
          'provided' => 
          array (
            0 => '2.3|3.0',
          ),
        ),
        'symfony/uid' => 
        array (
          'pretty_version' => 'v7.4.4',
          'version' => '7.4.4.0',
          'reference' => '7719ce8aba76be93dfe249192f1fbfa52c588e36',
          'type' => 'library',
          'install_path' => 'D:\\setup\\sourcecode\\package\\laravel-agent-board\\vendor\\composer/../symfony/uid',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/var-dumper' => 
        array (
          'pretty_version' => 'v7.4.6',
          'version' => '7.4.6.0',
          'reference' => '045321c440ac18347b136c63d2e9bf28a2dc0291',
          'type' => 'library',
          'install_path' => 'D:\\setup\\sourcecode\\package\\laravel-agent-board\\vendor\\composer/../symfony/var-dumper',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/yaml' => 
        array (
          'pretty_version' => 'v7.4.6',
          'version' => '7.4.6.0',
          'reference' => '58751048de17bae71c5aa0d13cb19d79bca26391',
          'type' => 'library',
          'install_path' => 'D:\\setup\\sourcecode\\package\\laravel-agent-board\\vendor\\composer/../symfony/yaml',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'theseer/tokenizer' => 
        array (
          'pretty_version' => '2.0.1',
          'version' => '2.0.1.0',
          'reference' => '7989e43bf381af0eac72e4f0ca5bcbfa81658be4',
          'type' => 'library',
          'install_path' => 'D:\\setup\\sourcecode\\package\\laravel-agent-board\\vendor\\composer/../theseer/tokenizer',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'tijsverkoyen/css-to-inline-styles' => 
        array (
          'pretty_version' => 'v2.4.0',
          'version' => '2.4.0.0',
          'reference' => 'f0292ccf0ec75843d65027214426b6b163b48b41',
          'type' => 'library',
          'install_path' => 'D:\\setup\\sourcecode\\package\\laravel-agent-board\\vendor\\composer/../tijsverkoyen/css-to-inline-styles',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'vlucas/phpdotenv' => 
        array (
          'pretty_version' => 'v5.6.3',
          'version' => '5.6.3.0',
          'reference' => '955e7815d677a3eaa7075231212f2110983adecc',
          'type' => 'library',
          'install_path' => 'D:\\setup\\sourcecode\\package\\laravel-agent-board\\vendor\\composer/../vlucas/phpdotenv',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'voku/portable-ascii' => 
        array (
          'pretty_version' => '2.0.3',
          'version' => '2.0.3.0',
          'reference' => 'b1d923f88091c6bf09699efcd7c8a1b1bfd7351d',
          'type' => 'library',
          'install_path' => 'D:\\setup\\sourcecode\\package\\laravel-agent-board\\vendor\\composer/../voku/portable-ascii',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
      ),
    ),
  ),
  'executedFilesHashes' => 
  array (
    'D:\\setup\\sourcecode\\package\\laravel-agent-board\\vendor\\larastan\\larastan\\bootstrap.php' => '5a3eacbf63b3e41659adfee92facededf8e020a932800f93c9a8b0e67f235805',
    'phar://D:\\setup\\sourcecode\\package\\laravel-agent-board\\vendor\\phpstan\\phpstan\\phpstan.phar\\stubs\\runtime\\Attribute85.php' => 'cb8b31e82c61ce197871c9e8a6f122256751f2ab606dd2be90846d4fa5f8933e',
    'phar://D:\\setup\\sourcecode\\package\\laravel-agent-board\\vendor\\phpstan\\phpstan\\phpstan.phar\\stubs\\runtime\\ReflectionAttribute.php' => 'c0068e383717870a304781d462f7e2afe1c6f24e9133851852a2aca96b4fa26f',
    'phar://D:\\setup\\sourcecode\\package\\laravel-agent-board\\vendor\\phpstan\\phpstan\\phpstan.phar\\stubs\\runtime\\ReflectionIntersectionType.php' => '65fe0a8bc6fe285d8ddc8798ab5b9299920af70db5ad74596bc08df823e7c5d9',
    'phar://D:\\setup\\sourcecode\\package\\laravel-agent-board\\vendor\\phpstan\\phpstan\\phpstan.phar\\stubs\\runtime\\ReflectionUnionType.php' => '1e2fe940e4ba4e00d9ee6adb2af3ee1bf333e6f8afe61c61deb038886d293427',
  ),
  'phpExtensions' => 
  array (
    0 => 'Core',
    1 => 'PDO',
    2 => 'Phar',
    3 => 'Reflection',
    4 => 'SPL',
    5 => 'SimpleXML',
    6 => 'Zend OPcache',
    7 => 'bcmath',
    8 => 'bz2',
    9 => 'calendar',
    10 => 'ctype',
    11 => 'curl',
    12 => 'date',
    13 => 'dom',
    14 => 'fileinfo',
    15 => 'filter',
    16 => 'gd',
    17 => 'hash',
    18 => 'iconv',
    19 => 'json',
    20 => 'lexbor',
    21 => 'libxml',
    22 => 'mbstring',
    23 => 'mysqli',
    24 => 'mysqlnd',
    25 => 'openssl',
    26 => 'pcre',
    27 => 'pdo_mysql',
    28 => 'pdo_sqlite',
    29 => 'random',
    30 => 'readline',
    31 => 'session',
    32 => 'sodium',
    33 => 'sqlite3',
    34 => 'standard',
    35 => 'tokenizer',
    36 => 'uri',
    37 => 'xml',
    38 => 'xmlreader',
    39 => 'xmlwriter',
    40 => 'zip',
    41 => 'zlib',
  ),
  'stubFiles' => 
  array (
  ),
  'level' => '8',
),
	'projectExtensionFiles' => array (
),
	'errorsCallback' => static function (): array { return array (
  'D:\\setup\\sourcecode\\package\\laravel-agent-board\\src\\Console\\Commands\\RunAutomationCommand.php' => 
  array (
    0 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Part $provider (array|bool|float|int|string|null) of encapsed string cannot be cast to string.',
       'file' => 'D:\\setup\\sourcecode\\package\\laravel-agent-board\\src\\Console\\Commands\\RunAutomationCommand.php',
       'line' => 35,
       'canBeIgnored' => true,
       'filePath' => 'D:\\setup\\sourcecode\\package\\laravel-agent-board\\src\\Console\\Commands\\RunAutomationCommand.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 35,
       'nodeType' => 'PhpParser\\Node\\Scalar\\InterpolatedString',
       'identifier' => 'encapsedStringPart.nonString',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    1 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Part $provider (array|bool|float|int|string|null) of encapsed string cannot be cast to string.',
       'file' => 'D:\\setup\\sourcecode\\package\\laravel-agent-board\\src\\Console\\Commands\\RunAutomationCommand.php',
       'line' => 39,
       'canBeIgnored' => true,
       'filePath' => 'D:\\setup\\sourcecode\\package\\laravel-agent-board\\src\\Console\\Commands\\RunAutomationCommand.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 39,
       'nodeType' => 'PhpParser\\Node\\Scalar\\InterpolatedString',
       'identifier' => 'encapsedStringPart.nonString',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    2 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Parameter #1 $string of method Illuminate\\Console\\Command::line() expects string, string|false given.',
       'file' => 'D:\\setup\\sourcecode\\package\\laravel-agent-board\\src\\Console\\Commands\\RunAutomationCommand.php',
       'line' => 78,
       'canBeIgnored' => true,
       'filePath' => 'D:\\setup\\sourcecode\\package\\laravel-agent-board\\src\\Console\\Commands\\RunAutomationCommand.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 78,
       'nodeType' => 'PhpParser\\Node\\Expr\\MethodCall',
       'identifier' => 'argument.type',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
  ),
  'D:\\setup\\sourcecode\\package\\laravel-agent-board\\src\\Console\\Commands\\SyncTasksCommand.php' => 
  array (
    0 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Part $provider (array|bool|float|int|string|null) of encapsed string cannot be cast to string.',
       'file' => 'D:\\setup\\sourcecode\\package\\laravel-agent-board\\src\\Console\\Commands\\SyncTasksCommand.php',
       'line' => 24,
       'canBeIgnored' => true,
       'filePath' => 'D:\\setup\\sourcecode\\package\\laravel-agent-board\\src\\Console\\Commands\\SyncTasksCommand.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 24,
       'nodeType' => 'PhpParser\\Node\\Scalar\\InterpolatedString',
       'identifier' => 'encapsedStringPart.nonString',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    1 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Parameter #1 $string of method Illuminate\\Console\\Command::line() expects string, string|false given.',
       'file' => 'D:\\setup\\sourcecode\\package\\laravel-agent-board\\src\\Console\\Commands\\SyncTasksCommand.php',
       'line' => 39,
       'canBeIgnored' => true,
       'filePath' => 'D:\\setup\\sourcecode\\package\\laravel-agent-board\\src\\Console\\Commands\\SyncTasksCommand.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 39,
       'nodeType' => 'PhpParser\\Node\\Expr\\MethodCall',
       'identifier' => 'argument.type',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
  ),
  'D:\\setup\\sourcecode\\package\\laravel-agent-board\\src\\Contracts\\AiAgentInterface.php' => 
  array (
    0 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Method DevBridge\\AgentBoard\\Contracts\\AiAgentInterface::processTask() has parameter $tools with no value type specified in iterable type array.',
       'file' => 'D:\\setup\\sourcecode\\package\\laravel-agent-board\\src\\Contracts\\AiAgentInterface.php',
       'line' => 11,
       'canBeIgnored' => true,
       'filePath' => 'D:\\setup\\sourcecode\\package\\laravel-agent-board\\src\\Contracts\\AiAgentInterface.php',
       'traitFilePath' => NULL,
       'tip' => 'See: https://phpstan.org/blog/solving-phpstan-no-value-type-specified-in-iterable-type',
       'nodeLine' => 11,
       'nodeType' => 'PHPStan\\Node\\InClassMethodNode',
       'identifier' => 'missingType.iterableValue',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    1 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Method DevBridge\\AgentBoard\\Contracts\\AiAgentInterface::planTask() return type has no value type specified in iterable type array.',
       'file' => 'D:\\setup\\sourcecode\\package\\laravel-agent-board\\src\\Contracts\\AiAgentInterface.php',
       'line' => 13,
       'canBeIgnored' => true,
       'filePath' => 'D:\\setup\\sourcecode\\package\\laravel-agent-board\\src\\Contracts\\AiAgentInterface.php',
       'traitFilePath' => NULL,
       'tip' => 'See: https://phpstan.org/blog/solving-phpstan-no-value-type-specified-in-iterable-type',
       'nodeLine' => 13,
       'nodeType' => 'PHPStan\\Node\\InClassMethodNode',
       'identifier' => 'missingType.iterableValue',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
  ),
  'D:\\setup\\sourcecode\\package\\laravel-agent-board\\src\\Contracts\\KanbanProviderInterface.php' => 
  array (
    0 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Method DevBridge\\AgentBoard\\Contracts\\KanbanProviderInterface::getBoardColumns() return type has no value type specified in iterable type array.',
       'file' => 'D:\\setup\\sourcecode\\package\\laravel-agent-board\\src\\Contracts\\KanbanProviderInterface.php',
       'line' => 8,
       'canBeIgnored' => true,
       'filePath' => 'D:\\setup\\sourcecode\\package\\laravel-agent-board\\src\\Contracts\\KanbanProviderInterface.php',
       'traitFilePath' => NULL,
       'tip' => 'See: https://phpstan.org/blog/solving-phpstan-no-value-type-specified-in-iterable-type',
       'nodeLine' => 8,
       'nodeType' => 'PHPStan\\Node\\InClassMethodNode',
       'identifier' => 'missingType.iterableValue',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    1 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Method DevBridge\\AgentBoard\\Contracts\\KanbanProviderInterface::getBoards() return type has no value type specified in iterable type array.',
       'file' => 'D:\\setup\\sourcecode\\package\\laravel-agent-board\\src\\Contracts\\KanbanProviderInterface.php',
       'line' => 12,
       'canBeIgnored' => true,
       'filePath' => 'D:\\setup\\sourcecode\\package\\laravel-agent-board\\src\\Contracts\\KanbanProviderInterface.php',
       'traitFilePath' => NULL,
       'tip' => 'See: https://phpstan.org/blog/solving-phpstan-no-value-type-specified-in-iterable-type',
       'nodeLine' => 12,
       'nodeType' => 'PHPStan\\Node\\InClassMethodNode',
       'identifier' => 'missingType.iterableValue',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
  ),
  'D:\\setup\\sourcecode\\package\\laravel-agent-board\\src\\Contracts\\ProjectManagementInterface.php' => 
  array (
    0 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Method DevBridge\\AgentBoard\\Contracts\\ProjectManagementInterface::getKanbanBoard() return type has no value type specified in iterable type array.',
       'file' => 'D:\\setup\\sourcecode\\package\\laravel-agent-board\\src\\Contracts\\ProjectManagementInterface.php',
       'line' => 24,
       'canBeIgnored' => true,
       'filePath' => 'D:\\setup\\sourcecode\\package\\laravel-agent-board\\src\\Contracts\\ProjectManagementInterface.php',
       'traitFilePath' => NULL,
       'tip' => 'See: https://phpstan.org/blog/solving-phpstan-no-value-type-specified-in-iterable-type',
       'nodeLine' => 24,
       'nodeType' => 'PHPStan\\Node\\InClassMethodNode',
       'identifier' => 'missingType.iterableValue',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
  ),
  'D:\\setup\\sourcecode\\package\\laravel-agent-board\\src\\DTOs\\AgentResultDTO.php' => 
  array (
    0 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Method DevBridge\\AgentBoard\\DTOs\\AgentResultDTO::__construct() has parameter $artifacts with no value type specified in iterable type array.',
       'file' => 'D:\\setup\\sourcecode\\package\\laravel-agent-board\\src\\DTOs\\AgentResultDTO.php',
       'line' => 8,
       'canBeIgnored' => true,
       'filePath' => 'D:\\setup\\sourcecode\\package\\laravel-agent-board\\src\\DTOs\\AgentResultDTO.php',
       'traitFilePath' => NULL,
       'tip' => 'See: https://phpstan.org/blog/solving-phpstan-no-value-type-specified-in-iterable-type',
       'nodeLine' => 8,
       'nodeType' => 'PHPStan\\Node\\InClassMethodNode',
       'identifier' => 'missingType.iterableValue',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    1 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Method DevBridge\\AgentBoard\\DTOs\\AgentResultDTO::__construct() has parameter $toolCallLog with no value type specified in iterable type array.',
       'file' => 'D:\\setup\\sourcecode\\package\\laravel-agent-board\\src\\DTOs\\AgentResultDTO.php',
       'line' => 8,
       'canBeIgnored' => true,
       'filePath' => 'D:\\setup\\sourcecode\\package\\laravel-agent-board\\src\\DTOs\\AgentResultDTO.php',
       'traitFilePath' => NULL,
       'tip' => 'See: https://phpstan.org/blog/solving-phpstan-no-value-type-specified-in-iterable-type',
       'nodeLine' => 8,
       'nodeType' => 'PHPStan\\Node\\InClassMethodNode',
       'identifier' => 'missingType.iterableValue',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    2 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Method DevBridge\\AgentBoard\\DTOs\\AgentResultDTO::success() has parameter $artifacts with no value type specified in iterable type array.',
       'file' => 'D:\\setup\\sourcecode\\package\\laravel-agent-board\\src\\DTOs\\AgentResultDTO.php',
       'line' => 19,
       'canBeIgnored' => true,
       'filePath' => 'D:\\setup\\sourcecode\\package\\laravel-agent-board\\src\\DTOs\\AgentResultDTO.php',
       'traitFilePath' => NULL,
       'tip' => 'See: https://phpstan.org/blog/solving-phpstan-no-value-type-specified-in-iterable-type',
       'nodeLine' => 19,
       'nodeType' => 'PHPStan\\Node\\InClassMethodNode',
       'identifier' => 'missingType.iterableValue',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    3 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Method DevBridge\\AgentBoard\\DTOs\\AgentResultDTO::success() has parameter $toolCallLog with no value type specified in iterable type array.',
       'file' => 'D:\\setup\\sourcecode\\package\\laravel-agent-board\\src\\DTOs\\AgentResultDTO.php',
       'line' => 19,
       'canBeIgnored' => true,
       'filePath' => 'D:\\setup\\sourcecode\\package\\laravel-agent-board\\src\\DTOs\\AgentResultDTO.php',
       'traitFilePath' => NULL,
       'tip' => 'See: https://phpstan.org/blog/solving-phpstan-no-value-type-specified-in-iterable-type',
       'nodeLine' => 19,
       'nodeType' => 'PHPStan\\Node\\InClassMethodNode',
       'identifier' => 'missingType.iterableValue',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
  ),
  'D:\\setup\\sourcecode\\package\\laravel-agent-board\\src\\DTOs\\ProjectDTO.php' => 
  array (
    0 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Method DevBridge\\AgentBoard\\DTOs\\ProjectDTO::__construct() has parameter $metadata with no value type specified in iterable type array.',
       'file' => 'D:\\setup\\sourcecode\\package\\laravel-agent-board\\src\\DTOs\\ProjectDTO.php',
       'line' => 8,
       'canBeIgnored' => true,
       'filePath' => 'D:\\setup\\sourcecode\\package\\laravel-agent-board\\src\\DTOs\\ProjectDTO.php',
       'traitFilePath' => NULL,
       'tip' => 'See: https://phpstan.org/blog/solving-phpstan-no-value-type-specified-in-iterable-type',
       'nodeLine' => 8,
       'nodeType' => 'PHPStan\\Node\\InClassMethodNode',
       'identifier' => 'missingType.iterableValue',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    1 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Method DevBridge\\AgentBoard\\DTOs\\ProjectDTO::fromJiraProject() has parameter $project with no value type specified in iterable type array.',
       'file' => 'D:\\setup\\sourcecode\\package\\laravel-agent-board\\src\\DTOs\\ProjectDTO.php',
       'line' => 18,
       'canBeIgnored' => true,
       'filePath' => 'D:\\setup\\sourcecode\\package\\laravel-agent-board\\src\\DTOs\\ProjectDTO.php',
       'traitFilePath' => NULL,
       'tip' => 'See: https://phpstan.org/blog/solving-phpstan-no-value-type-specified-in-iterable-type',
       'nodeLine' => 18,
       'nodeType' => 'PHPStan\\Node\\InClassMethodNode',
       'identifier' => 'missingType.iterableValue',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    2 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Method DevBridge\\AgentBoard\\DTOs\\ProjectDTO::toArray() return type has no value type specified in iterable type array.',
       'file' => 'D:\\setup\\sourcecode\\package\\laravel-agent-board\\src\\DTOs\\ProjectDTO.php',
       'line' => 30,
       'canBeIgnored' => true,
       'filePath' => 'D:\\setup\\sourcecode\\package\\laravel-agent-board\\src\\DTOs\\ProjectDTO.php',
       'traitFilePath' => NULL,
       'tip' => 'See: https://phpstan.org/blog/solving-phpstan-no-value-type-specified-in-iterable-type',
       'nodeLine' => 30,
       'nodeType' => 'PHPStan\\Node\\InClassMethodNode',
       'identifier' => 'missingType.iterableValue',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
  ),
  'D:\\setup\\sourcecode\\package\\laravel-agent-board\\src\\DTOs\\TaskDTO.php' => 
  array (
    0 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Method DevBridge\\AgentBoard\\DTOs\\TaskDTO::__construct() has parameter $attachments with no value type specified in iterable type array.',
       'file' => 'D:\\setup\\sourcecode\\package\\laravel-agent-board\\src\\DTOs\\TaskDTO.php',
       'line' => 11,
       'canBeIgnored' => true,
       'filePath' => 'D:\\setup\\sourcecode\\package\\laravel-agent-board\\src\\DTOs\\TaskDTO.php',
       'traitFilePath' => NULL,
       'tip' => 'See: https://phpstan.org/blog/solving-phpstan-no-value-type-specified-in-iterable-type',
       'nodeLine' => 11,
       'nodeType' => 'PHPStan\\Node\\InClassMethodNode',
       'identifier' => 'missingType.iterableValue',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    1 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Method DevBridge\\AgentBoard\\DTOs\\TaskDTO::__construct() has parameter $comments with no value type specified in iterable type array.',
       'file' => 'D:\\setup\\sourcecode\\package\\laravel-agent-board\\src\\DTOs\\TaskDTO.php',
       'line' => 11,
       'canBeIgnored' => true,
       'filePath' => 'D:\\setup\\sourcecode\\package\\laravel-agent-board\\src\\DTOs\\TaskDTO.php',
       'traitFilePath' => NULL,
       'tip' => 'See: https://phpstan.org/blog/solving-phpstan-no-value-type-specified-in-iterable-type',
       'nodeLine' => 11,
       'nodeType' => 'PHPStan\\Node\\InClassMethodNode',
       'identifier' => 'missingType.iterableValue',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    2 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Method DevBridge\\AgentBoard\\DTOs\\TaskDTO::__construct() has parameter $labels with no value type specified in iterable type array.',
       'file' => 'D:\\setup\\sourcecode\\package\\laravel-agent-board\\src\\DTOs\\TaskDTO.php',
       'line' => 11,
       'canBeIgnored' => true,
       'filePath' => 'D:\\setup\\sourcecode\\package\\laravel-agent-board\\src\\DTOs\\TaskDTO.php',
       'traitFilePath' => NULL,
       'tip' => 'See: https://phpstan.org/blog/solving-phpstan-no-value-type-specified-in-iterable-type',
       'nodeLine' => 11,
       'nodeType' => 'PHPStan\\Node\\InClassMethodNode',
       'identifier' => 'missingType.iterableValue',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    3 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Method DevBridge\\AgentBoard\\DTOs\\TaskDTO::__construct() has parameter $metadata with no value type specified in iterable type array.',
       'file' => 'D:\\setup\\sourcecode\\package\\laravel-agent-board\\src\\DTOs\\TaskDTO.php',
       'line' => 11,
       'canBeIgnored' => true,
       'filePath' => 'D:\\setup\\sourcecode\\package\\laravel-agent-board\\src\\DTOs\\TaskDTO.php',
       'traitFilePath' => NULL,
       'tip' => 'See: https://phpstan.org/blog/solving-phpstan-no-value-type-specified-in-iterable-type',
       'nodeLine' => 11,
       'nodeType' => 'PHPStan\\Node\\InClassMethodNode',
       'identifier' => 'missingType.iterableValue',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    4 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Method DevBridge\\AgentBoard\\DTOs\\TaskDTO::fromJiraIssue() has parameter $issue with no value type specified in iterable type array.',
       'file' => 'D:\\setup\\sourcecode\\package\\laravel-agent-board\\src\\DTOs\\TaskDTO.php',
       'line' => 33,
       'canBeIgnored' => true,
       'filePath' => 'D:\\setup\\sourcecode\\package\\laravel-agent-board\\src\\DTOs\\TaskDTO.php',
       'traitFilePath' => NULL,
       'tip' => 'See: https://phpstan.org/blog/solving-phpstan-no-value-type-specified-in-iterable-type',
       'nodeLine' => 33,
       'nodeType' => 'PHPStan\\Node\\InClassMethodNode',
       'identifier' => 'missingType.iterableValue',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    5 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Method DevBridge\\AgentBoard\\DTOs\\TaskDTO::toArray() return type has no value type specified in iterable type array.',
       'file' => 'D:\\setup\\sourcecode\\package\\laravel-agent-board\\src\\DTOs\\TaskDTO.php',
       'line' => 78,
       'canBeIgnored' => true,
       'filePath' => 'D:\\setup\\sourcecode\\package\\laravel-agent-board\\src\\DTOs\\TaskDTO.php',
       'traitFilePath' => NULL,
       'tip' => 'See: https://phpstan.org/blog/solving-phpstan-no-value-type-specified-in-iterable-type',
       'nodeLine' => 78,
       'nodeType' => 'PHPStan\\Node\\InClassMethodNode',
       'identifier' => 'missingType.iterableValue',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
  ),
  'D:\\setup\\sourcecode\\package\\laravel-agent-board\\src\\Facades\\AgentBoard.php' => 
  array (
    0 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Class DevBridge\\AgentBoard\\Facades\\AgentBoard has PHPDoc tag @method for method runAutomationCycle() return type with no value type specified in iterable type array.',
       'file' => 'D:\\setup\\sourcecode\\package\\laravel-agent-board\\src\\Facades\\AgentBoard.php',
       'line' => 21,
       'canBeIgnored' => true,
       'filePath' => 'D:\\setup\\sourcecode\\package\\laravel-agent-board\\src\\Facades\\AgentBoard.php',
       'traitFilePath' => NULL,
       'tip' => 'See: https://phpstan.org/blog/solving-phpstan-no-value-type-specified-in-iterable-type',
       'nodeLine' => 21,
       'nodeType' => 'PHPStan\\Node\\InClassNode',
       'identifier' => 'missingType.iterableValue',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    1 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'PHPDoc tag @method for method DevBridge\\AgentBoard\\Facades\\AgentBoard::planTasks() parameter #1 $tasks contains generic class Illuminate\\Support\\Collection but does not specify its types: TKey, TValue',
       'file' => 'D:\\setup\\sourcecode\\package\\laravel-agent-board\\src\\Facades\\AgentBoard.php',
       'line' => 21,
       'canBeIgnored' => true,
       'filePath' => 'D:\\setup\\sourcecode\\package\\laravel-agent-board\\src\\Facades\\AgentBoard.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 21,
       'nodeType' => 'PHPStan\\Node\\InClassNode',
       'identifier' => 'missingType.generics',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    2 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'PHPDoc tag @method for method DevBridge\\AgentBoard\\Facades\\AgentBoard::planTasks() return type contains generic class Illuminate\\Support\\Collection but does not specify its types: TKey, TValue',
       'file' => 'D:\\setup\\sourcecode\\package\\laravel-agent-board\\src\\Facades\\AgentBoard.php',
       'line' => 21,
       'canBeIgnored' => true,
       'filePath' => 'D:\\setup\\sourcecode\\package\\laravel-agent-board\\src\\Facades\\AgentBoard.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 21,
       'nodeType' => 'PHPStan\\Node\\InClassNode',
       'identifier' => 'missingType.generics',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
  ),
  'D:\\setup\\sourcecode\\package\\laravel-agent-board\\src\\Http\\Controllers\\DashboardController.php' => 
  array (
    0 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Parameter #1 $view of function view expects view-string|null, string given.',
       'file' => 'D:\\setup\\sourcecode\\package\\laravel-agent-board\\src\\Http\\Controllers\\DashboardController.php',
       'line' => 15,
       'canBeIgnored' => true,
       'filePath' => 'D:\\setup\\sourcecode\\package\\laravel-agent-board\\src\\Http\\Controllers\\DashboardController.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 15,
       'nodeType' => 'PhpParser\\Node\\Expr\\FuncCall',
       'identifier' => 'argument.type',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
  ),
  'D:\\setup\\sourcecode\\package\\laravel-agent-board\\src\\Http\\Controllers\\MonitoringController.php' => 
  array (
    0 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Parameter #1 $view of function view expects view-string|null, string given.',
       'file' => 'D:\\setup\\sourcecode\\package\\laravel-agent-board\\src\\Http\\Controllers\\MonitoringController.php',
       'line' => 23,
       'canBeIgnored' => true,
       'filePath' => 'D:\\setup\\sourcecode\\package\\laravel-agent-board\\src\\Http\\Controllers\\MonitoringController.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 23,
       'nodeType' => 'PhpParser\\Node\\Expr\\FuncCall',
       'identifier' => 'argument.type',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
  ),
  'D:\\setup\\sourcecode\\package\\laravel-agent-board\\src\\Http\\Controllers\\SettingsController.php' => 
  array (
    0 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Parameter #1 $view of function view expects view-string|null, string given.',
       'file' => 'D:\\setup\\sourcecode\\package\\laravel-agent-board\\src\\Http\\Controllers\\SettingsController.php',
       'line' => 20,
       'canBeIgnored' => true,
       'filePath' => 'D:\\setup\\sourcecode\\package\\laravel-agent-board\\src\\Http\\Controllers\\SettingsController.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 20,
       'nodeType' => 'PhpParser\\Node\\Expr\\FuncCall',
       'identifier' => 'argument.type',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    1 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Method DevBridge\\AgentBoard\\Http\\Controllers\\SettingsController::safeConfig() return type has no value type specified in iterable type array.',
       'file' => 'D:\\setup\\sourcecode\\package\\laravel-agent-board\\src\\Http\\Controllers\\SettingsController.php',
       'line' => 70,
       'canBeIgnored' => true,
       'filePath' => 'D:\\setup\\sourcecode\\package\\laravel-agent-board\\src\\Http\\Controllers\\SettingsController.php',
       'traitFilePath' => NULL,
       'tip' => 'See: https://phpstan.org/blog/solving-phpstan-no-value-type-specified-in-iterable-type',
       'nodeLine' => 70,
       'nodeType' => 'PHPStan\\Node\\InClassMethodNode',
       'identifier' => 'missingType.iterableValue',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
  ),
  'D:\\setup\\sourcecode\\package\\laravel-agent-board\\src\\Jobs\\ProcessTaskWithAgentJob.php' => 
  array (
    0 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Method DevBridge\\AgentBoard\\Jobs\\ProcessTaskWithAgentJob::backoff() return type has no value type specified in iterable type array.',
       'file' => 'D:\\setup\\sourcecode\\package\\laravel-agent-board\\src\\Jobs\\ProcessTaskWithAgentJob.php',
       'line' => 59,
       'canBeIgnored' => true,
       'filePath' => 'D:\\setup\\sourcecode\\package\\laravel-agent-board\\src\\Jobs\\ProcessTaskWithAgentJob.php',
       'traitFilePath' => NULL,
       'tip' => 'See: https://phpstan.org/blog/solving-phpstan-no-value-type-specified-in-iterable-type',
       'nodeLine' => 59,
       'nodeType' => 'PHPStan\\Node\\InClassMethodNode',
       'identifier' => 'missingType.iterableValue',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
  ),
  'D:\\setup\\sourcecode\\package\\laravel-agent-board\\src\\Monitoring\\AgentExecutionLogger.php' => 
  array (
    0 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Method DevBridge\\AgentBoard\\Monitoring\\AgentExecutionLogger::getRecentRuns() return type has no value type specified in iterable type array.',
       'file' => 'D:\\setup\\sourcecode\\package\\laravel-agent-board\\src\\Monitoring\\AgentExecutionLogger.php',
       'line' => 56,
       'canBeIgnored' => true,
       'filePath' => 'D:\\setup\\sourcecode\\package\\laravel-agent-board\\src\\Monitoring\\AgentExecutionLogger.php',
       'traitFilePath' => NULL,
       'tip' => 'See: https://phpstan.org/blog/solving-phpstan-no-value-type-specified-in-iterable-type',
       'nodeLine' => 56,
       'nodeType' => 'PHPStan\\Node\\InClassMethodNode',
       'identifier' => 'missingType.iterableValue',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    1 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Method DevBridge\\AgentBoard\\Monitoring\\AgentExecutionLogger::getStats() return type has no value type specified in iterable type array.',
       'file' => 'D:\\setup\\sourcecode\\package\\laravel-agent-board\\src\\Monitoring\\AgentExecutionLogger.php',
       'line' => 64,
       'canBeIgnored' => true,
       'filePath' => 'D:\\setup\\sourcecode\\package\\laravel-agent-board\\src\\Monitoring\\AgentExecutionLogger.php',
       'traitFilePath' => NULL,
       'tip' => 'See: https://phpstan.org/blog/solving-phpstan-no-value-type-specified-in-iterable-type',
       'nodeLine' => 64,
       'nodeType' => 'PHPStan\\Node\\InClassMethodNode',
       'identifier' => 'missingType.iterableValue',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
  ),
  'D:\\setup\\sourcecode\\package\\laravel-agent-board\\src\\Monitoring\\TokenUsageService.php' => 
  array (
    0 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Method DevBridge\\AgentBoard\\Monitoring\\TokenUsageService::getCostByProject() return type has no value type specified in iterable type array.',
       'file' => 'D:\\setup\\sourcecode\\package\\laravel-agent-board\\src\\Monitoring\\TokenUsageService.php',
       'line' => 51,
       'canBeIgnored' => true,
       'filePath' => 'D:\\setup\\sourcecode\\package\\laravel-agent-board\\src\\Monitoring\\TokenUsageService.php',
       'traitFilePath' => NULL,
       'tip' => 'See: https://phpstan.org/blog/solving-phpstan-no-value-type-specified-in-iterable-type',
       'nodeLine' => 51,
       'nodeType' => 'PHPStan\\Node\\InClassMethodNode',
       'identifier' => 'missingType.iterableValue',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    1 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Method DevBridge\\AgentBoard\\Monitoring\\TokenUsageService::getDashboardSummary() return type has no value type specified in iterable type array.',
       'file' => 'D:\\setup\\sourcecode\\package\\laravel-agent-board\\src\\Monitoring\\TokenUsageService.php',
       'line' => 66,
       'canBeIgnored' => true,
       'filePath' => 'D:\\setup\\sourcecode\\package\\laravel-agent-board\\src\\Monitoring\\TokenUsageService.php',
       'traitFilePath' => NULL,
       'tip' => 'See: https://phpstan.org/blog/solving-phpstan-no-value-type-specified-in-iterable-type',
       'nodeLine' => 66,
       'nodeType' => 'PHPStan\\Node\\InClassMethodNode',
       'identifier' => 'missingType.iterableValue',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
  ),
  'D:\\setup\\sourcecode\\package\\laravel-agent-board\\src\\Resilience\\CircuitBreaker.php' => 
  array (
    0 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Method DevBridge\\AgentBoard\\Resilience\\CircuitBreaker::getStatus() has parameter $services with no value type specified in iterable type array.',
       'file' => 'D:\\setup\\sourcecode\\package\\laravel-agent-board\\src\\Resilience\\CircuitBreaker.php',
       'line' => 60,
       'canBeIgnored' => true,
       'filePath' => 'D:\\setup\\sourcecode\\package\\laravel-agent-board\\src\\Resilience\\CircuitBreaker.php',
       'traitFilePath' => NULL,
       'tip' => 'See: https://phpstan.org/blog/solving-phpstan-no-value-type-specified-in-iterable-type',
       'nodeLine' => 60,
       'nodeType' => 'PHPStan\\Node\\InClassMethodNode',
       'identifier' => 'missingType.iterableValue',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    1 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Method DevBridge\\AgentBoard\\Resilience\\CircuitBreaker::getStatus() return type has no value type specified in iterable type array.',
       'file' => 'D:\\setup\\sourcecode\\package\\laravel-agent-board\\src\\Resilience\\CircuitBreaker.php',
       'line' => 60,
       'canBeIgnored' => true,
       'filePath' => 'D:\\setup\\sourcecode\\package\\laravel-agent-board\\src\\Resilience\\CircuitBreaker.php',
       'traitFilePath' => NULL,
       'tip' => 'See: https://phpstan.org/blog/solving-phpstan-no-value-type-specified-in-iterable-type',
       'nodeLine' => 60,
       'nodeType' => 'PHPStan\\Node\\InClassMethodNode',
       'identifier' => 'missingType.iterableValue',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
  ),
  'D:\\setup\\sourcecode\\package\\laravel-agent-board\\src\\Security\\ConnectionRepository.php' => 
  array (
    0 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Method DevBridge\\AgentBoard\\Security\\ConnectionRepository::store() has parameter $credentials with no value type specified in iterable type array.',
       'file' => 'D:\\setup\\sourcecode\\package\\laravel-agent-board\\src\\Security\\ConnectionRepository.php',
       'line' => 11,
       'canBeIgnored' => true,
       'filePath' => 'D:\\setup\\sourcecode\\package\\laravel-agent-board\\src\\Security\\ConnectionRepository.php',
       'traitFilePath' => NULL,
       'tip' => 'See: https://phpstan.org/blog/solving-phpstan-no-value-type-specified-in-iterable-type',
       'nodeLine' => 11,
       'nodeType' => 'PHPStan\\Node\\InClassMethodNode',
       'identifier' => 'missingType.iterableValue',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    1 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Method DevBridge\\AgentBoard\\Security\\ConnectionRepository::get() return type has no value type specified in iterable type array.',
       'file' => 'D:\\setup\\sourcecode\\package\\laravel-agent-board\\src\\Security\\ConnectionRepository.php',
       'line' => 26,
       'canBeIgnored' => true,
       'filePath' => 'D:\\setup\\sourcecode\\package\\laravel-agent-board\\src\\Security\\ConnectionRepository.php',
       'traitFilePath' => NULL,
       'tip' => 'See: https://phpstan.org/blog/solving-phpstan-no-value-type-specified-in-iterable-type',
       'nodeLine' => 26,
       'nodeType' => 'PHPStan\\Node\\InClassMethodNode',
       'identifier' => 'missingType.iterableValue',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
  ),
  'D:\\setup\\sourcecode\\package\\laravel-agent-board\\src\\Services\\AI\\AgentFactory.php' => 
  array (
    0 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Property DevBridge\\AgentBoard\\Services\\AI\\AgentFactory::$taskTypeProfiles type has no value type specified in iterable type array.',
       'file' => 'D:\\setup\\sourcecode\\package\\laravel-agent-board\\src\\Services\\AI\\AgentFactory.php',
       'line' => 15,
       'canBeIgnored' => true,
       'filePath' => 'D:\\setup\\sourcecode\\package\\laravel-agent-board\\src\\Services\\AI\\AgentFactory.php',
       'traitFilePath' => NULL,
       'tip' => 'See: https://phpstan.org/blog/solving-phpstan-no-value-type-specified-in-iterable-type',
       'nodeLine' => 15,
       'nodeType' => 'PHPStan\\Node\\ClassPropertyNode',
       'identifier' => 'missingType.iterableValue',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    1 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Method DevBridge\\AgentBoard\\Services\\AI\\AgentFactory::__construct() has parameter $config with no value type specified in iterable type array.',
       'file' => 'D:\\setup\\sourcecode\\package\\laravel-agent-board\\src\\Services\\AI\\AgentFactory.php',
       'line' => 17,
       'canBeIgnored' => true,
       'filePath' => 'D:\\setup\\sourcecode\\package\\laravel-agent-board\\src\\Services\\AI\\AgentFactory.php',
       'traitFilePath' => NULL,
       'tip' => 'See: https://phpstan.org/blog/solving-phpstan-no-value-type-specified-in-iterable-type',
       'nodeLine' => 17,
       'nodeType' => 'PHPStan\\Node\\InClassMethodNode',
       'identifier' => 'missingType.iterableValue',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    2 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Method DevBridge\\AgentBoard\\Services\\AI\\AgentFactory::registerProfile() has parameter $profile with no value type specified in iterable type array.',
       'file' => 'D:\\setup\\sourcecode\\package\\laravel-agent-board\\src\\Services\\AI\\AgentFactory.php',
       'line' => 34,
       'canBeIgnored' => true,
       'filePath' => 'D:\\setup\\sourcecode\\package\\laravel-agent-board\\src\\Services\\AI\\AgentFactory.php',
       'traitFilePath' => NULL,
       'tip' => 'See: https://phpstan.org/blog/solving-phpstan-no-value-type-specified-in-iterable-type',
       'nodeLine' => 34,
       'nodeType' => 'PHPStan\\Node\\InClassMethodNode',
       'identifier' => 'missingType.iterableValue',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    3 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Method DevBridge\\AgentBoard\\Services\\AI\\AgentFactory::resolveProfile() return type has no value type specified in iterable type array.',
       'file' => 'D:\\setup\\sourcecode\\package\\laravel-agent-board\\src\\Services\\AI\\AgentFactory.php',
       'line' => 38,
       'canBeIgnored' => true,
       'filePath' => 'D:\\setup\\sourcecode\\package\\laravel-agent-board\\src\\Services\\AI\\AgentFactory.php',
       'traitFilePath' => NULL,
       'tip' => 'See: https://phpstan.org/blog/solving-phpstan-no-value-type-specified-in-iterable-type',
       'nodeLine' => 38,
       'nodeType' => 'PHPStan\\Node\\InClassMethodNode',
       'identifier' => 'missingType.iterableValue',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    4 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Method DevBridge\\AgentBoard\\Services\\AI\\AgentFactory::buildToolsForProfile() has parameter $toolNames with no value type specified in iterable type array.',
       'file' => 'D:\\setup\\sourcecode\\package\\laravel-agent-board\\src\\Services\\AI\\AgentFactory.php',
       'line' => 57,
       'canBeIgnored' => true,
       'filePath' => 'D:\\setup\\sourcecode\\package\\laravel-agent-board\\src\\Services\\AI\\AgentFactory.php',
       'traitFilePath' => NULL,
       'tip' => 'See: https://phpstan.org/blog/solving-phpstan-no-value-type-specified-in-iterable-type',
       'nodeLine' => 57,
       'nodeType' => 'PHPStan\\Node\\InClassMethodNode',
       'identifier' => 'missingType.iterableValue',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    5 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Method DevBridge\\AgentBoard\\Services\\AI\\AgentFactory::buildToolsForProfile() return type has no value type specified in iterable type array.',
       'file' => 'D:\\setup\\sourcecode\\package\\laravel-agent-board\\src\\Services\\AI\\AgentFactory.php',
       'line' => 57,
       'canBeIgnored' => true,
       'filePath' => 'D:\\setup\\sourcecode\\package\\laravel-agent-board\\src\\Services\\AI\\AgentFactory.php',
       'traitFilePath' => NULL,
       'tip' => 'See: https://phpstan.org/blog/solving-phpstan-no-value-type-specified-in-iterable-type',
       'nodeLine' => 57,
       'nodeType' => 'PHPStan\\Node\\InClassMethodNode',
       'identifier' => 'missingType.iterableValue',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    6 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Method DevBridge\\AgentBoard\\Services\\AI\\AgentFactory::buildSystemPromptForTask() has parameter $profile with no value type specified in iterable type array.',
       'file' => 'D:\\setup\\sourcecode\\package\\laravel-agent-board\\src\\Services\\AI\\AgentFactory.php',
       'line' => 75,
       'canBeIgnored' => true,
       'filePath' => 'D:\\setup\\sourcecode\\package\\laravel-agent-board\\src\\Services\\AI\\AgentFactory.php',
       'traitFilePath' => NULL,
       'tip' => 'See: https://phpstan.org/blog/solving-phpstan-no-value-type-specified-in-iterable-type',
       'nodeLine' => 75,
       'nodeType' => 'PHPStan\\Node\\InClassMethodNode',
       'identifier' => 'missingType.iterableValue',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
  ),
  'D:\\setup\\sourcecode\\package\\laravel-agent-board\\src\\Services\\AI\\AnthropicAgentService.php' => 
  array (
    0 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Property DevBridge\\AgentBoard\\Services\\AI\\AnthropicAgentService::$tools type has no value type specified in iterable type array.',
       'file' => 'D:\\setup\\sourcecode\\package\\laravel-agent-board\\src\\Services\\AI\\AnthropicAgentService.php',
       'line' => 19,
       'canBeIgnored' => true,
       'filePath' => 'D:\\setup\\sourcecode\\package\\laravel-agent-board\\src\\Services\\AI\\AnthropicAgentService.php',
       'traitFilePath' => NULL,
       'tip' => 'See: https://phpstan.org/blog/solving-phpstan-no-value-type-specified-in-iterable-type',
       'nodeLine' => 19,
       'nodeType' => 'PHPStan\\Node\\ClassPropertyNode',
       'identifier' => 'missingType.iterableValue',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    1 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Method DevBridge\\AgentBoard\\Services\\AI\\AnthropicAgentService::__construct() has parameter $config with no value type specified in iterable type array.',
       'file' => 'D:\\setup\\sourcecode\\package\\laravel-agent-board\\src\\Services\\AI\\AnthropicAgentService.php',
       'line' => 23,
       'canBeIgnored' => true,
       'filePath' => 'D:\\setup\\sourcecode\\package\\laravel-agent-board\\src\\Services\\AI\\AnthropicAgentService.php',
       'traitFilePath' => NULL,
       'tip' => 'See: https://phpstan.org/blog/solving-phpstan-no-value-type-specified-in-iterable-type',
       'nodeLine' => 23,
       'nodeType' => 'PHPStan\\Node\\InClassMethodNode',
       'identifier' => 'missingType.iterableValue',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    2 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Property DevBridge\\AgentBoard\\Services\\AI\\AnthropicAgentService::$config is never read, only written.',
       'file' => 'D:\\setup\\sourcecode\\package\\laravel-agent-board\\src\\Services\\AI\\AnthropicAgentService.php',
       'line' => 23,
       'canBeIgnored' => true,
       'filePath' => 'D:\\setup\\sourcecode\\package\\laravel-agent-board\\src\\Services\\AI\\AnthropicAgentService.php',
       'traitFilePath' => NULL,
       'tip' => 'See: https://phpstan.org/developing-extensions/always-read-written-properties',
       'nodeLine' => 14,
       'nodeType' => 'PHPStan\\Node\\ClassPropertiesNode',
       'identifier' => 'property.onlyWritten',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    3 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Method DevBridge\\AgentBoard\\Services\\AI\\AnthropicAgentService::processTask() has parameter $tools with no value type specified in iterable type array.',
       'file' => 'D:\\setup\\sourcecode\\package\\laravel-agent-board\\src\\Services\\AI\\AnthropicAgentService.php',
       'line' => 37,
       'canBeIgnored' => true,
       'filePath' => 'D:\\setup\\sourcecode\\package\\laravel-agent-board\\src\\Services\\AI\\AnthropicAgentService.php',
       'traitFilePath' => NULL,
       'tip' => 'See: https://phpstan.org/blog/solving-phpstan-no-value-type-specified-in-iterable-type',
       'nodeLine' => 37,
       'nodeType' => 'PHPStan\\Node\\InClassMethodNode',
       'identifier' => 'missingType.iterableValue',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    4 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Unable to resolve the template type TKey in call to function collect',
       'file' => 'D:\\setup\\sourcecode\\package\\laravel-agent-board\\src\\Services\\AI\\AnthropicAgentService.php',
       'line' => 63,
       'canBeIgnored' => true,
       'filePath' => 'D:\\setup\\sourcecode\\package\\laravel-agent-board\\src\\Services\\AI\\AnthropicAgentService.php',
       'traitFilePath' => NULL,
       'tip' => 'See: https://phpstan.org/blog/solving-phpstan-error-unable-to-resolve-template-type',
       'nodeLine' => 63,
       'nodeType' => 'PhpParser\\Node\\Expr\\FuncCall',
       'identifier' => 'argument.templateType',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    5 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Unable to resolve the template type TValue in call to function collect',
       'file' => 'D:\\setup\\sourcecode\\package\\laravel-agent-board\\src\\Services\\AI\\AnthropicAgentService.php',
       'line' => 63,
       'canBeIgnored' => true,
       'filePath' => 'D:\\setup\\sourcecode\\package\\laravel-agent-board\\src\\Services\\AI\\AnthropicAgentService.php',
       'traitFilePath' => NULL,
       'tip' => 'See: https://phpstan.org/blog/solving-phpstan-error-unable-to-resolve-template-type',
       'nodeLine' => 63,
       'nodeType' => 'PhpParser\\Node\\Expr\\FuncCall',
       'identifier' => 'argument.templateType',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    6 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Method DevBridge\\AgentBoard\\Services\\AI\\AnthropicAgentService::planTask() return type has no value type specified in iterable type array.',
       'file' => 'D:\\setup\\sourcecode\\package\\laravel-agent-board\\src\\Services\\AI\\AnthropicAgentService.php',
       'line' => 110,
       'canBeIgnored' => true,
       'filePath' => 'D:\\setup\\sourcecode\\package\\laravel-agent-board\\src\\Services\\AI\\AnthropicAgentService.php',
       'traitFilePath' => NULL,
       'tip' => 'See: https://phpstan.org/blog/solving-phpstan-no-value-type-specified-in-iterable-type',
       'nodeLine' => 110,
       'nodeType' => 'PHPStan\\Node\\InClassMethodNode',
       'identifier' => 'missingType.iterableValue',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    7 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Unable to resolve the template type TKey in call to function collect',
       'file' => 'D:\\setup\\sourcecode\\package\\laravel-agent-board\\src\\Services\\AI\\AnthropicAgentService.php',
       'line' => 125,
       'canBeIgnored' => true,
       'filePath' => 'D:\\setup\\sourcecode\\package\\laravel-agent-board\\src\\Services\\AI\\AnthropicAgentService.php',
       'traitFilePath' => NULL,
       'tip' => 'See: https://phpstan.org/blog/solving-phpstan-error-unable-to-resolve-template-type',
       'nodeLine' => 125,
       'nodeType' => 'PhpParser\\Node\\Expr\\FuncCall',
       'identifier' => 'argument.templateType',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    8 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Unable to resolve the template type TValue in call to function collect',
       'file' => 'D:\\setup\\sourcecode\\package\\laravel-agent-board\\src\\Services\\AI\\AnthropicAgentService.php',
       'line' => 125,
       'canBeIgnored' => true,
       'filePath' => 'D:\\setup\\sourcecode\\package\\laravel-agent-board\\src\\Services\\AI\\AnthropicAgentService.php',
       'traitFilePath' => NULL,
       'tip' => 'See: https://phpstan.org/blog/solving-phpstan-error-unable-to-resolve-template-type',
       'nodeLine' => 125,
       'nodeType' => 'PhpParser\\Node\\Expr\\FuncCall',
       'identifier' => 'argument.templateType',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    9 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Method DevBridge\\AgentBoard\\Services\\AI\\AnthropicAgentService::formatToolsForApi() has parameter $tools with no value type specified in iterable type array.',
       'file' => 'D:\\setup\\sourcecode\\package\\laravel-agent-board\\src\\Services\\AI\\AnthropicAgentService.php',
       'line' => 177,
       'canBeIgnored' => true,
       'filePath' => 'D:\\setup\\sourcecode\\package\\laravel-agent-board\\src\\Services\\AI\\AnthropicAgentService.php',
       'traitFilePath' => NULL,
       'tip' => 'See: https://phpstan.org/blog/solving-phpstan-no-value-type-specified-in-iterable-type',
       'nodeLine' => 177,
       'nodeType' => 'PHPStan\\Node\\InClassMethodNode',
       'identifier' => 'missingType.iterableValue',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    10 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Method DevBridge\\AgentBoard\\Services\\AI\\AnthropicAgentService::formatToolsForApi() return type has no value type specified in iterable type array.',
       'file' => 'D:\\setup\\sourcecode\\package\\laravel-agent-board\\src\\Services\\AI\\AnthropicAgentService.php',
       'line' => 177,
       'canBeIgnored' => true,
       'filePath' => 'D:\\setup\\sourcecode\\package\\laravel-agent-board\\src\\Services\\AI\\AnthropicAgentService.php',
       'traitFilePath' => NULL,
       'tip' => 'See: https://phpstan.org/blog/solving-phpstan-no-value-type-specified-in-iterable-type',
       'nodeLine' => 177,
       'nodeType' => 'PHPStan\\Node\\InClassMethodNode',
       'identifier' => 'missingType.iterableValue',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
  ),
  'D:\\setup\\sourcecode\\package\\laravel-agent-board\\src\\Services\\AI\\OpenAiAgentService.php' => 
  array (
    0 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Property DevBridge\\AgentBoard\\Services\\AI\\OpenAiAgentService::$tools type has no value type specified in iterable type array.',
       'file' => 'D:\\setup\\sourcecode\\package\\laravel-agent-board\\src\\Services\\AI\\OpenAiAgentService.php',
       'line' => 20,
       'canBeIgnored' => true,
       'filePath' => 'D:\\setup\\sourcecode\\package\\laravel-agent-board\\src\\Services\\AI\\OpenAiAgentService.php',
       'traitFilePath' => NULL,
       'tip' => 'See: https://phpstan.org/blog/solving-phpstan-no-value-type-specified-in-iterable-type',
       'nodeLine' => 20,
       'nodeType' => 'PHPStan\\Node\\ClassPropertyNode',
       'identifier' => 'missingType.iterableValue',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    1 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Method DevBridge\\AgentBoard\\Services\\AI\\OpenAiAgentService::__construct() has parameter $config with no value type specified in iterable type array.',
       'file' => 'D:\\setup\\sourcecode\\package\\laravel-agent-board\\src\\Services\\AI\\OpenAiAgentService.php',
       'line' => 24,
       'canBeIgnored' => true,
       'filePath' => 'D:\\setup\\sourcecode\\package\\laravel-agent-board\\src\\Services\\AI\\OpenAiAgentService.php',
       'traitFilePath' => NULL,
       'tip' => 'See: https://phpstan.org/blog/solving-phpstan-no-value-type-specified-in-iterable-type',
       'nodeLine' => 24,
       'nodeType' => 'PHPStan\\Node\\InClassMethodNode',
       'identifier' => 'missingType.iterableValue',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    2 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Property DevBridge\\AgentBoard\\Services\\AI\\OpenAiAgentService::$config is never read, only written.',
       'file' => 'D:\\setup\\sourcecode\\package\\laravel-agent-board\\src\\Services\\AI\\OpenAiAgentService.php',
       'line' => 24,
       'canBeIgnored' => true,
       'filePath' => 'D:\\setup\\sourcecode\\package\\laravel-agent-board\\src\\Services\\AI\\OpenAiAgentService.php',
       'traitFilePath' => NULL,
       'tip' => 'See: https://phpstan.org/developing-extensions/always-read-written-properties',
       'nodeLine' => 15,
       'nodeType' => 'PHPStan\\Node\\ClassPropertiesNode',
       'identifier' => 'property.onlyWritten',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    3 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Method DevBridge\\AgentBoard\\Services\\AI\\OpenAiAgentService::processTask() has parameter $tools with no value type specified in iterable type array.',
       'file' => 'D:\\setup\\sourcecode\\package\\laravel-agent-board\\src\\Services\\AI\\OpenAiAgentService.php',
       'line' => 30,
       'canBeIgnored' => true,
       'filePath' => 'D:\\setup\\sourcecode\\package\\laravel-agent-board\\src\\Services\\AI\\OpenAiAgentService.php',
       'traitFilePath' => NULL,
       'tip' => 'See: https://phpstan.org/blog/solving-phpstan-no-value-type-specified-in-iterable-type',
       'nodeLine' => 30,
       'nodeType' => 'PHPStan\\Node\\InClassMethodNode',
       'identifier' => 'missingType.iterableValue',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    4 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Method DevBridge\\AgentBoard\\Services\\AI\\OpenAiAgentService::planTask() return type has no value type specified in iterable type array.',
       'file' => 'D:\\setup\\sourcecode\\package\\laravel-agent-board\\src\\Services\\AI\\OpenAiAgentService.php',
       'line' => 83,
       'canBeIgnored' => true,
       'filePath' => 'D:\\setup\\sourcecode\\package\\laravel-agent-board\\src\\Services\\AI\\OpenAiAgentService.php',
       'traitFilePath' => NULL,
       'tip' => 'See: https://phpstan.org/blog/solving-phpstan-no-value-type-specified-in-iterable-type',
       'nodeLine' => 83,
       'nodeType' => 'PHPStan\\Node\\InClassMethodNode',
       'identifier' => 'missingType.iterableValue',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    5 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Method DevBridge\\AgentBoard\\Services\\AI\\OpenAiAgentService::buildTaskMessages() return type has no value type specified in iterable type array.',
       'file' => 'D:\\setup\\sourcecode\\package\\laravel-agent-board\\src\\Services\\AI\\OpenAiAgentService.php',
       'line' => 132,
       'canBeIgnored' => true,
       'filePath' => 'D:\\setup\\sourcecode\\package\\laravel-agent-board\\src\\Services\\AI\\OpenAiAgentService.php',
       'traitFilePath' => NULL,
       'tip' => 'See: https://phpstan.org/blog/solving-phpstan-no-value-type-specified-in-iterable-type',
       'nodeLine' => 132,
       'nodeType' => 'PHPStan\\Node\\InClassMethodNode',
       'identifier' => 'missingType.iterableValue',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    6 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Method DevBridge\\AgentBoard\\Services\\AI\\OpenAiAgentService::formatToolsForApi() has parameter $tools with no value type specified in iterable type array.',
       'file' => 'D:\\setup\\sourcecode\\package\\laravel-agent-board\\src\\Services\\AI\\OpenAiAgentService.php',
       'line' => 147,
       'canBeIgnored' => true,
       'filePath' => 'D:\\setup\\sourcecode\\package\\laravel-agent-board\\src\\Services\\AI\\OpenAiAgentService.php',
       'traitFilePath' => NULL,
       'tip' => 'See: https://phpstan.org/blog/solving-phpstan-no-value-type-specified-in-iterable-type',
       'nodeLine' => 147,
       'nodeType' => 'PHPStan\\Node\\InClassMethodNode',
       'identifier' => 'missingType.iterableValue',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    7 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Method DevBridge\\AgentBoard\\Services\\AI\\OpenAiAgentService::formatToolsForApi() return type has no value type specified in iterable type array.',
       'file' => 'D:\\setup\\sourcecode\\package\\laravel-agent-board\\src\\Services\\AI\\OpenAiAgentService.php',
       'line' => 147,
       'canBeIgnored' => true,
       'filePath' => 'D:\\setup\\sourcecode\\package\\laravel-agent-board\\src\\Services\\AI\\OpenAiAgentService.php',
       'traitFilePath' => NULL,
       'tip' => 'See: https://phpstan.org/blog/solving-phpstan-no-value-type-specified-in-iterable-type',
       'nodeLine' => 147,
       'nodeType' => 'PHPStan\\Node\\InClassMethodNode',
       'identifier' => 'missingType.iterableValue',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
  ),
  'D:\\setup\\sourcecode\\package\\laravel-agent-board\\src\\Services\\AI\\Tools\\AgentTools.php' => 
  array (
    0 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Method DevBridge\\AgentBoard\\Services\\AI\\Tools\\ReadFileTool::__construct() has parameter $config with no value type specified in iterable type array.',
       'file' => 'D:\\setup\\sourcecode\\package\\laravel-agent-board\\src\\Services\\AI\\Tools\\AgentTools.php',
       'line' => 12,
       'canBeIgnored' => true,
       'filePath' => 'D:\\setup\\sourcecode\\package\\laravel-agent-board\\src\\Services\\AI\\Tools\\AgentTools.php',
       'traitFilePath' => NULL,
       'tip' => 'See: https://phpstan.org/blog/solving-phpstan-no-value-type-specified-in-iterable-type',
       'nodeLine' => 12,
       'nodeType' => 'PHPStan\\Node\\InClassMethodNode',
       'identifier' => 'missingType.iterableValue',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    1 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Method DevBridge\\AgentBoard\\Services\\AI\\Tools\\WriteFileTool::__construct() has parameter $config with no value type specified in iterable type array.',
       'file' => 'D:\\setup\\sourcecode\\package\\laravel-agent-board\\src\\Services\\AI\\Tools\\AgentTools.php',
       'line' => 49,
       'canBeIgnored' => true,
       'filePath' => 'D:\\setup\\sourcecode\\package\\laravel-agent-board\\src\\Services\\AI\\Tools\\AgentTools.php',
       'traitFilePath' => NULL,
       'tip' => 'See: https://phpstan.org/blog/solving-phpstan-no-value-type-specified-in-iterable-type',
       'nodeLine' => 49,
       'nodeType' => 'PHPStan\\Node\\InClassMethodNode',
       'identifier' => 'missingType.iterableValue',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    2 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Method DevBridge\\AgentBoard\\Services\\AI\\Tools\\RunShellCommandTool::__construct() has parameter $config with no value type specified in iterable type array.',
       'file' => 'D:\\setup\\sourcecode\\package\\laravel-agent-board\\src\\Services\\AI\\Tools\\AgentTools.php',
       'line' => 88,
       'canBeIgnored' => true,
       'filePath' => 'D:\\setup\\sourcecode\\package\\laravel-agent-board\\src\\Services\\AI\\Tools\\AgentTools.php',
       'traitFilePath' => NULL,
       'tip' => 'See: https://phpstan.org/blog/solving-phpstan-no-value-type-specified-in-iterable-type',
       'nodeLine' => 88,
       'nodeType' => 'PHPStan\\Node\\InClassMethodNode',
       'identifier' => 'missingType.iterableValue',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    3 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Method DevBridge\\AgentBoard\\Services\\AI\\Tools\\SearchCodebaseTool::__construct() has parameter $config with no value type specified in iterable type array.',
       'file' => 'D:\\setup\\sourcecode\\package\\laravel-agent-board\\src\\Services\\AI\\Tools\\AgentTools.php',
       'line' => 132,
       'canBeIgnored' => true,
       'filePath' => 'D:\\setup\\sourcecode\\package\\laravel-agent-board\\src\\Services\\AI\\Tools\\AgentTools.php',
       'traitFilePath' => NULL,
       'tip' => 'See: https://phpstan.org/blog/solving-phpstan-no-value-type-specified-in-iterable-type',
       'nodeLine' => 132,
       'nodeType' => 'PHPStan\\Node\\InClassMethodNode',
       'identifier' => 'missingType.iterableValue',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
  ),
  'D:\\setup\\sourcecode\\package\\laravel-agent-board\\src\\Services\\Automation\\TaskAutomationService.php' => 
  array (
    0 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Method DevBridge\\AgentBoard\\Services\\Automation\\TaskAutomationService::__construct() has parameter $config with no value type specified in iterable type array.',
       'file' => 'D:\\setup\\sourcecode\\package\\laravel-agent-board\\src\\Services\\Automation\\TaskAutomationService.php',
       'line' => 26,
       'canBeIgnored' => true,
       'filePath' => 'D:\\setup\\sourcecode\\package\\laravel-agent-board\\src\\Services\\Automation\\TaskAutomationService.php',
       'traitFilePath' => NULL,
       'tip' => 'See: https://phpstan.org/blog/solving-phpstan-no-value-type-specified-in-iterable-type',
       'nodeLine' => 26,
       'nodeType' => 'PHPStan\\Node\\InClassMethodNode',
       'identifier' => 'missingType.iterableValue',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    1 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Method DevBridge\\AgentBoard\\Services\\Automation\\TaskAutomationService::runAutomationCycle() return type has no value type specified in iterable type array.',
       'file' => 'D:\\setup\\sourcecode\\package\\laravel-agent-board\\src\\Services\\Automation\\TaskAutomationService.php',
       'line' => 35,
       'canBeIgnored' => true,
       'filePath' => 'D:\\setup\\sourcecode\\package\\laravel-agent-board\\src\\Services\\Automation\\TaskAutomationService.php',
       'traitFilePath' => NULL,
       'tip' => 'See: https://phpstan.org/blog/solving-phpstan-no-value-type-specified-in-iterable-type',
       'nodeLine' => 35,
       'nodeType' => 'PHPStan\\Node\\InClassMethodNode',
       'identifier' => 'missingType.iterableValue',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    2 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Method DevBridge\\AgentBoard\\Services\\Automation\\TaskAutomationService::planTasks() has parameter $tasks with generic class Illuminate\\Support\\Collection but does not specify its types: TKey, TValue',
       'file' => 'D:\\setup\\sourcecode\\package\\laravel-agent-board\\src\\Services\\Automation\\TaskAutomationService.php',
       'line' => 107,
       'canBeIgnored' => true,
       'filePath' => 'D:\\setup\\sourcecode\\package\\laravel-agent-board\\src\\Services\\Automation\\TaskAutomationService.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 107,
       'nodeType' => 'PHPStan\\Node\\InClassMethodNode',
       'identifier' => 'missingType.generics',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    3 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Method DevBridge\\AgentBoard\\Services\\Automation\\TaskAutomationService::planTasks() return type with generic class Illuminate\\Support\\Collection does not specify its types: TKey, TValue',
       'file' => 'D:\\setup\\sourcecode\\package\\laravel-agent-board\\src\\Services\\Automation\\TaskAutomationService.php',
       'line' => 107,
       'canBeIgnored' => true,
       'filePath' => 'D:\\setup\\sourcecode\\package\\laravel-agent-board\\src\\Services\\Automation\\TaskAutomationService.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 107,
       'nodeType' => 'PHPStan\\Node\\InClassMethodNode',
       'identifier' => 'missingType.generics',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
  ),
  'D:\\setup\\sourcecode\\package\\laravel-agent-board\\src\\Services\\Confluence\\ConfluenceService.php' => 
  array (
    0 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Method DevBridge\\AgentBoard\\Services\\Confluence\\ConfluenceService::__construct() has parameter $config with no value type specified in iterable type array.',
       'file' => 'D:\\setup\\sourcecode\\package\\laravel-agent-board\\src\\Services\\Confluence\\ConfluenceService.php',
       'line' => 23,
       'canBeIgnored' => true,
       'filePath' => 'D:\\setup\\sourcecode\\package\\laravel-agent-board\\src\\Services\\Confluence\\ConfluenceService.php',
       'traitFilePath' => NULL,
       'tip' => 'See: https://phpstan.org/blog/solving-phpstan-no-value-type-specified-in-iterable-type',
       'nodeLine' => 23,
       'nodeType' => 'PHPStan\\Node\\InClassMethodNode',
       'identifier' => 'missingType.iterableValue',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    1 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Property DevBridge\\AgentBoard\\Services\\Confluence\\ConfluenceService::$config is never read, only written.',
       'file' => 'D:\\setup\\sourcecode\\package\\laravel-agent-board\\src\\Services\\Confluence\\ConfluenceService.php',
       'line' => 24,
       'canBeIgnored' => true,
       'filePath' => 'D:\\setup\\sourcecode\\package\\laravel-agent-board\\src\\Services\\Confluence\\ConfluenceService.php',
       'traitFilePath' => NULL,
       'tip' => 'See: https://phpstan.org/developing-extensions/always-read-written-properties',
       'nodeLine' => 18,
       'nodeType' => 'PHPStan\\Node\\ClassPropertiesNode',
       'identifier' => 'property.onlyWritten',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    2 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Unable to resolve the template type TKey in call to function collect',
       'file' => 'D:\\setup\\sourcecode\\package\\laravel-agent-board\\src\\Services\\Confluence\\ConfluenceService.php',
       'line' => 64,
       'canBeIgnored' => true,
       'filePath' => 'D:\\setup\\sourcecode\\package\\laravel-agent-board\\src\\Services\\Confluence\\ConfluenceService.php',
       'traitFilePath' => NULL,
       'tip' => 'See: https://phpstan.org/blog/solving-phpstan-error-unable-to-resolve-template-type',
       'nodeLine' => 64,
       'nodeType' => 'PhpParser\\Node\\Expr\\FuncCall',
       'identifier' => 'argument.templateType',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    3 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Unable to resolve the template type TValue in call to function collect',
       'file' => 'D:\\setup\\sourcecode\\package\\laravel-agent-board\\src\\Services\\Confluence\\ConfluenceService.php',
       'line' => 64,
       'canBeIgnored' => true,
       'filePath' => 'D:\\setup\\sourcecode\\package\\laravel-agent-board\\src\\Services\\Confluence\\ConfluenceService.php',
       'traitFilePath' => NULL,
       'tip' => 'See: https://phpstan.org/blog/solving-phpstan-error-unable-to-resolve-template-type',
       'nodeLine' => 64,
       'nodeType' => 'PhpParser\\Node\\Expr\\FuncCall',
       'identifier' => 'argument.templateType',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    4 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Unable to resolve the template type TKey in call to function collect',
       'file' => 'D:\\setup\\sourcecode\\package\\laravel-agent-board\\src\\Services\\Confluence\\ConfluenceService.php',
       'line' => 89,
       'canBeIgnored' => true,
       'filePath' => 'D:\\setup\\sourcecode\\package\\laravel-agent-board\\src\\Services\\Confluence\\ConfluenceService.php',
       'traitFilePath' => NULL,
       'tip' => 'See: https://phpstan.org/blog/solving-phpstan-error-unable-to-resolve-template-type',
       'nodeLine' => 89,
       'nodeType' => 'PhpParser\\Node\\Expr\\FuncCall',
       'identifier' => 'argument.templateType',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    5 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Unable to resolve the template type TValue in call to function collect',
       'file' => 'D:\\setup\\sourcecode\\package\\laravel-agent-board\\src\\Services\\Confluence\\ConfluenceService.php',
       'line' => 89,
       'canBeIgnored' => true,
       'filePath' => 'D:\\setup\\sourcecode\\package\\laravel-agent-board\\src\\Services\\Confluence\\ConfluenceService.php',
       'traitFilePath' => NULL,
       'tip' => 'See: https://phpstan.org/blog/solving-phpstan-error-unable-to-resolve-template-type',
       'nodeLine' => 89,
       'nodeType' => 'PhpParser\\Node\\Expr\\FuncCall',
       'identifier' => 'argument.templateType',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    6 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Method DevBridge\\AgentBoard\\Services\\Confluence\\ConfluenceService::getKanbanBoard() return type has no value type specified in iterable type array.',
       'file' => 'D:\\setup\\sourcecode\\package\\laravel-agent-board\\src\\Services\\Confluence\\ConfluenceService.php',
       'line' => 135,
       'canBeIgnored' => true,
       'filePath' => 'D:\\setup\\sourcecode\\package\\laravel-agent-board\\src\\Services\\Confluence\\ConfluenceService.php',
       'traitFilePath' => NULL,
       'tip' => 'See: https://phpstan.org/blog/solving-phpstan-no-value-type-specified-in-iterable-type',
       'nodeLine' => 135,
       'nodeType' => 'PHPStan\\Node\\InClassMethodNode',
       'identifier' => 'missingType.iterableValue',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    7 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Unable to resolve the template type TKey in call to function collect',
       'file' => 'D:\\setup\\sourcecode\\package\\laravel-agent-board\\src\\Services\\Confluence\\ConfluenceService.php',
       'line' => 146,
       'canBeIgnored' => true,
       'filePath' => 'D:\\setup\\sourcecode\\package\\laravel-agent-board\\src\\Services\\Confluence\\ConfluenceService.php',
       'traitFilePath' => NULL,
       'tip' => 'See: https://phpstan.org/blog/solving-phpstan-error-unable-to-resolve-template-type',
       'nodeLine' => 146,
       'nodeType' => 'PhpParser\\Node\\Expr\\FuncCall',
       'identifier' => 'argument.templateType',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    8 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Unable to resolve the template type TValue in call to function collect',
       'file' => 'D:\\setup\\sourcecode\\package\\laravel-agent-board\\src\\Services\\Confluence\\ConfluenceService.php',
       'line' => 146,
       'canBeIgnored' => true,
       'filePath' => 'D:\\setup\\sourcecode\\package\\laravel-agent-board\\src\\Services\\Confluence\\ConfluenceService.php',
       'traitFilePath' => NULL,
       'tip' => 'See: https://phpstan.org/blog/solving-phpstan-error-unable-to-resolve-template-type',
       'nodeLine' => 146,
       'nodeType' => 'PhpParser\\Node\\Expr\\FuncCall',
       'identifier' => 'argument.templateType',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    9 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Method DevBridge\\AgentBoard\\Services\\Confluence\\ConfluenceService::pageToTask() has parameter $page with no value type specified in iterable type array.',
       'file' => 'D:\\setup\\sourcecode\\package\\laravel-agent-board\\src\\Services\\Confluence\\ConfluenceService.php',
       'line' => 165,
       'canBeIgnored' => true,
       'filePath' => 'D:\\setup\\sourcecode\\package\\laravel-agent-board\\src\\Services\\Confluence\\ConfluenceService.php',
       'traitFilePath' => NULL,
       'tip' => 'See: https://phpstan.org/blog/solving-phpstan-no-value-type-specified-in-iterable-type',
       'nodeLine' => 165,
       'nodeType' => 'PHPStan\\Node\\InClassMethodNode',
       'identifier' => 'missingType.iterableValue',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    10 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Unable to resolve the template type TKey in call to function collect',
       'file' => 'D:\\setup\\sourcecode\\package\\laravel-agent-board\\src\\Services\\Confluence\\ConfluenceService.php',
       'line' => 166,
       'canBeIgnored' => true,
       'filePath' => 'D:\\setup\\sourcecode\\package\\laravel-agent-board\\src\\Services\\Confluence\\ConfluenceService.php',
       'traitFilePath' => NULL,
       'tip' => 'See: https://phpstan.org/blog/solving-phpstan-error-unable-to-resolve-template-type',
       'nodeLine' => 166,
       'nodeType' => 'PhpParser\\Node\\Expr\\FuncCall',
       'identifier' => 'argument.templateType',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    11 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Unable to resolve the template type TValue in call to function collect',
       'file' => 'D:\\setup\\sourcecode\\package\\laravel-agent-board\\src\\Services\\Confluence\\ConfluenceService.php',
       'line' => 166,
       'canBeIgnored' => true,
       'filePath' => 'D:\\setup\\sourcecode\\package\\laravel-agent-board\\src\\Services\\Confluence\\ConfluenceService.php',
       'traitFilePath' => NULL,
       'tip' => 'See: https://phpstan.org/blog/solving-phpstan-error-unable-to-resolve-template-type',
       'nodeLine' => 166,
       'nodeType' => 'PhpParser\\Node\\Expr\\FuncCall',
       'identifier' => 'argument.templateType',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    12 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Method DevBridge\\AgentBoard\\Services\\Confluence\\ConfluenceService::detectStatusFromLabels() has parameter $labels with no value type specified in iterable type array.',
       'file' => 'D:\\setup\\sourcecode\\package\\laravel-agent-board\\src\\Services\\Confluence\\ConfluenceService.php',
       'line' => 185,
       'canBeIgnored' => true,
       'filePath' => 'D:\\setup\\sourcecode\\package\\laravel-agent-board\\src\\Services\\Confluence\\ConfluenceService.php',
       'traitFilePath' => NULL,
       'tip' => 'See: https://phpstan.org/blog/solving-phpstan-no-value-type-specified-in-iterable-type',
       'nodeLine' => 185,
       'nodeType' => 'PHPStan\\Node\\InClassMethodNode',
       'identifier' => 'missingType.iterableValue',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    13 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Method DevBridge\\AgentBoard\\Services\\Confluence\\ConfluenceService::groupTasksIntoColumns() has parameter $tasks with generic class Illuminate\\Support\\Collection but does not specify its types: TKey, TValue',
       'file' => 'D:\\setup\\sourcecode\\package\\laravel-agent-board\\src\\Services\\Confluence\\ConfluenceService.php',
       'line' => 196,
       'canBeIgnored' => true,
       'filePath' => 'D:\\setup\\sourcecode\\package\\laravel-agent-board\\src\\Services\\Confluence\\ConfluenceService.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 196,
       'nodeType' => 'PHPStan\\Node\\InClassMethodNode',
       'identifier' => 'missingType.generics',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    14 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Method DevBridge\\AgentBoard\\Services\\Confluence\\ConfluenceService::groupTasksIntoColumns() return type has no value type specified in iterable type array.',
       'file' => 'D:\\setup\\sourcecode\\package\\laravel-agent-board\\src\\Services\\Confluence\\ConfluenceService.php',
       'line' => 196,
       'canBeIgnored' => true,
       'filePath' => 'D:\\setup\\sourcecode\\package\\laravel-agent-board\\src\\Services\\Confluence\\ConfluenceService.php',
       'traitFilePath' => NULL,
       'tip' => 'See: https://phpstan.org/blog/solving-phpstan-no-value-type-specified-in-iterable-type',
       'nodeLine' => 196,
       'nodeType' => 'PHPStan\\Node\\InClassMethodNode',
       'identifier' => 'missingType.iterableValue',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
  ),
  'D:\\setup\\sourcecode\\package\\laravel-agent-board\\src\\Services\\Jira\\JiraService.php' => 
  array (
    0 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Method DevBridge\\AgentBoard\\Services\\Jira\\JiraService::__construct() has parameter $config with no value type specified in iterable type array.',
       'file' => 'D:\\setup\\sourcecode\\package\\laravel-agent-board\\src\\Services\\Jira\\JiraService.php',
       'line' => 23,
       'canBeIgnored' => true,
       'filePath' => 'D:\\setup\\sourcecode\\package\\laravel-agent-board\\src\\Services\\Jira\\JiraService.php',
       'traitFilePath' => NULL,
       'tip' => 'See: https://phpstan.org/blog/solving-phpstan-no-value-type-specified-in-iterable-type',
       'nodeLine' => 23,
       'nodeType' => 'PHPStan\\Node\\InClassMethodNode',
       'identifier' => 'missingType.iterableValue',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    1 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Property DevBridge\\AgentBoard\\Services\\Jira\\JiraService::$config is never read, only written.',
       'file' => 'D:\\setup\\sourcecode\\package\\laravel-agent-board\\src\\Services\\Jira\\JiraService.php',
       'line' => 24,
       'canBeIgnored' => true,
       'filePath' => 'D:\\setup\\sourcecode\\package\\laravel-agent-board\\src\\Services\\Jira\\JiraService.php',
       'traitFilePath' => NULL,
       'tip' => 'See: https://phpstan.org/developing-extensions/always-read-written-properties',
       'nodeLine' => 18,
       'nodeType' => 'PHPStan\\Node\\ClassPropertiesNode',
       'identifier' => 'property.onlyWritten',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    2 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Unable to resolve the template type TKey in call to function collect',
       'file' => 'D:\\setup\\sourcecode\\package\\laravel-agent-board\\src\\Services\\Jira\\JiraService.php',
       'line' => 64,
       'canBeIgnored' => true,
       'filePath' => 'D:\\setup\\sourcecode\\package\\laravel-agent-board\\src\\Services\\Jira\\JiraService.php',
       'traitFilePath' => NULL,
       'tip' => 'See: https://phpstan.org/blog/solving-phpstan-error-unable-to-resolve-template-type',
       'nodeLine' => 64,
       'nodeType' => 'PhpParser\\Node\\Expr\\FuncCall',
       'identifier' => 'argument.templateType',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    3 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Unable to resolve the template type TValue in call to function collect',
       'file' => 'D:\\setup\\sourcecode\\package\\laravel-agent-board\\src\\Services\\Jira\\JiraService.php',
       'line' => 64,
       'canBeIgnored' => true,
       'filePath' => 'D:\\setup\\sourcecode\\package\\laravel-agent-board\\src\\Services\\Jira\\JiraService.php',
       'traitFilePath' => NULL,
       'tip' => 'See: https://phpstan.org/blog/solving-phpstan-error-unable-to-resolve-template-type',
       'nodeLine' => 64,
       'nodeType' => 'PhpParser\\Node\\Expr\\FuncCall',
       'identifier' => 'argument.templateType',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    4 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Unable to resolve the template type TKey in call to function collect',
       'file' => 'D:\\setup\\sourcecode\\package\\laravel-agent-board\\src\\Services\\Jira\\JiraService.php',
       'line' => 86,
       'canBeIgnored' => true,
       'filePath' => 'D:\\setup\\sourcecode\\package\\laravel-agent-board\\src\\Services\\Jira\\JiraService.php',
       'traitFilePath' => NULL,
       'tip' => 'See: https://phpstan.org/blog/solving-phpstan-error-unable-to-resolve-template-type',
       'nodeLine' => 86,
       'nodeType' => 'PhpParser\\Node\\Expr\\FuncCall',
       'identifier' => 'argument.templateType',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    5 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Unable to resolve the template type TValue in call to function collect',
       'file' => 'D:\\setup\\sourcecode\\package\\laravel-agent-board\\src\\Services\\Jira\\JiraService.php',
       'line' => 86,
       'canBeIgnored' => true,
       'filePath' => 'D:\\setup\\sourcecode\\package\\laravel-agent-board\\src\\Services\\Jira\\JiraService.php',
       'traitFilePath' => NULL,
       'tip' => 'See: https://phpstan.org/blog/solving-phpstan-error-unable-to-resolve-template-type',
       'nodeLine' => 86,
       'nodeType' => 'PhpParser\\Node\\Expr\\FuncCall',
       'identifier' => 'argument.templateType',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    6 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Method DevBridge\\AgentBoard\\Services\\Jira\\JiraService::getKanbanBoard() return type has no value type specified in iterable type array.',
       'file' => 'D:\\setup\\sourcecode\\package\\laravel-agent-board\\src\\Services\\Jira\\JiraService.php',
       'line' => 136,
       'canBeIgnored' => true,
       'filePath' => 'D:\\setup\\sourcecode\\package\\laravel-agent-board\\src\\Services\\Jira\\JiraService.php',
       'traitFilePath' => NULL,
       'tip' => 'See: https://phpstan.org/blog/solving-phpstan-no-value-type-specified-in-iterable-type',
       'nodeLine' => 136,
       'nodeType' => 'PHPStan\\Node\\InClassMethodNode',
       'identifier' => 'missingType.iterableValue',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    7 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Unable to resolve the template type TKey in call to function collect',
       'file' => 'D:\\setup\\sourcecode\\package\\laravel-agent-board\\src\\Services\\Jira\\JiraService.php',
       'line' => 152,
       'canBeIgnored' => true,
       'filePath' => 'D:\\setup\\sourcecode\\package\\laravel-agent-board\\src\\Services\\Jira\\JiraService.php',
       'traitFilePath' => NULL,
       'tip' => 'See: https://phpstan.org/blog/solving-phpstan-error-unable-to-resolve-template-type',
       'nodeLine' => 152,
       'nodeType' => 'PhpParser\\Node\\Expr\\FuncCall',
       'identifier' => 'argument.templateType',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    8 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Unable to resolve the template type TValue in call to function collect',
       'file' => 'D:\\setup\\sourcecode\\package\\laravel-agent-board\\src\\Services\\Jira\\JiraService.php',
       'line' => 152,
       'canBeIgnored' => true,
       'filePath' => 'D:\\setup\\sourcecode\\package\\laravel-agent-board\\src\\Services\\Jira\\JiraService.php',
       'traitFilePath' => NULL,
       'tip' => 'See: https://phpstan.org/blog/solving-phpstan-error-unable-to-resolve-template-type',
       'nodeLine' => 152,
       'nodeType' => 'PhpParser\\Node\\Expr\\FuncCall',
       'identifier' => 'argument.templateType',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    9 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Method DevBridge\\AgentBoard\\Services\\Jira\\JiraService::getBoardColumns() return type has no value type specified in iterable type array.',
       'file' => 'D:\\setup\\sourcecode\\package\\laravel-agent-board\\src\\Services\\Jira\\JiraService.php',
       'line' => 172,
       'canBeIgnored' => true,
       'filePath' => 'D:\\setup\\sourcecode\\package\\laravel-agent-board\\src\\Services\\Jira\\JiraService.php',
       'traitFilePath' => NULL,
       'tip' => 'See: https://phpstan.org/blog/solving-phpstan-no-value-type-specified-in-iterable-type',
       'nodeLine' => 172,
       'nodeType' => 'PHPStan\\Node\\InClassMethodNode',
       'identifier' => 'missingType.iterableValue',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    10 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Method DevBridge\\AgentBoard\\Services\\Jira\\JiraService::getBoards() return type has no value type specified in iterable type array.',
       'file' => 'D:\\setup\\sourcecode\\package\\laravel-agent-board\\src\\Services\\Jira\\JiraService.php',
       'line' => 190,
       'canBeIgnored' => true,
       'filePath' => 'D:\\setup\\sourcecode\\package\\laravel-agent-board\\src\\Services\\Jira\\JiraService.php',
       'traitFilePath' => NULL,
       'tip' => 'See: https://phpstan.org/blog/solving-phpstan-no-value-type-specified-in-iterable-type',
       'nodeLine' => 190,
       'nodeType' => 'PHPStan\\Node\\InClassMethodNode',
       'identifier' => 'missingType.iterableValue',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    11 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Unable to resolve the template type TKey in call to function collect',
       'file' => 'D:\\setup\\sourcecode\\package\\laravel-agent-board\\src\\Services\\Jira\\JiraService.php',
       'line' => 212,
       'canBeIgnored' => true,
       'filePath' => 'D:\\setup\\sourcecode\\package\\laravel-agent-board\\src\\Services\\Jira\\JiraService.php',
       'traitFilePath' => NULL,
       'tip' => 'See: https://phpstan.org/blog/solving-phpstan-error-unable-to-resolve-template-type',
       'nodeLine' => 212,
       'nodeType' => 'PhpParser\\Node\\Expr\\FuncCall',
       'identifier' => 'argument.templateType',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    12 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Unable to resolve the template type TValue in call to function collect',
       'file' => 'D:\\setup\\sourcecode\\package\\laravel-agent-board\\src\\Services\\Jira\\JiraService.php',
       'line' => 212,
       'canBeIgnored' => true,
       'filePath' => 'D:\\setup\\sourcecode\\package\\laravel-agent-board\\src\\Services\\Jira\\JiraService.php',
       'traitFilePath' => NULL,
       'tip' => 'See: https://phpstan.org/blog/solving-phpstan-error-unable-to-resolve-template-type',
       'nodeLine' => 212,
       'nodeType' => 'PhpParser\\Node\\Expr\\FuncCall',
       'identifier' => 'argument.templateType',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    13 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Method DevBridge\\AgentBoard\\Services\\Jira\\JiraService::groupTasksIntoColumns() has parameter $tasks with generic class Illuminate\\Support\\Collection but does not specify its types: TKey, TValue',
       'file' => 'D:\\setup\\sourcecode\\package\\laravel-agent-board\\src\\Services\\Jira\\JiraService.php',
       'line' => 221,
       'canBeIgnored' => true,
       'filePath' => 'D:\\setup\\sourcecode\\package\\laravel-agent-board\\src\\Services\\Jira\\JiraService.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 221,
       'nodeType' => 'PHPStan\\Node\\InClassMethodNode',
       'identifier' => 'missingType.generics',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    14 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Method DevBridge\\AgentBoard\\Services\\Jira\\JiraService::groupTasksIntoColumns() return type has no value type specified in iterable type array.',
       'file' => 'D:\\setup\\sourcecode\\package\\laravel-agent-board\\src\\Services\\Jira\\JiraService.php',
       'line' => 221,
       'canBeIgnored' => true,
       'filePath' => 'D:\\setup\\sourcecode\\package\\laravel-agent-board\\src\\Services\\Jira\\JiraService.php',
       'traitFilePath' => NULL,
       'tip' => 'See: https://phpstan.org/blog/solving-phpstan-no-value-type-specified-in-iterable-type',
       'nodeLine' => 221,
       'nodeType' => 'PHPStan\\Node\\InClassMethodNode',
       'identifier' => 'missingType.iterableValue',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
  ),
  'D:\\setup\\sourcecode\\package\\laravel-agent-board\\src\\Webhooks\\WebhookController.php' => 
  array (
    0 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Unable to resolve the template type TKey in call to function collect',
       'file' => 'D:\\setup\\sourcecode\\package\\laravel-agent-board\\src\\Webhooks\\WebhookController.php',
       'line' => 59,
       'canBeIgnored' => true,
       'filePath' => 'D:\\setup\\sourcecode\\package\\laravel-agent-board\\src\\Webhooks\\WebhookController.php',
       'traitFilePath' => NULL,
       'tip' => 'See: https://phpstan.org/blog/solving-phpstan-error-unable-to-resolve-template-type',
       'nodeLine' => 59,
       'nodeType' => 'PhpParser\\Node\\Expr\\FuncCall',
       'identifier' => 'argument.templateType',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    1 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Unable to resolve the template type TValue in call to function collect',
       'file' => 'D:\\setup\\sourcecode\\package\\laravel-agent-board\\src\\Webhooks\\WebhookController.php',
       'line' => 59,
       'canBeIgnored' => true,
       'filePath' => 'D:\\setup\\sourcecode\\package\\laravel-agent-board\\src\\Webhooks\\WebhookController.php',
       'traitFilePath' => NULL,
       'tip' => 'See: https://phpstan.org/blog/solving-phpstan-error-unable-to-resolve-template-type',
       'nodeLine' => 59,
       'nodeType' => 'PhpParser\\Node\\Expr\\FuncCall',
       'identifier' => 'argument.templateType',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    2 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Unable to resolve the template type TKey in call to function collect',
       'file' => 'D:\\setup\\sourcecode\\package\\laravel-agent-board\\src\\Webhooks\\WebhookController.php',
       'line' => 73,
       'canBeIgnored' => true,
       'filePath' => 'D:\\setup\\sourcecode\\package\\laravel-agent-board\\src\\Webhooks\\WebhookController.php',
       'traitFilePath' => NULL,
       'tip' => 'See: https://phpstan.org/blog/solving-phpstan-error-unable-to-resolve-template-type',
       'nodeLine' => 73,
       'nodeType' => 'PhpParser\\Node\\Expr\\FuncCall',
       'identifier' => 'argument.templateType',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    3 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Unable to resolve the template type TValue in call to function collect',
       'file' => 'D:\\setup\\sourcecode\\package\\laravel-agent-board\\src\\Webhooks\\WebhookController.php',
       'line' => 73,
       'canBeIgnored' => true,
       'filePath' => 'D:\\setup\\sourcecode\\package\\laravel-agent-board\\src\\Webhooks\\WebhookController.php',
       'traitFilePath' => NULL,
       'tip' => 'See: https://phpstan.org/blog/solving-phpstan-error-unable-to-resolve-template-type',
       'nodeLine' => 73,
       'nodeType' => 'PhpParser\\Node\\Expr\\FuncCall',
       'identifier' => 'argument.templateType',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    4 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Method DevBridge\\AgentBoard\\Webhooks\\WebhookController::dispatchAgentForJiraIssue() has parameter $issue with no value type specified in iterable type array.',
       'file' => 'D:\\setup\\sourcecode\\package\\laravel-agent-board\\src\\Webhooks\\WebhookController.php',
       'line' => 79,
       'canBeIgnored' => true,
       'filePath' => 'D:\\setup\\sourcecode\\package\\laravel-agent-board\\src\\Webhooks\\WebhookController.php',
       'traitFilePath' => NULL,
       'tip' => 'See: https://phpstan.org/blog/solving-phpstan-no-value-type-specified-in-iterable-type',
       'nodeLine' => 79,
       'nodeType' => 'PHPStan\\Node\\InClassMethodNode',
       'identifier' => 'missingType.iterableValue',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
  ),
); },
	'locallyIgnoredErrorsCallback' => static function (): array { return array (
); },
	'linesToIgnore' => array (
),
	'unmatchedLineIgnores' => array (
),
	'collectedDataCallback' => static function (): array { return array (
  'D:\\setup\\sourcecode\\package\\laravel-agent-board\\src\\Console\\Commands\\RunAutomationCommand.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\PossiblyPureStaticCallCollector' => 
    array (
      0 => 
      array (
        0 => 'Illuminate\\Console\\Command',
        1 => '__construct',
        2 => 25,
      ),
      1 => 
      array (
        0 => 'DevBridge\\AgentBoard\\Jobs\\ProcessTaskWithAgentJob',
        1 => 'dispatch',
        2 => 100,
      ),
    ),
  ),
  'D:\\setup\\sourcecode\\package\\laravel-agent-board\\src\\DTOs\\AgentResultDTO.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\ConstructorWithoutImpurePointsCollector' => 
    array (
      0 => 'DevBridge\\AgentBoard\\DTOs\\AgentResultDTO',
    ),
  ),
  'D:\\setup\\sourcecode\\package\\laravel-agent-board\\src\\DTOs\\ProjectDTO.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\ConstructorWithoutImpurePointsCollector' => 
    array (
      0 => 'DevBridge\\AgentBoard\\DTOs\\ProjectDTO',
    ),
    'PHPStan\\Rules\\DeadCode\\MethodWithoutImpurePointsCollector' => 
    array (
      0 => 
      array (
        0 => 'DevBridge\\AgentBoard\\DTOs\\ProjectDTO',
        1 => 'toArray',
        2 => 'DevBridge\\AgentBoard\\DTOs\\ProjectDTO',
      ),
    ),
  ),
  'D:\\setup\\sourcecode\\package\\laravel-agent-board\\src\\DTOs\\TaskDTO.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\ConstructorWithoutImpurePointsCollector' => 
    array (
      0 => 'DevBridge\\AgentBoard\\DTOs\\TaskDTO',
    ),
  ),
  'D:\\setup\\sourcecode\\package\\laravel-agent-board\\src\\Enums\\TaskStatus.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\MethodWithoutImpurePointsCollector' => 
    array (
      0 => 
      array (
        0 => 'DevBridge\\AgentBoard\\Enums\\TaskStatus',
        1 => 'label',
        2 => 'DevBridge\\AgentBoard\\Enums\\TaskStatus',
      ),
      1 => 
      array (
        0 => 'DevBridge\\AgentBoard\\Enums\\TaskStatus',
        1 => 'color',
        2 => 'DevBridge\\AgentBoard\\Enums\\TaskStatus',
      ),
    ),
  ),
  'D:\\setup\\sourcecode\\package\\laravel-agent-board\\src\\Events\\TaskAgentAssigned.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\ConstructorWithoutImpurePointsCollector' => 
    array (
      0 => 'DevBridge\\AgentBoard\\Events\\TaskAgentAssigned',
    ),
  ),
  'D:\\setup\\sourcecode\\package\\laravel-agent-board\\src\\Events\\TaskAutomationCompleted.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\ConstructorWithoutImpurePointsCollector' => 
    array (
      0 => 'DevBridge\\AgentBoard\\Events\\TaskAutomationCompleted',
    ),
  ),
  'D:\\setup\\sourcecode\\package\\laravel-agent-board\\src\\Events\\TaskAutomationFailed.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\ConstructorWithoutImpurePointsCollector' => 
    array (
      0 => 'DevBridge\\AgentBoard\\Events\\TaskAutomationFailed',
    ),
  ),
  'D:\\setup\\sourcecode\\package\\laravel-agent-board\\src\\Facades\\AgentBoard.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\MethodWithoutImpurePointsCollector' => 
    array (
      0 => 
      array (
        0 => 'DevBridge\\AgentBoard\\Facades\\AgentBoard',
        1 => 'getFacadeAccessor',
        2 => 'DevBridge\\AgentBoard\\Facades\\AgentBoard',
      ),
    ),
  ),
  'D:\\setup\\sourcecode\\package\\laravel-agent-board\\src\\Http\\Controllers\\AutomationController.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\ConstructorWithoutImpurePointsCollector' => 
    array (
      0 => 'DevBridge\\AgentBoard\\Http\\Controllers\\AutomationController',
    ),
    'PHPStan\\Rules\\DeadCode\\PossiblyPureStaticCallCollector' => 
    array (
      0 => 
      array (
        0 => 'DevBridge\\AgentBoard\\Jobs\\ProcessTaskWithAgentJob',
        1 => 'dispatch',
        2 => 31,
      ),
      1 => 
      array (
        0 => 'DevBridge\\AgentBoard\\Jobs\\ProcessTaskWithAgentJob',
        1 => 'dispatch',
        2 => 56,
      ),
    ),
  ),
  'D:\\setup\\sourcecode\\package\\laravel-agent-board\\src\\Http\\Controllers\\DashboardController.php' => 
  array (
    'Larastan\\Larastan\\Collectors\\UsedViewFunctionCollector' => 
    array (
      0 => 'agent-board::pages.dashboard',
    ),
  ),
  'D:\\setup\\sourcecode\\package\\laravel-agent-board\\src\\Http\\Controllers\\MonitoringController.php' => 
  array (
    'Larastan\\Larastan\\Collectors\\UsedViewFunctionCollector' => 
    array (
      0 => 'agent-board::pages.monitoring',
    ),
    'PHPStan\\Rules\\DeadCode\\ConstructorWithoutImpurePointsCollector' => 
    array (
      0 => 'DevBridge\\AgentBoard\\Http\\Controllers\\MonitoringController',
    ),
  ),
  'D:\\setup\\sourcecode\\package\\laravel-agent-board\\src\\Http\\Controllers\\SettingsController.php' => 
  array (
    'Larastan\\Larastan\\Collectors\\UsedViewFunctionCollector' => 
    array (
      0 => 'agent-board::pages.settings',
    ),
    'PHPStan\\Rules\\DeadCode\\ConstructorWithoutImpurePointsCollector' => 
    array (
      0 => 'DevBridge\\AgentBoard\\Http\\Controllers\\SettingsController',
    ),
    'PHPStan\\Rules\\DeadCode\\PossiblyPureFuncCallCollector' => 
    array (
      0 => 
      array (
        0 => 'data_set',
        1 => 74,
      ),
      1 => 
      array (
        0 => 'data_set',
        1 => 75,
      ),
      2 => 
      array (
        0 => 'data_set',
        1 => 76,
      ),
      3 => 
      array (
        0 => 'data_set',
        1 => 77,
      ),
    ),
  ),
  'D:\\setup\\sourcecode\\package\\laravel-agent-board\\src\\Jobs\\ProcessTaskWithAgentJob.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\MethodWithoutImpurePointsCollector' => 
    array (
      0 => 
      array (
        0 => 'DevBridge\\AgentBoard\\Jobs\\ProcessTaskWithAgentJob',
        1 => 'backoff',
        2 => 'DevBridge\\AgentBoard\\Jobs\\ProcessTaskWithAgentJob',
      ),
    ),
    'PHPStan\\Rules\\Traits\\TraitUseCollector' => 
    array (
      0 => 
      array (
        0 => 'Illuminate\\Foundation\\Bus\\Dispatchable',
        1 => 'Illuminate\\Queue\\InteractsWithQueue',
        2 => 'Illuminate\\Bus\\Queueable',
        3 => 'Illuminate\\Queue\\SerializesModels',
      ),
    ),
  ),
  'D:\\setup\\sourcecode\\package\\laravel-agent-board\\src\\Resilience\\CircuitBreaker.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\MethodWithoutImpurePointsCollector' => 
    array (
      0 => 
      array (
        0 => 'DevBridge\\AgentBoard\\Resilience\\CircuitBreaker',
        1 => 'failureKey',
        2 => 'DevBridge\\AgentBoard\\Resilience\\CircuitBreaker',
      ),
      1 => 
      array (
        0 => 'DevBridge\\AgentBoard\\Resilience\\CircuitBreaker',
        1 => 'resetKey',
        2 => 'DevBridge\\AgentBoard\\Resilience\\CircuitBreaker',
      ),
    ),
    'PHPStan\\Rules\\DeadCode\\PossiblyPureStaticCallCollector' => 
    array (
      0 => 
      array (
        0 => 'Illuminate\\Cache\\Repository',
        1 => 'put',
        2 => 28,
      ),
      1 => 
      array (
        0 => 'Illuminate\\Cache\\Repository',
        1 => 'forget',
        2 => 35,
      ),
      2 => 
      array (
        0 => 'Illuminate\\Cache\\Repository',
        1 => 'forget',
        2 => 36,
      ),
      3 => 
      array (
        0 => 'Illuminate\\Cache\\Repository',
        1 => 'put',
        2 => 43,
      ),
      4 => 
      array (
        0 => 'Illuminate\\Cache\\Repository',
        1 => 'put',
        2 => 46,
      ),
      5 => 
      array (
        0 => 'Illuminate\\Cache\\Repository',
        1 => 'forget',
        2 => 52,
      ),
      6 => 
      array (
        0 => 'Illuminate\\Cache\\Repository',
        1 => 'forget',
        2 => 53,
      ),
    ),
  ),
  'D:\\setup\\sourcecode\\package\\laravel-agent-board\\src\\Services\\AI\\AgentFactory.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\MethodWithoutImpurePointsCollector' => 
    array (
      0 => 
      array (
        0 => 'DevBridge\\AgentBoard\\Services\\AI\\AgentFactory',
        1 => 'getDefaultSystemPrompt',
        2 => 'DevBridge\\AgentBoard\\Services\\AI\\AgentFactory',
      ),
    ),
  ),
  'D:\\setup\\sourcecode\\package\\laravel-agent-board\\src\\Services\\AI\\AnthropicAgentService.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\MethodWithoutImpurePointsCollector' => 
    array (
      0 => 
      array (
        0 => 'DevBridge\\AgentBoard\\Services\\AI\\AnthropicAgentService',
        1 => 'getAgentIdentifier',
        2 => 'DevBridge\\AgentBoard\\Services\\AI\\AnthropicAgentService',
      ),
      1 => 
      array (
        0 => 'DevBridge\\AgentBoard\\Services\\AI\\AnthropicAgentService',
        1 => 'buildDefaultSystemPrompt',
        2 => 'DevBridge\\AgentBoard\\Services\\AI\\AnthropicAgentService',
      ),
    ),
  ),
  'D:\\setup\\sourcecode\\package\\laravel-agent-board\\src\\Services\\AI\\OpenAiAgentService.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\MethodWithoutImpurePointsCollector' => 
    array (
      0 => 
      array (
        0 => 'DevBridge\\AgentBoard\\Services\\AI\\OpenAiAgentService',
        1 => 'getAgentIdentifier',
        2 => 'DevBridge\\AgentBoard\\Services\\AI\\OpenAiAgentService',
      ),
      1 => 
      array (
        0 => 'DevBridge\\AgentBoard\\Services\\AI\\OpenAiAgentService',
        1 => 'buildDefaultSystemPrompt',
        2 => 'DevBridge\\AgentBoard\\Services\\AI\\OpenAiAgentService',
      ),
    ),
  ),
  'D:\\setup\\sourcecode\\package\\laravel-agent-board\\src\\Services\\AI\\Tools\\AgentTools.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\ConstructorWithoutImpurePointsCollector' => 
    array (
      0 => 'DevBridge\\AgentBoard\\Services\\AI\\Tools\\ReadFileTool',
      1 => 'DevBridge\\AgentBoard\\Services\\AI\\Tools\\WriteFileTool',
      2 => 'DevBridge\\AgentBoard\\Services\\AI\\Tools\\RunShellCommandTool',
      3 => 'DevBridge\\AgentBoard\\Services\\AI\\Tools\\SearchCodebaseTool',
    ),
    'PHPStan\\Rules\\DeadCode\\MethodWithoutImpurePointsCollector' => 
    array (
      0 => 
      array (
        0 => 'DevBridge\\AgentBoard\\Services\\AI\\Tools\\ReadFileTool',
        1 => 'getName',
        2 => 'DevBridge\\AgentBoard\\Services\\AI\\Tools\\ReadFileTool',
      ),
      1 => 
      array (
        0 => 'DevBridge\\AgentBoard\\Services\\AI\\Tools\\ReadFileTool',
        1 => 'getDescription',
        2 => 'DevBridge\\AgentBoard\\Services\\AI\\Tools\\ReadFileTool',
      ),
      2 => 
      array (
        0 => 'DevBridge\\AgentBoard\\Services\\AI\\Tools\\ReadFileTool',
        1 => 'getSchema',
        2 => 'DevBridge\\AgentBoard\\Services\\AI\\Tools\\ReadFileTool',
      ),
      3 => 
      array (
        0 => 'DevBridge\\AgentBoard\\Services\\AI\\Tools\\WriteFileTool',
        1 => 'getName',
        2 => 'DevBridge\\AgentBoard\\Services\\AI\\Tools\\WriteFileTool',
      ),
      4 => 
      array (
        0 => 'DevBridge\\AgentBoard\\Services\\AI\\Tools\\WriteFileTool',
        1 => 'getDescription',
        2 => 'DevBridge\\AgentBoard\\Services\\AI\\Tools\\WriteFileTool',
      ),
      5 => 
      array (
        0 => 'DevBridge\\AgentBoard\\Services\\AI\\Tools\\WriteFileTool',
        1 => 'getSchema',
        2 => 'DevBridge\\AgentBoard\\Services\\AI\\Tools\\WriteFileTool',
      ),
      6 => 
      array (
        0 => 'DevBridge\\AgentBoard\\Services\\AI\\Tools\\RunShellCommandTool',
        1 => 'getName',
        2 => 'DevBridge\\AgentBoard\\Services\\AI\\Tools\\RunShellCommandTool',
      ),
      7 => 
      array (
        0 => 'DevBridge\\AgentBoard\\Services\\AI\\Tools\\RunShellCommandTool',
        1 => 'getDescription',
        2 => 'DevBridge\\AgentBoard\\Services\\AI\\Tools\\RunShellCommandTool',
      ),
      8 => 
      array (
        0 => 'DevBridge\\AgentBoard\\Services\\AI\\Tools\\RunShellCommandTool',
        1 => 'getSchema',
        2 => 'DevBridge\\AgentBoard\\Services\\AI\\Tools\\RunShellCommandTool',
      ),
      9 => 
      array (
        0 => 'DevBridge\\AgentBoard\\Services\\AI\\Tools\\SearchCodebaseTool',
        1 => 'getName',
        2 => 'DevBridge\\AgentBoard\\Services\\AI\\Tools\\SearchCodebaseTool',
      ),
      10 => 
      array (
        0 => 'DevBridge\\AgentBoard\\Services\\AI\\Tools\\SearchCodebaseTool',
        1 => 'getDescription',
        2 => 'DevBridge\\AgentBoard\\Services\\AI\\Tools\\SearchCodebaseTool',
      ),
      11 => 
      array (
        0 => 'DevBridge\\AgentBoard\\Services\\AI\\Tools\\SearchCodebaseTool',
        1 => 'getSchema',
        2 => 'DevBridge\\AgentBoard\\Services\\AI\\Tools\\SearchCodebaseTool',
      ),
    ),
    'PHPStan\\Rules\\DeadCode\\PossiblyPureFuncCallCollector' => 
    array (
      0 => 
      array (
        0 => 'exec',
        1 => 121,
      ),
      1 => 
      array (
        0 => 'exec',
        1 => 159,
      ),
    ),
  ),
  'D:\\setup\\sourcecode\\package\\laravel-agent-board\\src\\Services\\Automation\\TaskAutomationService.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\PossiblyPureStaticCallCollector' => 
    array (
      0 => 
      array (
        0 => 'Illuminate\\Support\\Facades\\Event',
        1 => 'dispatch',
        2 => 70,
      ),
      1 => 
      array (
        0 => 'Illuminate\\Support\\Facades\\Event',
        1 => 'dispatch',
        2 => 93,
      ),
      2 => 
      array (
        0 => 'Illuminate\\Support\\Facades\\Event',
        1 => 'dispatch',
        2 => 99,
      ),
    ),
  ),
  'D:\\setup\\sourcecode\\package\\laravel-agent-board\\src\\Services\\Confluence\\ConfluenceService.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\MethodWithoutImpurePointsCollector' => 
    array (
      0 => 
      array (
        0 => 'DevBridge\\AgentBoard\\Services\\Confluence\\ConfluenceService',
        1 => 'getProviderName',
        2 => 'DevBridge\\AgentBoard\\Services\\Confluence\\ConfluenceService',
      ),
    ),
    'PHPStan\\Rules\\DeadCode\\PossiblyPureMethodCallCollector' => 
    array (
      0 => 
      array (
        0 => 
        array (
          0 => 'GuzzleHttp\\Client',
        ),
        1 => 'post',
        2 => 102,
      ),
      1 => 
      array (
        0 => 
        array (
          0 => 'GuzzleHttp\\Client',
        ),
        1 => 'post',
        2 => 116,
      ),
      2 => 
      array (
        0 => 
        array (
          0 => 'DevBridge\\AgentBoard\\Services\\Confluence\\ConfluenceService',
        ),
        1 => 'addComment',
        2 => 156,
      ),
      3 => 
      array (
        0 => 
        array (
          0 => 'GuzzleHttp\\Client',
        ),
        1 => 'delete',
        2 => 219,
      ),
      4 => 
      array (
        0 => 
        array (
          0 => 'DevBridge\\AgentBoard\\Services\\Confluence\\ConfluenceService',
        ),
        1 => 'connect',
        2 => 228,
      ),
    ),
  ),
  'D:\\setup\\sourcecode\\package\\laravel-agent-board\\src\\Services\\Jira\\JiraService.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\MethodWithoutImpurePointsCollector' => 
    array (
      0 => 
      array (
        0 => 'DevBridge\\AgentBoard\\Services\\Jira\\JiraService',
        1 => 'getProviderName',
        2 => 'DevBridge\\AgentBoard\\Services\\Jira\\JiraService',
      ),
    ),
    'PHPStan\\Rules\\DeadCode\\PossiblyPureMethodCallCollector' => 
    array (
      0 => 
      array (
        0 => 
        array (
          0 => 'GuzzleHttp\\Client',
        ),
        1 => 'post',
        2 => 103,
      ),
      1 => 
      array (
        0 => 
        array (
          0 => 'GuzzleHttp\\Client',
        ),
        1 => 'post',
        2 => 117,
      ),
      2 => 
      array (
        0 => 
        array (
          0 => 'DevBridge\\AgentBoard\\Services\\Jira\\JiraService',
        ),
        1 => 'addComment',
        2 => 163,
      ),
      3 => 
      array (
        0 => 
        array (
          0 => 'DevBridge\\AgentBoard\\Services\\Jira\\JiraService',
        ),
        1 => 'connect',
        2 => 243,
      ),
    ),
  ),
  'D:\\setup\\sourcecode\\package\\laravel-agent-board\\src\\Webhooks\\WebhookController.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\PossiblyPureStaticCallCollector' => 
    array (
      0 => 
      array (
        0 => 'DevBridge\\AgentBoard\\Jobs\\ProcessTaskWithAgentJob',
        1 => 'dispatch',
        2 => 82,
      ),
    ),
  ),
); },
	'dependencies' => array (
  'D:\\setup\\sourcecode\\package\\laravel-agent-board\\src\\Console\\Commands\\RunAutomationCommand.php' => 
  array (
    'fileHash' => '667a386eaa593b59083ca20e77d4b038c993cef562c575dac0a978e7136a0324',
    'dependentFiles' => 
    array (
    ),
  ),
  'D:\\setup\\sourcecode\\package\\laravel-agent-board\\src\\Console\\Commands\\SyncTasksCommand.php' => 
  array (
    'fileHash' => '27e15cbdb89529f2f4bc05d001fe96258ca2d81099bd6dd1cd7fbc03a3e483e4',
    'dependentFiles' => 
    array (
    ),
  ),
  'D:\\setup\\sourcecode\\package\\laravel-agent-board\\src\\Contracts\\AiAgentInterface.php' => 
  array (
    'fileHash' => '39d98b5a6d253f4f0629d7bebf074c52a5b40c401c1798d254369a56faf54463',
    'dependentFiles' => 
    array (
      0 => 'D:\\setup\\sourcecode\\package\\laravel-agent-board\\src\\Services\\AI\\AgentFactory.php',
      1 => 'D:\\setup\\sourcecode\\package\\laravel-agent-board\\src\\Services\\AI\\AnthropicAgentService.php',
      2 => 'D:\\setup\\sourcecode\\package\\laravel-agent-board\\src\\Services\\AI\\OpenAiAgentService.php',
      3 => 'D:\\setup\\sourcecode\\package\\laravel-agent-board\\src\\Services\\Automation\\TaskAutomationService.php',
    ),
  ),
  'D:\\setup\\sourcecode\\package\\laravel-agent-board\\src\\Contracts\\AiToolInterface.php' => 
  array (
    'fileHash' => '74d867fb5d50076541874172db13b5c9402b9e2d5f77dbda30ffdd59f82a3379',
    'dependentFiles' => 
    array (
      0 => 'D:\\setup\\sourcecode\\package\\laravel-agent-board\\src\\Contracts\\AiAgentInterface.php',
      1 => 'D:\\setup\\sourcecode\\package\\laravel-agent-board\\src\\Services\\AI\\AgentFactory.php',
      2 => 'D:\\setup\\sourcecode\\package\\laravel-agent-board\\src\\Services\\AI\\AnthropicAgentService.php',
      3 => 'D:\\setup\\sourcecode\\package\\laravel-agent-board\\src\\Services\\AI\\OpenAiAgentService.php',
      4 => 'D:\\setup\\sourcecode\\package\\laravel-agent-board\\src\\Services\\AI\\Tools\\AgentTools.php',
    ),
  ),
  'D:\\setup\\sourcecode\\package\\laravel-agent-board\\src\\Contracts\\KanbanProviderInterface.php' => 
  array (
    'fileHash' => 'f760982a6c74b1ec6b49954866f90614e62e51f4ef0d90864470ba202640f549',
    'dependentFiles' => 
    array (
      0 => 'D:\\setup\\sourcecode\\package\\laravel-agent-board\\src\\Services\\Jira\\JiraService.php',
      1 => 'D:\\setup\\sourcecode\\package\\laravel-agent-board\\src\\Webhooks\\WebhookController.php',
    ),
  ),
  'D:\\setup\\sourcecode\\package\\laravel-agent-board\\src\\Contracts\\ProjectManagementInterface.php' => 
  array (
    'fileHash' => 'c65aedb17d7caa7be889ecc5603d087a139b3f71587578bb4106a6c409b0e945',
    'dependentFiles' => 
    array (
      0 => 'D:\\setup\\sourcecode\\package\\laravel-agent-board\\src\\Console\\Commands\\RunAutomationCommand.php',
      1 => 'D:\\setup\\sourcecode\\package\\laravel-agent-board\\src\\Console\\Commands\\SyncTasksCommand.php',
      2 => 'D:\\setup\\sourcecode\\package\\laravel-agent-board\\src\\Facades\\AgentBoard.php',
      3 => 'D:\\setup\\sourcecode\\package\\laravel-agent-board\\src\\Http\\Controllers\\AutomationController.php',
      4 => 'D:\\setup\\sourcecode\\package\\laravel-agent-board\\src\\Http\\Controllers\\DashboardController.php',
      5 => 'D:\\setup\\sourcecode\\package\\laravel-agent-board\\src\\Http\\Controllers\\SettingsController.php',
      6 => 'D:\\setup\\sourcecode\\package\\laravel-agent-board\\src\\Jobs\\ProcessTaskWithAgentJob.php',
      7 => 'D:\\setup\\sourcecode\\package\\laravel-agent-board\\src\\Services\\Automation\\TaskAutomationService.php',
      8 => 'D:\\setup\\sourcecode\\package\\laravel-agent-board\\src\\Services\\Confluence\\ConfluenceService.php',
      9 => 'D:\\setup\\sourcecode\\package\\laravel-agent-board\\src\\Services\\Jira\\JiraService.php',
      10 => 'D:\\setup\\sourcecode\\package\\laravel-agent-board\\src\\Webhooks\\WebhookController.php',
    ),
  ),
  'D:\\setup\\sourcecode\\package\\laravel-agent-board\\src\\DTOs\\AgentResultDTO.php' => 
  array (
    'fileHash' => '5c4355e23b8a442645142dfbc218c9742ca3fc313142056a84f799bbdf31c617',
    'dependentFiles' => 
    array (
      0 => 'D:\\setup\\sourcecode\\package\\laravel-agent-board\\src\\Contracts\\AiAgentInterface.php',
      1 => 'D:\\setup\\sourcecode\\package\\laravel-agent-board\\src\\Events\\TaskAutomationCompleted.php',
      2 => 'D:\\setup\\sourcecode\\package\\laravel-agent-board\\src\\Events\\TaskAutomationFailed.php',
      3 => 'D:\\setup\\sourcecode\\package\\laravel-agent-board\\src\\Facades\\AgentBoard.php',
      4 => 'D:\\setup\\sourcecode\\package\\laravel-agent-board\\src\\Jobs\\ProcessTaskWithAgentJob.php',
      5 => 'D:\\setup\\sourcecode\\package\\laravel-agent-board\\src\\Monitoring\\AgentExecutionLogger.php',
      6 => 'D:\\setup\\sourcecode\\package\\laravel-agent-board\\src\\Monitoring\\TokenUsageService.php',
      7 => 'D:\\setup\\sourcecode\\package\\laravel-agent-board\\src\\Services\\AI\\AnthropicAgentService.php',
      8 => 'D:\\setup\\sourcecode\\package\\laravel-agent-board\\src\\Services\\AI\\OpenAiAgentService.php',
      9 => 'D:\\setup\\sourcecode\\package\\laravel-agent-board\\src\\Services\\Automation\\TaskAutomationService.php',
    ),
  ),
  'D:\\setup\\sourcecode\\package\\laravel-agent-board\\src\\DTOs\\ProjectDTO.php' => 
  array (
    'fileHash' => '4b2300af6b110e91e823121481dc8f2ed96f185c8136a149b482d9fd15b83071',
    'dependentFiles' => 
    array (
      0 => 'D:\\setup\\sourcecode\\package\\laravel-agent-board\\src\\Contracts\\ProjectManagementInterface.php',
      1 => 'D:\\setup\\sourcecode\\package\\laravel-agent-board\\src\\Http\\Controllers\\DashboardController.php',
      2 => 'D:\\setup\\sourcecode\\package\\laravel-agent-board\\src\\Services\\Confluence\\ConfluenceService.php',
      3 => 'D:\\setup\\sourcecode\\package\\laravel-agent-board\\src\\Services\\Jira\\JiraService.php',
    ),
  ),
  'D:\\setup\\sourcecode\\package\\laravel-agent-board\\src\\DTOs\\TaskDTO.php' => 
  array (
    'fileHash' => 'e7e1b5d73d54704aae522fbb5a6fa19cfd8c35eb00e6826fca06540e334121c1',
    'dependentFiles' => 
    array (
      0 => 'D:\\setup\\sourcecode\\package\\laravel-agent-board\\src\\Console\\Commands\\RunAutomationCommand.php',
      1 => 'D:\\setup\\sourcecode\\package\\laravel-agent-board\\src\\Console\\Commands\\SyncTasksCommand.php',
      2 => 'D:\\setup\\sourcecode\\package\\laravel-agent-board\\src\\Contracts\\AiAgentInterface.php',
      3 => 'D:\\setup\\sourcecode\\package\\laravel-agent-board\\src\\Contracts\\ProjectManagementInterface.php',
      4 => 'D:\\setup\\sourcecode\\package\\laravel-agent-board\\src\\Events\\TaskAgentAssigned.php',
      5 => 'D:\\setup\\sourcecode\\package\\laravel-agent-board\\src\\Events\\TaskAutomationCompleted.php',
      6 => 'D:\\setup\\sourcecode\\package\\laravel-agent-board\\src\\Events\\TaskAutomationFailed.php',
      7 => 'D:\\setup\\sourcecode\\package\\laravel-agent-board\\src\\Facades\\AgentBoard.php',
      8 => 'D:\\setup\\sourcecode\\package\\laravel-agent-board\\src\\Http\\Controllers\\AutomationController.php',
      9 => 'D:\\setup\\sourcecode\\package\\laravel-agent-board\\src\\Http\\Controllers\\DashboardController.php',
      10 => 'D:\\setup\\sourcecode\\package\\laravel-agent-board\\src\\Jobs\\ProcessTaskWithAgentJob.php',
      11 => 'D:\\setup\\sourcecode\\package\\laravel-agent-board\\src\\Monitoring\\AgentExecutionLogger.php',
      12 => 'D:\\setup\\sourcecode\\package\\laravel-agent-board\\src\\Monitoring\\TokenUsageService.php',
      13 => 'D:\\setup\\sourcecode\\package\\laravel-agent-board\\src\\Services\\AI\\AgentFactory.php',
      14 => 'D:\\setup\\sourcecode\\package\\laravel-agent-board\\src\\Services\\AI\\AnthropicAgentService.php',
      15 => 'D:\\setup\\sourcecode\\package\\laravel-agent-board\\src\\Services\\AI\\OpenAiAgentService.php',
      16 => 'D:\\setup\\sourcecode\\package\\laravel-agent-board\\src\\Services\\Automation\\TaskAutomationService.php',
      17 => 'D:\\setup\\sourcecode\\package\\laravel-agent-board\\src\\Services\\Confluence\\ConfluenceService.php',
      18 => 'D:\\setup\\sourcecode\\package\\laravel-agent-board\\src\\Services\\Jira\\JiraService.php',
      19 => 'D:\\setup\\sourcecode\\package\\laravel-agent-board\\src\\Webhooks\\WebhookController.php',
    ),
  ),
  'D:\\setup\\sourcecode\\package\\laravel-agent-board\\src\\Enums\\TaskPriority.php' => 
  array (
    'fileHash' => '8f2202c5370bb976aa4d1edf7a8cc12445997f76aa75d0d458a3e5ff446a837e',
    'dependentFiles' => 
    array (
      0 => 'D:\\setup\\sourcecode\\package\\laravel-agent-board\\src\\Console\\Commands\\RunAutomationCommand.php',
      1 => 'D:\\setup\\sourcecode\\package\\laravel-agent-board\\src\\Console\\Commands\\SyncTasksCommand.php',
      2 => 'D:\\setup\\sourcecode\\package\\laravel-agent-board\\src\\DTOs\\TaskDTO.php',
      3 => 'D:\\setup\\sourcecode\\package\\laravel-agent-board\\src\\Services\\AI\\AgentFactory.php',
      4 => 'D:\\setup\\sourcecode\\package\\laravel-agent-board\\src\\Services\\AI\\AnthropicAgentService.php',
      5 => 'D:\\setup\\sourcecode\\package\\laravel-agent-board\\src\\Services\\AI\\OpenAiAgentService.php',
      6 => 'D:\\setup\\sourcecode\\package\\laravel-agent-board\\src\\Services\\Confluence\\ConfluenceService.php',
    ),
  ),
  'D:\\setup\\sourcecode\\package\\laravel-agent-board\\src\\Enums\\TaskStatus.php' => 
  array (
    'fileHash' => 'e41a46cc52a1ec4d1e66b5539e2684126331ce71b4a56b05c774db1b876419dc',
    'dependentFiles' => 
    array (
      0 => 'D:\\setup\\sourcecode\\package\\laravel-agent-board\\src\\DTOs\\TaskDTO.php',
      1 => 'D:\\setup\\sourcecode\\package\\laravel-agent-board\\src\\Services\\Confluence\\ConfluenceService.php',
      2 => 'D:\\setup\\sourcecode\\package\\laravel-agent-board\\src\\Services\\Jira\\JiraService.php',
    ),
  ),
  'D:\\setup\\sourcecode\\package\\laravel-agent-board\\src\\Events\\TaskAgentAssigned.php' => 
  array (
    'fileHash' => '03100df0bbf8204c3fd7ccb08380350269cf004df88b9e1a449ceaf2c1a2d5bf',
    'dependentFiles' => 
    array (
      0 => 'D:\\setup\\sourcecode\\package\\laravel-agent-board\\src\\Services\\Automation\\TaskAutomationService.php',
    ),
  ),
  'D:\\setup\\sourcecode\\package\\laravel-agent-board\\src\\Events\\TaskAutomationCompleted.php' => 
  array (
    'fileHash' => '0ba064d2ff2be02e9daf3688001d118763714a99e0ae8fa0aa3fcb3190c16467',
    'dependentFiles' => 
    array (
      0 => 'D:\\setup\\sourcecode\\package\\laravel-agent-board\\src\\Services\\Automation\\TaskAutomationService.php',
    ),
  ),
  'D:\\setup\\sourcecode\\package\\laravel-agent-board\\src\\Events\\TaskAutomationFailed.php' => 
  array (
    'fileHash' => '92cc8f85d0f60d4450679922ecb1598611b53f636e8f1386d5e718c26f77d777',
    'dependentFiles' => 
    array (
      0 => 'D:\\setup\\sourcecode\\package\\laravel-agent-board\\src\\Services\\Automation\\TaskAutomationService.php',
    ),
  ),
  'D:\\setup\\sourcecode\\package\\laravel-agent-board\\src\\Exceptions\\AiAgentException.php' => 
  array (
    'fileHash' => '0adfe3b5a5749a749eba67e8cf61160e1730df08932668a52439c4a50242aa9d',
    'dependentFiles' => 
    array (
      0 => 'D:\\setup\\sourcecode\\package\\laravel-agent-board\\src\\Services\\AI\\AnthropicAgentService.php',
      1 => 'D:\\setup\\sourcecode\\package\\laravel-agent-board\\src\\Services\\AI\\OpenAiAgentService.php',
    ),
  ),
  'D:\\setup\\sourcecode\\package\\laravel-agent-board\\src\\Exceptions\\PmConnectionException.php' => 
  array (
    'fileHash' => 'fbdd9346e9eb21629d876d52da1a0119e130ed91ea3d826b1e9d0ce4b2dc421c',
    'dependentFiles' => 
    array (
      0 => 'D:\\setup\\sourcecode\\package\\laravel-agent-board\\src\\Services\\Confluence\\ConfluenceService.php',
      1 => 'D:\\setup\\sourcecode\\package\\laravel-agent-board\\src\\Services\\Jira\\JiraService.php',
    ),
  ),
  'D:\\setup\\sourcecode\\package\\laravel-agent-board\\src\\Exceptions\\SecurityException.php' => 
  array (
    'fileHash' => 'fd1586739716cd559db1878fae281b3715fb1f8a02c9b251587e39667582270b',
    'dependentFiles' => 
    array (
      0 => 'D:\\setup\\sourcecode\\package\\laravel-agent-board\\src\\Security\\CommandSanitizer.php',
      1 => 'D:\\setup\\sourcecode\\package\\laravel-agent-board\\src\\Services\\AI\\Tools\\AgentTools.php',
    ),
  ),
  'D:\\setup\\sourcecode\\package\\laravel-agent-board\\src\\Facades\\AgentBoard.php' => 
  array (
    'fileHash' => '00dc50342e3f1d7eacb6b9876edf8cf3a8262e06580d2634fa0c58328e80f896',
    'dependentFiles' => 
    array (
    ),
  ),
  'D:\\setup\\sourcecode\\package\\laravel-agent-board\\src\\Http\\Controllers\\AutomationController.php' => 
  array (
    'fileHash' => 'c10bffd1a5beec4b2a410f20eb5b3820045686213fcf884982278637f50cc1e2',
    'dependentFiles' => 
    array (
    ),
  ),
  'D:\\setup\\sourcecode\\package\\laravel-agent-board\\src\\Http\\Controllers\\DashboardController.php' => 
  array (
    'fileHash' => '098a95e6a6bfd838f1377afd86ed0822e66a31e5401727556c2d3ea8cf0b3653',
    'dependentFiles' => 
    array (
    ),
  ),
  'D:\\setup\\sourcecode\\package\\laravel-agent-board\\src\\Http\\Controllers\\MonitoringController.php' => 
  array (
    'fileHash' => '9fa75aa013928fb9a8f3552d08c7755199492bf57a5a99229d41915ce839e2a3',
    'dependentFiles' => 
    array (
    ),
  ),
  'D:\\setup\\sourcecode\\package\\laravel-agent-board\\src\\Http\\Controllers\\SettingsController.php' => 
  array (
    'fileHash' => '3ef426e60aaed76b9079bd97d1a6a101a8a4430fdca96bd38475374d4de56295',
    'dependentFiles' => 
    array (
    ),
  ),
  'D:\\setup\\sourcecode\\package\\laravel-agent-board\\src\\Jobs\\ProcessTaskWithAgentJob.php' => 
  array (
    'fileHash' => 'd3a45cdc4229d0a44b8c0f16abc6515af8a82389fbcb704461670e7ad06fa653',
    'dependentFiles' => 
    array (
      0 => 'D:\\setup\\sourcecode\\package\\laravel-agent-board\\src\\Console\\Commands\\RunAutomationCommand.php',
      1 => 'D:\\setup\\sourcecode\\package\\laravel-agent-board\\src\\Http\\Controllers\\AutomationController.php',
      2 => 'D:\\setup\\sourcecode\\package\\laravel-agent-board\\src\\Webhooks\\WebhookController.php',
    ),
  ),
  'D:\\setup\\sourcecode\\package\\laravel-agent-board\\src\\Monitoring\\AgentExecutionLogger.php' => 
  array (
    'fileHash' => '55c43d2370f7b5fba317f4506b5f65f5e61f83ccf306ca4997f24ae68a586a6b',
    'dependentFiles' => 
    array (
      0 => 'D:\\setup\\sourcecode\\package\\laravel-agent-board\\src\\Http\\Controllers\\MonitoringController.php',
      1 => 'D:\\setup\\sourcecode\\package\\laravel-agent-board\\src\\Services\\Automation\\TaskAutomationService.php',
    ),
  ),
  'D:\\setup\\sourcecode\\package\\laravel-agent-board\\src\\Monitoring\\TokenUsageService.php' => 
  array (
    'fileHash' => '62492c11f478f6f12482e359ce7fe73878f8c6cf022cc06759e0c97e1b52bafc',
    'dependentFiles' => 
    array (
      0 => 'D:\\setup\\sourcecode\\package\\laravel-agent-board\\src\\Http\\Controllers\\MonitoringController.php',
      1 => 'D:\\setup\\sourcecode\\package\\laravel-agent-board\\src\\Services\\Automation\\TaskAutomationService.php',
    ),
  ),
  'D:\\setup\\sourcecode\\package\\laravel-agent-board\\src\\Resilience\\CircuitBreaker.php' => 
  array (
    'fileHash' => 'c19e129108f23f0fffbb005bbc8f206f20812eb00d330d5db50e35adeae613be',
    'dependentFiles' => 
    array (
      0 => 'D:\\setup\\sourcecode\\package\\laravel-agent-board\\src\\Http\\Controllers\\MonitoringController.php',
      1 => 'D:\\setup\\sourcecode\\package\\laravel-agent-board\\src\\Services\\Confluence\\ConfluenceService.php',
      2 => 'D:\\setup\\sourcecode\\package\\laravel-agent-board\\src\\Services\\Jira\\JiraService.php',
    ),
  ),
  'D:\\setup\\sourcecode\\package\\laravel-agent-board\\src\\Security\\CommandSanitizer.php' => 
  array (
    'fileHash' => 'f3a23c7667c9cd501d601411a414499594c8abd5a233cae85714d88abf624470',
    'dependentFiles' => 
    array (
      0 => 'D:\\setup\\sourcecode\\package\\laravel-agent-board\\src\\Services\\AI\\Tools\\AgentTools.php',
    ),
  ),
  'D:\\setup\\sourcecode\\package\\laravel-agent-board\\src\\Security\\ConnectionRepository.php' => 
  array (
    'fileHash' => 'bdfd4f25243c895282f79d569f12ad8860d11e4ade9e966e037daad3d1d48a40',
    'dependentFiles' => 
    array (
      0 => 'D:\\setup\\sourcecode\\package\\laravel-agent-board\\src\\Http\\Controllers\\SettingsController.php',
    ),
  ),
  'D:\\setup\\sourcecode\\package\\laravel-agent-board\\src\\Services\\AI\\AgentFactory.php' => 
  array (
    'fileHash' => 'fc586548407073eb7bf6a712b56fb35e0a56e14cbbecb7de2f789195431bf87a',
    'dependentFiles' => 
    array (
      0 => 'D:\\setup\\sourcecode\\package\\laravel-agent-board\\src\\Services\\Automation\\TaskAutomationService.php',
    ),
  ),
  'D:\\setup\\sourcecode\\package\\laravel-agent-board\\src\\Services\\AI\\AnthropicAgentService.php' => 
  array (
    'fileHash' => '768692ab32ce10ddf7f1fb820197c05c42b3c0732db980d24fbc24c4bbbac6a4',
    'dependentFiles' => 
    array (
    ),
  ),
  'D:\\setup\\sourcecode\\package\\laravel-agent-board\\src\\Services\\AI\\OpenAiAgentService.php' => 
  array (
    'fileHash' => '34b2330464fefed182977f30bbe4233820c972f644a43e77d61ee4cfc0ab5a05',
    'dependentFiles' => 
    array (
    ),
  ),
  'D:\\setup\\sourcecode\\package\\laravel-agent-board\\src\\Services\\AI\\Tools\\AgentTools.php' => 
  array (
    'fileHash' => '13914199816fa0291081e22f321fb0df0b17dbcb94f81f215687c37f8ffae308',
    'dependentFiles' => 
    array (
      0 => 'D:\\setup\\sourcecode\\package\\laravel-agent-board\\src\\Services\\AI\\AgentFactory.php',
    ),
  ),
  'D:\\setup\\sourcecode\\package\\laravel-agent-board\\src\\Services\\Automation\\TaskAutomationService.php' => 
  array (
    'fileHash' => '8d595e4741640df77a0634256191e3b021d28ad520c554361fe638cfbe974d12',
    'dependentFiles' => 
    array (
      0 => 'D:\\setup\\sourcecode\\package\\laravel-agent-board\\src\\Console\\Commands\\RunAutomationCommand.php',
      1 => 'D:\\setup\\sourcecode\\package\\laravel-agent-board\\src\\Facades\\AgentBoard.php',
      2 => 'D:\\setup\\sourcecode\\package\\laravel-agent-board\\src\\Http\\Controllers\\AutomationController.php',
      3 => 'D:\\setup\\sourcecode\\package\\laravel-agent-board\\src\\Jobs\\ProcessTaskWithAgentJob.php',
    ),
  ),
  'D:\\setup\\sourcecode\\package\\laravel-agent-board\\src\\Services\\Confluence\\ConfluenceService.php' => 
  array (
    'fileHash' => '5756dae235dc369f62fc31ab538640f1b993788077149fe0af9d59e02dae03ee',
    'dependentFiles' => 
    array (
    ),
  ),
  'D:\\setup\\sourcecode\\package\\laravel-agent-board\\src\\Services\\Jira\\JiraService.php' => 
  array (
    'fileHash' => 'd9000a5a01f4832a79ee0a69912ae6716e3ab922b0d0a32fc8d128869b391231',
    'dependentFiles' => 
    array (
      0 => 'D:\\setup\\sourcecode\\package\\laravel-agent-board\\src\\Webhooks\\WebhookController.php',
    ),
  ),
  'D:\\setup\\sourcecode\\package\\laravel-agent-board\\src\\Webhooks\\WebhookController.php' => 
  array (
    'fileHash' => 'b58ecebe8e89a95a320762230c449a78aa92cc349495d0316b4bdb94179f5115',
    'dependentFiles' => 
    array (
    ),
  ),
),
	'exportedNodesCallback' => static function (): array { return array (
  'D:\\setup\\sourcecode\\package\\laravel-agent-board\\src\\Console\\Commands\\RunAutomationCommand.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'DevBridge\\AgentBoard\\Console\\Commands\\RunAutomationCommand',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => true,
       'extends' => 'Illuminate\\Console\\Command',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'signature',
          ),
           'phpDoc' => NULL,
           'type' => NULL,
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'description',
          ),
           'phpDoc' => NULL,
           'type' => NULL,
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => '__construct',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'automationService',
               'type' => 'DevBridge\\AgentBoard\\Services\\Automation\\TaskAutomationService',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        3 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'handle',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'int',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'D:\\setup\\sourcecode\\package\\laravel-agent-board\\src\\Console\\Commands\\SyncTasksCommand.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'DevBridge\\AgentBoard\\Console\\Commands\\SyncTasksCommand',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => true,
       'extends' => 'Illuminate\\Console\\Command',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'signature',
          ),
           'phpDoc' => NULL,
           'type' => NULL,
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'description',
          ),
           'phpDoc' => NULL,
           'type' => NULL,
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'handle',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'int',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'D:\\setup\\sourcecode\\package\\laravel-agent-board\\src\\Contracts\\AiAgentInterface.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedInterfaceNode::__set_state(array(
       'name' => 'DevBridge\\AgentBoard\\Contracts\\AiAgentInterface',
       'phpDoc' => NULL,
       'extends' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'processTask',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'DevBridge\\AgentBoard\\DTOs\\AgentResultDTO',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'task',
               'type' => 'DevBridge\\AgentBoard\\DTOs\\TaskDTO',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'tools',
               'type' => 'array',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => true,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'planTask',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'array',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'task',
               'type' => 'DevBridge\\AgentBoard\\DTOs\\TaskDTO',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'executeTool',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/** @param array<string, mixed> $parameters */',
             'namespace' => 'DevBridge\\AgentBoard\\Contracts',
             'uses' => 
            array (
              'agentresultdto' => 'DevBridge\\AgentBoard\\DTOs\\AgentResultDTO',
              'taskdto' => 'DevBridge\\AgentBoard\\DTOs\\TaskDTO',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'mixed',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'toolName',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'parameters',
               'type' => 'array',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        3 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'getAgentIdentifier',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'string',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        4 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'withSystemPrompt',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'static',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'prompt',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        5 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'withTools',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/** @param array<string, AiToolInterface> $tools */',
             'namespace' => 'DevBridge\\AgentBoard\\Contracts',
             'uses' => 
            array (
              'agentresultdto' => 'DevBridge\\AgentBoard\\DTOs\\AgentResultDTO',
              'taskdto' => 'DevBridge\\AgentBoard\\DTOs\\TaskDTO',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'static',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'tools',
               'type' => 'array',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
    )),
  ),
  'D:\\setup\\sourcecode\\package\\laravel-agent-board\\src\\Contracts\\AiToolInterface.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedInterfaceNode::__set_state(array(
       'name' => 'DevBridge\\AgentBoard\\Contracts\\AiToolInterface',
       'phpDoc' => NULL,
       'extends' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'getName',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'string',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'getDescription',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'string',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'getSchema',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/** @return array<string, mixed> */',
             'namespace' => 'DevBridge\\AgentBoard\\Contracts',
             'uses' => 
            array (
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'array',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        3 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'execute',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/** @param array<string, mixed> $parameters */',
             'namespace' => 'DevBridge\\AgentBoard\\Contracts',
             'uses' => 
            array (
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'mixed',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'parameters',
               'type' => 'array',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
    )),
  ),
  'D:\\setup\\sourcecode\\package\\laravel-agent-board\\src\\Contracts\\KanbanProviderInterface.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedInterfaceNode::__set_state(array(
       'name' => 'DevBridge\\AgentBoard\\Contracts\\KanbanProviderInterface',
       'phpDoc' => NULL,
       'extends' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'getBoardColumns',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'array',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'boardId',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'moveCard',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'bool',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'cardId',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'columnId',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'getBoards',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'array',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'projectId',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
    )),
  ),
  'D:\\setup\\sourcecode\\package\\laravel-agent-board\\src\\Contracts\\ProjectManagementInterface.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedInterfaceNode::__set_state(array(
       'name' => 'DevBridge\\AgentBoard\\Contracts\\ProjectManagementInterface',
       'phpDoc' => NULL,
       'extends' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'connect',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'bool',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'getProjects',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/** @return Collection<int, ProjectDTO> */',
             'namespace' => 'DevBridge\\AgentBoard\\Contracts',
             'uses' => 
            array (
              'projectdto' => 'DevBridge\\AgentBoard\\DTOs\\ProjectDTO',
              'taskdto' => 'DevBridge\\AgentBoard\\DTOs\\TaskDTO',
              'collection' => 'Illuminate\\Support\\Collection',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\Support\\Collection',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'getAssignedInProgressTasks',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/** @return Collection<int, TaskDTO> */',
             'namespace' => 'DevBridge\\AgentBoard\\Contracts',
             'uses' => 
            array (
              'projectdto' => 'DevBridge\\AgentBoard\\DTOs\\ProjectDTO',
              'taskdto' => 'DevBridge\\AgentBoard\\DTOs\\TaskDTO',
              'collection' => 'Illuminate\\Support\\Collection',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\Support\\Collection',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        3 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'updateTaskStatus',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'bool',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'taskId',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'status',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        4 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'addComment',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'bool',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'taskId',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'comment',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        5 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'getKanbanBoard',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'array',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'projectId',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        6 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'completeTaskByAI',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'bool',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'taskId',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'aiSummary',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        7 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'getProviderName',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'string',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
    )),
  ),
  'D:\\setup\\sourcecode\\package\\laravel-agent-board\\src\\DTOs\\AgentResultDTO.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'DevBridge\\AgentBoard\\DTOs\\AgentResultDTO',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => true,
       'extends' => NULL,
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => '__construct',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'taskId',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'success',
               'type' => 'bool',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            2 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'summary',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            3 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'artifacts',
               'type' => 'array',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => true,
               'attributes' => 
              array (
              ),
            )),
            4 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'toolCallLog',
               'type' => 'array',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => true,
               'attributes' => 
              array (
              ),
            )),
            5 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'errorMessage',
               'type' => '?string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => true,
               'attributes' => 
              array (
              ),
            )),
            6 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'confidenceScore',
               'type' => 'float',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => true,
               'attributes' => 
              array (
              ),
            )),
            7 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'tokensUsed',
               'type' => 'int',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => true,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'success',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => true,
           'returnType' => 'self',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'taskId',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'summary',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            2 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'artifacts',
               'type' => 'array',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => true,
               'attributes' => 
              array (
              ),
            )),
            3 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'toolCallLog',
               'type' => 'array',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => true,
               'attributes' => 
              array (
              ),
            )),
            4 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'tokensUsed',
               'type' => 'int',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => true,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'failure',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => true,
           'returnType' => 'self',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'taskId',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'error',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'D:\\setup\\sourcecode\\package\\laravel-agent-board\\src\\DTOs\\ProjectDTO.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'DevBridge\\AgentBoard\\DTOs\\ProjectDTO',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => true,
       'extends' => NULL,
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => '__construct',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'id',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'name',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            2 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'key',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            3 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'provider',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            4 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'description',
               'type' => '?string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => true,
               'attributes' => 
              array (
              ),
            )),
            5 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'avatarUrl',
               'type' => '?string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => true,
               'attributes' => 
              array (
              ),
            )),
            6 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'metadata',
               'type' => 'array',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => true,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'fromJiraProject',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => true,
           'returnType' => 'self',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'project',
               'type' => 'array',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'toArray',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'array',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'D:\\setup\\sourcecode\\package\\laravel-agent-board\\src\\DTOs\\TaskDTO.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'DevBridge\\AgentBoard\\DTOs\\TaskDTO',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => true,
       'extends' => NULL,
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => '__construct',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'id',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'title',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            2 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'description',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            3 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'status',
               'type' => 'DevBridge\\AgentBoard\\Enums\\TaskStatus',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            4 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'priority',
               'type' => 'DevBridge\\AgentBoard\\Enums\\TaskPriority',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            5 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'assigneeId',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            6 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'assigneeName',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            7 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'projectId',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            8 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'projectName',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            9 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'provider',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            10 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'boardId',
               'type' => '?string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => true,
               'attributes' => 
              array (
              ),
            )),
            11 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'parentTaskId',
               'type' => '?string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => true,
               'attributes' => 
              array (
              ),
            )),
            12 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'labels',
               'type' => 'array',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => true,
               'attributes' => 
              array (
              ),
            )),
            13 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'attachments',
               'type' => 'array',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => true,
               'attributes' => 
              array (
              ),
            )),
            14 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'comments',
               'type' => 'array',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => true,
               'attributes' => 
              array (
              ),
            )),
            15 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'aiAgentId',
               'type' => '?string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => true,
               'attributes' => 
              array (
              ),
            )),
            16 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'dueDate',
               'type' => '?DateTimeImmutable',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => true,
               'attributes' => 
              array (
              ),
            )),
            17 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'createdAt',
               'type' => '?DateTimeImmutable',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => true,
               'attributes' => 
              array (
              ),
            )),
            18 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'metadata',
               'type' => 'array',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => true,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'fromJiraIssue',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => true,
           'returnType' => 'self',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'issue',
               'type' => 'array',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'withAiAgent',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'self',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'agentId',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        3 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'toArray',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'array',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'D:\\setup\\sourcecode\\package\\laravel-agent-board\\src\\Enums\\TaskPriority.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedEnumNode::__set_state(array(
       'name' => 'DevBridge\\AgentBoard\\Enums\\TaskPriority',
       'scalarType' => 'string',
       'phpDoc' => NULL,
       'implements' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedEnumCaseNode::__set_state(array(
           'name' => 'CRITICAL',
           'value' => '\'critical\'',
           'phpDoc' => NULL,
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedEnumCaseNode::__set_state(array(
           'name' => 'HIGH',
           'value' => '\'high\'',
           'phpDoc' => NULL,
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedEnumCaseNode::__set_state(array(
           'name' => 'MEDIUM',
           'value' => '\'medium\'',
           'phpDoc' => NULL,
        )),
        3 => 
        \PHPStan\Dependency\ExportedNode\ExportedEnumCaseNode::__set_state(array(
           'name' => 'LOW',
           'value' => '\'low\'',
           'phpDoc' => NULL,
        )),
        4 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'fromString',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => true,
           'returnType' => 'self',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'priority',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'D:\\setup\\sourcecode\\package\\laravel-agent-board\\src\\Enums\\TaskStatus.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedEnumNode::__set_state(array(
       'name' => 'DevBridge\\AgentBoard\\Enums\\TaskStatus',
       'scalarType' => 'string',
       'phpDoc' => NULL,
       'implements' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedEnumCaseNode::__set_state(array(
           'name' => 'TODO',
           'value' => '\'todo\'',
           'phpDoc' => NULL,
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedEnumCaseNode::__set_state(array(
           'name' => 'IN_PROGRESS',
           'value' => '\'in_progress\'',
           'phpDoc' => NULL,
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedEnumCaseNode::__set_state(array(
           'name' => 'IN_REVIEW',
           'value' => '\'in_review\'',
           'phpDoc' => NULL,
        )),
        3 => 
        \PHPStan\Dependency\ExportedNode\ExportedEnumCaseNode::__set_state(array(
           'name' => 'AI_COMPLETED',
           'value' => '\'ai_completed\'',
           'phpDoc' => NULL,
        )),
        4 => 
        \PHPStan\Dependency\ExportedNode\ExportedEnumCaseNode::__set_state(array(
           'name' => 'DEVELOPER_REVIEW',
           'value' => '\'developer_review\'',
           'phpDoc' => NULL,
        )),
        5 => 
        \PHPStan\Dependency\ExportedNode\ExportedEnumCaseNode::__set_state(array(
           'name' => 'DONE',
           'value' => '\'done\'',
           'phpDoc' => NULL,
        )),
        6 => 
        \PHPStan\Dependency\ExportedNode\ExportedEnumCaseNode::__set_state(array(
           'name' => 'BLOCKED',
           'value' => '\'blocked\'',
           'phpDoc' => NULL,
        )),
        7 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'fromJira',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => true,
           'returnType' => 'self',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'jiraStatus',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        8 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'label',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'string',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        9 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'color',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'string',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'D:\\setup\\sourcecode\\package\\laravel-agent-board\\src\\Events\\TaskAgentAssigned.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'DevBridge\\AgentBoard\\Events\\TaskAgentAssigned',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => true,
       'extends' => NULL,
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => '__construct',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'task',
               'type' => 'DevBridge\\AgentBoard\\DTOs\\TaskDTO',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'agentId',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            2 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'assignedAt',
               'type' => 'DateTimeImmutable',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => true,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'D:\\setup\\sourcecode\\package\\laravel-agent-board\\src\\Events\\TaskAutomationCompleted.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'DevBridge\\AgentBoard\\Events\\TaskAutomationCompleted',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => true,
       'extends' => NULL,
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => '__construct',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'task',
               'type' => 'DevBridge\\AgentBoard\\DTOs\\TaskDTO',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'result',
               'type' => 'DevBridge\\AgentBoard\\DTOs\\AgentResultDTO',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            2 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'completedAt',
               'type' => 'DateTimeImmutable',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => true,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'D:\\setup\\sourcecode\\package\\laravel-agent-board\\src\\Events\\TaskAutomationFailed.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'DevBridge\\AgentBoard\\Events\\TaskAutomationFailed',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => true,
       'extends' => NULL,
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => '__construct',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'task',
               'type' => 'DevBridge\\AgentBoard\\DTOs\\TaskDTO',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'result',
               'type' => 'DevBridge\\AgentBoard\\DTOs\\AgentResultDTO',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            2 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'failedAt',
               'type' => 'DateTimeImmutable',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => true,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'D:\\setup\\sourcecode\\package\\laravel-agent-board\\src\\Exceptions\\AiAgentException.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'DevBridge\\AgentBoard\\Exceptions\\AiAgentException',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => true,
       'extends' => 'RuntimeException',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'D:\\setup\\sourcecode\\package\\laravel-agent-board\\src\\Exceptions\\PmConnectionException.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'DevBridge\\AgentBoard\\Exceptions\\PmConnectionException',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => true,
       'extends' => 'RuntimeException',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => '__construct',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'provider',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'reason',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            2 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'code',
               'type' => 'int',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => true,
               'attributes' => 
              array (
              ),
            )),
            3 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'previous',
               'type' => '?Throwable',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => true,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'D:\\setup\\sourcecode\\package\\laravel-agent-board\\src\\Exceptions\\SecurityException.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'DevBridge\\AgentBoard\\Exceptions\\SecurityException',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => true,
       'extends' => 'RuntimeException',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'D:\\setup\\sourcecode\\package\\laravel-agent-board\\src\\Facades\\AgentBoard.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'DevBridge\\AgentBoard\\Facades\\AgentBoard',
       'phpDoc' => 
      \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
         'phpDocString' => '/**
 * @method static array runAutomationCycle(ProjectManagementInterface $provider)
 * @method static AgentResultDTO processTask(TaskDTO $task, ProjectManagementInterface $provider)
 * @method static Collection planTasks(Collection $tasks)
 *
 * @see TaskAutomationService
 */',
         'namespace' => 'DevBridge\\AgentBoard\\Facades',
         'uses' => 
        array (
          'projectmanagementinterface' => 'DevBridge\\AgentBoard\\Contracts\\ProjectManagementInterface',
          'agentresultdto' => 'DevBridge\\AgentBoard\\DTOs\\AgentResultDTO',
          'taskdto' => 'DevBridge\\AgentBoard\\DTOs\\TaskDTO',
          'taskautomationservice' => 'DevBridge\\AgentBoard\\Services\\Automation\\TaskAutomationService',
          'collection' => 'Illuminate\\Support\\Collection',
          'facade' => 'Illuminate\\Support\\Facades\\Facade',
        ),
         'constUses' => 
        array (
        ),
      )),
       'abstract' => false,
       'final' => true,
       'extends' => 'Illuminate\\Support\\Facades\\Facade',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'getFacadeAccessor',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => false,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => true,
           'returnType' => 'string',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'D:\\setup\\sourcecode\\package\\laravel-agent-board\\src\\Http\\Controllers\\AutomationController.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'DevBridge\\AgentBoard\\Http\\Controllers\\AutomationController',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => true,
       'extends' => 'Illuminate\\Routing\\Controller',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => '__construct',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'automationService',
               'type' => 'DevBridge\\AgentBoard\\Services\\Automation\\TaskAutomationService',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'dispatch',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\Http\\JsonResponse',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'request',
               'type' => 'Illuminate\\Http\\Request',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'dispatchTask',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\Http\\JsonResponse',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'request',
               'type' => 'Illuminate\\Http\\Request',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'provider',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            2 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'taskId',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        3 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'plan',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\Http\\JsonResponse',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'request',
               'type' => 'Illuminate\\Http\\Request',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'D:\\setup\\sourcecode\\package\\laravel-agent-board\\src\\Http\\Controllers\\DashboardController.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'DevBridge\\AgentBoard\\Http\\Controllers\\DashboardController',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => true,
       'extends' => 'Illuminate\\Routing\\Controller',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'index',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\View\\View',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'projects',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\Http\\JsonResponse',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'provider',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'kanban',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\Http\\JsonResponse',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'provider',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'projectId',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        3 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'inProgressTasks',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\Http\\JsonResponse',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'provider',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        4 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'moveTask',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\Http\\JsonResponse',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'request',
               'type' => 'Illuminate\\Http\\Request',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'provider',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            2 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'taskId',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'D:\\setup\\sourcecode\\package\\laravel-agent-board\\src\\Http\\Controllers\\MonitoringController.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'DevBridge\\AgentBoard\\Http\\Controllers\\MonitoringController',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => true,
       'extends' => 'Illuminate\\Routing\\Controller',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => '__construct',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'logger',
               'type' => 'DevBridge\\AgentBoard\\Monitoring\\AgentExecutionLogger',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'tokenUsage',
               'type' => 'DevBridge\\AgentBoard\\Monitoring\\TokenUsageService',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            2 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'circuitBreaker',
               'type' => 'DevBridge\\AgentBoard\\Resilience\\CircuitBreaker',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'index',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\View\\View',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'stats',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\Http\\JsonResponse',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'request',
               'type' => 'Illuminate\\Http\\Request',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        3 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'costs',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\Http\\JsonResponse',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        4 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'circuitBreaker',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\Http\\JsonResponse',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        5 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'resetCircuit',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\Http\\JsonResponse',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'service',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'D:\\setup\\sourcecode\\package\\laravel-agent-board\\src\\Http\\Controllers\\SettingsController.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'DevBridge\\AgentBoard\\Http\\Controllers\\SettingsController',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => true,
       'extends' => 'Illuminate\\Routing\\Controller',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => '__construct',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'connections',
               'type' => 'DevBridge\\AgentBoard\\Security\\ConnectionRepository',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'index',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\View\\View',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'testConnection',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\Http\\JsonResponse',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'provider',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        3 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'update',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\Http\\JsonResponse',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'request',
               'type' => 'Illuminate\\Http\\Request',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'D:\\setup\\sourcecode\\package\\laravel-agent-board\\src\\Jobs\\ProcessTaskWithAgentJob.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'DevBridge\\AgentBoard\\Jobs\\ProcessTaskWithAgentJob',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => true,
       'extends' => NULL,
       'implements' => 
      array (
        0 => 'Illuminate\\Contracts\\Queue\\ShouldQueue',
      ),
       'usedTraits' => 
      array (
        0 => 'Illuminate\\Foundation\\Bus\\Dispatchable',
        1 => 'Illuminate\\Queue\\InteractsWithQueue',
        2 => 'Illuminate\\Bus\\Queueable',
        3 => 'Illuminate\\Queue\\SerializesModels',
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'tries',
          ),
           'phpDoc' => NULL,
           'type' => 'int',
           'public' => true,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'timeout',
          ),
           'phpDoc' => NULL,
           'type' => 'int',
           'public' => true,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => '__construct',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'task',
               'type' => 'DevBridge\\AgentBoard\\DTOs\\TaskDTO',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'providerClass',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        3 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'handle',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'void',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'automationService',
               'type' => 'DevBridge\\AgentBoard\\Services\\Automation\\TaskAutomationService',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        4 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'failed',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'void',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'exception',
               'type' => 'Throwable',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        5 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'backoff',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'array',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'D:\\setup\\sourcecode\\package\\laravel-agent-board\\src\\Monitoring\\AgentExecutionLogger.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'DevBridge\\AgentBoard\\Monitoring\\AgentExecutionLogger',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => true,
       'extends' => NULL,
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'logStart',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'int',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'task',
               'type' => 'DevBridge\\AgentBoard\\DTOs\\TaskDTO',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'agentId',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'logComplete',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'void',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'logId',
               'type' => 'int',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'result',
               'type' => 'DevBridge\\AgentBoard\\DTOs\\AgentResultDTO',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'getRecentRuns',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'array',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'limit',
               'type' => 'int',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => true,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        3 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'getStats',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'array',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'period',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => true,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'D:\\setup\\sourcecode\\package\\laravel-agent-board\\src\\Monitoring\\TokenUsageService.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'DevBridge\\AgentBoard\\Monitoring\\TokenUsageService',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => true,
       'extends' => NULL,
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'record',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'void',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'task',
               'type' => 'DevBridge\\AgentBoard\\DTOs\\TaskDTO',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'result',
               'type' => 'DevBridge\\AgentBoard\\DTOs\\AgentResultDTO',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            2 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'model',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'getMonthlyCost',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'float',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'getCostByProject',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'array',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        3 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'getDashboardSummary',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'array',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'D:\\setup\\sourcecode\\package\\laravel-agent-board\\src\\Resilience\\CircuitBreaker.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'DevBridge\\AgentBoard\\Resilience\\CircuitBreaker',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => true,
       'extends' => NULL,
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'isOpen',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'bool',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'service',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'recordSuccess',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'void',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'service',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'recordFailure',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'void',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'service',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        3 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'reset',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'void',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'service',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        4 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'getFailureCount',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'int',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'service',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        5 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'getStatus',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'array',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'services',
               'type' => 'array',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'D:\\setup\\sourcecode\\package\\laravel-agent-board\\src\\Security\\CommandSanitizer.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'DevBridge\\AgentBoard\\Security\\CommandSanitizer',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => true,
       'extends' => NULL,
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'validate',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'void',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'command',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'isSafe',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'bool',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'command',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'D:\\setup\\sourcecode\\package\\laravel-agent-board\\src\\Security\\ConnectionRepository.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'DevBridge\\AgentBoard\\Security\\ConnectionRepository',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => true,
       'extends' => NULL,
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'store',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'void',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'provider',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'credentials',
               'type' => 'array',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'get',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => '?array',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'provider',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'markConnected',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'void',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'provider',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        3 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'deactivate',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'void',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'provider',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        4 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'hasCredentials',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'bool',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'provider',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'D:\\setup\\sourcecode\\package\\laravel-agent-board\\src\\Services\\AI\\AgentFactory.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'DevBridge\\AgentBoard\\Services\\AI\\AgentFactory',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => true,
       'extends' => NULL,
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => '__construct',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'baseAgent',
               'type' => 'DevBridge\\AgentBoard\\Contracts\\AiAgentInterface',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'config',
               'type' => 'array',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'createForTask',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'DevBridge\\AgentBoard\\Contracts\\AiAgentInterface',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'task',
               'type' => 'DevBridge\\AgentBoard\\DTOs\\TaskDTO',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'registerProfile',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'void',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'label',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'profile',
               'type' => 'array',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'D:\\setup\\sourcecode\\package\\laravel-agent-board\\src\\Services\\AI\\AnthropicAgentService.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'DevBridge\\AgentBoard\\Services\\AI\\AnthropicAgentService',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => true,
       'extends' => NULL,
       'implements' => 
      array (
        0 => 'DevBridge\\AgentBoard\\Contracts\\AiAgentInterface',
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => '__construct',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'config',
               'type' => 'array',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'processTask',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'DevBridge\\AgentBoard\\DTOs\\AgentResultDTO',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'task',
               'type' => 'DevBridge\\AgentBoard\\DTOs\\TaskDTO',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'tools',
               'type' => 'array',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => true,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'planTask',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'array',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'task',
               'type' => 'DevBridge\\AgentBoard\\DTOs\\TaskDTO',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        3 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'executeTool',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'mixed',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'toolName',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'parameters',
               'type' => 'array',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        4 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'getAgentIdentifier',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'string',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        5 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'withSystemPrompt',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'static',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'prompt',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        6 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'withTools',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'static',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'tools',
               'type' => 'array',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'D:\\setup\\sourcecode\\package\\laravel-agent-board\\src\\Services\\AI\\OpenAiAgentService.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'DevBridge\\AgentBoard\\Services\\AI\\OpenAiAgentService',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => true,
       'extends' => NULL,
       'implements' => 
      array (
        0 => 'DevBridge\\AgentBoard\\Contracts\\AiAgentInterface',
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => '__construct',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'config',
               'type' => 'array',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'processTask',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'DevBridge\\AgentBoard\\DTOs\\AgentResultDTO',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'task',
               'type' => 'DevBridge\\AgentBoard\\DTOs\\TaskDTO',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'tools',
               'type' => 'array',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => true,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'planTask',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'array',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'task',
               'type' => 'DevBridge\\AgentBoard\\DTOs\\TaskDTO',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        3 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'executeTool',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'mixed',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'toolName',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'parameters',
               'type' => 'array',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        4 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'getAgentIdentifier',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'string',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        5 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'withSystemPrompt',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'static',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'prompt',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        6 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'withTools',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'static',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'tools',
               'type' => 'array',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'D:\\setup\\sourcecode\\package\\laravel-agent-board\\src\\Services\\AI\\Tools\\AgentTools.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'DevBridge\\AgentBoard\\Services\\AI\\Tools\\ReadFileTool',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => true,
       'extends' => NULL,
       'implements' => 
      array (
        0 => 'DevBridge\\AgentBoard\\Contracts\\AiToolInterface',
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => '__construct',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'config',
               'type' => 'array',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'getName',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'string',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'getDescription',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'string',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        3 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'getSchema',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'array',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        4 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'execute',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'mixed',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'parameters',
               'type' => 'array',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
    1 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'DevBridge\\AgentBoard\\Services\\AI\\Tools\\WriteFileTool',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => true,
       'extends' => NULL,
       'implements' => 
      array (
        0 => 'DevBridge\\AgentBoard\\Contracts\\AiToolInterface',
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => '__construct',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'config',
               'type' => 'array',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'getName',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'string',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'getDescription',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'string',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        3 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'getSchema',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'array',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        4 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'execute',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'mixed',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'parameters',
               'type' => 'array',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
    2 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'DevBridge\\AgentBoard\\Services\\AI\\Tools\\RunShellCommandTool',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => true,
       'extends' => NULL,
       'implements' => 
      array (
        0 => 'DevBridge\\AgentBoard\\Contracts\\AiToolInterface',
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => '__construct',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'config',
               'type' => 'array',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'getName',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'string',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'getDescription',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'string',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        3 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'getSchema',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'array',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        4 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'execute',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'mixed',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'parameters',
               'type' => 'array',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
    3 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'DevBridge\\AgentBoard\\Services\\AI\\Tools\\SearchCodebaseTool',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => true,
       'extends' => NULL,
       'implements' => 
      array (
        0 => 'DevBridge\\AgentBoard\\Contracts\\AiToolInterface',
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => '__construct',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'config',
               'type' => 'array',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'getName',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'string',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'getDescription',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'string',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        3 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'getSchema',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'array',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        4 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'execute',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'mixed',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'parameters',
               'type' => 'array',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'D:\\setup\\sourcecode\\package\\laravel-agent-board\\src\\Services\\Automation\\TaskAutomationService.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'DevBridge\\AgentBoard\\Services\\Automation\\TaskAutomationService',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => true,
       'extends' => NULL,
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => '__construct',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'baseAgent',
               'type' => 'DevBridge\\AgentBoard\\Contracts\\AiAgentInterface',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'logger',
               'type' => 'DevBridge\\AgentBoard\\Monitoring\\AgentExecutionLogger',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            2 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'tokenUsage',
               'type' => 'DevBridge\\AgentBoard\\Monitoring\\TokenUsageService',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            3 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'config',
               'type' => 'array',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'runAutomationCycle',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'array',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'provider',
               'type' => 'DevBridge\\AgentBoard\\Contracts\\ProjectManagementInterface',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'processTask',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'DevBridge\\AgentBoard\\DTOs\\AgentResultDTO',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'task',
               'type' => 'DevBridge\\AgentBoard\\DTOs\\TaskDTO',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'provider',
               'type' => 'DevBridge\\AgentBoard\\Contracts\\ProjectManagementInterface',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        3 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'planTasks',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\Support\\Collection',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'tasks',
               'type' => 'Illuminate\\Support\\Collection',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'D:\\setup\\sourcecode\\package\\laravel-agent-board\\src\\Services\\Confluence\\ConfluenceService.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'DevBridge\\AgentBoard\\Services\\Confluence\\ConfluenceService',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => true,
       'extends' => NULL,
       'implements' => 
      array (
        0 => 'DevBridge\\AgentBoard\\Contracts\\ProjectManagementInterface',
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => '__construct',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'config',
               'type' => 'array',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'circuitBreaker',
               'type' => 'DevBridge\\AgentBoard\\Resilience\\CircuitBreaker',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'connect',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'bool',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'getProjects',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\Support\\Collection',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        3 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'getAssignedInProgressTasks',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\Support\\Collection',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        4 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'updateTaskStatus',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'bool',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'taskId',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'status',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        5 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'addComment',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'bool',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'taskId',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'comment',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        6 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'getKanbanBoard',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'array',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'projectId',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        7 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'completeTaskByAI',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'bool',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'taskId',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'aiSummary',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        8 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'getProviderName',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'string',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'D:\\setup\\sourcecode\\package\\laravel-agent-board\\src\\Services\\Jira\\JiraService.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'DevBridge\\AgentBoard\\Services\\Jira\\JiraService',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => true,
       'extends' => NULL,
       'implements' => 
      array (
        0 => 'DevBridge\\AgentBoard\\Contracts\\KanbanProviderInterface',
        1 => 'DevBridge\\AgentBoard\\Contracts\\ProjectManagementInterface',
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => '__construct',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'config',
               'type' => 'array',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'circuitBreaker',
               'type' => 'DevBridge\\AgentBoard\\Resilience\\CircuitBreaker',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'connect',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'bool',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'getProjects',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\Support\\Collection',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        3 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'getAssignedInProgressTasks',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\Support\\Collection',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        4 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'updateTaskStatus',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'bool',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'taskId',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'status',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        5 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'addComment',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'bool',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'taskId',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'comment',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        6 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'getKanbanBoard',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'array',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'projectId',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        7 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'completeTaskByAI',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'bool',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'taskId',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'aiSummary',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        8 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'getProviderName',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'string',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        9 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'getBoardColumns',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'array',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'boardId',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        10 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'moveCard',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'bool',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'cardId',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'columnId',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        11 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'getBoards',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'array',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'projectId',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'D:\\setup\\sourcecode\\package\\laravel-agent-board\\src\\Webhooks\\WebhookController.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'DevBridge\\AgentBoard\\Webhooks\\WebhookController',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => true,
       'extends' => 'Illuminate\\Routing\\Controller',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'jira',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\Http\\JsonResponse',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'request',
               'type' => 'Illuminate\\Http\\Request',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'confluence',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\Http\\JsonResponse',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'request',
               'type' => 'Illuminate\\Http\\Request',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
); },
];
