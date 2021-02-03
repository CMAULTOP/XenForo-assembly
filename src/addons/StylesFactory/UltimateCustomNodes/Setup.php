<?php

namespace StylesFactory\UltimateCustomNodes;

use XF\AddOn\AbstractSetup;
use XF\Db\Schema\Alter;

class Setup extends AbstractSetup
{
    public function install(array $stepParams = [])
    {
        $sm = $this->schemaManager();

        $sm->alterTable('xf_node', function(Alter $table)
        {
            $table->addColumn('new_icon', 'text')->nullable()->setDefault('NULL');
            $table->addColumn('font_icon', 'text')->nullable()->setDefault('NULL');
            $table->addColumn('svg_bg', 'text')->nullable()->setDefault('NULL');
        });
    }

    public function upgrade(array $stepParams = [])
    {
        $sm = $this->schemaManager();

        $sm->alterTable('xf_node', function(Alter $table)
        {
            $table->addColumn('font_icon', 'text')->nullable()->setDefault('NULL');
            $table->addColumn('svg_bg', 'text')->nullable()->setDefault('NULL');
        });	
    }
	
    public function upgrade12873918223Step1()
    {
        $sm = $this->schemaManager();

        $sm->alterTable('xf_node', function(Alter $table)
        {
            $table->addColumn('font_icon', 'text')->nullable()->setDefault('NULL');
            $table->addColumn('svg_bg', 'text')->nullable()->setDefault('NULL');
        });	
    }	

    public function upgrade146050953Step2()
    {
        $sm = $this->schemaManager();

        $sm->alterTable('xf_node', function(Alter $table)
        {
            $table->dropColumns(array('svg_width'));
            $table->dropColumns(array('svg_height'));
        });	
    }    


    public function uninstall(array $stepParams = [])
    {
        $sm = $this->schemaManager();

        $sm->alterTable('xf_node', function(Alter $table)
        {
            $table->dropColumns(array('new_icon'));
            $table->dropColumns(array('font_icon'));
            $table->dropColumns(array('svg_width'));
            $table->dropColumns(array('svg_height'));
            $table->dropColumns(array('svg_bg'));			
        });
    }
}