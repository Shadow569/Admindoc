<?php


namespace Infocube\Admindoc\Controller\Adminhtml\Index;


use Magento\Backend\App\Action;
use Magento\Framework\View\Result\PageFactory;

/****************************************************************************************************
 * Class Index
 * @package Infocube\Admindoc\Controller\Adminhtml\Index
 *
 * This controller class renders the infocube documentation page
 * into the admin panel
 */
class Index extends Action
{
    /* The attribute will hold the page to be rendered. */
    protected $_pageFactory;

    /****************************************************************************
     * Index constructor.
     * @param Action\Context $context
     * @param PageFactory $page
     *
     * The constructor retrieves the classes that the controller depends on and
     * uses them appropriately to the page factory attribute and to construct
     * the parent class using the current context.
     */
    public function __construct(Action\Context $context, PageFactory $page)
    {
        $this->_pageFactory = $page;
        parent::__construct($context);
    }


    /*****************************************************************************
     * @return \Magento\Framework\App\ResponseInterface|\Magento\Framework\Controller\ResultInterface|\Magento\Framework\View\Result\Page
     *
     * This method runs when the controller is instantiated successfully and called by another process and it will
     * render the resulting page.
     */
    public function execute()
    {
        return $resultPage = $this->_pageFactory->create();
    }
}
