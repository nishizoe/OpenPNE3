<?php

/**
 * This class has been auto-generated by the Doctrine ORM Framework
 */
abstract class BaseProfileOption extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('profile_option');
        $this->hasColumn('id', 'integer', 4, array('type' => 'integer', 'primary' => true, 'autoincrement' => true, 'length' => '4'));
        $this->hasColumn('profile_id', 'integer', 4, array('type' => 'integer', 'notnull' => true, 'length' => '4'));
        $this->hasColumn('value', 'string', 2147483647, array('type' => 'string', 'length' => '2147483647'));
        $this->hasColumn('sort_order', 'integer', 4, array('type' => 'integer', 'length' => '4'));

        $this->option('charset', 'utf8');
    }

    public function setUp()
    {
        $this->hasOne('Profile', array('local' => 'profile_id',
                                       'foreign' => 'id'));

        $this->hasMany('MemberProfile', array('local' => 'id',
                                              'foreign' => 'profile_option_id'));

        $i18n0 = new Doctrine_Template_I18n(array('fields' => array(0 => 'value'), 'length' => '5'));
        $this->actAs($i18n0);
    }
}