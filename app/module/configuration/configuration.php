<?php declare(strict_types=1);
class configuration extends OModule {
	/**
	 * Página de Configuración
	 *
	 * @url /es/configuracion
	 * @param ORequest $req Request object with method, headers, parameters and filters used
	 * @return void
	 */
	public function esConfiguration(ORequest $req): void {
		$this->getTemplate()->addPartial('header', 'common/header', ['page' => 'configuration', 'lang' => 'es']);
		$this->getTemplate()->addPartial('menu',   'common/menu',   ['page' => 'configuration', 'lang' => 'es']);
		$this->getTemplate()->addPartial('footer', 'common/footer');
		$this->getTemplate()->setTitle('Osumi Framework - Configuración');
	}

	/**
	 * Página de Configuración (inglés)
	 *
	 * @url /en/configuration
	 * @param ORequest $req Request object with method, headers, parameters and filters used
	 * @return void
	 */
	public function enConfiguration(ORequest $req): void {
		$this->getTemplate()->addPartial('header', 'common/header', ['page' => 'configuration', 'lang' => 'en']);
		$this->getTemplate()->addPartial('menu',   'common/menu',   ['page' => 'configuration', 'lang' => 'en']);
		$this->getTemplate()->addPartial('footer', 'common/footer');
		$this->getTemplate()->setTitle('Osumi Framework - Configuration');
	}

	/**
	 * Página de Configuración (euskara)
	 *
	 * @url /eu/konfigurazioa
	 * @param ORequest $req Request object with method, headers, parameters and filters used
	 * @return void
	 */
	public function euConfiguration(ORequest $req): void {
		$this->getTemplate()->addPartial('header', 'common/header', ['page' => 'configuration', 'lang' => 'eu']);
		$this->getTemplate()->addPartial('menu',   'common/menu',   ['page' => 'configuration', 'lang' => 'eu']);
		$this->getTemplate()->addPartial('footer', 'common/footer');
		$this->getTemplate()->setTitle('Osumi Framework - Konfigurazioa');
	}
}