<?php

class ShootingController extends FrontController
{

    /**
     * Initialize controller
     * @see FrontController::init()
     */
    public function init()
    {
        parent::init();
    }

    /**
     * Assign template vars related to page content
     * @see FrontController::initContent()
     */
    public function initContent()
    {
        parent::initContent();
		
        $this->setTemplate('zamounda/shooting.tpl'); // themes/theme_current/templates/zamounda.tpl
    }

}