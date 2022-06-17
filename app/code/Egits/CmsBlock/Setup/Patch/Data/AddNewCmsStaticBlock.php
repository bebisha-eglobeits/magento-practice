<?php

/**

 * @author TheOnlineHelper

 * @package Egits_CmsBlock

 */

 

namespace Egits\CmsBlock\Setup\Patch\Data;

 

use Magento\Framework\Setup\Patch\DataPatchInterface;

use Magento\Framework\Setup\Patch\PatchVersionInterface;

use Magento\Framework\Setup\ModuleDataSetupInterface;

use Magento\Cms\Model\BlockFactory;

/**

 * Class AddNewCmsStaticBlock

 * @package Rbj\CmsBlock\Setup\Patch\Data

 */

class AddNewCmsStaticBlock implements DataPatchInterface, PatchVersionInterface

{

    /**

    * @var ModuleDataSetupInterface

    */

    private $moduleDataSetup;

 

    /**

    * @var BlockFactory

    */

    private $blockFactory;

 

    /**

    * AddAccessViolationPageAndAssignB2CCustomers constructor.

    * @param ModuleDataSetupInterface $moduleDataSetup

    * @param PageFactory $blockFactory

    */

    public function __construct(

        ModuleDataSetupInterface $moduleDataSetup,

        BlockFactory $blockFactory

    ) {

        $this->moduleDataSetup = $moduleDataSetup;

        $this->blockFactory = $blockFactory;

    }

 

    /**

    * {@inheritdoc}

    */

    public function apply()

    {

        $newCmsStaticBlock = [

            'title' => 'Example CMS Block',

            'identifier' => 'example-cms-block',

            'content' => '<div class="cms-block">Added a CMS Block Programmatically</div>',

            'is_active' => 1,

            'stores' => \Magento\Store\Model\Store::DEFAULT_STORE_ID

        ];

 

        $this->moduleDataSetup->startSetup();

 

        /** @var \Magento\Cms\Model\Block $block */

        $block = $this->blockFactory->create();

        $block->setData($newCmsStaticBlock)->save();

 

        $this->moduleDataSetup->endSetup();

    }

 

    /**

    * {@inheritdoc}

    */

    public static function getDependencies()

    {

        return [];

    }

 

    /**

    * {@inheritdoc}

    */

    public static function getVersion()

    {

        return '2.4.4';

    }

 

    /**

    * {@inheritdoc}

    */

    public function getAliases()

    {

        return [];

    }

}

