<?php

namespace App\Presenters;

use Nette;


class HomepagePresenter extends <% if (basePresenter) { %>BasePresenter<% } else { %>Nette\Application\UI\Presenter<% } %>
{<% if (multilanguage) { %>
	/**
	 * @persistent
	 */
	public $locale;

	/**
	 * @inject
	 * @var \Kdyby\Translation\Translator
	 */
	public $translator;


	public function beforeRender()
	{
		parent::beforeRender();
		$this->template->locale = $this->locale;
	}
<% } %>
}
