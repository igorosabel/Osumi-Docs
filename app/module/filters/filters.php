<?php declare(strict_types=1);
class filters extends OModule {
	/**
	 * Página de Filtros
	 *
	 * @url /es/filtros
	 * @param ORequest $req Request object with method, headers, parameters and filters used
	 * @return void
	 */
	public function esFilters(ORequest $req): void {
		$this->getTemplate()->addComponent('header', 'common/header', ['page' => 'filters', 'lang' => 'es']);
		$this->getTemplate()->addComponent('menu',   'common/menu',   ['page' => 'filters', 'lang' => 'es']);
		$this->getTemplate()->addComponent('footer', 'common/footer');
		$this->getTemplate()->setTitle('Osumi Framework - Filtros');
	}

	/**
	 * Página de Filtros (inglés)
	 *
	 * @url /en/filters
	 * @param ORequest $req Request object with method, headers, parameters and filters used
	 * @return void
	 */
	public function enFilters(ORequest $req): void {
		$this->getTemplate()->addComponent('header', 'common/header', ['page' => 'filters', 'lang' => 'en']);
		$this->getTemplate()->addComponent('menu',   'common/menu',   ['page' => 'filters', 'lang' => 'en']);
		$this->getTemplate()->addComponent('footer', 'common/footer');
		$this->getTemplate()->setTitle('Osumi Framework - Filters');
	}

	/**
	 * Página de Filtros (euskara)
	 *
	 * @url /eu/filtroak
	 * @param ORequest $req Request object with method, headers, parameters and filters used
	 * @return void
	 */
	public function euFilters(ORequest $req): void {
		$this->getTemplate()->addComponent('header', 'common/header', ['page' => 'filters', 'lang' => 'eu']);
		$this->getTemplate()->addComponent('menu',   'common/menu',   ['page' => 'filters', 'lang' => 'eu']);
		$this->getTemplate()->addComponent('footer', 'common/footer');
		$this->getTemplate()->setTitle('Osumi Framework - Filtroak');
	}
}