<?php

/**
 * This class has been auto-generated by the Doctrine ORM Framework
 */
abstract class BaseFile extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('file');
        $this->hasColumn('id', 'integer', 4, array('type' => 'integer', 'primary' => true, 'autoincrement' => true, 'length' => '4'));
        $this->hasColumn('name', 'string', 64, array('type' => 'string', 'default' => '', 'notnull' => true, 'length' => '64'));
        $this->hasColumn('type', 'string', 64, array('type' => 'string', 'default' => '', 'notnull' => true, 'length' => '64'));
        $this->hasColumn('original_filename', 'string', 2147483647, array('type' => 'string', 'length' => '2147483647'));

        $this->option('charset', 'utf8');
    }

    public function setUp()
    {
        $this->hasOne('FileBin', array('local' => 'id',
                                       'foreign' => 'file_id'));

        $this->hasMany('Community', array('local' => 'id',
                                          'foreign' => 'file_id'));

        $this->hasMany('MemberImage', array('local' => 'id',
                                            'foreign' => 'file_id'));

        $timestampable0 = new Doctrine_Template_Timestampable();
        $this->actAs($timestampable0);
    }
}