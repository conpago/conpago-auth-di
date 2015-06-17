<?php
	/**
	 * Created by PhpStorm.
	 * User: Bartosz Gołek
	 * Date: 2014-06-30
	 * Time: 23:04
	 */

	namespace Conpago\Auth;

	use Conpago\DI\IContainerBuilder;
	use Conpago\DI\IModule;

	class AuthModule implements IModule
	{
		public function build(IContainerBuilder $builder)
		{
			$builder
				->registerType('Conpago\Auth\Session')
				->asA('Conpago\Auth\Contract\ISession');

			$builder
				->registerType('Conpago\Auth\SessionManager')
				->asA('Conpago\Auth\Contract\ISessionManager');
		}
	}
