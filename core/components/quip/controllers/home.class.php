<?php
/**
 * Quip
 *
 * Copyright 2010-11 by Shaun McCormick <shaun+quip@modx.com>
 *
 * This file is part of Quip, a simple commenting component for MODx Revolution.
 *
 * Quip is free software; you can redistribute it and/or modify it under the
 * terms of the GNU General Public License as published by the Free Software
 * Foundation; either version 2 of the License, or (at your option) any later
 * version.
 *
 * Quip is distributed in the hope that it will be useful, but WITHOUT ANY
 * WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR
 * A PARTICULAR PURPOSE. See the GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License along with
 * Quip; if not, write to the Free Software Foundation, Inc., 59 Temple Place,
 * Suite 330, Boston, MA 02111-1307 USA
 *
 * @package quip
 */
class QuipHomeManagerController extends QuipManagerController {

    public function process(array $scriptProperties = array()) {
        
    }
    public function getPageTitle() { return $this->modx->lexicon('quip'); }
    public function loadCustomCssJs() {
        $this->addJavascript($this->quip->config['jsUrl'].'widgets/comments.grid.js');
        $this->addJavascript($this->quip->config['jsUrl'].'widgets/threads.panel.js');
        $this->addLastJavascript($this->quip->config['jsUrl'].'sections/home.js');
        $this->addHtml("<script>Ext.onReady(function() { MODx.load({xtype: 'quip-page-home'}) })</script>");
    }
    public function getTemplateFile() { return $this->quip->config['templatesPath'].'home.tpl'; }
}