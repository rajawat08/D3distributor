<?php 

class UploadsController extends BaseController {

	/*************************************************************************
    * Instantiate a new DocumentsController instance.
    * 
    **************************************************************************/
	public function __construct() {
		// Authentication filter 
		$this->beforeFilter('auth');
		
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function postIndex()
	{
		//echo 12345;
		$upload_handler = new UploadHandler();
	}

	

}