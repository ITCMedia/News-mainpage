<?php
	// Новости
	if (Core::moduleIsActive('informationsystem'))
	{
		$Informationsystem_Controller_Show = new Informationsystem_Controller_Show(
			Core_Entity::factory('Informationsystem', 1)
		);
		$Informationsystem_Controller_Show
			->xsl(
				Core_Entity::factory('Xsl')->getByName('СписокНовостейНаГлавной')
			)
			->groupsMode('none')
			->itemsForbiddenTags(array('text'))
			->group(FALSE)
			->limit(2)
			->show();
	}
?>