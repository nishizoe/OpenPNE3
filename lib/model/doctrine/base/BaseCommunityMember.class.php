<?php

/**
 * This class has been auto-generated by the Doctrine ORM Framework
 */
abstract class BaseCommunityMember extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('community_member');
        $this->hasColumn('id', 'integer', 4, array('type' => 'integer', 'primary' => true, 'autoincrement' => true, 'length' => '4'));
        $this->hasColumn('community_id', 'integer', 4, array('type' => 'integer', 'notnull' => true, 'length' => '4'));
        $this->hasColumn('member_id', 'integer', 4, array('type' => 'integer', 'notnull' => true, 'length' => '4'));
        $this->hasColumn('position', 'string', 32, array('type' => 'string', 'default' => '', 'length' => '32'));

        $this->option('charset', 'utf8');
    }

    public function setUp()
    {
        $this->hasOne('Community', array('local' => 'community_id',
                                         'foreign' => 'id'));

        $this->hasOne('Member', array('local' => 'member_id',
                                      'foreign' => 'id'));
    }
}