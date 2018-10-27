<?php

class m181026_095146_omg_work_default_roles extends \yupe\db\Migration
{
    use \amylabs\rbac\MigrationTrait;

    public function up()
    {
        $auth = $this->getAuthManager();

        $admin = $auth->getRole('admin');

        $superManager = $this->createRole('omg.work.manage-all', 'Управление контентом');
        $workManager = $this->createRole('omg.work.manage-work', 'Управление проектами');

        $auth->addChild($admin, $superManager);
        $auth->addChild($superManager, $workManager);
    }

    public function down()
    {
        $this->dropRole('omg.work.manage-all');
        $this->dropRole('omg.work.manage-work');
    }
}
