<?php

/**
 * Copyright (C) 2005-2009 OpenPNE Project
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *  http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

/**
 * Member form.
 *
 * @package    form
 * @subpackage member
 * @version    SVN: $Id: sfPropelFormTemplate.php 6174 2007-11-27 06:22:40Z fabien $
 */
class MemberForm extends BaseMemberForm
{
  public function configure()
  {
    $this->setWidgets(array(
      'name' => new sfWidgetFormInput(),
    ));

    $this->setValidators(array(
      'name' => new sfValidatorString(array('max_length' => 64, 'trim' => true)),
    ));

    $this->widgetSchema->setNameFormat('member[%s]');
    $this->widgetSchema->getFormFormatter()->setTranslationCatalogue('form_member');
  }

  protected function doSave($con = null)
  {
    if ($this->isNew()) {
      $this->object->setIsActive(false);
    }

    parent::doSave($con);
  }
}
