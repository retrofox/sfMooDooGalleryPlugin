<?php

/**
 * mgGallery actions.
 *
 * @package    magic
 * @subpackage mgGallery
 * @author     Damian Suarez
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class mgGalleryActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {
    $this->mg_gallerys = Doctrine::getTable('MGGallery')
      ->createQuery('a')
      ->execute();
  }

  public function executeNew(sfWebRequest $request)
  {
    $this->form = new MGGalleryForm();
  }

  public function executeCreate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST));

    $this->form = new MGGalleryForm();

    $this->processForm($request, $this->form);

    $this->setTemplate('new');
  }

  public function executeEdit(sfWebRequest $request)
  {
    $this->forward404Unless($mg_gallery = Doctrine::getTable('MGGallery')->find(array($request->getParameter('id'))), sprintf('Object mg_gallery does not exist (%s).', $request->getParameter('id')));
    $this->form = new MGGalleryForm($mg_gallery);
  }

  public function executeUpdate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
    $this->forward404Unless($mg_gallery = Doctrine::getTable('MGGallery')->find(array($request->getParameter('id'))), sprintf('Object mg_gallery does not exist (%s).', $request->getParameter('id')));
    $this->form = new MGGalleryForm($mg_gallery);

    $this->processForm($request, $this->form);

    $this->setTemplate('edit');
  }

  public function executeDelete(sfWebRequest $request)
  {
    $request->checkCSRFProtection();

    $this->forward404Unless($mg_gallery = Doctrine::getTable('MGGallery')->find(array($request->getParameter('id'))), sprintf('Object mg_gallery does not exist (%s).', $request->getParameter('id')));
    $mg_gallery->delete();

    $this->redirect('mgGallery/index');
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $mg_gallery = $form->save();

      $this->redirect('mgGallery/edit?id='.$mg_gallery->getId());
    }
  }
}
