<?php


namespace Egits\CmsPage\Setup\Patch\Data;

use Magento\Cms\Model\PageFactory;
use Magento\Framework\Setup\ModuleDataSetupInterface;
use Magento\Framework\Setup\Patch\DataPatchInterface;

class CmsPage implements DataPatchInterface
{
    /**
     * ModuleDataSetupInterface
     *
     * @var ModuleDataSetupInterface
     */
    private $moduleDataSetup;

    /**
     * @var PageFactory
     */
    private $pageFactory;

    /**
     * @param ModuleDataSetupInterface $moduleDataSetup
     * @param PageFactory $pageFactory
     */
    public function __construct(
        ModuleDataSetupInterface $moduleDataSetup,
        PageFactory $pageFactory
    ) {
        $this->moduleDataSetup = $moduleDataSetup;
        $this->pageFactory = $pageFactory;
    }

    /**
     * {@inheritdoc}
     */
    public function apply()
    {

        $pageData = [
            'title' => 'Bebisha Custom CMS Page', // cms page title
            'page_layout' => '1column', // cms page layout
            'meta_keywords' => 'RH Cms Meta Keywords', // cms page meta keywords
            'meta_description' => 'RH Cms Meta Description', // cms page meta description
            'identifier' => 'custom_cms_page', // cms page identifier
            'content_heading' => 'Bebisha Custom CMS Page', // cms page content heading
            'content' => '<h1>Bebisha Custom Cms Page Content</h1> <img src="{{media url="wysiwyg/nature.jpg"}}"; >' ,// cms page content
            'layout_update_xml' => '', // cms page layout xml
            'url_key' => 'custom_cms_page', // cms page url key
            'is_active' => 1, // status enabled or disabled
            'stores' => [0, 1], // You can set store id single or multiple values in array.
            'sort_order' => 0, // cms page sort order
        ];

        $this->moduleDataSetup->startSetup();
        $this->pageFactory->create()->setData($pageData)->save();
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
    public function getAliases()
    {
        return [];
    }
}