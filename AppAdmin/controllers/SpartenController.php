<?php
/**
 * Controller-Klasse, die das Backend steuert
 *
 * PHP version 5
 *
 * @category  Kreditrechner
 * @package   Controller
 * @author    Thomas Mueller <thomas.mueller@unister-gmbh.de>
 * @copyright 2007-2010 Unister GmbH
 * @version   SVN: $Id$
 */

/**
 * Controller-Klasse, die das Backend steuert
 *
 * @category  Kreditrechner
 * @package   Controller
 * @author    Thomas Mueller <thomas.mueller@unister-gmbh.de>
 * @copyright 2007-2010 Unister GmbH
 */
class KreditAdmin_SpartenController extends KreditCore_Controller_AdminAbstract
{
    /**
     * indexAction-Methode wird aufgerufen wenn keine Action angegeben wurde
     *
     * @return void
     */
    public function indexAction()
    {
        $modelApplications = new \App\Model\Sparten();

        $pageNumber = $this->_getParam('page', 1, 'Int');
        $select     = $modelApplications->select();

        if (null !== $select) {
            $paginatorAdapter = new Zend_Paginator_Adapter_DbSelect(
                $select->order('name')
            );

            $this->createPagination($paginatorAdapter, $pageNumber);
        }

        $this->view->headTitle('Sparten', 'PREPEND');
    }

    /**
     * Action zur Bearbeitung einer Sparte
     *
     * @return void
     */
    public function editAction()
    {
        $sparte = 0;

        //idCategories is set in update form
        // -> prefer idCategories
        if (isset($this->_requestData['idCategories'])) {
            $sparte = $this->_getParam('idCategories', 0, 'Int');
        } elseif (isset($this->_requestData['sparte'])) {
            $sparte = $this->_getParam('sparte', 0, 'Int');
        }

        $model = new \App\Model\Sparten();
        $form  = $this->_getForm();

        $row = $this->getEditedRow($model, $sparte);

        if ($this->getRequest()->isPost()
            && false !== $this->getRequest()->getParam('submit', false)
        ) {
            if ($form->isValid($this->getRequest()->getParams())) {
                if ($sparte > 0) {
                     $model->update($form->getValues(), 'idCategories = ' . $sparte);
                } else {
                    $values = $form->getValues();
                    unset($values['idCategories']);
                    $model->insert($values);
                }

                $this->_redirector->gotoSimple(
                    'index',
                    'categories',
                    'kredit-admin'
                );
                return;
            }
        } else {
            $form->populate($row->toArray());
        }

        $this->view->form = $form;

        $this->view->headTitle('Sparte bearbeiten', 'PREPEND');
    }

    /**
     * Action zum Aktivieren/Deaktivieren einer Sparte
     *
     * @return void
     */
    public function activateAction()
    {
        if (!$this->_request->isGet() && !$this->_request->isPost()) {
            $this->broker('header')->setErrorHeaders();

            return;
        }

        $sparte = (int) $this->_getParam('sparte', 0, 'Int');

        if (0 < $sparte) {
            $active = (boolean) $this->_getParam('aktiv', 1, 'Int');
            $active = 1 - (int) $active;

            $model = new \App\Model\Sparten();
            $model->update(array('active' => $active), 'idCategories = ' . $sparte);
        }

        $this->_redirector->gotoSimple(
            'index',
            'categories',
            'kredit-admin'
        );
    }

    /**
     * @return Zend_Form
     */
    private function _getForm()
    {
        // Liste aller Laufzeiten erstellen
        $laufzeitModel = new \App\Model\Laufzeit();
        $select        = $laufzeitModel->select()->order('value');
        $oLaufzeiten   = $laufzeitModel->fetchAll($select);
        $laufzeiten    = array(0 => 'bitte w�hlen');

        foreach ($oLaufzeiten as $aktLaufzeit) {
            $laufzeiten[$aktLaufzeit->laufzeit_id] = $aktLaufzeit->name;
        }

        // Form laden
        $front     = \Zend\Controller\Front::getInstance();
        $basePath  = $front->getModuleDirectory('kredit-admin');

        $config = new \Zend\Config\Ini(
            $basePath . '/configs/forms/sparte.ini',
            'form'
        );
        $form   = new Zend_Form($config);

        // Kampagnen
        $defaultLaufzeit = $form->getElement('defaultLaufzeit');
        $defaultLaufzeit->setMultiOptions($laufzeiten);

        return $form;
    }
}